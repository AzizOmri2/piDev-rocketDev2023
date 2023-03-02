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

/* ticket/myPDFticket.html.twig */
class __TwigTemplate_01b042d7e16e85424d9940051384a238 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ticket/myPDFticket.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ticket/myPDFticket.html.twig"));

        // line 1
        echo "<head>
    <style>
        /**
            Set the margins of the page to 0, so the footer and the header
            can be of the full height and width !
         **/
        @page {
            margin: 0cm 0cm;
        }
        /** Define now the real margins of every page in the PDF **/
        body {
            margin-top: 3.5cm;
            margin-left: 1cm;
            margin-right: 1cm;
            margin-bottom: 2cm;
        }
        /** Define the header rules **/
        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 3cm;
        }
        /** Define the footer rules **/
        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
        }
    </style>
</head>
<body>
<!-- Define header and footer blocks before your content -->
<header>
    <div class=\"intro_price\" style=\"color: purple;margin-left: 10px;margin-top: 10px\"><b>EnergyBox</b></div>
    <div style=\"font-size: 15px;margin-left: 10px\">  Adresse : Esprit Technopole Ghazela Ariana</div>
    <div style=\"font-size: 15px;margin-left: 10px\">  Numéro : +216 xx xxx xxx</div>
    <div style=\"font-size: 15px;margin-left: 10px\">  E-mail : EnergyBox@gmail.com</div>

    ";
        // line 45
        echo "</header>

<footer>
</footer>
";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 50
        echo "
            <section class=\"services-area pt-100 pb-150 section-bg\" data-background=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontOffice/img/gallery/section_bg01.png"), "html", null, true);
        echo "\" style=\"background-image: url(&quot;assets/img/gallery/section_bg01.png&quot;);\">            
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"cat-cap\">
                            <div class=\"about-caption\">
                                <center>
                                <div class=\"section-tittle section-tittle3 mb-35\">
                                    <h1><span>Détail de votre ticket</span></h1>
                                    <div class=\"mb-65 pera-bottom\">
                                        <b>Ticket de Competition:</b> <p>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 60, $this->source); })()), "competition", [], "any", false, false, false, 60), "nomCompetition", [], "any", false, false, false, 60), "html", null, true);
        echo "</p>
                                        <b>Description de la ticket:</b> <p>";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 61, $this->source); })()), "descriptionTicket", [], "any", false, false, false, 61), "html", null, true);
        echo "</p>
                                    </div>
                                
        <div style=\"margin-left: 450px;font-size: 15px\" align=\"center\"></div>
        <br>
        <div style=\"margin-left: 550px;font-size: 15px\"> Le : ";
        // line 66
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "m/d/Y"), "html", null, true);
        echo "  </div>
<img src=\"";
        // line 67
        echo "frontOffice/img/logo/LogoGymWhite.png";
        echo "\" style=\"width: 150px;height: 50px;margin-left: 520px\" alt=\"\">
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "ticket/myPDFticket.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  144 => 67,  140 => 66,  132 => 61,  128 => 60,  116 => 51,  113 => 50,  94 => 49,  88 => 45,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>
    <style>
        /**
            Set the margins of the page to 0, so the footer and the header
            can be of the full height and width !
         **/
        @page {
            margin: 0cm 0cm;
        }
        /** Define now the real margins of every page in the PDF **/
        body {
            margin-top: 3.5cm;
            margin-left: 1cm;
            margin-right: 1cm;
            margin-bottom: 2cm;
        }
        /** Define the header rules **/
        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 3cm;
        }
        /** Define the footer rules **/
        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
        }
    </style>
</head>
<body>
<!-- Define header and footer blocks before your content -->
<header>
    <div class=\"intro_price\" style=\"color: purple;margin-left: 10px;margin-top: 10px\"><b>EnergyBox</b></div>
    <div style=\"font-size: 15px;margin-left: 10px\">  Adresse : Esprit Technopole Ghazela Ariana</div>
    <div style=\"font-size: 15px;margin-left: 10px\">  Numéro : +216 xx xxx xxx</div>
    <div style=\"font-size: 15px;margin-left: 10px\">  E-mail : EnergyBox@gmail.com</div>

    {# <div><img src=\"{{ ('images/logo esprit.png') }}\" style=\"width: 200px;height: 120px;margin-left: 580px;margin-top: -80px\"></div>
    <hr class=\"cmDEY eufYP cDHZq\" style=\"color: dimgray;width: 750px;\"> #}
</header>

<footer>
</footer>
{% block body %}

            <section class=\"services-area pt-100 pb-150 section-bg\" data-background=\"{{ asset('frontOffice/img/gallery/section_bg01.png')}}\" style=\"background-image: url(&quot;assets/img/gallery/section_bg01.png&quot;);\">            
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"cat-cap\">
                            <div class=\"about-caption\">
                                <center>
                                <div class=\"section-tittle section-tittle3 mb-35\">
                                    <h1><span>Détail de votre ticket</span></h1>
                                    <div class=\"mb-65 pera-bottom\">
                                        <b>Ticket de Competition:</b> <p>{{ ticket.competition.nomCompetition }}</p>
                                        <b>Description de la ticket:</b> <p>{{ ticket.descriptionTicket }}</p>
                                    </div>
                                
        <div style=\"margin-left: 450px;font-size: 15px\" align=\"center\"></div>
        <br>
        <div style=\"margin-left: 550px;font-size: 15px\"> Le : {{ \"now\"|date(\"m/d/Y\")}}  </div>
<img src=\"{{ ('frontOffice/img/logo/LogoGymWhite.png') }}\" style=\"width: 150px;height: 50px;margin-left: 520px\" alt=\"\">
</div>
{% endblock %}", "ticket/myPDFticket.html.twig", "C:\\Users\\Salima\\Desktop\\energyBox\\templates\\ticket\\myPDFticket.html.twig");
    }
}
