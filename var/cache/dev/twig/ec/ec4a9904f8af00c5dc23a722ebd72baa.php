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

/* proj/about.html.twig */
class __TwigTemplate_f4d3add89c3fa16461346cda343eec7c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proj/about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proj/about.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "proj/about.html.twig", 1);
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
        echo "<br>
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
    Hållbar utveckling (About)
</h2>
    <p>
        Fliken \"proj\" är slutexamination för första läsåret på Webbprogrammering, distans, 120hp
        på BTH. Projektet består av två informativa småanalyser som visar upp statistik för
        två olika delmål inom FNs Agenda 2030(globala mål för \"Hållbar utveckling). Ämnen
        som redovisas tillhör mål nummer 3, \"God hälsa och välbefinnande\" samt mål nummer
        elva, \"Hållbara städer och samhällen\". Statistiken är främst hämtad från SCB men
        citat och fakta från andra källor förekommer också. Samtliga finns refererade
        med länkar där de används. Ytterligare information finns angiven i inledningen
        under fliken \"Project\"(/proj).
    </p>
<h3>
    Teknik
</h3>
    <p>
        Hela webbplatsen är skapad med ramverket Symfony och använder objektorienterad PHP. För
        att lagra statistik i tabeller används med fördel någon typ av databas. För att slippa
        involvera och skriva SQL från grunden har vi fått lära oss att använda ORM och Doctrine.
        Det är program som kort sagt gör det möjligt att skapa, manipulera och skriva ut innehåll
        från en databas trots att, i det här fallet, endast språket PHP används. Detta sparar tid
        och som användare behöver man inte ha stor kännskap med databas-språket SQL. Med hjälp
        av Doctrine kan man sedan lägga in sina tabeller och kolumner. Därefter skapas varje tabell
        som en klass med tillhörande autogenererade metoder. Dessa gör det möjligt att skapa,
        radera, uppdatera och hämta information från databasen.
    </p>
    <p>
        För att rita ut diagrammen har en modul som heter \"Chart.js\" används. Modulen
        är alltså egentligen anpassad för JavaScript men finns även i en version som
        går att använda i Symfony. Likt ORM/Doctrine är fördelen även här att man inte
        behöver kunna något annat språk än PHP. Modulen låter oss använda PHP för att sätta
        färger, form och typ för diagrammen.
    </p>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "proj/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
    Hållbar utveckling (About)
</h2>
    <p>
        Fliken \"proj\" är slutexamination för första läsåret på Webbprogrammering, distans, 120hp
        på BTH. Projektet består av två informativa småanalyser som visar upp statistik för
        två olika delmål inom FNs Agenda 2030(globala mål för \"Hållbar utveckling). Ämnen
        som redovisas tillhör mål nummer 3, \"God hälsa och välbefinnande\" samt mål nummer
        elva, \"Hållbara städer och samhällen\". Statistiken är främst hämtad från SCB men
        citat och fakta från andra källor förekommer också. Samtliga finns refererade
        med länkar där de används. Ytterligare information finns angiven i inledningen
        under fliken \"Project\"(/proj).
    </p>
<h3>
    Teknik
</h3>
    <p>
        Hela webbplatsen är skapad med ramverket Symfony och använder objektorienterad PHP. För
        att lagra statistik i tabeller används med fördel någon typ av databas. För att slippa
        involvera och skriva SQL från grunden har vi fått lära oss att använda ORM och Doctrine.
        Det är program som kort sagt gör det möjligt att skapa, manipulera och skriva ut innehåll
        från en databas trots att, i det här fallet, endast språket PHP används. Detta sparar tid
        och som användare behöver man inte ha stor kännskap med databas-språket SQL. Med hjälp
        av Doctrine kan man sedan lägga in sina tabeller och kolumner. Därefter skapas varje tabell
        som en klass med tillhörande autogenererade metoder. Dessa gör det möjligt att skapa,
        radera, uppdatera och hämta information från databasen.
    </p>
    <p>
        För att rita ut diagrammen har en modul som heter \"Chart.js\" används. Modulen
        är alltså egentligen anpassad för JavaScript men finns även i en version som
        går att använda i Symfony. Likt ORM/Doctrine är fördelen även här att man inte
        behöver kunna något annat språk än PHP. Modulen låter oss använda PHP för att sätta
        färger, form och typ för diagrammen.
    </p>

{% endblock %}


", "proj/about.html.twig", "/home/elstarkov/dbwebb-kurser/mvc/me/report/templates/proj/about.html.twig");
    }
}
