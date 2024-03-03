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

/* activitee/show.html.twig */
class __TwigTemplate_27f8eed3ebab1817eed0830ae4bff8d7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activitee/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activitee/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "activitee/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"hero-wrap js-fullheight\" style=\"background-image:url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 4, $this->source); })()), "image", [], "any", false, false, false, 4))), "html", null, true);
        echo "');\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row no-gutters slider-text js-fullheight align-items-center\" data-scrollax-parent=\"true\">
                <div class=\"col-md-7 ftco-animate\">
                    <span class=\"subheading\">Bienvenue dans Tfarhida</span>
                    <h1 class=\"mb-4\">Découvrir ton bon plan avec nous</h1>
                </div>
            </div>
        </div>
    </div>
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
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 29, $this->source); })()), "nom", [], "any", false, false, false, 29), "html", null, true);
        echo "</label>
                                                        </a>
                                                        <div class=\"form-field\">
                                                            <table class=\"table\">
                                                                <tbody>
                                                                    <tr>
                                                                        <th>Localisation</th>
                                                                        <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 36, $this->source); })()), "localisation", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Nombre Participant</th>
                                                                        <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 40, $this->source); })()), "nbP", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Prix</th>
                                                                        <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 44, $this->source); })()), "prix", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Description</th>
                                                                        <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 48, $this->source); })()), "descriptionact", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
                                                                    </tr>
                                                                    <tr>
                                                                         <th>Type activité</th>
                                                                         <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 52, $this->source); })()), "categorie", [], "any", false, false, false, 52), "getTypeCategorie", [], "method", false, false, false, 52), "html", null, true);
        echo "</td>
                                                                    </tr>
                                                                    <tr>
                                                                         <th>Description Categorie</th>
                                                                         <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 56, $this->source); })()), "categorie", [], "any", false, false, false, 56), "getDescription", [], "method", false, false, false, 56), "html", null, true);
        echo "</td>
                                                                    </tr>
                                                                    
                                                                   
                                                                </tbody>
                                                            </table>
                                                            <div style=\"text-align: center;\">
                                                                <a href=\"";
        // line 63
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
        return "activitee/show.html.twig";
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
        return array (  152 => 63,  142 => 56,  135 => 52,  128 => 48,  121 => 44,  114 => 40,  107 => 36,  97 => 29,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body%}
    <div class=\"hero-wrap js-fullheight\" style=\"background-image:url('{{ asset('uploads/' ~ activitee.image) }}');\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row no-gutters slider-text js-fullheight align-items-center\" data-scrollax-parent=\"true\">
                <div class=\"col-md-7 ftco-animate\">
                    <span class=\"subheading\">Bienvenue dans Tfarhida</span>
                    <h1 class=\"mb-4\">Découvrir ton bon plan avec nous</h1>
                </div>
            </div>
        </div>
    </div>
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
                                                                         <th>Type activité</th>
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
", "activitee/show.html.twig", "C:\\Users\\ASUS\\PiProjecttt\\templates\\activitee\\show.html.twig");
    }
}
