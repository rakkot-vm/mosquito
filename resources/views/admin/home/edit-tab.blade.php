<div class="row accordion-item sec3-acc-1">

    <div class="form-group col-sm-12">
        {!! Form::label('sec3-acc[title-'. $valueHelper->valueIfExists($tab, 'sort', '1') .']', 'Title:') !!}
        {!! Form::text('sec3-acc[title-'. $valueHelper->valueIfExists($tab, 'sort', '1') .']',
            $valueHelper->valueIfExists($tab, 'title'), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group col-sm-6">
        {!! Form::label('sec3-acc[img-'. $valueHelper->valueIfExists($tab, 'sort', '1') .']', 'Image:') !!}
        {!! $imgHelper->imgIfExists($tab ) !!}
        {!! Form::file('sec3-acc[img-'. $valueHelper->valueIfExists($tab, 'sort', '1') .']', null, ['class' => 'form-control']) !!}

        <div class="row">
            <div class="col-sm-6">
                {!! Form::label('sec3-acc[imgAlt-'. $valueHelper->valueIfExists($tab, 'sort', '1') .']', 'Img alt:') !!}
                {!! Form::text('sec3-acc[imgAlt-'. $valueHelper->valueIfExists($tab, 'sort', '1') .']',
                    $valueHelper->valueIfExists($tab, 'imgAlt'), ['class' => 'form-control']) !!}
            </div>
            <div class="col-sm-6">
                {!! Form::label('sec3-acc[imgTitle-'. $valueHelper->valueIfExists($tab, 'sort', '1') .']', 'Img title:') !!}
                {!! Form::text('sec3-acc[imgTitle-'. $valueHelper->valueIfExists($tab, 'sort', '1') .']',
                    $valueHelper->valueIfExists($tab, 'imgTitle'), ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>

    <div class="form-group col-sm-6">
        {!! Form::label('sec3-acc[imgText-'. $valueHelper->valueIfExists($tab, 'sort', '1') .']', 'Text:') !!}
        {!! Form::text('sec3-acc[imgText-'. $valueHelper->valueIfExists($tab, 'sort', '1') .']',
            $valueHelper->valueIfExists($tab, 'text'), ['class' => 'form-control']) !!}

        <div class="btn-del-tab">
            <button type="button" class="btn btn-danger pull-right" id="del_accr_item" value="sec3-acc-1">Delete</button>
        </div>
    </div>
</div>