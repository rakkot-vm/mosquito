<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderStatusRequest;
use App\Http\Requests\OrderStoreRequest;
use App\Order;
use Illuminate\Http\Request;

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

        $order->save();

        return response('{"status":"OK","client_key":"'.$intent->client_secret.'"');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        $products = json_decode($order->products_json, true);
        return view('admin.orders.show', compact('order', 'products'));
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

    public function calc(OrderStatusRequest $request)
    {
        return response()->json(['amount' => (new Order)->calcAmount($request->products_json)]);
    }

    public function confirm(Request $request)
    {
        $order = Order::where('payment', $request->client_key)->get()->first();

        $order->stripeCheck($request->client_key);
        dd($order);
//        $order = Order::findOrFail($id);
//        $order->update(['status' => $request->status]);
        return back();
    }


}