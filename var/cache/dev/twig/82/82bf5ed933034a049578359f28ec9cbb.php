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

/* competition/viewFront.html.twig */
class __TwigTemplate_ecae5f1f64903b0745f45e492c4cdb63 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competition/viewFront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competition/viewFront.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "competition/viewFront.html.twig", 1);
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

        echo "EnergyBox |Competitions";
        
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
                                <h2>Compétitions</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? Blog Area Start-->
             <section class=\"services-area pt-100 pb-150\">
            <!--? Want To work -->
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
                            <a href=\"viewFront\" class=\"btn wantToWork-btn f-right\">Les Competitions</a>
                        </div>
                    </div>
                </div>
            </section>
        <!-- Want To work End -->
        <section class=\"services-area pt-100 pb-150 section-bg\" data-background=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontOffice/img/gallery/section_bg01.png"), "html", null, true);
        echo "\" style=\"background-image: url(&quot;assets/img/gallery/section_bg01.png&quot;);\">
       <div class=\"container\">
                <div class=\"row\">
                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competitions"]) || array_key_exists("competitions", $context) ? $context["competitions"] : (function () { throw new RuntimeError('Variable "competitions" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["competition"]) {
            // line 45
            echo "                    <div class=\"col-lg-4 col-md-4 col-sm-6\">
                        <div class=\"single-cat single-cat2 text-center mb-50\">
                            <div class=\"cat-icon\">
                                <i class=\"flaticon-fitness\"></i>
                            </div>
                            <div class=\"cat-cap\">
";
            // line 52
            echo "                            <tr>
                              <tr>
                               <h5><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_competition_Front", ["id" => twig_get_attribute($this->env, $this->source, $context["competition"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\"><td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competition"], "nomCompetition", [], "any", false, false, false, 54), "html", null, true);
            echo "</td></a></h5>
                               <b>FraisCompetition En Dinar: </b><p>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competition"], "fraisCompetition", [], "any", false, false, false, 55), "html", null, true);
            echo "</p>
                               <b>DateCompetition: </b><p>";
            // line 56
            ((twig_get_attribute($this->env, $this->source, $context["competition"], "dateCompetition", [], "any", false, false, false, 56)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competition"], "dateCompetition", [], "any", false, false, false, 56), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</p>
                               <b>EtatCompetition: </b><p>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competition"], "etatCompetition", [], "any", false, false, false, 57), "html", null, true);
            echo "</p>
                               <b>NbrMaxInscrit: </b><p>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competition"], "nbrMaxInscrit", [], "any", false, false, false, 58), "html", null, true);
            echo "</p> </tr>
                                
                                
                            </div>
                            <div class=\"img-cap\">
                                <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_competition_reserver", ["id" => twig_get_attribute($this->env, $this->source, $context["competition"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            echo "\" class=\"\"> Réserver <i class=\"ti-arrow-right\"></i></a>
                            </div>
                            </tr>
               </div>
              </div>
            
        


        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "        </div>
            </div>
     </section>   
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "competition/viewFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 73,  173 => 63,  165 => 58,  161 => 57,  157 => 56,  153 => 55,  147 => 54,  143 => 52,  135 => 45,  131 => 44,  125 => 41,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}
{# {% block icon %}<link rel=\"icon\" type=\"image/png\" href=\"./frontOffice/img/logo/LogoGymBlack.png\">{% endblock %} #}
{% block title %}EnergyBox |Competitions{% endblock %}

{% block tache %}
    <main>
        <!--? Hero Start -->
        <div class=\"slider-area2\">
            <div class=\"slider-height2 d-flex align-items-center\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xl-12\">
                            <div class=\"hero-cap hero-cap2 pt-70 text-center\">
                                <h2>Compétitions</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? Blog Area Start-->
             <section class=\"services-area pt-100 pb-150\">
            <!--? Want To work -->
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
                            <a href=\"viewFront\" class=\"btn wantToWork-btn f-right\">Les Competitions</a>
                        </div>
                    </div>
                </div>
            </section>
        <!-- Want To work End -->
        <section class=\"services-area pt-100 pb-150 section-bg\" data-background=\"{{ asset('frontOffice/img/gallery/section_bg01.png')}}\" style=\"background-image: url(&quot;assets/img/gallery/section_bg01.png&quot;);\">
       <div class=\"container\">
                <div class=\"row\">
                {% for competition in competitions %}
                    <div class=\"col-lg-4 col-md-4 col-sm-6\">
                        <div class=\"single-cat single-cat2 text-center mb-50\">
                            <div class=\"cat-icon\">
                                <i class=\"flaticon-fitness\"></i>
                            </div>
                            <div class=\"cat-cap\">
{# TESSTTT AFFICHAGE #}
                            <tr>
                              <tr>
                               <h5><a href=\"{{ path('app_competition_Front', {'id': competition.id}) }}\"><td>{{ competition.nomCompetition }}</td></a></h5>
                               <b>FraisCompetition En Dinar: </b><p>{{ competition.fraisCompetition }}</p>
                               <b>DateCompetition: </b><p>{{ competition.dateCompetition ? competition.dateCompetition|date('Y-m-d') : '' }}</p>
                               <b>EtatCompetition: </b><p>{{ competition.etatCompetition }}</p>
                               <b>NbrMaxInscrit: </b><p>{{ competition.nbrMaxInscrit }}</p> </tr>
                                
                                
                            </div>
                            <div class=\"img-cap\">
                                <a href=\"{{ path('app_competition_reserver', {'id': competition.id}) }}\" class=\"\"> Réserver <i class=\"ti-arrow-right\"></i></a>
                            </div>
                            </tr>
               </div>
              </div>
            
        


        {% endfor %}
        </div>
            </div>
     </section>   
{% endblock %}", "competition/viewFront.html.twig", "C:\\Users\\Salima\\Desktop\\energyBox\\templates\\competition\\viewFront.html.twig");
    }
}
