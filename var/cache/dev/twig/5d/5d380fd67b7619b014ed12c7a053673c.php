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

/* cours/add.html.twig */
class __TwigTemplate_7984de133337a599a1bd421bf5dc8d48 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/add.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/add.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "cours/add.html.twig", 1);
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
                                            <strong>Ajouter</strong> Cours
                                        </div>
                                        <div class=\"card-body card-block\">
                                            <form action=\"\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                                                <div class=\"row form-group\">
                                                    <div class=\"col col-md-3\">
                                                        <label for=\"text-input\" class=\" form-control-label\">Nom</label>
                                                    </div>
                                                    <div class=\"col-12 col-md-9\">
                                                        <input type=\"texte\" name=\"nomCours\" placeholder=\"Nom Cours\" class=\"form-control\">
                                                    </div>
                                                </div>
                                                <div class=\"row form-group\">
                                                    <div class=\"col col-md-3\">
                                                        <label for=\"text-input\" class=\" form-control-label\">Prix</label>
                                                    </div>
                                                    <div class=\"col-12 col-md-9\">
                                                        <input type=\"texte\" name=\"prixCours\" placeholder=\"Prix Cours\" class=\"form-control\">
                                                        <small class=\"form-text text-muted\">Veuillez saisir le prix en DT</small>
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
                                            <strong>Affectation</strong> des Cours & Activités
                                        </div>
                                        <div class=\"card-body card-block\">
                                            <form action=\"\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
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
                                                <div class=\"row form-group\">
                                                    <div class=\"col col-md-3\">
                                                        <label for=\"select\" class=\" form-control-label\">Activités</label>
                                                    </div>
                                                    <div class=\"col-12 col-md-9\">
                                                        <select name=\"activites\" id=\"select\" class=\"form-control\">
                                                            <option value=\"0\">Select Difficulté</option>
                                                            <option value=\"1\">Push Ups</option>
                                                            <option value=\"2\">Abs</option>
                                                            <option value=\"3\">Running</option>
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
        return "cours/add.html.twig";
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
                                            <strong>Ajouter</strong> Cours
                                        </div>
                                        <div class=\"card-body card-block\">
                                            <form action=\"\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
                                                <div class=\"row form-group\">
                                                    <div class=\"col col-md-3\">
                                                        <label for=\"text-input\" class=\" form-control-label\">Nom</label>
                                                    </div>
                                                    <div class=\"col-12 col-md-9\">
                                                        <input type=\"texte\" name=\"nomCours\" placeholder=\"Nom Cours\" class=\"form-control\">
                                                    </div>
                                                </div>
                                                <div class=\"row form-group\">
                                                    <div class=\"col col-md-3\">
                                                        <label for=\"text-input\" class=\" form-control-label\">Prix</label>
                                                    </div>
                                                    <div class=\"col-12 col-md-9\">
                                                        <input type=\"texte\" name=\"prixCours\" placeholder=\"Prix Cours\" class=\"form-control\">
                                                        <small class=\"form-text text-muted\">Veuillez saisir le prix en DT</small>
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
                                            <strong>Affectation</strong> des Cours & Activités
                                        </div>
                                        <div class=\"card-body card-block\">
                                            <form action=\"\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
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
                                                <div class=\"row form-group\">
                                                    <div class=\"col col-md-3\">
                                                        <label for=\"select\" class=\" form-control-label\">Activités</label>
                                                    </div>
                                                    <div class=\"col-12 col-md-9\">
                                                        <select name=\"activites\" id=\"select\" class=\"form-control\">
                                                            <option value=\"0\">Select Difficulté</option>
                                                            <option value=\"1\">Push Ups</option>
                                                            <option value=\"2\">Abs</option>
                                                            <option value=\"3\">Running</option>
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
", "cours/add.html.twig", "C:\\Users\\Salima\\Desktop\\energyBox\\templates\\cours\\add.html.twig");
    }
}
