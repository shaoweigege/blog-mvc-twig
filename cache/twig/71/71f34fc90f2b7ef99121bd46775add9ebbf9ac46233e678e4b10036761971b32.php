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

/* v_contacts-left.twig */
class __TwigTemplate_c7e17f8276381d3048cd6e4bdfeb11b56e91fc01a3d4c2ad41b33d836f84c58c extends Template
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
        echo "<ul class=\"list-group\">
    <li class=\"list-group-item\">Call us</li>
    <li class=\"list-group-item\">Send</li>
</ul>";
    }

    public function getTemplateName()
    {
        return "v_contacts-left.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "v_contacts-left.twig", "/Users/denisk/Google Drive/WEB/TEST/php/php-1/blog-mvc-twig/views/v_contacts-left.twig");
    }
}
