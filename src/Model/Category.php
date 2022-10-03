<?php

namespace Vagrant\Lesson9\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Category extends Model
{
    use SoftDeletes;

    public function post()
    {
        return $this->hasMany(Post::class);
    }
}
