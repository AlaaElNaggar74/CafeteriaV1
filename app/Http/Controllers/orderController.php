<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Models\User;
use App\Models\Product;
use Carbon\Carbon;
class orderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      
      
        $user=Auth::id();

       
        $order = Order::where('user_id', $user)->get();   
               
       return view('orders.index',["orders"=>$order]);
       
    }


    public function Test($Order_id)
    {

        $order = Order::find($Order_id); 
      
       // $productNames = $order->products()->pluck('name');
        
        
        $productDetails = DB::table('products')
                        ->join('product_order', 'products.id', '=', 'product_order.product_id')
                        ->join('orders', 'product_order.order_id', '=', 'orders.id')
                        ->where('orders.id', $Order_id)->get();
                       
        
       
       // return view("orders.index",["products",$productNames]);
     
       //return view('orders.index',["productDetails"=>$productDetails,"orders"=>$order]);

       return $productDetails;
       
   

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
        
        // $productDetails = DB::table('products')
        // ->join('product_order', 'products.id', '=', 'product_order.product_id')
        // ->join('orders', 'product_order.order_id', '=', 'orders.id')
        // ->where('orders.user_id',Auth::id())->get();

        // dd($productDetails);


        // foreach($productDetails as $productprice){
        //     foreach($products as $product){
        //         if($productprice->product_id==$product->id)
        //             $productprice->totalPrice+=$productprice->quantity * $productprice->price;

        //        else{
        //         $productprice->totalPrice=$product->price;
        //        }
        //     }
           
        // }
            
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        $products = DB::table('products')
        ->join('product_order', 'products.id', '=', 'product_order.product_id')
        ->join('orders', 'orders.id', '=', 'product_order.order_id')
        ->where('orders.user_id',Auth::id())
        ->get();

        return view('orders.index',['order'=>$order,"products"=>$products]);
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


   

    function searchByDate(Request $request){

     
        $user = auth()->user();
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $orders = Order::where('user_id', $user->id)
        ->whereBetween('created_at', [$start_date, $end_date])
        ->get();
        return view('orders.index', compact('orders'));
    
    }




}
