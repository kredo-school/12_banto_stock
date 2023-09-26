<?php

// app/Models/Transaction.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;
    protected $table = 'transactions';

    // 他のモデルとのリレーションシップを定義することもできます
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    // 他のリレーションシップも同様に定義できます
}



