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

/* logement/new.html.twig */
class __TwigTemplate_2d84c55d103a317cd199fbedfeee7380 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "logement/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "logement/new.html.twig"));

        $this->parent = $this->loadTemplate("header.html.twig", "logement/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 3
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" href=\"index.html\">Tfarhida<span>Bon plan</span></a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"oi oi-menu\"></span> Menu
\t\t\t</button>

\t\t\t<div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t<li class=\"nav-item \"><a href=\"/\" class=\"nav-link\">Home</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a  href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activitee_indexx");
        echo "\"class=\"nav-link\">Activites</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a  href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite");
        echo "\" class=\"nav-link\">Transports</a></li>
\t\t\t\t\t<li class=\"nav-item active\"><a href=\"\" class=\"nav-link\">Logements</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_indexfront");
        echo "\" class=\"nav-link\">restaurants</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index");
        echo "\" class=\"nav-link\">Reclamation</a></li>

\t\t\t\t
\t\t\t
\t\t\t\t";
        // line 21
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21)) {
            // line 22
            echo "\t\t\t  

\t\t\t\t ";
            // line 24
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 25
                echo "\t\t\t\t <p><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard_index");
                echo "\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Admin</span> </a> </p>
\t\t\t\t\t\t";
            }
            // line 27
            echo "\t\t\t\t<li class=\"nav-item dropdown no-arrow \">
\t\t\t\t\t<a aria-expanded=\"false\" aria-haspopup=\"true\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"userDropdown\" role=\"button\">
\t\t\t\t\t\t<span class=\"mr-2 d-none d-lg-inline text-gray-600 small\"><i class=\"far fa-user text-primary mr-2 fa-2x \"></i>  ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "fullName", [], "any", false, false, false, 29), "html", null, true);
            echo "</span>
\t\t\t\t\t</a>
\t\t\t\t\t<!-- Dropdown - User Information -->
\t\t\t\t\t<div aria-labelledby=\"userDropdown\" class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\">
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"/admin/profil\">
\t\t\t\t\t\t\t<i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\tProfil
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"/logement/mylogement\">
\t\t\t\t\t\t<i class=\"fas fa-list-ul text-gray-400\"></i>
\t\t\t\t\t\tMes Logements
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/admin/parametre\">
\t\t\t\t\t\t<i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\tParamètres
\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t<a class=\"dropdown-item\"  href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\LogoutUrlExtension']->getLogoutPath("main"), "html", null, true);
            echo "\">
\t\t\t\t\t\t<i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\tDéconnexion
\t\t\t\t\t</a>
            </div>
\t\t\t\t\t<li <div id=\"google_translate_element\"></div> </li>

        </li>
\t\t\t</ul>

\t\t\t\t  ";
            // line 58
            echo "            ";
            // line 59
            echo "\t\t\t";
        } else {
            // line 60
            echo "\t\t\t<p><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Login</span> </a> </p>
\t\t\t<p><a href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration");
            echo "\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Register</span> </a> </p>
            ";
        }
        // line 63
        echo "\t\t</div>
\t\t</div>
\t</nav>
    <!-- END nav -->
    
\t<div class=\"hero-wrap js-fullheight\" style=\"background-image: url('/images/hotelBG.jpg');\">
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
</header>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 82
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 83
        echo "
    <div class=\"row justify-content-center mt-5\">
        <div class=\"col-md-6\">
            <div class=\"card shadow\">
                <div class=\"card-body\">
                    <h2 class=\"card-title mb-4\">New Logement Form</h2>
                    ";
        // line 89
        echo twig_include($this->env, $context, "logement/_form.html.twig");
        echo "
                </div>
            </div>
        </div>
    </div>

    <div class=\"text-center mt-4\">
        <a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logement_index");
        echo "\" class=\"btn btn-secondary\">Back to List</a>
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
        return "logement/new.html.twig";
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
        return array (  223 => 96,  213 => 89,  205 => 83,  195 => 82,  167 => 63,  162 => 61,  157 => 60,  154 => 59,  152 => 58,  139 => 46,  119 => 29,  115 => 27,  109 => 25,  107 => 24,  103 => 22,  101 => 21,  94 => 17,  90 => 16,  85 => 14,  81 => 13,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'header.html.twig' %}
{% block header %}
<nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" href=\"index.html\">Tfarhida<span>Bon plan</span></a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"oi oi-menu\"></span> Menu
\t\t\t</button>

\t\t\t<div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t<li class=\"nav-item \"><a href=\"/\" class=\"nav-link\">Home</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a  href=\"{{ path('app_activitee_indexx') }}\"class=\"nav-link\">Activites</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a  href=\"{{ path('app_activite') }}\" class=\"nav-link\">Transports</a></li>
\t\t\t\t\t<li class=\"nav-item active\"><a href=\"\" class=\"nav-link\">Logements</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"{{ path('app_restaurant_indexfront') }}\" class=\"nav-link\">restaurants</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"{{ path('app_reclamation_index') }}\" class=\"nav-link\">Reclamation</a></li>

\t\t\t\t
\t\t\t
\t\t\t\t{% if app.user %}
\t\t\t  

\t\t\t\t {% if is_granted('ROLE_ADMIN') %}
\t\t\t\t <p><a href=\"{{ path('admin_dashboard_index') }}\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Admin</span> </a> </p>
\t\t\t\t\t\t{% endif %}
\t\t\t\t<li class=\"nav-item dropdown no-arrow \">
\t\t\t\t\t<a aria-expanded=\"false\" aria-haspopup=\"true\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"userDropdown\" role=\"button\">
\t\t\t\t\t\t<span class=\"mr-2 d-none d-lg-inline text-gray-600 small\"><i class=\"far fa-user text-primary mr-2 fa-2x \"></i>  {{ app.user.fullName }}</span>
\t\t\t\t\t</a>
\t\t\t\t\t<!-- Dropdown - User Information -->
\t\t\t\t\t<div aria-labelledby=\"userDropdown\" class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\">
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"/admin/profil\">
\t\t\t\t\t\t\t<i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\tProfil
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"/logement/mylogement\">
\t\t\t\t\t\t<i class=\"fas fa-list-ul text-gray-400\"></i>
\t\t\t\t\t\tMes Logements
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"dropdown-item\" href=\"/admin/parametre\">
\t\t\t\t\t\t<i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\tParamètres
\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t<a class=\"dropdown-item\"  href=\"{{ logout_path('main') }}\">
\t\t\t\t\t\t<i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\tDéconnexion
\t\t\t\t\t</a>
            </div>
\t\t\t\t\t<li <div id=\"google_translate_element\"></div> </li>

        </li>
\t\t\t</ul>

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
    <!-- END nav -->
    
\t<div class=\"hero-wrap js-fullheight\" style=\"background-image: url('/images/hotelBG.jpg');\">
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
</header>
{% endblock %}
{% block body %}

    <div class=\"row justify-content-center mt-5\">
        <div class=\"col-md-6\">
            <div class=\"card shadow\">
                <div class=\"card-body\">
                    <h2 class=\"card-title mb-4\">New Logement Form</h2>
                    {{ include('logement/_form.html.twig') }}
                </div>
            </div>
        </div>
    </div>

    <div class=\"text-center mt-4\">
        <a href=\"{{ path('app_logement_index') }}\" class=\"btn btn-secondary\">Back to List</a>
    </div>


{% endblock %}
", "logement/new.html.twig", "C:\\Users\\ASUS\\Desktop\\PiDev\\Projet-Pi-tfarhida\\templates\\logement\\new.html.twig");
    }
}
