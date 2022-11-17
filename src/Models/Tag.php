<?php

namespace Vagrant\Lesson8\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function post()
    {
        return $this->belongsToMany(Post::class)->withTimestamps();
    }
}
