<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\CategoryItemListController;
=======
use App\Http\Controllers\HomeController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\ItemAddController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemEditController;
use App\Http\Controllers\ItemViewController;
use App\Http\Controllers\UserlistController;
use App\Http\Controllers\DashboardController;
// added 0927
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\TransactionController;
<<<<<<< HEAD
use App\Http\Controllers\DashboardController;
>>>>>>> main
=======
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryItemListController;



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


Route::get('/userlist', function () {
    return view('userlist');
});

Route::get('userlist', [UserlistController::class, 'index']);


Auth::routes();

<<<<<<< HEAD
<<<<<<< HEAD
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');















Route::get('/categoryitem/categoryitemlist',[CategoryItemListController::class,'index'])->name('categoryitem.categoryitemlist');
=======
=======
// ログアウトルート（コメントアウト解除）
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

>>>>>>> main
Route::get('/home', [HomeController::class, 'index'])->name('home');

//Route::get('/register',[RegisterController::class, 'register'])->name('register');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// login-forget.blade.phpのback to loginのroute
Route::get('/login',[UserController::class, 'login'])->name('login');

Route::get('/item/edit', [ItemEditController::class, 'index'])->name('item.edit.index');

Route::get('/category/edit', [CategoryController::class, 'index'])->name('category.edit');

Route::get('/userlist', [UserController::class, 'index'])->name('userlist.index');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');


Route::get('/category/itemcategories', [CategoryItemListController::class, 'index'])->name('category.itemcategories');

Route::get('/items', [ItemsController::class, 'index'])->name('items.index');
Route::get('/item-view', [ItemViewController::class, 'index'])->name('item-view.index');
Route::get('/item-add', [ItemAddController::class, 'index'])->name('item-add.index');





// dashboardのcontroller
Route::post('/getTotalPrice', [DashboardController::class, 'getTotalPrice']);








// login-forget.blade.phpのback to loginのroute
Route::get('/login',[UserController::class, 'login'])->name('login');
Route::get('/item-view/{item}', [ItemViewController::class, 'addOrder'])->name('item-view.add-order');















Route::get('item/index', [ItemController::class, 'index'])->name('item.index');
route::get('item/create', [ItemController::class, 'create'])->name('item.create');
route::get('/item/{id}/edit', [ItemController::class, 'edit'])->name('item.edit');
route::post('item/store', [ItemController::class, 'store'])->name('item.store');
route::patch('item/{id}/update', [ItemController::class, 'update'])->name('item.update');
route::delete('item/{id}/destroy', [ItemController::class, 'destroy'])->name('item.destroy');


Route::get('category/index', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/categoryitemlist/{id}', [CategoryController::class, 'itemindex'])->name('category.categoryitemlist');
route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
route::patch('/category/{id}/update', [CategoryController::class, 'update'])->name('category.update');





// dashboardのcontroller
Route::post('/getTotalPrice', [DashboardController::class, 'getTotalPrice']);

//ItemViewController
//Route::get('/items', [ItemsController::class, 'index'])->name('items.index');
Route::get('/item-view', [ItemViewController::class, 'index'])->name('item-view.index');
Route::get('/item-add', [ItemAddController::class, 'index'])->name('item-add.index');
Route::get('/item-view/{item}', [ItemViewController::class, 'addOrder'])->name('item-view.add-order');
Route::post('/item-view/{cart_item}', [ItemViewController::class, 'deleteOrder'])->name('item-view.delete-item');
Route::get('/cart-item/{cartItem}/update-quantity/{quantity}', [ItemViewController::class, 'updateQuantity'])->name('cart-item.update-quantity');
Route::post('/item-view-send-order', [ItemViewController::class, 'sendOrder'])->name('item-view.send-order');


//TransactionController
Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction.index');
//InventoryController
Route::get('/inventory', [InventoryController::class, 'index'])->name('inventory.index');




>>>>>>> main
