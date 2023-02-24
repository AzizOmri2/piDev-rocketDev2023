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

/* competition/showFront.html.twig */
class __TwigTemplate_81cfa2fdb3890e886632295f8baffa3c extends Template
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
        // line 2
        return "baseFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competition/showFront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competition/showFront.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "competition/showFront.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

    // line 6
    public function block_tache($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tache"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tache"));

        // line 7
        echo "    <main>
        <!--? Hero Start -->
        <div class=\"slider-area2\">
            <div class=\"slider-height2 d-flex align-items-center\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xl-12\">
                            <div class=\"hero-cap hero-cap2 pt-70 text-center\">
                                <h2>Votre Compétition</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? Blog Area Start-->
             <section class=\"services-area pt-100 pb-150\">
                  <section class=\"services-area pt-100 pb-150 section-bg\" data-background=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontOffice/img/gallery/section_bg01.png"), "html", null, true);
        echo "\" style=\"background-image: url(&quot;assets/img/gallery/section_bg01.png&quot;);\">
            <!--? Want To work -->
            <section class=\"wantToWork-area w-padding\">
                <div class=\"container\">
                    <div class=\"row align-items-end justify-content-between\">
                        <div class=\"col-lg-6 col-md-10 col-sm-10\">
                            <div class=\"section-tittle\">
                                <span>NOS CERVICES POUR VOUS</span>
                                <h2>Repoussez vos limites avec nous - chaque entraînement compte!</h2>
                            </div>
                            
                        </div>
                        <div class=\"col-xl-2 col-lg-2 col-md-3\">
                            ";
        // line 39
        echo "                        </div>
                    </div>
                </div>
            </section>

        <section class=\"about-area section-padding30\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-6 col-md-12\">
                        <!-- about-img -->
                        <div class=\"about-img \">
                            <img src=\"assets/img/gallery/about.png\" alt=\"\">
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-12\">
                        <div class=\"about-caption\">
                            <!-- Section Tittle -->
                            <section class=\"services-area pt-100 pb-150 section-bg\" data-background=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontOffice/img/gallery/section_bg01.png"), "html", null, true);
        echo "\" style=\"background-image: url(&quot;assets/img/gallery/section_bg01.png&quot;);\">
                            <div class=\"section-tittle section-tittle3 mb-35\"
                                <span>Détail de la competition</span>
                                <p class=\"mb-65 pera-bottom\">
                                    <h1>Competition  << ";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["competition"]) || array_key_exists("competition", $context) ? $context["competition"] : (function () { throw new RuntimeError('Variable "competition" does not exist.', 60, $this->source); })()), "nomCompetition", [], "any", false, false, false, 60), "html", null, true);
        echo " >> </h1>
                                    
                                        <div > <b>Nom Competition: </b>
                                            <td>";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["competition"]) || array_key_exists("competition", $context) ? $context["competition"] : (function () { throw new RuntimeError('Variable "competition" does not exist.', 63, $this->source); })()), "nomCompetition", [], "any", false, false, false, 63), "html", null, true);
        echo "</td>
                                        </div>           
                                        <div><b>Les Frais De Competition en Dinar: </b>
                                        <td>";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["competition"]) || array_key_exists("competition", $context) ? $context["competition"] : (function () { throw new RuntimeError('Variable "competition" does not exist.', 66, $this->source); })()), "fraisCompetition", [], "any", false, false, false, 66), "html", null, true);
        echo "</td>
                                        </div>
                                        <div>      
                                        <b>Date De La Competition: </b>
                                        <td>";
        // line 70
        ((twig_get_attribute($this->env, $this->source, (isset($context["competition"]) || array_key_exists("competition", $context) ? $context["competition"] : (function () { throw new RuntimeError('Variable "competition" does not exist.', 70, $this->source); })()), "dateCompetition", [], "any", false, false, false, 70)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["competition"]) || array_key_exists("competition", $context) ? $context["competition"] : (function () { throw new RuntimeError('Variable "competition" does not exist.', 70, $this->source); })()), "dateCompetition", [], "any", false, false, false, 70), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
                                        </div>
                                        <div>
                                        <b>Le Nombre Maximum D'inscrit: </b>
                                        <td>";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["competition"]) || array_key_exists("competition", $context) ? $context["competition"] : (function () { throw new RuntimeError('Variable "competition" does not exist.', 74, $this->source); })()), "nbrMaxInscrit", [], "any", false, false, false, 74), "html", null, true);
        echo "</td>
                                        </div>
                                        <div>
                                        <b>Le Nombre D'inscrit: </b>
                                        <td>";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["competition"]) || array_key_exists("competition", $context) ? $context["competition"] : (function () { throw new RuntimeError('Variable "competition" does not exist.', 78, $this->source); })()), "nbrParticipant", [], "any", false, false, false, 78), "html", null, true);
        echo "</td>
                                        </div>
                                        <div>
                                        <b>Etat De La Competition: </b>
                                        <td>";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["competition"]) || array_key_exists("competition", $context) ? $context["competition"] : (function () { throw new RuntimeError('Variable "competition" does not exist.', 82, $this->source); })()), "etatCompetition", [], "any", false, false, false, 82), "html", null, true);
        echo "</td>
                                        </div>  
                                </p>
                               
                            </div>
                              <a href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_competition_showFront");
        echo "\" class=\"btn\">Retour à la liste des competitions</a>
                              <a href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ticket_Front", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["competition"]) || array_key_exists("competition", $context) ? $context["competition"] : (function () { throw new RuntimeError('Variable "competition" does not exist.', 88, $this->source); })()), "id", [], "any", false, false, false, 88)]), "html", null, true);
        echo "\" class=\"btn\"> Obtenir Ma Ticket </a>
                            ";
        // line 90
        echo "                        </div>

                    </div>
                </div>
            </div>
                        </section>
                </section>
        

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "competition/showFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 90,  202 => 88,  198 => 87,  190 => 82,  183 => 78,  176 => 74,  169 => 70,  162 => 66,  156 => 63,  150 => 60,  143 => 56,  124 => 39,  108 => 25,  88 => 7,  78 => 6,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'baseFront.html.twig' %}

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
                                <h2>Votre Compétition</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? Blog Area Start-->
             <section class=\"services-area pt-100 pb-150\">
                  <section class=\"services-area pt-100 pb-150 section-bg\" data-background=\"{{ asset('frontOffice/img/gallery/section_bg01.png')}}\" style=\"background-image: url(&quot;assets/img/gallery/section_bg01.png&quot;);\">
            <!--? Want To work -->
            <section class=\"wantToWork-area w-padding\">
                <div class=\"container\">
                    <div class=\"row align-items-end justify-content-between\">
                        <div class=\"col-lg-6 col-md-10 col-sm-10\">
                            <div class=\"section-tittle\">
                                <span>NOS CERVICES POUR VOUS</span>
                                <h2>Repoussez vos limites avec nous - chaque entraînement compte!</h2>
                            </div>
                            
                        </div>
                        <div class=\"col-xl-2 col-lg-2 col-md-3\">
                            {# <a href=\"#\" class=\"btn wantToWork-btn f-right\">Retour à la liste des compétitions</a> #}
                        </div>
                    </div>
                </div>
            </section>

        <section class=\"about-area section-padding30\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-6 col-md-12\">
                        <!-- about-img -->
                        <div class=\"about-img \">
                            <img src=\"assets/img/gallery/about.png\" alt=\"\">
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-12\">
                        <div class=\"about-caption\">
                            <!-- Section Tittle -->
                            <section class=\"services-area pt-100 pb-150 section-bg\" data-background=\"{{ asset('frontOffice/img/gallery/section_bg01.png')}}\" style=\"background-image: url(&quot;assets/img/gallery/section_bg01.png&quot;);\">
                            <div class=\"section-tittle section-tittle3 mb-35\"
                                <span>Détail de la competition</span>
                                <p class=\"mb-65 pera-bottom\">
                                    <h1>Competition  << {{ competition.nomCompetition }} >> </h1>
                                    
                                        <div > <b>Nom Competition: </b>
                                            <td>{{ competition.nomCompetition }}</td>
                                        </div>           
                                        <div><b>Les Frais De Competition en Dinar: </b>
                                        <td>{{ competition.fraisCompetition }}</td>
                                        </div>
                                        <div>      
                                        <b>Date De La Competition: </b>
                                        <td>{{ competition.dateCompetition ? competition.dateCompetition|date('Y-m-d') : '' }}</td>
                                        </div>
                                        <div>
                                        <b>Le Nombre Maximum D'inscrit: </b>
                                        <td>{{ competition.nbrMaxInscrit }}</td>
                                        </div>
                                        <div>
                                        <b>Le Nombre D'inscrit: </b>
                                        <td>{{ competition.nbrParticipant }}</td>
                                        </div>
                                        <div>
                                        <b>Etat De La Competition: </b>
                                        <td>{{ competition.etatCompetition }}</td>
                                        </div>  
                                </p>
                               
                            </div>
                              <a href=\"{{path('app_competition_showFront') }}\" class=\"btn\">Retour à la liste des competitions</a>
                              <a href=\"{{ path('app_ticket_Front', {'id': competition.id}) }}\" class=\"btn\"> Obtenir Ma Ticket </a>
                            {# <a href=\"app_ticket_Front\" class=\"btn\">Obtenir Ma Ticket</a> #}
                        </div>

                    </div>
                </div>
            </div>
                        </section>
                </section>
        

{% endblock %}

", "competition/showFront.html.twig", "C:\\Users\\Salima\\Desktop\\energyBox\\templates\\competition\\showFront.html.twig");
    }
}
