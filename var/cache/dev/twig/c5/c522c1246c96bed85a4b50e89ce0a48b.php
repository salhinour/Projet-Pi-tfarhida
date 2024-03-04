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

/* reclamation/index.html.twig */
class __TwigTemplate_9d201060aba62cb44ad49c66cbc0e70b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "home/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $this->parent = $this->loadTemplate("home/base.html.twig", "reclamation/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<section class=\"ftco-section ftco-no-pb ftco-no-pt\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"ftco-search d-flex justify-content-center\">
                    <div class=\"row\">
                        <div class=\"col-md-12 nav-link-wrap\">
                            <div class=\"nav nav-pills text-center\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
                                <a class=\"nav-link active mr-md-1\" id=\"v-pills-1-tab\" data-toggle=\"pill\" href=\"#v-pills-1\" role=\"tab\" aria-controls=\"v-pills-1\" aria-selected=\"true\">  <label for=\"#\">Réclamation</label></a>
                            </div>
                        </div>
                        <div class=\"col-md-12 tab-wrap\">
                            <div class=\"tab-content\" id=\"v-pills-tabContent\">
                                <div class=\"tab-pane fade show active\" id=\"v-pills-1\" role=\"tabpanel\" aria-labelledby=\"v-pills-nextgen-tab\">
                                    <form action=\"#\" class=\"search-property-1\">
                                        <div class=\"row no-gutters\">
                                            <div class=\"col-md d-flex\">
                                                <div class=\"form-group p-4 border-0\">
                                                    <div class=\"form-field\">
                                                        <div class=\"icon\"><span class=\"fa fa-search\"></span></div>
                                                        <select class=\"form-control\" id=\"selectType\">
                                                            <option value=\"\">Tous</option>
                                                            <option value=\"Activité\">Activité</option>
                                                            <option value=\"Logement\">Logement</option>
                                                            <option value=\"Restaurant\">Restaurant</option>
                                                            <option value=\"Transport\">Transport</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"form-group p-4 border-0\">
                                                    <div class=\"form-field\">
                                                        <div class=\"icon\"><span class=\"fa fa-search\"></span></div>
                                                        <input type=\"text\" class=\"form-control\" id=\"myInput\" placeholder=\"Chercher réclamation\">
                                                    </div>
                                                </div>
                                                <div class=\"form-group p-4 border-0\">
                                                    <div class=\"form-field\">
                                                        <div class=\"icon\"><span class=\"fa fa-calendar\"></span></div>
                                                        <input type=\"text\" class=\"form-control\" id=\"datepicker\" placeholder=\"Sélectionner une date\">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class=\"container\">
    <h1>Réclamations</h1>

            <div class=\"table-responsive\">
                <table class=\"table\" id=\"myTable\">
                    <thead>
                        <tr>
                        <th style=\"width: 10%\" >Id</th>
                        <th style=\"width: 15%\" onclick=\"sortTable(1)\">Titre</th>
                        <th style=\"width: 15%\" onclick=\"sortTable(2)\">Type de Réclamation</th>
                        <th style=\"width: 30%\" onclick=\"sortTable(3)\">Description de la Réclamation</th>
                        <th style=\"width: 15%; padding-top: 20px;\" onclick=\"sortTable(4)\">Date</th> 
                        <th style=\"width: 15%\" >Image</th>
                        <th style=\"width: 15%\">Actions</th>
                        </tr>
                    </thead>
                   <tbody>
    <tr id=\"noRecordsMessage\" style=\"display: none;\">
        <td colspan=\"7\">Aucune réclamation trouvée.</td>
    </tr>
    ";
        // line 77
        if ((twig_length_filter($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 77, $this->source); })())) > 0)) {
            // line 78
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 78, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
                // line 79
                echo "            <tr class=\"reclamation-row\" data-type=\"";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "type", [], "any", false, false, false, 79)), "html", null, true);
                echo "\">
                <td>";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 80), "html", null, true);
                echo "</td>
                <td>";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "titre", [], "any", false, false, false, 81), "html", null, true);
                echo "</td>
                <td>";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "type", [], "any", false, false, false, 82), "html", null, true);
                echo "</td>
                <td>";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "descriptionReclamation", [], "any", false, false, false, 83), "html", null, true);
                echo "</td>
                <td>";
                // line 84
                ((twig_get_attribute($this->env, $this->source, $context["reclamation"], "date", [], "any", false, false, false, 84)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "date", [], "any", false, false, false, 84), "d-m-Y"), "html", null, true))) : (print ("")));
                echo "</td>
                <td>
                    ";
                // line 86
                if (twig_get_attribute($this->env, $this->source, $context["reclamation"], "image", [], "any", false, false, false, 86)) {
                    // line 87
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["reclamation"], "image", [], "any", false, false, false, 87))), "html", null, true);
                    echo "\" alt=\"Image\" width=\"100\" height=\"100\">
                    ";
                } else {
                    // line 89
                    echo "                        <span>Aucune image</span>
                    ";
                }
                // line 91
                echo "                </td>
                <td>
                    <a href=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 93)]), "html", null, true);
                echo "\"><i class=\"fas fa-eye\"></i></a>
                    ";
                // line 94
                if ((null === twig_get_attribute($this->env, $this->source, $context["reclamation"], "Reponse", [], "any", false, false, false, 94))) {
                    // line 95
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 95)]), "html", null, true);
                    echo "\"><i class=\"fas fa-edit\"></i></a>
                        <form action=\"";
                    // line 96
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 96)]), "html", null, true);
                    echo "\" method=\"post\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cette réclamation?')\">
                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 98
                    echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 98))), "html", null, true);
                    echo "\">
                            <button type=\"submit\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réclamation?')\"><i class=\"fas fa-trash-alt\"></i></button>
                        </form>
                    ";
                }
                // line 102
                echo "                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "    ";
        }
        // line 106
        echo "</tbody>

        </table>

        <div class=\"pagination-container\">
            <ul class=\"pagination\">
                ";
        // line 112
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 112, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 112) > 1)) {
            // line 113
            echo "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index", ["page" => (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 114, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 114) - 1)]), "html", null, true);
            echo "\" aria-label=\"Previous\">
                            <span aria-hidden=\"true\">&laquo;</span>
                            <span class=\"sr-only\">Previous</span>
                        </a>
                    </li>
                ";
        }
        // line 120
        echo "
                ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 121, $this->source); })()), "pageCount", [], "any", false, false, false, 121)));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 122
            echo "                    <li class=\"page-item ";
            if (($context["page"] == twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 122, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 122))) {
                echo "active";
            }
            echo "\">
                        <a class=\"page-link\" href=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index", ["page" => $context["page"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["page"], "html", null, true);
            echo "</a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "
                ";
        // line 127
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 127, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 127) < twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 127, $this->source); })()), "pageCount", [], "any", false, false, false, 127))) {
            // line 128
            echo "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index", ["page" => (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 129, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 129) + 1)]), "html", null, true);
            echo "\" aria-label=\"Next\">
                            <span aria-hidden=\"true\">&raquo;</span>
                            <span class=\"sr-only\">Next</span>
                        </a>
                    </li>
                ";
        }
        // line 135
        echo "            </ul>
        </div>
        <a href=\"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
        echo "\" class=\"btn btn-success\">Créer une nouvelle réclamation</a>
    </div>
