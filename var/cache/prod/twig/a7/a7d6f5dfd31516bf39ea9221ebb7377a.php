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

/* admin/partials/topbar.html.twig */
class __TwigTemplate_a3c267830e7e84794a7074e52c7c1043 extends Template
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
        echo "<!-- Topbar -->
<nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow topbar\">

    <!-- Sidebar Toggle (Topbar) -->
    <button class=\"btn btn-link d-md-none rounded-circle mr-3\" id=\"sidebarToggleTop\">
        <i class=\"fa fa-bars\"></i>
    </button>

    ";
        // line 10
        echo "                                                            ";
        // line 11
        echo "    ";
        // line 12
        echo "
        ";
        // line 23
        echo "
    ";
        // line 25
        echo "
    <ul class=\"navbar-nav ml-auto\">

        ";
        // line 29
        echo "                                                        ";
        // line 30
        echo "        ";
        // line 31
        echo "
        ";
        // line 50
        echo "
        ";
        // line 52
        echo "
        ";
        // line 54
        echo "                                                        ";
        // line 55
        echo "        ";
        // line 56
        echo "         
            ";
        // line 103
        echo "
        ";
        // line 105
        echo "
        ";
        // line 107
        echo "                                                        ";
        // line 108
        echo "        ";
        // line 109
        echo "        
            ";
        // line 163
        echo "
        ";
        // line 165
        echo "
        <div class=\"topbar-divider d-none d-sm-block\"></div>

        <!-- Nav Item - User Information -->
        <li class=\"nav-item dropdown no-arrow\">
            <a aria-expanded=\"false\" aria-haspopup=\"true\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"userDropdown\" role=\"button\">
                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\"><i class=\"far fa-user text-primary mr-2 fa-2x \"></i>";
        // line 171
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 171), "fullName", [], "any", false, false, false, 171), "html", null, true);
        echo "</span>
                ";
        // line 173
        echo "            </a>
            <!-- Dropdown - User Information -->
            <div aria-labelledby=\"userDropdown\" class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\">
                <a class=\"dropdown-item\" href=\"";
        // line 176
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_account_index");
        echo "\">
                    <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Profil
                </a>
                <a class=\"dropdown-item\" href=\"";
        // line 180
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_parameter_index");
        echo "\">
                    <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Paramètres
                </a>
                ";
        // line 188
        echo "                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" data-target=\"#logoutModal\" data-toggle=\"modal\" href=\"#\">
                    <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Déconnexion
                </a>
            </div>
        </li>

    </ul>

</nav>
<!-- End of Topbar -->
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/partials/topbar.html.twig";
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
        return array (  129 => 188,  122 => 180,  115 => 176,  110 => 173,  106 => 171,  98 => 165,  95 => 163,  92 => 109,  90 => 108,  88 => 107,  85 => 105,  82 => 103,  79 => 56,  77 => 55,  75 => 54,  72 => 52,  69 => 50,  66 => 31,  64 => 30,  62 => 29,  57 => 25,  54 => 23,  51 => 12,  49 => 11,  47 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/partials/topbar.html.twig", "C:\\Users\\MSI\\Desktop\\pidev\\User-Crud-Symfony5\\templates\\admin\\partials\\topbar.html.twig");
    }
}
