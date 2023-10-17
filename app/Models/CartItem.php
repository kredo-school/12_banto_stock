<?php

namespace App\Models;


use App\Models\Cart;
use App\Models\Item;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CartItem extends Model
{
    use HasFactory;
    protected $table = 'cart_items';

    protected $fillable = [
        'item_id', // ここに item_id を追加
        'cart_id',  // もしくは必要なカラムを追加
        'item_price',
        'qty',
        // その他の fillable なカラムも必要であればここに追加
    ];

    // 他のモデルコード...
    public function cart()
    {
        return $this->belongsTo(Cart::class, 'cart_id', 'id');
    }

    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }
}
