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

/* logement/api_arcgis.html.twig */
class __TwigTemplate_d92ffc939e688a987876a838c19a4f32 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "logement/api_arcgis.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "logement/api_arcgis.html.twig"));

        // line 1
        echo "<html>
<head>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"initial-scale=1, maximum-scale=1, user-scalable=no\">
<title>ArcGIS Developer Guide: Forward geocoding</title>
    <!-- ArcGIS Mapping APIs and Location Services Developer Guide
    Learn more: https://developers.arcgis.com/documentation/mapping-apis-and-services/search/
    -->
<style>
  html, body, #viewDiv {
    padding: 0;
    margin: 0;
    height: 100%;
    width: 100%;
  }
</style>

<link rel=\"stylesheet\" href=\"https://js.arcgis.com/4.25/esri/themes/light/main.css\">
<script src=\"https://js.arcgis.com/4.25\"></script>




</head>
<body>
  <div id=\"viewDiv\"></div>
</body>
<script>
  require([
    \"esri/config\",
    \"esri/Map\",
    \"esri/views/MapView\",
    \"esri/Graphic\",
    \"esri/rest/locator\"
  ],(esriConfig, Map, MapView, Graphic, locator)=> {

    esriConfig.apiKey = \"AAPK12e9985040fe4016865853dd057dc2d965kBjrbZsfaWIjtHQ2qGy5E_tvrRf8-hLlwxsCxO9nXiJjoa2OEfb-TEDqLPRbBi\";

    const map = new Map({
      basemap: \"arcgis-navigation\" //Basemap layer service
    });

    const view = new MapView({
      container: \"viewDiv\",
      map: map,
      constraints: {
        snapToZoom: false
      }
    });

    view.popup.actions = [];

    view.when(()=>{

      const geocodingServiceUrl = \"https://geocode-api.arcgis.com/arcgis/rest/services/World/GeocodeServer\";

      const params = {
        address: {
          \"address\": \"";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logements"]) || array_key_exists("logements", $context) ? $context["logements"] : (function () { throw new RuntimeError('Variable "logements" does not exist.', 59, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["logement"]) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "Localisation", [], "any", false, false, false, 59), "html", null, true);
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['logement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\"    
        
    
        }
      }

      locator.addressToLocations(geocodingServiceUrl, params).then((results) => {
        showResult(results);
      });


      function showResult(results) {
        if (results.length) {
          const result = results[0];
          console.log(result.address)
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
                content: result.address + \"<br><br>\" + result.location.longitude.toFixed(5) + \",\" + result.location.latitude.toFixed(5)
              }
            }
          ));
          if (results.length) {
            const g = view.graphics.getItemAt(0);
            view.popup.open({
              features: [g],
              location: g.geometry
            });
          }
          view.goTo({
            target: result.location,
            zoom: 13
          });
        }
      }
    });
  });
</script>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "logement/api_arcgis.html.twig";
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
        return array (  103 => 59,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
<head>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"initial-scale=1, maximum-scale=1, user-scalable=no\">
<title>ArcGIS Developer Guide: Forward geocoding</title>
    <!-- ArcGIS Mapping APIs and Location Services Developer Guide
    Learn more: https://developers.arcgis.com/documentation/mapping-apis-and-services/search/
    -->
<style>
  html, body, #viewDiv {
    padding: 0;
    margin: 0;
    height: 100%;
    width: 100%;
  }
</style>

<link rel=\"stylesheet\" href=\"https://js.arcgis.com/4.25/esri/themes/light/main.css\">
<script src=\"https://js.arcgis.com/4.25\"></script>




</head>
<body>
  <div id=\"viewDiv\"></div>
</body>
<script>
  require([
    \"esri/config\",
    \"esri/Map\",
    \"esri/views/MapView\",
    \"esri/Graphic\",
    \"esri/rest/locator\"
  ],(esriConfig, Map, MapView, Graphic, locator)=> {

    esriConfig.apiKey = \"AAPK12e9985040fe4016865853dd057dc2d965kBjrbZsfaWIjtHQ2qGy5E_tvrRf8-hLlwxsCxO9nXiJjoa2OEfb-TEDqLPRbBi\";

    const map = new Map({
      basemap: \"arcgis-navigation\" //Basemap layer service
    });

    const view = new MapView({
      container: \"viewDiv\",
      map: map,
      constraints: {
        snapToZoom: false
      }
    });

    view.popup.actions = [];

    view.when(()=>{

      const geocodingServiceUrl = \"https://geocode-api.arcgis.com/arcgis/rest/services/World/GeocodeServer\";

      const params = {
        address: {
          \"address\": \"{% for logement  in logements %}{{logement.Localisation}}  {% endfor %}\"    
        
    
        }
      }

      locator.addressToLocations(geocodingServiceUrl, params).then((results) => {
        showResult(results);
      });


      function showResult(results) {
        if (results.length) {
          const result = results[0];
          console.log(result.address)
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
                content: result.address + \"<br><br>\" + result.location.longitude.toFixed(5) + \",\" + result.location.latitude.toFixed(5)
              }
            }
          ));
          if (results.length) {
            const g = view.graphics.getItemAt(0);
            view.popup.open({
              features: [g],
              location: g.geometry
            });
          }
          view.goTo({
            target: result.location,
            zoom: 13
          });
        }
      }
    });
  });
</script>
</html>", "logement/api_arcgis.html.twig", "C:\\Users\\ASUS\\Desktop\\PiDev\\Projet-Pi-tfarhida\\templates\\logement\\api_arcgis.html.twig");
    }
}
