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

/* logement/logement.html.twig */
class __TwigTemplate_e79d22040f234cf3852de7c08e276fef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "logement/logement.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "logement/logement.html.twig"));

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
        // line 25
        echo "</head>
<body>
 <nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
   <div class=\"container\">
     <a class=\"navbar-brand\" href=\"index.html\">Pacific<span>Travel Agency</span></a>
     <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
       <span class=\"oi oi-menu\"></span> Menu
   </button>

   <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
       <ul class=\"navbar-nav ml-auto\">
         <li class=\"nav-item\"><a href=\"index.html\" class=\"nav-link\">Home</a></li>
         <li class=\"nav-item\"><a href=\"about.html\" class=\"nav-link\">About</a></li>
         <li class=\"nav-item active\"><a href=\"destination.html\" class=\"nav-link\">Destination</a></li>
         <li class=\"nav-item\"><a href=\"hotel.html\" class=\"nav-link\">Hotel</a></li>
         <li class=\"nav-item\"><a href=\"blog.html\" class=\"nav-link\">Blog</a></li>
         <li class=\"nav-item\"><a href=\"contact.html\" class=\"nav-link\">Contact</a></li>
     </ul>
 </div>
</div>
</nav>
<!-- END nav -->

<section class=\"hero-wrap hero-wrap-2 js-fullheight\" style=\"background-image: url('images/bg_1.jpg');\">
  <div class=\"overlay\"></div>
  <div class=\"container\">
    <div class=\"row no-gutters slider-text js-fullheight align-items-end justify-content-center\">
      <div class=\"col-md-9 ftco-animate pb-5 text-center\">
         <p class=\"breadcrumbs\"><span class=\"mr-2\"><a href=\"index.html\">Home <i class=\"fa fa-chevron-right\"></i></a></span> <span>Tour List <i class=\"fa fa-chevron-right\"></i></span></p>
         <h1 class=\"mb-0 bread\">Tours List</h1>
     </div>
 </div>
</div>
</section>

<section class=\"ftco-section ftco-no-pb\">
   <div class=\"container\">
      <div class=\"row\">
       <div class=\"col-md-12\">
          <div class=\"search-wrap-1 ftco-animate\">
             <form action=\"#\" class=\"search-property-1\">
                <div class=\"row no-gutters\">
                   <div class=\"col-lg d-flex\">
                      <div class=\"form-group p-4 border-0\">
                         <label for=\"#\">Destination</label>
                         <div class=\"form-field\">
                           <div class=\"icon\"><span class=\"fa fa-search\"></span></div>
                           <input type=\"text\" class=\"form-control\" placeholder=\"Search place\">
                       </div>
                   </div>
               </div>
               <div class=\"col-lg d-flex\">
                  <div class=\"form-group p-4\">
                     <label for=\"#\">Check-in date</label>
                     <div class=\"form-field\">
                       <div class=\"icon\"><span class=\"fa fa-calendar\"></span></div>
                       <input type=\"text\" class=\"form-control checkin_date\" placeholder=\"Check In Date\">
                   </div>
               </div>
           </div>
           <div class=\"col-lg d-flex\">
              <div class=\"form-group p-4\">
                 <label for=\"#\">Check-out date</label>
                 <div class=\"form-field\">
                   <div class=\"icon\"><span class=\"fa fa-calendar\"></span></div>
                   <input type=\"text\" class=\"form-control checkout_date\" placeholder=\"Check Out Date\">
               </div>
           </div>
       </div>
       <div class=\"col-lg d-flex\">
          <div class=\"form-group p-4\">
             <label for=\"#\">Price Limit</label>
             <div class=\"form-field\">
               <div class=\"select-wrap\">
                <div class=\"icon\"><span class=\"fa fa-chevron-down\"></span></div>
                <select name=\"\" id=\"\" class=\"form-control\">
                  <option value=\"\">\$5,000</option>
                  <option value=\"\">\$10,000</option>
                  <option value=\"\">\$50,000</option>
                  <option value=\"\">\$100,000</option>
                  <option value=\"\">\$200,000</option>
                  <option value=\"\">\$300,000</option>
                  <option value=\"\">\$400,000</option>
                  <option value=\"\">\$500,000</option>
                  <option value=\"\">\$600,000</option>
                  <option value=\"\">\$700,000</option>
                  <option value=\"\">\$800,000</option>
                  <option value=\"\">\$900,000</option>
                  <option value=\"\">\$1,000,000</option>
                  <option value=\"\">\$2,000,000</option>
              </select>
          </div>
      </div>
  </div>
</div>
<div class=\"col-lg d-flex\">
  <div class=\"form-group d-flex w-100 border-0\">
     <div class=\"form-field w-100 align-items-center d-flex\">
        <input type=\"submit\" value=\"Search\" class=\"align-self-stretch form-control btn btn-primary\">
    </div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</section>

<section class=\"ftco-section\">
   <div class=\"container\">
    <div class=\"row\">
       <div class=\"col-md-4 ftco-animate\">
          <div class=\"project-wrap\">
             <a href=\"#\" class=\"img\" style=\"background-image: url(images/destination-1.jpg);\">
                <span class=\"price\">\$550/person</span>
            </a>
            <div class=\"text p-4\">
                <span class=\"days\">8 Days Tour</span>
                <h3><a href=\"#\">Banaue Rice Terraces</a></h3>
                <p class=\"location\"><span class=\"fa fa-map-marker\"></span> Banaue, Ifugao, Philippines</p>
                <ul>
                   <li><span class=\"flaticon-shower\"></span>2</li>
                   <li><span class=\"flaticon-king-size\"></span>3</li>
                   <li><span class=\"flaticon-mountains\"></span>Near Mountain</li>
               </ul>
           </div>
       </div>
   </div>
   <div class=\"col-md-4 ftco-animate\">
      <div class=\"project-wrap\">
         <a href=\"#\" class=\"img\" style=\"background-image: url(images/destination-2.jpg);\">
            <span class=\"price\">\$550/person</span>
        </a>
        <div class=\"text p-4\">
            <span class=\"days\">10 Days Tour</span>
            <h3><a href=\"#\">Banaue Rice Terraces</a></h3>
            <p class=\"location\"><span class=\"fa fa-map-marker\"></span> Banaue, Ifugao, Philippines</p>
            <ul>
               <li><span class=\"flaticon-shower\"></span>2</li>
               <li><span class=\"flaticon-king-size\"></span>3</li>
               <li><span class=\"flaticon-sun-umbrella\"></span>Near Beach</li>
           </ul>
       </div>
   </div>
</div>
<div class=\"col-md-4 ftco-animate\">
  <div class=\"project-wrap\">
     <a href=\"#\" class=\"img\" style=\"background-image: url(images/destination-3.jpg);\">
        <span class=\"price\">\$550/person</span>
    </a>
    <div class=\"text p-4\">
        <span class=\"days\">7 Days Tour</span>
        <h3><a href=\"#\">Banaue Rice Terraces</a></h3>
        <p class=\"location\"><span class=\"fa fa-map-marker\"></span> Banaue, Ifugao, Philippines</p>
        <ul>
           <li><span class=\"flaticon-shower\"></span>2</li>
           <li><span class=\"flaticon-king-size\"></span>3</li>
           <li><span class=\"flaticon-sun-umbrella\"></span>Near Beach</li>
       </ul>
   </div>
</div>
</div>

<div class=\"col-md-4 ftco-animate\">
  <div class=\"project-wrap\">
     <a href=\"#\" class=\"img\" style=\"background-image: url(images/destination-4.jpg);\">
        <span class=\"price\">\$550/person</span>
    </a>
    <div class=\"text p-4\">
        <span class=\"days\">8 Days Tour</span>
        <h3><a href=\"#\">Banaue Rice Terraces</a></h3>
        <p class=\"location\"><span class=\"fa fa-map-marker\"></span> Banaue, Ifugao, Philippines</p>
        <ul>
           <li><span class=\"flaticon-shower\"></span>2</li>
           <li><span class=\"flaticon-king-size\"></span>3</li>
           <li><span class=\"flaticon-sun-umbrella\"></span>Near Beach</li>
       </ul>
   </div>
</div>
</div>
<div class=\"col-md-4 ftco-animate\">
  <div class=\"project-wrap\">
     <a href=\"#\" class=\"img\" style=\"background-image: url(images/destination-5.jpg);\">
        <span class=\"price\">\$550/person</span>
    </a>
    <div class=\"text p-4\">
        <span class=\"days\">10 Days Tour</span>
        <h3><a href=\"#\">Banaue Rice Terraces</a></h3>
        <p class=\"location\"><span class=\"fa fa-map-marker\"></span> Banaue, Ifugao, Philippines</p>
        <ul>
           <li><span class=\"flaticon-shower\"></span>2</li>
           <li><span class=\"flaticon-king-size\"></span>3</li>
           <li><span class=\"flaticon-sun-umbrella\"></span>Near Beach</li>
       </ul>
   </div>
</div>
</div>
<div class=\"col-md-4 ftco-animate\">
  <div class=\"project-wrap\">
     <a href=\"#\" class=\"img\" style=\"background-image: url(images/destination-6.jpg);\">
        <span class=\"price\">\$550/person</span>
    </a>
    <div class=\"text p-4\">
        <span class=\"days\">7 Days Tour</span>
        <h3><a href=\"#\">Banaue Rice Terraces</a></h3>
        <p class=\"location\"><span class=\"fa fa-map-marker\"></span> Banaue, Ifugao, Philippines</p>
        <ul>
           <li><span class=\"flaticon-shower\"></span>2</li>
           <li><span class=\"flaticon-king-size\"></span>3</li>
           <li><span class=\"flaticon-sun-umbrella\"></span>Near Beach</li>
       </ul>
   </div>
</div>
</div>
<div class=\"col-md-4 ftco-animate\">
  <div class=\"project-wrap\">
     <a href=\"#\" class=\"img\" style=\"background-image: url(images/destination-7.jpg);\">
        <span class=\"price\">\$550/person</span>
    </a>
    <div class=\"text p-4\">
        <span class=\"days\">7 Days Tour</span>
        <h3><a href=\"#\">Banaue Rice Terraces</a></h3>
        <p class=\"location\"><span class=\"fa fa-map-marker\"></span> Banaue, Ifugao, Philippines</p>
        <ul>
           <li><span class=\"flaticon-shower\"></span>2</li>
           <li><span class=\"flaticon-king-size\"></span>3</li>
           <li><span class=\"flaticon-sun-umbrella\"></span>Near Beach</li>
       </ul>
   </div>
</div>
</div>
<div class=\"col-md-4 ftco-animate\">
  <div class=\"project-wrap\">
     <a href=\"#\" class=\"img\" style=\"background-image: url(images/destination-8.jpg);\">
        <span class=\"price\">\$550/person</span>
    </a>
    <div class=\"text p-4\">
        <span class=\"days\">7 Days Tour</span>
        <h3><a href=\"#\">Banaue Rice Terraces</a></h3>
        <p class=\"location\"><span class=\"fa fa-map-marker\"></span> Banaue, Ifugao, Philippines</p>
        <ul>
           <li><span class=\"flaticon-shower\"></span>2</li>
           <li><span class=\"flaticon-king-size\"></span>3</li>
           <li><span class=\"flaticon-sun-umbrella\"></span>Near Beach</li>
       </ul>
   </div>
</div>
</div>
<div class=\"col-md-4 ftco-animate\">
  <div class=\"project-wrap\">
     <a href=\"#\" class=\"img\" style=\"background-image: url(images/destination-9.jpg);\">
        <span class=\"price\">\$550/person</span>
    </a>
    <div class=\"text p-4\">
        <span class=\"days\">7 Days Tour</span>
        <h3><a href=\"#\">Banaue Rice Terraces</a></h3>
        <p class=\"location\"><span class=\"fa fa-map-marker\"></span> Banaue, Ifugao, Philippines</p>
        <ul>
           <li><span class=\"flaticon-shower\"></span>2</li>
           <li><span class=\"flaticon-king-size\"></span>3</li>
           <li><span class=\"flaticon-sun-umbrella\"></span>Near Beach</li>
       </ul>
   </div>
</div>
</div>
</div>
<div class=\"row mt-5\">
  <div class=\"col text-center\">
    <div class=\"block-27\">
      <ul>
        <li><a href=\"#\">&lt;</a></li>
        <li class=\"active\"><span>1</span></li>
        <li><a href=\"#\">2</a></li>
        <li><a href=\"#\">3</a></li>
        <li><a href=\"#\">4</a></li>
        <li><a href=\"#\">5</a></li>
        <li><a href=\"#\">&gt;</a></li>
    </ul>
</div>
</div>
</div>
</div>
</section>



