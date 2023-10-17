<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\orderController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    if (Auth::user()) {
        if ( Auth::user()->role != "admin") {
            # code...
            return to_route("index");
        }
        return to_route("adminIndex");

    }
    return view('welcome');
    
});


Route::get("/userHome", [productsController::class, "index"])->name("index");
Route::get("/myOrderUser", [productsController::class, "orders"])->name("userOrder");

Route::get("/adminHome", [productsController::class, "adminIndex"])->name("adminIndex");
Route::get("/adminProducts", [productsController::class, "adminProducts"])->name("adminProducts");
Route::get("/adminProducts/{id}/destroy", [productsController::class, "destroyProducts"])->name("destroyProducts");
Route::get("/adminProduct/{id}", [productsController::class, "showProduct"])->name("showProduct");
Route::get("/adminAddProduct", [productsController::class, "addProduct"])->name("AddProduct");
Route::get("/adminEditProduct/{id}", [productsController::class, "editProduct"])->name("editProduct");
Route::post("/adminAddProduct", [productsController::class, "store"])->name("storeProduct");
Route::post("/adminEditProduct", [productsController::class, "updateProduct"])->name("updateProduct");

Route::get("/adminUserDestroy/{id}", [productsController::class, "destroyUser"])->name("destroy");
Route::get("/adminManualOrder", [productsController::class, "adminManualOrder"])->name("adminManualOrder");

Route::get("/adminUser", [productsController::class, "adminUser"])->name("adminUser");
Route::get("/adminChecks", [productsController::class, "adminChecks"])->name("adminChecks");
Route::get("/adminAddUser", [productsController::class, "addUser"])->name("addUser");
Route::get("/adminUserView/{id}", [productsController::class, "view"])->name("view");
Route::get("/adminUserEdit/{id}", [productsController::class, "editUser"])->name("edit");

// Route::get("userHome",[productsController::class,"index"])->name("index");
// Route::get("myOrderUser",[productsController::class,"orders"])->name("userOrder");
// Route::get("userHome",[productsController::class,"index"])->name("index");
// Route::get("myOrderUser",[productsController::class,"orders"])->name("userOrder");

Route::resource('categories', CategoryController::class);

Route::resource('orders', App\Http\Controllers\orderController::class);

Route::get('/filter',[orderController::class,'searchByDate']);
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
