@extends('layouts.admin')

@section('title', 'Update attribute')
@section('h1_title', 'Update attribute')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            {{Form::open(['method'  => 'DELETE', 'route' => ['attributes.destroy', $attribute->id], 'id' => 'form_del'])}}
            {{Form::close()}}
            <div class="form-group">

                <input type="submit" form="form_del" class="btn btn-danger delete-confirm" value="Delete attribute">
            </div>

            {!! Form::model($attribute, ['route' => ['attributes.update', $attribute->id], 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
            <div class="row">

                @include('admin.attributes.fields', ['action' => 'Update'])

            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection