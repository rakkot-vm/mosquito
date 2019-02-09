<div class="col-xs-12">
    <div class="box box-primary">

        <div class="row">

            <div class="col-xs-12 col-lg-4">
                <div class="form-group">
                    {!! Form::label('img', 'Preview Image:') !!}
                    <div class="min-height-200">
                        <img src="{{ $attributeValue->preview_img? url($attributeValue->preview_img) : '' }}" id="preview-preview_img" class="img-responsive">
                    </div>
                    {!! Form::file('preview_img', ['class' => 'form-control image-upload', 'accept' => 'image/*'] ) !!}
                </div>
            </div>
            <div class="col-xs-12 col-lg-4">
                <div class="form-group">
                    {!! Form::label('border_img', 'Border Image:') !!}
                    <div class="min-height-200">
                        <img src="{{ $attributeValue->border_img? url($attributeValue->border_img) : '' }}" id="preview-border_img" class="img-responsive">
                    </div>
                    {!! Form::file('border_img', ['class' => 'form-control image-upload', 'accept' => 'image/*'] ) !!}
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

                {!! Form::hidden('attribute_id', null, ['class' => 'form-control'] ) !!}
            </div>

            <div class="form-group col-xs-12">
                <input type="submit" value="{{ $action }}" class="btn btn-primary">
            </div>
        </div>

    </div>
</div>