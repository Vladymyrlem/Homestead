<?php

namespace Vagrant\Lesson8\Base;

use Vagrant\Lesson8\Controllers\PageController;

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
