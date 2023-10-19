<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function sendOrder(Request $request)
    {
        // オーダー情報を受け取る
        $orderData = $request->all();

        // ここでtransactionテーブルにデータを保存する処理を行う
        // 例: Transaction::create($orderData);

        // オーダー完了のメッセージを表示するなどの処理を行う
        return view('order-complete'); // オーダー完了画面にリダイレクトまたは表示
    }

}
