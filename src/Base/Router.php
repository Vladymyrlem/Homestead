<?php

namespace Vagrant\Lesson9\Base;

class Router
{
    public function route(): callable
    {
        $controller = new \Vagrant\Lesson9\Base\Controller\PageController();
        if($_SERVER['REQUEST_URI'] == '/index'){
            return [$controller, 'index'];
        }
        throw new \Error('Not found');
    }

}
