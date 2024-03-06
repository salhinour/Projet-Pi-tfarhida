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

/* logement/index.html.twig */
class __TwigTemplate_cef6b644c5fc894726b62ba81eeb722a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "logement/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "logement/index.html.twig"));

        $this->parent = $this->loadTemplate("header.html.twig", "logement/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 5
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
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activitee_indexx");
        echo "\"class=\"nav-link\">Activites</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a  href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite");
        echo "\" class=\"nav-link\">Transports</a></li>
\t\t\t\t\t<li class=\"nav-item active\"><a href=\"\" class=\"nav-link\">Logements</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_indexfront");
        echo "\" class=\"nav-link\">restaurants</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index");
        echo "\" class=\"nav-link\">Reclamation</a></li>

\t\t\t\t
\t\t\t
\t\t\t\t";
        // line 23
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23)) {
            // line 24
            echo "\t\t\t  

\t\t\t\t ";
            // line 26
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 27
                echo "\t\t\t\t <p><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard_index");
                echo "\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Admin</span> </a> </p>
\t\t\t\t\t\t";
            }
            // line 29
            echo "\t\t\t\t<li class=\"nav-item dropdown no-arrow \">
\t\t\t\t\t<a aria-expanded=\"false\" aria-haspopup=\"true\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"userDropdown\" role=\"button\">
\t\t\t\t\t\t<span class=\"mr-2 d-none d-lg-inline text-gray-600 small\"><i class=\"far fa-user text-primary mr-2 fa-2x \"></i>  ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31), "fullName", [], "any", false, false, false, 31), "html", null, true);
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
            // line 48
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
            // line 60
            echo "            ";
            // line 61
            echo "\t\t\t";
        } else {
            // line 62
            echo "\t\t\t<p><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Login</span> </a> </p>
\t\t\t<p><a href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration");
            echo "\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Register</span> </a> </p>
            ";
        }
        // line 65
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

    // line 84
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 85
        echo "\t
\t

\t<section class=\"ftco-section ftco-no-pb ftco-no-pt\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"ftco-search d-flex justify-content-center\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12 nav-link-wrap\">
\t\t\t\t\t\t\t\t<div class=\"nav nav-pills text-center\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">

\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"v-pills-2-tab\" data-toggle=\"pill\" href=\"#v-pills-2\" role=\"tab\" aria-controls=\"v-pills-2\" aria-selected=\"false\">Logements</a>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-md-12 tab-wrap\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"tab-content\" id=\"v-pills-tabContent\">
\t\t\t\t\t\t\t\t\t\t";
        // line 108
        echo " 
   <div class=\"tab-pane fade show active\" id=\"v-pills-1\" role=\"tabpanel\" aria-labelledby=\"v-pills-nextgen-tab\">
    <form action=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logement_index");
        echo "\" class=\"search-property-1\" method=\"get\">
        <div class=\"row no-gutters\">
            <div class=\"col-md d-flex\">
                <div class=\"form-group p-4 border-0\" id=\"filterSection\">
                    <label>Categories</label>
                    <select name=\"TypeLog\" id=\"categorySelect\" onchange=\"this.form.submit()\">
                        <option value=\"\">choose an option</option>
                        <option value=\"Hotel\" ";
        // line 117
        if (((isset($context["selectedState"]) || array_key_exists("selectedState", $context) ? $context["selectedState"] : (function () { throw new RuntimeError('Variable "selectedState" does not exist.', 117, $this->source); })()) == "Hotel")) {
            echo " selected ";
        }
        echo ">Hotel</option>
                        <option value=\"Villa\" ";
        // line 118
        if (((isset($context["selectedState"]) || array_key_exists("selectedState", $context) ? $context["selectedState"] : (function () { throw new RuntimeError('Variable "selectedState" does not exist.', 118, $this->source); })()) == "Villa")) {
            echo " selected ";
        }
        echo ">Villa</option>
                        <option value=\"Maison\" ";
        // line 119
        if (((isset($context["selectedState"]) || array_key_exists("selectedState", $context) ? $context["selectedState"] : (function () { throw new RuntimeError('Variable "selectedState" does not exist.', 119, $this->source); })()) == "Maison")) {
            echo " selected ";
        }
        echo ">Maison</option>
                        <option value=\"Appartement\" ";
        // line 120
        if (((isset($context["selectedState"]) || array_key_exists("selectedState", $context) ? $context["selectedState"] : (function () { throw new RuntimeError('Variable "selectedState" does not exist.', 120, $this->source); })()) == "Appartement")) {
            echo " selected ";
        }
        echo ">Appartement</option>

                    </select>
                </div>
            </div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group p-4 border-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"#\">Destination</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon\"><span class=\"fa fa-search\"></span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search place\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"#\">Price Limit</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"select-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-chevron-down\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"Prix\" id=\"prix\" class=\"form-control\" onchange=\"this.form.submit()\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Tous les prix</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0-100\"  ";
        // line 144
        if (((isset($context["selectedPrice"]) || array_key_exists("selectedPrice", $context) ? $context["selectedPrice"] : (function () { throw new RuntimeError('Variable "selectedPrice" does not exist.', 144, $this->source); })()) == "0-100")) {
            echo " selected ";
        }
        echo " >Moins de 100 </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"100-200\"  ";
        // line 145
        if (((isset($context["selectedPrice"]) || array_key_exists("selectedPrice", $context) ? $context["selectedPrice"] : (function () { throw new RuntimeError('Variable "selectedPrice" does not exist.', 145, $this->source); })()) == "100-200")) {
            echo " selected ";
        }
        echo " >100 - 200</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"200-300\"  ";
        // line 146
        if (((isset($context["selectedPrice"]) || array_key_exists("selectedPrice", $context) ? $context["selectedPrice"] : (function () { throw new RuntimeError('Variable "selectedPrice" does not exist.', 146, $this->source); })()) == "200-300")) {
            echo " selected ";
        }
        echo " >200 - 300</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"300-500\"  ";
        // line 147
        if (((isset($context["selectedPrice"]) || array_key_exists("selectedPrice", $context) ? $context["selectedPrice"] : (function () { throw new RuntimeError('Variable "selectedPrice" does not exist.', 147, $this->source); })()) == "300-500")) {
            echo " selected ";
        }
        echo " >300 - 500</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t <div class=\"col-md d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group d-flex w-100 border-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-field w-100 align-items-center d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Filter\" class=\"align-self-stretch form-control btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>


     
