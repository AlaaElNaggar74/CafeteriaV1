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

           $order = Order::where('user_id', $user_id)->get();
   
           return $order;
  
    }


    public function showProducts($order_id)
    {

       
      
        // $productNames = $order->products()->pluck('name');
         
         
         $productDetails = DB::table('products')
                         ->join('product_order', 'products.id', '=', 'product_order.product_id')
                         ->join('orders', 'product_order.order_id', '=', 'orders.id')
                         ->where('orders.id', $order_id)->get();
                        
             
         //dd($productDetails);
        return $productDetails;
       
 
    }


   
   


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
