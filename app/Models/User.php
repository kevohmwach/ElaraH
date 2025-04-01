<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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

    public function patient() : HasMany {
        return $this->hasMany(Patient::class);
    }
    public function cancer() : HasMany {
        return $this->hasMany(Cancer::class);
    }
    public function history() : HasMany {
        return $this->hasMany(History::class);
    }
    public function socialhistory() : HasMany {
        return $this->hasMany(SocialHistory::class);
    }
    public function ct4her() : HasMany {
        return $this->hasMany(Ct4her::class);
    }
    public function callscript() : HasMany {
        return $this->hasMany(CallScript::class);
    }
}
