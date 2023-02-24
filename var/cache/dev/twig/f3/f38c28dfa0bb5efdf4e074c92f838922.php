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

/* baseFront.html.twig */
class __TwigTemplate_c4bdf692c6f9556c4f01c7d94bec2afd extends Template
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
            'tache' => [$this, 'block_tache'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseFront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseFront.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"./frontOffice/img/logo/LogoGymBlack.png\">
        ";
        // line 8
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "

    </head>
     <body>
        <!-- ? Preloader Start -->
    <div id=\"preloader-active\">
        <div class=\"preloader d-flex align-items-center justify-content-center\">
            <div class=\"preloader-inner position-relative\">
                <div class=\"preloader-circle\"></div>
                <div class=\"preloader-img pere-text\">
                    <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/img/logo/LogoGymBlack.png"), "html", null, true);
        echo "\" alt=\"\"  style=\"height: 110px; width: 120px;\">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
   
        <header>
            <!--? Header Start -->
            <div class=\"header-area header-transparent\">
                <div class=\"main-header header-sticky\">
                    <div class=\"container-fluid\">
                        <div class=\"row align-items-center\">
                            <!-- Logo -->
                            <div class=\"col-xl-2 col-lg-2 col-md-1\">
                                <div class=\"logo\">
                                    <a href=\"/front\">
                                        <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/img/logo/LogoGymWhite.png"), "html", null, true);
        echo "\" alt=\"\" style=\"height: 180px; width: 190px; margin-bottom: -10px;\">
                                    </a>
                                </div>
                            </div>
                            <div class=\"col-xl-10 col-lg-10 col-md-10\">
                                <div class=\"menu-main d-flex align-items-center justify-content-end\">
                                    <!-- Main-menu -->
                                    <div class=\"main-menu f-right d-none d-lg-block\">
                                        <nav>
                                            <ul id=\"navigation\">
                                                <li><a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        echo "\">Home</a></li>
                                                <li><a href=\"\">About</a></li>
                                                <li><a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_competition_showFront");
        echo "\">competitions</a></li> 
                                           <li><a>Salle</a>
                                                    <ul class=\"submenu\">
                                                        <li><a href=\"/planning/crud/viewPlanning\">Planning</a></li>
                                                        <li><a href=\"/cours/crud/viewCours\">Cours</a></li>
                                                        <li><a href=\"/activite/crud/viewActivite\">Activités</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href=\"\">Abonnements</a></li>
                                                <li><a href=\"\">Restaurants</a></li>
                                                <li><a href=\"\">Materiaux</a></li>
                                                <li><a href=\"\">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    ";
        // line 81
        echo "                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class=\"col-12\">
                                <div class=\"mobile_menu d-block d-lg-none\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header End -->
        </header>

        ";
        // line 94
        $this->displayBlock('tache', $context, $blocks);
        // line 97
        echo "
    </body>

    <!-- Footer Start -->
    <footer>
        <!--? Footer Start-->
        <div class=\"footer-area section-bg\" style=\"background-image:url('";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/img/gallery/section_bg03.png"), "html", null, true);
        echo "') \" >
            <div class=\"container\" >
                <div class=\"footer-top footer-padding\">
                    <!-- Footer Menu -->
                    <div class=\"row d-flex justify-content-between\">
                        <div class=\"col-xl-2 col-lg-2 col-md-4 col-sm-6\">
                            <div class=\"single-footer-caption mb-50\">
                                <div class=\"footer-tittle\">
                                    <h4>ENERGYBOX | CrossFit Center</h4>
                                    <ul>
                                        <li><a href=\"\">About Us</a></li>
                                        <li><a href=\"";
        // line 114
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_competition_showFront");
        echo "\">Competitions</a></li>
                                        <li><a href=\"\"> Press & Blog</a></li>
                                        <li><a href=\"\"> Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3 col-lg-3 col-md-4 col-sm-6\">
                            <div class=\"single-footer-caption mb-50\">
                                <div class=\"footer-tittle\">
                                    <h4>Open hour</h4>
                                    <ul><!--AZIZ bch ybaddalhom selon le planning elli bch yekhdmou-->
                                        <li><a href=\"\">Monday 11am-7pm</a></li>
                                        <li><a href=\"\"> Tuesday-Friday 11am-8pm</a></li>
                                        <li><a href=\"\"> Saturday 10am-6pm</a></li>
                                        <li><a href=\"\"> Sunday 11am-6pm</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-2 col-lg-3 col-md-4 col-sm-6\">
                            <div class=\"single-footer-caption mb-50\">
                                <div class=\"footer-tittle\">
                                    <h4>RESOURCES</h4>
                                    <ul>
                                        <li><a href=\"/reclamation/new\">Réclamation</a></li>
                                        <li><a href=\"/planning/crud/viewPlanning\">Planning</a></li>
                                        <li><a href=\"#\">Abonnements</a></li>
                                        <li><a href=\"#\">Restaurants</a></li>
                                        <li><a href=\"#\">Materiaux</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3 col-lg-4 col-md-5 col-sm-6\">
                            <div class=\"single-footer-caption mb-50\" style=\"margin-top: -90px;\">
                                <!-- logo -->
                                <div class=\"footer-logo\">
                                  <a href=\"/front\">  
                                    <img src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/img/logo/LogoGymWhite.png"), "html", null, true);
        echo "\"  alt=\"...\" style=\"width:300px; height:300px; margin-left:-50px;\">
                                  </a>
                                </div>
                                <div class=\"footer-tittle\">
                                    <div class=\"footer-pera\">
                                        <p class=\"info1\" style=\"margin-top: -90px;\">BUILD PERFECT BODY<br>
                                            SHAPE FOR GOOD AND
                                            HEALTHY LIFE ..</p>
                                    </div>
                                </div>
                                <!-- Footer Social -->
                                <div class=\"footer-social \">
                                    <a href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                    <a href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                    <a href=\"\"><i class=\"fas fa-globe\"></i></a>
                                    <a href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Bottom -->
                <div class=\"footer-bottom\">
                    <div class=\"row d-flex align-items-center\">
                        <div class=\"col-lg-12\">
                            <div class=\"footer-copy-right text-center\">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id=\"back-top\" >
        <a title=\"Go to Top\" href=\"#\"> <i class=\"fas fa-level-up-alt\"></i></a>
    </div>
    ";
        // line 192
        $this->displayBlock('javascripts', $context, $blocks);
        // line 234
        echo "</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome !";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "         ";
        // line 10
        echo "            <link rel=\"stylesheet\" href=";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/css/bootstrap.min.css"), "html", null, true);
        echo ">
            <link rel=\"stylesheet\" href=";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/css/owl.carousel.min.css"), "html", null, true);
        echo ">
            <link rel=\"stylesheet\" href=";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/css/slicknav.css"), "html", null, true);
        echo ">
            <link rel=\"stylesheet\" href=";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/css/flaticon.css"), "html", null, true);
        echo ">
            <link rel=\"stylesheet\" href=";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/css/gijgo.css"), "html", null, true);
        echo ">
            <link rel=\"stylesheet\" href=";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/css/animate.min.css"), "html", null, true);
        echo ">
            <link rel=\"stylesheet\" href=";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/css/animated-headline.css"), "html", null, true);
        echo ">
            <link rel=\"stylesheet\" href=";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/css/magnific-popup.css"), "html", null, true);
        echo ">
            <link rel=\"stylesheet\" href=";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/css/fontawesome-all.min.css"), "html", null, true);
        echo ">
            <link rel=\"stylesheet\" href=";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/css/themify-icons.css"), "html", null, true);
        echo ">
            <link rel=\"stylesheet\" href=";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/css/slick.css"), "html", null, true);
        echo ">
            <link rel=\"stylesheet\" href=";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/css/nice-select.css"), "html", null, true);
        echo ">
            <link rel=\"stylesheet\" href=";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/css/style.css"), "html", null, true);
        echo ">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 94
    public function block_tache($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tache"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tache"));

        // line 95
        echo "        
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 192
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 193
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/vendor/modernizr-3.5.0.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Jquery, Popper, Bootstrap -->
        <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/vendor/jquery-1.12.4.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/popper.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Jquery Mobile Menu -->
        <script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/jquery.slicknav.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/slick.min.js"), "html", null, true);
        echo "\"></script>
        <!-- One Page, Animated-HeadLin -->
        <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/wow.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/animated.headline.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/jquery.magnific-popup.js"), "html", null, true);
        echo "\"></script>

        <!-- Date Picker -->
        <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/gijgo.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Nice-select, sticky -->
        <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>

        <!-- counter , waypoint,Hover Direction -->
        <script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/jquery.countdown.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/hover-direction-snake.min.js"), "html", null, true);
        echo "\"></script>

        <!-- contact js -->
        <script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/contact.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/jquery.form.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/mail-script.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Jquery Plugins, main Jquery -->
        <script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/plugins.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/main.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 233
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "baseFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  499 => 233,  494 => 230,  490 => 229,  484 => 226,  480 => 225,  476 => 224,  472 => 223,  468 => 222,  462 => 219,  458 => 218,  454 => 217,  450 => 216,  444 => 213,  440 => 212,  435 => 210,  429 => 207,  425 => 206,  421 => 205,  416 => 203,  412 => 202,  406 => 199,  401 => 197,  397 => 196,  393 => 195,  387 => 193,  377 => 192,  366 => 95,  356 => 94,  344 => 22,  340 => 21,  336 => 20,  332 => 19,  328 => 18,  324 => 17,  320 => 16,  316 => 15,  312 => 14,  308 => 13,  304 => 12,  300 => 11,  295 => 10,  293 => 9,  283 => 8,  264 => 5,  254 => 234,  252 => 192,  210 => 153,  168 => 114,  154 => 103,  146 => 97,  144 => 94,  129 => 81,  111 => 63,  106 => 61,  93 => 51,  73 => 34,  61 => 24,  58 => 8,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome !{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"./frontOffice/img/logo/LogoGymBlack.png\">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}
         {#    {{ encore_entry_link_tags('app') }}#}
            <link rel=\"stylesheet\" href={{asset('./frontOffice/css/bootstrap.min.css')}}>
            <link rel=\"stylesheet\" href={{asset('./frontOffice/css/owl.carousel.min.css')}}>
            <link rel=\"stylesheet\" href={{asset('./frontOffice/css/slicknav.css')}}>
            <link rel=\"stylesheet\" href={{asset('./frontOffice/css/flaticon.css')}}>
            <link rel=\"stylesheet\" href={{asset('./frontOffice/css/gijgo.css')}}>
            <link rel=\"stylesheet\" href={{asset('./frontOffice/css/animate.min.css')}}>
            <link rel=\"stylesheet\" href={{asset('./frontOffice/css/animated-headline.css')}}>
            <link rel=\"stylesheet\" href={{asset('./frontOffice/css/magnific-popup.css')}}>
            <link rel=\"stylesheet\" href={{asset('./frontOffice/css/fontawesome-all.min.css')}}>
            <link rel=\"stylesheet\" href={{asset('./frontOffice/css/themify-icons.css')}}>
            <link rel=\"stylesheet\" href={{asset('./frontOffice/css/slick.css')}}>
            <link rel=\"stylesheet\" href={{asset('./frontOffice/css/nice-select.css')}}>
            <link rel=\"stylesheet\" href={{asset('./frontOffice/css/style.css')}}>
        {% endblock %}


    </head>
     <body>
        <!-- ? Preloader Start -->
    <div id=\"preloader-active\">
        <div class=\"preloader d-flex align-items-center justify-content-center\">
            <div class=\"preloader-inner position-relative\">
                <div class=\"preloader-circle\"></div>
                <div class=\"preloader-img pere-text\">
                    <img src=\"{{asset('./frontOffice/img/logo/LogoGymBlack.png')}}\" alt=\"\"  style=\"height: 110px; width: 120px;\">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
   
        <header>
            <!--? Header Start -->
            <div class=\"header-area header-transparent\">
                <div class=\"main-header header-sticky\">
                    <div class=\"container-fluid\">
                        <div class=\"row align-items-center\">
                            <!-- Logo -->
                            <div class=\"col-xl-2 col-lg-2 col-md-1\">
                                <div class=\"logo\">
                                    <a href=\"/front\">
                                        <img src=\"{{asset('./frontOffice/img/logo/LogoGymWhite.png')}}\" alt=\"\" style=\"height: 180px; width: 190px; margin-bottom: -10px;\">
                                    </a>
                                </div>
                            </div>
                            <div class=\"col-xl-10 col-lg-10 col-md-10\">
                                <div class=\"menu-main d-flex align-items-center justify-content-end\">
                                    <!-- Main-menu -->
                                    <div class=\"main-menu f-right d-none d-lg-block\">
                                        <nav>
                                            <ul id=\"navigation\">
                                                <li><a href=\"{{path('app_front')}}\">Home</a></li>
                                                <li><a href=\"\">About</a></li>
                                                <li><a href=\"{{path('app_competition_showFront')}}\">competitions</a></li> 
                                           <li><a>Salle</a>
                                                    <ul class=\"submenu\">
                                                        <li><a href=\"/planning/crud/viewPlanning\">Planning</a></li>
                                                        <li><a href=\"/cours/crud/viewCours\">Cours</a></li>
                                                        <li><a href=\"/activite/crud/viewActivite\">Activités</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href=\"\">Abonnements</a></li>
                                                <li><a href=\"\">Restaurants</a></li>
                                                <li><a href=\"\">Materiaux</a></li>
                                                <li><a href=\"\">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    {# <div class=\"header-right-btn f-right d-none d-lg-block ml-30\">
                                        <a href=\"\" class=\"btn header-btn\">Became A Member</a>
                                    </div> #}
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class=\"col-12\">
                                <div class=\"mobile_menu d-block d-lg-none\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header End -->
        </header>

        {% block tache %}
        
        {% endblock %}

    </body>

    <!-- Footer Start -->
    <footer>
        <!--? Footer Start-->
        <div class=\"footer-area section-bg\" style=\"background-image:url('{{asset('./frontOffice/img/gallery/section_bg03.png')}}') \" >
            <div class=\"container\" >
                <div class=\"footer-top footer-padding\">
                    <!-- Footer Menu -->
                    <div class=\"row d-flex justify-content-between\">
                        <div class=\"col-xl-2 col-lg-2 col-md-4 col-sm-6\">
                            <div class=\"single-footer-caption mb-50\">
                                <div class=\"footer-tittle\">
                                    <h4>ENERGYBOX | CrossFit Center</h4>
                                    <ul>
                                        <li><a href=\"\">About Us</a></li>
                                        <li><a href=\"{{path('app_competition_showFront')}}\">Competitions</a></li>
                                        <li><a href=\"\"> Press & Blog</a></li>
                                        <li><a href=\"\"> Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3 col-lg-3 col-md-4 col-sm-6\">
                            <div class=\"single-footer-caption mb-50\">
                                <div class=\"footer-tittle\">
                                    <h4>Open hour</h4>
                                    <ul><!--AZIZ bch ybaddalhom selon le planning elli bch yekhdmou-->
                                        <li><a href=\"\">Monday 11am-7pm</a></li>
                                        <li><a href=\"\"> Tuesday-Friday 11am-8pm</a></li>
                                        <li><a href=\"\"> Saturday 10am-6pm</a></li>
                                        <li><a href=\"\"> Sunday 11am-6pm</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-2 col-lg-3 col-md-4 col-sm-6\">
                            <div class=\"single-footer-caption mb-50\">
                                <div class=\"footer-tittle\">
                                    <h4>RESOURCES</h4>
                                    <ul>
                                        <li><a href=\"/reclamation/new\">Réclamation</a></li>
                                        <li><a href=\"/planning/crud/viewPlanning\">Planning</a></li>
                                        <li><a href=\"#\">Abonnements</a></li>
                                        <li><a href=\"#\">Restaurants</a></li>
                                        <li><a href=\"#\">Materiaux</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3 col-lg-4 col-md-5 col-sm-6\">
                            <div class=\"single-footer-caption mb-50\" style=\"margin-top: -90px;\">
                                <!-- logo -->
                                <div class=\"footer-logo\">
                                  <a href=\"/front\">  
                                    <img src=\"{{asset('./frontOffice/img/logo/LogoGymWhite.png')}}\"  alt=\"...\" style=\"width:300px; height:300px; margin-left:-50px;\">
                                  </a>
                                </div>
                                <div class=\"footer-tittle\">
                                    <div class=\"footer-pera\">
                                        <p class=\"info1\" style=\"margin-top: -90px;\">BUILD PERFECT BODY<br>
                                            SHAPE FOR GOOD AND
                                            HEALTHY LIFE ..</p>
                                    </div>
                                </div>
                                <!-- Footer Social -->
                                <div class=\"footer-social \">
                                    <a href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                                    <a href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                    <a href=\"\"><i class=\"fas fa-globe\"></i></a>
                                    <a href=\"\"><i class=\"fab fa-instagram\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Bottom -->
                <div class=\"footer-bottom\">
                    <div class=\"row d-flex align-items-center\">
                        <div class=\"col-lg-12\">
                            <div class=\"footer-copy-right text-center\">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id=\"back-top\" >
        <a title=\"Go to Top\" href=\"#\"> <i class=\"fas fa-level-up-alt\"></i></a>
    </div>
    {% block javascripts %}
        <script src=\"{{asset('./frontOffice/js/vendor/modernizr-3.5.0.min.js')}}\"></script>
        <!-- Jquery, Popper, Bootstrap -->
        <script src=\"{{asset('./frontOffice/js/vendor/jquery-1.12.4.min.js')}}\"></script>
        <script src=\"{{asset('./frontOffice/js/popper.min.js')}}\"></script>
        <script src=\"{{asset('./frontOffice/js/bootstrap.min.js')}}\"></script>
        <!-- Jquery Mobile Menu -->
        <script src=\"{{asset('./frontOffice/js/jquery.slicknav.min.js')}}\"></script>

        <!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src=\"{{asset('./frontOffice/js/owl.carousel.min.js')}}\"></script>
        <script src=\"{{asset('./frontOffice/js/slick.min.js')}}\"></script>
        <!-- One Page, Animated-HeadLin -->
        <script src=\"{{asset('./frontOffice/js/wow.min.js')}}\"></script>
        <script src=\"{{asset('./frontOffice/js/animated.headline.js')}}\"></script>
        <script src=\"{{asset('./frontOffice/js/jquery.magnific-popup.js')}}\"></script>

        <!-- Date Picker -->
        <script src=\"{{asset('./frontOffice/js/gijgo.min.js')}}\"></script>
        <!-- Nice-select, sticky -->
        <script src=\"{{asset('./frontOffice/js/jquery.nice-select.min.js')}}\"></script>
        <script src=\"{{asset('./frontOffice/js/jquery.sticky.js')}}\"></script>

        <!-- counter , waypoint,Hover Direction -->
        <script src=\"{{asset('./frontOffice/js/jquery.counterup.min.js')}}\"></script>
        <script src=\"{{asset('./frontOffice/js/waypoints.min.js')}}\"></script>
        <script src=\"{{asset('./frontOffice/js/jquery.countdown.min.js')}}\"></script>
        <script src=\"{{asset('./frontOffice/js/hover-direction-snake.min.js')}}\"></script>

        <!-- contact js -->
        <script src=\"{{asset('./frontOffice/js/contact.js')}}\"></script>
        <script src=\"{{asset('./frontOffice/js/jquery.form.js')}}\"></script>
        <script src=\"{{asset('./frontOffice/js/jquery.validate.min.js')}}\"></script>
        <script src=\"{{asset('./frontOffice/js/mail-script.js')}}\"></script>
        <script src=\"{{asset('./frontOffice/js/jquery.ajaxchimp.min.js')}}\"></script>

        <!-- Jquery Plugins, main Jquery -->
        <script src=\"{{asset('./frontOffice/js/plugins.js')}}\"></script>
        <script src=\"{{asset('./frontOffice/js/main.js')}}\"></script>

        {#   {{ encore_entry_script_tags('app') }}#}
    {% endblock %}
</html>", "baseFront.html.twig", "C:\\Users\\Salima\\Desktop\\energyBox\\templates\\baseFront.html.twig");
    }
}
