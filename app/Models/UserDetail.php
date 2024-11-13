<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserDetail extends Model
{
    use HasFactory;

    public function user()
    {
        // each user has one user detail
        return $this->belongsTo(User::class);
    }
}
