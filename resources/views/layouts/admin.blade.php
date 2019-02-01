{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="/css/admin.css">
    <!-- include summernote css/js -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
@stop

@section('js')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
    <script src="{{ asset('js/admin_create.js') }}"></script>
@stop