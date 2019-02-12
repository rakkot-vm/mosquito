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
{{--TEST--}}
                <script type="text/javascript" src="https://js.stripe.com/v3/"></script>
                <script type="text/javascript">
                    // Stripe.setPublishableKey('pi_1E31nrFylioTibqRvhiCwrWV_secret_tukvTXbU1yLcffbNnMHzhLhLc');
                    var stripe = Stripe('pk_test_AcmqjKi2CpY5PgKpGDwKp8SV', {
                        betas: ['payment_intent_beta_3']
                    });

                    var elements = stripe.elements();
                    var cardElement = elements.create('card');
                    cardElement.mount('#card-element');
                </script>

                {{--<form action="" method="POST" id="payment-form">--}}
                    {{--<span class="payment-errors"></span>--}}
                    {{--<label>Card Number</label>--}}
                    {{--<input type="text" size="20" data-stripe="number">--}}
                    {{--<label>Expiration (MM/YY)</label>--}}
                    {{--<input type="text" size="2" data-stripe="exp_month">--}}
                    {{--<input type="text" size="2" data-stripe="exp_year">--}}
                    {{--<label>CVC</label>--}}
                    {{--<input type="text" size="4" data-stripe="cvc">--}}
                    {{--<input type="submit" class="submit" value="Submit">--}}

                    <input id="cardholder-name" type="text">
                    <!-- placeholder for Elements -->
                    <div id="card-element"></div>
                    <button id="card-button" data-secret="pi_1E31nrFylioTibqRvhiCwrWV_secret_tukvTXbU1yLcffbNnMHzhLhLc">
                        Submit Payment
                    </button>
                {{--</form>--}}
{{--END TEST--}}
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

@section('inner_js')
    <script>
        $(document).ready(function() {
            $('#products_table').DataTable();
        } );
    </script>
@stop