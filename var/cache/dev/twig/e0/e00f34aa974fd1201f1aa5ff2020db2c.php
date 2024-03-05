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

/* header.html.twig */
class __TwigTemplate_484595e663f2269576ef90221d821fe1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'navBar' => [$this, 'block_navBar'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">

";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 46
        $this->displayBlock('header', $context, $blocks);
        // line 93
        echo "  ";
        $this->displayBlock('navBar', $context, $blocks);
        // line 172
        $this->displayBlock('body', $context, $blocks);
        // line 175
        $this->displayBlock('footer', $context, $blocks);
        // line 239
        echo "</footer>



<!-- loader -->
<div id=\"ftco-loader\" class=\"show fullscreen\"><svg class=\"circular\" width=\"48px\" height=\"48px\"><circle class=\"path-bg\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke=\"#eeeeee\"/><circle class=\"path\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke=\"#F96D00\"/></svg></div>
";
        // line 245
        $this->displayBlock('js', $context, $blocks);
        // line 400
        echo " <script src=\"path/to/sweetalert.min.js\"></script>

</body>
</html>







";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "
<head>
";
        // line 11
        echo "    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    ";
        // line 14
        echo "     <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
     
    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 43
        echo "
</head>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "    <link rel=\"stylesheet\" href=\"path/to/sweetalert.css\">

    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css2?family=Arizonia&display=swap"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.carousel.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.theme.default.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap-datepicker.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery.timepicker.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/flaticon.css"), "html", null, true);
        echo "\">
  ";
        // line 31
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"./style.css\" />
    ";
        // line 36
        echo "
     <link rel=\"stylesheet\" href=\"styles.css\" />
   <link  rel=\"stylesheet\"
     href=\"https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css\"/>
     ";
        // line 41
        echo "     <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.css\" />
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 46
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 47
        echo "<header>

<nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
\t\t<div class=\"container\">
     <a class=\"navbar-brand\" href=\"index.html\">Tfarhida<span>Bon plan Agency</span></a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"oi oi-menu\"></span> Menu
\t\t\t</button>

\t\t\t<div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
\t\t\t\t <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
\t\t\t 
                <ul class=\"navbar-nav ml-auto\">
\t\t\t\t
                    <li class=\"nav-item\">
\t\t\t\t\t<a href=\"accueil\" class=\"nav-link\">Accueil</a>
\t\t\t\t\t</li>

                   
\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t

\t\t\t\t\t
\t\t\t\t\t\t<a href=\"\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Logements</a>
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
          </div>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
    
\t</nav>

\t<!-- END nav -->
\t</header>

\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 93
    public function block_navBar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navBar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navBar"));

        // line 94
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
\t\t\t\t\t<li class=\"nav-item active\">
            <a  class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Logements</a>
            <div class=\"dropdown-menu p-0\"> <!-- Ajoutez la classe p-0 ici -->
                ";
        // line 122
        echo "            </div>
        </li>
                    
\t\t\t\t\t
                    ";
        // line 127
        echo "                        ";
        // line 128
        echo "                    ";
        // line 129
        echo "                        ";
        // line 130
        echo "\t\t\t\t\t\t";
        // line 131
        echo "                    ";
        // line 132
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
        // line 161
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 172
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 173
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 175
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 176
        echo "<footer class=\"ftco-footer bg-bottom ftco-no-pt\" style=\"background-image: url(/images/bg_3.jpg);\">
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 245
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 246
        echo "
";
        // line 248
        echo "
<script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-migrate-3.0.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.animateNumber.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scrollax.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 262
        echo "<script src=\"//cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.js\"></script>
<script>
  var map = L.map('map').setView([51.505, -0.09], 13);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: 'Map data &copy; <a href=\"https://www.openstreetmap.org/\">OpenStreetMap</a> contributors',
        maxZoom: 18
    }).addTo(map);

    map.on('click', function (e) {
        var lat = e.latlng.lat;
        var lng = e.latlng.lng;
        document.querySelector('[data-map-target=\"mapping\"]').value = lat + ',' + lng;
        reverseGeocode(lat, lng);
    });

    function reverseGeocode(latitude, longitude) {
        var url = https://nominatim.openstreetmap.org/reverse?format=json&lat=\${latitude}&lon=\${longitude}&zoom=18&addressdetails=1;

        fetch(url)
            .then(response => response.json())
            .then(data => {
                var locationName = data.address ? data.address['name'] : null;
                var placeInput = document.querySelector('[data-map-target=\"mapping\"]');
                placeInput.value = locationName || data.display_name;
                document.getElementById('address-placeholder').innerText = locationName || data.display_name;
            })
            .catch(error => {
                console.error('Error during reverse geocoding:', error);
            });
    }

