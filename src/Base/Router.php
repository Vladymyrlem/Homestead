<?php

namespace Vagrant\Lesson9\Base;

use Vagrant\Lesson9\Controllers\PageController;

class Router
{
    public function route(): callable
    {
        $controller = new PageController();
        if ($_SERVER['REQUEST_URI'] == '/contact') {
            return [$controller, 'contact'];
        } elseif ($_SERVER['REQUEST_URI'] == '/about') {
            return [$controller, 'about'];
        }

        throw new \Error('Not found');
    }
}
