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
                        <a href="{{ route('products.edit', ['id' => $product->id]) }}" class="btn btn-default">Edit</a>

                        <input type="submit" form="form_del" class="btn btn-danger delete-user" value="Delete product" onsubmit="return ConfirmDelete()">
                    </div>

                </div>
                <div class="box-body  with-border">
                    <div class="row">
                        <div class="col-xs-12 col-lg-3">
                            <div class="min-height-200">
                                <img src="{{ $product->img ? url($product->img) : '' }}" class="img-responsive">
                            </div>
                        </div>

                        <div class="col-xs-12 col-lg-3">
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
            </div>
        </div>
    </div>
@endsection