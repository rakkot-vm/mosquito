@extends('layouts.admin')

@section('title', 'Create attribute value')
@section('h1_title', 'Create attribute value')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            {!! Form::model($attributeValue, ['route' => 'attributeValues.store', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
                <div class="row">

                    @include('admin.attributeValues.fields', ['action' => 'Save'])

                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection