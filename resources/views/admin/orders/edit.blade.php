@extends('layouts.admin')

@section('title', 'Edit order')
@section('h1_title', 'Edit order : ' .$order->title)

@section('content')
    {!! Form::model($order, ['route' => ['orders.update', $order->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}
    <div class="row">

        @include('admin.orders.fields', ['action' => 'Update'])

    </div>
    {!! Form::close() !!}
@endsection