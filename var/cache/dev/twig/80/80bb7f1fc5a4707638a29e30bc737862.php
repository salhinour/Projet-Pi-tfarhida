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

/* service/index.html.twig */
class __TwigTemplate_079c8b04b02b768cfd826537f0f1bdda extends Template
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
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/index.html.twig"));

        // line 1
        echo "<html lang=\"en\"><head>
    <title> ";
        // line 2
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    ";
        // line 5
        $this->displayBlock('css', $context, $blocks);
        // line 26
        echo " 
  </head>
  ";
        // line 28
        $this->displayBlock('body', $context, $blocks);
        // line 726
        echo "</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Vacation - Free Bootstrap 4 Template by Colorlib ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 6
        echo "    <link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/open-iconic-bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\">
    
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.carousel.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.theme.default.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/aos.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/ionicons.min.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap-datepicker.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery.timepicker.css"), "html", null, true);
        echo "\">

    
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/flaticon.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/icomoon.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
  <style type=\"text/css\">.scrollax-performance, .scrollax-performance *, .scrollax-performance *:before, .scrollax-performance *:after { pointer-events: none !important; -webkit-animation-play-state: paused !important; animation-play-state: paused !important; };</style><script type=\"text/javascript\" charset=\"UTF-8\" src=\"https://maps.googleapis.com/maps-api-v3/api/js/55/11/intl/fr_ALL/common.js\"></script><script type=\"text/javascript\" charset=\"UTF-8\" src=\"https://maps.googleapis.com/maps-api-v3/api/js/55/11/intl/fr_ALL/util.js\"></script>";
        
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
        echo "  <body data-aos-easing=\"slide\" data-aos-duration=\"800\" data-aos-delay=\"0\">
\t  <nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
\t    <div class=\"container\">
\t      <a class=\"navbar-brand\" href=\"index.html\">Vacation<span>Travel Agency</span></a>
\t      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t        <span class=\"oi oi-menu\"></span> Menu
\t      </button>

\t      <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
\t        <ul class=\"navbar-nav ml-auto\">
\t          <li class=\"nav-item active\"><a href=\"index.html\" class=\"nav-link\">Home</a></li>
\t          <li class=\"nav-item\"><a href=\"about.html\" class=\"nav-link\">About</a></li>
\t          <li class=\"nav-item\"><a href=\"destination.html\" class=\"nav-link\">Destination</a></li>
\t          <li class=\"nav-item\"><a href=\"blog.html\" class=\"nav-link\">Blog</a></li>
\t          <li class=\"nav-item\"><a href=\"contact.html\" class=\"nav-link\">Contact</a></li>
\t          <li class=\"nav-item cta\"><a href=\"#\" class=\"nav-link\">Book Now</a></li>

\t        </ul>
\t      </div>
\t    </div>
\t  </nav>
    <!-- END nav -->
    
<div class=\"hero-wrap js-fullheight\" style=\"background-image: url('/images/1.jpg');\">
      <div class=\"overlay\"></div>
      <div class=\"container\">
        <div class=\"row no-gutters slider-text js-fullheight align-items-center justify-content-center\" data-scrollax-parent=\"true\" style=\"height: 641px;\">
          <div class=\"col-md-9 text text-center ftco-animate fadeInUp ftco-animated\" data-scrollax=\" properties: { translateY: '70%' }\" style=\"transform: translateZ(0px) translateY(3.47406%);\">
          \t<a href=\"https://vimeo.com/45830194\" class=\"icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4\">
          \t\t<span class=\"ion-ios-play\"></span>
            </a>
            <p class=\"caps\" data-scrollax=\"properties: { translateY: '30%', opacity: 1.6 }\" style=\"opacity: 0.920593; transform: translateZ(0px) translateY(1.48888%);\">Travel to the any corner of the world, without going around in circles</p>
            <h1 data-scrollax=\"properties: { translateY: '30%', opacity: 1.6 }\" style=\"opacity: 0.920593; transform: translateZ(0px) translateY(1.48888%);\">Make Your Tour Amazing With Us</h1>
          </div>
        </div>
      </div>
    </div>

    <section class=\"ftco-section ftco-no-pb ftco-no-pt\">
    \t<div class=\"container\">
\t    \t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"search-wrap-1 ftco-animate p-4 fadeInUp ftco-animated\">
\t\t\t\t\t\t\t<form action=\"#\" class=\"search-property-1\">
\t\t        \t\t<div class=\"row\">
\t\t        \t\t\t<div class=\"col-lg align-items-end\">
\t\t        \t\t\t\t<div class=\"form-group\">
\t\t        \t\t\t\t\t<label for=\"#\">Destination</label>
\t\t          \t\t\t\t<div class=\"form-field\">
\t\t          \t\t\t\t\t<div class=\"icon\"><span class=\"ion-ios-search\"></span></div>
\t\t\t\t                <input type=\"text\" class=\"form-control\" placeholder=\"Search place\">
\t\t\t\t              </div>
\t\t\t              </div>
\t\t        \t\t\t</div>
\t\t        \t\t\t<div class=\"col-lg align-items-end\">
\t\t        \t\t\t\t<div class=\"form-group\">
\t\t        \t\t\t\t\t<label for=\"#\">Check-in date</label>
\t\t        \t\t\t\t\t<div class=\"form-field\">
\t\t          \t\t\t\t\t<div class=\"icon\"><span class=\"ion-ios-calendar\"></span></div>
\t\t\t\t                <input type=\"text\" class=\"form-control checkin_date\" placeholder=\"Check In Date\">
\t\t\t\t              </div>
\t\t\t              </div>
\t\t        \t\t\t</div>
\t\t        \t\t\t<div class=\"col-lg align-items-end\">
\t\t        \t\t\t\t<div class=\"form-group\">
\t\t        \t\t\t\t\t<label for=\"#\">Check-out date</label>
\t\t        \t\t\t\t\t<div class=\"form-field\">
\t\t          \t\t\t\t\t<div class=\"icon\"><span class=\"ion-ios-calendar\"></span></div>
\t\t\t\t                <input type=\"text\" class=\"form-control checkout_date\" placeholder=\"Check Out Date\">
\t\t\t\t              </div>
\t\t\t              </div>
\t\t        \t\t\t</div>
\t\t        \t\t\t<div class=\"col-lg align-items-end\">
\t\t        \t\t\t\t<div class=\"form-group\">
\t\t        \t\t\t\t\t<label for=\"#\">Price Limit</label>
\t\t        \t\t\t\t\t<div class=\"form-field\">
\t\t          \t\t\t\t\t<div class=\"select-wrap\">
\t\t                      <div class=\"icon\"><span class=\"ion-ios-arrow-down\"></span></div>
\t\t                      <select name=\"\" id=\"\" class=\"form-control\">
\t\t                        <option value=\"\">\$5,000</option>
\t\t                        <option value=\"\">\$10,000</option>
\t\t                        <option value=\"\">\$50,000</option>
\t\t                        <option value=\"\">\$100,000</option>
\t\t                        <option value=\"\">\$200,000</option>
\t\t                        <option value=\"\">\$300,000</option>
\t\t                        <option value=\"\">\$400,000</option>
\t\t                        <option value=\"\">\$500,000</option>
\t\t                        <option value=\"\">\$600,000</option>
\t\t                        <option value=\"\">\$700,000</option>
\t\t                        <option value=\"\">\$800,000</option>
\t\t                        <option value=\"\">\$900,000</option>
\t\t                        <option value=\"\">\$1,000,000</option>
\t\t                        <option value=\"\">\$2,000,000</option>
\t\t                      </select>
\t\t                    </div>
\t\t\t\t              </div>
\t\t\t              </div>
\t\t        \t\t\t</div>
\t\t        \t\t\t<div class=\"col-lg align-self-end\">
\t\t        \t\t\t\t<div class=\"form-group\">
\t\t        \t\t\t\t\t<div class=\"form-field\">
\t\t\t\t                <input type=\"submit\" value=\"Search\" class=\"form-control btn btn-primary\">
\t\t\t\t              </div>
\t\t\t              </div>
\t\t        \t\t\t</div>
\t\t        \t\t</div>
\t\t        \t</form>
\t\t        </div>
\t\t\t\t\t</div>
\t    \t</div>
\t    </div>
    </section>

    <section class=\"ftco-section services-section bg-light\">
      <div class=\"container\">
        <div class=\"row d-flex\">
          <div class=\"col-md-6 order-md-last heading-section pl-md-5 ftco-animate fadeInUp ftco-animated\">
          \t<h2 class=\"mb-4\">It's time to start your adventure</h2>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
            A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href=\"#\" class=\"btn btn-primary py-3 px-4\">Search Destination</a></p>
          </div>
          <div class=\"col-md-6\">
          \t<div class=\"row\">
          \t\t<div class=\"col-md-6 d-flex align-self-stretch ftco-animate fadeInUp ftco-animated\">
