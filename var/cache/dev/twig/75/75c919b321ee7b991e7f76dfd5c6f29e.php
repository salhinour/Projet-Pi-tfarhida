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
class __TwigTemplate_31118d0f7f08e6bd3dd7654e5b94722f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'navBar' => [$this, 'block_navBar'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "home/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activitee/activitee_detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activitee/activitee_detail.html.twig"));

        $this->parent = $this->loadTemplate("home/base.html.twig", "activitee/activitee_detail.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_navBar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navBar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navBar"));

        // line 4
        echo "
<nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"index.html\">
            <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/logo.png"), "html", null, true);
        echo "\" alt=\"Votre Logo\" class=\"logo\">
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"oi oi-menu\"></span> Menu
        </button>

        <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
            <ul class=\"navbar-nav ml-auto\">
            <ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t<li class=\"nav-item \"><a href=\"\" class=\"nav-link\">Home</a></li>
\t\t\t\t\t<li class=\"nav-item active\"><a  href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activitee_indexx");
        echo "\"class=\"nav-link\">Activites</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a  href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite");
        echo "\" class=\"nav-link\">Transports</a></li>
\t\t\t\t\t<li class=\"nav-item \"><a href=\"\" class=\"nav-link\">Logements</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite");
        echo "\" class=\"nav-link\">restaurants</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"reclamation\" class=\"nav-link\">Reclamation</a></li>
\t\t\t\t
            </ul>
        </div>

       
    </div>
</nav>
<body>
\t
\t<!-- END nav -->
    <div class=\"hero-wrap js-fullheight\" style=\"background-image:url('";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 33, $this->source); })()), "image", [], "any", false, false, false, 33))), "html", null, true);
        echo "');\">
\t
<div class=\"hero-wrap js-fullheight\" style=\"background-image: url('/images/tourisme.jpg');\">
\t\t<div class=\"overlay\"></div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row no-gutters slider-text js-fullheight align-items-center\" data-scrollax-parent=\"true\">
\t\t\t\t<div class=\"col-md-7 ftco-animate\">
\t\t\t\t\t<span class=\"subheading\">Bienvenue dans Tfarhida</span>
\t\t\t\t\t<h1 class=\"mb-4\">Découvrir ton bon plan avec nous</h1>
\t\t\t\t\t<p class=\"caps\">Voyagez aux quatre coins du monde, sans tourner en rond</p>
\t\t\t\t</div>
\t\t\t\t<a href=\"https://vimeo.com/45830194\" class=\"icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4\">
\t\t\t\t\t<span class=\"fa fa-play\"></span>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 51
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 52
        echo "       
    <section class=\"ftco-section ftco-no-pb ftco-no-pt\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-7\">
                    <div class=\"ftco-search d-flex justify-content-center\">
                        <div class=\"row\">
                            <div class=\"col-md-12 tab-wrap\">
                                <div class=\"tab-content\" id=\"v-pills-tabContent\">
                                    <div class=\"tab-pane fade show active\" id=\"v-pills-1\" role=\"tabpanel\" aria-labelledby=\"v-pills-nextgen-tab\">
                                        <form action=\"#\" class=\"search-property-1\">
                                            <div class=\"row no-gutters\">
                                                <div class=\"col-md d-flex\">
                                                    <div class=\"form-group p-4 border-0\">
                                                        <a class=\"nav-link\" id=\"v-pills-2-tab\" data-toggle=\"pill\" href=\"#v-pills-2\" role=\"tab\" aria-controls=\"v-pills-2\" aria-selected=\"false\">
                                                            <label for=\"#\">";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 67, $this->source); })()), "nom", [], "any", false, false, false, 67), "html", null, true);
        echo "</label>
                                                        </a>
                                                        <div class=\"form-field\">
                                                            <table class=\"table\">
                                                                <tbody>
                                                                    <tr>
                                                                        <th>Localisation</th>
                                                                        <td>";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 74, $this->source); })()), "localisation", [], "any", false, false, false, 74), "html", null, true);
        echo "</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Nombre Participant</th>
                                                                        <td>";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 78, $this->source); })()), "nbP", [], "any", false, false, false, 78), "html", null, true);
        echo "</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Prix</th>
                                                                        <td>";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 82, $this->source); })()), "prix", [], "any", false, false, false, 82), "html", null, true);
        echo "</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Description</th>
                                                                        <td>";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 86, $this->source); })()), "descriptionact", [], "any", false, false, false, 86), "html", null, true);
        echo "</td>
                                                                    </tr>
                                                                      <tr>
                                                                        <th>Type Categorie</th>
                                                                        <td>";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 90, $this->source); })()), "categorie", [], "any", false, false, false, 90), "getTypeCategorie", [], "method", false, false, false, 90), "html", null, true);
        echo "</td>
                                                                    </tr>
                                                                     <tr>
                                                                        <th>Description Categorie</th>
                                                                        <td>";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 94, $this->source); })()), "categorie", [], "any", false, false, false, 94), "getDescription", [], "method", false, false, false, 94), "html", null, true);
        echo "</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <div style=\"text-align: center;\">
                                                                <a href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activitee_indexx");
        echo "\" class=\"btn btn-primary\">Retour</a>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
        return array (  220 => 99,  212 => 94,  205 => 90,  198 => 86,  191 => 82,  184 => 78,  177 => 74,  167 => 67,  150 => 52,  140 => 51,  112 => 33,  97 => 21,  92 => 19,  88 => 18,  75 => 8,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'home/base.html.twig' %}

{% block navBar %}

<nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"index.html\">
            <img src=\"{{ asset('/images/logo.png') }}\" alt=\"Votre Logo\" class=\"logo\">
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"oi oi-menu\"></span> Menu
        </button>

        <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
            <ul class=\"navbar-nav ml-auto\">
            <ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t<li class=\"nav-item \"><a href=\"\" class=\"nav-link\">Home</a></li>
\t\t\t\t\t<li class=\"nav-item active\"><a  href=\"{{ path('app_activitee_indexx') }}\"class=\"nav-link\">Activites</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a  href=\"{{ path('app_activite') }}\" class=\"nav-link\">Transports</a></li>
\t\t\t\t\t<li class=\"nav-item \"><a href=\"\" class=\"nav-link\">Logements</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"{{ path('app_activite') }}\" class=\"nav-link\">restaurants</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"reclamation\" class=\"nav-link\">Reclamation</a></li>
\t\t\t\t
            </ul>
        </div>

       
    </div>
</nav>
<body>
\t
\t<!-- END nav -->
    <div class=\"hero-wrap js-fullheight\" style=\"background-image:url('{{ asset('uploads/' ~ activitee.image) }}');\">
\t
<div class=\"hero-wrap js-fullheight\" style=\"background-image: url('/images/tourisme.jpg');\">
\t\t<div class=\"overlay\"></div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row no-gutters slider-text js-fullheight align-items-center\" data-scrollax-parent=\"true\">
\t\t\t\t<div class=\"col-md-7 ftco-animate\">
\t\t\t\t\t<span class=\"subheading\">Bienvenue dans Tfarhida</span>
\t\t\t\t\t<h1 class=\"mb-4\">Découvrir ton bon plan avec nous</h1>
\t\t\t\t\t<p class=\"caps\">Voyagez aux quatre coins du monde, sans tourner en rond</p>
\t\t\t\t</div>
\t\t\t\t<a href=\"https://vimeo.com/45830194\" class=\"icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4\">
\t\t\t\t\t<span class=\"fa fa-play\"></span>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t{% endblock %}
{% block body%}
       
    <section class=\"ftco-section ftco-no-pb ftco-no-pt\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-7\">
                    <div class=\"ftco-search d-flex justify-content-center\">
                        <div class=\"row\">
                            <div class=\"col-md-12 tab-wrap\">
                                <div class=\"tab-content\" id=\"v-pills-tabContent\">
                                    <div class=\"tab-pane fade show active\" id=\"v-pills-1\" role=\"tabpanel\" aria-labelledby=\"v-pills-nextgen-tab\">
                                        <form action=\"#\" class=\"search-property-1\">
                                            <div class=\"row no-gutters\">
                                                <div class=\"col-md d-flex\">
                                                    <div class=\"form-group p-4 border-0\">
                                                        <a class=\"nav-link\" id=\"v-pills-2-tab\" data-toggle=\"pill\" href=\"#v-pills-2\" role=\"tab\" aria-controls=\"v-pills-2\" aria-selected=\"false\">
                                                            <label for=\"#\">{{ activitee.nom }}</label>
                                                        </a>
                                                        <div class=\"form-field\">
                                                            <table class=\"table\">
                                                                <tbody>
                                                                    <tr>
                                                                        <th>Localisation</th>
                                                                        <td>{{ activitee.localisation }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Nombre Participant</th>
                                                                        <td>{{ activitee.nbP }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Prix</th>
                                                                        <td>{{ activitee.prix }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Description</th>
                                                                        <td>{{ activitee.descriptionact }}</td>
                                                                    </tr>
                                                                      <tr>
                                                                        <th>Type Categorie</th>
                                                                        <td>{{ activitee.categorie.getTypeCategorie() }}</td>
                                                                    </tr>
                                                                     <tr>
                                                                        <th>Description Categorie</th>
                                                                        <td>{{ activitee.categorie.getDescription() }}</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <div style=\"text-align: center;\">
                                                                <a href=\"{{ path('app_activitee_indexx') }}\" class=\"btn btn-primary\">Retour</a>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{% endblock %}
", "activitee/activitee_detail.html.twig", "C:\\Users\\ASUS\\Desktop\\PiDev\\Projet-Pi-tfarhida\\templates\\activitee\\activitee_detail.html.twig");
    }
}
