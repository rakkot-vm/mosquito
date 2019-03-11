<?php

namespace App\Http\Controllers;

use App\Http\Requests\Order\OrderCalcRequest;
use App\Http\Requests\Order\OrderConfirmRequest;
use App\Http\Requests\Order\OrderStatusRequest;
use App\Http\Requests\Order\OrderStoreRequest;
use App\Mail\OrderSuccessEmail;
use App\Order;
use Illuminate\Support\Facades\Mail;
use App\Setting;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return view('admin.orders.index', compact('orders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrderStoreRequest $request)
    {
        $order = new Order();
        $order->fill($request->all());
        $order->products_json = $order->convertProductsJsonToOrder($request->products_json);
        $order->status = 'not paid';

        $intent = $order->stripePay();
        $order->payment = $intent->id;
        $order->amount = $request->amount;

        $order->save();

        return response()->json(['client_key' => $intent->client_secret]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        $settings = Setting::where('title','currency')
            ->get()
            ->pluck('value', 'title');
        $products = json_decode($order->products_json, true);
        return view('admin.orders.show', compact('order', 'products', 'settings'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();

        return redirect(route('orders.index'));
    }

    public function changeStatus(OrderStatusRequest $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->update(['status' => $request->status]);
        return back();
    }

    public function calcProduct(OrderCalcRequest $request)
    {
        $product = json_decode($request->products_json, true);
        return response()->json(['amount' => (new Order)->calcAmount($product)]);
    }

    public function calcAllProducts(OrderCalcRequest $request)
    {
        $products = json_decode($request->products_json, true);
        return response()->json(['amount' => (new Order)->calcAmountAll($products)]);
    }

    public function confirm(OrderConfirmRequest $request)
    {
        $order = Order::where('payment', $request->payment_id)->get()->first();
        if(empty($order)) return response()->json(['status'=>'error']);

        if($order->stripeCheck($request->payment_id)){
            $order->update(['status' => 'paid']);
        }else{
            $order->update(['status' => 'error']);
            return response()->json(['status'=>'error']);
        }

        $this->orderMail($order);
        return response()->json(['status'=>'OK']);
    }

    private function orderMail($order)
    {
        $objDemo = new \stdClass();
        $objDemo->receiver = 'ReceiverUserName';

        Mail::to("valet89@i.ua")->send(new OrderSuccessEmail($objDemo));
    }


}