<?php

namespace Controllers;

use Symfony\Component\HttpFoundation\Response;

class BaseController
{
    /**
     * @param $template
     * @param array $vars
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function view($template, array $vars = array())
    {
        /**
         * This function is for setting up the view that's set in the controller.
         * It returns a new instance of response with the twig content.
         */

        $response = new Response();

        require_once VENDOR_PATH.'/twig/twig/lib/Twig/Autoloader.php';
        \Twig_Autoloader::register();

        /**
         * Easing out the return $this->view function so that the developer only
         * has to set "index" instead of "index.twig.html"
        */
        if (!strpos($template, '.html.twig')) {
            $template = $template.'.html.twig';
        }

        /**
         * Create a new twig instance with the Views path. After that the twig environment is loaded with the debug
         * key (for dump() function in the view) and the cache path.
         */
        $loader = new \Twig_Loader_Filesystem(APPLICATION_PATH.'/views');
        $twig = new \Twig_Environment($loader, array(
            'debug' => true,
            'cache' => APPLICATION_PATH.'/cache',
        ));

        //Adding the debug extension since it's set on true
        $twig->addExtension(new \Twig_Extension_Debug());

        //Return the response with the twig render function in it.
        return $response->setContent($twig->render($template, $vars));
    }
}