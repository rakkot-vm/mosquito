@extends('adminlte::page')

@section('title', 'Products')
@section('content_header')
    <h1>Create new product</h1>
@stop

@section('content')
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::model($data['product'], ['route' => 'products.store', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}

                    @include('admin.products.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection