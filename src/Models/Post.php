<?php

namespace Vagrant\Lesson8\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function category()
    {
        return $this->belongsToMany(Category::class, 'category_id');
    }

    public function tag()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
}
