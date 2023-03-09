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

/* competition/viewFrontNonDispo.html.twig */
class __TwigTemplate_4f9868a0a9699f93ed5a82b8c58c47ed extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'icon' => [$this, 'block_icon'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competition/viewFrontNonDispo.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competition/viewFrontNonDispo.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "competition/viewFrontNonDispo.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "icon"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "icon"));

        echo "<link rel=\"icon\" type=\"img/logo/LogoGymBlack.png\" href=\"./frontOffice/img/logo/LogoGymBlack.png\">";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "EnergyBox |Competitions

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_tache($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tache"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tache"));

        // line 8
        echo "\t<main>
\t\t<!--? Hero Start -->
\t\t<div class=\"slider-area2\">
\t\t\t<div class=\"slider-height2 d-flex align-items-center\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xl-12\">
\t\t\t\t\t\t\t<div class=\"hero-cap hero-cap2 pt-70 text-center\">
\t\t\t\t\t\t\t\t<h2>Compétitions</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- Hero End -->
\t\t<!--? Blog Area Start-->
\t\t<section
\t\t\tclass=\"services-area pt-100 pb-150\">
\t\t\t<!--? Want To work -->
\t\t\t<section class=\"wantToWork-area w-padding\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row align-items-end justify-content-between\">
\t\t\t\t\t\t<div class=\"col-lg-6 col-md-10 col-sm-10\">
\t\t\t\t\t\t\t<div class=\"section-tittle\">
\t\t\t\t\t\t\t\t<span>À vos côtés pour repousser vos limites - notre service pour votre réussite</span>
\t\t\t\t\t\t\t\t<h2>Repoussez vos limites avec nous - chaque entraînement compte!</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-2 col-lg-2 col-md-3\">
\t\t\t\t\t\t\t<a href=\"viewFront\" class=\"btn wantToWork-btn f-right\">Les Competitions ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["competitions"]) || array_key_exists("competitions", $context) ? $context["competitions"] : (function () { throw new RuntimeError('Variable "competitions" does not exist.', 38, $this->source); })()), "gettotalItemCount", [], "any", false, false, false, 38), "html", null, true);
        echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- Want To work End -->
\t\t\t<section class=\"services-area pt-100 pb-150 section-bg\" data-background=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontOffice/img/gallery/section_bg01.png"), "html", null, true);
        echo "\" style=\"background-image: url(&quot;assets/img/gallery/section_bg01.png&quot;);\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competitions"]) || array_key_exists("competitions", $context) ? $context["competitions"] : (function () { throw new RuntimeError('Variable "competitions" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["competition"]) {
            // line 48
            echo "\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"single-cat single-cat2 text-center mb-50\">
\t\t\t\t\t\t\t\t\t<div class=\"cat-icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-fitness\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"cat-cap\">
\t\t\t\t\t\t\t\t\t\t";
            // line 56
            echo "\t\t\t\t\t\t\t\t\t\t<tr></tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competition"], "nomCompetition", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t<b>FraisCompetition En Dinar:
\t\t\t\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competition"], "fraisCompetition", [], "any", false, false, false, 65), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t<b>DateCompetition:
\t\t\t\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 68
            ((twig_get_attribute($this->env, $this->source, $context["competition"], "dateCompetition", [], "any", false, false, false, 68)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competition"], "dateCompetition", [], "any", false, false, false, 68), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t<b>EtatCompetition:
\t\t\t\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competition"], "etatCompetition", [], "any", false, false, false, 71), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t<b>NbrMaxInscrit:
\t\t\t\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competition"], "nbrMaxInscrit", [], "any", false, false, false, 74), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t</tr>


\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "                    </div>
                                <div class=\"row mt-5\">
            <div class=\"col-12 d-flex justify-content-center\">
            
               <h2> ";
        // line 90
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 90, $this->source); })()));
        echo "</h2>
            </div>
        </div>
\t\t\t\t
\t\t\t</div>
            

