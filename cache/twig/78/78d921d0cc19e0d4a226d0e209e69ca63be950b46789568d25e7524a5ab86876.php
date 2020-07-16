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

/* v_index.twig */
class __TwigTemplate_6e2dd50c43fb53b0ad43ccc84e8f944365a1ed25694072e7649484b827e9ff02 extends Template
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
        // line 5
        echo "
";
        // line 7
        echo "
<div class=\"card\">

        ";
        // line 10
        if (1 === twig_compare(twig_length_filter($this->env, (isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 10, $this->source); })())), 0)) {
            // line 11
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 11, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
                // line 12
                echo "                <div class=\"card-body\">
                    ";
                // line 13
                if ((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })())) {
                    // line 14
                    echo "                        <div class=\"card-title\">";
                    echo twig_get_attribute($this->env, $this->source, $context["new"], "title", [], "any", false, false, false, 14);
                    echo "</div>
                        <a class=\"btn btn-outline-secondary mr-5\" href=\"";
                    // line 15
                    echo twig_constant("ROOT");
                    echo "post/";
                    echo twig_get_attribute($this->env, $this->source, $context["new"], "id_new", [], "any", false, false, false, 15);
                    echo "\">Read more</a>
                        <a class=\"btn btn-success\" href=\"";
                    // line 16
                    echo twig_constant("ROOT");
                    echo "post/edit/";
                    echo twig_get_attribute($this->env, $this->source, $context["new"], "id_new", [], "any", false, false, false, 16);
                    echo "\">Edit</a>

                    ";
                } else {
                    // line 19
                    echo "                        <div class=\"card-title\">";
                    echo twig_get_attribute($this->env, $this->source, $context["new"], "title", [], "any", false, false, false, 19);
                    echo "</div>
                        <a class=\"btn btn-outline-secondary mr-5\" href=\"";
                    // line 20
                    echo twig_constant("ROOT");
                    echo "post/";
                    echo twig_get_attribute($this->env, $this->source, $context["new"], "id_new", [], "any", false, false, false, 20);
                    echo "\">Read more</a>
                    ";
                }
                // line 22
                echo "                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "        ";
        } else {
            // line 25
            echo "                    <p>\"There are no articles yet.\"</p>
        ";
        }
        // line 27
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "v_index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 27,  98 => 25,  95 => 24,  88 => 22,  81 => 20,  76 => 19,  68 => 16,  62 => 15,  57 => 14,  55 => 13,  52 => 12,  47 => 11,  45 => 10,  40 => 7,  37 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "v_index.twig", "/Users/denisk/Google Drive/WEB/TEST/php/php-1/blog-mvc-twig-token/views/v_index.twig");
    }
}
