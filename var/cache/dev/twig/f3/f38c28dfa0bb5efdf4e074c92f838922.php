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
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 8
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "

    </head>
    <body>
        <header>

            <!--? Header Start -->
            <div class=\"header-area header-transparent\">
                <div class=\"main-header header-sticky\">
                    <div class=\"container-fluid\">
                        <div class=\"row align-items-center\">
                            <!-- Logo -->
                            <div class=\"col-xl-2 col-lg-2 col-md-1\">
                                <div class=\"logo\">
                                    <a href=\"#\"><img src=";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/img/logo/LogoGymWhite.png"), "html", null, true);
        echo " alt=\"\" style=\"height: 180px; width: 190px; margin-bottom: -10px;\"></a>
                                </div>
                            </div>
                            <div class=\"col-xl-10 col-lg-10 col-md-10\">
                                <div class=\"menu-main d-flex align-items-center justify-content-end\">
                                    <!-- Main-menu -->
                                    <div class=\"main-menu f-right d-none d-lg-block\">
                                        <nav>
                                            <ul id=\"navigation\">
                                                <li><a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        echo "\">Home</a></li>
                                                <li><a href=\"#\">About</a></li>
                                                <li><a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_competition_showFront");
        echo "\">competitions</a></li> 
                                                <li><a href=\"#\">schedule</a></li>
                                                <li><a href=\"#\">Abonnements</a></li>
                                                <li><a href=\"#\">Restaurants</a></li>
                                                <!--<li><a href=\"blog.html\">Blog</a>
                                                    <ul class=\"submenu\">
                                                        <li><a href=\"blog.html\">Blog</a></li>
                                                        <li><a href=\"blog_details.html\">Blog Details</a></li>
                                                        <li><a href=\"elements.html\">Element</a></li>
                                                    </ul>
                                                </li>-->
                                                <li><a href=\"contact.html\">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class=\"header-right-btn f-right d-none d-lg-block ml-30\">
                                        <a href=\"from.html\" class=\"btn header-btn\">became a member</a>
                                    </div>
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

        ";
        // line 80
        $this->displayBlock('tache', $context, $blocks);
        // line 83
        echo "
    </body>

    <!-- Footer Start -->
    <footer>
        <!--? Footer Start-->
        <div class=\"footer-area section-bg\" style=\"background-image:url('./frontOffice/img/gallery/section_bg03.png'); \" >
            <div class=\"container\" >
                <div class=\"footer-top footer-padding\">
                    <!-- Footer Menu -->
                    <div class=\"row d-flex justify-content-between\">
                        <div class=\"col-xl-2 col-lg-2 col-md-4 col-sm-6\">
                            <div class=\"single-footer-caption mb-50\">
                                <div class=\"footer-tittle\">
                                    <h4>ENERGYBOX | CrossFit Center</h4>
                                    <ul>
                                        <li><a href=\"#\">About Us</a></li>
                                        <li><a href=\"\">Competitions</a></li>
                                        <li><a href=\"#\"> Press & Blog</a></li>
                                        <li><a href=\"#\"> Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3 col-lg-3 col-md-4 col-sm-6\">
                            <div class=\"single-footer-caption mb-50\">
                                <div class=\"footer-tittle\">
                                    <h4>Open hour</h4>
                                    <ul><!--AZIZ bch ybaddalhom selon le planning elli bch yekhdmou-->
                                        <li><a href=\"#\">Monday 11am-7pm</a></li>
                                        <li><a href=\"#\"> Tuesday-Friday 11am-8pm</a></li>
                                        <li><a href=\"#\"> Saturday 10am-6pm</a></li>
                                        <li><a href=\"#\"> Sunday 11am-6pm</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-2 col-lg-3 col-md-4 col-sm-6\">
                            <div class=\"single-footer-caption mb-50\">
                                <div class=\"footer-tittle\">
                                    <h4>RESOURCES</h4>
                                    <ul>
                                        <li><a href=\"#\">Planning</a></li>
                                        <li><a href=\"#\">Abonnements</a></li>
                                        <li><a href=\"\">Competition</a></li>
                                        <li><a href=\"#\">Restaurants</a></li>
                                        <li><a href=\"#\">Materiaux</a></li>
                                       <!-- <li><a href=\"#\"> Heal Insurance</a></li>-->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3 col-lg-4 col-md-5 col-sm-6\">
                            <div class=\"single-footer-caption mb-50\" style=\"margin-top: -90px;\">
                                <!-- logo -->
                                <div class=\"footer-logo\">
                                  <a>  <img src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/img/logo/LogoGymWhite.png"), "html", null, true);
        echo "\"  alt=\"...\" style=\"width:250px; height:300px;\"></a>
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
                                    <a href=\"https://www.facebook.com/sai4ull\"><i class=\"fab fa-facebook-f\"></i></a>
                                    <a href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                    <a href=\"#\"><i class=\"fas fa-globe\"></i></a>
                                    <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
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
        // line 177
        $this->displayBlock('javascripts', $context, $blocks);
        // line 219
        echo "</html>
