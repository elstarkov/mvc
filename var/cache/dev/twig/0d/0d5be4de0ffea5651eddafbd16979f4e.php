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

/* proj/create.html.twig */
class __TwigTemplate_d23812267acfbca0336e2049c5e5dad7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proj/create.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proj/create.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "proj/create.html.twig", 1);
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
    <p>
        Här kan du skapa en ny rad i tabellen \"Trångboddhet\". Det behöver
        inte vara korrekt information. Diagrammet i projektet kommer inte
        att påverkas.
    </p>

    <p class=\"bold\">Fyll i uppgifterna nedan.</p>
    <form method=\"post\" action=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_create_overcrowded");
        echo "\">
        <p class=\"bold\">
            <label for=\"country\">Land:</label>
            <input type=\"text\" id=\"country\" name=\"country\" placeholder=\"Ange land\" required>
        </p>
        <p class=\"bold\">
            <label for=\"category\">Kategori:</label>
            <input type=\"text\" id=\"category\" name=\"category\" placeholder=\"Ange kategori\" required>
        </p>
        <p class=\"bold\">
            <label for=\"amount\">Procent:</label>
            <input type=\"number\" id=\"amount\" name=\"amount\" min=\"1\" max=\"100\" placeholder=\"Fyll i procent\" required>
        </p>
        <br>
        <p>
            <input type=\"submit\" value=\"Skapa\">
        </p>
    </form>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "proj/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 21,  98 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
    <p>
        Här kan du skapa en ny rad i tabellen \"Trångboddhet\". Det behöver
        inte vara korrekt information. Diagrammet i projektet kommer inte
        att påverkas.
    </p>

    <p class=\"bold\">Fyll i uppgifterna nedan.</p>
    <form method=\"post\" action=\"{{ path('api_create_overcrowded') }}\">
        <p class=\"bold\">
            <label for=\"country\">Land:</label>
            <input type=\"text\" id=\"country\" name=\"country\" placeholder=\"Ange land\" required>
        </p>
        <p class=\"bold\">
            <label for=\"category\">Kategori:</label>
            <input type=\"text\" id=\"category\" name=\"category\" placeholder=\"Ange kategori\" required>
        </p>
        <p class=\"bold\">
            <label for=\"amount\">Procent:</label>
            <input type=\"number\" id=\"amount\" name=\"amount\" min=\"1\" max=\"100\" placeholder=\"Fyll i procent\" required>
        </p>
        <br>
        <p>
            <input type=\"submit\" value=\"Skapa\">
        </p>
    </form>

{% endblock %}


", "proj/create.html.twig", "/home/elstarkov/dbwebb-kurser/mvc/me/report/templates/proj/create.html.twig");
    }
}
