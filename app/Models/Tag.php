<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public function posts()
    {
        return $this->morphedByMany(Post::class, 'taggable');
    }

    public function replays()
    {
        return $this->morphedByMany(Replay::class, 'taggable');
    }

}
