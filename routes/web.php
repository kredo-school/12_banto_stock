<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/register',[UserController::class, 'register'])->name('register');

Route::get('/transaction', [TransactionController::class, 'index'])->name('index');

Route::get('/inventory', [InventoryController::class, 'index'])->name('index');

// Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::post('/auth/items',[LoginController::class, 'login'])->name('auth.items');
