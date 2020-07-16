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

/* v_catlist.twig */
class __TwigTemplate_f32cc7ad5ef2c8b7c7746895e4da1d5529ede548a3256e6d0e52d2a1001ca51c extends Template
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
        echo "<ul class=\"list-group\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 3
            echo "        ";
            if ((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })())) {
                // line 4
                echo "                <li class=\"list-group-item d-flex justify-content-between\"><a href=\"";
                echo twig_constant("ROOT");
                echo "category/";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "id_cat", [], "any", false, false, false, 4);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 4);
                echo "</a>
                    <a class=\"btn btn-success w-25\" href=\"";
                // line 5
                echo twig_constant("ROOT");
                echo "category/edit/";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "id_cat", [], "any", false, false, false, 5);
                echo "\">Edit</a>
                </li>
        ";
            } else {
                // line 8
                echo "                <li class=\"list-group-item\"><a href=\"";
                echo twig_constant("ROOT");
                echo "category/";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "id_cat", [], "any", false, false, false, 8);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 8);
                echo "</a></li>
        ";
            }
            // line 10
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "v_catlist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 11,  74 => 10,  64 => 8,  56 => 5,  47 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "v_catlist.twig", "/Users/denisk/Google Drive/WEB/TEST/php/php-1/blog-mvc-twig-token/views/v_catlist.twig");
    }
}
