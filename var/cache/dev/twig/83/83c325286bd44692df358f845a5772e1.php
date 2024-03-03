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

/* activitee_back/index.html.twig */
class __TwigTemplate_88940a5750a78b6b4633a3a961bbff2f extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activitee_back/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activitee_back/index.html.twig"));

        $this->parent = $this->loadTemplate("baseback.html.twig", "activitee_back/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Activitee back Affichage";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "

    <div id=\"table-actions\" class=\"d-flex align-items-center justify-content-between mb-4\">
        <div class=\"d-flex\">
            <button id=\"btPrint\" onclick=\"createPDF()\" class=\"export-pdf-btn\">
                <i class=\"fas fa-file-pdf\"></i> Export PDF
            </button>
            <input type=\"text\" id=\"myInput\" onkeyup=\"myFunction()\" placeholder=\"Search ...\" class=\"form-control\"
                id=\"search-input\">
        </div>
        <form method=\"get\" action=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activitee_back_index");
        echo "\">
    <input type=\"radio\" name=\"etat\" value=\"\" ";
        // line 16
        if (twig_test_empty((isset($context["selectedState"]) || array_key_exists("selectedState", $context) ? $context["selectedState"] : (function () { throw new RuntimeError('Variable "selectedState" does not exist.', 16, $this->source); })()))) {
            echo " checked ";
        }
        echo "> Tous
    <input type=\"radio\" name=\"etat\" value=\"accepte\" ";
        // line 17
        if (((isset($context["selectedState"]) || array_key_exists("selectedState", $context) ? $context["selectedState"] : (function () { throw new RuntimeError('Variable "selectedState" does not exist.', 17, $this->source); })()) == "accepte")) {
            echo " checked ";
        }
        echo "> Accepté
    <input type=\"radio\" name=\"etat\" value=\"refuse\" ";
        // line 18
        if (((isset($context["selectedState"]) || array_key_exists("selectedState", $context) ? $context["selectedState"] : (function () { throw new RuntimeError('Variable "selectedState" does not exist.', 18, $this->source); })()) == "refuse")) {
            echo " checked ";
        }
        echo "> Refusé
    <input type=\"radio\" name=\"etat\" value=\"encours\" ";
        // line 19
        if (((isset($context["selectedState"]) || array_key_exists("selectedState", $context) ? $context["selectedState"] : (function () { throw new RuntimeError('Variable "selectedState" does not exist.', 19, $this->source); })()) == "encours")) {
            echo " checked ";
        }
        echo "> En cours
    <button type=\"submit\">Filtrer</button>
</form>
    </div>





<div>
   <div class=\"container text-center\">
    <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activitee_back_new");
        echo "\" class=\"btn btn-primary btn-icon-split\">
        <i class=\"fas fa-plus\"></i> Create New
    </a>
    </div>
</div>



