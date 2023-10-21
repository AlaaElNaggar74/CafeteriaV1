<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Product;

class UserOrderController extends Controller
{
    function store()
    {
        // dd(\request()->all());

        $user = Auth::id();
        $users = new User();

        $user_obj = User::find($user);


        $comment = \request()->get("comment");
        $quantity = \request()->get("quantity");
        $userID = \request()->get("userID");
        $order = new Order();

        $order->comment = $comment;
        $order->totalPrice = intval($quantity);
        $order->user_id = $userID;

        $order->save();
    }
}
