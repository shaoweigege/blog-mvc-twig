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

/* v_editcat.twig */
class __TwigTemplate_e659cae5ab3a51f5e46ed8f151ca293082b27bead16f575897d6388a8c8743e9 extends Template
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
        <label for=\"title\">Category name</label>
        <input class=\"form-control mb-3\" type=\"text\" name=\"titleCat\" value=\"";
        // line 5
        echo (isset($context["titleCat"]) || array_key_exists("titleCat", $context) ? $context["titleCat"] : (function () { throw new RuntimeError('Variable "titleCat" does not exist.', 5, $this->source); })());
        echo "\">
        <button class=\"btn btn-primary\" type=\"submit\" value=\"Edit\" name=\"editCat\">Edit</button>
        <button class=\"btn btn-secondary\" type=\"submit\" value=\"Cancel\" name=\"resetCat\">Cancel</button>
        <button class=\"btn btn-danger\" type=\"submit\" value=\"Delete\" name=\"deleteCat\">Delete</button>
        <div class=\"form-check mt-3 mb-3\">
            <input type=\"checkbox\" class=\"form-check-input\" value=\"yes\" name=\"deleteAgree\">
            <label class=\"";
        // line 11
        echo (isset($context["delete"]) || array_key_exists("delete", $context) ? $context["delete"] : (function () { throw new RuntimeError('Variable "delete" does not exist.', 11, $this->source); })());
        echo " form-check-label\" for=\"deleteAgree\">Realy delete?</label>
        </div>
    </div>
</form>
<div>
    ";
        // line 16
        echo (isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 16, $this->source); })());
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "v_editcat.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  52 => 11,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "v_editcat.twig", "/Users/denisk/Google Drive/WEB/TEST/php/php-1/blog-mvc-twig-r/views/v_editcat.twig");
    }
}
