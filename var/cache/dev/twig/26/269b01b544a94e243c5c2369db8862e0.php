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

/* logement_back/show.html.twig */
class __TwigTemplate_1c3f45deb2235a649a9346e201a0f2ea extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "logement_back/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "logement_back/show.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "logement_back/show.html.twig", 2);
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

        echo "Logement";
        
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
        echo "    <h1>Logement</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["logement"]) || array_key_exists("logement", $context) ? $context["logement"] : (function () { throw new RuntimeError('Variable "logement" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Localisation</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["logement"]) || array_key_exists("logement", $context) ? $context["logement"] : (function () { throw new RuntimeError('Variable "logement" does not exist.', 17, $this->source); })()), "Localisation", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>NoteMoyenne</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["logement"]) || array_key_exists("logement", $context) ? $context["logement"] : (function () { throw new RuntimeError('Variable "logement" does not exist.', 21, $this->source); })()), "NoteMoyenne", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["logement"]) || array_key_exists("logement", $context) ? $context["logement"] : (function () { throw new RuntimeError('Variable "logement" does not exist.', 25, $this->source); })()), "Prix", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>";
        // line 29
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["logement"]) || array_key_exists("logement", $context) ? $context["logement"] : (function () { throw new RuntimeError('Variable "logement" does not exist.', 29, $this->source); })()), "Etat", [], "any", false, false, false, 29)) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["logement"]) || array_key_exists("logement", $context) ? $context["logement"] : (function () { throw new RuntimeError('Variable "logement" does not exist.', 33, $this->source); })()), "Image", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["logement"]) || array_key_exists("logement", $context) ? $context["logement"] : (function () { throw new RuntimeError('Variable "logement" does not exist.', 37, $this->source); })()), "nom", [], "any", false, false, false, 37), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>TypeLog</th>
                <td>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["logement"]) || array_key_exists("logement", $context) ? $context["logement"] : (function () { throw new RuntimeError('Variable "logement" does not exist.', 41, $this->source); })()), "TypeLog", [], "any", false, false, false, 41), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logement_back_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logement_back_edit");
        echo "\">edit</a>

    ";
        // line 50
        echo twig_include($this->env, $context, "logement_back/_delete_form.html.twig");
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
        return "logement_back/show.html.twig";
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
        return array (  163 => 50,  158 => 48,  153 => 46,  145 => 41,  138 => 37,  131 => 33,  124 => 29,  117 => 25,  110 => 21,  103 => 17,  96 => 13,  88 => 7,  78 => 6,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends 'base.html.twig' %} #}
{% extends \"admin/layout.html.twig\" %}

{% block title %}Logement{% endblock %}

{% block body %}
    <h1>Logement</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ logement.id }}</td>
            </tr>
            <tr>
                <th>Localisation</th>
                <td>{{ logement.Localisation }}</td>
            </tr>
            <tr>
                <th>NoteMoyenne</th>
                <td>{{ logement.NoteMoyenne }}</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>{{ logement.Prix }}</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>{{ logement.Etat ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>{{ logement.Image }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ logement.nom }}</td>
            </tr>
            <tr>
                <th>TypeLog</th>
                <td>{{ logement.TypeLog }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_logement_back_index') }}\">back to list</a>

    <a href=\"{{ path('app_logement_back_edit')}}\">edit</a>

    {{ include('logement_back/_delete_form.html.twig') }}
{% endblock %}
", "logement_back/show.html.twig", "C:\\Users\\ASUS\\Desktop\\PiDev\\Projet-Pi-tfarhida\\templates\\logement_back\\show.html.twig");
    }
}
