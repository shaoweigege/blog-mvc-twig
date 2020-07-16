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

/* v_post.twig */
class __TwigTemplate_c3e1cc376e8e78f86abbc5b6ddfe33dd6f15b4af2c9102b0dd21eab9dea7bc32 extends Template
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
        echo "<p>Рубрика - <strong><a href=\"";
        echo twig_constant("ROOT");
        echo "category/";
        echo twig_get_attribute($this->env, $this->source, (isset($context["new_content"]) || array_key_exists("new_content", $context) ? $context["new_content"] : (function () { throw new RuntimeError('Variable "new_content" does not exist.', 1, $this->source); })()), "id_cat", [], "any", false, false, false, 1);
        echo "\">";
        echo twig_get_attribute($this->env, $this->source, (isset($context["new_cat"]) || array_key_exists("new_cat", $context) ? $context["new_cat"] : (function () { throw new RuntimeError('Variable "new_cat" does not exist.', 1, $this->source); })()), "name", [], "any", false, false, false, 1);
        echo "</a></strong></p>
<p>";
        // line 2
        echo twig_get_attribute($this->env, $this->source, (isset($context["new_content"]) || array_key_exists("new_content", $context) ? $context["new_content"] : (function () { throw new RuntimeError('Variable "new_content" does not exist.', 2, $this->source); })()), "content", [], "any", false, false, false, 2);
        echo "</p>
<p><i>";
        // line 3
        echo twig_get_attribute($this->env, $this->source, (isset($context["new_content"]) || array_key_exists("new_content", $context) ? $context["new_content"] : (function () { throw new RuntimeError('Variable "new_content" does not exist.', 3, $this->source); })()), "dt", [], "any", false, false, false, 3);
        echo "</i></p>
<p><a href=\"";
        // line 4
        echo twig_constant("ROOT");
        echo "\">Back</a></p>


";
    }

    public function getTemplateName()
    {
        return "v_post.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 4,  50 => 3,  46 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "v_post.twig", "/Users/denisk/Google Drive/WEB/TEST/php/php-1/blog-mvc-twig-r/views/v_post.twig");
    }
}
