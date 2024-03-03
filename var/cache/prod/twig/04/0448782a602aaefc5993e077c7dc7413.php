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

/* admin/layout.html.twig */
class __TwigTemplate_415b6f1bda25c33272318d9354870083 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'title_h1' => [$this, 'block_title_h1'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <title>
            ";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo " - ";
        echo twig_escape_filter($this->env, ($context["const_website_title"] ?? null), "html", null, true);
        echo "
        </title>

        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sbadmin2/vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sbadmin2/css/sb-admin-2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "
    </head>
    <body class=\"";
        // line 21
        ((array_key_exists("body_class", $context)) ? (print (twig_escape_filter($this->env, ($context["body_class"] ?? null), "html", null, true))) : (print ("")));
        echo "\" id=\"page-top\">
            
        <div id=\"wrapper\">
            
            ";
        // line 25
        $this->loadTemplate("admin/partials/sidebar.html.twig", "admin/layout.html.twig", 25)->display($context);
        // line 26
        echo "           
            <div id=\"content-wrapper\" class=\"d-flex flex-column\">

                <div id=\"content\">

                    ";
        // line 31
        $this->loadTemplate("admin/partials/topbar.html.twig", "admin/layout.html.twig", 31)->display($context);
        // line 32
        echo "                    
                    <div class=\"container-fluid\">

                        <h1 class=\"h3 mb-0 text-gray-800\">";
        // line 35
        $this->displayBlock('title_h1', $context, $blocks);
        echo "</h1>
                        ";
        // line 37
        echo "
                        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 38));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 39
            echo "                            <div class=\"alert alert-";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo " mt-3\">
                                ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 41
                echo "                                    <p>";
                echo $context["message"];
                echo "</p>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
                        ";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "
                    </div>

                </div>

                <footer class=\"sticky-footer bg-white\">
                    <div class=\"container my-auto\">
                        <div class=\"copyright text-center my-auto\">
                            <span>Copyright &copy; Tfarhida - 2023 - esprit</span>
                        </div>
                    </div>
                </footer>

            </div>

        </div>

        <a class=\"scroll-to-top rounded\" href=\"#page-top\">
            <i class=\"fas fa-angle-up\"></i>
        </a>

        ";
        // line 68
        $this->loadTemplate("admin/partials/_modal_logout.html.twig", "admin/layout.html.twig", 68)->display($context);
        // line 69
        echo "
        <!-- Bootstrap core JavaScript-->
        <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sbadmin2/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Core plugin JavaScript-->
        <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sbadmin2/vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Custom scripts for all pages-->
        <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sbadmin2/js/sb-admin-2.min.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 80
        $this->displayBlock('javascripts', $context, $blocks);
        // line 81
        echo "    </body>
</html>
";
    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 18
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 35
    public function block_title_h1($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Non défini";
    }

    // line 46
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 80
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/layout.html.twig";
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
        return array (  228 => 80,  222 => 46,  215 => 35,  209 => 18,  203 => 10,  197 => 81,  195 => 80,  190 => 78,  184 => 75,  178 => 72,  174 => 71,  170 => 69,  168 => 68,  145 => 47,  143 => 46,  140 => 45,  133 => 43,  124 => 41,  120 => 40,  115 => 39,  111 => 38,  108 => 37,  104 => 35,  99 => 32,  97 => 31,  90 => 26,  88 => 25,  81 => 21,  77 => 19,  75 => 18,  70 => 16,  66 => 15,  61 => 13,  53 => 10,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/layout.html.twig", "C:\\Users\\MSI\\Desktop\\pidev\\User-Crud-Symfony5\\templates\\admin\\layout.html.twig");
    }
}