<section class=\"ftco-section\">
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logements"]) || array_key_exists("logements", $context) ? $context["logements"] : (function () { throw new RuntimeError('Variable "logements" does not exist.', 181, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["logement"]) {
            // line 182
            echo "                <div class=\"col-md-4 ftco-animate fadeInUp ftco-animated\">
                    <div class=\"project-wrap hotel\">
\t\t\t\t\t<a href=\"";
            // line 184
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["logement"], "id", [], "any", false, false, false, 184)]), "html", null, true);
            echo "\" class=\"img\" style=\"background-image: url('";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["logement"], "image", [], "any", false, false, false, 184))), "html", null, true);
            echo "');\">
    \t\t\t\t\t<span class=\"price\">";
            // line 185
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "Prix", [], "any", false, false, false, 185), "html", null, true);
            echo "DT/person</span>
\t\t\t\t\t</a>
                        <div class=\"text p-4\">
\t\t\t\t\t\t ";
            // line 188
            if ((twig_get_attribute($this->env, $this->source, $context["logement"], "NoteMoyenne", [], "any", false, false, false, 188) == 1)) {
                // line 189
                echo "\t\t\t\t\t\t<p class=\"star mb-2\">
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t</p> 
\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 192
$context["logement"], "NoteMoyenne", [], "any", false, false, false, 192) == 2)) {
                echo "  

\t\t\t\t\t\t<p class=\"star mb-2\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t</p> 
\t\t\t\t\t\t\t ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 199
$context["logement"], "NoteMoyenne", [], "any", false, false, false, 199) == 3)) {
                echo "  

\t\t\t\t\t\t<p class=\"star mb-2\">

\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t</p> 
\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 207
$context["logement"], "NoteMoyenne", [], "any", false, false, false, 207) == 4)) {
                echo "  

\t\t\t\t\t\t<p class=\"star mb-2\">

\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t</p> 
\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 216
$context["logement"], "NoteMoyenne", [], "any", false, false, false, 216) == 5)) {
                echo " 

\t\t\t\t\t\t<p class=\"star mb-2\">

\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t</p> 
\t\t\t\t\t\t\t ";
            }
            // line 228
            echo "                         

                            <span class=\"days\">un jour</span>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t<a href=\"#\">";
            // line 234
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "Typelog", [], "any", false, false, false, 234), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "nom", [], "any", false, false, false, 234), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
                            <p class=\"location\"><span class=\"fa fa-map-marker\"></span>";
            // line 238
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "Localisation", [], "any", false, false, false, 238), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t
                            <ul> 
