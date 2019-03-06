@extends('layouts.admin')

@section('title', 'Create page')
@section('h1_title', 'Create page')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            {!! Form::model($page, ['route' => 'pages.store', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
                <div class="row">

                    @include('admin.pages._fields', ['action' => 'Save'])

                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection