@extends('layouts.admin')

@section('title', 'order')
@section('h1_title', 'orders')

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                {{--<div class="box-header">--}}
                    {{--<a href="{{ route('orders.create') }}" class="btn btn-primary">Create</a>--}}
                {{--</div>--}}

                <div class="box-body">
                    <table id="orders_table" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="orders_table_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_desc" tabindex="0" aria-controls="orders_table" rowspan="1" colspan="1" >Order Id</th>
                                <th class="sorting" tabindex="0" aria-controls="orders_table" rowspan="1" colspan="1">Status</th>
                                <th class="sorting" tabindex="0" aria-controls="orders_table" rowspan="1" colspan="1">Amount</th>

                                <th class="sorting" tabindex="0" aria-controls="orders_table" rowspan="1" colspan="1">Name</th>
                                <th class="sorting" tabindex="0" aria-controls="orders_table" rowspan="1" colspan="1">Phone</th>
                                <th class="sorting" tabindex="0" aria-controls="orders_table" rowspan="1" colspan="1">Email</th>
                                <th class="sorting" tabindex="0" aria-controls="orders_table" rowspan="1" colspan="1">Land</th>
                                <th class="sorting" tabindex="0" aria-controls="orders_table" rowspan="1" colspan="1">City</th>
                                
                                <th class="sorting" tabindex="0" aria-controls="orders_table" rowspan="1" colspan="1">create data</th>
                                <th class="sorting" tabindex="0" aria-controls="orders_table" rowspan="1" colspan="1">update data</th>
                            </tr>
                        </thead>

                        <tbody>
                        @forelse($orders as $order)

                            <tr role="row" class="odd">
                                <td class="sorting_1"><a href="{{ route('orders.show', $order->id) }}">{{ $order->id }}</a></td>

                                <td class="sorting_1">
                                    @if($order->status == 'paid')
                                        <span class="label label-success">paid</span>
                                    @elseif($order->status == 'not paid')
                                        <span class="label label-warning">not paid</span>
                                    @else
                                        <span class="label label-danger">undefined status</span>
                                    @endif
                                </td>

                                <td>{{ $order->amount }}</td>

                                <td>{{ $order->first_name .' '. $order->last_name }}</td>
                                <td>{{ $order->phone }}</td>
                                <td>{{ $order->email }}</td>
                                <td>{{ $order->land }}</td>
                                <td>{{ $order->city }}</td>

                                <td>{{ $order->created_at }}</td>
                                <td>{{ $order->updated_at }}</td>
                            </tr>

                        @empty

                        @endforelse
                        </tbody>

                        <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">Order Id</th>
                                <th rowspan="1" colspan="1">Status</th>
                                <th rowspan="1" colspan="1">Amount</th>

                                <th rowspan="1" colspan="1">Name</th>
                                <th rowspan="1" colspan="1">Phone</th>
                                <th rowspan="1" colspan="1">Email</th>
                                <th rowspan="1" colspan="1">Land</th>
                                <th rowspan="1" colspan="1">City</th>

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
            $('#orders_table').DataTable({
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