@extends('layouts.admin')

@section('title', 'Update attribute value')
@section('h1_title', 'Update attribute value')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            {!! Form::model($attributeValue, ['route' => ['attributeValues.update', $attributeValue->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}
            <div class="row">

                @include('admin.attributeValues.fields', ['action' => 'Update'])

            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection