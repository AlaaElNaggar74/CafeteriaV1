@extends('layouts.app')

@section('content')
    

<div class="category-show">


<div class="container">
<div class="ce col-md-8 col-lg-10 col-11 m-auto">
    <h1 class="mt-4 mb-5 text-center">Category Details</h1>

    <div class="row">
        <div class="col-lg-8 col-md-10 mb-3 m-auto">
            <div class="card  mb-3 p-2" >
                <h4 class="card-header">Category-{{$category->id}}</h4>
                
                <div class="card-body">
                  <h5 class="card-title"><span class="fw-bold">Name :</span>  {{$category->name}}</h5>
                  <h5 class="card-title"><span class="fw-bold">created at:</span>  {{$category->created_at}}</h5>
                  <h5 class="card-title"><span class="fw-bold">updated at :</span>  {{$category->updated_at}}</h5>
                </div>
                <div class="b">
                    <a href="{{route('categories.index')}}" class="btn btn-primary">Back</a>
                </div>
              </div>
        </div>

    </div>
  
   
</div>
</div>
</div>
@endsection
