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

/* card/card.html.twig */
class __TwigTemplate_a8ef618bbabe2f8b09f3ba4e15e550b9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/card.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "card/card.html.twig", 1);
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

        echo "Cards";
        
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
        Välkommen till samlingssidan för \"card\".
        Klicka på en länk för att utforska sidan.
    </h2>
    <br>
    <div class =\"card\">
        <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deck");
        echo "\"> - Deck</a>
        <br>
        <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shuffle");
        echo "\"> - Shuffle</a>
        <br>
        <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("draw");
        echo "\"> - Draw</a>
        <br>
        <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("draw_number", ["num" => 5]);
        echo "\"> - Draw 5 cards</a>
    </div>

    <h2>Klasser och UML</h2>
    <p>
        Här finner du ett UML-diagram med de klasser som kortleken använder.
    </p>
    <p>
        Kortleken består av fyra klasser. Den första klassen som skapades var \"Card\".
        Cards huvudsakliga uppgift är att dra ett nummer mellan 0 och 51.
        Det valda talet motsvarar ett index i kortleken. När kortet valts tas
        det talet bort från arrayen så att det inte kan väljas igen.
    </p>
    <p>
        \"Cardgrahic\" ärver från \"Card\" och motsvarar också ett kort i kortleken men
        har som huvudsaklig uppgift att rita ut kortet. Klassen använder metoder från
        Card men har också sina egna metoder för att sortera efter färger och sort.
    </p>
    <p>
        Vad gäller \"DeckOfCards\" och \"CardHand\" så har bedömningen gjorts att detta är
        kompositionsrelaterade klasser till Card/CardGraphic. Både en kortlek och en
        korthand behöver kort för att kunna existera och har således en starkt beroende
        koppling till kort-klasserna. DeckOfCards består av 52 kort och innehåller metoder
        för att blanda kortleken och ta bort dragna kort ur den. CardHand i sin tur håller
        reda på dragna kort.
    </p>

    <h2>UML-diagram</h2>

    <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/cardgame.png"), "html", null, true);
        echo "\" alt=\"uml\">

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "card/card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 48,  112 => 19,  107 => 17,  102 => 15,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Cards{% endblock %}

{% block body %}
    <br>
    <h2>
        Välkommen till samlingssidan för \"card\".
        Klicka på en länk för att utforska sidan.
    </h2>
    <br>
    <div class =\"card\">
        <a href=\"{{ path('deck') }}\"> - Deck</a>
        <br>
        <a href=\"{{ path('shuffle') }}\"> - Shuffle</a>
        <br>
        <a href=\"{{ path('draw') }}\"> - Draw</a>
        <br>
        <a href=\"{{ path('draw_number', {num: 5}) }}\"> - Draw 5 cards</a>
    </div>

    <h2>Klasser och UML</h2>
    <p>
        Här finner du ett UML-diagram med de klasser som kortleken använder.
    </p>
    <p>
        Kortleken består av fyra klasser. Den första klassen som skapades var \"Card\".
        Cards huvudsakliga uppgift är att dra ett nummer mellan 0 och 51.
        Det valda talet motsvarar ett index i kortleken. När kortet valts tas
        det talet bort från arrayen så att det inte kan väljas igen.
    </p>
    <p>
        \"Cardgrahic\" ärver från \"Card\" och motsvarar också ett kort i kortleken men
        har som huvudsaklig uppgift att rita ut kortet. Klassen använder metoder från
        Card men har också sina egna metoder för att sortera efter färger och sort.
    </p>
    <p>
        Vad gäller \"DeckOfCards\" och \"CardHand\" så har bedömningen gjorts att detta är
        kompositionsrelaterade klasser till Card/CardGraphic. Både en kortlek och en
        korthand behöver kort för att kunna existera och har således en starkt beroende
        koppling till kort-klasserna. DeckOfCards består av 52 kort och innehåller metoder
        för att blanda kortleken och ta bort dragna kort ur den. CardHand i sin tur håller
        reda på dragna kort.
    </p>

    <h2>UML-diagram</h2>

    <img src=\"{{ asset('img/cardgame.png') }}\" alt=\"uml\">

{% endblock %}
", "card/card.html.twig", "/home/elstarkov/dbwebb-kurser/mvc/me/report/templates/card/card.html.twig");
    }
}
