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
class __TwigTemplate_63ccfc946bccc354aee8b58bd0cf6fc4 extends Template
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

        echo "EnergyBox |Competitions
";
        
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
\t\t\t\t\t\t\t<a href=\"viewFront\" class=\"btn wantToWork-btn f-right\">Les Competitions
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- Want To work End -->
\t\t\t";
        // line 45
        echo "\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"searchInput\" placeholder=\"Search&hellip;\">
\t<script>
\t\t\tfunction filterTable() {
\t\t\t\tconst filter = document.getElementById('searchInput').value.toUpperCase();
\t\t\t\tconst rows = document.querySelectorAll('table tr');
\t\t\t\tfor (let i = 1; i < rows.length; i++) {
\t\t\t\t\tconst cols = rows[i].querySelectorAll('td');
\t\t\t\t\tlet visible = false;
\t\t\t\t\tfor (let j = 0; j < cols.length; j++) {
\t\t\t\t\t\tconst cell = cols[j];
\t\t\t\t\t\tif (cell.innerText.toUpperCase().indexOf(filter) > -1) {
\t\t\t\t\t\t\tvisible = true;
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\trows[i].style.display = visible ? '' : 'none';
\t\t\t\t}
\t\t\t}
\t\t\tdocument.getElementById('searchInput').addEventListener('keyup', filterTable);
\t</script>
\t\t
\t\t\t";
        // line 66
        echo "\t
\t\t\t<section class=\"services-area pt-100 pb-150 section-bg\" data-background=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontOffice/img/gallery/section_bg01.png"), "html", null, true);
        echo "\" style=\"background-image: url(&quot;assets/img/gallery/section_bg01.png&quot;);\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competitions"]) || array_key_exists("competitions", $context) ? $context["competitions"] : (function () { throw new RuntimeError('Variable "competitions" does not exist.', 70, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["competition"]) {
            // line 71
            echo "\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"single-cat single-cat2 text-center mb-50\">
\t\t\t\t\t\t\t\t\t<div class=\"cat-icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"flaticon-fitness\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\tclass=\"cat-cap\">
\t\t\t\t\t\t\t\t\t\t";
            // line 79
            echo "\t\t\t\t\t\t\t\t\t\t<tr></tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_competition_Front", ["id" => twig_get_attribute($this->env, $this->source, $context["competition"], "id", [], "any", false, false, false, 82)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competition"], "nomCompetition", [], "any", false, false, false, 83), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t<b>FraisCompetition En Dinar:
\t\t\t\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competition"], "fraisCompetition", [], "any", false, false, false, 88), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t<b>DateCompetition:
\t\t\t\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 91
            ((twig_get_attribute($this->env, $this->source, $context["competition"], "dateCompetition", [], "any", false, false, false, 91)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competition"], "dateCompetition", [], "any", false, false, false, 91), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t<b>EtatCompetition:
\t\t\t\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competition"], "etatCompetition", [], "any", false, false, false, 94), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t<b>NbrMaxInscrit:
\t\t\t\t\t\t\t\t\t\t\t</b>
\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competition"], "nbrMaxInscrit", [], "any", false, false, false, 97), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t</tr>


\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"img-cap\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_competition_reserver", ["id" => twig_get_attribute($this->env, $this->source, $context["competition"], "id", [], "any", false, false, false, 103)]), "html", null, true);
            echo "\" class=\"\">
\t\t\t\t\t\t\t\t\t\t\tRéserver
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"flex justify-center align-items flex-row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"footer-social\">

\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/sharer/sharer.php?u=";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_competition_reserver", ["id" => twig_get_attribute($this->env, $this->source, $context["competition"], "id", [], "any", false, false, false, 110)])), "html", null, true);
            echo "\" class=\"share facebook\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"w-3 h-3 text-blue-600 fill-current mr-4 icon-facebook\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 24 24\" style=\"width: 20px; height: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "\t\t\t\t\t\t";
        // line 128
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-12 d-flex justify-content-center\">
\t\t\t\t\t\t<h2>";
        // line 131
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 131, $this->source); })()));
        echo "</h2>
\t\t\t\t\t</div>
\t\t\t\t</section>

\t\t\t";
        
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
        return array (  257 => 131,  252 => 128,  250 => 127,  227 => 110,  217 => 103,  208 => 97,  202 => 94,  196 => 91,  190 => 88,  182 => 83,  178 => 82,  173 => 79,  164 => 71,  160 => 70,  154 => 67,  151 => 66,  128 => 45,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}
{# {% block icon %}<link rel=\"icon\" type=\"image/png\" href=\"./frontOffice/img/logo/LogoGymBlack.png\">{% endblock %} #}
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
\t\t\t\t\t\t\t<a href=\"viewFront\" class=\"btn wantToWork-btn f-right\">Les Competitions
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<!-- Want To work End -->
\t\t\t{# recherche #}
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"searchInput\" placeholder=\"Search&hellip;\">
\t<script>
\t\t\tfunction filterTable() {
\t\t\t\tconst filter = document.getElementById('searchInput').value.toUpperCase();
\t\t\t\tconst rows = document.querySelectorAll('table tr');
\t\t\t\tfor (let i = 1; i < rows.length; i++) {
\t\t\t\t\tconst cols = rows[i].querySelectorAll('td');
\t\t\t\t\tlet visible = false;
\t\t\t\t\tfor (let j = 0; j < cols.length; j++) {
\t\t\t\t\t\tconst cell = cols[j];
\t\t\t\t\t\tif (cell.innerText.toUpperCase().indexOf(filter) > -1) {
\t\t\t\t\t\t\tvisible = true;
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\trows[i].style.display = visible ? '' : 'none';
\t\t\t\t}
\t\t\t}
\t\t\tdocument.getElementById('searchInput').addEventListener('keyup', filterTable);
\t</script>
\t\t
\t\t\t{# recherche #}\t
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
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_competition_Front', {'id': competition.id}) }}\">
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
\t\t\t\t\t\t\t\t\t<div class=\"img-cap\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_competition_reserver', {'id': competition.id}) }}\" class=\"\">
\t\t\t\t\t\t\t\t\t\t\tRéserver
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"flex justify-center align-items flex-row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"footer-social\">

\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/sharer/sharer.php?u={{ absolute_url(path('app_competition_reserver', {id: competition.id})) }}\" class=\"share facebook\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"w-3 h-3 text-blue-600 fill-current mr-4 icon-facebook\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 24 24\" style=\"width: 20px; height: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{# {{ knp_pagination_render(competitions) }} #}

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-12 d-flex justify-content-center\">
\t\t\t\t\t\t<h2>{{ knp_pagination_render(pagination) }}</h2>
\t\t\t\t\t</div>
\t\t\t\t</section>

\t\t\t{% endblock %}
", "competition/viewFront.html.twig", "C:\\Users\\Salima\\Desktop\\energyBox\\templates\\competition\\viewFront.html.twig");
    }
}