\t\t</section>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "competition/viewFrontNonDispo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 90,  220 => 86,  202 => 74,  196 => 71,  190 => 68,  184 => 65,  176 => 60,  170 => 56,  161 => 48,  157 => 47,  151 => 44,  142 => 38,  110 => 8,  100 => 7,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}
 {% block icon %}<link rel=\"icon\" type=\"img/logo/LogoGymBlack.png\" href=\"./frontOffice/img/logo/LogoGymBlack.png\">{% endblock %} 
{% block title %}EnergyBox |Competitions

{% endblock %}

{% block tache %}
\t<main>
\t\t<!--? Hero Start -->
\t\t<div class=\"slider-area2\">
\t\t\t<div class=\"slider-height2 d-flex align-items-center\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xl-12\">
\t\t\t\t\t\t\t<div class=\"hero-cap hero-cap2 pt-70 text-center\">
\t\t\t\t\t\t\t\t<h2>Compétitions</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- Hero End -->
\t\t<!--? Blog Area Start-->
\t\t<section
\t\t\tclass=\"services-area pt-100 pb-150\">
\t\t\t<!--? Want To work -->
\t\t\t<section class=\"wantToWork-area w-padding\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row align-items-end justify-content-between\">
\t\t\t\t\t\t<div class=\"col-lg-6 col-md-10 col-sm-10\">
\t\t\t\t\t\t\t<div class=\"section-tittle\">
\t\t\t\t\t\t\t\t<span>À vos côtés pour repousser vos limites - notre service pour votre réussite</span>
\t\t\t\t\t\t\t\t<h2>Repoussez vos limites avec nous - chaque entraînement compte!</h2>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xl-2 col-lg-2 col-md-3\">
\t\t\t\t\t\t\t<a href=\"viewFront\" class=\"btn wantToWork-btn f-right\">Les Competitions {{competitions.gettotalItemCount}}</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- Want To work End -->
\t\t\t<section class=\"services-area pt-100 pb-150 section-bg\" data-background=\"{{ asset('frontOffice/img/gallery/section_bg01.png')}}\" style=\"background-image: url(&quot;assets/img/gallery/section_bg01.png&quot;);\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t{% for competition in competitions %}
\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"single-cat single-cat2 text-center mb-50\">
\t\t\t\t\t\t\t\t\t<div class=\"cat-icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-fitness\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"cat-cap\">
\t\t\t\t\t\t\t\t\t\t{# TESSTTT AFFICHAGE #}
\t\t\t\t\t\t\t\t\t\t<tr></tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t\t\t<a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ competition.nomCompetition }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t<b>FraisCompetition En Dinar:
\t\t\t\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\t\t\t\t<p>{{ competition.fraisCompetition }}</p>
\t\t\t\t\t\t\t\t\t\t\t<b>DateCompetition:
\t\t\t\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\t\t\t\t<p>{{ competition.dateCompetition ? competition.dateCompetition|date('Y-m-d') : '' }}</p>
\t\t\t\t\t\t\t\t\t\t\t<b>EtatCompetition:
\t\t\t\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\t\t\t\t<p>{{ competition.etatCompetition }}</p>
\t\t\t\t\t\t\t\t\t\t\t<b>NbrMaxInscrit:
\t\t\t\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\t\t\t\t<p>{{ competition.nbrMaxInscrit }}</p>
\t\t\t\t\t\t\t\t\t\t</tr>


\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t{% endfor %}
                    </div>
                                <div class=\"row mt-5\">
            <div class=\"col-12 d-flex justify-content-center\">
            
               <h2> {{ knp_pagination_render(pagination) }}</h2>
            </div>
        </div>
\t\t\t\t
\t\t\t</div>
            

\t\t</section>
\t{% endblock %}
", "competition/viewFrontNonDispo.html.twig", "C:\\Users\\Salima\\Desktop\\energyBox\\templates\\competition\\viewFrontNonDispo.html.twig");
    }
}
