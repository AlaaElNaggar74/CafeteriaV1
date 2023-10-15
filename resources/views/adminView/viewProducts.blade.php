@extends('layouts.app')

    @section('content')
    <div class="adminViewPage">
        <div class="container">
            {{-- <h1>id is <span>{{$viewItem}}</span></h1> --}}
           <div class="row justify-content-center align-items-center mt-5">
            <div class="right col-md-5">
                <img src="{{asset('/images/productsImage/'.$viewItem->image)}}" alt="" class="" />
            </div>
            <div class="left col-md-5">
               <div class="cont">
                <h3>ID : <span class="text-danger">{{$viewItem->id}} </span></h3>
                <h3>Name : <span class="text-danger">{{$viewItem->name}}  </span></h3>
                <h3>TITLE : <span class="text-danger">{{$viewItem->price}} </span></h3>
               </div>
            </div>
       
           </div>

        </div>
    </div>
    @endsection
