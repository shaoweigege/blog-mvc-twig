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

/* v_main2c.twig */
class __TwigTemplate_00276d2134f1a6804b1f31a694a222ce850ca1193baa39925f6ade9f3dc707c1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "v_main.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("v_main.twig", "v_main2c.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div class=\"row\">
    <aside class=\"col col-12 col-md-3\">
        ";
        // line 6
        echo (isset($context["left"]) || array_key_exists("left", $context) ? $context["left"] : (function () { throw new RuntimeError('Variable "left" does not exist.', 6, $this->source); })());
        echo "
    </aside>
    <main class=\"col col-12 col-md-9\">
        <h1>";
        // line 9
        echo (isset($context["h1"]) || array_key_exists("h1", $context) ? $context["h1"] : (function () { throw new RuntimeError('Variable "h1" does not exist.', 9, $this->source); })());
        echo "</h1>
        ";
        // line 10
        echo (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 10, $this->source); })());
        echo "
    </main>
</div>


";
    }

    public function getTemplateName()
    {
        return "v_main2c.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 10,  60 => 9,  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "v_main2c.twig", "/Users/denisk/Google Drive/WEB/TEST/php/php-1/blog-mvc-twig/views/v_main2c.twig");
    }
}
