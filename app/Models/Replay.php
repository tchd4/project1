<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Replay extends Model
{
    use HasFactory;

    protected $fillable = ['body'];

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function replays() {
        return $this->belongsTo(Replay::class, 'parent_id', 'id');
    }

    public function scopeParent(Builder $query) {
        return $query->where('parent_id', 0);
    }
}
