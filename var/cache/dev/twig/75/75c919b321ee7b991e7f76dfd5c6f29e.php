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
                <li class=\"nav-item \"><a href=\"/accueil\" class=\"nav-link\">Accueil</a></li>
                <li class=\"nav-item active\"><a href=\"/act\" class=\"nav-link\">Activites</a></li>
                <li class=\"nav-item\"><a href=\"/logement\" class=\"nav-link\">Logements</a></li>
                <li class=\"nav-item\"><a href=\"/restaurant\" class=\"nav-link\">Restaurants</a></li>
                <li class=\"nav-item\"><a href=\"/activite\" class=\"nav-link\">Transports</a></li>
                <li class=\"nav-item\"><a href=\"/reclamation\" class=\"nav-link\">Réclamation</a></li>
            </ul>
        </div>

       
    </div>
</nav>
<body>
\t
\t<!-- END nav -->
    <div class=\"hero-wrap js-fullheight\" style=\"background-image:url('";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 31, $this->source); })()), "image", [], "any", false, false, false, 31))), "html", null, true);
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

    // line 49
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 50
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
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 65, $this->source); })()), "nom", [], "any", false, false, false, 65), "html", null, true);
        echo "</label>
                                                        </a>
                                                        <div class=\"form-field\">
                                                            <table class=\"table\">
                                                                <tbody>
                                                                    <tr>
                                                                        <th>Localisation</th>
                                                                        <td>";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 72, $this->source); })()), "localisation", [], "any", false, false, false, 72), "html", null, true);
        echo "</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Nombre Participant</th>
                                                                        <td>";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 76, $this->source); })()), "nbP", [], "any", false, false, false, 76), "html", null, true);
        echo "</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Prix</th>
                                                                        <td>";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 80, $this->source); })()), "prix", [], "any", false, false, false, 80), "html", null, true);
        echo "</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Description</th>
                                                                        <td>";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 84, $this->source); })()), "descriptionact", [], "any", false, false, false, 84), "html", null, true);
        echo "</td>
                                                                    </tr>
                                                                      <tr>
                                                                        <th>Type Categorie</th>
                                                                        <td>";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 88, $this->source); })()), "categorie", [], "any", false, false, false, 88), "getTypeCategorie", [], "method", false, false, false, 88), "html", null, true);
        echo "</td>
                                                                    </tr>
                                                                     <tr>
                                                                        <th>Description Categorie</th>
                                                                        <td>";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 92, $this->source); })()), "categorie", [], "any", false, false, false, 92), "getDescription", [], "method", false, false, false, 92), "html", null, true);
        echo "</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <div style=\"text-align: center;\">
                                                                <a href=\"";
        // line 97
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
        return array (  209 => 97,  201 => 92,  194 => 88,  187 => 84,  180 => 80,  173 => 76,  166 => 72,  156 => 65,  139 => 50,  129 => 49,  101 => 31,  75 => 8,  69 => 4,  59 => 3,  36 => 1,);
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
                <li class=\"nav-item \"><a href=\"/accueil\" class=\"nav-link\">Accueil</a></li>
                <li class=\"nav-item active\"><a href=\"/act\" class=\"nav-link\">Activites</a></li>
                <li class=\"nav-item\"><a href=\"/logement\" class=\"nav-link\">Logements</a></li>
                <li class=\"nav-item\"><a href=\"/restaurant\" class=\"nav-link\">Restaurants</a></li>
                <li class=\"nav-item\"><a href=\"/activite\" class=\"nav-link\">Transports</a></li>
                <li class=\"nav-item\"><a href=\"/reclamation\" class=\"nav-link\">Réclamation</a></li>
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