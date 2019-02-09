@extends('layouts.admin')

@section('title', 'Create attribute')
@section('h1_title', 'Create attribute')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            {!! Form::model($attribute, ['route' => 'attributes.store', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
                <div class="row">

                    @include('admin.attributes.fields', ['action' => 'Save'])

                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection