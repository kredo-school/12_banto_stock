<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}


