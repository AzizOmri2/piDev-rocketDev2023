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

/* planning/add.html.twig */
class __TwigTemplate_0cfb710259e124b1ce20cf1dd8de418d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planning/add.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "planning/add.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "planning/add.html.twig", 1);
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
                                    <div class=\"card\">
                                        <div class=\"card-header\">
                                            <strong>Ajouter</strong> Planning
                                        </div>
                                        <div class=\"card-body card-block\">
                                            <form action=\"\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                                                <div class=\"row form-group\">
                                                    <div class=\"col col-md-3\">
                                                        <label for=\"text-input\" class=\" form-control-label\">Date</label>
                                                    </div>
                                                    <div class=\"col-12 col-md-9\">
                                                        <input type=\"date\" name=\"date\" class=\"form-control\">
                                                        <small class=\"form-text text-muted\">Veuillez saisir une date valide</small>
                                                    </div>
                                                </div>
                                                <div class=\"row form-group\">
                                                    <div class=\"col col-md-3\">
                                                        <label for=\"select\" class=\" form-control-label\">Select Courses</label>
                                                    </div>
                                                    <div class=\"col-12 col-md-9\">
                                                        <select name=\"select\" id=\"select\" class=\"form-control\">
                                                            <option value=\"0\">Please select</option>
                                                            <option value=\"1\">Option #1</option>
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"row form-group\">
                                                    <div class=\"col col-md-3\">
                                                        <label for=\"text-input\" class=\" form-control-label\">Description</label>
                                                    </div>
                                                    <div class=\"col-12 col-md-9\">
                                                        <textarea class=\"form-control\"></textarea>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div align=\"center\" class=\"card-footer\">
                                            <button type=\"submit\" class=\"btn btn-primary btn-sm\">
                                                Ajouter
                                            </button>
                                            <button type=\"reset\" class=\"btn btn-danger btn-sm\">
                                                 Annuler
                                            </button>
                                        </div>
                                    </div>
                                    <div class=\"card\">
                                        <div class=\"card-header\">
                                            <strong>Affectation</strong> des Plannings & Cours
                                        </div>
                                        <div class=\"card-body card-block\">
                                            <form action=\"\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                                                <div class=\"row form-group\">
                                                    <div class=\"col col-md-3\">
                                                        <label for=\"select\" class=\" form-control-label\">Plannings</label>
                                                    </div>
                                                    <div class=\"col-12 col-md-9\">
                                                        <select name=\"plannings\" id=\"select\" class=\"form-control\">
                                                            <option value=\"0\">Select Planning</option>
                                                            <option value=\"1\">Lundi</option>
                                                            <option value=\"2\">Mardi</option>
                                                            <option value=\"3\">Mercredi</option>
                                                            <option value=\"4\">Jeudi</option>
                                                            <option value=\"5\">Vendredi</option>
                                                            <option value=\"6\">Samedi</option>
                                                            <option value=\"7\">Dimanche</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"row form-group\">
                                                    <div class=\"col col-md-3\">
                                                        <label for=\"select\" class=\" form-control-label\">Cours</label>
                                                    </div>
                                                    <div class=\"col-12 col-md-9\">
                                                        <select name=\"cours\" id=\"select\" class=\"form-control\">
                                                            <option value=\"0\">Select Cours</option>
                                                            <option value=\"1\">Aerobique</option>
                                                            <option value=\"2\">CrossFit</option>
                                                            <option value=\"3\">Musculation</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                            </form>
                                        </div>
                                        <div align=\"center\" class=\"card-footer\">
                                            <button type=\"submit\" class=\"btn btn-primary btn-sm\">
                                                Affecter
                                            </button>
                                            <button type=\"reset\" class=\"btn btn-danger btn-sm\">
                                                 Annuler
                                            </button>
                                        </div>
                                    </div>
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
        return "planning/add.html.twig";
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
                                    <div class=\"card\">
                                        <div class=\"card-header\">
                                            <strong>Ajouter</strong> Planning
                                        </div>
                                        <div class=\"card-body card-block\">
                                            <form action=\"\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                                                <div class=\"row form-group\">
                                                    <div class=\"col col-md-3\">
                                                        <label for=\"text-input\" class=\" form-control-label\">Date</label>
                                                    </div>
                                                    <div class=\"col-12 col-md-9\">
                                                        <input type=\"date\" name=\"date\" class=\"form-control\">
                                                        <small class=\"form-text text-muted\">Veuillez saisir une date valide</small>
                                                    </div>
                                                </div>
                                                <div class=\"row form-group\">
                                                    <div class=\"col col-md-3\">
                                                        <label for=\"select\" class=\" form-control-label\">Select Courses</label>
                                                    </div>
                                                    <div class=\"col-12 col-md-9\">
                                                        <select name=\"select\" id=\"select\" class=\"form-control\">
                                                            <option value=\"0\">Please select</option>
                                                            <option value=\"1\">Option #1</option>
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"row form-group\">
                                                    <div class=\"col col-md-3\">
                                                        <label for=\"text-input\" class=\" form-control-label\">Description</label>
                                                    </div>
                                                    <div class=\"col-12 col-md-9\">
                                                        <textarea class=\"form-control\"></textarea>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div align=\"center\" class=\"card-footer\">
                                            <button type=\"submit\" class=\"btn btn-primary btn-sm\">
                                                Ajouter
                                            </button>
                                            <button type=\"reset\" class=\"btn btn-danger btn-sm\">
                                                 Annuler
                                            </button>
                                        </div>
                                    </div>
                                    <div class=\"card\">
                                        <div class=\"card-header\">
                                            <strong>Affectation</strong> des Plannings & Cours
                                        </div>
                                        <div class=\"card-body card-block\">
                                            <form action=\"\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                                                <div class=\"row form-group\">
                                                    <div class=\"col col-md-3\">
                                                        <label for=\"select\" class=\" form-control-label\">Plannings</label>
                                                    </div>
                                                    <div class=\"col-12 col-md-9\">
                                                        <select name=\"plannings\" id=\"select\" class=\"form-control\">
                                                            <option value=\"0\">Select Planning</option>
                                                            <option value=\"1\">Lundi</option>
                                                            <option value=\"2\">Mardi</option>
                                                            <option value=\"3\">Mercredi</option>
                                                            <option value=\"4\">Jeudi</option>
                                                            <option value=\"5\">Vendredi</option>
                                                            <option value=\"6\">Samedi</option>
                                                            <option value=\"7\">Dimanche</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=\"row form-group\">
                                                    <div class=\"col col-md-3\">
                                                        <label for=\"select\" class=\" form-control-label\">Cours</label>
                                                    </div>
                                                    <div class=\"col-12 col-md-9\">
                                                        <select name=\"cours\" id=\"select\" class=\"form-control\">
                                                            <option value=\"0\">Select Cours</option>
                                                            <option value=\"1\">Aerobique</option>
                                                            <option value=\"2\">CrossFit</option>
                                                            <option value=\"3\">Musculation</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                            </form>
                                        </div>
                                        <div align=\"center\" class=\"card-footer\">
                                            <button type=\"submit\" class=\"btn btn-primary btn-sm\">
                                                Affecter
                                            </button>
                                            <button type=\"reset\" class=\"btn btn-danger btn-sm\">
                                                 Annuler
                                            </button>
                                        </div>
                                    </div>
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
", "planning/add.html.twig", "C:\\Users\\Salima\\Desktop\\energyBox\\templates\\planning\\add.html.twig");
    }
}
