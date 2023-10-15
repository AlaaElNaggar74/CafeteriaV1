@extends ('layouts.app')
@section('content')

<div class="container">

<h1>Edit New Category</h1>

    <form action="{{route('categories.update' , $category->id)}}" method="post" enctype="multipart/form-data" style="width:60% ; margin:auto ; margin-top:40px ; background:#fff; padding:30px">
    @csrf
    @method('put')
    <div class="row mb-5">
        <label for="inputName3" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
        <input name="name" type="text" class="form-control" id="inputEmail3"
        value="{{$category->name}}">
        </div>
    </div>

 



    <button type="submit" class="btn btn-primary "
    style="display:block; width:30% ; margin:auto; margin-top:40px ">update</button>
   
    </form>
</div>



@endsection
        
    




 
