@extends('adminlte::page')

@section('title', 'Products')
@section('content_header')
    <h1>Products</h1>
@stop

@section('content')
    <table id="example" class="table table-hover" role="grid" style="width:100%">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">attributes count</th>
                <th scope="col">price</th>
                <th scope="col">Image</th>
                <th scope="col">create data</th>
                <th scope="col">update data</th>
            </tr>
        </thead>

        @forelse($data as $product)
        <tbody>
            <tr>
                <td>{{ $product->title }}</td>
                <td>{{ $product->attributes()->count() }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->img }}</td>
                <td>{{ $product->created_at }}</td>
                <td>{{ $product->updated_at }}</td>
            </tr>
        </tbody>
        @empty

        @endforelse

        <tfoot>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">attributes count</th>
                <th scope="col">price</th>
                <th scope="col">Image</th>
                <th scope="col">create data</th>
                <th scope="col">update data</th>
            </tr>
        </tfoot>
    </table>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@stop