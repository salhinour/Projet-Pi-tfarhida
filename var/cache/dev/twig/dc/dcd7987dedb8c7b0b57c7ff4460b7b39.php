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
class __TwigTemplate_102e5a9890b3e0a6e66bd7cb2d0435b0 extends Template
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
        return "baseback.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie_back_c/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie_back_c/index.html.twig"));

        $this->parent = $this->loadTemplate("baseback.html.twig", "categorie_back_c/index.html.twig", 1);
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

        echo "Categorie back index";
        
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
        echo "<div>
<div class=\"container text-center\">
    <a href=\"";
        // line 8
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
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 27
            echo "            <tr>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "description", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "typeCategorie", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
               
                  <td>
                <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_back_c_show", ["id" => twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\" class=\"btn-icon-split\">
                    <i class=\"fas fa-eye text-primary\"></i>
                </a>
                <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_back_c_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\" class=\"btn-icon-split\">
                    <i class=\"fas fa-edit text-secondary\"></i>
                </a>
            </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </tbody>
    </table>
<div class=\"pagination-container\">
    <ul class=\"pagination\">
        ";
        // line 50
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 50, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 50) > 1)) {
            // line 51
            echo "            <li class=\"page-item\">
                <a class=\"page-link\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_back_c_index", ["page" => (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 52, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 52) - 1)]), "html", null, true);
            echo "\" aria-label=\"Previous\">
                    <span aria-hidden=\"true\">&laquo;</span>
                    <span class=\"sr-only\">Previous</span>
                </a>
            </li>
        ";
        }
        // line 58
        echo "
        ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 59, $this->source); })()), "pageCount", [], "any", false, false, false, 59)));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 60
            echo "            <li class=\"page-item ";
            if (($context["page"] == twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 60, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 60))) {
                echo "active";
            }
            echo "\">
                <a class=\"page-link\" href=\"";
            // line 61
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
        // line 64
        echo "
        ";
        // line 65
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 65, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 65) < twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 65, $this->source); })()), "pageCount", [], "any", false, false, false, 65))) {
            // line 66
            echo "            <li class=\"page-item\">
                <a class=\"page-link\" href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_back_c_index", ["page" => (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 67, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 67) + 1)]), "html", null, true);
            echo "\" aria-label=\"Next\">
                    <span aria-hidden=\"true\">&raquo;</span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </li>
        ";
        }
        // line 73
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
        return array (  223 => 73,  214 => 67,  211 => 66,  209 => 65,  206 => 64,  195 => 61,  188 => 60,  184 => 59,  181 => 58,  172 => 52,  169 => 51,  167 => 50,  161 => 46,  152 => 42,  141 => 36,  135 => 33,  129 => 30,  125 => 29,  121 => 28,  118 => 27,  113 => 26,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseback.html.twig' %}

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
", "categorie_back_c/index.html.twig", "C:\\Users\\ASUS\\PiProjecttt\\templates\\categorie_back_c\\index.html.twig");
    }
}
