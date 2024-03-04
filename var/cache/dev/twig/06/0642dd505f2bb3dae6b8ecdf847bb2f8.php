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

/* admin/dashboard/index.html.twig */
class __TwigTemplate_30179bcfccaca04420c3278bbf612ca5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'title_h1' => [$this, 'block_title_h1'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/dashboard/index.html.twig", 1);
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

        // line 4
        echo "    Tableau de bord
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_title_h1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title_h1"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title_h1"));

        // line 8
        echo "    Tableau de bord
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
        <!-- Number of Users Card -->
        <div class=\"col-xl-3 col-md-6 mb-4 mt-3\">
            <div class=\"card border-left-primary shadow h-100 py-2\">
                <div class=\"card-body\">
                    <div class=\"row no-gutters align-items-center\">
                        <div class=\"col mr-2\">
                            <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                Nombre d'utilisateurs total
                            </div>
                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-auto\">
                            <i class=\"fas fa-user fa-2x text-gray-300\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Number of Admins Card -->
        <div class=\"col-xl-3 col-md-6 mb-4 mt-3\">
            <div class=\"card border-left-success shadow h-100 py-2\">
                <div class=\"card-body\">
                    <div class=\"row no-gutters align-items-center\">
                        <div class=\"col mr-2\">
                            <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">
                                Nombre des administrateurs
                            </div>
                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-auto\">
                            <i class=\"fas fa-user-shield fa-2x text-gray-300\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Number of Collaborators Card -->
        <div class=\"col-xl-3 col-md-6 mb-4 mt-3\">
            <div class=\"card border-left-info shadow h-100 py-2\">
                <div class=\"card-body\">
                    <div class=\"row no-gutters align-items-center\">
                        <div class=\"col mr-2\">
                            <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">
                                Nombre de Collaborateurs
                            </div>
                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["collab"]) || array_key_exists("collab", $context) ? $context["collab"] : (function () { throw new RuntimeError('Variable "collab" does not exist.', 61, $this->source); })()), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-auto\">
                            <i class=\"fas fa-user-friends fa-2x text-gray-300\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Number of Utilisateur Card -->
        <div class=\"col-xl-3 col-md-6 mb-4 mt-3\">
            <div class=\"card border-left-warning shadow h-100 py-2\">
                <div class=\"card-body\">
                    <div class=\"row no-gutters align-items-center\">
                        <div class=\"col mr-2\">
                            <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">
                                Nombre des utilisateurs
                            </div>
                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 80, $this->source); })()), "html", null, true);
        echo "</div>
                        </div>
                        <div class=\"col-auto\">
                            <i class=\"fas fa-users fa-2x text-gray-300\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistics Section -->
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card shadow mb-4\">
                <div class=\"card-header py-3\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">Statistiques</h6>
                </div>
                <div class=\"card-body\">
                    <div class=\"doughnut-chart\">
                        <canvas id=\"doughnutChart\"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Style -->
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        background-color: #f0f0f0;
    }

    .doughnut-chart {
        width: 400px;
        height: 400px;
        margin: 0 auto;
    }
</style>