\t\t            <div class=\"media block-6 services d-block\">
\t\t              <div class=\"icon\"><span class=\"flaticon-paragliding\"></span></div>
\t\t              <div class=\"media-body\">
\t\t                <h3 class=\"heading mb-3\">Activities</h3>
\t\t                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
\t\t              </div>
\t\t            </div>      
\t\t          </div>
\t\t          <div class=\"col-md-6 d-flex align-self-stretch ftco-animate fadeInUp ftco-animated\">
\t\t            <div class=\"media block-6 services d-block\">
\t\t              <div class=\"icon\"><span class=\"flaticon-route\"></span></div>
\t\t              <div class=\"media-body\">
\t\t                <h3 class=\"heading mb-3\">Travel Arrangements</h3>
\t\t                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
\t\t              </div>
\t\t            </div>    
\t\t          </div>
\t\t          <div class=\"col-md-6 d-flex align-self-stretch ftco-animate fadeInUp ftco-animated\">
\t\t            <div class=\"media block-6 services d-block\">
\t\t              <div class=\"icon\"><span class=\"flaticon-tour-guide\"></span></div>
\t\t              <div class=\"media-body\">
\t\t                <h3 class=\"heading mb-3\">Private Guide</h3>
\t\t                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
\t\t              </div>
\t\t            </div>      
\t\t          </div>
\t\t          <div class=\"col-md-6 d-flex align-self-stretch ftco-animate fadeInUp ftco-animated\">
\t\t            <div class=\"media block-6 services d-block\">
\t\t              <div class=\"icon\"><span class=\"flaticon-map\"></span></div>
\t\t              <div class=\"media-body\">
\t\t                <h3 class=\"heading mb-3\">Location Manager</h3>
\t\t                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
\t\t              </div>
\t\t            </div>      
\t\t          </div>
          \t</div>
          </div>
        </div>
      </div>
    </section>

    <section class=\"ftco-counter img\" id=\"section-counter\">
    \t<div class=\"container\">
    \t\t<div class=\"row d-flex\">
    \t\t\t<div class=\"col-md-6 d-flex\">
    \t\t\t\t<div class=\"img d-flex align-self-stretch\" style=\"background-image:url(images/about.jpg);\"></div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-6 pl-md-5 py-5\">
    \t\t\t\t<div class=\"row justify-content-start pb-3\">
\t\t          <div class=\"col-md-12 heading-section ftco-animate fadeInUp ftco-animated\">
\t\t            <h2 class=\"mb-4\">Make Your Tour Memorable and Safe With Us</h2>
\t\t            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
\t\t          </div>
\t\t        </div>
\t\t    \t\t<div class=\"row\">
\t\t          <div class=\"col-md-4 justify-content-center counter-wrap ftco-animate fadeInUp ftco-animated\">
\t\t            <div class=\"block-18 text-center mb-4\">
\t\t              <div class=\"text\">
\t\t                <strong class=\"number\" data-number=\"300\">300</strong>
\t\t                <span>Successful Tours</span>
\t\t              </div>
\t\t            </div>
\t\t          </div>
\t\t          <div class=\"col-md-4 justify-content-center counter-wrap ftco-animate fadeInUp ftco-animated\">
\t\t            <div class=\"block-18 text-center mb-4\">
\t\t              <div class=\"text\">
\t\t                <strong class=\"number\" data-number=\"24000\">24,000</strong>
\t\t                <span>Happy Tourist</span>
\t\t              </div>
\t\t            </div>
\t\t          </div>
\t\t          <div class=\"col-md-4 justify-content-center counter-wrap ftco-animate fadeInUp ftco-animated\">
\t\t            <div class=\"block-18 text-center mb-4\">
\t\t              <div class=\"text\">
\t\t                <strong class=\"number\" data-number=\"200\">200</strong>
\t\t                <span>Place Explored</span>
\t\t              </div>
\t\t            </div>
\t\t          </div>
\t\t        </div>
\t        </div>
        </div>
    \t</div>
    </section>


\t\t<section class=\"ftco-section\">
    \t<div class=\"container\">
    \t\t<div class=\"row justify-content-center pb-4\">
          <div class=\"col-md-12 heading-section text-center ftco-animate fadeInUp ftco-animated\">
            <h2 class=\"mb-4\">Best Place Destination</h2>
          </div>
        </div>
        <div class=\"row\">
        \t<div class=\"col-md-3 ftco-animate fadeInUp ftco-animated\">
        \t\t<div class=\"project-destination\">
        \t\t\t<a href=\"#\" class=\"img\" style=\"background-image: url(images/place-1.jpg);\">
        \t\t\t\t<div class=\"text\">
        \t\t\t\t\t<h3>Singapore</h3>
        \t\t\t\t\t<span>8 Tours</span>
        \t\t\t\t</div>
        \t\t\t</a>
        \t\t</div>
        \t</div>
        \t<div class=\"col-md-3 ftco-animate fadeInUp ftco-animated\">
        \t\t<div class=\"project-destination\">
        \t\t\t<a href=\"#\" class=\"img\" style=\"background-image: url(images/place-2.jpg);\">
        \t\t\t\t<div class=\"text\">
        \t\t\t\t\t<h3>Canada</h3>
        \t\t\t\t\t<span>2 Tours</span>
        \t\t\t\t</div>
        \t\t\t</a>
        \t\t</div>
        \t</div>
        \t<div class=\"col-md-3 ftco-animate fadeInUp ftco-animated\">
        \t\t<div class=\"project-destination\">
        \t\t\t<a href=\"#\" class=\"img\" style=\"background-image: url(images/place-3.jpg);\">
        \t\t\t\t<div class=\"text\">
        \t\t\t\t\t<h3>Thailand</h3>
        \t\t\t\t\t<span>5 Tours</span>
        \t\t\t\t</div>
        \t\t\t</a>
        \t\t</div>
        \t</div>
        \t<div class=\"col-md-3 ftco-animate fadeInUp ftco-animated\">
        \t\t<div class=\"project-destination\">
        \t\t\t<a href=\"#\" class=\"img\" style=\"background-image: url(images/place-4.jpg);\">
        \t\t\t\t<div class=\"text\">
        \t\t\t\t\t<h3>Autralia</h3>
        \t\t\t\t\t<span>5 Tours</span>
        \t\t\t\t</div>
        \t\t\t</a>
        \t\t</div>
        \t</div>
        </div>
    \t</div>
    </section>

    <section class=\"ftco-section ftco-no-pt\">
    \t<div class=\"container\">
    \t\t<div class=\"row justify-content-center pb-4\">
          <div class=\"col-md-12 heading-section text-center ftco-animate fadeInUp ftco-animated\">
            <h2 class=\"mb-4\">Tour Destination</h2>
          </div>
        </div>
        <div class=\"row\">
        \t<div class=\"col-md-4 ftco-animate\">
        \t\t<div class=\"project-wrap\">
        \t\t\t<a href=\"#\" class=\"img\" style=\"background-image: url(images/destination-1.jpg);\"></a>
        \t\t\t<div class=\"text p-4\">
        \t\t\t\t<span class=\"price\">\$300/person</span>
        \t\t\t\t<span class=\"days\">8 Days Tour</span>
        \t\t\t\t<h3><a href=\"#\">Bali, Indonesia</a></h3>
        \t\t\t\t<p class=\"location\"><span class=\"ion-ios-map\"></span> Bali, Indonesia</p>
        \t\t\t\t<ul>
        \t\t\t\t\t<li><span class=\"flaticon-shower\"></span>2</li>
        \t\t\t\t\t<li><span class=\"flaticon-king-size\"></span>3</li>
        \t\t\t\t\t<li><span class=\"flaticon-mountains\"></span>Near Mountain</li>
        \t\t\t\t</ul>
        \t\t\t</div>
        \t\t</div>
        \t</div>
        \t<div class=\"col-md-4 ftco-animate\">
        \t\t<div class=\"project-wrap\">
        \t\t\t<a href=\"#\" class=\"img\" style=\"background-image: url(images/destination-2.jpg);\"></a>
        \t\t\t<div class=\"text p-4\">
        \t\t\t\t<span class=\"price\">\$300/person</span>
        \t\t\t\t<span class=\"days\">10 Days Tour</span>
        \t\t\t\t<h3><a href=\"#\">Bali, Indonesia</a></h3>
        \t\t\t\t<p class=\"location\"><span class=\"ion-ios-map\"></span> Bali, Indonesia</p>
        \t\t\t\t<ul>
        \t\t\t\t\t<li><span class=\"flaticon-shower\"></span>2</li>
        \t\t\t\t\t<li><span class=\"flaticon-king-size\"></span>3</li>
        \t\t\t\t\t<li><span class=\"flaticon-sun-umbrella\"></span>Near Beach</li>
        \t\t\t\t</ul>
        \t\t\t</div>
        \t\t</div>
        \t</div>
        \t<div class=\"col-md-4 ftco-animate\">
        \t\t<div class=\"project-wrap\">
        \t\t\t<a href=\"#\" class=\"img\" style=\"background-image: url(images/destination-3.jpg);\"></a>
        \t\t\t<div class=\"text p-4\">
        \t\t\t\t<span class=\"price\">\$300/person</span>
        \t\t\t\t<span class=\"days\">7 Days Tour</span>
        \t\t\t\t<h3><a href=\"#\">Bali, Indonesia</a></h3>
        \t\t\t\t<p class=\"location\"><span class=\"ion-ios-map\"></span> Bali, Indonesia</p>
        \t\t\t\t<ul>
        \t\t\t\t\t<li><span class=\"flaticon-shower\"></span>2</li>
        \t\t\t\t\t<li><span class=\"flaticon-king-size\"></span>3</li>
        \t\t\t\t\t<li><span class=\"flaticon-sun-umbrella\"></span>Near Beach</li>
        \t\t\t\t</ul>
        \t\t\t</div>
        \t\t</div>
        \t</div>

        \t<div class=\"col-md-4 ftco-animate\">
        \t\t<div class=\"project-wrap\">
        \t\t\t<a href=\"#\" class=\"img\" style=\"background-image: url(images/destination-4.jpg);\"></a>
        \t\t\t<div class=\"text p-4\">
        \t\t\t\t<span class=\"price\">\$300/person</span>
        \t\t\t\t<span class=\"days\">8 Days Tour</span>
        \t\t\t\t<h3><a href=\"#\">Bali, Indonesia</a></h3>
        \t\t\t\t<p class=\"location\"><span class=\"ion-ios-map\"></span> Bali, Indonesia</p>
        \t\t\t\t<ul>
        \t\t\t\t\t<li><span class=\"flaticon-shower\"></span>2</li>
        \t\t\t\t\t<li><span class=\"flaticon-king-size\"></span>3</li>
        \t\t\t\t\t<li><span class=\"flaticon-sun-umbrella\"></span>Near Beach</li>
        \t\t\t\t</ul>
        \t\t\t</div>
        \t\t</div>
        \t</div>
        \t<div class=\"col-md-4 ftco-animate\">
        \t\t<div class=\"project-wrap\">
        \t\t\t<a href=\"#\" class=\"img\" style=\"background-image: url(images/destination-5.jpg);\"></a>
        \t\t\t<div class=\"text p-4\">
        \t\t\t\t<span class=\"price\">\$300/person</span>
        \t\t\t\t<span class=\"days\">10 Days Tour</span>
        \t\t\t\t<h3><a href=\"#\">Bali, Indonesia</a></h3>
        \t\t\t\t<p class=\"location\"><span class=\"ion-ios-map\"></span> Bali, Indonesia</p>
        \t\t\t\t<ul>
        \t\t\t\t\t<li><span class=\"flaticon-shower\"></span>2</li>
        \t\t\t\t\t<li><span class=\"flaticon-king-size\"></span>3</li>
        \t\t\t\t\t<li><span class=\"flaticon-sun-umbrella\"></span>Near Beach</li>
        \t\t\t\t</ul>
        \t\t\t</div>
        \t\t</div>
        \t</div>
        \t<div class=\"col-md-4 ftco-animate\">
        \t\t<div class=\"project-wrap\">
        \t\t\t<a href=\"#\" class=\"img\" style=\"background-image: url(images/destination-6.jpg);\"></a>
        \t\t\t<div class=\"text p-4\">
        \t\t\t\t<span class=\"price\">\$300/person</span>
        \t\t\t\t<span class=\"days\">7 Days Tour</span>
        \t\t\t\t<h3><a href=\"#\">Bali, Indonesia</a></h3>
        \t\t\t\t<p class=\"location\"><span class=\"ion-ios-map\"></span> Bali, Indonesia</p>
        \t\t\t\t<ul>
        \t\t\t\t\t<li><span class=\"flaticon-shower\"></span>2</li>
        \t\t\t\t\t<li><span class=\"flaticon-king-size\"></span>3</li>
        \t\t\t\t\t<li><span class=\"flaticon-sun-umbrella\"></span>Near Beach</li>
        \t\t\t\t</ul>
        \t\t\t</div>
        \t\t</div>
        \t</div>
        </div>
    \t</div>
    </section>

    <section class=\"ftco-section testimony-section bg-bottom\" style=\"background-image: url(images/bg_3.jpg);\">
      <div class=\"container\">
        <div class=\"row justify-content-center pb-4\">
          <div class=\"col-md-7 text-center heading-section ftco-animate\">
            <h2 class=\"mb-4\">Tourist Feedback</h2>
          </div>
        </div>
        <div class=\"row ftco-animate\">
          <div class=\"col-md-12\">
            <div class=\"carousel-testimony owl-carousel ftco-owl owl-loaded owl-drag\">
              
              
              
              
              
            <div class=\"owl-stage-outer\"><div class=\"owl-stage\" style=\"transition: all 0s ease 0s; width: 3707px; transform: translate3d(-1011px, 0px, 0px);\"><div class=\"owl-item cloned\" style=\"width: 307px; margin-right: 30px;\"><div class=\"item\">
                <div class=\"testimony-wrap py-4\">
                  <div class=\"text\">
                    <p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class=\"d-flex align-items-center\">
                    \t<div class=\"user-img\" style=\"background-image: url(images/person_3.jpg)\"></div>
                    \t<div class=\"pl-3\">
