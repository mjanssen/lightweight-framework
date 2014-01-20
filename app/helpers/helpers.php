<?php

namespace helpers;

use helpers\Str\Str;
use helpers\Server\Server;

class helpers {

    static function Str()
    {
        return new Str();
    }

    static function Server()
    {
        return new Server();
    }

    static function _initHelpers()
    {
        self::Str();
        self::Server();
    }
}