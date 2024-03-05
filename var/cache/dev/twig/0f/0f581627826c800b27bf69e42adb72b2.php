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

/* restaurant/indexfront.html.twig */
class __TwigTemplate_f1e126a7ffc5bec633b61078b8559bbe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurant/indexfront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurant/indexfront.html.twig"));

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
        // line 532
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
        echo "



    


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
\t\t\t\t\t<li <div id=\"google_translate_element\"></div> </li>

\t\t\t\t</ul>
\t\t\t</div>
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
\t\t\t\t\t\t\t\t\t<a class=\"nav-link active mr-md-1\" id=\"v-pills-1-tab\" data-toggle=\"pill\" href=\"#v-pills-1\" role=\"tab\" aria-controls=\"v-pills-1\" aria-selected=\"true\">Restaurant</a>


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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"#\">Nom restaurant</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon\"><span class=\"fa fa-search\"></span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"search-input\" name=\"q\" placeholder=\"Search place\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"#\">Adresse Restaurant</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon\"><span class=\"fa fa-search\"></span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"searchadresse-input\" name=\"q\" placeholder=\"Search place\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"#\">Nom Restaurant</label>
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

\t\t

\t\t

\t\t

\t\t<section class=\"ftco-section ftco-about ftco-no-pt img\">
       
\t\t\t
    




    <div class=\"col-md-6 text-end\">
        <div id=\"filter-menu\">
            <button id=\"filter-btn\" class=\"btn btn-primary\">Filtrer</button>
            <div id=\"filter-options\" style=\"display: none;\">
                <h5>Trier par :</h5>
                <select id=\"sort-filter\">
                    <option value=\"name\">Nom</option>
                    <option value=\"stars\">Nombre d'étoiles</option>
                </select>
                <h5>État :</h5>
                <div>
                    <input type=\"checkbox\" id=\"open-filter\" name=\"open-filter\">
                    <label for=\"open-filter\">Ouvert</label>
                </div>
                <div>
                    <input type=\"checkbox\" id=\"closed-filter\" name=\"closed-filter\">
                    <label for=\"closed-filter\">Fermé</label>
                </div>
                <button id=\"apply-filter-btn\" class=\"btn btn-primary mt-2\">Appliquer</button>
            </div>
        </div>
    </div>
</div>