<section class=\"ftco-intro ftco-section ftco-no-pt\">
 <div class=\"container\">
    <div class=\"row justify-content-center\">
       <div class=\"col-md-12 text-center\">
          <div class=\"img\"  style=\"background-image: url(images/bg_2.jpg);\">
             <div class=\"overlay\"></div>
             <h2>We Are Pacific A Travel Agency</h2>
             <p>We can manage your dream building A small river named Duden flows by their place</p>
             <p class=\"mb-0\"><a href=\"#\" class=\"btn btn-primary px-4 py-3\">Ask For A Quote</a></p>
         </div>
     </div>
 </div>
</div>
</section>

<footer class=\"ftco-footer bg-bottom ftco-no-pt\" style=\"background-image: url(images/bg_3.jpg);\">
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
        // line 397
        $this->displayBlock('js', $context, $blocks);
        // line 414
        echo "</body>
</html>";
        
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
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900\" rel=\"stylesheet"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css2?family=Arizonia&display=swap\" rel=\"stylesheet"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\">

   <link rel=\"stylesheet\" href=\"";
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
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 397
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 398
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-migrate-3.0.1.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.animateNumber.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scrollax.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/google-map.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 412
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
        return "logement/logement.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  577 => 412,  573 => 411,  569 => 410,  565 => 409,  561 => 408,  557 => 407,  553 => 406,  549 => 405,  545 => 404,  541 => 403,  537 => 402,  533 => 401,  529 => 400,  525 => 399,  520 => 398,  510 => 397,  498 => 23,  494 => 22,  489 => 20,  485 => 19,  480 => 17,  476 => 16,  472 => 15,  467 => 13,  462 => 11,  457 => 9,  452 => 8,  442 => 7,  431 => 414,  429 => 397,  55 => 25,  53 => 7,  45 => 1,);
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
    <link href=\"{{asset('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900\" rel=\"stylesheet')}}\">
    <link href=\"{{asset('https://fonts.googleapis.com/css2?family=Arizonia&display=swap\" rel=\"stylesheet')}}\">

    <link rel=\"stylesheet\" href=\"{{asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}\">

   <link rel=\"stylesheet\" href=\"{{asset('css/animate.css')}}\">
\t
\t<link rel=\"stylesheet\" href=\"{{asset('css/owl.carousel.min.css')}}\">
\t<link rel=\"stylesheet\" href=\"{{asset('css/owl.theme.default.min.css')}}\">
\t<link rel=\"stylesheet\" href=\"{{asset('css/magnific-popup.css')}}\">

  \t<link rel=\"stylesheet\" href=\"{{asset('css/bootstrap-datepicker.css')}}\">
\t<link rel=\"stylesheet\" href=\"{{asset('css/jquery.timepicker.css')}}\">

\t<link rel=\"stylesheet\" href=\"{{asset('css/flaticon.css')}}\">
\t<link rel=\"stylesheet\" href=\"{{asset('css/style.css')}}\">
    {% endblock %}
</head>
<body>
 <nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
   <div class=\"container\">
     <a class=\"navbar-brand\" href=\"index.html\">Pacific<span>Travel Agency</span></a>
     <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
       <span class=\"oi oi-menu\"></span> Menu
   </button>

   <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
       <ul class=\"navbar-nav ml-auto\">
         <li class=\"nav-item\"><a href=\"index.html\" class=\"nav-link\">Home</a></li>
         <li class=\"nav-item\"><a href=\"about.html\" class=\"nav-link\">About</a></li>
         <li class=\"nav-item active\"><a href=\"destination.html\" class=\"nav-link\">Destination</a></li>
         <li class=\"nav-item\"><a href=\"hotel.html\" class=\"nav-link\">Hotel</a></li>
         <li class=\"nav-item\"><a href=\"blog.html\" class=\"nav-link\">Blog</a></li>
         <li class=\"nav-item\"><a href=\"contact.html\" class=\"nav-link\">Contact</a></li>
     </ul>
 </div>
</div>
</nav>
<!-- END nav -->

<section class=\"hero-wrap hero-wrap-2 js-fullheight\" style=\"background-image: url('images/bg_1.jpg');\">
  <div class=\"overlay\"></div>
  <div class=\"container\">
    <div class=\"row no-gutters slider-text js-fullheight align-items-end justify-content-center\">
      <div class=\"col-md-9 ftco-animate pb-5 text-center\">
         <p class=\"breadcrumbs\"><span class=\"mr-2\"><a href=\"index.html\">Home <i class=\"fa fa-chevron-right\"></i></a></span> <span>Tour List <i class=\"fa fa-chevron-right\"></i></span></p>
         <h1 class=\"mb-0 bread\">Tours List</h1>
     </div>
 </div>
