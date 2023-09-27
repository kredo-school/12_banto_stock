<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemViewController extends Controller
{
    public function index()
    {
        return view('item-view'); // item-view.blade.php ビューを表示
    }
}
