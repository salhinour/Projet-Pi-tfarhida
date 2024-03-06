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

/* logement/Mylist.html.twig */
class __TwigTemplate_167b130230ab07bc8d04c7080cf9caf7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header' => [$this, 'block_header'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "logement/Mylist.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "logement/Mylist.html.twig"));

        $this->parent = $this->loadTemplate("header.html.twig", "logement/Mylist.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "<header>
    <nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"index.html\">Tfarhida<span>Travel Agency</span></a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"oi oi-menu\"></span> Menu
            </button>
\t\t\t<div class=\"nav-item dropdown\">
             <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
\t\t\t 
                <ul class=\"navbar-nav ml-auto\">
\t\t\t\t
                    <li class=\"nav-item\">
\t\t\t\t\t<a href=\"accueil\" class=\"nav-link\">Accueil</a>
\t\t\t\t\t</li>

                   
\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t

\t\t\t\t\t
\t\t\t\t\t\t<a href=\"logement\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Logements</a>
\t\t\t\t\t\t</li>
\t\t\t
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu m-0\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\">Hotel</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\"> Villa</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\"> Maison</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</ul>
                    ";
        // line 38
        echo "                        ";
        // line 39
        echo "                    ";
        // line 40
        echo "                        ";
        // line 41
        echo "\t\t\t\t\t\t";
        // line 42
        echo "                    ";
        // line 43
        echo "                </ul> 
\t\t\t\t</div>
            </div>  
\t\t\t<ul class=\"navbar-nav ml-auto\">


        
        <div class=\"topbar-divider d-none d-sm-block\"></div>

        <!-- Nav Item - User Information -->
        <li class=\"nav-item dropdown no-arrow\">
            <a aria-expanded=\"false\" aria-haspopup=\"true\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"userDropdown\" role=\"button\">
                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\"><i class=\"far fa-user text-primary mr-2 fa-2x \"></i>Gharbi jihen</span>
                            </a>
            <!-- Dropdown - User Information -->
            <div aria-labelledby=\"userDropdown\" class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\">
                <a class=\"dropdown-item\" href=\"/admin/profil\">
                    <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Profil
                </a>
                <a class=\"dropdown-item\" href=\"/admin/parametre\">
                    <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Paramètres
                </a>
                                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\"  href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logement_back_index");
        echo "\">
                    <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Déconnexion
                </a>
            </div>
        </li>

    </ul>
        </div>
    </nav>
    <div class=\"hero-wrap js-fullheight\" style=\"background-image: url('/images/hotelBG.jpg');\">
\t\t";
        // line 80
        echo "\t\t<div class=\"container\">
\t\t\t<div class=\"row no-gutters slider-text js-fullheight align-items-center\" data-scrollax-parent=\"true\">
\t\t\t\t<div class=\"col-md-7 ftco-animate\">
\t\t\t\t\t<span class=\"subheading\">Welcome to Pacific</span>
\t\t\t\t\t<h1 class=\"mb-4\">Discover Your Favorite Place with Us</h1>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
    <!-- END nav -->
</header>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 94
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 95
        echo "
     
    <table class=\"table\" id=\"myTable\">
        <thead class=\"thead-dark\">
            <tr>
                <th>Localisation</th>
                <th>NoteMoyenne</th>
                <th>Prix</th>
                <th>Etat</th>
                <th>Image</th>
                <th>Nom</th>
                <th>TypeLog</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logements"]) || array_key_exists("logements", $context) ? $context["logements"] : (function () { throw new RuntimeError('Variable "logements" does not exist.', 111, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["logement"]) {
            // line 112
            echo "            <tr>
            
                <td>";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "Localisation", [], "any", false, false, false, 114), "html", null, true);
            echo "</td>
                <td>";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "NoteMoyenne", [], "any", false, false, false, 115), "html", null, true);
            echo "</td>
                <td>";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "Prix", [], "any", false, false, false, 116), "html", null, true);
            echo "</td>
                <td>";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "Etat", [], "any", false, false, false, 117), "html", null, true);
            echo "</td>
                <td>
                   ";
            // line 119
            if (twig_get_attribute($this->env, $this->source, $context["logement"], "image", [], "any", false, false, false, 119)) {
                // line 120
                echo "                       <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["logement"], "image", [], "any", false, false, false, 120))), "html", null, true);
                echo "\" alt=\"Image\" width=\"100\" height=\"100\">
                   ";
            } else {
                // line 122
                echo "                       <span>Aucune image</span>
                   ";
            }
            // line 124
            echo "               </td>
                <td>";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "nom", [], "any", false, false, false, 125), "html", null, true);
            echo "</td>
                <td>";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "TypeLog", [], "any", false, false, false, 126), "html", null, true);
            echo "</td>
                <td >
                 <div class=\"row\">
                    
                    <a href=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["logement"], "id", [], "any", false, false, false, 130)]), "html", null, true);
            echo "\" >
                    <i class=\"fas fa-eye\" style=\"color: green\"></i>
             ";
            // line 132
            echo twig_include($this->env, $context, "logement/_delete_form.html.twig");
            echo "

                    
                   
                   
                 </div>
              
                </td>
               

               


            </tr>
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 147
            echo "            <tr>
                <td colspan=\"9\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['logement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "        </tbody>
    </table>
   
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "logement/Mylist.html.twig";
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
        return array (  313 => 151,  304 => 147,  276 => 132,  271 => 130,  264 => 126,  260 => 125,  257 => 124,  253 => 122,  247 => 120,  245 => 119,  240 => 117,  236 => 116,  232 => 115,  228 => 114,  224 => 112,  206 => 111,  188 => 95,  178 => 94,  155 => 80,  141 => 68,  114 => 43,  112 => 42,  110 => 41,  108 => 40,  106 => 39,  104 => 38,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'header.html.twig' %}

