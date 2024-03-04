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

/* reclamation_back/index.html.twig */
class __TwigTemplate_94f6d3825a7e19adfa424cbf84325307 extends Template
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
        return "baseback.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation_back/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation_back/index.html.twig"));

        $this->parent = $this->loadTemplate("baseback.html.twig", "reclamation_back/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <button type=\"button\" class=\"btn btn-primary btn-icon-split\" data-toggle=\"modal\" data-target=\"#statsModal\">
        Afficher les statistiques 
    </button>

    <div class=\"d-flex align-items-center justify-content-between mb-4\">
        <div class=\"d-flex\">
            <button id=\"btPrint\" onclick=\"createPDF()\" class=\"export-pdf-btn\">
                <i class=\"fas fa-file-pdf\"></i> Export PDF
            </button>         
            <select class=\"form-control\" id=\"selectType\">
                                                            <option value=\"\">Tous</option>
                                                            <option value=\"Activité\">Activité</option>
                                                            <option value=\"Logement\">Logement</option>
                                                            <option value=\"Restaurant\">Restaurant</option>
                                                            <option value=\"Transport\">Transport</option>
                                                        </select>
            <input type=\"text\" id=\"myInput\" onkeyup=\"myFunction()\" placeholder=\"Search ...\" class=\"form-control\" id=\"search-input\">
            
        </div>
    </div>

    <h1>Liste des réclamations</h1>

    <table class=\"table\" id=\"myTable\">
        <thead> 
            <tr>
                <th>Id</th>
                <th style=\"width: 15%\" onclick=\"sortTable(1)\">Titre</th>
                <th style=\"width: 15%\" onclick=\"sortTable(2)\">Type de Réclamation</th>
                <th onclick=\"sortTable(3)\">Description</th>
                <th onclick=\"sortTable(4)\">Date</th>
                <th>Image</th>
                <th>État</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
      <tr id=\"noRecordsMessage\" style=\"display: none;\">
        <td colspan=\"7\">Aucune réclamation trouvée.</td>
    </tr>
    ";
        // line 44
        if ((twig_length_filter($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 44, $this->source); })())) > 0)) {
            // line 45
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 45, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
                // line 46
                echo "            <tr>
                <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 47), "html", null, true);
                echo "</td>
                <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "titre", [], "any", false, false, false, 48), "html", null, true);
                echo "</td>
                <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "type", [], "any", false, false, false, 49), "html", null, true);
                echo "</td>
                <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "descriptionReclamation", [], "any", false, false, false, 50), "html", null, true);
                echo "</td>
                <td>";
                // line 51
                ((twig_get_attribute($this->env, $this->source, $context["reclamation"], "date", [], "any", false, false, false, 51)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "date", [], "any", false, false, false, 51), "d-m-Y"), "html", null, true))) : (print ("")));
                echo "</td>
                <td>
                    ";
                // line 53
                if (twig_get_attribute($this->env, $this->source, $context["reclamation"], "image", [], "any", false, false, false, 53)) {
                    // line 54
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["reclamation"], "image", [], "any", false, false, false, 54))), "html", null, true);
                    echo "\" alt=\"Image\" width=\"100\" height=\"100\">
                    ";
                } else {
                    // line 56
                    echo "                        <span>Aucune image</span>
                    ";
                }
                // line 58
                echo "                </td>
                <td>
                    ";
                // line 60
                if ( !twig_get_attribute($this->env, $this->source, $context["reclamation"], "etat", [], "any", false, false, false, 60)) {
                    // line 61
                    echo "                        <span style=\"color: red;\">Non traitée</span>
                    ";
                } else {
                    // line 63
                    echo "                        <span style=\"color: green;\">Traitée</span>
                    ";
                }
                // line 65
                echo "                </td>
                <td>
                    ";
                // line 67
                if (( !twig_get_attribute($this->env, $this->source, $context["reclamation"], "etat", [], "any", false, false, false, 67) &&  !twig_get_attribute($this->env, $this->source, $context["reclamation"], "reponse", [], "any", false, false, false, 67))) {
                    // line 68
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_back_repondre", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 68)]), "html", null, true);
                    echo "\" class=\"btn btn-success\">Répondre</a>
                    ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 69
$context["reclamation"], "reponse", [], "any", false, false, false, 69)) {
                    echo " 
                        <a href=\"";
                    // line 70
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_back_show_response", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 70)]), "html", null, true);
                    echo "\" class=\"btn btn-primary btn-view-response\">
                            Voir la réponse
                        </a>
                    ";
                }
                // line 74
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_back_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 74)]), "html", null, true);
                echo "\" class=\"btn btn-primary btn-view-reclamation mr-2\">
                        <i class=\"fas fa-eye\"></i> 
                    </a>
                </td>
            </tr>
        
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "    ";
        }
        // line 82
        echo "     </tbody>
