<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

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
        'hash',
        'username',
        'picture',
        'description',
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

    public function gravatar($size = 140)
    {
        // return $this->picture ? "/storage/{$this->picture}" : "https://www.gravatar.com/avatar/{$this->email}?&s={$size}";
        return $this->picture ? "/storage/{$this->picture}" : "https://www.gravatar.com/avatar/" . md5(strtolower(trim($this->email))) . "?&s=" . $size;

    }

    public function getUsernameOrHashAttribute()
    {
        return $this->username ?? $this->hash;
    }
}