\t\t\t\t\t\t\t 
                                <li><span class=\"fas fa-phone-alt\"></span> ";
            // line 242
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "num", [], "any", false, false, false, 242), "html", null, true);
            echo " </li>
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<a href=\"";
            // line 246
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logement_map", ["id" => twig_get_attribute($this->env, $this->source, $context["logement"], "id", [], "any", false, false, false, 246)]), "html", null, true);
            echo "\" class=\"btn btn-info rounded-pill m-2\" > <i class=\"fas fa-location-arrow\"></i> Show Map</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            // line 249
            echo "       \t\t\t\t\t\t  <div class=\"sharethis-inline-share-buttons\"></div>
         ";
            // line 251
            echo "
                        </div>
                    </div>
                </div>
\t\t\t\t
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['logement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 257
        echo "        </div>
    </div>
\t<div class=\"row\">
    <a href=\"";
        // line 260
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logement_new");
        echo "\">Create new logement</a>
\t</div>
\t<th>
\t";
        // line 278
        echo "<div class=\"row mt-5\">
  <div class=\"col text-center\">
    <div class=\"block-27\">
      <ul>
        <li>
          <a href=\"#\">&lt;</a>
          ";
        // line 284
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["logements"]) || array_key_exists("logements", $context) ? $context["logements"] : (function () { throw new RuntimeError('Variable "logements" does not exist.', 284, $this->source); })()), "logement/pagination.html.twig");
        echo "

        </li>
      </ul>
    </div>
  </div>
</div>


\t<!-- Pagination -->
    <div class=\"d-flex justify-content-center\">
        ";
        // line 295
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["logements"]) || array_key_exists("logements", $context) ? $context["logements"] : (function () { throw new RuntimeError('Variable "logements" does not exist.', 295, $this->source); })()), "logement/pagination.html.twig");
        echo "
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
        return "logement/index.html.twig";
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
        return array (  502 => 295,  488 => 284,  480 => 278,  474 => 260,  469 => 257,  458 => 251,  455 => 249,  450 => 246,  443 => 242,  436 => 238,  427 => 234,  419 => 228,  404 => 216,  392 => 207,  381 => 199,  371 => 192,  366 => 189,  364 => 188,  358 => 185,  352 => 184,  348 => 182,  344 => 181,  305 => 147,  299 => 146,  293 => 145,  287 => 144,  258 => 120,  252 => 119,  246 => 118,  240 => 117,  230 => 110,  226 => 108,  204 => 85,  194 => 84,  167 => 65,  162 => 63,  157 => 62,  154 => 61,  152 => 60,  139 => 48,  119 => 31,  115 => 29,  109 => 27,  107 => 26,  103 => 24,  101 => 23,  94 => 19,  90 => 18,  85 => 16,  81 => 15,  69 => 5,  59 => 4,  36 => 1,);
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

{% block body%}
\t
\t

\t<section class=\"ftco-section ftco-no-pb ftco-no-pt\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"ftco-search d-flex justify-content-center\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12 nav-link-wrap\">
\t\t\t\t\t\t\t\t<div class=\"nav nav-pills text-center\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">

