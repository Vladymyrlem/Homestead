<?php

namespace Vagrant\Lesson9\Model;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\SoftDeletes;
=======
>>>>>>> 5f35dec (Init Project)


class Tag extends Model
{
<<<<<<< HEAD
    use SoftDeletes;

=======
>>>>>>> 5f35dec (Init Project)
    public function post()
    {
        return $this->belongsToMany(Post::class, 'post_tag')->withTimestamps();
    }

}
