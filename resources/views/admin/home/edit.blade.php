@extends('layouts.admin')

@section('title', 'Home page settings')
@section('content_header')
    <h1>Home page settings</h1>
@stop

@section('content')
    <div class="content">
        {!! Form::model($settings, ['route' => ['home.save'], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}
        <section class="sec1">
            <h1>Section 1</h1>

            <div class="row">
                <div class="form-group col-sm-4">
                    {!! Form::label('sec1-title', 'Title:') !!}
                    {!! Form::text('sec1-title', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-8">
                    {!! Form::label('sec1-text', 'Text:') !!}
                    {!! Form::textarea('sec1-text', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-sm-4">
                    {!! Form::label('sec1-img', 'Img(mosquito):') !!}
                    {!! \App\Http\Helpers\ImageHelper::imgIfExists($settings, 'sec1-img') !!}
                    {!! Form::file('sec1-img', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-4">
                    {!! Form::label('sec1-img1', 'Image 1:') !!}
                    {!! \App\Http\Helpers\ImageHelper::imgIfExists($settings, 'sec1-img1') !!}
                    {!! Form::file('sec1-img1', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group col-sm-2">
                    {!! Form::label('sec1-img2', 'Image 2:') !!}
                    {!! \App\Http\Helpers\ImageHelper::imgIfExists($settings, 'sec1-img2') !!}
                    {!! Form::file('sec1-img2', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-sm-2">
                    {!! Form::label('sec1-im3', 'Image 3:') !!}
                    {!! \App\Http\Helpers\ImageHelper::imgIfExists($settings, 'sec1-img3') !!}
                    {!! Form::file('sec1-img3', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group col-sm-4">
                    {!! Form::label('sec1-img4', 'Image 4') !!}
                    {!! \App\Http\Helpers\ImageHelper::imgIfExists($settings, 'sec1-img4') !!}
                    {!! Form::file('sec1-img4', null, ['class' => 'form-control']) !!}
                </div>
            </div>

        </section>

        <section class="sec2">
            <h1>Section 2</h1>

            <div class="row">
                <div class="form-group col-sm-6">
                    {!! Form::label('sec2-text', 'Text:') !!}
                    {!! Form::textarea('sec2-text', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-4">
                    {!! Form::label('sec2-textWidth', 'Width text:') !!}
                    {!! Form::text('sec2-textWidth', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-sm-1">
                    {!! Form::label('sec2-infoWidth', 'Width info button:') !!}
                    {!! Form::checkbox('sec2-infoWidth', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-sm-7">
                    {!! Form::label('sec2-popupWidth', 'Width popup:') !!}
                    {!! Form::textarea('sec2-popupWidth', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-4">
                    {!! Form::label('sec2-textHeight', 'Height text:') !!}
                    {!! Form::text('sec2-textHeight', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-sm-1">
                    {!! Form::label('sec2-infoHeight', 'Height info button:') !!}
                    {!! Form::checkbox('sec2-infoHeight', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-sm-7">
                    {!! Form::label('sec2-popupHeight', 'Height popup:') !!}
                    {!! Form::textarea('sec2-popupHeight', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-4">
                    {!! Form::label('sec2-textDeep', 'Deep text:') !!}
                    {!! Form::text('sec2-textDeep', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-sm-1">
                    {!! Form::label('sec2-infoDeep', 'Deep info button:') !!}
                    {!! Form::checkbox('sec2-infoDeep', '', null) !!}
                </div>
                <div class="form-group col-sm-7">
                    {!! Form::label('sec2-popupDeep', 'Deep popup:') !!}
                    {!! Form::textarea('sec2-popupDeep', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-4">
                    {!! Form::label('sec2-textHols', 'Hols text:') !!}
                    {!! Form::text('sec2-textHols', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-sm-1">
                    {!! Form::label('sec2-infoHols', 'Hols info button:') !!}
                    {!! Form::checkbox('sec2-infoHols', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-sm-7">
                    {!! Form::label('sec2-popupHols', 'Hols popup:') !!}
                    {!! Form::textarea('sec2-popupHols', null, ['class' => 'form-control']) !!}
                </div>
            </div>
        </section>

        <section class="sec3">
            <h1>Section 3</h1>

            <div class="row">
                <h2>Accordion</h2>
                <h3>Item 1</h3>
                <div class="form-group col-sm-12">
                    {!! Form::label('sec3-acc-title-1', 'Title:') !!}
                    {!! Form::text('sec3-acc-title-1', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-sm-6">
                    {!! Form::label('sec3-acc-img-1', 'Image:') !!}
                    {!! Form::text('sec3-acc-img-1', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-sm-6">
                    {!! Form::label('sec3-acc-text-1', 'Text:') !!}
                    {!! Form::text('sec3-acc-text-1', null, ['class' => 'form-control']) !!}
                </div>
            </div>
        </section>

        <section class="sec4">
            <h1>Section 4</h1>

            <div class="row">
                <div class="form-group col-sm-12">
                    {!! Form::label('sec4-title', 'Title:') !!}
                    {!! Form::text('sec4-title', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-sm-12">
                    {!! Form::label('sec4-text', 'Text:') !!}
                    {!! Form::text('sec4-text', null, ['class' => 'form-control']) !!}
                </div>
            </div>
        </section>

        <section class="sec5">
            <h1>Section 5</h1>

            <div class="row">

                <div class="col-sm-3">
                    <div class="form-group">
                        {!! Form::label('sec5-img1', 'Image:') !!}
                        {!! Form::text('sec5-img1', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('sec5-title1', 'Title:') !!}
                        {!! Form::text('sec5-title1', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        {!! Form::label('sec5-img2', 'Image:') !!}
                        {!! Form::text('sec5-img2', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('sec5-title2', 'Title:') !!}
                        {!! Form::text('sec5-title2', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        {!! Form::label('sec5-img3', 'Image:') !!}
                        {!! Form::text('sec5-img3', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('sec5-title3', 'Title:') !!}
                        {!! Form::text('sec5-title3', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        {!! Form::label('sec5-img4', 'Image:') !!}
                        {!! Form::text('sec5-img4', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('sec5-title4', 'Title:') !!}
                        {!! Form::text('sec5-title4', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

            </div>
        </section>

        <section style="margin-bottom: 20px;">
            <div class="form-group col-xs-12">
                <input type="submit" value="save" class="btn btn-primary">
                <a href="{!! route('home.edit') !!}" class="btn btn-default">Cancel</a>
            </div>
        </section>
        {!! Form::close() !!}
    </div>
@endsection