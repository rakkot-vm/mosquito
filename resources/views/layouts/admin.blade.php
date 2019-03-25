{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('content_header')
    @include('layouts.flash-message')

    <h1>@yield('title')</h1>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin.css">
    <!-- include summernote css/js -->
    {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">--}}
    <link rel="stylesheet" href="/js/sceditor/minified/themes/default.min.css" />
@stop

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
    <script src="{{ asset('js/admin_create.js') }}"></script>

    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=',
        };
    </script>

    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script>
        $('.text-editor').ckeditor(options);
    </script>

    @yield('inner_js')
@stop