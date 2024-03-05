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

/* categorie_back_c/_form.html.twig */
class __TwigTemplate_bca17e0973c3078faa14370d7ee3a85e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie_back_c/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie_back_c/_form.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <!-- Mettez ici les autres balises meta, titre et liens vers les autres fichiers CSS -->
    <style>
        /* CSS pour le bouton Save */
        .btn-save {
            background-color: green;
            color: white;
            border: 2px solid green;
            border-radius: 5px;
            padding: 8px 12px;
            cursor: pointer;
        }

        .btn-save:hover {
            background-color: darkgreen;
            border-color: darkgreen;
        }

        /* CSS pour le cadre autour du formulaire */
        .form-container {
            max-width: 400px; /* Largeur maximale du formulaire */
            margin: 0 auto; /* Centrage horizontal */
            padding: 20px; /* Espacement intérieur */
            border: 1px solid #ccc; /* Bordure grise de 1px */
            border-radius: 5px; /* Coins arrondis de 5px */
        }
    </style>
</head>
<body>
    <!-- Conteneur du formulaire avec cadre -->
    <div class=\"form-container\">
        ";
        // line 34
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), ["bootstrap_5_layout.html.twig"], true);
        // line 35
        echo "
        ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
            <!-- Champs du formulaire -->
            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'widget');
        echo "
            <!-- Bouton Save personnalisé -->
            <button class=\"btn-save\">";
        // line 40
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 40, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
        <!-- Fin du formulaire -->
        ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_end');
        echo "
    </div>
    <!-- Fin du conteneur du formulaire -->
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "categorie_back_c/_form.html.twig";
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
        return array (  98 => 42,  93 => 40,  88 => 38,  83 => 36,  80 => 35,  78 => 34,  43 => 1,);
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
            background-color: green;
            color: white;
            border: 2px solid green;
            border-radius: 5px;
            padding: 8px 12px;
            cursor: pointer;
        }

        .btn-save:hover {
            background-color: darkgreen;
            border-color: darkgreen;
        }

        /* CSS pour le cadre autour du formulaire */
        .form-container {
            max-width: 400px; /* Largeur maximale du formulaire */
            margin: 0 auto; /* Centrage horizontal */
            padding: 20px; /* Espacement intérieur */
            border: 1px solid #ccc; /* Bordure grise de 1px */
            border-radius: 5px; /* Coins arrondis de 5px */
        }
    </style>
</head>
<body>
    <!-- Conteneur du formulaire avec cadre -->
    <div class=\"form-container\">
        {% form_theme form 'bootstrap_5_layout.html.twig' %}

        {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
            <!-- Champs du formulaire -->
            {{ form_widget(form) }}
            <!-- Bouton Save personnalisé -->
            <button class=\"btn-save\">{{ button_label|default('Save') }}</button>
        <!-- Fin du formulaire -->
        {{ form_end(form) }}
    </div>
    <!-- Fin du conteneur du formulaire -->
</body>
</html>", "categorie_back_c/_form.html.twig", "C:\\Users\\ASUS\\Desktop\\PiDev\\Projet-Pi-tfarhida\\templates\\categorie_back_c\\_form.html.twig");
    }
}
