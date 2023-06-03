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

/* about.html.twig */
class __TwigTemplate_b042bcc7b55bee30af742bfbf38029b6 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "about.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "About";
        
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
        echo "
    <h1>About</h1>

    <div class = \"row\">
        <div class =\"column\">
        <p>Kursen omfattar följande områden:</p>
    <ul>
        <li>
            Programmering i webbmiljö, syntax, semantik, koppling mot databaser,
            datastrukturer och inbyggda funktioner.
        </li>
            <br>
        <li>
            Objektorienterad programmering i PHP med språkkonstruktioner och begrepp. Objektorientering
            som sätt att strukturera och återanvända kod. Enkla designmönster.
        </li>
            <br>
        <li>
            SQL med en databas tillsammans med PHP Data Objects.
        </li>
            <br>
        <li>
            Utveckling av webbapplikationer i ett ramverk där tekniker såsom webbserver (Apache),
            PHP, HTML, CSS, och SQL integreras tillsammans med ett webbaserat ramverk.
        </li>
            <br>
        <li>
            Användning av verktyg och tekniker som lämpar sig för utveckling av
            webbapplikationer, tex UNIX/Linux, installation på extern webbserver, ssh, ftp/sftp,
            databasklienter såsom PHPMyAdmin, MySQL Workbench och kommandoklienter.
        </li>
    </ul>
    </div>

        <div class=\"column\">
            <p>Länkar:</p>
            <ul>
                <li>
                    <a href=\"https://github.com/dbwebb-se/mvc\">Kursrepo</a>
                </li>
                <li>
                    <a href=\"https://github.com/elstarkov\">Personlig github</a>
                </li>
            </ul>
    </div>
</div>

<img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/prog.jpg"), "html", null, true);
        echo "\" alt=\"\">
<br>
<br>
<br>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 54,  88 => 7,  78 => 6,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends \"base.html.twig\" %}

{% block title %}About{% endblock %}

{% block body %}

    <h1>About</h1>

    <div class = \"row\">
        <div class =\"column\">
        <p>Kursen omfattar följande områden:</p>
    <ul>
        <li>
            Programmering i webbmiljö, syntax, semantik, koppling mot databaser,
            datastrukturer och inbyggda funktioner.
        </li>
            <br>
        <li>
            Objektorienterad programmering i PHP med språkkonstruktioner och begrepp. Objektorientering
            som sätt att strukturera och återanvända kod. Enkla designmönster.
        </li>
            <br>
        <li>
            SQL med en databas tillsammans med PHP Data Objects.
        </li>
            <br>
        <li>
            Utveckling av webbapplikationer i ett ramverk där tekniker såsom webbserver (Apache),
            PHP, HTML, CSS, och SQL integreras tillsammans med ett webbaserat ramverk.
        </li>
            <br>
        <li>
            Användning av verktyg och tekniker som lämpar sig för utveckling av
            webbapplikationer, tex UNIX/Linux, installation på extern webbserver, ssh, ftp/sftp,
            databasklienter såsom PHPMyAdmin, MySQL Workbench och kommandoklienter.
        </li>
    </ul>
    </div>

        <div class=\"column\">
            <p>Länkar:</p>
            <ul>
                <li>
                    <a href=\"https://github.com/dbwebb-se/mvc\">Kursrepo</a>
                </li>
                <li>
                    <a href=\"https://github.com/elstarkov\">Personlig github</a>
                </li>
            </ul>
    </div>
</div>

<img src=\"{{ asset('img/prog.jpg') }}\" alt=\"\">
<br>
<br>
<br>

{% endblock %}", "about.html.twig", "/home/elstarkov/dbwebb-kurser/mvc/me/report/templates/about.html.twig");
    }
}
