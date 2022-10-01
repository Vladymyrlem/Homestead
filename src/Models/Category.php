<?php

namespace Vagrant\Lesson7\Models;

use Illuminate\Database\Eloquent\Model;
use Vagrant\Lesson7\Models\Post;

class Category extends Model
{
    public function post()
    {
        $this->hasMany(Post::class);
    }
}
