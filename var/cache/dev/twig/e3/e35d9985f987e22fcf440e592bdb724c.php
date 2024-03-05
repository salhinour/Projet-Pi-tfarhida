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

/* trajet_controller_back/_form.html.twig */
class __TwigTemplate_7212eef71980f365d63c85216f828307 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trajet_controller_back/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trajet_controller_back/_form.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), ["bootstrap_5_layout.html.twig"], true);
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "id" => "myForm"]]);
        echo "
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'widget');
        echo "
    <button class=\"btn btn-success float-left mr-2\" type=\"submit\">";
        // line 4
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 4, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), 'form_end');
        echo "

";
        // line 7
        if ((((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 7, $this->source); })()) == "add") || ((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 7, $this->source); })()) == "edit"))) {
            // line 8
            echo "    <script>
        document.getElementById('myForm').addEventListener('submit', function(event) {
           

            // Check if any field is empty
            var formFields = this.querySelectorAll('input, select, textarea');
            var isEmpty = false;

            formFields.forEach(function(field) {
                if (!field.value.trim()) {
                    isEmpty = true;
                }
            });

            if (isEmpty) {
                Swal.fire({
                    title: 'Check Your Fields!',
                    text: 'Please fill in all the required fields.',
                    icon: 'error'
                });
            } else {
                // Fields are not empty, proceed with submission

                ";
            // line 31
            if (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 31, $this->source); })()) == "add")) {
                // line 32
                echo "                    Swal.fire({
                        title: 'Added Successfully!',
                        text: 'Your item has been added successfully.',
                        icon: 'success'
                    });
                ";
            } elseif ((            // line 37
(isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 37, $this->source); })()) == "edit")) {
                // line 38
                echo "                    // Check again after correcting the fields
                    var isStillEmpty = false;

                    formFields.forEach(function(field) {
                        if (!field.value.trim()) {
                            isStillEmpty = true;
                        }
                    });

                    if (isStillEmpty) {
                        Swal.fire({
                            title: 'Check Your Fields!',
                            text: 'Please fill in all the required fields.',
                            icon: 'error'
                        });
                    } else {
                        Swal.fire({
                            title: 'Edited Successfully!',
                            text: 'Your item has been edited successfully.',
                            icon: 'success'
                        });
                        this.submit();
                    }
                ";
            }
            // line 62
            echo "            }
        });
    </script>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "trajet_controller_back/_form.html.twig";
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
        return array (  126 => 62,  100 => 38,  98 => 37,  91 => 32,  89 => 31,  64 => 8,  62 => 7,  57 => 5,  53 => 4,  49 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% form_theme form 'bootstrap_5_layout.html.twig' %}
{{ form_start(form, {'attr': {'novalidate': 'novalidate', 'id': 'myForm'}}) }}
    {{ form_widget(form) }}
    <button class=\"btn btn-success float-left mr-2\" type=\"submit\">{{ button_label|default('Save') }}</button>
{{ form_end(form) }}

{% if action == 'add' or action == 'edit' %}
    <script>
        document.getElementById('myForm').addEventListener('submit', function(event) {
           

            // Check if any field is empty
            var formFields = this.querySelectorAll('input, select, textarea');
            var isEmpty = false;

            formFields.forEach(function(field) {
                if (!field.value.trim()) {
                    isEmpty = true;
                }
            });

            if (isEmpty) {
                Swal.fire({
                    title: 'Check Your Fields!',
                    text: 'Please fill in all the required fields.',
                    icon: 'error'
                });
            } else {
                // Fields are not empty, proceed with submission

                {% if action == 'add' %}
                    Swal.fire({
                        title: 'Added Successfully!',
                        text: 'Your item has been added successfully.',
                        icon: 'success'
                    });
                {% elseif action == 'edit' %}
                    // Check again after correcting the fields
                    var isStillEmpty = false;

                    formFields.forEach(function(field) {
                        if (!field.value.trim()) {
                            isStillEmpty = true;
                        }
                    });

                    if (isStillEmpty) {
                        Swal.fire({
                            title: 'Check Your Fields!',
                            text: 'Please fill in all the required fields.',
                            icon: 'error'
                        });
                    } else {
                        Swal.fire({
                            title: 'Edited Successfully!',
                            text: 'Your item has been edited successfully.',
                            icon: 'success'
                        });
                        this.submit();
                    }
                {% endif %}
            }
        });
    </script>
{% endif %}
", "trajet_controller_back/_form.html.twig", "C:\\Users\\ASUS\\Desktop\\PiDev\\Projet-Pi-tfarhida\\templates\\trajet_controller_back\\_form.html.twig");
    }
}
