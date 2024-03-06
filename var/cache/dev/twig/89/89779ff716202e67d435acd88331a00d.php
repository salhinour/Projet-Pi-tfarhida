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

/* moyen_transport/index.html.twig */
class __TwigTemplate_d04482295fc44793a3a28dfa1ab319e8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "moyen_transport/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "moyen_transport/index.html.twig"));

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
        <div class=\"ftco-animate pb-5 text-center\" style=\"margin-top: 80px;\">
         <h1 class=\"mb-0 bread\">Transport</h1>
      </div>
     </div>
   </div>
 </div>
</section>

";
        // line 63
        $this->displayBlock('body', $context, $blocks);
        // line 212
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
        // line 282
        $this->displayBlock('js', $context, $blocks);
        // line 303
        echo "

 <div class=\"modal fade\" id=\"mapModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Map Modal</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div id=\"viewDiv\" style=\"height: 500px;\"></div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
            </div>
        </div>
    </div>
</div>


    <script>
    require([
        \"esri/config\",
        \"esri/Map\",
        \"esri/views/MapView\",
        \"esri/Graphic\",
        \"esri/rest/locator\"
    ], (esriConfig, Map, MapView, Graphic, locator) => {

        esriConfig.apiKey = \"AAPK12e9985040fe4016865853dd057dc2d965kBjrbZsfaWIjtHQ2qGy5E_tvrRf8-hLlwxsCxO9nXiJjoa2OEfb-TEDqLPRbBi\";

        const map = new Map({
            basemap: \"arcgis-navigation\"
        });

        const view = new MapView({
            container: \"viewDiv\",
            map: map,
            constraints: {
                snapToZoom: false
            }
        });

        view.popup.actions = [];

        view.when(() => {
            const geocodingServiceUrl = \"https://geocode-api.arcgis.com/arcgis/rest/services/World/GeocodeServer\";

            const params = {
                address: {
                    \"address\": \"";
        // line 355
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["moyen_transports"]) || array_key_exists("moyen_transports", $context) ? $context["moyen_transports"] : (function () { throw new RuntimeError('Variable "moyen_transports" does not exist.', 355, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["moyen_transport"]) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["moyen_transport"], "lieu", [], "any", false, false, false, 355), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['moyen_transport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\"
                }
            };

            locator.addressToLocations(geocodingServiceUrl, params)
                .then((results) => {
                    showResult(results);
                })
                .catch((error) => {
                    console.error(\"Error during geocoding:\", error);
                });

            function showResult(results) {
                if (results && results.length > 0) {
                    const result = results[0];
                    console.log(result.address);

                    view.graphics.add(new Graphic({
                        symbol: {
                            type: \"simple-marker\",
                            color: \"#000000\",
                            size: \"12px\",
                            outline: {
                                color: \"#ffffff\",
                                width: \"1px\"
                            }
                        },
                        geometry: result.location,
                        attributes: {
                            title: \"Address\",
                            address: result.address,
                            score: result.score
                        },
                        popupTemplate: {
                            title: \"{title}\",
                            content: `\${result.address}<br><br>\${result.location.longitude.toFixed(5)}, \${result.location.latitude.toFixed(5)}`
                        }
                    }));

                    const graphicsCount = view.graphics.length;
                    if (graphicsCount > 0) {
                        const g = view.graphics.getItemAt(graphicsCount - 1);
                        view.popup.open({
                            features: [g],
                            location: g.geometry
                        });

                        view.goTo({
                            target: result.location,
                            zoom: 13
                        });
                    }
                } else {
                    console.error(\"No geocoding results found.\");
                }
            }
        });
    });
</script>
<!-- Add this script to your template -->
<script src=\"https://code.jquery.com/jquery-3.6.4.min.js\"></script>

<script>
    \$(document).ready(function () {
        \$('#search-input').on('input', function () {
            var searchTerm = \$(this).val();

            \$.ajax({
                type: \"GET\",
                url: \"";
        // line 424
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_moyen_transport_index");
        echo "\",
                data: { type: searchTerm },
                success: function (data) {
                    // Update the content of the result pane with the filtered data
                    \$('#filtered-results').html(data);
                }
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

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    <link rel=\"stylesheet\" href=\"https://js.arcgis.com/4.25/esri/themes/light/main.css\">

  <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css2?family=Arizonia&display=swap"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\">

\t\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\">
  
  <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.carousel.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.theme.default.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\">

  <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap-datepicker.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery.timepicker.css"), "html", null, true);
        echo "\">

  
  <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/flaticon.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 63
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 64
        echo "    ";
        // line 99
        echo "<section class=\"ftco-section ftco-no-pb ftco-no-pt\">
\t\t<div class=\"container \">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"ftco-search d-flex justify-content-center\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12 nav-link-wrap\">
\t\t\t\t\t\t\t\t<div class=\"nav nav-pills text-center\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">


\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-md-12 tab-wrap\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"tab-content\" id=\"v-pills-tabContent\">
\t\t\t\t\t\t\t\t\t
   <div class=\"tab-pane fade show active\" id=\"v-pills-1\" role=\"tabpanel\" aria-labelledby=\"v-pills-nextgen-tab\">
    <form id=\"search-form\" action=\"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_moyen_transport_index");
        echo "\" class=\"search-property-1\" method=\"get\">
        <div class=\"row no-gutters\">
            <div class=\"col-md d-flex\">
                <div class=\"form-group p-4 border-0\">
                    <label for=\"#\">Moyen de Transport</label>
                    <div class=\"form-field\">
                        <div class=\"icon\"><span class=\"fa fa-search\"></span></div>
                        <input type=\"text\" id=\"search-input\" class=\"form-control\" placeholder=\"Search \" name=\"type\">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

    <div id=\"transport-container\">
    <div class=\"row\">
    ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["moyen_transports"]) || array_key_exists("moyen_transports", $context) ? $context["moyen_transports"] : (function () { throw new RuntimeError('Variable "moyen_transports" does not exist.', 143, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["moyen_transport"]) {
            // line 144
            echo "        <div class=\"col-md-3 mb-4\">
            <div class=\"card\">
                <div class=\"ratio ratio-4x3\">
                    <img src=\"";
            // line 147
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["moyen_transport"], "image", [], "any", false, false, false, 147))), "html", null, true);
            echo "\" alt=\"Image du moyen de transport\" style=\"width: 100%; height: 100%; object-fit: cover;\">
                </div>
                <div class=\"card-body\">
                    <h5 class=\"card-title\">";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["moyen_transport"], "type", [], "any", false, false, false, 150), "html", null, true);
            echo "</h5>
                    <p class=\"card-text\">
                        <strong>État:</strong> ";
            // line 152
            if ((twig_get_attribute($this->env, $this->source, $context["moyen_transport"], "etat", [], "any", false, false, false, 152) == 1)) {
                echo " Disponible ";
            } else {
                echo " Non Disponible ";
            }
            echo "<br>
                    </p>
                    <p class=\"card-text\">
                    Lieu: ";
            // line 155
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["moyen_transport"], "lieu", [], "any", false, false, false, 155), "html", null, true);
            echo "
                    </p>
                    <div class=\"row\">
                    <a href=\"";
            // line 158
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_moyen_transport_show", ["id" => twig_get_attribute($this->env, $this->source, $context["moyen_transport"], "id", [], "any", false, false, false, 158)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-lg mr-2\">Détails</a>
                    <a href=\"";
            // line 159
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trajects_for_moyen_transport", ["id" => twig_get_attribute($this->env, $this->source, $context["moyen_transport"], "id", [], "any", false, false, false, 159)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-lg mr-2\">trajects</a>
                    <a href=\"";
            // line 160
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_moyen_transport_index", ["id" => twig_get_attribute($this->env, $this->source, $context["moyen_transport"], "id", [], "any", false, false, false, 160)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#mapModal\">station</a>
                </div>
                </div>

            </div>
        </div>
       





    
    ";
            // line 195
            echo "    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 196
            echo "        <div class=\"col-md-12\">
            <p>Pas de moyens de transport trouvés.</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['moyen_transport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        echo "</div>
</div>
</div>
</div>


</section>
<!-- Pagination -->
    <div class=\"d-flex justify-content-center\">
        ";
        // line 209
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["moyen_transports"]) || array_key_exists("moyen_transports", $context) ? $context["moyen_transports"] : (function () { throw new RuntimeError('Variable "moyen_transports" does not exist.', 209, $this->source); })()), "moyen_transport/pagination.html.twig");
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 282
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 283
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-migrate-3.0.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.animateNumber.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scrollax.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/google-map.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
<script src=\"https://js.arcgis.com/4.25\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "moyen_transport/index.html.twig";
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
        return array (  635 => 297,  631 => 296,  627 => 295,  623 => 294,  619 => 293,  615 => 292,  611 => 291,  607 => 290,  603 => 289,  599 => 288,  595 => 287,  591 => 286,  587 => 285,  583 => 284,  578 => 283,  568 => 282,  555 => 209,  544 => 200,  535 => 196,  530 => 195,  514 => 160,  510 => 159,  506 => 158,  500 => 155,  490 => 152,  485 => 150,  479 => 147,  474 => 144,  469 => 143,  440 => 117,  420 => 99,  418 => 64,  408 => 63,  396 => 26,  392 => 25,  386 => 22,  382 => 21,  377 => 19,  373 => 18,  369 => 17,  364 => 15,  359 => 13,  354 => 11,  350 => 10,  346 => 8,  336 => 7,  302 => 424,  223 => 355,  169 => 303,  167 => 282,  95 => 212,  93 => 63,  56 => 28,  54 => 7,  46 => 1,);
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
    <link rel=\"stylesheet\" href=\"https://js.arcgis.com/4.25/esri/themes/light/main.css\">

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
        <div class=\"ftco-animate pb-5 text-center\" style=\"margin-top: 80px;\">
         <h1 class=\"mb-0 bread\">Transport</h1>
      </div>
     </div>
   </div>
 </div>
