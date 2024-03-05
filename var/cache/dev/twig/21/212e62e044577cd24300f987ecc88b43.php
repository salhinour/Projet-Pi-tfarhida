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

/* reclamation/show.html.twig */
class __TwigTemplate_c6a2b20182312058a4347a289a2b200c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'styles' => [$this, 'block_styles'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/show.html.twig"));

        $this->parent = $this->loadTemplate("home/base.html.twig", "reclamation/show.html.twig", 1);
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
        echo "<div class=\"container\">
    <h1 class=\"text-center mb-5\">Reclamation Details</h1>

    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card\">
                <div class=\"card-header bg-primary text-white\">
                    <h5 class=\"card-title mb-0\">Informations de la réclamation</h5>
                </div>
                <div class=\"card-body\">
                    <table class=\"table\">
                        <tbody>
                            <tr>
                                <th scope=\"row\">Id</th>
                                <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
                            </tr>
                             <tr>
                                <th>Titre</th>
                                <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 21, $this->source); })()), "titre", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th>Type_de_reclamation</th>
                                <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 25, $this->source); })()), "type", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">Description</th>
                                <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 29, $this->source); })()), "descriptionReclamation", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">Date</th>
                                <td>";
        // line 33
        ((twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 33, $this->source); })()), "date", [], "any", false, false, false, 33)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 33, $this->source); })()), "date", [], "any", false, false, false, 33), "d-m-Y"), "html", null, true))) : (print ("")));
        echo "</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">Image</th>
                                <td>
                                    ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 38, $this->source); })()), "image", [], "any", false, false, false, 38)) {
            // line 39
            echo "                                        <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 39, $this->source); })()), "image", [], "any", false, false, false, 39))), "html", null, true);
            echo "\" alt=\"Image\" class=\"img-fluid\">
                                    ";
        } else {
            // line 41
            echo "                                        <span>No image available</span>
                                    ";
        }
        // line 43
        echo "                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row justify-content-center mt-4\">
        <div class=\"col-md-8\">
            <div class=\"card\">
                  <div class=\"card-header bg-primary text-white\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <h5 class=\"card-title mb-0\">Réponse de l'administrateur</h5>
                    </div>
                </div>
                <div class=\"card-body\">
                    ";
        // line 61
        if (twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 61, $this->source); })()), "Reponse", [], "any", false, false, false, 61)) {
            // line 62
            echo "                        <ul>
                            <li><strong>Id:</strong> ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 63, $this->source); })()), "Reponse", [], "any", false, false, false, 63), "id", [], "any", false, false, false, 63), "html", null, true);
            echo "</li>
                            <li><strong>Description:</strong> ";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 64, $this->source); })()), "Reponse", [], "any", false, false, false, 64), "description", [], "any", false, false, false, 64), "html", null, true);
            echo "</li>
                            <li><strong>Date:</strong> ";
            // line 65
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 65, $this->source); })()), "Reponse", [], "any", false, false, false, 65), "date", [], "any", false, false, false, 65)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 65, $this->source); })()), "Reponse", [], "any", false, false, false, 65), "date", [], "any", false, false, false, 65), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</li>
                        </ul>
                    ";
        } else {
            // line 68
            echo "                        <p class=\"text-muted\">Aucune réponse disponible pour cette réclamation.</p>
                    ";
        }
        // line 70
        echo "                </div>
            </div>
        </div>
    </div>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\" />

    <div class=\"row justify-content-center mt-4\">
        <div class=\"col-md-8\">
            <div class=\"d-flex justify-content-between\">
                ";
        // line 79
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 79, $this->source); })()), "Reponse", [], "any", false, false, false, 79))) {
            // line 80
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 80, $this->source); })()), "id", [], "any", false, false, false, 80)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Modifier</a>
                    <form action=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 81, $this->source); })()), "id", [], "any", false, false, false, 81)]), "html", null, true);
            echo "\" method=\"post\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cette réclamation?')\">
                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 83, $this->source); })()), "id", [], "any", false, false, false, 83))), "html", null, true);
            echo "\">
                        <button type=\"submit\" class=\"btn btn-danger\">Annuler la réclamation</button>
                    </form>
                ";
        } else {
            // line 87
            echo "                    <p class=\"text-muted\">Vous ne pouvez plus modifier ou supprimer cette réclamation .</p>
                ";
        }
        // line 89
        echo "                <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index");
        echo "\" class=\"btn btn-secondary\">Retour à la liste</a>
            </div>
        </div>
    </div>
