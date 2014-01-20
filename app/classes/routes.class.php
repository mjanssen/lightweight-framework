<?php

/**
 * This is the routing part of this little framework.
 * It uses the symfony route handling.
 */
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\Routing;
use Symfony\Component\HttpKernel;
use Symfony\Component\HttpFoundation\Response;

/**
 * Below this line the routing function from symfony are started.
 *
 * $request contains all the request methods, server vars and other needed variables for the system.
 */
$request = Request::createFromGlobals();
$routes  = require_once APPLICATION_PATH.'/bootstrap/routes.php';

//$context is all the requestContexts like request methods, hosts, ports etc.
$context = new Routing\RequestContext();
$context->fromRequest($request);

//$matcher contains all the needed router vars and objects.
$matcher    = new Routing\Matcher\UrlMatcher($routes, $context);
$resolver   = new HttpKernel\Controller\ControllerResolver();
$dispatcher = new EventDispatcher();

/**
 * Creating a new instance of the Framework class. This class checks if the controller + function can be required.
 * If it's not existing or cannot be loaded, it returns a response with the statuscode (404).
 * If response is set, the controller + action could not be found and the error is shown.
 * If the controller + action is loaded, the new response is created if the view is shown.
 *
 * If there is no return view in the controller, there is no response. That's why the system checks if the
 * response is set yes/no.
*/

$framework = new Qilin\Framework($dispatcher, $matcher ,$resolver);
$response = $framework->handle($request);

if ($response) {
    return $response->send();
}