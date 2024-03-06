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
class __TwigTemplate_1301cfadb0d60b3f6caee94e59d5dd68 extends Template
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
        // line 2
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation_back/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation_back/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "reclamation_back/index.html.twig", 2);
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
        echo "  <li class=\"dropdown dropdown-list-toggle\">
\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"dropdown\" class=\"nav-link notification-toggle nav-link-lg beep\">
\t\t\t\t\t\t\t\t<i class=\"ion ion-ios-bell-outline\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t <div class=\"dropdown notification-dropdown\">
    <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"notificationDropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        <i class=\"fas fa-bell\"></i> <!-- Icône de cloche -->
        <span class=\"badge badge-pill badge-danger\">3</span> <!-- Afficher le nombre de notifications non lues -->
    </a>
    <div class=\"dropdown-menu\" aria-labelledby=\"notificationDropdown\">
\t\t\t\t\t\t\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 14, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 15
            echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notification"], "link", [], "any", false, false, false, 15), "html", null, true);
            echo "\" class=\"dropdown-item dropdown-item-unread\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-item-icon bg-primary text-white\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-item-desc\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notification"], "message", [], "any", false, false, false, 19), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time text-primary\">";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notification"], "createdAt", [], "any", false, false, false, 20), "Y-m-d H:i"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 24
            echo "\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-item-desc\">
\t\t\t\t\t\t\t\t\t\t\t\tNo notifications
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t\t\t\t\t\t\t\t</div>
    
</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

        </li>


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
    ";
        // line 80
        if ((twig_length_filter($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 80, $this->source); })())) > 0)) {
            // line 81
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 81, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
                // line 82
                echo "            <tr>
                <td>";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 83), "html", null, true);
                echo "</td>
                <td>";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "titre", [], "any", false, false, false, 84), "html", null, true);
                echo "</td>
                <td>";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "type", [], "any", false, false, false, 85), "html", null, true);
                echo "</td>
                <td>";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "descriptionReclamation", [], "any", false, false, false, 86), "html", null, true);
                echo "</td>
                <td>";
                // line 87
                ((twig_get_attribute($this->env, $this->source, $context["reclamation"], "date", [], "any", false, false, false, 87)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "date", [], "any", false, false, false, 87), "d-m-Y"), "html", null, true))) : (print ("")));
                echo "</td>
                <td>
                    ";
                // line 89
                if (twig_get_attribute($this->env, $this->source, $context["reclamation"], "image", [], "any", false, false, false, 89)) {
                    // line 90
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["reclamation"], "image", [], "any", false, false, false, 90))), "html", null, true);
                    echo "\" alt=\"Image\" width=\"100\" height=\"100\">
                    ";
                } else {
                    // line 92
                    echo "                        <span>Aucune image</span>
                    ";
                }
                // line 94
                echo "                </td>
                <td>
                    ";
                // line 96
                if ( !twig_get_attribute($this->env, $this->source, $context["reclamation"], "etat", [], "any", false, false, false, 96)) {
                    // line 97
                    echo "                        <span style=\"color: red;\">Non traitée</span>
                    ";
                } else {
                    // line 99
                    echo "                        <span style=\"color: green;\">Traitée</span>
                    ";
                }
                // line 101
                echo "                </td>
                <td>
                    ";
                // line 103
                if (( !twig_get_attribute($this->env, $this->source, $context["reclamation"], "etat", [], "any", false, false, false, 103) &&  !twig_get_attribute($this->env, $this->source, $context["reclamation"], "reponse", [], "any", false, false, false, 103))) {
                    // line 104
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_back_repondre", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 104)]), "html", null, true);
                    echo "\" class=\"btn btn-success\">Répondre</a>
                    ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 105
$context["reclamation"], "reponse", [], "any", false, false, false, 105)) {
                    echo " 
                        <a href=\"";
                    // line 106
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_back_show_response", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 106)]), "html", null, true);
                    echo "\" class=\"btn btn-primary btn-view-response\">
                            Voir la réponse
                        </a>
                    ";
                }
                // line 110
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_back_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 110)]), "html", null, true);
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
            // line 117
            echo "    ";
        }
        // line 118
        echo "     </tbody>
