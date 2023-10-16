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
        // $user=Auth::id();

        // $order = Order::where('user_id', $user)->get();     
        // return view('orders.index',["orders"=>$order]);


        $user=Auth::id();

       

        $order = Order::where('user_id', $user)->get();   
       
    //    foreach($order as $ord){
    //        $product_order=DB::table('product_order')->where('order_id',$ord->id)->get();
          // dd($product_order);
        //    $products=Product::get();
        //    //dd($products);
        //    foreach($products as $product){
        //     //dd($product);
        //     dd($ord);
        //         //$prod=DB::table('product_order')->where('product_id',$product->id)->get();
        //         $prod = DB::table('products')->where('id',$ord->product_id)->get();  
        //         dd($prod);
        //         return view('orders.index',["orders"=>$order,"product_order"=>$prod]);
        //    }

       
        
          $products=DB::table('products')->join('product_order','products.id','=','product_order.product_id')
          ->join('orders','orders.id','=','product_order.order_id')
          ->where('orders.user_id',Auth::id())
          ->get();
          
        //dd($products);
        //    if($order){
        //    $products=DB::table('users')->join('orders','users.id','=','orders.user_id')->get();
        //    dd($products);
        //    }
       //}
       
       
       return view('orders.index',["orders"=>$order,"products"=>$products]);
       
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


    // public function searchByDate(Request $request)
    // {
    //     this->validate($request,[
    //     'start_date' => 'required|date',
    //     'end_date' => 'required|date|before_or_equal:start_date',
    //     ]);

    //     $start = Carbon::parse($request->start_date);
    //     $end = Carbon::parse($request->end_date);

    //     $get_all_order = Order::whereDate('created_at','<=',$end->format('m-d-y'))
    //     ->whereDate('created_at','>=',$start->format('m-d-y'));

    //     return view('orders.index', compact('get_all_order'));
    // }
}
