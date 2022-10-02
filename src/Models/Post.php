<?php

namespace Vagrant\Lesson9\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function category()
    {
        return $this->belongsToMany(Category::class);
    }

    public function tag()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
}
