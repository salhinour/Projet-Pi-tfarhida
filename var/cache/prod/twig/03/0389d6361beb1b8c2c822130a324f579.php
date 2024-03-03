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

/* admin/partials/sidebar.html.twig */
class __TwigTemplate_c9a6bf16dd82ee35f91493f15777ee9a extends Template
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
        // line 1
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("partials/_macro.html.twig", "admin/partials/sidebar.html.twig", 1)->unwrap();
        // line 2
        echo "
<ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">
    <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"index.html\">
        <div class=\"sidebar-brand-icon rotate-n-15\">
            <i class=\"fas fa-laugh-wink\"></i>
        </div>
        <div class=\"sidebar-brand-text mx-3\">";
        // line 8
        echo twig_escape_filter($this->env, ($context["const_website_title"] ?? null), "html", null, true);
        echo "</div>
    </a>

    <hr class=\"sidebar-divider my-0\">

    <li class=\"nav-item ";
        // line 13
        echo twig_call_macro($macros["macros"], "macro_is_active", ["admin_dashboard"], 13, $context, $this->getSourceContext());
        echo "\">
        <a class=\"nav-link\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard_index");
        echo "\">
            <i class=\"fas fa-fw fa-tachometer-alt\"></i>
            <span>Tableau de bord</span>
        </a>
    </li>

    <hr class=\"sidebar-divider my-0\">

        ";
        // line 23
        echo "                                                                ";
        // line 24
        echo "        ";
        // line 25
        echo "
            ";
        // line 48
        echo "
        ";
        // line 50
        echo "

    <li class=\"nav-item ";
        // line 52
        echo twig_call_macro($macros["macros"], "macro_is_active", ["admin_user"], 52, $context, $this->getSourceContext());
        echo "\">
        <a class=\"nav-link\" href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_index");
        echo "\">
            <i class=\"fas fa-user\"></i>
            <span>Utilisateurs</span>
        </a>
    </li>

    <hr class=\"sidebar-divider d-none d-md-block\">

    <div class=\"text-center d-none d-md-inline\">
        <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
    </div>

</ul>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/partials/sidebar.html.twig";
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
        return array (  88 => 53,  84 => 52,  80 => 50,  77 => 48,  74 => 25,  72 => 24,  70 => 23,  59 => 14,  55 => 13,  47 => 8,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/partials/sidebar.html.twig", "C:\\Users\\MSI\\Desktop\\pidev\\User-Crud-Symfony5\\templates\\admin\\partials\\sidebar.html.twig");
    }
}
