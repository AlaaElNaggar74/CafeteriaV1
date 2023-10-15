@extends('layouts.app')

@section('content')
{{-- <h1 class="text-center mt-3">Admin Checks  </h1> --}}
<div class="adminCheckPage">
  <div class="container">
    <h1 class="text-center mt-3"> Orders</h1>
    <div class="for">
      <table class="table text-center">
        <thead>
          <tr>
            <th>Order Date</th>
            <th>Name</th>
            <th>Room</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>25-2-2022</th>
            <td>Mark</td>
            <td>5</td>
            <td>Deliver</td>
          </tr>
        </tbody>
      </table>

      <div class="orderItems mt-5">
        <div class="checkDrink text-center">
          <div class="drinkPrice">35</div>

          <img src="{{asset('images/drink2.png')}}" class="img-fluid rounded-top" alt="" />
          <p class="fw-bold">orange</p>
        </div>

        <div class="checkDrink text-center">
          <div class="drinkPrice">35</div>

          <img src="{{asset('images/drink8.png')}}" class="img-fluid rounded-top" alt="" />
          <p class="fw-bold">orange</p>
        </div>

        <div class="checkDrink text-center">
          <div class="drinkPrice">35</div>

          <img src="{{asset('images/drink9.png')}}" class="img-fluid rounded-top" alt="" />
          <p class="fw-bold">orange</p>
        </div>
      </div>
    </div>

    <div class="for">
      <table class="table text-center">
        <thead>
          <tr>
            <th>Order Date</th>
            <th>Name</th>
            <th>Room</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>25-2-2022</th>
            <td>Jacob</td>
            <td>23</td>
            <td>Deliver</td>
          </tr>
        </tbody>
      </table>

      <div class="orderItems mt-5">
        <div class="checkDrink text-center">
          <div class="drinkPrice">35</div>

          <img src="{{asset('images/drink2.png')}}" class="img-fluid rounded-top" alt="" />
          <p class="fw-bold">orange</p>
        </div>

        <div class="checkDrink text-center">
          <div class="drinkPrice">35</div>

          <img src="{{asset('images/drink8.png')}}" class="img-fluid rounded-top" alt="" />
          <p class="fw-bold">orange</p>
        </div>

        <div class="checkDrink text-center">
          <div class="drinkPrice">35</div>

          <img src="{{asset('images/drink9.png')}}" class="img-fluid rounded-top" alt="" />
          <p class="fw-bold">orange</p>
        </div>
      </div>
    </div>

    <div class="for">
      <table class="table text-center">
        <thead>
          <tr>
            <th>Order Date</th>
            <th>Name</th>
            <th>Room</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>25-2-2022</th>
            <td>Gamal</td>
            <td>63</td>
            <td>Deliver</td>
          </tr>
        </tbody>
      </table>

      <div class="orderItems mt-5">
        <div class="checkDrink text-center">
          <div class="drinkPrice">35</div>

          <img src="{{asset('images/drink2.png')}}" class="img-fluid rounded-top" alt="" />
          <p class="fw-bold">orange</p>
        </div>

        <div class="checkDrink text-center">
          <div class="drinkPrice">35</div>

          <img src="{{asset('images/drink8.png')}}" class="img-fluid rounded-top" alt="" />
          <p class="fw-bold">orange</p>
        </div>

        <div class="checkDrink text-center">
          <div class="drinkPrice">35</div>

          <img src="{{asset('images/drink9.png')}}" class="img-fluid rounded-top" alt="" />
          <p class="fw-bold">orange</p>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection