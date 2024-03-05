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

/* logement/show.html.twig */
class __TwigTemplate_818ddd9c0b99320f4a881c1b57d5fbcf extends Template
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
        // line 2
        return "header.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "logement/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "logement/show.html.twig"));

        $this->parent = $this->loadTemplate("header.html.twig", "logement/show.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        echo "    <div class=\"hero-wrap js-fullheight\" style=\"background-image:url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["logement"]) || array_key_exists("logement", $context) ? $context["logement"] : (function () { throw new RuntimeError('Variable "logement" does not exist.', 5, $this->source); })()), "image", [], "any", false, false, false, 5))), "html", null, true);
        echo "');\">

    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text js-fullheight align-items-center\" data-scrollax-parent=\"true\">
            <div class=\"col-md-7 ftco-animate\">
                <span class=\"subheading\">Welcome to Tfarhida </span>
                <h1 class=\"mb-4\">Discover Your Favorite Place with Us</h1>
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
                                                <div class=\"form-group p-4 border-0\"  style=\"text-align: center;\">
                                                    <a class=\"nav-link\" id=\"v-pills-2-tab\" data-toggle=\"pill\" href=\"#v-pills-2\" role=\"tab\" aria-controls=\"v-pills-2\" aria-selected=\"false\">
                                                        <label for=\"#\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["logement"]) || array_key_exists("logement", $context) ? $context["logement"] : (function () { throw new RuntimeError('Variable "logement" does not exist.', 31, $this->source); })()), "nom", [], "any", false, false, false, 31), "html", null, true);
        echo "</label>
                                                    </a>
                                                    <div class=\"form-field\">

                                                        <table class=\"table\">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Localisation</th>
                                                                    <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["logement"]) || array_key_exists("logement", $context) ? $context["logement"] : (function () { throw new RuntimeError('Variable "logement" does not exist.', 39, $this->source); })()), "Localisation", [], "any", false, false, false, 39), "html", null, true);
        echo "</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>NoteMoyenne</th>
                                                                    <td>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["logement"]) || array_key_exists("logement", $context) ? $context["logement"] : (function () { throw new RuntimeError('Variable "logement" does not exist.', 43, $this->source); })()), "NoteMoyenne", [], "any", false, false, false, 43), "html", null, true);
        echo "</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Prix</th>
                                                                    <td>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["logement"]) || array_key_exists("logement", $context) ? $context["logement"] : (function () { throw new RuntimeError('Variable "logement" does not exist.', 47, $this->source); })()), "Prix", [], "any", false, false, false, 47), "html", null, true);
        echo "</td>
                                                                </tr>
                                                                <td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t

                                                            </tbody>
                                                        </table>
                                                            <label for=\"#\">Les equipements disponible de ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["logement"]) || array_key_exists("logement", $context) ? $context["logement"] : (function () { throw new RuntimeError('Variable "logement" does not exist.', 54, $this->source); })()), "nom", [], "any", false, false, false, 54), "html", null, true);
        echo "</label>


                                                            ";
        // line 57
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["logement"]) || array_key_exists("logement", $context) ? $context["logement"] : (function () { throw new RuntimeError('Variable "logement" does not exist.', 57, $this->source); })()), "equipement", [], "any", false, false, false, 57))) {
            // line 58
            echo "                                                            <div class=\"form-field\">
                                                            <table class=\"table\">

                                                                <tbody>
                                                                    <tr>
                                                                        <th><i class=\"fas fa-parking\"></i> Parking</th> <!-- Icon for parking -->
                                                                        <td>";
            // line 64
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["logement"]) || array_key_exists("logement", $context) ? $context["logement"] : (function () { throw new RuntimeError('Variable "logement" does not exist.', 64, $this->source); })()), "equipement", [], "any", false, false, false, 64), "Parking", [], "any", false, false, false, 64)) ? ("Yes") : ("No"));
            echo "</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th><i class=\"fas fa-wifi\"></i> Wifi</th> <!-- Icon for wifi -->
                                                                        <td>";
            // line 68
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["logement"]) || array_key_exists("logement", $context) ? $context["logement"] : (function () { throw new RuntimeError('Variable "logement" does not exist.', 68, $this->source); })()), "equipement", [], "any", false, false, false, 68), "internet", [], "any", false, false, false, 68)) ? ("Yes") : ("No"));
            echo "</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th><i class=\"fas fa-bed\"></i> NbrChambre</th> <!-- Icon for bedrooms -->
                                                                        <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["logement"]) || array_key_exists("logement", $context) ? $context["logement"] : (function () { throw new RuntimeError('Variable "logement" does not exist.', 72, $this->source); })()), "equipement", [], "any", false, false, false, 72), "nbrChambre", [], "any", false, false, false, 72), "html", null, true);
            echo "</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th><i class=\"fas fa-snowflake\"></i> Climatisation</th> <!-- Icon for air conditioning -->
                                                                        <td>";
            // line 76
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["logement"]) || array_key_exists("logement", $context) ? $context["logement"] : (function () { throw new RuntimeError('Variable "logement" does not exist.', 76, $this->source); })()), "equipement", [], "any", false, false, false, 76), "climatisation", [], "any", false, false, false, 76)) ? ("Yes") : ("No"));
            echo "</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Types De Chambre</th>
                                                                        <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["logement"]) || array_key_exists("logement", $context) ? $context["logement"] : (function () { throw new RuntimeError('Variable "logement" does not exist.', 80, $this->source); })()), "equipement", [], "any", false, false, false, 80), "TypesDeChambre", [], "any", false, false, false, 80), "html", null, true);
            echo "</td>
                                                                    </tr>
                                                                   <tr>
                                                                    <th>Description</th>
                                                                    ";
            // line 84
            if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["logement"]) || array_key_exists("logement", $context) ? $context["logement"] : (function () { throw new RuntimeError('Variable "logement" does not exist.', 84, $this->source); })()), "equipement", [], "any", false, false, false, 84), "Description", [], "any", false, false, false, 84))) {
                // line 85
                echo "                                                                        <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["logement"]) || array_key_exists("logement", $context) ? $context["logement"] : (function () { throw new RuntimeError('Variable "logement" does not exist.', 85, $this->source); })()), "equipement", [], "any", false, false, false, 85), "Description", [], "any", false, false, false, 85), "html", null, true);
                echo "</td>
                                                                    ";
            } else {
                // line 87
                echo "                                                                       
                                                                       <p>Aucun description disponible pour ce logement.</p>
                                                                      
                                                                    ";
            }
            // line 91
            echo "                                                                </tr>   

                                                                </tbody>
                                                            </table>
                                                            ";
        } else {
            // line 96
            echo "                                                                <p>Aucun équipement disponible pour ce logement.</p>
                                                            ";
        }
        // line 98
        echo "                                                             ";
        // line 99
        echo "                                                            
                                                              ";
        // line 101
        echo "                                                    </div>
                                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t
                                            </div>
                                        </div>
                                    </form>
