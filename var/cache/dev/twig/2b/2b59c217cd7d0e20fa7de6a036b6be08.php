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

/* home/index.html.twig */
class __TwigTemplate_7abd8db80781eb475f5e7dd220b7d963 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "</head>
<body>
";
        // line 28
        $this->displayBlock('body', $context, $blocks);
        // line 828
        echo "\t\t</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Pacific - Free Bootstrap 4 Template by Colorlib";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css2?family=Arizonia&display=swap"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\">

\t\t<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\">
\t
\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.carousel.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.theme.default.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\">

\t<link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap-datepicker.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery.timepicker.css"), "html", null, true);
        echo "\">

\t<link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/flaticon.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">

\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 28
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 29
        echo "\t<nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" href=\"index.html\">Tfarhida<span>Bon plan</span></a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"oi oi-menu\"></span> Menu
\t\t\t</button>

\t\t\t<div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t<li class=\"nav-item active\"><a href=\"accueil\" class=\"nav-link\">Home</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"about.html\" class=\"nav-link\">About</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"activite\" class=\"nav-link\">Activite</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"hotel.html\" class=\"nav-link\">Hotel</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"blog.html\" class=\"nav-link\">Blog</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"contact.html\" class=\"nav-link\">Contact</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t ";
        // line 46
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46)) {
            // line 47
            echo "\t\t\t     ";
            // line 60
            echo "\t\t\t\t ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 61
                echo "\t\t\t\t <p><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard_index");
                echo "\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Admin</span> </a> </p>
\t\t\t\t ";
            }
            // line 63
            echo "\t\t\t\t  <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\"><i class=\"far fa-user text-primary mr-2 fa-2x \"></i>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), "fullName", [], "any", false, false, false, 63), "html", null, true);
            echo "</span>
            <p><a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\LogoutUrlExtension']->getLogoutPath("main"), "html", null, true);
            echo "\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Logout</span> </a> </p>
\t\t\t";
        } else {
            // line 66
            echo "\t\t\t<p><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Login</span> </a> </p>
\t\t\t<p><a href=\"";
            // line 67
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration");
            echo "\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Register</span> </a> </p>
            ";
        }
        // line 69
        echo "\t\t</div>
\t</nav>
\t<!-- END nav -->
\t
\t<div class=\"hero-wrap js-fullheight\" style=\"background-image: url('images/bg_5.jpg');\">
\t\t<div class=\"overlay\"></div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row no-gutters slider-text js-fullheight align-items-center\" data-scrollax-parent=\"true\">
\t\t\t\t<div class=\"col-md-7 ftco-animate\">
\t\t\t\t\t<span class=\"subheading\">Welcome to Pacific</span>
\t\t\t\t\t<h1 class=\"mb-4\">Discover Your Favorite Place with Us</h1>
\t\t\t\t\t<p class=\"caps\">Travel to the any corner of the world, without going around in circles</p>
\t\t\t\t</div>
\t\t\t\t<a href=\"https://vimeo.com/45830194\" class=\"icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4\">
\t\t\t\t\t<span class=\"fa fa-play\"></span>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>

\t<section class=\"ftco-section ftco-no-pb ftco-no-pt\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"ftco-search d-flex justify-content-center\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12 nav-link-wrap\">
\t\t\t\t\t\t\t\t<div class=\"nav nav-pills text-center\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link active mr-md-1\" id=\"v-pills-1-tab\" data-toggle=\"pill\" href=\"#v-pills-1\" role=\"tab\" aria-controls=\"v-pills-1\" aria-selected=\"true\">Search Tour</a>

\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"v-pills-2-tab\" data-toggle=\"pill\" href=\"#v-pills-2\" role=\"tab\" aria-controls=\"v-pills-2\" aria-selected=\"false\">Hotel</a>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12 tab-wrap\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"tab-content\" id=\"v-pills-tabContent\">

