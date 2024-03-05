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

/* activitee/index.html.twig */
class __TwigTemplate_11adb84f04aea48df6902b7b6772af6e extends Template
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
        return "home/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activitee/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activitee/index.html.twig"));

        $this->parent = $this->loadTemplate("home/base.html.twig", "activitee/index.html.twig", 1);
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

        echo "Activite";
        
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
        echo "<div class=\"hero-wrap js-fullheight\" style=\"background-image: url('/images/services.jpg');\">

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
               <div class=\"col-md-12\">
                   <div class=\"ftco-search d-flex justify-content-center\">
                       <div class=\"row\">
                           <div class=\"col-md-12 nav-link-wrap\">
                               <div class=\"nav nav-pills text-center\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
                                   <a class=\"nav-link active mr-md-1\" id=\"v-pills-1-tab\" data-toggle=\"pill\" href=\"#v-pills-1\" role=\"tab\" aria-controls=\"v-pills-1\" aria-selected=\"true\">Chercher activité</a>
                               </div>
                           </div>
                           <div class=\"col-md-12 tab-wrap\">
                               <div class=\"tab-content\" id=\"v-pills-tabContent\">
                                   <div class=\"tab-pane fade show active\" id=\"v-pills-1\" role=\"tabpanel\" aria-labelledby=\"v-pills-nextgen-tab\">
                                       <form action=\"#\" class=\"search-property-1\">
                                           <div class=\"row no-gutters\">
                                               <div class=\"col-md d-flex\">
                                                   <div class=\"form-group p-4 border-0\">
                                                       <div class=\"form-field\">
                                                           <div class=\"icon\"><span class=\"fa fa-search\"></span></div>
                                                           <input type=\"text\" class=\"form-control\" id=\"myInput\" placeholder=\"Chercher activite\">
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

   <h1>Activite Affichage</h1>
   <table class=\"table\" id=\"myTable\">
       <thead>
           <tr>
               <th>Id</th>
               <th>Nom</th>
               <th>Prix</th>
               <th>Localisation</th>
               <th>NbP</th>
               <th>Etat</th>
               <th>image</th>
               <th>actions</th>
           </tr>
       </thead>
       <tbody>
        ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activitees"]) || array_key_exists("activitees", $context) ? $context["activitees"] : (function () { throw new RuntimeError('Variable "activitees" does not exist.', 71, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["activitee"]) {
            // line 72
            echo "           <tr>
               <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activitee"], "id", [], "any", false, false, false, 73), "html", null, true);
            echo "</td>
               <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activitee"], "nom", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
               <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activitee"], "prix", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
               <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activitee"], "localisation", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
               <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activitee"], "nbP", [], "any", false, false, false, 77), "html", null, true);
            echo "</td>
               <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activitee"], "etat", [], "any", false, false, false, 78), "html", null, true);
            echo "</td>
               <td>
                   ";
            // line 80
            if (twig_get_attribute($this->env, $this->source, $context["activitee"], "image", [], "any", false, false, false, 80)) {
                // line 81
                echo "                       <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["activitee"], "image", [], "any", false, false, false, 81))), "html", null, true);
                echo "\" alt=\"Image\" width=\"100\" height=\"100\">
                   ";
            } else {
                // line 83
                echo "                       <span>Aucune image</span>
                   ";
            }
            // line 85
            echo "               </td>
               <td>
                <a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activitee_show", ["id" => twig_get_attribute($this->env, $this->source, $context["activitee"], "id", [], "any", false, false, false, 87)]), "html", null, true);
            echo "\" class=\"btn-icon-split\">
                    <i class=\"fas fa-eye text-primary\"></i>
                </a>
                <a href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activitee_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["activitee"], "id", [], "any", false, false, false, 90)]), "html", null, true);
            echo "\" class=\"btn-icon-split\">
                    <i class=\"fas fa-edit text-secondary\"></i>
                </a>
                     
               </td>
           </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activitee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "        
       </tbody>
   </table>

   <a href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activitee_new");
        echo "\" class=\"btn btn-third\" >Create new</a>

   <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js\"></script>
   <script>
       \$(document).ready(function () {
           \$(\"#myInput\").on(\"keyup\", function () {
               var value = \$(this).val().toLowerCase();
               \$(\"#myTable tr\").filter(function () {
                   \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
               });
           })
       });
   </script>
  
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "activitee/index.html.twig";
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
        return array (  228 => 101,  222 => 97,  209 => 90,  203 => 87,  199 => 85,  195 => 83,  189 => 81,  187 => 80,  182 => 78,  178 => 77,  174 => 76,  170 => 75,  166 => 74,  162 => 73,  159 => 72,  155 => 71,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'home/base.html.twig' %}

{% block title %}Activite{% endblock %}

{% block body %}
<div class=\"hero-wrap js-fullheight\" style=\"background-image: url('/images/services.jpg');\">

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
               <div class=\"col-md-12\">
                   <div class=\"ftco-search d-flex justify-content-center\">
                       <div class=\"row\">
                           <div class=\"col-md-12 nav-link-wrap\">
                               <div class=\"nav nav-pills text-center\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
                                   <a class=\"nav-link active mr-md-1\" id=\"v-pills-1-tab\" data-toggle=\"pill\" href=\"#v-pills-1\" role=\"tab\" aria-controls=\"v-pills-1\" aria-selected=\"true\">Chercher activité</a>
                               </div>
                           </div>
                           <div class=\"col-md-12 tab-wrap\">
                               <div class=\"tab-content\" id=\"v-pills-tabContent\">
                                   <div class=\"tab-pane fade show active\" id=\"v-pills-1\" role=\"tabpanel\" aria-labelledby=\"v-pills-nextgen-tab\">
                                       <form action=\"#\" class=\"search-property-1\">
                                           <div class=\"row no-gutters\">
                                               <div class=\"col-md d-flex\">
                                                   <div class=\"form-group p-4 border-0\">
                                                       <div class=\"form-field\">
                                                           <div class=\"icon\"><span class=\"fa fa-search\"></span></div>
                                                           <input type=\"text\" class=\"form-control\" id=\"myInput\" placeholder=\"Chercher activite\">
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

   <h1>Activite Affichage</h1>
   <table class=\"table\" id=\"myTable\">
       <thead>
           <tr>
               <th>Id</th>
               <th>Nom</th>
               <th>Prix</th>
               <th>Localisation</th>
               <th>NbP</th>
               <th>Etat</th>
               <th>image</th>
               <th>actions</th>
           </tr>
       </thead>
       <tbody>
        {% for activitee in activitees %}
           <tr>
               <td>{{ activitee.id }}</td>
               <td>{{ activitee.nom }}</td>
               <td>{{ activitee.prix }}</td>
               <td>{{ activitee.localisation }}</td>
               <td>{{ activitee.nbP }}</td>
               <td>{{ activitee.etat }}</td>
               <td>
                   {% if activitee.image %}
                       <img src=\"{{ asset('uploads/' ~ activitee.image) }}\" alt=\"Image\" width=\"100\" height=\"100\">
                   {% else %}
                       <span>Aucune image</span>
                   {% endif %}
               </td>
               <td>
                <a href=\"{{ path('app_activitee_show', {'id': activitee.id}) }}\" class=\"btn-icon-split\">
                    <i class=\"fas fa-eye text-primary\"></i>
                </a>
                <a href=\"{{ path('app_activitee_edit', {'id': activitee.id}) }}\" class=\"btn-icon-split\">
                    <i class=\"fas fa-edit text-secondary\"></i>
                </a>
                     
               </td>
           </tr>
        {% endfor %}
        
       </tbody>
   </table>

   <a href=\"{{ path('app_activitee_new') }}\" class=\"btn btn-third\" >Create new</a>

   <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js\"></script>
   <script>
       \$(document).ready(function () {
           \$(\"#myInput\").on(\"keyup\", function () {
               var value = \$(this).val().toLowerCase();
               \$(\"#myTable tr\").filter(function () {
                   \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
               });
           })
       });
   </script>
  
{% endblock %}", "activitee/index.html.twig", "C:\\Users\\MSI\\INTEGRATION\\Projet-Pi-tfarhida\\templates\\activitee\\index.html.twig");
    }
}
