<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'carts';

    protected $fillable = [
        'user_id',
        // その他の fillable なカラムも必要であればここに追加
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Cart と CartItem のリレーションを定義
    public function items()
    {
        return $this->hasMany(CartItem::class, 'cart_id', 'id');
    }
}
