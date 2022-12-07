<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory, HasUuid;

    public function typeservice()
    {
        return $this->belongsTo(TypeService::class, 'type_service_id');
    }
}
