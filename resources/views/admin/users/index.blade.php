@extends('layouts.admin')

@section('title', 'user')
@section('h1_title', 'users')

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <a href="{{ route('users.create') }}" class="btn btn-primary">Create</a>
                </div>

                <div class="box-body">
                    <table id="users_table" class="table table-hover" role="grid" style="width:100%">
                        <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">create data</th>
                            <th scope="col">update data</th>
                        </tr>
                        </thead>

                        @forelse($users as $user)
                            <tbody>
                            <tr>
                                <td><a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a></td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->getRoleNames()->first() }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>{{ $user->updated_at }}</td>
                            </tr>
                            </tbody>
                        @empty

                        @endforelse

                        <tfoot>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">create data</th>
                            <th scope="col">update data</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#users_table').DataTable();
        } );
    </script>
@stop