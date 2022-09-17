<?php
namespace Vagrant\Lesson6\Models;
use Illuminate\Database\Eloquent\Model;
class Tag extends Post
{
    public function post(){
        return $this->belongsToMany(Post::class);
    }
}
