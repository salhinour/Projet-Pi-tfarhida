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
        // line 2
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "logement_back/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "logement_back/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "logement_back/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
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

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<button type=\"button\" class=\"btn btn-primary btn-icon-split\" data-toggle=\"modal\" data-target=\"#statsModal\">
    Show Stats
</button>
 <div class=\"d-flex align-items-center justify-content-between mb-4\">
        <div class=\"d-flex\">
        
        <div>
          
            <button id=\"btPrint\" onclick=\"createPDF()\" class=\"export-pdf-btn\">
                <i class=\"fas fa-file-pdf\"></i> Export PDF
            </button>  
            <input type=\"text\" id=\"myInput\" onkeyup=\"myFunction()\" placeholder=\"Search ...\" class=\"form-control\" id=\"search-input\">

            </div>



        </div>
\t\t\t\t\t<div>\t<button id=\"delete-selected-btn\" style=\"display: none;\" data-csrf-token=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete_selected"), "html", null, true);
        echo "\" class=\"btn btn-danger\">Delete Selected</button></div>

  <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logement_back_new");
        echo "\" class=\"btn btn-success btn-icon-split ml-auto\">
                <i class=\"fas fa-plus\"></i> Create New
            </a>
        </div>
        <div class=\"d-flex align-items-center justify-content-between mb-4\">

        
        <table class=\"table\" id=\"myTable\">
         <thead class=\"thead-dark\">
            <tr>
            <th class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"custom-checkbox custom-control\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" data-checkboxes=\"mygroup\"  class=\"custom-control-input\" id=\"checkbox-all\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"checkbox-all\" class=\"custom-control-label\"></label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</th>
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
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 59, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["logement"]) {
            // line 60
            echo "            <tr>
            <td class=\"text-center\">
\t\t\t\t<div class=\"custom-checkbox custom-control\">
\t\t\t\t<input type=\"checkbox\" data-checkboxes=\"mygroup\" class=\"custom-control-input\" id=\"checkbox-";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "id", [], "any", false, false, false, 63), "html", null, true);
            echo "\">
\t\t\t\t\t<label for=\"checkbox-";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "id", [], "any", false, false, false, 64), "html", null, true);
            echo "\" class=\"custom-control-label\"></label>
