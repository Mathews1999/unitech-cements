<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\feedbackcontroller;

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



Route::get('/contact',[feedbackcontroller::class,'create'])->name('contact');
Route::post('/contactread',[feedbackcontroller::class,'store']);
Route::get('/viewfeedback',[feedbackcontroller::class,'index']);
Route::post('/feedbacksearch',[feedbackcontroller::class,'search']);
Route::get('/vieworders',[MainController::class,'paymentlist']);



Route::get('/auth/login',[MainController::class,'login'])->name('auth.login');
Route::get('/auth/custlogin',[MainController::class,'custlogin'])->name('auth.custlogin');
Route::get('/auth/custregister',[MainController::class,'custregister'])->name('auth.custregister');
Route::get('/auth/compregister',[MainController::class,'compregister'])->name('auth.compregister');

Route::post('/auth/save',[MainController::class,'save'])->name('auth.save');
Route::post('/auth/check',[MainController::class,'check'])->name('auth.check');

Route::post('/auth/save1',[MainController::class,'save1'])->name('auth.save1');
Route::post('/auth/check1',[MainController::class,'check1'])->name('auth.check1');

Route::get('/dashboard',[MainController::class,'dashboard'])->name('dashboard');
Route::get('/aboutus',[MainController::class,'aboutus'])->name('aboutus');

Route::get('/product',[MainController::class,'product'])->name('product');

Route::get('/company/logout',[MainController::class,'logout'])->name('auth.logout');

Route::get('/list',[MainController::class,'list'])->name('list');
Route::post('/customer/fupdate',[MainController::class,'fupdate']);

Route::post('/company/aupdate',[MainController::class,'aupdate']);

Route::get('/payment',[MainController::class,'payment'])->name('payment');
Route::post('/orderplace',[MainController::class,'orderplace']);
Route::get('/paymentoption',[MainController::class,'paymentoption'])->name('paymentoption');

Route::get('/cartlist',[MainController::class,'cartList'])->name('cartlist');
Route::get('/cartdelete/{id}',[MainController::class,'cartdelete'])->name('cartdelete');

Route::group(['middleware'=>['Authcheck']],function(){
    Route::get('/company/comphome',[MainController::class,'comphome'])->name('company.comphome');
    Route::get('/company/profile',[MainController::class,'profile'])->name('company.profile');
});

Route::group(['middleware'=>['AuthCheck1']],function(){
    Route::get('/customer/custhome',[MainController::class,'custhome'])->name('customer.custhome');;
    Route::get('/customer/experts',[MainController::class,'experts'])->name('customer.experts');
    Route::get('/customer/product1',[MainController::class,'product1'])->name('customer.product1');
    Route::get('/customer/profile1',[MainController::class,'profile1'])->name('customer.profile1');
    Route::get('/customer/order',[MainController::class,'order'])->name('order');
    Route::get('/payment_cement',[MainController::class,'payment_cement'])->name('payment_cement');
    Route::get('/payment_wcement',[MainController::class,'payment_wcement'])->name('payment_wcement');
    Route::get('/payment_save',[MainController::class,'payment_save'])->name('payment_save');
});