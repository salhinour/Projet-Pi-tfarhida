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

/* equipement/show.html.twig */
class __TwigTemplate_db674733469fc9e756acf6aa502b1185 extends Template
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
        return "header.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipement/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipement/show.html.twig"));

        $this->parent = $this->loadTemplate("header.html.twig", "equipement/show.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["logement"]) || array_key_exists("logement", $context) ? $context["logement"] : (function () { throw new RuntimeError('Variable "logement" does not exist.', 4, $this->source); })()), "image", [], "any", false, false, false, 4))), "html", null, true);
        echo "');\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row no-gutters slider-text js-fullheight align-items-center\" data-scrollax-parent=\"true\">
                <div class=\"col-md-7 ftco-animate\">
                    <h1 class=\"mb-4\">Discover Your Favorite Place with Us</h1>
                </div>
            </div>
        </div>
    </div>

    <section class=\"ftco-section ftco-no-pb ftco-no-pt\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["logement"]) || array_key_exists("logement", $context) ? $context["logement"] : (function () { throw new RuntimeError('Variable "logement" does not exist.', 29, $this->source); })()), "nom", [], "any", false, false, false, 29), "html", null, true);
        echo "</label>
                                                        </a>
                                                        <div class=\"form-field\">
                                                            <table class=\"table\">
                                                                <tbody>
                                                                    <tr>
                                                                        <th>Localaisation</th>
                                                                        <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["logement"]) || array_key_exists("logement", $context) ? $context["logement"] : (function () { throw new RuntimeError('Variable "logement" does not exist.', 36, $this->source); })()), "Localisation", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>NoteMoyenne</th>
                                                                        <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["logement"]) || array_key_exists("logement", $context) ? $context["logement"] : (function () { throw new RuntimeError('Variable "logement" does not exist.', 40, $this->source); })()), "NoteMoyenne", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Prix</th>
                                                                        <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["logement"]) || array_key_exists("logement", $context) ? $context["logement"] : (function () { throw new RuntimeError('Variable "logement" does not exist.', 44, $this->source); })()), "Prix", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th><i class=\"fas fa-parking\"></i> Parking</th> <!-- Icon for parking -->
                                                                        <td>";
        // line 48
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["equipement"]) || array_key_exists("equipement", $context) ? $context["equipement"] : (function () { throw new RuntimeError('Variable "equipement" does not exist.', 48, $this->source); })()), "Parking", [], "any", false, false, false, 48)) ? ("Yes") : ("No"));
        echo "</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th><i class=\"fas fa-wifi\"></i> Wifi</th> <!-- Icon for wifi -->
                                                                        <td>";
        // line 52
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["equipement"]) || array_key_exists("equipement", $context) ? $context["equipement"] : (function () { throw new RuntimeError('Variable "equipement" does not exist.', 52, $this->source); })()), "internet", [], "any", false, false, false, 52)) ? ("Yes") : ("No"));
        echo "</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th><i class=\"fas fa-bed\"></i> NbrChambre</th> <!-- Icon for bedrooms -->
                                                                        <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["equipement"]) || array_key_exists("equipement", $context) ? $context["equipement"] : (function () { throw new RuntimeError('Variable "equipement" does not exist.', 56, $this->source); })()), "nbrChambre", [], "any", false, false, false, 56), "html", null, true);
        echo "</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th><i class=\"fas fa-snowflake\"></i> Climatisation</th> <!-- Icon for air conditioning -->
                                                                        <td>";
        // line 60
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["equipement"]) || array_key_exists("equipement", $context) ? $context["equipement"] : (function () { throw new RuntimeError('Variable "equipement" does not exist.', 60, $this->source); })()), "climatisation", [], "any", false, false, false, 60)) ? ("Yes") : ("No"));
        echo "</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Types De Chambre</th>
                                                                        <td>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["equipement"]) || array_key_exists("equipement", $context) ? $context["equipement"] : (function () { throw new RuntimeError('Variable "equipement" does not exist.', 64, $this->source); })()), "TypesDeChambre", [], "any", false, false, false, 64), "html", null, true);
        echo "</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <div style=\"text-align: center;\">
                                                                <a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipement_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["equipement"]) || array_key_exists("equipement", $context) ? $context["equipement"] : (function () { throw new RuntimeError('Variable "equipement" does not exist.', 69, $this->source); })()), "id", [], "any", false, false, false, 69)]), "html", null, true);
        echo "\" class=\"btn btn-warning\">edit</a>
                                                                ";
        // line 70
        echo twig_include($this->env, $context, "equipement/_delete_form.html.twig");
        echo "
                                                            </div> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class=\"tab-pane fade\" id=\"v-pills-2\" role=\"tabpanel\" aria-labelledby=\"v-pills-performance-tab\">
                                        <!-- Content for the second tab -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logement_index");
        echo "\">Back to list</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "equipement/show.html.twig";
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
        return array (  191 => 90,  168 => 70,  164 => 69,  156 => 64,  149 => 60,  142 => 56,  135 => 52,  128 => 48,  121 => 44,  114 => 40,  107 => 36,  97 => 29,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'header.html.twig' %}

{% block body %}
    <div class=\"hero-wrap js-fullheight\" style=\"background-image:url('{{ asset('uploads/' ~ logement.image) }}');\">
        <div class=\"overlay\"></div>
        <div class=\"container\">
            <div class=\"row no-gutters slider-text js-fullheight align-items-center\" data-scrollax-parent=\"true\">
                <div class=\"col-md-7 ftco-animate\">
                    <h1 class=\"mb-4\">Discover Your Favorite Place with Us</h1>
                </div>
            </div>
        </div>
    </div>

    <section class=\"ftco-section ftco-no-pb ftco-no-pt\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
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
                                                            <label for=\"#\">{{logement.nom }}</label>
                                                        </a>
                                                        <div class=\"form-field\">
                                                            <table class=\"table\">
                                                                <tbody>
                                                                    <tr>
                                                                        <th>Localaisation</th>
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
                                                                        <th><i class=\"fas fa-parking\"></i> Parking</th> <!-- Icon for parking -->
                                                                        <td>{{ equipement.Parking ? 'Yes' : 'No' }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th><i class=\"fas fa-wifi\"></i> Wifi</th> <!-- Icon for wifi -->
                                                                        <td>{{ equipement.internet ? 'Yes' : 'No' }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th><i class=\"fas fa-bed\"></i> NbrChambre</th> <!-- Icon for bedrooms -->
                                                                        <td>{{ equipement.nbrChambre }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th><i class=\"fas fa-snowflake\"></i> Climatisation</th> <!-- Icon for air conditioning -->
                                                                        <td>{{ equipement.climatisation ? 'Yes' : 'No' }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Types De Chambre</th>
                                                                        <td>{{ equipement.TypesDeChambre }}</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <div style=\"text-align: center;\">
                                                                <a href=\"{{ path('app_equipement_edit', {'id': equipement.id}) }}\" class=\"btn btn-warning\">edit</a>
                                                                {{ include('equipement/_delete_form.html.twig') }}
                                                            </div> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class=\"tab-pane fade\" id=\"v-pills-2\" role=\"tabpanel\" aria-labelledby=\"v-pills-performance-tab\">
                                        <!-- Content for the second tab -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <a href=\"{{ path('app_logement_index') }}\">Back to list</a>
{% endblock %}
", "equipement/show.html.twig", "C:\\Users\\ASUS\\Desktop\\PiDev\\Projet-Pi-tfarhida\\templates\\equipement\\show.html.twig");
    }
}
