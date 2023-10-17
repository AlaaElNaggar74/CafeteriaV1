<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Order;


class productsController extends Controller
{
    //

    // Index Function***********************
    function adminProducts()
    {
        $products = product::all();
        return view("adminView.products", ["products" => $products]);
    }

    // Destroy Function***********************
    function destroyProducts($id)
    {
        $product = product::findorfail($id);
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
        $product = product::findorfail($id);
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
        $product = new product();

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
        $product = product::findorfail($id);
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
        $productID = product::where("id", $id)->first();

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
        $products = product::all();
        return view("adminView.index", ["products" => $products]);
    }


    function adminUser()
    {

        return view("adminView.users");
    }
    function adminManualOrder()
    {

        //$user = Auth()->user();
 
 
            $orders = Order::join('users','users.id','orders.user_id')
                                             ->select('users.name as username','orders.*')
                                            // ->where('user_id',$user->id)
                                            // ->get()->keyBy('id');
                                             ->paginate(5);
           
          //dd($orders);
        return view('adminView.manualOrder',['orders' => $orders])->with('i', (request()->input('page', 1)-1) * 5);
    }

    public function confirm(Request $request, $id)
    {
        $order= Order::findOrFail($id);
 
        // Update the order confirmation field
        if($order->status === 'Processing')
        {
          $order->status = 'Out for Delivery';
        }
        else if($order->status === 'Out for Delivery')
        {
            $order->status = 'Done';
        }
        //$reservation->confirmed_by = auth()->user()->id;
        $order->save();
 
        return redirect()->route('adminManualOrder');
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
