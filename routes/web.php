<?php

use Illuminate\Support\Facades\Route;

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

//basic route
Route::get('/test', function(){
    return 'Hello Sohan';
});

//route with parameters
Route::get('/hello/{name}', function($name){
    return 'Hello, '. $name . '!';
});
Route::get('/ami/{nam}', function($nam){
    return 'Ami, '. $nam . '!';
});

Route::get('/desh/{zilla}', function($zilla){
    return 'BD, '. $zilla . '!';
});

Route::get('/products/{any}', function($any){
    return 'You are viewing the product:'. $any;
});

Route::get('/food/{khai}', function($khai){
    return "I am eating:". $khai;
});
//Named Routes
Route::get('/ami/sohan', function(){
    return 'ami sohan';
})->name('bio');