\t\t                    <p class=\"name\">Roger Scott</p>
\t\t                    <span class=\"position\">Marketing Manager</span>
\t\t                  </div>
\t                  </div>
                  </div>
                </div>
              </div></div><div class=\"owl-item cloned\" style=\"width: 307px; margin-right: 30px;\"><div class=\"item\">
                <div class=\"testimony-wrap py-4\">
                  <div class=\"text\">
                    <p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class=\"d-flex align-items-center\">
                    \t<div class=\"user-img\" style=\"background-image: url(images/person_1.jpg)\"></div>
                    \t<div class=\"pl-3\">
\t\t                    <p class=\"name\">Roger Scott</p>
\t\t                    <span class=\"position\">Marketing Manager</span>
\t\t                  </div>
\t                  </div>
                  </div>
                </div>
              </div></div><div class=\"owl-item cloned\" style=\"width: 307px; margin-right: 30px;\"><div class=\"item\">
                <div class=\"testimony-wrap py-4\">
                  <div class=\"text\">
                    <p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class=\"d-flex align-items-center\">
                    \t<div class=\"user-img\" style=\"background-image: url(images/person_2.jpg)\"></div>
                    \t<div class=\"pl-3\">
\t\t                    <p class=\"name\">Roger Scott</p>
\t\t                    <span class=\"position\">Marketing Manager</span>
\t\t                  </div>
\t                  </div>
                  </div>
                </div>
              </div></div><div class=\"owl-item active center\" style=\"width: 307px; margin-right: 30px;\"><div class=\"item\">
                <div class=\"testimony-wrap py-4\">
                  <div class=\"text\">
                    <p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class=\"d-flex align-items-center\">
                    \t<div class=\"user-img\" style=\"background-image: url(images/person_1.jpg)\"></div>
                    \t<div class=\"pl-3\">
\t\t                    <p class=\"name\">Roger Scott</p>
\t\t                    <span class=\"position\">Marketing Manager</span>
\t\t                  </div>
\t                  </div>
                  </div>
                </div>
              </div></div><div class=\"owl-item\" style=\"width: 307px; margin-right: 30px;\"><div class=\"item\">
                <div class=\"testimony-wrap py-4\">
                  <div class=\"text\">
                    <p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class=\"d-flex align-items-center\">
                    \t<div class=\"user-img\" style=\"background-image: url(images/person_2.jpg)\"></div>
                    \t<div class=\"pl-3\">
\t\t                    <p class=\"name\">Roger Scott</p>
\t\t                    <span class=\"position\">Marketing Manager</span>
\t\t                  </div>
\t                  </div>
                  </div>
                </div>
              </div></div><div class=\"owl-item\" style=\"width: 307px; margin-right: 30px;\"><div class=\"item\">
                <div class=\"testimony-wrap py-4\">
                  <div class=\"text\">
                    <p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class=\"d-flex align-items-center\">
                    \t<div class=\"user-img\" style=\"background-image: url(images/person_3.jpg)\"></div>
                    \t<div class=\"pl-3\">
\t\t                    <p class=\"name\">Roger Scott</p>
\t\t                    <span class=\"position\">Marketing Manager</span>
\t\t                  </div>
\t                  </div>
                  </div>
                </div>
              </div></div><div class=\"owl-item\" style=\"width: 307px; margin-right: 30px;\"><div class=\"item\">
                <div class=\"testimony-wrap py-4\">
                  <div class=\"text\">
                    <p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class=\"d-flex align-items-center\">
                    \t<div class=\"user-img\" style=\"background-image: url(images/person_1.jpg)\"></div>
                    \t<div class=\"pl-3\">
\t\t                    <p class=\"name\">Roger Scott</p>
\t\t                    <span class=\"position\">Marketing Manager</span>
\t\t                  </div>
\t                  </div>
                  </div>
                </div>
              </div></div><div class=\"owl-item\" style=\"width: 307px; margin-right: 30px;\"><div class=\"item\">
                <div class=\"testimony-wrap py-4\">
                  <div class=\"text\">
                    <p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class=\"d-flex align-items-center\">
                    \t<div class=\"user-img\" style=\"background-image: url(images/person_2.jpg)\"></div>
                    \t<div class=\"pl-3\">
