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

/* reponse_back/index.html.twig */
class __TwigTemplate_261698d0874c41683ea8aec9460beaf6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse_back/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse_back/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "reponse_back/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        echo "    <div class=\"container\">
        <h1>Liste des Réponses</h1>

        <div class=\"table-responsive\">
            <table class=\"table table-striped\" id=\"myTable\">
                <thead class=\"thead-dark\">
                    <tr>
                        <th>ID</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reponses"]) || array_key_exists("reponses", $context) ? $context["reponses"] : (function () { throw new RuntimeError('Variable "reponses" does not exist.', 20, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 21
            echo "                        <tr>
                            <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                            <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "description", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                            <td>";
            // line 24
            ((twig_get_attribute($this->env, $this->source, $context["reponse"], "date", [], "any", false, false, false, 24)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "date", [], "any", false, false, false, 24), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                            <td>
                                
                                  <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_back_show", ["id" => twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\" class=\"btn btn-primary mr-2\">
                            <i class=\"fas fa-eye\"></i> 
                        </a>
                                <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_back_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\" class=\"btn btn-secondary\">Edit</a>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "                        <tr>
                            <td colspan=\"5\">No records found</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                </tbody>
            </table>
        </div>
 
        <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_back_new");
        echo "\" class=\"btn btn-success\">Create New</a>
    </div>

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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reponse_back/index.html.twig";
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
        return array (  136 => 42,  130 => 38,  121 => 34,  112 => 30,  106 => 27,  100 => 24,  96 => 23,  92 => 22,  89 => 21,  84 => 20,  68 => 6,  58 => 5,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends 'baseback.html.twig' %} #}
{% extends \"admin/layout.html.twig\" %}


{% block body %}
    <div class=\"container\">
        <h1>Liste des Réponses</h1>

        <div class=\"table-responsive\">
            <table class=\"table table-striped\" id=\"myTable\">
                <thead class=\"thead-dark\">
                    <tr>
                        <th>ID</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for reponse in reponses %}
                        <tr>
                            <td>{{ reponse.id }}</td>
                            <td>{{ reponse.description }}</td>
                            <td>{{ reponse.date ? reponse.date|date('Y-m-d') : '' }}</td>
                            <td>
                                
                                  <a href=\"{{  path('app_reponse_back_show', {'id': reponse.id}) }}\" class=\"btn btn-primary mr-2\">
                            <i class=\"fas fa-eye\"></i> 
                        </a>
                                <a href=\"{{ path('app_reponse_back_edit', {'id': reponse.id}) }}\" class=\"btn btn-secondary\">Edit</a>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"5\">No records found</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
 
        <a href=\"{{ path('app_reponse_back_new') }}\" class=\"btn btn-success\">Create New</a>
    </div>

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
{% endblock %}", "reponse_back/index.html.twig", "C:\\Users\\ASUS\\Desktop\\PiDev\\Projet-Pi-tfarhida\\templates\\reponse_back\\index.html.twig");
    }
}
