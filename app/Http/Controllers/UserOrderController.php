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

        $user_obj = User::find($user);
        // dd($user_obj);
        if ($user_obj->role == "admin") {
            $userID = \request()->get("userID");
        } else {
            $userID = $user;
        }

        $comment = \request()->get("comment");
        $product_id = \request()->get("productID");
        $quantity = \request()->get("quantity");


        // dd($products);

        \request()->validate([
            'quantity' => 'required|array|min:1',
            'userID' => 'required|not_regex:/^[a-zA-Z\s]*$/',
        ], [
            "quantity.required" => "no items",
            "userID.required" => "no user selected",
            "userID.not_regex" => "no user selected",
        ]);
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