\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"v-pills-1\" role=\"tabpanel\" aria-labelledby=\"v-pills-nextgen-tab\">
\t\t\t\t\t\t\t\t\t\t<form action=\"#\" class=\"search-property-1\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row no-gutters\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group p-4 border-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"#\">Destination</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon\"><span class=\"fa fa-search\"></span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search place\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"#\">Check-in date</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon\"><span class=\"fa fa-calendar\"></span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control checkin_date\" placeholder=\"Check In Date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"#\">Check-out date</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon\"><span class=\"fa fa-calendar\"></span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control checkout_date\" placeholder=\"Check Out Date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"#\">Price Limit</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"select-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon\"><span class=\"fa fa-chevron-down\"></span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"\" id=\"\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$100</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$10,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$50,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$100,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$200,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$300,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$400,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$500,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$600,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$700,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$800,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$900,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$1,000,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$2,000,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group d-flex w-100 border-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-field w-100 align-items-center d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Search\" class=\"align-self-stretch form-control btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-2\" role=\"tabpanel\" aria-labelledby=\"v-pills-performance-tab\">
\t\t\t\t\t\t\t\t\t\t<form action=\"#\" class=\"search-property-1\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row no-gutters\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group p-4 border-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"#\">Destination</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon\"><span class=\"fa fa-search\"></span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search place\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"#\">Check-in date</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon\"><span class=\"fa fa-calendar\"></span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control checkin_date\" placeholder=\"Check In Date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"#\">Check-out date</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon\"><span class=\"fa fa-calendar\"></span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control checkout_date\" placeholder=\"Check Out Date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"#\">Price Limit</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"select-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon\"><span class=\"fa fa-chevron-down\"></span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"\" id=\"\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$100</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$10,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$50,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$100,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$200,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$300,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$400,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$500,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$600,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$700,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$800,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$900,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$1,000,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$2,000,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group d-flex w-100 border-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-field w-100 align-items-center d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Search\" class=\"align-self-stretch form-control btn btn-primary p-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"ftco-section services-section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row d-flex\">
\t\t\t\t\t<div class=\"col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center\">
\t\t\t\t\t\t<div class=\"w-100\">
\t\t\t\t\t\t\t<span class=\"subheading\">Welcome to Pacific</span>
\t\t\t\t\t\t\t<h2 class=\"mb-4\">It's time to start your adventure</h2>
\t\t\t\t\t\t\t<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
\t\t\t\t\t\t\tA small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
\t\t\t\t\t\t\t<p><a href=\"#\" class=\"btn btn-primary py-3 px-4\">Search Destination</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate\">
\t\t\t\t\t\t\t\t<div class=\"services services-1 color-1 d-block img\" style=\"background-image: url(images/services-1.jpg);\">
\t\t\t\t\t\t\t\t\t<div class=\"icon d-flex align-items-center justify-content-center\"><span class=\"flaticon-paragliding\"></span></div>
\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"heading mb-3\">Activities</h3>
\t\t\t\t\t\t\t\t\t\t<p>A small river named Duden flows by their place and supplies it with the necessary</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>      
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate\">
\t\t\t\t\t\t\t\t<div class=\"services services-1 color-2 d-block img\" style=\"background-image: url(images/services-2.jpg);\">
\t\t\t\t\t\t\t\t\t<div class=\"icon d-flex align-items-center justify-content-center\"><span class=\"flaticon-route\"></span></div>
\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"heading mb-3\">Travel Arrangements</h3>
\t\t\t\t\t\t\t\t\t\t<p>A small river named Duden flows by their place and supplies it with the necessary</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>    
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate\">
\t\t\t\t\t\t\t\t<div class=\"services services-1 color-3 d-block img\" style=\"background-image: url(images/services-3.jpg);\">
\t\t\t\t\t\t\t\t\t<div class=\"icon d-flex align-items-center justify-content-center\"><span class=\"flaticon-tour-guide\"></span></div>
\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"heading mb-3\">Private Guide</h3>
\t\t\t\t\t\t\t\t\t\t<p>A small river named Duden flows by their place and supplies it with the necessary</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>      
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate\">
\t\t\t\t\t\t\t\t<div class=\"services services-1 color-4 d-block img\" style=\"background-image: url(images/services-4.jpg);\">
\t\t\t\t\t\t\t\t\t<div class=\"icon d-flex align-items-center justify-content-center\"><span class=\"flaticon-map\"></span></div>
\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"heading mb-3\">Location Manager</h3>
\t\t\t\t\t\t\t\t\t\t<p>A small river named Duden flows by their place and supplies it with the necessary</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>      
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"ftco-section img ftco-select-destination\" style=\"background-image: url(images/bg_3.jpg);\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center pb-4\">
\t\t\t\t\t<div class=\"col-md-12 heading-section text-center ftco-animate\">
\t\t\t\t\t\t<span class=\"subheading\">Pacific Provide Places</span>
\t\t\t\t\t\t<h2 class=\"mb-4\">Select Your Destination</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"container container-2\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"carousel-destination owl-carousel ftco-animate\">
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<div class=\"project-destination\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"img\" style=\"background-image: url(images/place-1.jpg);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t<h3>Philippines</h3>
\t\t\t\t\t\t\t\t\t\t\t<span>8 Tours</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<div class=\"project-destination\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"img\" style=\"background-image: url(images/place-2.jpg);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t<h3>Canada</h3>
\t\t\t\t\t\t\t\t\t\t\t<span>2 Tours</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<div class=\"project-destination\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"img\" style=\"background-image: url(images/place-3.jpg);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t<h3>Thailand</h3>
\t\t\t\t\t\t\t\t\t\t\t<span>5 Tours</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<div class=\"project-destination\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"img\" style=\"background-image: url(images/place-4.jpg);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t<h3>Autralia</h3>
\t\t\t\t\t\t\t\t\t\t\t<span>5 Tours</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<div class=\"project-destination\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"img\" style=\"background-image: url(images/place-5.jpg);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t<h3>Greece</h3>
\t\t\t\t\t\t\t\t\t\t\t<span>7 Tours</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"ftco-section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center pb-4\">
\t\t\t\t\t<div class=\"col-md-12 heading-section text-center ftco-animate\">
\t\t\t\t\t\t<span class=\"subheading\">Destination</span>
\t\t\t\t\t\t<h2 class=\"mb-4\">Tour Destination</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4 ftco-animate\">
\t\t\t\t\t\t<div class=\"project-wrap\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"img\" style=\"background-image: url(images/destination-1.jpg);\">
\t\t\t\t\t\t\t\t<span class=\"price\">\$550/person</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"text p-4\">
\t\t\t\t\t\t\t\t<span class=\"days\">8 Days Tour</span>
\t\t\t\t\t\t\t\t<h3><a href=\"#\">Banaue Rice Terraces</a></h3>
\t\t\t\t\t\t\t\t<p class=\"location\"><span class=\"fa fa-map-marker\"></span> Banaue, Ifugao, Philippines</p>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><span class=\"flaticon-shower\"></span>2</li>
\t\t\t\t\t\t\t\t\t<li><span class=\"flaticon-king-size\"></span>3</li>
\t\t\t\t\t\t\t\t\t<li><span class=\"flaticon-mountains\"></span>Near Mountain</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 ftco-animate\">
\t\t\t\t\t\t<div class=\"project-wrap\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"img\" style=\"background-image: url(images/destination-2.jpg);\">
\t\t\t\t\t\t\t\t<span class=\"price\">\$550/person</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"text p-4\">
\t\t\t\t\t\t\t\t<span class=\"days\">10 Days Tour</span>
\t\t\t\t\t\t\t\t<h3><a href=\"#\">Banaue Rice Terraces</a></h3>
\t\t\t\t\t\t\t\t<p class=\"location\"><span class=\"fa fa-map-marker\"></span> Banaue, Ifugao, Philippines</p>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><span class=\"flaticon-shower\"></span>2</li>
\t\t\t\t\t\t\t\t\t<li><span class=\"flaticon-king-size\"></span>3</li>
\t\t\t\t\t\t\t\t\t<li><span class=\"flaticon-sun-umbrella\"></span>Near Beach</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 ftco-animate\">
\t\t\t\t\t\t<div class=\"project-wrap\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"img\" style=\"background-image: url(images/destination-3.jpg);\">
\t\t\t\t\t\t\t\t<span class=\"price\">\$550/person</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"text p-4\">
\t\t\t\t\t\t\t\t<span class=\"days\">7 Days Tour</span>
\t\t\t\t\t\t\t\t<h3><a href=\"#\">Banaue Rice Terraces</a></h3>
\t\t\t\t\t\t\t\t<p class=\"location\"><span class=\"fa fa-map-marker\"></span> Banaue, Ifugao, Philippines</p>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><span class=\"flaticon-shower\"></span>2</li>
\t\t\t\t\t\t\t\t\t<li><span class=\"flaticon-king-size\"></span>3</li>
\t\t\t\t\t\t\t\t\t<li><span class=\"flaticon-sun-umbrella\"></span>Near Beach</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4 ftco-animate\">
\t\t\t\t\t\t<div class=\"project-wrap\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"img\" style=\"background-image: url(images/destination-4.jpg);\">
\t\t\t\t\t\t\t\t<span class=\"price\">\$550/person</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"text p-4\">
\t\t\t\t\t\t\t\t<span class=\"days\">8 Days Tour</span>
\t\t\t\t\t\t\t\t<h3><a href=\"#\">Banaue Rice Terraces</a></h3>
\t\t\t\t\t\t\t\t<p class=\"location\"><span class=\"fa fa-map-marker\"></span> Banaue, Ifugao, Philippines</p>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><span class=\"flaticon-shower\"></span>2</li>
\t\t\t\t\t\t\t\t\t<li><span class=\"flaticon-king-size\"></span>3</li>
\t\t\t\t\t\t\t\t\t<li><span class=\"flaticon-sun-umbrella\"></span>Near Beach</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 ftco-animate\">
\t\t\t\t\t\t<div class=\"project-wrap\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"img\" style=\"background-image: url(images/destination-5.jpg);\">
\t\t\t\t\t\t\t\t<span class=\"price\">\$550/person</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"text p-4\">
\t\t\t\t\t\t\t\t<span class=\"days\">10 Days Tour</span>
\t\t\t\t\t\t\t\t<h3><a href=\"#\">Banaue Rice Terraces</a></h3>
\t\t\t\t\t\t\t\t<p class=\"location\"><span class=\"fa fa-map-marker\"></span> Banaue, Ifugao, Philippines</p>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><span class=\"flaticon-shower\"></span>2</li>
\t\t\t\t\t\t\t\t\t<li><span class=\"flaticon-king-size\"></span>3</li>
\t\t\t\t\t\t\t\t\t<li><span class=\"flaticon-sun-umbrella\"></span>Near Beach</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 ftco-animate\">
\t\t\t\t\t\t<div class=\"project-wrap\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"img\" style=\"background-image: url(images/destination-6.jpg);\">
\t\t\t\t\t\t\t\t<span class=\"price\">\$550/person</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"text p-4\">
\t\t\t\t\t\t\t\t<span class=\"days\">7 Days Tour</span>
\t\t\t\t\t\t\t\t<h3><a href=\"#\">Banaue Rice Terraces</a></h3>
\t\t\t\t\t\t\t\t<p class=\"location\"><span class=\"fa fa-map-marker\"></span> Banaue, Ifugao, Philippines</p>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><span class=\"flaticon-shower\"></span>2</li>
\t\t\t\t\t\t\t\t\t<li><span class=\"flaticon-king-size\"></span>3</li>
\t\t\t\t\t\t\t\t\t<li><span class=\"flaticon-sun-umbrella\"></span>Near Beach</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t
\t\t<section class=\"ftco-section ftco-about img\"style=\"background-image: url(images/bg_4.jpg);\">
\t\t\t<div class=\"overlay\"></div>
\t\t\t<div class=\"container py-md-5\">
\t\t\t\t<div class=\"row py-md-5\">
\t\t\t\t\t<div class=\"col-md d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t<a href=\"https://vimeo.com/45830194\" class=\"icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4\">
\t\t\t\t\t\t\t<span class=\"fa fa-play\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"ftco-section ftco-about ftco-no-pt img\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row d-flex\">
\t\t\t\t\t<div class=\"col-md-12 about-intro\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6 d-flex align-items-stretch\">
\t\t\t\t\t\t\t\t<div class=\"img d-flex w-100 align-items-center justify-content-center\" style=\"background-image:url(images/about-1.jpg);\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 pl-md-5 py-5\">
\t\t\t\t\t\t\t\t<div class=\"row justify-content-start pb-3\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 heading-section ftco-animate\">
\t\t\t\t\t\t\t\t\t\t<span class=\"subheading\">About Us</span>
\t\t\t\t\t\t\t\t\t\t<h2 class=\"mb-4\">Make Your Tour Memorable and Safe With Us</h2>
\t\t\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
\t\t\t\t\t\t\t\t\t\t<p><a href=\"#\" class=\"btn btn-primary\">Book Your Destination</a></p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"ftco-section testimony-section bg-bottom\" style=\"background-image: url(images/bg_1.jpg);\">
\t\t\t<div class=\"overlay\"></div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center pb-4\">
\t\t\t\t\t<div class=\"col-md-7 text-center heading-section heading-section-white ftco-animate\">
\t\t\t\t\t\t<span class=\"subheading\">Testimonial</span>
\t\t\t\t\t\t<h2 class=\"mb-4\">Tourist Feedback</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row ftco-animate\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"carousel-testimony owl-carousel\">
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<div class=\"testimony-wrap py-4\">
\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t<p class=\"star\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user-img\" style=\"background-image: url(images/person_1.jpg)\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"pl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"name\">Roger Scott</p>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"position\">Marketing Manager</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<div class=\"testimony-wrap py-4\">
\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t<p class=\"star\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user-img\" style=\"background-image: url(images/person_2.jpg)\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"pl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"name\">Roger Scott</p>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"position\">Marketing Manager</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<div class=\"testimony-wrap py-4\">
\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t<p class=\"star\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user-img\" style=\"background-image: url(images/person_3.jpg)\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"pl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"name\">Roger Scott</p>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"position\">Marketing Manager</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<div class=\"testimony-wrap py-4\">
\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t<p class=\"star\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user-img\" style=\"background-image: url(images/person_1.jpg)\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"pl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"name\">Roger Scott</p>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"position\">Marketing Manager</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<div class=\"testimony-wrap py-4\">
\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t<p class=\"star\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user-img\" style=\"background-image: url(images/person_2.jpg)\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"pl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"name\">Roger Scott</p>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"position\">Marketing Manager</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>


