<?php

use App\Http\Controllers\HotelController;
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

Route::get('/list',[HotelController::class,'index']);
Route::get('/add',[HotelController::class,'create']);
Route::get('/edit/{id}',[HotelController::class,'edit']);
Route::get('/detail/{id}',[HotelController::class,'show']);
Route::get('/delete/{id}',[HotelController::class,'destroy']);
Route::resource('hotels',HotelController::class);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
