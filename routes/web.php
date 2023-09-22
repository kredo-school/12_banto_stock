<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\TransactionController;


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

Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction.index');

Route::get('/inventory', [InventoryController::class, 'index'])->name('inventory.index');

Route::get('/item/edit', [ItemController::class, 'index'])->name('item.edit');

Route::get('/category/edit', [CategoryController::class, 'index'])->name('category.edit');

Route::get('/userlist', [UserController::class, 'index'])->name('userlist.index');
