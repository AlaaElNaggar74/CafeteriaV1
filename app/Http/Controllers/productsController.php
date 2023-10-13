<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productsController extends Controller
{
    //
    function index(){

        return view("userView.index");
    }
    function orders(){
        
        return view("userView.myOrderUser");
    }
    function adminIndex(){

        return view("adminView.index");
    }
    function adminProducts(){

        return view("adminView.products");
    }
    function adminUser(){

        return view("adminView.users");
    }
    function adminManualOrder(){

        return view("adminView.manualOrder");
    }
    function adminChecks(){

        return view("adminView.checks");
    }
    function addUser(){

        return view("adminView.addUser");
    }
    function addProduct(){

        return view("adminView.addProduct");
    }
    function view($id){

        return view("adminView.view",["viewItem"=>$id]);
    }
    function editUser($id){

        return view("adminView.edit",["editItem"=>$id]);
    }
    function destroyUser(){

        return view("adminView.users");
    }
   
}
