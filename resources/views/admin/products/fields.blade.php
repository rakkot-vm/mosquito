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

@if($action == 'Update')
<div class="col-xs-12">
    <div class="box box-primary">

        <div class="row">
            <div class="box-header with-border">
                <a href="{{ route('attributes.index') }}" class="">
                    <h3>Product attributes</h3>
                </a>
                <a href="{{ route('attributes.create') }}" class="btn btn-success">Create attribute</a>
            </div>

            <div class="box-body">

                @forelse($product->attributes as $attribute)
                    <a href="{{ route('attributes.edit', ['id' => $attribute->id]) }}" class="">
                        <h4 class="col-xs-12">{!! $attribute->title !!}</h4>
                    </a>

                    <div class="row">

                        @forelse($attribute->attributeValues as $value)
                            <div class="col-xs-12 col-lg-4">
                                <div class="row">
                                    <div class="col-xs-12 col-lg-6">
                                        <p><strong>Preview image: </strong>
                                        <div class="min-height-100">
                                            <img src="{{ $value->preview_img ? url($value->preview_img) : '' }}" class="img-responsive">
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-lg-6">
                                        <p><strong>Title: </strong>{{ $value->title }}</p>
                                        <p><strong>Price: </strong>{{ $value->price }}</p>


                                        {{Form::open(['method'  => 'DELETE', 'route' => ['attributeValues.destroy', $value->id], 'id' => 'form_del'])}}
                                        {{Form::close()}}
                                        <div class="form-group">
                                            <p>
                                                <a href="{{ route('attributeValues.edit', ['id' => $value->id]) }}" class="btn btn-default">Edit attr value</a>
                                            </p>
                                            <p>
                                                <input type="submit" form="form_del" class="btn btn-danger delete-confirm" value="Delete attr value">
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-xs-12 col-lg-4">
                                <p>Attribute values not added</p>
                            </div>
                        @endforelse
                            <div class="col-xs-12 col-lg-4">
                                <p>
                                    <a href="{{ route('attributeValues.create', ['attr_id' => $attribute->id]) }}" class="btn btn-success">Add attr value</a>
                                </p>
                            </div>

                    </div>
                    <hr>
                @empty
                    <div class="col-xs-12 col-lg-4">
                        <p>Attributes not added</p>
                    </div>
                @endforelse

            </div>
        </div>
    </div>
</div>
@endif
