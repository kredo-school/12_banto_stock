<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\CategoryItemListController;
=======
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\DashboardController;
>>>>>>> main

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
Route::get('/items', function () {
    return view('items');
});
Route::get('/item-view', function () {
    return view('item-view');
});

Auth::routes();

<<<<<<< HEAD
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');















Route::get('/categoryitem/categoryitemlist',[CategoryItemListController::class,'index'])->name('categoryitem.categoryitemlist');
=======
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/transaction', [TransactionController::class, 'index'])->name('index');

Route::get('/inventory', [InventoryController::class, 'index'])->name('index');


Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');

>>>>>>> main
