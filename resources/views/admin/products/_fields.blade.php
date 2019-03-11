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

                <div class="form-group">
                    {!! Form::label('doc', 'Document name:') !!}

                    {!! Form::text('docName', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('doc', 'Document file (pdf):') !!}

                    @if (!empty($product->doc))
                        <p>Document loaded: {{ url($product->doc) }}</p>
                    @else
                        <p>Pdf document not loaded</p>
                    @endif

                    {!! Form::file('doc', ['class' => 'form-control', 'accept' => 'application/pdf'] ) !!}
                </div>
            </div>

            <div class="form-group col-xs-12">
                <input type="submit" value="{{ $action }}" class="btn btn-primary">
            </div>
        </div>

    </div>
</div>
