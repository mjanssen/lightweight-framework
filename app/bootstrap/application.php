<?php

namespace app\bootstrap;

class application {

    /**
     * Require the autoload file globally
     */
    public function autoload()
    {
        require_once VENDOR_PATH.'/autoload.php';
    }

    /**
     * Require the router class
     */
    public function routes()
    {
        require_once APPLICATION_PATH.'/classes/routes.class.php';
    }

    /**
     * Initialize the requires
     */
    public function run()
    {
        $this->autoload();
        $this->routes();
    }
} 