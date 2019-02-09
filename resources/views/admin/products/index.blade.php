@extends('layouts.admin')

@section('title', 'Products')
@section('h1_title', 'Products')

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                {{--<div class="box-header">--}}
                    {{--<a href="{{ route('products.create') }}" class="btn btn-primary">Create</a>--}}
                {{--</div>--}}

                <div class="box-body">
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
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#products_table').DataTable();
        } );
    </script>
@stop