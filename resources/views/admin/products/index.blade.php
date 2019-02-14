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

                <script src="https://js.stripe.com/v3/"></script>

                <input id="cardholder-name" type="text">
                <!-- placeholder for Elements -->
                <div id="card-element"></div>
                <button id="card-button" data-secret="pi_1E3kGJFylioTibqRlDAtPOUB_secret_WUrAKvlfTaNB9cJfjzu8kCVWr">
                    Submit Payment
                </button>
                {{--END NEW TEST--}}

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

                        <tbody>
                        @forelse($data as $product)

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

                        @empty

                        @endforelse
                        </tbody>

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

@section('inner_js')
    <script>
        $(document).ready(function() {
            $('#products_table').DataTable({
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