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

/* activitee/activitee_detail.html.twig */
class __TwigTemplate_6915d96f2af1a0b1896df1a2a272582f extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activitee/activitee_detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activitee/activitee_detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "activitee/activitee_detail.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Détails de l'activité";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"hero-wrap js-fullheight\" style=\"background-image:url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 6, $this->source); })()), "image", [], "any", false, false, false, 6))), "html", null, true);
        echo "');\">
\t\t<div class=\"overlay\"></div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row no-gutters slider-text js-fullheight align-items-center\" data-scrollax-parent=\"true\">
\t\t\t\t<div class=\"col-md-7 ftco-animate\">
\t\t\t\t\t<span class=\"subheading\">Bienvenue dans Tfarhida</span>
\t\t\t\t\t<h1 class=\"mb-4\">Découvrir ton bon plan avec nous</h1>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>

<div class=\"container mt-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"activity-details-container\">
                <div class=\"activity-details\">
                    <div class=\"activity-info\">
                        <h2 class=\"activity-title\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 25, $this->source); })()), "nom", [], "any", false, false, false, 25), "html", null, true);
        echo "</h2>
                        <div class=\"activity-description\">
                            <p>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 27, $this->source); })()), "descriptionact", [], "any", false, false, false, 27), "html", null, true);
        echo "</p>
                        </div>
                        <ul class=\"activity-details-list\">
                            <li><strong>Localisation:</strong> ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 30, $this->source); })()), "localisation", [], "any", false, false, false, 30), "html", null, true);
        echo "</li>
                            <li><strong>Nombre de personnes:</strong> ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 31, $this->source); })()), "nbP", [], "any", false, false, false, 31), "html", null, true);
        echo "</li>
                            <li><strong>Prix:</strong> ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 32, $this->source); })()), "prix", [], "any", false, false, false, 32), "html", null, true);
        echo " DT/personne</li>
                            ";
        // line 33
        if ((twig_get_attribute($this->env, $this->source, ($context["activitee"] ?? null), "categorie", [], "any", true, true, false, 33) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 33, $this->source); })()), "categorie", [], "any", false, false, false, 33)))) {
            // line 34
            echo "                            <li><strong>Catégorie:</strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 34, $this->source); })()), "categorie", [], "any", false, false, false, 34), "getTypeCategorie", [], "method", false, false, false, 34), "html", null, true);
            echo "</li>
                            <li><strong>Description Catégorie:</strong> ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 35, $this->source); })()), "categorie", [], "any", false, false, false, 35), "getDescription", [], "method", false, false, false, 35), "html", null, true);
            echo "</li>
                            ";
        } else {
            // line 37
            echo "                            <li>Aucune catégorie trouvée pour cette activité</li>
                            ";
        }
        // line 39
        echo "                        </ul>
                        <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activitee_indexx");
        echo "\" class=\"btn btn-primary\">Retour</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "activitee/activitee_detail.html.twig";
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
        return array (  153 => 40,  150 => 39,  146 => 37,  141 => 35,  136 => 34,  134 => 33,  130 => 32,  126 => 31,  122 => 30,  116 => 27,  111 => 25,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails de l'activité{% endblock %}

{% block body %}
<div class=\"hero-wrap js-fullheight\" style=\"background-image:url('{{ asset('uploads/' ~ activitee.image) }}');\">
\t\t<div class=\"overlay\"></div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row no-gutters slider-text js-fullheight align-items-center\" data-scrollax-parent=\"true\">
\t\t\t\t<div class=\"col-md-7 ftco-animate\">
\t\t\t\t\t<span class=\"subheading\">Bienvenue dans Tfarhida</span>
\t\t\t\t\t<h1 class=\"mb-4\">Découvrir ton bon plan avec nous</h1>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>

<div class=\"container mt-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"activity-details-container\">
                <div class=\"activity-details\">
                    <div class=\"activity-info\">
                        <h2 class=\"activity-title\">{{ activitee.nom }}</h2>
                        <div class=\"activity-description\">
                            <p>{{ activitee.descriptionact }}</p>
                        </div>
                        <ul class=\"activity-details-list\">
                            <li><strong>Localisation:</strong> {{ activitee.localisation }}</li>
                            <li><strong>Nombre de personnes:</strong> {{ activitee.nbP }}</li>
                            <li><strong>Prix:</strong> {{ activitee.prix }} DT/personne</li>
                            {% if activitee.categorie is defined and activitee.categorie is not null %}
                            <li><strong>Catégorie:</strong> {{ activitee.categorie.getTypeCategorie()}}</li>
                            <li><strong>Description Catégorie:</strong> {{ activitee.categorie.getDescription()}}</li>
                            {% else %}
                            <li>Aucune catégorie trouvée pour cette activité</li>
                            {% endif %}
                        </ul>
                        <a href=\"{{ path('app_activitee_indexx') }}\" class=\"btn btn-primary\">Retour</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}


", "activitee/activitee_detail.html.twig", "C:\\Users\\ASUS\\PiProjecttt\\templates\\activitee\\activitee_detail.html.twig");
    }
}
