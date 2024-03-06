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

/* activite/index.html.twig */
class __TwigTemplate_4fe5553aac67001245e2dcd7237e3761 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <title>Pacific - Free Bootstrap 4 Template by Colorlib</title>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "</head>

<body>
 <nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" href=\"index.html\">Tfarhida<span>Bon plan</span></a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"oi oi-menu\"></span> Menu
\t\t\t</button>

\t\t\t<div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t<li class=\"nav-item \"><a href=\"/\" class=\"nav-link\">Home</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"act\" class=\"nav-link\">Activites</a></li>
\t\t\t\t\t<li class=\"nav-item active\"><a href=\"activite\" class=\"nav-link\">Transports</a></li>
\t\t\t\t\t<li class=\"nav-item \"><a href=\"logement\" class=\"nav-link\">Logements</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"restaurantfront\" class=\"nav-link\">restaurants</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"reclamation\" class=\"nav-link\">Reclamation</a></li>
          <li <div id=\"google_translate_element\"></div> </li>

\t\t\t\t
\t\t\t
\t\t\t ";
        // line 50
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50)) {
            // line 51
            echo "\t\t\t   

\t\t\t\t ";
            // line 53
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 54
                echo "\t\t\t\t <p><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard_index");
                echo "\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Admin</span> </a> </p>
\t\t\t\t ";
            }
            // line 56
            echo "\t\t <li class=\"nav-item dropdown no-arrow \">
            <a aria-expanded=\"false\" aria-haspopup=\"true\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"userDropdown\" role=\"button\">
                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\"><i class=\"far fa-user text-primary mr-2 fa-2x \"></i>  ";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), "fullName", [], "any", false, false, false, 58), "html", null, true);
            echo "</span>
                            </a>
            <!-- Dropdown - User Information -->
            <div aria-labelledby=\"userDropdown\" class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\">
                <a class=\"dropdown-item\" href=\"/admin/profil\">
                    <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Profil
                </a>
\t\t\t\t  <a class=\"dropdown-item\" href=\"/logement/mylogement\">
                    <i class=\"fas fa-list-ul text-gray-400\"></i>
                    Mes Logements
                </a>
                <a class=\"dropdown-item\" href=\"/admin/parametre\">
                    <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Paramètres
                </a>
                                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\"  href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\LogoutUrlExtension']->getLogoutPath("main"), "html", null, true);
            echo "\">
                    <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Déconnexion
                </a>
            </div>
\t\t\t</ul>
        </li>
\t\t\t\t  ";
            // line 84
            echo "            ";
            // line 85
            echo "\t\t\t";
        } else {
            // line 86
            echo "\t\t\t<p><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Login</span> </a> </p>
\t\t\t<p><a href=\"";
            // line 87
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration");
            echo "\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Register</span> </a> </p>
            ";
        }
        // line 89
        echo "\t\t</div>
\t\t</div>
\t</nav>
 <!-- END nav -->

 
 <section class=\"hero-wrap hero-wrap-2 js-fullheight\" style=\"background-image: url('/images/transport.jpg');\">
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
</section>

<section class=\"ftco-section\">
  <div class=\"container\">
    <div class=\"row d-flex\">

      <!-- Existing Section (Left) -->
      <div class=\"col-md-4 d-flex ftco-animate\">
        <div class=\"blog-entry justify-content-end\">
          <a href=\"blog-single.html\" class=\"block-20\" style=\"background-image: url('/images/image1.jpg');\" id=\"#bord1\">
          </a>
          <div class=\"text\" id=\"bord1\">
            <div class=\"d-flex align-items-center mb-4\">
              <div class=\"one\">
              </div>
            </div>
            <h3 class=\"heading\"><a href=\"#\">choisir un moyen de transport</a></h3>
            <p><a href=\"/moyen/transport/\" class=\"btn btn-primary\">cliquer ici</a></p>
          </div>
        </div>
      </div>

      <!-- New Section (Right) -->
      <div class=\"col-md-4 d-flex ftco-animate\">
        <div class=\"blog-entry justify-content-end\">
          <!-- Adjust the image URL and other content as needed -->
          <a href=\"blog-single.html\" class=\"block-20\" style=\"background-image: url('/images/image0.jpg');\" id=\"bord1\">
          </a>
          <div class=\"text\" id=\"bord1\">
            <div class=\"d-flex align-items-center mb-4\">
              <div class=\"one\">
              </div>
            </div>
            <h3 class=\"heading\"><a href=\"#\">ajouter un moyen de transport</a></h3>
            <p><a href=\"/moyen/transport/new\" class=\"btn btn-primary\">cliquer ici</a></p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>





