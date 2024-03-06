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
class __TwigTemplate_a24aa1d11d1087d7dd7309f469081727 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'navBar' => [$this, 'block_navBar'],
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
    public function block_navBar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navBar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navBar"));

        // line 3
        echo "

<nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" href=\"index.html\">Tfarhida<span>Bon plan</span></a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"oi oi-menu\"></span> Menu
\t\t\t</button>

\t\t\t<div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t<li class=\"nav-item \"><a href=\"/\" class=\"nav-link\">Home</a></li>
\t\t\t\t\t<li class=\"nav-item \"><a  href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activitee_indexx");
        echo "\"class=\"nav-link\">Activites</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a  href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite");
        echo "\" class=\"nav-link\">Transports</a></li>
\t\t\t\t\t<li class=\"nav-item \"><a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logement_index");
        echo "\" class=\"nav-link\">Logements</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant_indexfront");
        echo "\" class=\"nav-link\">restaurants</a></li>
\t\t\t\t\t<li class=\"nav-item active\"><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index");
        echo "\" class=\"nav-link\">Reclamation</a></li>
                    <li <div id=\"google_translate_element\"></div> </li>

\t\t\t\t
\t\t\t
\t\t\t ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24)) {
            // line 25
            echo "\t\t\t   

\t\t\t\t ";
            // line 27
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 28
                echo "\t\t\t\t <p><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard_index");
                echo "\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Admin</span> </a> </p>
\t\t\t\t ";
            }
            // line 30
            echo "\t\t <li class=\"nav-item dropdown no-arrow \">
            <a aria-expanded=\"false\" aria-haspopup=\"true\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"userDropdown\" role=\"button\">
                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\"><i class=\"far fa-user text-primary mr-2 fa-2x \"></i>  ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "fullName", [], "any", false, false, false, 32), "html", null, true);
            echo "</span>
                            </a>
            <!-- Dropdown - User Information -->
            <div aria-labelledby=\"userDropdown\" class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\">
               
\t\t\t\t  <a class=\"dropdown-item\" href=\"/logement/mylogement\">
                    <i class=\"fas fa-list-ul text-gray-400\"></i>
                    Mes Logements
                </a>
                 <a class=\"dropdown-item\" href=\"/activitee\">
                    <i class=\"fas fa-list-ul text-gray-400\"></i>
                    Mes Activites
                </a>
              
                                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\"  href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\LogoutUrlExtension']->getLogoutPath("main"), "html", null, true);
            echo "\">
                    <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Déconnexion
                </a>
            </div>
\t\t\t</ul>
          
\t\t\t\t  ";
            // line 56
            echo "            ";
            // line 57
            echo "\t\t\t";
        } else {
            // line 58
            echo "\t\t\t<p><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Login</span> </a> </p>
\t\t\t<p><a href=\"";
            // line 59
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration");
            echo "\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Register</span> </a> </p>
            ";
        }
        // line 61
        echo "\t\t</div>
