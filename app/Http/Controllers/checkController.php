<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class checkController extends Controller
{
    protected function index(Request $request)
    {
        $users = User::all();

        $productDetails = DB::table('products')->join('product_order', 'products.id', '=', 'product_order.product_id')->get();


        $orders = Order::all();


        return view('adminView.checks', ["users" => $users, "productDetails" => $productDetails, "orders" => $orders]);
    }

    public function showOrders($user_id, Request $request)
    {

        $order = Order::where('user_id', $user_id)->get();

        return $order;
    }


    public function showProducts($order_id)
    {

        $productDetails = DB::table('products')
            ->join('product_order', 'products.id', '=', 'product_order.product_id')
            ->join('orders', 'product_order.order_id', '=', 'orders.id')
            ->where('orders.id', $order_id)->get();

        return $productDetails;
    }






    function searchByDate(Request $request)
    {

        $filtered = "false";

        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $user_id = $request->input('user_id');
        // dd($start_date);
        if ($request->input('user_id') == 'User') {
            $user = User::all();
            $orders = Order::where('user_id', $user_id)->get();

            return view('adminView.checks', ['users' => $user, 'orders' => $orders, 'filter' => $filtered]);
        } else {



            $user = User::where('id', $user_id)->first();
            $orders = Order::where('user_id', $user->id)
                ->whereBetween('user_id', [5, 10])
                ->orderBy('created_at', 'desc') // Change 'desc' to 'asc' for ascending order
                ->get();
            $filtered = "true";

            return view('adminView.checks', ['users' => $user, 'orders' => $orders, 'filter' => $filtered]);
        }
        // $orders = Order::query();

        // if ($user_id) {
        //     $orders = $orders->where('user_id', $user_id);
        // }
        // if ($start_date && $end_date) {
        //     $orders = $orders->whereBetween('created_at', [$start_date, $end_date]);
        // }

        // $orders = $orders->get();


        // $orders = Order::where('user_id', $user_id)->get(); 


        $user = User::where('id', $user_id)->first();
        $orders = Order::where('user_id', $user->id)
            ->whereBetween('created_at', [$start_date, $end_date])
            ->orderBy('created_at', 'desc') // Change 'desc' to 'asc' for ascending order
            ->get();

        return view('adminView.checks', ['users' => $user, 'orders' => $orders]);
    }
}
