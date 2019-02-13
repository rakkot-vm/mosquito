@extends('layouts.admin')

@section('title', 'order : '. $order->id)
@section('h1_title', 'order : '. $order->id)

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">

                <div class="box-header with-border">
                    {{ Form::open(['method'  => 'DELETE', 'route' => ['orders.destroy', $order->id], 'id' => 'form_del']) }}
                    {{ Form::close() }}

                    <div class="form-group-inline">
                        {{Form::open(['method'  => 'PATCH', 'route' => route('orders.changeStatus', ['id' => $order->id]), 'class' => 'pull-left'])}}
                            {{ Form::select('status', ['paid' =>'paid','canceled' =>'canceled', 'completed' =>'completed'], $order->status, ['class' => 'form-control pull-left', 'style' => 'width:100px;'] ) }}
                            <input type="submit" class="btn btn-success mr-l-10" value="Change status">
                        {{Form::close()}}

                        <input type="submit" form="form_del" class="btn btn-danger delete-confirm pull-left mr-l-10" value="Delete order">
                    </div>
                </div>
                <div class="box-body  with-border">
                    <div class="row">
                        <div class="col-xs-12 col-lg-4">
                            <p><strong>Order id: </strong> {{ $order->order_id }}</p>
                        </div>
                        <div class="col-xs-12 col-lg-4">
                            <p><strong>Amount:</strong> {{ $order->amount }}</p>
                        </div>
                        <div class="col-xs-12 col-lg-4">
                            <p><strong>Client type: </strong> {{ $order->client_type }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-lg-4">
                            <p><strong>Created at: </strong> {{ $order->created_at }}</p>
                        </div>
                        <div class="col-xs-12 col-lg-4">
                            <p><strong>Updated at: </strong> {{ $order->updated_at }}</p>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-xs-12 col-lg-4">
                            <p><strong>First name:</strong> {{ $order->first_name }}</p>
                            <p><strong>Last name:</strong> {{ $order->last_name }}</p>
                            <p><strong>Phone:</strong> {{ $order->phone }}</p>
                            <p><strong>Email: </strong> {{ $order->email }}</p>
                        </div>
                        <div class="col-xs-12 col-lg-4">
                            <p><strong>Land: </strong> {{ $order->land }}</p>
                            <p><strong>Index: </strong> {{ $order->index }}</p>
                            <p><strong>City: </strong> {{ $order->city }}</p>
                            <p><strong>Street: </strong> {{ $order->street }}</p>
                            <p><strong>House: </strong> {{ $order->house }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @foreach($products as $key => $product)
        <div class="col-xs-12 col-sm-6 col-lg-4 ">
            <div class="box">

                <div class="box-header with-border">
                    <h3>Product: {{$key+1}}</h3>
                </div>
                <div class="box-body  with-border">
                    <div class="row">

                        <div class="col-xs-6">
                            <p><strong>Title: </strong> {{ $product['title'] }}</p>
                            <p><strong>Count: </strong> {{ $product['count'] }}</p>

                            <div class="row">
                                <div class="col-xs-12"><p><strong>Attributes: </strong></p></div>
                                @foreach($product['attributes'] as $attribute)
                                    <div class="col-xs-12">
                                        <div class="col-xs-12">
                                            <p><strong>{{$attribute['title']}}: </strong> {{ $attribute['value']['price'] . ' ' . $attribute['value']['title']}}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="col-xs-6">
                            <div class="row">
                                <div class="col-xs-12"><p><strong>Additional info: </strong></p></div>
                                @foreach($product['adds'] as $key => $add)
                                    <div class="col-xs-12">
                                        <div class="col-xs-12"><p><strong>{{$key}}: </strong>{{$add}}</p></div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
@endsection
