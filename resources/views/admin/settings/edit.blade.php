@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="/css/admin.css">
    <!-- include summernote css/js -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
@stop

@section('content_header')

    @include('layouts.flash-message')

    <h1>Edit setting : {{ $setting->title }}</h1>

@stop

@section('content')
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::model($setting, ['route' => ['settings.update', $setting->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}

                    @include('admin.settings.fields', ['action' => 'edit'])

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
    <script src="{{ asset('js/admin_create.js') }}"></script>
@stop