<div class="col-xs-12">
    <div class="box box-primary">

        <div class="row">

            <div class="col-xs-12 col-lg-4">
                <div class="form-group">
                    {!! Form::label('title', 'Title *:') !!}
                    {!! Form::text('title', null, ['class' => 'form-control', 'required']) !!}

                    {!! Form::hidden('product_id', null, ['class' => 'form-control', 'pattern' => '^[ 0-9]+$']) !!}
                </div>
            </div>

            <div class="form-group col-xs-12">
                <input type="submit" value="{{ $action }}" class="btn btn-primary">
            </div>
        </div>

    </div>
</div>