<div id=\"restaurants-container\">
    <div class=\"row\">
        ";
        // line 238
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 238, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["restaurant"]) {
            // line 239
            echo "        <div class=\"col-md-3 mb-4\">
            <div class=\"card\">
                <div class=\"ratio ratio-4x3\">
                    <img src=\"";
            // line 242
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["restaurant"], "ImageRestaurant", [], "any", false, false, false, 242))), "html", null, true);
            echo "\" class=\"card-img-top img-fluid\" style=\"max-width: 100%; height: auto;\" alt=\"Image du restaurant\">
                </div>
                <div class=\"card-body\">
                    <h5 class=\"card-title\">";
            // line 245
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "nom", [], "any", false, false, false, 245), "html", null, true);
            echo "</h5>
                    <p class=\"card-text\">
                        <strong>Adresse:</strong><p class=\"card-text card-address\">";
            // line 247
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "adresse", [], "any", false, false, false, 247), "html", null, true);
            echo "</p> <!-- Ajoutez cette ligne pour afficher l'adresse -->
                        <strong>Numéro de téléphone:</strong> ";
            // line 248
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "numdetel", [], "any", false, false, false, 248), "html", null, true);
            echo "<br>
                        <strong>Nombre d'étoiles:</strong> 
                        ";
            // line 250
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["restaurant"], "nmbetoiles", [], "any", false, false, false, 250)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 251
                echo "                            <span style=\"color: yellow;\">★</span>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 253
            echo "                    </p>
                    ";
            // line 255
            echo "                    ";
            $context["currentTime"] = twig_date_format_filter($this->env, "now", "H:i");
            // line 256
            echo "                    ";
            $context["isOpen"] = ((twig_get_attribute($this->env, $this->source, $context["restaurant"], "heureOuverture", [], "any", false, false, false, 256) <= (isset($context["currentTime"]) || array_key_exists("currentTime", $context) ? $context["currentTime"] : (function () { throw new RuntimeError('Variable "currentTime" does not exist.', 256, $this->source); })())) && ((isset($context["currentTime"]) || array_key_exists("currentTime", $context) ? $context["currentTime"] : (function () { throw new RuntimeError('Variable "currentTime" does not exist.', 256, $this->source); })()) <= twig_get_attribute($this->env, $this->source, $context["restaurant"], "heureFermeture", [], "any", false, false, false, 256)));
            // line 257
            echo "                    ";
            if ((isset($context["isOpen"]) || array_key_exists("isOpen", $context) ? $context["isOpen"] : (function () { throw new RuntimeError('Variable "isOpen" does not exist.', 257, $this->source); })())) {
                // line 258
                echo "                        <p style=\"color: green;\">Le restaurant est ouvert</p>
                    ";
            } else {
                // line 260
                echo "                        <p style=\"color: red;\">Le restaurant est fermé</p>
                    ";
            }
            // line 262
            echo "
                    <button class=\"btn btn-primary btn-sm add-to-favorites\" data-restaurant-id=\"";
            // line 263
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "id", [], "any", false, false, false, 263), "html", null, true);
            echo "\">Ajouter aux favoris</button>
                    
                    <a href=\"";
            // line 265
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_showfront", ["id" => twig_get_attribute($this->env, $this->source, $context["restaurant"], "id", [], "any", false, false, false, 265)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\">Détails</a>
                </div>

            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 271
            echo "            <div class=\"col-md-12\">
                <p>Pas de restaurants trouvés.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['restaurant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 275
        echo "    </div>
</div>

<!-- Bouton \"Favoris\" -->
<div>
    <a href=\"";
        // line 280
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_favoris");
        echo "\" class=\"btn btn-primary btn-sm\">Favoris</a>
</div>

<!-- Pagination -->
<div class=\"d-flex justify-content-center\">
    ";
        // line 285
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 285, $this->source); })()), "restaurant/pagination.html.twig");
        echo "
</div>











    


   

\t\t</section>

