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

/* v_content2col.twig */
class __TwigTemplate_b7ae1b36cb0fc985f4573c9c7e346204db430023ff37f9404cbfbb82eb338cfc extends Template
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
        echo "<div class=\"row\">
    <aside class=\"col col-12 col-sm-3\">
        ";
        // line 3
        echo (isset($context["left"]) || array_key_exists("left", $context) ? $context["left"] : (function () { throw new RuntimeError('Variable "left" does not exist.', 3, $this->source); })());
        echo "
    </aside>
    <main class=\"col col-12 col-sm-9\">
        <h1>";
        // line 6
        echo (isset($context["title_main"]) || array_key_exists("title_main", $context) ? $context["title_main"] : (function () { throw new RuntimeError('Variable "title_main" does not exist.', 6, $this->source); })());
        echo "</h1>
        ";
        // line 7
        echo (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 7, $this->source); })());
        echo "
    </main>
</div>
";
    }

    public function getTemplateName()
    {
        return "v_content2col.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "v_content2col.twig", "/Users/denisk/Google Drive/WEB/TEST/php/php-1/blog-mvc-twig/views/v_content2col.twig");
    }
}
