<?php

/* home/index.html.twig */
class __TwigTemplate_f89070bf2208d4c933585bdc91a3b85804430964b6ceeb53bd5c3196f9cad56f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("templates/header.html")->display($context);
        // line 2
        echo "
<div class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Framework</a>
        </div>
    </div>
</div>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class=\"jumbotron\">
    <div class=\"container\">
        <h1>You have landed!</h1>
        <p>You've succesfully installed the framework!</p>
    </div>
</div>

<div class=\"container\">
    <!-- Example row of columns -->
    <div class=\"row\">
        <div class=\"col-md-4\">
            <h2>Symfony 2</h2>
            <p>This framework makes use of Symfony 2 components like routes, responses and requests</p>
            <p><a class=\"btn btn-default\" target=\"_blank\" href=\"http://www.symfony.com/\" role=\"button\">View details &raquo;</a></p>
        </div>
        <div class=\"col-md-4\">
            <h2>Laravel 4</h2>
            <p>Some Laravel 4 helpers are included to make work easier.</p>
            <p><a class=\"btn btn-default\" target=\"_blank\" href=\"http://www.laravel.com\" role=\"button\">View details &raquo;</a></p>
        </div>
        <div class=\"col-md-4\">
            <h2>Twig</h2>
            <p>The framework makes use of the Twig template engine.</p>
            <p><a class=\"btn btn-default\" target=\"_blank\" href=\"http://twig.sensiolabs.org/\" role=\"button\">View details &raquo;</a></p>
        </div>
    </div>
</div> <!-- /container -->

";
        // line 46
        $this->env->loadTemplate("templates/footer.html")->display($context);
    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 46,  21 => 2,  19 => 1,);
    }
}
