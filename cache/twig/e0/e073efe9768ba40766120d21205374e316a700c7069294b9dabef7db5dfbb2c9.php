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

/* v_cat-left.twig */
class __TwigTemplate_7dded0ee9ede7aa560742ef7f47045c6280bf38f06668763dedc5ca576638177 extends Template
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
        echo "<div class=\"h3\">Categories</div>
<ul class=\"list-group\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allCat"]) || array_key_exists("allCat", $context) ? $context["allCat"] : (function () { throw new RuntimeError('Variable "allCat" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 4
            echo "        ";
            if ((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 4, $this->source); })())) {
                // line 5
                echo "            ";
                if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["category"], "id_cat", [], "any", false, false, false, 5), twig_get_attribute($this->env, $this->source, (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 5, $this->source); })()), "id_cat", [], "any", false, false, false, 5))) {
                    // line 6
                    echo "                <li class=\"list-group-item d-flex justify-content-between\"><a href=\"";
                    echo twig_constant("ROOT");
                    echo "category/";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "id_cat", [], "any", false, false, false, 6);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 6);
                    echo "</a>
                    <a class=\"btn btn-success w-25\" href=\"";
                    // line 7
                    echo twig_constant("ROOT");
                    echo "category/edit/";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "id_cat", [], "any", false, false, false, 7);
                    echo "\">Edit</a>
                </li>
            ";
                } else {
                    // line 10
                    echo "                <li class=\"list-group-item d-flex justify-content-between\"><strong><a href=\"";
                    echo twig_constant("ROOT");
                    echo "category/";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "id_cat", [], "any", false, false, false, 10);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 10);
                    echo "</a></strong>
                    <a class=\"btn btn-success w-25\" href=\"";
                    // line 11
                    echo twig_constant("ROOT");
                    echo "category/edit/";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "id_cat", [], "any", false, false, false, 11);
                    echo "\">Edit</a>
                </li>
            ";
                }
                // line 14
                echo "
        ";
            } else {
                // line 16
                echo "            ";
                if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["category"], "id_cat", [], "any", false, false, false, 16), twig_get_attribute($this->env, $this->source, (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 16, $this->source); })()), "id_cat", [], "any", false, false, false, 16))) {
                    // line 17
                    echo "                <li class=\"list-group-item\"><a href=\"";
                    echo twig_constant("ROOT");
                    echo "category/";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "id_cat", [], "any", false, false, false, 17);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 17);
                    echo "</a></li>
            ";
                } else {
                    // line 19
                    echo "                <li class=\"list-group-item\"><strong><a href=\"";
                    echo twig_constant("ROOT");
                    echo "category/";
                    echo twig_get_attribute($this->env, $this->source, (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 19, $this->source); })()), "id_cat", [], "any", false, false, false, 19);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19);
                    echo "</a></strong></li>
            ";
                }
                // line 21
                echo "        ";
            }
            // line 22
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "v_cat-left.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 23,  115 => 22,  112 => 21,  102 => 19,  92 => 17,  89 => 16,  85 => 14,  77 => 11,  68 => 10,  60 => 7,  51 => 6,  48 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "v_cat-left.twig", "/Users/denisk/Google Drive/WEB/TEST/php/php-1/blog-mvc-twig-token/views/v_cat-left.twig");
    }
}
