@extends('layouts.admin')

@section('title', 'Edit product')
@section('h1_title', 'Edit product : ' .$page->title)

@section('content')
    {{Form::open(['method'  => 'DELETE', 'route' => ['pages.destroy', $page->id], 'id' => 'form_del'])}}
    {{Form::close()}}
    <div class="form-group">

        <input type="submit" form="form_del" class="btn btn-danger delete-confirm" value="Delete page">
    </div>


    {!! Form::model($page, ['route' => ['pages.update', $page->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}
    <div class="row">

        @include('admin.pages._fields', ['action' => 'Update' ])

    </div>
    {!! Form::close() !!}

@endsection