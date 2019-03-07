@extends('layouts.admin')

@section('title', 'Create text')
@section('h1_title', 'Create text')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            {!! Form::model($text, ['route' => 'texts.store', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
                <div class="row">

                    @include('admin.texts._fields', ['action' => 'Save'])

                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection