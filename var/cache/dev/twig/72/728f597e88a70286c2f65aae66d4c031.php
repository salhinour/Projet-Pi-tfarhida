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

/* trajet_controller_back/new.html.twig */
class __TwigTemplate_ec71169508d3c55d7936012df9592f7b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trajet_controller_back/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "trajet_controller_back/new.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>
<!-- Add SweetAlert CDN -->
<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@10\"></script>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <title>Utilisateurs - Tfarhida</title>

    <link href=\"/sbadmin2/vendor/fontawesome-free/css/all.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">
    <link href=\"/sbadmin2/css/sb-admin-2.min.css\" rel=\"stylesheet\">
    <link href=\"/css/app.css\" rel=\"stylesheet\">
    <link href=\"/sbadmin2/vendor/datatables/dataTables.bootstrap4.min.css\" rel=\"stylesheet\">

    <style>
        .button-container {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .button-group {
            margin-top: 20px;
        }

        .btn {
            display: inline-block;
            padding: 8px 12px;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: #fff;
        }
         .btn-third {
            background-color: #F98D75;
            color: #fff;
        }
      
    
    </style>
</head>
    <body class=\"\" id=\"page-top\">
            
        <div id=\"wrapper\">
            
            
<ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">
    <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"/accueil\">
        <div class=\"sidebar-brand-icon rotate-n-15\">
            <i class=\"fas fa-laugh-wink\"></i>
        </div>
        <div class=\"sidebar-brand-text mx-3\">Tfarhida</div>
    </a>

    <hr class=\"sidebar-divider my-0\">

    
    <hr class=\"sidebar-divider my-0\">

                                                                                
            
        

    <li class=\"nav-item             active
    \">
        <a class=\"nav-link\" href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_moyen_transport_back_index");
        echo "\" aria-expanded=\"false\">
            <i class=\"fas fa-user\"></i>
            <span>MoyenTransport</span>
        </a>
    </li>
     <li class=\"nav-item             active
    \">
        <a class=\"nav-link\" href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trajet_controller_back_index");
        echo "\" aria-expanded=\"false\">
            <i class=\"fas fa-user\"></i>
            <span>Trajet</span>
        </a>
    </li>

    <hr class=\"sidebar-divider d-none d-md-block\">

    <div class=\"text-center d-none d-md-inline\">
        <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
    </div>

</ul>
           
            <div id=\"content-wrapper\" class=\"d-flex flex-column\">

                <div id=\"content\">

                    <!-- Topbar -->
<nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow topbar\">

    <!-- Sidebar Toggle (Topbar) -->
    <button class=\"btn btn-link d-md-none rounded-circle mr-3\" id=\"sidebarToggleTop\">
        <i class=\"fa fa-bars\"></i>
    </button>

                                                                    
        
    
    <ul class=\"navbar-nav ml-auto\">

                                                                        
        
        
                                                                                 
            
        
                                                                                
            
        
        <div class=\"topbar-divider d-none d-sm-block\"></div>

        <!-- Nav Item - User Information -->
        <li class=\"nav-item dropdown no-arrow\">
            <a aria-expanded=\"false\" aria-haspopup=\"true\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"userDropdown\" role=\"button\">
                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\"><i class=\"far fa-user text-primary mr-2 fa-2x \"></i>Ala Suidi </span>
                            </a>
            <!-- Dropdown - User Information -->
            <div aria-labelledby=\"userDropdown\" class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\">
                <a class=\"dropdown-item\" href=\"/admin/profil\">
                    <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Profil
                </a>
                <a class=\"dropdown-item\" href=\"/admin/parametre\">
                    <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Paramètres
                </a>
                                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" data-target=\"#logoutModal\" data-toggle=\"modal\" href=\"#\">
                    <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Déconnexion
                </a>
            </div>
        </li>

    </ul>

</nav>
<!-- End of Topbar -->
                    
                    <div class=\"container-fluid\">

                        <h1 class=\"h3 mb-0 text-gray-800\">Gestion des trajets</h1>
                        
                        
                        
            <div id=\"table-actions\" class=\"d-flex align-items-center justify-content-between mb-4\">
        <div class=\"d-flex\">
            <button id=\"btPrint\" onclick=\"createPDF()\" class=\"export-pdf-btn\">
                <i class=\"fas fa-file-pdf\"></i> Export PDF
            </button>
            <input type=\"text\" id=\"myInput\" onkeyup=\"myFunction()\" placeholder=\"Search ...\" class=\"form-control\">
        </div>
        <div>
            
        </div>
    </div>

";
        // line 176
        $this->displayBlock('body', $context, $blocks);
        // line 182
        echo " </div>
    </div>
                    </div>
                </div>
                <footer class=\"sticky-footer bg-white\">
                    <div class=\"container my-auto\">
                        <div class=\"copyright text-center my-auto\">
                            <span>Copyright © Tfarhida - 2024 - esprit</span>
                        </div>
                    </div>
                </footer>

            

        

        <a class=\"scroll-to-top rounded\" href=\"#page-top\">
            <i class=\"fas fa-angle-up\"></i>
        </a>

        <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Êtes-vous sûr de vouloir vous déconnecter ?</h5>
                <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">Sélectionner \"Déconnexion\" seulement si vous êtes sûr de vouloir vous déconnecter.</div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Annuler</button>
                <a class=\"btn btn-primary\" href=\"/deconnexion\">Déconnexion</a>
            </div>
        </div>
    </div>