</div>

<style>
    ";
        // line 96
        $this->displayBlock('styles', $context, $blocks);
        // line 110
        echo "</style>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 96
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        // line 97
        echo "    .card {
        border: none;
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: #007bff;
    }

    .btn {
        border-radius: 20px;
    }
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reclamation/show.html.twig";
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
        return array (  245 => 97,  235 => 96,  223 => 110,  221 => 96,  210 => 89,  206 => 87,  199 => 83,  194 => 81,  189 => 80,  187 => 79,  176 => 70,  172 => 68,  166 => 65,  162 => 64,  158 => 63,  155 => 62,  153 => 61,  133 => 43,  129 => 41,  123 => 39,  121 => 38,  113 => 33,  106 => 29,  99 => 25,  92 => 21,  85 => 17,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'home/base.html.twig' %}
{% block body %}
<div class=\"container\">
    <h1 class=\"text-center mb-5\">Reclamation Details</h1>

    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card\">
                <div class=\"card-header bg-primary text-white\">
                    <h5 class=\"card-title mb-0\">Informations de la réclamation</h5>
                </div>
                <div class=\"card-body\">
                    <table class=\"table\">
                        <tbody>
                            <tr>
                                <th scope=\"row\">Id</th>
                                <td>{{ reclamation.id }}</td>
                            </tr>
                             <tr>
                                <th>Titre</th>
                                <td>{{ reclamation.titre }}</td>
                            </tr>
                            <tr>
                                <th>Type_de_reclamation</th>
                                <td>{{ reclamation.type }}</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">Description</th>
                                <td>{{ reclamation.descriptionReclamation }}</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">Date</th>
                                <td>{{ reclamation.date ? reclamation.date|date('d-m-Y') : '' }}</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">Image</th>
                                <td>
                                    {% if reclamation.image %}
                                        <img src=\"{{ asset('uploads/' ~ reclamation.image) }}\" alt=\"Image\" class=\"img-fluid\">
                                    {% else %}
                                        <span>No image available</span>
                                    {% endif %}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row justify-content-center mt-4\">
        <div class=\"col-md-8\">
            <div class=\"card\">
                  <div class=\"card-header bg-primary text-white\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <h5 class=\"card-title mb-0\">Réponse de l'administrateur</h5>
                    </div>
                </div>
                <div class=\"card-body\">
                    {% if reclamation.Reponse %}
                        <ul>
                            <li><strong>Id:</strong> {{ reclamation.Reponse.id }}</li>
                            <li><strong>Description:</strong> {{ reclamation.Reponse.description }}</li>
                            <li><strong>Date:</strong> {{ reclamation.Reponse.date ? reclamation.Reponse.date|date('d-m-Y') : '' }}</li>
                        </ul>
                    {% else %}
                        <p class=\"text-muted\">Aucune réponse disponible pour cette réclamation.</p>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\" />

    <div class=\"row justify-content-center mt-4\">
        <div class=\"col-md-8\">
            <div class=\"d-flex justify-content-between\">
                {% if reclamation.Reponse is null %}
                    <a href=\"{{ path('app_reclamation_edit', {'id': reclamation.id}) }}\" class=\"btn btn-primary\">Modifier</a>
                    <form action=\"{{ path('app_reclamation_delete', {'id': reclamation.id}) }}\" method=\"post\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cette réclamation?')\">
                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reclamation.id) }}\">
                        <button type=\"submit\" class=\"btn btn-danger\">Annuler la réclamation</button>
                    </form>
                {% else %}
                    <p class=\"text-muted\">Vous ne pouvez plus modifier ou supprimer cette réclamation .</p>
                {% endif %}
                <a href=\"{{ path('app_reclamation_index') }}\" class=\"btn btn-secondary\">Retour à la liste</a>
            </div>
        </div>
    </div>
</div>

<style>
    {% block styles %}
    .card {
        border: none;
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: #007bff;
    }

    .btn {
        border-radius: 20px;
    }
    {% endblock %}
</style>

{% endblock %}
", "reclamation/show.html.twig", "C:\\Users\\ASUS\\Desktop\\PiDev\\Projet-Pi-tfarhida\\templates\\reclamation\\show.html.twig");
    }
}
