<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;

class UserOrder extends Controller
{
    function store()
    {
        dd(\request()->all());






        // $name = \request()->get("name");
        // $price = \request()->get("price");
        // $stock = \request()->get("stock");
        // $category_id = \request()->get("category_id");
        // // $category = \request()->get("category");
        // $product = new Product();

        // $product->name = $name;
        // $product->price = $price;
        // $product->stock = $stock;
        // $product->category_id = $category_id;
        // // $product->category = $category;

        // $product->save();

        // return to_route("adminProducts");
    }
}
