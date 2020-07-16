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

/* v_contacts.twig */
class __TwigTemplate_35ee658b39f8b78067f5238ba452a563661704244e1f606c1deb598ae64b5b10 extends Template
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
        echo "<p>Tel: 123-1234567<p>
<p>Email: 123-1234567</p>";
    }

    public function getTemplateName()
    {
        return "v_contacts.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "v_contacts.twig", "/Users/denisk/Google Drive/WEB/TEST/php/php-1/blog-mvc-twig/views/v_contacts.twig");
    }
}
