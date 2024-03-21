<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function checkout()
    {
        return view('index');
    }
    public function session(Request  $request){
        \Stripe\Stripe::setApiKey(config('stripe.sk'));
 
        
 
        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'], // Only allow card payments
    'line_items' => [
        [
            'price_data' => [
                'currency' => 'USD',
                'unit_amount' => 1000, 
                'product_data' => [
                    'name' => 'Your Product Name',
                ],
            ],
            'quantity' => 1,
        ],
    ],
    'mode' => 'payment',
    'success_url' => route('success'),
    'cancel_url' => route('checkout'),
]);

 
        return redirect()->away($session->url);
    }
    public function success(){
        return "payment sucessful";
    }
}