</div>
</section>

<section class=\"ftco-section ftco-no-pb\">
   <div class=\"container\">
      <div class=\"row\">
       <div class=\"col-md-12\">
          <div class=\"search-wrap-1 ftco-animate\">
             <form action=\"#\" class=\"search-property-1\">
                <div class=\"row no-gutters\">
                   <div class=\"col-lg d-flex\">
                      <div class=\"form-group p-4 border-0\">
                         <label for=\"#\">Destination</label>
                         <div class=\"form-field\">
                           <div class=\"icon\"><span class=\"fa fa-search\"></span></div>
                           <input type=\"text\" class=\"form-control\" placeholder=\"Search place\">
                       </div>
                   </div>
               </div>
               <div class=\"col-lg d-flex\">
                  <div class=\"form-group p-4\">
                     <label for=\"#\">Check-in date</label>
                     <div class=\"form-field\">
                       <div class=\"icon\"><span class=\"fa fa-calendar\"></span></div>
                       <input type=\"text\" class=\"form-control checkin_date\" placeholder=\"Check In Date\">
                   </div>
               </div>
           </div>
           <div class=\"col-lg d-flex\">
              <div class=\"form-group p-4\">
                 <label for=\"#\">Check-out date</label>
                 <div class=\"form-field\">
                   <div class=\"icon\"><span class=\"fa fa-calendar\"></span></div>
                   <input type=\"text\" class=\"form-control checkout_date\" placeholder=\"Check Out Date\">
               </div>
           </div>
       </div>
       <div class=\"col-lg d-flex\">
          <div class=\"form-group p-4\">
             <label for=\"#\">Price Limit</label>
             <div class=\"form-field\">
               <div class=\"select-wrap\">
                <div class=\"icon\"><span class=\"fa fa-chevron-down\"></span></div>
                <select name=\"\" id=\"\" class=\"form-control\">
                  <option value=\"\">\$5,000</option>
                  <option value=\"\">\$10,000</option>
                  <option value=\"\">\$50,000</option>
                  <option value=\"\">\$100,000</option>
                  <option value=\"\">\$200,000</option>
                  <option value=\"\">\$300,000</option>
                  <option value=\"\">\$400,000</option>
                  <option value=\"\">\$500,000</option>
                  <option value=\"\">\$600,000</option>
                  <option value=\"\">\$700,000</option>
                  <option value=\"\">\$800,000</option>
                  <option value=\"\">\$900,000</option>
                  <option value=\"\">\$1,000,000</option>
                  <option value=\"\">\$2,000,000</option>
              </select>
          </div>
      </div>
  </div>
</div>
<div class=\"col-lg d-flex\">
  <div class=\"form-group d-flex w-100 border-0\">
     <div class=\"form-field w-100 align-items-center d-flex\">
        <input type=\"submit\" value=\"Search\" class=\"align-self-stretch form-control btn btn-primary\">
    </div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</section>

<section class=\"ftco-section\">
   <div class=\"container\">
    <div class=\"row\">
       <div class=\"col-md-4 ftco-animate\">
          <div class=\"project-wrap\">
             <a href=\"#\" class=\"img\" style=\"background-image: url(images/destination-1.jpg);\">
                <span class=\"price\">\$550/person</span>
            </a>
            <div class=\"text p-4\">
                <span class=\"days\">8 Days Tour</span>
                <h3><a href=\"#\">Banaue Rice Terraces</a></h3>
                <p class=\"location\"><span class=\"fa fa-map-marker\"></span> Banaue, Ifugao, Philippines</p>
                <ul>
                   <li><span class=\"flaticon-shower\"></span>2</li>
                   <li><span class=\"flaticon-king-size\"></span>3</li>
                   <li><span class=\"flaticon-mountains\"></span>Near Mountain</li>
               </ul>
           </div>
       </div>
   </div>
   <div class=\"col-md-4 ftco-animate\">
      <div class=\"project-wrap\">
         <a href=\"#\" class=\"img\" style=\"background-image: url(images/destination-2.jpg);\">
            <span class=\"price\">\$550/person</span>
        </a>
        <div class=\"text p-4\">
            <span class=\"days\">10 Days Tour</span>
            <h3><a href=\"#\">Banaue Rice Terraces</a></h3>
            <p class=\"location\"><span class=\"fa fa-map-marker\"></span> Banaue, Ifugao, Philippines</p>
            <ul>
               <li><span class=\"flaticon-shower\"></span>2</li>
               <li><span class=\"flaticon-king-size\"></span>3</li>
               <li><span class=\"flaticon-sun-umbrella\"></span>Near Beach</li>
           </ul>
       </div>
   </div>
