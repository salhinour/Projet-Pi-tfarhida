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

/* equipement_back/index.html.twig */
class __TwigTemplate_4e7220c3cca8e76651ab57091fcc42c9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipement_back/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipement_back/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "equipement_back/index.html.twig", 1);
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

        echo "Equipement index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
<body class=\"\" id=\"page-top\">

    <div id=\"wrapper\">


        <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">
            <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"index.html\">
                <div class=\"sidebar-brand-icon rotate-n-15\">
                </div>
                <div class=\"sidebar-brand-text mx-3\">
                    <img src=\"/images/tfarhida.png\" alt=\"Logo Tfarhida\" width=\"100\" height=\"100\">
                </div>

            </a>

            <hr class=\"sidebar-divider my-0\">

            <li class=\"nav-item     \">
                <a class=\"nav-link\" href=\"/admin/tableau-de-bord\">
                    <i class=\"fas fa-fw fa-tachometer-alt\"></i>
                    <span>Tableau de bord</span>
                </a>
            </li>

            <hr class=\"sidebar-divider my-0\">

            <li class=\"nav-item             active
    \">
                <a class=\"nav-link\" href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logement_back_index");
        echo "\" aria-expanded=\"false\">
                    <i class=\"fas fa-user\"></i>
                    <span>Logements</span>
                </a>
            </li>
            <li class=\"nav-item             active
    \">
                <a class=\"nav-link\" href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipement_back_index");
        echo "\" aria-expanded=\"false\">
                    <i class=\"fas fa-user\"></i>
                    <span>Equipements</span>
                </a>
            </li>

            <hr class=\"sidebar-divider d-none d-md-block\">

            <div class=\"text-center d-none d-md-inline\">
                <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
            </div>

        </ul>

        <div id=\"content-wrapper\" class=\"d-flex flex-column\">

            <div id=\"content\">

                <!-- Topbar -->
                <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow topbar\">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button class=\"btn btn-link d-md-none rounded-circle mr-3\" id=\"sidebarToggleTop\">
                        <i class=\"fa fa-bars\"></i>
                    </button>




                    <ul class=\"navbar-nav ml-auto\">



                        <div class=\"topbar-divider d-none d-sm-block\"></div>

                        <!-- Nav Item - User Information -->
                        <li class=\"nav-item dropdown no-arrow\">
                            <a aria-expanded=\"false\" aria-haspopup=\"true\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"userDropdown\" role=\"button\">
                                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\"><i class=\"far fa-user text-primary mr-2 fa-2x \"></i>Gharbi jihen</span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div aria-labelledby=\"userDropdown\" class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\">
                                <a class=\"dropdown-item\" href=\"/admin/profil\">
                                    <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Profil
                                </a>
                                <a class=\"dropdown-item\" href=\"/admin/parametre\">
                                    <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Paramètres
                                </a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" data-target=\"#logoutModal\" data-toggle=\"modal\" href=\"#\">
                                    <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Déconnexion
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>

                <!-- End of Topbar -->

                <div class=\"container-fluid\">

                    <h1 class=\"h3 mb-0 text-gray-800\">Gestion des activites</h1>



                    <div id=\"table-actions\" class=\"d-flex align-items-center justify-content-between mb-4\">
                        <div class=\"d-flex\">
                            <button id=\"btPrint\" onclick=\"createPDF()\" class=\"export-pdf-btn\">
                                <i class=\"fas fa-file-pdf\"></i> Export PDF
                            </button>
                            <input type=\"text\" id=\"myInput\" onkeyup=\"myFunction()\" placeholder=\"Search ...\" class=\"form-control\">
                        </div>
                        <div>
                            <a href=\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipement_back_new");
        echo "\" class=\"btn btn-success btn-icon-split ml-auto\">
                                <i class=\"fas fa-plus\"></i> Create New
                            </a>
                        </div>

                    </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 127
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 128
        echo "                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-hover\">
                            <thead class=\"thead-dark\">
                                <tr>
                                    <th scope=\"col\">Id</th>
                                    <th scope=\"col\">Parking</th>
                                    <th scope=\"col\">NbrChambre</th>
                                    <th scope=\"col\">Internet</th>
                                    <th scope=\"col\">Climatisation</th>
                                    <th scope=\"col\">TypesDeChambre</th>
                                    <th scope=\"col\">Images</th>
                                    <th scope=\"col\">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["equipements"]) || array_key_exists("equipements", $context) ? $context["equipements"] : (function () { throw new RuntimeError('Variable "equipements" does not exist.', 143, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["equipement"]) {
            // line 144
            echo "                                <tr>
                                    <td>";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipement"], "id", [], "any", false, false, false, 145), "html", null, true);
            echo "</td>
                                    <td>";
            // line 146
            echo ((twig_get_attribute($this->env, $this->source, $context["equipement"], "Parking", [], "any", false, false, false, 146)) ? ("Yes") : ("No"));
            echo "</td>
                                    <td>";
            // line 147
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipement"], "nbrChambre", [], "any", false, false, false, 147), "html", null, true);
            echo "</td>
                                    <td>";
            // line 148
            echo ((twig_get_attribute($this->env, $this->source, $context["equipement"], "internet", [], "any", false, false, false, 148)) ? ("Yes") : ("No"));
            echo "</td>
                                    <td>";
            // line 149
            echo ((twig_get_attribute($this->env, $this->source, $context["equipement"], "climatisation", [], "any", false, false, false, 149)) ? ("Yes") : ("No"));
            echo "</td>
                                    <td>";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["equipement"], "TypesDeChambre", [], "any", false, false, false, 150), "html", null, true);
            echo "</td>
                                    <td>
                                        ";
            // line 152
            if (twig_get_attribute($this->env, $this->source, $context["equipement"], "image", [], "any", false, false, false, 152)) {
                // line 153
                echo "                                        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["equipement"], "image", [], "any", false, false, false, 153))), "html", null, true);
                echo "\" alt=\"Image\" width=\"100\" height=\"100\">
                                        ";
            } else {
                // line 155
                echo "                                        <span>Aucune image</span>
                                        ";
            }
            // line 157
            echo "                                    </td>
                                    <td>
                                        <a href=\"";
            // line 159
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipement_back_show", ["id" => twig_get_attribute($this->env, $this->source, $context["equipement"], "id", [], "any", false, false, false, 159)]), "html", null, true);
            echo "\" class=\"btn btn-info btn-sm\"><i class=\"fas fa-eye\"></i></a>
                                        <a href=\"";
            // line 160
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipement_back_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["equipement"], "id", [], "any", false, false, false, 160)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-edit\"></i></a>
                                        <a href=\"";
            // line 161
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_equipement_back_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["equipement"], "id", [], "any", false, false, false, 161)]), "html", null, true);
            echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-trash-alt\"></i></a>
                                    </td>
                                </tr>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 165
            echo "                                <tr>
                                    <td colspan=\"7\">No records found</td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['equipement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "                            </tbody>
                        </table>
                    </div>
                    <script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById(\"myInput\");
            filter = input.value.toUpperCase();
            table = document.getElementById(\"activitee-table\");
            tr = table.getElementsByTagName(\"tr\");
            
            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName(\"td\")[5]; // Colonne de l'état (index 5)
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
        </script
 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "equipement_back/index.html.twig";
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
        return array (  330 => 169,  321 => 165,  312 => 161,  308 => 160,  304 => 159,  300 => 157,  296 => 155,  290 => 153,  288 => 152,  283 => 150,  279 => 149,  275 => 148,  271 => 147,  267 => 146,  263 => 145,  260 => 144,  255 => 143,  238 => 128,  228 => 127,  211 => 119,  130 => 41,  120 => 34,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}Equipement index{% endblock %}
{% block header %}

<body class=\"\" id=\"page-top\">

    <div id=\"wrapper\">


        <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">
            <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"index.html\">
                <div class=\"sidebar-brand-icon rotate-n-15\">
                </div>
                <div class=\"sidebar-brand-text mx-3\">
                    <img src=\"/images/tfarhida.png\" alt=\"Logo Tfarhida\" width=\"100\" height=\"100\">
                </div>

            </a>

            <hr class=\"sidebar-divider my-0\">

            <li class=\"nav-item     \">
                <a class=\"nav-link\" href=\"/admin/tableau-de-bord\">
                    <i class=\"fas fa-fw fa-tachometer-alt\"></i>
                    <span>Tableau de bord</span>
                </a>
            </li>

            <hr class=\"sidebar-divider my-0\">

            <li class=\"nav-item             active
    \">
                <a class=\"nav-link\" href=\"{{ path('app_logement_back_index') }}\" aria-expanded=\"false\">
                    <i class=\"fas fa-user\"></i>
                    <span>Logements</span>
                </a>
            </li>
            <li class=\"nav-item             active
    \">
                <a class=\"nav-link\" href=\"{{ path('app_equipement_back_index') }}\" aria-expanded=\"false\">
                    <i class=\"fas fa-user\"></i>
                    <span>Equipements</span>
                </a>
            </li>

            <hr class=\"sidebar-divider d-none d-md-block\">

            <div class=\"text-center d-none d-md-inline\">
                <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
            </div>

        </ul>

        <div id=\"content-wrapper\" class=\"d-flex flex-column\">

            <div id=\"content\">

                <!-- Topbar -->
                <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow topbar\">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button class=\"btn btn-link d-md-none rounded-circle mr-3\" id=\"sidebarToggleTop\">
                        <i class=\"fa fa-bars\"></i>
                    </button>




                    <ul class=\"navbar-nav ml-auto\">



                        <div class=\"topbar-divider d-none d-sm-block\"></div>

                        <!-- Nav Item - User Information -->
                        <li class=\"nav-item dropdown no-arrow\">
                            <a aria-expanded=\"false\" aria-haspopup=\"true\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"userDropdown\" role=\"button\">
                                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\"><i class=\"far fa-user text-primary mr-2 fa-2x \"></i>Gharbi jihen</span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div aria-labelledby=\"userDropdown\" class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\">
                                <a class=\"dropdown-item\" href=\"/admin/profil\">
                                    <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Profil
                                </a>
                                <a class=\"dropdown-item\" href=\"/admin/parametre\">
                                    <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Paramètres
                                </a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" data-target=\"#logoutModal\" data-toggle=\"modal\" href=\"#\">
                                    <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Déconnexion
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>

                <!-- End of Topbar -->

                <div class=\"container-fluid\">

                    <h1 class=\"h3 mb-0 text-gray-800\">Gestion des activites</h1>



                    <div id=\"table-actions\" class=\"d-flex align-items-center justify-content-between mb-4\">
                        <div class=\"d-flex\">
                            <button id=\"btPrint\" onclick=\"createPDF()\" class=\"export-pdf-btn\">
                                <i class=\"fas fa-file-pdf\"></i> Export PDF
                            </button>
                            <input type=\"text\" id=\"myInput\" onkeyup=\"myFunction()\" placeholder=\"Search ...\" class=\"form-control\">
                        </div>
                        <div>
                            <a href=\"{{ path('app_equipement_back_new') }}\" class=\"btn btn-success btn-icon-split ml-auto\">
                                <i class=\"fas fa-plus\"></i> Create New
                            </a>
                        </div>

                    </div>
                    {% endblock %}

                    {% block body %}
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-hover\">
                            <thead class=\"thead-dark\">
                                <tr>
                                    <th scope=\"col\">Id</th>
                                    <th scope=\"col\">Parking</th>
                                    <th scope=\"col\">NbrChambre</th>
                                    <th scope=\"col\">Internet</th>
                                    <th scope=\"col\">Climatisation</th>
                                    <th scope=\"col\">TypesDeChambre</th>
                                    <th scope=\"col\">Images</th>
                                    <th scope=\"col\">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for equipement in equipements %}
                                <tr>
                                    <td>{{ equipement.id }}</td>
                                    <td>{{ equipement.Parking ? 'Yes' : 'No' }}</td>
                                    <td>{{ equipement.nbrChambre }}</td>
                                    <td>{{ equipement.internet ? 'Yes' : 'No' }}</td>
                                    <td>{{ equipement.climatisation ? 'Yes' : 'No' }}</td>
                                    <td>{{ equipement.TypesDeChambre }}</td>
                                    <td>
                                        {% if equipement.image %}
                                        <img src=\"{{ asset('uploads/' ~ equipement.image) }}\" alt=\"Image\" width=\"100\" height=\"100\">
                                        {% else %}
                                        <span>Aucune image</span>
                                        {% endif %}
                                    </td>
                                    <td>
                                        <a href=\"{{ path('app_equipement_back_show', {'id': equipement.id}) }}\" class=\"btn btn-info btn-sm\"><i class=\"fas fa-eye\"></i></a>
                                        <a href=\"{{ path('app_equipement_back_edit', {'id': equipement.id}) }}\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-edit\"></i></a>
                                        <a href=\"{{ path('app_equipement_back_delete', {'id': equipement.id}) }}\" class=\"btn btn-danger btn-sm\"><i class=\"fas fa-trash-alt\"></i></a>
                                    </td>
                                </tr>
                                {% else %}
                                <tr>
                                    <td colspan=\"7\">No records found</td>
                                </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                    <script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById(\"myInput\");
            filter = input.value.toUpperCase();
            table = document.getElementById(\"activitee-table\");
            tr = table.getElementsByTagName(\"tr\");
            
            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName(\"td\")[5]; // Colonne de l'état (index 5)
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
        </script
 {% endblock %}
", "equipement_back/index.html.twig", "C:\\Users\\ASUS\\Desktop\\PiDev\\Projet-Pi-tfarhida\\templates\\equipement_back\\index.html.twig");
    }
}
