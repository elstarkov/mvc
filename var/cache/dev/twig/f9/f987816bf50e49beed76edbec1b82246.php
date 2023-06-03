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

/* game/doc.html.twig */
class __TwigTemplate_9369f0769d526f8d8420eff052a22492 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/doc.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/doc.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "game/doc.html.twig", 1);
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

        echo "Game documentation";
        
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
    <br>
    <h2>
        Game documentation
    </h2>

    <p>
        Nedanstående avsnitt är skrivna före implementeringen av koden
        för kortspelet. Texterna bör ses som ett första utkast och planeringen
        kan skilja sig mot det slutgiltiga resultatet.
    </p>

    <h3>
        Flödesschema
    </h3>
    <p>
        En grundläggande översikt för tanken bakom spelets flöde.
    </p>
    <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/flow.png"), "html", null, true);
        echo "\" alt=\"uml\">

    <h3>
        Psuedokod
    </h3>
    <p>
        Det här avsnittet beskriver hur koden för flödet skulle kunna se ut.
        Texten kommer att skrivas på engelska för att stämma bättre överens
        med den riktiga koden.
    </p>

    <h3>
        START
    </h3>
    <p>
        Player draws card from deck.
    </p>
    <p class=\"bold\">
        If total points is equal or greater than 21:
    </p>
    <p>
        Game ends. Bank wins.
    </p>
    <p class=\"bold\">
        Else
    </p>
    <p>
        Continue to next condition ->
    </p>
    <p>
        Player can choose to stop or draw another card from deck.
    </p>
    <p class=\"bold\">
        If player draws another card:
    </p>
    <p>
        Repeat code flow. Check if total points is greater or equal to 21.
    </p>
    <p class=\"bold\">
        Else
    </p>
    <p>
        Bank draws a card.
    </p>
    <p class=\"bold\">
        If total points is equal or greater than 21:
    </p>
    <p>
        Game ends. Player wins.
    </p>
    <p class=\"bold\">
        Else
    </p>
    <p>
        Continue to next condition ->
    </p>
    <p>
        Bank can choose to stop or draw another card from deck.
    </p>
    <p class=\"bold\">
        If bank draws another card:
    </p>
    <p>
        Repeat code flow. Check if total points is greater or equal to 21.
    </p>
    <p class=\"bold\">
        Else
    </p>
    <p>
        Start from beginning -> Player draws card.
    </p>

    <hr>
    <h3>
        Klasser
    </h3>
    <p>
        Här finns en sammanfattning av vilka klasser som kortspelet med stor
        sannolikhet kommer att implementera.
    </p>

    <p class=\"bold\">
        Card
    </p>
    <p>
        Den första klassen är \"Card\". Den här klassen innehåller siffror mellan 0 och 51.
        Dessa siffror motsvarar ett korts index-värde i en kortlek. När ett kort blivit
        draget tas siffran bort för att inte samma kort ska kunna dras på nytt.
    </p>

    <p class=\"bold\">
        CardGrahpic
    </p>
    <p>
        Den här klassen har för avsikt att representera varje enskilt korts utseende.
        Klassen ärver från \"Card\" som renderar ett index-värde som används av \"CardGraphic\"
        för att ge kortet ett utseende.
    </p>

    <p class=\"bold\">
        DeckOfCards
    </p>
    <p>
        \"DeckOfCards\" är namnet på klassen som ansvarar för kortleken. Klassen håller från början
        52 kort som klassen kan blanda, skriva ut eller återställa vid behov. \"DeckOfCards\" används också
        för att hålla koll på hur många kort som finns kvar när ett eller flera kort har dragits.
    </p>

    <p class=\"bold\">
        CardHand
    </p>
    <p>
        \"CardHand\" motsvarar en korthand som sparar spelaren och bankens dragna kort. Den bör få
        en central roll i spelet för att poängräkning ska vara möjligt.
    </p>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "game/doc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 24,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Game documentation{% endblock %}

{% block body %}
    <br>
    <br>
    <h2>
        Game documentation
    </h2>

    <p>
        Nedanstående avsnitt är skrivna före implementeringen av koden
        för kortspelet. Texterna bör ses som ett första utkast och planeringen
        kan skilja sig mot det slutgiltiga resultatet.
    </p>

    <h3>
        Flödesschema
    </h3>
    <p>
        En grundläggande översikt för tanken bakom spelets flöde.
    </p>
    <img src=\"{{ asset('img/flow.png') }}\" alt=\"uml\">

    <h3>
        Psuedokod
    </h3>
    <p>
        Det här avsnittet beskriver hur koden för flödet skulle kunna se ut.
        Texten kommer att skrivas på engelska för att stämma bättre överens
        med den riktiga koden.
    </p>

    <h3>
        START
    </h3>
    <p>
        Player draws card from deck.
    </p>
    <p class=\"bold\">
        If total points is equal or greater than 21:
    </p>
    <p>
        Game ends. Bank wins.
    </p>
    <p class=\"bold\">
        Else
    </p>
    <p>
        Continue to next condition ->
    </p>
    <p>
        Player can choose to stop or draw another card from deck.
    </p>
    <p class=\"bold\">
        If player draws another card:
    </p>
    <p>
        Repeat code flow. Check if total points is greater or equal to 21.
    </p>
    <p class=\"bold\">
        Else
    </p>
    <p>
        Bank draws a card.
    </p>
    <p class=\"bold\">
        If total points is equal or greater than 21:
    </p>
    <p>
        Game ends. Player wins.
    </p>
    <p class=\"bold\">
        Else
    </p>
    <p>
        Continue to next condition ->
    </p>
    <p>
        Bank can choose to stop or draw another card from deck.
    </p>
    <p class=\"bold\">
        If bank draws another card:
    </p>
    <p>
        Repeat code flow. Check if total points is greater or equal to 21.
    </p>
    <p class=\"bold\">
        Else
    </p>
    <p>
        Start from beginning -> Player draws card.
    </p>

    <hr>
    <h3>
        Klasser
    </h3>
    <p>
        Här finns en sammanfattning av vilka klasser som kortspelet med stor
        sannolikhet kommer att implementera.
    </p>

    <p class=\"bold\">
        Card
    </p>
    <p>
        Den första klassen är \"Card\". Den här klassen innehåller siffror mellan 0 och 51.
        Dessa siffror motsvarar ett korts index-värde i en kortlek. När ett kort blivit
        draget tas siffran bort för att inte samma kort ska kunna dras på nytt.
    </p>

    <p class=\"bold\">
        CardGrahpic
    </p>
    <p>
        Den här klassen har för avsikt att representera varje enskilt korts utseende.
        Klassen ärver från \"Card\" som renderar ett index-värde som används av \"CardGraphic\"
        för att ge kortet ett utseende.
    </p>

    <p class=\"bold\">
        DeckOfCards
    </p>
    <p>
        \"DeckOfCards\" är namnet på klassen som ansvarar för kortleken. Klassen håller från början
        52 kort som klassen kan blanda, skriva ut eller återställa vid behov. \"DeckOfCards\" används också
        för att hålla koll på hur många kort som finns kvar när ett eller flera kort har dragits.
    </p>

    <p class=\"bold\">
        CardHand
    </p>
    <p>
        \"CardHand\" motsvarar en korthand som sparar spelaren och bankens dragna kort. Den bör få
        en central roll i spelet för att poängräkning ska vara möjligt.
    </p>

{% endblock %}", "game/doc.html.twig", "/home/elstarkov/dbwebb-kurser/mvc/me/report/templates/game/doc.html.twig");
    }
}
