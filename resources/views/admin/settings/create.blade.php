@extends('layouts.admin')

@section('content_header')
    <h1>Create new setting</h1>
@stop

@section('content')
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::model([], ['route' => 'settings.store', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}

                    @include('admin.settings.fields', ['action' => 'save'])

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection