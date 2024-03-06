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

/* equipement_back/show.html.twig */
class __TwigTemplate_032326f39d36319b68b79a06a400944d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipement_back/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipement_back/show.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "equipement_back/show.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Equipement";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <h1>Equipement</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["equipement"]) || array_key_exists("equipement", $context) ? $context["equipement"] : (function () { throw new RuntimeError('Variable "equipement" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Parking</th>
                <td>";
        // line 17
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["equipement"]) || array_key_exists("equipement", $context) ? $context["equipement"] : (function () { throw new RuntimeError('Variable "equipement" does not exist.', 17, $this->source); })()), "Parking", [], "any", false, false, false, 17)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>NbrChambre</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["equipement"]) || array_key_exists("equipement", $context) ? $context["equipement"] : (function () { throw new RuntimeError('Variable "equipement" does not exist.', 21, $this->source); })()), "nbrChambre", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Internet</th>
                <td>";
        // line 25
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["equipement"]) || array_key_exists("equipement", $context) ? $context["equipement"] : (function () { throw new RuntimeError('Variable "equipement" does not exist.', 25, $this->source); })()), "internet", [], "any", false, false, false, 25)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>Climatisation</th>
                <td>";
        // line 29
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["equipement"]) || array_key_exists("equipement", $context) ? $context["equipement"] : (function () { throw new RuntimeError('Variable "equipement" does not exist.', 29, $this->source); })()), "climatisation", [], "any", false, false, false, 29)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>TypesDeChambre</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["equipement"]) || array_key_exists("equipement", $context) ? $context["equipement"] : (function () { throw new RuntimeError('Variable "equipement" does not exist.', 33, $this->source); })()), "TypesDeChambre", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipement_back_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipement_back_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["equipement"]) || array_key_exists("equipement", $context) ? $context["equipement"] : (function () { throw new RuntimeError('Variable "equipement" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 42
        echo twig_include($this->env, $context, "equipement_back/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "equipement_back/show.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  149 => 42,  144 => 40,  139 => 38,  131 => 33,  124 => 29,  117 => 25,  110 => 21,  103 => 17,  96 => 13,  88 => 7,  78 => 6,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends 'baseBack.html.twig' %} #}
{% extends \"admin/layout.html.twig\" %}

{% block title %}Equipement{% endblock %}

{% block body %}
    <h1>Equipement</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ equipement.id }}</td>
            </tr>
            <tr>
                <th>Parking</th>
                <td>{{ equipement.Parking ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>NbrChambre</th>
                <td>{{ equipement.nbrChambre }}</td>
            </tr>
            <tr>
                <th>Internet</th>
                <td>{{ equipement.internet ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>Climatisation</th>
                <td>{{ equipement.climatisation ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>TypesDeChambre</th>
                <td>{{ equipement.TypesDeChambre }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_equipement_back_index') }}\">back to list</a>

    <a href=\"{{ path('app_equipement_back_edit', {'id': equipement.id}) }}\">edit</a>

    {{ include('equipement_back/_delete_form.html.twig') }}
{% endblock %}
", "equipement_back/show.html.twig", "C:\\Users\\ASUS\\Desktop\\PiDev\\Projet-Pi-tfarhida\\templates\\equipement_back\\show.html.twig");
    }
}