<!-- Script Chart.js -->
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
    const data = {
        labels: ['Admin', 'Collaborateur', 'Utilisateur'],
        datasets: [{
            label: 'Statistiques',
            data: [";
        // line 130
        echo twig_escape_filter($this->env, (isset($context["adminPercentage"]) || array_key_exists("adminPercentage", $context) ? $context["adminPercentage"] : (function () { throw new RuntimeError('Variable "adminPercentage" does not exist.', 130, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["collabPercentage"]) || array_key_exists("collabPercentage", $context) ? $context["collabPercentage"] : (function () { throw new RuntimeError('Variable "collabPercentage" does not exist.', 130, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["utilisateurPercentage"]) || array_key_exists("utilisateurPercentage", $context) ? $context["utilisateurPercentage"] : (function () { throw new RuntimeError('Variable "utilisateurPercentage" does not exist.', 130, $this->source); })()), "html", null, true);
        echo "],
            backgroundColor: [
                'rgba(40, 167, 69, 0.5)', // Couleur de la carte Admin
                'rgba(23, 162, 184, 0.5)', // Couleur de la carte Collaborateur
                'rgba(255, 193, 7, 0.5)', // Couleur de la carte Utilisateur
            ],
            borderColor: [
                'rgba(40, 167, 69, 1)',
                'rgba(23, 162, 184, 1)',
                'rgba(255, 193, 7, 1)',
            ],
            borderWidth: 1
        }]
    };

    const config = {
        type: 'doughnut',
        data: data,
        options: {
            plugins: {
                legend: {
                    position: 'bottom',
                },
            },
        }
    };

    var doughnutChart = new Chart(
        document.getElementById('doughnutChart'),
        config
    );
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
        return "admin/dashboard/index.html.twig";
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
        return array (  244 => 130,  191 => 80,  169 => 61,  147 => 42,  125 => 23,  112 => 12,  102 => 11,  91 => 8,  81 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/layout.html.twig\" %}

{% block title %}
    Tableau de bord
{% endblock %}

{% block title_h1 %}
    Tableau de bord
{% endblock %}

{% block body %}
<div class=\"container-fluid\">
    <div class=\"row\">
        <!-- Number of Users Card -->
        <div class=\"col-xl-3 col-md-6 mb-4 mt-3\">
            <div class=\"card border-left-primary shadow h-100 py-2\">
                <div class=\"card-body\">
                    <div class=\"row no-gutters align-items-center\">
                        <div class=\"col mr-2\">
                            <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                Nombre d'utilisateurs total
                            </div>
                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{ users }}</div>
                        </div>
                        <div class=\"col-auto\">
                            <i class=\"fas fa-user fa-2x text-gray-300\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Number of Admins Card -->
        <div class=\"col-xl-3 col-md-6 mb-4 mt-3\">
            <div class=\"card border-left-success shadow h-100 py-2\">
                <div class=\"card-body\">
                    <div class=\"row no-gutters align-items-center\">
                        <div class=\"col mr-2\">
                            <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">
                                Nombre des administrateurs
                            </div>
                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{ admin }}</div>
                        </div>
                        <div class=\"col-auto\">
                            <i class=\"fas fa-user-shield fa-2x text-gray-300\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Number of Collaborators Card -->
        <div class=\"col-xl-3 col-md-6 mb-4 mt-3\">
            <div class=\"card border-left-info shadow h-100 py-2\">
                <div class=\"card-body\">
                    <div class=\"row no-gutters align-items-center\">
                        <div class=\"col mr-2\">
                            <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">
                                Nombre de Collaborateurs
                            </div>
                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{ collab }}</div>
                        </div>
                        <div class=\"col-auto\">
                            <i class=\"fas fa-user-friends fa-2x text-gray-300\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Number of Utilisateur Card -->
        <div class=\"col-xl-3 col-md-6 mb-4 mt-3\">
            <div class=\"card border-left-warning shadow h-100 py-2\">
                <div class=\"card-body\">
                    <div class=\"row no-gutters align-items-center\">
                        <div class=\"col mr-2\">
                            <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">
                                Nombre des utilisateurs
                            </div>
                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{ utilisateur }}</div>
                        </div>
                        <div class=\"col-auto\">
                            <i class=\"fas fa-users fa-2x text-gray-300\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistics Section -->
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card shadow mb-4\">
                <div class=\"card-header py-3\">
                    <h6 class=\"m-0 font-weight-bold text-primary\">Statistiques</h6>
                </div>
                <div class=\"card-body\">
                    <div class=\"doughnut-chart\">
                        <canvas id=\"doughnutChart\"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Style -->
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        background-color: #f0f0f0;
    }

    .doughnut-chart {
        width: 400px;
        height: 400px;
        margin: 0 auto;
    }
</style>

<!-- Script Chart.js -->
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
    const data = {
        labels: ['Admin', 'Collaborateur', 'Utilisateur'],
        datasets: [{
            label: 'Statistiques',
            data: [{{ adminPercentage }}, {{ collabPercentage }}, {{ utilisateurPercentage }}],
            backgroundColor: [
                'rgba(40, 167, 69, 0.5)', // Couleur de la carte Admin
                'rgba(23, 162, 184, 0.5)', // Couleur de la carte Collaborateur
                'rgba(255, 193, 7, 0.5)', // Couleur de la carte Utilisateur
            ],
            borderColor: [
                'rgba(40, 167, 69, 1)',
                'rgba(23, 162, 184, 1)',
                'rgba(255, 193, 7, 1)',
            ],
            borderWidth: 1
        }]
    };

    const config = {
        type: 'doughnut',
        data: data,
        options: {
            plugins: {
                legend: {
                    position: 'bottom',
                },
            },
        }
    };

    var doughnutChart = new Chart(
        document.getElementById('doughnutChart'),
        config
    );
</script>


{% endblock %}
", "admin/dashboard/index.html.twig", "C:\\Users\\ASUS\\PiProjecttt\\templates\\admin\\dashboard\\index.html.twig");
    }
}
