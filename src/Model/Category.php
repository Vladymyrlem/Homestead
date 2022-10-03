<?php

namespace Vagrant\Lesson9\Model;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    public function post()
    {
        return $this->hasMany(Post::class);
    }
}