";
        
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

        echo "Welcome!";
        
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

    // line 80
    public function block_tache($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tache"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tache"));

        // line 81
        echo "        
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 177
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 178
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/vendor/modernizr-3.5.0.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Jquery, Popper, Bootstrap -->
        <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/vendor/jquery-1.12.4.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/popper.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Jquery Mobile Menu -->
        <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/jquery.slicknav.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/slick.min.js"), "html", null, true);
        echo "\"></script>
        <!-- One Page, Animated-HeadLin -->
        <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/wow.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/animated.headline.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/jquery.magnific-popup.js"), "html", null, true);
        echo "\"></script>

        <!-- Date Picker -->
        <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/gijgo.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Nice-select, sticky -->
        <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>

        <!-- counter , waypoint,Hover Direction -->
        <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/jquery.countdown.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/hover-direction-snake.min.js"), "html", null, true);
        echo "\"></script>

        <!-- contact js -->
        <script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/contact.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/jquery.form.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/mail-script.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\"></script>

        <!-- Jquery Plugins, main Jquery -->
        <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/plugins.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./frontOffice/js/main.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 218
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
        return array (  477 => 218,  472 => 215,  468 => 214,  462 => 211,  458 => 210,  454 => 209,  450 => 208,  446 => 207,  440 => 204,  436 => 203,  432 => 202,  428 => 201,  422 => 198,  418 => 197,  413 => 195,  407 => 192,  403 => 191,  399 => 190,  394 => 188,  390 => 187,  384 => 184,  379 => 182,  375 => 181,  371 => 180,  365 => 178,  355 => 177,  344 => 81,  334 => 80,  322 => 22,  318 => 21,  314 => 20,  310 => 19,  306 => 18,  302 => 17,  298 => 16,  294 => 15,  290 => 14,  286 => 13,  282 => 12,  278 => 11,  273 => 10,  271 => 9,  261 => 8,  242 => 5,  231 => 219,  229 => 177,  188 => 139,  130 => 83,  128 => 80,  94 => 49,  89 => 47,  77 => 38,  61 => 24,  58 => 8,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
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
        <header>

            <!--? Header Start -->
            <div class=\"header-area header-transparent\">
                <div class=\"main-header header-sticky\">
                    <div class=\"container-fluid\">
                        <div class=\"row align-items-center\">
                            <!-- Logo -->
                            <div class=\"col-xl-2 col-lg-2 col-md-1\">
                                <div class=\"logo\">
                                    <a href=\"#\"><img src={{asset('./frontOffice/img/logo/LogoGymWhite.png')}} alt=\"\" style=\"height: 180px; width: 190px; margin-bottom: -10px;\"></a>
                                </div>
                            </div>
                            <div class=\"col-xl-10 col-lg-10 col-md-10\">
                                <div class=\"menu-main d-flex align-items-center justify-content-end\">
                                    <!-- Main-menu -->
                                    <div class=\"main-menu f-right d-none d-lg-block\">
                                        <nav>
                                            <ul id=\"navigation\">
                                                <li><a href=\"{{path('app_front')}}\">Home</a></li>
                                                <li><a href=\"#\">About</a></li>
                                                <li><a href=\"{{path('app_competition_showFront')}}\">competitions</a></li> 
                                                <li><a href=\"#\">schedule</a></li>
                                                <li><a href=\"#\">Abonnements</a></li>
                                                <li><a href=\"#\">Restaurants</a></li>
                                                <!--<li><a href=\"blog.html\">Blog</a>
                                                    <ul class=\"submenu\">
                                                        <li><a href=\"blog.html\">Blog</a></li>
                                                        <li><a href=\"blog_details.html\">Blog Details</a></li>
                                                        <li><a href=\"elements.html\">Element</a></li>
                                                    </ul>
                                                </li>-->
                                                <li><a href=\"contact.html\">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class=\"header-right-btn f-right d-none d-lg-block ml-30\">
                                        <a href=\"from.html\" class=\"btn header-btn\">became a member</a>
                                    </div>
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
        <div class=\"footer-area section-bg\" style=\"background-image:url('./frontOffice/img/gallery/section_bg03.png'); \" >
            <div class=\"container\" >
                <div class=\"footer-top footer-padding\">
                    <!-- Footer Menu -->
                    <div class=\"row d-flex justify-content-between\">
                        <div class=\"col-xl-2 col-lg-2 col-md-4 col-sm-6\">
                            <div class=\"single-footer-caption mb-50\">
                                <div class=\"footer-tittle\">
                                    <h4>ENERGYBOX | CrossFit Center</h4>
                                    <ul>
                                        <li><a href=\"#\">About Us</a></li>
                                        <li><a href=\"\">Competitions</a></li>
                                        <li><a href=\"#\"> Press & Blog</a></li>
                                        <li><a href=\"#\"> Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3 col-lg-3 col-md-4 col-sm-6\">
                            <div class=\"single-footer-caption mb-50\">
                                <div class=\"footer-tittle\">
                                    <h4>Open hour</h4>
                                    <ul><!--AZIZ bch ybaddalhom selon le planning elli bch yekhdmou-->
                                        <li><a href=\"#\">Monday 11am-7pm</a></li>
                                        <li><a href=\"#\"> Tuesday-Friday 11am-8pm</a></li>
                                        <li><a href=\"#\"> Saturday 10am-6pm</a></li>
                                        <li><a href=\"#\"> Sunday 11am-6pm</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-2 col-lg-3 col-md-4 col-sm-6\">
                            <div class=\"single-footer-caption mb-50\">
                                <div class=\"footer-tittle\">
                                    <h4>RESOURCES</h4>
                                    <ul>
                                        <li><a href=\"#\">Planning</a></li>
                                        <li><a href=\"#\">Abonnements</a></li>
                                        <li><a href=\"\">Competition</a></li>
                                        <li><a href=\"#\">Restaurants</a></li>
                                        <li><a href=\"#\">Materiaux</a></li>
                                       <!-- <li><a href=\"#\"> Heal Insurance</a></li>-->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-xl-3 col-lg-4 col-md-5 col-sm-6\">
                            <div class=\"single-footer-caption mb-50\" style=\"margin-top: -90px;\">
                                <!-- logo -->
                                <div class=\"footer-logo\">
                                  <a>  <img src=\"{{asset('./frontOffice/img/logo/LogoGymWhite.png')}}\"  alt=\"...\" style=\"width:250px; height:300px;\"></a>
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
                                    <a href=\"https://www.facebook.com/sai4ull\"><i class=\"fab fa-facebook-f\"></i></a>
                                    <a href=\"\"><i class=\"fab fa-twitter\"></i></a>
                                    <a href=\"#\"><i class=\"fas fa-globe\"></i></a>
                                    <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
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
</html>
", "baseFront.html.twig", "C:\\Users\\Salima\\Desktop\\energyBox\\templates\\baseFront.html.twig");
    }
}
