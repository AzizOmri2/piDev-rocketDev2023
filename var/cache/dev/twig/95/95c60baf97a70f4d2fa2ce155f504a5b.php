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
class __TwigTemplate_97c088bc819f748829a147748454285e extends Template
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
        // line 70
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

    <table class=\"table table-responsive\" style=\"width: 80%;\">
        <thead>
            <tr>
                <th>Id</th>
                <th>NomCompetition</th>
                <th>FraisCompetition</th>
                <th>DateCompetition</th>
                <th>NbrMaxInscrit</th>
                <th>EtatCompetition</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competitions"]) || array_key_exists("competitions", $context) ? $context["competitions"] : (function () { throw new RuntimeError('Variable "competitions" does not exist.', 40, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["competition"]) {
            // line 41
            echo "            <tr>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competition"], "id", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competition"], "nomCompetition", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competition"], "fraisCompetition", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            ((twig_get_attribute($this->env, $this->source, $context["competition"], "dateCompetition", [], "any", false, false, false, 45)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competition"], "dateCompetition", [], "any", false, false, false, 45), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competition"], "nbrMaxInscrit", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competition"], "etatCompetition", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                <td>
                    <div align=\"center\" class=\"card-footer\">
                        <button class=\"btn btn-outline-secondary\">
                            <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_competition_show", ["id" => twig_get_attribute($this->env, $this->source, $context["competition"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\">show</a>
                        </button>
                        ";
            // line 54
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_competition_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["competition"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\">edit</a>
                        ";
            // line 56
            echo "                    </div>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 60
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competition'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "        </tbody>
    </table>
    <button class=\"btn btn-outline-secondary\">
        <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_competition_new");
        echo "\">Create new</a>
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
        return array (  225 => 67,  220 => 64,  211 => 60,  203 => 56,  198 => 54,  193 => 51,  186 => 47,  182 => 46,  178 => 45,  174 => 44,  170 => 43,  166 => 42,  163 => 41,  158 => 40,  123 => 7,  113 => 6,  76 => 70,  74 => 6,  69 => 3,  59 => 2,  36 => 1,);
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

    <table class=\"table table-responsive\" style=\"width: 80%;\">
        <thead>
            <tr>
                <th>Id</th>
                <th>NomCompetition</th>
                <th>FraisCompetition</th>
                <th>DateCompetition</th>
                <th>NbrMaxInscrit</th>
                <th>EtatCompetition</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for competition in competitions %}
            <tr>
                <td>{{ competition.id }}</td>
                <td>{{ competition.nomCompetition }}</td>
                <td>{{ competition.fraisCompetition }}</td>
                <td>{{ competition.dateCompetition ? competition.dateCompetition|date('Y-m-d') : '' }}</td>
                <td>{{ competition.nbrMaxInscrit }}</td>
                <td>{{ competition.etatCompetition }}</td>
                <td>
                    <div align=\"center\" class=\"card-footer\">
                        <button class=\"btn btn-outline-secondary\">
                            <a href=\"{{ path('app_competition_show', {'id': competition.id}) }}\">show</a>
                        </button>
                        {# <button class=\"btn btn-outline-secondary\"> #}
                        <a href=\"{{ path('app_competition_edit', {'id': competition.id}) }}\">edit</a>
                        {# </button> #}
                    </div>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <button class=\"btn btn-outline-secondary\">
        <a href=\"{{ path('app_competition_new') }}\">Create new</a>
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