\t\t                    <p class=\"name\">Roger Scott</p>
\t\t                    <span class=\"position\">Marketing Manager</span>
\t\t                  </div>
\t                  </div>
                  </div>
                </div>
              </div></div><div class=\"owl-item cloned\" style=\"width: 307px; margin-right: 30px;\"><div class=\"item\">
                <div class=\"testimony-wrap py-4\">
                  <div class=\"text\">
                    <p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class=\"d-flex align-items-center\">
                    \t<div class=\"user-img\" style=\"background-image: url(images/person_1.jpg)\"></div>
                    \t<div class=\"pl-3\">
\t\t                    <p class=\"name\">Roger Scott</p>
\t\t                    <span class=\"position\">Marketing Manager</span>
\t\t                  </div>
\t                  </div>
                  </div>
                </div>
              </div></div><div class=\"owl-item cloned\" style=\"width: 307px; margin-right: 30px;\"><div class=\"item\">
                <div class=\"testimony-wrap py-4\">
                  <div class=\"text\">
                    <p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class=\"d-flex align-items-center\">
                    \t<div class=\"user-img\" style=\"background-image: url(images/person_2.jpg)\"></div>
                    \t<div class=\"pl-3\">
\t\t                    <p class=\"name\">Roger Scott</p>
\t\t                    <span class=\"position\">Marketing Manager</span>
\t\t                  </div>
\t                  </div>
                  </div>
                </div>
              </div></div><div class=\"owl-item cloned\" style=\"width: 307px; margin-right: 30px;\"><div class=\"item\">
                <div class=\"testimony-wrap py-4\">
                  <div class=\"text\">
                    <p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class=\"d-flex align-items-center\">
                    \t<div class=\"user-img\" style=\"background-image: url(images/person_3.jpg)\"></div>
                    \t<div class=\"pl-3\">
\t\t                    <p class=\"name\">Roger Scott</p>
\t\t                    <span class=\"position\">Marketing Manager</span>
\t\t                  </div>
\t                  </div>
                  </div>
                </div>
              </div></div></div></div><div class=\"owl-nav disabled\"><button role=\"presentation\" class=\"owl-prev\"><span class=\"ion-ios-arrow-back\"></span></button><button role=\"presentation\" class=\"owl-next\"><span class=\"ion-ios-arrow-forward\"></span></button></div><div class=\"owl-dots\"><button class=\"owl-dot active\"><span></span></button><button class=\"owl-dot\"><span></span></button><button class=\"owl-dot\"><span></span></button><button class=\"owl-dot\"><span></span></button><button class=\"owl-dot\"><span></span></button></div></div>
          </div>
        </div>
      </div>
    </section>


    <section class=\"ftco-section\">
      <div class=\"container\">
      \t<div class=\"row justify-content-center pb-4\">
          <div class=\"col-md-12 heading-section text-center ftco-animate\">
            <h2 class=\"mb-4\">Recent Post</h2>
          </div>
        </div>
        <div class=\"row d-flex\">
          <div class=\"col-md-4 d-flex ftco-animate\">
          \t<div class=\"blog-entry justify-content-end\">
              <a href=\"blog-single.html\" class=\"block-20\" style=\"background-image: url('images/image_1.jpg');\">
              </a>
              <div class=\"text mt-3 float-right d-block\">
              \t<div class=\"d-flex align-items-center mb-4 topp\">
              \t\t<div class=\"one\">
              \t\t\t<span class=\"day\">21</span>
              \t\t</div>
              \t\t<div class=\"two\">
              \t\t\t<span class=\"yr\">2019</span>
              \t\t\t<span class=\"mos\">August</span>
              \t\t</div>
              \t</div>
                <h3 class=\"heading\"><a href=\"#\">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class=\"col-md-4 d-flex ftco-animate\">
          \t<div class=\"blog-entry justify-content-end\">
              <a href=\"blog-single.html\" class=\"block-20\" style=\"background-image: url('images/image_2.jpg');\">
              </a>
              <div class=\"text mt-3 float-right d-block\">
              \t<div class=\"d-flex align-items-center mb-4 topp\">
              \t\t<div class=\"one\">
              \t\t\t<span class=\"day\">21</span>
              \t\t</div>
              \t\t<div class=\"two\">
              \t\t\t<span class=\"yr\">2019</span>
              \t\t\t<span class=\"mos\">August</span>
              \t\t</div>
              \t</div>
                <h3 class=\"heading\"><a href=\"#\">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class=\"col-md-4 d-flex ftco-animate\">
          \t<div class=\"blog-entry\">
              <a href=\"blog-single.html\" class=\"block-20\" style=\"background-image: url('images/image_3.jpg');\">
              </a>
              <div class=\"text mt-3 float-right d-block\">
              \t<div class=\"d-flex align-items-center mb-4 topp\">
              \t\t<div class=\"one\">
              \t\t\t<span class=\"day\">21</span>
              \t\t</div>
              \t\t<div class=\"two\">
              \t\t\t<span class=\"yr\">2019</span>
              \t\t\t<span class=\"mos\">August</span>
              \t\t</div>
              \t</div>
                <h3 class=\"heading\"><a href=\"#\">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class=\"ftco-footer bg-bottom\" style=\"background-image: url(images/footer-bg.jpg);\">
      <div class=\"container\">
        <div class=\"row mb-5\">
          <div class=\"col-md\">
            <div class=\"ftco-footer-widget mb-4\">
              <h2 class=\"ftco-heading-2\">Vacation</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class=\"ftco-footer-social list-unstyled float-md-left float-lft mt-5\">
                <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-twitter\"></span></a></li>
                <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-facebook\"></span></a></li>
                <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-instagram\"></span></a></li>
              </ul>
            </div>
          </div>
          <div class=\"col-md\">
            <div class=\"ftco-footer-widget mb-4 ml-md-5\">
              <h2 class=\"ftco-heading-2\">Infromation</h2>
              <ul class=\"list-unstyled\">
                <li><a href=\"#\" class=\"py-2 d-block\">Online Enquiry</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">General Enquiries</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Booking Conditions</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Privacy and Policy</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Refund Policy</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Call Us</a></li>
              </ul>
            </div>
          </div>
          <div class=\"col-md\">
             <div class=\"ftco-footer-widget mb-4\">
              <h2 class=\"ftco-heading-2\">Experience</h2>
              <ul class=\"list-unstyled\">
                <li><a href=\"#\" class=\"py-2 d-block\">Adventure</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Hotel and Restaurant</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Beach</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Nature</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Camping</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Party</a></li>
              </ul>
            </div>
          </div>
          <div class=\"col-md\">
            <div class=\"ftco-footer-widget mb-4\">
            \t<h2 class=\"ftco-heading-2\">Have a Questions?</h2>
            \t<div class=\"block-23 mb-3\">
\t              <ul>
\t                <li><span class=\"icon icon-map-marker\"></span><span class=\"text\">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
\t                <li><a href=\"#\"><span class=\"icon icon-phone\"></span><span class=\"text\">+2 392 3929 210</span></a></li>
\t                <li><a href=\"#\"><span class=\"icon icon-envelope\"></span><span class=\"text\">info@yourdomain.com</span></a></li>
\t              </ul>
\t            </div>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-12 text-center\">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright ©<script>document.write(new Date().getFullYear());</script>2024 All rights reserved | This template is made with <i class=\"icon-heart color-danger\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id=\"ftco-loader\" class=\"fullscreen\"><svg class=\"circular\" width=\"48px\" height=\"48px\"><circle class=\"path-bg\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke=\"#eeeeee\"></circle><circle class=\"path\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke=\"#F96D00\"></circle></svg></div>

