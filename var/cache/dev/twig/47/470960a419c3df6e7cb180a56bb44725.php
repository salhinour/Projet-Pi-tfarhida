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

/* activitee_back/show.html.twig */
class __TwigTemplate_3f4597630cff7dd969f091377374bb11 extends Template
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
        // line 1
        return "baseback.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activitee_back/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activitee_back/show.html.twig"));

        $this->parent = $this->loadTemplate("baseback.html.twig", "activitee_back/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Activitee back show";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div>
              <div class=\"container text-center\">
    <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activitee_back_new");
        echo "\" class=\"btn btn-primary btn-icon-split\">
        <i class=\"fas fa-plus\"></i> Create New
    </a>
</div>
        </div>
       
    <h1>Activite</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 23, $this->source); })()), "nom", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 27, $this->source); })()), "prix", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Localisation</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 31, $this->source); })()), "localisation", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>NbP</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 35, $this->source); })()), "nbP", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 39, $this->source); })()), "etat", [], "any", false, false, false, 39), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 43, $this->source); })()), "image", [], "any", false, false, false, 43), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 47, $this->source); })()), "descriptionact", [], "any", false, false, false, 47), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
<a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activitee_back_index");
        echo "\" class=\"btn btn-primary\">Back to list</a>

    <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activitee_back_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53)]), "html", null, true);
        echo "\" class=\"btn btn-secondary\">edit</a>


    ";
        // line 56
        echo twig_include($this->env, $context, "activitee_back/_delete_form.html.twig");
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
        return "activitee_back/show.html.twig";
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
        return array (  174 => 56,  168 => 53,  163 => 51,  156 => 47,  149 => 43,  142 => 39,  135 => 35,  128 => 31,  121 => 27,  114 => 23,  107 => 19,  92 => 7,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseback.html.twig' %}
 {% block title %}Activitee back show{% endblock %}

{% block body %}
<div>
              <div class=\"container text-center\">
    <a href=\"{{ path('app_activitee_back_new') }}\" class=\"btn btn-primary btn-icon-split\">
        <i class=\"fas fa-plus\"></i> Create New
    </a>
</div>
        </div>
       
    <h1>Activite</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ activitee.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ activitee.nom }}</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>{{ activitee.prix }}</td>
            </tr>
            <tr>
                <th>Localisation</th>
                <td>{{ activitee.localisation }}</td>
            </tr>
            <tr>
                <th>NbP</th>
                <td>{{ activitee.nbP }}</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>{{ activitee.etat }}</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>{{ activitee.image }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ activitee.descriptionact}}</td>
            </tr>
        </tbody>
    </table>
<a href=\"{{ path('app_activitee_back_index') }}\" class=\"btn btn-primary\">Back to list</a>

    <a href=\"{{ path('app_activitee_back_edit', {'id': activitee.id}) }}\" class=\"btn btn-secondary\">edit</a>


    {{ include('activitee_back/_delete_form.html.twig') }}
        
    {% endblock %}", "activitee_back/show.html.twig", "C:\\Users\\ASUS\\PiProjecttt\\templates\\activitee_back\\show.html.twig");
    }
}
