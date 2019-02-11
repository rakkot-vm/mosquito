@extends('layouts.admin')

@section('title', 'Edit user')
@section('h1_title', 'Edit user : ' .$user->title)

@section('content')
    {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}
    <div class="row">

        @include('admin.users.fields', ['action' => 'Update'])

    </div>
    {!! Form::close() !!}
@endsection