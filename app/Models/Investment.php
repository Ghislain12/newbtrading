<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    use HasFactory, HasUuid;
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
