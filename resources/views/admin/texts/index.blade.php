@extends('layouts.admin')

@section('title', 'Texts')
@section('h1_title', 'Texts')

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <a href="{{ route('texts.create') }}" class="btn btn-primary">Create</a>
                </div>

                <div class="box-body">
                    <table id="texts_table" class="table table-hover" role="grid" style="width:100%">
                        <thead>
                        <tr>
                            <th scope="col">Text ID</th>
                            <th scope="col">Text type</th>
                            <th scope="col">Text</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>

                        <tbody>
                        @forelse($texts as $text)
                            <tr>
                                <td><a href="{{ route('texts.edit', $text->id) }}">{{ $text->text_id }}</a></td>
                                <td>{{ $text->type }}</td>
                                <td>{{ $text->text }}</td>
                                <td></td>
                            </tr>
                        @empty

                        @endforelse
                        </tbody>

                        <tfoot>
                        <tr>
                            <th scope="col">Text ID</th>
                            <th scope="col">Text type</th>
                            <th scope="col">Text</th>
                            <th scope="col"></th>
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
            $('#texts_table').DataTable({
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