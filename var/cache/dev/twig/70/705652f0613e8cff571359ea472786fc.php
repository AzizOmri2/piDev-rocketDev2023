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

/* cours/view.html.twig */
class __TwigTemplate_9c542428215fe8b42bd853ccd7b7d241 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/view.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "cours/view.html.twig", 1);
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

        echo "EnergyBox | Planning";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
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
                                    
                                    <!-- USER DATA-->
                                    <div class=\"user-data m-b-30\">
                                        <h3 class=\"title-3 m-b-30\">
                                            <i class=\"fas fa-table\"></i>Gestion Cours</h3>
                                        <div class=\"filters m-b-45\">
                                            <div class=\"rs-select2--dark rs-select2--md m-r-10 rs-select2--border\">
                                                <select class=\"js-select2\" name=\"property\">
                                                    <option selected=\"selected\">All Properties</option>
                                                    <option value=\"\">Products</option>
                                                    <option value=\"\">Services</option>
                                                </select>
                                                <div class=\"dropDownSelect2\"></div>
                                            </div>
                                            <div class=\"rs-select2--dark rs-select2--sm rs-select2--border\">
                                                <select class=\"js-select2 au-select-dark\" name=\"time\">
                                                    <option selected=\"selected\">All Time</option>
                                                    <option value=\"\">By Month</option>
                                                    <option value=\"\">By Day</option>
                                                </select>
                                                <div class=\"dropDownSelect2\"></div>
                                            </div>
                                        </div>
                                        <div class=\"table-responsive table-data\">
                                            <table class=\"table\">
                                                <thead>
                                                    <tr>
                                                        <td>ID</td>
                                                        <td>Nom</td>
                                                        <td>Prix</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            
                                                        </td>
                                                        <td>
                                                            
                                                        </td>
                                                        <td>

                                                        </td>
                                                        <td>
                                                            <button class=\"btn btn-outline-secondary\">Modify</button>
                                                        </td>
                                                        <td>
                                                            <button class=\"btn btn-outline-secondary\">Delete</button>
                                                        </td>
                                                    </tr>
                                                    
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                        
                                    </div>
                                    <!-- END USER DATA-->
                                
                                </div>
                                <!-- END WHITE BACKGROUND-->
                            </div>
                        </div>
                        
                        
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"copyright\">
                                    <p>Copyright © 2023 Colorlib. All rights reserved. Template by <a href=\"https://colorlib.com\">Colorlib</a>.</p>
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

    public function getTemplateName()
    {
        return "cours/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}EnergyBox | Planning{% endblock %}

{% block body%}
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
                                    
                                    <!-- USER DATA-->
                                    <div class=\"user-data m-b-30\">
                                        <h3 class=\"title-3 m-b-30\">
                                            <i class=\"fas fa-table\"></i>Gestion Cours</h3>
                                        <div class=\"filters m-b-45\">
                                            <div class=\"rs-select2--dark rs-select2--md m-r-10 rs-select2--border\">
                                                <select class=\"js-select2\" name=\"property\">
                                                    <option selected=\"selected\">All Properties</option>
                                                    <option value=\"\">Products</option>
                                                    <option value=\"\">Services</option>
                                                </select>
                                                <div class=\"dropDownSelect2\"></div>
                                            </div>
                                            <div class=\"rs-select2--dark rs-select2--sm rs-select2--border\">
                                                <select class=\"js-select2 au-select-dark\" name=\"time\">
                                                    <option selected=\"selected\">All Time</option>
                                                    <option value=\"\">By Month</option>
                                                    <option value=\"\">By Day</option>
                                                </select>
                                                <div class=\"dropDownSelect2\"></div>
                                            </div>
                                        </div>
                                        <div class=\"table-responsive table-data\">
                                            <table class=\"table\">
                                                <thead>
                                                    <tr>
                                                        <td>ID</td>
                                                        <td>Nom</td>
                                                        <td>Prix</td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            
                                                        </td>
                                                        <td>
                                                            
                                                        </td>
                                                        <td>

                                                        </td>
                                                        <td>
                                                            <button class=\"btn btn-outline-secondary\">Modify</button>
                                                        </td>
                                                        <td>
                                                            <button class=\"btn btn-outline-secondary\">Delete</button>
                                                        </td>
                                                    </tr>
                                                    
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                        
                                    </div>
                                    <!-- END USER DATA-->
                                
                                </div>
                                <!-- END WHITE BACKGROUND-->
                            </div>
                        </div>
                        
                        
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"copyright\">
                                    <p>Copyright © 2023 Colorlib. All rights reserved. Template by <a href=\"https://colorlib.com\">Colorlib</a>.</p>
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
", "cours/view.html.twig", "C:\\Users\\Salima\\Desktop\\energyBox\\templates\\cours\\view.html.twig");
    }
}
