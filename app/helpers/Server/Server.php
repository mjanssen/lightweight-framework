<?php
/**
 * Created by PhpStorm.
 * User: marnixjanssen
 * Date: 15/01/14
 * Time: 15:29
 */

namespace helpers\Server;


class Server {

    public static function get($var)
    {
        return $_SERVER[''.$var.''];
    }

} 