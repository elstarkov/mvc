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

/* game/game.html.twig */
class __TwigTemplate_2fbed394e62b9ad60b3abfdc4e46eda7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/game.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/game.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "game/game.html.twig", 1);
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

        echo "Card game";
        
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
    <h2>
        Välkommen till samlingssidan för \"game\".
    </h2>
    <p>
        Här kan du spela kortspelet \"21\".
    </p>
    <p>
        <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doc");
        echo "\"> - Dokumentation</a>
    </p>
    <h3>
        Regler
    </h3>
    <p>
        Spelet går ut på att dra kort från kortleken och hamna så nära 
        eller lika med talet 21 som möjligt. Varje kort är värt sin siffra
        i poäng. Knekt är värd 11 poäng, dam 12 poäng, kung 13 poäng och
        ess är värt 14 eller 1 poäng, det är upp till spelaren att bestämma
        efter behov. Spelaren spelar mot banken och det är spelaren som börjar
        med att dra ett kort. Spelaren kan sedan dra ytterligare ett kort
        eller stanna. Om spelaren stannar är det bankens tur. Banken plockar
        kort tills den stannar eller har över 21. Om banken får över 21 vinner
        spelaren och om spelaren får över 21 vinner banken. Vid lika eller om banken
        har fler poäng än spelaren så vinner banken.
    </p>
    <h3>
        Klicka på knappen för att starta spelet.
    </h3>
    <br>
        <form method=\"post\" action=\"\">
            <p>
                <input type=\"submit\" name=\"play_now\" value=\"Starta spel\">
            </p>
        </form>
    <br>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "game/game.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Card game{% endblock %}

{% block body %}
    <br>
    <h2>
        Välkommen till samlingssidan för \"game\".
    </h2>
    <p>
        Här kan du spela kortspelet \"21\".
    </p>
    <p>
        <a href=\"{{ path('doc') }}\"> - Dokumentation</a>
    </p>
    <h3>
        Regler
    </h3>
    <p>
        Spelet går ut på att dra kort från kortleken och hamna så nära 
        eller lika med talet 21 som möjligt. Varje kort är värt sin siffra
        i poäng. Knekt är värd 11 poäng, dam 12 poäng, kung 13 poäng och
        ess är värt 14 eller 1 poäng, det är upp till spelaren att bestämma
        efter behov. Spelaren spelar mot banken och det är spelaren som börjar
        med att dra ett kort. Spelaren kan sedan dra ytterligare ett kort
        eller stanna. Om spelaren stannar är det bankens tur. Banken plockar
        kort tills den stannar eller har över 21. Om banken får över 21 vinner
        spelaren och om spelaren får över 21 vinner banken. Vid lika eller om banken
        har fler poäng än spelaren så vinner banken.
    </p>
    <h3>
        Klicka på knappen för att starta spelet.
    </h3>
    <br>
        <form method=\"post\" action=\"\">
            <p>
                <input type=\"submit\" name=\"play_now\" value=\"Starta spel\">
            </p>
        </form>
    <br>
{% endblock %}", "game/game.html.twig", "/home/elstarkov/dbwebb-kurser/mvc/me/report/templates/game/game.html.twig");
    }
}
