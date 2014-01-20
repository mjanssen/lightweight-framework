<?php

/**
 * @returns array
 * Config file to configure some framework settings
 */

namespace app\config;

use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();

return array(

    /**
     * Array with ip addresses which will use the site's debug version
     */

    'ips' => array(
                '217.26.97.70'
            ),

    /**
     * Register the client's ip
     */

    'client_ip' => $request->getClientIp(),

    /**
     * Register app language
     */

    'lang' => 'en',

    /**
     * Register database information
     */

    'database' => array(
        'host' => 'localhost',
        'database' => 'imp02',
        'username' => 'root',
        'password' => 'secret'
    )
);