{% block header %}
<header>
    <nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"index.html\">Tfarhida<span>Travel Agency</span></a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"oi oi-menu\"></span> Menu
            </button>
\t\t\t<div class=\"nav-item dropdown\">
             <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
\t\t\t 
                <ul class=\"navbar-nav ml-auto\">
\t\t\t\t
                    <li class=\"nav-item\">
\t\t\t\t\t<a href=\"accueil\" class=\"nav-link\">Accueil</a>
\t\t\t\t\t</li>

                   
\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t

\t\t\t\t\t
\t\t\t\t\t\t<a href=\"logement\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Logements</a>
\t\t\t\t\t\t</li>
\t\t\t
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu m-0\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\">Hotel</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\"> Villa</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\"> Maison</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</ul>
                    {# {% if app.user %} #}
                        {# <li class=\"nav-item\"><a  class=\"nav-link\">Déconnexion</a></li> #}
                    {# {% else %} #}
                        {# <li class=\"nav-item\"> #}
\t\t\t\t\t\t{# <a href=\"{{ path('app_logement_back_index') }}\" class=\"nav-link\">Connexion</a></li> #}
                    {# {# {% endif %} # #}
                </ul> 
\t\t\t\t</div>
            </div>  
\t\t\t<ul class=\"navbar-nav ml-auto\">


        
        <div class=\"topbar-divider d-none d-sm-block\"></div>

        <!-- Nav Item - User Information -->
        <li class=\"nav-item dropdown no-arrow\">
            <a aria-expanded=\"false\" aria-haspopup=\"true\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"userDropdown\" role=\"button\">
                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\"><i class=\"far fa-user text-primary mr-2 fa-2x \"></i>Gharbi jihen</span>
                            </a>
            <!-- Dropdown - User Information -->
            <div aria-labelledby=\"userDropdown\" class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\">
                <a class=\"dropdown-item\" href=\"/admin/profil\">
                    <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Profil
                </a>
                <a class=\"dropdown-item\" href=\"/admin/parametre\">
                    <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Paramètres
                </a>
                                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\"  href=\"{{ path('app_logement_back_index') }}\">
                    <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Déconnexion
                </a>
            </div>
        </li>

    </ul>
        </div>
    </nav>
    <div class=\"hero-wrap js-fullheight\" style=\"background-image: url('/images/hotelBG.jpg');\">
\t\t{# <div class=\"overlay\"></div> #}
\t\t<div class=\"container\">
\t\t\t<div class=\"row no-gutters slider-text js-fullheight align-items-center\" data-scrollax-parent=\"true\">
\t\t\t\t<div class=\"col-md-7 ftco-animate\">
\t\t\t\t\t<span class=\"subheading\">Welcome to Pacific</span>
\t\t\t\t\t<h1 class=\"mb-4\">Discover Your Favorite Place with Us</h1>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
    <!-- END nav -->
</header>
{% endblock %}
{% block body %}

     
    <table class=\"table\" id=\"myTable\">
        <thead class=\"thead-dark\">
            <tr>
                <th>Localisation</th>
                <th>NoteMoyenne</th>
                <th>Prix</th>
                <th>Etat</th>
                <th>Image</th>
                <th>Nom</th>
                <th>TypeLog</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for logement in logements %}
            <tr>
            
                <td>{{ logement.Localisation }}</td>
                <td>{{ logement.NoteMoyenne }}</td>
                <td>{{ logement.Prix }}</td>
                <td>{{ logement.Etat }}</td>
                <td>
                   {% if logement.image %}
                       <img src=\"{{ asset('uploads/' ~ logement.image) }}\" alt=\"Image\" width=\"100\" height=\"100\">
                   {% else %}
                       <span>Aucune image</span>
                   {% endif %}
               </td>
                <td>{{ logement.nom }}</td>
                <td>{{ logement.TypeLog }}</td>
                <td >
                 <div class=\"row\">
                    
                    <a href=\"{{ path('app_logement_show', {'id': logement.id}) }}\" >
                    <i class=\"fas fa-eye\" style=\"color: green\"></i>
             {{ include('logement/_delete_form.html.twig') }}

                    
                   
                   
                 </div>
              
                </td>
               

               


            </tr>
        {% else %}
            <tr>
                <td colspan=\"9\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
   
\t{% endblock %}

", "logement/Mylist.html.twig", "C:\\Users\\ASUS\\Desktop\\PiDev\\Projet-Pi-tfarhida\\templates\\logement\\Mylist.html.twig");
    }
}
