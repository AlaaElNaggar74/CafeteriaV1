@extends('layouts.app')

@section('content')

<div class="userOrderPage">
    <div class="container">
        <h1 class=" ">My Order </h1>
        <div class="dat ">
           
             <form method="get" action="/filter">
                @csrf
                 <span>Date From</span>
                <input type="date" name="start_date" id="" placeholder="Date From" class="me-4">
                <span>Date To</span>
                <input type="date" name="end_date" id="" placeholder="Date To">
                <button type="submit" class="btn btn-primary">filter</button>
            </form>
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
                            <button  class="btn btn-danger order" id="{{$order->id}}" >+</button>
                            @endif
                            
                        </td>
                        <td>{{$order->status}}</td>
                        <td> 
                        </td>
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
      

         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
         
         <script>
 

          
               
             
               const div = document.createElement("div");   
               
              let order=document.querySelectorAll('.order');

              

              order.forEach(element => {
                 
                     element.addEventListener('click',()=>{

                        // console.log(element.id);
                        var Test_HTML ="";
                        let Order_id=element.id;
                       $.ajax({
                        url: "/test/"+Order_id,
                        type: "get",
                        dataType: "json",
                        success: function(response) {
                            //console.log(response)

                         $.each(response, function(index)
                         {
                        
                            
                           Test_HTML += `<div class="orderItems mt-5">
                                        <div class="checkDrink text-center d-flex justify-content-center align-items-center">
                                        <div>
                                            <img src="/images/` + response[index].image +`" class="img-fluid rounded-top" alt="" width=50 height=50 />
                                           <div class="drinkPrice">`+ response[index].order_id +`</div>
                                           <p class="fw-bold">`+ response[index].price +`</p>
           
                                           
                                        </div>
                                
                                        </div>  
                                     </div>`


                        });

                        console.log(Test_HTML);
                        div.innerHTML = Test_HTML;
                    document.body.appendChild(div);
               
                            
                        }
                    });
      
                        



                        

                       
                     })
              });
                   
            
            
        
        </script>
        
         
       
                    

    </div>
            
      
</div>
@endsection



