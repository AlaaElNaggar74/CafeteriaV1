@extends('layouts.app')

@section('content')
    
<div class="container">
<div class="ce col-md-6 col-lg-10 m-auto">
    <h1 class="mt-4 mb-5 text-center">Hello Client</h1>

    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card  text-bg-info bg-opacity-50 mb-3 p-2" >
                <h4 class="card-header">Category-{{$category->id}}</h4>
                
                <div class="card-body">
                  <h5 class="card-title">Name : {{$category->name}}</h5>
                  <h5 class="card-title">created at: {{$category->created_at}}</h5>
                  <h5 class="card-title">updated at : {{$category->updated_at}}</h5>
                </div>
                <div class="b">
                    <a href="{{route('categories.index')}}" class="btn btn-primary">Back</a>
                </div>
              </div>
        </div>

    </div>
  
   
</div>
</div>
@endsection