\t\t\t\t</div>
\t\t\t\t\t</td>
            
                <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "id", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "nom", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "TypeLog", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
                 <td>
            ";
            // line 72
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["logement"], "equipement", [], "any", false, false, false, 72))) {
                // line 73
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["logement"], "equipement", [], "any", false, false, false, 73), "id", [], "any", false, false, false, 73), "html", null, true);
                echo "
            ";
            } else {
                // line 75
                echo "                N/A
            ";
            }
            // line 77
            echo "        </td>


                <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "Localisation", [], "any", false, false, false, 80), "html", null, true);
            echo "</td>
                <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "Prix", [], "any", false, false, false, 81), "html", null, true);
            echo "</td>
                <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "NoteMoyenne", [], "any", false, false, false, 82), "html", null, true);
            echo "</td>
                <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["logement"], "Etat", [], "any", false, false, false, 83), "html", null, true);
            echo "</td>
                <td>
                   ";
            // line 85
            if (twig_get_attribute($this->env, $this->source, $context["logement"], "image", [], "any", false, false, false, 85)) {
                // line 86
                echo "                       <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["logement"], "image", [], "any", false, false, false, 86))), "html", null, true);
                echo "\" alt=\"Image\" width=\"100\" height=\"100\">
                   ";
            } else {
                // line 88
                echo "                       <span>Aucune image</span>
                   ";
            }
            // line 90
            echo "               </td>
                <td >
                 <div class=\"row\">
                    
                    <a href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logement_back_show", ["id" => twig_get_attribute($this->env, $this->source, $context["logement"], "id", [], "any", false, false, false, 94)]), "html", null, true);
            echo "\" >
                    <i class=\"fas fa-eye\" style=\"color: green\"></i>
                    
                    </a>
                        <a href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logement_back_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["logement"], "id", [], "any", false, false, false, 98)]), "html", null, true);
            echo "\" >
                        <i class=\"fas fa-pencil-alt\"></i>
                    </a>
                   
                 </div>
              
                </td>
                <td>
                <a href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_modifier_etat_logement", ["id" => twig_get_attribute($this->env, $this->source, $context["logement"], "id", [], "any", false, false, false, 106)]), "html", null, true);
            echo "\">
                    <i class=\"fas fa-check\"></i>
                </a>
            
                
                <a href=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_refuser_etat_logement", ["id" => twig_get_attribute($this->env, $this->source, $context["logement"], "id", [], "any", false, false, false, 111)]), "html", null, true);
            echo "\">
                    <i class=\"fas fa-times\" style=\"color: red\"></i>
                </a>
                </td>


            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 119
            echo "            <tr>
                <td colspan=\"9\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['logement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "        </tbody>
    </table>
     </div>
    <div class=\"pagination-container\">
    <ul class=\"pagination\">
        ";
        // line 128
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 128, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 128) > 1)) {
            // line 129
            echo "            <li class=\"page-item\">
                <a class=\"page-link\" href=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logement_back_index", ["page" => (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 130, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 130) - 1)]), "html", null, true);
            echo "\" aria-label=\"Previous\">
                    <span aria-hidden=\"true\">&laquo;</span>
                    <span class=\"sr-only\">Previous</span>
                </a>
            </li>
        ";
        }
        // line 136
        echo "
        ";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 137, $this->source); })()), "pageCount", [], "any", false, false, false, 137)));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 138
            echo "            <li class=\"page-item ";
            if (($context["page"] == twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 138, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 138))) {
                echo "active";
            }
            echo "\">
                <a class=\"page-link\" href=\"";
            // line 139
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
        // line 142
        echo "
        ";
        // line 143
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 143, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 143) < twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 143, $this->source); })()), "pageCount", [], "any", false, false, false, 143))) {
            // line 144
            echo "            <li class=\"page-item\">
                <a class=\"page-link\" href=\"";
            // line 145
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logement_back_index", ["page" => (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 145, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 145) + 1)]), "html", null, true);
            echo "\" aria-label=\"Next\">
                    <span aria-hidden=\"true\">&raquo;</span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </li>
        ";
        }
        // line 151
        echo "    </ul>
</div>