</div>
<div class=\"col-md-4 ftco-animate\">
  <div class=\"project-wrap\">
     <a href=\"#\" class=\"img\" style=\"background-image: url(images/destination-3.jpg);\">
        <span class=\"price\">\$550/person</span>
    </a>
    <div class=\"text p-4\">
        <span class=\"days\">7 Days Tour</span>
        <h3><a href=\"#\">Banaue Rice Terraces</a></h3>
        <p class=\"location\"><span class=\"fa fa-map-marker\"></span> Banaue, Ifugao, Philippines</p>
        <ul>
           <li><span class=\"flaticon-shower\"></span>2</li>
           <li><span class=\"flaticon-king-size\"></span>3</li>
           <li><span class=\"flaticon-sun-umbrella\"></span>Near Beach</li>
       </ul>
   </div>
</div>
</div>

<div class=\"col-md-4 ftco-animate\">
  <div class=\"project-wrap\">
     <a href=\"#\" class=\"img\" style=\"background-image: url(images/destination-4.jpg);\">
        <span class=\"price\">\$550/person</span>
    </a>
    <div class=\"text p-4\">
        <span class=\"days\">8 Days Tour</span>
        <h3><a href=\"#\">Banaue Rice Terraces</a></h3>
        <p class=\"location\"><span class=\"fa fa-map-marker\"></span> Banaue, Ifugao, Philippines</p>
        <ul>
           <li><span class=\"flaticon-shower\"></span>2</li>
           <li><span class=\"flaticon-king-size\"></span>3</li>
           <li><span class=\"flaticon-sun-umbrella\"></span>Near Beach</li>
       </ul>
   </div>
</div>
</div>
<div class=\"col-md-4 ftco-animate\">
  <div class=\"project-wrap\">
     <a href=\"#\" class=\"img\" style=\"background-image: url(images/destination-5.jpg);\">
        <span class=\"price\">\$550/person</span>
    </a>
    <div class=\"text p-4\">
        <span class=\"days\">10 Days Tour</span>
        <h3><a href=\"#\">Banaue Rice Terraces</a></h3>
        <p class=\"location\"><span class=\"fa fa-map-marker\"></span> Banaue, Ifugao, Philippines</p>
        <ul>
           <li><span class=\"flaticon-shower\"></span>2</li>
           <li><span class=\"flaticon-king-size\"></span>3</li>
           <li><span class=\"flaticon-sun-umbrella\"></span>Near Beach</li>
       </ul>
   </div>
</div>
</div>
<div class=\"col-md-4 ftco-animate\">
  <div class=\"project-wrap\">
     <a href=\"#\" class=\"img\" style=\"background-image: url(images/destination-6.jpg);\">
        <span class=\"price\">\$550/person</span>
    </a>
    <div class=\"text p-4\">
        <span class=\"days\">7 Days Tour</span>
        <h3><a href=\"#\">Banaue Rice Terraces</a></h3>
        <p class=\"location\"><span class=\"fa fa-map-marker\"></span> Banaue, Ifugao, Philippines</p>
        <ul>
           <li><span class=\"flaticon-shower\"></span>2</li>
           <li><span class=\"flaticon-king-size\"></span>3</li>
           <li><span class=\"flaticon-sun-umbrella\"></span>Near Beach</li>
       </ul>
   </div>
</div>
</div>
<div class=\"col-md-4 ftco-animate\">
  <div class=\"project-wrap\">
     <a href=\"#\" class=\"img\" style=\"background-image: url(images/destination-7.jpg);\">
        <span class=\"price\">\$550/person</span>
    </a>
    <div class=\"text p-4\">
        <span class=\"days\">7 Days Tour</span>
        <h3><a href=\"#\">Banaue Rice Terraces</a></h3>
        <p class=\"location\"><span class=\"fa fa-map-marker\"></span> Banaue, Ifugao, Philippines</p>
        <ul>
           <li><span class=\"flaticon-shower\"></span>2</li>
           <li><span class=\"flaticon-king-size\"></span>3</li>
           <li><span class=\"flaticon-sun-umbrella\"></span>Near Beach</li>
       </ul>
   </div>
