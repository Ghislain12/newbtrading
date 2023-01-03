<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasUuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'firstname',
        'civility',
        'country',
        'phone',
        'status_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }

    public static function isAdmin($userId)
    {
        $admin = Status::where('label', 'admin')->first();
        $admin_id = $admin->id;
        $user = User::where('id', $userId)->first();
        $status_id = $user->status_id;
        if ($status_id == $admin_id) {
            return true;
        }
        return false;
    }

    public static function isDirector($userId)
    {
        $director = Status::where('label', 'directeur')->first();
        $director_id = $director->id;
        $user = User::where('id', $userId)->first();
        $status_id = $user->status_id;
        if ($status_id == $director_id) {
            return true;
        }
        return false;
    }

    public static function isComptable($userId)
    {
        $comptable = Status::where('label', 'comptable')->first();
        $comptable_id = $comptable->id;
        $user = User::where('id', $userId)->first();
        $status_id = $user->status_id;
        if ($status_id == $comptable_id) {
            return true;
        }
        return false;
    }

    public static function isClient($userId)
    {
        $client = Status::where('label', 'client')->first();
        $client_id = $client->id;
        $user = User::where('id', $userId)->first();
        $status_id = $user->status_id;
        if ($status_id == $client_id) {
            return true;
        }
        return false;
    }
}
