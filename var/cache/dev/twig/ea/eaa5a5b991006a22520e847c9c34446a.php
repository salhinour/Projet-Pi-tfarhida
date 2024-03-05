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

/* logement_back/index.html.twig */
class __TwigTemplate_da497b396101a0f78fcdaa424a7d9cbe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "logement_back/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "logement_back/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "logement_back/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Logement index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<button type=\"button\" class=\"btn btn-primary btn-icon-split\" data-toggle=\"modal\" data-target=\"#statsModal\">
    Show Stats
</button>

        <div  class=\"d-flex align-items-center justify-content-between mb-4\">
           
                <button id=\"delete-selected-btn\" style=\"display: none;\" data-csrf-token=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete_selected"), "html", null, true);
        echo "\" class=\"btn btn-danger\">Delete Selected</button>

            </div>
        </div>


        <div class=\"d-flex align-items-center justify-content-between mb-4\">

        
        <table class=\"table\" id=\"myTable\">
         <thead class=\"thead-dark\">
            <tr>
            <th class=\"text-center\">
\t\t\t\t<div class=\"custom-checkbox custom-control\">
\t\t\t\t\t<input type=\"checkbox\" data-checkboxes=\"mygroup\"  class=\"custom-control-input\" id=\"checkbox-all\">
\t\t\t\t\t<label for=\"checkbox-all\" class=\"custom-control-label\"></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</th>
                <th>Id</th>
                <th onclick=\"sortTable(1)\">Nom</th>
                <th onclick=\"sortTable(2)\">TypeLog</th>
                <th onclick=\"sortTable(3)\">Eduipement_id</th>
                <th>Localisation</th>
                <th>Prix</th>
                <th>NoteMoyenne</th>
                <th>Etat</th>
                <th>Image</th>
                <th>actions</th>
                 <th>accepter</th>
            </tr>
        </thead>
        <tbody  id=\"myTable\">
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 44, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["logement"]) {
            // line 45
            echo "            <tr>
            <td class=\"text-center\">
\t\t\t\t\t<div class=\"custom-checkbox custom-control\">
\t\t\t\t\t\t<input type=\"checkbox\" data-checkboxes=\"mygroup\" class=\"custom-control-input\" id=\"checkbox-";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "\">
\t\t\t\t\t<label for=\"checkbox-";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo "\" class=\"custom-control-label\"></label>
\t\t\t\t\t</div>
\t\t\t\t\t</td>
            
                <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "id", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "nom", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "TypeLog", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                 <td>
            ";
            // line 57
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["logement"], "equipement", [], "any", false, false, false, 57))) {
                // line 58
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["logement"], "equipement", [], "any", false, false, false, 58), "id", [], "any", false, false, false, 58), "html", null, true);
                echo "
            ";
            } else {
                // line 60
                echo "                N/A
            ";
            }
            // line 62
            echo "        </td>


                <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "Localisation", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "Prix", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "NoteMoyenne", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
                <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "Etat", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                <td>
                   ";
            // line 70
            if (twig_get_attribute($this->env, $this->source, $context["logement"], "image", [], "any", false, false, false, 70)) {
                // line 71
                echo "                       <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["logement"], "image", [], "any", false, false, false, 71))), "html", null, true);
                echo "\" alt=\"Image\" width=\"100\" height=\"100\">
                   ";
            } else {
                // line 73
                echo "                       <span>Aucune image</span>
                   ";
            }
            // line 75
            echo "               </td>
                <td >
                 <div class=\"row\">
                    
                    <a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logement_back_show", ["id" => twig_get_attribute($this->env, $this->source, $context["logement"], "id", [], "any", false, false, false, 79)]), "html", null, true);
            echo "\" >
                    <i class=\"fas fa-eye\" style=\"color: green\"></i>
                    
                    </a>
                        <a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logement_back_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["logement"], "id", [], "any", false, false, false, 83)]), "html", null, true);
            echo "\" >
                        <i class=\"fas fa-pencil-alt\"></i>
                    </a>
                   
                 </div>
              
                </td>
                <td>
                <a href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_modifier_etat_logement", ["id" => twig_get_attribute($this->env, $this->source, $context["logement"], "id", [], "any", false, false, false, 91)]), "html", null, true);
            echo "\">
                    <i class=\"fas fa-check\"></i>
                </a>
            
                
                <a href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_refuser_etat_logement", ["id" => twig_get_attribute($this->env, $this->source, $context["logement"], "id", [], "any", false, false, false, 96)]), "html", null, true);
            echo "\">
                    <i class=\"fas fa-times\" style=\"color: red\"></i>
                </a>
                </td>


            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 104
            echo "            <tr>
                <td colspan=\"9\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['logement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "        </tbody>
    </table>
     </div>
    <div class=\"pagination-container\">
    <ul class=\"pagination\">
        ";
        // line 113
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 113, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 113) > 1)) {
            // line 114
            echo "            <li class=\"page-item\">
                <a class=\"page-link\" href=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logement_back_index", ["page" => (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 115, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 115) - 1)]), "html", null, true);
            echo "\" aria-label=\"Previous\">
                    <span aria-hidden=\"true\">&laquo;</span>
                    <span class=\"sr-only\">Previous</span>
                </a>
            </li>
        ";
        }
        // line 121
        echo "
        ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 122, $this->source); })()), "pageCount", [], "any", false, false, false, 122)));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 123
            echo "            <li class=\"page-item ";
            if (($context["page"] == twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 123, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 123))) {
                echo "active";
            }
            echo "\">
                <a class=\"page-link\" href=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logement_back_index", ["page" => $context["page"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["page"], "html", null, true);
            echo "</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "
        ";
        // line 128
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 128, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 128) < twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 128, $this->source); })()), "pageCount", [], "any", false, false, false, 128))) {
            // line 129
            echo "            <li class=\"page-item\">
                <a class=\"page-link\" href=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logement_back_index", ["page" => (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 130, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 130) + 1)]), "html", null, true);
            echo "\" aria-label=\"Next\">
                    <span aria-hidden=\"true\">&raquo;</span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </li>
        ";
        }
        // line 136
        echo "    </ul>
