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

/* security/forgot_password.html.twig */
class __TwigTemplate_7d75a4b54acf199a8d4dd49a11c58c16 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/forgot_password.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/forgot_password.html.twig"));

        // line 48
        echo "

";
        // line 50
        $this->displayBlock('title', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 50
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Forget Password";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 52
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 53
        echo "<section class=\"section\">
    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4\">
                <div class=\"login-brand\">
                    
                </div>

                <div class=\"card card-primary\">
                    <div class=\"card-header\"><h4>Forgot Password</h4></div>

                    <div class=\"card-body\">
                        <p class=\"text-muted\">We will send a link to reset your password</p>
                        ";
        // line 66
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestPassForm"]) || array_key_exists("requestPassForm", $context) ? $context["requestPassForm"] : (function () { throw new RuntimeError('Variable "requestPassForm" does not exist.', 66, $this->source); })()), 'form_start');
        echo "
                            <div class=\"form-group\">
                                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["requestPassForm"]) || array_key_exists("requestPassForm", $context) ? $context["requestPassForm"] : (function () { throw new RuntimeError('Variable "requestPassForm" does not exist.', 68, $this->source); })()), "email", [], "any", false, false, false, 68), 'label');
        echo "
                                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["requestPassForm"]) || array_key_exists("requestPassForm", $context) ? $context["requestPassForm"] : (function () { throw new RuntimeError('Variable "requestPassForm" does not exist.', 69, $this->source); })()), "email", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "example@email.com"]]);
        echo "
                            </div>
                            <div class=\"form-group\">
                                <button type=\"submit\" class=\"btn btn-primary btn-block\" tabindex=\"4\">
                                    Forgot Password
                                </button>
                            </div>
                        ";
        // line 76
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestPassForm"]) || array_key_exists("requestPassForm", $context) ? $context["requestPassForm"] : (function () { throw new RuntimeError('Variable "requestPassForm" does not exist.', 76, $this->source); })()), 'form_end');
        echo "
                    </div>
                </div>
                <div class=\"simple-footer\">
                </div>
            </div>
        </div>
    </div>
</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "security/forgot_password.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  127 => 76,  117 => 69,  113 => 68,  108 => 66,  93 => 53,  83 => 52,  64 => 50,  54 => 52,  51 => 51,  49 => 50,  45 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends 'admin/base.html.twig' %}

{% block title \"Mot de passe oublie\" %}

{% block body %}
<div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-xl-10 col-lg-12 col-md-9\">
            <div class=\"card o-hidden border-0 shadow-lg my-5\">
                <div class=\"card-body p-0\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 d-none d-lg-block bg-login-image\" style=\"background: url('{{ asset('img/login.jpg') }}'); background-size: cover;\"></div>
                        <div class=\"col-lg-6\">
                            <div class=\"p-5\">
                                <div class=\"text-center\">
                                    <h1 class=\"h4 text-gray-900 mb-4\">Mot de passe oublié</h1>
                                </div>
                                <hr>
                                {% for label, messages in app.flashes %}
                                    <div class=\"container\">
                                        <div class=\"alert alert-{{ label }}\">
                                            {% for message in messages %}
                                                <p>{{ message | raw }}</p>
                                            {% endfor %}
                                        </div>
                                    </div>
                                {% endfor %}
                                <form method=\"post\" class=\"user\">
                                    <div class=\"form-group\">
                                        <input type=\"email\" name=\"_email\" id=\"forgot-password-email\" class=\"form-control form-control-user my-4\" placeholder=\"Adresse email\" required>
                                    </div>                    

                                    <button class=\"btn btn-primary btn-user btn-block\" type=\"submit\">Envoyer l'email !</button>
                                </form>
                                <hr>
                                <div class=\"text-center\">
                                    <a class=\"small\" href=\"{{ path('login') }}\">Revenir à la page de connexion !</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %} #}


{% block title %}Forget Password{% endblock %}

{% block content %}
<section class=\"section\">
    <div class=\"container mt-5\">
        <div class=\"row\">
            <div class=\"col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4\">
                <div class=\"login-brand\">
                    
                </div>

                <div class=\"card card-primary\">
                    <div class=\"card-header\"><h4>Forgot Password</h4></div>

                    <div class=\"card-body\">
                        <p class=\"text-muted\">We will send a link to reset your password</p>
                        {{ form_start(requestPassForm)}}
                            <div class=\"form-group\">
                                {{ form_label(requestPassForm.email) }}
                                {{ form_widget(requestPassForm.email, {'attr': {'class': 'form-control', 'placeholder': 'example@email.com'}}) }}
                            </div>
                            <div class=\"form-group\">
                                <button type=\"submit\" class=\"btn btn-primary btn-block\" tabindex=\"4\">
                                    Forgot Password
                                </button>
                            </div>
                        {{ form_end(requestPassForm) }}
                    </div>
                </div>
                <div class=\"simple-footer\">
                </div>
            </div>
        </div>
    </div>
</section>
{% endblock %}
", "security/forgot_password.html.twig", "C:\\Users\\ASUS\\Desktop\\PiDev\\Projet-Pi-tfarhida\\templates\\security\\forgot_password.html.twig");
    }
}
