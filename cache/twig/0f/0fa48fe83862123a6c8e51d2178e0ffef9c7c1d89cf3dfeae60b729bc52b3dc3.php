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

/* v_addcat.twig */
class __TwigTemplate_6abde119344e2f250dd0c21a6de3e3d88f463e6d22ffbdabba5d86d9f37296c1 extends Template
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
                <label for=\"title\">Category Title</label>
                <input class=\"form-control mb-3\" type=\"text\" name=\"titlecat\" value=\"";
        // line 5
        echo (isset($context["titleCat"]) || array_key_exists("titleCat", $context) ? $context["titleCat"] : (function () { throw new RuntimeError('Variable "titleCat" does not exist.', 5, $this->source); })());
        echo "\">
                <button class=\"btn btn-primary\" type=\"submit\" value=\"Submit\" name=\"addCat\">Submit</button>
                <button class=\"btn btn-secondary\" type=\"submit\" value=\"Cancel\" name=\"resetCat\">Cancel</button>
            </div>

        </form>
        <div>
            ";
        // line 12
        echo (isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 12, $this->source); })());
        echo "
        </div>
";
    }

    public function getTemplateName()
    {
        return "v_addcat.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 12,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "v_addcat.twig", "/Users/denisk/Google Drive/WEB/TEST/php/php-1/blog-mvc-twig-token/views/v_addcat.twig");
    }
}
