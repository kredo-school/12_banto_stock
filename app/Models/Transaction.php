<?php

namespace App\Models;

use App\Models\Item;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';

    protected $fillable = [
        'date',
        // 他のカラム
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->belongsToMany(Item::class)->withPivot('quantity', 'price')->withTimestamps();
    }

    // 正しい showTransaction メソッド
    public static function showTransaction($id)
    {
        // 関連するアイテムデータを含めてトランザクションを読み込みます
        $transaction = Transaction::with('items')->find($id);

        // トランザクションが存在しない場合の処理
        if (!$transaction) {
            abort(404); // またはトランザクションが存在しない場合の処理を行います
        }

        return view('your-blade-view', compact('transaction'));
    }
}
