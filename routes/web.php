<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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
Route::get('/contact',[MainController::class,'contact'])->name('contact');
Route::get('/product',[MainController::class,'product'])->name('product');

 
Route::get('list','Customers@list');   

Route::get('/company/logout',[MainController::class,'logout'])->name('auth.logout');


Route::group(['middleware'=>['Authcheck']],function(){
    Route::get('/company/comphome',[MainController::class,'comphome'])->name('company.comphome');
    Route::get('/company/profile',[MainController::class,'profile'])->name('company.profile');
});

Route::group(['middleware'=>['AuthCheck1']],function(){
    Route::get('/customer/custhome',[MainController::class,'custhome'])->name('customer.custhome');;
    Route::get('/customer/experts',[MainController::class,'experts'])->name('customer.experts');
    Route::get('/customer/product1',[MainController::class,'product1'])->name('customer.product1');
    Route::get('/customer/profile1',[MainController::class,'profile1'])->name('customer.profile1');
    Route::post('/customer/fupdate',[MainController::class,'fupdate'])->name('customer.fupdate');

});