<?php

namespace App\Models\Timeline;

use App\Models\User;
use Database\Factories\StatusFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Status extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return StatusFactory::new ();
    }

    protected $fillable = [
        'hash',
        'user_id',
        'body',
    ];

    public function getPublishedAttribute()
    {
        return $this->created_at->diffForHumans();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}