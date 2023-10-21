<?php
// ItemViewController.php
namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Item;
use App\Models\CartItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Traits\ItemTrait;
use Illuminate\Support\Facades\Auth; // Authを追加

class ItemViewController extends Controller
{
    use ItemTrait;

    public function index()
    {
        $orderedItems = [];
        $user = Auth::user();

        // ユーザーがログインしているか確認
        if (!$user) {
            // ユーザーがログインしていない場合の処理
            // 例: ログインページにリダイレクトするなど
            return redirect()->route('login');
        }
        // ユーザーのカートを取得
        $cart = $user->cart;

        // カートが存在しない場合、新しいカートを作成
        if (!$cart) {
            $cart = Cart::create([
                "user_id" => $user->id
            ]);
        }
        $items = Item::paginate(10);
        // todo: add a user_id column in carts table
        $orderedItems = Cart::find($user->cart->id)->items;
        // dd($user->cart);
        // dd($orderedItems->items);
        return view('item-view', ['cart' => $cart, 'items' => $items, 'orderedItems' => $orderedItems,]);
    }


    public function addOrder(Item $item)
    {
        $user = Auth::user();

        // ユーザーがログインしているか確認
        if (!$user) {
            // ユーザーがログインしていない場合の処理
            // 例: ログインページにリダイレクトするなど
            return redirect()->route('login');
        }

        // ユーザーのカートを取得
        $cart = $user->cart;

        // カートが存在しない場合、新しいカートを作成
        if (!$cart) {
            $cart = Cart::create([
                "user_id" => $user->id
            ]);
        }

        // Check if the item already exists in the cart
        $existingCartItem = $cart->items()->where('item_id', $item->id)->first();

        if ($existingCartItem) {
            // If the item exists, update the quantity
            $existingCartItem->update([
                'qty' => $existingCartItem->qty + 1,
            ]);
        } else {
            // If the item doesn't exist, create a new cart item
            $cartItem = new CartItem([
                'item_id' => $item->id,
                'item_price' => $item->price,
                'qty' => 1,
            ]);
            $cart->items()->save($cartItem);
        }

        // 他の処理...

        return redirect()->route('item-view.index'); // または適切なリダイレクト先に変更
    }

    public function updateQuantity(CartItem $cartItem, $quantity)
    {
        $cartItem->qty = $quantity;
        // カートアイテムの数量を更新
        $cartItem->save();

        // 必要なレスポンスを返す（例: 更新後のHTMLを返す）
        // ここではHTMLを返す仮定で、実際のレスポンスを返すロジックに置き換えてください
        return redirect()->back();
    }

    public function deleteOrder(CartItem $cartItem)
    {
        // $cart_item はルートパラメーターから受け取ります
        //$item = CartItem::find($cartItem);
        $cartItem->delete();

        return redirect()->route('item-view.index'); // または適切なリダイレクト先に変更

    }
}

     /*public function addOrder(Item $item)
    {
        $orderedItems = [];
        $user = Auth::user();
        // todo: add a user_id column in carts table
        $cart = $user->cart; // 変数$cartの代入を修正
        /**
         * for the carts table
         * we only need the following columns:
         * id, user_id,created_at, updated_at columns
         * where user_id is a foreign key to users table
         * 
         * we should create and additional table
         * we have to name it cart_items
         * it should consists of 
         * id, cart_id, item_id, item_price, qty, created_at and updated_at columns
         * where cart_id is a foreign_key to carts table
         * where item_id is a foreign_key to items table
         */
        /*if($cart) {
            // todo: add an items relationship to your Cart model referencing the cart_items table
            $orderedItems = $cart->items;
            $cart->items()->create([
                'item_id' => $item->id,
                //... other fields here
                'item_price' => $item->price, // 価格などを追加
                'qty' => 1, // 例: 数量
            ]);
        } else {
            $cart = Cart::create([
                "user_id" => $user->id
            ]);
            $cart->items()->create([
                'item_id' => $item->id,
                //... other fields here
                'item_price' => $item->price, // 価格などを追加
                'qty' => $cart_items->, // 例: 数量
            ]);
        }
        Session::put('cart', $cart);
        $items = Item::paginate(10);
        return view('item-view', ['items' => $items, 'orderedItems' => $orderedItems]);
    }*/