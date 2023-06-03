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

/* book/show_all.html.twig */
class __TwigTemplate_eecf0b58919387ee8323cd8d3527670b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book/show_all.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book/show_all.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "book/show_all.html.twig", 1);
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

        echo "Bibliotek";
        
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
        echo "
<h2>Översikt</h2>

<p>Här kan du se en översikt av samtliga böcker som finns tillgängliga.</p>

<p>Klicka på en titel för att endast se detaljer om den boken.</p>
<p>Du kan även radera eller ändra detaljer för en bok med hjälp av knapparna.</p>

<br>
    <table>
        <thead>
            <tr>
                <th>Titel</th>
                <th>ISBN</th>
                <th>Författare</th>
                <th>Bild</th>
                <th>Uppdatera</th>
                <th>Radera</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 28
            echo "            <tr>
                <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_id", ["id" => twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 29), "html", null, true);
            echo "</a></td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "isbn", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "author", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                ";
            // line 32
            if ((twig_get_attribute($this->env, $this->source, $context["book"], "image", [], "any", false, false, false, 32) == null)) {
                // line 33
                echo "                    <td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/no_img.jpg"), "html", null, true);
                echo "\" alt=\"bild sakbas\" class=\"tableImg\"/></td>
                ";
            } else {
                // line 35
                echo "                    <td><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . twig_get_attribute($this->env, $this->source, $context["book"], "image", [], "any", false, false, false, 35))), "html", null, true);
                echo "\" alt=\"harry p\" class=\"tableImg\"/></td>
                ";
            }
            // line 37
            echo "                <td>
                    <form action=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_update", ["id" => twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\" method=\"get\">
                        <button type=\"submit\" class=\"button1\">Uppdatera</button>
                    </form>
                </td>
                <td>
                    <form action=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\" method=\"get\">
                        <button type=\"submit\" class=\"button2\">Radera</button>
                    </form>
                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </tbody>
    </table>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "book/show_all.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 49,  157 => 43,  149 => 38,  146 => 37,  140 => 35,  134 => 33,  132 => 32,  128 => 31,  124 => 30,  118 => 29,  115 => 28,  111 => 27,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Bibliotek{% endblock %}

{% block body %}

<h2>Översikt</h2>

<p>Här kan du se en översikt av samtliga böcker som finns tillgängliga.</p>

<p>Klicka på en titel för att endast se detaljer om den boken.</p>
<p>Du kan även radera eller ändra detaljer för en bok med hjälp av knapparna.</p>

<br>
    <table>
        <thead>
            <tr>
                <th>Titel</th>
                <th>ISBN</th>
                <th>Författare</th>
                <th>Bild</th>
                <th>Uppdatera</th>
                <th>Radera</th>
            </tr>
        </thead>
        <tbody>
            {% for book in books %}
            <tr>
                <td><a href=\"{{ path('book_id', {'id': book.id}) }}\">{{ book.title }}</a></td>
                <td>{{ book.isbn }}</td>
                <td>{{ book.author }}</td>
                {% if book.image == null %}
                    <td><img src=\"{{ asset('img/no_img.jpg') }}\" alt=\"bild sakbas\" class=\"tableImg\"/></td>
                {% else %}
                    <td><img src=\"{{ asset('img/' ~ book.image) }}\" alt=\"harry p\" class=\"tableImg\"/></td>
                {% endif %}
                <td>
                    <form action=\"{{ path('book_update', {'id': book.id}) }}\" method=\"get\">
                        <button type=\"submit\" class=\"button1\">Uppdatera</button>
                    </form>
                </td>
                <td>
                    <form action=\"{{ path('book_delete', {'id': book.id}) }}\" method=\"get\">
                        <button type=\"submit\" class=\"button2\">Radera</button>
                    </form>
                </td>
            </tr>
            {% endfor %}
        </tbody>
    </table>

{% endblock %}
", "book/show_all.html.twig", "/home/elstarkov/dbwebb-kurser/mvc/me/report/templates/book/show_all.html.twig");
    }
}
