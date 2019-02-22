<?php

namespace App\Http\Middleware;

use App\Order;
use Closure;

class CheckOrderAmount
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->amount == (new Order)->calcAmountAll($request->products_json)){
            return $next($request);
        }

        return response()->json(['error' => 'Order data is outdated, amount is not correct'], 422);
    }
}
