<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* v_main.twig */
class __TwigTemplate_028632aa1575d4692f7af82e7c47f9f7cbe60b922fbc4cdcdc9dd44505cdeb45 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"ru\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width\">
    <link rel=\"canonical\" href=\"";
        // line 6
        echo (isset($context["canonical"]) || array_key_exists("canonical", $context) ? $context["canonical"] : (function () { throw new RuntimeError('Variable "canonical" does not exist.', 6, $this->source); })());
        echo "\">
    <link href=\"";
        // line 7
        echo twig_constant("ROOT");
        echo "assets/css/styles.css\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_constant("ROOT");
        echo "assets/css/bootstrap.min.css\">
    <title>";
        // line 9
        echo (isset($context["title_main"]) || array_key_exists("title_main", $context) ? $context["title_main"] : (function () { throw new RuntimeError('Variable "title_main" does not exist.', 9, $this->source); })());
        echo "</title>
</head>
<body>
<div id=\"wrapper\">
    <header class=\"site-header\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"logo\">My Blog</div>
                <div class=\"phone\">8 800 800 80 80</div>
            </div>

        </div>
    </header>
    <nav class=\"navbar navbar-expand-sm navbar-light bg-light\">
        <div class=\"container\">
            <ul class=\"navbar-nav flex-grow-1\">
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 25
        echo twig_constant("ROOT");
        echo "\">Home</a></li>
                <li class=\"nav-item flex-grow-1\"><a class=\"nav-link\" href=\"";
        // line 26
        echo twig_constant("ROOT");
        echo "contacts\">Contacts</a></li>

                ";
        // line 28
        if ((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })())) {
            // line 29
            echo "                    <li class=\"nav-item \"><a class=\"nav-link\" href=\"";
            echo twig_constant("ROOT");
            echo "post/add\">Add Post</a></li>
                    <li class=\"nav-item \"><a class=\"nav-link\" href=\"";
            // line 30
            echo twig_constant("ROOT");
            echo "category/add\">Add Category</a></li>
                    <li class=\"nav-item \"><a class=\"nav-link\" href=\"";
            // line 31
            echo twig_constant("ROOT");
            echo "category/list\">Categories List</a></li>
                    <li class=\"nav-item \"><a class=\"nav-link\" href=\"";
            // line 32
            echo twig_constant("ROOT");
            echo "exit\">Log out (";
            echo twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "name", [], "any", false, false, false, 32);
            echo ")</a></li>

                ";
        } else {
            // line 35
            echo "                    <li class=\"nav-item \"><a class=\"nav-link\" href=\"";
            echo twig_constant("ROOT");
            echo "login\">Login</a></li>
                ";
        }
        // line 37
        echo "            </ul>
        </div>
    </nav>

    <div class=\"site-content\">
        <div class=\"container\">
            ";
        // line 43
        $this->displayBlock('main', $context, $blocks);
        // line 49
        echo "        </div>
    </div>

    <footer class=\"site-footer\">
        <div class=\"container\">
            <span class=\"copy\">&copy; 2020, All rights reserved</span>
        </div>
    </footer>
</div>
<script src=\"";
        // line 58
        echo twig_constant("ROOT");
        echo "assets/js/jquery-1.11.0.min.js\" type=\"text/javascript\"></script>
<script src=\"";
        // line 59
        echo twig_constant("ROOT");
        echo "assets/js/scripts.js\" type=\"text/javascript\"></script>
</body>
</html>
";
    }

    // line 43
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "            <main>
                <h1>";
        // line 45
        echo (isset($context["h1"]) || array_key_exists("h1", $context) ? $context["h1"] : (function () { throw new RuntimeError('Variable "h1" does not exist.', 45, $this->source); })());
        echo "</h1>
                ";
        // line 46
        echo (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 46, $this->source); })());
        echo "
            </main>
            ";
    }

    public function getTemplateName()
    {
        return "v_main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 46,  154 => 45,  151 => 44,  147 => 43,  139 => 59,  135 => 58,  124 => 49,  122 => 43,  114 => 37,  108 => 35,  100 => 32,  96 => 31,  92 => 30,  87 => 29,  85 => 28,  80 => 26,  76 => 25,  57 => 9,  53 => 8,  49 => 7,  45 => 6,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "v_main.twig", "/Users/denisk/Google Drive/WEB/TEST/php/php-1/blog-mvc-twig-token/views/v_main.twig");
    }
}
