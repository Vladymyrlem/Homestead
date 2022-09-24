<?php

namespace Vagrant\Lesson8\Base;

use Vagrant\Lesson8\Controllers\PageController;

class Router
{
    public function route(): callable
    {
        if ($_SERVER['REQUEST_URI'] == '/post') {
        $controller = new PageController();
            return [$controller,'page'];
        }
        throw  new \Error('Not Found Page');
    }
}
