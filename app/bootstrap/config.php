<?php

namespace app\bootstrap;

class Config {

    public function setDebug()
    {
//        $file = file(APPLICATION_PATH.'/bootstrap/config.php');
        $file = include APPLICATION_PATH.'/bootstrap/config.php';
        print_r($file);
//        $file = \app\config;
    }
} 