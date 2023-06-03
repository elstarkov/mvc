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

/* game/play.html.twig */
class __TwigTemplate_3da4b713cd2131096c45a348a44e30ba extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/play.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/play.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "game/play.html.twig", 1);
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

        echo "Play Card Game";
        
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
        echo "<h1>Card Game</h1>

<h2>Bank</h2>
<p>Bank: ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["bankP"]) || array_key_exists("bankP", $context) ? $context["bankP"] : (function () { throw new RuntimeError('Variable "bankP" does not exist.', 9, $this->source); })()), "html", null, true);
        echo " poäng</p>
<p>Bankhand: ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["printBank"]) || array_key_exists("printBank", $context) ? $context["printBank"] : (function () { throw new RuntimeError('Variable "printBank" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "</p>
<hr>

<h2>Spelare</h2>
<p>Spelare: ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["playerP"]) || array_key_exists("playerP", $context) ? $context["playerP"] : (function () { throw new RuntimeError('Variable "playerP" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " poäng</p>
<p>Spelarhand: ";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["print"]) || array_key_exists("print", $context) ? $context["print"] : (function () { throw new RuntimeError('Variable "print" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "</p>
<hr>

<form method=\"post\" action=\"\">
    <p>
        <input type=\"submit\" name=\"draw\" value=\"Draw Card\"
        onClick=\"this.form.action='";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("draw_card");
        echo "';\"
        >

        <br>
        ";
        // line 25
        if (((isset($context["remain"]) || array_key_exists("remain", $context) ? $context["remain"] : (function () { throw new RuntimeError('Variable "remain" does not exist.', 25, $this->source); })()) == 52)) {
            // line 26
            echo "            <p></p>
        ";
        } else {
            // line 28
            echo "            <input type=\"submit\" name=\"stay\" value=\"Stay\"
            onClick=\"this.form.action='";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stay");
            echo "';\"
            >
        ";
        }
        // line 32
        echo "    </p>
</form>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "game/play.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 32,  133 => 29,  130 => 28,  126 => 26,  124 => 25,  117 => 21,  108 => 15,  104 => 14,  97 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Play Card Game{% endblock %}

{% block body %}
<h1>Card Game</h1>

<h2>Bank</h2>
<p>Bank: {{ bankP }} poäng</p>
<p>Bankhand: {{ printBank }}</p>
<hr>

<h2>Spelare</h2>
<p>Spelare: {{ playerP }} poäng</p>
<p>Spelarhand: {{ print }}</p>
<hr>

<form method=\"post\" action=\"\">
    <p>
        <input type=\"submit\" name=\"draw\" value=\"Draw Card\"
        onClick=\"this.form.action='{{ path('draw_card') }}';\"
        >

        <br>
        {% if remain == 52 %}
            <p></p>
        {% else %}
            <input type=\"submit\" name=\"stay\" value=\"Stay\"
            onClick=\"this.form.action='{{ path('stay') }}';\"
            >
        {% endif %}
    </p>
</form>

{% endblock %}", "game/play.html.twig", "/home/elstarkov/dbwebb-kurser/mvc/me/report/templates/game/play.html.twig");
    }
}
