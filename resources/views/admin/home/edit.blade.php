@extends('layouts.admin')

@section('title', 'Home page settings')
@section('h1_title', 'Home page settings')

@section('content')

    <div class="content">
        {!! Form::model($settings, ['route' => ['home.save'], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}

        <section class="sec1 box">
            <h3>Section 1</h3>

            <div class="row">
                <div class="form-group col-sm-4">
                    {!! Form::label('sec1_title', 'Title:') !!}
                    {!! Form::text('sec1_title',  $settings['sec1_title']->value, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-8">
                    {!! Form::label('sec1_text', 'Text:') !!}
                    <textarea class="form-control" name="sec1_text" cols="50" rows="10" id="sec1_text">{{ $settings['sec1_text']->value }}</textarea>
                </div>
                <div class="form-group col-sm-4">
                    {!! Form::label('sec1_img', 'Img(mosquito):') !!}
                    <div class="img-wrap">
                        <img src="{{ url($settings['sec1_img']->value) }}" alt="" class="img-thumbnail-1">
                    </div>
                    {!! Form::file('sec1_img', null) !!}
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-4">
                    {!! Form::label('sec1_img1', 'Image 1:') !!}
                    <div class="img-wrap">
                        <img src="{{ url($settings['sec1_img1']->value) }}" alt="" class="img-thumbnail-1">
                    </div>
                    {!! Form::file('sec1_img1', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group col-sm-2">
                    {!! Form::label('sec1_img2', 'Image 2:') !!}
                    <div class="img-wrap">
                        <img src="{{ url($settings['sec1_img2']->value) }}" alt="" class="img-thumbnail-1">
                    </div>
                    {!! Form::file('sec1_img2', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group col-sm-2">
                    {!! Form::label('sec1_im3', 'Image 3:') !!}
                    <div class="img-wrap">
                        <img src="{{ url($settings['sec1_img3']->value) }}" alt="" class="img-thumbnail-1">
                    </div>
                    {!! Form::file('sec1_img3', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group col-sm-4">
                    {!! Form::label('sec1_img4', 'Image 4:') !!}
                    <div class="img-wrap">
                        <img src="{{ url($settings['sec1_img4']->value) }}" alt="" class="img-thumbnail-1">
                    </div>
                    {!! Form::file('sec1_img4', null, ['class' => 'form-control']) !!}
                </div>
            </div>

        </section>

        <section class="sec2 box">
            <h3>Section 2</h3>

            <div class="row">
                <div class="form-group col-sm-6">
                    {!! Form::label('sec2_text', 'Text:') !!}
                    <textarea class="form-control" name="sec2_text" cols="50" rows="10" id="sec2_text">{{ $settings['sec2_text']->value }}</textarea>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-4">
                    {!! Form::label('sec2_textWidth', 'Width text:') !!}
                    <input class="form-control" name="sec2_textWidth" type="text" value="{{ $settings['sec2_textWidth']->value }}" id="sec2_textWidth">
                </div>
                <div class="form-group col-sm-1">
                    {!! Form::label('sec2_infoWidth', 'Width info button:') !!}
                    <input {{ $settings['sec2_infoHeight']->value == ''?: 'checked' }} name="sec2_infoWidth" type="checkbox" id="sec2_infoWidth">
                </div>
                <div class="form-group col-sm-7">
                    {!! Form::label('sec2_popupWidth', 'Width popup:') !!}
                    <textarea class="form-control" name="sec2_popupWidth" cols="50" rows="10" id="sec2_popupWidth">{{ $settings['sec2_popupWidth']->value }}</textarea>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-4">
                    {!! Form::label('sec2_textHeight', 'Height text:') !!}
                    <input class="form-control" name="sec2_textHeight" type="text" value="{{ $settings['sec2_textHeight']->value }}" id="sec2_textHeight">
                </div>
                <div class="form-group col-sm-1">
                    {!! Form::label('sec2_infoHeight', 'Height info button:') !!}
                    <input {{ $settings['sec2_infoHeight']->value == ''?: 'checked' }} name="sec2_infoHeight" type="checkbox" id="sec2_infoHeight">
                </div>
                <div class="form-group col-sm-7">
                    {!! Form::label('sec2_popupHeight', 'Height popup:') !!}
                    <textarea class="form-control" name="sec2_popupHeight" cols="50" rows="10" id="sec2_popupHeight">{{ $settings['sec2_popupHeight']->value }}</textarea>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-4">
                    {!! Form::label('sec2_textDeep', 'Deep text:') !!}
                    <input class="form-control" name="sec2_textDeep" type="text" value="{{ $settings['sec2_textDeep']->value }}" id="sec2_textDeep">
                </div>
                <div class="form-group col-sm-1">
                    {!! Form::label('sec2_infoDeep', 'Deep info button:') !!}
                    <input {{ $settings['sec2_infoDeep']->value == ''?: 'checked' }} name="sec2_infoDeep" type="checkbox" id="sec2_infoDeep">
                </div>
                <div class="form-group col-sm-7">
                    {!! Form::label('sec2_popupDeep', 'Deep popup:') !!}
                    <textarea class="form-control" name="sec2_popupDeep" cols="50" rows="10" id="sec2_popupDeep">{{ $settings['sec2_popupDeep']->value }}</textarea>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-4">
                    {!! Form::label('sec2_textHols', 'Hols text:') !!}
                    <input class="form-control" name="sec2_textHols" type="text" value="{{ $settings['sec2_textHols']->value }}" id="sec2_textHols">
                </div>
                <div class="form-group col-sm-1">
                    {!! Form::label('sec2_infoHols', 'Hols info button:') !!}
                    <input {{ $settings['sec2_infoHols']->value == ''?: 'checked' }} name="sec2_infoHols" type="checkbox" id="sec2_infoHols">
                </div>
                <div class="form-group col-sm-7">
                    {!! Form::label('sec2_popupHols', 'Hols popup:') !!}
                    <textarea class="form-control" name="sec2_popupHols" cols="50" rows="10" id="sec2_popupHols">{{ $settings['sec2_popupHols']->value }}</textarea>
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

            @foreach($settings['sec3_acc']->accordionTabs->sortBy('sort') as $tab)

                <div class="row accordion-item tab_{{ $tab->id }}">

                    {!! Form::hidden('sec3_acc['. $tab->id .'][tab_id]', $tab->id, ['id' => '']) !!}
                    {!! Form::hidden('sec3_acc['. $tab->id .'][setting_id]', $tab->setting_id, ['id' => '']) !!}

                    <div class="form-group col-sm-12">
                        {!! Form::label('sec3_acc['. $tab->id .'][title]', 'Title:') !!}
                        {!! Form::text('sec3_acc['. $tab->id .'][title]', $tab->title, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group col-sm-6">
                        {!! Form::label('sec3_acc['. $tab->id .'][img]', 'Image:') !!}
                        <div class="img-wrap">
                            <img src="{{ url($tab->img) }}" alt="{{ $tab->imgAlt }}" title="{{ $tab->imgTitle }}" class="img-thumbnail-1">
                        </div>
                        {!! Form::file('sec3_acc['. $tab->id .'][img]', null, ['class' => 'form-control']) !!}

                        <div class="row">
                            <div class="col-sm-6">
                                {!! Form::label('sec3_acc['. $tab->id .'][imgAlt]', 'Img alt:') !!}
                                {!! Form::text('sec3_acc['. $tab->id .'][imgAlt]', $tab->imgAlt, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-sm-6">
                                {!! Form::label('sec3_acc['. $tab->id .'][imgTitle]', 'Img title:') !!}
                                {!! Form::text('sec3_acc['. $tab->id .'][imgTitle]', $tab->imgTitle, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-sm-6">
                        {!! Form::label('sec3_acc['. $tab->id .'][text]', 'Text:') !!}
                        {!! Form::textarea('sec3_acc['. $tab->id .'][text]', $tab->text, ['class' => 'form-control']) !!}

                        <div class="btn-del-tab">
                            <button type="button" class="btn btn-danger pull-right del_acc_item" id="del_acc_item_{!! $tab->id !!}" value="{!! $tab->id !!}">Delete</button>
                            <button type="button" class="btn btn-primary pull-right cancel_del_acc_item" id="cancel_del_acc_item_{!! $tab->id !!}" value="{!! $tab->id !!}" style="display: none;">Cancel delete</button>
                        </div>
                    </div>
                    <hr>
                </div>

            @endforeach
            <div class="row accord-btns">
                <div class="col-sm-12">
                    <button type="button" class="btn btn-default" id="add_acc_item">Add Item</button>
                </div>
            </div>
        </section>

        <section class="sec4 box">
            <h3>Section 4</h3>

            <div class="row">
                <div class="form-group col-sm-12">
                    {!! Form::label('sec4_title', 'Title:') !!}
                    <input class="form-control" name="sec4_title" type="text" value="{{ $settings['sec4_title']->value }}" id="sec4_title">
                </div>
                <div class="form-group col-sm-12">
                    {!! Form::label('sec4_text', 'Text:') !!}
                    <textarea class="form-control" name="sec4_text" cols="50" rows="10" id="sec4_text">{{ $settings['sec4_text']->value }}</textarea>
                </div>
            </div>
        </section>

        <section class="sec4-5 box">
            <h3>Section 4.5</h3>

            <div class="row">

                <div class="col-sm-3">
                    <div class="form-group">
                        {!! Form::label('sec4-5_title', 'Title:') !!}
                        <input class="form-control" name="sec4-5_title" type="text" value="{{ $settings['sec4-5_title']->value }}" id="sec4-5_title">
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-sm-3">
                    <div class="form-group">
                        {!! Form::label('sec4-5_img1', 'Image:') !!}
                        <div class="img-wrap">
                            <img src="{{ url($settings['sec4-5_img1']->value) }}" alt="" class="img-thumbnail-1">
                        </div>
                        {!! Form::file('sec4-5_img1', null, ['class' => 'form-control']) !!}

                    </div>
                    <div class="form-group">
                        {!! Form::label('sec4-5_title-img1', 'Title img:') !!}
                        <input class="form-control" name="sec4-5_title-img1" type="text" value="{{ $settings['sec4-5_title-img1']->value }}" id="sec4-5_title-img1">
                    </div>
                    <div class="form-group">
                        {!! Form::label('sec4-5_alt-img1', 'Alt img:') !!}
                        <input class="form-control" name="sec4-5_alt-img1" type="text" value="{{ $settings['sec4-5_alt-img1']->value }}" id="sec4-5_alt-img1">
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        {!! Form::label('sec4-5_img2', 'Image2:') !!}
                        <div class="img-wrap">
                            <img src="{{ url($settings['sec4-5_img2']->value) }}" alt="" class="img-thumbnail-1">
                        </div>
                        {!! Form::file('sec4-5_img2', null, ['class' => 'form-control']) !!}

                    </div>
                    <div class="form-group">
                        {!! Form::label('sec4-5_title-img2', 'Title img2:') !!}
                        <input class="form-control" name="sec4-5_title-img2" type="text" value="{{ $settings['sec4-5_title-img2']->value }}" id="sec4-5_title-img2">
                    </div>
                    <div class="form-group">
                        {!! Form::label('sec4-5_alt-img2', 'Alt img2:') !!}
                        <input class="form-control" name="sec4-5_alt-img2" type="text" value="{{ $settings['sec4-5_alt-img2']->value }}" id="sec4-5_alt-img2">
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        {!! Form::label('sec4-5_img3', 'Image3:') !!}
                        <div class="img-wrap">
                            <img src="{{ url($settings['sec4-5_img3']->value) }}" alt="" class="img-thumbnail-1">
                        </div>
                        {!! Form::file('sec4-5_img3', null, ['class' => 'form-control']) !!}

                    </div>
                    <div class="form-group">
                        {!! Form::label('sec4-5_title-img3', 'Title img3:') !!}
                        <input class="form-control" name="sec4-5_title-img3" type="text" value="{{ $settings['sec4-5_title-img3']->value }}" id="sec4-5_title-img3">
                    </div>
                    <div class="form-group">
                        {!! Form::label('sec4-5_alt-img3', 'Alt img3:') !!}
                        <input class="form-control" name="sec4-5_alt-img3" type="text" value="{{ $settings['sec4-5_alt-img3']->value }}" id="sec4-5_alt-img3">
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        {!! Form::label('sec4-5_img4', 'Image4:') !!}
                        <div class="img-wrap">
                            <img src="{{ url($settings['sec4-5_img4']->value) }}" alt="" class="img-thumbnail-1">
                        </div>
                        {!! Form::file('sec4-5_img4', null, ['class' => 'form-control']) !!}

                    </div>
                    <div class="form-group">
                        {!! Form::label('sec4-5_title-img4', 'Title img4:') !!}
                        <input class="form-control" name="sec4-5_title-img4" type="text" value="{{ $settings['sec4-5_title-img4']->value }}" id="sec4-5_title-img4">
                    </div>
                    <div class="form-group">
                        {!! Form::label('sec4-5_alt-img4', 'Alt img4:') !!}
                        <input class="form-control" name="sec4-5_alt-img4" type="text" value="{{ $settings['sec4-5_alt-img4']->value }}" id="sec4-5_alt-img4">
                    </div>
                </div>

            </div>
        </section>

        <section class="sec5 box">
            <h3>Section 5</h3>

            <div class="row">

                <div class="col-sm-3">
                    <div class="form-group">
                        {!! Form::label('sec5_img1', 'Image:') !!}
                        <div class="img-wrap">
                            <img src="{{ url($settings['sec5_img1']->value) }}" alt="" class="img-thumbnail-1">
                        </div>
                        {!! Form::file('sec5_img1', null, ['class' => 'form-control']) !!}

                    </div>
                    <div class="form-group">
                        {!! Form::label('sec5_title1', 'Title:') !!}
                        <input class="form-control" name="sec5_title1" type="text" value="{{ $settings['sec5_title1']->value }}" id="sec5_title1">
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        {!! Form::label('sec5_img2', 'Image:') !!}
                        <div class="img-wrap">
                            <img src="{{ url($settings['sec5_img2']->value) }}" alt="" class="img-thumbnail-1">
                        </div>
                        {!! Form::file('sec5_img2', null, ['class' => 'form-control']) !!}

                    </div>
                    <div class="form-group">
                        {!! Form::label('sec5_title2', 'Title:') !!}
                        <input class="form-control" name="sec5_title2" type="text" value="{{ $settings['sec5_title2']->value }}" id="sec5_title2">
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        {!! Form::label('sec5_img3', 'Image:') !!}
                        <div class="img-wrap">
                            <img src="{{ url($settings['sec5_img3']->value) }}" alt="" class="img-thumbnail-1">
                        </div>
                        {!! Form::file('sec5_img3', null, ['class' => 'form-control']) !!}

                    </div>
                    <div class="form-group">
                        {!! Form::label('sec5_title3', 'Title:') !!}
                        <input class="form-control" name="sec5_title3" type="text" value="{{ $settings['sec5_title3']->value }}" id="sec5_title3">
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="form-group">
                        {!! Form::label('sec5_img4', 'Image:') !!}
                        <div class="img-wrap">
                            <img src="{{ url($settings['sec5_img4']->value) }}" alt="" class="img-thumbnail-1">
                        </div>
                        {!! Form::file('sec5_img4', null, ['class' => 'form-control']) !!}

                    </div>
                    <div class="form-group">
                        {!! Form::label('sec5_title4', 'Title:') !!}
                        <input class="form-control" name="sec5_title4" type="text" value="{{ $settings['sec5_title4']->value }}" id="sec5_title4">
                    </div>
                </div>

            </div>
        </section>

        <section class="sec_btns">
            <div class="form-group col-xs-12">
                <input type="submit" value="save" class="btn btn-primary">
                <a href="{!! route('home.edit') !!}" class="btn btn-default">Cancel</a>
            </div>
        </section>
        {!! Form::close() !!}
    </div>

    <script>
        var accordion_setting_id = {{ $settings['sec3_acc']->id }};
    </script>
@endsection