<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TransactionController;

class TransactionController extends Controller
{
    public function index()
    {
        return view('transaction.transaction');
    }
}
