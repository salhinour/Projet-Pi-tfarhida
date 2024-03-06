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

/* activitee/activite.html.twig */
class __TwigTemplate_5ea29686866ee3dd096501b0567dc330 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activitee/activite.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activitee/activite.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Pacific - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    
    <!-- Styles CSS -->
    <style>
        .star {
            font-size: 1.5rem;
        }
        
        .hover {
            color: rgb(255, 196, 0);
        }
        .logo {
    width: 150px; /* ajustez la taille selon vos préférences */
    height: auto; /* pour conserver les proportions */
}
    </style>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">

    <!-- Liens vers les feuilles de style -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Arizonia&display=swap\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"css/animate.css\">
    <link rel=\"stylesheet\" href=\"css/owl.carousel.min.css\">
    <link rel=\"stylesheet\" href=\"css/owl.theme.default.min.css\">
    <link rel=\"stylesheet\" href=\"css/magnific-popup.css\">
    <link rel=\"stylesheet\" href=\"css/bootstrap-datepicker.css\">
    <link rel=\"stylesheet\" href=\"css/jquery.timepicker.css\">
    <link rel=\"stylesheet\" href=\"css/flaticon.css\">
    <link rel=\"stylesheet\" href=\"css/style.css\">
</head>
<body>
    <!-- Barre de navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" href=\"index.html\">Tfarhida<span>Bon plan</span></a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"oi oi-menu\"></span> Menu
\t\t\t</button>

\t\t\t<div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t<li class=\"nav-item \"><a href=\"/\" class=\"nav-link\">Home</a></li>
\t\t\t\t\t<li class=\"nav-item active\"><a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activitee_indexx");
        echo "\"class=\"nav-link\">Activites</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite");
        echo "\" class=\"nav-link\">Transports</a></li>
\t\t\t\t\t<li class=\"nav-item \"><a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logement_index");
        echo "\" class=\"nav-link\">Logements</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_indexfront");
        echo "\" class=\"nav-link\">restaurants</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index");
        echo "\" class=\"nav-link\">Reclamation</a></li>
                    <li <div id=\"google_translate_element\"></div> </li>

\t\t\t\t
\t\t\t
\t\t\t ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59)) {
            // line 60
            echo "\t\t\t    

\t\t\t\t ";
            // line 62
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 63
                echo "\t\t\t\t <p><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard_index");
                echo "\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Admin</span> </a> </p>
\t\t\t\t ";
            }
            // line 65
            echo "\t\t <li class=\"nav-item dropdown no-arrow \">
            <a aria-expanded=\"false\" aria-haspopup=\"true\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"userDropdown\" role=\"button\">
                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\"><i class=\"far fa-user text-primary mr-2 fa-2x \"></i>  ";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "fullName", [], "any", false, false, false, 67), "html", null, true);
            echo "</span>
                            </a>
            <!-- Dropdown - User Information -->
            <div aria-labelledby=\"userDropdown\" class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\">
               
\t\t\t\t  <a class=\"dropdown-item\" href=\"/logement/mylogement\">
                    <i class=\"fas fa-list-ul text-gray-400\"></i>
                    Mes Logements
                </a>
                <a class=\"dropdown-item\" href=\"/activitee\">
                    <i class=\"fas fa-list-ul text-gray-400\"></i>
                    Mes Activites
                </a>
                
                
                                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\"  href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\LogoutUrlExtension']->getLogoutPath("main"), "html", null, true);
            echo "\">
                    <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Déconnexion
                </a>
            </div>
\t\t\t</ul>
        </li>
\t\t\t\t  ";
            // line 92
            echo "            ";
            // line 93
            echo "\t\t\t";
        } else {
            // line 94
            echo "\t\t\t<p><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Login</span> </a> </p>
\t\t\t<p><a href=\"";
            // line 95
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration");
            echo "\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Register</span> </a> </p>
            ";
        }
        // line 97
        echo "\t\t</div>
