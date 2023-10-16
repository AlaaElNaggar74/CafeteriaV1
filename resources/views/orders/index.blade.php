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
                        
                        <td>{{$order->created_at}} 
                            @if($order->status=="Done")
                              <button  class="btn btn-danger">-</button>
                          
                            @else
                            <button  class="btn btn-danger" onclick={{"viewProducts()"}}>+</button>
                            @endif
                            
                        </td>
                        <td>{{$order->status}}</td>
                        <td>{{$order->totalPrice}}</td>
                        <td>
                            @if($order->status=="Processing")
                            <form method="post" action={{route('orders.destroy', $order->id)}}>
                                @csrf
                                @method('delete')
                                    <input type="submit" class="btn btn-danger" value="Cancel">
                            </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
            
         </table>

         
            {{-- <div>
          
                @foreach($products as $product)
                  <div>
                    <h2>{{$product->name}}</h2>
                   
                  </div>
                @endforeach
                </div>
            </div> --}}

            <div class="orderItems mt-5">
                <div class="checkDrink text-center">
                  
                    @foreach($products as $product) 
                        <div>
                            <div class="drinkPrice">{{$product->price}}</div>
                    
                            <img src="{{asset('images/'.$product->image)}}" class="img-fluid rounded-top" alt="" />
                            <p class="fw-bold">{{$product->price}}</p>
                            <p class="fw-bold">{{$product->order_id}}</p>
                        </div>
                    @endforeach
                  
                </div>
        
                
            </div>
           
        
      
</div>
@endsection