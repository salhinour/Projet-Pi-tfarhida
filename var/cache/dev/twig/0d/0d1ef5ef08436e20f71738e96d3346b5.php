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

/* activitee/_form.html.twig */
class __TwigTemplate_b6b4177e4ce6da6aa9dcf2815858f1d8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activitee/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activitee/_form.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <!-- Mettez ici les autres balises meta, titre et liens vers les autres fichiers CSS -->
    <style>
        /* CSS pour le bouton Save */
        .btn-save {
            background-color: #ff5733; /* Couleur orange */
            color: white;
            border: 2px solid #ff5733; /* Bordure orange */
            border-radius: 5px;
            padding: 8px 12px;
            cursor: pointer;
        }

        .btn-save:hover {
            background-color: #e64a19; /* Couleur orange foncée au survol */
            border-color: #e64a19; /* Bordure orange foncée au survol */
        }
         .small-search {
            width: 150px; /* Ajustez la largeur selon vos besoins */
        }
    </style>
</head>
<body>
<div class=\"container\" style=\"text-align:center\" >
";
        // line 27
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), ["bootstrap_5_layout.html.twig"], true);
        // line 28
        echo "
";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
  ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "nom", [], "any", false, false, false, 30), 'row');
        echo "
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "prix", [], "any", false, false, false, 31), 'row');
        echo "
        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "localisation", [], "any", false, false, false, 32), 'row');
        echo "
        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "nbP", [], "any", false, false, false, 33), 'row');
        echo "
        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "image", [], "any", false, false, false, 34), 'row');
        echo "
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "descriptionact", [], "any", false, false, false, 35), 'row');
        echo "
        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "categorie", [], "any", false, false, false, 36), 'row', ["label" => "type_categorie", "attr" => ["class" => "form-control"]]);
        echo "
        ";
        // line 38
        echo "
    <button class=\"btn-save\">";
        // line 39
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 39, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'form_end');
        echo "
</div>
</body>
</html>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "activitee/_form.html.twig";
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
        return array (  115 => 40,  111 => 39,  108 => 38,  104 => 36,  100 => 35,  96 => 34,  92 => 33,  88 => 32,  84 => 31,  80 => 30,  76 => 29,  73 => 28,  71 => 27,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <!-- Mettez ici les autres balises meta, titre et liens vers les autres fichiers CSS -->
    <style>
        /* CSS pour le bouton Save */
        .btn-save {
            background-color: #ff5733; /* Couleur orange */
            color: white;
            border: 2px solid #ff5733; /* Bordure orange */
            border-radius: 5px;
            padding: 8px 12px;
            cursor: pointer;
        }

        .btn-save:hover {
            background-color: #e64a19; /* Couleur orange foncée au survol */
            border-color: #e64a19; /* Bordure orange foncée au survol */
        }
         .small-search {
            width: 150px; /* Ajustez la largeur selon vos besoins */
        }
    </style>
</head>
<body>
<div class=\"container\" style=\"text-align:center\" >
{% form_theme form 'bootstrap_5_layout.html.twig' %}

{{ form_start(form,{'attr' : { 'novalidate' :'novalidate'}} ) }}
  {{ form_row(form.nom) }}
        {{ form_row(form.prix) }}
        {{ form_row(form.localisation) }}
        {{ form_row(form.nbP) }}
        {{ form_row(form.image) }}
        {{ form_row(form.descriptionact) }}
        {{ form_row(form.categorie, {'label': 'type_categorie', 'attr': {'class': 'form-control'}}) }}
        {# Désactiver le champ etat #}

    <button class=\"btn-save\">{{ button_label|default('Save') }}</button>
{{ form_end(form) }}
</div>
</body>
</html>

", "activitee/_form.html.twig", "C:\\Users\\ASUS\\PiProjecttt\\templates\\activitee\\_form.html.twig");
    }
}
