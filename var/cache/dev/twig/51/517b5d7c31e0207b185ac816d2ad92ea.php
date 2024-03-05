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

/* logement/index.html.twig */
class __TwigTemplate_21c15ea2581a3aec07707f342b1f3041 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "header.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "logement/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "logement/index.html.twig"));

        $this->parent = $this->loadTemplate("header.html.twig", "logement/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "
    <!-- END nav -->
\t<div class=\"hero-wrap js-fullheight\" style=\"background-image: url('/images/hotelBG.jpg');\">
\t\t<div class=\"overlay\"></div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row no-gutters slider-text js-fullheight align-items-center\" data-scrollax-parent=\"true\">
\t\t\t\t<div class=\"col-md-7 ftco-animate\">
\t\t\t\t\t<span class=\"subheading\">Welcome to Pacific</span>
\t\t\t\t\t<h1 class=\"mb-4\">Discover Your Favorite Place with Us</h1>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
</header>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 23
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "\t
\t
\t

\t<section class=\"ftco-section ftco-no-pb ftco-no-pt\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"ftco-search d-flex justify-content-center\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12 nav-link-wrap\">
\t\t\t\t\t\t\t\t<div class=\"nav nav-pills text-center\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">

\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"v-pills-2-tab\" data-toggle=\"pill\" href=\"#v-pills-2\" role=\"tab\" aria-controls=\"v-pills-2\" aria-selected=\"false\">Logements</a>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-md-12 tab-wrap\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"tab-content\" id=\"v-pills-tabContent\">
\t\t\t\t\t\t\t\t\t\t";
        // line 48
        echo " 
   <div class=\"tab-pane fade show active\" id=\"v-pills-1\" role=\"tabpanel\" aria-labelledby=\"v-pills-nextgen-tab\">
    <form action=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logement_index");
        echo "\" class=\"search-property-1\" method=\"get\">
        <div class=\"row no-gutters\">
            <div class=\"col-md d-flex\">
                <div class=\"form-group p-4 border-0\" id=\"filterSection\">
                    <label>Categories</label>
                    <select name=\"TypeLog\" id=\"categorySelect\" onchange=\"this.form.submit()\">
                        <option value=\"\">choose an option</option>
                        <option value=\"Hotel\" ";
        // line 57
        if (((isset($context["selectedState"]) || array_key_exists("selectedState", $context) ? $context["selectedState"] : (function () { throw new RuntimeError('Variable "selectedState" does not exist.', 57, $this->source); })()) == "Hotel")) {
            echo " selected ";
        }
        echo ">Hotel</option>
                        <option value=\"Villa\" ";
        // line 58
        if (((isset($context["selectedState"]) || array_key_exists("selectedState", $context) ? $context["selectedState"] : (function () { throw new RuntimeError('Variable "selectedState" does not exist.', 58, $this->source); })()) == "Villa")) {
            echo " selected ";
        }
        echo ">Villa</option>
                        <option value=\"Maison\" ";
        // line 59
        if (((isset($context["selectedState"]) || array_key_exists("selectedState", $context) ? $context["selectedState"] : (function () { throw new RuntimeError('Variable "selectedState" does not exist.', 59, $this->source); })()) == "Maison")) {
            echo " selected ";
        }
        echo ">Maison</option>
                        <option value=\"Appartement\" ";
        // line 60
        if (((isset($context["selectedState"]) || array_key_exists("selectedState", $context) ? $context["selectedState"] : (function () { throw new RuntimeError('Variable "selectedState" does not exist.', 60, $this->source); })()) == "Appartement")) {
            echo " selected ";
        }
        echo ">Appartement</option>

                    </select>
                </div>
            </div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group p-4 border-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"#\">Destination</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon\"><span class=\"fa fa-search\"></span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search place\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"#\">Price Limit</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"select-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-chevron-down\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"Prix\" id=\"prix\" class=\"form-control\" onchange=\"this.form.submit()\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Tous les prix</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0-100\"  ";
        // line 84
        if (((isset($context["selectedPrice"]) || array_key_exists("selectedPrice", $context) ? $context["selectedPrice"] : (function () { throw new RuntimeError('Variable "selectedPrice" does not exist.', 84, $this->source); })()) == "0-100")) {
            echo " selected ";
        }
        echo " >Moins de 100 </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"100-200\"  ";
        // line 85
        if (((isset($context["selectedPrice"]) || array_key_exists("selectedPrice", $context) ? $context["selectedPrice"] : (function () { throw new RuntimeError('Variable "selectedPrice" does not exist.', 85, $this->source); })()) == "100-200")) {
            echo " selected ";
        }
        echo " >100 - 200</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"200-300\"  ";
        // line 86
        if (((isset($context["selectedPrice"]) || array_key_exists("selectedPrice", $context) ? $context["selectedPrice"] : (function () { throw new RuntimeError('Variable "selectedPrice" does not exist.', 86, $this->source); })()) == "200-300")) {
            echo " selected ";
        }
        echo " >200 - 300</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"300-500\"  ";
        // line 87
        if (((isset($context["selectedPrice"]) || array_key_exists("selectedPrice", $context) ? $context["selectedPrice"] : (function () { throw new RuntimeError('Variable "selectedPrice" does not exist.', 87, $this->source); })()) == "300-500")) {
            echo " selected ";
        }
        echo " >300 - 500</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t <div class=\"col-md d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group d-flex w-100 border-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-field w-100 align-items-center d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Filter\" class=\"align-self-stretch form-control btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>


     
<section class=\"ftco-section\">
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logements"]) || array_key_exists("logements", $context) ? $context["logements"] : (function () { throw new RuntimeError('Variable "logements" does not exist.', 121, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["logement"]) {
            // line 122
            echo "                <div class=\"col-md-4 ftco-animate fadeInUp ftco-animated\">
                    <div class=\"project-wrap hotel\">
\t\t\t\t\t<a href=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["logement"], "id", [], "any", false, false, false, 124)]), "html", null, true);
            echo "\" class=\"img\" style=\"background-image: url('";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["logement"], "image", [], "any", false, false, false, 124))), "html", null, true);
            echo "');\">
    \t\t\t\t\t<span class=\"price\">";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "Prix", [], "any", false, false, false, 125), "html", null, true);
            echo "DT/person</span>
