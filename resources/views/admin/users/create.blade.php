@extends('layouts.admin')

@section('title', 'Create user')
@section('h1_title', 'Create user')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            {!! Form::model($user, ['route' => 'users.store', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
                <div class="row">

                    @include('admin.users.fields', ['action' => 'Save'])

                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection