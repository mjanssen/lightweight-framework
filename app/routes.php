<?php
use Symfony\Component\Routing\Route;

/**
 * Set the application routes. First argument is the route's name (index i.e.) The second
 * argument passes the real route with the url ('/' for the index/root). You can then pass the
 * action to the current route.
 *
 * Below you can see the index/root application route which refers to the HomeController class and the indexAction
 * function.
 *
 * You can also pass dynamic route arguments. I.e. /products/{productName} will send the user to the controller &
 * action with the {productName} passed as a var. The right way is to pass a default within the Route.
 *
 * That would look like this.
 *
 * $routes->add('productView' , new Route('/product/{productName}, array(
 *  'productName' => 'DEFAULT',
 *  '_controller' => 'controllers\\ProductController::viewAction'
 * ));
 *
 */

$routes->add('index', new Route('/', array(
    '_controller' => 'controllers\\HomeController::indexAction'
)));

$routes->add('hello', new Route('/hello', array(
    '_controller' => 'controllers\\HomeController::helloAction'
)));