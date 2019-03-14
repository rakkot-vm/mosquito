@extends('layouts.admin')

@section('title', 'Product : '. $product->title)
@section('h1_title', 'Product : '. $product->title)

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">

                <div class="box-header with-border">
                    <h3>Product properties</h3>

                    {{Form::open(['method'  => 'DELETE', 'route' => ['products.destroy', $product->id], 'id' => 'form_del'])}}
                    {{Form::close()}}
                    <div class="form-group">
                        <a href="{{ route('products.edit', ['id' => $product->id]) }}" class="btn btn-success">Edit</a>

                        <input type="submit" form="form_del" class="btn btn-danger delete-confirm" value="Delete product">
                    </div>

                </div>
                <div class="box-body  with-border">
                    <div class="row">
                        <div class="col-xs-12 col-lg-4">
                            <div class="min-height-200">
                                <img src="{{ $product->img ? url($product->img) : '' }}" class="img-responsive">
                            </div>

                            <div class="form-group">
                                @if (!empty($product->doc))
                                    <a href="{{ url($product->doc) }}">{{ $product->docName }}</a>
                                @else
                                    <p>Pdf document not loaded</p>
                                @endif
                            </div>
                        </div>

                        <div class="col-xs-12 col-lg-4">
                            <p><strong>Title: </strong>{{ $product->title }}</p>
                            <p><strong>Price: </strong>{{ $product->price }}</p>
                            <p><strong>Created at: </strong>{{ $product->created_at }}</p>
                            <p><strong>Updated at: </strong>{{ $product->updated_at }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="box">

                <div class="box-header with-border">
                    <h3>Product attributes</h3>
                </div>

                <div class="box-body">

                @forelse($product->attributes as $attribute)
                    <h4 class="col-xs-12">{!! $attribute->title !!}</h4>

                    <div class="row">

                    @forelse($attribute->attributeValues as $value)
                        <div class="col-xs-12 col-lg-4">
                            <div class="row">
                                <div class="col-xs-12 col-lg-6">
                                    <p><strong>Preview image: </strong></p>
                                    <div class="min-height-100">
                                        <img src="{{ $value->preview_img ? url($value->preview_img) : '' }}" class="img-responsive">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-lg-6">
                                    <p><strong>Title: </strong>{{ $value->title }}</p>
                                    <p><strong>Price: </strong>{{ $value->price }}</p>

                                    @if(!empty($value->additional))
                                        <hr>
                                        @foreach ($value->additional as $add_values)
                                            <p><strong>{{ $add_values['title']}}: </strong>{{ $add_values['value'] }}</p>
                                        @endforeach
                                    @endif
                                    {{--<a href="{{ url('/attributes/edit') }}" class="btn btn-default">Edit attribute value</a>--}}
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>Attribute values not added</p>
                    @endforelse

                    </div>
                    <hr>
                @empty
                    <p>Attributes not added</p>
                @endforelse

                </div>
            </div>
        </div>
    </div>
@endsection