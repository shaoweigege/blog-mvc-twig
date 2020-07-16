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

/* v_add.twig */
class __TwigTemplate_8578ab9a726cad1f4cd86be1fb690d76a6ceadeef7dad9f255cc92d5bcc342fc extends Template
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
        echo "
        <form method=\"post\">
            <div class=\"form-group\">
                <label for=\"title\">Title</label>
                <input class=\"form-control\" type=\"text\" name=\"title\" value=\"";
        // line 5
        echo (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 5, $this->source); })());
        echo "\">
                <label for=\"content\">Content</label>
                <textarea class=\"form-control\" name=\"content\">";
        // line 7
        echo (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 7, $this->source); })());
        echo "</textarea><br>
                <div class=\"form-group\">
                    <label for=\"category\">Category</label>
                    <select class=\"form-control\" name=\"category\">
                        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 12
            echo "                            <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["cat"], "id_cat", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 12);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "                    </select>
                </div>
                <button class=\"btn btn-primary\" type=\"submit\" value=\"Submit\" name=\"addArticle\">Submit</button>
                <button class=\"btn btn-secondary\" type=\"submit\" value=\"Cancel\" name=\"resetArticle\">Cancel</button>
            </div>

        </form>
        <div>
            ";
        // line 22
        echo (isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 22, $this->source); })());
        echo "
        </div>
";
    }

    public function getTemplateName()
    {
        return "v_add.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 22,  70 => 14,  59 => 12,  55 => 11,  48 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "v_add.twig", "/Users/denisk/Google Drive/WEB/TEST/php/php-1/blog-mvc-twig-token/views/v_add.twig");
    }
}
