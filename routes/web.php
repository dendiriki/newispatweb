<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EnglishController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\LayoutIndoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;


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
    return view('layout.home.index',[
        'url' => '',
        'class' => '',
        'navbar' =>'hero_area'
    ]);
});

//Uji Coba test template tanpa DRL
Route::get('/test', function () {
    return view('layout');
});
//Login
Route::get('/when-you-admin-please-login-and-input-username-password',[LoginCOntroller::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//Admin routes
Route::resource('admin/grade', GradeController::class);
Route::resource('admin/posts', PostController::class)->middleware('auth');
Route::resource('admin/english',EnglishController::class)->middleware('auth');
Route::resource('admin/customer', CustomerController::class)->middleware('auth');

//layout Rutes
Route::get('/customer-center',[LayoutController::class,'customer'])->middleware('guest');
Route::post('/customer-post',[LayoutController::class,'postcustomer'])->middleware('guest');
Route::get('bod',[LayoutController::class,'bod'])->middleware('guest');
Route::get('profilindo',[LayoutController::class,'profilindo'])->middleware('guest');
Route::get('vision',[LayoutController::class,'vision'])->middleware('guest');
Route::get('highlight',[LayoutController::class,'highlight'])->middleware('guest');
Route::get('milestone',[LayoutController::class,'milestone'])->middleware('guest');
Route::get('she',[LayoutController::class,'she'])->middleware('guest');


Route::get('highcarbon',[LayoutController::class,'highcarbon'])->middleware('guest');
Route::get('lowcarbon',[LayoutController::class,'lowcarbon'])->middleware('guest');
Route::get('clodheading',[LayoutController::class,'clodheading'])->middleware('guest');
Route::get('generalpw',[LayoutController::class,'generalpw'])->middleware('guest');
Route::get('welding',[LayoutController::class,'welding'])->middleware('guest');
Route::get('pline',[LayoutController::class,'pline'])->middleware('guest');
Route::get('structure',[LayoutController::class,'structure'])->middleware('guest');
Route::get('nails',[LayoutController::class,'nails'])->middleware('guest');


Route::get('ispatwireproduct',[LayoutController::class,'ispatwireproduct'])->middleware('guest');
Route::get('ispatpancaputra',[LayoutController::class,'ispatpancaputra'])->middleware('guest');
Route::get('ispatbukitbaja',[LayoutController::class,'ispatbukitbaja'])->middleware('guest');


Route::get('fasilitas',[LayoutController::class,'fasilitas'])->middleware('guest');
Route::get('steelmaking',[LayoutController::class,'steelmaking'])->middleware('guest');
Route::get('rolling',[LayoutController::class,'rolling'])->middleware('guest');
Route::get('fasilitaspancaputra',[LayoutController::class,'fasilitaspancaputra'])->middleware('guest');
Route::get('fasilitasbukitnaja',[LayoutController::class,'fasilitasbukitnaja'])->middleware('guest');
Route::get('fasilitaswire',[LayoutController::class,'fasilitaswire'])->middleware('guest');

Route::get('karir',[LayoutController::class,'karir'])->middleware('guest');

//indonesia
Route::get('profilindo_indo',[LayoutIndoController::class,'profilindo_indo'])->middleware('guest');
Route::get('bod_indo',[LayoutIndoController::class,'bod_indo'])->middleware('guest');
//email

// Route::get('send-email',function(){
//     $email = new SendEmail();
//     Mail::to('dendirikirahmawan@gmail.com')->send($email);

//     return redirect('/admin/customer')->with('success','New Post has been created');
// });
