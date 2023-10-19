<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;

class UserOrderController extends Controller
{
    function store()
    {
        // dd(\request()->all());






        $comment = \request()->get("comment");
        $product_id = \request()->get("productID");
        $quantity = \request()->get("quantity");
        $userID = \request()->get("userID");
        // dd($product_id);

        \request()->validate([
            'quantity' => 'required|array|min:1',

        ], [
            "quantity.required" => "no items",
        ]);

        $order = new Order();
        $order->comment = $comment;
        $order->totalPrice = intval($quantity);
        $order->user_id = $userID;

        $order->save();
        for ($i = 0; $i < count($product_id); $i++) {
            $order->product()->attach([$product_id[$i] => ['quantity' => $quantity[$i]]]);
        }
        // $order->product()->attach([3 => ['quantity' => 1], 4 => ['quantity' => 2], 5 => ['quantity' => 3]]);
        // dd($order);
    }
}
