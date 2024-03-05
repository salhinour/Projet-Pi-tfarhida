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

/* equipement/_form.html.twig */
class __TwigTemplate_27e60e00030bbc93daa5a7e9c3dbafff extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipement/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipement/_form.html.twig"));

        // line 63
        echo " ";
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), ["bootstrap_5_layout.html.twig"], true);
        // line 64
        echo "
";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "id" => "myForm"]]);
        echo "
    ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), 'widget');
        echo "
    <button class=\"btn\">";
        // line 67
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 67, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), 'form_end');
        echo "

<script>
    document.getElementById('myForm').addEventListener('submit', function(event) {
        // Prevent form submission

        // Check if any field is empty
        var formFields = this.querySelectorAll('input, select, textarea');
        var isEmpty = false;

        formFields.forEach(function(field) {
            if (!field.value.trim()) {
                isEmpty = true;
            }
        });

        if (isEmpty) {
            // Show error message if fields are empty
            Swal.fire({
                title: 'Check Your Fields!',
                text: 'Please fill in all the required fields.',
                icon: 'error'
            });
        } else {
            // Fields are not empty, proceed with submission
            // Submit the form
            this.submit();

            // Show success message after form submission
            Swal.fire({
                title: 'Added Successfully!',
                text: 'Your item has been added successfully.',
                icon: 'success'
            });
        }
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
        return "equipement/_form.html.twig";
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
        return array (  61 => 68,  57 => 67,  53 => 66,  49 => 65,  46 => 64,  43 => 63,);
    }

    public function getSourceContext()
    {
        return new Source("{# 
{{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
    <div class=\"form-group\">
        {{ form_label(form.Parking) }}
        {{ form_widget(form.Parking, {'attr': {'class': 'form-control' ~ (form_errors(form.Parking)|length > 0 ? ' is-invalid' : '')}}) }}
        {% if form_errors(form.Parking)|length > 0 %}
            <div class=\"invalid-feedback\">
                {{ form_errors(form.Parking)|first }}
                {{ 'vous devez mettre le Parking!!!'|trans }}

            </div>
        {% endif %}
    </div>
    <div class=\"form-group\">
        {{ form_label(form.internet) }}
        {{ form_widget(form.internet, {'attr': {'class': 'form-control' ~ (form_errors(form.internet)|length > 0 ? ' is-invalid' : '')}}) }}
        {% if form_errors(form.internet)|length > 0 %}
            <div class=\"invalid-feedback\">
                {{ form_errors(form.internet)|first }}
                {{ 'vous devez mettre le Internet!!!'|trans }}

            </div>
        {% endif %}
    </div>
    <div class=\"form-group\">
        {{ form_label(form.climatisation) }}
        {{ form_widget(form.climatisation, {'attr': {'class': 'form-control' ~ (form_errors(form.climatisation)|length > 0 ? ' is-invalid' : '')}}) }}
        {% if form_errors(form.climatisation)|length > 0 %}
            <div class=\"invalid-feedback\">
                {{ form_errors(form.climatisation)|first }}
                {{ 'vous devez mettre  !!!'|trans }}

            </div>
        {% endif %}
    </div>
    <div class=\"form-group\">
        {{ form_label(form.nbrChambre) }}
        {{ form_widget(form.nbrChambre, {'attr': {'class': 'form-control' ~ (form_errors(form.nbrChambre)|length > 0 ? ' is-invalid' : '')}}) }}
        {% if form_errors(form.nbrChambre)|length > 0 %}
            <div class=\"invalid-feedback\">
                {{ form_errors(form.nbrChambre)|first }}
                {{ 'vous devez mettre le nombre de chambre!!!'|trans }}
            </div>
          
        {% endif %}
    </div>
   
    <div class=\"form-group\">
        {{ form_label(form.TypesDeChambre) }}
        {{ form_widget(form.TypesDeChambre, {'attr': {'class': 'form-control' ~ (form_errors(form.TypesDeChambre)|length > 0 ? ' is-invalid' : '')}}) }}
       
    </div>
     <div class=\"form-group\">
        {{ form_label(form.Description) }}
        {{ form_widget(form.Description, {'attr': {'class': 'form-control' ~ (form_errors(form.Description)|length > 0 ? ' is-invalid' : '')}}) }}
       
    </div>
    <button class=\"btn\">{{ button_label|default('Save') }}</button>
   

{{ form_end(form) }}
 #}
 {% form_theme form 'bootstrap_5_layout.html.twig' %}

{{ form_start(form, {'attr': {'novalidate': 'novalidate', 'id': 'myForm'}}) }}
    {{ form_widget(form) }}
    <button class=\"btn\">{{ button_label|default('Save') }}</button>
{{ form_end(form) }}

<script>
    document.getElementById('myForm').addEventListener('submit', function(event) {
        // Prevent form submission

        // Check if any field is empty
        var formFields = this.querySelectorAll('input, select, textarea');
        var isEmpty = false;

        formFields.forEach(function(field) {
            if (!field.value.trim()) {
                isEmpty = true;
            }
        });

        if (isEmpty) {
            // Show error message if fields are empty
            Swal.fire({
                title: 'Check Your Fields!',
                text: 'Please fill in all the required fields.',
                icon: 'error'
            });
        } else {
            // Fields are not empty, proceed with submission
            // Submit the form
            this.submit();

            // Show success message after form submission
            Swal.fire({
                title: 'Added Successfully!',
                text: 'Your item has been added successfully.',
                icon: 'success'
            });
        }
    });
</script>
", "equipement/_form.html.twig", "C:\\Users\\ASUS\\Desktop\\PiDev\\Projet-Pi-tfarhida\\templates\\equipement\\_form.html.twig");
    }
}