<script>
\t\tdocument.addEventListener('DOMContentLoaded', function() {
\t\t\tconst deleteButton = document.querySelector('#delete-selected-btn');
\t\t\tconst checkboxes = document.querySelectorAll('input[data-checkboxes=\"mygroup\"]');
\t\t\tconst checkAllCheckbox = document.querySelector('input[data-checkboxes=\"mygroup\"]');

\t\t\tfunction updateDeleteButtonVisibility() {
\t\t\t\tconst isAnyCheckboxChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);
\t\t\t\tdeleteButton.style.display = isAnyCheckboxChecked ? 'inline-block' : 'none';
\t\t\t\tconsole.log('Update Delete Button Visibility:', isAnyCheckboxChecked ? 'Show' : 'Hide');
\t\t\t}

\t\t\tif (checkboxes) {
\t\t\t\tcheckboxes.forEach(checkbox => {
\t\t\t\t\tcheckbox.addEventListener('change', function () {
\t\t\t\t\t\tupdateDeleteButtonVisibility();
\t\t\t\t\t});
\t\t\t\t});
\t\t\t}

\t\t\tif (checkAllCheckbox) {
\t\t\t\tcheckAllCheckbox.addEventListener('change', function() {
\t\t\t\t\tconst isChecked = this.checked;
\t\t\t\t\tcheckboxes.forEach(checkbox => {
\t\t\t\t\t\tcheckbox.checked = isChecked;
\t\t\t\t\t});
\t\t\t\t\tupdateDeleteButtonVisibility();
\t\t\t\t});
\t\t\t}

\t\t\tupdateDeleteButtonVisibility();

\t\t\tdeleteButton.addEventListener('click', function() {

\t\t\t\tconst selectedIds = Array.from(checkboxes)
\t\t\t\t\t\t.filter(checkbox => checkbox.checked)
\t\t\t\t\t\t.map(checkbox => {
\t\t\t\t\t\t\tconst match = checkbox.id.match(/checkbox-(\\d+)/);
\t\t\t\t\t\t\treturn match ? match[1] : null;
\t\t\t\t\t\t})
\t\t\t\tif (selectedIds.length > 0) {
\t\t\t\t\tconst csrfToken = this.getAttribute('data-csrf-token');
\t\t\t\t\tconsole.log('Sending deletion request with CSRF token:', csrfToken);

\t\t\t\t\tfetch('/logement/back/delete-selected, {
\t\t\t\t\t\tmethod: 'POST',
\t\t\t\t\t\theaders: { 'Content-Type': 'application/json' },
\t\t\t\t\t\tbody: JSON.stringify({ ids: selectedIds, '_token': csrfToken })
\t\t\t\t\t})
\t\t\t\t\t\t\t.then(response => {
\t\t\t\t\t\t\t\tif (!response.ok) {
\t\t\t\t\t\t\t\t\tthrow new Error('Network response was not ok');
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\treturn response.json();
\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t.then(data => {
\t\t\t\t\t\t\t\tconsole.log('Deletion Success:', data);
\t\t\t\t\t\t\t\talert(data.message);
\t\t\t\t\t\t\t\twindow.location.reload();
\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t.catch(error => {
\t\t\t\t\t\t\t\tconsole.error('Deletion Error:', error);
\t\t\t\t\t\t\t\talert('Error deleting ');
\t\t\t\t\t\t\t});
\t\t\t\t}
\t\t\t});
\t\t});
\t</script>
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
        // line 274
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["typeStatistics"]) || array_key_exists("typeStatistics", $context) ? $context["typeStatistics"] : (function () { throw new RuntimeError('Variable "typeStatistics" does not exist.', 274, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 275
            echo "                    '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stat"], "TypeLog", [], "any", false, false, false, 275), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stat"], "TypeLogCount", [], "any", false, false, false, 275), "html", null, true);
            echo ")',
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 277
        echo "            ],
            datasets: [{
                data: [
                    ";
        // line 280
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["typeStatistics"]) || array_key_exists("typeStatistics", $context) ? $context["typeStatistics"] : (function () { throw new RuntimeError('Variable "typeStatistics" does not exist.', 280, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 281
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stat"], "TypeLogCount", [], "any", false, false, false, 281), "html", null, true);
            echo ",
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 283
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
        return array (  502 => 283,  493 => 281,  489 => 280,  484 => 277,  473 => 275,  469 => 274,  344 => 151,  335 => 145,  332 => 144,  330 => 143,  327 => 142,  316 => 139,  309 => 138,  305 => 137,  302 => 136,  293 => 130,  290 => 129,  288 => 128,  281 => 123,  272 => 119,  259 => 111,  251 => 106,  240 => 98,  233 => 94,  227 => 90,  223 => 88,  217 => 86,  215 => 85,  210 => 83,  206 => 82,  202 => 81,  198 => 80,  193 => 77,  189 => 75,  183 => 73,  181 => 72,  176 => 70,  172 => 69,  168 => 68,  161 => 64,  157 => 63,  152 => 60,  147 => 59,  114 => 29,  109 => 27,  88 => 8,  78 => 7,  59 => 5,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends 'baseBack.html.twig' %} #}
{% extends \"admin/layout.html.twig\" %}


{% block title %}Logement index{% endblock %}

{% block body %}

<button type=\"button\" class=\"btn btn-primary btn-icon-split\" data-toggle=\"modal\" data-target=\"#statsModal\">
    Show Stats
</button>
 <div class=\"d-flex align-items-center justify-content-between mb-4\">
        <div class=\"d-flex\">
        
        <div>
          
            <button id=\"btPrint\" onclick=\"createPDF()\" class=\"export-pdf-btn\">
                <i class=\"fas fa-file-pdf\"></i> Export PDF
            </button>  
            <input type=\"text\" id=\"myInput\" onkeyup=\"myFunction()\" placeholder=\"Search ...\" class=\"form-control\" id=\"search-input\">

            </div>



        </div>
\t\t\t\t\t<div>\t<button id=\"delete-selected-btn\" style=\"display: none;\" data-csrf-token=\"{{ csrf_token('delete_selected') }}\" class=\"btn btn-danger\">Delete Selected</button></div>

  <a href=\"{{ path('app_logement_back_new') }}\" class=\"btn btn-success btn-icon-split ml-auto\">
                <i class=\"fas fa-plus\"></i> Create New
            </a>
        </div>
        <div class=\"d-flex align-items-center justify-content-between mb-4\">

        
        <table class=\"table\" id=\"myTable\">
         <thead class=\"thead-dark\">
            <tr>
            <th class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"custom-checkbox custom-control\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" data-checkboxes=\"mygroup\"  class=\"custom-control-input\" id=\"checkbox-all\">
\t\t\t\t\t\t\t\t\t\t\t<label for=\"checkbox-all\" class=\"custom-control-label\"></label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</th>
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
\t\t\t\t<div class=\"custom-checkbox custom-control\">
\t\t\t\t<input type=\"checkbox\" data-checkboxes=\"mygroup\" class=\"custom-control-input\" id=\"checkbox-{{ logement.id }}\">
\t\t\t\t\t<label for=\"checkbox-{{ logement.id }}\" class=\"custom-control-label\"></label>
\t\t\t\t</div>
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

<script>
\t\tdocument.addEventListener('DOMContentLoaded', function() {
\t\t\tconst deleteButton = document.querySelector('#delete-selected-btn');
\t\t\tconst checkboxes = document.querySelectorAll('input[data-checkboxes=\"mygroup\"]');
\t\t\tconst checkAllCheckbox = document.querySelector('input[data-checkboxes=\"mygroup\"]');

\t\t\tfunction updateDeleteButtonVisibility() {
\t\t\t\tconst isAnyCheckboxChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);
\t\t\t\tdeleteButton.style.display = isAnyCheckboxChecked ? 'inline-block' : 'none';
\t\t\t\tconsole.log('Update Delete Button Visibility:', isAnyCheckboxChecked ? 'Show' : 'Hide');
\t\t\t}

\t\t\tif (checkboxes) {
\t\t\t\tcheckboxes.forEach(checkbox => {
\t\t\t\t\tcheckbox.addEventListener('change', function () {
\t\t\t\t\t\tupdateDeleteButtonVisibility();
\t\t\t\t\t});
\t\t\t\t});
\t\t\t}

\t\t\tif (checkAllCheckbox) {
\t\t\t\tcheckAllCheckbox.addEventListener('change', function() {
\t\t\t\t\tconst isChecked = this.checked;
\t\t\t\t\tcheckboxes.forEach(checkbox => {
\t\t\t\t\t\tcheckbox.checked = isChecked;
\t\t\t\t\t});
\t\t\t\t\tupdateDeleteButtonVisibility();
\t\t\t\t});
\t\t\t}

\t\t\tupdateDeleteButtonVisibility();

\t\t\tdeleteButton.addEventListener('click', function() {

\t\t\t\tconst selectedIds = Array.from(checkboxes)
\t\t\t\t\t\t.filter(checkbox => checkbox.checked)
\t\t\t\t\t\t.map(checkbox => {
\t\t\t\t\t\t\tconst match = checkbox.id.match(/checkbox-(\\d+)/);
\t\t\t\t\t\t\treturn match ? match[1] : null;
\t\t\t\t\t\t})
\t\t\t\tif (selectedIds.length > 0) {
\t\t\t\t\tconst csrfToken = this.getAttribute('data-csrf-token');
\t\t\t\t\tconsole.log('Sending deletion request with CSRF token:', csrfToken);

\t\t\t\t\tfetch('/logement/back/delete-selected, {
\t\t\t\t\t\tmethod: 'POST',
\t\t\t\t\t\theaders: { 'Content-Type': 'application/json' },
\t\t\t\t\t\tbody: JSON.stringify({ ids: selectedIds, '_token': csrfToken })
\t\t\t\t\t})
\t\t\t\t\t\t\t.then(response => {
\t\t\t\t\t\t\t\tif (!response.ok) {
\t\t\t\t\t\t\t\t\tthrow new Error('Network response was not ok');
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\treturn response.json();
\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t.then(data => {
\t\t\t\t\t\t\t\tconsole.log('Deletion Success:', data);
\t\t\t\t\t\t\t\talert(data.message);
\t\t\t\t\t\t\t\twindow.location.reload();
\t\t\t\t\t\t\t})
\t\t\t\t\t\t\t.catch(error => {
\t\t\t\t\t\t\t\tconsole.error('Deletion Error:', error);
\t\t\t\t\t\t\t\talert('Error deleting ');
\t\t\t\t\t\t\t});
\t\t\t\t}
\t\t\t});
\t\t});
\t</script>
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
