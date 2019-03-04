{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('content_header')
    @include('layouts.flash-message')

    <h1>@yield('title')</h1>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin.css">
    <!-- include summernote css/js -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
@stop

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
    <script src="{{ asset('js/admin_create.js') }}"></script>
    @yield('inner_js')
@stop