<?php

namespace Vagrant\Lesson9\Model;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\SoftDeletes;
=======
>>>>>>> 5f35dec (Init Project)


class Post extends Model
{
<<<<<<< HEAD
    use SoftDeletes;

=======
>>>>>>> 5f35dec (Init Project)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tag')->withTimestamps();
    }

}
