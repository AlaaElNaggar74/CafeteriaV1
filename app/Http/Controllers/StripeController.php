<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class StripeController extends Controller
{
    //

    public function checkOut()
    {
        return view('checkOut.checkOut');
    }
    public function session(Request $request)
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));
 
        $productname = $request->get('productname');
        $totalprice = $request->get('total');

        $two0 = "00";
        $total = "$totalprice$two0";
 
        $session = \Stripe\Checkout\Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'USD',
                        'product_data' => [
                            "name" => $productname,
                        ],
                        'unit_amount'  => $total,
                    ],
                    'quantity'   => 1,
                ],
                 
            ],
            'mode'        => 'payment',
            'success_url' => route('success'),
            'cancel_url'  => route('checkOut'),
        ]);
 
        return redirect()->away($session->url);

            }

            public function success()
            {
                // return "Thanks for you order You have just completed your payment. The seeler will reach out to you as soon as possible";
                if (Auth::user()) {
                    if ( Auth::user()->role != "admin") {
                        # code...
                        return to_route("indexUser");
                    }
                    return to_route("adminIndex");
            
                }
              



                // return to_route("indexUser");

           
            }
}
