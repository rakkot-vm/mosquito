@extends('layouts.admin')

@section('title', 'Edit product')
@section('h1_title', 'Edit product : ' .$product->title)

@section('content')
    {!! Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}
    <div class="row">

        @include('admin.products.fields', ['action' => 'Update'])

    </div>
    {!! Form::close() !!}
@endsection