</div>

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js\"></script>

<script>
    \$(document).ready(function () {
        \$(\"#myInput, #selectType\").on(\"change keyup\", function () {
            var searchTerm = \$(\"#myInput\").val().toLowerCase();
            var selectedType = \$(\"#selectType\").val().toLowerCase();
            var rowCount = 0;
            \$(\"#myTable tbody tr\").each(function () {
                var type = \$(this).find(\"td:nth-child(3)\").text().toLowerCase(); // Assuming type is in the third column
                var text = \$(this).text().toLowerCase();
                if ((selectedType === \"\" || type === selectedType) && (text.includes(searchTerm))) {
                    \$(this).show();
                    rowCount++;
                } else {
                    \$(this).hide();
                }
            });
            if (rowCount === 0) {
                \$(\"#noRecordsMessage\").show();
            } else {
                \$(\"#noRecordsMessage\").hide();
            }
        });
    });
</script>
<script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById(\"myInput\");
            filter = input.value.toUpperCase();
            table = document.getElementById(\"myTable\");
            tr = table.getElementsByTagName(\"tr\");
            
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName(\"td\")[1]; 
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = \"\";
                    } else {
                        tr[i].style.display = \"none\";
                    }
                }
            }
        }
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reclamation/index.html.twig";
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
        return array (  295 => 137,  291 => 135,  282 => 129,  279 => 128,  277 => 127,  274 => 126,  263 => 123,  256 => 122,  252 => 121,  249 => 120,  240 => 114,  237 => 113,  235 => 112,  227 => 106,  224 => 105,  216 => 102,  209 => 98,  204 => 96,  199 => 95,  197 => 94,  193 => 93,  189 => 91,  185 => 89,  179 => 87,  177 => 86,  172 => 84,  168 => 83,  164 => 82,  160 => 81,  156 => 80,  151 => 79,  146 => 78,  144 => 77,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'home/base.html.twig' %}
{% block body %}
<section class=\"ftco-section ftco-no-pb ftco-no-pt\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"ftco-search d-flex justify-content-center\">
                    <div class=\"row\">
                        <div class=\"col-md-12 nav-link-wrap\">
                            <div class=\"nav nav-pills text-center\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">
                                <a class=\"nav-link active mr-md-1\" id=\"v-pills-1-tab\" data-toggle=\"pill\" href=\"#v-pills-1\" role=\"tab\" aria-controls=\"v-pills-1\" aria-selected=\"true\">  <label for=\"#\">Réclamation</label></a>
                            </div>
                        </div>
                        <div class=\"col-md-12 tab-wrap\">
                            <div class=\"tab-content\" id=\"v-pills-tabContent\">
                                <div class=\"tab-pane fade show active\" id=\"v-pills-1\" role=\"tabpanel\" aria-labelledby=\"v-pills-nextgen-tab\">
                                    <form action=\"#\" class=\"search-property-1\">
                                        <div class=\"row no-gutters\">
                                            <div class=\"col-md d-flex\">
                                                <div class=\"form-group p-4 border-0\">
                                                    <div class=\"form-field\">
                                                        <div class=\"icon\"><span class=\"fa fa-search\"></span></div>
                                                        <select class=\"form-control\" id=\"selectType\">
                                                            <option value=\"\">Tous</option>
                                                            <option value=\"Activité\">Activité</option>
                                                            <option value=\"Logement\">Logement</option>
                                                            <option value=\"Restaurant\">Restaurant</option>
                                                            <option value=\"Transport\">Transport</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"form-group p-4 border-0\">
                                                    <div class=\"form-field\">
                                                        <div class=\"icon\"><span class=\"fa fa-search\"></span></div>
                                                        <input type=\"text\" class=\"form-control\" id=\"myInput\" placeholder=\"Chercher réclamation\">
                                                    </div>
                                                </div>
                                                <div class=\"form-group p-4 border-0\">
                                                    <div class=\"form-field\">
                                                        <div class=\"icon\"><span class=\"fa fa-calendar\"></span></div>
                                                        <input type=\"text\" class=\"form-control\" id=\"datepicker\" placeholder=\"Sélectionner une date\">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class=\"container\">
    <h1>Réclamations</h1>

            <div class=\"table-responsive\">
                <table class=\"table\" id=\"myTable\">
                    <thead>
                        <tr>
                        <th style=\"width: 10%\" >Id</th>
                        <th style=\"width: 15%\" onclick=\"sortTable(1)\">Titre</th>
                        <th style=\"width: 15%\" onclick=\"sortTable(2)\">Type de Réclamation</th>
                        <th style=\"width: 30%\" onclick=\"sortTable(3)\">Description de la Réclamation</th>
                        <th style=\"width: 15%; padding-top: 20px;\" onclick=\"sortTable(4)\">Date</th> 
                        <th style=\"width: 15%\" >Image</th>
                        <th style=\"width: 15%\">Actions</th>
                        </tr>
                    </thead>
                   <tbody>
    <tr id=\"noRecordsMessage\" style=\"display: none;\">
        <td colspan=\"7\">Aucune réclamation trouvée.</td>
    </tr>
    {% if pagination|length > 0 %}
        {% for reclamation in pagination %}
            <tr class=\"reclamation-row\" data-type=\"{{ reclamation.type|lower }}\">
                <td>{{ reclamation.id }}</td>
                <td>{{ reclamation.titre }}</td>
                <td>{{ reclamation.type }}</td>
                <td>{{ reclamation.descriptionReclamation }}</td>
                <td>{{ reclamation.date ? reclamation.date|date('d-m-Y') : '' }}</td>
                <td>
                    {% if reclamation.image %}
                        <img src=\"{{ asset('uploads/' ~ reclamation.image) }}\" alt=\"Image\" width=\"100\" height=\"100\">
                    {% else %}
                        <span>Aucune image</span>
                    {% endif %}
                </td>
                <td>
                    <a href=\"{{ path('app_reclamation_show', {'id': reclamation.id}) }}\"><i class=\"fas fa-eye\"></i></a>
                    {% if reclamation.Reponse is null %}
                        <a href=\"{{ path('app_reclamation_edit', {'id': reclamation.id}) }}\"><i class=\"fas fa-edit\"></i></a>
                        <form action=\"{{ path('app_reclamation_delete', {'id': reclamation.id}) }}\" method=\"post\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cette réclamation?')\">
                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reclamation.id) }}\">
                            <button type=\"submit\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réclamation?')\"><i class=\"fas fa-trash-alt\"></i></button>
                        </form>
                    {% endif %}
                </td>
            </tr>
        {% endfor %}
    {% endif %}
</tbody>

        </table>

        <div class=\"pagination-container\">
            <ul class=\"pagination\">
                {% if pagination.currentPageNumber > 1 %}
                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"{{ path('app_reclamation_index', {'page': pagination.currentPageNumber - 1}) }}\" aria-label=\"Previous\">
                            <span aria-hidden=\"true\">&laquo;</span>
                            <span class=\"sr-only\">Previous</span>
                        </a>
                    </li>
                {% endif %}

                {% for page in range(1, pagination.pageCount) %}
                    <li class=\"page-item {% if page == pagination.currentPageNumber %}active{% endif %}\">
                        <a class=\"page-link\" href=\"{{ path('app_reclamation_index', {'page': page}) }}\">{{ page }}</a>
                    </li>
                {% endfor %}

                {% if pagination.currentPageNumber < pagination.pageCount %}
                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"{{ path('app_reclamation_index', {'page': pagination.currentPageNumber + 1}) }}\" aria-label=\"Next\">
                            <span aria-hidden=\"true\">&raquo;</span>
                            <span class=\"sr-only\">Next</span>
                        </a>
                    </li>
                {% endif %}
            </ul>
        </div>
        <a href=\"{{ path('app_reclamation_new') }}\" class=\"btn btn-success\">Créer une nouvelle réclamation</a>
    </div>
</div>

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js\"></script>

<script>
    \$(document).ready(function () {
        \$(\"#myInput, #selectType\").on(\"change keyup\", function () {
            var searchTerm = \$(\"#myInput\").val().toLowerCase();
            var selectedType = \$(\"#selectType\").val().toLowerCase();
            var rowCount = 0;
            \$(\"#myTable tbody tr\").each(function () {
                var type = \$(this).find(\"td:nth-child(3)\").text().toLowerCase(); // Assuming type is in the third column
                var text = \$(this).text().toLowerCase();
                if ((selectedType === \"\" || type === selectedType) && (text.includes(searchTerm))) {
                    \$(this).show();
                    rowCount++;
                } else {
                    \$(this).hide();
                }
            });
            if (rowCount === 0) {
                \$(\"#noRecordsMessage\").show();
            } else {
                \$(\"#noRecordsMessage\").hide();
            }
        });
    });
</script>
<script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById(\"myInput\");
            filter = input.value.toUpperCase();
            table = document.getElementById(\"myTable\");
            tr = table.getElementsByTagName(\"tr\");
            
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName(\"td\")[1]; 
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = \"\";
                    } else {
                        tr[i].style.display = \"none\";
                    }
                }
            }
        }
    </script>
{% endblock %}
", "reclamation/index.html.twig", "C:\\Users\\MSI\\INTEGRATION\\Projet-Pi-tfarhida\\templates\\reclamation\\index.html.twig");
    }
}
