<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    //private

    //_construct

    public function index(){
        return view('item.edit');
    }
}