<table class=\"table\" id=\"activitee-table\">
    <thead>
        <tr>
            <th>Id</th>
            <th onclick=\"sortTable(1)\">Nom</th>
            <th onclick=\"sortTable(2)\">Prix</th>
            <th onclick=\"sortTable(3)\">Localisation</th>
            <th onclick=\"sortTable(4)\">NbP</th>
            <th>Etat</th>
            <th>Image</th>
            <th>Accepter</th>
            <th>Actions</th>
        </tr>
    </thead>
  <tbody>
    ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 53, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["activitee"]) {
            // line 54
            echo "    <tr class=\"etat-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activitee"], "etat", [], "any", false, false, false, 54), "html", null, true);
            echo "\">
        <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activitee"], "id", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
        <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activitee"], "nom", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
        <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activitee"], "prix", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
        <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activitee"], "localisation", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
        <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activitee"], "nbP", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
        <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activitee"], "etat", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
        <td><img src=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["activitee"], "image", [], "any", false, false, false, 61))), "html", null, true);
            echo "\" alt=\"Image\" width=\"100\" height=\"100\"></td>
        <td>
            <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_modifier_etat_activite", ["id" => twig_get_attribute($this->env, $this->source, $context["activitee"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            echo "\" class=\"btn-icon-split\">
                <i class=\"fas fa-check text-success\"></i>
            </a>
            <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_refuser_etat_activite", ["id" => twig_get_attribute($this->env, $this->source, $context["activitee"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\" class=\"btn-icon-split\">
                <i class=\"fas fa-times text-danger\"></i>
            </a>
        </td>
        <td>
            <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activitee_back_show", ["id" => twig_get_attribute($this->env, $this->source, $context["activitee"], "id", [], "any", false, false, false, 71)]), "html", null, true);
            echo "\" class=\"btn-icon-split\">
                <i class=\"fas fa-eye text-primary\"></i>
            </a>
            <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activitee_back_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["activitee"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            echo "\" class=\"btn-icon-split\">
                <i class=\"fas fa-edit text-secondary\"></i>
            </a>
        </td>
    </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 80
            echo "    <tr>
        <td colspan=\"8\">no records found</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activitee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "</tbody>
    
</table>
<div class=\"pagination-container\">
    <ul class=\"pagination\">
        ";
        // line 89
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 89, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 89) > 1)) {
            // line 90
            echo "            <li class=\"page-item\">
                <a class=\"page-link\" href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activitee_back_index", ["page" => (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 91, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 91) - 1)]), "html", null, true);
            echo "\" aria-label=\"Previous\">
                    <span aria-hidden=\"true\">&laquo;</span>
                    <span class=\"sr-only\">Previous</span>
                </a>
            </li>
        ";
        }
        // line 97
        echo "
        ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 98, $this->source); })()), "pageCount", [], "any", false, false, false, 98)));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 99
            echo "            <li class=\"page-item ";
            if (($context["page"] == twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 99, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 99))) {
                echo "active";
            }
            echo "\">
                <a class=\"page-link\" href=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activitee_back_index", ["page" => $context["page"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["page"], "html", null, true);
            echo "</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "
        ";
        // line 104
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 104, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 104) < twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 104, $this->source); })()), "pageCount", [], "any", false, false, false, 104))) {
            // line 105
            echo "            <li class=\"page-item\">
                <a class=\"page-link\" href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activitee_back_index", ["page" => (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 106, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 106) + 1)]), "html", null, true);
            echo "\" aria-label=\"Next\">
                    <span aria-hidden=\"true\">&raquo;</span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </li>
        ";
        }
        // line 112
        echo "    </ul>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 116
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 117
        echo " <script>
