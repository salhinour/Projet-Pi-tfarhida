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

/* admin/account/index.html.twig */
class __TwigTemplate_6b2a3a013fdad9b0150f7af76c920530 extends Template
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
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/account/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Profil";
    }

    // line 5
    public function block_title_h1($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mon profil";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "
    <div class=\"card border-left-info shadow h-100 py-2 my-4\">
        <div class=\"card-body\">
            <div class=\"d-flex align-items-center\">
                <h2 class=\"card-title text-uppercase text-info mb-0\"><i class=\"fas fa-user fa-x2 text-gray-500 mr-3\"></i>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "fullName", [], "any", false, false, false, 12), "html", null, true);
        echo "</h2>
                <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_account_edit");
        echo "\" class=\"btn btn-primary btn-icon-split ml-auto\">
                    <span class=\"icon text-white-50\">
                        <i class=\"far fa-edit\"></i>
                    </span>
                    <span class=\"text\">Modifier</span>
                </a>
            </div>
            <div class=\"row no-gutters align-items-center\">
                <div class=\"text-gray-400 mb-2\">
                    <small>Utilisateur inscrit depuis le ";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "createdAt", [], "any", false, false, false, 22), "d-m-Y"), "html", null, true);
        echo "</small>
                </div>
            </div>
            <hr class=\"sidebar-divider my-1\">
            <div class=\"py-3\">
                <div class=\"row no-gutters\">
                    <div class=\"d-flex flex-row align-items-center\">
                        <h5 class=\"text-secondary\">Email :</h5>
                        <p class=\"text-gray-500 mb-1 ml-3\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 30), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"row no-gutters\">
                    <div class=\"d-flex flex-row align-items-center\">
                        <h5 class=\"text-secondary\">Nom d'utilisateur :</h5>
                        <p class=\"text-gray-500 mb-1 ml-3\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 36), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"row no-gutters\">
                    <div class=\"d-flex flex-row align-items-center\">
                        <h5 class=\"text-secondary\">Rôle : </h5>
                        <p class=\"text-gray-500 mb-1 ml-3\">";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "roleTitle", [], "any", false, false, false, 42), "html", null, true);
        echo "</p>
                    </div>
                </div>
            </div>
            <hr class=\"sidebar-divider my-1\">
        </div>
    </div>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/account/index.html.twig";
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
        return array (  117 => 42,  108 => 36,  99 => 30,  88 => 22,  76 => 13,  72 => 12,  66 => 8,  62 => 7,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/account/index.html.twig", "C:\\Users\\MSI\\Desktop\\pidev\\User-Crud-Symfony5\\templates\\admin\\account\\index.html.twig");
    }
}
