{!!  __($texts['order_hello'], ['name' => $order->first_name . ' ' .$order->last_name])!!}

{!! __($texts['order_body'], ['orderNumber' => $order->id]) !!}

{!! __($texts['order_footer']) !!}