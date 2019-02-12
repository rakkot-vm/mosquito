<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function create(Request $request)
    {
        $secret_key = Setting::where('title', 'stripe_secret_key')->get()->first()->value;
        $currency = Setting::where('title', 'currency')->get()->first()->value;

        \Stripe\Stripe::setApiKey($secret_key);

        $intent = \Stripe\PaymentIntent::create([
            "amount" => $request->amount,
            "currency" => $currency,
            "allowed_source_types" => ["card"],
        ]);

        return response()->json(["client_secret" => $intent->client_secret]);
    }
}
