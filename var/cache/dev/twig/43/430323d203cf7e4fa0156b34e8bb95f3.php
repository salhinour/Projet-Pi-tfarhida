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

/* restaurant/_search_results.html.twig */
class __TwigTemplate_2f3925660b1ac5322b8682cbfbcbd945 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurant/_search_results.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurant/_search_results.html.twig"));

        // line 1
        echo "<div class=\"row\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["restaurants"]) || array_key_exists("restaurants", $context) ? $context["restaurants"] : (function () { throw new RuntimeError('Variable "restaurants" does not exist.', 2, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["restaurant"]) {
            // line 3
            echo "    <div class=\"col-md-3 mb-4\">
        <div class=\"card\">
            <div class=\"ratio ratio-4x3\">
                <img src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["restaurant"], "ImageRestaurant", [], "any", false, false, false, 6))), "html", null, true);
            echo "\" class=\"card-img-top img-fluid\" style=\"max-width: 100%; height: auto;\" alt=\"Image du restaurant\">
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "nom", [], "any", false, false, false, 9), "html", null, true);
            echo "</h5>
                <p class=\"card-text\">
                    <strong>Adresse:</strong> ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "adresse", [], "any", false, false, false, 11), "html", null, true);
            echo "<br>
                    <strong>Numéro de téléphone:</strong> ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "numdetel", [], "any", false, false, false, 12), "html", null, true);
            echo "<br>
                    <strong>Nombre d'étoiles:</strong> ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["restaurant"], "nmbetoiles", [], "any", false, false, false, 13), "html", null, true);
            echo "
                </p>
                ";
            // line 16
            echo "                ";
            $context["currentTime"] = twig_date_format_filter($this->env, "now", "H:i");
            // line 17
            echo "                ";
            $context["isOpen"] = ((twig_get_attribute($this->env, $this->source, $context["restaurant"], "heureOuverture", [], "any", false, false, false, 17) <= (isset($context["currentTime"]) || array_key_exists("currentTime", $context) ? $context["currentTime"] : (function () { throw new RuntimeError('Variable "currentTime" does not exist.', 17, $this->source); })())) && ((isset($context["currentTime"]) || array_key_exists("currentTime", $context) ? $context["currentTime"] : (function () { throw new RuntimeError('Variable "currentTime" does not exist.', 17, $this->source); })()) <= twig_get_attribute($this->env, $this->source, $context["restaurant"], "heureFermeture", [], "any", false, false, false, 17)));
            // line 18
            echo "                ";
            if ((isset($context["isOpen"]) || array_key_exists("isOpen", $context) ? $context["isOpen"] : (function () { throw new RuntimeError('Variable "isOpen" does not exist.', 18, $this->source); })())) {
                // line 19
                echo "                    <p style=\"color: green;\">Le restaurant est ouvert</p>
                ";
            } else {
                // line 21
                echo "                    <p style=\"color: red;\">Le restaurant est fermé</p>
                ";
            }
            // line 23
            echo "                
                <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_showfront", ["id" => twig_get_attribute($this->env, $this->source, $context["restaurant"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\">Détails</a>
            </div>
        </div>
    </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 29
            echo "        <div class=\"col-md-12\">
            <p>Pas de restaurants trouvés.</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['restaurant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "restaurant/_search_results.html.twig";
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
        return array (  119 => 33,  110 => 29,  100 => 24,  97 => 23,  93 => 21,  89 => 19,  86 => 18,  83 => 17,  80 => 16,  75 => 13,  71 => 12,  67 => 11,  62 => 9,  56 => 6,  51 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
    {% for restaurant in restaurants %}
    <div class=\"col-md-3 mb-4\">
        <div class=\"card\">
            <div class=\"ratio ratio-4x3\">
                <img src=\"{{ asset('uploads/images/' ~ restaurant.ImageRestaurant) }}\" class=\"card-img-top img-fluid\" style=\"max-width: 100%; height: auto;\" alt=\"Image du restaurant\">
            </div>
            <div class=\"card-body\">
                <h5 class=\"card-title\">{{ restaurant.nom }}</h5>
                <p class=\"card-text\">
                    <strong>Adresse:</strong> {{ restaurant.adresse }}<br>
                    <strong>Numéro de téléphone:</strong> {{ restaurant.numdetel }}<br>
                    <strong>Nombre d'étoiles:</strong> {{ restaurant.nmbetoiles }}
                </p>
                {# Affichage de l'état d'ouverture du restaurant #}
                {% set currentTime = \"now\"|date(\"H:i\") %}
                {% set isOpen = restaurant.heureOuverture <= currentTime and currentTime <= restaurant.heureFermeture %}
                {% if isOpen %}
                    <p style=\"color: green;\">Le restaurant est ouvert</p>
                {% else %}
                    <p style=\"color: red;\">Le restaurant est fermé</p>
                {% endif %}
                
                <a href=\"{{ path('app_restaurant_showfront', {'id': restaurant.id}) }}\" class=\"btn btn-primary btn-sm\">Détails</a>
            </div>
        </div>
    </div>
    {% else %}
        <div class=\"col-md-12\">
            <p>Pas de restaurants trouvés.</p>
        </div>
    {% endfor %}
</div>
", "restaurant/_search_results.html.twig", "C:\\Users\\MSI\\INTEGRATION\\Projet-Pi-tfarhida\\templates\\restaurant\\_search_results.html.twig");
    }
}