</div>
        <!-- Bootstrap core JavaScript-->
        <script src=\"/sbadmin2/vendor/jquery/jquery.min.js\"></script>
        <script src=\"/sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

        <!-- Core plugin JavaScript-->
        <script src=\"/sbadmin2/vendor/jquery-easing/jquery.easing.min.js\"></script>

        <!-- Custom scripts for all pages-->
        <script src=\"/sbadmin2/js/sb-admin-2.min.js\"></script>

            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js\"></script>
    <script>
      function createPDF() {
        var sTable = document.getElementById('table').outerHTML;
        var style = \"<style>\";
        style = style + \"table {width: 100%; border-collapse: collapse; margin-top: 20px;}\";
        style = style + \"th, td {border: 1px solid #ddd; padding: 8px; text-align: left;}\";
        style = style + \"th {background-color: #f2f2f2;}\";
        style = style + \"</style>\";
    
        // CREATE A WINDOW OBJECT.
        var win = window.open('', '', 'height=700,width=700');
        win.document.write('<html><head>');
        win.document.write('<title>product list PDF</title>');   // <title> FOR PDF HEADER.
        win.document.write(style);          // ADD STYLE INSIDE THE HEAD TAG.
        win.document.write('</head>');
        win.document.write('<body>');
        win.document.write(sTable);         // THE TABLE CONTENTS INSIDE THE BODY TAG.
        win.document.write('</body></html>');
        win.document.close(); \t// CLOSE THE CURRENT WINDOW.
        win.print();    // PRINT THE CONTENTS.
    }
    </script>
    <script>
        function myFunction() {
          // Declare variables
          var input, filter, table, tr, td, i, txtValue;
          input = document.getElementById(\"myInput\");
          filter = input.value.toUpperCase();
          table = document.getElementById(\"table\");
          tr = table.getElementsByTagName(\"tr\");
        
          // Loop through all table rows, and hide those who don't match the search query
          for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName(\"td\")[1];
            if (td) {
              txtValue = td.textContent || td.innerText;
              if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = \"\";
              } else {
                tr[i].style.display = \"none\";
              }
            }
          }
        }

        function sortTable(n) {
          var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
          table = document.getElementById(\"table\");
          switching = true;
          dir = \"asc\";

          while (switching) {
            switching = false;
            rows = table.rows;

            for (i = 1; i < (rows.length - 1); i++) {
              shouldSwitch = false;
              x = rows[i].getElementsByTagName(\"TD\")[n];
              y = rows[i + 1].getElementsByTagName(\"TD\")[n];

              if (dir == \"asc\") {
                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                  shouldSwitch = true;
                  break;
                }
              } else if (dir == \"desc\") {
                if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                  shouldSwitch = true;
                  break;
                }
              }
            }

            if (shouldSwitch) {
              rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
              switching = true;
              switchcount++;
            } else {
              if (switchcount == 0 && dir == \"asc\") {
                dir = \"desc\";
                switching = true;
              }
            }
          }
        }
    </script>
    
<div id=\"sfwdt5e5522\" class=\"sf-toolbar\" role=\"region\" aria-label=\"Symfony Web Debug Toolbar\" data-sfurl=\"http://127.0.0.1:8000/_wdt/5e5522\" style=\"display: block;\"><!-- START of Symfony Web Debug Toolbar -->
<div id=\"sfMiniToolbar-5e5522\" class=\"sf-minitoolbar\" data-no-turbolink=\"\" data-turbo=\"false\" style=\"display: none;\">
    <button type=\"button\" title=\"Show Symfony toolbar\" id=\"sfToolbarMiniToggler-5e5522\" accesskey=\"D\" aria-expanded=\"false\" aria-controls=\"sfToolbarMainContent-5e5522\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" aria-hidden=\"true\" focusable=\"false\"><path fill=\"#AAA\" d=\"M12 .9C5.8.9.9 5.8.9 12a11 11 0 1 0 22.2 0A11 11 0 0 0 12 .9zm6.5 6c-.6 0-.9-.3-.9-.8 0-.2 0-.4.2-.6l.2-.4c0-.3-.5-.4-.6-.4-1.8.1-2.3 2.5-2.7 4.4l-.2 1c1 .2 1.8 0 2.2-.3.6-.4-.2-.7-.1-1.2.1-.3.5-.5.7-.6.5 0 .7.5.7.9 0 .7-1 1.8-3 1.8l-.6-.1-.6 2.4c-.4 1.6-.8 3.8-2.4 5.7-1.4 1.7-2.9 1.9-3.5 1.9-1.2 0-1.9-.6-2-1.5 0-.8.7-1.3 1.2-1.3.6 0 1.1.5 1.1 1s-.2.6-.4.6c-.1.1-.3.2-.3.4 0 .1.1.3.4.3.5 0 .8-.3 1.1-.5 1.2-.9 1.6-2.7 2.2-5.7l.1-.7.7-3.2c-.8-.6-1.3-1.4-2.4-1.7-.6-.1-1.1.1-1.5.5-.4.5-.2 1.1.2 1.5l.7.6c.7.8 1.2 1.6 1 2.5-.3 1.5-2 2.6-4 1.9-1.8-.6-2-1.8-1.8-2.5.2-.6.6-.7 1.1-.6.5.2.6.7.6 1.2l-.1.3c-.2.1-.3.3-.3.4-.1.4.4.6.7.7.7.3 1.6-.2 1.8-.8a1 1 0 0 0-.4-1.1l-.7-.8c-.4-.4-1.1-1.4-.7-2.6.1-.5.4-.9.7-1.3a4 4 0 0 1 2.8-.6c1.2.4 1.8 1.1 2.6 1.8.5-1.2 1-2.4 1.8-3.5.9-.9 1.9-1.6 3.1-1.7 1.3.2 2.2.7 2.2 1.6 0 .4-.2 1.1-.9 1.1z\"></path></svg>

    </button>
</div>
<div id=\"sfToolbarClearer-5e5522\" class=\"sf-toolbar-clearer\" style=\"display: block;\"></div>

<div id=\"sfToolbarMainContent-5e5522\" class=\"sf-toolbarreset clear-fix\" data-no-turbolink=\"\" style=\"display: block;\">
                                                
    
    
    
    
    
    <div class=\"sf-toolbar-block sf-toolbar-block-request sf-toolbar-status-normal \">
    <a href=\"http://127.0.0.1:8000/_profiler/5e5522?panel=request\">        <div class=\"sf-toolbar-icon\">        <span class=\"sf-toolbar-status sf-toolbar-status-green\">200</span>
                                            <span class=\"sf-toolbar-label\"> @</span>
            <span class=\"sf-toolbar-value sf-toolbar-info-piece-additional\">admin_user_index</span>
            </div>
    </a>        <div class=\"sf-toolbar-info\">        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>HTTP status</b>
                <span>200 OK</span>
            </div>

            
            <div class=\"sf-toolbar-info-piece\">
                <b>Controller</b>
                <span>            <a href=\"http://127.0.0.1:8000/_profiler/open?file=src\\Controller\\AdminUserController.php&amp;line=22#line22\" title=\"App\\Controller\\AdminUserController\">AdminUserController :: index</a>
    </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Route name</b>
                <span>admin_user_index</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Has session</b>
                <span>yes</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Stateless Check</b>
                <span>no</span>
            </div>
        </div>

        
            </div>
</div>


                                                                            
    
    
    <div class=\"sf-toolbar-block sf-toolbar-block-time sf-toolbar-status-normal \">
    <a href=\"http://127.0.0.1:8000/_profiler/5e5522?panel=time\">        <div class=\"sf-toolbar-icon\">        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#AAA\" d=\"M15.1 4.3a13 13 0 0 0-6.2 0c-.3 0-.7-.2-.7-.5v-.4c0-1.2 1-2.3 2.3-2.3h3c1.2 0 2.3 1 2.3 2.3v.3c0 .4-.4.6-.7.6zm5.8 9.7a9 9 0 0 1-17.8 0 9 9 0 0 1 17.8 0zm-4.2 1c0-.6-.4-1-1-1H13V8.4c0-.6-.4-1-1-1s-1 .4-1 1v6.2c0 .6.4 1.3 1 1.3h3.7c.5.1 1-.3 1-.9z\"></path></svg>

        <span class=\"sf-toolbar-value\">396</span>
        <span class=\"sf-toolbar-label\">ms</span>
    </div>
    </a>        <div class=\"sf-toolbar-info\">        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>396 ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Initialization time</b>
            <span>96 ms</span>
        </div>
    </div>
</div>


                                                                
    
    <div class=\"sf-toolbar-block sf-toolbar-block-time sf-toolbar-status-normal \">
    <a href=\"http://127.0.0.1:8000/_profiler/5e5522?panel=time\">        <div class=\"sf-toolbar-icon\">                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#AAA\" d=\"M6 18.9V15h12v3.9c0 .7-.2 1.1-1 1.1H7c-.8 0-1-.4-1-1.1zM20 1c-.6 0-1 .5-1 1.1v18c0 .5-.4.9-.9.9H5.9a.9.9 0 0 1-.9-.9v-18C5 1.5 4.6 1 4 1c-.5 0-1 .5-1 1.1v18C3 21.7 4.3 23 5.9 23h12.2c1.6 0 2.9-1.3 2.9-2.9v-18c0-.6-.4-1.1-1-1.1zm-2 8H6v5h12V9z\"></path></svg>

        <span class=\"sf-toolbar-value\">24.0</span>
        <span class=\"sf-toolbar-label\">MiB</span>
    </div>
    </a>        <div class=\"sf-toolbar-info\">        <div class=\"sf-toolbar-info-piece\">
            <b>Peak memory usage</b>
            <span>24.0 MiB</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>PHP memory limit</b>
            <span>512 MiB</span>
        </div>
    </div>
</div>


                                                                
                                                                
    
    <div class=\"sf-toolbar-block sf-toolbar-block-ajax sf-toolbar-status-normal\" style=\"display: none;\">
            <div class=\"sf-toolbar-icon\">        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#AAA\" d=\"M9.8 18L6 22.4c-.3.3-.8.4-1.1 0L1 18c-.4-.5-.1-1 .5-1H3V6.4C3 3.8 5.5 2 8.2 2h3.9c1.1 0 2 .9 2 2s-.9 2-2 2H8.2C7.7 6 7 6 7 6.4V17h2.2c.6 0 1 .5.6 1zM23 6l-3.8-4.5a.8.8 0 0 0-1.1 0L14.2 6c-.4.5-.1 1 .5 1H17v10.6c0 .4-.7.4-1.2.4h-3.9c-1.1 0-2 .9-2 2s.9 2 2 2h3.9c2.6 0 5.2-1.8 5.2-4.4V7h1.5c.6 0 .9-.5.5-1z\"></path></svg>

        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    </div>
            <div class=\"sf-toolbar-info\">        <div class=\"sf-toolbar-info-piece\">
            <span class=\"sf-toolbar-header\">
                <b class=\"sf-toolbar-ajax-info\">0 AJAX requests</b>
                <b class=\"sf-toolbar-action\">(<a class=\"sf-toolbar-ajax-clear\" href=\"javascript:void(0);\">Clear</a>)</b>
            </span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Profile</th>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    </div>
</div>


                                                                
                                                                                    
        
        <div class=\"sf-toolbar-block sf-toolbar-block-logger sf-toolbar-status-none \">
    <a href=\"http://127.0.0.1:8000/_profiler/5e5522?panel=logger\">        <div class=\"sf-toolbar-icon\">                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#AAA\" d=\"M21 4v13.8c0 2.7-2.5 5.2-5.2 5.2H6c-.6 0-1-.4-1-1s.4-1 1-1h9.8c1.6 0 3.2-1.7 3.2-3.2V4c0-.6.4-1 1-1s1 .4 1 1zM5.5 20A2.5 2.5 0 0 1 3 17.5v-14C3 2.1 4.1 1 5.5 1h10.1C16.9 1 18 2.1 18 3.5v14.1c0 1.4-1.1 2.5-2.5 2.5h-10zM9 11.4c0 .3.3.6.6.6h1.8c.3 0 .6-.3.6-.6V4.6c0-.3-.3-.6-.6-.6H9.6c-.3 0-.6.3-.6.6v6.8zm0 5c0 .3.3.6.6.6h1.8c.3 0 .6-.3.6-.6v-1.8c0-.3-.3-.6-.6-.6H9.6c-.3 0-.6.3-.6.6v1.8z\"></path></svg>

            <span class=\"sf-toolbar-value\">5</span>
        </div>
    </a>        <div class=\"sf-toolbar-info\">            <div class=\"sf-toolbar-info-piece\">
                <b>Errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-\">0</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Warnings</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-\">0</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Deprecations</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-none\">5</span>
            </div>
        </div>
</div>

    
                                                                        
                                                                
                                                                
                                                                                
        
        <div class=\"sf-toolbar-block sf-toolbar-block-security sf-toolbar-status-normal \">
    <a href=\"http://127.0.0.1:8000/_profiler/5e5522?panel=security\">        <div class=\"sf-toolbar-icon\">            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#AAA\" d=\"M21 20.4V22H3v-1.6c0-3.7 2.4-6.9 5.8-8-1.7-1.1-2.9-3-2.9-5.2 0-3.4 2.7-6.1 6.1-6.1s6.1 2.7 6.1 6.1c0 2.2-1.2 4.1-2.9 5.2 3.4 1.1 5.8 4.3 5.8 8z\"></path></svg>

            <span class=\"sf-toolbar-value\">roudaina.gmati@esprit.tn</span>
        </div>
    </a>        <div class=\"sf-toolbar-info\">            
            <div class=\"sf-toolbar-info-group\">
                                                            <div class=\"sf-toolbar-info-piece\">
                            <b>Logged in as</b>
                            <span>roudaina.gmati@esprit.tn</span>
                        </div>

                        <div class=\"sf-toolbar-info-piece\">
                            <b>Authenticated</b>
                            <span class=\"sf-toolbar-status sf-toolbar-status-green\">Yes</span>
                        </div>

                        <div class=\"sf-toolbar-info-piece\">
                            <b>Roles</b>
                            <span>
                                                                ROLE_ADMIN
                                                                    +
                                    <abbr title=\"ROLE_USER\">
                                        1 more
                                    </abbr>
                                                            </span>
                        </div>

                        <div class=\"sf-toolbar-info-piece\">
                            <b>Token class</b>
                            <span><abbr title=\"Symfony\\Component\\Security\\Http\\Authenticator\\Token\\PostAuthenticationToken\">PostAuthenticationToken</abbr></span>
                        </div>
                    
                                            <div class=\"sf-toolbar-info-piece\">
                            <b>Firewall name</b>
                            <span>main</span>
                        </div>
                    
                                            <div class=\"sf-toolbar-info-piece\">
                            <b>Actions</b>
                            <span>
                                <a href=\"/deconnexion\">Logout</a>
                                                            </span>
                        </div>
                                                </div>
        </div>
</div>

    
                                                                    
    
    <div class=\"sf-toolbar-block sf-toolbar-block-twig sf-toolbar-status-normal \">
    <a href=\"http://127.0.0.1:8000/_profiler/5e5522?panel=twig\">        <div class=\"sf-toolbar-icon\">        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#AAA\" d=\"M8.932 22.492c.016-6.448-.971-11.295-5.995-11.619 4.69-.352 7.113 2.633 9.298 6.907C12.205 6.354 9.882 1.553 4.8 1.297c7.433.07 10.028 5.9 11.508 14.293 1.171-2.282 3.56-5.553 5.347-1.361-1.594-2.04-3.607-1.617-3.978 8.262H8.933z\"></path></svg>

        <span class=\"sf-toolbar-value\">9</span>
        <span class=\"sf-toolbar-label\">ms</span>
    </div>
    </a>        <div class=\"sf-toolbar-info\" style=\"left: 0px;\">        <div class=\"sf-toolbar-info-piece\">
            <b>Render Time</b>
            <span>9 ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Template Calls</b>
            <span class=\"sf-toolbar-status\">13</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Block Calls</b>
            <span class=\"sf-toolbar-status\">6</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Macro Calls</b>
            <span class=\"sf-toolbar-status\">2</span>
        </div>
    </div>
</div>


                                                                
                                                                
        
        
        <div class=\"sf-toolbar-block sf-toolbar-block-db sf-toolbar-status-normal \">
    <a href=\"http://127.0.0.1:8000/_profiler/5e5522?panel=db\">        <div class=\"sf-toolbar-icon\">            
                            <span class=\"icon\"><svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
    <path fill=\"#AAAAAA\" d=\"M5,8h14c1.7,0,3-1.3,3-3s-1.3-3-3-3H5C3.3,2,2,3.3,2,5S3.3,8,5,8z M18,3.6c0.8,0,1.5,0.7,1.5,1.5S18.8,6.6,18,6.6s-1.5-0.7-1.5-1.5S17.2,3.6,18,3.6z M19,9H5c-1.7,0-3,1.3-3,3s1.3,3,3,3h14c1.7,0,3-1.3,3-3S20.7,9,19,9z M18,13.6
    c-0.8,0-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5s1.5,0.7,1.5,1.5S18.8,13.6,18,13.6z M19,16H5c-1.7,0-3,1.3-3,3s1.3,3,3,3h14c1.7,0,3-1.3,3-3S20.7,16,19,16z M18,20.6c-0.8,0-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5s1.5,0.7,1.5,1.5S18.8,20.6,18,20.6z\"></path>
</svg>
</span>
            
                            <span class=\"sf-toolbar-value\">2</span>
                <span class=\"sf-toolbar-info-piece-additional-detail\">
                    <span class=\"sf-toolbar-label\">in</span>
                    <span class=\"sf-toolbar-value\">1.31</span>
                    <span class=\"sf-toolbar-label\">ms</span>
                </span>
                    </div>
    </a>        <div class=\"sf-toolbar-info\" style=\"left: 0px;\">            <div class=\"sf-toolbar-info-piece\">
                <b>Database Queries</b>
                <span class=\"sf-toolbar-status \">2</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Different statements</b>
                <span class=\"sf-toolbar-status\">2</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Query time</b>
                <span>1.31 ms</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Invalid entities</b>
                <span class=\"sf-toolbar-status \">0</span>
            </div>
                            <div class=\"sf-toolbar-info-piece\">
                    <b>Second Level Cache</b>
                    <span class=\"sf-toolbar-status\">disabled</span>
                </div>
                    </div>
</div>


    
                                                                
                                                                
                                                                
    
                                                                
    
                                                                                    
    
    
    <div class=\"sf-toolbar-block sf-toolbar-block-config sf-toolbar-status-normal sf-toolbar-block-right\" title=\"\">
    <a href=\"http://127.0.0.1:8000/_profiler/5e5522?panel=config\">        <div class=\"sf-toolbar-icon\">        <span class=\"sf-toolbar-label\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#AAA\" d=\"M12 .9C5.8.9.9 5.8.9 12a11 11 0 1 0 22.2 0A11 11 0 0 0 12 .9zm6.5 6c-.6 0-.9-.3-.9-.8 0-.2 0-.4.2-.6l.2-.4c0-.3-.5-.4-.6-.4-1.8.1-2.3 2.5-2.7 4.4l-.2 1c1 .2 1.8 0 2.2-.3.6-.4-.2-.7-.1-1.2.1-.3.5-.5.7-.6.5 0 .7.5.7.9 0 .7-1 1.8-3 1.8l-.6-.1-.6 2.4c-.4 1.6-.8 3.8-2.4 5.7-1.4 1.7-2.9 1.9-3.5 1.9-1.2 0-1.9-.6-2-1.5 0-.8.7-1.3 1.2-1.3.6 0 1.1.5 1.1 1s-.2.6-.4.6c-.1.1-.3.2-.3.4 0 .1.1.3.4.3.5 0 .8-.3 1.1-.5 1.2-.9 1.6-2.7 2.2-5.7l.1-.7.7-3.2c-.8-.6-1.3-1.4-2.4-1.7-.6-.1-1.1.1-1.5.5-.4.5-.2 1.1.2 1.5l.7.6c.7.8 1.2 1.6 1 2.5-.3 1.5-2 2.6-4 1.9-1.8-.6-2-1.8-1.8-2.5.2-.6.6-.7 1.1-.6.5.2.6.7.6 1.2l-.1.3c-.2.1-.3.3-.3.4-.1.4.4.6.7.7.7.3 1.6-.2 1.8-.8a1 1 0 0 0-.4-1.1l-.7-.8c-.4-.4-1.1-1.4-.7-2.6.1-.5.4-.9.7-1.3a4 4 0 0 1 2.8-.6c1.2.4 1.8 1.1 2.6 1.8.5-1.2 1-2.4 1.8-3.5.9-.9 1.9-1.6 3.1-1.7 1.3.2 2.2.7 2.2 1.6 0 .4-.2 1.1-.9 1.1z\"></path></svg>

        </span>
        <span class=\"sf-toolbar-value\">5.4.35</span>
    </div>
    </a>        <div class=\"sf-toolbar-info\">        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>Profiler token</b>
                <span>
                                            <a href=\"http://127.0.0.1:8000/_profiler/5e5522\">5e5522</a>
                                    </span>
            </div>

                            <div class=\"sf-toolbar-info-piece\">
                    <b>Environment</b>
                    <span>dev</span>
                </div>
            
                            <div class=\"sf-toolbar-info-piece\">
                    <b>Debug</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-green\">enabled</span>
                </div>
                    </div>

        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
                <b>PHP version</b>
                <span>
                    8.2.4
                    &nbsp; <a href=\"/_profiler/phpinfo\">View phpinfo()</a>
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
                <b>PHP Extensions</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-gray\">xdebug ✗</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-gray\">APCu ✗</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-red\">OPcache ✗</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>PHP SAPI</b>
                <span>cgi-fcgi</span>
            </div>
        </div>

        <div class=\"sf-toolbar-info-group\">
                            <div class=\"sf-toolbar-info-piece\">
                    <b>Resources</b>
                    <span>
                        <a href=\"https://symfony.com/doc/5.4.35/index.html\" rel=\"help\">
                            Read Symfony 5.4.35 Docs
                        </a>
                    </span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Help</b>
                    <span>
                        <a href=\"https://symfony.com/support\">
                            Symfony Support Channels
                        </a>
                    </span>
                </div>
                    </div>
    </div>
</div>


                            
    
<div class=\"sf-cli sf-toolbar-block sf-toolbar-block-sf-cli sf-toolbar-status-normal sf-toolbar-block-right\">
\t<div class=\"sf-toolbar-icon\">
\t\t<span class=\"sf-toolbar-label\">
\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" version=\"1.1\">
\t\t\t\t<path style=\"stroke:none;fill-rule:evenodd;fill:white;fill-opacity:1;\" d=\"M 24 2.398438 C 24 1.074219 22.925781 0 21.601562 0 L 2.398438 0 C 1.074219 0 0 1.074219 0 2.398438 L 0 21.601562 C 0 22.925781 1.074219 24 2.398438 24 L 21.601562 24 C 22.925781 24 24 22.925781 24 21.601562 Z M 24 2.398438 \"></path>
\t\t\t\t<path style=\"stroke:none;fill-rule:nonzero;fill:black;fill-opacity:1;\" d=\"M 18.078125 3.109375 C 16.742188 3.15625 15.578125 3.894531 14.710938 4.910156 C 13.75 6.027344 13.109375 7.351562 12.648438 8.703125 C 11.824219 8.027344 11.191406 7.152344 9.867188 6.773438 C 8.847656 6.480469 7.773438 6.601562 6.785156 7.335938 C 6.320312 7.683594 5.996094 8.210938 5.84375 8.710938 C 5.449219 9.996094 6.261719 11.144531 6.628906 11.558594 L 7.4375 12.421875 C 7.605469 12.59375 8.007812 13.035156 7.808594 13.667969 C 7.597656 14.359375 6.765625 14.804688 5.914062 14.542969 C 5.53125 14.425781 4.984375 14.144531 5.105469 13.742188 C 5.15625 13.578125 5.273438 13.457031 5.335938 13.316406 C 5.394531 13.195312 5.421875 13.105469 5.441406 13.050781 C 5.597656 12.542969 5.382812 11.878906 4.835938 11.710938 C 4.328125 11.554688 3.808594 11.679688 3.605469 12.332031 C 3.378906 13.078125 3.734375 14.425781 5.640625 15.015625 C 7.875 15.703125 9.765625 14.484375 10.035156 12.898438 C 10.203125 11.90625 9.753906 11.167969 8.933594 10.21875 L 8.261719 9.476562 C 7.855469 9.070312 7.71875 8.378906 8.136719 7.847656 C 8.492188 7.402344 8.996094 7.210938 9.824219 7.433594 C 11.03125 7.761719 11.566406 8.597656 12.464844 9.273438 C 12.09375 10.492188 11.851562 11.710938 11.632812 12.804688 L 11.5 13.621094 C 10.855469 16.984375 10.367188 18.832031 9.09375 19.890625 C 8.839844 20.074219 8.472656 20.347656 7.917969 20.367188 C 7.628906 20.375 7.535156 20.175781 7.53125 20.089844 C 7.527344 19.886719 7.695312 19.792969 7.808594 19.703125 C 7.980469 19.609375 8.238281 19.457031 8.21875 18.960938 C 8.203125 18.378906 7.71875 17.875 7.023438 17.898438 C 6.5 17.917969 5.703125 18.40625 5.734375 19.308594 C 5.765625 20.238281 6.628906 20.933594 7.9375 20.890625 C 8.636719 20.867188 10.195312 20.582031 11.730469 18.753906 C 13.519531 16.660156 14.019531 14.261719 14.394531 12.503906 L 14.816406 10.183594 C 15.050781 10.210938 15.300781 10.230469 15.570312 10.238281 C 17.796875 10.285156 18.910156 9.132812 18.929688 8.292969 C 18.941406 7.785156 18.597656 7.285156 18.113281 7.296875 C 17.769531 7.304688 17.335938 7.535156 17.230469 8.011719 C 17.128906 8.480469 17.941406 8.902344 17.308594 9.3125 C 16.855469 9.605469 16.050781 9.808594 14.914062 9.644531 L 15.121094 8.5 C 15.542969 6.335938 16.0625 3.671875 18.035156 3.609375 C 18.179688 3.601562 18.703125 3.613281 18.71875 3.960938 C 18.722656 4.078125 18.691406 4.109375 18.554688 4.375 C 18.417969 4.582031 18.363281 4.757812 18.371094 4.960938 C 18.390625 5.511719 18.8125 5.875 19.417969 5.855469 C 20.234375 5.828125 20.46875 5.035156 20.453125 4.628906 C 20.421875 3.671875 19.410156 3.066406 18.078125 3.109375 Z M 18.078125 3.109375 \"></path>
\t\t\t</svg>
\t\t</span>
\t\t<span class=\"sf-toolbar-value\">Server</span>
\t</div>
\t<div class=\"sf-toolbar-info\" style=\"left: 0px;\">
\t\t<div class=\"sf-toolbar-info-piece\">
\t\t\t<b>Server</b>PHP CGI 8.2.4
\t\t</div>
\t\t<div class=\"sf-toolbar-info-piece\">
\t\t\t<b>Tunnel</b><span class=\"sf-toolbar-status sf-toolbar-status-red\">Down</span>
\t\t</div>
\t\t<div class=\"sf-toolbar-info-piece\">
\t\t\t<b>Docker Compose</b><span class=\"sf-toolbar-status sf-toolbar-status-red\">Down</span>
\t\t</div>
\t\t<div class=\"sf-toolbar-info-piece\">
\t\t\t<b>Env Vars</b><span class=\"sf-toolbar-status sf-toolbar-status-red\">None</span>
\t\t</div>
\t\t<div class=\"sf-toolbar-info-piece\"><b>RabbitMQ UI</b> <span class=\"sf-toolbar-status sf-toolbar-status-red\">Down</span></div>
\t\t<div class=\"sf-toolbar-info-piece\"><b>Webmail</b> <span class=\"sf-toolbar-status sf-toolbar-status-red\">Down</span></div>
\t\t<div class=\"sf-toolbar-info-piece\">
\t\t\t<b><a class=\"sf-cli-blackfire\" href=\"https://blackfire.io/\" rel=\"noopener\" target=\"_blank\">Blackfire.io Agent</a></b><span class=\"sf-toolbar-status sf-toolbar-status-red\">Down</span></div>
\t
\t</div>
\t<div></div>
</div>
<button class=\"hide-button\" type=\"button\" id=\"sfToolbarHideButton-5e5522\" title=\"Close Toolbar\" accesskey=\"D\" aria-expanded=\"true\" aria-controls=\"sfToolbarMainContent-5e5522\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" aria-hidden=\"true\" focusable=\"false\"><path fill=\"#AAA\" d=\"M21.1 18.3c.8.8.8 2 0 2.8-.4.4-.9.6-1.4.6s-1-.2-1.4-.6L12 14.8l-6.3 6.3c-.4.4-.9.6-1.4.6s-1-.2-1.4-.6a2 2 0 0 1 0-2.8L9.2 12 2.9 5.7a2 2 0 0 1 0-2.8 2 2 0 0 1 2.8 0L12 9.2l6.3-6.3a2 2 0 0 1 2.8 0c.8.8.8 2 0 2.8L14.8 12l6.3 6.3z\"></path></svg>

    </button>
</div>
<!-- END of Symfony Web Debug Toolbar -->
</div><script nonce=\"659cf5bef95a15dc4f72507cf82744ca\">/*<![CDATA[*/    if (typeof Sfjs === 'undefined' || typeof Sfjs.loadToolbar === 'undefined') {    Sfjs = (function() {        \"use strict\";        if ('classList' in document.documentElement) {            var hasClass = function (el, cssClass) { return el.classList.contains(cssClass); };            var removeClass = function(el, cssClass) { el.classList.remove(cssClass); };            var addClass = function(el, cssClass) { el.classList.add(cssClass); };            var toggleClass = function(el, cssClass) { el.classList.toggle(cssClass); };        } else {            var hasClass = function (el, cssClass) { return el.className.match(new RegExp('\\\\b' + cssClass + '\\\\b')); };            var removeClass = function(el, cssClass) { el.className = el.className.replace(new RegExp('\\\\b' + cssClass + '\\\\b'), ' '); };            var addClass = function(el, cssClass) { if (!hasClass(el, cssClass)) { el.className += \" \" + cssClass; } };            var toggleClass = function(el, cssClass) { hasClass(el, cssClass) ? removeClass(el, cssClass) : addClass(el, cssClass); };        }        var noop = function() {};        var profilerStorageKey = 'symfony/profiler/';        var addEventListener;        var el = document.createElement('div');        if (!('addEventListener' in el)) {            addEventListener = function (element, eventName, callback) {                element.attachEvent('on' + eventName, callback);            };        } else {            addEventListener = function (element, eventName, callback) {                element.addEventListener(eventName, callback, false);            };        }        if (navigator.clipboard) {            document.querySelectorAll('[data-clipboard-text]').forEach(function(element) {                removeClass(element, 'hidden');                element.addEventListener('click', function() {                    navigator.clipboard.writeText(element.getAttribute('data-clipboard-text'));                })            });        }        var request = function(url, onSuccess, onError, payload, options, tries) {            var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');            options = options || {};            options.retry = options.retry || false;            tries = tries || 1;            /* this delays for 125, 375, 625, 875, and 1000, ... */            var delay = tries < 5 ? (tries - 0.5) * 250 : 1000;            xhr.open(options.method || 'GET', url, true);            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');            xhr.onreadystatechange = function(state) {                if (4 !== xhr.readyState) {                    return null;                }                if (xhr.status == 404 && options.retry && !options.stop) {                    setTimeout(function() {                        if (options.stop) {                            return;                        }                        request(url, onSuccess, onError, payload, options, tries + 1);                    }, delay);                    return null;                }                if (200 === xhr.status) {                    (onSuccess || noop)(xhr);                } else {                    (onError || noop)(xhr);                }            };            if (options.onSend) {                options.onSend(tries);            }            xhr.send(payload || '');        };        var getPreference = function(name) {            if (!window.localStorage) {                return null;            }            return localStorage.getItem(profilerStorageKey + name);        };        var setPreference = function(name, value) {            if (!window.localStorage) {                return null;            }            localStorage.setItem(profilerStorageKey + name, value);        };        var requestStack = [];        var extractHeaders = function(xhr, stackElement) {            /* Here we avoid to call xhr.getResponseHeader in order to */            /* prevent polluting the console with CORS security errors */            var allHeaders = xhr.getAllResponseHeaders();            var ret;            if (ret = allHeaders.match(/^x-debug-token:\\s+(.*)\$/im)) {                stackElement.profile = ret[1];            }            if (ret = allHeaders.match(/^x-debug-token-link:\\s+(.*)\$/im)) {                stackElement.profilerUrl = ret[1];            }            if (ret = allHeaders.match(/^Symfony-Debug-Toolbar-Replace:\\s+(.*)\$/im)) {                stackElement.toolbarReplaceFinished = false;                stackElement.toolbarReplace = '1' === ret[1];            }        };        var successStreak = 4;        var pendingRequests = 0;        var renderAjaxRequests = function() {            var requestCounter = document.querySelector('.sf-toolbar-ajax-request-counter');            if (!requestCounter) {                return;            }            requestCounter.textContent = requestStack.length;            var infoSpan = document.querySelector(\".sf-toolbar-ajax-info\");            if (infoSpan) {                infoSpan.textContent = requestStack.length + ' AJAX request' + (requestStack.length !== 1 ? 's' : '');            }            var ajaxToolbarPanel = document.querySelector('.sf-toolbar-block-ajax');            if (requestStack.length) {                ajaxToolbarPanel.style.display = 'block';            } else {                ajaxToolbarPanel.style.display = 'none';            }            if (pendingRequests > 0) {                addClass(ajaxToolbarPanel, 'sf-ajax-request-loading');            } else if (successStreak < 4) {                addClass(ajaxToolbarPanel, 'sf-toolbar-status-red');                removeClass(ajaxToolbarPanel, 'sf-ajax-request-loading');            } else {                removeClass(ajaxToolbarPanel, 'sf-ajax-request-loading');                removeClass(ajaxToolbarPanel, 'sf-toolbar-status-red');            }        };        var startAjaxRequest = function(index) {            var tbody = document.querySelector('.sf-toolbar-ajax-request-list');            if (!tbody) {                return;            }            var nbOfAjaxRequest = tbody.rows.length;            if (nbOfAjaxRequest >= 100) {                tbody.deleteRow(0);            }            var request = requestStack[index];            pendingRequests++;            var row = document.createElement('tr');            request.DOMNode = row;            var requestNumberCell = document.createElement('td');            requestNumberCell.textContent = index + 1;            row.appendChild(requestNumberCell);            var profilerCell = document.createElement('td');            profilerCell.textContent = 'n/a';            row.appendChild(profilerCell);            var methodCell = document.createElement('td');            methodCell.textContent = request.method;            row.appendChild(methodCell);            var typeCell = document.createElement('td');            typeCell.textContent = request.type;            row.appendChild(typeCell);            var statusCodeCell = document.createElement('td');            var statusCode = document.createElement('span');            statusCode.textContent = 'n/a';            statusCodeCell.appendChild(statusCode);            row.appendChild(statusCodeCell);            var pathCell = document.createElement('td');            pathCell.className = 'sf-ajax-request-url';            if ('GET' === request.method) {                var pathLink = document.createElement('a');                pathLink.setAttribute('href', request.url);                pathLink.textContent = request.url;                pathCell.appendChild(pathLink);            } else {                pathCell.textContent = request.url;            }            pathCell.setAttribute('title', request.url);            row.appendChild(pathCell);            var durationCell = document.createElement('td');            durationCell.className = 'sf-ajax-request-duration';            durationCell.textContent = 'n/a';            row.appendChild(durationCell);            request.liveDurationHandle = setInterval(function() {                durationCell.textContent = (new Date() - request.start) + ' ms';            }, 100);            row.className = 'sf-ajax-request sf-ajax-request-loading';            tbody.insertBefore(row, null);            var toolbarInfo = document.querySelector('.sf-toolbar-block-ajax .sf-toolbar-info');            toolbarInfo.scrollTop = toolbarInfo.scrollHeight;            renderAjaxRequests();        };        var finishAjaxRequest = function(index) {            var request = requestStack[index];            clearInterval(request.liveDurationHandle);            if (!request.DOMNode) {                return;            }            if (request.toolbarReplace && !request.toolbarReplaceFinished && request.profile) {                /* Flag as complete because finishAjaxRequest can be called multiple times. */                request.toolbarReplaceFinished = true;                /* Search up through the DOM to find the toolbar's container ID. */                for (var elem = request.DOMNode; elem && elem !== document; elem = elem.parentNode) {                    if (elem.id.match(/^sfwdt/)) {                        Sfjs.loadToolbar(elem.id.replace(/^sfwdt/, ''), request.profile);                        break;                    }                }            }            pendingRequests--;            var row = request.DOMNode;            /* Unpack the children from the row */            var profilerCell = row.children[1];            var methodCell = row.children[2];            var statusCodeCell = row.children[4];            var statusCodeElem = statusCodeCell.children[0];            var durationCell = row.children[6];            if (request.error) {                row.className = 'sf-ajax-request sf-ajax-request-error';                methodCell.className = 'sf-ajax-request-error';                successStreak = 0;            } else {                row.className = 'sf-ajax-request sf-ajax-request-ok';                successStreak++;            }            if (request.statusCode) {                if (request.statusCode < 300) {                    statusCodeElem.setAttribute('class', 'sf-toolbar-status');                } else if (request.statusCode < 400) {                    statusCodeElem.setAttribute('class', 'sf-toolbar-status sf-toolbar-status-yellow');                } else {                    statusCodeElem.setAttribute('class', 'sf-toolbar-status sf-toolbar-status-red');                }                statusCodeElem.textContent = request.statusCode;            } else {                statusCodeElem.setAttribute('class', 'sf-toolbar-status sf-toolbar-status-red');            }            if (request.duration) {                durationCell.textContent = request.duration + ' ms';            }            if (request.profilerUrl) {                profilerCell.textContent = '';                var profilerLink = document.createElement('a');                profilerLink.setAttribute('href', request.profilerUrl);                profilerLink.textContent = request.profile;                profilerCell.appendChild(profilerLink);            }            renderAjaxRequests();        };                    if (window.fetch && window.fetch.polyfill === undefined) {                var oldFetch = window.fetch;                window.fetch = function () {                    var promise = oldFetch.apply(this, arguments);                    var url = arguments[0];                    var params = arguments[1];                    var paramType = Object.prototype.toString.call(arguments[0]);                    if (paramType === '[object Request]') {                        url = arguments[0].url;                        params = {                            method: arguments[0].method,                            credentials: arguments[0].credentials,                            headers: arguments[0].headers,                            mode: arguments[0].mode,                            redirect: arguments[0].redirect                        };                    } else {                        url = String(url);                    }                    if (!url.match(new RegExp(\"^\\/((index|app(_[\\\\w]+)?)\\\\.php\\/)?_wdt\"))) {                        var method = 'GET';                        if (params && params.method !== undefined) {                            method = params.method;                        }                        var stackElement = {                            error: false,                            url: url,                            method: method,                            type: 'fetch',                            start: new Date()                        };                        var idx = requestStack.push(stackElement) - 1;                        promise.then(function (r) {                            stackElement.duration = new Date() - stackElement.start;                            stackElement.error = r.status < 200 || r.status >= 400;                            stackElement.statusCode = r.status;                            stackElement.profile = r.headers.get('x-debug-token');                            stackElement.profilerUrl = r.headers.get('x-debug-token-link');                            stackElement.toolbarReplaceFinished = false;                            stackElement.toolbarReplace = '1' === r.headers.get('Symfony-Debug-Toolbar-Replace');                            finishAjaxRequest(idx);                        }, function (e){                            stackElement.error = true;                            finishAjaxRequest(idx);                        });                        startAjaxRequest(idx);                    }                    return promise;                };            }            if (window.XMLHttpRequest && XMLHttpRequest.prototype.addEventListener) {                var proxied = XMLHttpRequest.prototype.open;                XMLHttpRequest.prototype.open = function(method, url, async, user, pass) {                    var self = this;                    /* prevent logging AJAX calls to static and inline files, like templates */                    var path = url;                    if (url.slice(0, 1) === '/') {                        if (0 === url.indexOf('')) {                            path = url.slice(0);                        }                    }                    else if (0 === url.indexOf('http\\u003A\\/\\/127.0.0.1\\u003A8000')) {                        path = url.slice(21);                    }                    if (!path.match(new RegExp(\"^\\/((index|app(_[\\\\w]+)?)\\\\.php\\/)?_wdt\"))) {                        var stackElement = {                            error: false,                            url: url,                            method: method,                            type: 'xhr',                            start: new Date()                        };                        var idx = requestStack.push(stackElement) - 1;                        this.addEventListener('readystatechange', function() {                            if (self.readyState == 4) {                                stackElement.duration = new Date() - stackElement.start;                                stackElement.error = self.status < 200 || self.status >= 400;                                stackElement.statusCode = self.status;                                extractHeaders(self, stackElement);                                finishAjaxRequest(idx);                            }                        }, false);                        startAjaxRequest(idx);                    }                    proxied.apply(this, Array.prototype.slice.call(arguments));                };            }                return {            hasClass: hasClass,            removeClass: removeClass,            addClass: addClass,            toggleClass: toggleClass,            getPreference: getPreference,            setPreference: setPreference,            addEventListener: addEventListener,            request: request,            renderAjaxRequests: renderAjaxRequests,            getSfwdt: function(token) {                if (!this.sfwdt) {                    this.sfwdt = document.getElementById('sfwdt' + token);                }                return this.sfwdt;            },            load: function(selector, url, onSuccess, onError, options) {                var el = document.getElementById(selector);                if (el && el.getAttribute('data-sfurl') !== url) {                    request(                        url,                        function(xhr) {                            el.innerHTML = xhr.responseText;                            el.setAttribute('data-sfurl', url);                            removeClass(el, 'loading');                            var pending = pendingRequests;                            for (var i = 0; i < requestStack.length; i++) {                                startAjaxRequest(i);                                if (requestStack[i].duration) {                                    finishAjaxRequest(i);                                }                            }                            /* Revert the pending state in case there was a start called without a finish above. */                            pendingRequests = pending;                            (onSuccess || noop)(xhr, el);                        },                        function(xhr) { (onError || noop)(xhr, el); },                        '',                        options                    );                }                return this;            },            showToolbar: function(token) {                var sfwdt = this.getSfwdt(token);                removeClass(sfwdt, 'sf-display-none');                if (getPreference('toolbar/displayState') == 'none') {                    document.getElementById('sfToolbarMainContent-' + token).style.display = 'none';                    document.getElementById('sfToolbarClearer-' + token).style.display = 'none';                    document.getElementById('sfMiniToolbar-' + token).style.display = 'block';                } else {                    document.getElementById('sfToolbarMainContent-' + token).style.display = 'block';                    document.getElementById('sfToolbarClearer-' + token).style.display = 'block';                    document.getElementById('sfMiniToolbar-' + token).style.display = 'none';                }            },            hideToolbar: function(token) {                var sfwdt = this.getSfwdt(token);                addClass(sfwdt, 'sf-display-none');            },            initToolbar: function(token) {                this.showToolbar(token);                var hideButton = document.getElementById('sfToolbarHideButton-' + token);                var hideButtonSvg = hideButton.querySelector('svg');                hideButtonSvg.setAttribute('aria-hidden', 'true');                hideButtonSvg.setAttribute('focusable', 'false');                addEventListener(hideButton, 'click', function (event) {                    event.preventDefault();                    var p = this.parentNode;                    p.style.display = 'none';                    (p.previousElementSibling || p.previousSibling).style.display = 'none';                    document.getElementById('sfMiniToolbar-' + token).style.display = 'block';                    setPreference('toolbar/displayState', 'none');                });                var showButton = document.getElementById('sfToolbarMiniToggler-' + token);                var showButtonSvg = showButton.querySelector('svg');                showButtonSvg.setAttribute('aria-hidden', 'true');                showButtonSvg.setAttribute('focusable', 'false');                addEventListener(showButton, 'click', function (event) {                    event.preventDefault();                    var elem = this.parentNode;                    if (elem.style.display == 'none') {                        document.getElementById('sfToolbarMainContent-' + token).style.display = 'none';                        document.getElementById('sfToolbarClearer-' + token).style.display = 'none';                        elem.style.display = 'block';                    } else {                        document.getElementById('sfToolbarMainContent-' + token).style.display = 'block';                        document.getElementById('sfToolbarClearer-' + token).style.display = 'block';                        elem.style.display = 'none'                    }                    setPreference('toolbar/displayState', 'block');                });            },            loadToolbar: function(token, newToken) {                var that = this;                var triesCounter = document.getElementById('sfLoadCounter-' + token);                var options = {                    retry: true,                    onSend: function (count) {                        if (count === 3) {                            that.initToolbar(token);                        }                        if (triesCounter) {                            triesCounter.textContent = count;                        }                    },                };                var cancelButton = document.getElementById('sfLoadCancel-' + token);                if (cancelButton) {                    addEventListener(cancelButton, 'click', function (event) {                        event.preventDefault();                        options.stop = true;                        that.hideToolbar(token);                    });                }                newToken = (newToken || token);                this.load(                    'sfwdt' + token,                    'http\\u003A\\/\\/127.0.0.1\\u003A8000\\/_wdt\\/xxxxxx'.replace(/xxxxxx/, newToken),                    function(xhr, el) {                        /* Do nothing in the edge case where the toolbar has already been replaced with a new one */                        if (!document.getElementById('sfToolbarMainContent-' + newToken)) {                            return;                        }                        /* Evaluate in global scope scripts embedded inside the toolbar */                        var i, scripts = [].slice.call(el.querySelectorAll('script'));                        for (i = 0; i < scripts.length; ++i) {                            if (scripts[i].firstChild) {                                eval.call({}, scripts[i].firstChild.nodeValue);                            }                        }                        el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';                        if (el.style.display == 'none') {                            return;                        }                        that.initToolbar(newToken);                        /* Handle toolbar-info position */                        var toolbarBlocks = [].slice.call(el.querySelectorAll('.sf-toolbar-block'));                        for (i = 0; i < toolbarBlocks.length; ++i) {                            toolbarBlocks[i].onmouseover = function () {                                var toolbarInfo = this.querySelectorAll('.sf-toolbar-info')[0];                                var pageWidth = document.body.clientWidth;                                var elementWidth = toolbarInfo.offsetWidth;                                var leftValue = (elementWidth + this.offsetLeft) - pageWidth;                                var rightValue = (elementWidth + (pageWidth - this.offsetLeft)) - pageWidth;                                /* Reset right and left value, useful on window resize */                                toolbarInfo.style.right = '';                                toolbarInfo.style.left = '';                                if (elementWidth > pageWidth) {                                    toolbarInfo.style.left = 0;                                }                                else if (leftValue > 0 && rightValue > 0) {                                    toolbarInfo.style.right = (rightValue * -1) + 'px';                                } else if (leftValue < 0) {                                    toolbarInfo.style.left = 0;                                } else {                                    toolbarInfo.style.right = '0px';                                }                            };                        }                        renderAjaxRequests();                        addEventListener(document.querySelector('.sf-toolbar-ajax-clear'), 'click', function() {                            requestStack = [];                            renderAjaxRequests();                            successStreak = 4;                            document.querySelector('.sf-toolbar-ajax-request-list').innerHTML = '';                        });                        addEventListener(document.querySelector('.sf-toolbar-block-ajax'), 'mouseenter', function (event) {                            var elem = document.querySelector('.sf-toolbar-block-ajax .sf-toolbar-info');                            elem.scrollTop = elem.scrollHeight;                        });                        addEventListener(document.querySelector('.sf-toolbar-block-ajax > .sf-toolbar-icon'), 'click', function (event) {                            event.preventDefault();                            toggleClass(this.parentNode, 'hover');                        });                        var dumpInfo = document.querySelector('.sf-toolbar-block-dump .sf-toolbar-info');                        if (null !== dumpInfo) {                            addEventListener(dumpInfo, 'sfbeforedumpcollapse', function () {                                dumpInfo.style.minHeight = dumpInfo.getBoundingClientRect().height+'px';                            });                            addEventListener(dumpInfo, 'mouseleave', function () {                                dumpInfo.style.minHeight = '';                            });                        }                    },                    function(xhr) {                        if (xhr.status !== 0 && !options.stop) {                            var sfwdt = that.getSfwdt(token);                            sfwdt.innerHTML = '\\                                <div class=\"sf-toolbarreset\">\\                                    <div class=\"sf-toolbar-icon\"><svg width=\"26\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 26 28\" enable-background=\"new 0 0 26 28\" xml:space=\"preserve\"><path fill=\"#FFFFFF\" d=\"M13 0C5.8 0 0 5.8 0 13c0 7.2 5.8 13 13 13c7.2 0 13-5.8 13-13C26 5.8 20.2 0 13 0z M20 7.5 c-0.6 0-1-0.3-1-0.9c0-0.2 0-0.4 0.2-0.6c0.1-0.3 0.2-0.3 0.2-0.4c0-0.3-0.5-0.4-0.7-0.4c-2 0.1-2.5 2.7-2.9 4.8l-0.2 1.1 c1.1 0.2 1.9 0 2.4-0.3c0.6-0.4-0.2-0.8-0.1-1.3C18 9.2 18.4 9 18.7 8.9c0.5 0 0.8 0.5 0.8 1c0 0.8-1.1 2-3.3 1.9 c-0.3 0-0.5 0-0.7-0.1L15 14.1c-0.4 1.7-0.9 4.1-2.6 6.2c-1.5 1.8-3.1 2.1-3.8 2.1c-1.3 0-2.1-0.6-2.2-1.6c0-0.9 0.8-1.4 1.3-1.4 c0.7 0 1.2 0.5 1.2 1.1c0 0.5-0.2 0.6-0.4 0.7c-0.1 0.1-0.3 0.2-0.3 0.4c0 0.1 0.1 0.3 0.4 0.3c0.5 0 0.9-0.3 1.2-0.5 c1.3-1 1.7-2.9 2.4-6.2l0.1-0.8c0.2-1.1 0.5-2.3 0.8-3.5c-0.9-0.7-1.4-1.5-2.6-1.8c-0.8-0.2-1.3 0-1.7 0.4C8.4 10 8.6 10.7 9 11.1 l0.7 0.7c0.8 0.9 1.3 1.7 1.1 2.7c-0.3 1.6-2.1 2.8-4.3 2.1c-1.9-0.6-2.2-1.9-2-2.7c0.2-0.6 0.7-0.8 1.2-0.6 c0.5 0.2 0.7 0.8 0.6 1.3c0 0.1 0 0.1-0.1 0.3C6 15 5.9 15.2 5.9 15.3c-0.1 0.4 0.4 0.7 0.8 0.8c0.8 0.3 1.7-0.2 1.9-0.9 c0.2-0.6-0.2-1.1-0.4-1.2l-0.8-0.9c-0.4-0.4-1.2-1.5-0.8-2.8c0.2-0.5 0.5-1 0.9-1.4c1-0.7 2-0.8 3-0.6c1.3 0.4 1.9 1.2 2.8 1.9 c0.5-1.3 1.1-2.6 2-3.8c0.9-1 2-1.7 3.3-1.8C20 4.8 21 5.4 21 6.3C21 6.7 20.8 7.5 20 7.5z\"/></svg></div>\\                                    An error occurred while loading the web debug toolbar. <a href=\"http\\u003A\\/\\/127.0.0.1\\u003A8000\\/_profiler\\/' + newToken + '\">Open the web profiler.</a>\\                                </div>\\                            ';                            sfwdt.setAttribute('class', 'sf-toolbar sf-error-toolbar');                        }                    },                    options                );                return this;            },            toggle: function(selector, elOn, elOff) {                var tmp = elOn.style.display,                    el = document.getElementById(selector);                elOn.style.display = elOff.style.display;                elOff.style.display = tmp;                if (el) {                    el.style.display = 'none' === tmp ? 'none' : 'block';                }                return this;            },            createTabs: function() {                var tabGroups = document.querySelectorAll('.sf-tabs:not([data-processed=true])');                /* create the tab navigation for each group of tabs */                for (var i = 0; i < tabGroups.length; i++) {                    var tabs = tabGroups[i].querySelectorAll(':scope > .tab');                    var tabNavigation = document.createElement('ul');                    tabNavigation.className = 'tab-navigation';                    var selectedTabId = 'tab-' + i + '-0'; /* select the first tab by default */                    for (var j = 0; j < tabs.length; j++) {                        var tabId = 'tab-' + i + '-' + j;                        var tabTitle = tabs[j].querySelector('.tab-title').innerHTML;                        var tabNavigationItem = document.createElement('li');                        tabNavigationItem.setAttribute('data-tab-id', tabId);                        if (hasClass(tabs[j], 'active')) { selectedTabId = tabId; }                        if (hasClass(tabs[j], 'disabled')) { addClass(tabNavigationItem, 'disabled'); }                        tabNavigationItem.innerHTML = tabTitle;                        tabNavigation.appendChild(tabNavigationItem);                        var tabContent = tabs[j].querySelector('.tab-content');                        tabContent.parentElement.setAttribute('id', tabId);                    }                    tabGroups[i].insertBefore(tabNavigation, tabGroups[i].firstChild);                    addClass(document.querySelector('[data-tab-id=\"' + selectedTabId + '\"]'), 'active');                }                /* display the active tab and add the 'click' event listeners */                for (i = 0; i < tabGroups.length; i++) {                    tabNavigation = tabGroups[i].querySelectorAll(':scope > .tab-navigation li');                    for (j = 0; j < tabNavigation.length; j++) {                        tabId = tabNavigation[j].getAttribute('data-tab-id');                        document.getElementById(tabId).querySelector('.tab-title').className = 'hidden';                        if (hasClass(tabNavigation[j], 'active')) {                            document.getElementById(tabId).className = 'block';                        } else {                            document.getElementById(tabId).className = 'hidden';                        }                        tabNavigation[j].addEventListener('click', function(e) {                            var activeTab = e.target || e.srcElement;                            /* needed because when the tab contains HTML contents, user can click */                            /* on any of those elements instead of their parent '<li>' element */                            while (activeTab.tagName.toLowerCase() !== 'li') {                                activeTab = activeTab.parentNode;                            }                            /* get the full list of tabs through the parent of the active tab element */                            var tabNavigation = activeTab.parentNode.children;                            for (var k = 0; k < tabNavigation.length; k++) {                                var tabId = tabNavigation[k].getAttribute('data-tab-id');                                document.getElementById(tabId).className = 'hidden';                                removeClass(tabNavigation[k], 'active');                            }                            addClass(activeTab, 'active');                            var activeTabId = activeTab.getAttribute('data-tab-id');                            document.getElementById(activeTabId).className = 'block';                        });                    }                    tabGroups[i].setAttribute('data-processed', 'true');                }            },            createToggles: function() {                var toggles = document.querySelectorAll('.sf-toggle:not([data-processed=true])');                for (var i = 0; i < toggles.length; i++) {                    var elementSelector = toggles[i].getAttribute('data-toggle-selector');                    var element = document.querySelector(elementSelector);                    addClass(element, 'sf-toggle-content');                    if (toggles[i].hasAttribute('data-toggle-initial') && toggles[i].getAttribute('data-toggle-initial') == 'display') {                        addClass(toggles[i], 'sf-toggle-on');                        addClass(element, 'sf-toggle-visible');                    } else {                        addClass(toggles[i], 'sf-toggle-off');                        addClass(element, 'sf-toggle-hidden');                    }                    addEventListener(toggles[i], 'click', function(e) {                        e.preventDefault();                        if ('' !== window.getSelection().toString()) {                            /* Don't do anything on text selection */                            return;                        }                        var toggle = e.target || e.srcElement;                        /* needed because when the toggle contains HTML contents, user can click */                        /* on any of those elements instead of their parent '.sf-toggle' element */                        while (!hasClass(toggle, 'sf-toggle')) {                            toggle = toggle.parentNode;                        }                        var element = document.querySelector(toggle.getAttribute('data-toggle-selector'));                        toggleClass(toggle, 'sf-toggle-on');                        toggleClass(toggle, 'sf-toggle-off');                        toggleClass(element, 'sf-toggle-hidden');                        toggleClass(element, 'sf-toggle-visible');                        /* the toggle doesn't change its contents when clicking on it */                        if (!toggle.hasAttribute('data-toggle-alt-content')) {                            return;                        }                        if (!toggle.hasAttribute('data-toggle-original-content')) {                            toggle.setAttribute('data-toggle-original-content', toggle.innerHTML);                        }                        var currentContent = toggle.innerHTML;                        var originalContent = toggle.getAttribute('data-toggle-original-content');                        var altContent = toggle.getAttribute('data-toggle-alt-content');                        toggle.innerHTML = currentContent !== altContent ? altContent : originalContent;                    });                    /* Prevents from disallowing clicks on links inside toggles */                    var toggleLinks = toggles[i].querySelectorAll('a');                    for (var j = 0; j < toggleLinks.length; j++) {                        addEventListener(toggleLinks[j], 'click', function(e) {                            e.stopPropagation();                        });                    }                    /* Prevents from disallowing clicks on \"copy to clipboard\" elements inside toggles */                    var copyToClipboardElements = toggles[i].querySelectorAll('span[data-clipboard-text]');                    for (var k = 0; k < copyToClipboardElements.length; k++) {                        addEventListener(copyToClipboardElements[k], 'click', function(e) {                            e.stopPropagation();                        });                    }                    toggles[i].setAttribute('data-processed', 'true');                }            },            initializeLogsTable: function() {                Sfjs.updateLogsTable();                document.querySelectorAll('.log-filter input').forEach((input) => {                    input.addEventListener('change', () => { Sfjs.updateLogsTable(); });                });                document.querySelectorAll('.filter-select-all-or-none button').forEach((link) => {                    link.addEventListener('click', () => {                        const selectAll = link.classList.contains('select-all');                        link.closest('.log-filter-content').querySelectorAll('input').forEach((input) => {                            input.checked = selectAll;                        });                        Sfjs.updateLogsTable();                    });                });                document.body.addEventListener('click', (event) => {                    document.querySelectorAll('details.log-filter').forEach((filterElement) => {                        if (!filterElement.contains(event.target) && filterElement.open) {                            filterElement.open = false;                        }                    });                });            },            updateLogsTable: function() {                const selectedType = document.querySelector('#log-filter-type input:checked').value;                const priorities = document.querySelectorAll('#log-filter-priority input');                const allPriorities = Array.from(priorities).map((input) => input.value);                const selectedPriorities = Array.from(priorities).filter((input) => input.checked).map((input) => input.value);                const channels = document.querySelectorAll('#log-filter-channel input');                const selectedChannels = Array.from(channels).filter((input) => input.checked).map((input) => input.value);                const logs = document.querySelector('table.logs');                if (null === logs) {                    return;                }                /* hide rows that don't match the current filters */                let numVisibleRows = 0;                logs.querySelectorAll('tbody tr').forEach((row) => {                    if ('all' !== selectedType && selectedType !== row.getAttribute('data-type')) {                        row.style.display = 'none';                        return;                    }                    const priority = row.getAttribute('data-priority');                    if (false === selectedPriorities.includes(priority) && true === allPriorities.includes(priority)) {                        row.style.display = 'none';                        return;                    }                    if ('' !== row.getAttribute('data-channel') && false === selectedChannels.includes(row.getAttribute('data-channel'))) {                        row.style.display = 'none';                        return;                    }                    row.style.display = 'table-row';                    numVisibleRows++;                });                document.querySelector('table.logs').style.display = 0 === numVisibleRows ? 'none' : 'table';                document.querySelector('.no-logs-message').style.display = 0 === numVisibleRows ? 'block' : 'none';                /* update the selected totals of all filters */                document.querySelector('#log-filter-priority .filter-active-num').innerText = (priorities.length === selectedPriorities.length) ? 'All' : selectedPriorities.length;                document.querySelector('#log-filter-channel .filter-active-num').innerText = (channels.length === selectedChannels.length) ? 'All' : selectedChannels.length;                /* update the currently selected \"log type\" tab */                document.querySelectorAll('#log-filter-type li').forEach((tab) => tab.classList.remove('active'));                document.querySelector(`#log-filter-type input[value=\"\${selectedType}\"]`).parentElement.classList.add('active');            },        };    })();    Sfjs.addEventListener(document, 'DOMContentLoaded', function() {        Sfjs.createTabs();        Sfjs.createToggles();    });}/*]]>*/</script><style nonce=\"711f2165d4c1302e9c4c2183fdc6a90a\">    .sf-minitoolbar {    background-color: #222;    border-top-left-radius: 4px;    bottom: 0;    box-sizing: border-box;    display: none;    height: 36px;    padding: 6px;    position: fixed;    right: 0;    z-index: 99999;}.sf-minitoolbar button {    background-color: transparent;    padding: 0;    border: none;}.sf-minitoolbar svg,.sf-minitoolbar img {    max-height: 24px;    max-width: 24px;    display: inline;}.sf-toolbar-clearer {    clear: both;    height: 36px;}.sf-display-none {    display: none;}.sf-toolbarreset * {    box-sizing: content-box;    vertical-align: baseline;    letter-spacing: normal;    width: auto;}.sf-toolbarreset {    background-color: #222;    bottom: 0;    box-shadow: 0 -1px 0 rgba(0, 0, 0, 0.2);    color: #EEE;    font: 11px Arial, sans-serif;    left: 0;    margin: 0;    padding: 0 36px 0 0;    position: fixed;    right: 0;    text-align: left;    text-transform: none;    z-index: 99999;    direction: ltr;    /* neutralize the aliasing defined by external CSS styles */    -webkit-font-smoothing: subpixel-antialiased;    -moz-osx-font-smoothing: auto;}.sf-toolbarreset abbr {    border: dashed #777;    border-width: 0 0 1px;}.sf-toolbarreset svg,.sf-toolbarreset img {    height: 20px;    width: 20px;    display: inline-block;}.sf-toolbarreset .sf-cancel-button {    color: #444;}.sf-toolbarreset .hide-button {    background: #444;    display: block;    position: absolute;    top: 0;    right: 0;    width: 36px;    height: 36px;    cursor: pointer;    text-align: center;    border: none;    margin: 0;    padding: 0;}.sf-toolbarreset .hide-button svg {    max-height: 18px;    margin-top: 1px;}.sf-toolbar-block {    cursor: default;    display: block;    float: left;    height: 36px;    margin-right: 0;    white-space: nowrap;    max-width: 15%;}.sf-toolbar-block > a,.sf-toolbar-block > a:hover {    display: block;    text-decoration: none;    background-color: transparent;    color: inherit;}.sf-toolbar-block span {    display: inline-block;}.sf-toolbar-block .sf-toolbar-value {    color: #F5F5F5;    font-size: 13px;    line-height: 36px;    padding: 0;}.sf-toolbar-block .sf-toolbar-label,.sf-toolbar-block .sf-toolbar-class-separator {    color: #AAA;    font-size: 12px;}.sf-toolbar-block .sf-toolbar-info {    border-collapse: collapse;    display: table;    z-index: 100000;}.sf-toolbar-block hr {    border-top: 1px solid #777;    margin: 4px 0;    padding-top: 4px;}.sf-toolbar-block .sf-toolbar-info-piece {    /* this 'border-bottom' trick is needed because 'margin-bottom' doesn't work for table rows */    border-bottom: solid transparent 3px;    display: table-row;}.sf-toolbar-block .sf-toolbar-info-piece-additional,.sf-toolbar-block .sf-toolbar-info-piece-additional-detail {    display: none;}.sf-toolbar-block .sf-toolbar-info-group {    margin-bottom: 4px;    padding-bottom: 2px;    border-bottom: 1px solid #333333;}.sf-toolbar-block .sf-toolbar-info-group:last-child {    margin-bottom: 0;    padding-bottom: 0;    border-bottom: none;}.sf-toolbar-block .sf-toolbar-info-piece .sf-toolbar-status {    padding: 2px 5px;    margin-bottom: 0;}.sf-toolbar-block .sf-toolbar-info-piece .sf-toolbar-status + .sf-toolbar-status {    margin-left: 4px;}.sf-toolbar-block .sf-toolbar-info-piece:last-child {    margin-bottom: 0;}div.sf-toolbar .sf-toolbar-block .sf-toolbar-info-piece a {    color: #99CDD8;    text-decoration: underline;}div.sf-toolbar .sf-toolbar-block a:hover {    text-decoration: none;}.sf-toolbar-block .sf-toolbar-info-piece b {    color: #AAA;    display: table-cell;    font-size: 11px;    padding: 4px 8px 4px 0;}.sf-toolbar-block:not(.sf-toolbar-block-dump) .sf-toolbar-info-piece span {    color: #F5F5F5;}.sf-toolbar-block .sf-toolbar-info-piece span {    font-size: 12px;}.sf-toolbar-block .sf-toolbar-info {    background-color: #444;    bottom: 36px;    color: #F5F5F5;    display: none;    padding: 9px 0;    position: absolute;}.sf-toolbar-block .sf-toolbar-info:empty {    visibility: hidden;}.sf-toolbar-block .sf-toolbar-status {    display: inline-block;    color: #FFF;    background-color: #666;    padding: 3px 6px;    margin-bottom: 2px;    vertical-align: middle;    min-width: 15px;    min-height: 13px;    text-align: center;}.sf-toolbar-block .sf-toolbar-status-green {    background-color: #4F805D;}.sf-toolbar-block .sf-toolbar-status-red {    background-color: #B0413E;}.sf-toolbar-block .sf-toolbar-status-yellow {    background-color: #A46A1F;}.sf-toolbar-block.sf-toolbar-status-green {    background-color: #4F805D;    color: #FFF;}.sf-toolbar-block.sf-toolbar-status-red {    background-color: #B0413E;    color: #FFF;}.sf-toolbar-block.sf-toolbar-status-yellow {    background-color: #A46A1F;    color: #FFF;}.sf-toolbar-block-request .sf-toolbar-status {    color: #FFF;    display: inline-block;    font-size: 14px;    height: 36px;    line-height: 36px;    padding: 0 10px;}.sf-toolbar-block-request .sf-toolbar-info-piece a {    background-color: transparent;    text-decoration: none;}.sf-toolbar-block-request .sf-toolbar-info-piece a:hover {    text-decoration: underline;}.sf-toolbar-block-request .sf-toolbar-redirection-status {    font-weight: normal;    padding: 2px 4px;    line-height: 18px;}.sf-toolbar-block-request .sf-toolbar-info-piece span.sf-toolbar-redirection-method {    font-size: 12px;    height: 17px;    line-height: 17px;    margin-right: 5px;}.sf-toolbar-block-ajax .sf-toolbar-icon {    cursor: pointer;}.sf-toolbar-status-green .sf-toolbar-label,.sf-toolbar-status-yellow .sf-toolbar-label,.sf-toolbar-status-red .sf-toolbar-label {    color: #FFF;}.sf-toolbar-status-green svg path,.sf-toolbar-status-green svg .sf-svg-path,.sf-toolbar-status-red svg path,.sf-toolbar-status-red svg .sf-svg-path,.sf-toolbar-status-yellow svg path,.sf-toolbar-status-yellow svg .sf-svg-path {    fill: #FFF;}.sf-toolbar-block-config svg path,.sf-toolbar-block-config svg .sf-svg-path {    fill: #FFF;}.sf-toolbar-block .sf-toolbar-icon {    display: block;    height: 36px;    padding: 0 7px;    overflow: hidden;    text-overflow: ellipsis;}.sf-toolbar-block-request .sf-toolbar-icon {    padding-left: 0;    padding-right: 0;}.sf-toolbar-block .sf-toolbar-icon img,.sf-toolbar-block .sf-toolbar-icon svg {    border-width: 0;    position: relative;    top: 8px;    vertical-align: baseline;}.sf-toolbar-block .sf-toolbar-icon img + span,.sf-toolbar-block .sf-toolbar-icon svg + span {    margin-left: 4px;}.sf-toolbar-block-config .sf-toolbar-icon .sf-toolbar-value {    margin-left: 4px;}.sf-toolbar-block:hover,.sf-toolbar-block.hover {    position: relative;}.sf-toolbar-block:hover .sf-toolbar-icon,.sf-toolbar-block.hover .sf-toolbar-icon {    background-color: #444;    position: relative;    z-index: 10002;}.sf-toolbar-block-ajax.hover .sf-toolbar-info {    z-index: 10001;}.sf-toolbar-block:hover .sf-toolbar-info,.sf-toolbar-block.hover .sf-toolbar-info {    display: block;    padding: 10px;    max-width: 525px;    max-height: 480px;    word-wrap: break-word;    overflow: hidden;    overflow-y: auto;}.sf-toolbar-info-piece b.sf-toolbar-ajax-info {    color: #F5F5F5;}.sf-toolbar-ajax-requests {    table-layout: auto;    width: 100%;}.sf-toolbar-ajax-requests td {    background-color: #444;    border-bottom: 1px solid #777;    color: #F5F5F5;    font-size: 12px;    padding: 4px;}.sf-toolbar-ajax-requests tr:last-child td {    border-bottom: 0;}.sf-toolbar-ajax-requests th {    background-color: #222;    border-bottom: 0;    color: #AAA;    font-size: 11px;    padding: 4px;}.sf-ajax-request-url {    max-width: 250px;    line-height: 9px;    overflow: hidden;    text-overflow: ellipsis;}.sf-toolbar-ajax-requests .sf-ajax-request-url a {    text-decoration: none;}.sf-toolbar-ajax-requests .sf-ajax-request-url a:hover {    text-decoration: underline;}.sf-ajax-request-duration {    text-align: right;}.sf-ajax-request-loading {    animation: sf-blink .5s ease-in-out infinite;}@keyframes sf-blink {    0% { background: #222; }    50% { background: #444; }    100% { background: #222; }}.sf-toolbar-block.sf-toolbar-block-dump .sf-toolbar-info {    max-width: none;    width: 100%;    position: fixed;    box-sizing: border-box;    left: 0;}.sf-toolbar-block-dump pre.sf-dump {    background-color: #222;    border-color: #777;    border-radius: 0;    margin: 6px 0 12px 0;}.sf-toolbar-block-dump pre.sf-dump:last-child {    margin-bottom: 0;}.sf-toolbar-block-dump pre.sf-dump .sf-dump-search-wrapper {    margin-bottom: 5px;}.sf-toolbar-block-dump pre.sf-dump span.sf-dump-search-count {    color: #333;    font-size: 12px;}.sf-toolbar-block-dump .sf-toolbar-info-piece {    display: block;}.sf-toolbar-block-dump .sf-toolbar-info-piece .sf-toolbar-file-line {    color: #AAA;    margin-left: 4px;}.sf-toolbar-block-dump .sf-toolbar-info img {    display: none;}/* Responsive Design */.sf-toolbar-icon .sf-toolbar-label,.sf-toolbar-icon .sf-toolbar-value {    display: none;}.sf-toolbar-block-config .sf-toolbar-icon .sf-toolbar-label {    display: inline-block;}/* Legacy Design - these styles are maintained to make old panels look   a bit better on the new toolbar */.sf-toolbar-block .sf-toolbar-info-piece-additional-detail {    color: #AAA;    font-size: 12px;}.sf-toolbar-status-green .sf-toolbar-info-piece-additional-detail,.sf-toolbar-status-yellow .sf-toolbar-info-piece-additional-detail,.sf-toolbar-status-red .sf-toolbar-info-piece-additional-detail {    color: #FFF;}@media (min-width: 768px) {    .sf-toolbar-icon .sf-toolbar-label,    .sf-toolbar-icon .sf-toolbar-value {        display: inline;    }    .sf-toolbar-block .sf-toolbar-icon img,    .sf-toolbar-block .sf-toolbar-icon svg {        top: 6px;    }    .sf-toolbar-block-time .sf-toolbar-icon svg,    .sf-toolbar-block-memory .sf-toolbar-icon svg {        display: none;    }    .sf-toolbar-block-time .sf-toolbar-icon svg + span,    .sf-toolbar-block-memory .sf-toolbar-icon svg + span {        margin-left: 0;    }    .sf-toolbar-block .sf-toolbar-icon {        padding: 0 10px;    }    .sf-toolbar-block-time .sf-toolbar-icon {        padding-right: 5px;    }    .sf-toolbar-block-memory .sf-toolbar-icon {        padding-left: 5px;    }    .sf-toolbar-block-request .sf-toolbar-icon {        padding-left: 0;        padding-right: 0;    }    .sf-toolbar-block-request .sf-toolbar-label {        margin-left: 5px;    }    .sf-toolbar-block-request .sf-toolbar-status + svg {        margin-left: 5px;    }    .sf-toolbar-block-request .sf-toolbar-icon svg + .sf-toolbar-label {        margin-left: 0;     }    .sf-toolbar-block-request .sf-toolbar-label + .sf-toolbar-value {        margin-right: 10px;    }    .sf-toolbar-block-request:hover .sf-toolbar-info {        max-width: none;    }    .sf-toolbar-block .sf-toolbar-info-piece b {        font-size: 12px;    }    .sf-toolbar-block .sf-toolbar-info-piece span {        font-size: 13px;    }    .sf-toolbar-block-right {        float: right;        margin-left: 0;        margin-right: 0;    }}@media (min-width: 1024px) {    .sf-toolbar-block .sf-toolbar-info-piece-additional,    .sf-toolbar-block .sf-toolbar-info-piece-additional-detail {        display: inline;    }    .sf-toolbar-block .sf-toolbar-info-piece-additional:empty,    .sf-toolbar-block .sf-toolbar-info-piece-additional-detail:empty {        display: none;    }}/***** Error Toolbar *****/.sf-error-toolbar .sf-toolbarreset {    background: #222;    color: #f5f5f5;    font: 13px/36px Arial, sans-serif;    height: 36px;    padding: 0 15px;    text-align: left;}.sf-error-toolbar .sf-toolbarreset svg {    height: auto;}.sf-error-toolbar .sf-toolbarreset a {    color: #99cdd8;    margin-left: 5px;    text-decoration: underline;}.sf-error-toolbar .sf-toolbarreset a:hover {    text-decoration: none;}.sf-error-toolbar .sf-toolbarreset .sf-toolbar-icon {    float: left;    padding: 5px 0;    margin-right: 10px;}.sf-full-stack {    left: 0px;    font-size: 12px;}/***** Media query print: Do not print the Toolbar. *****/@media print {    .sf-toolbar {        display: none !important;    }}</style><script nonce=\"659cf5bef95a15dc4f72507cf82744ca\">/*<![CDATA[*/    (function () {        Sfjs.loadToolbar('5e5522');    })();/*]]>*/</script>


</body></html>


";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 176
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 177
        echo "
    ";
        // line 178
        echo twig_include($this->env, $context, "trajet_controller_back/_form.html.twig");
        echo "

    <a href=\"";
        // line 180
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trajet_controller_back_index");
        echo "\" class=\"btn btn-success btn-icon-split ml-auto\">back to list</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "trajet_controller_back/new.html.twig";
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
        return array (  799 => 180,  794 => 178,  791 => 177,  781 => 176,  229 => 182,  227 => 176,  136 => 88,  126 => 81,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
<!-- Add SweetAlert CDN -->
<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@10\"></script>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <title>Utilisateurs - Tfarhida</title>

    <link href=\"/sbadmin2/vendor/fontawesome-free/css/all.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">
    <link href=\"/sbadmin2/css/sb-admin-2.min.css\" rel=\"stylesheet\">
    <link href=\"/css/app.css\" rel=\"stylesheet\">
    <link href=\"/sbadmin2/vendor/datatables/dataTables.bootstrap4.min.css\" rel=\"stylesheet\">

    <style>
        .button-container {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .button-group {
            margin-top: 20px;
        }

        .btn {
            display: inline-block;
            padding: 8px 12px;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: #fff;
        }
         .btn-third {
            background-color: #F98D75;
            color: #fff;
        }
      
    
    </style>
</head>
    <body class=\"\" id=\"page-top\">
            
        <div id=\"wrapper\">
            
            
<ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">
    <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"/accueil\">
        <div class=\"sidebar-brand-icon rotate-n-15\">
            <i class=\"fas fa-laugh-wink\"></i>
        </div>
        <div class=\"sidebar-brand-text mx-3\">Tfarhida</div>
    </a>

    <hr class=\"sidebar-divider my-0\">

    
    <hr class=\"sidebar-divider my-0\">

                                                                                
            
        

    <li class=\"nav-item             active
    \">
        <a class=\"nav-link\" href=\"{{ path('app_moyen_transport_back_index') }}\" aria-expanded=\"false\">
            <i class=\"fas fa-user\"></i>
            <span>MoyenTransport</span>
        </a>
    </li>
     <li class=\"nav-item             active
    \">
        <a class=\"nav-link\" href=\"{{ path('app_trajet_controller_back_index') }}\" aria-expanded=\"false\">
            <i class=\"fas fa-user\"></i>
            <span>Trajet</span>
        </a>
    </li>

    <hr class=\"sidebar-divider d-none d-md-block\">

    <div class=\"text-center d-none d-md-inline\">
        <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
    </div>

</ul>
           
            <div id=\"content-wrapper\" class=\"d-flex flex-column\">

                <div id=\"content\">

                    <!-- Topbar -->
<nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow topbar\">

    <!-- Sidebar Toggle (Topbar) -->
    <button class=\"btn btn-link d-md-none rounded-circle mr-3\" id=\"sidebarToggleTop\">
        <i class=\"fa fa-bars\"></i>
    </button>

                                                                    
        
    
    <ul class=\"navbar-nav ml-auto\">

                                                                        
        
        
                                                                                 
            
        
                                                                                
            
        
        <div class=\"topbar-divider d-none d-sm-block\"></div>

        <!-- Nav Item - User Information -->
        <li class=\"nav-item dropdown no-arrow\">
            <a aria-expanded=\"false\" aria-haspopup=\"true\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"userDropdown\" role=\"button\">
                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\"><i class=\"far fa-user text-primary mr-2 fa-2x \"></i>Ala Suidi </span>
                            </a>
            <!-- Dropdown - User Information -->
            <div aria-labelledby=\"userDropdown\" class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\">
                <a class=\"dropdown-item\" href=\"/admin/profil\">
                    <i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Profil
                </a>
                <a class=\"dropdown-item\" href=\"/admin/parametre\">
                    <i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Paramètres
                </a>
                                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" data-target=\"#logoutModal\" data-toggle=\"modal\" href=\"#\">
                    <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                    Déconnexion
                </a>
            </div>
        </li>

    </ul>

</nav>
<!-- End of Topbar -->
                    
                    <div class=\"container-fluid\">

                        <h1 class=\"h3 mb-0 text-gray-800\">Gestion des trajets</h1>
                        
                        
                        
            <div id=\"table-actions\" class=\"d-flex align-items-center justify-content-between mb-4\">
        <div class=\"d-flex\">
            <button id=\"btPrint\" onclick=\"createPDF()\" class=\"export-pdf-btn\">
                <i class=\"fas fa-file-pdf\"></i> Export PDF
            </button>
            <input type=\"text\" id=\"myInput\" onkeyup=\"myFunction()\" placeholder=\"Search ...\" class=\"form-control\">
        </div>
        <div>
            
        </div>
    </div>

{% block body %}

    {{ include('trajet_controller_back/_form.html.twig') }}

    <a href=\"{{ path('app_trajet_controller_back_index') }}\" class=\"btn btn-success btn-icon-split ml-auto\">back to list</a>
{% endblock %}
 </div>
    </div>
                    </div>
                </div>
                <footer class=\"sticky-footer bg-white\">
                    <div class=\"container my-auto\">
                        <div class=\"copyright text-center my-auto\">
                            <span>Copyright © Tfarhida - 2024 - esprit</span>
                        </div>
                    </div>
                </footer>

            

        

        <a class=\"scroll-to-top rounded\" href=\"#page-top\">
            <i class=\"fas fa-angle-up\"></i>
        </a>

        <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Êtes-vous sûr de vouloir vous déconnecter ?</h5>
                <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">Sélectionner \"Déconnexion\" seulement si vous êtes sûr de vouloir vous déconnecter.</div>
            <div class=\"modal-footer\">
                <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Annuler</button>
                <a class=\"btn btn-primary\" href=\"/deconnexion\">Déconnexion</a>
            </div>
        </div>
    </div>
</div>
        <!-- Bootstrap core JavaScript-->
        <script src=\"/sbadmin2/vendor/jquery/jquery.min.js\"></script>
        <script src=\"/sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>

        <!-- Core plugin JavaScript-->
        <script src=\"/sbadmin2/vendor/jquery-easing/jquery.easing.min.js\"></script>

        <!-- Custom scripts for all pages-->
        <script src=\"/sbadmin2/js/sb-admin-2.min.js\"></script>

            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js\"></script>
    <script>
      function createPDF() {
        var sTable = document.getElementById('table').outerHTML;
        var style = \"<style>\";
        style = style + \"table {width: 100%; border-collapse: collapse; margin-top: 20px;}\";
        style = style + \"th, td {border: 1px solid #ddd; padding: 8px; text-align: left;}\";
        style = style + \"th {background-color: #f2f2f2;}\";
        style = style + \"</style>\";
    
        // CREATE A WINDOW OBJECT.
        var win = window.open('', '', 'height=700,width=700');
        win.document.write('<html><head>');
        win.document.write('<title>product list PDF</title>');   // <title> FOR PDF HEADER.
        win.document.write(style);          // ADD STYLE INSIDE THE HEAD TAG.
        win.document.write('</head>');
        win.document.write('<body>');
        win.document.write(sTable);         // THE TABLE CONTENTS INSIDE THE BODY TAG.
        win.document.write('</body></html>');
        win.document.close(); \t// CLOSE THE CURRENT WINDOW.
        win.print();    // PRINT THE CONTENTS.
    }
    </script>
    <script>
        function myFunction() {
          // Declare variables
          var input, filter, table, tr, td, i, txtValue;
          input = document.getElementById(\"myInput\");
          filter = input.value.toUpperCase();
          table = document.getElementById(\"table\");
          tr = table.getElementsByTagName(\"tr\");
        
          // Loop through all table rows, and hide those who don't match the search query
          for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName(\"td\")[1];
            if (td) {
              txtValue = td.textContent || td.innerText;
              if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = \"\";
              } else {
                tr[i].style.display = \"none\";
              }
            }
          }
        }

        function sortTable(n) {
          var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
          table = document.getElementById(\"table\");
          switching = true;
          dir = \"asc\";

          while (switching) {
            switching = false;
            rows = table.rows;

            for (i = 1; i < (rows.length - 1); i++) {
              shouldSwitch = false;
              x = rows[i].getElementsByTagName(\"TD\")[n];
              y = rows[i + 1].getElementsByTagName(\"TD\")[n];

              if (dir == \"asc\") {
                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                  shouldSwitch = true;
                  break;
                }
              } else if (dir == \"desc\") {
                if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                  shouldSwitch = true;
                  break;
                }
              }
            }

            if (shouldSwitch) {
              rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
              switching = true;
              switchcount++;
            } else {
              if (switchcount == 0 && dir == \"asc\") {
                dir = \"desc\";
                switching = true;
              }
            }
          }
        }
    </script>
    
<div id=\"sfwdt5e5522\" class=\"sf-toolbar\" role=\"region\" aria-label=\"Symfony Web Debug Toolbar\" data-sfurl=\"http://127.0.0.1:8000/_wdt/5e5522\" style=\"display: block;\"><!-- START of Symfony Web Debug Toolbar -->
<div id=\"sfMiniToolbar-5e5522\" class=\"sf-minitoolbar\" data-no-turbolink=\"\" data-turbo=\"false\" style=\"display: none;\">
    <button type=\"button\" title=\"Show Symfony toolbar\" id=\"sfToolbarMiniToggler-5e5522\" accesskey=\"D\" aria-expanded=\"false\" aria-controls=\"sfToolbarMainContent-5e5522\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" aria-hidden=\"true\" focusable=\"false\"><path fill=\"#AAA\" d=\"M12 .9C5.8.9.9 5.8.9 12a11 11 0 1 0 22.2 0A11 11 0 0 0 12 .9zm6.5 6c-.6 0-.9-.3-.9-.8 0-.2 0-.4.2-.6l.2-.4c0-.3-.5-.4-.6-.4-1.8.1-2.3 2.5-2.7 4.4l-.2 1c1 .2 1.8 0 2.2-.3.6-.4-.2-.7-.1-1.2.1-.3.5-.5.7-.6.5 0 .7.5.7.9 0 .7-1 1.8-3 1.8l-.6-.1-.6 2.4c-.4 1.6-.8 3.8-2.4 5.7-1.4 1.7-2.9 1.9-3.5 1.9-1.2 0-1.9-.6-2-1.5 0-.8.7-1.3 1.2-1.3.6 0 1.1.5 1.1 1s-.2.6-.4.6c-.1.1-.3.2-.3.4 0 .1.1.3.4.3.5 0 .8-.3 1.1-.5 1.2-.9 1.6-2.7 2.2-5.7l.1-.7.7-3.2c-.8-.6-1.3-1.4-2.4-1.7-.6-.1-1.1.1-1.5.5-.4.5-.2 1.1.2 1.5l.7.6c.7.8 1.2 1.6 1 2.5-.3 1.5-2 2.6-4 1.9-1.8-.6-2-1.8-1.8-2.5.2-.6.6-.7 1.1-.6.5.2.6.7.6 1.2l-.1.3c-.2.1-.3.3-.3.4-.1.4.4.6.7.7.7.3 1.6-.2 1.8-.8a1 1 0 0 0-.4-1.1l-.7-.8c-.4-.4-1.1-1.4-.7-2.6.1-.5.4-.9.7-1.3a4 4 0 0 1 2.8-.6c1.2.4 1.8 1.1 2.6 1.8.5-1.2 1-2.4 1.8-3.5.9-.9 1.9-1.6 3.1-1.7 1.3.2 2.2.7 2.2 1.6 0 .4-.2 1.1-.9 1.1z\"></path></svg>

    </button>
</div>
<div id=\"sfToolbarClearer-5e5522\" class=\"sf-toolbar-clearer\" style=\"display: block;\"></div>

<div id=\"sfToolbarMainContent-5e5522\" class=\"sf-toolbarreset clear-fix\" data-no-turbolink=\"\" style=\"display: block;\">
                                                
    
    
    
    
    
    <div class=\"sf-toolbar-block sf-toolbar-block-request sf-toolbar-status-normal \">
    <a href=\"http://127.0.0.1:8000/_profiler/5e5522?panel=request\">        <div class=\"sf-toolbar-icon\">        <span class=\"sf-toolbar-status sf-toolbar-status-green\">200</span>
                                            <span class=\"sf-toolbar-label\"> @</span>
            <span class=\"sf-toolbar-value sf-toolbar-info-piece-additional\">admin_user_index</span>
            </div>
    </a>        <div class=\"sf-toolbar-info\">        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>HTTP status</b>
                <span>200 OK</span>
            </div>

            
            <div class=\"sf-toolbar-info-piece\">
                <b>Controller</b>
                <span>            <a href=\"http://127.0.0.1:8000/_profiler/open?file=src\\Controller\\AdminUserController.php&amp;line=22#line22\" title=\"App\\Controller\\AdminUserController\">AdminUserController :: index</a>
    </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Route name</b>
                <span>admin_user_index</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Has session</b>
                <span>yes</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Stateless Check</b>
                <span>no</span>
            </div>
        </div>

        
            </div>
</div>


                                                                            
    
    
    <div class=\"sf-toolbar-block sf-toolbar-block-time sf-toolbar-status-normal \">
    <a href=\"http://127.0.0.1:8000/_profiler/5e5522?panel=time\">        <div class=\"sf-toolbar-icon\">        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#AAA\" d=\"M15.1 4.3a13 13 0 0 0-6.2 0c-.3 0-.7-.2-.7-.5v-.4c0-1.2 1-2.3 2.3-2.3h3c1.2 0 2.3 1 2.3 2.3v.3c0 .4-.4.6-.7.6zm5.8 9.7a9 9 0 0 1-17.8 0 9 9 0 0 1 17.8 0zm-4.2 1c0-.6-.4-1-1-1H13V8.4c0-.6-.4-1-1-1s-1 .4-1 1v6.2c0 .6.4 1.3 1 1.3h3.7c.5.1 1-.3 1-.9z\"></path></svg>

        <span class=\"sf-toolbar-value\">396</span>
        <span class=\"sf-toolbar-label\">ms</span>
    </div>
    </a>        <div class=\"sf-toolbar-info\">        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>396 ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Initialization time</b>
            <span>96 ms</span>
        </div>
    </div>
</div>


                                                                
    
    <div class=\"sf-toolbar-block sf-toolbar-block-time sf-toolbar-status-normal \">
    <a href=\"http://127.0.0.1:8000/_profiler/5e5522?panel=time\">        <div class=\"sf-toolbar-icon\">                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#AAA\" d=\"M6 18.9V15h12v3.9c0 .7-.2 1.1-1 1.1H7c-.8 0-1-.4-1-1.1zM20 1c-.6 0-1 .5-1 1.1v18c0 .5-.4.9-.9.9H5.9a.9.9 0 0 1-.9-.9v-18C5 1.5 4.6 1 4 1c-.5 0-1 .5-1 1.1v18C3 21.7 4.3 23 5.9 23h12.2c1.6 0 2.9-1.3 2.9-2.9v-18c0-.6-.4-1.1-1-1.1zm-2 8H6v5h12V9z\"></path></svg>

        <span class=\"sf-toolbar-value\">24.0</span>
        <span class=\"sf-toolbar-label\">MiB</span>
    </div>
    </a>        <div class=\"sf-toolbar-info\">        <div class=\"sf-toolbar-info-piece\">
            <b>Peak memory usage</b>
            <span>24.0 MiB</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>PHP memory limit</b>
            <span>512 MiB</span>
        </div>
    </div>
</div>


                                                                
                                                                
    
    <div class=\"sf-toolbar-block sf-toolbar-block-ajax sf-toolbar-status-normal\" style=\"display: none;\">
            <div class=\"sf-toolbar-icon\">        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#AAA\" d=\"M9.8 18L6 22.4c-.3.3-.8.4-1.1 0L1 18c-.4-.5-.1-1 .5-1H3V6.4C3 3.8 5.5 2 8.2 2h3.9c1.1 0 2 .9 2 2s-.9 2-2 2H8.2C7.7 6 7 6 7 6.4V17h2.2c.6 0 1 .5.6 1zM23 6l-3.8-4.5a.8.8 0 0 0-1.1 0L14.2 6c-.4.5-.1 1 .5 1H17v10.6c0 .4-.7.4-1.2.4h-3.9c-1.1 0-2 .9-2 2s.9 2 2 2h3.9c2.6 0 5.2-1.8 5.2-4.4V7h1.5c.6 0 .9-.5.5-1z\"></path></svg>

        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    </div>
            <div class=\"sf-toolbar-info\">        <div class=\"sf-toolbar-info-piece\">
            <span class=\"sf-toolbar-header\">
                <b class=\"sf-toolbar-ajax-info\">0 AJAX requests</b>
                <b class=\"sf-toolbar-action\">(<a class=\"sf-toolbar-ajax-clear\" href=\"javascript:void(0);\">Clear</a>)</b>
            </span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Profile</th>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    </div>
</div>


                                                                
                                                                                    
        
        <div class=\"sf-toolbar-block sf-toolbar-block-logger sf-toolbar-status-none \">
    <a href=\"http://127.0.0.1:8000/_profiler/5e5522?panel=logger\">        <div class=\"sf-toolbar-icon\">                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#AAA\" d=\"M21 4v13.8c0 2.7-2.5 5.2-5.2 5.2H6c-.6 0-1-.4-1-1s.4-1 1-1h9.8c1.6 0 3.2-1.7 3.2-3.2V4c0-.6.4-1 1-1s1 .4 1 1zM5.5 20A2.5 2.5 0 0 1 3 17.5v-14C3 2.1 4.1 1 5.5 1h10.1C16.9 1 18 2.1 18 3.5v14.1c0 1.4-1.1 2.5-2.5 2.5h-10zM9 11.4c0 .3.3.6.6.6h1.8c.3 0 .6-.3.6-.6V4.6c0-.3-.3-.6-.6-.6H9.6c-.3 0-.6.3-.6.6v6.8zm0 5c0 .3.3.6.6.6h1.8c.3 0 .6-.3.6-.6v-1.8c0-.3-.3-.6-.6-.6H9.6c-.3 0-.6.3-.6.6v1.8z\"></path></svg>

            <span class=\"sf-toolbar-value\">5</span>
        </div>
    </a>        <div class=\"sf-toolbar-info\">            <div class=\"sf-toolbar-info-piece\">
                <b>Errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-\">0</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Warnings</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-\">0</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Deprecations</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-none\">5</span>
            </div>
        </div>
</div>

    
                                                                        
                                                                
                                                                
                                                                                
        
        <div class=\"sf-toolbar-block sf-toolbar-block-security sf-toolbar-status-normal \">
    <a href=\"http://127.0.0.1:8000/_profiler/5e5522?panel=security\">        <div class=\"sf-toolbar-icon\">            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#AAA\" d=\"M21 20.4V22H3v-1.6c0-3.7 2.4-6.9 5.8-8-1.7-1.1-2.9-3-2.9-5.2 0-3.4 2.7-6.1 6.1-6.1s6.1 2.7 6.1 6.1c0 2.2-1.2 4.1-2.9 5.2 3.4 1.1 5.8 4.3 5.8 8z\"></path></svg>

            <span class=\"sf-toolbar-value\">roudaina.gmati@esprit.tn</span>
        </div>
    </a>        <div class=\"sf-toolbar-info\">            
            <div class=\"sf-toolbar-info-group\">
                                                            <div class=\"sf-toolbar-info-piece\">
                            <b>Logged in as</b>
                            <span>roudaina.gmati@esprit.tn</span>
                        </div>

                        <div class=\"sf-toolbar-info-piece\">
                            <b>Authenticated</b>
                            <span class=\"sf-toolbar-status sf-toolbar-status-green\">Yes</span>
                        </div>

                        <div class=\"sf-toolbar-info-piece\">
                            <b>Roles</b>
                            <span>
                                                                ROLE_ADMIN
                                                                    +
                                    <abbr title=\"ROLE_USER\">
                                        1 more
                                    </abbr>
                                                            </span>
                        </div>

                        <div class=\"sf-toolbar-info-piece\">
                            <b>Token class</b>
                            <span><abbr title=\"Symfony\\Component\\Security\\Http\\Authenticator\\Token\\PostAuthenticationToken\">PostAuthenticationToken</abbr></span>
                        </div>
                    
                                            <div class=\"sf-toolbar-info-piece\">
                            <b>Firewall name</b>
                            <span>main</span>
                        </div>
                    
                                            <div class=\"sf-toolbar-info-piece\">
                            <b>Actions</b>
                            <span>
                                <a href=\"/deconnexion\">Logout</a>
                                                            </span>
                        </div>
                                                </div>
        </div>
</div>

    
                                                                    
    
    <div class=\"sf-toolbar-block sf-toolbar-block-twig sf-toolbar-status-normal \">
    <a href=\"http://127.0.0.1:8000/_profiler/5e5522?panel=twig\">        <div class=\"sf-toolbar-icon\">        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#AAA\" d=\"M8.932 22.492c.016-6.448-.971-11.295-5.995-11.619 4.69-.352 7.113 2.633 9.298 6.907C12.205 6.354 9.882 1.553 4.8 1.297c7.433.07 10.028 5.9 11.508 14.293 1.171-2.282 3.56-5.553 5.347-1.361-1.594-2.04-3.607-1.617-3.978 8.262H8.933z\"></path></svg>

        <span class=\"sf-toolbar-value\">9</span>
        <span class=\"sf-toolbar-label\">ms</span>
    </div>
    </a>        <div class=\"sf-toolbar-info\" style=\"left: 0px;\">        <div class=\"sf-toolbar-info-piece\">
            <b>Render Time</b>
            <span>9 ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Template Calls</b>
            <span class=\"sf-toolbar-status\">13</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Block Calls</b>
            <span class=\"sf-toolbar-status\">6</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Macro Calls</b>
            <span class=\"sf-toolbar-status\">2</span>
        </div>
    </div>
</div>


                                                                
                                                                
        
        
        <div class=\"sf-toolbar-block sf-toolbar-block-db sf-toolbar-status-normal \">
    <a href=\"http://127.0.0.1:8000/_profiler/5e5522?panel=db\">        <div class=\"sf-toolbar-icon\">            
                            <span class=\"icon\"><svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
    <path fill=\"#AAAAAA\" d=\"M5,8h14c1.7,0,3-1.3,3-3s-1.3-3-3-3H5C3.3,2,2,3.3,2,5S3.3,8,5,8z M18,3.6c0.8,0,1.5,0.7,1.5,1.5S18.8,6.6,18,6.6s-1.5-0.7-1.5-1.5S17.2,3.6,18,3.6z M19,9H5c-1.7,0-3,1.3-3,3s1.3,3,3,3h14c1.7,0,3-1.3,3-3S20.7,9,19,9z M18,13.6
    c-0.8,0-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5s1.5,0.7,1.5,1.5S18.8,13.6,18,13.6z M19,16H5c-1.7,0-3,1.3-3,3s1.3,3,3,3h14c1.7,0,3-1.3,3-3S20.7,16,19,16z M18,20.6c-0.8,0-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5s1.5,0.7,1.5,1.5S18.8,20.6,18,20.6z\"></path>
</svg>
</span>
            
                            <span class=\"sf-toolbar-value\">2</span>
                <span class=\"sf-toolbar-info-piece-additional-detail\">
                    <span class=\"sf-toolbar-label\">in</span>
                    <span class=\"sf-toolbar-value\">1.31</span>
                    <span class=\"sf-toolbar-label\">ms</span>
                </span>
                    </div>
    </a>        <div class=\"sf-toolbar-info\" style=\"left: 0px;\">            <div class=\"sf-toolbar-info-piece\">
                <b>Database Queries</b>
                <span class=\"sf-toolbar-status \">2</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Different statements</b>
                <span class=\"sf-toolbar-status\">2</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Query time</b>
                <span>1.31 ms</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Invalid entities</b>
                <span class=\"sf-toolbar-status \">0</span>
            </div>
                            <div class=\"sf-toolbar-info-piece\">
                    <b>Second Level Cache</b>
                    <span class=\"sf-toolbar-status\">disabled</span>
                </div>
                    </div>
</div>


    
                                                                
                                                                
                                                                
    
                                                                
    
                                                                                    
    
    
    <div class=\"sf-toolbar-block sf-toolbar-block-config sf-toolbar-status-normal sf-toolbar-block-right\" title=\"\">
    <a href=\"http://127.0.0.1:8000/_profiler/5e5522?panel=config\">        <div class=\"sf-toolbar-icon\">        <span class=\"sf-toolbar-label\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#AAA\" d=\"M12 .9C5.8.9.9 5.8.9 12a11 11 0 1 0 22.2 0A11 11 0 0 0 12 .9zm6.5 6c-.6 0-.9-.3-.9-.8 0-.2 0-.4.2-.6l.2-.4c0-.3-.5-.4-.6-.4-1.8.1-2.3 2.5-2.7 4.4l-.2 1c1 .2 1.8 0 2.2-.3.6-.4-.2-.7-.1-1.2.1-.3.5-.5.7-.6.5 0 .7.5.7.9 0 .7-1 1.8-3 1.8l-.6-.1-.6 2.4c-.4 1.6-.8 3.8-2.4 5.7-1.4 1.7-2.9 1.9-3.5 1.9-1.2 0-1.9-.6-2-1.5 0-.8.7-1.3 1.2-1.3.6 0 1.1.5 1.1 1s-.2.6-.4.6c-.1.1-.3.2-.3.4 0 .1.1.3.4.3.5 0 .8-.3 1.1-.5 1.2-.9 1.6-2.7 2.2-5.7l.1-.7.7-3.2c-.8-.6-1.3-1.4-2.4-1.7-.6-.1-1.1.1-1.5.5-.4.5-.2 1.1.2 1.5l.7.6c.7.8 1.2 1.6 1 2.5-.3 1.5-2 2.6-4 1.9-1.8-.6-2-1.8-1.8-2.5.2-.6.6-.7 1.1-.6.5.2.6.7.6 1.2l-.1.3c-.2.1-.3.3-.3.4-.1.4.4.6.7.7.7.3 1.6-.2 1.8-.8a1 1 0 0 0-.4-1.1l-.7-.8c-.4-.4-1.1-1.4-.7-2.6.1-.5.4-.9.7-1.3a4 4 0 0 1 2.8-.6c1.2.4 1.8 1.1 2.6 1.8.5-1.2 1-2.4 1.8-3.5.9-.9 1.9-1.6 3.1-1.7 1.3.2 2.2.7 2.2 1.6 0 .4-.2 1.1-.9 1.1z\"></path></svg>

        </span>
        <span class=\"sf-toolbar-value\">5.4.35</span>
    </div>
    </a>        <div class=\"sf-toolbar-info\">        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>Profiler token</b>
                <span>
                                            <a href=\"http://127.0.0.1:8000/_profiler/5e5522\">5e5522</a>
                                    </span>
            </div>

                            <div class=\"sf-toolbar-info-piece\">
                    <b>Environment</b>
                    <span>dev</span>
                </div>
            
                            <div class=\"sf-toolbar-info-piece\">
                    <b>Debug</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-green\">enabled</span>
                </div>
                    </div>

        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
                <b>PHP version</b>
                <span>
                    8.2.4
                    &nbsp; <a href=\"/_profiler/phpinfo\">View phpinfo()</a>
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
                <b>PHP Extensions</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-gray\">xdebug ✗</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-gray\">APCu ✗</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-red\">OPcache ✗</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>PHP SAPI</b>
                <span>cgi-fcgi</span>
            </div>
        </div>

        <div class=\"sf-toolbar-info-group\">
                            <div class=\"sf-toolbar-info-piece\">
                    <b>Resources</b>
                    <span>
                        <a href=\"https://symfony.com/doc/5.4.35/index.html\" rel=\"help\">
                            Read Symfony 5.4.35 Docs
                        </a>
                    </span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Help</b>
                    <span>
                        <a href=\"https://symfony.com/support\">
                            Symfony Support Channels
                        </a>
                    </span>
                </div>
                    </div>
    </div>
</div>


                            
    
<div class=\"sf-cli sf-toolbar-block sf-toolbar-block-sf-cli sf-toolbar-status-normal sf-toolbar-block-right\">
\t<div class=\"sf-toolbar-icon\">
\t\t<span class=\"sf-toolbar-label\">
\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" version=\"1.1\">
\t\t\t\t<path style=\"stroke:none;fill-rule:evenodd;fill:white;fill-opacity:1;\" d=\"M 24 2.398438 C 24 1.074219 22.925781 0 21.601562 0 L 2.398438 0 C 1.074219 0 0 1.074219 0 2.398438 L 0 21.601562 C 0 22.925781 1.074219 24 2.398438 24 L 21.601562 24 C 22.925781 24 24 22.925781 24 21.601562 Z M 24 2.398438 \"></path>
\t\t\t\t<path style=\"stroke:none;fill-rule:nonzero;fill:black;fill-opacity:1;\" d=\"M 18.078125 3.109375 C 16.742188 3.15625 15.578125 3.894531 14.710938 4.910156 C 13.75 6.027344 13.109375 7.351562 12.648438 8.703125 C 11.824219 8.027344 11.191406 7.152344 9.867188 6.773438 C 8.847656 6.480469 7.773438 6.601562 6.785156 7.335938 C 6.320312 7.683594 5.996094 8.210938 5.84375 8.710938 C 5.449219 9.996094 6.261719 11.144531 6.628906 11.558594 L 7.4375 12.421875 C 7.605469 12.59375 8.007812 13.035156 7.808594 13.667969 C 7.597656 14.359375 6.765625 14.804688 5.914062 14.542969 C 5.53125 14.425781 4.984375 14.144531 5.105469 13.742188 C 5.15625 13.578125 5.273438 13.457031 5.335938 13.316406 C 5.394531 13.195312 5.421875 13.105469 5.441406 13.050781 C 5.597656 12.542969 5.382812 11.878906 4.835938 11.710938 C 4.328125 11.554688 3.808594 11.679688 3.605469 12.332031 C 3.378906 13.078125 3.734375 14.425781 5.640625 15.015625 C 7.875 15.703125 9.765625 14.484375 10.035156 12.898438 C 10.203125 11.90625 9.753906 11.167969 8.933594 10.21875 L 8.261719 9.476562 C 7.855469 9.070312 7.71875 8.378906 8.136719 7.847656 C 8.492188 7.402344 8.996094 7.210938 9.824219 7.433594 C 11.03125 7.761719 11.566406 8.597656 12.464844 9.273438 C 12.09375 10.492188 11.851562 11.710938 11.632812 12.804688 L 11.5 13.621094 C 10.855469 16.984375 10.367188 18.832031 9.09375 19.890625 C 8.839844 20.074219 8.472656 20.347656 7.917969 20.367188 C 7.628906 20.375 7.535156 20.175781 7.53125 20.089844 C 7.527344 19.886719 7.695312 19.792969 7.808594 19.703125 C 7.980469 19.609375 8.238281 19.457031 8.21875 18.960938 C 8.203125 18.378906 7.71875 17.875 7.023438 17.898438 C 6.5 17.917969 5.703125 18.40625 5.734375 19.308594 C 5.765625 20.238281 6.628906 20.933594 7.9375 20.890625 C 8.636719 20.867188 10.195312 20.582031 11.730469 18.753906 C 13.519531 16.660156 14.019531 14.261719 14.394531 12.503906 L 14.816406 10.183594 C 15.050781 10.210938 15.300781 10.230469 15.570312 10.238281 C 17.796875 10.285156 18.910156 9.132812 18.929688 8.292969 C 18.941406 7.785156 18.597656 7.285156 18.113281 7.296875 C 17.769531 7.304688 17.335938 7.535156 17.230469 8.011719 C 17.128906 8.480469 17.941406 8.902344 17.308594 9.3125 C 16.855469 9.605469 16.050781 9.808594 14.914062 9.644531 L 15.121094 8.5 C 15.542969 6.335938 16.0625 3.671875 18.035156 3.609375 C 18.179688 3.601562 18.703125 3.613281 18.71875 3.960938 C 18.722656 4.078125 18.691406 4.109375 18.554688 4.375 C 18.417969 4.582031 18.363281 4.757812 18.371094 4.960938 C 18.390625 5.511719 18.8125 5.875 19.417969 5.855469 C 20.234375 5.828125 20.46875 5.035156 20.453125 4.628906 C 20.421875 3.671875 19.410156 3.066406 18.078125 3.109375 Z M 18.078125 3.109375 \"></path>
\t\t\t</svg>
\t\t</span>
\t\t<span class=\"sf-toolbar-value\">Server</span>
\t</div>
\t<div class=\"sf-toolbar-info\" style=\"left: 0px;\">
\t\t<div class=\"sf-toolbar-info-piece\">
\t\t\t<b>Server</b>PHP CGI 8.2.4
\t\t</div>
\t\t<div class=\"sf-toolbar-info-piece\">
\t\t\t<b>Tunnel</b><span class=\"sf-toolbar-status sf-toolbar-status-red\">Down</span>
\t\t</div>
\t\t<div class=\"sf-toolbar-info-piece\">
\t\t\t<b>Docker Compose</b><span class=\"sf-toolbar-status sf-toolbar-status-red\">Down</span>
\t\t</div>
\t\t<div class=\"sf-toolbar-info-piece\">
\t\t\t<b>Env Vars</b><span class=\"sf-toolbar-status sf-toolbar-status-red\">None</span>
\t\t</div>
\t\t<div class=\"sf-toolbar-info-piece\"><b>RabbitMQ UI</b> <span class=\"sf-toolbar-status sf-toolbar-status-red\">Down</span></div>
\t\t<div class=\"sf-toolbar-info-piece\"><b>Webmail</b> <span class=\"sf-toolbar-status sf-toolbar-status-red\">Down</span></div>
\t\t<div class=\"sf-toolbar-info-piece\">
\t\t\t<b><a class=\"sf-cli-blackfire\" href=\"https://blackfire.io/\" rel=\"noopener\" target=\"_blank\">Blackfire.io Agent</a></b><span class=\"sf-toolbar-status sf-toolbar-status-red\">Down</span></div>
\t
\t</div>
\t<div></div>
</div>
<button class=\"hide-button\" type=\"button\" id=\"sfToolbarHideButton-5e5522\" title=\"Close Toolbar\" accesskey=\"D\" aria-expanded=\"true\" aria-controls=\"sfToolbarMainContent-5e5522\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" aria-hidden=\"true\" focusable=\"false\"><path fill=\"#AAA\" d=\"M21.1 18.3c.8.8.8 2 0 2.8-.4.4-.9.6-1.4.6s-1-.2-1.4-.6L12 14.8l-6.3 6.3c-.4.4-.9.6-1.4.6s-1-.2-1.4-.6a2 2 0 0 1 0-2.8L9.2 12 2.9 5.7a2 2 0 0 1 0-2.8 2 2 0 0 1 2.8 0L12 9.2l6.3-6.3a2 2 0 0 1 2.8 0c.8.8.8 2 0 2.8L14.8 12l6.3 6.3z\"></path></svg>

    </button>
</div>
<!-- END of Symfony Web Debug Toolbar -->
</div><script nonce=\"659cf5bef95a15dc4f72507cf82744ca\">/*<![CDATA[*/    if (typeof Sfjs === 'undefined' || typeof Sfjs.loadToolbar === 'undefined') {    Sfjs = (function() {        \"use strict\";        if ('classList' in document.documentElement) {            var hasClass = function (el, cssClass) { return el.classList.contains(cssClass); };            var removeClass = function(el, cssClass) { el.classList.remove(cssClass); };            var addClass = function(el, cssClass) { el.classList.add(cssClass); };            var toggleClass = function(el, cssClass) { el.classList.toggle(cssClass); };        } else {            var hasClass = function (el, cssClass) { return el.className.match(new RegExp('\\\\b' + cssClass + '\\\\b')); };            var removeClass = function(el, cssClass) { el.className = el.className.replace(new RegExp('\\\\b' + cssClass + '\\\\b'), ' '); };            var addClass = function(el, cssClass) { if (!hasClass(el, cssClass)) { el.className += \" \" + cssClass; } };            var toggleClass = function(el, cssClass) { hasClass(el, cssClass) ? removeClass(el, cssClass) : addClass(el, cssClass); };        }        var noop = function() {};        var profilerStorageKey = 'symfony/profiler/';        var addEventListener;        var el = document.createElement('div');        if (!('addEventListener' in el)) {            addEventListener = function (element, eventName, callback) {                element.attachEvent('on' + eventName, callback);            };        } else {            addEventListener = function (element, eventName, callback) {                element.addEventListener(eventName, callback, false);            };        }        if (navigator.clipboard) {            document.querySelectorAll('[data-clipboard-text]').forEach(function(element) {                removeClass(element, 'hidden');                element.addEventListener('click', function() {                    navigator.clipboard.writeText(element.getAttribute('data-clipboard-text'));                })            });        }        var request = function(url, onSuccess, onError, payload, options, tries) {            var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');            options = options || {};            options.retry = options.retry || false;            tries = tries || 1;            /* this delays for 125, 375, 625, 875, and 1000, ... */            var delay = tries < 5 ? (tries - 0.5) * 250 : 1000;            xhr.open(options.method || 'GET', url, true);            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');            xhr.onreadystatechange = function(state) {                if (4 !== xhr.readyState) {                    return null;                }                if (xhr.status == 404 && options.retry && !options.stop) {                    setTimeout(function() {                        if (options.stop) {                            return;                        }                        request(url, onSuccess, onError, payload, options, tries + 1);                    }, delay);                    return null;                }                if (200 === xhr.status) {                    (onSuccess || noop)(xhr);                } else {                    (onError || noop)(xhr);                }            };            if (options.onSend) {                options.onSend(tries);            }            xhr.send(payload || '');        };        var getPreference = function(name) {            if (!window.localStorage) {                return null;            }            return localStorage.getItem(profilerStorageKey + name);        };        var setPreference = function(name, value) {            if (!window.localStorage) {                return null;            }            localStorage.setItem(profilerStorageKey + name, value);        };        var requestStack = [];        var extractHeaders = function(xhr, stackElement) {            /* Here we avoid to call xhr.getResponseHeader in order to */            /* prevent polluting the console with CORS security errors */            var allHeaders = xhr.getAllResponseHeaders();            var ret;            if (ret = allHeaders.match(/^x-debug-token:\\s+(.*)\$/im)) {                stackElement.profile = ret[1];            }            if (ret = allHeaders.match(/^x-debug-token-link:\\s+(.*)\$/im)) {                stackElement.profilerUrl = ret[1];            }            if (ret = allHeaders.match(/^Symfony-Debug-Toolbar-Replace:\\s+(.*)\$/im)) {                stackElement.toolbarReplaceFinished = false;                stackElement.toolbarReplace = '1' === ret[1];            }        };        var successStreak = 4;        var pendingRequests = 0;        var renderAjaxRequests = function() {            var requestCounter = document.querySelector('.sf-toolbar-ajax-request-counter');            if (!requestCounter) {                return;            }            requestCounter.textContent = requestStack.length;            var infoSpan = document.querySelector(\".sf-toolbar-ajax-info\");            if (infoSpan) {                infoSpan.textContent = requestStack.length + ' AJAX request' + (requestStack.length !== 1 ? 's' : '');            }            var ajaxToolbarPanel = document.querySelector('.sf-toolbar-block-ajax');            if (requestStack.length) {                ajaxToolbarPanel.style.display = 'block';            } else {                ajaxToolbarPanel.style.display = 'none';            }            if (pendingRequests > 0) {                addClass(ajaxToolbarPanel, 'sf-ajax-request-loading');            } else if (successStreak < 4) {                addClass(ajaxToolbarPanel, 'sf-toolbar-status-red');                removeClass(ajaxToolbarPanel, 'sf-ajax-request-loading');            } else {                removeClass(ajaxToolbarPanel, 'sf-ajax-request-loading');                removeClass(ajaxToolbarPanel, 'sf-toolbar-status-red');            }        };        var startAjaxRequest = function(index) {            var tbody = document.querySelector('.sf-toolbar-ajax-request-list');            if (!tbody) {                return;            }            var nbOfAjaxRequest = tbody.rows.length;            if (nbOfAjaxRequest >= 100) {                tbody.deleteRow(0);            }            var request = requestStack[index];            pendingRequests++;            var row = document.createElement('tr');            request.DOMNode = row;            var requestNumberCell = document.createElement('td');            requestNumberCell.textContent = index + 1;            row.appendChild(requestNumberCell);            var profilerCell = document.createElement('td');            profilerCell.textContent = 'n/a';            row.appendChild(profilerCell);            var methodCell = document.createElement('td');            methodCell.textContent = request.method;            row.appendChild(methodCell);            var typeCell = document.createElement('td');            typeCell.textContent = request.type;            row.appendChild(typeCell);            var statusCodeCell = document.createElement('td');            var statusCode = document.createElement('span');            statusCode.textContent = 'n/a';            statusCodeCell.appendChild(statusCode);            row.appendChild(statusCodeCell);            var pathCell = document.createElement('td');            pathCell.className = 'sf-ajax-request-url';            if ('GET' === request.method) {                var pathLink = document.createElement('a');                pathLink.setAttribute('href', request.url);                pathLink.textContent = request.url;                pathCell.appendChild(pathLink);            } else {                pathCell.textContent = request.url;            }            pathCell.setAttribute('title', request.url);            row.appendChild(pathCell);            var durationCell = document.createElement('td');            durationCell.className = 'sf-ajax-request-duration';            durationCell.textContent = 'n/a';            row.appendChild(durationCell);            request.liveDurationHandle = setInterval(function() {                durationCell.textContent = (new Date() - request.start) + ' ms';            }, 100);            row.className = 'sf-ajax-request sf-ajax-request-loading';            tbody.insertBefore(row, null);            var toolbarInfo = document.querySelector('.sf-toolbar-block-ajax .sf-toolbar-info');            toolbarInfo.scrollTop = toolbarInfo.scrollHeight;            renderAjaxRequests();        };        var finishAjaxRequest = function(index) {            var request = requestStack[index];            clearInterval(request.liveDurationHandle);            if (!request.DOMNode) {                return;            }            if (request.toolbarReplace && !request.toolbarReplaceFinished && request.profile) {                /* Flag as complete because finishAjaxRequest can be called multiple times. */                request.toolbarReplaceFinished = true;                /* Search up through the DOM to find the toolbar's container ID. */                for (var elem = request.DOMNode; elem && elem !== document; elem = elem.parentNode) {                    if (elem.id.match(/^sfwdt/)) {                        Sfjs.loadToolbar(elem.id.replace(/^sfwdt/, ''), request.profile);                        break;                    }                }            }            pendingRequests--;            var row = request.DOMNode;            /* Unpack the children from the row */            var profilerCell = row.children[1];            var methodCell = row.children[2];            var statusCodeCell = row.children[4];            var statusCodeElem = statusCodeCell.children[0];            var durationCell = row.children[6];            if (request.error) {                row.className = 'sf-ajax-request sf-ajax-request-error';                methodCell.className = 'sf-ajax-request-error';                successStreak = 0;            } else {                row.className = 'sf-ajax-request sf-ajax-request-ok';                successStreak++;            }            if (request.statusCode) {                if (request.statusCode < 300) {                    statusCodeElem.setAttribute('class', 'sf-toolbar-status');                } else if (request.statusCode < 400) {                    statusCodeElem.setAttribute('class', 'sf-toolbar-status sf-toolbar-status-yellow');                } else {                    statusCodeElem.setAttribute('class', 'sf-toolbar-status sf-toolbar-status-red');                }                statusCodeElem.textContent = request.statusCode;            } else {                statusCodeElem.setAttribute('class', 'sf-toolbar-status sf-toolbar-status-red');            }            if (request.duration) {                durationCell.textContent = request.duration + ' ms';            }            if (request.profilerUrl) {                profilerCell.textContent = '';                var profilerLink = document.createElement('a');                profilerLink.setAttribute('href', request.profilerUrl);                profilerLink.textContent = request.profile;                profilerCell.appendChild(profilerLink);            }            renderAjaxRequests();        };                    if (window.fetch && window.fetch.polyfill === undefined) {                var oldFetch = window.fetch;                window.fetch = function () {                    var promise = oldFetch.apply(this, arguments);                    var url = arguments[0];                    var params = arguments[1];                    var paramType = Object.prototype.toString.call(arguments[0]);                    if (paramType === '[object Request]') {                        url = arguments[0].url;                        params = {                            method: arguments[0].method,                            credentials: arguments[0].credentials,                            headers: arguments[0].headers,                            mode: arguments[0].mode,                            redirect: arguments[0].redirect                        };                    } else {                        url = String(url);                    }                    if (!url.match(new RegExp(\"^\\/((index|app(_[\\\\w]+)?)\\\\.php\\/)?_wdt\"))) {                        var method = 'GET';                        if (params && params.method !== undefined) {                            method = params.method;                        }                        var stackElement = {                            error: false,                            url: url,                            method: method,                            type: 'fetch',                            start: new Date()                        };                        var idx = requestStack.push(stackElement) - 1;                        promise.then(function (r) {                            stackElement.duration = new Date() - stackElement.start;                            stackElement.error = r.status < 200 || r.status >= 400;                            stackElement.statusCode = r.status;                            stackElement.profile = r.headers.get('x-debug-token');                            stackElement.profilerUrl = r.headers.get('x-debug-token-link');                            stackElement.toolbarReplaceFinished = false;                            stackElement.toolbarReplace = '1' === r.headers.get('Symfony-Debug-Toolbar-Replace');                            finishAjaxRequest(idx);                        }, function (e){                            stackElement.error = true;                            finishAjaxRequest(idx);                        });                        startAjaxRequest(idx);                    }                    return promise;                };            }            if (window.XMLHttpRequest && XMLHttpRequest.prototype.addEventListener) {                var proxied = XMLHttpRequest.prototype.open;                XMLHttpRequest.prototype.open = function(method, url, async, user, pass) {                    var self = this;                    /* prevent logging AJAX calls to static and inline files, like templates */                    var path = url;                    if (url.slice(0, 1) === '/') {                        if (0 === url.indexOf('')) {                            path = url.slice(0);                        }                    }                    else if (0 === url.indexOf('http\\u003A\\/\\/127.0.0.1\\u003A8000')) {                        path = url.slice(21);                    }                    if (!path.match(new RegExp(\"^\\/((index|app(_[\\\\w]+)?)\\\\.php\\/)?_wdt\"))) {                        var stackElement = {                            error: false,                            url: url,                            method: method,                            type: 'xhr',                            start: new Date()                        };                        var idx = requestStack.push(stackElement) - 1;                        this.addEventListener('readystatechange', function() {                            if (self.readyState == 4) {                                stackElement.duration = new Date() - stackElement.start;                                stackElement.error = self.status < 200 || self.status >= 400;                                stackElement.statusCode = self.status;                                extractHeaders(self, stackElement);                                finishAjaxRequest(idx);                            }                        }, false);                        startAjaxRequest(idx);                    }                    proxied.apply(this, Array.prototype.slice.call(arguments));                };            }                return {            hasClass: hasClass,            removeClass: removeClass,            addClass: addClass,            toggleClass: toggleClass,            getPreference: getPreference,            setPreference: setPreference,            addEventListener: addEventListener,            request: request,            renderAjaxRequests: renderAjaxRequests,            getSfwdt: function(token) {                if (!this.sfwdt) {                    this.sfwdt = document.getElementById('sfwdt' + token);                }                return this.sfwdt;            },            load: function(selector, url, onSuccess, onError, options) {                var el = document.getElementById(selector);                if (el && el.getAttribute('data-sfurl') !== url) {                    request(                        url,                        function(xhr) {                            el.innerHTML = xhr.responseText;                            el.setAttribute('data-sfurl', url);                            removeClass(el, 'loading');                            var pending = pendingRequests;                            for (var i = 0; i < requestStack.length; i++) {                                startAjaxRequest(i);                                if (requestStack[i].duration) {                                    finishAjaxRequest(i);                                }                            }                            /* Revert the pending state in case there was a start called without a finish above. */                            pendingRequests = pending;                            (onSuccess || noop)(xhr, el);                        },                        function(xhr) { (onError || noop)(xhr, el); },                        '',                        options                    );                }                return this;            },            showToolbar: function(token) {                var sfwdt = this.getSfwdt(token);                removeClass(sfwdt, 'sf-display-none');                if (getPreference('toolbar/displayState') == 'none') {                    document.getElementById('sfToolbarMainContent-' + token).style.display = 'none';                    document.getElementById('sfToolbarClearer-' + token).style.display = 'none';                    document.getElementById('sfMiniToolbar-' + token).style.display = 'block';                } else {                    document.getElementById('sfToolbarMainContent-' + token).style.display = 'block';                    document.getElementById('sfToolbarClearer-' + token).style.display = 'block';                    document.getElementById('sfMiniToolbar-' + token).style.display = 'none';                }            },            hideToolbar: function(token) {                var sfwdt = this.getSfwdt(token);                addClass(sfwdt, 'sf-display-none');            },            initToolbar: function(token) {                this.showToolbar(token);                var hideButton = document.getElementById('sfToolbarHideButton-' + token);                var hideButtonSvg = hideButton.querySelector('svg');                hideButtonSvg.setAttribute('aria-hidden', 'true');                hideButtonSvg.setAttribute('focusable', 'false');                addEventListener(hideButton, 'click', function (event) {                    event.preventDefault();                    var p = this.parentNode;                    p.style.display = 'none';                    (p.previousElementSibling || p.previousSibling).style.display = 'none';                    document.getElementById('sfMiniToolbar-' + token).style.display = 'block';                    setPreference('toolbar/displayState', 'none');                });                var showButton = document.getElementById('sfToolbarMiniToggler-' + token);                var showButtonSvg = showButton.querySelector('svg');                showButtonSvg.setAttribute('aria-hidden', 'true');                showButtonSvg.setAttribute('focusable', 'false');                addEventListener(showButton, 'click', function (event) {                    event.preventDefault();                    var elem = this.parentNode;                    if (elem.style.display == 'none') {                        document.getElementById('sfToolbarMainContent-' + token).style.display = 'none';                        document.getElementById('sfToolbarClearer-' + token).style.display = 'none';                        elem.style.display = 'block';                    } else {                        document.getElementById('sfToolbarMainContent-' + token).style.display = 'block';                        document.getElementById('sfToolbarClearer-' + token).style.display = 'block';                        elem.style.display = 'none'                    }                    setPreference('toolbar/displayState', 'block');                });            },            loadToolbar: function(token, newToken) {                var that = this;                var triesCounter = document.getElementById('sfLoadCounter-' + token);                var options = {                    retry: true,                    onSend: function (count) {                        if (count === 3) {                            that.initToolbar(token);                        }                        if (triesCounter) {                            triesCounter.textContent = count;                        }                    },                };                var cancelButton = document.getElementById('sfLoadCancel-' + token);                if (cancelButton) {                    addEventListener(cancelButton, 'click', function (event) {                        event.preventDefault();                        options.stop = true;                        that.hideToolbar(token);                    });                }                newToken = (newToken || token);                this.load(                    'sfwdt' + token,                    'http\\u003A\\/\\/127.0.0.1\\u003A8000\\/_wdt\\/xxxxxx'.replace(/xxxxxx/, newToken),                    function(xhr, el) {                        /* Do nothing in the edge case where the toolbar has already been replaced with a new one */                        if (!document.getElementById('sfToolbarMainContent-' + newToken)) {                            return;                        }                        /* Evaluate in global scope scripts embedded inside the toolbar */                        var i, scripts = [].slice.call(el.querySelectorAll('script'));                        for (i = 0; i < scripts.length; ++i) {                            if (scripts[i].firstChild) {                                eval.call({}, scripts[i].firstChild.nodeValue);                            }                        }                        el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';                        if (el.style.display == 'none') {                            return;                        }                        that.initToolbar(newToken);                        /* Handle toolbar-info position */                        var toolbarBlocks = [].slice.call(el.querySelectorAll('.sf-toolbar-block'));                        for (i = 0; i < toolbarBlocks.length; ++i) {                            toolbarBlocks[i].onmouseover = function () {                                var toolbarInfo = this.querySelectorAll('.sf-toolbar-info')[0];                                var pageWidth = document.body.clientWidth;                                var elementWidth = toolbarInfo.offsetWidth;                                var leftValue = (elementWidth + this.offsetLeft) - pageWidth;                                var rightValue = (elementWidth + (pageWidth - this.offsetLeft)) - pageWidth;                                /* Reset right and left value, useful on window resize */                                toolbarInfo.style.right = '';                                toolbarInfo.style.left = '';                                if (elementWidth > pageWidth) {                                    toolbarInfo.style.left = 0;                                }                                else if (leftValue > 0 && rightValue > 0) {                                    toolbarInfo.style.right = (rightValue * -1) + 'px';                                } else if (leftValue < 0) {                                    toolbarInfo.style.left = 0;                                } else {                                    toolbarInfo.style.right = '0px';                                }                            };                        }                        renderAjaxRequests();                        addEventListener(document.querySelector('.sf-toolbar-ajax-clear'), 'click', function() {                            requestStack = [];                            renderAjaxRequests();                            successStreak = 4;                            document.querySelector('.sf-toolbar-ajax-request-list').innerHTML = '';                        });                        addEventListener(document.querySelector('.sf-toolbar-block-ajax'), 'mouseenter', function (event) {                            var elem = document.querySelector('.sf-toolbar-block-ajax .sf-toolbar-info');                            elem.scrollTop = elem.scrollHeight;                        });                        addEventListener(document.querySelector('.sf-toolbar-block-ajax > .sf-toolbar-icon'), 'click', function (event) {                            event.preventDefault();                            toggleClass(this.parentNode, 'hover');                        });                        var dumpInfo = document.querySelector('.sf-toolbar-block-dump .sf-toolbar-info');                        if (null !== dumpInfo) {                            addEventListener(dumpInfo, 'sfbeforedumpcollapse', function () {                                dumpInfo.style.minHeight = dumpInfo.getBoundingClientRect().height+'px';                            });                            addEventListener(dumpInfo, 'mouseleave', function () {                                dumpInfo.style.minHeight = '';                            });                        }                    },                    function(xhr) {                        if (xhr.status !== 0 && !options.stop) {                            var sfwdt = that.getSfwdt(token);                            sfwdt.innerHTML = '\\                                <div class=\"sf-toolbarreset\">\\                                    <div class=\"sf-toolbar-icon\"><svg width=\"26\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 26 28\" enable-background=\"new 0 0 26 28\" xml:space=\"preserve\"><path fill=\"#FFFFFF\" d=\"M13 0C5.8 0 0 5.8 0 13c0 7.2 5.8 13 13 13c7.2 0 13-5.8 13-13C26 5.8 20.2 0 13 0z M20 7.5 c-0.6 0-1-0.3-1-0.9c0-0.2 0-0.4 0.2-0.6c0.1-0.3 0.2-0.3 0.2-0.4c0-0.3-0.5-0.4-0.7-0.4c-2 0.1-2.5 2.7-2.9 4.8l-0.2 1.1 c1.1 0.2 1.9 0 2.4-0.3c0.6-0.4-0.2-0.8-0.1-1.3C18 9.2 18.4 9 18.7 8.9c0.5 0 0.8 0.5 0.8 1c0 0.8-1.1 2-3.3 1.9 c-0.3 0-0.5 0-0.7-0.1L15 14.1c-0.4 1.7-0.9 4.1-2.6 6.2c-1.5 1.8-3.1 2.1-3.8 2.1c-1.3 0-2.1-0.6-2.2-1.6c0-0.9 0.8-1.4 1.3-1.4 c0.7 0 1.2 0.5 1.2 1.1c0 0.5-0.2 0.6-0.4 0.7c-0.1 0.1-0.3 0.2-0.3 0.4c0 0.1 0.1 0.3 0.4 0.3c0.5 0 0.9-0.3 1.2-0.5 c1.3-1 1.7-2.9 2.4-6.2l0.1-0.8c0.2-1.1 0.5-2.3 0.8-3.5c-0.9-0.7-1.4-1.5-2.6-1.8c-0.8-0.2-1.3 0-1.7 0.4C8.4 10 8.6 10.7 9 11.1 l0.7 0.7c0.8 0.9 1.3 1.7 1.1 2.7c-0.3 1.6-2.1 2.8-4.3 2.1c-1.9-0.6-2.2-1.9-2-2.7c0.2-0.6 0.7-0.8 1.2-0.6 c0.5 0.2 0.7 0.8 0.6 1.3c0 0.1 0 0.1-0.1 0.3C6 15 5.9 15.2 5.9 15.3c-0.1 0.4 0.4 0.7 0.8 0.8c0.8 0.3 1.7-0.2 1.9-0.9 c0.2-0.6-0.2-1.1-0.4-1.2l-0.8-0.9c-0.4-0.4-1.2-1.5-0.8-2.8c0.2-0.5 0.5-1 0.9-1.4c1-0.7 2-0.8 3-0.6c1.3 0.4 1.9 1.2 2.8 1.9 c0.5-1.3 1.1-2.6 2-3.8c0.9-1 2-1.7 3.3-1.8C20 4.8 21 5.4 21 6.3C21 6.7 20.8 7.5 20 7.5z\"/></svg></div>\\                                    An error occurred while loading the web debug toolbar. <a href=\"http\\u003A\\/\\/127.0.0.1\\u003A8000\\/_profiler\\/' + newToken + '\">Open the web profiler.</a>\\                                </div>\\                            ';                            sfwdt.setAttribute('class', 'sf-toolbar sf-error-toolbar');                        }                    },                    options                );                return this;            },            toggle: function(selector, elOn, elOff) {                var tmp = elOn.style.display,                    el = document.getElementById(selector);                elOn.style.display = elOff.style.display;                elOff.style.display = tmp;                if (el) {                    el.style.display = 'none' === tmp ? 'none' : 'block';                }                return this;            },            createTabs: function() {                var tabGroups = document.querySelectorAll('.sf-tabs:not([data-processed=true])');                /* create the tab navigation for each group of tabs */                for (var i = 0; i < tabGroups.length; i++) {                    var tabs = tabGroups[i].querySelectorAll(':scope > .tab');                    var tabNavigation = document.createElement('ul');                    tabNavigation.className = 'tab-navigation';                    var selectedTabId = 'tab-' + i + '-0'; /* select the first tab by default */                    for (var j = 0; j < tabs.length; j++) {                        var tabId = 'tab-' + i + '-' + j;                        var tabTitle = tabs[j].querySelector('.tab-title').innerHTML;                        var tabNavigationItem = document.createElement('li');                        tabNavigationItem.setAttribute('data-tab-id', tabId);                        if (hasClass(tabs[j], 'active')) { selectedTabId = tabId; }                        if (hasClass(tabs[j], 'disabled')) { addClass(tabNavigationItem, 'disabled'); }                        tabNavigationItem.innerHTML = tabTitle;                        tabNavigation.appendChild(tabNavigationItem);                        var tabContent = tabs[j].querySelector('.tab-content');                        tabContent.parentElement.setAttribute('id', tabId);                    }                    tabGroups[i].insertBefore(tabNavigation, tabGroups[i].firstChild);                    addClass(document.querySelector('[data-tab-id=\"' + selectedTabId + '\"]'), 'active');                }                /* display the active tab and add the 'click' event listeners */                for (i = 0; i < tabGroups.length; i++) {                    tabNavigation = tabGroups[i].querySelectorAll(':scope > .tab-navigation li');                    for (j = 0; j < tabNavigation.length; j++) {                        tabId = tabNavigation[j].getAttribute('data-tab-id');                        document.getElementById(tabId).querySelector('.tab-title').className = 'hidden';                        if (hasClass(tabNavigation[j], 'active')) {                            document.getElementById(tabId).className = 'block';                        } else {                            document.getElementById(tabId).className = 'hidden';                        }                        tabNavigation[j].addEventListener('click', function(e) {                            var activeTab = e.target || e.srcElement;                            /* needed because when the tab contains HTML contents, user can click */                            /* on any of those elements instead of their parent '<li>' element */                            while (activeTab.tagName.toLowerCase() !== 'li') {                                activeTab = activeTab.parentNode;                            }                            /* get the full list of tabs through the parent of the active tab element */                            var tabNavigation = activeTab.parentNode.children;                            for (var k = 0; k < tabNavigation.length; k++) {                                var tabId = tabNavigation[k].getAttribute('data-tab-id');                                document.getElementById(tabId).className = 'hidden';                                removeClass(tabNavigation[k], 'active');                            }                            addClass(activeTab, 'active');                            var activeTabId = activeTab.getAttribute('data-tab-id');                            document.getElementById(activeTabId).className = 'block';                        });                    }                    tabGroups[i].setAttribute('data-processed', 'true');                }            },            createToggles: function() {                var toggles = document.querySelectorAll('.sf-toggle:not([data-processed=true])');                for (var i = 0; i < toggles.length; i++) {                    var elementSelector = toggles[i].getAttribute('data-toggle-selector');                    var element = document.querySelector(elementSelector);                    addClass(element, 'sf-toggle-content');                    if (toggles[i].hasAttribute('data-toggle-initial') && toggles[i].getAttribute('data-toggle-initial') == 'display') {                        addClass(toggles[i], 'sf-toggle-on');                        addClass(element, 'sf-toggle-visible');                    } else {                        addClass(toggles[i], 'sf-toggle-off');                        addClass(element, 'sf-toggle-hidden');                    }                    addEventListener(toggles[i], 'click', function(e) {                        e.preventDefault();                        if ('' !== window.getSelection().toString()) {                            /* Don't do anything on text selection */                            return;                        }                        var toggle = e.target || e.srcElement;                        /* needed because when the toggle contains HTML contents, user can click */                        /* on any of those elements instead of their parent '.sf-toggle' element */                        while (!hasClass(toggle, 'sf-toggle')) {                            toggle = toggle.parentNode;                        }                        var element = document.querySelector(toggle.getAttribute('data-toggle-selector'));                        toggleClass(toggle, 'sf-toggle-on');                        toggleClass(toggle, 'sf-toggle-off');                        toggleClass(element, 'sf-toggle-hidden');                        toggleClass(element, 'sf-toggle-visible');                        /* the toggle doesn't change its contents when clicking on it */                        if (!toggle.hasAttribute('data-toggle-alt-content')) {                            return;                        }                        if (!toggle.hasAttribute('data-toggle-original-content')) {                            toggle.setAttribute('data-toggle-original-content', toggle.innerHTML);                        }                        var currentContent = toggle.innerHTML;                        var originalContent = toggle.getAttribute('data-toggle-original-content');                        var altContent = toggle.getAttribute('data-toggle-alt-content');                        toggle.innerHTML = currentContent !== altContent ? altContent : originalContent;                    });                    /* Prevents from disallowing clicks on links inside toggles */                    var toggleLinks = toggles[i].querySelectorAll('a');                    for (var j = 0; j < toggleLinks.length; j++) {                        addEventListener(toggleLinks[j], 'click', function(e) {                            e.stopPropagation();                        });                    }                    /* Prevents from disallowing clicks on \"copy to clipboard\" elements inside toggles */                    var copyToClipboardElements = toggles[i].querySelectorAll('span[data-clipboard-text]');                    for (var k = 0; k < copyToClipboardElements.length; k++) {                        addEventListener(copyToClipboardElements[k], 'click', function(e) {                            e.stopPropagation();                        });                    }                    toggles[i].setAttribute('data-processed', 'true');                }            },            initializeLogsTable: function() {                Sfjs.updateLogsTable();                document.querySelectorAll('.log-filter input').forEach((input) => {                    input.addEventListener('change', () => { Sfjs.updateLogsTable(); });                });                document.querySelectorAll('.filter-select-all-or-none button').forEach((link) => {                    link.addEventListener('click', () => {                        const selectAll = link.classList.contains('select-all');                        link.closest('.log-filter-content').querySelectorAll('input').forEach((input) => {                            input.checked = selectAll;                        });                        Sfjs.updateLogsTable();                    });                });                document.body.addEventListener('click', (event) => {                    document.querySelectorAll('details.log-filter').forEach((filterElement) => {                        if (!filterElement.contains(event.target) && filterElement.open) {                            filterElement.open = false;                        }                    });                });            },            updateLogsTable: function() {                const selectedType = document.querySelector('#log-filter-type input:checked').value;                const priorities = document.querySelectorAll('#log-filter-priority input');                const allPriorities = Array.from(priorities).map((input) => input.value);                const selectedPriorities = Array.from(priorities).filter((input) => input.checked).map((input) => input.value);                const channels = document.querySelectorAll('#log-filter-channel input');                const selectedChannels = Array.from(channels).filter((input) => input.checked).map((input) => input.value);                const logs = document.querySelector('table.logs');                if (null === logs) {                    return;                }                /* hide rows that don't match the current filters */                let numVisibleRows = 0;                logs.querySelectorAll('tbody tr').forEach((row) => {                    if ('all' !== selectedType && selectedType !== row.getAttribute('data-type')) {                        row.style.display = 'none';                        return;                    }                    const priority = row.getAttribute('data-priority');                    if (false === selectedPriorities.includes(priority) && true === allPriorities.includes(priority)) {                        row.style.display = 'none';                        return;                    }                    if ('' !== row.getAttribute('data-channel') && false === selectedChannels.includes(row.getAttribute('data-channel'))) {                        row.style.display = 'none';                        return;                    }                    row.style.display = 'table-row';                    numVisibleRows++;                });                document.querySelector('table.logs').style.display = 0 === numVisibleRows ? 'none' : 'table';                document.querySelector('.no-logs-message').style.display = 0 === numVisibleRows ? 'block' : 'none';                /* update the selected totals of all filters */                document.querySelector('#log-filter-priority .filter-active-num').innerText = (priorities.length === selectedPriorities.length) ? 'All' : selectedPriorities.length;                document.querySelector('#log-filter-channel .filter-active-num').innerText = (channels.length === selectedChannels.length) ? 'All' : selectedChannels.length;                /* update the currently selected \"log type\" tab */                document.querySelectorAll('#log-filter-type li').forEach((tab) => tab.classList.remove('active'));                document.querySelector(`#log-filter-type input[value=\"\${selectedType}\"]`).parentElement.classList.add('active');            },        };    })();    Sfjs.addEventListener(document, 'DOMContentLoaded', function() {        Sfjs.createTabs();        Sfjs.createToggles();    });}/*]]>*/</script><style nonce=\"711f2165d4c1302e9c4c2183fdc6a90a\">    .sf-minitoolbar {    background-color: #222;    border-top-left-radius: 4px;    bottom: 0;    box-sizing: border-box;    display: none;    height: 36px;    padding: 6px;    position: fixed;    right: 0;    z-index: 99999;}.sf-minitoolbar button {    background-color: transparent;    padding: 0;    border: none;}.sf-minitoolbar svg,.sf-minitoolbar img {    max-height: 24px;    max-width: 24px;    display: inline;}.sf-toolbar-clearer {    clear: both;    height: 36px;}.sf-display-none {    display: none;}.sf-toolbarreset * {    box-sizing: content-box;    vertical-align: baseline;    letter-spacing: normal;    width: auto;}.sf-toolbarreset {    background-color: #222;    bottom: 0;    box-shadow: 0 -1px 0 rgba(0, 0, 0, 0.2);    color: #EEE;    font: 11px Arial, sans-serif;    left: 0;    margin: 0;    padding: 0 36px 0 0;    position: fixed;    right: 0;    text-align: left;    text-transform: none;    z-index: 99999;    direction: ltr;    /* neutralize the aliasing defined by external CSS styles */    -webkit-font-smoothing: subpixel-antialiased;    -moz-osx-font-smoothing: auto;}.sf-toolbarreset abbr {    border: dashed #777;    border-width: 0 0 1px;}.sf-toolbarreset svg,.sf-toolbarreset img {    height: 20px;    width: 20px;    display: inline-block;}.sf-toolbarreset .sf-cancel-button {    color: #444;}.sf-toolbarreset .hide-button {    background: #444;    display: block;    position: absolute;    top: 0;    right: 0;    width: 36px;    height: 36px;    cursor: pointer;    text-align: center;    border: none;    margin: 0;    padding: 0;}.sf-toolbarreset .hide-button svg {    max-height: 18px;    margin-top: 1px;}.sf-toolbar-block {    cursor: default;    display: block;    float: left;    height: 36px;    margin-right: 0;    white-space: nowrap;    max-width: 15%;}.sf-toolbar-block > a,.sf-toolbar-block > a:hover {    display: block;    text-decoration: none;    background-color: transparent;    color: inherit;}.sf-toolbar-block span {    display: inline-block;}.sf-toolbar-block .sf-toolbar-value {    color: #F5F5F5;    font-size: 13px;    line-height: 36px;    padding: 0;}.sf-toolbar-block .sf-toolbar-label,.sf-toolbar-block .sf-toolbar-class-separator {    color: #AAA;    font-size: 12px;}.sf-toolbar-block .sf-toolbar-info {    border-collapse: collapse;    display: table;    z-index: 100000;}.sf-toolbar-block hr {    border-top: 1px solid #777;    margin: 4px 0;    padding-top: 4px;}.sf-toolbar-block .sf-toolbar-info-piece {    /* this 'border-bottom' trick is needed because 'margin-bottom' doesn't work for table rows */    border-bottom: solid transparent 3px;    display: table-row;}.sf-toolbar-block .sf-toolbar-info-piece-additional,.sf-toolbar-block .sf-toolbar-info-piece-additional-detail {    display: none;}.sf-toolbar-block .sf-toolbar-info-group {    margin-bottom: 4px;    padding-bottom: 2px;    border-bottom: 1px solid #333333;}.sf-toolbar-block .sf-toolbar-info-group:last-child {    margin-bottom: 0;    padding-bottom: 0;    border-bottom: none;}.sf-toolbar-block .sf-toolbar-info-piece .sf-toolbar-status {    padding: 2px 5px;    margin-bottom: 0;}.sf-toolbar-block .sf-toolbar-info-piece .sf-toolbar-status + .sf-toolbar-status {    margin-left: 4px;}.sf-toolbar-block .sf-toolbar-info-piece:last-child {    margin-bottom: 0;}div.sf-toolbar .sf-toolbar-block .sf-toolbar-info-piece a {    color: #99CDD8;    text-decoration: underline;}div.sf-toolbar .sf-toolbar-block a:hover {    text-decoration: none;}.sf-toolbar-block .sf-toolbar-info-piece b {    color: #AAA;    display: table-cell;    font-size: 11px;    padding: 4px 8px 4px 0;}.sf-toolbar-block:not(.sf-toolbar-block-dump) .sf-toolbar-info-piece span {    color: #F5F5F5;}.sf-toolbar-block .sf-toolbar-info-piece span {    font-size: 12px;}.sf-toolbar-block .sf-toolbar-info {    background-color: #444;    bottom: 36px;    color: #F5F5F5;    display: none;    padding: 9px 0;    position: absolute;}.sf-toolbar-block .sf-toolbar-info:empty {    visibility: hidden;}.sf-toolbar-block .sf-toolbar-status {    display: inline-block;    color: #FFF;    background-color: #666;    padding: 3px 6px;    margin-bottom: 2px;    vertical-align: middle;    min-width: 15px;    min-height: 13px;    text-align: center;}.sf-toolbar-block .sf-toolbar-status-green {    background-color: #4F805D;}.sf-toolbar-block .sf-toolbar-status-red {    background-color: #B0413E;}.sf-toolbar-block .sf-toolbar-status-yellow {    background-color: #A46A1F;}.sf-toolbar-block.sf-toolbar-status-green {    background-color: #4F805D;    color: #FFF;}.sf-toolbar-block.sf-toolbar-status-red {    background-color: #B0413E;    color: #FFF;}.sf-toolbar-block.sf-toolbar-status-yellow {    background-color: #A46A1F;    color: #FFF;}.sf-toolbar-block-request .sf-toolbar-status {    color: #FFF;    display: inline-block;    font-size: 14px;    height: 36px;    line-height: 36px;    padding: 0 10px;}.sf-toolbar-block-request .sf-toolbar-info-piece a {    background-color: transparent;    text-decoration: none;}.sf-toolbar-block-request .sf-toolbar-info-piece a:hover {    text-decoration: underline;}.sf-toolbar-block-request .sf-toolbar-redirection-status {    font-weight: normal;    padding: 2px 4px;    line-height: 18px;}.sf-toolbar-block-request .sf-toolbar-info-piece span.sf-toolbar-redirection-method {    font-size: 12px;    height: 17px;    line-height: 17px;    margin-right: 5px;}.sf-toolbar-block-ajax .sf-toolbar-icon {    cursor: pointer;}.sf-toolbar-status-green .sf-toolbar-label,.sf-toolbar-status-yellow .sf-toolbar-label,.sf-toolbar-status-red .sf-toolbar-label {    color: #FFF;}.sf-toolbar-status-green svg path,.sf-toolbar-status-green svg .sf-svg-path,.sf-toolbar-status-red svg path,.sf-toolbar-status-red svg .sf-svg-path,.sf-toolbar-status-yellow svg path,.sf-toolbar-status-yellow svg .sf-svg-path {    fill: #FFF;}.sf-toolbar-block-config svg path,.sf-toolbar-block-config svg .sf-svg-path {    fill: #FFF;}.sf-toolbar-block .sf-toolbar-icon {    display: block;    height: 36px;    padding: 0 7px;    overflow: hidden;    text-overflow: ellipsis;}.sf-toolbar-block-request .sf-toolbar-icon {    padding-left: 0;    padding-right: 0;}.sf-toolbar-block .sf-toolbar-icon img,.sf-toolbar-block .sf-toolbar-icon svg {    border-width: 0;    position: relative;    top: 8px;    vertical-align: baseline;}.sf-toolbar-block .sf-toolbar-icon img + span,.sf-toolbar-block .sf-toolbar-icon svg + span {    margin-left: 4px;}.sf-toolbar-block-config .sf-toolbar-icon .sf-toolbar-value {    margin-left: 4px;}.sf-toolbar-block:hover,.sf-toolbar-block.hover {    position: relative;}.sf-toolbar-block:hover .sf-toolbar-icon,.sf-toolbar-block.hover .sf-toolbar-icon {    background-color: #444;    position: relative;    z-index: 10002;}.sf-toolbar-block-ajax.hover .sf-toolbar-info {    z-index: 10001;}.sf-toolbar-block:hover .sf-toolbar-info,.sf-toolbar-block.hover .sf-toolbar-info {    display: block;    padding: 10px;    max-width: 525px;    max-height: 480px;    word-wrap: break-word;    overflow: hidden;    overflow-y: auto;}.sf-toolbar-info-piece b.sf-toolbar-ajax-info {    color: #F5F5F5;}.sf-toolbar-ajax-requests {    table-layout: auto;    width: 100%;}.sf-toolbar-ajax-requests td {    background-color: #444;    border-bottom: 1px solid #777;    color: #F5F5F5;    font-size: 12px;    padding: 4px;}.sf-toolbar-ajax-requests tr:last-child td {    border-bottom: 0;}.sf-toolbar-ajax-requests th {    background-color: #222;    border-bottom: 0;    color: #AAA;    font-size: 11px;    padding: 4px;}.sf-ajax-request-url {    max-width: 250px;    line-height: 9px;    overflow: hidden;    text-overflow: ellipsis;}.sf-toolbar-ajax-requests .sf-ajax-request-url a {    text-decoration: none;}.sf-toolbar-ajax-requests .sf-ajax-request-url a:hover {    text-decoration: underline;}.sf-ajax-request-duration {    text-align: right;}.sf-ajax-request-loading {    animation: sf-blink .5s ease-in-out infinite;}@keyframes sf-blink {    0% { background: #222; }    50% { background: #444; }    100% { background: #222; }}.sf-toolbar-block.sf-toolbar-block-dump .sf-toolbar-info {    max-width: none;    width: 100%;    position: fixed;    box-sizing: border-box;    left: 0;}.sf-toolbar-block-dump pre.sf-dump {    background-color: #222;    border-color: #777;    border-radius: 0;    margin: 6px 0 12px 0;}.sf-toolbar-block-dump pre.sf-dump:last-child {    margin-bottom: 0;}.sf-toolbar-block-dump pre.sf-dump .sf-dump-search-wrapper {    margin-bottom: 5px;}.sf-toolbar-block-dump pre.sf-dump span.sf-dump-search-count {    color: #333;    font-size: 12px;}.sf-toolbar-block-dump .sf-toolbar-info-piece {    display: block;}.sf-toolbar-block-dump .sf-toolbar-info-piece .sf-toolbar-file-line {    color: #AAA;    margin-left: 4px;}.sf-toolbar-block-dump .sf-toolbar-info img {    display: none;}/* Responsive Design */.sf-toolbar-icon .sf-toolbar-label,.sf-toolbar-icon .sf-toolbar-value {    display: none;}.sf-toolbar-block-config .sf-toolbar-icon .sf-toolbar-label {    display: inline-block;}/* Legacy Design - these styles are maintained to make old panels look   a bit better on the new toolbar */.sf-toolbar-block .sf-toolbar-info-piece-additional-detail {    color: #AAA;    font-size: 12px;}.sf-toolbar-status-green .sf-toolbar-info-piece-additional-detail,.sf-toolbar-status-yellow .sf-toolbar-info-piece-additional-detail,.sf-toolbar-status-red .sf-toolbar-info-piece-additional-detail {    color: #FFF;}@media (min-width: 768px) {    .sf-toolbar-icon .sf-toolbar-label,    .sf-toolbar-icon .sf-toolbar-value {        display: inline;    }    .sf-toolbar-block .sf-toolbar-icon img,    .sf-toolbar-block .sf-toolbar-icon svg {        top: 6px;    }    .sf-toolbar-block-time .sf-toolbar-icon svg,    .sf-toolbar-block-memory .sf-toolbar-icon svg {        display: none;    }    .sf-toolbar-block-time .sf-toolbar-icon svg + span,    .sf-toolbar-block-memory .sf-toolbar-icon svg + span {        margin-left: 0;    }    .sf-toolbar-block .sf-toolbar-icon {        padding: 0 10px;    }    .sf-toolbar-block-time .sf-toolbar-icon {        padding-right: 5px;    }    .sf-toolbar-block-memory .sf-toolbar-icon {        padding-left: 5px;    }    .sf-toolbar-block-request .sf-toolbar-icon {        padding-left: 0;        padding-right: 0;    }    .sf-toolbar-block-request .sf-toolbar-label {        margin-left: 5px;    }    .sf-toolbar-block-request .sf-toolbar-status + svg {        margin-left: 5px;    }    .sf-toolbar-block-request .sf-toolbar-icon svg + .sf-toolbar-label {        margin-left: 0;     }    .sf-toolbar-block-request .sf-toolbar-label + .sf-toolbar-value {        margin-right: 10px;    }    .sf-toolbar-block-request:hover .sf-toolbar-info {        max-width: none;    }    .sf-toolbar-block .sf-toolbar-info-piece b {        font-size: 12px;    }    .sf-toolbar-block .sf-toolbar-info-piece span {        font-size: 13px;    }    .sf-toolbar-block-right {        float: right;        margin-left: 0;        margin-right: 0;    }}@media (min-width: 1024px) {    .sf-toolbar-block .sf-toolbar-info-piece-additional,    .sf-toolbar-block .sf-toolbar-info-piece-additional-detail {        display: inline;    }    .sf-toolbar-block .sf-toolbar-info-piece-additional:empty,    .sf-toolbar-block .sf-toolbar-info-piece-additional-detail:empty {        display: none;    }}/***** Error Toolbar *****/.sf-error-toolbar .sf-toolbarreset {    background: #222;    color: #f5f5f5;    font: 13px/36px Arial, sans-serif;    height: 36px;    padding: 0 15px;    text-align: left;}.sf-error-toolbar .sf-toolbarreset svg {    height: auto;}.sf-error-toolbar .sf-toolbarreset a {    color: #99cdd8;    margin-left: 5px;    text-decoration: underline;}.sf-error-toolbar .sf-toolbarreset a:hover {    text-decoration: none;}.sf-error-toolbar .sf-toolbarreset .sf-toolbar-icon {    float: left;    padding: 5px 0;    margin-right: 10px;}.sf-full-stack {    left: 0px;    font-size: 12px;}/***** Media query print: Do not print the Toolbar. *****/@media print {    .sf-toolbar {        display: none !important;    }}</style><script nonce=\"659cf5bef95a15dc4f72507cf82744ca\">/*<![CDATA[*/    (function () {        Sfjs.loadToolbar('5e5522');    })();/*]]>*/</script>


</body></html>


", "trajet_controller_back/new.html.twig", "C:\\Users\\ASUS\\Desktop\\PiDev\\Projet-Pi-tfarhida\\templates\\trajet_controller_back\\new.html.twig");
    }
}