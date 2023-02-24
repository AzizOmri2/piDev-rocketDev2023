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

/* competition/show.html.twig */
class __TwigTemplate_5d4ac9376096290e711504811f54f636 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competition/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competition/show.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "competition/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Competition";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "                
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"copyright\">
                                    <p>Copyright © 2023 EnergyBox. All rights reserved. Template by <a href=\"https://EnergyBox.com\">EnergyBox</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
        </div>

    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<!-- MAIN CONTENT-->
    <div class=\"page-wrapper\">
        <!-- PAGE CONTAINER-->
        <div class=\"page-container\">
            <div class=\"main-content\">
                <div class=\"section__content section__content--p30\">
                    <div class=\"container-fluid\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <!-- START WHITE BACKGROUND-->
                                <div class=\"map-data m-b-40\">
                                    <title>Competition</title>
                                    <h1>Competition</h1>
                                    <div class=\"table-responsive m-b-40\">
                                            <table class=\"table table-borderless table-data3\">
                                                <thead>
                                                    <tr>
                                                        ";
        // line 24
        echo "                                                        <th>Nom De La Competition</th>
                                                        <th>Frais De La Competition</th>
                                                        <th>Date De La Competition</th>
                                                        <th>Nombre Maximum D'Inscrit</th>
                                                        <th>Etat De La Competition</th>
                                                        <th>Nombre De Participants</th>     
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    ";
        // line 34
        echo "                                                    <td>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["competition"]) || array_key_exists("competition", $context) ? $context["competition"] : (function () { throw new RuntimeError('Variable "competition" does not exist.', 34, $this->source); })()), "nomCompetition", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
                                                    <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["competition"]) || array_key_exists("competition", $context) ? $context["competition"] : (function () { throw new RuntimeError('Variable "competition" does not exist.', 35, $this->source); })()), "fraisCompetition", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
                                                    <td>";
        // line 36
        ((twig_get_attribute($this->env, $this->source, (isset($context["competition"]) || array_key_exists("competition", $context) ? $context["competition"] : (function () { throw new RuntimeError('Variable "competition" does not exist.', 36, $this->source); })()), "dateCompetition", [], "any", false, false, false, 36)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["competition"]) || array_key_exists("competition", $context) ? $context["competition"] : (function () { throw new RuntimeError('Variable "competition" does not exist.', 36, $this->source); })()), "dateCompetition", [], "any", false, false, false, 36), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
                                                    <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["competition"]) || array_key_exists("competition", $context) ? $context["competition"] : (function () { throw new RuntimeError('Variable "competition" does not exist.', 37, $this->source); })()), "nbrMaxInscrit", [], "any", false, false, false, 37), "html", null, true);
        echo "</td>
                                                    <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["competition"]) || array_key_exists("competition", $context) ? $context["competition"] : (function () { throw new RuntimeError('Variable "competition" does not exist.', 38, $this->source); })()), "etatCompetition", [], "any", false, false, false, 38), "html", null, true);
        echo "</td>
                                                    <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["competition"]) || array_key_exists("competition", $context) ? $context["competition"] : (function () { throw new RuntimeError('Variable "competition" does not exist.', 39, $this->source); })()), "nbrParticipant", [], "any", false, false, false, 39), "html", null, true);
        echo "</td>
                                                </tbody>     
                                            </table>
                                            <div align=\"center\" class=\"card-footer\">                     
                                                ";
        // line 43
        echo twig_include($this->env, $context, "competition/_delete_form.html.twig");
        echo "
                                                ";
        // line 45
        echo "                                                <button class=\"btn btn-outline-secondary\"><a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_competition_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["competition"]) || array_key_exists("competition", $context) ? $context["competition"] : (function () { throw new RuntimeError('Variable "competition" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45)]), "html", null, true);
        echo "\">Modifier</a></button>
                                                <button class=\"btn btn-outline-secondary\"><a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_competition_index");
        echo "\">Retour à La Liste</a></button>     
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                    
        <!-- END PAGE CONTAINER-->                       
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "competition/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 46,  189 => 45,  185 => 43,  178 => 39,  174 => 38,  170 => 37,  166 => 36,  162 => 35,  157 => 34,  146 => 24,  126 => 5,  116 => 4,  91 => 53,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}
{% block title %}Competition{% endblock %}
{% block content %}
{% block body %}

<!-- MAIN CONTENT-->
    <div class=\"page-wrapper\">
        <!-- PAGE CONTAINER-->
        <div class=\"page-container\">
            <div class=\"main-content\">
                <div class=\"section__content section__content--p30\">
                    <div class=\"container-fluid\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <!-- START WHITE BACKGROUND-->
                                <div class=\"map-data m-b-40\">
                                    <title>Competition</title>
                                    <h1>Competition</h1>
                                    <div class=\"table-responsive m-b-40\">
                                            <table class=\"table table-borderless table-data3\">
                                                <thead>
                                                    <tr>
                                                        {# <th>Id</th> #}
                                                        <th>Nom De La Competition</th>
                                                        <th>Frais De La Competition</th>
                                                        <th>Date De La Competition</th>
                                                        <th>Nombre Maximum D'Inscrit</th>
                                                        <th>Etat De La Competition</th>
                                                        <th>Nombre De Participants</th>     
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    {# <td>{{ competition.id }}</td> #}
                                                    <td>{{ competition.nomCompetition }}</td>
                                                    <td>{{ competition.fraisCompetition }}</td>
                                                    <td>{{ competition.dateCompetition ? competition.dateCompetition|date('Y-m-d') : '' }}</td>
                                                    <td>{{ competition.nbrMaxInscrit }}</td>
                                                    <td>{{ competition.etatCompetition }}</td>
                                                    <td>{{ competition.nbrParticipant }}</td>
                                                </tbody>     
                                            </table>
                                            <div align=\"center\" class=\"card-footer\">                     
                                                {{ include('competition/_delete_form.html.twig') }}
                                                {# <button class=\"btn btn-outline-secondary\"><a href=\"{{ path('app_competition_delete',{'id': competition.id}) }}\">Supprimer</a></button> #}
                                                <button class=\"btn btn-outline-secondary\"><a href=\"{{ path('app_competition_edit', {'id': competition.id}) }}\">Modifier</a></button>
                                                <button class=\"btn btn-outline-secondary\"><a href=\"{{ path('app_competition_index') }}\">Retour à La Liste</a></button>     
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                    
        <!-- END PAGE CONTAINER-->                       
{% endblock %}                
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"copyright\">
                                    <p>Copyright © 2023 EnergyBox. All rights reserved. Template by <a href=\"https://EnergyBox.com\">EnergyBox</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
        </div>

    </div>
{% endblock %}
", "competition/show.html.twig", "C:\\Users\\Salima\\Desktop\\energyBox\\templates\\competition\\show.html.twig");
    }
}