</section>

{% block body %}
    {# <h1>MoyenTransport index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Type</th>
                <th>Capacite</th>
                <th>Num_serie</th>
                <th>Etat</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for moyen_transport in moyen_transports %}
            <tr>
                <td>{{ moyen_transport.id }}</td>
                <td>{{ moyen_transport.type }}</td>
                <td>{{ moyen_transport.capacite }}</td>
                <td>{{ moyen_transport.numSerie }}</td>
                <td> {% if moyen_transport.etat == 1 %}
                            Disponible
                        {% else %}
                            Non Disponible
                        {% endif %} </td>
                <td>
                    <a href=\"{{ path('app_moyen_transport_show', {'id': moyen_transport.id}) }}\" class=\"btn btn-success  \">show</a>
                   
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %} #}
<section class=\"ftco-section ftco-no-pb ftco-no-pt\">
\t\t<div class=\"container \">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"ftco-search d-flex justify-content-center\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12 nav-link-wrap\">
\t\t\t\t\t\t\t\t<div class=\"nav nav-pills text-center\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">


\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-md-12 tab-wrap\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"tab-content\" id=\"v-pills-tabContent\">
\t\t\t\t\t\t\t\t\t
   <div class=\"tab-pane fade show active\" id=\"v-pills-1\" role=\"tabpanel\" aria-labelledby=\"v-pills-nextgen-tab\">
    <form id=\"search-form\" action=\"{{ path('app_moyen_transport_index') }}\" class=\"search-property-1\" method=\"get\">
        <div class=\"row no-gutters\">
            <div class=\"col-md d-flex\">
                <div class=\"form-group p-4 border-0\">
                    <label for=\"#\">Moyen de Transport</label>
                    <div class=\"form-field\">
                        <div class=\"icon\"><span class=\"fa fa-search\"></span></div>
                        <input type=\"text\" id=\"search-input\" class=\"form-control\" placeholder=\"Search \" name=\"type\">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

    <div id=\"transport-container\">
    <div class=\"row\">
    {% for moyen_transport in moyen_transports %}
        <div class=\"col-md-3 mb-4\">
            <div class=\"card\">
                <div class=\"ratio ratio-4x3\">
                    <img src=\"{{ asset('uploads/images/' ~ moyen_transport.image) }}\" alt=\"Image du moyen de transport\" style=\"width: 100%; height: 100%; object-fit: cover;\">
                </div>
                <div class=\"card-body\">
                    <h5 class=\"card-title\">{{ moyen_transport.type }}</h5>
                    <p class=\"card-text\">
                        <strong>État:</strong> {% if moyen_transport.etat == 1 %} Disponible {% else %} Non Disponible {% endif %}<br>
                    </p>
                    <p class=\"card-text\">
                    Lieu: {{ moyen_transport.lieu}}
                    </p>
                    <div class=\"row\">
                    <a href=\"{{ path('app_moyen_transport_show', {'id': moyen_transport.id}) }}\" class=\"btn btn-primary btn-lg mr-2\">Détails</a>
                    <a href=\"{{ path('app_trajects_for_moyen_transport', {'id': moyen_transport.id}) }}\" class=\"btn btn-primary btn-lg mr-2\">trajects</a>
                    <a href=\"{{ path('app_moyen_transport_index', {'id': moyen_transport.id}) }}\" class=\"btn btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#mapModal\">station</a>
                </div>
                </div>

            </div>
        </div>
       





    
    {# <div class=\"col-md-4 ftco-animate fadeInUp ftco-animated\">
            <div class=\"card border-0 shadow\" style=\"background-color: #FDF5E6;\"> <!-- Change #f8f9fa to your preferred color code -->
                <div class=\"ratio ratio-4x3\">
                    <img src=\"{{ asset('uploads/images/' ~ moyen_transport.image) }}\" alt=\"Image du moyen de transport\" style=\"width: 100%; height: 100%; object-fit: cover;\">
                </div>
                <div class=\"card-body text-center\">
                    <h5 class=\"card-title\">{{ moyen_transport.type }}</h5>
                    <p class=\"card-text\">
                        <strong>État:</strong> {% if moyen_transport.etat == 1 %} Disponible {% else %} Non Disponible {% endif %}<br>
                    </p>
                    <p class=\"card-text\">
                    Lieu: {{ moyen_transport.lieu}}
                    </p>
                    <div class=\"row\">
                    <a href=\"{{ path('app_moyen_transport_show', {'id': moyen_transport.id}) }}\" class=\"btn btn-primary btn-lg mr-2\">Détails</a>
                    <a href=\"{{ path('app_trajects_for_moyen_transport', {'id': moyen_transport.id}) }}\" class=\"btn btn-primary btn-lg mr-2\">trajects</a>
                    <a href=\"{{ path('app_moyen_transport_index', {'id': moyen_transport.id}) }}\" class=\"btn btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#mapModal\">station</a>
                </div>
                </div>
                
            </div>
        </div> #}
    {% else %}
        <div class=\"col-md-12\">
            <p>Pas de moyens de transport trouvés.</p>
        </div>
    {% endfor %}
</div>
</div>
</div>
</div>


</section>
<!-- Pagination -->
    <div class=\"d-flex justify-content-center\">
        {{ knp_pagination_render(moyen_transports,'moyen_transport/pagination.html.twig')}}
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
<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
<script src=\"https://js.arcgis.com/4.25\"></script>
{% endblock %}


 <div class=\"modal fade\" id=\"mapModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Map Modal</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <div id=\"viewDiv\" style=\"height: 500px;\"></div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
            </div>
        </div>
    </div>
</div>


    <script>
    require([
        \"esri/config\",
        \"esri/Map\",
        \"esri/views/MapView\",
        \"esri/Graphic\",
        \"esri/rest/locator\"
    ], (esriConfig, Map, MapView, Graphic, locator) => {

        esriConfig.apiKey = \"AAPK12e9985040fe4016865853dd057dc2d965kBjrbZsfaWIjtHQ2qGy5E_tvrRf8-hLlwxsCxO9nXiJjoa2OEfb-TEDqLPRbBi\";

        const map = new Map({
            basemap: \"arcgis-navigation\"
        });

        const view = new MapView({
            container: \"viewDiv\",
            map: map,
            constraints: {
                snapToZoom: false
            }
        });

        view.popup.actions = [];

        view.when(() => {
            const geocodingServiceUrl = \"https://geocode-api.arcgis.com/arcgis/rest/services/World/GeocodeServer\";

            const params = {
                address: {
                    \"address\": \"{% for moyen_transport in moyen_transports %}{{ moyen_transport.lieu }}{% endfor %}\"
                }
            };

            locator.addressToLocations(geocodingServiceUrl, params)
                .then((results) => {
                    showResult(results);
                })
                .catch((error) => {
                    console.error(\"Error during geocoding:\", error);
                });

            function showResult(results) {
                if (results && results.length > 0) {
                    const result = results[0];
                    console.log(result.address);

                    view.graphics.add(new Graphic({
                        symbol: {
                            type: \"simple-marker\",
                            color: \"#000000\",
                            size: \"12px\",
                            outline: {
                                color: \"#ffffff\",
                                width: \"1px\"
                            }
                        },
                        geometry: result.location,
                        attributes: {
                            title: \"Address\",
                            address: result.address,
                            score: result.score
                        },
                        popupTemplate: {
                            title: \"{title}\",
                            content: `\${result.address}<br><br>\${result.location.longitude.toFixed(5)}, \${result.location.latitude.toFixed(5)}`
                        }
                    }));

                    const graphicsCount = view.graphics.length;
                    if (graphicsCount > 0) {
                        const g = view.graphics.getItemAt(graphicsCount - 1);
                        view.popup.open({
                            features: [g],
                            location: g.geometry
                        });

                        view.goTo({
                            target: result.location,
                            zoom: 13
                        });
                    }
                } else {
                    console.error(\"No geocoding results found.\");
                }
            }
        });
    });
</script>
<!-- Add this script to your template -->
<script src=\"https://code.jquery.com/jquery-3.6.4.min.js\"></script>

<script>
    \$(document).ready(function () {
        \$('#search-input').on('input', function () {
            var searchTerm = \$(this).val();

            \$.ajax({
                type: \"GET\",
                url: \"{{ path('app_moyen_transport_index') }}\",
                data: { type: searchTerm },
                success: function (data) {
                    // Update the content of the result pane with the filtered data
                    \$('#filtered-results').html(data);
                }
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

", "moyen_transport/index.html.twig", "C:\\Users\\ASUS\\Desktop\\PiDev\\Projet-Pi-tfarhida\\templates\\moyen_transport\\index.html.twig");
    }
}
