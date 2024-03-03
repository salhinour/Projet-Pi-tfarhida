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

/* activitee_back/_delete_form.html.twig */
class __TwigTemplate_70bfd42120f3cd539cc2d9ef21dd2b3a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activitee_back/_delete_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activitee_back/_delete_form.html.twig"));

        // line 1
        echo "<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@10\"></script>

<form id=\"deleteForm\" method=\"post\" action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activitee_back_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3)]), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["activitee"]) || array_key_exists("activitee", $context) ? $context["activitee"] : (function () { throw new RuntimeError('Variable "activitee" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4))), "html", null, true);
        echo "\">
    <button id=\"deleteButton\" class=\"btn btn-danger\">Delete</button>
</form>

<script>
    document.getElementById('deleteButton').addEventListener('click', function(event) {
        event.preventDefault();

        Swal.fire({
            title: 'Are you sure?',
            text: \"You won't be able to revert this!\",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('deleteForm').submit();

                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                );
            }
        });
    });
</script>





";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "activitee_back/_delete_form.html.twig";
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
        return array (  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@10\"></script>

<form id=\"deleteForm\" method=\"post\" action=\"{{ path('app_activitee_back_delete', {'id': activitee.id}) }}\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ activitee.id) }}\">
    <button id=\"deleteButton\" class=\"btn btn-danger\">Delete</button>
</form>

<script>
    document.getElementById('deleteButton').addEventListener('click', function(event) {
        event.preventDefault();

        Swal.fire({
            title: 'Are you sure?',
            text: \"You won't be able to revert this!\",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('deleteForm').submit();

                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                );
            }
        });
    });
</script>





", "activitee_back/_delete_form.html.twig", "C:\\Users\\ASUS\\PiProjecttt\\templates\\activitee_back\\_delete_form.html.twig");
    }
}
