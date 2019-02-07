@extends('adminlte::page')

@section('title', 'Products')
@section('h1_title', 'Products')

@section('content')

    <section class="buttons">
            <a href="{{ route('products.create') }}" class="btn btn-default">Create</a>
    </section>

    <section class="content">
        <table id="products_table" class="table table-hover" role="grid" style="width:100%">
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
                    <td><a href="{{ route('products.show', $product->id) }}">{{ $product->title }}</a></td>
                    <td>{{ $product->attributes()->count() }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        @unless ($product->img)
                            {{ $product->img }}
                        @endunless
                    </td>
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
    </section>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#products_table').DataTable();
        } );
    </script>
@stop