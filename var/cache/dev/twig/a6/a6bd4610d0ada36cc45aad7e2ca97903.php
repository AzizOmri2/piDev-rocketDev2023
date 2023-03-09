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

/* baseBack.html.twig */
class __TwigTemplate_64fac83a9916a04c23debee163c0b5c4 extends Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseBack.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseBack.html.twig"));

        // line 1
        echo "<html lang=\"en\">

<head>
    <!-- Required meta tags-->
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"au theme template\">
    <meta name=\"author\" content=\"Hau Nguyen\">
    <meta name=\"keywords\" content=\"au theme template\">

    <!-- Title Page-->
    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "
</head>


<body class=\"animsition\">
    <div class=\"page-wrapper\">
        <!-- HEADER MOBILE-->
        <header class=\"header-mobile d-block d-lg-none\">
            <div class=\"header-mobile__bar\">
                <div class=\"container-fluid\">
                    <div class=\"header-mobile-inner\">
                        <a class=\"logo\" href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
                            <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/images/logo/LogoGymBlack.png"), "html", null, true);
        echo " \" alt=\"LogoGymBlack\" />
                        </a>
                        <button class=\"hamburger hamburger--slider\" type=\"button\">
                            <span class=\"hamburger-box\">
                                <span class=\"hamburger-inner\"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class=\"navbar-mobile\">
                <div class=\"container-fluid\">
                    <ul class=\"navbar-mobile__list list-unstyled\">
                        <li class=\"active\">
                            <a class=\"js-arrow\" href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
                                <i class=\"fas fa-home\"></i>Home</a>
                        </li>
                        <li class=\"has-sub\">
                            <a class=\"js-arrow\" href=\"#\">
                                <i class=\"fas fa-user\"></i>Utilisateurs</a>
                            <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                                <li>
                                    <a href=\"#\">Ajouter Utilisateur</a>
                                </li>
                                <li>
                                    <a href=\"#\">Afficher Utilisateurs</a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"has-sub\">
                            <a class=\"js-arrow\" href=\"#\">
                                <i class=\"fas fa-table\"></i>Planning</a>
                            <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                                <li>
                                    <a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addPlanning");
        echo "\">Ajouter Planning</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewPlanning");
        echo "\">Afficher Plannings</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addCours");
        echo "\">Ajouter Cours</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewCours");
        echo "\">Afficher Cours</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addActivite");
        echo "\">Ajouter Activité</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewActivite");
        echo "\">Afficher Activités</a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"has-sub\">
                            <a class=\"js-arrow\" href=\"#\">
                                <i class=\"fas fa-list\"></i>Abonnements</a>
                            <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                                <li>
                                    <a href=\"#\">Ajouter Abonnement</a>
                                </li>
                                <li>
                                    <a href=\"#\">Afficher Abonnements</a>
                                </li>
                                <li>
                                    <a href=\"#\">Ajouter Pack</a>
                                </li>
                                <li>
                                    <a href=\"#\">Afficher Packs</a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"has-sub\">
                            <a class=\"js-arrow\" href=\"#\">
                                <i class=\"fas fa-desktop\"></i>Materiaux</a>
                            <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                                <li>
                                    <a href=\"#\">Ajouter Materiel</a>
                                </li>
                                <li>
                                    <a href=\"#\">Afficher Materiaux</a>
                                </li>
                                <li>
                                    <a href=\"#\">Ajouter Charge</a>
                                </li>
                                <li>
                                    <a href=\"#\">Afficher Charges</a>
                                </li>
                                <li>
                                    <a href=\"#\">Ajouter Fournisseur</a>
                                </li>
                                <li>
                                    <a href=\"#\">Afficher Fournisseurs</a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"has-sub\">
                            <a class=\"js-arrow\" href=\"#\">
                                <i class=\"fas fa-trophy\"></i>Competition</a>
                            <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                                <li>
                                    <a href=\"";
        // line 150
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_competition_new");
        echo "\">Ajouter Competition</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 153
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_competition_index");
        echo "\">Afficher Competition</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 156
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ticket_new");
        echo "\">Ajouter Ticket</a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 159
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ticket_new");
        echo "\">Afficher Tickets</a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"has-sub\">
                            <a class=\"js-arrow\" href=\"#\">
                                <i class=\"fas fa-newspaper\"></i>Restaurants</a>
                            <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                                <li>
                                    <a href=\"#\">Ajouter Plat</a>
                                </li>
                                <li>
                                    <a href=\"#\">Afficher Plats</a>
                                </li>
                                <li>
                                    <a href=\"#\">Ajouter Menu</a>
                                </li>
                                <li>
                                    <a href=\"#\">Afficher Menus</a>
                                </li>
                            </ul>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class=\"menu-sidebar d-none d-lg-block\">
            <div class=\"logo\">
                <a href=\"";
        // line 191
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
                    <img src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/images/logo/LogoGymBlack.png"), "html", null, true);
        echo " \" height=\"90\" width=\"100\"  alt=\"LogoGymBlack\" />
                </a>
            </div>
            <div class=\"menu-sidebar__content js-scrollbar1\">
                <nav class=\"navbar-sidebar\">
                    <ul class=\"list-unstyled navbar__list\">
                        <li class=\"active\">
                            <a class=\"js-arrow\" href=\"";
        // line 199
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
                                <i class=\"fas fa-home\"></i>Home</a>
                        </li>
                        <li class=\"has-sub\">
                            <a class=\"js-arrow\" href=\"#\">
                                <i class=\"fas fa-user\"></i>Utilisateurs</a>
                                <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                                    <li>
                                        <a href=\"#\">Ajouter Utilisateur</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Afficher Utilisateurs</a>
                                    </li>
                                </ul>
                        </li>
                        <li class=\"has-sub\">
                            <a class=\"js-arrow\" href=\"#\">
                                <i class=\"fas fa-table\"></i>Planning</a>
                                <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                                    <li>
                                        <a href=\"";
        // line 219
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addPlanning");
        echo "\">Ajouter Planning</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 222
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewPlanning");
        echo "\">Afficher Planning</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 225
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addCours");
        echo "\">Ajouter Cours</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 228
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewCours");
        echo "\">Afficher Cours</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 231
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addActivite");
        echo "\">Ajouter Activité</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 234
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("viewActivite");
        echo "\">Afficher Activités</a>
                                    </li>
                                </ul>
                        </li>
                        <li class=\"has-sub\">
                            <a class=\"js-arrow\" href=\"#\">
                                <i class=\"fas fa-list\"></i>Abonnements</a>
                                <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                                    <li>
                                        <a href=\"#\">Ajouter Abonnement</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Afficher Abonnements</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Ajouter Pack</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Afficher Packs</a>
                                    </li>
                                </ul>
                        </li>
                        <li class=\"has-sub\">
                            <a class=\"js-arrow\" href=\"#\">
                                <i class=\"fas fa-desktop\"></i>Materiaux</a>
                                <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                                    <li>
                                        <a href=\"#\">Ajouter Materiel</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Afficher Materiaux</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Ajouter Charge</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Afficher Charges</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Ajouter Fournisseur</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Afficher Fournisseurs</a>
                                    </li>
                                </ul>
                        </li>
                        <li class=\"has-sub\">
                            <a class=\"js-arrow\" href=\"#\">
                                <i class=\"fas fa-trophy\"></i>Competition</a>
                                <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                                    <li>
                                        <a href=\"";
        // line 285
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_competition_new");
        echo "\">Ajouter Competition</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 288
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_competition_index");
        echo "\">Afficher Competition</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 291
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ticket_new");
        echo "\">Ajouter Ticket</a>
                                    </li>
                                    <li>
                                        <a href=\"";
        // line 294
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ticket_index");
        echo "\">Afficher Tickets</a>
                                    </li>
                                </ul>
                        </li>
                        <li class=\"has-sub\">
                            <a class=\"js-arrow\" href=\"#\">
                                <i class=\"fas fa-newspaper\"></i>Restaurants</a>
                                <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                                    <li>
                                        <a href=\"#\">Ajouter Plat</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Afficher Plats</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Ajouter Menu</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Afficher Menus</a>
                                    </li>
                                </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class=\"page-container\">
            <!-- HEADER DESKTOP-->
            <header class=\"header-desktop\">
                <div class=\"section__content section__content--p30\">
                    <div class=\"container-fluid\">
                        <div class=\"header-wrap\">
                            <form class=\"form-header\" action=\"\" method=\"POST\">
                                <input class=\"au-input au-input--xl\" type=\"text\" name=\"search\" placeholder=\"Search for datas &amp; reports...\" />
                                <button class=\"au-btn--submit\" type=\"submit\">
                                    <i class=\"zmdi zmdi-search\"></i>
                                </button>
                            </form>
                            <div class=\"header-button\">
                                <div class=\"noti-wrap\">
                                    <div class=\"noti__item js-item-menu\">
                                        <i class=\"zmdi zmdi-comment-more\"></i>
                                        <span class=\"quantity\">1</span>
                                        <div class=\"mess-dropdown js-dropdown\">
                                            <div class=\"mess__title\">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class=\"mess__item\">
                                                <div class=\"image img-cir img-40\">
                                                    <img src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/images/icon/avatar-06.jpg"), "html", null, true);
        echo " alt=\"Michelle Moreno\" />

                                                </div>
                                                <div class=\"content\">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class=\"time\">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class=\"mess__item\">
                                                <div class=\"image img-cir img-40\">
                                                    <img src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/images/icon/avatar-04.jpg"), "html", null, true);
        echo "  alt=\"Diane Myers\" />

                                                </div>
                                                <div class=\"content\">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class=\"time\">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class=\"mess__footer\">
                                                <a href=\"#\">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"noti__item js-item-menu\">
                                        <i class=\"zmdi zmdi-email\"></i>
                                        <span class=\"quantity\">1</span>
                                        <div class=\"email-dropdown js-dropdown\">
                                            <div class=\"email__title\">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class=\"email__item\">
                                                <div class=\"image img-cir img-40\">
                                                    <img src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/images/icon/avatar-06.jpg"), "html", null, true);
        echo "  alt=\"Cynthia Harvey\" />

                                                </div>
                                                <div class=\"content\">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class=\"email__item\">
                                                <div class=\"image img-cir img-40\">
                                                    <img src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/images/icon/avatar-05.jpg"), "html", null, true);
        echo "  alt=\"Cynthia Harvey\" />
                                                </div>
                                                <div class=\"content\">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class=\"email__item\">
                                                <div class=\"image img-cir img-40\">
                                                    <img src=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/images/icon/avatar-04.jpg"), "html", null, true);
        echo "  alt=\"Cynthia Harvey\" />
                                                </div>
                                                <div class=\"content\">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class=\"email__footer\">
                                                <a href=\"#\">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"noti__item js-item-menu\">
                                        <i class=\"zmdi zmdi-notifications\"></i>
                                        <span class=\"quantity\">3</span>
                                        <div class=\"notifi-dropdown js-dropdown\">
                                            <div class=\"notifi__title\">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class=\"notifi__item\">
                                                <div class=\"bg-c1 img-cir img-40\">
                                                    <i class=\"zmdi zmdi-email-open\"></i>
                                                </div>
                                                <div class=\"content\">
                                                    <p>You got a email notification</p>
                                                    <span class=\"date\">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class=\"notifi__item\">
                                                <div class=\"bg-c2 img-cir img-40\">
                                                    <i class=\"zmdi zmdi-account-box\"></i>
                                                </div>
                                                <div class=\"content\">
                                                    <p>Your account has been blocked</p>
                                                    <span class=\"date\">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class=\"notifi__item\">
                                                <div class=\"bg-c3 img-cir img-40\">
                                                    <i class=\"zmdi zmdi-file-text\"></i>
                                                </div>
                                                <div class=\"content\">
                                                    <p>You got a new file</p>
                                                    <span class=\"date\">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class=\"notifi__footer\">
                                                <a href=\"#\">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"account-wrap\">
                                    <div class=\"account-item clearfix js-item-menu\">
                                        <div class=\"image\">
                                            <img src=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/images/icon/avatar-01.jpg"), "html", null, true);
        echo "\"  alt=\"Admin\" />
                                        </div>
                                        <div class=\"content\">
                                            <a class=\"js-acc-btn\" href=\"#\">john doe</a>
                                        </div>
                                        <div class=\"account-dropdown js-dropdown\">
                                            <div class=\"info clearfix\">
                                                <div class=\"image\">
                                                    <a href=\"#\">
                                                        <img src=\"";
        // line 463
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/images/icon/avatar-01.jpg"), "html", null, true);
        echo "\"  alt=\"Admin\" />
                                                    </a>
                                                </div>
                                                <div class=\"content\">
                                                    <h5 class=\"name\">
                                                        <a href=\"#\">john doe</a>
                                                    </h5>
                                                    <span class=\"email\">Admin@example.com</span>
                                                </div>
                                            </div>
                                            <div class=\"account-dropdown__body\">
                                                <div class=\"account-dropdown__item\">
                                                    <a href=\"#\">
                                                        <i class=\"zmdi zmdi-account\"></i>Account</a>
                                                </div>
                                                <div class=\"account-dropdown__item\">
                                                    <a href=\"#\">
                                                        <i class=\"zmdi zmdi-settings\"></i>Setting</a>
                                                </div>
                                                <div class=\"account-dropdown__item\">
                                                    <a href=\"#\">
                                                        <i class=\"zmdi zmdi-money-box\"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class=\"account-dropdown__footer\">
                                                <a href=\"#\">
                                                    <i class=\"zmdi zmdi-power\"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
    </div>
    ";
        // line 501
        $this->displayBlock('body', $context, $blocks);
        // line 502
        echo "</body>
