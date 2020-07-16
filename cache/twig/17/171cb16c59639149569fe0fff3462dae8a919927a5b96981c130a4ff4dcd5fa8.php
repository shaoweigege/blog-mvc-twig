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

/* v_login.twig */
class __TwigTemplate_34122078e24e6c3b947d265b6e8b8a005d3d87ac2d5f2feecadfb9be34702857 extends Template
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
        echo "<form method=\"post\">
    <div class=\"form-group\">
        <label for=\"login\">Login</label>
        <input class=\"form-control\" type=\"text\" name=\"login\">
        <label for=\"password\">Password</label>
        <input class=\"form-control\" type=\"text\" name=\"password\">
        <div class=\"form-check mt-3 mb-3\">
            <input type=\"checkbox\" class=\"form-check-input\" name=\"remember\">
            <label class=\"form-check-label\" for=\"remember\">Remember</label>
        </div>

        <button class=\"btn btn-primary\" type=\"submit\" value=\"Submit\">Log In</button>
    </div>

";
        // line 15
        if ((isset($context["authErr"]) || array_key_exists("authErr", $context) ? $context["authErr"] : (function () { throw new RuntimeError('Variable "authErr" does not exist.', 15, $this->source); })())) {
            // line 16
            echo "<div class=\"alert alert-danger\">
    Error! No such user or password. Please try again!
</div>
";
        }
        // line 20
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "v_login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 20,  55 => 16,  53 => 15,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "v_login.twig", "/Users/denisk/Google Drive/WEB/TEST/php/php-1/blog-mvc-twig-token/views/v_login.twig");
    }
}
