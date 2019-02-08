<div class="col-xs-12">
    <div class="box box-primary">

        <div class="row">
            <div class="col-xs-12 col-lg-3">
                <div class="form-group">
                    {!! Form::label('img', 'Image:') !!}
                    <div class="min-height-200">
                        <img src="{{ $product->img? url($product->img) : '' }}" id="preview-img" class="img-responsive">
                    </div>
                    {!! Form::file('img', ['class' => 'form-control image-upload', 'accept' => 'image/*'] ) !!}
                </div>
            </div>

            <div class="col-xs-12 col-lg-3">
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
            </div>

            <div class="box-body">

                @forelse($product->attributes as $attribute)
                    <a href="{{ route('attributes.show', ['id' => $attribute->id]) }}" class="">
                        <h4 class="col-xs-12">{!! $attribute->title !!}</h4>
                    </a>

                    <div class="row">

                        @forelse($attribute->attributeValues as $value)
                            <div class="col-xs-12 col-lg-3">
                                <div class="row">
                                    <div class="col-xs-12 col-lg-6">
                                        <p><strong>Preview image: </strong>
                                        <div class="min-height-200">
                                            <img src="{{ $value->preview_img ? url($value->preview_img) : '' }}" class="img-responsive">
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-lg-6">
                                        <p><strong>Title: </strong>{{ $value->title }}</p>
                                        <p><strong>Price: </strong>{{ $value->price }}</p>

                                        <a href="{{ url('/attributes/edit') }}" class="btn btn-default">Edit attribute value</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p>Attribute values not added</p>
                        @endforelse

                    </div>
                @empty
                    <p>Attributes not added</p>
                @endforelse

            </div>


            {{--<div class="form-group">--}}
                {{--<label for="attributes">Attributes:</label>--}}
                {{--<select name="attributes[]" id="attributes" class="form-control" multiple>--}}
                    {{--@forelse($data['attributes'] as $attribute)--}}
                        {{--<option value="{{ $attribute->id }}"--}}
                                {{--@if($attribute->selected)--}}
                                {{--selected--}}
                                {{--@endif--}}
                        {{-->--}}
                            {{--{{ $attribute->title }}--}}
                        {{--</option>--}}
                    {{--@endforeach--}}
                {{--</select>--}}
            {{--</div>--}}
        {{--</div>--}}
        </div>
    </div>
</div>
@endif
