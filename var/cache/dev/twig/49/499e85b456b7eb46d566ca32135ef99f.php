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

/* ticket/_form.html.twig */
class __TwigTemplate_cd7516a01096d91965960fd01bd46593 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ticket/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ticket/_form.html.twig"));

        // line 1
        echo "
<div class=\"card-body card-block\">
        ";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
            <div class=\"row form-group\">
                <div class=\"col col-md-3\">
                    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "descriptionTicket", [], "any", false, false, false, 6), 'label', ["label" => "Description:"]);
        echo "
                </div>
                <div class=\"col-12 col-md-9\">
                    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "descriptionTicket", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 10
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "descriptionTicket", [], "any", false, false, false, 10), 'errors'))) {
            // line 11
            echo "                        <small>
                        <div class=\"alert alert-danger\">";
            // line 12
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "descriptionTicket", [], "any", false, false, false, 12), 'errors');
            echo "</div>
                        </small>
                    ";
        }
        // line 15
        echo "                </div>
            </div>
            <div class=\"row form-group\">
                <div class=\"col col-md-3\">
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "competition", [], "any", false, false, false, 19), 'label', ["label" => "Nom de la competition:"]);
        echo "
                </div>
                <div class=\"col-12 col-md-9\">
                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "competition", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 23
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "competition", [], "any", false, false, false, 23), 'errors'))) {
            // line 24
            echo "                        <small>
                        <div class=\"alert alert-danger\">";
            // line 25
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "competition", [], "any", false, false, false, 25), 'errors');
            echo "</div>
                        </small>
                    ";
        }
        // line 28
        echo "                </div>
            </div>
        
            <div align=\"center\" class=\"card-footer\">
                <button class=\"btn btn-outline-secondary\">";
        // line 32
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 32, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        echo "</button>
                <button class=\"btn btn-outline-secondary\"><a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ticket_index");
        echo "\">Retour à la Liste</a></button>
            </div>
        ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_end');
        echo "
    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "ticket/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 35,  111 => 33,  107 => 32,  101 => 28,  95 => 25,  92 => 24,  90 => 23,  86 => 22,  80 => 19,  74 => 15,  68 => 12,  65 => 11,  63 => 10,  59 => 9,  53 => 6,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"card-body card-block\">
        {{ form_start(form,{'attr':{'novalidate':'novalidate'}},{'attr':{'class':'form-horizontal'}}) }}
            <div class=\"row form-group\">
                <div class=\"col col-md-3\">
                    {{ form_label(form.descriptionTicket,\"Description:\") }}
                </div>
                <div class=\"col-12 col-md-9\">
                    {{ form_widget(form.descriptionTicket,{'attr':{'class':'form-control'}})}}
                    {% if form_errors(form.descriptionTicket) is not empty %}
                        <small>
                        <div class=\"alert alert-danger\">{{ form_errors(form.descriptionTicket) }}</div>
                        </small>
                    {% endif %}
                </div>
            </div>
            <div class=\"row form-group\">
                <div class=\"col col-md-3\">
                    {{ form_label(form.competition,\"Nom de la competition:\") }}
                </div>
                <div class=\"col-12 col-md-9\">
                    {{ form_widget(form.competition,{'attr':{'class':'form-control'}})}}
                    {% if form_errors(form.competition) is not empty %}
                        <small>
                        <div class=\"alert alert-danger\">{{ form_errors(form.competition) }}</div>
                        </small>
                    {% endif %}
                </div>
            </div>
        
            <div align=\"center\" class=\"card-footer\">
                <button class=\"btn btn-outline-secondary\">{{ button_label|default('Enregistrer') }}</button>
                <button class=\"btn btn-outline-secondary\"><a href=\"{{ path('app_ticket_index') }}\">Retour à la Liste</a></button>
            </div>
        {{ form_end(form) }}
    </div>
", "ticket/_form.html.twig", "C:\\Users\\Salima\\Desktop\\energyBox\\templates\\ticket\\_form.html.twig");
    }
}