";
        // line 705
        $this->displayBlock('js', $context, $blocks);
        // line 724
        echo "</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 705
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 706
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 707
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-migrate-3.0.1.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 708
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 709
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 710
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 711
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 712
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 713
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 714
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 715
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/aos.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 716
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.animateNumber.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 717
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 718
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scrollax.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 719
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 720
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/google-map.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 721
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "service/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  942 => 721,  938 => 720,  934 => 719,  930 => 718,  926 => 717,  922 => 716,  918 => 715,  914 => 714,  910 => 713,  906 => 712,  902 => 711,  898 => 710,  894 => 709,  890 => 708,  886 => 707,  881 => 706,  871 => 705,  860 => 724,  858 => 705,  180 => 29,  170 => 28,  158 => 25,  154 => 24,  150 => 23,  144 => 20,  140 => 19,  135 => 17,  130 => 15,  125 => 13,  121 => 12,  117 => 11,  112 => 9,  108 => 8,  104 => 6,  94 => 5,  75 => 2,  64 => 726,  62 => 28,  58 => 26,  56 => 5,  50 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"en\"><head>
    <title> {% block title %}Vacation - Free Bootstrap 4 Template by Colorlib {% endblock %}</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    {% block css%}
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"{{asset('css/open-iconic-bootstrap.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('css/animate.css')}}\">
    
    <link rel=\"stylesheet\" href=\"{{asset('css/owl.carousel.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('css/owl.theme.default.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('css/magnific-popup.css')}}\">

    <link rel=\"stylesheet\" href=\"{{asset('css/aos.css')}}\">

    <link rel=\"stylesheet\" href=\"{{asset('css/ionicons.min.css')}}\">

    <link rel=\"stylesheet\" href=\"{{asset('css/bootstrap-datepicker.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('css/jquery.timepicker.css')}}\">

    
    <link rel=\"stylesheet\" href=\"{{asset('css/flaticon.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('css/icomoon.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('css/style.css')}}\">
  <style type=\"text/css\">.scrollax-performance, .scrollax-performance *, .scrollax-performance *:before, .scrollax-performance *:after { pointer-events: none !important; -webkit-animation-play-state: paused !important; animation-play-state: paused !important; };</style><script type=\"text/javascript\" charset=\"UTF-8\" src=\"https://maps.googleapis.com/maps-api-v3/api/js/55/11/intl/fr_ALL/common.js\"></script><script type=\"text/javascript\" charset=\"UTF-8\" src=\"https://maps.googleapis.com/maps-api-v3/api/js/55/11/intl/fr_ALL/util.js\"></script>{% endblock %} 
  </head>
  {% block body %}
  <body data-aos-easing=\"slide\" data-aos-duration=\"800\" data-aos-delay=\"0\">
\t  <nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
\t    <div class=\"container\">
\t      <a class=\"navbar-brand\" href=\"index.html\">Vacation<span>Travel Agency</span></a>
\t      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t        <span class=\"oi oi-menu\"></span> Menu
\t      </button>

\t      <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
\t        <ul class=\"navbar-nav ml-auto\">
\t          <li class=\"nav-item active\"><a href=\"index.html\" class=\"nav-link\">Home</a></li>
\t          <li class=\"nav-item\"><a href=\"about.html\" class=\"nav-link\">About</a></li>
\t          <li class=\"nav-item\"><a href=\"destination.html\" class=\"nav-link\">Destination</a></li>
\t          <li class=\"nav-item\"><a href=\"blog.html\" class=\"nav-link\">Blog</a></li>
\t          <li class=\"nav-item\"><a href=\"contact.html\" class=\"nav-link\">Contact</a></li>
\t          <li class=\"nav-item cta\"><a href=\"#\" class=\"nav-link\">Book Now</a></li>

\t        </ul>
\t      </div>
\t    </div>
\t  </nav>
    <!-- END nav -->
    
<div class=\"hero-wrap js-fullheight\" style=\"background-image: url('/images/1.jpg');\">
      <div class=\"overlay\"></div>
      <div class=\"container\">
        <div class=\"row no-gutters slider-text js-fullheight align-items-center justify-content-center\" data-scrollax-parent=\"true\" style=\"height: 641px;\">
          <div class=\"col-md-9 text text-center ftco-animate fadeInUp ftco-animated\" data-scrollax=\" properties: { translateY: '70%' }\" style=\"transform: translateZ(0px) translateY(3.47406%);\">
          \t<a href=\"https://vimeo.com/45830194\" class=\"icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4\">
          \t\t<span class=\"ion-ios-play\"></span>
            </a>
            <p class=\"caps\" data-scrollax=\"properties: { translateY: '30%', opacity: 1.6 }\" style=\"opacity: 0.920593; transform: translateZ(0px) translateY(1.48888%);\">Travel to the any corner of the world, without going around in circles</p>
            <h1 data-scrollax=\"properties: { translateY: '30%', opacity: 1.6 }\" style=\"opacity: 0.920593; transform: translateZ(0px) translateY(1.48888%);\">Make Your Tour Amazing With Us</h1>
          </div>
        </div>
      </div>
    </div>

    <section class=\"ftco-section ftco-no-pb ftco-no-pt\">
    \t<div class=\"container\">
\t    \t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"search-wrap-1 ftco-animate p-4 fadeInUp ftco-animated\">
\t\t\t\t\t\t\t<form action=\"#\" class=\"search-property-1\">
\t\t        \t\t<div class=\"row\">
\t\t        \t\t\t<div class=\"col-lg align-items-end\">
\t\t        \t\t\t\t<div class=\"form-group\">
\t\t        \t\t\t\t\t<label for=\"#\">Destination</label>
\t\t          \t\t\t\t<div class=\"form-field\">
\t\t          \t\t\t\t\t<div class=\"icon\"><span class=\"ion-ios-search\"></span></div>
\t\t\t\t                <input type=\"text\" class=\"form-control\" placeholder=\"Search place\">
\t\t\t\t              </div>
\t\t\t              </div>
\t\t        \t\t\t</div>
\t\t        \t\t\t<div class=\"col-lg align-items-end\">
\t\t        \t\t\t\t<div class=\"form-group\">
\t\t        \t\t\t\t\t<label for=\"#\">Check-in date</label>
\t\t        \t\t\t\t\t<div class=\"form-field\">
\t\t          \t\t\t\t\t<div class=\"icon\"><span class=\"ion-ios-calendar\"></span></div>
\t\t\t\t                <input type=\"text\" class=\"form-control checkin_date\" placeholder=\"Check In Date\">
\t\t\t\t              </div>
\t\t\t              </div>
\t\t        \t\t\t</div>
\t\t        \t\t\t<div class=\"col-lg align-items-end\">
\t\t        \t\t\t\t<div class=\"form-group\">
\t\t        \t\t\t\t\t<label for=\"#\">Check-out date</label>
\t\t        \t\t\t\t\t<div class=\"form-field\">
\t\t          \t\t\t\t\t<div class=\"icon\"><span class=\"ion-ios-calendar\"></span></div>
\t\t\t\t                <input type=\"text\" class=\"form-control checkout_date\" placeholder=\"Check Out Date\">
\t\t\t\t              </div>
\t\t\t              </div>
\t\t        \t\t\t</div>
\t\t        \t\t\t<div class=\"col-lg align-items-end\">
\t\t        \t\t\t\t<div class=\"form-group\">
\t\t        \t\t\t\t\t<label for=\"#\">Price Limit</label>
\t\t        \t\t\t\t\t<div class=\"form-field\">
\t\t          \t\t\t\t\t<div class=\"select-wrap\">
\t\t                      <div class=\"icon\"><span class=\"ion-ios-arrow-down\"></span></div>
\t\t                      <select name=\"\" id=\"\" class=\"form-control\">
\t\t                        <option value=\"\">\$5,000</option>
\t\t                        <option value=\"\">\$10,000</option>
\t\t                        <option value=\"\">\$50,000</option>
\t\t                        <option value=\"\">\$100,000</option>
\t\t                        <option value=\"\">\$200,000</option>
\t\t                        <option value=\"\">\$300,000</option>
\t\t                        <option value=\"\">\$400,000</option>
\t\t                        <option value=\"\">\$500,000</option>
\t\t                        <option value=\"\">\$600,000</option>
\t\t                        <option value=\"\">\$700,000</option>
\t\t                        <option value=\"\">\$800,000</option>
\t\t                        <option value=\"\">\$900,000</option>
\t\t                        <option value=\"\">\$1,000,000</option>
\t\t                        <option value=\"\">\$2,000,000</option>
\t\t                      </select>
\t\t                    </div>
\t\t\t\t              </div>
\t\t\t              </div>
\t\t        \t\t\t</div>
\t\t        \t\t\t<div class=\"col-lg align-self-end\">
\t\t        \t\t\t\t<div class=\"form-group\">
\t\t        \t\t\t\t\t<div class=\"form-field\">
\t\t\t\t                <input type=\"submit\" value=\"Search\" class=\"form-control btn btn-primary\">
\t\t\t\t              </div>
\t\t\t              </div>
\t\t        \t\t\t</div>
\t\t        \t\t</div>
\t\t        \t</form>
\t\t        </div>
\t\t\t\t\t</div>
\t    \t</div>
\t    </div>
    </section>

    <section class=\"ftco-section services-section bg-light\">
      <div class=\"container\">
        <div class=\"row d-flex\">
          <div class=\"col-md-6 order-md-last heading-section pl-md-5 ftco-animate fadeInUp ftco-animated\">
          \t<h2 class=\"mb-4\">It's time to start your adventure</h2>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
            A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href=\"#\" class=\"btn btn-primary py-3 px-4\">Search Destination</a></p>
          </div>
          <div class=\"col-md-6\">
          \t<div class=\"row\">
          \t\t<div class=\"col-md-6 d-flex align-self-stretch ftco-animate fadeInUp ftco-animated\">
