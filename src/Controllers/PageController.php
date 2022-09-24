<?php

namespace Vagrant\Lesson8\Controllers;

class PageController extends Controller
{

    public function show($slug)
    {
        if(is_numeric($slug)){
            $post = Page::all();
        }
        /* @var $blade */
        return $blade->make("pages.show", ['slug' => $slug]);
    }
    public function company()
    {
        return view("pages.company");
    }

}
