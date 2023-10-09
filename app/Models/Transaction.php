<?php

// app/Models/Transaction.php

namespace App\Models;

use App\Models\Item;
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

    // 他のモデルとのリレーションシップを定義することもできます
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    // 他のリレーションシップも同様に定義できます
    public function items()
    {
        // This assumes you have a related Item model and a pivot table for transactions and items
        return $this->belongsToMany(Item::class)->withPivot('quantity', 'price')->withTimestamps();
    }


}




