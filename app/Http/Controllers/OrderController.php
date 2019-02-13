<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderStatusRequest;
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
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
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();

        return redirect(route('orders.index'));
    }

    public function changeStatus(OrderStatusRequest $request, $id)
    {
        $order->update(['status' => $request->status]);
        return back();
    }

    public function get()
    {

    }


    var $order = '{
                "client" : {
                    "f_name" : "Client name",
                    "l_name" : "Client soname",
                    "phone" : "66666666",
                    "email" : "client@email.com",
                    "land" : "Bavaria",
                    "index" : "061",
                    "city" : "Berlin",
                    "street" : "central",
                    "house" : "65",
                    "type" : ""     //string физ.лицо или компания
                },
                "products" : [
                    {
                        "id" : "<products_id>",
                        "count" : "<count_of_this_product>",
                        "attributes" : {
                            "<attr_id>" : "value_id",
                            "<attr_id>" : "value_id"
                        },
                        "adds" : {
                            "weight" : "",      //int - mm
                            "height" : "",      //int - mm
                            "deep" : "",        //int - mm
                            "holes" : "1",      // 1 or 0
                        },
                    },
                ],
                "amount" : "100500",
                "order_id" : "<order_id>"
    }';
}
