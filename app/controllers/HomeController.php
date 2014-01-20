<?php

namespace controllers;

use helpers\Str\Str;

class HomeController extends BaseController
{
    public function indexAction()
    {
        //Working with models
        $userModel = new \models\Users();
        //Fetching data from the user model
        $users = $userModel->getUsers();

        //Testing the Slug helper
        $slug = Str::slug('This is a string');

        //Creating an array to send it to the view
        $data = array(
            'users' => $users,
            'slug' => $slug
        );

        //Returning the view with the correct path & data array (/app/views/home/index.html.twig)
        return $this->view('home/index', $data);
    }

    public function helloAction()
    {
        echo 'hello (:';
    }
} 