</div>
</div>
<div class=\"col-md-4 ftco-animate\">
  <div class=\"project-wrap\">
     <a href=\"#\" class=\"img\" style=\"background-image: url(images/destination-8.jpg);\">
        <span class=\"price\">\$550/person</span>
    </a>
    <div class=\"text p-4\">
        <span class=\"days\">7 Days Tour</span>
        <h3><a href=\"#\">Banaue Rice Terraces</a></h3>
        <p class=\"location\"><span class=\"fa fa-map-marker\"></span> Banaue, Ifugao, Philippines</p>
        <ul>
           <li><span class=\"flaticon-shower\"></span>2</li>
           <li><span class=\"flaticon-king-size\"></span>3</li>
           <li><span class=\"flaticon-sun-umbrella\"></span>Near Beach</li>
       </ul>
   </div>
</div>
</div>
<div class=\"col-md-4 ftco-animate\">
  <div class=\"project-wrap\">
     <a href=\"#\" class=\"img\" style=\"background-image: url(images/destination-9.jpg);\">
        <span class=\"price\">\$550/person</span>
    </a>
    <div class=\"text p-4\">
        <span class=\"days\">7 Days Tour</span>
        <h3><a href=\"#\">Banaue Rice Terraces</a></h3>
        <p class=\"location\"><span class=\"fa fa-map-marker\"></span> Banaue, Ifugao, Philippines</p>
        <ul>
           <li><span class=\"flaticon-shower\"></span>2</li>
           <li><span class=\"flaticon-king-size\"></span>3</li>
           <li><span class=\"flaticon-sun-umbrella\"></span>Near Beach</li>
       </ul>
   </div>
</div>
</div>
</div>
<div class=\"row mt-5\">
  <div class=\"col text-center\">
    <div class=\"block-27\">
      <ul>
        <li><a href=\"#\">&lt;</a></li>
        <li class=\"active\"><span>1</span></li>
        <li><a href=\"#\">2</a></li>
        <li><a href=\"#\">3</a></li>
        <li><a href=\"#\">4</a></li>
        <li><a href=\"#\">5</a></li>
        <li><a href=\"#\">&gt;</a></li>
    </ul>
</div>
</div>
</div>
</div>
</section>



<section class=\"ftco-intro ftco-section ftco-no-pt\">
 <div class=\"container\">
    <div class=\"row justify-content-center\">
       <div class=\"col-md-12 text-center\">
          <div class=\"img\"  style=\"background-image: url(images/bg_2.jpg);\">
             <div class=\"overlay\"></div>
             <h2>We Are Pacific A Travel Agency</h2>
             <p>We can manage your dream building A small river named Duden flows by their place</p>
             <p class=\"mb-0\"><a href=\"#\" class=\"btn btn-primary px-4 py-3\">Ask For A Quote</a></p>
         </div>
     </div>
 </div>
</div>
</section>

<footer class=\"ftco-footer bg-bottom ftco-no-pt\" style=\"background-image: url(images/bg_3.jpg);\">
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
\t\t\t<script src=\"{{asset('js/jquery-migrate-3.0.1.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('js/popper.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('js/bootstrap.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('js/jquery.easing.1.3.js')}}\"></script>
<script src=\"{{asset('js/jquery.waypoints.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('js/jquery.stellar.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('js/owl.carousel.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('js/jquery.magnific-popup.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('js/jquery.animateNumber.min.js')}}\"></script>
\t\t\t<script src=\"{{asset('js/bootstrap-datepicker.js')}}\"></script>
\t\t\t<script src=\"{{asset('js/scrollax.min.js')}}\"></script>
<script src=\"{{asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false')}}\"></script>
<script src=\"{{asset('js/google-map.js')}}\"></script>
<script src=\"{{asset('js/main.js')}}\"></script>
{% endblock %}
</body>
</html>", "logement/logement.html.twig", "C:\\Users\\ASUS\\Desktop\\PiDev\\Projet-Pi-tfarhida\\templates\\logement\\logement.html.twig");
    }
}
