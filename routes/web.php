<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ItemController;

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







































Route::get('item/index', [ItemController::class, 'index'])->name('item.index');
route::get('item/create', [ItemController::class, 'create'])->name('item.create');
route::get('/item/{id}/edit', [ItemController::class, 'edit'])->name('item.edit');
route::post('item/store', [ItemController::class, 'store'])->name('item.store');
route::patch('/item/{id}/update', [ItemController::class, 'update'])->name('item.update');
Route::delete('item/{id}/destroy', [ItemController::class, 'destroy'])->name('item.destroy');


route::get('category/index', [CategoryController::class, 'index'])->name('category.index');
route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category/categoryitemlist/{id}', [CategoryController::class, 'itemindex'])->name('category.categoryitemlist');
route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
route::patch('/category/{id}/update', [CategoryController::class, 'update'])->name('category.update');


    


































Auth::routes();


Route::get('/home', [HomeController::class, 'index'])->name('home');


