<?php

namespace Vagrant\Lesson9\Base;

class Application
{
    private $_router;

    public function __construct()
    {
        $this->_router = new Router();
    }

    public function run()
    {
        $action = $this->_router->route();
        $action();
    }
}
