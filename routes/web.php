<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//User Controller
//Get
// Redirect user
Route::get('/redirect',[HomeController::class, 'redirect']);
Route::get('/',[HomeController::class, 'index']);
// Pages
Route::get('/FAQ',[HomeController::class, 'FAQ']);
Route::get('/about',[HomeController::class, 'about']);
Route::get('/contact',[HomeController::class, 'contact']);
// Products
Route::get('/shop',[HomeController::class, 'product']);
Route::get('/productdetail/{id}',[HomeController::class, 'productdetail']);
// Orders
Route::get('/trackorder',[HomeController::class, 'trackorder']);
Route::get('/detailorder/{id}',[HomeController::class, 'detailorder']);
// Cart shopping
Route::get('/showcart',[HomeController::class, 'showcart']);
Route::get('/delete/{id}',[HomeController::class, 'deletecart']);
// Wishlists
Route::get('/wishlist',[HomeController::class, 'wishlist']);
// Payment
Route::get('/showpayment',[HomeController::class, 'payment']);
Route::get('/showpaymentcod',[HomeController::class, 'paymentcod']);
// Functions
Route::get('/search',[HomeController::class, 'search']);
Route::get('/deletewishlist/{id}',[HomeController::class, 'deletewishlist']);
Route::get('/deletefeedback/{id}',[HomeController::class, 'deletefeedback']);


//post method
// Carts
Route::post('/addcart/{id}',[HomeController::class, 'addcart']);
Route::post('/updatecart/{id}',[HomeController::class, 'updatecart']);
Route::post('/updatecoupon/{id}',[HomeController::class, 'updatecoupon']);
// Wishlist
Route::post('/addwishlist/{id}',[HomeController::class, 'addwishlist']);
// Orders
Route::post('/order',[HomeController::class, 'confirmorder']);
// Messages
Route::post('/sendmessage',[HomeController::class, 'sendmessage']);
// Payment
Route::post('/confirmpayment',[HomeController::class, 'confirmpayment']);
Route::post('/confirmpaymentcod',[HomeController::class, 'confirmpaymentcod']);
// Review
Route::post('/feedback/{id}',[HomeController::class, 'feedback']);

 
//Admin Controller
//GET
// Products
Route::get('/product',[AdminController::class, 'product']);
Route::get('/showproduct',[AdminController::class, 'showproduct']);
Route::get('/detailproduct/{id}',[AdminController::class, 'detailproduct']);
Route::get('/updateview/{id}',[AdminController::class, 'updateview']);
Route::get('/deleteproduct/{id}',[AdminController::class, 'deleteproduct']);
// Orders
Route::get('/showorder',[AdminController::class, 'showorder']);
Route::get('/updateorder/{id}',[AdminController::class, 'updatestatus']);
Route::get('/denyorder/{id}',[AdminController::class, 'denystatus']);
// Users
Route::get('/showuser',[AdminController::class, 'showuser']);
Route::get('/userinfo/{id}',[AdminController::class, 'userinfo']);
Route::get('/deleteuser/{id}',[AdminController::class, 'deleteuser']);
// Messages
Route::get('/showmessage',[AdminController::class, 'showmessage']);
// Reviews
Route::get('/showreview',[AdminController::class, 'showreview']);
Route::get('/denyreview/{id}',[AdminController::class, 'denyreview']);

//POST
// Products
Route::post('/uploadproduct',[AdminController::class, 'uploadproduct']);
Route::post('/updateproduct/{id}',[AdminController::class, 'updateproduct']);
// Users
Route::post('/updateuser/{id}',[AdminController::class, 'updateuser']);


