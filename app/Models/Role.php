<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $table = 'roles';

    public function user()
    {
        return $this->belongsTo(User::class, 'role_id');
    }
=======
>>>>>>> 834dc2bca9f1ac8a6564f5c4f99bedd1f2cfb4ea
}
