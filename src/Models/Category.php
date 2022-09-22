<?php

namespace Vagrant\Lesson6\Models;

use Illuminate\Database\Eloquent\Model;
use Vagrant\Lesson6\Models\Post;

class Category extends Model
{
    public function post()
    {
        $this->hasMany(Post::class);
    }
}
