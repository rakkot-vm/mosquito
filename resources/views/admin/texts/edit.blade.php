@extends('layouts.admin')

@section('title', 'Edit text')
@section('h1_title', 'Edit text : ' .$text->title)

@section('content')
    {{Form::open(['method'  => 'DELETE', 'route' => ['texts.destroy', $text->id], 'id' => 'form_del'])}}
    {{Form::close()}}
    <div class="form-group">

        <input type="submit" form="form_del" class="btn btn-danger delete-confirm" value="Delete text">
    </div>


    {!! Form::model($text, ['route' => ['texts.update', $text->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}
    <div class="row">

        @include('admin.texts._fields', ['action' => 'Update' ])

    </div>
    {!! Form::close() !!}

@endsection