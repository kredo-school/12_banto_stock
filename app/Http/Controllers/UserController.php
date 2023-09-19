<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;

class UserController extends Controller
{
    public function index()
    {
        return view('views/userlist');
    }
}