function createPDF() {
    var htmlContent = document.getElementById(\"activitee-table\").outerHTML;
    var win = window.open('', '', 'height=700,width=700');
    win.document.write(htmlContent);
    win.document.close();
    win.print();
}
</script>
    <script>
 function myFunction() {
    var filter, table, tr, td, i, txtValue, stateFilter;

    // Get the selected state from the radio buttons
    var radios = document.getElementsByName('optionsRadios');
    for (var k = 0; k < radios.length; k++) {
        if (radios[k].checked) {
            stateFilter = radios[k].value;
            break;
        }
    }

    // Get the input value for the search
    filter = document.getElementById(\"myInput\").value.toUpperCase();
    
    table = document.getElementById(\"activitee-table\");
    tr = table.getElementsByTagName(\"tr\");

    // Loop through all table rows
    for (i = 0; i < tr.length; i++) {
        var matchFound = false;
        // Loop through the cells of each row, starting from index 1 to skip the first cell (column names)
        for (var j = 1; j < tr[i].cells.length; j++) {
            td = tr[i].cells[j];
            if (td) {
                txtValue = td.textContent || td.innerText;
                // Check if the text in the current cell matches the filter or state
                if (txtValue.toUpperCase().indexOf(filter) > -1 || (stateFilter && txtValue === stateFilter)) {
                    matchFound = true;
                    break; // Exit the loop if a match is found in any cell
                }
            }
        }
        // Show or hide the row based on whether a match was found
        if (matchFound) {
            tr[i].style.display = \"\";
        } else {
            tr[i].style.display = \"none\";
        }
    }
}

</script>
<script>

  function sortTable(n) {
    var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
    table = document.getElementById(\"activitee-table\");
    switching = true;
    dir = \"asc\";
    while (switching) {
        switching = false;
        rows = table.rows;
        for (i = 1; i < (rows.length - 1); i++) {
            shouldSwitch = false;
            x = rows[i].getElementsByTagName(\"TD\")[n];
            y = rows[i + 1].getElementsByTagName(\"TD\")[n];
            // Check the data type of the cells
            var xValue = isNaN(parseFloat(x.innerHTML)) ? x.innerHTML.toLowerCase() : parseFloat(x.innerHTML);
            var yValue = isNaN(parseFloat(y.innerHTML)) ? y.innerHTML.toLowerCase() : parseFloat(y.innerHTML);
            if (dir == \"asc\") {
                if (xValue > yValue) {
                    shouldSwitch = true;
                    break;
                }
            } else if (dir == \"desc\") {
                if (xValue < yValue) {
                    shouldSwitch = true;
                    break;
                }
            }
        }
        if (shouldSwitch) {
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;
            switchcount++;
        } else {
            if (switchcount == 0 && dir == \"asc\") {
                dir = \"desc\";
                switching = true;
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
        return "activitee_back/index.html.twig";
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
        return array (  329 => 117,  319 => 116,  307 => 112,  298 => 106,  295 => 105,  293 => 104,  290 => 103,  279 => 100,  272 => 99,  268 => 98,  265 => 97,  256 => 91,  253 => 90,  251 => 89,  244 => 84,  235 => 80,  224 => 74,  218 => 71,  210 => 66,  204 => 63,  199 => 61,  195 => 60,  191 => 59,  187 => 58,  183 => 57,  179 => 56,  175 => 55,  170 => 54,  165 => 53,  139 => 30,  123 => 19,  117 => 18,  111 => 17,  105 => 16,  101 => 15,  89 => 5,  79 => 4,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseback.html.twig' %}
{% block title %}Activitee back Affichage{% endblock %}

{% block body %}


    <div id=\"table-actions\" class=\"d-flex align-items-center justify-content-between mb-4\">
        <div class=\"d-flex\">
            <button id=\"btPrint\" onclick=\"createPDF()\" class=\"export-pdf-btn\">
                <i class=\"fas fa-file-pdf\"></i> Export PDF
            </button>
            <input type=\"text\" id=\"myInput\" onkeyup=\"myFunction()\" placeholder=\"Search ...\" class=\"form-control\"
                id=\"search-input\">
        </div>
        <form method=\"get\" action=\"{{ path('app_activitee_back_index') }}\">
    <input type=\"radio\" name=\"etat\" value=\"\" {% if selectedState is empty %} checked {% endif %}> Tous
    <input type=\"radio\" name=\"etat\" value=\"accepte\" {% if selectedState == 'accepte' %} checked {% endif %}> Accepté
    <input type=\"radio\" name=\"etat\" value=\"refuse\" {% if selectedState == 'refuse' %} checked {% endif %}> Refusé
    <input type=\"radio\" name=\"etat\" value=\"encours\" {% if selectedState == 'encours' %} checked {% endif %}> En cours
    <button type=\"submit\">Filtrer</button>
</form>
    </div>





<div>
   <div class=\"container text-center\">
    <a href=\"{{ path('app_activitee_back_new') }}\" class=\"btn btn-primary btn-icon-split\">
        <i class=\"fas fa-plus\"></i> Create New
    </a>
    </div>
</div>



<table class=\"table\" id=\"activitee-table\">
    <thead>
        <tr>
            <th>Id</th>
            <th onclick=\"sortTable(1)\">Nom</th>
            <th onclick=\"sortTable(2)\">Prix</th>
            <th onclick=\"sortTable(3)\">Localisation</th>
            <th onclick=\"sortTable(4)\">NbP</th>
            <th>Etat</th>
            <th>Image</th>
            <th>Accepter</th>
            <th>Actions</th>
        </tr>
    </thead>
  <tbody>
    {% for activitee in pagination %}
    <tr class=\"etat-{{ activitee.etat }}\">
        <td>{{ activitee.id }}</td>
        <td>{{ activitee.nom }}</td>
        <td>{{ activitee.prix }}</td>
        <td>{{ activitee.localisation }}</td>
        <td>{{ activitee.nbP }}</td>
        <td>{{ activitee.etat }}</td>
        <td><img src=\"{{ asset('uploads/' ~ activitee.image) }}\" alt=\"Image\" width=\"100\" height=\"100\"></td>
        <td>
            <a href=\"{{ path('app_modifier_etat_activite', {'id': activitee.id}) }}\" class=\"btn-icon-split\">
                <i class=\"fas fa-check text-success\"></i>
            </a>
            <a href=\"{{ path('app_refuser_etat_activite', {'id': activitee.id}) }}\" class=\"btn-icon-split\">
                <i class=\"fas fa-times text-danger\"></i>
            </a>
        </td>
        <td>
            <a href=\"{{ path('app_activitee_back_show', {'id': activitee.id}) }}\" class=\"btn-icon-split\">
                <i class=\"fas fa-eye text-primary\"></i>
            </a>
            <a href=\"{{ path('app_activitee_back_edit', {'id': activitee.id}) }}\" class=\"btn-icon-split\">
                <i class=\"fas fa-edit text-secondary\"></i>
            </a>
        </td>
    </tr>
    {% else %}
    <tr>
        <td colspan=\"8\">no records found</td>
    </tr>
    {% endfor %}
</tbody>
    
</table>
<div class=\"pagination-container\">
    <ul class=\"pagination\">
        {% if pagination.currentPageNumber > 1 %}
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"{{ path('app_activitee_back_index', {'page': pagination.currentPageNumber - 1}) }}\" aria-label=\"Previous\">
                    <span aria-hidden=\"true\">&laquo;</span>
                    <span class=\"sr-only\">Previous</span>
                </a>
            </li>
        {% endif %}

        {% for page in range(1, pagination.pageCount) %}
            <li class=\"page-item {% if page == pagination.currentPageNumber %}active{% endif %}\">
                <a class=\"page-link\" href=\"{{ path('app_activitee_back_index', {'page': page}) }}\">{{ page }}</a>
            </li>
        {% endfor %}

        {% if pagination.currentPageNumber < pagination.pageCount %}
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"{{ path('app_activitee_back_index', {'page': pagination.currentPageNumber + 1}) }}\" aria-label=\"Next\">
                    <span aria-hidden=\"true\">&raquo;</span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </li>
        {% endif %}
    </ul>
</div>
{% endblock %}

{% block javascripts %}
 <script>
function createPDF() {
    var htmlContent = document.getElementById(\"activitee-table\").outerHTML;
    var win = window.open('', '', 'height=700,width=700');
    win.document.write(htmlContent);
    win.document.close();
    win.print();
}
</script>
    <script>
 function myFunction() {
    var filter, table, tr, td, i, txtValue, stateFilter;

    // Get the selected state from the radio buttons
    var radios = document.getElementsByName('optionsRadios');
    for (var k = 0; k < radios.length; k++) {
        if (radios[k].checked) {
            stateFilter = radios[k].value;
            break;
        }
    }

    // Get the input value for the search
    filter = document.getElementById(\"myInput\").value.toUpperCase();
    
    table = document.getElementById(\"activitee-table\");
    tr = table.getElementsByTagName(\"tr\");

    // Loop through all table rows
    for (i = 0; i < tr.length; i++) {
        var matchFound = false;
        // Loop through the cells of each row, starting from index 1 to skip the first cell (column names)
        for (var j = 1; j < tr[i].cells.length; j++) {
            td = tr[i].cells[j];
            if (td) {
                txtValue = td.textContent || td.innerText;
                // Check if the text in the current cell matches the filter or state
                if (txtValue.toUpperCase().indexOf(filter) > -1 || (stateFilter && txtValue === stateFilter)) {
                    matchFound = true;
                    break; // Exit the loop if a match is found in any cell
                }
            }
        }
        // Show or hide the row based on whether a match was found
        if (matchFound) {
            tr[i].style.display = \"\";
        } else {
            tr[i].style.display = \"none\";
        }
    }
}

</script>
<script>

  function sortTable(n) {
    var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
    table = document.getElementById(\"activitee-table\");
    switching = true;
    dir = \"asc\";
    while (switching) {
        switching = false;
        rows = table.rows;
        for (i = 1; i < (rows.length - 1); i++) {
            shouldSwitch = false;
            x = rows[i].getElementsByTagName(\"TD\")[n];
            y = rows[i + 1].getElementsByTagName(\"TD\")[n];
            // Check the data type of the cells
            var xValue = isNaN(parseFloat(x.innerHTML)) ? x.innerHTML.toLowerCase() : parseFloat(x.innerHTML);
            var yValue = isNaN(parseFloat(y.innerHTML)) ? y.innerHTML.toLowerCase() : parseFloat(y.innerHTML);
            if (dir == \"asc\") {
                if (xValue > yValue) {
                    shouldSwitch = true;
                    break;
                }
            } else if (dir == \"desc\") {
                if (xValue < yValue) {
                    shouldSwitch = true;
                    break;
                }
            }
        }
        if (shouldSwitch) {
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;
            switchcount++;
        } else {
            if (switchcount == 0 && dir == \"asc\") {
                dir = \"desc\";
                switching = true;
            }
        }
    }
}
</script>



    

{% endblock %}
", "activitee_back/index.html.twig", "C:\\Users\\ASUS\\PiProjecttt\\templates\\activitee_back\\index.html.twig");
    }
}
