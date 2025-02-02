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

/* @EasyAdmin/crud/field/boolean.html.twig */
class __TwigTemplate_1f9e718e43adfd11904e619836c295f5ea7b657af20abb0e6d9d288eefc0a222 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/field/boolean.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/field/boolean.html.twig"));

        // line 5
        echo "
";
        // line 6
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 6, $this->source); })()), "crud", [], "any", false, false, false, 6), "currentAction", [], "any", false, false, false, 6), "detail") ||  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 6, $this->source); })()), "customOptions", [], "any", false, false, false, 6), "get", [0 => "renderAsSwitch"], "method", false, false, false, 6))) {
            // line 7
            echo "    <span class=\"badge ";
            echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 7, $this->source); })()), "value", [], "any", false, false, false, 7), true)) ? ("badge-boolean-true") : ("badge-boolean-false"));
            echo "\">
        ";
            // line 8
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 8, $this->source); })()), "value", [], "any", false, false, false, 8), true)) ? ("label.true") : ("label.false")), [], "EasyAdminBundle"), "html", null, true);
            echo "
    </span>
";
        } else {
            // line 11
            echo "    <div class=\"custom-control custom-switch custom-switch-lg\" data-fieldname=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 11, $this->source); })()), "property", [], "any", false, false, false, 11), "html", null, true);
            echo "\">
        <input type=\"checkbox\" class=\"custom-control-input\" id=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 12, $this->source); })()), "uniqueId", [], "any", false, false, false, 12), "html", null, true);
            echo "\" ";
            echo ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 12, $this->source); })()), "value", [], "any", false, false, false, 12), true)) ? ("checked") : (""));
            echo " autocomplete=\"off\">
        <label class=\"custom-control-label\" for=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 13, $this->source); })()), "uniqueId", [], "any", false, false, false, 13), "html", null, true);
            echo "\"></label>
    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/field/boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 13,  64 => 12,  59 => 11,  53 => 8,  48 => 7,  46 => 6,  43 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{# @var field \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto #}
{# @var entity \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto #}
{% trans_default_domain 'EasyAdminBundle' %}

{% if ea.crud.currentAction == 'detail' or not field.customOptions.get('renderAsSwitch') %}
    <span class=\"badge {{ field.value == true ? 'badge-boolean-true' : 'badge-boolean-false' }}\">
        {{ (field.value == true ? 'label.true' : 'label.false')|trans }}
    </span>
{% else %}
    <div class=\"custom-control custom-switch custom-switch-lg\" data-fieldname=\"{{ field.property }}\">
        <input type=\"checkbox\" class=\"custom-control-input\" id=\"{{ field.uniqueId }}\" {{ field.value == true ? 'checked' }} autocomplete=\"off\">
        <label class=\"custom-control-label\" for=\"{{ field.uniqueId }}\"></label>
    </div>
{% endif %}
", "@EasyAdmin/crud/field/boolean.html.twig", "C:\\xampp\\htdocs\\Proyecto\\trivadog\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\crud\\field\\boolean.html.twig");
    }
}