</table>
<div class=\"pagination-container\">
            <ul class=\"pagination\">
                ";
        // line 86
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 86, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 86) > 1)) {
            // line 87
            echo "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_back_index", ["page" => (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 88, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 88) - 1)]), "html", null, true);
            echo "\" aria-label=\"Previous\">
                            <span aria-hidden=\"true\">&laquo;</span>
                            <span class=\"sr-only\">Previous</span>
                        </a>
                    </li>
                ";
        }
        // line 94
        echo "
                ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 95, $this->source); })()), "pageCount", [], "any", false, false, false, 95)));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 96
            echo "                    <li class=\"page-item ";
            if (($context["page"] == twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 96, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 96))) {
                echo "active";
            }
            echo "\">
                        <a class=\"page-link\" href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_back_index", ["page" => $context["page"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["page"], "html", null, true);
            echo "</a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "
                ";
        // line 101
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 101, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 101) < twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 101, $this->source); })()), "pageCount", [], "any", false, false, false, 101))) {
            // line 102
            echo "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_back_index", ["page" => (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 103, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 103) + 1)]), "html", null, true);
            echo "\" aria-label=\"Next\">
                            <span aria-hidden=\"true\">&raquo;</span>
                            <span class=\"sr-only\">Next</span>
                        </a>
                    </li>
                ";
        }
        // line 109
        echo "            </ul>
        </div>
    <div class=\"modal fade\" id=\"responseModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"responseModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <!-- Response content will be loaded here -->
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"showReclamationModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"showReclamationModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"showReclamationModalLabel\">Détails de la réclamation</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\" id=\"reclamationDetailContent\">
                    <!-- Contenu de la réclamation sera chargé ici -->
                </div>
            </div>
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
        \$(document).ready(function () {
            \$(\"#myInput\").on(\"keyup\", function () {
                var value = \$(this).val().toLowerCase();
                \$(\"#myTable tr\").filter(function () {
                    \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js\"></script>
    <script>
        function createPDF() {
            var htmlContent = document.getElementById(\"myTable\").outerHTML;
            var win = window.open('', '', 'height=700,width=700');
            win.document.write(htmlContent);
            win.document.close();
            win.print();
        }
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
    <script>
        \$(document).ready(function () {
            \$('.btn-view-response').click(function (e) {
                e.preventDefault();
                var url = \$(this).attr('href');
                
                \$.ajax({
                    url: url,
                    method: 'GET',
                    success: function (response) {
                        \$('#responseModal .modal-body').html(response);
                        \$('#responseModal').modal('show');
                    },
                    error: function (xhr, status, error) {
                        console.error(error);
                    }
                });
            });
        });
    </script>
    <script>
        \$(document).ready(function () {
            \$('.btn-view-reclamation').click(function (e) {
                e.preventDefault();
                var url = \$(this).attr('href');
                
                \$.ajax({
                    url: url,
                    method: 'GET',
                    success: function (response) {
                        \$('#reclamationDetailContent').html(response);
                        \$('#showReclamationModal').modal('show');
                    },
                    error: function (xhr, status, error) {
                        console.error(error);
                    }
                });
            });
        });
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
                    <script>
                        document.addEventListener(\"DOMContentLoaded\", function () {
                            var modalCtx = document.getElementById('modalCategoryChart').getContext('2d');
                            var colors = ['#87CEEB', '#012970','#E29790'];

                            var data = {
                                labels: [
                                    ";
        // line 274
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["typeStatistics"]) || array_key_exists("typeStatistics", $context) ? $context["typeStatistics"] : (function () { throw new RuntimeError('Variable "typeStatistics" does not exist.', 274, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 275
            echo "                                        '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stat"], "type", [], "any", false, false, false, 275), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stat"], "typeCount", [], "any", false, false, false, 275), "html", null, true);
            echo ")',
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 277
        echo "                                    
                                ],
                                datasets: [{
                                    data: [
                                        ";
        // line 281
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["typeStatistics"]) || array_key_exists("typeStatistics", $context) ? $context["typeStatistics"] : (function () { throw new RuntimeError('Variable "typeStatistics" does not exist.', 281, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 282
            echo "                                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stat"], "typeCount", [], "any", false, false, false, 282), "html", null, true);
            echo ",
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 284
        echo "                                    ],
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
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                </div>
            </div>
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
        return "reclamation_back/index.html.twig";
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
        return array (  469 => 284,  460 => 282,  456 => 281,  450 => 277,  439 => 275,  435 => 274,  268 => 109,  259 => 103,  256 => 102,  254 => 101,  251 => 100,  240 => 97,  233 => 96,  229 => 95,  226 => 94,  217 => 88,  214 => 87,  212 => 86,  206 => 82,  203 => 81,  189 => 74,  182 => 70,  178 => 69,  173 => 68,  171 => 67,  167 => 65,  163 => 63,  159 => 61,  157 => 60,  153 => 58,  149 => 56,  143 => 54,  141 => 53,  136 => 51,  132 => 50,  128 => 49,  124 => 48,  120 => 47,  117 => 46,  112 => 45,  110 => 44,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseback.html.twig' %}

{% block body %}
    <button type=\"button\" class=\"btn btn-primary btn-icon-split\" data-toggle=\"modal\" data-target=\"#statsModal\">
        Afficher les statistiques 
    </button>

    <div class=\"d-flex align-items-center justify-content-between mb-4\">
        <div class=\"d-flex\">
            <button id=\"btPrint\" onclick=\"createPDF()\" class=\"export-pdf-btn\">
                <i class=\"fas fa-file-pdf\"></i> Export PDF
            </button>         
            <select class=\"form-control\" id=\"selectType\">
                                                            <option value=\"\">Tous</option>
                                                            <option value=\"Activité\">Activité</option>
                                                            <option value=\"Logement\">Logement</option>
                                                            <option value=\"Restaurant\">Restaurant</option>
                                                            <option value=\"Transport\">Transport</option>
                                                        </select>
            <input type=\"text\" id=\"myInput\" onkeyup=\"myFunction()\" placeholder=\"Search ...\" class=\"form-control\" id=\"search-input\">
            
        </div>
    </div>

    <h1>Liste des réclamations</h1>

    <table class=\"table\" id=\"myTable\">
        <thead> 
            <tr>
                <th>Id</th>
                <th style=\"width: 15%\" onclick=\"sortTable(1)\">Titre</th>
                <th style=\"width: 15%\" onclick=\"sortTable(2)\">Type de Réclamation</th>
                <th onclick=\"sortTable(3)\">Description</th>
                <th onclick=\"sortTable(4)\">Date</th>
                <th>Image</th>
                <th>État</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
      <tr id=\"noRecordsMessage\" style=\"display: none;\">
        <td colspan=\"7\">Aucune réclamation trouvée.</td>
    </tr>
    {% if pagination|length > 0 %}
        {% for reclamation in pagination %}
            <tr>
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
                    {% if not reclamation.etat %}
                        <span style=\"color: red;\">Non traitée</span>
                    {% else %}
                        <span style=\"color: green;\">Traitée</span>
                    {% endif %}
                </td>
                <td>
                    {% if not reclamation.etat and not reclamation.reponse %}
                        <a href=\"{{ path('app_reclamation_back_repondre', {'id': reclamation.id}) }}\" class=\"btn btn-success\">Répondre</a>
                    {% elseif reclamation.reponse %} 
                        <a href=\"{{ path('app_reclamation_back_show_response', {'id': reclamation.id}) }}\" class=\"btn btn-primary btn-view-response\">
                            Voir la réponse
                        </a>
                    {% endif %}
                    <a href=\"{{ path('app_reclamation_back_show', {'id': reclamation.id}) }}\" class=\"btn btn-primary btn-view-reclamation mr-2\">
                        <i class=\"fas fa-eye\"></i> 
                    </a>
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
                        <a class=\"page-link\" href=\"{{ path('app_reclamation_back_index', {'page': pagination.currentPageNumber - 1}) }}\" aria-label=\"Previous\">
                            <span aria-hidden=\"true\">&laquo;</span>
                            <span class=\"sr-only\">Previous</span>
                        </a>
                    </li>
                {% endif %}

                {% for page in range(1, pagination.pageCount) %}
                    <li class=\"page-item {% if page == pagination.currentPageNumber %}active{% endif %}\">
                        <a class=\"page-link\" href=\"{{ path('app_reclamation_back_index', {'page': page}) }}\">{{ page }}</a>
                    </li>
                {% endfor %}

                {% if pagination.currentPageNumber < pagination.pageCount %}
                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"{{ path('app_reclamation_back_index', {'page': pagination.currentPageNumber + 1}) }}\" aria-label=\"Next\">
                            <span aria-hidden=\"true\">&raquo;</span>
                            <span class=\"sr-only\">Next</span>
                        </a>
                    </li>
                {% endif %}
            </ul>
        </div>
    <div class=\"modal fade\" id=\"responseModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"responseModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <!-- Response content will be loaded here -->
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"showReclamationModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"showReclamationModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"showReclamationModalLabel\">Détails de la réclamation</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\" id=\"reclamationDetailContent\">
                    <!-- Contenu de la réclamation sera chargé ici -->
                </div>
            </div>
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
        \$(document).ready(function () {
            \$(\"#myInput\").on(\"keyup\", function () {
                var value = \$(this).val().toLowerCase();
                \$(\"#myTable tr\").filter(function () {
                    \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js\"></script>
    <script>
        function createPDF() {
            var htmlContent = document.getElementById(\"myTable\").outerHTML;
            var win = window.open('', '', 'height=700,width=700');
            win.document.write(htmlContent);
            win.document.close();
            win.print();
        }
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
    <script>
        \$(document).ready(function () {
            \$('.btn-view-response').click(function (e) {
                e.preventDefault();
                var url = \$(this).attr('href');
                
                \$.ajax({
                    url: url,
                    method: 'GET',
                    success: function (response) {
                        \$('#responseModal .modal-body').html(response);
                        \$('#responseModal').modal('show');
                    },
                    error: function (xhr, status, error) {
                        console.error(error);
                    }
                });
            });
        });
    </script>
    <script>
        \$(document).ready(function () {
            \$('.btn-view-reclamation').click(function (e) {
                e.preventDefault();
                var url = \$(this).attr('href');
                
                \$.ajax({
                    url: url,
                    method: 'GET',
                    success: function (response) {
                        \$('#reclamationDetailContent').html(response);
                        \$('#showReclamationModal').modal('show');
                    },
                    error: function (xhr, status, error) {
                        console.error(error);
                    }
                });
            });
        });
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
                    <script>
                        document.addEventListener(\"DOMContentLoaded\", function () {
                            var modalCtx = document.getElementById('modalCategoryChart').getContext('2d');
                            var colors = ['#87CEEB', '#012970','#E29790'];

                            var data = {
                                labels: [
                                    {% for stat in typeStatistics %}
                                        '{{ stat.type }} ({{ stat.typeCount }})',
                                    {% endfor %}
                                    
                                ],
                                datasets: [{
                                    data: [
                                        {% for stat in typeStatistics %}
                                            {{ stat.typeCount }},
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
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "reclamation_back/index.html.twig", "C:\\Users\\MSI\\INTEGRATION\\Projet-Pi-tfarhida\\templates\\reclamation_back\\index.html.twig");
    }
}
