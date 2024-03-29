<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Loan extends Model
{
    use HasFactory, HasUuid;
    protected $guarded = [];

    protected $fillable = [
        'user_id',
        'address',
        'objectif',
        'amount',
        'group',
        'period',
        'income',
        'status_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public static function isValidated(Loan $loan)
    {
        if ($loan->statut == true) {
            return true;
        }
        return false;
    }
}
