<?php

namespace App\Http\Middleware;

use App\Order;
use Closure;

class CheckPrivatePolicy
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
        if($request->private_policy){
            return $next($request);
        }

        return response()->json(['private_policy' => ['Private policy is required']], 422);
    }
}
