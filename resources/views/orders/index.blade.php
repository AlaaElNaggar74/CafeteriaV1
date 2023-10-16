@extends('layouts.app')

@section('content')

<div class="userOrderPage">
    <div class="container">
        <h1 class=" ">My Order </h1>
        <div class="dat ">
            <span>Date From</span>
            <input type="date" name="" id="" placeholder="Date From" class="me-4">
            <span>Date To</span>
            <input type="date" name="" id="" placeholder="Date To">
        </div>
        <table class="table text-center">
            <thead>
              <tr>
                <th >Order Date</th>
                <th >Status</th>
                <th >Amount</th>
                <th >Action</th>
              </tr>
            </thead>
            <tbody>


                


                @foreach($orders as $order)
                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->status}}</td>
                    <td>{{$order->action}}</td>
                </tr>
                @endforeach
            </tbody>
            
         </table>
    </div>
</div>
@endsection