</div>
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
     <script>

function createPDF() {
    var htmlContent = document.getElementById(\"myTable\").outerHTML;
    var win = window.open('', '', 'height=700,width=700');
    win.document.write(htmlContent);
    win.document.close();
    win.print();
}
</script>
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<div class=\"category-statistics\">
    <canvas id=\"categoryChart\" width=\"300 px\" height=\"100 px\"></canvas>
</div>

<div class=\"modal fade\" id=\"statsModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"statsModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"statsModalLabel\">Type Statistics</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <canvas id=\"modalCategoryChart\" width=\"400\" height=\"200\"></canvas>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener(\"DOMContentLoaded\", function () {
        var modalCtx = document.getElementById('modalCategoryChart').getContext('2d');
        var colors = ['#87CEEB', '#012970', '#E29790'];

        var data = {
            labels: [
                ";
        // line 190
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["typeStatistics"]) || array_key_exists("typeStatistics", $context) ? $context["typeStatistics"] : (function () { throw new RuntimeError('Variable "typeStatistics" does not exist.', 190, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 191
            echo "                    '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stat"], "TypeLog", [], "any", false, false, false, 191), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stat"], "TypeLogCount", [], "any", false, false, false, 191), "html", null, true);
            echo ")',
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "            ],
            datasets: [{
                data: [
                    ";
        // line 196
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["typeStatistics"]) || array_key_exists("typeStatistics", $context) ? $context["typeStatistics"] : (function () { throw new RuntimeError('Variable "typeStatistics" does not exist.', 196, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 197
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stat"], "TypeLogCount", [], "any", false, false, false, 197), "html", null, true);
            echo ",
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "                ],
                backgroundColor: colors
            }]
        };

        var modalCategoryChart = new Chart(modalCtx, {
            type: 'pie',
            data: data,
            options: {
                tooltips: {
                    callbacks: {
                        label: function (tooltipItem, data) {
                            var dataset = data.datasets[tooltipItem.datasetIndex];
                            var total = dataset.data.reduce(function (previousValue, currentValue, currentIndex, array) {
                                return previousValue + currentValue;
                            });
                            var currentValue = dataset.data[tooltipItem.index];
                            var percentage = Math.round((currentValue / total) * 100);
                            return data.labels[tooltipItem.index] + ': ' + currentValue + ' (' + percentage + '%)';
                        }
                    }
                }
            }
        });
    });
</script>

<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "logement_back/index.html.twig";
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
        return array (  417 => 199,  408 => 197,  404 => 196,  399 => 193,  388 => 191,  384 => 190,  328 => 136,  319 => 130,  316 => 129,  314 => 128,  311 => 127,  300 => 124,  293 => 123,  289 => 122,  286 => 121,  277 => 115,  274 => 114,  272 => 113,  265 => 108,  256 => 104,  243 => 96,  235 => 91,  224 => 83,  217 => 79,  211 => 75,  207 => 73,  201 => 71,  199 => 70,  194 => 68,  190 => 67,  186 => 66,  182 => 65,  177 => 62,  173 => 60,  167 => 58,  165 => 57,  160 => 55,  156 => 54,  152 => 53,  145 => 49,  141 => 48,  136 => 45,  131 => 44,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}Logement index{% endblock %}

{% block body %}
<button type=\"button\" class=\"btn btn-primary btn-icon-split\" data-toggle=\"modal\" data-target=\"#statsModal\">
    Show Stats
</button>

        <div  class=\"d-flex align-items-center justify-content-between mb-4\">
           
                <button id=\"delete-selected-btn\" style=\"display: none;\" data-csrf-token=\"{{ csrf_token('delete_selected') }}\" class=\"btn btn-danger\">Delete Selected</button>

            </div>
        </div>


        <div class=\"d-flex align-items-center justify-content-between mb-4\">

        
        <table class=\"table\" id=\"myTable\">
         <thead class=\"thead-dark\">
            <tr>
            <th class=\"text-center\">
\t\t\t\t<div class=\"custom-checkbox custom-control\">
\t\t\t\t\t<input type=\"checkbox\" data-checkboxes=\"mygroup\"  class=\"custom-control-input\" id=\"checkbox-all\">
\t\t\t\t\t<label for=\"checkbox-all\" class=\"custom-control-label\"></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</th>
                <th>Id</th>
                <th onclick=\"sortTable(1)\">Nom</th>
                <th onclick=\"sortTable(2)\">TypeLog</th>
                <th onclick=\"sortTable(3)\">Eduipement_id</th>
                <th>Localisation</th>
                <th>Prix</th>
                <th>NoteMoyenne</th>
                <th>Etat</th>
                <th>Image</th>
                <th>actions</th>
                 <th>accepter</th>
            </tr>
        </thead>
        <tbody  id=\"myTable\">
        {% for logement in pagination %}
            <tr>
            <td class=\"text-center\">
\t\t\t\t\t<div class=\"custom-checkbox custom-control\">
\t\t\t\t\t\t<input type=\"checkbox\" data-checkboxes=\"mygroup\" class=\"custom-control-input\" id=\"checkbox-{{ logement.id }}\">
\t\t\t\t\t<label for=\"checkbox-{{ logement.id }}\" class=\"custom-control-label\"></label>
\t\t\t\t\t</div>
\t\t\t\t\t</td>
            
                <td>{{ logement.id }}</td>
                <td>{{ logement.nom }}</td>
                <td>{{ logement.TypeLog }}</td>
                 <td>
            {% if logement.equipement is not null %}
                {{ logement.equipement.id }}
            {% else %}
                N/A
            {% endif %}
        </td>


                <td>{{ logement.Localisation }}</td>
                <td>{{ logement.Prix }}</td>
                <td>{{ logement.NoteMoyenne }}</td>
                <td>{{ logement.Etat  }}</td>
                <td>
                   {% if logement.image %}
                       <img src=\"{{ asset('uploads/' ~ logement.image) }}\" alt=\"Image\" width=\"100\" height=\"100\">
                   {% else %}
                       <span>Aucune image</span>
                   {% endif %}
               </td>
                <td >
                 <div class=\"row\">
                    
                    <a href=\"{{ path('app_logement_back_show', {'id': logement.id}) }}\" >
                    <i class=\"fas fa-eye\" style=\"color: green\"></i>
                    
                    </a>
                        <a href=\"{{ path('app_logement_back_edit', {'id': logement.id}) }}\" >
                        <i class=\"fas fa-pencil-alt\"></i>
                    </a>
                   
                 </div>
              
                </td>
                <td>
                <a href=\"{{ path('app_modifier_etat_logement', {'id': logement.id}) }}\">
                    <i class=\"fas fa-check\"></i>
                </a>
            
                
                <a href=\"{{ path('app_refuser_etat_logement', {'id': logement.id}) }}\">
                    <i class=\"fas fa-times\" style=\"color: red\"></i>
                </a>
                </td>


            </tr>
        {% else %}
            <tr>
                <td colspan=\"9\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
     </div>
    <div class=\"pagination-container\">
    <ul class=\"pagination\">
        {% if pagination.currentPageNumber > 1 %}
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"{{ path('app_logement_back_index', {'page': pagination.currentPageNumber - 1}) }}\" aria-label=\"Previous\">
                    <span aria-hidden=\"true\">&laquo;</span>
                    <span class=\"sr-only\">Previous</span>
                </a>
            </li>
        {% endif %}

        {% for page in range(1, pagination.pageCount) %}
            <li class=\"page-item {% if page == pagination.currentPageNumber %}active{% endif %}\">
                <a class=\"page-link\" href=\"{{ path('app_logement_back_index', {'page': page}) }}\">{{ page }}</a>
            </li>
        {% endfor %}

        {% if pagination.currentPageNumber < pagination.pageCount %}
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"{{ path('app_logement_back_index', {'page': pagination.currentPageNumber + 1}) }}\" aria-label=\"Next\">
                    <span aria-hidden=\"true\">&raquo;</span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </li>
        {% endif %}
    </ul>
</div>
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
     <script>

function createPDF() {
    var htmlContent = document.getElementById(\"myTable\").outerHTML;
    var win = window.open('', '', 'height=700,width=700');
    win.document.write(htmlContent);
    win.document.close();
    win.print();
}
</script>
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<div class=\"category-statistics\">
    <canvas id=\"categoryChart\" width=\"300 px\" height=\"100 px\"></canvas>
</div>

<div class=\"modal fade\" id=\"statsModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"statsModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"statsModalLabel\">Type Statistics</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <canvas id=\"modalCategoryChart\" width=\"400\" height=\"200\"></canvas>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener(\"DOMContentLoaded\", function () {
        var modalCtx = document.getElementById('modalCategoryChart').getContext('2d');
        var colors = ['#87CEEB', '#012970', '#E29790'];

        var data = {
            labels: [
                {% for stat in typeStatistics %}
                    '{{ stat.TypeLog }} ({{ stat.TypeLogCount }})',
                {% endfor %}
            ],
            datasets: [{
                data: [
                    {% for stat in typeStatistics %}
                        {{ stat.TypeLogCount }},
                    {% endfor %}
                ],
                backgroundColor: colors
            }]
        };

        var modalCategoryChart = new Chart(modalCtx, {
            type: 'pie',
            data: data,
            options: {
                tooltips: {
                    callbacks: {
                        label: function (tooltipItem, data) {
                            var dataset = data.datasets[tooltipItem.datasetIndex];
                            var total = dataset.data.reduce(function (previousValue, currentValue, currentIndex, array) {
                                return previousValue + currentValue;
                            });
                            var currentValue = dataset.data[tooltipItem.index];
                            var percentage = Math.round((currentValue / total) * 100);
                            return data.labels[tooltipItem.index] + ': ' + currentValue + ' (' + percentage + '%)';
                        }
                    }
                }
            }
        });
    });
</script>

<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>


{% endblock %}



", "logement_back/index.html.twig", "C:\\Users\\ASUS\\Desktop\\PiDev\\Projet-Pi-tfarhida\\templates\\logement_back\\index.html.twig");
    }
}
