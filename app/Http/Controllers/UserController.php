<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Http\Controllers\Controller;


class UserController extends Controller
{
    public function index()
    {
        return view('userlist');
=======

class UserController extends Controller
{
    public function register()
    {
        return view('auth.register');
>>>>>>> 834dc2bca9f1ac8a6564f5c4f99bedd1f2cfb4ea
    }
}
