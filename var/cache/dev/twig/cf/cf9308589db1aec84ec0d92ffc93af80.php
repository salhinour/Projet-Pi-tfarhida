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

/* categorie_back_c/index.html.twig */
class __TwigTemplate_d7ba70a62d0a009aa1e458424ec783d7 extends Template
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
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie_back_c/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie_back_c/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "categorie_back_c/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Categorie back index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div>
<div class=\"container text-center\">
    <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_back_c_new");
        echo "\" class=\"btn btn-primary btn-icon-split\">
        <i class=\"fas fa-plus\"></i> Create New
    </a>
</div>

        </div>
    <h1>Categorie affichage</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Description</th>
                <th>Type_categorie</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 27, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 28
            echo "            <tr>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "description", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "typeCategorie", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
               
                  <td>
                <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_back_c_show", ["id" => twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\" class=\"btn-icon-split\">
                    <i class=\"fas fa-eye text-primary\"></i>
                </a>
                <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_back_c_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\" class=\"btn-icon-split\">
                    <i class=\"fas fa-edit text-secondary\"></i>
                </a>
            </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 43
            echo "            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>
<div class=\"pagination-container\">
    <ul class=\"pagination\">
        ";
        // line 51
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 51, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 51) > 1)) {
            // line 52
            echo "            <li class=\"page-item\">
                <a class=\"page-link\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_back_c_index", ["page" => (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 53, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 53) - 1)]), "html", null, true);
            echo "\" aria-label=\"Previous\">
                    <span aria-hidden=\"true\">&laquo;</span>
                    <span class=\"sr-only\">Previous</span>
                </a>
            </li>
        ";
        }
        // line 59
        echo "
        ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 60, $this->source); })()), "pageCount", [], "any", false, false, false, 60)));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 61
            echo "            <li class=\"page-item ";
            if (($context["page"] == twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 61, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 61))) {
                echo "active";
            }
            echo "\">
                <a class=\"page-link\" href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_back_c_index", ["page" => $context["page"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["page"], "html", null, true);
            echo "</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
        ";
        // line 66
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 66, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 66) < twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 66, $this->source); })()), "pageCount", [], "any", false, false, false, 66))) {
            // line 67
            echo "            <li class=\"page-item\">
                <a class=\"page-link\" href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_back_c_index", ["page" => (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 68, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 68) + 1)]), "html", null, true);
            echo "\" aria-label=\"Next\">
                    <span aria-hidden=\"true\">&raquo;</span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </li>
        ";
        }
        // line 74
        echo "    </ul>
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
        return "categorie_back_c/index.html.twig";
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
        return array (  223 => 74,  214 => 68,  211 => 67,  209 => 66,  206 => 65,  195 => 62,  188 => 61,  184 => 60,  181 => 59,  172 => 53,  169 => 52,  167 => 51,  161 => 47,  152 => 43,  141 => 37,  135 => 34,  129 => 31,  125 => 30,  121 => 29,  118 => 28,  113 => 27,  92 => 9,  88 => 7,  78 => 6,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/layout.html.twig\" %}
{# {% extends 'baseback.html.twig' %} #}

{% block title %}Categorie back index{% endblock %}

{% block body %}
<div>
<div class=\"container text-center\">
    <a href=\"{{ path('app_categorie_back_c_new') }}\" class=\"btn btn-primary btn-icon-split\">
        <i class=\"fas fa-plus\"></i> Create New
    </a>
</div>

        </div>
    <h1>Categorie affichage</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Description</th>
                <th>Type_categorie</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for categorie in pagination %}
            <tr>
                <td>{{ categorie.id }}</td>
                <td>{{ categorie.description }}</td>
                <td>{{ categorie.typeCategorie }}</td>
               
                  <td>
                <a href=\"{{ path('app_categorie_back_c_show', {'id': categorie.id}) }}\" class=\"btn-icon-split\">
                    <i class=\"fas fa-eye text-primary\"></i>
                </a>
                <a href=\"{{ path('app_categorie_back_c_edit', {'id': categorie.id}) }}\" class=\"btn-icon-split\">
                    <i class=\"fas fa-edit text-secondary\"></i>
                </a>
            </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
<div class=\"pagination-container\">
    <ul class=\"pagination\">
        {% if pagination.currentPageNumber > 1 %}
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"{{ path('app_categorie_back_c_index', {'page': pagination.currentPageNumber - 1}) }}\" aria-label=\"Previous\">
                    <span aria-hidden=\"true\">&laquo;</span>
                    <span class=\"sr-only\">Previous</span>
                </a>
            </li>
        {% endif %}

        {% for page in range(1, pagination.pageCount) %}
            <li class=\"page-item {% if page == pagination.currentPageNumber %}active{% endif %}\">
                <a class=\"page-link\" href=\"{{ path('app_categorie_back_c_index', {'page': page}) }}\">{{ page }}</a>
            </li>
        {% endfor %}

        {% if pagination.currentPageNumber < pagination.pageCount %}
            <li class=\"page-item\">
                <a class=\"page-link\" href=\"{{ path('app_categorie_back_c_index', {'page': pagination.currentPageNumber + 1}) }}\" aria-label=\"Next\">
                    <span aria-hidden=\"true\">&raquo;</span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </li>
        {% endif %}
    </ul>
</div>
{% endblock %}
", "categorie_back_c/index.html.twig", "C:\\Users\\ASUS\\Desktop\\PiDev\\Projet-Pi-tfarhida\\templates\\categorie_back_c\\index.html.twig");
    }
}
