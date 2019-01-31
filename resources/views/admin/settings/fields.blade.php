<div class="col-sm-6">
    <div class="form-group">
        {!! Form::label('type', 'Type:') !!}
        {!! Form::text('type', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>


    <div class="form-group value-fields">
        {!! Form::label('value', 'Value:') !!}

        <div class="clearfix">
            <div class="col-xs-6">
                {!! Form::label('value-text', 'File (The img link will be placed in the value):') !!}
                <input type="radio" name="value-type" value="file"><br>
            </div>
            <div class="col-xs-6">
                {!! Form::label('value-file', 'Text:') !!}
                <input type="radio" name="value-type" value="text" checked>
            </div>
        </div>

        <input type="file" name="value" class="form-control" style="display: none;" accept=".jpg, .jpeg, .png">
        <div class="textarea">
            {!! Form::textarea('value', null, ['id' => 'value-text']) !!}
        </div>
    </div>


</div>

<div class="form-group col-xs-12">
    <input type="submit" value="{{ $action }}" class="btn btn-primary">
    <a href="{!! route('settings.index') !!}" class="btn btn-default">Cancel</a>
</div>