\t\t\t\t\t</a>
                        <div class=\"text p-4\">
\t\t\t\t\t\t ";
            // line 128
            if ((twig_get_attribute($this->env, $this->source, $context["logement"], "NoteMoyenne", [], "any", false, false, false, 128) == 1)) {
                // line 129
                echo "\t\t\t\t\t\t<p class=\"star mb-2\">
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t</p> 
\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 132
$context["logement"], "NoteMoyenne", [], "any", false, false, false, 132) == 2)) {
                echo "  

\t\t\t\t\t\t<p class=\"star mb-2\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t</p> 
\t\t\t\t\t\t\t ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 139
$context["logement"], "NoteMoyenne", [], "any", false, false, false, 139) == 3)) {
                echo "  

\t\t\t\t\t\t<p class=\"star mb-2\">

\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t</p> 
\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 147
$context["logement"], "NoteMoyenne", [], "any", false, false, false, 147) == 4)) {
                echo "  

\t\t\t\t\t\t<p class=\"star mb-2\">

\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t</p> 
\t\t\t\t\t\t\t";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 156
$context["logement"], "NoteMoyenne", [], "any", false, false, false, 156) == 5)) {
                echo " 

\t\t\t\t\t\t<p class=\"star mb-2\">

\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t</p> 
\t\t\t\t\t\t\t ";
            }
            // line 168
            echo "                         

                            <span class=\"days\">un jour</span>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t<a href=\"#\">";
            // line 174
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "Typelog", [], "any", false, false, false, 174), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "nom", [], "any", false, false, false, 174), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
                            <p class=\"location\"><span class=\"fa fa-map-marker\"></span>";
            // line 178
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "Localisation", [], "any", false, false, false, 178), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t
                            <ul> 
\t\t\t\t\t\t\t 
                                <li><span class=\"fas fa-phone-alt\"></span> ";
            // line 182
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "num", [], "any", false, false, false, 182), "html", null, true);
            echo " </li>
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<a href=\"";
            // line 186
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logement_map", ["id" => twig_get_attribute($this->env, $this->source, $context["logement"], "id", [], "any", false, false, false, 186)]), "html", null, true);
            echo "\" class=\"btn btn-info rounded-pill m-2\" > <i class=\"fas fa-location-arrow\"></i> Show Map</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            // line 189
            echo "       \t\t\t\t\t\t  <div class=\"sharethis-inline-share-buttons\"></div>
         ";
            // line 191
            echo "
                        </div>
                    </div>
                </div>
