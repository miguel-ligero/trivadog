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

/* servicios/show.html.twig */
class __TwigTemplate_7b03577e03e3e4d3e6d1ec9d3d06861ce8953b9bf998300c6d33af4bbd455c5d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "servicios/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "servicios/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div class=\"container\">
    <h1>Detalles Servicios</h1>
    <a class=\"btn btn-primary mb-4 btn-home\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("servicios_index");
        echo "\">Volver</a>
    
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["servicio"]) || array_key_exists("servicio", $context) ? $context["servicio"] : (function () { throw new RuntimeError('Variable "servicio" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["servicio"]) || array_key_exists("servicio", $context) ? $context["servicio"] : (function () { throw new RuntimeError('Variable "servicio" does not exist.', 19, $this->source); })()), "nombre", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fechacreacion</th>
                <td>";
        // line 23
        ((twig_get_attribute($this->env, $this->source, (isset($context["servicio"]) || array_key_exists("servicio", $context) ? $context["servicio"] : (function () { throw new RuntimeError('Variable "servicio" does not exist.', 23, $this->source); })()), "fechacreacion", [], "any", false, false, false, 23)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["servicio"]) || array_key_exists("servicio", $context) ? $context["servicio"] : (function () { throw new RuntimeError('Variable "servicio" does not exist.', 23, $this->source); })()), "fechacreacion", [], "any", false, false, false, 23), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Activo</th>
                <td>";
        // line 27
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["servicio"]) || array_key_exists("servicio", $context) ? $context["servicio"] : (function () { throw new RuntimeError('Variable "servicio" does not exist.', 27, $this->source); })()), "activo", [], "any", false, false, false, 27)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
        </tbody>
    </table>

    
    <a class=\"btn btn-primary mb-4 btn-home\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("servicios_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["servicio"]) || array_key_exists("servicio", $context) ? $context["servicio"] : (function () { throw new RuntimeError('Variable "servicio" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33)]), "html", null, true);
        echo "\">Editar</a>
    ";
        // line 34
        echo twig_include($this->env, $context, "servicios/_delete_form.html.twig");
        echo "
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "servicios/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 34,  102 => 33,  93 => 27,  86 => 23,  79 => 19,  72 => 15,  63 => 9,  59 => 7,  52 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{# {% block title %}Servicios{% endblock %} #}


{% block body %}
<div class=\"container\">
    <h1>Detalles Servicios</h1>
    <a class=\"btn btn-primary mb-4 btn-home\" href=\"{{ path('servicios_index') }}\">Volver</a>
    
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ servicio.id }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ servicio.nombre }}</td>
            </tr>
            <tr>
                <th>Fechacreacion</th>
                <td>{{ servicio.fechacreacion ? servicio.fechacreacion|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Activo</th>
                <td>{{ servicio.activo ? 'Yes' : 'No' }}</td>
            </tr>
        </tbody>
    </table>

    
    <a class=\"btn btn-primary mb-4 btn-home\" href=\"{{ path('servicios_edit', {'id': servicio.id}) }}\">Editar</a>
    {{ include('servicios/_delete_form.html.twig') }}
</div>
{% endblock %}
", "servicios/show.html.twig", "/home/vol13_1/mipropia.com/mipc_27184729/htdocs/trivadog/templates/servicios/show.html.twig");
    }
}