</table>
<div class=\"pagination-container\">
            <ul class=\"pagination\">
                ";
        // line 122
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 122, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 122) > 1)) {
            // line 123
            echo "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_back_index", ["page" => (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 124, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 124) - 1)]), "html", null, true);
            echo "\" aria-label=\"Previous\">
                            <span aria-hidden=\"true\">&laquo;</span>
                            <span class=\"sr-only\">Previous</span>
                        </a>
                    </li>
                ";
        }
        // line 130
        echo "
                ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 131, $this->source); })()), "pageCount", [], "any", false, false, false, 131)));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 132
            echo "                    <li class=\"page-item ";
            if (($context["page"] == twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 132, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 132))) {
                echo "active";
            }
            echo "\">
                        <a class=\"page-link\" href=\"";
            // line 133
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
        // line 136
        echo "
                ";
        // line 137
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 137, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 137) < twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 137, $this->source); })()), "pageCount", [], "any", false, false, false, 137))) {
            // line 138
            echo "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_back_index", ["page" => (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 139, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 139) + 1)]), "html", null, true);
            echo "\" aria-label=\"Next\">
                            <span aria-hidden=\"true\">&raquo;</span>
                            <span class=\"sr-only\">Next</span>
                        </a>
                    </li>
                ";
        }
        // line 145
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
        // line 310
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["typeStatistics"]) || array_key_exists("typeStatistics", $context) ? $context["typeStatistics"] : (function () { throw new RuntimeError('Variable "typeStatistics" does not exist.', 310, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 311
            echo "                                        '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stat"], "type", [], "any", false, false, false, 311), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stat"], "typeCount", [], "any", false, false, false, 311), "html", null, true);
            echo ")',
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 313
        echo "                                    
                                ],
                                datasets: [{
                                    data: [
                                        ";
        // line 317
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["typeStatistics"]) || array_key_exists("typeStatistics", $context) ? $context["typeStatistics"] : (function () { throw new RuntimeError('Variable "typeStatistics" does not exist.', 317, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 318
            echo "                                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stat"], "typeCount", [], "any", false, false, false, 318), "html", null, true);
            echo ",
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 320
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
        return array (  528 => 320,  519 => 318,  515 => 317,  509 => 313,  498 => 311,  494 => 310,  327 => 145,  318 => 139,  315 => 138,  313 => 137,  310 => 136,  299 => 133,  292 => 132,  288 => 131,  285 => 130,  276 => 124,  273 => 123,  271 => 122,  265 => 118,  262 => 117,  248 => 110,  241 => 106,  237 => 105,  232 => 104,  230 => 103,  226 => 101,  222 => 99,  218 => 97,  216 => 96,  212 => 94,  208 => 92,  202 => 90,  200 => 89,  195 => 87,  191 => 86,  187 => 85,  183 => 84,  179 => 83,  176 => 82,  171 => 81,  169 => 80,  117 => 30,  106 => 24,  97 => 20,  93 => 19,  85 => 15,  80 => 14,  68 => 4,  58 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends 'baseback.html.twig' %} #}
{% extends \"admin/layout.html.twig\" %}
{% block body %}
  <li class=\"dropdown dropdown-list-toggle\">
\t\t\t\t\t\t\t<a href=\"#\" data-toggle=\"dropdown\" class=\"nav-link notification-toggle nav-link-lg beep\">
\t\t\t\t\t\t\t\t<i class=\"ion ion-ios-bell-outline\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t <div class=\"dropdown notification-dropdown\">
    <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"notificationDropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        <i class=\"fas fa-bell\"></i> <!-- Icône de cloche -->
        <span class=\"badge badge-pill badge-danger\">3</span> <!-- Afficher le nombre de notifications non lues -->
    </a>
    <div class=\"dropdown-menu\" aria-labelledby=\"notificationDropdown\">
\t\t\t\t\t\t\t\t\t{% for notification in notifications %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ notification.link }}\" class=\"dropdown-item dropdown-item-unread\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-item-icon bg-primary text-white\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-item-desc\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ notification.message }}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time text-primary\">{{ notification.createdAt|date('Y-m-d H:i') }}</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-item-desc\">
\t\t\t\t\t\t\t\t\t\t\t\tNo notifications
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</div>
    
</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

        </li>


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
", "reclamation_back/index.html.twig", "C:\\Users\\ASUS\\Desktop\\PiDev\\Projet-Pi-tfarhida\\templates\\reclamation_back\\index.html.twig");
    }
}
