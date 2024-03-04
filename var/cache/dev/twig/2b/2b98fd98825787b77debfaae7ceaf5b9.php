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

/* base.html.twig */
class __TwigTemplate_6c6f3a9c5b7fdc21caefbbea73171b7a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'bd' => [$this, 'block_bd'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 368
        echo " ";
        $this->displayBlock('bd', $context, $blocks);
        // line 745
        echo "    <!-- Bootstrap core JavaScript-->
    <script src=\"";
        // line 746
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/end/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 747
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/endvendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Core plugin JavaScript-->
    <script src=\"";
        // line 750
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/end/vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom scripts for all pages-->
    <script src=\"";
        // line 753
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/end/js/sb-admin-2.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Page level plugins -->
    <script src=\"";
        // line 756
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/end/vendor/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Page level custom scripts -->
    <script src=\"";
        // line 759
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/endjs/demo/chart-area-demo.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 760
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/end/js/demo/chart-pie-demo.js"), "html", null, true);
        echo "\"></script>

</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Custom fonts for this template-->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/end/vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link
        href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
        rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/end/css/sb-admin-2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

</head>

<body id=\"page-top\">

    <!-- Page Wrapper -->
    <div id=\"wrapper\">

        <!-- Sidebar -->
        <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

            <!-- Sidebar - Brand -->
            <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"index.html\">
                <div class=\"sidebar-brand-icon rotate-n-15\">
                    <i class=\"fas fa-laugh-wink\"></i>
                </div>
                <div class=\"sidebar-brand-text mx-3\">180 <sup>°</sup></div>
            </a>

            <!-- Divider -->
            <hr class=\"sidebar-divider my-0\">

            <!-- Nav Item - Dashboard -->
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo ">
                    <i class=\"fas fa-fw fa-tachometer-alt\"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class=\"sidebar-divider\">

            <!-- Heading -->
            <div class=\"sidebar-heading\">
                Interface
            </div>
             <!-- Nav Item - Utilis nessrine Collapse Menu -->
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"afficheruser\"  data-target=\"#collapseUtilities\"
                   
                    <span>Utilisateur</span>
                </a>
               
            </li>

           

            <!-- Nav Item - sante Collapse Menu -->
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"#\"  data-target=\"#collapseUtilities\"
                   
                    <span>Sante</span>
                </a>
               
            </li>

             

              <!-- Nav Item - rendez vous Collapse Menu -->
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"('rendez_vous')\"  data-target=\"#collapseUtilities\"
                   
                    <span>Rendez vous</span>
                </a>
               
            </li>
                  <!-- Nav Item - activite Collapse Menu -->
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher");
        echo "\" data-target=\"#collapseUtilities\"
                   
                    <span>Activites</span>
                </a>
               
            </li>
             <!-- Nav Item - Exercices Collapse Menu -->
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fetch");
        echo "\"  data-target=\"#collapseUtilities\"
                   
                    <span>Exercices</span>
                </a>
               
            </li>

              <!-- Nav Item - Nutrition Collapse Menu -->
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"#\"  data-target=\"#collapseUtilities\"
                   
                    <span>Nutrition</span>
                </a>
               
            </li>

            <!-- Divider -->
            <hr class=\"sidebar-divider\">

            <!-- Heading -->
            <div class=\"sidebar-heading\">
                Addons
            </div>

           

            <!-- Nav Item - Charts -->
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"charts.html\">
                    <i class=\"fas fa-fw fa-chart-area\"></i>
                    <span>Charts</span></a>
            </li>
            <!-- REP eya -->
            <!-- Nav Item - Tables -->
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">
                    <i class=\"fas fa-fw fa-table\"></i>
                    <span>Reponse</span></a>
            </li>

            <!-- Divider -->
            <hr class=\"sidebar-divider d-none d-md-block\">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class=\"text-center d-none d-md-inline\">
                <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
            </div>

            <!-- Sidebar Message -->
            <div class=\"sidebar-card d-none d-lg-flex\">
                <img class=\"sidebar-card-illustration mb-2\" src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("end/img/undraw_rocket.svg"), "html", null, true);
        echo "\" alt=\"...\">
                <p class=\"text-center mb-2\"><strong>360°</strong> is packed with premium features, components, and more!</p>
                <a class=\"btn btn-success btn-sm\" href=\"https://startbootstrap.com/theme/sb-admin-pro\">Upgrade to Pro!</a>
            </div>


        </ul>
        <!-- End of Sidebar -->
 
        <!-- Content Wrapper -->
   
        <div id=\"content-wrapper\" class=\"d-flex flex-column\">
 
            <!-- Main Content -->
            <div id=\"content\">

                <!-- Topbar -->
                <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
                        <i class=\"fa fa-bars\"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\"
                                aria-label=\"Search\" aria-describedby=\"basic-addon2\">
                            <div class=\"input-group-append\">
                                <button class=\"btn btn-primary\" type=\"button\">
                                    <i class=\"fas fa-search fa-sm\"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class=\"navbar-nav ml-auto\">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class=\"nav-item dropdown no-arrow d-sm-none\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-search fa-fw\"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\"
                                aria-labelledby=\"searchDropdown\">
                                <form class=\"form-inline mr-auto w-100 navbar-search\">
                                    <div class=\"input-group\">
                                        <input type=\"text\" class=\"form-control bg-light border-0 small\"
                                            placeholder=\"Search for...\" aria-label=\"Search\"
                                            aria-describedby=\"basic-addon2\">
                                        <div class=\"input-group-append\">
                                            <button class=\"btn btn-primary\" type=\"button\">
                                                <i class=\"fas fa-search fa-sm\"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class=\"nav-item dropdown no-arrow mx-1\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-bell fa-fw\"></i>
                                <!-- Counter - Alerts -->
                                <span class=\"badge badge-danger badge-counter\">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                aria-labelledby=\"alertsDropdown\">
                                <h6 class=\"dropdown-header\">
                                    Alerts Center
                                </h6>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"mr-3\">
                                        <div class=\"icon-circle bg-primary\">
                                            <i class=\"fas fa-file-alt text-white\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"small text-gray-500\">December 12, 2019</div>
                                        <span class=\"font-weight-bold\">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"mr-3\">
                                        <div class=\"icon-circle bg-success\">
                                            <i class=\"fas fa-donate text-white\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"small text-gray-500\">December 7, 2019</div>
                                        \$290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"mr-3\">
                                        <div class=\"icon-circle bg-warning\">
                                            <i class=\"fas fa-exclamation-triangle text-white\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"small text-gray-500\">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class=\"nav-item dropdown no-arrow mx-1\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-envelope fa-fw\"></i>
                                <!-- Counter - Messages -->
                                <span class=\"badge badge-danger badge-counter\">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                aria-labelledby=\"messagesDropdown\">
                                <h6 class=\"dropdown-header\">
                                    Message Center
                                </h6>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/end/img/undraw_profile_1.svg"), "html", null, true);
        echo "\"
                                            alt=\"...\">
                                        <div class=\"status-indicator bg-success\"></div>
                                    </div>
                                    <div class=\"font-weight-bold\">
                                        <div class=\"text-truncate\">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class=\"small text-gray-500\">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/end/img/undraw_profile_2.svg"), "html", null, true);
        echo "\"
                                            alt=\"...\">
                                        <div class=\"status-indicator\"></div>
                                    </div>
                                    <div>
                                        <div class=\"text-truncate\">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class=\"small text-gray-500\">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/end/img/undraw_profile_3.svg"), "html", null, true);
        echo "\"
                                            alt=\"...\">
                                        <div class=\"status-indicator bg-warning\"></div>
                                    </div>
                                    <div>
                                        <div class=\"text-truncate\">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class=\"small text-gray-500\">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=\"https://source.unsplash.com/Mv9hjnEUHR4/60x60\"
                                            alt=\"...\">
                                        <div class=\"status-indicator bg-success\"></div>
                                    </div>
                                    <div>
                                        <div class=\"text-truncate\">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class=\"small text-gray-500\">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Read More Messages</a>
                            </div>
                        </li>

                        <div class=\"topbar-divider d-none d-sm-block\"></div>

                        <!-- Nav Item - User Information -->
                        <li class=\"nav-item dropdown no-arrow\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">Douglas McGee</span>
                                <img class=\"img-profile rounded-circle\"
                                    src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/end/img/undraw_profile.svg"), "html", null, true);
        echo "\">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                aria-labelledby=\"userDropdown\">
                                <a class=\"dropdown-item\" href=\"#\">
                                    <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Profile
                                </a>
                                <a class=\"dropdown-item\" href=\"#\">
                                    <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Settings
                                </a>
                                <a class=\"dropdown-item\" href=\"#\">
                                    <i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Activity Log
                                </a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                                    <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Dashboard ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 368
    public function block_bd($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bd"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bd"));

        // line 369
        echo "                <!-- Begin Page Content -->
                <div class=\"container-fluid\">

                    <!-- Page Heading -->
                    <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
                        <h1 class=\"h3 mb-0 text-gray-800\">Dashboard</h1>
                        <a href=\"#\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i
                                class=\"fas fa-download fa-sm text-white-50\"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class=\"row\">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-primary shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                                Earnings (Monthly)</div>
                                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">\$40,000</div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-calendar fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-success shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">
                                                Earnings (Annual)</div>
                                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">\$215,000</div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-dollar-sign fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-info shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">Tasks
                                            </div>
                                            <div class=\"row no-gutters align-items-center\">
                                                <div class=\"col-auto\">
                                                    <div class=\"h5 mb-0 mr-3 font-weight-bold text-gray-800\">50%</div>
                                                </div>
                                                <div class=\"col\">
                                                    <div class=\"progress progress-sm mr-2\">
                                                        <div class=\"progress-bar bg-info\" role=\"progressbar\"
                                                            style=\"width: 50%\" aria-valuenow=\"50\" aria-valuemin=\"0\"
                                                            aria-valuemax=\"100\"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-clipboard-list fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-warning shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">
                                                Pending Requests</div>
                                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">18</div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-comments fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class=\"row\">

                        <!-- Area Chart -->
                        <div class=\"col-xl-8 col-lg-7\">
                            <div class=\"card shadow mb-4\">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Earnings Overview</h6>
                                    <div class=\"dropdown no-arrow\">
                                        <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\"
                                            data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                                        </a>
                                        <div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\"
                                            aria-labelledby=\"dropdownMenuLink\">
                                            <div class=\"dropdown-header\">Dropdown Header:</div>
                                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                            <div class=\"dropdown-divider\"></div>
                                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class=\"card-body\">
                                    <div class=\"chart-area\">
                                        <canvas id=\"myAreaChart\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class=\"col-xl-4 col-lg-5\">
                            <div class=\"card shadow mb-4\">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Revenue Sources</h6>
                                    <div class=\"dropdown no-arrow\">
                                        <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\"
                                            data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                                        </a>
                                        <div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\"
                                            aria-labelledby=\"dropdownMenuLink\">
                                            <div class=\"dropdown-header\">Dropdown Header:</div>
                                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                            <div class=\"dropdown-divider\"></div>
                                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class=\"card-body\">
                                    <div class=\"chart-pie pt-4 pb-2\">
                                        <canvas id=\"myPieChart\"></canvas>
                                    </div>
                                    <div class=\"mt-4 text-center small\">
                                        <span class=\"mr-2\">
                                            <i class=\"fas fa-circle text-primary\"></i> Direct
                                        </span>
                                        <span class=\"mr-2\">
                                            <i class=\"fas fa-circle text-success\"></i> Social
                                        </span>
                                        <span class=\"mr-2\">
                                            <i class=\"fas fa-circle text-info\"></i> Referral
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class=\"row\">

                        <!-- Content Column -->
                        <div class=\"col-lg-6 mb-4\">

                            <!-- Project Card Example -->
                            <div class=\"card shadow mb-4\">
                                <div class=\"card-header py-3\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Projects</h6>
                                </div>
                                <div class=\"card-body\">
                                    <h4 class=\"small font-weight-bold\">Server Migration <span
                                            class=\"float-right\">20%</span></h4>
                                    <div class=\"progress mb-4\">
                                        <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 20%\"
                                            aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <h4 class=\"small font-weight-bold\">Sales Tracking <span
                                            class=\"float-right\">40%</span></h4>
                                    <div class=\"progress mb-4\">
                                        <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 40%\"
                                            aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <h4 class=\"small font-weight-bold\">Customer Database <span
                                            class=\"float-right\">60%</span></h4>
                                    <div class=\"progress mb-4\">
                                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 60%\"
                                            aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <h4 class=\"small font-weight-bold\">Payout Details <span
                                            class=\"float-right\">80%</span></h4>
                                    <div class=\"progress mb-4\">
                                        <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 80%\"
                                            aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <h4 class=\"small font-weight-bold\">Account Setup <span
                                            class=\"float-right\">Complete!</span></h4>
                                    <div class=\"progress\">
                                        <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 100%\"
                                            aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Color System -->
                            <div class=\"row\">
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-primary text-white shadow\">
                                        <div class=\"card-body\">
                                            Primary
                                            <div class=\"text-white-50 small\">#4e73df</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-success text-white shadow\">
                                        <div class=\"card-body\">
                                            Success
                                            <div class=\"text-white-50 small\">#1cc88a</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-info text-white shadow\">
                                        <div class=\"card-body\">
                                            Info
                                            <div class=\"text-white-50 small\">#36b9cc</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-warning text-white shadow\">
                                        <div class=\"card-body\">
                                            Warning
                                            <div class=\"text-white-50 small\">#f6c23e</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-danger text-white shadow\">
                                        <div class=\"card-body\">
                                            Danger
                                            <div class=\"text-white-50 small\">#e74a3b</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-secondary text-white shadow\">
                                        <div class=\"card-body\">
                                            Secondary
                                            <div class=\"text-white-50 small\">#858796</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-light text-black shadow\">
                                        <div class=\"card-body\">
                                            Light
                                            <div class=\"text-black-50 small\">#f8f9fc</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-dark text-white shadow\">
                                        <div class=\"card-body\">
                                            Dark
                                            <div class=\"text-white-50 small\">#5a5c69</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class=\"col-lg-6 mb-4\">

                            <!-- Illustrations -->
                            <div class=\"card shadow mb-4\">
                                <div class=\"card-header py-3\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Illustrations</h6>
                                </div>
                                <div class=\"card-body\">
                                    <div class=\"text-center\">
                                        <img class=\"img-fluid px-3 px-sm-4 mt-3 mb-4\" style=\"width: 25rem;\"
                                            src=\"";
        // line 669
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/end/img/undraw_posting_photo.svg"), "html", null, true);
        echo "\" alt=\"...\">
                                    </div>
                                    <p>Add some quality, svg illustrations to your project courtesy of <a
                                            target=\"_blank\" rel=\"nofollow\" href=\"https://undraw.co/\">unDraw</a>, a
                                        constantly updated collection of beautiful svg images that you can use
                                        completely free and without attribution!</p>
                                    <a target=\"_blank\" rel=\"nofollow\" href=\"https://undraw.co/\">Browse Illustrations on
                                        unDraw &rarr;</a>
                                </div>
                            </div>

                            <!-- Approach -->
                            <div class=\"card shadow mb-4\">
                                <div class=\"card-header py-3\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Development Approach</h6>
                                </div>
                                <div class=\"card-body\">
                                    <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                                        CSS bloat and poor page performance. Custom CSS classes are used to create
                                        custom components and custom utility classes.</p>
                                    <p class=\"mb-0\">Before working with this theme, you should become familiar with the
                                        Bootstrap framework, especially the utility classes.</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class=\"sticky-footer bg-white\">
                <div class=\"container my-auto\">
                    <div class=\"copyright text-center my-auto\">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

 
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class=\"scroll-to-top rounded\" href=\"#page-top\">
        <i class=\"fas fa-angle-up\"></i>
    </a>

    <!-- Logout Modal-->
    <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
        aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">Select \"Logout\" below if you are ready to end your current session.</div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
                    <a class=\"btn btn-primary\" href=\"login.html\">Logout</a>
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
        return "base.html.twig";
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
        return array (  852 => 669,  550 => 369,  540 => 368,  521 => 12,  481 => 338,  444 => 304,  429 => 292,  414 => 280,  279 => 148,  226 => 98,  215 => 90,  168 => 46,  140 => 21,  131 => 15,  125 => 12,  115 => 4,  105 => 3,  90 => 760,  86 => 759,  80 => 756,  74 => 753,  68 => 750,  62 => 747,  58 => 746,  55 => 745,  52 => 368,  50 => 3,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
{% block head %}
<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>{% block title %} Dashboard {% endblock %}</title>

    <!-- Custom fonts for this template-->
    <link href=\"{{asset('/end/vendor/fontawesome-free/css/all.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link
        href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
        rel=\"stylesheet\">

    <!-- Custom styles for this template-->
    <link href=\"{{asset('/end/css/sb-admin-2.css')}}\" rel=\"stylesheet\">

</head>

<body id=\"page-top\">

    <!-- Page Wrapper -->
    <div id=\"wrapper\">

        <!-- Sidebar -->
        <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

            <!-- Sidebar - Brand -->
            <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"index.html\">
                <div class=\"sidebar-brand-icon rotate-n-15\">
                    <i class=\"fas fa-laugh-wink\"></i>
                </div>
                <div class=\"sidebar-brand-text mx-3\">180 <sup>°</sup></div>
            </a>

            <!-- Divider -->
            <hr class=\"sidebar-divider my-0\">

            <!-- Nav Item - Dashboard -->
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href={{ path('index') }}>
                    <i class=\"fas fa-fw fa-tachometer-alt\"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class=\"sidebar-divider\">

            <!-- Heading -->
            <div class=\"sidebar-heading\">
                Interface
            </div>
             <!-- Nav Item - Utilis nessrine Collapse Menu -->
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"afficheruser\"  data-target=\"#collapseUtilities\"
                   
                    <span>Utilisateur</span>
                </a>
               
            </li>

           

            <!-- Nav Item - sante Collapse Menu -->
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"#\"  data-target=\"#collapseUtilities\"
                   
                    <span>Sante</span>
                </a>
               
            </li>

             

              <!-- Nav Item - rendez vous Collapse Menu -->
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"('rendez_vous')\"  data-target=\"#collapseUtilities\"
                   
                    <span>Rendez vous</span>
                </a>
               
            </li>
                  <!-- Nav Item - activite Collapse Menu -->
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"{{ path('afficher') }}\" data-target=\"#collapseUtilities\"
                   
                    <span>Activites</span>
                </a>
               
            </li>
             <!-- Nav Item - Exercices Collapse Menu -->
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"{{ path('fetch') }}\"  data-target=\"#collapseUtilities\"
                   
                    <span>Exercices</span>
                </a>
               
            </li>

              <!-- Nav Item - Nutrition Collapse Menu -->
            <li class=\"nav-item\">
                <a class=\"nav-link collapsed\" href=\"#\"  data-target=\"#collapseUtilities\"
                   
                    <span>Nutrition</span>
                </a>
               
            </li>

            <!-- Divider -->
            <hr class=\"sidebar-divider\">

            <!-- Heading -->
            <div class=\"sidebar-heading\">
                Addons
            </div>

           

            <!-- Nav Item - Charts -->
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"charts.html\">
                    <i class=\"fas fa-fw fa-chart-area\"></i>
                    <span>Charts</span></a>
            </li>
            <!-- REP eya -->
            <!-- Nav Item - Tables -->
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">
                    <i class=\"fas fa-fw fa-table\"></i>
                    <span>Reponse</span></a>
            </li>

            <!-- Divider -->
            <hr class=\"sidebar-divider d-none d-md-block\">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class=\"text-center d-none d-md-inline\">
                <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
            </div>

            <!-- Sidebar Message -->
            <div class=\"sidebar-card d-none d-lg-flex\">
                <img class=\"sidebar-card-illustration mb-2\" src=\"{{asset('end/img/undraw_rocket.svg')}}\" alt=\"...\">
                <p class=\"text-center mb-2\"><strong>360°</strong> is packed with premium features, components, and more!</p>
                <a class=\"btn btn-success btn-sm\" href=\"https://startbootstrap.com/theme/sb-admin-pro\">Upgrade to Pro!</a>
            </div>


        </ul>
        <!-- End of Sidebar -->
 
        <!-- Content Wrapper -->
   
        <div id=\"content-wrapper\" class=\"d-flex flex-column\">
 
            <!-- Main Content -->
            <div id=\"content\">

                <!-- Topbar -->
                <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
                        <i class=\"fa fa-bars\"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\"
                                aria-label=\"Search\" aria-describedby=\"basic-addon2\">
                            <div class=\"input-group-append\">
                                <button class=\"btn btn-primary\" type=\"button\">
                                    <i class=\"fas fa-search fa-sm\"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class=\"navbar-nav ml-auto\">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class=\"nav-item dropdown no-arrow d-sm-none\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-search fa-fw\"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\"
                                aria-labelledby=\"searchDropdown\">
                                <form class=\"form-inline mr-auto w-100 navbar-search\">
                                    <div class=\"input-group\">
                                        <input type=\"text\" class=\"form-control bg-light border-0 small\"
                                            placeholder=\"Search for...\" aria-label=\"Search\"
                                            aria-describedby=\"basic-addon2\">
                                        <div class=\"input-group-append\">
                                            <button class=\"btn btn-primary\" type=\"button\">
                                                <i class=\"fas fa-search fa-sm\"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class=\"nav-item dropdown no-arrow mx-1\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-bell fa-fw\"></i>
                                <!-- Counter - Alerts -->
                                <span class=\"badge badge-danger badge-counter\">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                aria-labelledby=\"alertsDropdown\">
                                <h6 class=\"dropdown-header\">
                                    Alerts Center
                                </h6>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"mr-3\">
                                        <div class=\"icon-circle bg-primary\">
                                            <i class=\"fas fa-file-alt text-white\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"small text-gray-500\">December 12, 2019</div>
                                        <span class=\"font-weight-bold\">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"mr-3\">
                                        <div class=\"icon-circle bg-success\">
                                            <i class=\"fas fa-donate text-white\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"small text-gray-500\">December 7, 2019</div>
                                        \$290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"mr-3\">
                                        <div class=\"icon-circle bg-warning\">
                                            <i class=\"fas fa-exclamation-triangle text-white\"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class=\"small text-gray-500\">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class=\"nav-item dropdown no-arrow mx-1\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-envelope fa-fw\"></i>
                                <!-- Counter - Messages -->
                                <span class=\"badge badge-danger badge-counter\">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                aria-labelledby=\"messagesDropdown\">
                                <h6 class=\"dropdown-header\">
                                    Message Center
                                </h6>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=\"{{asset('/end/img/undraw_profile_1.svg')}}\"
                                            alt=\"...\">
                                        <div class=\"status-indicator bg-success\"></div>
                                    </div>
                                    <div class=\"font-weight-bold\">
                                        <div class=\"text-truncate\">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class=\"small text-gray-500\">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=\"{{asset('/end/img/undraw_profile_2.svg')}}\"
                                            alt=\"...\">
                                        <div class=\"status-indicator\"></div>
                                    </div>
                                    <div>
                                        <div class=\"text-truncate\">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class=\"small text-gray-500\">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=\"{{asset('/end/img/undraw_profile_3.svg')}}\"
                                            alt=\"...\">
                                        <div class=\"status-indicator bg-warning\"></div>
                                    </div>
                                    <div>
                                        <div class=\"text-truncate\">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class=\"small text-gray-500\">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
                                    <div class=\"dropdown-list-image mr-3\">
                                        <img class=\"rounded-circle\" src=\"https://source.unsplash.com/Mv9hjnEUHR4/60x60\"
                                            alt=\"...\">
                                        <div class=\"status-indicator bg-success\"></div>
                                    </div>
                                    <div>
                                        <div class=\"text-truncate\">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class=\"small text-gray-500\">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Read More Messages</a>
                            </div>
                        </li>

                        <div class=\"topbar-divider d-none d-sm-block\"></div>

                        <!-- Nav Item - User Information -->
                        <li class=\"nav-item dropdown no-arrow\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\"
                                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">Douglas McGee</span>
                                <img class=\"img-profile rounded-circle\"
                                    src=\"{{asset('/end/img/undraw_profile.svg')}}\">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\"
                                aria-labelledby=\"userDropdown\">
                                <a class=\"dropdown-item\" href=\"#\">
                                    <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Profile
                                </a>
                                <a class=\"dropdown-item\" href=\"#\">
                                    <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Settings
                                </a>
                                <a class=\"dropdown-item\" href=\"#\">
                                    <i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Activity Log
                                </a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                                    <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
 {% endblock %}
 {% block bd %}
                <!-- Begin Page Content -->
                <div class=\"container-fluid\">

                    <!-- Page Heading -->
                    <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
                        <h1 class=\"h3 mb-0 text-gray-800\">Dashboard</h1>
                        <a href=\"#\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i
                                class=\"fas fa-download fa-sm text-white-50\"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class=\"row\">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-primary shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
                                                Earnings (Monthly)</div>
                                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">\$40,000</div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-calendar fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-success shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">
                                                Earnings (Annual)</div>
                                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">\$215,000</div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-dollar-sign fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-info shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">Tasks
                                            </div>
                                            <div class=\"row no-gutters align-items-center\">
                                                <div class=\"col-auto\">
                                                    <div class=\"h5 mb-0 mr-3 font-weight-bold text-gray-800\">50%</div>
                                                </div>
                                                <div class=\"col\">
                                                    <div class=\"progress progress-sm mr-2\">
                                                        <div class=\"progress-bar bg-info\" role=\"progressbar\"
                                                            style=\"width: 50%\" aria-valuenow=\"50\" aria-valuemin=\"0\"
                                                            aria-valuemax=\"100\"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-clipboard-list fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class=\"col-xl-3 col-md-6 mb-4\">
                            <div class=\"card border-left-warning shadow h-100 py-2\">
                                <div class=\"card-body\">
                                    <div class=\"row no-gutters align-items-center\">
                                        <div class=\"col mr-2\">
                                            <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">
                                                Pending Requests</div>
                                            <div class=\"h5 mb-0 font-weight-bold text-gray-800\">18</div>
                                        </div>
                                        <div class=\"col-auto\">
                                            <i class=\"fas fa-comments fa-2x text-gray-300\"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class=\"row\">

                        <!-- Area Chart -->
                        <div class=\"col-xl-8 col-lg-7\">
                            <div class=\"card shadow mb-4\">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Earnings Overview</h6>
                                    <div class=\"dropdown no-arrow\">
                                        <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\"
                                            data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                                        </a>
                                        <div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\"
                                            aria-labelledby=\"dropdownMenuLink\">
                                            <div class=\"dropdown-header\">Dropdown Header:</div>
                                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                            <div class=\"dropdown-divider\"></div>
                                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class=\"card-body\">
                                    <div class=\"chart-area\">
                                        <canvas id=\"myAreaChart\"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class=\"col-xl-4 col-lg-5\">
                            <div class=\"card shadow mb-4\">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Revenue Sources</h6>
                                    <div class=\"dropdown no-arrow\">
                                        <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\"
                                            data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                                        </a>
                                        <div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\"
                                            aria-labelledby=\"dropdownMenuLink\">
                                            <div class=\"dropdown-header\">Dropdown Header:</div>
                                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                                            <div class=\"dropdown-divider\"></div>
                                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class=\"card-body\">
                                    <div class=\"chart-pie pt-4 pb-2\">
                                        <canvas id=\"myPieChart\"></canvas>
                                    </div>
                                    <div class=\"mt-4 text-center small\">
                                        <span class=\"mr-2\">
                                            <i class=\"fas fa-circle text-primary\"></i> Direct
                                        </span>
                                        <span class=\"mr-2\">
                                            <i class=\"fas fa-circle text-success\"></i> Social
                                        </span>
                                        <span class=\"mr-2\">
                                            <i class=\"fas fa-circle text-info\"></i> Referral
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class=\"row\">

                        <!-- Content Column -->
                        <div class=\"col-lg-6 mb-4\">

                            <!-- Project Card Example -->
                            <div class=\"card shadow mb-4\">
                                <div class=\"card-header py-3\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Projects</h6>
                                </div>
                                <div class=\"card-body\">
                                    <h4 class=\"small font-weight-bold\">Server Migration <span
                                            class=\"float-right\">20%</span></h4>
                                    <div class=\"progress mb-4\">
                                        <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 20%\"
                                            aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <h4 class=\"small font-weight-bold\">Sales Tracking <span
                                            class=\"float-right\">40%</span></h4>
                                    <div class=\"progress mb-4\">
                                        <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 40%\"
                                            aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <h4 class=\"small font-weight-bold\">Customer Database <span
                                            class=\"float-right\">60%</span></h4>
                                    <div class=\"progress mb-4\">
                                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 60%\"
                                            aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <h4 class=\"small font-weight-bold\">Payout Details <span
                                            class=\"float-right\">80%</span></h4>
                                    <div class=\"progress mb-4\">
                                        <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 80%\"
                                            aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <h4 class=\"small font-weight-bold\">Account Setup <span
                                            class=\"float-right\">Complete!</span></h4>
                                    <div class=\"progress\">
                                        <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 100%\"
                                            aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Color System -->
                            <div class=\"row\">
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-primary text-white shadow\">
                                        <div class=\"card-body\">
                                            Primary
                                            <div class=\"text-white-50 small\">#4e73df</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-success text-white shadow\">
                                        <div class=\"card-body\">
                                            Success
                                            <div class=\"text-white-50 small\">#1cc88a</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-info text-white shadow\">
                                        <div class=\"card-body\">
                                            Info
                                            <div class=\"text-white-50 small\">#36b9cc</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-warning text-white shadow\">
                                        <div class=\"card-body\">
                                            Warning
                                            <div class=\"text-white-50 small\">#f6c23e</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-danger text-white shadow\">
                                        <div class=\"card-body\">
                                            Danger
                                            <div class=\"text-white-50 small\">#e74a3b</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-secondary text-white shadow\">
                                        <div class=\"card-body\">
                                            Secondary
                                            <div class=\"text-white-50 small\">#858796</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-light text-black shadow\">
                                        <div class=\"card-body\">
                                            Light
                                            <div class=\"text-black-50 small\">#f8f9fc</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 mb-4\">
                                    <div class=\"card bg-dark text-white shadow\">
                                        <div class=\"card-body\">
                                            Dark
                                            <div class=\"text-white-50 small\">#5a5c69</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class=\"col-lg-6 mb-4\">

                            <!-- Illustrations -->
                            <div class=\"card shadow mb-4\">
                                <div class=\"card-header py-3\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Illustrations</h6>
                                </div>
                                <div class=\"card-body\">
                                    <div class=\"text-center\">
                                        <img class=\"img-fluid px-3 px-sm-4 mt-3 mb-4\" style=\"width: 25rem;\"
                                            src=\"{{asset('/end/img/undraw_posting_photo.svg')}}\" alt=\"...\">
                                    </div>
                                    <p>Add some quality, svg illustrations to your project courtesy of <a
                                            target=\"_blank\" rel=\"nofollow\" href=\"https://undraw.co/\">unDraw</a>, a
                                        constantly updated collection of beautiful svg images that you can use
                                        completely free and without attribution!</p>
                                    <a target=\"_blank\" rel=\"nofollow\" href=\"https://undraw.co/\">Browse Illustrations on
                                        unDraw &rarr;</a>
                                </div>
                            </div>

                            <!-- Approach -->
                            <div class=\"card shadow mb-4\">
                                <div class=\"card-header py-3\">
                                    <h6 class=\"m-0 font-weight-bold text-primary\">Development Approach</h6>
                                </div>
                                <div class=\"card-body\">
                                    <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                                        CSS bloat and poor page performance. Custom CSS classes are used to create
                                        custom components and custom utility classes.</p>
                                    <p class=\"mb-0\">Before working with this theme, you should become familiar with the
                                        Bootstrap framework, especially the utility classes.</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class=\"sticky-footer bg-white\">
                <div class=\"container my-auto\">
                    <div class=\"copyright text-center my-auto\">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

 
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class=\"scroll-to-top rounded\" href=\"#page-top\">
        <i class=\"fas fa-angle-up\"></i>
    </a>

    <!-- Logout Modal-->
    <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
        aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">Select \"Logout\" below if you are ready to end your current session.</div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
                    <a class=\"btn btn-primary\" href=\"login.html\">Logout</a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
    <!-- Bootstrap core JavaScript-->
    <script src=\"{{asset('/end/vendor/jquery/jquery.min.js')}}\"></script>
    <script src=\"{{asset('/endvendor/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>

    <!-- Core plugin JavaScript-->
    <script src=\"{{asset('/end/vendor/jquery-easing/jquery.easing.min.js')}}\"></script>

    <!-- Custom scripts for all pages-->
    <script src=\"{{asset('/end/js/sb-admin-2.min.js')}}\"></script>

    <!-- Page level plugins -->
    <script src=\"{{asset('/end/vendor/chart.js/Chart.min.js')}}\"></script>

    <!-- Page level custom scripts -->
    <script src=\"{{asset('/endjs/demo/chart-area-demo.js')}}\"></script>
    <script src=\"{{asset('/end/js/demo/chart-pie-demo.js')}}\"></script>

</body>

</html>", "base.html.twig", "C:\\Users\\ASUS\\PiProjecttt\\templates\\base.html.twig");
    }
}
