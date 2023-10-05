<?php

namespace App\Http\Controllers;
use App\Models\Cart;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
        {
    // Cartテーブルから全てのitem_priceを取得
    $totalItemPrice = Cart::sum('item_price');

    // ダッシュボードビューにデータを渡す
    return view('dashboard.index', ['totalItemPrice' => $totalItemPrice]);
        }

    

}
