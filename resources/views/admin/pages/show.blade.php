@extends('layouts.admin')

@section('title', 'page : '. $page->title)
@section('h1_title', 'page : '. $page->title)

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">

                <div class="box-header with-border">
                    {{Form::open(['method'  => 'DELETE', 'route' => ['pages.destroy', $page->id], 'id' => 'form_del'])}}
                    {{Form::close()}}
                    <div class="form-group">
                        <a href="{{ route('pages.edit', ['id' => $page->id]) }}" class="btn btn-success">Edit</a>

                        <input type="submit" form="form_del" class="btn btn-danger delete-confirm" value="Delete page">
                    </div>
                </div>
                <div class="box-body  with-border">
                    <div class="row">
                        <div class="col-xs-12">
                            <p><strong>Title: </strong>{{ $page->title }}</p>

                            <p><strong>Content: </strong></p>
                            <p>{{ $page->content }}</p>

                            <p><strong>Created at: </strong>{{ $page->created_at }}</p>
                            <p><strong>Updated at: </strong>{{ $page->updated_at }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection