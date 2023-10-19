<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class UserOrderController extends Controller
{
    function store()
    {
        // dd(\request()->all());






        $comment = \request()->get("comment");
        // $price = \request()->get("price");
        $quantity = \request()->get("quantity");
        $userID = \request()->get("userID");
        // $category = \request()->get("category");
        $order = new Order();

        $order->comment = $comment;
        // $order->price = $price;
        $order->totalPrice = intval($quantity);
        $order->user_id = $userID;
        // // $product->category = $category;

        $order->save();

        // return to_route("adminProducts");
    }
}