<footer class=\"ftco-footer bg-bottom ftco-no-pt\" style=\"background-image: url(/images/bg_3.jpg);\">
  <div class=\"container\">
    <div class=\"row mb-5\">
      <div class=\"col-md pt-5\">
        <div class=\"ftco-footer-widget pt-md-5 mb-4\">
          <h2 class=\"ftco-heading-2\">About</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          <ul class=\"ftco-footer-social list-unstyled float-md-left float-lft\">
            <li class=\"ftco-animate\"><a href=\"#\"><span class=\"fa fa-twitter\"></span></a></li>
            <li class=\"ftco-animate\"><a href=\"#\"><span class=\"fa fa-facebook\"></span></a></li>
            <li class=\"ftco-animate\"><a href=\"#\"><span class=\"fa fa-instagram\"></span></a></li>
          </ul>
        </div>
      </div>
      <div class=\"col-md pt-5 border-left\">
        <div class=\"ftco-footer-widget pt-md-5 mb-4 ml-md-5\">
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
      <div class=\"col-md pt-5 border-left\">
       <div class=\"ftco-footer-widget pt-md-5 mb-4\">
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
    <div class=\"col-md pt-5 border-left\">
      <div class=\"ftco-footer-widget pt-md-5 mb-4\">
       <h2 class=\"ftco-heading-2\">Have a Questions?</h2>
       <div class=\"block-23 mb-3\">
         <ul>
           <li><span class=\"icon fa fa-map-marker\"></span><span class=\"text\">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
           <li><a href=\"#\"><span class=\"icon fa fa-phone\"></span><span class=\"text\">+2 392 3929 210</span></a></li>
           <li><a href=\"#\"><span class=\"icon fa fa-paper-plane\"></span><span class=\"text\">info@yourdomain.com</span></a></li>
         </ul>
       </div>
     </div>
   </div>
 </div>
 <div class=\"row\">
  <div class=\"col-md-12 text-center\">

    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
    </div>
  </div>
</div>
</footer>



<!-- loader -->
<div id=\"ftco-loader\" class=\"show fullscreen\"><svg class=\"circular\" width=\"48px\" height=\"48px\"><circle class=\"path-bg\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke=\"#eeeeee\"/><circle class=\"path\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke=\"#F96D00\"/></svg></div>

