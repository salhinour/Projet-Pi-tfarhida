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

/* moyen_transport/trajects.html.twig */
class __TwigTemplate_d25ade1243b99b504fcbf988189c6c34 extends Template
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
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "moyen_transport/trajects.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "moyen_transport/trajects.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>


  <title>Pacific - Free Bootstrap 4 Template by Colorlib</title>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
        echo "</head>
<body>
 <nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
   <div class=\"container\">
     <a class=\"navbar-brand\" href=\"/accueil\">Tfarhida<span>Bon plan</span></a>
     <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
       <span class=\"oi oi-menu\"></span> Menu
     </button>

     <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
       <ul class=\"navbar-nav ml-auto\">
         <li class=\"nav-item\"><a href=\"/accueil\" class=\"nav-link\">Home</a></li>
         <li class=\"nav-item\"><a href=\"/activite\" class=\"nav-link\">Transport</a></li>
         <li class=\"nav-item\"><a href=\"/moyen/transport/back\" class=\"nav-link\">Admin</a></li>

       </ul>
     </div>
   </div>
 </nav>
 <!-- END nav -->
 
 <section class=\"hero-wrap hero-wrap-2 js-fullheight\" style=\"background-image: url('/images/bg_1.2.jpg');\">
  <div class=\"overlay\"></div>
  <div class=\"container\">
    <div class=\"row no-gutters slider-text js-fullheight align-items-end justify-content-center\">
      <div class=\"col-md-9 ftco-animate pb-5 text-center\">
       <h1 class=\"mb-0 bread\">Transport</h1>
     </div>
   </div>
 </div>
</section> 

";
        // line 67
        $this->displayBlock('body', $context, $blocks);
        // line 137
        echo "

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
        // line 208
        $this->displayBlock('js', $context, $blocks);
        // line 233
        echo "</body>
</html>



";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "    <style>
        .highlight {
            background-color: #87CEFA; 
            font-weight: bold;
        }
    </style>    
  <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css2?family=Arizonia&display=swap"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t<link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\">

\t\t<link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\">
  
  <link rel=\"stylesheet\" href=\"";
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

  <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap-datepicker.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery.timepicker.css"), "html", null, true);
        echo "\">

  
  <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/flaticon.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 67
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 68
        echo "  <div class=\"container mt-5\">
    <h1 class=\"text-center mb-4 text-dark\">Trajects for ";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["moyenTransport"]) || array_key_exists("moyenTransport", $context) ? $context["moyenTransport"] : (function () { throw new RuntimeError('Variable "moyenTransport" does not exist.', 69, $this->source); })()), "type", [], "any", false, false, false, 69), "html", null, true);
        echo "</h1>

    <div class=\"row\">
        <div class=\"col-md-6\">
            <table class=\"table\">
                <thead>
                    <tr>
                        <th scope=\"col\" class=\"text-dark\">Trajet</th>
                        <th scope=\"col\" class=\"text-dark\">Date and Time</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trajects"]) || array_key_exists("trajects", $context) ? $context["trajects"] : (function () { throw new RuntimeError('Variable "trajects" does not exist.', 81, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trajet"]) {
            // line 82
            echo "                        <tr>
                            <td>
                                <strong class=\"highlight text-dark\">";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trajet"], "LieuDepart", [], "any", false, false, false, 84), "html", null, true);
            echo "</strong> to <strong class=\"highlight text-dark\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trajet"], "LieuArrivee", [], "any", false, false, false, 84), "html", null, true);
            echo "</strong>
                            </td>
                            <td class=\"text-dark\">
                                ";
            // line 87
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trajet"], "date", [], "any", false, false, false, 87), "d-m-Y"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trajet"], "heure", [], "any", false, false, false, 87), "H:i:s"), "html", null, true);
            echo "
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trajet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                </tbody>
            </table>

            ";
        // line 94
        if ((twig_length_filter($this->env, (isset($context["trajects"]) || array_key_exists("trajects", $context) ? $context["trajects"] : (function () { throw new RuntimeError('Variable "trajects" does not exist.', 94, $this->source); })())) == 0)) {
            // line 95
            echo "                <p class=\"text-center mt-4 text-dark\">No trajects found for ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["moyenTransport"]) || array_key_exists("moyenTransport", $context) ? $context["moyenTransport"] : (function () { throw new RuntimeError('Variable "moyenTransport" does not exist.', 95, $this->source); })()), "type", [], "any", false, false, false, 95), "html", null, true);
            echo "</p>
            ";
        }
        // line 97
        echo "        </div>

        <div class=\"col-md-6\">
            <div id=\"mini-calendar\"></div>

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    var events = [
                        ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trajects"]) || array_key_exists("trajects", $context) ? $context["trajects"] : (function () { throw new RuntimeError('Variable "trajects" does not exist.', 105, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["trajet"]) {
            // line 106
            echo "                            {
                                title: '";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trajet"], "LieuDepart", [], "any", false, false, false, 107), "html", null, true);
            echo " to ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trajet"], "LieuArrivee", [], "any", false, false, false, 107), "html", null, true);
            echo "',
                                start: '";
            // line 108
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trajet"], "date", [], "any", false, false, false, 108), "Y-m-d"), "html", null, true);
            echo "T";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trajet"], "heure", [], "any", false, false, false, 108), "H:i:s"), "html", null, true);
            echo "',
                                allDay: false
                            },
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trajet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "                    ];

                    \$('#mini-calendar').fullCalendar({
                        events: events,
                        header: {
                            left: 'prev,next today',
                            center: 'title',
                            right: 'month,agendaWeek,agendaDay'
                        },
                        editable: false, 
                        eventRender: function (event, element) {
                element.find('.fc-content',).css('color', 'black');
                 element.find('.fc-content').css('box-shadow', '0px 0px 5px 0px rgba(0,0,0,0.5)');}
                    });
                });
            </script>
        </div>
    </div>
