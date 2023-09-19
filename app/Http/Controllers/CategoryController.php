<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CategoryController;

class CategoryController extends Controller
{
    public function index(){
        return view('category.edit');
    }
}
