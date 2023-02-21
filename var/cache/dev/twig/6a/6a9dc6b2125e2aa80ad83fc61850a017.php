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
class __TwigTemplate_9d60aa9c30915534b5f96ba26c40b5d2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        echo "    <body>
    <div class=\"slider-area position-relative\">
        <div class=\"slider-active\">
            <div class=\"single-slider slider-height d-flex align-items-center\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xl-7 col-lg-9 col-md-8 col-sm-9\">
                            <div class=\"hero__caption\">
                                <span data-animation=\"fadeInLeft\" data-delay=\"0.1s\">with EnergyBox</span>
                                <h1 data-animation=\"fadeInLeft\" data-delay=\"0.4s\">BUILD PERFECT BODY<br>
                                    SHAPE FOR GOOD AND<br>
                                    HEALTHY LIFE ..</h1>
                                <a href=\"from.html\" class=\"btn hero-btn\" data-animation=\"fadeInLeft\" data-delay=\"0.8s\">became a member</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
            <!-- Single Slider-->
        </div>
        <!-- Video icon -->
        <div class=\"video-icon\">
            <a class=\"popup-video btn-icon\" href=\"https://www.youtube.com/watch?v=up68UAfH0d0\"><i class=\"fas fa-play\"></i></a>
        </div>
    </div>
    <div ><h1>hi</h1></div>

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
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}

{% block body %}
    <body>
    <div class=\"slider-area position-relative\">
        <div class=\"slider-active\">
            <div class=\"single-slider slider-height d-flex align-items-center\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xl-7 col-lg-9 col-md-8 col-sm-9\">
                            <div class=\"hero__caption\">
                                <span data-animation=\"fadeInLeft\" data-delay=\"0.1s\">with EnergyBox</span>
                                <h1 data-animation=\"fadeInLeft\" data-delay=\"0.4s\">BUILD PERFECT BODY<br>
                                    SHAPE FOR GOOD AND<br>
                                    HEALTHY LIFE ..</h1>
                                <a href=\"from.html\" class=\"btn hero-btn\" data-animation=\"fadeInLeft\" data-delay=\"0.8s\">became a member</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
            <!-- Single Slider-->
        </div>
        <!-- Video icon -->
        <div class=\"video-icon\">
            <a class=\"popup-video btn-icon\" href=\"https://www.youtube.com/watch?v=up68UAfH0d0\"><i class=\"fas fa-play\"></i></a>
        </div>
    </div>
    <div ><h1>hi</h1></div>

    </body>

{% endblock %}
", "test/index.html.twig", "C:\\Users\\Salima\\Desktop\\energyBox\\templates\\test\\index.html.twig");
    }
}