\t\t

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
        // line 391
        $this->displayBlock('js', $context, $blocks);
        // line 530
        echo "\t\t</body>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 391
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 392
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-migrate-3.0.1.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.animateNumber.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scrollax.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/google-map.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
\t\t\t
\t\t\t<script>


    \$(document).ready(function(){
    \$('#filter-btn').on('click', function(){
        \$('#filter-options').toggle();
    });

    // Fonction pour appliquer le filtre
    function applyFilter() {
        var selectedSort = \$('#sort-filter').val();
        var isOpen = \$('#open-filter').is(':checked');
        var isClosed = \$('#closed-filter').is(':checked');

        var \$container = \$('#restaurants-container .row');
        var \$cards = \$container.children('.col-md-3').detach();

        \$cards.sort(function(a, b) {
            var nameA = \$(a).find('.card-title').text().toUpperCase();
            var nameB = \$(b).find('.card-title').text().toUpperCase();
            var starsA = parseInt(\$(a).find('.card-text strong:contains(\"Nombre d\\'étoiles:\")').siblings().first().text());
            var starsB = parseInt(\$(b).find('.card-text strong:contains(\"Nombre d\\'étoiles:\")').siblings().first().text());

            if (selectedSort === 'name') {
                if (nameA < nameB) return -1;
                if (nameA > nameB) return 1;
                return 0;
            } else if (selectedSort === 'stars') {
                if (starsA < starsB) return -1;
                if (starsA > starsB) return 1;
                return 0;
            }
        }).appendTo(\$container);

        \$cards.each(function(){
            var isOpenRestaurant = \$(this).find('p').text().includes(\"Le restaurant est ouvert\");
            var matchesState = (!isOpen && !isClosed) || (isOpen && isOpenRestaurant) || (isClosed && !isOpenRestaurant);

            if (matchesState){
                \$(this).show();
            } else {
                \$(this).hide();
            }
        });
    }

    \$('#apply-filter-btn').on('click', function(){
        applyFilter();
    });

    // Écouter les changements dans le menu de tri
    \$('#sort-filter').on('change', function(){
        applyFilter();
    });

    \$('#search-input, #searchadresse-input').on('input', function(){
    var query = \$(this).val().toLowerCase();
    \$('#restaurants-container .card').each(function(){
        var restaurantName = \$(this).find('.card-title').text().toLowerCase();
        var restaurantAddress = \$(this).find('.card-address').text().toLowerCase(); // Ajout pour rechercher par adresse

        if(restaurantName.includes(query) || restaurantAddress.includes(query)){ // Modification pour inclure la recherche par adresse
            \$(this).show();
        } else {
            \$(this).hide();
        }
    });
});

});
// Script pour gérer l'ajout aux favoris

            \$(document).on('click', '.add-to-favorites', function() {
                var restaurantId = \$(this).data('restaurant-id');

                // Requête AJAX pour ajouter le restaurant aux favoris
                \$.ajax({
                    url: '/add-to-favorites/' + restaurantId,
                    type: 'POST',
                    success: function(response) {
\t\t\t\t\t\t 
                        // Mettre à jour l'interface utilisateur en conséquence
                        // Par exemple, changer le texte du bouton en \"Retirer des favoris\"
                    }
                });
            });

            // Script pour gérer l'affichage des favoris
            \$(document).on('click', '#favorites-btn', function() {
                // Requête AJAX pour charger la liste des restaurants favoris
                \$.ajax({
                    url: '/favorites',
                    type: 'GET',
                    success: function(response) {
                        // Afficher la liste des restaurants favoris dans un modal ou une autre zone de la page
                    }
                });
            });
        

</script>
<script src=\"script.js\"></script>
      <script type=\"text/javascript\">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement(
                {pageLanguage: 'en'},
                'google_translate_element'
            );
        } 
  </script>
  <script type=\"text/javascript\" src=\"https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit\"></script>

\t\t\t
\t\t






\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "restaurant/indexfront.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  678 => 406,  674 => 405,  670 => 404,  666 => 403,  662 => 402,  658 => 401,  654 => 400,  650 => 399,  646 => 398,  642 => 397,  638 => 396,  634 => 395,  630 => 394,  626 => 393,  621 => 392,  611 => 391,  600 => 530,  598 => 391,  489 => 285,  481 => 280,  474 => 275,  465 => 271,  454 => 265,  449 => 263,  446 => 262,  442 => 260,  438 => 258,  435 => 257,  432 => 256,  429 => 255,  426 => 253,  419 => 251,  415 => 250,  410 => 248,  406 => 247,  401 => 245,  395 => 242,  390 => 239,  385 => 238,  174 => 29,  164 => 28,  151 => 23,  147 => 22,  142 => 20,  138 => 19,  133 => 17,  129 => 16,  125 => 15,  120 => 13,  115 => 11,  110 => 9,  105 => 8,  95 => 7,  76 => 4,  66 => 532,  64 => 28,  60 => 26,  58 => 7,  52 => 4,  47 => 1,);
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
\t\t\t\t\t<li <div id=\"google_translate_element\"></div> </li>

\t\t\t\t</ul>
\t\t\t</div>
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
\t\t\t\t\t\t\t\t\t<a class=\"nav-link active mr-md-1\" id=\"v-pills-1-tab\" data-toggle=\"pill\" href=\"#v-pills-1\" role=\"tab\" aria-controls=\"v-pills-1\" aria-selected=\"true\">Restaurant</a>


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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"#\">Nom restaurant</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon\"><span class=\"fa fa-search\"></span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"search-input\" name=\"q\" placeholder=\"Search place\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"#\">Adresse Restaurant</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon\"><span class=\"fa fa-search\"></span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"searchadresse-input\" name=\"q\" placeholder=\"Search place\">\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"#\">Nom Restaurant</label>
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

\t\t

\t\t

\t\t

\t\t<section class=\"ftco-section ftco-about ftco-no-pt img\">
       
\t\t\t
    




    <div class=\"col-md-6 text-end\">
        <div id=\"filter-menu\">
            <button id=\"filter-btn\" class=\"btn btn-primary\">Filtrer</button>
            <div id=\"filter-options\" style=\"display: none;\">
                <h5>Trier par :</h5>
                <select id=\"sort-filter\">
                    <option value=\"name\">Nom</option>
                    <option value=\"stars\">Nombre d'étoiles</option>
                </select>
                <h5>État :</h5>
                <div>
                    <input type=\"checkbox\" id=\"open-filter\" name=\"open-filter\">
                    <label for=\"open-filter\">Ouvert</label>
                </div>
                <div>
                    <input type=\"checkbox\" id=\"closed-filter\" name=\"closed-filter\">
                    <label for=\"closed-filter\">Fermé</label>
                </div>
                <button id=\"apply-filter-btn\" class=\"btn btn-primary mt-2\">Appliquer</button>
            </div>
        </div>
    </div>
</div>

<div id=\"restaurants-container\">
    <div class=\"row\">
        {% for restaurant in restaurants %}
        <div class=\"col-md-3 mb-4\">
            <div class=\"card\">
                <div class=\"ratio ratio-4x3\">
                    <img src=\"{{ asset('uploads/images/' ~ restaurant.ImageRestaurant) }}\" class=\"card-img-top img-fluid\" style=\"max-width: 100%; height: auto;\" alt=\"Image du restaurant\">
                </div>
                <div class=\"card-body\">
                    <h5 class=\"card-title\">{{ restaurant.nom }}</h5>
                    <p class=\"card-text\">
                        <strong>Adresse:</strong><p class=\"card-text card-address\">{{ restaurant.adresse }}</p> <!-- Ajoutez cette ligne pour afficher l'adresse -->
                        <strong>Numéro de téléphone:</strong> {{ restaurant.numdetel }}<br>
                        <strong>Nombre d'étoiles:</strong> 
                        {% for i in range(1 , restaurant.nmbetoiles) %}
                            <span style=\"color: yellow;\">★</span>
                        {% endfor %}
                    </p>
                    {# Affichage de l'état d'ouverture du restaurant #}
                    {% set currentTime = \"now\"|date(\"H:i\") %}
                    {% set isOpen = restaurant.heureOuverture <= currentTime and currentTime <= restaurant.heureFermeture %}
                    {% if isOpen %}
                        <p style=\"color: green;\">Le restaurant est ouvert</p>
                    {% else %}
                        <p style=\"color: red;\">Le restaurant est fermé</p>
                    {% endif %}

                    <button class=\"btn btn-primary btn-sm add-to-favorites\" data-restaurant-id=\"{{ restaurant.id }}\">Ajouter aux favoris</button>
                    
                    <a href=\"{{ path('app_restaurant_showfront', {'id': restaurant.id}) }}\" class=\"btn btn-primary btn-sm\">Détails</a>
                </div>

            </div>
        </div>
        {% else %}
            <div class=\"col-md-12\">
                <p>Pas de restaurants trouvés.</p>
            </div>
        {% endfor %}
    </div>
</div>

<!-- Bouton \"Favoris\" -->
<div>
    <a href=\"{{ path('app_restaurant_favoris') }}\" class=\"btn btn-primary btn-sm\">Favoris</a>
</div>

<!-- Pagination -->
<div class=\"d-flex justify-content-center\">
    {{ knp_pagination_render(restaurants,'restaurant/pagination.html.twig')}}
</div>











    


   

\t\t</section>

\t\t

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
\t\t\t<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
\t\t\t
\t\t\t<script>


    \$(document).ready(function(){
    \$('#filter-btn').on('click', function(){
        \$('#filter-options').toggle();
    });

    // Fonction pour appliquer le filtre
    function applyFilter() {
        var selectedSort = \$('#sort-filter').val();
        var isOpen = \$('#open-filter').is(':checked');
        var isClosed = \$('#closed-filter').is(':checked');

        var \$container = \$('#restaurants-container .row');
        var \$cards = \$container.children('.col-md-3').detach();

        \$cards.sort(function(a, b) {
            var nameA = \$(a).find('.card-title').text().toUpperCase();
            var nameB = \$(b).find('.card-title').text().toUpperCase();
            var starsA = parseInt(\$(a).find('.card-text strong:contains(\"Nombre d\\'étoiles:\")').siblings().first().text());
            var starsB = parseInt(\$(b).find('.card-text strong:contains(\"Nombre d\\'étoiles:\")').siblings().first().text());

            if (selectedSort === 'name') {
                if (nameA < nameB) return -1;
                if (nameA > nameB) return 1;
                return 0;
            } else if (selectedSort === 'stars') {
                if (starsA < starsB) return -1;
                if (starsA > starsB) return 1;
                return 0;
            }
        }).appendTo(\$container);

        \$cards.each(function(){
            var isOpenRestaurant = \$(this).find('p').text().includes(\"Le restaurant est ouvert\");
            var matchesState = (!isOpen && !isClosed) || (isOpen && isOpenRestaurant) || (isClosed && !isOpenRestaurant);

            if (matchesState){
                \$(this).show();
            } else {
                \$(this).hide();
            }
        });
    }

    \$('#apply-filter-btn').on('click', function(){
        applyFilter();
    });

    // Écouter les changements dans le menu de tri
    \$('#sort-filter').on('change', function(){
        applyFilter();
    });

    \$('#search-input, #searchadresse-input').on('input', function(){
    var query = \$(this).val().toLowerCase();
    \$('#restaurants-container .card').each(function(){
        var restaurantName = \$(this).find('.card-title').text().toLowerCase();
        var restaurantAddress = \$(this).find('.card-address').text().toLowerCase(); // Ajout pour rechercher par adresse

        if(restaurantName.includes(query) || restaurantAddress.includes(query)){ // Modification pour inclure la recherche par adresse
            \$(this).show();
        } else {
            \$(this).hide();
        }
    });
});

});
// Script pour gérer l'ajout aux favoris

            \$(document).on('click', '.add-to-favorites', function() {
                var restaurantId = \$(this).data('restaurant-id');

                // Requête AJAX pour ajouter le restaurant aux favoris
                \$.ajax({
                    url: '/add-to-favorites/' + restaurantId,
                    type: 'POST',
                    success: function(response) {
\t\t\t\t\t\t 
                        // Mettre à jour l'interface utilisateur en conséquence
                        // Par exemple, changer le texte du bouton en \"Retirer des favoris\"
                    }
                });
            });

            // Script pour gérer l'affichage des favoris
            \$(document).on('click', '#favorites-btn', function() {
                // Requête AJAX pour charger la liste des restaurants favoris
                \$.ajax({
                    url: '/favorites',
                    type: 'GET',
                    success: function(response) {
                        // Afficher la liste des restaurants favoris dans un modal ou une autre zone de la page
                    }
                });
            });
        

</script>
<script src=\"script.js\"></script>
      <script type=\"text/javascript\">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement(
                {pageLanguage: 'en'},
                'google_translate_element'
            );
        } 
  </script>
  <script type=\"text/javascript\" src=\"https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit\"></script>

\t\t\t
\t\t






\t\t\t{% endblock %}
\t\t</body>
\t\t{% endblock %}
\t\t</html>", "restaurant/indexfront.html.twig", "C:\\Users\\ASUS\\Desktop\\PiDev\\Projet-Pi-tfarhida\\templates\\restaurant\\indexfront.html.twig");
    }
}
