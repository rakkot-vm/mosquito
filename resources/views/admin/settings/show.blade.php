@extends('layouts.admin')

@section('title', 'Setting : '. $data->title)
@section('h1_title', 'Setting : '. $data->title)

@section('content')
    <div class="row content">
        <div class="col-xs-6">
            <div class="form-group">
                <label for="type">Type:</label>
                <p>{!! $data->type !!} </p>
            </div>

            <div class="form-group">
                <label for="title">Title:</label>
                <p>{!! $data->title !!} </p>
            </div>

            <div class="form-group">
                <label for="value">Value:</label>
                <p>{!! $data->value !!} </p>
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
    </div>
@endsection