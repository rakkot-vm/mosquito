@extends('layouts.admin')

@section('title', 'Home page settings')
@section('content_header')
    <h1>Home page settings</h1>
@stop

@section('content')

    <div class="content">
        {!! Form::model($settings, ['route' => ['home.save'], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}

        <section class="sec1 box">
            <h3>Section 1</h3>

            <div class="row">
                <div class="form-group col-sm-4">
                    {!! Form::label('sec1_title', 'Title:') !!}
                    {!! Form::text('sec1_title',  $valueHelper->valueIfExists($settings, 'sec1_title'), ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-8">
                    {!! Form::label('sec1-text', 'Text:') !!}
                    {!! Form::textarea('sec1-text', $valueHelper->valueIfExists($settings, 'sec1-text'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-sm-4">
                    {!! Form::label('sec1-img', 'Img(mosquito):') !!}
                    <img src="{{ $valueHelper->valueIfExists($settings, 'sec1-img') }}" alt="">
                    {!! Form::file('sec1-img', null) !!}
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-4">
                    {!! Form::label('sec1-img1', 'Image 1:') !!}
                    <img src="{{ $valueHelper->valueIfExists($settings, 'sec1-img1') }}" alt="">
                    {!! Form::file('sec1-img1', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group col-sm-2">
                    {!! Form::label('sec1-img2', 'Image 2:') !!}
                    <img src="{{ $valueHelper->valueIfExists($settings, 'sec1-img2') }}" alt="">
                    {!! Form::file('sec1-img2', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group col-sm-2">
                    {!! Form::label('sec1-im2', 'Image 2:') !!}
                    <img src="{{ $valueHelper->valueIfExists($settings, 'sec1-img3') }}" alt="">
                    {!! Form::file('sec1-img2', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group col-sm-4">
                    {!! Form::label('sec1-img4', 'Image 4:') !!}
                    <img src="{{ $valueHelper->valueIfExists($settings, 'sec1-img4') }}" alt="">
                    {!! Form::file('sec1-img4', null, ['class' => 'form-control']) !!}
                </div>
            </div>

        </section>

        <section class="sec2 box">
            <h3>Section 2</h3>


            <div class="row">
                <div class="form-group col-sm-6">
                    {!! Form::label('sec2-text', 'Text:') !!}
                    {!! Form::textarea('sec2-text', $valueHelper->valueIfExists($settings, 'sec2-text'), ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-4">
                    {!! Form::label('sec2-textWidth', 'Width text:') !!}
                    {!! Form::text('sec2-textWidth', $valueHelper->valueIfExists($settings, 'sec2-textWidth'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-sm-1">
                    {!! Form::label('sec2-infoWidth', 'Width info button:') !!}
                    {!! Form::checkbox('sec2-infoWidth', $valueHelper->valueIfExists($settings, 'sec2-infoWidth')) !!}
                </div>
                <div class="form-group col-sm-7">
                    {!! Form::label('sec2-popupWidth', 'Width popup:') !!}
                    {!! Form::textarea('sec2-popupWidth', $valueHelper->valueIfExists($settings, 'sec2-popupWidth'), ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-4">
                    {!! Form::label('sec2-textHeight', 'Height text:') !!}
                    {!! Form::text('sec2-textHeight', $valueHelper->valueIfExists($settings, 'sec2-textHeight'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-sm-1">
                    {!! Form::label('sec2-infoHeight', 'Height info button:') !!}
                    {!! Form::checkbox('sec2-infoHeight', $valueHelper->valueIfExists($settings, 'sec2-infoHeight')) !!}
                </div>
                <div class="form-group col-sm-7">
                    {!! Form::label('sec2-popupHeight', 'Height popup:') !!}
                    {!! Form::textarea('sec2-popupHeight', $valueHelper->valueIfExists($settings, 'sec2-popupHeight'), ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-4">
                    {!! Form::label('sec2-textDeep', 'Deep text:') !!}
                    {!! Form::text('sec2-textDeep', $valueHelper->valueIfExists($settings, 'sec2-textDeep'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-sm-1">
                    {!! Form::label('sec2-infoDeep', 'Deep info button:') !!}
                    {!! Form::checkbox('sec2-infoDeep', $valueHelper->valueIfExists($settings, 'sec2-infoDeep')) !!}
                </div>
                <div class="form-group col-sm-7">
                    {!! Form::label('sec2-popupDeep', 'Deep popup:') !!}
                    {!! Form::textarea('sec2-popupDeep', $valueHelper->valueIfExists($settings, 'sec2-popupDeep'), ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-4">
                    {!! Form::label('sec2-textHols', 'Hols text:') !!}
                    {!! Form::text('sec2-textHols', $valueHelper->valueIfExists($settings, 'sec2-textHols'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-sm-1">
                    {!! Form::label('sec2-infoHols', 'Hols info button:') !!}
                    {!! Form::checkbox('sec2-infoHols', $valueHelper->valueIfExists($settings, 'sec2-infoHols')) !!}
                </div>
                <div class="form-group col-sm-7">
                    {!! Form::label('sec2-popupHols', 'Hols popup:') !!}
                    {!! Form::textarea('sec2-popupHols', $valueHelper->valueIfExists($settings, 'sec2-popupHols'), ['class' => 'form-control']) !!}
                </div>
            </div>
        </section>

        <section class="sec3 box">
            <h3>Section 3</h3>

            <div class="row">
                <div class="col-sm-12">
                    <h3>Accordion</h3>
                </div>
            </div>
            @forelse($settings['sec3-acc']->accordionTabs as $tab)
                @include('admin.home.edit-tab')
            @empty
                @include('admin.home.edit-tab')
            @endforelse

            <div class="row accord-btns">
                <div class="col-sm-12">
                    <button type="button" class="btn btn-default" id="add_accr_item">Add Item</button>
                </div>
            </div>
        </section>

        <section class="sec4 box">
            <h3>Section 4</h3>

            <div class="row">
                <div class="form-group col-sm-12">
                    {!! Form::label('sec4-title', 'Title:') !!}
                    {!! Form::text('sec4-title', $valueHelper->valueIfExists($settings, 'sec4-title'), ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-sm-12">
                    {!! Form::label('sec4-text', 'Text:') !!}
                    {!! Form::textarea('sec4-text', $valueHelper->valueIfExists($settings, 'sec4-text'), ['class' => 'form-control']) !!}
                </div>
            </div>
        </section>

        <section class="sec5 box">
            <h3>Section 5</h3>

            <div class="row">

                <div class="col-sm-3">
                    <div class="form-group">
                        {!! Form::label('sec5-img1', 'Image:') !!}
                        <img src="{{ $valueHelper->valueIfExists($settings, 'sec5-img1') }}" alt="">
                        {!! Form::file('sec5-img1', null, ['class' => 'form-control']) !!}

                    </div>
                    <div class="form-group">
                        {!! Form::label('sec5-title1', 'Title:') !!}
                        {!! Form::text('sec5-title1', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        {!! Form::label('sec5-img2', 'Image:') !!}
                        <img src="{{ $valueHelper->valueIfExists($settings, 'sec5-img2') }}" alt="">
                        {!! Form::file('sec5-img2', null, ['class' => 'form-control']) !!}

                    </div>
                    <div class="form-group">
                        {!! Form::label('sec5-title2', 'Title:') !!}
                        {!! Form::text('sec5-title2', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        {!! Form::label('sec5-img3', 'Image:') !!}
                        <img src="{{ $valueHelper->valueIfExists($settings, 'sec5-img3') }}" alt="">
                        {!! Form::file('sec5-img3', null, ['class' => 'form-control']) !!}

                    </div>
                    <div class="form-group">
                        {!! Form::label('sec5-title3', 'Title:') !!}
                        {!! Form::text('sec5-title3', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        {!! Form::label('sec5-img4', 'Image:') !!}
                        <img src="{{ $valueHelper->valueIfExists($settings, 'sec5-img4') }}" alt="">
                        {!! Form::file('sec5-img4', null, ['class' => 'form-control']) !!}

                    </div>
                    <div class="form-group">
                        {!! Form::label('sec5-title4', 'Title:') !!}
                        {!! Form::text('sec5-title4', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

            </div>
        </section>

        <section class="sec-btns">
            <div class="form-group col-xs-12">
                <input type="submit" value="save" class="btn btn-primary">
                <a href="{!! route('home.edit') !!}" class="btn btn-default">Cancel</a>
            </div>
        </section>
        {!! Form::close() !!}
    </div>
@endsection