<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $user=Auth::id();

        $order = Order::where('user_id', $user)->get();     
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    //// Admin => Orders

    function adminManualOrder()
    {

        //$user = Auth()->user();
 
 
            $orders = Order::join('users','users.id','orders.user_id')
                                             ->select('users.name as username','orders.*')
                                            // ->where('user_id',$user->id)
                                            // ->get()->keyBy('id');
                                               ->paginate(5);

            foreach($orders as $order)
            {
                /*
                $productDetails = Product::join('product_order', 'products.id', '=', 'product_order.product_id')
                                         ->join('orders', 'product_order.order_id', '=', 'orders.id')
                                         ->where('orders.id', $order->id)->get();  
                                         dd($productDetails);
                                         */
                                                            
            }    
            return view('adminView.manualOrder',['orders' => $orders])->with('i', (request()->input('page', 1)-1) * 5);                                                           
         
       // return view('adminView.manualOrder',['orders' => $orders,'productDetails' => $productDetails])->with('i', (request()->input('page', 1)-1) * 5);
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
}
