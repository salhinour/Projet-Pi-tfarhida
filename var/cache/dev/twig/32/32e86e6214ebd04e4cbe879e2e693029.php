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

/* plat/indexfront.html.twig */
class __TwigTemplate_5f30f0320aaf7e2b1537e1e598d68e64 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plat/indexfront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plat/indexfront.html.twig"));

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
        // line 580
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

\t\t

\t\t

\t\t<section class=\"ftco-section ftco-about ftco-no-pt img\">
       
\t\t\t
    


    <h1>Plat index</h1>

<div class=\"row\">
    ";
        // line 245
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plats"]) || array_key_exists("plats", $context) ? $context["plats"] : (function () { throw new RuntimeError('Variable "plats" does not exist.', 245, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
            // line 246
            echo "    <div class=\"col-md-3 mb-4\">
        <div class=\"card\">
            <div class=\"ratio ratio-4x3\">
                <img src=\"";
            // line 249
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["plat"], "ImagePlat", [], "any", false, false, false, 249))), "html", null, true);
            echo "\" class=\"card-img-top img-fluid\" style=\"max-width: 100%; height: auto;\" alt=\"Image du plat\">
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">";
            // line 252
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "nom", [], "any", false, false, false, 252), "html", null, true);
            echo "</h5>
                <p class=\"card-text\">
                    <strong>description:</strong> ";
            // line 254
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "description", [], "any", false, false, false, 254), "html", null, true);
            echo "<br>
                    
                </p>
                <a href=\"";
            // line 257
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_plat_show", ["id" => twig_get_attribute($this->env, $this->source, $context["plat"], "id", [], "any", false, false, false, 257)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\">Détails</a>
                

            </div>
        </div>
    </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 264
            echo "        <div class=\"col-md-12\">
            <p>Pas de plats trouvés.</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 268
        echo "</div>




    


   

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
        // line 561
        $this->displayBlock('js', $context, $blocks);
        // line 578
        echo "\t\t</body>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 561
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 562
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 563
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-migrate-3.0.1.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 564
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 565
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 566
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 567
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 568
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 569
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 570
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 571
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.animateNumber.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 572
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 573
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scrollax.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 574
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 575
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/google-map.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 576
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
        return "plat/indexfront.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  815 => 576,  811 => 575,  807 => 574,  803 => 573,  799 => 572,  795 => 571,  791 => 570,  787 => 569,  783 => 568,  779 => 567,  775 => 566,  771 => 565,  767 => 564,  763 => 563,  758 => 562,  748 => 561,  737 => 578,  735 => 561,  440 => 268,  431 => 264,  419 => 257,  413 => 254,  408 => 252,  402 => 249,  397 => 246,  392 => 245,  174 => 29,  164 => 28,  151 => 23,  147 => 22,  142 => 20,  138 => 19,  133 => 17,  129 => 16,  125 => 15,  120 => 13,  115 => 11,  110 => 9,  105 => 8,  95 => 7,  76 => 4,  66 => 580,  64 => 28,  60 => 26,  58 => 7,  52 => 4,  47 => 1,);
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

\t\t

\t\t

\t\t<section class=\"ftco-section ftco-about ftco-no-pt img\">
       
\t\t\t
    


    <h1>Plat index</h1>

<div class=\"row\">
    {% for plat in plats %}
    <div class=\"col-md-3 mb-4\">
        <div class=\"card\">
            <div class=\"ratio ratio-4x3\">
                <img src=\"{{ asset('uploads/images/' ~ plat.ImagePlat) }}\" class=\"card-img-top img-fluid\" style=\"max-width: 100%; height: auto;\" alt=\"Image du plat\">
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">{{ plat.nom }}</h5>
                <p class=\"card-text\">
                    <strong>description:</strong> {{ plat.description }}<br>
                    
                </p>
                <a href=\"{{ path('app_plat_show', {'id': plat.id}) }}\" class=\"btn btn-primary btn-sm\">Détails</a>
                

            </div>
        </div>
    </div>
    {% else %}
        <div class=\"col-md-12\">
            <p>Pas de plats trouvés.</p>
        </div>
    {% endfor %}
</div>




    


   

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
\t\t</html>", "plat/indexfront.html.twig", "C:\\Users\\ASUS\\Desktop\\PiDev\\Projet-Pi-tfarhida\\templates\\plat\\indexfront.html.twig");
    }
}