\t\t</div>
\t</nav>
<body>
\t
\t<!-- END nav -->
\t
<div class=\"hero-wrap js-fullheight\" style=\"background-image: url('/images/reclamation.jpg');\">
\t\t<div class=\"overlay\"></div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row no-gutters slider-text js-fullheight align-items-center\" data-scrollax-parent=\"true\">
\t\t\t\t<div class=\"col-md-7 ftco-animate\">
\t\t\t\t\t<span class=\"subheading\">Bienvenue dans Tfarhida</span>
\t\t\t\t\t<h1 class=\"mb-4\">Découvrir ton bon plan avec nous</h1>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 81
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 82
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
        // line 156
        if ((twig_length_filter($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 156, $this->source); })())) > 0)) {
            // line 157
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 157, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
                // line 158
                echo "            <tr class=\"reclamation-row\" data-type=\"";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "type", [], "any", false, false, false, 158)), "html", null, true);
                echo "\">
                <td>";
                // line 159
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 159), "html", null, true);
                echo "</td>
                <td>";
                // line 160
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "titre", [], "any", false, false, false, 160), "html", null, true);
                echo "</td>
                <td>";
                // line 161
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "type", [], "any", false, false, false, 161), "html", null, true);
                echo "</td>
                <td>";
                // line 162
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "descriptionReclamation", [], "any", false, false, false, 162), "html", null, true);
                echo "</td>
                <td>";
                // line 163
                ((twig_get_attribute($this->env, $this->source, $context["reclamation"], "date", [], "any", false, false, false, 163)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "date", [], "any", false, false, false, 163), "d-m-Y"), "html", null, true))) : (print ("")));
                echo "</td>
                <td>
                    ";
                // line 165
                if (twig_get_attribute($this->env, $this->source, $context["reclamation"], "image", [], "any", false, false, false, 165)) {
                    // line 166
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["reclamation"], "image", [], "any", false, false, false, 166))), "html", null, true);
                    echo "\" alt=\"Image\" width=\"100\" height=\"100\">
                    ";
                } else {
                    // line 168
                    echo "                        <span>Aucune image</span>
                    ";
                }
                // line 170
                echo "                </td>
                <td>
                    <a href=\"";
                // line 172
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 172)]), "html", null, true);
                echo "\"><i class=\"fas fa-eye\"></i></a>
                    ";
                // line 173
                if ((null === twig_get_attribute($this->env, $this->source, $context["reclamation"], "Reponse", [], "any", false, false, false, 173))) {
                    // line 174
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 174)]), "html", null, true);
                    echo "\"><i class=\"fas fa-edit\"></i></a>
                        <form action=\"";
                    // line 175
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 175)]), "html", null, true);
                    echo "\" method=\"post\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cette réclamation?')\">
                            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 177
                    echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 177))), "html", null, true);
                    echo "\">
                            <button type=\"submit\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réclamation?')\"><i class=\"fas fa-trash-alt\"></i></button>
                        </form>
                    ";
                }
                // line 181
                echo "                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 184
            echo "    ";
        }
        // line 185
        echo "</tbody>

        </table>

        <div class=\"pagination-container\">
            <ul class=\"pagination\">
                ";
        // line 191
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 191, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 191) > 1)) {
            // line 192
            echo "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
            // line 193
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index", ["page" => (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 193, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 193) - 1)]), "html", null, true);
            echo "\" aria-label=\"Previous\">
                            <span aria-hidden=\"true\">&laquo;</span>
                            <span class=\"sr-only\">Previous</span>
                        </a>
                    </li>
                ";
        }
        // line 199
        echo "
                ";
        // line 200
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 200, $this->source); })()), "pageCount", [], "any", false, false, false, 200)));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 201
            echo "                    <li class=\"page-item ";
            if (($context["page"] == twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 201, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 201))) {
                echo "active";
            }
            echo "\">
                        <a class=\"page-link\" href=\"";
            // line 202
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
        // line 205
        echo "
                ";
        // line 206
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 206, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 206) < twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 206, $this->source); })()), "pageCount", [], "any", false, false, false, 206))) {
            // line 207
            echo "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
            // line 208
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index", ["page" => (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 208, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 208) + 1)]), "html", null, true);
            echo "\" aria-label=\"Next\">
                            <span aria-hidden=\"true\">&raquo;</span>
                            <span class=\"sr-only\">Next</span>
                        </a>
                    </li>
                ";
        }
        // line 214
        echo "            </ul>
        </div>
        <a href=\"";
        // line 216
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
    <script src=\"script.js\"></script>
      <script type=\"text/javascript\">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement(
                {pageLanguage: 'en'},
                'google_translate_element'
            );
        } 
  </script>
  <script type=\"text/javascript\" src=\"https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit\"></script>
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
        return array (  434 => 216,  430 => 214,  421 => 208,  418 => 207,  416 => 206,  413 => 205,  402 => 202,  395 => 201,  391 => 200,  388 => 199,  379 => 193,  376 => 192,  374 => 191,  366 => 185,  363 => 184,  355 => 181,  348 => 177,  343 => 175,  338 => 174,  336 => 173,  332 => 172,  328 => 170,  324 => 168,  318 => 166,  316 => 165,  311 => 163,  307 => 162,  303 => 161,  299 => 160,  295 => 159,  290 => 158,  285 => 157,  283 => 156,  207 => 82,  197 => 81,  168 => 61,  163 => 59,  158 => 58,  155 => 57,  153 => 56,  143 => 47,  125 => 32,  121 => 30,  115 => 28,  113 => 27,  109 => 25,  107 => 24,  99 => 19,  95 => 18,  91 => 17,  87 => 16,  83 => 15,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'home/base.html.twig' %}
{% block navBar %}


<nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" href=\"index.html\">Tfarhida<span>Bon plan</span></a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"oi oi-menu\"></span> Menu
\t\t\t</button>

\t\t\t<div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t<li class=\"nav-item \"><a href=\"/\" class=\"nav-link\">Home</a></li>
\t\t\t\t\t<li class=\"nav-item \"><a  href=\"{{ path('app_activitee_indexx') }}\"class=\"nav-link\">Activites</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a  href=\"{{ path('app_activite') }}\" class=\"nav-link\">Transports</a></li>
\t\t\t\t\t<li class=\"nav-item \"><a href=\"{{ path('app_logement_index') }}\" class=\"nav-link\">Logements</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"{{ path('app_restaurant_indexfront') }}\" class=\"nav-link\">restaurants</a></li>
\t\t\t\t\t<li class=\"nav-item active\"><a href=\"{{ path('app_reclamation_index') }}\" class=\"nav-link\">Reclamation</a></li>
                    <li <div id=\"google_translate_element\"></div> </li>

\t\t\t\t
\t\t\t
\t\t\t {% if app.user %}
\t\t\t   

\t\t\t\t {% if is_granted('ROLE_ADMIN') %}
\t\t\t\t <p><a href=\"{{ path('admin_dashboard_index') }}\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Admin</span> </a> </p>
\t\t\t\t {% endif %}
\t\t <li class=\"nav-item dropdown no-arrow \">
            <a aria-expanded=\"false\" aria-haspopup=\"true\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"userDropdown\" role=\"button\">
                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\"><i class=\"far fa-user text-primary mr-2 fa-2x \"></i>  {{ app.user.fullName }}</span>
                            </a>
            <!-- Dropdown - User Information -->
            <div aria-labelledby=\"userDropdown\" class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\">
               
\t\t\t\t  <a class=\"dropdown-item\" href=\"/logement/mylogement\">
                    <i class=\"fas fa-list-ul text-gray-400\"></i>
                    Mes Logements
                </a>
                 <a class=\"dropdown-item\" href=\"/activitee\">
                    <i class=\"fas fa-list-ul text-gray-400\"></i>
                    Mes Activites
                </a>
              
                                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\"  href=\"{{ logout_path('main') }}\">
                    <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Déconnexion
                </a>
            </div>
\t\t\t</ul>
          
\t\t\t\t  {# <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\"><i class=\"far fa-user text-primary mr-2 fa-2x \"></i>
\t\t\t\t  {{ app.user.fullName }}</span> #}
            {# <p><a href=\"{{ logout_path('main') }}\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Logout</span> </a> </p> #}
\t\t\t{% else %}
\t\t\t<p><a href=\"{{ path('login') }}\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Login</span> </a> </p>
\t\t\t<p><a href=\"{{ path('registration') }}\" class=\"btn btn-primary mr-md-4 py-3 px-4\"><span class=\"ion-ios-arrow-forward\">Register</span> </a> </p>
            {% endif %}
\t\t</div>
\t\t</div>
\t</nav>
<body>
\t
\t<!-- END nav -->
\t
<div class=\"hero-wrap js-fullheight\" style=\"background-image: url('/images/reclamation.jpg');\">
\t\t<div class=\"overlay\"></div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row no-gutters slider-text js-fullheight align-items-center\" data-scrollax-parent=\"true\">
\t\t\t\t<div class=\"col-md-7 ftco-animate\">
\t\t\t\t\t<span class=\"subheading\">Bienvenue dans Tfarhida</span>
\t\t\t\t\t<h1 class=\"mb-4\">Découvrir ton bon plan avec nous</h1>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
\t{% endblock %}
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
    <script src=\"script.js\"></script>
      <script type=\"text/javascript\">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement(
                {pageLanguage: 'en'},
                'google_translate_element'
            );
        } 
  </script>
  <script type=\"text/javascript\" src=\"https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit\"></script>
{% endblock %}
", "reclamation/index.html.twig", "C:\\Users\\ASUS\\Desktop\\PiDev\\Projet-Pi-tfarhida\\templates\\reclamation\\index.html.twig");
    }
}
