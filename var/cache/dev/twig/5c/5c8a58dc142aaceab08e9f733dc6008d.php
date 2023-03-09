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

/* competition/_form.html.twig */
class __TwigTemplate_07353d41fc03b3c92c5e634f29529433 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competition/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competition/_form.html.twig"));

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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "nomCompetition", [], "any", false, false, false, 6), 'label', ["label" => "Nom:"]);
        echo "
                </div>
                <div class=\"col-12 col-md-9\">
                    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "nomCompetition", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 10
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "nomCompetition", [], "any", false, false, false, 10), 'errors'))) {
            // line 11
            echo "                        <small>
                        <div class=\"alert alert-danger\">";
            // line 12
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "nomCompetition", [], "any", false, false, false, 12), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "fraisCompetition", [], "any", false, false, false, 19), 'label', ["label" => "Frais :"]);
        echo "
                </div>
                <div class=\"col-12 col-md-9\">
                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "fraisCompetition", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 23
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "fraisCompetition", [], "any", false, false, false, 23), 'errors'))) {
            // line 24
            echo "                        <small>
                        <div class=\"alert alert-danger\">";
            // line 25
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "fraisCompetition", [], "any", false, false, false, 25), 'errors');
            echo "</div>
                        </small>
                    ";
        }
        // line 28
        echo "                </div>
            </div>
            <div class=\"row form-group\">
                <div class=\"col col-md-3\">
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "dateCompetition", [], "any", false, false, false, 32), 'label', ["label" => "Date:"]);
        echo "
                </div>
                <div class=\"col-12 col-md-9\">
                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "dateCompetition", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 36
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "dateCompetition", [], "any", false, false, false, 36), 'errors'))) {
            // line 37
            echo "                        <small>
                        <div class=\"alert alert-danger\">";
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "dateCompetition", [], "any", false, false, false, 38), 'errors');
            echo "</div>
                        </small>
                    ";
        }
        // line 41
        echo "                </div>
            </div>
            <div class=\"row form-group\">
                <div class=\"col col-md-3\">
                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "nbrMaxInscrit", [], "any", false, false, false, 45), 'label', ["label" => "Maximum des Participants:"]);
        echo "
                </div>
                <div class=\"col-12 col-md-9\">
                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "nbrMaxInscrit", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 49
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "nbrMaxInscrit", [], "any", false, false, false, 49), 'errors'))) {
            // line 50
            echo "                        <small>
                        <div class=\"alert alert-danger\">";
            // line 51
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "nbrMaxInscrit", [], "any", false, false, false, 51), 'errors');
            echo "</div>
                        </small>
                    ";
        }
        // line 54
        echo "                </div>
            <div class=\"row form-group\">
                <div class=\"col col-md-3\">
                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "etatCompetition", [], "any", false, false, false, 57), 'label', ["label" => "Son Etat:"]);
        echo "
                </div>
                <div class=\"col-12 col-md-9\">
                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "etatCompetition", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 61
        if ( !twig_test_empty($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "etatCompetition", [], "any", false, false, false, 61), 'errors'))) {
            // line 62
            echo "                        <small>
                        <div class=\"alert alert-danger\">";
            // line 63
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "etatCompetition", [], "any", false, false, false, 63), 'errors');
            echo "</div>
                        </small>
                    ";
        }
        // line 66
        echo "                </div>
            <div class=\"float-right\">
                <div align=\"center\" class=\"card-footer\">
                
                    <button class=\"btn btn-outline-secondary\">";
        // line 70
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 70, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
                    <button class=\"btn btn-outline-secondary\"><a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_competition_index");
        echo "\">Go To List</a></button>
                </div>
            </div>
        ";
        // line 74
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), 'form_end');
        echo "
    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "competition/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 74,  191 => 71,  187 => 70,  181 => 66,  175 => 63,  172 => 62,  170 => 61,  166 => 60,  160 => 57,  155 => 54,  149 => 51,  146 => 50,  144 => 49,  140 => 48,  134 => 45,  128 => 41,  122 => 38,  119 => 37,  117 => 36,  113 => 35,  107 => 32,  101 => 28,  95 => 25,  92 => 24,  90 => 23,  86 => 22,  80 => 19,  74 => 15,  68 => 12,  65 => 11,  63 => 10,  59 => 9,  53 => 6,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"card-body card-block\">
        {{ form_start(form,{'attr':{'novalidate':'novalidate'}},{'attr':{'class':'form-horizontal'}}) }}
            <div class=\"row form-group\">
                <div class=\"col col-md-3\">
                    {{ form_label(form.nomCompetition,\"Nom:\") }}
                </div>
                <div class=\"col-12 col-md-9\">
                    {{ form_widget(form.nomCompetition,{'attr':{'class':'form-control'}})}}
                    {% if form_errors(form.nomCompetition) is not empty %}
                        <small>
                        <div class=\"alert alert-danger\">{{ form_errors(form.nomCompetition) }}</div>
                        </small>
                    {% endif %}
                </div>
            </div>
            <div class=\"row form-group\">
                <div class=\"col col-md-3\">
                    {{ form_label(form.fraisCompetition,\"Frais :\") }}
                </div>
                <div class=\"col-12 col-md-9\">
                    {{ form_widget(form.fraisCompetition,{'attr':{'class':'form-control'}})}}
                    {% if form_errors(form.fraisCompetition) is not empty %}
                        <small>
                        <div class=\"alert alert-danger\">{{ form_errors(form.fraisCompetition) }}</div>
                        </small>
                    {% endif %}
                </div>
            </div>
            <div class=\"row form-group\">
                <div class=\"col col-md-3\">
                    {{ form_label(form.dateCompetition,\"Date:\") }}
                </div>
                <div class=\"col-12 col-md-9\">
                    {{ form_widget(form.dateCompetition,{'attr':{'class':'form-control'}})}}
                    {% if form_errors(form.dateCompetition) is not empty %}
                        <small>
                        <div class=\"alert alert-danger\">{{ form_errors(form.dateCompetition) }}</div>
                        </small>
                    {% endif %}
                </div>
            </div>
            <div class=\"row form-group\">
                <div class=\"col col-md-3\">
                    {{ form_label(form.nbrMaxInscrit,\"Maximum des Participants:\") }}
                </div>
                <div class=\"col-12 col-md-9\">
                    {{ form_widget(form.nbrMaxInscrit,{'attr':{'class':'form-control'}})}}
                    {% if form_errors(form.nbrMaxInscrit) is not empty %}
                        <small>
                        <div class=\"alert alert-danger\">{{ form_errors(form.nbrMaxInscrit) }}</div>
                        </small>
                    {% endif %}
                </div>
            <div class=\"row form-group\">
                <div class=\"col col-md-3\">
                    {{ form_label(form.etatCompetition,\"Son Etat:\") }}
                </div>
                <div class=\"col-12 col-md-9\">
                    {{ form_widget(form.etatCompetition,{'attr':{'class':'form-control'}})}}
                    {% if form_errors(form.etatCompetition) is not empty %}
                        <small>
                        <div class=\"alert alert-danger\">{{ form_errors(form.etatCompetition) }}</div>
                        </small>
                    {% endif %}
                </div>
            <div class=\"float-right\">
                <div align=\"center\" class=\"card-footer\">
                
                    <button class=\"btn btn-outline-secondary\">{{ button_label|default('Save') }}</button>
                    <button class=\"btn btn-outline-secondary\"><a href=\"{{ path('app_competition_index') }}\">Go To List</a></button>
                </div>
            </div>
        {{ form_end(form) }}
    </div>
", "competition/_form.html.twig", "C:\\Users\\Salima\\Desktop\\energyBox\\templates\\competition\\_form.html.twig");
    }
}
