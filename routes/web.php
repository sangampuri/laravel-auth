<?php
use App\Http\Middleware\ValidUser;  
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Use App\Http\Middleware\TestUser;

Route::get('/', function(){
    return view('index');
})->name('home');


Route::get('/login',function()
{
    return view('login');
});
Route::post('/login',[UserController::class,'login'])->name('login.perform');



Route::get('/register',function()
{
    return view('register');
});
Route::post('/register',[UserController::class,'register'])->name('register.save');


Route::get('/logout',[UserController::class,'logout'])->name('logout');


// Route::get('/dashboard',[UserController::class,'dashboard'])->name('dashboard')->middleware('IsValidUser:admin' , TestUser::class);
// Route::get('/innerpage',[UserController::class,'innerpage'])->name('innerpage')->middleware(TestUser::class , 'IsValidUser:admin');

Route::get('/dashboard',[UserController::class,'dashboard'])->name('dashboard')->middleware('auth' , 'IsValidUser:admin');
Route::get('/innerpage',[UserController::class,'innerpage'])->name('innerpage')->middleware('auth','IsValidUser:admin');
Route::get('/reader',[UserController::class,'reader'])->name('reader')->middleware('auth' , 'Isreader');