<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;

class UserOrderController extends Controller
{
    function store()
    {
        // dd(\request()->all());

        $user = Auth::id();
        // dd($user);
        $user_obj = User::find($user);
        // dd($user_obj);


        $comment = \request()->get("comment");
        $product_id = \request()->get("productID");
        $quantity = \request()->get("quantity");

        if ($user_obj->role == "admin") {
            $userID = \request()->get("userID");
            \request()->validate([
                'quantity' => 'required|array|min:1',
                'userID' => 'required|not_regex:/^[a-zA-Z\s]*$/',
            ], [
                "quantity.required" => "no items",
                "userID.required" => "no user selected",
                "userID.not_regex" => "no users selected",
            ]);
        } else {
            $userID = $user;
            \request()->validate([
                'quantity' => 'required|array|min:1',

            ], [
                "quantity.required" => "no items",

            ]);
        }
        // dd($products);


        $orderTotalPrice = 0;
        for ($i = 0; $i < count($product_id); $i++) {
            $products = Product::findorfail($product_id[$i]);
            $orderTotalPrice = $orderTotalPrice + ($products->price * $quantity[$i]);
        }

        $order = new Order();
        $order->comment = $comment;
        $order->totalPrice = $orderTotalPrice;
        $order->user_id = $userID;

        $order->save();
        for ($i = 0; $i < count($product_id); $i++) {
            $order->product()->attach([$product_id[$i] => ['quantity' => $quantity[$i]]]);
        }
        // $order->product()->attach([3 => ['quantity' => 1], 4 => ['quantity' => 2], 5 => ['quantity' => 3]]);
        // dd($order);
        session()->flash('success', 'Order added successfully.');
        return redirect()->back();
    }
}