\t\t<section class=\"ftco-section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center pb-4\">
\t\t\t\t\t<div class=\"col-md-12 heading-section text-center ftco-animate\">
\t\t\t\t\t\t<span class=\"subheading\">Our Blog</span>
\t\t\t\t\t\t<h2 class=\"mb-4\">Recent Post</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row d-flex\">
\t\t\t\t\t<div class=\"col-md-4 d-flex ftco-animate\">
\t\t\t\t\t\t<div class=\"blog-entry justify-content-end\">
\t\t\t\t\t\t\t<a href=\"blog-single.html\" class=\"block-20\" style=\"background-image: url('images/image_1.jpg');\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mb-4 topp\">
\t\t\t\t\t\t\t\t\t<div class=\"one\">
\t\t\t\t\t\t\t\t\t\t<span class=\"day\">11</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"two\">
\t\t\t\t\t\t\t\t\t\t<span class=\"yr\">2020</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"mos\">September</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h3 class=\"heading\"><a href=\"#\">Most Popular Place In This World</a></h3>
\t\t\t\t\t\t\t\t<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
\t\t\t\t\t\t\t\t<p><a href=\"#\" class=\"btn btn-primary\">Read more</a></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 d-flex ftco-animate\">
\t\t\t\t\t\t<div class=\"blog-entry justify-content-end\">
\t\t\t\t\t\t\t<a href=\"blog-single.html\" class=\"block-20\" style=\"background-image: url('images/image_2.jpg');\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mb-4 topp\">
\t\t\t\t\t\t\t\t\t<div class=\"one\">
\t\t\t\t\t\t\t\t\t\t<span class=\"day\">11</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"two\">
\t\t\t\t\t\t\t\t\t\t<span class=\"yr\">2020</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"mos\">September</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h3 class=\"heading\"><a href=\"#\">Most Popular Place In This World</a></h3>
\t\t\t\t\t\t\t\t<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
\t\t\t\t\t\t\t\t<p><a href=\"#\" class=\"btn btn-primary\">Read more</a></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 d-flex ftco-animate\">
\t\t\t\t\t\t<div class=\"blog-entry\">
\t\t\t\t\t\t\t<a href=\"blog-single.html\" class=\"block-20\" style=\"background-image: url('images/image_3.jpg');\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mb-4 topp\">
\t\t\t\t\t\t\t\t\t<div class=\"one\">
\t\t\t\t\t\t\t\t\t\t<span class=\"day\">11</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"two\">
\t\t\t\t\t\t\t\t\t\t<span class=\"yr\">2020</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"mos\">September</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h3 class=\"heading\"><a href=\"#\">Most Popular Place In This World</a></h3>
\t\t\t\t\t\t\t\t<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
\t\t\t\t\t\t\t\t<p><a href=\"#\" class=\"btn btn-primary\">Read more</a></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"ftco-intro ftco-section ftco-no-pt\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t\t\t<div class=\"img\"  style=\"background-image: url(images/bg_2.jpg);\">
\t\t\t\t\t\t\t<div class=\"overlay\"></div>
\t\t\t\t\t\t\t<h2>We Are Pacific A Travel Agency</h2>
\t\t\t\t\t\t\t<p>We can manage your dream building A small river named Duden flows by their place</p>
\t\t\t\t\t\t\t<p class=\"mb-0\"><a href=\"#\" class=\"btn btn-primary px-4 py-3\">Ask For A Quote</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<footer class=\"ftco-footer bg-bottom ftco-no-pt\" style=\"background-image: url(images/bg_3.jpg);\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row mb-5\">
\t\t\t\t\t<div class=\"col-md pt-5\">
\t\t\t\t\t\t<div class=\"ftco-footer-widget pt-md-5 mb-4\">
\t\t\t\t\t\t\t<h2 class=\"ftco-heading-2\">About</h2>
\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
\t\t\t\t\t\t\t<ul class=\"ftco-footer-social list-unstyled float-md-left float-lft\">
\t\t\t\t\t\t\t\t<li class=\"ftco-animate\"><a href=\"#\"><span class=\"fa fa-twitter\"></span></a></li>
\t\t\t\t\t\t\t\t<li class=\"ftco-animate\"><a href=\"#\"><span class=\"fa fa-facebook\"></span></a></li>
\t\t\t\t\t\t\t\t<li class=\"ftco-animate\"><a href=\"#\"><span class=\"fa fa-instagram\"></span></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md pt-5 border-left\">
\t\t\t\t\t\t<div class=\"ftco-footer-widget pt-md-5 mb-4 ml-md-5\">
\t\t\t\t\t\t\t<h2 class=\"ftco-heading-2\">Infromation</h2>
\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"py-2 d-block\">Online Enquiry</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"py-2 d-block\">General Enquiries</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"py-2 d-block\">Booking Conditions</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"py-2 d-block\">Privacy and Policy</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"py-2 d-block\">Refund Policy</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"py-2 d-block\">Call Us</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md pt-5 border-left\">
\t\t\t\t\t\t<div class=\"ftco-footer-widget pt-md-5 mb-4\">
\t\t\t\t\t\t\t<h2 class=\"ftco-heading-2\">Experience</h2>
\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"py-2 d-block\">Adventure</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"py-2 d-block\">Hotel and Restaurant</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"py-2 d-block\">Beach</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"py-2 d-block\">Nature</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"py-2 d-block\">Camping</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"py-2 d-block\">Party</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md pt-5 border-left\">
\t\t\t\t\t\t<div class=\"ftco-footer-widget pt-md-5 mb-4\">
\t\t\t\t\t\t\t<h2 class=\"ftco-heading-2\">Have a Questions?</h2>
\t\t\t\t\t\t\t<div class=\"block-23 mb-3\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><span class=\"icon fa fa-map-marker\"></span><span class=\"text\">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon fa fa-phone\"></span><span class=\"text\">+2 392 3929 210</span></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon fa fa-paper-plane\"></span><span class=\"text\">info@yourdomain.com</span></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12 text-center\">