</div>



   

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 208
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 209
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-migrate-3.0.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.animateNumber.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scrollax.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/google-map.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
 <!-- jQuery -->
<script src=\"https://code.jquery.com/jquery-3.6.4.min.js\"></script>

<!-- FullCalendar CSS and JS -->
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css\" />
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js\"></script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "moyen_transport/trajects.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  466 => 223,  462 => 222,  458 => 221,  454 => 220,  450 => 219,  446 => 218,  442 => 217,  438 => 216,  434 => 215,  430 => 214,  426 => 213,  422 => 212,  418 => 211,  414 => 210,  409 => 209,  399 => 208,  365 => 112,  353 => 108,  347 => 107,  344 => 106,  340 => 105,  330 => 97,  324 => 95,  322 => 94,  317 => 91,  305 => 87,  297 => 84,  293 => 82,  289 => 81,  274 => 69,  271 => 68,  261 => 67,  249 => 33,  245 => 32,  239 => 29,  235 => 28,  230 => 26,  226 => 25,  222 => 24,  217 => 22,  212 => 20,  207 => 18,  203 => 17,  195 => 11,  185 => 10,  170 => 233,  168 => 208,  95 => 137,  93 => 67,  59 => 35,  57 => 10,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"en\">
<head>


  <title>Pacific - Free Bootstrap 4 Template by Colorlib</title>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  {% block stylesheets%}
    <style>
        .highlight {
            background-color: #87CEFA; 
            font-weight: bold;
        }
    </style>    
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
    {% endblock %}
</head>
<body>
 <nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
   <div class=\"container\">
     <a class=\"navbar-brand\" href=\"/accueil\">Tfarhida<span>Bon plan</span></a>
     <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
       <span class=\"oi oi-menu\"></span> Menu
     </button>

     <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
       <ul class=\"navbar-nav ml-auto\">
         <li class=\"nav-item\"><a href=\"/accueil\" class=\"nav-link\">Home</a></li>
         <li class=\"nav-item\"><a href=\"/activite\" class=\"nav-link\">Transport</a></li>
         <li class=\"nav-item\"><a href=\"/moyen/transport/back\" class=\"nav-link\">Admin</a></li>

       </ul>
     </div>
   </div>
 </nav>
 <!-- END nav -->
 
 <section class=\"hero-wrap hero-wrap-2 js-fullheight\" style=\"background-image: url('/images/bg_1.2.jpg');\">
  <div class=\"overlay\"></div>
  <div class=\"container\">
    <div class=\"row no-gutters slider-text js-fullheight align-items-end justify-content-center\">
      <div class=\"col-md-9 ftco-animate pb-5 text-center\">
       <h1 class=\"mb-0 bread\">Transport</h1>
     </div>
   </div>
 </div>
</section> 

{% block body %}
  <div class=\"container mt-5\">
    <h1 class=\"text-center mb-4 text-dark\">Trajects for {{ moyenTransport.type }}</h1>

    <div class=\"row\">
        <div class=\"col-md-6\">
            <table class=\"table\">
                <thead>
                    <tr>
                        <th scope=\"col\" class=\"text-dark\">Trajet</th>
                        <th scope=\"col\" class=\"text-dark\">Date and Time</th>
                    </tr>
                </thead>
                <tbody>
                    {% for trajet in trajects %}
                        <tr>
                            <td>
                                <strong class=\"highlight text-dark\">{{ trajet.LieuDepart }}</strong> to <strong class=\"highlight text-dark\">{{ trajet.LieuArrivee }}</strong>
                            </td>
                            <td class=\"text-dark\">
                                {{ trajet.date|date('d-m-Y') }} {{ trajet.heure|date('H:i:s') }}
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>

            {% if trajects|length == 0 %}
                <p class=\"text-center mt-4 text-dark\">No trajects found for {{ moyenTransport.type }}</p>
            {% endif %}
        </div>

        <div class=\"col-md-6\">
            <div id=\"mini-calendar\"></div>

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    var events = [
                        {% for trajet in trajects %}
                            {
                                title: '{{ trajet.LieuDepart }} to {{ trajet.LieuArrivee }}',
                                start: '{{ trajet.date|date('Y-m-d') }}T{{ trajet.heure|date('H:i:s') }}',
                                allDay: false
                            },
                        {% endfor %}
                    ];

                    \$('#mini-calendar').fullCalendar({
                        events: events,
                        header: {
                            left: 'prev,next today',
                            center: 'title',
                            right: 'month,agendaWeek,agendaDay'
                        },
                        editable: false, 
                        eventRender: function (event, element) {
                element.find('.fc-content',).css('color', 'black');
                 element.find('.fc-content').css('box-shadow', '0px 0px 5px 0px rgba(0,0,0,0.5)');}
                    });
                });
            </script>
        </div>
    </div>
</div>



   

{% endblock %}


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
 <!-- jQuery -->
<script src=\"https://code.jquery.com/jquery-3.6.4.min.js\"></script>

<!-- FullCalendar CSS and JS -->
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css\" />
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js\"></script>

{% endblock %}
</body>
</html>



", "moyen_transport/trajects.html.twig", "C:\\Users\\MSI\\INTEGRATION\\Projet-Pi-tfarhida\\templates\\moyen_transport\\trajects.html.twig");
    }
}
