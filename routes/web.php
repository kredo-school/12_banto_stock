<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\TransactionController;
// added 0927
use App\Http\Controllers\UserlistController;

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

Route::get('/userlist', function () {
    return view('userlist');
});

Route::get('userlist', [UserlistController::class, 'index']);


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/transaction', [TransactionController::class, 'index'])->name('index');

Route::get('/inventory', [InventoryController::class, 'index'])->name('index');



