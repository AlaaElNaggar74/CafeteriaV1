@extends('layouts.app')

@section('content')
<div class="userHomePage">
    <div class="container-fluid">
        <div class="di col-md-3 ms-auto mb-3">
            <form action="" method="post">
                <input class="form-control" id="search" placeholder="Type to search...">
            </form>
        </div>
        <div class="row">
            <div class=" col-md-4 ">
               <div class=" indexRight border-2 border-black border">

              
                <div class="rig border ">
                    <div class="ta">
                        <table class="table ">

                            <tbody>

                                <tr>
                                    <th>Cofe</th>
                                    <td>9</td>
                                    <td class="d-flex align-items-center justify-content-center ">
                                        <button class="btn btn-danger mx-1">+</button>
                                        <span class="btn btn-info mx-1">-</span>
                                    </td>
                                    <td>25</td>
                                    <td> <button class="btn btn-danger ">x</button></td>
                                </tr>


                                <tr>
                                    <th>Tea</th>
                                    <td>7</td>
                                    <td class="d-flex align-items-center justify-content-center ">
                                        <button class="btn btn-danger mx-1">+</button>
                                        <span class="btn btn-info mx-1">-</span>
                                    </td>
                                    <td>25</td>
                                    <td> <button class="btn btn-danger ">x</button></td>
                                </tr>


                                <tr>
                                    <th>Orange</th>
                                    <td>5</td>
                                    <td class="d-flex align-items-center justify-content-center ">
                                        <button class="btn btn-danger mx-1">+</button>
                                        <span class="btn btn-info mx-1">-</span>
                                    </td>
                                    <td>25</td>
                                    <td> <button class="btn btn-danger ">x</button></td>
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
                    <div class="lin">
                    </div>
                    <div class="total text-right">
                        <h3>Total: <span>952</span> </h3>

                    </div>
                    <td> <button class="btn btn-danger ">Save</button></td>
                </div>
            </div>
            </div>
            {{-- <div class="col-md-4 "></div> --}}
            <div class="col-md-8">
                <div class="lef m-0  mt-3 mt-md-0">
                    <h4 class="">Lastet Orders</h4>
                    <div class="row overLef">
                        <div class="drink text-center ">
                            <div class="drinkPrice">23</div>
                            <img src="{{asset('images/drink1.png')}}" alt="" class="">
                            <p class="fw-bold">Cofe</p>
                        </div>
                        <div class="drink text-center ">
                            <div class="drinkPrice">23</div>

                            <img src="{{asset('images/drink2.png')}}" alt="" class="">
                            <p class="fw-bold">Pepsi</p>
                        </div>
                        <div class="drink text-center ">
                            <div class="drinkPrice">23</div>

                            <img src="{{asset('images/drink6.png')}}" alt="" class="">
                            <p class="fw-bold">Lemon</p>
                        </div>
                        <div class="drink text-center  ">
                            <div class="drinkPrice">23</div>

                            <img src="{{asset('images/drink4.png')}}" alt="" class="">
                            <p class="fw-bold">Lemon</p>
                        </div>
                        <div class="drink text-center ">
                            <div class="drinkPrice">23</div>

                            <img src="{{asset('images/drink5.png')}}" alt="" class="">
                            <p class="fw-bold">Cofe</p>
                        </div>
                    </div>
                    <div class="lin">
                    </div>
                    <h4 class="mt-4">Products</h4>
                    <div class="row overLef ">
                        <div class="drink text-center ">
                            <div class="drinkPrice">23</div>

                            <img src="{{asset('images/drink10.png')}}" alt="" class="">
                            <p class="fw-bold">Cofe</p>
                        </div>
                        <div class="drink text-center  ">
                            <div class="drinkPrice">23</div>

                            <img src="{{asset('images/drink8.png')}}" alt="" class="">
                            <p class="fw-bold">Pepsi</p>
                        </div>
                        <div class="drink text-center  ">
                            <div class="drinkPrice">23</div>

                            <img src="{{asset('images/drink5.png')}}" alt="" class="">
                            <h4>Lemon</h4>
                        </div>
                        <div class="drink text-center  ">
                            <div class="drinkPrice">23</div>

                            <img src="{{asset('images/drink3.png')}}" alt="" class="">
                            <p class="fw-bold">Lemon</p>
                        </div>
                        <div class="drink text-center  ">
                            <div class="drinkPrice">23</div>

                            <img src="{{asset('images/drink4.png')}}" alt="" class="">
                            <p class="fw-bold">Cofe</p>
                        </div>
                        <div class="drink text-center  ">
                            <div class="drinkPrice">23</div>

                            <img src="{{asset('images/drink7.png')}}" alt="" class="">
                            <p class="fw-bold">Lemon</p>
                        </div>
                        <div class="drink text-center  ">
                            <div class="drinkPrice">23</div>

                            <img src="{{asset('images/drink13.png')}}" alt="" class="">
                            <p class="fw-bold">Cofe</p>
                        </div>
                        <div class="drink text-center  ">
                            <div class="drinkPrice">23</div>

                            <img src="{{asset('images/drink11.png')}}" alt="" class="">
                            <p class="fw-bold">Lemon</p>
                        </div>
                        <div class="drink text-center  ">
                            <div class="drinkPrice">23</div>

                            <img src="{{asset('images/drink15.png')}}" alt="" class="">
                            <p class="fw-bold">Cofe</p>
                        </div>
                        <div class="drink text-center  ">
                            <div class="drinkPrice">23</div>

                            <img src="{{asset('images/drink1.png')}}" alt="" class="">
                            <p class="fw-bold">Lemon</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection