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

/* v_edit.twig */
class __TwigTemplate_08407b608359489c37f0f401af0db564fdf509ae0087fc276d5f908cf39f6f1b extends Template
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
        <label for=\"title\">Title</label>
        <input class=\"form-control\" type=\"text\" name=\"title\" value=\"";
        // line 4
        echo twig_get_attribute($this->env, $this->source, (isset($context["new_content"]) || array_key_exists("new_content", $context) ? $context["new_content"] : (function () { throw new RuntimeError('Variable "new_content" does not exist.', 4, $this->source); })()), "title", [], "any", false, false, false, 4);
        echo "\">
        <label for=\"content\">Content</label>
        <textarea class=\"form-control\" name=\"content\">";
        // line 6
        echo twig_get_attribute($this->env, $this->source, (isset($context["new_content"]) || array_key_exists("new_content", $context) ? $context["new_content"] : (function () { throw new RuntimeError('Variable "new_content" does not exist.', 6, $this->source); })()), "content", [], "any", false, false, false, 6);
        echo "</textarea>
        <div class=\"form-group\">
            <label for=\"category\">Category</label>
            <select class=\"form-control\" name=\"category\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["new_cat"]) || array_key_exists("new_cat", $context) ? $context["new_cat"] : (function () { throw new RuntimeError('Variable "new_cat" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 11
            echo "                    ";
            if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["category"], "id_cat", [], "any", false, false, false, 11), (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 11, $this->source); })()))) {
                // line 12
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "id_cat", [], "any", false, false, false, 12);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 12);
                echo "</option>
                    ";
            } else {
                // line 14
                echo "                        <option selected value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "id_cat", [], "any", false, false, false, 14);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 14);
                echo "</option>
                    ";
            }
            // line 16
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            </select>
        </div>
        <button class=\"btn btn-primary\" type=\"submit\" value=\"Edit\" name=\"editArticle\">Edit</button>
        <button class=\"btn btn-secondary\" type=\"submit\" value=\"Cancel\" name=\"resetArticle\">Cancel</button>
        <button class=\"btn btn-danger\" type=\"submit\" value=\"Delete\" name=\"deleteArticle\">Delete</button>
        <div class=\"form-check mt-3 mb-3\">
            <input type=\"checkbox\" class=\"form-check-input\" value=\"yes\" name=\"deleteAgree\">
            <label class=\"";
        // line 25
        echo (isset($context["delete"]) || array_key_exists("delete", $context) ? $context["delete"] : (function () { throw new RuntimeError('Variable "delete" does not exist.', 25, $this->source); })());
        echo " form-check-label\" for=\"deleteAgree\">Realy delete?</label>
        </div>
    </div>
</form>
<div>
    ";
        // line 30
        echo (isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 30, $this->source); })());
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "v_edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 30,  93 => 25,  84 => 18,  77 => 16,  69 => 14,  61 => 12,  58 => 11,  54 => 10,  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "v_edit.twig", "/Users/denisk/Google Drive/WEB/TEST/php/php-1/blog-mvc-twig/views/v_edit.twig");
    }
}