\t\t            <div class=\"media block-6 services d-block\">
\t\t              <div class=\"icon\"><span class=\"flaticon-paragliding\"></span></div>
\t\t              <div class=\"media-body\">
\t\t                <h3 class=\"heading mb-3\">Activities</h3>
\t\t                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
\t\t              </div>
\t\t            </div>      
\t\t          </div>
\t\t          <div class=\"col-md-6 d-flex align-self-stretch ftco-animate fadeInUp ftco-animated\">
\t\t            <div class=\"media block-6 services d-block\">
\t\t              <div class=\"icon\"><span class=\"flaticon-route\"></span></div>
\t\t              <div class=\"media-body\">
\t\t                <h3 class=\"heading mb-3\">Travel Arrangements</h3>
\t\t                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
\t\t              </div>
\t\t            </div>    
\t\t          </div>
\t\t          <div class=\"col-md-6 d-flex align-self-stretch ftco-animate fadeInUp ftco-animated\">
\t\t            <div class=\"media block-6 services d-block\">
\t\t              <div class=\"icon\"><span class=\"flaticon-tour-guide\"></span></div>
\t\t              <div class=\"media-body\">
\t\t                <h3 class=\"heading mb-3\">Private Guide</h3>
\t\t                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
\t\t              </div>
\t\t            </div>      
\t\t          </div>
\t\t          <div class=\"col-md-6 d-flex align-self-stretch ftco-animate fadeInUp ftco-animated\">
\t\t            <div class=\"media block-6 services d-block\">
\t\t              <div class=\"icon\"><span class=\"flaticon-map\"></span></div>
\t\t              <div class=\"media-body\">
\t\t                <h3 class=\"heading mb-3\">Location Manager</h3>
\t\t                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
\t\t              </div>
\t\t            </div>      
\t\t          </div>
          \t</div>
          </div>
        </div>
      </div>
    </section>

    <section class=\"ftco-counter img\" id=\"section-counter\">
    \t<div class=\"container\">
    \t\t<div class=\"row d-flex\">
    \t\t\t<div class=\"col-md-6 d-flex\">
    \t\t\t\t<div class=\"img d-flex align-self-stretch\" style=\"background-image:url(images/about.jpg);\"></div>
    \t\t\t</div>
    \t\t\t<div class=\"col-md-6 pl-md-5 py-5\">
    \t\t\t\t<div class=\"row justify-content-start pb-3\">
\t\t          <div class=\"col-md-12 heading-section ftco-animate fadeInUp ftco-animated\">
\t\t            <h2 class=\"mb-4\">Make Your Tour Memorable and Safe With Us</h2>
\t\t            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
\t\t          </div>
\t\t        </div>
\t\t    \t\t<div class=\"row\">
\t\t          <div class=\"col-md-4 justify-content-center counter-wrap ftco-animate fadeInUp ftco-animated\">
\t\t            <div class=\"block-18 text-center mb-4\">
\t\t              <div class=\"text\">
\t\t                <strong class=\"number\" data-number=\"300\">300</strong>
\t\t                <span>Successful Tours</span>
\t\t              </div>
\t\t            </div>
\t\t          </div>
\t\t          <div class=\"col-md-4 justify-content-center counter-wrap ftco-animate fadeInUp ftco-animated\">
\t\t            <div class=\"block-18 text-center mb-4\">
\t\t              <div class=\"text\">
\t\t                <strong class=\"number\" data-number=\"24000\">24,000</strong>
\t\t                <span>Happy Tourist</span>
\t\t              </div>
\t\t            </div>
\t\t          </div>
\t\t          <div class=\"col-md-4 justify-content-center counter-wrap ftco-animate fadeInUp ftco-animated\">
\t\t            <div class=\"block-18 text-center mb-4\">
\t\t              <div class=\"text\">
\t\t                <strong class=\"number\" data-number=\"200\">200</strong>
\t\t                <span>Place Explored</span>
\t\t              </div>
\t\t            </div>
\t\t          </div>
\t\t        </div>
\t        </div>
        </div>
    \t</div>
    </section>


\t\t<section class=\"ftco-section\">
    \t<div class=\"container\">
    \t\t<div class=\"row justify-content-center pb-4\">
          <div class=\"col-md-12 heading-section text-center ftco-animate fadeInUp ftco-animated\">
            <h2 class=\"mb-4\">Best Place Destination</h2>
          </div>
        </div>
        <div class=\"row\">
        \t<div class=\"col-md-3 ftco-animate fadeInUp ftco-animated\">
        \t\t<div class=\"project-destination\">
        \t\t\t<a href=\"#\" class=\"img\" style=\"background-image: url(images/place-1.jpg);\">
        \t\t\t\t<div class=\"text\">
        \t\t\t\t\t<h3>Singapore</h3>
        \t\t\t\t\t<span>8 Tours</span>
        \t\t\t\t</div>
        \t\t\t</a>
        \t\t</div>
        \t</div>
        \t<div class=\"col-md-3 ftco-animate fadeInUp ftco-animated\">
        \t\t<div class=\"project-destination\">
        \t\t\t<a href=\"#\" class=\"img\" style=\"background-image: url(images/place-2.jpg);\">
        \t\t\t\t<div class=\"text\">
        \t\t\t\t\t<h3>Canada</h3>
        \t\t\t\t\t<span>2 Tours</span>
        \t\t\t\t</div>
        \t\t\t</a>
        \t\t</div>
        \t</div>
        \t<div class=\"col-md-3 ftco-animate fadeInUp ftco-animated\">
        \t\t<div class=\"project-destination\">
        \t\t\t<a href=\"#\" class=\"img\" style=\"background-image: url(images/place-3.jpg);\">
        \t\t\t\t<div class=\"text\">
        \t\t\t\t\t<h3>Thailand</h3>
        \t\t\t\t\t<span>5 Tours</span>
        \t\t\t\t</div>
        \t\t\t</a>
        \t\t</div>
        \t</div>
        \t<div class=\"col-md-3 ftco-animate fadeInUp ftco-animated\">
        \t\t<div class=\"project-destination\">
        \t\t\t<a href=\"#\" class=\"img\" style=\"background-image: url(images/place-4.jpg);\">
        \t\t\t\t<div class=\"text\">
        \t\t\t\t\t<h3>Autralia</h3>
        \t\t\t\t\t<span>5 Tours</span>
        \t\t\t\t</div>
        \t\t\t</a>
        \t\t</div>
        \t</div>
        </div>
    \t</div>
    </section>

    <section class=\"ftco-section ftco-no-pt\">
    \t<div class=\"container\">
    \t\t<div class=\"row justify-content-center pb-4\">
          <div class=\"col-md-12 heading-section text-center ftco-animate fadeInUp ftco-animated\">
            <h2 class=\"mb-4\">Tour Destination</h2>
          </div>
        </div>
        <div class=\"row\">
        \t<div class=\"col-md-4 ftco-animate\">
        \t\t<div class=\"project-wrap\">
        \t\t\t<a href=\"#\" class=\"img\" style=\"background-image: url(images/destination-1.jpg);\"></a>
        \t\t\t<div class=\"text p-4\">
        \t\t\t\t<span class=\"price\">\$300/person</span>
        \t\t\t\t<span class=\"days\">8 Days Tour</span>
        \t\t\t\t<h3><a href=\"#\">Bali, Indonesia</a></h3>
        \t\t\t\t<p class=\"location\"><span class=\"ion-ios-map\"></span> Bali, Indonesia</p>
        \t\t\t\t<ul>
        \t\t\t\t\t<li><span class=\"flaticon-shower\"></span>2</li>
        \t\t\t\t\t<li><span class=\"flaticon-king-size\"></span>3</li>
        \t\t\t\t\t<li><span class=\"flaticon-mountains\"></span>Near Mountain</li>
        \t\t\t\t</ul>
        \t\t\t</div>
        \t\t</div>
        \t</div>
        \t<div class=\"col-md-4 ftco-animate\">
        \t\t<div class=\"project-wrap\">
        \t\t\t<a href=\"#\" class=\"img\" style=\"background-image: url(images/destination-2.jpg);\"></a>
        \t\t\t<div class=\"text p-4\">
        \t\t\t\t<span class=\"price\">\$300/person</span>
        \t\t\t\t<span class=\"days\">10 Days Tour</span>
        \t\t\t\t<h3><a href=\"#\">Bali, Indonesia</a></h3>
        \t\t\t\t<p class=\"location\"><span class=\"ion-ios-map\"></span> Bali, Indonesia</p>
        \t\t\t\t<ul>
        \t\t\t\t\t<li><span class=\"flaticon-shower\"></span>2</li>
        \t\t\t\t\t<li><span class=\"flaticon-king-size\"></span>3</li>
        \t\t\t\t\t<li><span class=\"flaticon-sun-umbrella\"></span>Near Beach</li>
        \t\t\t\t</ul>
        \t\t\t</div>
        \t\t</div>
        \t</div>
        \t<div class=\"col-md-4 ftco-animate\">
        \t\t<div class=\"project-wrap\">
        \t\t\t<a href=\"#\" class=\"img\" style=\"background-image: url(images/destination-3.jpg);\"></a>
        \t\t\t<div class=\"text p-4\">
        \t\t\t\t<span class=\"price\">\$300/person</span>
        \t\t\t\t<span class=\"days\">7 Days Tour</span>
        \t\t\t\t<h3><a href=\"#\">Bali, Indonesia</a></h3>
        \t\t\t\t<p class=\"location\"><span class=\"ion-ios-map\"></span> Bali, Indonesia</p>
        \t\t\t\t<ul>
        \t\t\t\t\t<li><span class=\"flaticon-shower\"></span>2</li>
        \t\t\t\t\t<li><span class=\"flaticon-king-size\"></span>3</li>
        \t\t\t\t\t<li><span class=\"flaticon-sun-umbrella\"></span>Near Beach</li>
        \t\t\t\t</ul>
        \t\t\t</div>
        \t\t</div>
        \t</div>

        \t<div class=\"col-md-4 ftco-animate\">
        \t\t<div class=\"project-wrap\">
        \t\t\t<a href=\"#\" class=\"img\" style=\"background-image: url(images/destination-4.jpg);\"></a>
        \t\t\t<div class=\"text p-4\">
        \t\t\t\t<span class=\"price\">\$300/person</span>
        \t\t\t\t<span class=\"days\">8 Days Tour</span>
        \t\t\t\t<h3><a href=\"#\">Bali, Indonesia</a></h3>
        \t\t\t\t<p class=\"location\"><span class=\"ion-ios-map\"></span> Bali, Indonesia</p>
        \t\t\t\t<ul>
        \t\t\t\t\t<li><span class=\"flaticon-shower\"></span>2</li>
        \t\t\t\t\t<li><span class=\"flaticon-king-size\"></span>3</li>
        \t\t\t\t\t<li><span class=\"flaticon-sun-umbrella\"></span>Near Beach</li>
        \t\t\t\t</ul>
        \t\t\t</div>
        \t\t</div>
        \t</div>
        \t<div class=\"col-md-4 ftco-animate\">
        \t\t<div class=\"project-wrap\">
        \t\t\t<a href=\"#\" class=\"img\" style=\"background-image: url(images/destination-5.jpg);\"></a>
        \t\t\t<div class=\"text p-4\">
        \t\t\t\t<span class=\"price\">\$300/person</span>
        \t\t\t\t<span class=\"days\">10 Days Tour</span>
        \t\t\t\t<h3><a href=\"#\">Bali, Indonesia</a></h3>
        \t\t\t\t<p class=\"location\"><span class=\"ion-ios-map\"></span> Bali, Indonesia</p>
        \t\t\t\t<ul>
        \t\t\t\t\t<li><span class=\"flaticon-shower\"></span>2</li>
        \t\t\t\t\t<li><span class=\"flaticon-king-size\"></span>3</li>
        \t\t\t\t\t<li><span class=\"flaticon-sun-umbrella\"></span>Near Beach</li>
        \t\t\t\t</ul>
        \t\t\t</div>
        \t\t</div>
        \t</div>
        \t<div class=\"col-md-4 ftco-animate\">
        \t\t<div class=\"project-wrap\">
        \t\t\t<a href=\"#\" class=\"img\" style=\"background-image: url(images/destination-6.jpg);\"></a>
        \t\t\t<div class=\"text p-4\">
        \t\t\t\t<span class=\"price\">\$300/person</span>
        \t\t\t\t<span class=\"days\">7 Days Tour</span>
        \t\t\t\t<h3><a href=\"#\">Bali, Indonesia</a></h3>
        \t\t\t\t<p class=\"location\"><span class=\"ion-ios-map\"></span> Bali, Indonesia</p>
        \t\t\t\t<ul>
        \t\t\t\t\t<li><span class=\"flaticon-shower\"></span>2</li>
        \t\t\t\t\t<li><span class=\"flaticon-king-size\"></span>3</li>
        \t\t\t\t\t<li><span class=\"flaticon-sun-umbrella\"></span>Near Beach</li>
        \t\t\t\t</ul>
        \t\t\t</div>
        \t\t</div>
        \t</div>
        </div>
    \t</div>
    </section>

    <section class=\"ftco-section testimony-section bg-bottom\" style=\"background-image: url(images/bg_3.jpg);\">
      <div class=\"container\">
        <div class=\"row justify-content-center pb-4\">
          <div class=\"col-md-7 text-center heading-section ftco-animate\">
            <h2 class=\"mb-4\">Tourist Feedback</h2>
          </div>
        </div>
        <div class=\"row ftco-animate\">
          <div class=\"col-md-12\">
            <div class=\"carousel-testimony owl-carousel ftco-owl owl-loaded owl-drag\">
              
              
              
              
              
            <div class=\"owl-stage-outer\"><div class=\"owl-stage\" style=\"transition: all 0s ease 0s; width: 3707px; transform: translate3d(-1011px, 0px, 0px);\"><div class=\"owl-item cloned\" style=\"width: 307px; margin-right: 30px;\"><div class=\"item\">
                <div class=\"testimony-wrap py-4\">
                  <div class=\"text\">
                    <p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class=\"d-flex align-items-center\">
                    \t<div class=\"user-img\" style=\"background-image: url(images/person_3.jpg)\"></div>
                    \t<div class=\"pl-3\">
