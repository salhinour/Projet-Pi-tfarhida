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

/* logement/_form.html.twig */
class __TwigTemplate_3d12d23432a8061a6728b95cabf1f68a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "logement/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "logement/_form.html.twig"));

        // line 14
        echo "         ";
        // line 16
        echo "        ";
        // line 18
        echo "        ";
        // line 19
        echo "        ";
        // line 22
        echo "
        ";
        // line 89
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), ["bootstrap_5_layout.html.twig"], true);
        // line 90
        echo "
";
        // line 91
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
    ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), 'widget');
        echo "
    <button class=\"btn\">";
        // line 93
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 93, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
";
        // line 94
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "logement/_form.html.twig";
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
        return array (  71 => 94,  67 => 93,  63 => 92,  59 => 91,  56 => 90,  54 => 89,  51 => 22,  49 => 19,  47 => 18,  45 => 16,  43 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("{# {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
    <div class=\"form-group\">
        {{ form_label(form.nom) }}
        {{ form_widget(form.nom, {'attr': {'class': 'form-control' ~ (form_errors(form.nom)|length > 0 ? ' is-invalid' : '')}}) }}
        {% if form_errors(form.nom)|length > 0 %}
            <div class=\"invalid-feedback\">
                {{ form_errors(form.nom)|first }}
                {{ 'vous devez mettre le Nom!!!'|trans }}

            </div>
        {% endif %}
    </div>
    <div class=\"form-group\"> #}
         {# <div class=\"container\"> 
         {# <form id=\"login\" onsubmit=\"process(event)\"> #}
        {# <p>Entrez votre numéro de téléphone:</p>
        <input id=\"phone\" type=\"tel\" name=\"phone\" /> #}
        {# <input type=\"submit\" class=\"btn\" value=\"Vérifier\" /> #}
        {# </form>
        <div class=\"alert alert-info\" style=\"display: none;\"></div>
        </div>  #}

        {# {{ form_label(form.num) }}
        {{ form_widget(form.num, {'attr': {'class': 'form-control-file' ~ (form_errors(form.num)|length > 0 ? ' is-invalid' : '')}}) }}
        {% if form_errors(form.num)|length > 0 %}
        
            <div class=\"invalid-feedback\">
                {{ form_errors(form.num)|first }}
            </div>
        {% endif %}
    </div>
    <div class=\"form-group\">
        {{ form_label(form.Prix) }}
        {{ form_widget(form.Prix, {'attr': {'class': 'form-control' ~ (form_errors(form.Prix)|length > 0 ? ' is-invalid' : '')}}) }}
        {% if form_errors(form.Prix)|length > 0 %}
            <div class=\"invalid-feedback\">
                {{ form_errors(form.Prix)|first }}
                {{ 'vous devez mettre le Prix!!!'|trans }}

            </div>
        {% endif %}
    </div>
    <div class=\"form-group\">
        {{ form_label(form.NoteMoyenne) }}
        {{ form_widget(form.NoteMoyenne, {'attr': {'class': 'form-control' ~ (form_errors(form.NoteMoyenne)|length > 0 ? ' is-invalid' : '')}}) }}
        {% if form_errors(form.NoteMoyenne)|length > 0 %}
            <div class=\"invalid-feedback\">
                {{ form_errors(form.NoteMoyenne)|first }}
                {{ 'vous devez mettre la note Moyenne !!!'|trans }}

            </div>
        {% endif %}
    </div>
    <div class=\"form-group\">
        {{ form_label(form.Localisation) }}
        {{ form_widget(form.Localisation, {'attr': {'class': 'form-control' ~ (form_errors(form.Localisation)|length > 0 ? ' is-invalid' : '')}}) }}
        {% if form_errors(form.Localisation)|length > 0 %}
            <div class=\"invalid-feedback\">
                {{ form_errors(form.Localisation)|first }}
                {{ 'vous devez mettre le Localisation!!!'|trans }}
            </div>
          
        {% endif %}
    </div>
    <div class=\"form-group\">
        {{ form_label(form.image) }}
        {{ form_widget(form.image, {'attr': {'class': 'form-control-file' ~ (form_errors(form.image)|length > 0 ? ' is-invalid' : '')}}) }}
        {% if form_errors(form.image)|length > 0 %}
            <div class=\"invalid-feedback\">
                {{ form_errors(form.image)|first }}
            </div>
        {% endif %}
    </div>
    <div class=\"form-group\">
        {{ form_label(form.TypeLog) }}
        {{ form_widget(form.TypeLog, {'attr': {'class': 'form-control' ~ (form_errors(form.TypeLog)|length > 0 ? ' is-invalid' : '')}}) }}
        {% if form_errors(form.TypeLog)|length > 0 %}
            <div class=\"invalid-feedback\">
                {{ form_errors(form.TypeLog)|first }}
                {{ 'vous devez mettre le type de votre logement!!!'|trans }}

            </div>
        {% endif %}
    </div>
    
    <button class=\"btn\">{{ button_label|default('Save') }}</button>

{{ form_end(form) }} #}
{% form_theme form 'bootstrap_5_layout.html.twig' %}

{{ form_start(form,{'attr' : { 'novalidate' :'novalidate'}} ) }}
    {{ form_widget(form) }}
    <button class=\"btn\">{{ button_label|default('Save') }}</button>
{{ form_end(form) }}
", "logement/_form.html.twig", "C:\\Users\\ASUS\\Desktop\\PiDev\\Projet-Pi-tfarhida\\templates\\logement\\_form.html.twig");
    }
}
