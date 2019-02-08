@extends('layouts.admin')

@section('title', 'Create product')
@section('h1_title', 'Create product')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            {!! Form::model($product, ['route' => 'products.store', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
                <div class="row">

                    @include('admin.products.fields', ['action' => 'Save'])

                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection