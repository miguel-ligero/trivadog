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

/* servicios/index.html.twig */
class __TwigTemplate_fe8c8f02fde99d993efa4872b582c7c9ec5e294702dbea0d9864361f03530141 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "servicios/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "servicios/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">
    <h1>Servicios</h1>
    <div>
        <a class=\"btn btn-primary mb-4 btn-home\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back");
        echo "\">Volver</a>
    </div>
    <div>
        <a class=\"btn btn-primary mb-4 btn-home\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("servicios_new");
        echo "\">Crear nuevo</a>
    </div>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Fechacreacion</th>
                <th>Activo</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["servicios"]) || array_key_exists("servicios", $context) ? $context["servicios"] : (function () { throw new RuntimeError('Variable "servicios" does not exist.', 25, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["servicio"]) {
            // line 26
            echo "            <tr>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["servicio"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["servicio"], "nombre", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            ((twig_get_attribute($this->env, $this->source, $context["servicio"], "fechacreacion", [], "any", false, false, false, 29)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["servicio"], "fechacreacion", [], "any", false, false, false, 29), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 30
            echo ((twig_get_attribute($this->env, $this->source, $context["servicio"], "activo", [], "any", false, false, false, 30)) ? ("Yes") : ("No"));
            echo "</td>
                <td>
                    <a class=\"btn btn-primary mb-4 btn-home\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("servicios_show", ["id" => twig_get_attribute($this->env, $this->source, $context["servicio"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">Detalles</a>
                    <a class=\"btn btn-primary mb-4 btn-home\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("servicios_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["servicio"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\">Editar</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            echo "            <tr>
                <td colspan=\"5\">No se ha encontrado</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['servicio'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>

    
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "servicios/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 41,  124 => 37,  115 => 33,  111 => 32,  106 => 30,  102 => 29,  98 => 28,  94 => 27,  91 => 26,  86 => 25,  70 => 12,  64 => 9,  59 => 6,  52 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{# {% block title %}Servicios{% endblock %} #}

{% block body %}
<div class=\"container\">
    <h1>Servicios</h1>
    <div>
        <a class=\"btn btn-primary mb-4 btn-home\" href=\"{{ path('back') }}\">Volver</a>
    </div>
    <div>
        <a class=\"btn btn-primary mb-4 btn-home\" href=\"{{ path('servicios_new') }}\">Crear nuevo</a>
    </div>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Fechacreacion</th>
                <th>Activo</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for servicio in servicios %}
            <tr>
                <td>{{ servicio.id }}</td>
                <td>{{ servicio.nombre }}</td>
                <td>{{ servicio.fechacreacion ? servicio.fechacreacion|date('Y-m-d') : '' }}</td>
                <td>{{ servicio.activo ? 'Yes' : 'No' }}</td>
                <td>
                    <a class=\"btn btn-primary mb-4 btn-home\" href=\"{{ path('servicios_show', {'id': servicio.id}) }}\">Detalles</a>
                    <a class=\"btn btn-primary mb-4 btn-home\" href=\"{{ path('servicios_edit', {'id': servicio.id}) }}\">Editar</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">No se ha encontrado</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    
</div>
{% endblock %}
", "servicios/index.html.twig", "/home/vol13_1/mipropia.com/mipc_27184729/htdocs/trivadog/templates/servicios/index.html.twig");
    }
}