";
        // line 222
        $this->displayBlock('js', $context, $blocks);
        // line 249
        echo "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        echo "  <link href=\"";
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
  
  <link rel=\"stylesheet\" href=\"";
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

  <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap-datepicker.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery.timepicker.css"), "html", null, true);
        echo "\">

  
  <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/flaticon.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 222
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 223
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-migrate-3.0.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.animateNumber.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scrollax.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/google-map.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "activite/index.html.twig";
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
        return array (  429 => 237,  425 => 236,  421 => 235,  417 => 234,  413 => 233,  409 => 232,  405 => 231,  401 => 230,  397 => 229,  393 => 228,  389 => 227,  385 => 226,  381 => 225,  377 => 224,  372 => 223,  362 => 222,  348 => 24,  344 => 23,  338 => 20,  334 => 19,  329 => 17,  325 => 16,  321 => 15,  316 => 13,  311 => 11,  306 => 9,  301 => 8,  291 => 7,  279 => 249,  277 => 222,  142 => 89,  137 => 87,  132 => 86,  129 => 85,  127 => 84,  117 => 75,  97 => 58,  93 => 56,  87 => 54,  85 => 53,  81 => 51,  79 => 50,  55 => 28,  53 => 7,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <title>Pacific - Free Bootstrap 4 Template by Colorlib</title>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  {% block stylesheets%}
  <link href=\"{{asset('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900')}}\" rel=\"stylesheet\">
\t<link href=\"{{asset('https://fonts.googleapis.com/css2?family=Arizonia&display=swap')}}\" rel=\"stylesheet\">

\t<link rel=\"stylesheet\" href=\"{{asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}\">

\t\t<link rel=\"stylesheet\" href=\"{{asset('css/animate.css')}}\">
  
  <link rel=\"stylesheet\" href=\"{{asset('css/owl.carousel.min.css')}}\">
\t<link rel=\"stylesheet\" href=\"{{asset('css/owl.theme.default.min.css')}}\">
\t<link rel=\"stylesheet\" href=\"{{asset('css/magnific-popup.css')}}\">

  <link rel=\"stylesheet\" href=\"{{asset('css/bootstrap-datepicker.css')}}\">
\t<link rel=\"stylesheet\" href=\"{{asset('css/jquery.timepicker.css')}}\">

  
  <link rel=\"stylesheet\" href=\"{{asset('css/flaticon.css')}}\">
\t<link rel=\"stylesheet\" href=\"{{asset('css/style.css')}}\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">

    {% endblock %}
</head>

<body>
 <nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" href=\"index.html\">Tfarhida<span>Bon plan</span></a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"oi oi-menu\"></span> Menu
\t\t\t</button>

\t\t\t<div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t<li class=\"nav-item \"><a href=\"/\" class=\"nav-link\">Home</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"act\" class=\"nav-link\">Activites</a></li>
\t\t\t\t\t<li class=\"nav-item active\"><a href=\"activite\" class=\"nav-link\">Transports</a></li>
\t\t\t\t\t<li class=\"nav-item \"><a href=\"logement\" class=\"nav-link\">Logements</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"restaurantfront\" class=\"nav-link\">restaurants</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"reclamation\" class=\"nav-link\">Reclamation</a></li>
          <li <div id=\"google_translate_element\"></div> </li>

\t\t\t\t
\t\t\t
\t\t\t {% if app.user %}
\t\t\t   

\t\t\t\t {% if is_granted('ROLE_ADMIN') %}
\t\t\t\t <p><a href=\"{{ path('admin_dashboard_index') }}\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Admin</span> </a> </p>
\t\t\t\t {% endif %}
\t\t <li class=\"nav-item dropdown no-arrow \">
            <a aria-expanded=\"false\" aria-haspopup=\"true\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"userDropdown\" role=\"button\">
                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\"><i class=\"far fa-user text-primary mr-2 fa-2x \"></i>  {{ app.user.fullName }}</span>
                            </a>
            <!-- Dropdown - User Information -->
            <div aria-labelledby=\"userDropdown\" class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\">
                <a class=\"dropdown-item\" href=\"/admin/profil\">
                    <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Profil
                </a>
\t\t\t\t  <a class=\"dropdown-item\" href=\"/logement/mylogement\">
                    <i class=\"fas fa-list-ul text-gray-400\"></i>
                    Mes Logements
                </a>
                <a class=\"dropdown-item\" href=\"/admin/parametre\">
                    <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Paramètres
                </a>
                                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\"  href=\"{{ logout_path('main') }}\">
                    <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Déconnexion
                </a>
            </div>
\t\t\t</ul>
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
 <!-- END nav -->

 
 <section class=\"hero-wrap hero-wrap-2 js-fullheight\" style=\"background-image: url('/images/transport.jpg');\">
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
</section>

<section class=\"ftco-section\">
  <div class=\"container\">
    <div class=\"row d-flex\">

      <!-- Existing Section (Left) -->
      <div class=\"col-md-4 d-flex ftco-animate\">
        <div class=\"blog-entry justify-content-end\">
          <a href=\"blog-single.html\" class=\"block-20\" style=\"background-image: url('/images/image1.jpg');\" id=\"#bord1\">
          </a>
          <div class=\"text\" id=\"bord1\">
            <div class=\"d-flex align-items-center mb-4\">
              <div class=\"one\">
              </div>
            </div>
            <h3 class=\"heading\"><a href=\"#\">choisir un moyen de transport</a></h3>
            <p><a href=\"/moyen/transport/\" class=\"btn btn-primary\">cliquer ici</a></p>
          </div>
        </div>
      </div>

      <!-- New Section (Right) -->
      <div class=\"col-md-4 d-flex ftco-animate\">
        <div class=\"blog-entry justify-content-end\">
          <!-- Adjust the image URL and other content as needed -->
          <a href=\"blog-single.html\" class=\"block-20\" style=\"background-image: url('/images/image0.jpg');\" id=\"bord1\">
          </a>
          <div class=\"text\" id=\"bord1\">
            <div class=\"d-flex align-items-center mb-4\">
              <div class=\"one\">
              </div>
            </div>
            <h3 class=\"heading\"><a href=\"#\">ajouter un moyen de transport</a></h3>
            <p><a href=\"/moyen/transport/new\" class=\"btn btn-primary\">cliquer ici</a></p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>





<footer class=\"ftco-footer bg-bottom ftco-no-pt\" style=\"background-image: url(/images/bg_3.jpg);\">
  <div class=\"container\">
    <div class=\"row mb-5\">
      <div class=\"col-md pt-5\">
        <div class=\"ftco-footer-widget pt-md-5 mb-4\">
          <h2 class=\"ftco-heading-2\">About</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          <ul class=\"ftco-footer-social list-unstyled float-md-left float-lft\">
            <li class=\"ftco-animate\"><a href=\"#\"><span class=\"fa fa-twitter\"></span></a></li>
            <li class=\"ftco-animate\"><a href=\"#\"><span class=\"fa fa-facebook\"></span></a></li>
            <li class=\"ftco-animate\"><a href=\"#\"><span class=\"fa fa-instagram\"></span></a></li>
          </ul>
        </div>
      </div>
      <div class=\"col-md pt-5 border-left\">
        <div class=\"ftco-footer-widget pt-md-5 mb-4 ml-md-5\">
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
      <div class=\"col-md pt-5 border-left\">
       <div class=\"ftco-footer-widget pt-md-5 mb-4\">
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
    <div class=\"col-md pt-5 border-left\">
      <div class=\"ftco-footer-widget pt-md-5 mb-4\">
       <h2 class=\"ftco-heading-2\">Have a Questions?</h2>
       <div class=\"block-23 mb-3\">
         <ul>
           <li><span class=\"icon fa fa-map-marker\"></span><span class=\"text\">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
           <li><a href=\"#\"><span class=\"icon fa fa-phone\"></span><span class=\"text\">+2 392 3929 210</span></a></li>
           <li><a href=\"#\"><span class=\"icon fa fa-paper-plane\"></span><span class=\"text\">info@yourdomain.com</span></a></li>
         </ul>
       </div>
     </div>
   </div>
 </div>
 <div class=\"row\">
  <div class=\"col-md-12 text-center\">

    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
    </div>
  </div>
</div>
</footer>



<!-- loader -->
<div id=\"ftco-loader\" class=\"show fullscreen\"><svg class=\"circular\" width=\"48px\" height=\"48px\"><circle class=\"path-bg\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke=\"#eeeeee\"/><circle class=\"path\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke=\"#F96D00\"/></svg></div>

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
<script src=\"{{asset('js/jquery.animateNumber.min.js')}}\"></script>
<script src=\"{{asset('js/bootstrap-datepicker.js')}}\"></script>
<script src=\"{{asset('js/scrollax.min.js')}}\"></script>
<script src=\"{{asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false')}}\"></script>
<script src=\"{{asset('js/google-map.js')}}\"></script>
<script src=\"{{asset('js/main.js')}}\"></script>
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
{% endblock %}
</body>
</html>
", "activite/index.html.twig", "C:\\Users\\ASUS\\Desktop\\PiDev\\Projet-Pi-tfarhida\\templates\\activite\\index.html.twig");
    }
}
