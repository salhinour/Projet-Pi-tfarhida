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

/* reclamation/new.html.twig */
class __TwigTemplate_607daed3e8c24dc8056672582b0142cd extends Template
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
            'styles' => [$this, 'block_styles'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/new.html.twig"));

        $this->parent = $this->loadTemplate("home/base.html.twig", "reclamation/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_navBar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navBar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navBar"));

        // line 3
        echo "

<nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" href=\"index.html\">Tfarhida<span>Bon plan</span></a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"oi oi-menu\"></span> Menu
\t\t\t</button>

\t\t\t<div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t<li class=\"nav-item \"><a href=\"/\" class=\"nav-link\">Home</a></li>
\t\t\t\t\t<li class=\"nav-item \"><a  href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activitee_indexx");
        echo "\"class=\"nav-link\">Activites</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a  href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite");
        echo "\" class=\"nav-link\">Transports</a></li>
\t\t\t\t\t<li class=\"nav-item \"><a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logement_index");
        echo "\" class=\"nav-link\">Logements</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_indexfront");
        echo "\" class=\"nav-link\">restaurants</a></li>
\t\t\t\t\t<li class=\"nav-item active\"><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index");
        echo "\" class=\"nav-link\">Reclamation</a></li>
                    <li <div id=\"google_translate_element\"></div>
                     </li>

\t\t\t\t
\t\t\t
\t\t\t         ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25)) {
            // line 26
            echo "\t\t\t 

\t\t\t\t     ";
            // line 28
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 29
                echo "\t\t\t\t     <p><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard_index");
                echo "\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Admin</span> </a> </p>
                        ";
            }
            // line 31
            echo "                        <li class=\"nav-item dropdown no-arrow \">
                        <a aria-expanded=\"false\" aria-haspopup=\"true\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"userDropdown\" role=\"button\">
                        <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\"><i class=\"far fa-user text-primary mr-2 fa-2x \"></i>  ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "fullName", [], "any", false, false, false, 33), "html", null, true);
            echo "</span>
                                    </a>
                        <!-- Dropdown - User Information -->
                            <div aria-labelledby=\"userDropdown\" class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\">
                        
                        <a class=\"dropdown-item\" href=\"/logement/mylogement\">
                            <i class=\"fas fa-list-ul text-gray-400\"></i>
                            Mes Logements
                        </a>
                
                        <a class=\"dropdown-item\"  href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\LogoutUrlExtension']->getLogoutPath("main"), "html", null, true);
            echo "\">
                        <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                        Déconnexion
                            </a>

            </div>
        </li>

\t\t\t\t  ";
            // line 53
            echo "            ";
            // line 54
            echo "\t\t\t";
        } else {
            // line 55
            echo "\t\t\t<p><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Login</span> </a> </p>
\t\t\t<p><a href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration");
            echo "\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Register</span> </a> </p>
            ";
        }
        // line 58
        echo "\t\t</div>
\t\t</div>
\t</nav>
<body>
\t
\t<!-- END nav -->
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

    // line 81
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 82
        echo "    <div class=\"container\">
        <h1>Ajouter une Réclamation</h1>

        <div class=\"form-container\">
            <div id=\"error-message\" style=\"display: none; color: red; text-align: center; margin-bottom: 10px;\">Vous ne pouvez pas modifier la date.</div>

            ";
        // line 88
        echo twig_include($this->env, $context, "reclamation/_form.html.twig", ["button_label" => "Create"]);
        echo "

            <div class=\"buttons\">
                <a href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index");
        echo "\" class=\"btn btn-secondary\">Back to List</a>
            </div>
        </div>
    </div>

    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

    <script>
        \$(document).ready(function() {
            var \$dateField = \$('#reclamation_date');

            var \$errorMessage = \$('#error-message');

            \$dateField.on('click', function() {
                \$errorMessage.show();
                \$dateField.prop('readonly', true);
            });
        });
    </script>
    <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/form_validation.js"), "html", null, true);
        echo "\"></script>

    <style>
        ";
        // line 113
        $this->displayBlock('styles', $context, $blocks);
        // line 146
        echo "    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 113
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        // line 114
        echo "        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
        }

        .form-container {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            position: relative; 
        }

        #error-message {
            position: absolute;
            top: -20px; 
            left: 0;
            right: 0;
        }

        .buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .buttons .btn {
            margin-right: 10px;
        }
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reclamation/new.html.twig";
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
        return array (  273 => 114,  263 => 113,  252 => 146,  250 => 113,  244 => 110,  222 => 91,  216 => 88,  208 => 82,  198 => 81,  166 => 58,  161 => 56,  156 => 55,  153 => 54,  151 => 53,  140 => 43,  127 => 33,  123 => 31,  117 => 29,  115 => 28,  111 => 26,  109 => 25,  100 => 19,  96 => 18,  92 => 17,  88 => 16,  84 => 15,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'home/base.html.twig' %}
{% block navBar %}


<nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" href=\"index.html\">Tfarhida<span>Bon plan</span></a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"oi oi-menu\"></span> Menu
\t\t\t</button>

\t\t\t<div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t<li class=\"nav-item \"><a href=\"/\" class=\"nav-link\">Home</a></li>
\t\t\t\t\t<li class=\"nav-item \"><a  href=\"{{ path('app_activitee_indexx') }}\"class=\"nav-link\">Activites</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a  href=\"{{ path('app_activite') }}\" class=\"nav-link\">Transports</a></li>
\t\t\t\t\t<li class=\"nav-item \"><a href=\"{{ path('app_logement_index') }}\" class=\"nav-link\">Logements</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"{{ path('app_restaurant_indexfront') }}\" class=\"nav-link\">restaurants</a></li>
\t\t\t\t\t<li class=\"nav-item active\"><a href=\"{{ path('app_reclamation_index') }}\" class=\"nav-link\">Reclamation</a></li>
                    <li <div id=\"google_translate_element\"></div>
                     </li>

\t\t\t\t
\t\t\t
\t\t\t         {% if app.user %}
\t\t\t 

\t\t\t\t     {% if is_granted('ROLE_ADMIN') %}
\t\t\t\t     <p><a href=\"{{ path('admin_dashboard_index') }}\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Admin</span> </a> </p>
                        {% endif %}
                        <li class=\"nav-item dropdown no-arrow \">
                        <a aria-expanded=\"false\" aria-haspopup=\"true\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"userDropdown\" role=\"button\">
                        <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\"><i class=\"far fa-user text-primary mr-2 fa-2x \"></i>  {{ app.user.fullName }}</span>
                                    </a>
                        <!-- Dropdown - User Information -->
                            <div aria-labelledby=\"userDropdown\" class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\">
                        
                        <a class=\"dropdown-item\" href=\"/logement/mylogement\">
                            <i class=\"fas fa-list-ul text-gray-400\"></i>
                            Mes Logements
                        </a>
                
                        <a class=\"dropdown-item\"  href=\"{{ logout_path('main') }}\">
                        <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                        Déconnexion
                            </a>

            </div>
        </li>

\t\t\t\t  {# <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\"><i class=\"far fa-user text-primary mr-2 fa-2x \"></i>
\t\t\t\t  {{ app.user.fullName }}</span> #}
            {# <p><a href=\"{{ logout_path('main') }}\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Logout</span> </a> </p> #}
\t\t\t{% else %}
\t\t\t<p><a href=\"{{ path('login') }}\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Login</span> </a> </p>
\t\t\t<p><a href=\"{{ path('registration') }}\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Register</span> </a> </p>
            {% endif %}
\t\t</div>
\t\t</div>
\t</nav>
<body>
\t
\t<!-- END nav -->
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
{% block body %}
    <div class=\"container\">
        <h1>Ajouter une Réclamation</h1>

        <div class=\"form-container\">
            <div id=\"error-message\" style=\"display: none; color: red; text-align: center; margin-bottom: 10px;\">Vous ne pouvez pas modifier la date.</div>

            {{ include('reclamation/_form.html.twig', {'button_label': 'Create'}) }}

            <div class=\"buttons\">
                <a href=\"{{ path('app_reclamation_index') }}\" class=\"btn btn-secondary\">Back to List</a>
            </div>
        </div>
    </div>

    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

    <script>
        \$(document).ready(function() {
            var \$dateField = \$('#reclamation_date');

            var \$errorMessage = \$('#error-message');

            \$dateField.on('click', function() {
                \$errorMessage.show();
                \$dateField.prop('readonly', true);
            });
        });
    </script>
    <script src=\"{{ asset('js/form_validation.js') }}\"></script>

    <style>
        {% block styles %}
        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
        }

        .form-container {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            position: relative; 
        }

        #error-message {
            position: absolute;
            top: -20px; 
            left: 0;
            right: 0;
        }

        .buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .buttons .btn {
            margin-right: 10px;
        }
        {% endblock %}
    </style>
{% endblock %}", "reclamation/new.html.twig", "C:\\Users\\ASUS\\Desktop\\PiDev\\Projet-Pi-tfarhida\\templates\\reclamation\\new.html.twig");
    }
}
