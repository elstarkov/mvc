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

/* api/api.html.twig */
class __TwigTemplate_794e5f2a365e5045406d58c753001274 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "api/api.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "api/api.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "api/api.html.twig", 1);
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
        Välkommen till samlingssidan för JSON API.
    </h2>
    <p>
        Sidorna visar upp innehåll i JSON API-format.
        Testa att klicka på \"Quote\" för att få dagens datum
        och ett djupt citat. Om du hellre vill dra ett kort från kortleken
        kan du klicka på någon av knapparna med \"Draw\". Om du vill återställa
        kortleken, välj \"shuffle\".
    </p>
    <br>
    <div class =\"card\">
        <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quote");
        echo "\"> - Quote API</a>
        <br>
        <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("a_deck");
        echo "\"> - Deck API</a>
        <br>
        <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_shuffle");
        echo "\"> - Shuffle API</a>
        <br>
        <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_game");
        echo "\"> - Game API</a>
        <br>
        <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_books");
        echo "\"> - Books API</a>
        <br>
        <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("api_book_isbn", ["isbn" => "1900"]);
        echo "\"> - Book with ISBN '1900'</a>
        <br>
        <form method=\"post\" action=\"\">
            <p>
                <input type=\"submit\" name=\"draw\" value=\"Draw 1 card\"
                    onClick=\"this.form.action='";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("a_draw");
        echo "';\"
                >
            </p>
        </form>
        <form method=\"post\" action=\"\">
            <p>
                <input type=\"submit\" value=\"Draw 5 cards\"
                    onClick=\"this.form.action='";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("a_draw_number", ["num" => 5]);
        echo "';\"
                >
            </p>
        </form>
        <br>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "api/api.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 41,  136 => 34,  128 => 29,  123 => 27,  118 => 25,  113 => 23,  108 => 21,  103 => 19,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Cards{% endblock %}

{% block body %}
    <br>
    <h2>
        Välkommen till samlingssidan för JSON API.
    </h2>
    <p>
        Sidorna visar upp innehåll i JSON API-format.
        Testa att klicka på \"Quote\" för att få dagens datum
        och ett djupt citat. Om du hellre vill dra ett kort från kortleken
        kan du klicka på någon av knapparna med \"Draw\". Om du vill återställa
        kortleken, välj \"shuffle\".
    </p>
    <br>
    <div class =\"card\">
        <a href=\"{{ path('quote') }}\"> - Quote API</a>
        <br>
        <a href=\"{{ path('a_deck') }}\"> - Deck API</a>
        <br>
        <a href=\"{{ path('api_shuffle') }}\"> - Shuffle API</a>
        <br>
        <a href=\"{{ path('api_game') }}\"> - Game API</a>
        <br>
        <a href=\"{{ path('api_books') }}\"> - Books API</a>
        <br>
        <a href=\"{{ path('api_book_isbn', {isbn: '1900'}) }}\"> - Book with ISBN '1900'</a>
        <br>
        <form method=\"post\" action=\"\">
            <p>
                <input type=\"submit\" name=\"draw\" value=\"Draw 1 card\"
                    onClick=\"this.form.action='{{ path('a_draw') }}';\"
                >
            </p>
        </form>
        <form method=\"post\" action=\"\">
            <p>
                <input type=\"submit\" value=\"Draw 5 cards\"
                    onClick=\"this.form.action='{{ path('a_draw_number', {num: 5}) }}';\"
                >
            </p>
        </form>
        <br>
    </div>
{% endblock %}", "api/api.html.twig", "/home/elstarkov/dbwebb-kurser/mvc/me/report/templates/api/api.html.twig");
    }
}