";
        // line 503
        $this->displayBlock('javascripts', $context, $blocks);
        // line 527
        echo "
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "EnergyBox | Dashboard";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "    <!-- Fontfaces CSS-->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/css/font-face.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/font-awesome-4.7/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/mdi-font/css/material-design-iconic-font.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/font-awesome-5/css/fontawesome-all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">

    <!-- Bootstrap CSS-->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/bootstrap-4.1/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">


    <!-- Vendor CSS-->
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/animsition/animsition.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/wow/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/css-hamburgers/hamburgers.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/slick/slick.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/select2/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/perfect-scrollbar/perfect-scrollbar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">

    <!-- Main CSS-->
        <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/css/theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\">

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 501
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 503
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 504
        echo "    <!-- Jquery JS-->
    <script src=\"";
        // line 505
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/jquery-3.2.1.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 506
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/jquery-3.2.1.min.js"), "html", null, true);
        echo "\" ></script>
    <!-- Bootstrap JS-->
    <script src=\"";
        // line 508
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/bootstrap-4.1/popper.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 509
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/bootstrap-4.1/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>
    <!-- Vendor JS-->
    <script src=\"";
        // line 511
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/slick/slick.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 512
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/wow/wow.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 513
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/animsition/animsition.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 514
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 515
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/counter-up/jquery.waypoints.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 516
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/counter-up/jquery.counterup.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 517
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/circle-progress/circle-progress.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 518
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 519
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/chartjs/Chart.bundle.min.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 520
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/vendor/select2/select2.min.js"), "html", null, true);
        echo "\" ></script>


    <!-- Main JS-->
    <script src=\"";
        // line 524
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./BackOffice/js/main.js"), "html", null, true);
        echo "\" ></script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "baseBack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  842 => 524,  835 => 520,  831 => 519,  827 => 518,  823 => 517,  819 => 516,  815 => 515,  811 => 514,  807 => 513,  803 => 512,  799 => 511,  794 => 509,  790 => 508,  785 => 506,  781 => 505,  778 => 504,  768 => 503,  750 => 501,  737 => 35,  731 => 32,  727 => 31,  723 => 30,  719 => 29,  715 => 28,  711 => 27,  707 => 26,  700 => 22,  694 => 19,  690 => 18,  686 => 17,  682 => 16,  679 => 15,  669 => 14,  650 => 12,  638 => 527,  636 => 503,  633 => 502,  631 => 501,  590 => 463,  578 => 454,  520 => 399,  508 => 390,  495 => 380,  469 => 357,  455 => 346,  400 => 294,  394 => 291,  388 => 288,  382 => 285,  328 => 234,  322 => 231,  316 => 228,  310 => 225,  304 => 222,  298 => 219,  275 => 199,  265 => 192,  261 => 191,  226 => 159,  220 => 156,  214 => 153,  208 => 150,  154 => 99,  148 => 96,  142 => 93,  136 => 90,  130 => 87,  124 => 84,  101 => 64,  84 => 50,  80 => 49,  67 => 38,  65 => 14,  60 => 12,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html lang=\"en\">

