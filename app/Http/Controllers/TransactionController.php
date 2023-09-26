<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        // すべてのトランザクションデータを取得
        $transactions = Transaction::all();

        return view('transaction.index', compact('transactions'));
    }
}


