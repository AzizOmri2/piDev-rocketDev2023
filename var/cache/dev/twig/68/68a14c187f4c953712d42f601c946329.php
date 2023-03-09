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

/* competition/index.html.twig */
class __TwigTemplate_7cc65733630962ee6072d6d6d6d56309 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competition/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competition/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "competition/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<title>Liste de Competitions </title>


";
        // line 6
        $this->displayBlock('body', $context, $blocks);
        // line 76
        echo "



                                </div>

                                
                                <!-- END WHITE BACKGROUND-->
                            </div>
                        </div>
                        
                        
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

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<!-- MAIN CONTENT-->
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


<title>Liste Des Competition</title>


    <h1>Competitions:</h1>

     <div class=\"table-responsive m-b-40\">
       <table class=\"table table-borderless table-data3\">
        <thead>
            <tr>
                ";
        // line 32
        echo "                <th>Nom De La Competition</th>
                <th>Frais De La Competition</th>
                <th>Date De Competition</th>
                <th>Nombre Maximum D'Inscrit</th>
                <th>Etat De La Competition</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competitions"]) || array_key_exists("competitions", $context) ? $context["competitions"] : (function () { throw new RuntimeError('Variable "competitions" does not exist.', 41, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["competition"]) {
            // line 42
            echo "            <tr>
                ";
            // line 44
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competition"], "nomCompetition", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competition"], "fraisCompetition", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            ((twig_get_attribute($this->env, $this->source, $context["competition"], "dateCompetition", [], "any", false, false, false, 46)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competition"], "dateCompetition", [], "any", false, false, false, 46), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competition"], "nbrMaxInscrit", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competition"], "etatCompetition", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                <td>
                    <div align=\"center\" class=\"card-footer\">
                         <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_competition_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["competition"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\">
                            <button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Modifier\">
                                <i class=\"zmdi zmdi-edit\"></i>                                
                            </button> </a>
                   <br>
                        <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_competition_show", ["id" => twig_get_attribute($this->env, $this->source, $context["competition"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\">
                            <button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Afficher\">
                                <i class=\"zmdi zmdi-more\"></i>                                        
                            </button></a>
                    </div>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 64
            echo "            <tr>
                <td colspan=\"7\">Y a pas de competitions pour le moment</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "        </tbody>
    </table>
    <tr>
        <td colspan=\"7\"> Vous souhaitez de créer une nouvelle competition ?</td>
    <button class=\"btn btn-outline-secondary\">
        <a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_competition_new");
        echo "\">Nouvelle compétition</a>
    </button>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "competition/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 73,  221 => 68,  212 => 64,  199 => 56,  191 => 51,  185 => 48,  181 => 47,  177 => 46,  173 => 45,  168 => 44,  165 => 42,  160 => 41,  149 => 32,  123 => 7,  113 => 6,  76 => 76,  74 => 6,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}
{% block content %}
<title>Liste de Competitions </title>


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


<title>Liste Des Competition</title>


    <h1>Competitions:</h1>

     <div class=\"table-responsive m-b-40\">
       <table class=\"table table-borderless table-data3\">
        <thead>
            <tr>
                {# <th>Id</th> #}
                <th>Nom De La Competition</th>
                <th>Frais De La Competition</th>
                <th>Date De Competition</th>
                <th>Nombre Maximum D'Inscrit</th>
                <th>Etat De La Competition</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for competition in competitions %}
            <tr>
                {# <td>{{ competition.id }}</td> #}
                <td>{{ competition.nomCompetition }}</td>
                <td>{{ competition.fraisCompetition }}</td>
                <td>{{ competition.dateCompetition ? competition.dateCompetition|date('Y-m-d') : '' }}</td>
                <td>{{ competition.nbrMaxInscrit }}</td>
                <td>{{ competition.etatCompetition }}</td>
                <td>
                    <div align=\"center\" class=\"card-footer\">
                         <a href=\"{{ path('app_competition_edit', {'id': competition.id}) }}\">
                            <button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Modifier\">
                                <i class=\"zmdi zmdi-edit\"></i>                                
                            </button> </a>
                   <br>
                        <a href=\"{{ path('app_competition_show', {'id': competition.id}) }}\">
                            <button class=\"item\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Afficher\">
                                <i class=\"zmdi zmdi-more\"></i>                                        
                            </button></a>
                    </div>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">Y a pas de competitions pour le moment</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <tr>
        <td colspan=\"7\"> Vous souhaitez de créer une nouvelle competition ?</td>
    <button class=\"btn btn-outline-secondary\">
        <a href=\"{{ path('app_competition_new') }}\">Nouvelle compétition</a>
    </button>
{% endblock %}




                                </div>

                                
                                <!-- END WHITE BACKGROUND-->
                            </div>
                        </div>
                        
                        
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
  

", "competition/index.html.twig", "C:\\Users\\Salima\\Desktop\\energyBox\\templates\\competition\\index.html.twig");
    }
}
