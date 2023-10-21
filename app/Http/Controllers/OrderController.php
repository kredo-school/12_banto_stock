<?php

/* namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// OrderController.php

use Illuminate\Support\Facades\View;

class OrderController extends Controller
{

    public function sendOrder(Request $request)
    {
        // オーダー情報を受け取る
        $orderData = $request->all();

        // ここでtransactionテーブルにデータを保存する処理を行う
        // 例: Transaction::create($orderData);

        // オーダー送信成功のメッセージをセッションに保存
        session()->flash('order-success', 'Your order has been completed!');

        // オーダー完了のメッセージを表示するなどの処理を行う

        // オーダーが成功した場合、order-complete View を表示
        return view('order-complete');
    }

}
 */