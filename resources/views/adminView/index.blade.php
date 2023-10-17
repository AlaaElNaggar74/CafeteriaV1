@extends('layouts.app') @section('content')
<div class="adminHomePage">
  <div class="container-fluid">
    <div class="col-md-3 ms-auto mb-3">
      <form action="" method="post">
        <input class="form-control" id="search" placeholder="Type to search..." />
      </form>
    </div>
    <div class="row">
      <div class=" col-md-4 ">
        <div class="indexRight border border-2 border-black">

       <form >
        <div class="rig ">
          <div class="ta">
            <table class="table">
              <tbody>
                <tr>
                  <th>Cofe</th>
                  <td>9</td>
                  <td class="d-flex align-items-center justify-content-center">
                    <button class="btn btn-danger mx-1">+</button>
                    <span class="btn btn-info mx-1">-</span>
                  </td>
                  <td>25</td>
                  <td><button class="btn btn-danger">x</button></td>
                </tr>

                <tr>
                  <th>Tea</th>
                  <td>7</td>
                  <td class="d-flex align-items-center justify-content-center">
                    <button class="btn btn-danger mx-1">+</button>
                    <span class="btn btn-info mx-1">-</span>
                  </td>
                  <td>25</td>
                  <td><button class="btn btn-danger">x</button></td>
                </tr>

                <tr>
                  <th>Orange</th>
                  <td>5</td>
                  <td class="d-flex align-items-center justify-content-center">
                    <button class="btn btn-danger mx-1">+</button>
                    <span class="btn btn-info mx-1">-</span>
                  </td>
                  <td>25</td>
                  <td><button class="btn btn-danger">x</button></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="notes my-3">
            <h4 for="are" class="form-label">Notes</h4>
            <textarea class="form-control" id="are" rows="3"></textarea>
          </div>

          <div class="select d-flex align-items-center">
            <h4 for="are" class="form-label mb-0 me-2">Room</h4>

            <select class="form-select" aria-label="Default select example">
              <option selected>Open this select menu</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>

          <div class="lin"></div>
          <div class="total text-right">
            <h3>Total: <span>952</span></h3>
          </div>
          <td><input type="submit"  class="btn btn-danger"/></td>
        </div>
      </form>
      </div>
      </div>
      {{--
      <div class="col-md-4"></div>
      --}}
      <div class="col-md-8">
        <div class="addTouser">
          <h3>Add To User</h3>
          <div class="mb-3 d-flex align-items-center col-md-3 m-auto">
            <select class="form-select" aria-label="Default select example">
              <option selected>select User</option>
              <option value="1">Aya</option>
              <option value="2">Noor</option>
              <option value="3">Norhan</option>
              <option value="3">Mostafa</option>
              <option value="3">Alaa</option>
            </select>
          </div>
     
        </div>
        <div class="lef m-0 mt-3 mt-md-0">
          <div class="lin"></div>
          <h4 class="mt-4">Products</h4>
       
          <div class="row overLef">
            @foreach ($products as $product)
            <div class="drink text-center">
              <div class="drinkPrice">{{$product->price}}</div>
              <img src="{{asset('/images/productsImage/'.$product->image)}}" alt="" class="" />

              <p class="fw-bold">{{$product->name}}</p>
            </div>
            @endforeach
            <!-- <div class="drink text-center">
              <div class="drinkPrice">75</div>
              <img src="{{asset('images/drink2.png')}}" alt="" class="" />
              <p class="fw-bold">Pepsi</p>
            </div>
            <div class="drink text-center">
              <div class="drinkPrice">42</div>
              <img src="{{asset('images/drink6.png')}}" alt="" class="" />
              <p class="fw-bold">Lemon</p>
            </div>
            <div class="drink text-center">
              <div class="drinkPrice">35</div>
              <img src="{{asset('images/drink7.png')}}" alt="" class="" />
              <p class="fw-bold">orange</p>
            </div>
            <div class="drink text-center">
              <div class="drinkPrice">88</div>
              <img src="{{asset('images/drink8.png')}}" alt="" class="" />
              <p class="fw-bold">orangeCup</p>
            </div>
            <div class="drink text-center">
              <div class="drinkPrice">71</div>
              <img src="{{asset('images/drink9.png')}}" alt="" class="" />
              <p class="fw-bold">Lemon</p>
            </div>
            <div class="drink text-center">
              <div class="drinkPrice">63</div>
              <img src="{{asset('images/drink10.png')}}" alt="" class="" />
              <p class="fw-bold">Lemon</p>
            </div>
            <div class="drink text-center">
              <div class="drinkPrice">27</div>
              <img src="{{asset('images/drink11.png')}}" alt="" class="" />
              <p class="fw-bold">Lemon</p>
            </div>
            <div class="drink text-center">
              <div class="drinkPrice">55</div>
              <img src="{{asset('images/drink12.png')}}" alt="" class="" />
              <p class="fw-bold">Lemon</p>
            </div>
            <div class="drink text-center">
              <div class="drinkPrice">14</div>
              <img src="{{asset('images/drink13.png')}}" alt="" class="" />
              <p class="fw-bold">Lemon</p>
            </div>
            <div class="drink text-center">
              <div class="drinkPrice">67</div>
              <img src="{{asset('images/drink14.png')}}" alt="" class="" />
              <p class="fw-bold">Lemon</p>
            </div>
            <div class="drink text-center">
              <div class="drinkPrice">99</div>
              <img src="{{asset('images/drink15.png')}}" alt="" class="" />
              <p class="fw-bold">Lemon</p>
            </div>
            <div class="drink text-center">
              <div class="drinkPrice">59</div>
              <img src="{{asset('images/drink16.png')}}" alt="" class="" />
              <p class="fw-bold">Lemon</p>
            </div>
            <div class="drink text-center">
              <div class="drinkPrice">77</div>
              <img src="{{asset('images/drink17.png')}}" alt="" class="" />
              <p class="fw-bold">Lemon</p>
            </div>
            <div class="drink text-center">
              <div class="drinkPrice">82</div>
              <img src="{{asset('images/drink18.png')}}" alt="" class="" />
              <p class="fw-bold">Lemon</p>
            </div>
            <div class="drink text-center">
              <div class="drinkPrice">91</div>
              <img src="{{asset('images/drink19.png')}}" alt="" class="" />
              <p class="fw-bold">Lemon</p>
            </div>
            <div class="drink text-center">
              <div class="drinkPrice">33</div>
              <img src="{{asset('images/drink20.png')}}" alt="" class="" />
              <p class="fw-bold">Lemon</p>
            </div>
            <div class="drink text-center">
              <div class="drinkPrice">20</div>
              <img src="{{asset('images/drink21.png')}}" alt="" class="" />
              <p class="fw-bold">Lemon</p>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection