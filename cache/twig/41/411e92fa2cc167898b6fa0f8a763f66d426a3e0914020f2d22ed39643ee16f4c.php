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

/* v_cat.twig */
class __TwigTemplate_008c08e535ff82ca0f8ce9114a9903fe74822e7fe322112bbf69d3122e2e8a13 extends Template
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
        // line 6
        echo "
";
        // line 8
        echo "
";
        // line 10
        echo "
<div class=\"card\">

        ";
        // line 13
        if (1 === twig_compare(twig_length_filter($this->env, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 13, $this->source); })())), 0)) {
            // line 14
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 14, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
                // line 15
                echo "                <div class=\\\"card-body\\\">
                    ";
                // line 16
                if ((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })())) {
                    // line 17
                    echo "                        <div class=\"card-title\">";
                    echo twig_get_attribute($this->env, $this->source, $context["new"], "title", [], "any", false, false, false, 17);
                    echo "</div>
                        <a class=\"btn btn-outline-secondary mr-5\" href=\"";
                    // line 18
                    echo twig_constant("ROOT");
                    echo "post/";
                    echo twig_get_attribute($this->env, $this->source, $context["new"], "id_new", [], "any", false, false, false, 18);
                    echo "\">Read more</a>
                        <a class=\"btn btn-success\" href=\"";
                    // line 19
                    echo twig_constant("ROOT");
                    echo "post/edit/";
                    echo twig_get_attribute($this->env, $this->source, $context["new"], "id_new", [], "any", false, false, false, 19);
                    echo "\">Edit</a>

                    ";
                } else {
                    // line 22
                    echo "                        <div class=\"card-title\">";
                    echo twig_get_attribute($this->env, $this->source, $context["new"], "title", [], "any", false, false, false, 22);
                    echo "</div>
                        <a class=\"btn btn-outline-secondary mr-5\" href=\"";
                    // line 23
                    echo twig_constant("ROOT");
                    echo "post/";
                    echo twig_get_attribute($this->env, $this->source, $context["new"], "id_new", [], "any", false, false, false, 23);
                    echo "\">Read more</a>
                    ";
                }
                // line 25
                echo "                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "        ";
        } else {
            // line 28
            echo "                    <p>There are no articles yet.</p>
        ";
        }
        // line 30
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "v_cat.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 30,  101 => 28,  98 => 27,  91 => 25,  84 => 23,  79 => 22,  71 => 19,  65 => 18,  60 => 17,  58 => 16,  55 => 15,  50 => 14,  48 => 13,  43 => 10,  40 => 8,  37 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "v_cat.twig", "/Users/denisk/Google Drive/WEB/TEST/php/php-1/blog-mvc-twig-token/views/v_cat.twig");
    }
}
