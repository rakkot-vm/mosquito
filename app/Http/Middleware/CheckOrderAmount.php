<?php

namespace App\Http\Middleware;

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
//        if($request->amount == Order::calc($request->products)){
        if($request->amount == 1000){
            return $next($request);
        }

        return response()->json(['error' => 'Order data is outdated, amount is not correct'], 422);
    }
}
