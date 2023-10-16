@extends('layouts.app')

@section('content')

<div class="userOrderPage">
  <div class="container">
    <h1 class=" ">My Orderfgfgh </h1>
    <div class="dat">
      <span>Date From</span>
      <input type="date" name="" id="" placeholder="Date From" class="me-4" />
      <span>Date To</span>
      <input type="date" name="" id="" placeholder="Date To" />
    </div>
    <table class="table text-center">
      <thead>
        <tr>
          <th>Order Date</th>
          <th>Status</th>
          <th>Amount</th>
          <th>Action</th>
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
    
    <div class="orderItems d-flex justify-content-center align-items-center  mt-5">
        <div class="item text-center">
          <div class="drinkPrice">35</div>
          <img src="{{asset('images/drink2.png')}}" class="img-fluid rounded-top" alt="" />
          <p class="fw-bold">orange</p>
        </div>
    </div>
  </div>
</div>

  @endsection