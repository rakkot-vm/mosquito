<div class="col-sm-6">
    <div class="form-group">
        {!! Form::label('type', 'Type:') !!}
        {!! Form::text('type', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('value', 'Value:') !!}
        {!! Form::text('value', null, ['class' => 'form-control']) !!}
    </div>
    <textarea id="summernote" name="editordata"></textarea>
    {!! Form::file('value', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-xs-12">
    <input type="submit" value="{{ $action }}" class="btn btn-primary">
    <a href="{!! route('settings.index') !!}" class="btn btn-default">Cancel</a>
</div>