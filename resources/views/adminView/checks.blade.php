@extends('layouts.app')

@section('content')


<div class="container checks">
  <h1>Checks</h1>

  <div class="dat ">
           
    <form method="get" action="/filterAdmin">
       @csrf
        <span>Date From</span>
       <input type="date" name="start_date" id="" placeholder="Date From" class="me-4">
       <span>Date To</span>
       <input type="date" name="end_date" id="" ><br>
       <select class="form-select w-50 mt-5" name="user_id" aria-label="Default select example">
        <option selected>User</option>
           @forEach($users as $user)
            @if($user->role != 'admin')
              <option value="{{$user->id}}">{{$user->name}}</option>
            @endif
           @endforeach
       </select>
       <button type="submit" class="btn btn-primary mt-4 px-4">filter</button>
    </form>
  </div>

  <table  class="table text-center">
    <thead>
      <tr>
        <th>Name</th>
        <th>totalAmount</th>      
      </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
          <tr>
             @if($user->role!="admin")
                 <td>                 
                  <button class="btn btn-danger order" id="{{$user->id}}" >+</button>
                  {{$user->name}}</td>
             @endif
          </tr>
         
          
         
         @endforeach
        
            {{-- <td>{{$order->totalPrice}}</td> --}}
        
       
        
     
    </tbody>

  </table>


  <table  class="table text-center" id="orderTable" hidden>
    <thead>
      <tr>
        <th>Name</th>
        <th>totalAmount</th>      
      </tr>
    </thead>
    <tbody>
       @foreach($orders as $order)
          
          <tr>
            <td>{{$order->created_at}}</td>
            <td>{{$order->totalPrice}}</td>
          </tr>

      @endforeach
    </tbody>
  </table>








  <div class="mt-5">
    <div class="d-flex justify-content-center align-items-center">
      {{-- @foreach($productDetails as $product)
        <img src="{{asset('/images/'.$product->image)}}" alt="" class="" width="50" height="50"/>
        <p>{{$product->price}}
      @endforeach --}}
    </div>

  </div>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
         
  <script>

       const div = document.createElement("div");   
        
       let order=document.querySelectorAll('.order');

       

       order.forEach(element => {
          
              element.addEventListener('click',()=>{

                 // console.log(element.id);
                 var Test_HTML ="";
                 let user_id=element.id;
                $.ajax({
                 url: "/showOrders/"+user_id,
                 type: "get",
                 dataType: "json",
                 success: function(response) {
                     console.log(response)

                     Test_HTML=`<table class="table text-center ">
                              <thead>
                                  <tr>
                                    <th>orderDate</th>
                                    <th>totalAmount</th>      
                                  </tr>
                              </thead>
                              `
                                

                  $.each(response, function(index)
                  {
                 
                     
                   Test_HTML +=`<tbody>
                                 <tr>
                                  <td>`+ response[index].created_at+ `</td>  
                                  <td>`+ response[index].totalPrice + `</td> 
                                </tr>

                              
                              </tbody>                          
                    
                          </table>`;

                 });

                 //console.log(Test_HTML);
                 div.innerHTML = Test_HTML;
             document.body.appendChild(div);
        
                     
                 }
             });
                

                
              })
       });
            
     
     
 
 </script>




  {{-- <script>


   
      
  let order=document.querySelectorAll('.order');

       

       order.forEach(element => {
   
       element.addEventListener('click',()=>{})
        //  let btnClick = document.getElementById("orderTable");
        //  let hidden = element.getAttribute("hidden");

        // if (hidden) {
        //   element.removeAttribute("hidden");
        //   btnClick.innerText = "Hide table";
        // } else {
        //   element.setAttribute("hidden", "hidden");
        //   btnClick.innerText = "Show table";
        // }

        document.getElementById('orderTable').style.visibility = "visible";
 
   });
    
  
  <script> --}}

 

</div>




@endsection