@extends('layouts.app')

@section('content')
<div class="adminUserPage">
  <div class="container">
    <div class="dis mb-5 d-flex justify-content-between align-items-center">
      <h1 class=" ">All User </h1>
      <a href="{{route('addUser')}}" class="btn btn-info">Add User</a>
    </div>

    <div class="for">
      <table class="table text-center ">
        <thead>
          <tr>
            <th>Name</th>
            <th>Room</th>
            <th>Image</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>Mark</th>
            <td>5</td>
            <td class="imgTable"><img src="{{asset('images/user2.png')}}" class="img-fluid rounded-top" alt=""></td>
            <td>
              <a href="{{route('view',5)}}" class="btn btn-danger m-1">View</a>
              <a href="{{route('edit',5)}}" class="btn btn-success">Edit</a>
              <a href="{{route('destroy',5)}}" class="btn btn-primary">Delete</a>

            </td>
          </tr>
          <tr>
            <th>Jacob</th>
            <td>23</td>
            <td class="imgTable"><img src="{{asset('images/user5.png')}}" class="img-fluid rounded-top" alt=""></td>
            <td>
              <a href="{{route('view',7)}}" class="btn btn-danger ">View</a>
              <a href="{{route('edit',7)}}" class="btn btn-success m-1">Edit</a>
              <a href="{{route('destroy',7)}}" class="btn btn-primary">Delete</a>

            </td>
          </tr>
          <tr>
            <th>Gamal</th>
            <td>63</td>
            <td class="imgTable"><img src="{{asset('images/user1.png')}}" class="img-fluid rounded-top" alt=""></td>
            <td>
              <a href="{{route('view',10)}}" class="btn btn-danger ">View</a>
              <a href="{{route('edit',10)}}" class="btn btn-success m-1">Edit</a>
              <a href="{{route('destroy',10)}}" class="btn btn-primary">Delete</a>

            </td>
          </tr>
        </tbody>
      </table>

    </div>

  </div>
</div>
@endsection