\t\t\t\t\t\t<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
\t\t\t\t\t\t\tCopyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
\t\t\t\t\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</footer>
\t\t\t
\t\t\t

\t\t\t<!-- loader -->
\t\t\t<div id=\"ftco-loader\" class=\"show fullscreen\"><svg class=\"circular\" width=\"48px\" height=\"48px\"><circle class=\"path-bg\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke=\"#eeeeee\"/><circle class=\"path\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke=\"#F96D00\"/></svg></div>

";
        // line 809
        $this->displayBlock('js', $context, $blocks);
        // line 826
        echo "\t\t</body>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 809
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 810
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 811
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-migrate-3.0.1.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 812
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 813
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 814
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 815
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 816
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 817
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 818
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 819
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.animateNumber.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 820
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 821
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scrollax.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 822
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 823
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/google-map.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 824
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  1048 => 824,  1044 => 823,  1040 => 822,  1036 => 821,  1032 => 820,  1028 => 819,  1024 => 818,  1020 => 817,  1016 => 816,  1012 => 815,  1008 => 814,  1004 => 813,  1000 => 812,  996 => 811,  991 => 810,  981 => 809,  970 => 826,  968 => 809,  226 => 69,  221 => 67,  216 => 66,  211 => 64,  206 => 63,  200 => 61,  197 => 60,  195 => 47,  193 => 46,  174 => 29,  164 => 28,  151 => 23,  147 => 22,  142 => 20,  138 => 19,  133 => 17,  129 => 16,  125 => 15,  120 => 13,  115 => 11,  110 => 9,  105 => 8,  95 => 7,  76 => 4,  66 => 828,  64 => 28,  60 => 26,  58 => 7,  52 => 4,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<title>{% block title %}Pacific - Free Bootstrap 4 Template by Colorlib{% endblock %}</title>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t{% block stylesheets%}
\t<link href=\"{{asset('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900')}}\" rel=\"stylesheet\">
\t<link href=\"{{asset('https://fonts.googleapis.com/css2?family=Arizonia&display=swap')}}\" rel=\"stylesheet\">

