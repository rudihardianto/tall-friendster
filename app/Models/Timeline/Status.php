<?php

namespace App\Models\Timeline;

use App\Models\User;
use Database\Factories\StatusFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Status extends Model
{
    use HasFactory;

    protected $fillable = [
        'hash',
        'body',
    ];

    protected static function newFactory()
    {
        return StatusFactory::new ();
    }

    public function getPublishedAttribute()
    {
        return $this->created_at->diffForHumans();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}