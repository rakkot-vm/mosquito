<div class="col-xs-12">
    <div class="box box-primary">

        <div class="row">

            <div class="col-xs-12">
                <div class="form-group">
                    {!! Form::label('title', 'Title *:') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group note-editor-page">
                    {!! Form::label('content', 'Content:') !!}
                    {!! Form::textarea('content', null, ['id' => 'value-text', 'rows' => 2, 'cols' => 40]) !!}
                </div>
            </div>

            <div class="form-group col-xs-12">
                <input type="submit" value="{{ $action }}" class="btn btn-primary">
            </div>
        </div>

    </div>
</div>
