<?php

/**
 * Requiring the autoloader file.
 * Getting the routes from /app/routes.php which are set by developer.
 *
 * Returns Route object
 */
require_once VENDOR_PATH.'/autoload.php';

use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();

require_once APPLICATION_PATH.'/routes.php';

return $routes;