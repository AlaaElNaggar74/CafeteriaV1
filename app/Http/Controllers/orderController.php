<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Models\User;
use App\Models\Product;
class orderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $user=Auth::id();

        // $order = Order::where('user_id', $user)->get();     
        // return view('orders.index',["orders"=>$order]);


        $user=Auth::id();

       

        $order = Order::where('user_id', $user)->get();   

       foreach($order as $ord){
           $product_order=DB::table('product_order')->where('order_id',$ord->id)->get();
        //   dd($product_order);
           $products=Product::get();
        //    dd($products);
           foreach($product_order as $product){
                //$prod=DB::table('product_order')->where('product_id',$product->id)->get();
                $prod = DB::table('products')->where('id',$product->product_id)->get();  
                //dd($prod);
                return view('orders.index',["orders"=>$order,"product_order"=>$prod]);
           }
        
           
           
       }
       
       
       return view('orders.index',["orders"=>$order]);
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        return view('orders.index',['order'=>$order]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();     
        return to_route("orders.index"); 
    }
}
