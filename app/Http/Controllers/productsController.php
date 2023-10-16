<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\Product;
=======
use App\Models\product;
>>>>>>> 03f2c70ab527a899e453ae69affcffbd9b39a6fc

class productsController extends Controller
{
    //

    // Index Function***********************
    function adminProducts()
    {
<<<<<<< HEAD
        $products = Product::all();
=======
        $products = product::all();
>>>>>>> 03f2c70ab527a899e453ae69affcffbd9b39a6fc
        return view("adminView.products", ["products" => $products]);
    }

    // Destroy Function***********************
    function destroyProducts($id)
    {
<<<<<<< HEAD
        $product = Product::findorfail($id);
=======
        $product = product::findorfail($id);
>>>>>>> 03f2c70ab527a899e453ae69affcffbd9b39a6fc
        if ($product->image) {
            try {
                unlink("images/productsImage/{$product->image}");
            } catch (\Throwable $th) {
            }
        }
        $product->delete();
        return to_route("adminProducts");
    }

    // show Function***********************
    function showProduct($id)
    {
<<<<<<< HEAD
        $product = Product::findorfail($id);
=======
        $product = product::findorfail($id);
>>>>>>> 03f2c70ab527a899e453ae69affcffbd9b39a6fc
        return view("adminView.viewProducts", ["viewItem" => $product]);
    }

    // Add  Function***********************
    function addProduct()
    {
        return view("adminView.addProduct");
    }

    //  Store Function***********************
    function store()
    {
        $request = \request();
        $request_data = \request()->all();
        if ($request->hasFile("image")) {
            $image = $request_data['image'];
            $path = $image->store("catLogo", "products_images");
            $image = $path;
        }

        \request()->validate([
            'name' => 'required|min:3|unique:products',
            'image' => 'required|unique:products',
        ], [
            "name.required" => "The name Is Required",
            "name.unique" => "The name Is unique",
            "name.min" => "The name At Least 3 Char",

            "image.required" => "The Image Source Is Required",
            "image.unique" => "The Image Source Used Before",

        ]);

        $name = \request()->get("name");
        $price = \request()->get("price");
        // $category = \request()->get("category");
<<<<<<< HEAD
        $product = new Product();
=======
        $product = new product();
>>>>>>> 03f2c70ab527a899e453ae69affcffbd9b39a6fc

        $product->name = $name;
        $product->price = $price;
        // $product->category = $category;
        $product->image = $image;
        $product->save();

        return to_route("adminProducts");
    }

    //  Edit Function***********************
    function editProduct($id)
    {
<<<<<<< HEAD
        $product = Product::findorfail($id);
=======
        $product = product::findorfail($id);
>>>>>>> 03f2c70ab527a899e453ae69affcffbd9b39a6fc
        return view("adminView.editProduct", ["editItem" => $product]);
    }

    //  Update Function***********************
    function updateProduct()
    {

        $request = \request();
        $request_data = \request()->all();
        if ($request->hasFile("image")) {
            $image = $request_data['image'];
            $path = $image->store("catLogo", "products_images");
            $image = $path;
        }

        $id = \request()->get("id");
<<<<<<< HEAD
        $productID = Product::where("id", $id)->first();
=======
        $productID = product::where("id", $id)->first();
>>>>>>> 03f2c70ab527a899e453ae69affcffbd9b39a6fc

        $name = \request()->get("name");
        $price = \request()->get("price");
        // $category = \request()->get("category");

        $productID->name = $name;
        $productID->price = $price;
        // $productID->category = $category;
        $productID->image = $image;
        $productID->save();


        return to_route("adminProducts");
    }






    function index()
    {

        return view("userView.index");
    }
    function orders()
    {

        return view("userView.myOrderUser");
    }
    function adminIndex()
    {
<<<<<<< HEAD
        $products = Product::all();
=======
        $products = product::all();
>>>>>>> 03f2c70ab527a899e453ae69affcffbd9b39a6fc
        return view("adminView.index", ["products" => $products]);
    }


    function adminUser()
    {

        return view("adminView.users");
    }
    function adminManualOrder()
    {

        return view("adminView.manualOrder");
    }
    function adminChecks()
    {

        return view("adminView.checks");
    }
    function addUser()
    {

        return view("adminView.addUser");
    }
    function view($id)
    {

        return view("adminView.view", ["viewItem" => $id]);
    }
    function editUser($id)
    {

        return view("adminView.edit", ["editItem" => $id]);
    }
    function destroyUser()
    {

        return view("adminView.users");
    }
}
