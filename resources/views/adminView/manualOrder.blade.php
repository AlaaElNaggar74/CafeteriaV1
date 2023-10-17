@extends('layouts.app')

@section('content')
   
    <div class="adminUserPage">
        <div class="container">
        <div class="row justify-content-center">
            <!--  project and team member start -->
            <div class="col-xl-12 col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                            <h1 class="text-center">All Orders </h1> 
                            <div class="card-header-right">
                                <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" style="fill: rgba(8, 119, 230, 1);transform: ;msFilter:;"><path d="M4.5 8.552c0 1.995 1.505 3.5 3.5 3.5s3.5-1.505 3.5-3.5-1.505-3.5-3.5-3.5-3.5 1.505-3.5 3.5zM19 8h-2v3h-3v2h3v3h2v-3h3v-2h-3zM4 19h10v-1c0-2.757-2.243-5-5-5H7c-2.757 0-5 2.243-5 5v1h2z"></path></svg> 
                                </a>
                            </div>
                    </div>

                    <div class="card-block">
                        <div class="for">
                            <table class="table table-responsive text-center w-75 mx-auto">
                            <thead>
                                <tr>
                                <th>No</th>
                                <th >Order Date</th>
                                <th >TotalPrice</th>
                                <th >comment</th>
                                <th >username</th>
                                <th >Status</th>
                                {{-- <th >Action</th>--}}
                               {{-- <th >Edit</th>--}}
                               {{-- <th >Delete</th>--}}
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($orders as $order)
                                        <tr>
                                            <td>{{++$i}}</td>
                                            <td style="">{{$order->created_at}}</td>
                                            <td style="">{{$order->totalPrice}}</td>
                                            <td style="">{{$order->comment}}</td>
                                            <td style="">{{$order->username}}</td>
                                            <td>
                                                        
                                                <form action="{{ route('confirm', ['id' => $order->id]) }}" method="POST">
                                                    @csrf
                                                    @if($order->status === 'Processing')    
                                                        <button type="submit" class="btn btn-primary">{{$order->status}}</button>
                                                    @elseif($order->status === 'Out for Delivery')
                                                        <button type="submit" class="btn btn-success">{{$order->status}}</button>
                                                    @else
                                                        <button type="submit" class="btn btn-danger">{{$order->status}}</button> 
                                                    @endif    
                                                </form>
                                                                
                                            </td>
                                        {{--
                                            <td style="">{{$order->action}}</td>

                                            <td>
                                                <a class="btn" href="">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(13, 98, 241, 1);"><path d="M15 11h7v2h-7zm1 4h6v2h-6zm-2-8h8v2h-8zM4 19h10v-1c0-2.757-2.243-5-5-5H7c-2.757 0-5 2.243-5 5v1h2zm4-7c1.995 0 3.5-1.505 3.5-3.5S9.995 5 8 5 4.5 6.505 4.5 8.5 6.005 12 8 12z"></path></svg>
                                                </a>
                                            </td>
                                            <td>
                                                <form action="" method="post" onSubmit="return confirm('Are You Sure To Delete This User?')">
                                                    @csrf
                                                    @method("DELETE")
                                                    <button class="btn btn-sm bg-transparent"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" style="fill: rgba(245, 8, 8, 1);"><path d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z"></path><path d="M9 10h2v8H9zm4 0h2v8h-2z"></path></svg></button>
                                                </form>
                                            </td>
                                        --}}     
                                        </tr>
                                    @endforeach
                                    
                            </tbody>
                            </table>
                        </div>
                    </div>   
               {{--    {{ $orders->links('pagination::bootstrap-4') }} --}} 
                </div>
            </div>
        </div>
        <div class=" container text-right">    
      
        </div>
        </div>
    </div>
    
@stop
