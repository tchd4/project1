<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['body','user_id'];

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
    public function replays() {
        return $this->hasMany(Replay::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
}