\t\t</div>
\t</nav>
    
    <!-- END nav -->

    <!-- Section d'introduction -->
    <div class=\"hero-wrap js-fullheight\" style=\"background-image: url('/images/parachute.jpg');\">

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
        <section class=\"ftco-section ftco-no-pb ftco-no-pt\">
   <div class=\"container\">
       <div class=\"row\">
           <div class=\"col-md-12\">
               <div class=\"ftco-search d-flex justify-content-center\">
                   <div class=\"row\">
                       <div class=\"col-md-12 nav-link-wrap\">
                           <div class=\"nav nav-pills text-center\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
                               <a class=\"nav-link active mr-md-1\" id=\"v-pills-1-tab\" data-toggle=\"pill\" href=\"#v-pills-1\" role=\"tab\" aria-controls=\"v-pills-1\" aria-selected=\"true\">Chercher activité</a>
                           </div>
                       </div>
                       <div class=\"col-md-12 tab-wrap\">
                           <div class=\"tab-content\" id=\"v-pills-tabContent\">
                               <div class=\"tab-pane fade show active\" id=\"v-pills-1\" role=\"tabpanel\" aria-labelledby=\"v-pills-nextgen-tab\">
                                   <!-- Formulaire de recherche intégré -->
                                   <form action=\"";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activitee_indexx");
        echo "\" class=\"search-property-1\" method=\"get\">
                                       <div class=\"row no-gutters\">
                                           <div class=\"col-md d-flex\">
                                               <div class=\"form-group p-4 border-0\" id=\"filterSection\">
                                                   <label for=\"searchInput\">Activité</label>
                                                   <div class=\"form-field\">
                                                       <div class=\"icon\"><span class=\"fa fa-search\"></span></div>
                                                       <input type=\"text\" class=\"form-control\" id=\"searchInput\" name=\"activitee\" placeholder=\"Nom de l'activité\">
                                                   </div>
                                               </div>
                                           </div>
                                           
                                       </div>
                                   </form>
                                   <!-- Fin du formulaire de recherche intégré -->
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
</section>




    <!-- Section de recherche d'activités -->
   
   ";
        // line 175
        echo "    <!-- Section de recherche d'activités -->

    <!-- Section des activités -->
    <div class=\"container\">
        <div class=\"row\" id=\"activityCards\">
            <!-- Boucle pour afficher les activités -->
           ";
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activitees"]) || array_key_exists("activitees", $context) ? $context["activitees"] : (function () { throw new RuntimeError('Variable "activitees" does not exist.', 181, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["activitee"]) {
            // line 182
            echo "    <div class=\"col-md-4 ftco-animate project-wrap\" data-activity-name=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activitee"], "nom", [], "any", false, false, false, 182)), "html", null, true);
            echo "\">
        <div class=\"project-wrap\">
            <!-- Ajoutez la ligne suivante pour déboguer -->
            <script>console.log(\"Nom de l'activité : ";
            // line 185
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activitee"], "nom", [], "any", false, false, false, 185), "html", null, true);
            echo "\");</script>
            
            <a href=\"";
            // line 187
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activitee_desc", ["id" => twig_get_attribute($this->env, $this->source, $context["activitee"], "id", [], "any", false, false, false, 187)]), "html", null, true);
            echo "\" class=\"img\" style=\"background-image: url('";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["activitee"], "image", [], "any", false, false, false, 187))), "html", null, true);
            echo "');\">
                <span class=\"price\">";
            // line 188
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activitee"], "prix", [], "any", false, false, false, 188), "html", null, true);
            echo "DT/personne</span>
            </a>
            <h3><a href=\"";
            // line 190
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activitee_desc", ["id" => twig_get_attribute($this->env, $this->source, $context["activitee"], "id", [], "any", false, false, false, 190)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activitee"], "nom", [], "any", false, false, false, 190), "html", null, true);
            echo "</a></h3>
            <p class=\"location\"><span class=\"fa fa-map-marker\"></span>";
            // line 191
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activitee"], "localisation", [], "any", false, false, false, 191), "html", null, true);
            echo "</p>
            <a href=\"";
            // line 192
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evenement_map", ["id" => twig_get_attribute($this->env, $this->source, $context["activitee"], "id", [], "any", false, false, false, 192)]), "html", null, true);
            echo "\" class=\"btn btn-info rounded-pill\">
                <i class=\"fas fa-map-marker-alt\"></i> Voir sur la carte
            </a>
            <ul>
                <li><span class=\"flaticon-shower\"></span>2</li>
                <li><span class=\"flaticon-king-size\"></span>";
            // line 197
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activitee"], "nbP", [], "any", false, false, false, 197), "html", null, true);
            echo "</li>
                ";
            // line 198
            if ((twig_get_attribute($this->env, $this->source, $context["activitee"], "categorie", [], "any", true, true, false, 198) &&  !(null === twig_get_attribute($this->env, $this->source, $context["activitee"], "categorie", [], "any", false, false, false, 198)))) {
                // line 199
                echo "                    <li><span class=\"flaticon-sun-umbrella\"></span>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["activitee"], "categorie", [], "any", false, false, false, 199), "getTypeCategorie", [], "method", false, false, false, 199), "html", null, true);
                echo "</li>
                ";
            } else {
                // line 201
                echo "                    <li>No category found for this activity</li>
                ";
            }
            // line 203
            echo "            </ul>
            <!-- Formulaire de génération de code QR -->
            <div>
                <form method=\"post\" action=\"";
            // line 206
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generate_qr_code", ["id" => twig_get_attribute($this->env, $this->source, $context["activitee"], "id", [], "any", false, false, false, 206)]), "html", null, true);
            echo "\">
                    <input type=\"hidden\" name=\"text\" value=\"
                        Nom: ";
            // line 208
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activitee"], "nom", [], "any", false, false, false, 208), "html", null, true);
            echo "
                        Description: ";
            // line 209
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activitee"], "descriptionact", [], "any", false, false, false, 209), "html", null, true);
            echo "
                        Prix: ";
            // line 210
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activitee"], "prix", [], "any", false, false, false, 210), "html", null, true);
            echo "
                        Localisation: ";
            // line 211
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activitee"], "localisation", [], "any", false, false, false, 211), "html", null, true);
            echo "
                        Nombre Participant: ";
            // line 212
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activitee"], "nbp", [], "any", false, false, false, 212), "html", null, true);
            echo "
                    \">
                    <button type=\"submit\" class=\"btn btn-primary btn-sm\">Generate QR Code</button>
                </form>
            </div>
            <!-- Fin du formulaire de génération de code QR -->
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activitee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 221
        echo "        </div>
    </div>

    <!-- Pagination -->
    <div class=\"d-flex justify-content-center\">
        ";
        // line 226
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["activitees"]) || array_key_exists("activitees", $context) ? $context["activitees"] : (function () { throw new RuntimeError('Variable "activitees" does not exist.', 226, $this->source); })()), "activitee/pagination.html.twig");
        echo "
    </div>

    <!-- Pied de page -->
    <footer class=\"ftco-footer bg-bottom ftco-no-pt\" style=\"background-image: url(images/bg_3.jpg);\">
        <div class=\"container\">
            <!-- Contenu du pied de page -->
        </div>
    </footer>

    <!-- Loader -->
    <div id=\"ftco-loader\" class=\"show fullscreen\">
        <!-- Loader SVG -->
    </div>

    <!-- Scripts JavaScript -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js\"></script>
    <script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-migrate-3.0.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.animateNumber.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scrollax.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false\"></script>
    <script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/google-map.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"https://platform-api.sharethis.com/js/sharethis.js#property=64065d7b567fbf001a2d5d17&product=inline-share-buttons&source=platform\" async=\"async\"></script>

    <!-- Script pour filtrer les activités -->
  <script>
   \$(document).ready(function () {
       \$(\"#searchInput\").on(\"keyup\", function () { // Utiliser #searchInput pour cibler l'input de recherche
           var value = \$(this).val().toLowerCase();
           \$(\".project-wrap\").filter(function () { // Utiliser .project-wrap pour cibler les éléments contenant les activités
               \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
           });
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
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "activitee/activite.html.twig";
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
        return array (  439 => 257,  435 => 256,  430 => 254,  426 => 253,  422 => 252,  418 => 251,  414 => 250,  410 => 249,  406 => 248,  402 => 247,  398 => 246,  394 => 245,  390 => 244,  386 => 243,  366 => 226,  359 => 221,  344 => 212,  340 => 211,  336 => 210,  332 => 209,  328 => 208,  323 => 206,  318 => 203,  314 => 201,  308 => 199,  306 => 198,  302 => 197,  294 => 192,  290 => 191,  284 => 190,  279 => 188,  273 => 187,  268 => 185,  261 => 182,  257 => 181,  249 => 175,  216 => 131,  180 => 97,  175 => 95,  170 => 94,  167 => 93,  165 => 92,  155 => 83,  136 => 67,  132 => 65,  126 => 63,  124 => 62,  120 => 60,  118 => 59,  110 => 54,  106 => 53,  102 => 52,  98 => 51,  94 => 50,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Pacific - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    
    <!-- Styles CSS -->
    <style>
        .star {
            font-size: 1.5rem;
        }
        
        .hover {
            color: rgb(255, 196, 0);
        }
        .logo {
    width: 150px; /* ajustez la taille selon vos préférences */
    height: auto; /* pour conserver les proportions */
}
    </style>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css\">

    <!-- Liens vers les feuilles de style -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Arizonia&display=swap\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"css/animate.css\">
    <link rel=\"stylesheet\" href=\"css/owl.carousel.min.css\">
    <link rel=\"stylesheet\" href=\"css/owl.theme.default.min.css\">
    <link rel=\"stylesheet\" href=\"css/magnific-popup.css\">
    <link rel=\"stylesheet\" href=\"css/bootstrap-datepicker.css\">
    <link rel=\"stylesheet\" href=\"css/jquery.timepicker.css\">
    <link rel=\"stylesheet\" href=\"css/flaticon.css\">
    <link rel=\"stylesheet\" href=\"css/style.css\">
</head>
<body>
    <!-- Barre de navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" href=\"index.html\">Tfarhida<span>Bon plan</span></a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"oi oi-menu\"></span> Menu
\t\t\t</button>

\t\t\t<div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t<li class=\"nav-item \"><a href=\"/\" class=\"nav-link\">Home</a></li>
\t\t\t\t\t<li class=\"nav-item active\"><a href=\"{{ path('app_activitee_indexx') }}\"class=\"nav-link\">Activites</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"{{ path('app_activite') }}\" class=\"nav-link\">Transports</a></li>
\t\t\t\t\t<li class=\"nav-item \"><a href=\"{{ path('app_logement_index') }}\" class=\"nav-link\">Logements</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"{{ path('app_restaurant_indexfront') }}\" class=\"nav-link\">restaurants</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"{{ path('app_reclamation_index') }}\" class=\"nav-link\">Reclamation</a></li>
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
               
\t\t\t\t  <a class=\"dropdown-item\" href=\"/logement/mylogement\">
                    <i class=\"fas fa-list-ul text-gray-400\"></i>
                    Mes Logements
                </a>
                <a class=\"dropdown-item\" href=\"/activitee\">
                    <i class=\"fas fa-list-ul text-gray-400\"></i>
                    Mes Activites
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

    <!-- Section d'introduction -->
    <div class=\"hero-wrap js-fullheight\" style=\"background-image: url('/images/parachute.jpg');\">

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
        <section class=\"ftco-section ftco-no-pb ftco-no-pt\">
   <div class=\"container\">
       <div class=\"row\">
           <div class=\"col-md-12\">
               <div class=\"ftco-search d-flex justify-content-center\">
                   <div class=\"row\">
                       <div class=\"col-md-12 nav-link-wrap\">
                           <div class=\"nav nav-pills text-center\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
                               <a class=\"nav-link active mr-md-1\" id=\"v-pills-1-tab\" data-toggle=\"pill\" href=\"#v-pills-1\" role=\"tab\" aria-controls=\"v-pills-1\" aria-selected=\"true\">Chercher activité</a>
                           </div>
                       </div>
                       <div class=\"col-md-12 tab-wrap\">
                           <div class=\"tab-content\" id=\"v-pills-tabContent\">
                               <div class=\"tab-pane fade show active\" id=\"v-pills-1\" role=\"tabpanel\" aria-labelledby=\"v-pills-nextgen-tab\">
                                   <!-- Formulaire de recherche intégré -->
                                   <form action=\"{{ path('app_activitee_indexx') }}\" class=\"search-property-1\" method=\"get\">
                                       <div class=\"row no-gutters\">
                                           <div class=\"col-md d-flex\">
                                               <div class=\"form-group p-4 border-0\" id=\"filterSection\">
                                                   <label for=\"searchInput\">Activité</label>
                                                   <div class=\"form-field\">
                                                       <div class=\"icon\"><span class=\"fa fa-search\"></span></div>
                                                       <input type=\"text\" class=\"form-control\" id=\"searchInput\" name=\"activitee\" placeholder=\"Nom de l'activité\">
                                                   </div>
                                               </div>
                                           </div>
                                           
                                       </div>
                                   </form>
                                   <!-- Fin du formulaire de recherche intégré -->
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
</section>




    <!-- Section de recherche d'activités -->
   
   {# <div class=\"tab-pane fade show active\" id=\"v-pills-1\" role=\"tabpanel\" aria-labelledby=\"v-pills-nextgen-tab\">
    <form action=\"{{ path('app_activitee_index') }}\" class=\"search-property-1\" method=\"get\">
        <div class=\"row no-gutters\">
            <div class=\"col-md d-flex\">
                <div class=\"form-group p-4 border-0\" id=\"filterSection\">
                    <label>Categories</label>
                    <select name=\"TypeLog\" id=\"categorySelect\" onchange=\"this.form.submit()\">
                        <option value=\"\">choose an option</option>
                        {% for activitee in activitee %}
                        <option value=\"Hotel\" {% if selectedState == activitee.nom %} selected {% endif %}>{{activitee.nom}}</option>
                       {% endfor %}
                    </select>
                </div>
            </div> #}
    <!-- Section de recherche d'activités -->

    <!-- Section des activités -->
    <div class=\"container\">
        <div class=\"row\" id=\"activityCards\">
            <!-- Boucle pour afficher les activités -->
           {% for activitee in activitees %}
    <div class=\"col-md-4 ftco-animate project-wrap\" data-activity-name=\"{{ activitee.nom|lower }}\">
        <div class=\"project-wrap\">
            <!-- Ajoutez la ligne suivante pour déboguer -->
            <script>console.log(\"Nom de l'activité : {{ activitee.nom }}\");</script>
            
            <a href=\"{{ path('app_activitee_desc', {'id': activitee.id}) }}\" class=\"img\" style=\"background-image: url('{{ asset('uploads/' ~ activitee.image) }}');\">
                <span class=\"price\">{{ activitee.prix }}DT/personne</span>
            </a>
            <h3><a href=\"{{ path('app_activitee_desc', {'id': activitee.id}) }}\">{{ activitee.nom }}</a></h3>
            <p class=\"location\"><span class=\"fa fa-map-marker\"></span>{{ activitee.localisation }}</p>
            <a href=\"{{ path('app_evenement_map', {'id': activitee.id}) }}\" class=\"btn btn-info rounded-pill\">
                <i class=\"fas fa-map-marker-alt\"></i> Voir sur la carte
            </a>
            <ul>
                <li><span class=\"flaticon-shower\"></span>2</li>
                <li><span class=\"flaticon-king-size\"></span>{{ activitee.nbP }}</li>
                {% if activitee.categorie is defined and activitee.categorie is not null %}
                    <li><span class=\"flaticon-sun-umbrella\"></span>{{ activitee.categorie.getTypeCategorie() }}</li>
                {% else %}
                    <li>No category found for this activity</li>
                {% endif %}
            </ul>
            <!-- Formulaire de génération de code QR -->
            <div>
                <form method=\"post\" action=\"{{ path('generate_qr_code', {'id': activitee.id}) }}\">
                    <input type=\"hidden\" name=\"text\" value=\"
                        Nom: {{ activitee.nom }}
                        Description: {{ activitee.descriptionact }}
                        Prix: {{ activitee.prix }}
                        Localisation: {{ activitee.localisation }}
                        Nombre Participant: {{ activitee.nbp }}
                    \">
                    <button type=\"submit\" class=\"btn btn-primary btn-sm\">Generate QR Code</button>
                </form>
            </div>
            <!-- Fin du formulaire de génération de code QR -->
        </div>
    </div>
{% endfor %}
        </div>
    </div>

    <!-- Pagination -->
    <div class=\"d-flex justify-content-center\">
        {{ knp_pagination_render(activitees,'activitee/pagination.html.twig')}}
    </div>

    <!-- Pied de page -->
    <footer class=\"ftco-footer bg-bottom ftco-no-pt\" style=\"background-image: url(images/bg_3.jpg);\">
        <div class=\"container\">
            <!-- Contenu du pied de page -->
        </div>
    </footer>

    <!-- Loader -->
    <div id=\"ftco-loader\" class=\"show fullscreen\">
        <!-- Loader SVG -->
    </div>

    <!-- Scripts JavaScript -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js\"></script>
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
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false\"></script>
    <script src=\"{{asset('js/google-map.js')}}\"></script>
    <script src=\"{{asset('js/main.js')}}\"></script>
    <script type=\"text/javascript\" src=\"https://platform-api.sharethis.com/js/sharethis.js#property=64065d7b567fbf001a2d5d17&product=inline-share-buttons&source=platform\" async=\"async\"></script>

    <!-- Script pour filtrer les activités -->
  <script>
   \$(document).ready(function () {
       \$(\"#searchInput\").on(\"keyup\", function () { // Utiliser #searchInput pour cibler l'input de recherche
           var value = \$(this).val().toLowerCase();
           \$(\".project-wrap\").filter(function () { // Utiliser .project-wrap pour cibler les éléments contenant les activités
               \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
           });
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
</body>
</html>
", "activitee/activite.html.twig", "C:\\Users\\ASUS\\Desktop\\PiDev\\Projet-Pi-tfarhida\\templates\\activitee\\activite.html.twig");
    }
}
