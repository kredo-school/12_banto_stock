<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\TransactionController;




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

// ログアウトルート（コメントアウト解除）
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/register',[UserController::class, 'register'])->name('register');

Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction.index');

Route::get('/inventory', [InventoryController::class, 'index'])->name('inventory.index');

Route::get('/item/edit', [ItemController::class, 'index'])->name('item.edit');

Route::get('/category/edit', [CategoryController::class, 'index'])->name('category.edit');

Route::get('/userlist', [UserController::class, 'index'])->name('userlist.index');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/categoryitem/categoryitemlist',[CategoryItemListController::class,'index'])->name('categoryitem.categoryitemlist');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');
