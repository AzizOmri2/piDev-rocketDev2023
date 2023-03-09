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

/* test/index.html.twig */
class __TwigTemplate_2a66c19ed69ad32cf3f824f4a4f5634f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'tache' => [$this, 'block_tache'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/index.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "test/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayBlock('tache', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_tache($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tache"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tache"));

        // line 5
        echo "    <body>
    <div class=\"slider-area position-relative\">
        <div class=\"slider-active\">
            <div class=\"single-slider slider-height d-flex align-items-center\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xl-7 col-lg-9 col-md-8 col-sm-9\">
                            <div class=\"hero__caption\">
                                <span data-animation=\"fadeInLeft\" data-delay=\"0.1s\">Avec EnergyBox</span>
                                <h1 data-animation=\"fadeInLeft\" data-delay=\"0.4s\">Vous allez voir la vie AUTREMENT<br>
                                    vous allez découvrir Le Monde du<br>
                                    CROSSFIT ..</h1>
                                <a href=\"#\" class=\"btn hero-btn\" data-animation=\"fadeInLeft\" data-delay=\"0.8s\">Créer un compte</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
            <!-- Single Slider-->
        </div>
    </div>
        <section class=\"about-area2 testimonial-area section-padding30 fix\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-5 col-md-11 col-sm-11\">
                        <!-- about-img -->
                        <div class=\"about-img2\">
                            <img src=\"assets/img/gallery/about2.png\" alt=\"\">
                            <!-- Shape -->
                            <div class=\"shape-qutaion d-none d-sm-block\">
                                <img src=\"assets/img//gallery/qutaion.png\" alt=\"\">
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-9 col-sm-9\">
                        <div class=\"about-caption\">
      
                            <!-- Section Tittle -->
                            <div class=\"section-tittle mb-55\">
                                <span>Découvrez votre monde chez nous </span>
                                <h2></h2>
                            </div>
                            <!-- Testimonial Start -->
                            <div class=\"h1-testimonial-active\">
                                <!-- Single Testimonial -->
                                <div class=\"single-testimonial\">
                                    <div class=\"testimonial-caption\">
                                        <p>Si vous êtes passionné par un sport en particulier, réserver une compétition peut être une excellente façon de vous motiver à vous entraîner et à vous améliorer.</p>
                                    </div>
                                </div>
                                <!-- Single Testimonial -->
                                <div class=\"single-testimonial\">
                                    <div class=\"testimonial-caption\">
                                        <p>Participer à une compétition peut vous donner l'occasion de vous mettre au défi et de vous fixer des objectifs personnels. Cela peut être une source de motivation pour vous entraîner et vous préparer.</p>
                                    </div>
                                </div>
                                <div class=\"single-testimonial\">
                                <div class=\"testimonial-caption\">
                                    <p>Si vous êtes compétitif de nature, participer à une compétition peut être une excellente façon de tester vos compétences et de mesurer votre niveau par rapport aux autres.</p>
                                </div>
                            </div>
                            </div>
                            <!-- Testimonial End -->
                            
                        </div>
                        
                    </div>
                </div>
                <div class=\"header-right-btn f-right d-none d-lg-block ml-30\">
                    <a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_competition_showFront");
        echo "\" class=\"btn header-btn\">Consulter les competitions</a>
                </div>
            </div>
        </section>
          
    </body>
    

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "test/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 74,  88 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}

{% block body %}
{% block tache %}
    <body>
    <div class=\"slider-area position-relative\">
        <div class=\"slider-active\">
            <div class=\"single-slider slider-height d-flex align-items-center\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xl-7 col-lg-9 col-md-8 col-sm-9\">
                            <div class=\"hero__caption\">
                                <span data-animation=\"fadeInLeft\" data-delay=\"0.1s\">Avec EnergyBox</span>
                                <h1 data-animation=\"fadeInLeft\" data-delay=\"0.4s\">Vous allez voir la vie AUTREMENT<br>
                                    vous allez découvrir Le Monde du<br>
                                    CROSSFIT ..</h1>
                                <a href=\"#\" class=\"btn hero-btn\" data-animation=\"fadeInLeft\" data-delay=\"0.8s\">Créer un compte</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
            <!-- Single Slider-->
        </div>
    </div>
        <section class=\"about-area2 testimonial-area section-padding30 fix\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-5 col-md-11 col-sm-11\">
                        <!-- about-img -->
                        <div class=\"about-img2\">
                            <img src=\"assets/img/gallery/about2.png\" alt=\"\">
                            <!-- Shape -->
                            <div class=\"shape-qutaion d-none d-sm-block\">
                                <img src=\"assets/img//gallery/qutaion.png\" alt=\"\">
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-9 col-sm-9\">
                        <div class=\"about-caption\">
      
                            <!-- Section Tittle -->
                            <div class=\"section-tittle mb-55\">
                                <span>Découvrez votre monde chez nous </span>
                                <h2></h2>
                            </div>
                            <!-- Testimonial Start -->
                            <div class=\"h1-testimonial-active\">
                                <!-- Single Testimonial -->
                                <div class=\"single-testimonial\">
                                    <div class=\"testimonial-caption\">
                                        <p>Si vous êtes passionné par un sport en particulier, réserver une compétition peut être une excellente façon de vous motiver à vous entraîner et à vous améliorer.</p>
                                    </div>
                                </div>
                                <!-- Single Testimonial -->
                                <div class=\"single-testimonial\">
                                    <div class=\"testimonial-caption\">
                                        <p>Participer à une compétition peut vous donner l'occasion de vous mettre au défi et de vous fixer des objectifs personnels. Cela peut être une source de motivation pour vous entraîner et vous préparer.</p>
                                    </div>
                                </div>
                                <div class=\"single-testimonial\">
                                <div class=\"testimonial-caption\">
                                    <p>Si vous êtes compétitif de nature, participer à une compétition peut être une excellente façon de tester vos compétences et de mesurer votre niveau par rapport aux autres.</p>
                                </div>
                            </div>
                            </div>
                            <!-- Testimonial End -->
                            
                        </div>
                        
                    </div>
                </div>
                <div class=\"header-right-btn f-right d-none d-lg-block ml-30\">
                    <a href=\"{{path('app_competition_showFront')}}\" class=\"btn header-btn\">Consulter les competitions</a>
                </div>
            </div>
        </section>
          
    </body>
    

{% endblock %}
{% endblock %}
", "test/index.html.twig", "C:\\Users\\Salima\\Desktop\\energyBox\\templates\\test\\index.html.twig");
    }
}
