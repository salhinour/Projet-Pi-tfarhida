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

/* base.html.twig */
class __TwigTemplate_99ef0e313387b5bcdb1e3854d0bc7408 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 27
        echo "\t  <style>
        .button-container {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .button-group {
            margin-top: 20px;
        }

        .btn {
            display: inline-block;
            padding: 8px 12px;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: #fff;
        }
        .btn-third {
            background-color: #F98D75;
            color: #fff;
        }
        .btn-fourth {
            background-color: #329F4B;
            color: #fff;
        }
\t\t.logo {
    width: 150px; /* ajustez la taille selon vos préférences */
    height: auto; /* pour conserver les proportions */
}
    
    </style>
</head>

<body>
\t<nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
\t\t<div class=\"container\">
<a class=\"navbar-brand\" href=\"index.html\">
    <img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/logo.png"), "html", null, true);
        echo "\" alt=\"Votre Logo\" class=\"logo\">
</a>\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"oi oi-menu\"></span> Menu
\t\t\t</button>

\t\t\t<div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t<li class=\"nav-item active\"><a href=\"accueil\" class=\"nav-link\">Home</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"about.html\" class=\"nav-link\">About</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"act\" class=\"nav-link\">Activite</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"hotel.html\" class=\"nav-link\">Hotel</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"blog.html\" class=\"nav-link\">Blog</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"contact.html\" class=\"nav-link\">Contact</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
\t<!-- END nav -->
\t

\t
";
        // line 97
        $this->displayBlock('body', $context, $blocks);
        // line 99
        echo "\t\t

\t\t
\t\t
\t\t


\t\t

\t\t

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
        // line 179
        $this->displayBlock('js', $context, $blocks);
        // line 196
        echo "\t\t</body>
\t\t</html>";
        
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
\t <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">

\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 97
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 179
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 180
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-migrate-3.0.1.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.animateNumber.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scrollax.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/google-map.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 194
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
        return "base.html.twig";
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
        return array (  406 => 194,  402 => 193,  398 => 192,  394 => 191,  390 => 190,  386 => 189,  382 => 188,  378 => 187,  374 => 186,  370 => 185,  366 => 184,  362 => 183,  358 => 182,  354 => 181,  349 => 180,  339 => 179,  321 => 97,  307 => 23,  303 => 22,  298 => 20,  294 => 19,  289 => 17,  285 => 16,  281 => 15,  276 => 13,  271 => 11,  266 => 9,  261 => 8,  251 => 7,  232 => 4,  221 => 196,  219 => 179,  137 => 99,  135 => 97,  111 => 76,  60 => 27,  58 => 7,  52 => 4,  47 => 1,);
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
\t <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">

\t{% endblock %}
\t  <style>
        .button-container {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .button-group {
            margin-top: 20px;
        }

        .btn {
            display: inline-block;
            padding: 8px 12px;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: #fff;
        }
        .btn-third {
            background-color: #F98D75;
            color: #fff;
        }
        .btn-fourth {
            background-color: #329F4B;
            color: #fff;
        }
\t\t.logo {
    width: 150px; /* ajustez la taille selon vos préférences */
    height: auto; /* pour conserver les proportions */
}
    
    </style>
</head>

<body>
\t<nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
\t\t<div class=\"container\">
<a class=\"navbar-brand\" href=\"index.html\">
    <img src=\"{{ asset('/images/logo.png') }}\" alt=\"Votre Logo\" class=\"logo\">
</a>\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"oi oi-menu\"></span> Menu
\t\t\t</button>

\t\t\t<div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t<li class=\"nav-item active\"><a href=\"accueil\" class=\"nav-link\">Home</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"about.html\" class=\"nav-link\">About</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"act\" class=\"nav-link\">Activite</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"hotel.html\" class=\"nav-link\">Hotel</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"blog.html\" class=\"nav-link\">Blog</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"contact.html\" class=\"nav-link\">Contact</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
\t<!-- END nav -->
\t

\t
{% block body%}
{% endblock %}
\t\t

\t\t
\t\t
\t\t


\t\t

\t\t

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
\t\t</html>", "base.html.twig", "C:\\Users\\ASUS\\PiProjecttt\\templates\\base.html.twig");
    }
}