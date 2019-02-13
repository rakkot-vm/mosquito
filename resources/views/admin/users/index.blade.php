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
                    <table id="users_table" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="users_table_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_desc" tabindex="0" aria-controls="users_table" rowspan="1" colspan="1" >Name</th>
                                <th class="sorting" tabindex="0" aria-controls="users_table" rowspan="1" colspan="1">Email</th>
                                <th class="sorting" tabindex="0" aria-controls="users_table" rowspan="1" colspan="1">Role</th>
                                <th class="sorting" tabindex="0" aria-controls="users_table" rowspan="1" colspan="1">create data</th>
                                <th class="sorting" tabindex="0" aria-controls="users_table" rowspan="1" colspan="1">update data</th>
                            </tr>
                        </thead>

                        <tbody>
                        @forelse($users as $user)

                            <tr role="row" class="odd">
                                <td class="sorting_1"><a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a></td>
                                <td class="">{{ $user->email }}</td>
                                <td>{{ $user->getRoleNames()->first() }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>{{ $user->updated_at }}</td>
                            </tr>

                        @empty

                        @endforelse
                        </tbody>

                        <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">Name</th>
                                <th rowspan="1" colspan="1">Email</th>
                                <th rowspan="1" colspan="1">Role</th>
                                <th rowspan="1" colspan="1">create data</th>
                                <th rowspan="1" colspan="1">update data</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('inner_js')
    <script>
        $(function () {
            $('#users_table').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            });
        });
    </script>
@stop