<head>
    <!-- Required meta tags-->
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"au theme template\">
    <meta name=\"author\" content=\"Hau Nguyen\">
    <meta name=\"keywords\" content=\"au theme template\">

    <!-- Title Page-->
    <title>{% block title %}EnergyBox | Dashboard{% endblock %}</title>

    {% block stylesheets %}
    <!-- Fontfaces CSS-->
        <link href=\"{{ asset('./BackOffice/css/font-face.css')}}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('./BackOffice/vendor/font-awesome-4.7/css/font-awesome.min.css')}}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('./BackOffice/vendor/mdi-font/css/material-design-iconic-font.min.css')}}\" rel=\"stylesheet\" media=\"all\">
        <link href=\"{{ asset('./BackOffice/vendor/font-awesome-5/css/fontawesome-all.min.css')}}\" rel=\"stylesheet\" media=\"all\">

    <!-- Bootstrap CSS-->
    <link href=\"{{ asset('./BackOffice/vendor/bootstrap-4.1/bootstrap.min.css')}}\" rel=\"stylesheet\" media=\"all\">


    <!-- Vendor CSS-->
    <link href=\"{{ asset('./BackOffice/vendor/animsition/animsition.min.css')}}\" rel=\"stylesheet\" media=\"all\">
    <link href=\"{{ asset('./BackOffice/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}\" rel=\"stylesheet\" media=\"all\">
    <link href=\"{{ asset('./BackOffice/vendor/wow/animate.css')}}\" rel=\"stylesheet\" media=\"all\">
    <link href=\"{{ asset('./BackOffice/vendor/css-hamburgers/hamburgers.min.css')}}\" rel=\"stylesheet\" media=\"all\">
    <link href=\"{{ asset('./BackOffice/vendor/slick/slick.css')}}\" rel=\"stylesheet\" media=\"all\">
    <link href=\"{{ asset('./BackOffice/vendor/select2/select2.min.css')}}\" rel=\"stylesheet\" media=\"all\">
    <link href=\"{{ asset('./BackOffice/vendor/perfect-scrollbar/perfect-scrollbar.css')}}\" rel=\"stylesheet\" media=\"all\">

    <!-- Main CSS-->
        <link href=\"{{ asset('./BackOffice/css/theme.css')}}\" rel=\"stylesheet\" media=\"all\">

    {% endblock %}

