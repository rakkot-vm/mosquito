@extends('layouts.admin')

@section('title', 'text : '. $text->title)
@section('h1_title', 'text : '. $text->title)

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">

                <div class="box-header with-border">
                    {{Form::open(['method'  => 'DELETE', 'route' => ['texts.destroy', $text->id], 'id' => 'form_del'])}}
                    {{Form::close()}}
                    <div class="form-group">
                        <a href="{{ route('texts.edit', ['id' => $text->id]) }}" class="btn btn-success">Edit</a>

                        <input type="submit" form="form_del" class="btn btn-danger delete-confirm" value="Delete text">
                    </div>
                </div>
                <div class="box-body  with-border">
                    <div class="row">
                        <div class="col-xs-12">
                            <p><strong>Text type: </strong>{{ $text->type }}</p>
                            <p><strong>Text ID: </strong>{{ $text->text_id }}</p>
                            <p><strong>Text: </strong>{{ $text->text }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection