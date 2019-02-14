<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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

    public function calcAmount(string $products_json): int
    {
        $products = json_decode($products_json, true);

        $amount = 0;
        foreach($products as $product){
            $model_product = Product::findOrFail($product['id']);

            $amount += !empty($model_product->price) ? $model_product->price : 0;

            foreach ($product['attributes'] as $attr_id => $value_id){
                $model_attr = Attribute::findOrFail($attr_id);
                $model_value = AttributeValue::findOrFail($value_id);

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

            foreach ($order_product['attributes'] as $attr_id => $value_id){
                $model_attr = Attribute::findOrFail($attr_id);
                $model_value = AttributeValue::findOrFail($value_id);

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
}
