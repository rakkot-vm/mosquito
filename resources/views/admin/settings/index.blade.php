@extends('layouts.admin')

@section('content_header')
    @include('layouts.flash-message')

    <h1>Settings</h1>
@stop

@section('content')

    <section class="buttons">
            <a href="{{ route('settings.create') }}" class="btn btn-default">Create</a>
    </section>

    <section class="content">
        <table id="products_table" class="table table-hover" role="grid" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">Type</th>
                    <th scope="col">title</th>
                    <th scope="col">value</th>
                    <th scope="col"></th>
                </tr>
            </thead>

            @forelse($data as $settings){{ dd($data) }}
            <tbody>
                <tr>
                    <td><a href="{{ route('settings.show', $settings->id) }}">{{ $settings->type }}</a></td>
                    <td>{{ $settings->title }}</td>
                    <td>{{ $settings->value }}</td>
                    <td>
                        <form id="form-del" action="{{ route('settings.destroy', $settings->id) }}" method="POST">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}

                        </form>
                        <button form="form-del" type="submit" class="btn btn-danger" value="{{ $settings->id }}">Del</button>
                        <a href="{{ route('settings.edit', $settings->id) }}" class="btn btn-success">Edit</a>
                    </td>
                </tr>
            </tbody>
            @empty

            @endforelse

            <tfoot>
                <tr>
                    <th scope="col">Type</th>
                    <th scope="col">title</th>
                    <th scope="col">value</th>
                    <th scope="col"></th>
                </tr>
            </tfoot>
        </table>
    </section>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#products_table').DataTable();
        } );
    </script>
@stop