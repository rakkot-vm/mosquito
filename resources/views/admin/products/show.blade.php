@extends('adminlte::page')

@section('title', 'Product : '. $data->title)
@section('h1_title', 'Product : '. $data->title)

@section('content')
    <div class="row content">
        <div class="col-xs-6">
            <div class="form-group">
                <label for="title">Product:</label>
                <p>{!! $data->title !!} </p>
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <p>{!! $data->price !!} </p>
            </div>

            <div class="form-group">
                <label for="img">Img:</label>
                <p>
                    @if ($data->img)
                        <img src="{{ $data->img }}" alt="{{ $data->title . '-img' }}">
                    @endif
                </p>
            </div>
        </div>

        <div class="col-xs-6">
            <div class="form-group">
                <label for="created_at">Created_at:</label>
                <p>{!! $data->created_at !!} </p>
            </div>

            <div class="form-group">
                <label for="updated_at">Updated_at:</label>
                <p>{!! $data->updated_at !!} </p>
            </div>
        </div>

        <div class="form-group col-xs-12">
            <label for="attributes">Attributes:</label>
            <div class="row">

                @forelse($data->attributes as $attribute)
                    <label for="attributes" class="col-xs-12">Attribute : {!! $attribute->title !!}</label>
                <div class="attribute-wrap">
                    <div class="form-group col-xs-12 col-sm-4">
                        <label for="price">Price:</label>
                        <p>{!! $attribute->price !!} </p>
                    </div>

                    <div class="form-group col-xs-12 col-sm-4">
                        <label for="updated_at">Updated_at:</label>
                        <p>{!! $attribute->updated_at !!} </p>
                    </div>

                    <div class="form-group col-xs-12 col-sm-4">
                        <label for="created_at">Created_at:</label>
                        <p>{!! $attribute->created_at !!} </p>
                    </div>

                    <div class="form-group col-xs-12">
                        <label for="img">Images:</label>
                        <p>{!! $attribute->img !!} </p>
                    </div>
                </div>
                @empty
                <p>Attributes not added</p>
                @endforelse

            </div>
        </div>
    </div>
@endsection