\t\t                    <p class=\"name\">Roger Scott</p>
\t\t                    <span class=\"position\">Marketing Manager</span>
\t\t                  </div>
\t                  </div>
                  </div>
                </div>
              </div></div><div class=\"owl-item cloned\" style=\"width: 307px; margin-right: 30px;\"><div class=\"item\">
                <div class=\"testimony-wrap py-4\">
                  <div class=\"text\">
                    <p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class=\"d-flex align-items-center\">
                    \t<div class=\"user-img\" style=\"background-image: url(images/person_1.jpg)\"></div>
                    \t<div class=\"pl-3\">
\t\t                    <p class=\"name\">Roger Scott</p>
\t\t                    <span class=\"position\">Marketing Manager</span>
\t\t                  </div>
\t                  </div>
                  </div>
                </div>
              </div></div><div class=\"owl-item cloned\" style=\"width: 307px; margin-right: 30px;\"><div class=\"item\">
                <div class=\"testimony-wrap py-4\">
                  <div class=\"text\">
                    <p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class=\"d-flex align-items-center\">
                    \t<div class=\"user-img\" style=\"background-image: url(images/person_2.jpg)\"></div>
                    \t<div class=\"pl-3\">
\t\t                    <p class=\"name\">Roger Scott</p>
\t\t                    <span class=\"position\">Marketing Manager</span>
\t\t                  </div>
\t                  </div>
                  </div>
                </div>
              </div></div><div class=\"owl-item active center\" style=\"width: 307px; margin-right: 30px;\"><div class=\"item\">
                <div class=\"testimony-wrap py-4\">
                  <div class=\"text\">
                    <p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class=\"d-flex align-items-center\">
                    \t<div class=\"user-img\" style=\"background-image: url(images/person_1.jpg)\"></div>
                    \t<div class=\"pl-3\">
\t\t                    <p class=\"name\">Roger Scott</p>
\t\t                    <span class=\"position\">Marketing Manager</span>
\t\t                  </div>
\t                  </div>
                  </div>
                </div>
              </div></div><div class=\"owl-item\" style=\"width: 307px; margin-right: 30px;\"><div class=\"item\">
                <div class=\"testimony-wrap py-4\">
                  <div class=\"text\">
                    <p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class=\"d-flex align-items-center\">
                    \t<div class=\"user-img\" style=\"background-image: url(images/person_2.jpg)\"></div>
                    \t<div class=\"pl-3\">
\t\t                    <p class=\"name\">Roger Scott</p>
\t\t                    <span class=\"position\">Marketing Manager</span>
\t\t                  </div>
\t                  </div>
                  </div>
                </div>
              </div></div><div class=\"owl-item\" style=\"width: 307px; margin-right: 30px;\"><div class=\"item\">
                <div class=\"testimony-wrap py-4\">
                  <div class=\"text\">
                    <p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class=\"d-flex align-items-center\">
                    \t<div class=\"user-img\" style=\"background-image: url(images/person_3.jpg)\"></div>
                    \t<div class=\"pl-3\">
\t\t                    <p class=\"name\">Roger Scott</p>
\t\t                    <span class=\"position\">Marketing Manager</span>
\t\t                  </div>
\t                  </div>
                  </div>
                </div>
              </div></div><div class=\"owl-item\" style=\"width: 307px; margin-right: 30px;\"><div class=\"item\">
                <div class=\"testimony-wrap py-4\">
                  <div class=\"text\">
                    <p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class=\"d-flex align-items-center\">
                    \t<div class=\"user-img\" style=\"background-image: url(images/person_1.jpg)\"></div>
                    \t<div class=\"pl-3\">
\t\t                    <p class=\"name\">Roger Scott</p>
\t\t                    <span class=\"position\">Marketing Manager</span>
\t\t                  </div>
\t                  </div>
                  </div>
                </div>
              </div></div><div class=\"owl-item\" style=\"width: 307px; margin-right: 30px;\"><div class=\"item\">
                <div class=\"testimony-wrap py-4\">
                  <div class=\"text\">
                    <p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class=\"d-flex align-items-center\">
                    \t<div class=\"user-img\" style=\"background-image: url(images/person_2.jpg)\"></div>
                    \t<div class=\"pl-3\">
