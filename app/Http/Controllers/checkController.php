<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
class checkController extends Controller
{
    function index(){
        $users=User::all();

      //return products
        $productDetails = DB::table('products')->join('product_order', 'products.id', '=', 'product_order.product_id')->get();
        
        //  $orderNameUser = DB::table('users')
        //  ->join('orders', 'users.id', '=', 'orders.user_id')
        //  ->get();

        //return orders

       
        $orders=Order::all();
        
        return view('adminView.checks',["users"=>$users,"productDetails"=>$productDetails,"orders"=>$orders]);
    }


    function getUserOrderProduct(Request $request){

        $user_id=$request->input('user_id');
        
       
      

       

    }

    public function showOrders($user_id,Request $request)
    {
        //dd($user_id);
       // $user = User::find($user_id); 
      
        // foreach($user as $users){
        //     $userId=$users->id;
        // }
        
      

        
       
       // $productNames = $order->products()->pluck('name');
       

           $order = Order::where('user_id', $user_id)->get();
       
       
       //dd($user_id);
      
       
       // return view("orders.index",["products",$productNames]);
     
       //return view('orders.index',["productDetails"=>$productDetails,"orders"=>$order]);


       //dd($productDetails);
       
       return $order;
       
 
    }


    // public function showOrderProduct($user_id)
    // {

    //     $user = User::find($user_id); 
      
        
    //    // $productNames = $order->products()->pluck('name');
    //    $order = Order::where('user_id', $user)->get();
       
       
      
       
    //    // return view("orders.index",["products",$productNames]);
     
    //    //return view('orders.index',["productDetails"=>$productDetails,"orders"=>$order]);


    //    //dd($productDetails);
    //    return $order;
       
 
    // }


   
   


    function searchByDate(Request $request){

        
        //$users=User::all();
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $user_id=$request->input('user_id');

        //dd($userName);

        
        // $users = DB::table('users')->join('orders','users.id','=','orders.user_id')
        // ->where('orders.user_id','=',$user_id)
        // ->whereBetween('orders.created_at', [$start_date, $end_date])
        // ->get();



        $orders = Order::where('user_id', $user_id)->get(); 
            

        $users = User::where('id', $user_id)->get();   
       
        
       

        return view('adminView.checks', ['users'=>$users,'orders'=>$orders]);
    
    }
}
