<?php

namespace App\Http\Controllers;

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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
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
