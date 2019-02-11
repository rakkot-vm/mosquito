@extends('layouts.admin')

@section('title', 'user : '. $user->name)
@section('h1_title', 'user : '. $user->name)

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">

                <div class="box-header with-border">
                    <h3>user properties</h3>

                    {{Form::open(['method'  => 'DELETE', 'route' => ['users.destroy', $user->id], 'id' => 'form_del'])}}
                    {{Form::close()}}
                    <div class="form-group">
                        <a href="{{ route('users.edit', ['id' => $user->id]) }}" class="btn btn-success">Edit</a>

                        <input type="submit" form="form_del" class="btn btn-danger delete-confirm" value="Delete user">
                    </div>

                </div>
                <div class="box-body  with-border">
                    <div class="row">
                        <div class="col-xs-12 col-lg-4">
                            <p><strong>Name: </strong>{{ $user->name }}</p>
                            <p><strong>Email: </strong>{{ $user->email }}</p>
                            <p><strong>Roles: </strong>{{ implode(', ', $user->getRoleNames()->toArray()) }}</p>
                            <p><strong>Created at: </strong>{{ $user->created_at }}</p>
                            <p><strong>Updated at: </strong>{{ $user->updated_at }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection