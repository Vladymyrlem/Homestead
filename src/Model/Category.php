<?php

namespace Vagrant\Lesson9\Model;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\SoftDeletes;
=======
>>>>>>> 5f35dec (Init Project)


class Category extends Model
{
<<<<<<< HEAD
    use SoftDeletes;

=======
>>>>>>> 5f35dec (Init Project)
    public function post()
    {
        return $this->hasMany(Post::class);
    }
}
