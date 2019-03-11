<div class="col-xs-12">
    <div class="box box-primary">

        <div class="row">

            <div class="col-xs-12 col-lg-6">
                <div class="form-group">
                    {!! Form::label('type', 'Text type *:') !!}
                    {!! Form::text('type', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('text_id', 'Text ID *:') !!}
                    {!! Form::text('text_id', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group note-editor-page">
                    {!! Form::label('text', 'Text:') !!}
                    {!! Form::text('text', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group col-xs-12">
                <input type="submit" value="{{ $action }}" class="btn btn-primary">
            </div>
        </div>

    </div>
</div>
