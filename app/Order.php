<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Stripe\PaymentIntent;
use Stripe\Stripe;

class Order extends Model
{

    protected $fillable = [
        'status',
        'email',
        'amount',
        'first_name',
        'last_name',
        'phone',
        'land',
        'index',
        'city',
        'street',
        'house',
        'client_type',
    ];

    public function calcAmount(string $products_json): float
    {
        $products = json_decode($products_json, true);

        $amount = 0;
        foreach($products as $product){
            $model_product = Product::findOrFail($product['id']);

            $amount += !empty($model_product->price) ? $model_product->price : 0;

            foreach ($product['attributes'] as $attr_id => $attr){
                $model_attr = Attribute::findOrFail($attr[0]);
                $model_value = AttributeValue::findOrFail($attr[1]);

                $amount += !empty($model_attr->price) ? $model_attr->price : 0;
                $amount += !empty($model_value->price) ? $model_value->price : 0;
            }
        }

        return $amount;
    }

    public function convertProductsJsonToOrder(string $order_products_json) : string
    {
        $order_products = json_decode($order_products_json, true);

        foreach($order_products as &$order_product){
            $model_product = Product::findOrFail($order_product['id']);
            $order_product['title'] = $model_product->title;

            foreach ($order_product['attributes'] as $attr_id => $attr){
                $model_attr = Attribute::findOrFail($attr[0]);
                $model_value = AttributeValue::findOrFail($attr[1]);

                unset($order_product['attributes'][$attr_id]);

                $order_product['attributes'][] = [
                    'title' => $model_attr->title,
                    'id' => $model_attr->id,
                    'value' => [
                        'title' => $model_value->title,
                        'id' => $model_value->id,
                        'price' => $model_value->price,
                        ]
                ];
            }

            $order_product['attributes'] = array_values($order_product['attributes']);
        }


        return json_encode($order_products);
    }

    public function stripePay() : PaymentIntent
    {
        $secret_key = Setting::where('title', 'stripe_secret_key')->get()->first()->value;
        $currency = Setting::where('title', 'currency')->get()->first()->value;

        Stripe::setApiKey($secret_key);

        $intent = PaymentIntent::create([
            "amount" => $this->amount*100,
            "currency" => $currency,
            "allowed_source_types" => ["card"],
        ]);

        return $intent;
    }

    public function stripeCheck() : bool
    {
        $secret_key = Setting::where('title', 'stripe_secret_key')->get()->first()->value;

        \Stripe\Stripe::setApiKey($secret_key);

        $intent = \Stripe\PaymentIntent::retrieve($this->payment);

        if($intent->status == "succeeded" && ($intent->amount/100) == $this->amount){
            return true;
        }
    }
}