</head>


<body class=\"animsition\">
    <div class=\"page-wrapper\">
        <!-- HEADER MOBILE-->
        <header class=\"header-mobile d-block d-lg-none\">
            <div class=\"header-mobile__bar\">
                <div class=\"container-fluid\">
                    <div class=\"header-mobile-inner\">
                        <a class=\"logo\" href=\"{{path('app_home')}}\">
                            <img src=\"{{ asset('./BackOffice/images/logo/LogoGymBlack.png') }} \" alt=\"LogoGymBlack\" />
                        </a>
                        <button class=\"hamburger hamburger--slider\" type=\"button\">
                            <span class=\"hamburger-box\">
                                <span class=\"hamburger-inner\"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class=\"navbar-mobile\">
                <div class=\"container-fluid\">
                    <ul class=\"navbar-mobile__list list-unstyled\">
                        <li class=\"active\">
                            <a class=\"js-arrow\" href=\"{{path('app_home')}}\">
                                <i class=\"fas fa-home\"></i>Home</a>
                        </li>
                        <li class=\"has-sub\">
                            <a class=\"js-arrow\" href=\"#\">
                                <i class=\"fas fa-user\"></i>Utilisateurs</a>
                            <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                                <li>
                                    <a href=\"#\">Ajouter Utilisateur</a>
                                </li>
                                <li>
                                    <a href=\"#\">Afficher Utilisateurs</a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"has-sub\">
                            <a class=\"js-arrow\" href=\"#\">
                                <i class=\"fas fa-table\"></i>Planning</a>
                            <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                                <li>
                                    <a href=\"{{path('addPlanning')}}\">Ajouter Planning</a>
                                </li>
                                <li>
                                    <a href=\"{{path('viewPlanning')}}\">Afficher Plannings</a>
                                </li>
                                <li>
                                    <a href=\"{{path('addCours')}}\">Ajouter Cours</a>
                                </li>
                                <li>
                                    <a href=\"{{path('viewCours')}}\">Afficher Cours</a>
                                </li>
                                <li>
                                    <a href=\"{{path('addActivite')}}\">Ajouter Activité</a>
                                </li>
                                <li>
                                    <a href=\"{{path('viewActivite')}}\">Afficher Activités</a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"has-sub\">
                            <a class=\"js-arrow\" href=\"#\">
                                <i class=\"fas fa-list\"></i>Abonnements</a>
                            <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                                <li>
                                    <a href=\"#\">Ajouter Abonnement</a>
                                </li>
                                <li>
                                    <a href=\"#\">Afficher Abonnements</a>
                                </li>
                                <li>
                                    <a href=\"#\">Ajouter Pack</a>
                                </li>
                                <li>
                                    <a href=\"#\">Afficher Packs</a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"has-sub\">
                            <a class=\"js-arrow\" href=\"#\">
                                <i class=\"fas fa-desktop\"></i>Materiaux</a>
                            <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                                <li>
                                    <a href=\"#\">Ajouter Materiel</a>
                                </li>
                                <li>
                                    <a href=\"#\">Afficher Materiaux</a>
                                </li>
                                <li>
                                    <a href=\"#\">Ajouter Charge</a>
                                </li>
                                <li>
                                    <a href=\"#\">Afficher Charges</a>
                                </li>
                                <li>
                                    <a href=\"#\">Ajouter Fournisseur</a>
                                </li>
                                <li>
                                    <a href=\"#\">Afficher Fournisseurs</a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"has-sub\">
                            <a class=\"js-arrow\" href=\"#\">
                                <i class=\"fas fa-trophy\"></i>Competition</a>
                            <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                                <li>
                                    <a href=\"{{path('app_competition_new')}}\">Ajouter Competition</a>
                                </li>
                                <li>
                                    <a href=\"{{path('app_competition_index')}}\">Afficher Competition</a>
                                </li>
                                <li>
                                    <a href=\"{{path('app_ticket_new')}}\">Ajouter Ticket</a>
                                </li>
                                <li>
                                    <a href=\"{{path('app_ticket_new')}}\">Afficher Tickets</a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"has-sub\">
                            <a class=\"js-arrow\" href=\"#\">
                                <i class=\"fas fa-newspaper\"></i>Restaurants</a>
                            <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">
                                <li>
                                    <a href=\"#\">Ajouter Plat</a>
                                </li>
                                <li>
                                    <a href=\"#\">Afficher Plats</a>
                                </li>
                                <li>
                                    <a href=\"#\">Ajouter Menu</a>
                                </li>
                                <li>
                                    <a href=\"#\">Afficher Menus</a>
                                </li>
                            </ul>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class=\"menu-sidebar d-none d-lg-block\">
            <div class=\"logo\">
                <a href=\"{{path('app_home')}}\">
                    <img src=\"{{ asset('./BackOffice/images/logo/LogoGymBlack.png') }} \" height=\"90\" width=\"100\"  alt=\"LogoGymBlack\" />
                </a>
            </div>
            <div class=\"menu-sidebar__content js-scrollbar1\">
                <nav class=\"navbar-sidebar\">
                    <ul class=\"list-unstyled navbar__list\">
                        <li class=\"active\">
                            <a class=\"js-arrow\" href=\"{{path('app_home')}}\">
                                <i class=\"fas fa-home\"></i>Home</a>
                        </li>
                        <li class=\"has-sub\">
                            <a class=\"js-arrow\" href=\"#\">
                                <i class=\"fas fa-user\"></i>Utilisateurs</a>
                                <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                                    <li>
                                        <a href=\"#\">Ajouter Utilisateur</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Afficher Utilisateurs</a>
                                    </li>
                                </ul>
                        </li>
                        <li class=\"has-sub\">
                            <a class=\"js-arrow\" href=\"#\">
                                <i class=\"fas fa-table\"></i>Planning</a>
                                <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                                    <li>
                                        <a href=\"{{path('addPlanning')}}\">Ajouter Planning</a>
                                    </li>
                                    <li>
                                        <a href=\"{{path('viewPlanning')}}\">Afficher Planning</a>
                                    </li>
                                    <li>
                                        <a href=\"{{path('addCours')}}\">Ajouter Cours</a>
                                    </li>
                                    <li>
                                        <a href=\"{{path('viewCours')}}\">Afficher Cours</a>
                                    </li>
                                    <li>
                                        <a href=\"{{path('addActivite')}}\">Ajouter Activité</a>
                                    </li>
                                    <li>
                                        <a href=\"{{path('viewActivite')}}\">Afficher Activités</a>
                                    </li>
                                </ul>
                        </li>
                        <li class=\"has-sub\">
                            <a class=\"js-arrow\" href=\"#\">
                                <i class=\"fas fa-list\"></i>Abonnements</a>
                                <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                                    <li>
                                        <a href=\"#\">Ajouter Abonnement</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Afficher Abonnements</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Ajouter Pack</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Afficher Packs</a>
                                    </li>
                                </ul>
                        </li>
                        <li class=\"has-sub\">
                            <a class=\"js-arrow\" href=\"#\">
                                <i class=\"fas fa-desktop\"></i>Materiaux</a>
                                <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                                    <li>
                                        <a href=\"#\">Ajouter Materiel</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Afficher Materiaux</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Ajouter Charge</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Afficher Charges</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Ajouter Fournisseur</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Afficher Fournisseurs</a>
                                    </li>
                                </ul>
                        </li>
                        <li class=\"has-sub\">
                            <a class=\"js-arrow\" href=\"#\">
                                <i class=\"fas fa-trophy\"></i>Competition</a>
                                <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                                    <li>
                                        <a href=\"{{ path('app_competition_new') }}\">Ajouter Competition</a>
                                    </li>
                                    <li>
                                        <a href=\"{{ path('app_competition_index') }}\">Afficher Competition</a>
                                    </li>
                                    <li>
                                        <a href=\"{{ path('app_ticket_new') }}\">Ajouter Ticket</a>
                                    </li>
                                    <li>
                                        <a href=\"{{ path('app_ticket_index')}}\">Afficher Tickets</a>
                                    </li>
                                </ul>
                        </li>
                        <li class=\"has-sub\">
                            <a class=\"js-arrow\" href=\"#\">
                                <i class=\"fas fa-newspaper\"></i>Restaurants</a>
                                <ul class=\"list-unstyled navbar__sub-list js-sub-list\">
                                    <li>
                                        <a href=\"#\">Ajouter Plat</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Afficher Plats</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Ajouter Menu</a>
                                    </li>
                                    <li>
                                        <a href=\"#\">Afficher Menus</a>
                                    </li>
                                </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class=\"page-container\">
            <!-- HEADER DESKTOP-->
            <header class=\"header-desktop\">
                <div class=\"section__content section__content--p30\">
                    <div class=\"container-fluid\">
                        <div class=\"header-wrap\">
                            <form class=\"form-header\" action=\"\" method=\"POST\">
                                <input class=\"au-input au-input--xl\" type=\"text\" name=\"search\" placeholder=\"Search for datas &amp; reports...\" />
                                <button class=\"au-btn--submit\" type=\"submit\">
                                    <i class=\"zmdi zmdi-search\"></i>
                                </button>
                            </form>
                            <div class=\"header-button\">
                                <div class=\"noti-wrap\">
                                    <div class=\"noti__item js-item-menu\">
                                        <i class=\"zmdi zmdi-comment-more\"></i>
                                        <span class=\"quantity\">1</span>
                                        <div class=\"mess-dropdown js-dropdown\">
                                            <div class=\"mess__title\">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class=\"mess__item\">
                                                <div class=\"image img-cir img-40\">
                                                    <img src=\"{{ asset('./BackOffice/images/icon/avatar-06.jpg') }} alt=\"Michelle Moreno\" />

                                                </div>
                                                <div class=\"content\">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class=\"time\">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class=\"mess__item\">
                                                <div class=\"image img-cir img-40\">
                                                    <img src=\"{{ asset('./BackOffice/images/icon/avatar-04.jpg') }}  alt=\"Diane Myers\" />

                                                </div>
                                                <div class=\"content\">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class=\"time\">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class=\"mess__footer\">
                                                <a href=\"#\">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"noti__item js-item-menu\">
                                        <i class=\"zmdi zmdi-email\"></i>
                                        <span class=\"quantity\">1</span>
                                        <div class=\"email-dropdown js-dropdown\">
                                            <div class=\"email__title\">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class=\"email__item\">
                                                <div class=\"image img-cir img-40\">
                                                    <img src=\"{{ asset('./BackOffice/images/icon/avatar-06.jpg') }}  alt=\"Cynthia Harvey\" />

                                                </div>
                                                <div class=\"content\">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class=\"email__item\">
                                                <div class=\"image img-cir img-40\">
                                                    <img src=\"{{ asset('./BackOffice/images/icon/avatar-05.jpg') }}  alt=\"Cynthia Harvey\" />
                                                </div>
                                                <div class=\"content\">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class=\"email__item\">
                                                <div class=\"image img-cir img-40\">
                                                    <img src=\"{{ asset('./BackOffice/images/icon/avatar-04.jpg') }}  alt=\"Cynthia Harvey\" />
                                                </div>
                                                <div class=\"content\">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class=\"email__footer\">
                                                <a href=\"#\">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"noti__item js-item-menu\">
                                        <i class=\"zmdi zmdi-notifications\"></i>
                                        <span class=\"quantity\">3</span>
                                        <div class=\"notifi-dropdown js-dropdown\">
                                            <div class=\"notifi__title\">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class=\"notifi__item\">
                                                <div class=\"bg-c1 img-cir img-40\">
                                                    <i class=\"zmdi zmdi-email-open\"></i>
                                                </div>
                                                <div class=\"content\">
                                                    <p>You got a email notification</p>
                                                    <span class=\"date\">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class=\"notifi__item\">
                                                <div class=\"bg-c2 img-cir img-40\">
                                                    <i class=\"zmdi zmdi-account-box\"></i>
                                                </div>
                                                <div class=\"content\">
                                                    <p>Your account has been blocked</p>
                                                    <span class=\"date\">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class=\"notifi__item\">
                                                <div class=\"bg-c3 img-cir img-40\">
                                                    <i class=\"zmdi zmdi-file-text\"></i>
                                                </div>
                                                <div class=\"content\">
                                                    <p>You got a new file</p>
                                                    <span class=\"date\">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class=\"notifi__footer\">
                                                <a href=\"#\">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"account-wrap\">
                                    <div class=\"account-item clearfix js-item-menu\">
                                        <div class=\"image\">
                                            <img src=\"{{ asset('./BackOffice/images/icon/avatar-01.jpg') }}\"  alt=\"Admin\" />
                                        </div>
                                        <div class=\"content\">
                                            <a class=\"js-acc-btn\" href=\"#\">john doe</a>
                                        </div>
                                        <div class=\"account-dropdown js-dropdown\">
                                            <div class=\"info clearfix\">
                                                <div class=\"image\">
                                                    <a href=\"#\">
                                                        <img src=\"{{ asset('./BackOffice/images/icon/avatar-01.jpg') }}\"  alt=\"Admin\" />
                                                    </a>
                                                </div>
                                                <div class=\"content\">
                                                    <h5 class=\"name\">
                                                        <a href=\"#\">john doe</a>
                                                    </h5>
                                                    <span class=\"email\">Admin@example.com</span>
                                                </div>
                                            </div>
                                            <div class=\"account-dropdown__body\">
                                                <div class=\"account-dropdown__item\">
                                                    <a href=\"#\">
                                                        <i class=\"zmdi zmdi-account\"></i>Account</a>
                                                </div>
                                                <div class=\"account-dropdown__item\">
                                                    <a href=\"#\">
                                                        <i class=\"zmdi zmdi-settings\"></i>Setting</a>
                                                </div>
                                                <div class=\"account-dropdown__item\">
                                                    <a href=\"#\">
                                                        <i class=\"zmdi zmdi-money-box\"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class=\"account-dropdown__footer\">
                                                <a href=\"#\">
                                                    <i class=\"zmdi zmdi-power\"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
    </div>
    {% block body %}{% endblock %}
