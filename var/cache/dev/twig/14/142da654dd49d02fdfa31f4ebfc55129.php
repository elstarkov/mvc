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

/* game/new.html.twig */
class __TwigTemplate_7c8220e78aac93eee2af9a118594d908 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "game/new.html.twig", 1);
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
    <br>
    <h1>
        Spelet är över!
    </h1>

    <br>
    <h2>
        Bank
    </h2>
    <p>
        ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["bankP"]) || array_key_exists("bankP", $context) ? $context["bankP"] : (function () { throw new RuntimeError('Variable "bankP" does not exist.', 17, $this->source); })()), "html", null, true);
        echo " poäng
    </p>
    <p>
        Bankens hand: ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["bankHand"]) || array_key_exists("bankHand", $context) ? $context["bankHand"] : (function () { throw new RuntimeError('Variable "bankHand" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "
    </p>
    <br>

    <h2>
        Spelare
    </h2>
    <p>
        ";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["playerP"]) || array_key_exists("playerP", $context) ? $context["playerP"] : (function () { throw new RuntimeError('Variable "playerP" does not exist.', 28, $this->source); })()), "html", null, true);
        echo " poäng
    </p>
    <p>
        Spelarens hand: ";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["playerHand"]) || array_key_exists("playerHand", $context) ? $context["playerHand"] : (function () { throw new RuntimeError('Variable "playerHand" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "
    </p>
    <br>

    <hr>
    <br>
    <p>
        Vinnaren är ";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["winner"]) || array_key_exists("winner", $context) ? $context["winner"] : (function () { throw new RuntimeError('Variable "winner" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "! Klicka på knappen för att
        starta ett nytt spel.
    </p>
    <br>
        <form method=\"post\" action=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game_post");
        echo "\">
            <p>
                <input type=\"submit\" name=\"play_now\" value=\"Nytt spel\">
            </p>
        </form>
    <br>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "game/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 42,  134 => 38,  124 => 31,  118 => 28,  107 => 20,  101 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Card game{% endblock %}

{% block body %}
    <br>
    <br>
    <h1>
        Spelet är över!
    </h1>

    <br>
    <h2>
        Bank
    </h2>
    <p>
        {{ bankP }} poäng
    </p>
    <p>
        Bankens hand: {{ bankHand }}
    </p>
    <br>

    <h2>
        Spelare
    </h2>
    <p>
        {{ playerP }} poäng
    </p>
    <p>
        Spelarens hand: {{ playerHand }}
    </p>
    <br>

    <hr>
    <br>
    <p>
        Vinnaren är {{ winner }}! Klicka på knappen för att
        starta ett nytt spel.
    </p>
    <br>
        <form method=\"post\" action=\"{{ path('game_post') }}\">
            <p>
                <input type=\"submit\" name=\"play_now\" value=\"Nytt spel\">
            </p>
        </form>
    <br>
{% endblock %}", "game/new.html.twig", "/home/elstarkov/dbwebb-kurser/mvc/me/report/templates/game/new.html.twig");
    }
}
