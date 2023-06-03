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

/* proj/api.html.twig */
class __TwigTemplate_872bb537479fb284622e4064b9c9fdd0 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proj/api.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proj/api.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "proj/api.html.twig", 1);
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

        echo "About (proj)";
        
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
        echo "    <br>
    <hr>
    <nav>
        <div class=\"routes\">
            <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proj_api");
        echo "\">API (proj)</a>
            <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("proj_about");
        echo "\">About (proj)</a>
        </div>
    </nav>
    <h2>
        Hållbar utveckling (API)
    </h2>
    <p>
        På den här sidan kan du klicka på länkarna för att visa upp innehållet från
        tabellerna i databasen som använts för att rita upp statistiken i
        analysen under \"proj\"-fliken. Tabellerna kan innehålla rader som inte ritats ut
        i diagrammen. Det är meningen.
    </p>
    <ul>
        <li><a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_overcrowd");
        echo "\">Visa upp innehåll från \"Trångboddhet\"</a></li>
        <li><a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_sweden");
        echo "\">Visa statistik för \"Inrikes födda\" (Trångboddhet)</a></li>
        <li><a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_foreign");
        echo "\">Visa statistik för \"Utrikes födda\" (Trångboddhet)</a></li>
        <li><a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_create");
        echo "\">Skapa ny rad i tabellen \"Trångboddhet\"</a></li>
        <li><a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_mortality");
        echo "\">Visa upp innehåll från \"Mödradödlighet\"</a></li>
    </ul>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "proj/api.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 28,  126 => 27,  122 => 26,  118 => 25,  114 => 24,  98 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}About (proj){% endblock %}

{% block body %}
    <br>
    <hr>
    <nav>
        <div class=\"routes\">
            <a href=\"{{ path('proj_api') }}\">API (proj)</a>
            <a href=\"{{ path('proj_about') }}\">About (proj)</a>
        </div>
    </nav>
    <h2>
        Hållbar utveckling (API)
    </h2>
    <p>
        På den här sidan kan du klicka på länkarna för att visa upp innehållet från
        tabellerna i databasen som använts för att rita upp statistiken i
        analysen under \"proj\"-fliken. Tabellerna kan innehålla rader som inte ritats ut
        i diagrammen. Det är meningen.
    </p>
    <ul>
        <li><a href=\"{{ path('api_overcrowd') }}\">Visa upp innehåll från \"Trångboddhet\"</a></li>
        <li><a href=\"{{ path('api_sweden') }}\">Visa statistik för \"Inrikes födda\" (Trångboddhet)</a></li>
        <li><a href=\"{{ path('api_foreign') }}\">Visa statistik för \"Utrikes födda\" (Trångboddhet)</a></li>
        <li><a href=\"{{ path('api_create') }}\">Skapa ny rad i tabellen \"Trångboddhet\"</a></li>
        <li><a href=\"{{ path('api_mortality') }}\">Visa upp innehåll från \"Mödradödlighet\"</a></li>
    </ul>

{% endblock %}


", "proj/api.html.twig", "/home/elstarkov/dbwebb-kurser/mvc/me/report/templates/proj/api.html.twig");
    }
}
