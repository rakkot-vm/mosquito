@extends('layouts.admin')

@section('title', 'General settings')
@section('h1_title', 'General settings')

@section('content')
    <div class="content">

        <section class="sec_logo box">
            <h3>Logo</h3>

            @foreach($settings as $key => $setting)
            <div class="row">
            {!! Form::model($setting, ['route' => ['general.update'], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}

                <div class="col-sm-4">
                    {!! Form::label($setting->title, ucfirst($setting->title)) !!}
                    <div class="form-group gori">
                        <input class="form-control" name="value" type="text" value="{{ $setting->value }}">
                        <input name="title" type="hidden" value="{{ $setting->title }}">
                    </div>

                    <div class="form-group">
                        <input type="submit" value="save" class="btn btn-primary">
                    </div>
                </div>

            {!! Form::close() !!}
            </div>
            @endforeach
        </section>

        {{--<section class="sec_logo box">--}}
            {{--<h3>Email</h3>--}}

            {{--@foreach($settings_email as $key => $setting)--}}
            {{--<div class="row">--}}
            {{--{!! Form::model($setting, ['route' => ['general.update'], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}--}}

                {{--<div class="col-sm-4">--}}
                    {{--{!! Form::label($setting->title, ucfirst($setting->title)) !!}--}}
                    {{--<div class="form-group gori">--}}
                        {{--<input class="form-control" name="value" type="text" value="{{ $setting->value }}">--}}
                        {{--<input name="title" type="hidden" value="{{ $setting->title }}">--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                        {{--<input type="submit" value="save" class="btn btn-primary">--}}
                    {{--</div>--}}
                {{--</div>--}}

            {{--{!! Form::close() !!}--}}
            {{--</div>--}}
            {{--@endforeach--}}
        {{--</section>--}}

    </div>
@endsection