\t\t                    <p class=\"name\">Roger Scott</p>
\t\t                    <span class=\"position\">Marketing Manager</span>
\t\t                  </div>
\t                  </div>
                  </div>
                </div>
              </div></div><div class=\"owl-item cloned\" style=\"width: 307px; margin-right: 30px;\"><div class=\"item\">
                <div class=\"testimony-wrap py-4\">
                  <div class=\"text\">
                    <p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class=\"d-flex align-items-center\">
                    \t<div class=\"user-img\" style=\"background-image: url(images/person_1.jpg)\"></div>
                    \t<div class=\"pl-3\">
\t\t                    <p class=\"name\">Roger Scott</p>
\t\t                    <span class=\"position\">Marketing Manager</span>
\t\t                  </div>
\t                  </div>
                  </div>
                </div>
              </div></div><div class=\"owl-item cloned\" style=\"width: 307px; margin-right: 30px;\"><div class=\"item\">
                <div class=\"testimony-wrap py-4\">
                  <div class=\"text\">
                    <p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class=\"d-flex align-items-center\">
                    \t<div class=\"user-img\" style=\"background-image: url(images/person_2.jpg)\"></div>
                    \t<div class=\"pl-3\">
\t\t                    <p class=\"name\">Roger Scott</p>
\t\t                    <span class=\"position\">Marketing Manager</span>
\t\t                  </div>
\t                  </div>
                  </div>
                </div>
              </div></div><div class=\"owl-item cloned\" style=\"width: 307px; margin-right: 30px;\"><div class=\"item\">
                <div class=\"testimony-wrap py-4\">
                  <div class=\"text\">
                    <p class=\"mb-4\">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class=\"d-flex align-items-center\">
                    \t<div class=\"user-img\" style=\"background-image: url(images/person_3.jpg)\"></div>
                    \t<div class=\"pl-3\">
\t\t                    <p class=\"name\">Roger Scott</p>
\t\t                    <span class=\"position\">Marketing Manager</span>
\t\t                  </div>
\t                  </div>
                  </div>
                </div>
              </div></div></div></div><div class=\"owl-nav disabled\"><button role=\"presentation\" class=\"owl-prev\"><span class=\"ion-ios-arrow-back\"></span></button><button role=\"presentation\" class=\"owl-next\"><span class=\"ion-ios-arrow-forward\"></span></button></div><div class=\"owl-dots\"><button class=\"owl-dot active\"><span></span></button><button class=\"owl-dot\"><span></span></button><button class=\"owl-dot\"><span></span></button><button class=\"owl-dot\"><span></span></button><button class=\"owl-dot\"><span></span></button></div></div>
          </div>
        </div>
      </div>
    </section>


    <section class=\"ftco-section\">
      <div class=\"container\">
      \t<div class=\"row justify-content-center pb-4\">
          <div class=\"col-md-12 heading-section text-center ftco-animate\">
            <h2 class=\"mb-4\">Recent Post</h2>
          </div>
        </div>
        <div class=\"row d-flex\">
          <div class=\"col-md-4 d-flex ftco-animate\">
          \t<div class=\"blog-entry justify-content-end\">
              <a href=\"blog-single.html\" class=\"block-20\" style=\"background-image: url('images/image_1.jpg');\">
              </a>
              <div class=\"text mt-3 float-right d-block\">
              \t<div class=\"d-flex align-items-center mb-4 topp\">
              \t\t<div class=\"one\">
              \t\t\t<span class=\"day\">21</span>
              \t\t</div>
              \t\t<div class=\"two\">
              \t\t\t<span class=\"yr\">2019</span>
              \t\t\t<span class=\"mos\">August</span>
              \t\t</div>
              \t</div>
                <h3 class=\"heading\"><a href=\"#\">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class=\"col-md-4 d-flex ftco-animate\">
          \t<div class=\"blog-entry justify-content-end\">
              <a href=\"blog-single.html\" class=\"block-20\" style=\"background-image: url('images/image_2.jpg');\">
              </a>
              <div class=\"text mt-3 float-right d-block\">
              \t<div class=\"d-flex align-items-center mb-4 topp\">
              \t\t<div class=\"one\">
              \t\t\t<span class=\"day\">21</span>
              \t\t</div>
              \t\t<div class=\"two\">
              \t\t\t<span class=\"yr\">2019</span>
              \t\t\t<span class=\"mos\">August</span>
              \t\t</div>
              \t</div>
                <h3 class=\"heading\"><a href=\"#\">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class=\"col-md-4 d-flex ftco-animate\">
          \t<div class=\"blog-entry\">
              <a href=\"blog-single.html\" class=\"block-20\" style=\"background-image: url('images/image_3.jpg');\">
              </a>
              <div class=\"text mt-3 float-right d-block\">
              \t<div class=\"d-flex align-items-center mb-4 topp\">
              \t\t<div class=\"one\">
              \t\t\t<span class=\"day\">21</span>
              \t\t</div>
              \t\t<div class=\"two\">
              \t\t\t<span class=\"yr\">2019</span>
              \t\t\t<span class=\"mos\">August</span>
              \t\t</div>
              \t</div>
                <h3 class=\"heading\"><a href=\"#\">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class=\"ftco-footer bg-bottom\" style=\"background-image: url(images/footer-bg.jpg);\">
      <div class=\"container\">
        <div class=\"row mb-5\">
          <div class=\"col-md\">
            <div class=\"ftco-footer-widget mb-4\">
              <h2 class=\"ftco-heading-2\">Vacation</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class=\"ftco-footer-social list-unstyled float-md-left float-lft mt-5\">
                <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-twitter\"></span></a></li>
                <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-facebook\"></span></a></li>
                <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-instagram\"></span></a></li>
              </ul>
            </div>
          </div>
          <div class=\"col-md\">
            <div class=\"ftco-footer-widget mb-4 ml-md-5\">
              <h2 class=\"ftco-heading-2\">Infromation</h2>
              <ul class=\"list-unstyled\">
                <li><a href=\"#\" class=\"py-2 d-block\">Online Enquiry</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">General Enquiries</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Booking Conditions</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Privacy and Policy</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Refund Policy</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Call Us</a></li>
              </ul>
            </div>
          </div>
          <div class=\"col-md\">
             <div class=\"ftco-footer-widget mb-4\">
              <h2 class=\"ftco-heading-2\">Experience</h2>
              <ul class=\"list-unstyled\">
                <li><a href=\"#\" class=\"py-2 d-block\">Adventure</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Hotel and Restaurant</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Beach</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Nature</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Camping</a></li>
                <li><a href=\"#\" class=\"py-2 d-block\">Party</a></li>
              </ul>
            </div>
          </div>
          <div class=\"col-md\">
            <div class=\"ftco-footer-widget mb-4\">
            \t<h2 class=\"ftco-heading-2\">Have a Questions?</h2>
            \t<div class=\"block-23 mb-3\">
\t              <ul>
\t                <li><span class=\"icon icon-map-marker\"></span><span class=\"text\">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
\t                <li><a href=\"#\"><span class=\"icon icon-phone\"></span><span class=\"text\">+2 392 3929 210</span></a></li>
\t                <li><a href=\"#\"><span class=\"icon icon-envelope\"></span><span class=\"text\">info@yourdomain.com</span></a></li>
\t              </ul>
\t            </div>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-12 text-center\">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright ©<script>document.write(new Date().getFullYear());</script>2024 All rights reserved | This template is made with <i class=\"icon-heart color-danger\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id=\"ftco-loader\" class=\"fullscreen\"><svg class=\"circular\" width=\"48px\" height=\"48px\"><circle class=\"path-bg\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke=\"#eeeeee\"></circle><circle class=\"path\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke=\"#F96D00\"></circle></svg></div>

{% block js %}
  <script src=\"{{asset('js/jquery.min.js')}}\"></script>
  <script src=\"{{asset('js/jquery-migrate-3.0.1.min.js')}}\"></script>
  <script src=\"{{asset('js/popper.min.js')}}\"></script>
  <script src=\"{{asset('js/bootstrap.min.js')}}\"></script>
  <script src=\"{{asset('js/jquery.easing.1.3.js')}}\"></script>
  <script src=\"{{asset('js/jquery.waypoints.min.js')}}\"></script>
  <script src=\"{{asset('js/jquery.stellar.min.js')}}\"></script>
  <script src=\"{{asset('js/owl.carousel.min.js')}}\"></script>
  <script src=\"{{asset('js/jquery.magnific-popup.min.js')}}\"></script>
  <script src=\"{{asset('js/aos.js')}}\"></script>
  <script src=\"{{asset('js/jquery.animateNumber.min.js')}}\"></script>
  <script src=\"{{asset('js/bootstrap-datepicker.js')}}\"></script>
  <script src=\"{{asset('js/scrollax.min.js')}}\"></script>
  <script src=\"{{asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false')}}\"></script>
  <script src=\"{{asset('js/google-map.js')}}\"></script>
  <script src=\"{{asset('js/main.js')}}\"></script>
    
  {% endblock %}
</body>
{% endblock %}
</html>
", "service/index.html.twig", "C:\\Users\\ASUS\\PiProjecttt\\templates\\service\\index.html.twig");
    }
}
