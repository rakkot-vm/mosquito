@extends('layouts.admin')

@section('title', 'Edit setting : '. $setting->title)
@section('h1_title', 'Edit setting : '. $setting->title)

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