</script>
";
        // line 295
        echo "<script src=\"path/to/sweetalert.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>


<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"), "html", null, true);
        echo "\"></script>
    <script type=\"module\" src=\"./index.js\"></script>

  <script src=\"https://polyfill.io/v3/polyfill.min.js?features=default\"></script>
<script
      src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly\"
      defer
    ></script>

</script>

<script src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/google-map.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js\"></script>
   <script>
       \$(document).ready(function () {
           \$(\"#myInput\").on(\"keyup\", function () {
               var value = \$(this).val().toLowerCase();
               \$(\"#myTable tr\").filter(function () {
                   \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
               });
           })
       });
   </script>
   <script type=\"text/javascript\" src=\"https://platform-api.sharethis.com/js/sharethis.js#property=64065d7b567fbf001a2d5d17&product=inline-share-buttons&source=platform\" async=\"async\"></script>
   ";
        // line 326
        echo "   <script src=\"https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js\"></script>
   <script>
   const phoneInputField = document.querySelector(\"#phone\");
   const phoneInput = window.intlTelInput(phoneInputField, {
  preferredCountries: [\"us\", \"co\", \"in\", \"de\"],
  utilsScript:
    \"https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js\",
});
 </script>
  <script>
   const phoneInputField = document.querySelector(\"#phone\");
   const phoneInput = window.intlTelInput(phoneInputField, {
     utilsScript:
       \"https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js\",
   });
        const info = document.querySelector(\".alert-info\");

      function process(event) {
      event.preventDefault();

      const phoneNumber = phoneInput.getNumber();

      info.style.display = \"\";
      info.innerHTML = `Phone number in E.164 format: <strong>\${phoneNumber}</strong>`;
      }
      function getIp(callback) {
 fetch('https://ipinfo.io/json?token=<votre token>', { headers: { 'Accept': 'application/json' }})
   .then((resp) => resp.json())
   .catch(() => {
     return {
       country: 'us',
     };
   })
   .then((resp) => callback(resp.country));
}
const phoneInput = window.intlTelInput(phoneInputField, {
 initialCountry: \"auto\",
 geoIpLookup: getIp,
 utilsScript:
   \"https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js\",
});
const phoneInput = window.intlTelInput(phoneInputField, {
  preferredCountries: [\"us\", \"co\", \"in\", \"de\"],
  utilsScript:
    \"https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js\",
});
 </script>
 ";
        // line 374
        echo "  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js\"></script>
   <script>
       \$(document).ready(function () {
           \$(\"#myInput\").on(\"keyup\", function () {
               var value = \$(this).val().toLowerCase();
               \$(\"#myTable tr\").filter(function () {
                   \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
               });
           })
       });
   </script>
   ";
        // line 386
        echo "  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js\"></script>
   <script>
       \$(document).ready(function () {
           \$(\"#myInputx\").on(\"keyup\", function () {
               var value = \$(this).val().toLowerCase();
               \$(\"#myTable tr\").filter(function () {
                   \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
               });
           })
       });
   </script>
";
        // line 398
        echo "
 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "header.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  700 => 398,  687 => 386,  674 => 374,  625 => 326,  609 => 312,  605 => 311,  591 => 300,  584 => 295,  550 => 262,  546 => 260,  542 => 259,  538 => 258,  534 => 257,  530 => 256,  526 => 255,  522 => 254,  518 => 253,  514 => 252,  510 => 251,  506 => 250,  502 => 249,  499 => 248,  496 => 246,  486 => 245,  414 => 176,  404 => 175,  393 => 173,  383 => 172,  362 => 161,  331 => 132,  329 => 131,  327 => 130,  325 => 129,  323 => 128,  321 => 127,  315 => 122,  289 => 94,  279 => 93,  224 => 47,  214 => 46,  203 => 41,  197 => 36,  189 => 31,  185 => 29,  181 => 28,  177 => 27,  173 => 26,  169 => 25,  165 => 24,  161 => 23,  157 => 22,  153 => 21,  149 => 20,  144 => 17,  134 => 16,  122 => 43,  120 => 16,  116 => 14,  112 => 11,  108 => 6,  98 => 5,  77 => 400,  75 => 245,  67 => 239,  65 => 175,  63 => 172,  60 => 93,  58 => 46,  56 => 5,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"en\">

{% block head %}

<head>
{# <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"initial-scale=1, maximum-scale=1, user-scalable=no\"> #}
{# map #}
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    {# phone #}
     <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
     
    {% block stylesheets%}
    <link rel=\"stylesheet\" href=\"path/to/sweetalert.css\">

    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\" rel=\"stylesheet\">
    <link href=\"{{asset('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('https://fonts.googleapis.com/css2?family=Arizonia&display=swap')}}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('css/animate.css')}}\">
\t<link rel=\"stylesheet\" href=\"{{asset('css/owl.carousel.min.css')}}\">
\t<link rel=\"stylesheet\" href=\"{{asset('css/owl.theme.default.min.css')}}\">
\t<link rel=\"stylesheet\" href=\"{{asset('css/magnific-popup.css')}}\">
\t<link rel=\"stylesheet\" href=\"{{asset('css/bootstrap-datepicker.css')}}\">
\t<link rel=\"stylesheet\" href=\"{{asset('css/jquery.timepicker.css')}}\">
\t<link rel=\"stylesheet\" href=\"{{asset('css/flaticon.css')}}\">
  {# popup #}
\t<link rel=\"stylesheet\" href=\"{{asset('css/style.css')}}\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"./style.css\" />
    {# phone #}

     <link rel=\"stylesheet\" href=\"styles.css\" />
   <link  rel=\"stylesheet\"
     href=\"https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css\"/>
     {# map2 #}
     <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.css\" />
    {% endblock %}

</head>
{% endblock %}
{% block header %}
<header>

<nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
\t\t<div class=\"container\">
     <a class=\"navbar-brand\" href=\"index.html\">Tfarhida<span>Bon plan Agency</span></a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"oi oi-menu\"></span> Menu
\t\t\t</button>

\t\t\t<div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
\t\t\t\t <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
\t\t\t 
                <ul class=\"navbar-nav ml-auto\">
\t\t\t\t
                    <li class=\"nav-item\">
\t\t\t\t\t<a href=\"accueil\" class=\"nav-link\">Accueil</a>
\t\t\t\t\t</li>

                   
\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t

\t\t\t\t\t
\t\t\t\t\t\t<a href=\"\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Logements</a>
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
          </div>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
    
\t</nav>

\t<!-- END nav -->
\t</header>

\t{% endblock %}
  {% block navBar %}
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
\t\t\t\t\t<li class=\"nav-item active\">
            <a  class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">Logements</a>
            <div class=\"dropdown-menu p-0\"> <!-- Ajoutez la classe p-0 ici -->
                {# <a class=\"dropdown-item\"  href=\"logement\">Hotel</a>
                <a class=\"dropdown-item\">Villa</a>
                <a class=\"dropdown-item\">Maison</a>
                <a class=\"dropdown-item\">Appartement</a> #}
            </div>
        </li>
                    
\t\t\t\t\t
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
\t\t\t\t  <a class=\"dropdown-item\" href=\"/logement/mylogement\">
                    <i class=\"fas fa-list-ul text-gray-400\"></i>
                    Mes Logements
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
{% endblock %}
{% block body %}

{% endblock %}
{% block footer %}
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
{% endblock %}
</footer>



<!-- loader -->
<div id=\"ftco-loader\" class=\"show fullscreen\"><svg class=\"circular\" width=\"48px\" height=\"48px\"><circle class=\"path-bg\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke=\"#eeeeee\"/><circle class=\"path\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke=\"#F96D00\"/></svg></div>
{% block js %}

{# MAP #}

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
{# map2 #}
<script src=\"//cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.js\"></script>
<script>
  var map = L.map('map').setView([51.505, -0.09], 13);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: 'Map data &copy; <a href=\"https://www.openstreetmap.org/\">OpenStreetMap</a> contributors',
        maxZoom: 18
    }).addTo(map);

    map.on('click', function (e) {
        var lat = e.latlng.lat;
        var lng = e.latlng.lng;
        document.querySelector('[data-map-target=\"mapping\"]').value = lat + ',' + lng;
        reverseGeocode(lat, lng);
    });

    function reverseGeocode(latitude, longitude) {
        var url = https://nominatim.openstreetmap.org/reverse?format=json&lat=\${latitude}&lon=\${longitude}&zoom=18&addressdetails=1;

        fetch(url)
            .then(response => response.json())
            .then(data => {
                var locationName = data.address ? data.address['name'] : null;
                var placeInput = document.querySelector('[data-map-target=\"mapping\"]');
                placeInput.value = locationName || data.display_name;
                document.getElementById('address-placeholder').innerText = locationName || data.display_name;
            })
            .catch(error => {
                console.error('Error during reverse geocoding:', error);
            });
    }

</script>
{# popup #}
<script src=\"path/to/sweetalert.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>


<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script src=\"{{asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false')}}\"></script>
    <script type=\"module\" src=\"./index.js\"></script>

  <script src=\"https://polyfill.io/v3/polyfill.min.js?features=default\"></script>
<script
      src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly\"
      defer
    ></script>

</script>

<script src=\"{{asset('js/google-map.js')}}\"></script>
<script src=\"{{asset('js/main.js')}}\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js\"></script>
   <script>
       \$(document).ready(function () {
           \$(\"#myInput\").on(\"keyup\", function () {
               var value = \$(this).val().toLowerCase();
               \$(\"#myTable tr\").filter(function () {
                   \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
               });
           })
       });
   </script>
   <script type=\"text/javascript\" src=\"https://platform-api.sharethis.com/js/sharethis.js#property=64065d7b567fbf001a2d5d17&product=inline-share-buttons&source=platform\" async=\"async\"></script>
   {# tel #}
   <script src=\"https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js\"></script>
   <script>
   const phoneInputField = document.querySelector(\"#phone\");
   const phoneInput = window.intlTelInput(phoneInputField, {
  preferredCountries: [\"us\", \"co\", \"in\", \"de\"],
  utilsScript:
    \"https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js\",
});
 </script>
  <script>
   const phoneInputField = document.querySelector(\"#phone\");
   const phoneInput = window.intlTelInput(phoneInputField, {
     utilsScript:
       \"https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js\",
   });
        const info = document.querySelector(\".alert-info\");

      function process(event) {
      event.preventDefault();

      const phoneNumber = phoneInput.getNumber();

      info.style.display = \"\";
      info.innerHTML = `Phone number in E.164 format: <strong>\${phoneNumber}</strong>`;
      }
      function getIp(callback) {
 fetch('https://ipinfo.io/json?token=<votre token>', { headers: { 'Accept': 'application/json' }})
   .then((resp) => resp.json())
   .catch(() => {
     return {
       country: 'us',
     };
   })
   .then((resp) => callback(resp.country));
}
const phoneInput = window.intlTelInput(phoneInputField, {
 initialCountry: \"auto\",
 geoIpLookup: getIp,
 utilsScript:
   \"https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js\",
});
const phoneInput = window.intlTelInput(phoneInputField, {
  preferredCountries: [\"us\", \"co\", \"in\", \"de\"],
  utilsScript:
    \"https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js\",
});
 </script>
 {# search #}
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js\"></script>
   <script>
       \$(document).ready(function () {
           \$(\"#myInput\").on(\"keyup\", function () {
               var value = \$(this).val().toLowerCase();
               \$(\"#myTable tr\").filter(function () {
                   \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
               });
           })
       });
   </script>
   {# prix search #}
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js\"></script>
   <script>
       \$(document).ready(function () {
           \$(\"#myInputx\").on(\"keyup\", function () {
               var value = \$(this).val().toLowerCase();
               \$(\"#myTable tr\").filter(function () {
                   \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
               });
           })
       });
   </script>
{#  #}

 {% endblock %}
 <script src=\"path/to/sweetalert.min.js\"></script>

</body>
</html>







", "header.html.twig", "C:\\Users\\ASUS\\Desktop\\PiDev\\Projet-Pi-tfarhida\\templates\\header.html.twig");
    }
}