\t\t\t\t
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['logement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        echo "        </div>
    </div>
\t<div class=\"row\">
    <a href=\"";
        // line 200
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logement_new");
        echo "\">Create new logement</a>
\t</div>
\t<th>
\t";
        // line 218
        echo "<div class=\"row mt-5\">
  <div class=\"col text-center\">
    <div class=\"block-27\">
      <ul>
        <li>
          <a href=\"#\">&lt;</a>
          ";
        // line 224
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["logements"]) || array_key_exists("logements", $context) ? $context["logements"] : (function () { throw new RuntimeError('Variable "logements" does not exist.', 224, $this->source); })()), "logement/pagination.html.twig");
        echo "

        </li>
      </ul>
    </div>
  </div>
</div>


\t<!-- Pagination -->
    <div class=\"d-flex justify-content-center\">
        ";
        // line 235
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["logements"]) || array_key_exists("logements", $context) ? $context["logements"] : (function () { throw new RuntimeError('Variable "logements" does not exist.', 235, $this->source); })()), "logement/pagination.html.twig");
        echo "
    </div>

</div>



  
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "logement/index.html.twig";
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
        return array (  404 => 235,  390 => 224,  382 => 218,  376 => 200,  371 => 197,  360 => 191,  357 => 189,  352 => 186,  345 => 182,  338 => 178,  329 => 174,  321 => 168,  306 => 156,  294 => 147,  283 => 139,  273 => 132,  268 => 129,  266 => 128,  260 => 125,  254 => 124,  250 => 122,  246 => 121,  207 => 87,  201 => 86,  195 => 85,  189 => 84,  160 => 60,  154 => 59,  148 => 58,  142 => 57,  132 => 50,  128 => 48,  105 => 24,  95 => 23,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'header.html.twig' %}


{% block header %}

    <!-- END nav -->
\t<div class=\"hero-wrap js-fullheight\" style=\"background-image: url('/images/hotelBG.jpg');\">
\t\t<div class=\"overlay\"></div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row no-gutters slider-text js-fullheight align-items-center\" data-scrollax-parent=\"true\">
\t\t\t\t<div class=\"col-md-7 ftco-animate\">
\t\t\t\t\t<span class=\"subheading\">Welcome to Pacific</span>
\t\t\t\t\t<h1 class=\"mb-4\">Discover Your Favorite Place with Us</h1>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
</header>
{% endblock %}

{% block body%}
\t
\t
\t

\t<section class=\"ftco-section ftco-no-pb ftco-no-pt\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"ftco-search d-flex justify-content-center\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12 nav-link-wrap\">
\t\t\t\t\t\t\t\t<div class=\"nav nav-pills text-center\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">