\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"v-pills-2-tab\" data-toggle=\"pill\" href=\"#v-pills-2\" role=\"tab\" aria-controls=\"v-pills-2\" aria-selected=\"false\">Logements</a>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-md-12 tab-wrap\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"tab-content\" id=\"v-pills-tabContent\">
\t\t\t\t\t\t\t\t\t\t{# <div class=\"form-field\">
\t\t\t\t\t\t\t\t\t{# <div class=\"icon\"><span class=\"fa fa-search\"></span></div>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"myInput\" placeholder=\"Chercher Logement\">
\t\t\t\t\t\t\t\t</div> #} 
   <div class=\"tab-pane fade show active\" id=\"v-pills-1\" role=\"tabpanel\" aria-labelledby=\"v-pills-nextgen-tab\">
    <form action=\"{{ path('app_logement_index') }}\" class=\"search-property-1\" method=\"get\">
        <div class=\"row no-gutters\">
            <div class=\"col-md d-flex\">
                <div class=\"form-group p-4 border-0\" id=\"filterSection\">
                    <label>Categories</label>
                    <select name=\"TypeLog\" id=\"categorySelect\" onchange=\"this.form.submit()\">
                        <option value=\"\">choose an option</option>
                        <option value=\"Hotel\" {% if selectedState == 'Hotel' %} selected {% endif %}>Hotel</option>
                        <option value=\"Villa\" {% if selectedState == 'Villa' %} selected {% endif %}>Villa</option>
                        <option value=\"Maison\" {% if selectedState == 'Maison' %} selected {% endif %}>Maison</option>
                        <option value=\"Appartement\" {% if selectedState == 'Appartement' %} selected {% endif %}>Appartement</option>

                    </select>
                </div>
            </div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group p-4 border-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"#\">Destination</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon\"><span class=\"fa fa-search\"></span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search place\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"#\">Price Limit</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"select-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-chevron-down\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"Prix\" id=\"prix\" class=\"form-control\" onchange=\"this.form.submit()\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Tous les prix</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0-100\"  {% if selectedPrice == '0-100' %} selected {% endif %} >Moins de 100 </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"100-200\"  {% if selectedPrice == '100-200' %} selected {% endif %} >100 - 200</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"200-300\"  {% if selectedPrice == '200-300' %} selected {% endif %} >200 - 300</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"300-500\"  {% if selectedPrice == '300-500' %} selected {% endif %} >300 - 500</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t <div class=\"col-md d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group d-flex w-100 border-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-field w-100 align-items-center d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Filter\" class=\"align-self-stretch form-control btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>


     
<section class=\"ftco-section\">
    <div class=\"container\">
        <div class=\"row\">
            {% for logement in logements %}
                <div class=\"col-md-4 ftco-animate fadeInUp ftco-animated\">
                    <div class=\"project-wrap hotel\">
\t\t\t\t\t<a href=\"{{ path('app_logement_show', {'id': logement.id}) }}\" class=\"img\" style=\"background-image: url('{{ asset('uploads/' ~ logement.image) }}');\">
    \t\t\t\t\t<span class=\"price\">{{ logement.Prix }}DT/person</span>
\t\t\t\t\t</a>
                        <div class=\"text p-4\">
\t\t\t\t\t\t {% if logement.NoteMoyenne == 1 %}
\t\t\t\t\t\t<p class=\"star mb-2\">
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t</p> 
\t\t\t\t\t\t\t{% elseif logement.NoteMoyenne == 2 %}  

\t\t\t\t\t\t<p class=\"star mb-2\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t</p> 
\t\t\t\t\t\t\t {% elseif logement.NoteMoyenne == 3 %}  

\t\t\t\t\t\t<p class=\"star mb-2\">

\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t</p> 
\t\t\t\t\t\t\t{% elseif logement.NoteMoyenne == 4 %}  

\t\t\t\t\t\t<p class=\"star mb-2\">

\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t</p> 
\t\t\t\t\t\t\t{% elseif logement.NoteMoyenne == 5 %} 

\t\t\t\t\t\t<p class=\"star mb-2\">

\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t</p> 
\t\t\t\t\t\t\t {% endif %}
                         

                            <span class=\"days\">un jour</span>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t<a href=\"#\">{{ logement.Typelog }}: {{ logement.nom }}</a>
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
                            <p class=\"location\"><span class=\"fa fa-map-marker\"></span>{{ logement.Localisation }}</p>
\t\t\t\t\t\t\t
                            <ul> 
\t\t\t\t\t\t\t 
                                <li><span class=\"fas fa-phone-alt\"></span> {{logement.num}} </li>
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<a href=\"{{ path('app_logement_map', {'id': logement.id}) }}\" class=\"btn btn-info rounded-pill m-2\" > <i class=\"fas fa-location-arrow\"></i> Show Map</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t{# -------------------------- Share ------------------------------------  #}
       \t\t\t\t\t\t  <div class=\"sharethis-inline-share-buttons\"></div>
         {# -------------------------- Share ------------------------------------  #}

                        </div>
                    </div>
                </div>
\t\t\t\t
            {% endfor %}
        </div>
    </div>
\t<div class=\"row\">
    <a href=\"{{ path('app_logement_new') }}\">Create new logement</a>
\t</div>
\t<th>
\t{# <div class=\"row mt-5\">
  <div class=\"col text-center\">
    <div class=\"block-27\">
      <ul>
        <li><a href=\"#\">&lt;</a></li>
        <li class=\"active\"><span></span></li>
        <li><a href=\"#\">2</a> </li>
        <li><a href=\"#\">3</a></li>
        <li><a href=\"#\">4</a></li>
        <li><a href=\"#\">5</a></li>
        <li><a href=\"#\">&gt;</a></li>
      </ul>
    </div>
  </div>
</div> #}
<div class=\"row mt-5\">
  <div class=\"col text-center\">
    <div class=\"block-27\">
      <ul>
        <li>
          <a href=\"#\">&lt;</a>
          {{ knp_pagination_render(logements,'logement/pagination.html.twig')}}

        </li>
      </ul>
    </div>
  </div>
</div>


\t<!-- Pagination -->
    <div class=\"d-flex justify-content-center\">
        {{ knp_pagination_render(logements,'logement/pagination.html.twig')}}
    </div>

</div>



  
{% endblock %}
", "logement/index.html.twig", "C:\\Users\\ASUS\\Desktop\\PiDev\\Projet-Pi-tfarhida\\templates\\logement\\index.html.twig");
    }
}
