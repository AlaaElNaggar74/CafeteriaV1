<?php
use App\Http\Controllers\SocialiteContr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productsController;
use App\Http\Controllers\CategoryController;
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
    return view('welcome');
});


Route::get("/userHome",[productsController::class,"index"])->name("index");
Route::get("/myOrderUser",[productsController::class,"orders"])->name("userOrder");

Route::get("/adminHome",[productsController::class,"adminIndex"])->name("adminIndex");
Route::get("/adminOrders",[productsController::class,"adminProducts"])->name("adminProducts");
Route::get("/adminUser",[productsController::class,"adminUser"])->name("adminUser");
Route::get("/adminManualOrder",[productsController::class,"adminManualOrder"])->name("adminManualOrder");
Route::get("/adminChecks",[productsController::class,"adminChecks"])->name("adminChecks");
Route::get("/adminAddUser",[productsController::class,"addUser"])->name("addUser");
Route::get("/adminAddProduct",[productsController::class,"addProduct"])->name("AddProduct");

// Route::get("userHome",[productsController::class,"index"])->name("index");
// Route::get("myOrderUser",[productsController::class,"orders"])->name("userOrder");
// Route::get("userHome",[productsController::class,"index"])->name("index");
// Route::get("myOrderUser",[productsController::class,"orders"])->name("userOrder");

//Generate Category Route in one line using resource controller//

Route::resource('categories', CategoryController ::class);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('auth/google',[socialiteContr::class,'redirectGoogle'] );

Route::get('auth/google/callback',[socialiteContr::class,'handleGoogleCallback'] );
