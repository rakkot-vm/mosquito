@extends('layouts.admin')

@section('title', 'Pages')
@section('h1_title', 'Pages')

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <a href="{{ route('pages.create') }}" class="btn btn-primary">Create</a>
                </div>

                <div class="box-body">
                    <table id="pages_table" class="table table-hover" role="grid" style="width:100%">
                        <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">create data</th>
                            <th scope="col">update data</th>
                        </tr>
                        </thead>

                        <tbody>
                        @forelse($pages as $page)

                            <tr>
                                <td><a href="{{ route('pages.show', $page->id) }}">{{ $page->title }}</a></td>
                                <td>{{ $page->created_at }}</td>
                                <td>{{ $page->updated_at }}</td>
                            </tr>

                        @empty

                        @endforelse
                        </tbody>

                        <tfoot>
                        <tr>
                            <th scope="col">Title</th>
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

@section('inner_js')
    <script>
        $(document).ready(function() {
            $('#pages_table').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            });
        } );
    </script>
@stop