</body>
{% block javascripts %}
    <!-- Jquery JS-->
    <script src=\"{{ asset('./BackOffice/vendor/jquery-3.2.1.min.js')}}\" ></script>
    <script src=\"{{ asset('./BackOffice/vendor/jquery-3.2.1.min.js')}}\" ></script>
    <!-- Bootstrap JS-->
    <script src=\"{{ asset('./BackOffice/vendor/bootstrap-4.1/popper.min.js')}}\" ></script>
    <script src=\"{{ asset('./BackOffice/vendor/bootstrap-4.1/bootstrap.min.js')}}\" ></script>
    <!-- Vendor JS-->
    <script src=\"{{ asset('./BackOffice/vendor/slick/slick.min.js')}}\" ></script>
    <script src=\"{{ asset('./BackOffice/vendor/wow/wow.min.js')}}\" ></script>
    <script src=\"{{ asset('./BackOffice/vendor/animsition/animsition.min.js')}}\" ></script>
    <script src=\"{{ asset('./BackOffice/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}\" ></script>
    <script src=\"{{ asset('./BackOffice/vendor/counter-up/jquery.waypoints.min.js')}}\" ></script>
    <script src=\"{{ asset('./BackOffice/vendor/counter-up/jquery.counterup.min.js')}}\" ></script>
    <script src=\"{{ asset('./BackOffice/vendor/circle-progress/circle-progress.min.js')}}\" ></script>
    <script src=\"{{ asset('./BackOffice/vendor/perfect-scrollbar/perfect-scrollbar.js')}}\" ></script>
    <script src=\"{{ asset('./BackOffice/vendor/chartjs/Chart.bundle.min.js')}}\" ></script>
    <script src=\"{{ asset('./BackOffice/vendor/select2/select2.min.js')}}\" ></script>


    <!-- Main JS-->
    <script src=\"{{ asset('./BackOffice/js/main.js')}}\" ></script>

{% endblock %}

</html>
", "baseBack.html.twig", "C:\\Users\\Salima\\Desktop\\energyBox\\templates\\baseBack.html.twig");
    }
}
