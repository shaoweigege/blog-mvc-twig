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

/* v_post-left.twig */
class __TwigTemplate_8fdb3d241141dcaaad4302cf57f1dbfdebbb8bbc58277443fa7053b33bbb0ee6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if ((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "    <ul class=\"list-group\">
        <li class=\"list-group-item\"><a class=\"btn btn-success\" href=\"";
            // line 3
            echo twig_constant("ROOT");
            echo "post/edit/";
            echo (isset($context["id_new"]) || array_key_exists("id_new", $context) ? $context["id_new"] : (function () { throw new RuntimeError('Variable "id_new" does not exist.', 3, $this->source); })());
            echo "\">Edit</a></li>
        <li class=\"list-group-item\"><a class=\"btn btn-success\" href=\"";
            // line 4
            echo twig_constant("ROOT");
            echo "post/edit/";
            echo (isset($context["id_new"]) || array_key_exists("id_new", $context) ? $context["id_new"] : (function () { throw new RuntimeError('Variable "id_new" does not exist.', 4, $this->source); })());
            echo "\">Delete</a></li>
    </ul>
";
        } else {
            // line 7
            echo "    <div>To edit article please log in</div>
";
        }
    }

    public function getTemplateName()
    {
        return "v_post-left.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 7,  48 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "v_post-left.twig", "/Users/denisk/Google Drive/WEB/TEST/php/php-1/blog-mvc-twig-token/views/v_post-left.twig");
    }
}
