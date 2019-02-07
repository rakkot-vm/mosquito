@extends('adminlte::page')

@section('title', 'Products')
@section('h1_title', 'Edit product : Edit product : <a href="'. route('admin/products', $product->id) .'">'. $product->title .'</a>')

@section('content_header')
    <h1>Edit product : <a href="{!! route('admin/products', $product->id) !!}">{{ $product->title }}</a></h1>
@stop

@section('content')
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::model($data['product'], ['route' => ['products.update', $data['product']->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}

                    @include('admin.products.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection