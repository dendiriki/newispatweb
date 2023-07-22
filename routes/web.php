<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CustomerController;


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
    return view('layout.home.index');
});

//Uji Coba test template tanpa DRL
Route::get('/test', function () {
    return view('layout');
});

Route::get('/when-you-admin-please-login-and-input-username-password',[LoginCOntroller::class, 'index']);

//Admin routes
Route::resource('admin/posts', PostController::class);
Route::resource('admin/customer', CustomerController::class);

//layout Rutes
Route::get('/customer-center',[LayoutController::class,'customer']);

