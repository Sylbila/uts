<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/coba',function() {
    return view('coba');
});
Route::get('/content',function() {
    return view('content'); 
});
Route::get('/content3',function() {
    return view('content3'); 
});

use App\Http\controllers\controller1;
Route::get('/view', [controller1::class, 'index']);

Route::get('/uts',function() {
    return view('uts'); 
});

use App\Http\controllers\controller3;
Route::get('/contentuts1', [controller3::class, 'getData'])->name('index');
Route::get('/contentuts2', [controller3::class, 'show'])->name('jadwal');

