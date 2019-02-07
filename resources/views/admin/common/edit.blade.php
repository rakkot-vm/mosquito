@extends('layouts.admin')

@section('title', 'Common settings')
@section('h1_title', 'Common settings')

@section('content')
    <div class="content">

        <section class="sec_logo box">
            <h3>Logo</h3>

            <div class="row">
            {!! Form::model($settings, ['route' => ['common.update'], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}
                <div class="col-sm-4">
                    {!! Form::label('data[logo_img][value]', 'Image:') !!}

                    <img src="{{ url($settings['logo_img']->value) }}" alt="" class="img-thumbnail-1">
                    {!! Form::file('data[logo_img][value]', null, ['id' => '']) !!}
                    <input name="data[logo_img][title]" type="hidden" value="{{ $settings['logo_img']->title }}">
                </div>

                <div class="col-sm-4">
                    {!! Form::label('logo_alt', 'Logo image alt:') !!}
                    <input class="form-control" name="data[logo_alt][value]" type="text" value="{{ $settings['logo_alt']->value }}">
                    <input name="data[logo_alt][title]" type="hidden" value="{{ $settings['logo_alt']->title }}">

                    {!! Form::label('logo_title', 'Logo image title:') !!}
                    <input class="form-control" name="data[logo_title][value]" type="text" value="{{ $settings['logo_title']->value }}">
                    <input name="data[logo_title][title]" type="hidden" value="{{ $settings['logo_title']->title }}">
                </div>

                <div class="col-sm-12">
                    {!! Form::label('data[favicon][value]', 'Favicon:') !!}
                    <img src="{{ url($settings['favicon']->value) }}" alt="" class="img-thumbnail">
                    {!! Form::file('data[favicon][value]', null, ['id' => '']) !!}
                    <input name="data[favicon][title]" type="hidden" value="{{ $settings['favicon']->title }}">
                </div>

                <div class="col-sm-12">
                    {!! Form::label('site_title', 'Site title:') !!}
                    <input class="form-control" name="data[site_title][value]" type="text" value="{{ $settings['site_title']->value }}">
                    <input name="data[site_title][title]" type="hidden" value="{{ $settings['site_title']->title }}">
                </div>

                <div class="col-xs-12 btns-block">
                    <input type="submit" value="save" class="btn btn-primary">
                </div>
            {!! Form::close() !!}
            </div>
        </section>

        <section class="sec_contacts box">
            <h3>Contacts</h3>

            <div class="row">
                {!! Form::model($settings, ['route' => ['common.update'], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}
                    <div class="col-sm-6  col-xs-12">
                        {!! Form::label('phone_1', 'Phone:') !!}
                        <input class="form-control" name="data[phone_1][value]" type="text" value="{{ $settings['phone_1']->value }}">
                        <input name="data[phone_1][title]" type="hidden" value="{{ $settings['phone_1']->title }}">

                        {!! Form::label('email_1', 'Email:') !!}
                        <input class="form-control" name="data[email_1][value]" type="text" value="{{ $settings['email_1']->value }}">
                        <input name="data[email_1][title]" type="hidden" value="{{ $settings['email_1']->title }}">

                        {!! Form::label('work_hours_1', 'Work hours:') !!}
                        <input class="form-control" name="data[work_hours_1][value]" type="text" value="{{ $settings['work_hours_1']->value }}">
                        <input name="data[work_hours_1][title]" type="hidden" value="{{ $settings['work_hours_1']->title }}">
                    </div>

                    <div class="col-xs-12 btns-block">
                        <input type="submit" value="save" class="btn btn-primary">
                    </div>
                {!! Form::close() !!}
            </div>
        </section>

        <section class="sec_socials box">
            <h3>Socials</h3>

            <div class="row">
                {!! Form::model($settings, ['route' => ['common.update'], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}
                <div class="col-sm-6 col-xs-12">
                    {!! Form::label('data[phone_1][value]', 'Facebook link:') !!}
                    <input class="form-control" name="data[phone_1][value]" type="text" value="{{ $settings['social_facebook']->value }}">
                    <input name="data[social_facebook][title]" type="hidden" value="{{ $settings['social_facebook']->title }}">

                    {!! Form::label('data[email_1][value]', 'Instagram link:') !!}
                    <input class="form-control" name="data[email_1][value]" type="text" value="{{ $settings['social_instagram']->value }}">
                    <input name="data[social_instagram][title]" type="hidden" value="{{ $settings['social_instagram']->title }}">

                    {!! Form::label('data[work_hours_1][value]', 'Youtube link:') !!}
                    <input class="form-control" name="data[work_hours_1][value]" type="text" value="{{ $settings['social_youtube']->value }}">
                    <input name="data[social_youtube][title]" type="hidden" value="{{ $settings['social_youtube']->title }}">
                </div>

                <div class="col-xs-12 btns-block">
                    <input type="submit" value="save" class="btn btn-primary">
                </div>
                {!! Form::close() !!}
            </div>
        </section>

    </div>
@endsection