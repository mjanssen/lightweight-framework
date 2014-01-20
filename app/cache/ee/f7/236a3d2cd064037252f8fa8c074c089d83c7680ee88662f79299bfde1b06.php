<?php

/* index.html.twig */
class __TwigTemplate_eef7236a3d2cd064037252f8fa8c074c089d83c7680ee88662f79299bfde1b06 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name=\"description\" content=\"\"/>
    <meta charset=\"utf-8\"/>
    <link rel=\"stylesheet\" href=\"\"/>
</head>
<body>
    ";
        // line 10
        echo twig_var_dump($this->env, $context, (isset($context["users"]) ? $context["users"] : null));
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 10,  19 => 1,);
    }
}