\t\t\t\t\t\t\t\t\t
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
\t\t\t
           
    </div>
\t</div
\t


</section>

<a href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logement_index");
        echo "\">back to list</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "logement/show.html.twig";
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
        return array (  238 => 123,  214 => 101,  211 => 99,  209 => 98,  205 => 96,  198 => 91,  192 => 87,  186 => 85,  184 => 84,  177 => 80,  170 => 76,  163 => 72,  156 => 68,  149 => 64,  141 => 58,  139 => 57,  133 => 54,  123 => 47,  116 => 43,  109 => 39,  98 => 31,  68 => 5,  58 => 4,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'header.html.twig' %}

{% block body%}
    <div class=\"hero-wrap js-fullheight\" style=\"background-image:url('{{ asset('uploads/' ~ logement.image) }}');\">

    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text js-fullheight align-items-center\" data-scrollax-parent=\"true\">
            <div class=\"col-md-7 ftco-animate\">
                <span class=\"subheading\">Welcome to Tfarhida </span>
                <h1 class=\"mb-4\">Discover Your Favorite Place with Us</h1>
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
                                                <div class=\"form-group p-4 border-0\"  style=\"text-align: center;\">
                                                    <a class=\"nav-link\" id=\"v-pills-2-tab\" data-toggle=\"pill\" href=\"#v-pills-2\" role=\"tab\" aria-controls=\"v-pills-2\" aria-selected=\"false\">
                                                        <label for=\"#\">{{ logement.nom }}</label>
                                                    </a>
                                                    <div class=\"form-field\">

                                                        <table class=\"table\">
                                                            <tbody>
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
                                                                <td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t

                                                            </tbody>
                                                        </table>
                                                            <label for=\"#\">Les equipements disponible de {{ logement.nom }}</label>


                                                            {% if logement.equipement is not null %}
                                                            <div class=\"form-field\">
                                                            <table class=\"table\">

                                                                <tbody>
                                                                    <tr>
                                                                        <th><i class=\"fas fa-parking\"></i> Parking</th> <!-- Icon for parking -->
                                                                        <td>{{ logement.equipement.Parking ? 'Yes' : 'No' }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th><i class=\"fas fa-wifi\"></i> Wifi</th> <!-- Icon for wifi -->
                                                                        <td>{{ logement.equipement.internet ? 'Yes' : 'No' }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th><i class=\"fas fa-bed\"></i> NbrChambre</th> <!-- Icon for bedrooms -->
                                                                        <td>{{ logement.equipement.nbrChambre }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th><i class=\"fas fa-snowflake\"></i> Climatisation</th> <!-- Icon for air conditioning -->
                                                                        <td>{{ logement.equipement.climatisation ? 'Yes' : 'No' }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Types De Chambre</th>
                                                                        <td>{{ logement.equipement.TypesDeChambre }}</td>
                                                                    </tr>
                                                                   <tr>
                                                                    <th>Description</th>
                                                                    {% if logement.equipement.Description is not null %}
                                                                        <td>{{ logement.equipement.Description }}</td>
                                                                    {% else %}
                                                                       
                                                                       <p>Aucun description disponible pour ce logement.</p>
                                                                      
                                                                    {% endif %}
                                                                </tr>   

                                                                </tbody>
                                                            </table>
                                                            {% else %}
                                                                <p>Aucun équipement disponible pour ce logement.</p>
                                                            {% endif %}
                                                             {# <a href=\"{{ path('app_equipement_show', {'equipementId': logement.equipement.id}) }}\" class=\"btn btn-warning\">Equipements</a> #}
                                                            
                                                              {# <a href=\"{{ path('app_equipement_show',{'equipementId': logement.equipement.id}) }}\" class=\"btn btn-warning\">Equipements</a>  #}
                                                    </div>
                                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t
                                            </div>
                                        </div>
                                    </form>
\t\t\t\t\t\t\t\t\t
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
\t\t\t
           
    </div>
\t</div
\t


</section>

<a href=\"{{ path('app_logement_index') }}\">back to list</a>
{% endblock %}
", "logement/show.html.twig", "C:\\Users\\MSI\\INTEGRATION\\Projet-Pi-tfarhida\\templates\\logement\\show.html.twig");
    }
}