\t\t\t\t\t\t\t\t\t<a class=\"nav-link\" id=\"v-pills-2-tab\" data-toggle=\"pill\" href=\"#v-pills-2\" role=\"tab\" aria-controls=\"v-pills-2\" aria-selected=\"false\">Logements</a>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-md-12 tab-wrap\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"tab-content\" id=\"v-pills-tabContent\">
\t\t\t\t\t\t\t\t\t\t{# <div class=\"form-field\">
\t\t\t\t\t\t\t\t\t{# <div class=\"icon\"><span class=\"fa fa-search\"></span></div>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"myInput\" placeholder=\"Chercher Logement\">
\t\t\t\t\t\t\t\t</div> #} 
   <div class=\"tab-pane fade show active\" id=\"v-pills-1\" role=\"tabpanel\" aria-labelledby=\"v-pills-nextgen-tab\">
    <form action=\"{{ path('app_logement_index') }}\" class=\"search-property-1\" method=\"get\">
        <div class=\"row no-gutters\">
            <div class=\"col-md d-flex\">
                <div class=\"form-group p-4 border-0\" id=\"filterSection\">
                    <label>Categories</label>
                    <select name=\"TypeLog\" id=\"categorySelect\" onchange=\"this.form.submit()\">
                        <option value=\"\">choose an option</option>
                        <option value=\"Hotel\" {% if selectedState == 'Hotel' %} selected {% endif %}>Hotel</option>
                        <option value=\"Villa\" {% if selectedState == 'Villa' %} selected {% endif %}>Villa</option>
                        <option value=\"Maison\" {% if selectedState == 'Maison' %} selected {% endif %}>Maison</option>
                        <option value=\"Appartement\" {% if selectedState == 'Appartement' %} selected {% endif %}>Appartement</option>

                    </select>
                </div>
            </div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group p-4 border-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"#\">Destination</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon\"><span class=\"fa fa-search\"></span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search place\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group p-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"#\">Price Limit</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-field\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"select-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-chevron-down\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"Prix\" id=\"prix\" class=\"form-control\" onchange=\"this.form.submit()\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Tous les prix</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0-100\"  {% if selectedPrice == '0-100' %} selected {% endif %} >Moins de 100 </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"100-200\"  {% if selectedPrice == '100-200' %} selected {% endif %} >100 - 200</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"200-300\"  {% if selectedPrice == '200-300' %} selected {% endif %} >200 - 300</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"300-500\"  {% if selectedPrice == '300-500' %} selected {% endif %} >300 - 500</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t <div class=\"col-md d-flex\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group d-flex w-100 border-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-field w-100 align-items-center d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" value=\"Filter\" class=\"align-self-stretch form-control btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>


     
<section class=\"ftco-section\">
    <div class=\"container\">
        <div class=\"row\">
            {% for logement in logements %}
                <div class=\"col-md-4 ftco-animate fadeInUp ftco-animated\">
                    <div class=\"project-wrap hotel\">
\t\t\t\t\t<a href=\"{{ path('app_logement_show', {'id': logement.id}) }}\" class=\"img\" style=\"background-image: url('{{ asset('uploads/' ~ logement.image) }}');\">
    \t\t\t\t\t<span class=\"price\">{{ logement.Prix }}DT/person</span>
\t\t\t\t\t</a>
                        <div class=\"text p-4\">
\t\t\t\t\t\t {% if logement.NoteMoyenne == 1 %}
\t\t\t\t\t\t<p class=\"star mb-2\">
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t</p> 
\t\t\t\t\t\t\t{% elseif logement.NoteMoyenne == 2 %}  

\t\t\t\t\t\t<p class=\"star mb-2\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t</p> 
\t\t\t\t\t\t\t {% elseif logement.NoteMoyenne == 3 %}  

\t\t\t\t\t\t<p class=\"star mb-2\">

\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t</p> 
\t\t\t\t\t\t\t{% elseif logement.NoteMoyenne == 4 %}  

\t\t\t\t\t\t<p class=\"star mb-2\">

\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t</p> 
\t\t\t\t\t\t\t{% elseif logement.NoteMoyenne == 5 %} 

\t\t\t\t\t\t<p class=\"star mb-2\">

\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>
\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t</p> 
\t\t\t\t\t\t\t {% endif %}
                         

                            <span class=\"days\">un jour</span>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t<a href=\"#\">{{ logement.Typelog }}: {{ logement.nom }}</a>
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
                            <p class=\"location\"><span class=\"fa fa-map-marker\"></span>{{ logement.Localisation }}</p>
\t\t\t\t\t\t\t
                            <ul> 
\t\t\t\t\t\t\t 
                                <li><span class=\"fas fa-phone-alt\"></span> {{logement.num}} </li>
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<a href=\"{{ path('app_logement_map', {'id': logement.id}) }}\" class=\"btn btn-info rounded-pill m-2\" > <i class=\"fas fa-location-arrow\"></i> Show Map</a>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t{# -------------------------- Share ------------------------------------  #}
       \t\t\t\t\t\t  <div class=\"sharethis-inline-share-buttons\"></div>
         {# -------------------------- Share ------------------------------------  #}

                        </div>
                    </div>
                </div>
\t\t\t\t
            {% endfor %}
        </div>
    </div>
\t<div class=\"row\">
    <a href=\"{{ path('app_logement_new') }}\">Create new logement</a>
\t</div>
\t<th>
\t{# <div class=\"row mt-5\">
  <div class=\"col text-center\">
    <div class=\"block-27\">
      <ul>
        <li><a href=\"#\">&lt;</a></li>
        <li class=\"active\"><span></span></li>
        <li><a href=\"#\">2</a> </li>
        <li><a href=\"#\">3</a></li>
        <li><a href=\"#\">4</a></li>
        <li><a href=\"#\">5</a></li>
        <li><a href=\"#\">&gt;</a></li>
      </ul>
    </div>
  </div>
</div> #}
<div class=\"row mt-5\">
  <div class=\"col text-center\">
    <div class=\"block-27\">
      <ul>
        <li>
          <a href=\"#\">&lt;</a>
          {{ knp_pagination_render(logements,'logement/pagination.html.twig')}}

        </li>
      </ul>
    </div>
  </div>
</div>


\t<!-- Pagination -->
    <div class=\"d-flex justify-content-center\">
        {{ knp_pagination_render(logements,'logement/pagination.html.twig')}}
    </div>

</div>



  
{% endblock %}
", "logement/index.html.twig", "C:\\Users\\MSI\\INTEGRATION\\Projet-Pi-tfarhida\\templates\\logement\\index.html.twig");
    }
}
