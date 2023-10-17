@extends('layouts.app')

    @section('content')
    <div class="adminAddProductrPage">
        <div class="container">
            <h1>Add Product</h1>
         <div class="Productfor col-md-9 col-lg-6 col-10 m-auto" >
            <form action="" >
                <div class="mb-1">
                    <label for="name" class="form-label">Product</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Your Name">
                  </div>
                  {{-- <div class="mb-1">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="name@example.com">
                  </div> --}}
                  
                <div class="mb-1">
                    <label for="pric" class="form-label">Price</label>
                    <input type="number" class="form-control" id="pric" placeholder="Product Pr">
                  </div>
                {{-- <div class="mb-1">
                    <label for="conPassw" class="form-label">Confirmed Password</label>
                    <input type="text" class="form-control" id="conPassw" placeholder="Enter Your Confirmed Password">
                  </div> --}}
                {{-- <div class="mb-1">
                    <label for="roomNo" class="form-label">Room</label>
                    <input type="text" class="form-control" id="roomNo" placeholder="Enter Your Room">
                  </div> --}}

                <div class="mb-1">
                    <label for="categ" class="form-label">Category</label>
                    <select class="form-select" aria-label="Default select example">
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                <div class="mb-1">
                    <label for="proImag" class="form-label">Product Image</label>
                    <input type="file" class="form-control" id="proImag" placeholder="Product Image">
                  </div>

                  <div class="bt mt-4">
                    <input type="button" value="Save" class="btn btn-success">
                    <input type="button" value="Reset" class="btn btn-info">
                  </div>

            </form>
         </div>
        </div>
    </div>
    @endsection
