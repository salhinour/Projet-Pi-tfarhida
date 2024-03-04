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

/* security/registration.html.twig */
class __TwigTemplate_7fc14433a2e83f99c2d0b4c38f1d7cc4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/registration.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/registration.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "security/registration.html.twig", 1);
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

        echo "Inscription";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        /* Custom styles for the registration form */
        .card {
            border-radius: 15px;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-control {
            border-radius: 25px;
            padding: 15px;
        }

        .btn-primary {
            background-color: #4e73df;
            border-color: #4e73df;
            border-radius: 25px;
            padding: 12px 30px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #224abe;
            border-color: #224abe;
        }

        .small {
            font-size: 14px;
        }

        .invalid-feedback {
            display: block;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 48
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "    <div class=\"container-fluid\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-7\">
                <div class=\"card o-hidden border-0 shadow-lg my-5\">
                    <div class=\"card-body p-0\">
                        <div class=\"p-5\">
                            <div class=\"text-center\">
                                <h1 class=\"h4 text-gray-900 mb-4\">S'inscrire</h1>
                            </div>
                            ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), 'form_start', ["attr" => ["class" => "user needs-validation", "novalidate" => "novalidate"]]);
        echo "
                            <div class=\"form-group row\">
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                    ";
        // line 62
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "firstName", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        echo "
                                    <div class=\"invalid-feedback\">
                                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "firstName", [], "any", false, false, false, 64), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                    ";
        // line 69
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "lastName", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        echo "
                                    <div class=\"invalid-feedback\">
                                        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "lastName", [], "any", false, false, false, 71), 'errors');
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                    ";
        // line 78
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "email", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        echo "
                                    <div class=\"invalid-feedback\">
                                        ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "email", [], "any", false, false, false, 80), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                    ";
        // line 85
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "username", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        echo "
                                    <div class=\"invalid-feedback\">
                                        ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "username", [], "any", false, false, false, 87), 'errors');
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                    ";
        // line 94
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "password", [], "any", false, false, false, 94), "password", [], "any", false, false, false, 94), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        echo "
                                    <div class=\"invalid-feedback\">
                                        ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "password", [], "any", false, false, false, 96), "password", [], "any", false, false, false, 96), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                    ";
        // line 101
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "password", [], "any", false, false, false, 101), "passwordRepeat", [], "any", false, false, false, 101), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        echo "
                                    <div class=\"invalid-feedback\">
                                        ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "password", [], "any", false, false, false, 103), "passwordRepeat", [], "any", false, false, false, 103), 'errors');
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <div class=\"col-sm-12\">
                                    ";
        // line 110
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "captcha", [], "any", false, false, false, 110), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
        echo "
                                    <div class=\"invalid-feedback\">
                                        ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "captcha", [], "any", false, false, false, 112), 'errors');
        echo "
                                    </div>
                                </div>
                            </div>
                            ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "_token", [], "any", false, false, false, 116), 'widget');
        echo "
                            ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "save", [], "any", false, false, false, 117), 'row', ["attr" => ["class" => "btn btn-primary btn-user btn-block"]]);
        echo "
                            <hr>
                            <div class=\"text-center\">
                                <a class=\"small\" href=\"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\">Vous avez déjà un compte ? Connectez-vous !</a>
                            </div>
                            ";
        // line 122
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), 'form_end');
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        return "security/registration.html.twig";
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
        return array (  280 => 122,  275 => 120,  269 => 117,  265 => 116,  258 => 112,  252 => 110,  243 => 103,  237 => 101,  230 => 96,  224 => 94,  215 => 87,  209 => 85,  202 => 80,  196 => 78,  187 => 71,  181 => 69,  174 => 64,  168 => 62,  162 => 58,  151 => 49,  141 => 48,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block title \"Inscription\" %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        /* Custom styles for the registration form */
        .card {
            border-radius: 15px;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-control {
            border-radius: 25px;
            padding: 15px;
        }

        .btn-primary {
            background-color: #4e73df;
            border-color: #4e73df;
            border-radius: 25px;
            padding: 12px 30px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #224abe;
            border-color: #224abe;
        }

        .small {
            font-size: 14px;
        }

        .invalid-feedback {
            display: block;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container-fluid\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-7\">
                <div class=\"card o-hidden border-0 shadow-lg my-5\">
                    <div class=\"card-body p-0\">
                        <div class=\"p-5\">
                            <div class=\"text-center\">
                                <h1 class=\"h4 text-gray-900 mb-4\">S'inscrire</h1>
                            </div>
                            {{ form_start(form, {'attr': {'class': \"user needs-validation\", 'novalidate': 'novalidate'} }) }}
                            <div class=\"form-group row\">
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                    {# {{ form_errors(form.firstName) }} #}
                                    {{ form_widget(form.firstName, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
                                    <div class=\"invalid-feedback\">
                                        {{ form_errors(form.firstName) }}
                                    </div>
                                </div>
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                    {# {{ form_errors(form.lastName) }} #}
                                    {{ form_widget(form.lastName, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
                                    <div class=\"invalid-feedback\">
                                        {{ form_errors(form.lastName) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                    {# {{ form_errors(form.email) }} #}
                                    {{ form_widget(form.email, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
                                    <div class=\"invalid-feedback\">
                                        {{ form_errors(form.email) }}
                                    </div>
                                </div>
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                    {# {{ form_errors(form.username) }} #}
                                    {{ form_widget(form.username, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
                                    <div class=\"invalid-feedback\">
                                        {{ form_errors(form.username) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                    {# {{ form_errors(form.password.password) }} #}
                                    {{ form_widget(form.password.password, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
                                    <div class=\"invalid-feedback\">
                                        {{ form_errors(form.password.password) }}
                                    </div>
                                </div>
                                <div class=\"col-sm-6 mb-3 mb-sm-0\">
                                    {# {{ form_errors(form.password.passwordRepeat) }} #}
                                    {{ form_widget(form.password.passwordRepeat, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
                                    <div class=\"invalid-feedback\">
                                        {{ form_errors(form.password.passwordRepeat) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <div class=\"col-sm-12\">
                                    {# {{ form_errors(form.captcha) }} #}
                                    {{ form_widget(form.captcha, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
                                    <div class=\"invalid-feedback\">
                                        {{ form_errors(form.captcha) }}
                                    </div>
                                </div>
                            </div>
                            {{ form_widget(form._token) }}
                            {{ form_row(form.save, {'attr': {'class': 'btn btn-primary btn-user btn-block'}}) }}
                            <hr>
                            <div class=\"text-center\">
                                <a class=\"small\" href=\"{{ path('login') }}\">Vous avez déjà un compte ? Connectez-vous !</a>
                            </div>
                            {{ form_end(form) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "security/registration.html.twig", "C:\\Users\\MSI\\INTEGRATION\\Projet-Pi-tfarhida\\templates\\security\\registration.html.twig");
    }
}
