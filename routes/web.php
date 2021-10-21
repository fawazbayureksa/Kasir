<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\SalesController;
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
    return view('template');
});

Route::get('/home', function () {
    return view('home/home');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/sales', [SalesController::class, 'index']);

Route::resource('category', CategoryController::class);
Route::resource('unit', UnitController::class);
Route::resource('item', ItemController::class);