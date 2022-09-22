<?php

namespace Vagrant\Lesson6\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function category()
    {
        return $this->belongsToMany(Category::class)->withTimestamps();
    }

    public function tag()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
}
