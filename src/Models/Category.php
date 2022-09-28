<?php

namespace Vagrant\Lesson8\Models;

use Illuminate\Database\Eloquent\Model;
use Vagrant\Lesson8\Models\Post;

class Category extends Model
{
    public function post()
    {
        $this->belongsToMany(Post::class);
    }
}
