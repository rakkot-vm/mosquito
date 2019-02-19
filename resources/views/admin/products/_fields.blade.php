<div class="col-xs-12">
    <div class="box box-primary">

        <div class="row">
            <div class="col-xs-12 col-lg-4">
                <div class="form-group">
                    {!! Form::label('img', 'Image:') !!}
                    <div class="min-height-200">
                        <img src="{{ $product->img? url($product->img) : '' }}" id="preview-img" class="img-responsive">
                    </div>
                    {!! Form::file('img', ['class' => 'form-control image-upload', 'accept' => 'image/*'] ) !!}
                </div>
            </div>

            <div class="col-xs-12 col-lg-4">
                <div class="form-group">
                    {!! Form::label('title', 'Title *:') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('price', 'Price:') !!}
                    {!! Form::text('price', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group col-xs-12">
                <input type="submit" value="{{ $action }}" class="btn btn-primary">
            </div>
        </div>

    </div>
</div>
