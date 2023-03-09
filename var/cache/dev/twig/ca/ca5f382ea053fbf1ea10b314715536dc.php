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

/* ticket/showTicketFront.html.twig */
class __TwigTemplate_b85b9a0684715cac7d6b991aa45d4e0b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ticket/showTicketFront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ticket/showTicketFront.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "ticket/showTicketFront.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "EnergyBox |Competition";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_tache($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tache"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tache"));

        // line 6
        echo "    <main>
        <!--? Hero Start -->
        <div class=\"slider-area2\">
            <div class=\"slider-height2 d-flex align-items-center\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xl-12\">
                            <div class=\"hero-cap hero-cap2 pt-70 text-center\">
                                <h2>Votre Ticket</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? Blog Area Start-->
             <section class=\"services-area pt-100 pb-150\">
            <section class=\"wantToWork-area w-padding\">
                <div class=\"container\">
                    <div class=\"row align-items-end justify-content-between\">
                        <div class=\"col-lg-6 col-md-10 col-sm-10\">
                            <div class=\"section-tittle\">
                                <span>À vos côtés pour repousser vos limites - notre service pour votre réussite</span> 
                                <h2>Repoussez vos limites avec nous - chaque entraînement compte!</h2>
                            </div>
                        </div>
                        <div class=\"col-xl-2 col-lg-2 col-md-3\">
                            <a href=\"#\" class=\"btn wantToWork-btn f-right\">Voir Les abonnement</a>
                        </div>
                    </div>
                </div>
            </section>
        <!-- Want To work End -->
            <section class=\"services-area pt-100 pb-150 section-bg\" data-background=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontOffice/img/gallery/section_bg01.png"), "html", null, true);
        echo "\" style=\"background-image: url(&quot;assets/img/gallery/section_bg01.png&quot;);\">            
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"cat-cap\">
                            <div class=\"about-caption\">
                                <center>
                                <div class=\"section-tittle section-tittle3 mb-35\">
                                    <h1><span>Détail de votre ticket</span></h1>
                                    <div class=\"mb-65 pera-bottom\">
                                        <b>Ticket de Competition:</b> <p>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 49, $this->source); })()), "competition", [], "any", false, false, false, 49), "nomCompetition", [], "any", false, false, false, 49), "html", null, true);
        echo "</p>
                                        <b>Description de la ticket:</b> <p>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 50, $this->source); })()), "descriptionTicket", [], "any", false, false, false, 50), "html", null, true);
        echo "</p>
                                    </div>
                                <div class=\"img-cap\">
                                <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ticket_pdf", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53)]), "html", null, true);
        echo "\" class=\"btn\">Télécharger</a>
                                
                            </div>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
        </section>             
        <!-- Hero End -->
        <!--? Blog Area Start-->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "ticket/showTicketFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 53,  140 => 50,  136 => 49,  124 => 40,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}

{% block title %}EnergyBox |Competition{% endblock %}

{% block tache %}
    <main>
        <!--? Hero Start -->
        <div class=\"slider-area2\">
            <div class=\"slider-height2 d-flex align-items-center\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xl-12\">
                            <div class=\"hero-cap hero-cap2 pt-70 text-center\">
                                <h2>Votre Ticket</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? Blog Area Start-->
             <section class=\"services-area pt-100 pb-150\">
            <section class=\"wantToWork-area w-padding\">
                <div class=\"container\">
                    <div class=\"row align-items-end justify-content-between\">
                        <div class=\"col-lg-6 col-md-10 col-sm-10\">
                            <div class=\"section-tittle\">
                                <span>À vos côtés pour repousser vos limites - notre service pour votre réussite</span> 
                                <h2>Repoussez vos limites avec nous - chaque entraînement compte!</h2>
                            </div>
                        </div>
                        <div class=\"col-xl-2 col-lg-2 col-md-3\">
                            <a href=\"#\" class=\"btn wantToWork-btn f-right\">Voir Les abonnement</a>
                        </div>
                    </div>
                </div>
            </section>
        <!-- Want To work End -->
            <section class=\"services-area pt-100 pb-150 section-bg\" data-background=\"{{ asset('frontOffice/img/gallery/section_bg01.png')}}\" style=\"background-image: url(&quot;assets/img/gallery/section_bg01.png&quot;);\">            
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"cat-cap\">
                            <div class=\"about-caption\">
                                <center>
                                <div class=\"section-tittle section-tittle3 mb-35\">
                                    <h1><span>Détail de votre ticket</span></h1>
                                    <div class=\"mb-65 pera-bottom\">
                                        <b>Ticket de Competition:</b> <p>{{ ticket.competition.nomCompetition }}</p>
                                        <b>Description de la ticket:</b> <p>{{ ticket.descriptionTicket }}</p>
                                    </div>
                                <div class=\"img-cap\">
                                <a href=\"{{ path('app_ticket_pdf', {'id': ticket.id}) }}\" class=\"btn\">Télécharger</a>
                                
                            </div>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
        </section>             
        <!-- Hero End -->
        <!--? Blog Area Start-->
{% endblock %}
", "ticket/showTicketFront.html.twig", "C:\\Users\\Salima\\Desktop\\energyBox\\templates\\ticket\\showTicketFront.html.twig");
    }
}
