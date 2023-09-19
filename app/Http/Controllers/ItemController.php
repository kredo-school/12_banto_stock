<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ItemController;

class ItemController extends Controller
{
    //private

    //_construct

    public function index()
    {
        return view('item.edit');
    }
}