\t<link rel=\"stylesheet\" href=\"{{asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}\">

\t\t<link rel=\"stylesheet\" href=\"{{asset('css/animate.css')}}\">
\t
\t<link rel=\"stylesheet\" href=\"{{asset('css/owl.carousel.min.css')}}\">
\t<link rel=\"stylesheet\" href=\"{{asset('css/owl.theme.default.min.css')}}\">
\t<link rel=\"stylesheet\" href=\"{{asset('css/magnific-popup.css')}}\">

\t<link rel=\"stylesheet\" href=\"{{asset('css/bootstrap-datepicker.css')}}\">
\t<link rel=\"stylesheet\" href=\"{{asset('css/jquery.timepicker.css')}}\">

\t<link rel=\"stylesheet\" href=\"{{asset('css/flaticon.css')}}\">
\t<link rel=\"stylesheet\" href=\"{{asset('css/style.css')}}\">

\t{% endblock %}
</head>
<body>
{% block body%}
\t<nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" href=\"index.html\">Tfarhida<span>Bon plan</span></a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"oi oi-menu\"></span> Menu
\t\t\t</button>

\t\t\t<div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t<li class=\"nav-item active\"><a href=\"accueil\" class=\"nav-link\">Home</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"about.html\" class=\"nav-link\">About</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"activite\" class=\"nav-link\">Activite</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"hotel.html\" class=\"nav-link\">Hotel</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"blog.html\" class=\"nav-link\">Blog</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"contact.html\" class=\"nav-link\">Contact</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t {% if app.user %}
\t\t\t     {# {% if is_granted('ROLE_USER') %}
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            {{ app.user.fullName }}
                        </a>
                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                        </div>
                    </li>
                    {% endif %} #}
\t\t\t\t {% if is_granted('ROLE_ADMIN') %}
\t\t\t\t <p><a href=\"{{ path('admin_dashboard_index') }}\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Admin</span> </a> </p>
\t\t\t\t {% endif %}
\t\t\t\t  <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\"><i class=\"far fa-user text-primary mr-2 fa-2x \"></i>{{ app.user.fullName }}</span>
            <p><a href=\"{{ logout_path('main') }}\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Logout</span> </a> </p>
\t\t\t{% else %}
\t\t\t<p><a href=\"{{ path('login') }}\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Login</span> </a> </p>
\t\t\t<p><a href=\"{{ path('registration') }}\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Register</span> </a> </p>
            {% endif %}
\t\t</div>
\t</nav>
\t<!-- END nav -->
\t
\t<div class=\"hero-wrap js-fullheight\" style=\"background-image: url('images/bg_5.jpg');\">
\t\t<div class=\"overlay\"></div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row no-gutters slider-text js-fullheight align-items-center\" data-scrollax-parent=\"true\">
\t\t\t\t<div class=\"col-md-7 ftco-animate\">
\t\t\t\t\t<span class=\"subheading\">Welcome to Pacific</span>
\t\t\t\t\t<h1 class=\"mb-4\">Discover Your Favorite Place with Us</h1>
\t\t\t\t\t<p class=\"caps\">Travel to the any corner of the world, without going around in circles</p>
\t\t\t\t</div>
\t\t\t\t<a href=\"https://vimeo.com/45830194\" class=\"icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4\">
\t\t\t\t\t<span class=\"fa fa-play\"></span>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>

\t<section class=\"ftco-section ftco-no-pb ftco-no-pt\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"ftco-search d-flex justify-content-center\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12 nav-link-wrap\">
\t\t\t\t\t\t\t\t<div class=\"nav nav-pills text-center\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link active mr-md-1\" id=\"v-pills-1-tab\" data-toggle=\"pill\" href=\"#v-pills-1\" role=\"tab\" aria-controls=\"v-pills-1\" aria-selected=\"true\">Search Tour</a>

\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"v-pills-2-tab\" data-toggle=\"pill\" href=\"#v-pills-2\" role=\"tab\" aria-controls=\"v-pills-2\" aria-selected=\"false\">Hotel</a>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12 tab-wrap\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"tab-content\" id=\"v-pills-tabContent\">

\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"v-pills-1\" role=\"tabpanel\" aria-labelledby=\"v-pills-nextgen-tab\">
\t\t\t\t\t\t\t\t\t\t<form action=\"#\" class=\"search-property-1\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row no-gutters\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group p-4 border-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"#\">Destination</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon\"><span class=\"fa fa-search\"></span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search place\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"#\">Check-in date</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon\"><span class=\"fa fa-calendar\"></span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control checkin_date\" placeholder=\"Check In Date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"#\">Check-out date</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon\"><span class=\"fa fa-calendar\"></span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control checkout_date\" placeholder=\"Check Out Date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"#\">Price Limit</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"select-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon\"><span class=\"fa fa-chevron-down\"></span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"\" id=\"\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$100</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$10,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$50,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$100,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$200,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$300,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$400,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$500,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$600,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$700,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$800,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$900,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$1,000,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$2,000,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group d-flex w-100 border-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-field w-100 align-items-center d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Search\" class=\"align-self-stretch form-control btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"v-pills-2\" role=\"tabpanel\" aria-labelledby=\"v-pills-performance-tab\">
\t\t\t\t\t\t\t\t\t\t<form action=\"#\" class=\"search-property-1\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row no-gutters\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group p-4 border-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"#\">Destination</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon\"><span class=\"fa fa-search\"></span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search place\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"#\">Check-in date</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon\"><span class=\"fa fa-calendar\"></span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control checkin_date\" placeholder=\"Check In Date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"#\">Check-out date</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon\"><span class=\"fa fa-calendar\"></span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control checkout_date\" placeholder=\"Check Out Date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"#\">Price Limit</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"select-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon\"><span class=\"fa fa-chevron-down\"></span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"\" id=\"\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$100</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$10,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$50,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$100,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$200,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$300,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$400,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$500,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$600,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$700,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$800,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$900,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$1,000,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">\$2,000,000</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group d-flex w-100 border-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-field w-100 align-items-center d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Search\" class=\"align-self-stretch form-control btn btn-primary p-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"ftco-section services-section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row d-flex\">
\t\t\t\t\t<div class=\"col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center\">
\t\t\t\t\t\t<div class=\"w-100\">
\t\t\t\t\t\t\t<span class=\"subheading\">Welcome to Pacific</span>
\t\t\t\t\t\t\t<h2 class=\"mb-4\">It's time to start your adventure</h2>
\t\t\t\t\t\t\t<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
\t\t\t\t\t\t\tA small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
\t\t\t\t\t\t\t<p><a href=\"#\" class=\"btn btn-primary py-3 px-4\">Search Destination</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate\">
\t\t\t\t\t\t\t\t<div class=\"services services-1 color-1 d-block img\" style=\"background-image: url(images/services-1.jpg);\">
\t\t\t\t\t\t\t\t\t<div class=\"icon d-flex align-items-center justify-content-center\"><span class=\"flaticon-paragliding\"></span></div>
\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"heading mb-3\">Activities</h3>
\t\t\t\t\t\t\t\t\t\t<p>A small river named Duden flows by their place and supplies it with the necessary</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>      
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate\">
\t\t\t\t\t\t\t\t<div class=\"services services-1 color-2 d-block img\" style=\"background-image: url(images/services-2.jpg);\">
\t\t\t\t\t\t\t\t\t<div class=\"icon d-flex align-items-center justify-content-center\"><span class=\"flaticon-route\"></span></div>
\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"heading mb-3\">Travel Arrangements</h3>
\t\t\t\t\t\t\t\t\t\t<p>A small river named Duden flows by their place and supplies it with the necessary</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>    
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate\">
\t\t\t\t\t\t\t\t<div class=\"services services-1 color-3 d-block img\" style=\"background-image: url(images/services-3.jpg);\">
\t\t\t\t\t\t\t\t\t<div class=\"icon d-flex align-items-center justify-content-center\"><span class=\"flaticon-tour-guide\"></span></div>
\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"heading mb-3\">Private Guide</h3>
\t\t\t\t\t\t\t\t\t\t<p>A small river named Duden flows by their place and supplies it with the necessary</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>      
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate\">
\t\t\t\t\t\t\t\t<div class=\"services services-1 color-4 d-block img\" style=\"background-image: url(images/services-4.jpg);\">
\t\t\t\t\t\t\t\t\t<div class=\"icon d-flex align-items-center justify-content-center\"><span class=\"flaticon-map\"></span></div>
\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"heading mb-3\">Location Manager</h3>
\t\t\t\t\t\t\t\t\t\t<p>A small river named Duden flows by their place and supplies it with the necessary</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>      
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"ftco-section img ftco-select-destination\" style=\"background-image: url(images/bg_3.jpg);\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center pb-4\">
\t\t\t\t\t<div class=\"col-md-12 heading-section text-center ftco-animate\">
\t\t\t\t\t\t<span class=\"subheading\">Pacific Provide Places</span>
\t\t\t\t\t\t<h2 class=\"mb-4\">Select Your Destination</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"container container-2\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"carousel-destination owl-carousel ftco-animate\">
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<div class=\"project-destination\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"img\" style=\"background-image: url(images/place-1.jpg);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t<h3>Philippines</h3>
\t\t\t\t\t\t\t\t\t\t\t<span>8 Tours</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<div class=\"project-destination\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"img\" style=\"background-image: url(images/place-2.jpg);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t<h3>Canada</h3>
\t\t\t\t\t\t\t\t\t\t\t<span>2 Tours</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<div class=\"project-destination\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"img\" style=\"background-image: url(images/place-3.jpg);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t<h3>Thailand</h3>
\t\t\t\t\t\t\t\t\t\t\t<span>5 Tours</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<div class=\"project-destination\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"img\" style=\"background-image: url(images/place-4.jpg);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t<h3>Autralia</h3>
\t\t\t\t\t\t\t\t\t\t\t<span>5 Tours</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<div class=\"project-destination\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"img\" style=\"background-image: url(images/place-5.jpg);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t<h3>Greece</h3>
\t\t\t\t\t\t\t\t\t\t\t<span>7 Tours</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"ftco-section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center pb-4\">
\t\t\t\t\t<div class=\"col-md-12 heading-section text-center ftco-animate\">
\t\t\t\t\t\t<span class=\"subheading\">Destination</span>
\t\t\t\t\t\t<h2 class=\"mb-4\">Tour Destination</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4 ftco-animate\">
\t\t\t\t\t\t<div class=\"project-wrap\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"img\" style=\"background-image: url(images/destination-1.jpg);\">
\t\t\t\t\t\t\t\t<span class=\"price\">\$550/person</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"text p-4\">
\t\t\t\t\t\t\t\t<span class=\"days\">8 Days Tour</span>
\t\t\t\t\t\t\t\t<h3><a href=\"#\">Banaue Rice Terraces</a></h3>
\t\t\t\t\t\t\t\t<p class=\"location\"><span class=\"fa fa-map-marker\"></span> Banaue, Ifugao, Philippines</p>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><span class=\"flaticon-shower\"></span>2</li>
\t\t\t\t\t\t\t\t\t<li><span class=\"flaticon-king-size\"></span>3</li>
\t\t\t\t\t\t\t\t\t<li><span class=\"flaticon-mountains\"></span>Near Mountain</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 ftco-animate\">
\t\t\t\t\t\t<div class=\"project-wrap\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"img\" style=\"background-image: url(images/destination-2.jpg);\">
\t\t\t\t\t\t\t\t<span class=\"price\">\$550/person</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"text p-4\">
\t\t\t\t\t\t\t\t<span class=\"days\">10 Days Tour</span>
\t\t\t\t\t\t\t\t<h3><a href=\"#\">Banaue Rice Terraces</a></h3>
\t\t\t\t\t\t\t\t<p class=\"location\"><span class=\"fa fa-map-marker\"></span> Banaue, Ifugao, Philippines</p>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><span class=\"flaticon-shower\"></span>2</li>
\t\t\t\t\t\t\t\t\t<li><span class=\"flaticon-king-size\"></span>3</li>
\t\t\t\t\t\t\t\t\t<li><span class=\"flaticon-sun-umbrella\"></span>Near Beach</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 ftco-animate\">
\t\t\t\t\t\t<div class=\"project-wrap\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"img\" style=\"background-image: url(images/destination-3.jpg);\">
\t\t\t\t\t\t\t\t<span class=\"price\">\$550/person</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"text p-4\">
\t\t\t\t\t\t\t\t<span class=\"days\">7 Days Tour</span>
\t\t\t\t\t\t\t\t<h3><a href=\"#\">Banaue Rice Terraces</a></h3>
\t\t\t\t\t\t\t\t<p class=\"location\"><span class=\"fa fa-map-marker\"></span> Banaue, Ifugao, Philippines</p>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><span class=\"flaticon-shower\"></span>2</li>
\t\t\t\t\t\t\t\t\t<li><span class=\"flaticon-king-size\"></span>3</li>
\t\t\t\t\t\t\t\t\t<li><span class=\"flaticon-sun-umbrella\"></span>Near Beach</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-4 ftco-animate\">
\t\t\t\t\t\t<div class=\"project-wrap\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"img\" style=\"background-image: url(images/destination-4.jpg);\">
\t\t\t\t\t\t\t\t<span class=\"price\">\$550/person</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"text p-4\">
\t\t\t\t\t\t\t\t<span class=\"days\">8 Days Tour</span>
\t\t\t\t\t\t\t\t<h3><a href=\"#\">Banaue Rice Terraces</a></h3>
\t\t\t\t\t\t\t\t<p class=\"location\"><span class=\"fa fa-map-marker\"></span> Banaue, Ifugao, Philippines</p>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><span class=\"flaticon-shower\"></span>2</li>
\t\t\t\t\t\t\t\t\t<li><span class=\"flaticon-king-size\"></span>3</li>
\t\t\t\t\t\t\t\t\t<li><span class=\"flaticon-sun-umbrella\"></span>Near Beach</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 ftco-animate\">
\t\t\t\t\t\t<div class=\"project-wrap\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"img\" style=\"background-image: url(images/destination-5.jpg);\">
\t\t\t\t\t\t\t\t<span class=\"price\">\$550/person</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"text p-4\">
\t\t\t\t\t\t\t\t<span class=\"days\">10 Days Tour</span>
\t\t\t\t\t\t\t\t<h3><a href=\"#\">Banaue Rice Terraces</a></h3>
\t\t\t\t\t\t\t\t<p class=\"location\"><span class=\"fa fa-map-marker\"></span> Banaue, Ifugao, Philippines</p>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><span class=\"flaticon-shower\"></span>2</li>
\t\t\t\t\t\t\t\t\t<li><span class=\"flaticon-king-size\"></span>3</li>
\t\t\t\t\t\t\t\t\t<li><span class=\"flaticon-sun-umbrella\"></span>Near Beach</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 ftco-animate\">
\t\t\t\t\t\t<div class=\"project-wrap\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"img\" style=\"background-image: url(images/destination-6.jpg);\">
\t\t\t\t\t\t\t\t<span class=\"price\">\$550/person</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"text p-4\">
\t\t\t\t\t\t\t\t<span class=\"days\">7 Days Tour</span>
\t\t\t\t\t\t\t\t<h3><a href=\"#\">Banaue Rice Terraces</a></h3>
\t\t\t\t\t\t\t\t<p class=\"location\"><span class=\"fa fa-map-marker\"></span> Banaue, Ifugao, Philippines</p>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><span class=\"flaticon-shower\"></span>2</li>
\t\t\t\t\t\t\t\t\t<li><span class=\"flaticon-king-size\"></span>3</li>
\t\t\t\t\t\t\t\t\t<li><span class=\"flaticon-sun-umbrella\"></span>Near Beach</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t
\t\t<section class=\"ftco-section ftco-about img\"style=\"background-image: url(images/bg_4.jpg);\">
\t\t\t<div class=\"overlay\"></div>
\t\t\t<div class=\"container py-md-5\">
\t\t\t\t<div class=\"row py-md-5\">
\t\t\t\t\t<div class=\"col-md d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t<a href=\"https://vimeo.com/45830194\" class=\"icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4\">
\t\t\t\t\t\t\t<span class=\"fa fa-play\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"ftco-section ftco-about ftco-no-pt img\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row d-flex\">
\t\t\t\t\t<div class=\"col-md-12 about-intro\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-6 d-flex align-items-stretch\">
\t\t\t\t\t\t\t\t<div class=\"img d-flex w-100 align-items-center justify-content-center\" style=\"background-image:url(images/about-1.jpg);\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 pl-md-5 py-5\">
\t\t\t\t\t\t\t\t<div class=\"row justify-content-start pb-3\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 heading-section ftco-animate\">
\t\t\t\t\t\t\t\t\t\t<span class=\"subheading\">About Us</span>
\t\t\t\t\t\t\t\t\t\t<h2 class=\"mb-4\">Make Your Tour Memorable and Safe With Us</h2>
\t\t\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
\t\t\t\t\t\t\t\t\t\t<p><a href=\"#\" class=\"btn btn-primary\">Book Your Destination</a></p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"ftco-section testimony-section bg-bottom\" style=\"background-image: url(images/bg_1.jpg);\">
\t\t\t<div class=\"overlay\"></div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center pb-4\">
\t\t\t\t\t<div class=\"col-md-7 text-center heading-section heading-section-white ftco-animate\">
\t\t\t\t\t\t<span class=\"subheading\">Testimonial</span>
\t\t\t\t\t\t<h2 class=\"mb-4\">Tourist Feedback</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row ftco-animate\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"carousel-testimony owl-carousel\">
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<div class=\"testimony-wrap py-4\">
\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t<p class=\"star\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user-img\" style=\"background-image: url(images/person_1.jpg)\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"pl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"name\">Roger Scott</p>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"position\">Marketing Manager</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<div class=\"testimony-wrap py-4\">
\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t<p class=\"star\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user-img\" style=\"background-image: url(images/person_2.jpg)\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"pl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"name\">Roger Scott</p>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"position\">Marketing Manager</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<div class=\"testimony-wrap py-4\">
\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t<p class=\"star\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user-img\" style=\"background-image: url(images/person_3.jpg)\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"pl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"name\">Roger Scott</p>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"position\">Marketing Manager</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<div class=\"testimony-wrap py-4\">
\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t<p class=\"star\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user-img\" style=\"background-image: url(images/person_1.jpg)\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"pl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"name\">Roger Scott</p>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"position\">Marketing Manager</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<div class=\"testimony-wrap py-4\">
\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t<p class=\"star\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"user-img\" style=\"background-image: url(images/person_2.jpg)\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"pl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"name\">Roger Scott</p>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"position\">Marketing Manager</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>


\t\t<section class=\"ftco-section\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center pb-4\">
\t\t\t\t\t<div class=\"col-md-12 heading-section text-center ftco-animate\">
\t\t\t\t\t\t<span class=\"subheading\">Our Blog</span>
\t\t\t\t\t\t<h2 class=\"mb-4\">Recent Post</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row d-flex\">
\t\t\t\t\t<div class=\"col-md-4 d-flex ftco-animate\">
\t\t\t\t\t\t<div class=\"blog-entry justify-content-end\">
\t\t\t\t\t\t\t<a href=\"blog-single.html\" class=\"block-20\" style=\"background-image: url('images/image_1.jpg');\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mb-4 topp\">
\t\t\t\t\t\t\t\t\t<div class=\"one\">
\t\t\t\t\t\t\t\t\t\t<span class=\"day\">11</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"two\">
\t\t\t\t\t\t\t\t\t\t<span class=\"yr\">2020</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"mos\">September</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h3 class=\"heading\"><a href=\"#\">Most Popular Place In This World</a></h3>
\t\t\t\t\t\t\t\t<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
\t\t\t\t\t\t\t\t<p><a href=\"#\" class=\"btn btn-primary\">Read more</a></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 d-flex ftco-animate\">
\t\t\t\t\t\t<div class=\"blog-entry justify-content-end\">
\t\t\t\t\t\t\t<a href=\"blog-single.html\" class=\"block-20\" style=\"background-image: url('images/image_2.jpg');\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mb-4 topp\">
\t\t\t\t\t\t\t\t\t<div class=\"one\">
\t\t\t\t\t\t\t\t\t\t<span class=\"day\">11</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"two\">
\t\t\t\t\t\t\t\t\t\t<span class=\"yr\">2020</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"mos\">September</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h3 class=\"heading\"><a href=\"#\">Most Popular Place In This World</a></h3>
\t\t\t\t\t\t\t\t<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
\t\t\t\t\t\t\t\t<p><a href=\"#\" class=\"btn btn-primary\">Read more</a></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 d-flex ftco-animate\">
\t\t\t\t\t\t<div class=\"blog-entry\">
\t\t\t\t\t\t\t<a href=\"blog-single.html\" class=\"block-20\" style=\"background-image: url('images/image_3.jpg');\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mb-4 topp\">
\t\t\t\t\t\t\t\t\t<div class=\"one\">
\t\t\t\t\t\t\t\t\t\t<span class=\"day\">11</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"two\">
\t\t\t\t\t\t\t\t\t\t<span class=\"yr\">2020</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"mos\">September</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h3 class=\"heading\"><a href=\"#\">Most Popular Place In This World</a></h3>
\t\t\t\t\t\t\t\t<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
\t\t\t\t\t\t\t\t<p><a href=\"#\" class=\"btn btn-primary\">Read more</a></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"ftco-intro ftco-section ftco-no-pt\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t\t\t<div class=\"img\"  style=\"background-image: url(images/bg_2.jpg);\">
\t\t\t\t\t\t\t<div class=\"overlay\"></div>
\t\t\t\t\t\t\t<h2>We Are Pacific A Travel Agency</h2>
\t\t\t\t\t\t\t<p>We can manage your dream building A small river named Duden flows by their place</p>
\t\t\t\t\t\t\t<p class=\"mb-0\"><a href=\"#\" class=\"btn btn-primary px-4 py-3\">Ask For A Quote</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<footer class=\"ftco-footer bg-bottom ftco-no-pt\" style=\"background-image: url(images/bg_3.jpg);\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row mb-5\">
\t\t\t\t\t<div class=\"col-md pt-5\">
\t\t\t\t\t\t<div class=\"ftco-footer-widget pt-md-5 mb-4\">
\t\t\t\t\t\t\t<h2 class=\"ftco-heading-2\">About</h2>
\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
\t\t\t\t\t\t\t<ul class=\"ftco-footer-social list-unstyled float-md-left float-lft\">
\t\t\t\t\t\t\t\t<li class=\"ftco-animate\"><a href=\"#\"><span class=\"fa fa-twitter\"></span></a></li>
\t\t\t\t\t\t\t\t<li class=\"ftco-animate\"><a href=\"#\"><span class=\"fa fa-facebook\"></span></a></li>
\t\t\t\t\t\t\t\t<li class=\"ftco-animate\"><a href=\"#\"><span class=\"fa fa-instagram\"></span></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md pt-5 border-left\">
\t\t\t\t\t\t<div class=\"ftco-footer-widget pt-md-5 mb-4 ml-md-5\">
\t\t\t\t\t\t\t<h2 class=\"ftco-heading-2\">Infromation</h2>
\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"py-2 d-block\">Online Enquiry</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"py-2 d-block\">General Enquiries</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"py-2 d-block\">Booking Conditions</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"py-2 d-block\">Privacy and Policy</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"py-2 d-block\">Refund Policy</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"py-2 d-block\">Call Us</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md pt-5 border-left\">
\t\t\t\t\t\t<div class=\"ftco-footer-widget pt-md-5 mb-4\">
\t\t\t\t\t\t\t<h2 class=\"ftco-heading-2\">Experience</h2>
\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"py-2 d-block\">Adventure</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"py-2 d-block\">Hotel and Restaurant</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"py-2 d-block\">Beach</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"py-2 d-block\">Nature</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"py-2 d-block\">Camping</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"py-2 d-block\">Party</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md pt-5 border-left\">
\t\t\t\t\t\t<div class=\"ftco-footer-widget pt-md-5 mb-4\">
\t\t\t\t\t\t\t<h2 class=\"ftco-heading-2\">Have a Questions?</h2>
\t\t\t\t\t\t\t<div class=\"block-23 mb-3\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><span class=\"icon fa fa-map-marker\"></span><span class=\"text\">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon fa fa-phone\"></span><span class=\"text\">+2 392 3929 210</span></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><span class=\"icon fa fa-paper-plane\"></span><span class=\"text\">info@yourdomain.com</span></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12 text-center\">

\t\t\t\t\t\t<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
\t\t\t\t\t\t\tCopyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
\t\t\t\t\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</footer>
\t\t\t
\t\t\t

\t\t\t<!-- loader -->
\t\t\t<div id=\"ftco-loader\" class=\"show fullscreen\"><svg class=\"circular\" width=\"48px\" height=\"48px\"><circle class=\"path-bg\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke=\"#eeeeee\"/><circle class=\"path\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke=\"#F96D00\"/></svg></div>

{% block js %}
\t\t\t<script src=\"{{asset('js/jquery.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('js/jquery-migrate-3.0.1.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('js/popper.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('js/bootstrap.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('js/jquery.easing.1.3.js')}}\"></script>
\t\t\t<script src=\"{{asset('js/jquery.waypoints.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('js/jquery.stellar.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('js/owl.carousel.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('js/jquery.magnific-popup.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('js/jquery.animateNumber.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('js/bootstrap-datepicker.js')}}\"></script>
\t\t\t<script src=\"{{asset('js/scrollax.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false')}}\"></script>
\t\t\t<script src=\"{{asset('js/google-map.js')}}\"></script>
\t\t\t<script src=\"{{asset('js/main.js')}}\"></script>
\t\t\t{% endblock %}
\t\t</body>
\t\t{% endblock %}
\t\t</html>", "home/index.html.twig", "C:\\Users\\ASUS\\PiProjecttt\\templates\\home\\index.html.twig");
    }
}
