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
                                <span>OUR sERVICES FOR YOU</span>
                                <h2>PUSH YOUR LIMITS FORWARD We Offer to you</h2>
                            </div>
                        </div>
                        <div class=\"col-xl-2 col-lg-2 col-md-3\">
                            <a href=\"#\" class=\"btn wantToWork-btn f-right\">Retour à la liste des compétition</a>
                        </div>
                    </div>
                </div>
            </section>
      <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-4 col-sm-6\">
                        <div class=\"single-cat single-cat2 text-center mb-50\">
                            <div class=\"cat-icon\">
                                <i class=\"flaticon-fitness\"></i>
                            </div>
                            <div class=\"cat-cap\">
                                <h1>Competition ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["competition"]) || array_key_exists("competition", $context) ? $context["competition"] : (function () { throw new RuntimeError('Variable "competition" does not exist.', 49, $this->source); })()), "nomCompetition", [], "any", false, false, false, 49), "html", null, true);
        echo "</h1>
                                <tbody>
                                    <tr>
                                        <th>NomCompetition</th>
                                        <td>";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["competition"]) || array_key_exists("competition", $context) ? $context["competition"] : (function () { throw new RuntimeError('Variable "competition" does not exist.', 53, $this->source); })()), "nomCompetition", [], "any", false, false, false, 53), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>FraisCompetition</th>
                                        <td>";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["competition"]) || array_key_exists("competition", $context) ? $context["competition"] : (function () { throw new RuntimeError('Variable "competition" does not exist.', 57, $this->source); })()), "fraisCompetition", [], "any", false, false, false, 57), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>DateCompetition</th>
                                        <td>";
        // line 61
        ((twig_get_attribute($this->env, $this->source, (isset($context["competition"]) || array_key_exists("competition", $context) ? $context["competition"] : (function () { throw new RuntimeError('Variable "competition" does not exist.', 61, $this->source); })()), "dateCompetition", [], "any", false, false, false, 61)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["competition"]) || array_key_exists("competition", $context) ? $context["competition"] : (function () { throw new RuntimeError('Variable "competition" does not exist.', 61, $this->source); })()), "dateCompetition", [], "any", false, false, false, 61), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>NbrMaxInscrit</th>
                                        <td>";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["competition"]) || array_key_exists("competition", $context) ? $context["competition"] : (function () { throw new RuntimeError('Variable "competition" does not exist.', 65, $this->source); })()), "nbrMaxInscrit", [], "any", false, false, false, 65), "html", null, true);
        echo "</td>
                                    </tr>
                                    <tr>
                                        <th>EtatCompetition</th>
                                        <td>";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["competition"]) || array_key_exists("competition", $context) ? $context["competition"] : (function () { throw new RuntimeError('Variable "competition" does not exist.', 69, $this->source); })()), "etatCompetition", [], "any", false, false, false, 69), "html", null, true);
        echo "</td>
                                    </tr>
                                </tbody>
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
        return array (  167 => 69,  160 => 65,  153 => 61,  146 => 57,  139 => 53,  132 => 49,  88 => 7,  78 => 6,  59 => 4,  36 => 2,);
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
                                <span>OUR sERVICES FOR YOU</span>
                                <h2>PUSH YOUR LIMITS FORWARD We Offer to you</h2>
                            </div>
                        </div>
                        <div class=\"col-xl-2 col-lg-2 col-md-3\">
                            <a href=\"#\" class=\"btn wantToWork-btn f-right\">Retour à la liste des compétition</a>
                        </div>
                    </div>
                </div>
            </section>
      <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-4 col-sm-6\">
                        <div class=\"single-cat single-cat2 text-center mb-50\">
                            <div class=\"cat-icon\">
                                <i class=\"flaticon-fitness\"></i>
                            </div>
                            <div class=\"cat-cap\">
                                <h1>Competition {{ competition.nomCompetition }}</h1>
                                <tbody>
                                    <tr>
                                        <th>NomCompetition</th>
                                        <td>{{ competition.nomCompetition }}</td>
                                    </tr>
                                    <tr>
                                        <th>FraisCompetition</th>
                                        <td>{{ competition.fraisCompetition }}</td>
                                    </tr>
                                    <tr>
                                        <th>DateCompetition</th>
                                        <td>{{ competition.dateCompetition ? competition.dateCompetition|date('Y-m-d') : '' }}</td>
                                    </tr>
                                    <tr>
                                        <th>NbrMaxInscrit</th>
                                        <td>{{ competition.nbrMaxInscrit }}</td>
                                    </tr>
                                    <tr>
                                        <th>EtatCompetition</th>
                                        <td>{{ competition.etatCompetition }}</td>
                                    </tr>
                                </tbody>
{% endblock %}", "competition/showFront.html.twig", "C:\\Users\\Salima\\Desktop\\energyBox\\templates\\competition\\showFront.html.twig");
    }
}
