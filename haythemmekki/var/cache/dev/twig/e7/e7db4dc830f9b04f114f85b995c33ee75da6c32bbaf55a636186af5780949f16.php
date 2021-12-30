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

/* lucky/number.html.twig */
class __TwigTemplate_1d0370516cf2120f8afa8ae8baf6f218f6f4c30d3eff2e00299e99b6469e1b92 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "lucky/number.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Lucky Number
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<style>
\t\t.example-wrapper {
\t\t\tmargin: 1em auto;
\t\t\tmax-width: 800px;
\t\t\twidth: 255%;
\t\t\tfont: 18px / 1.5 sans-serif;
\t\t\tcolor:navy;
\t\t}
\t\t.example-wrapper h1 {
\t\t\tbackground: #F5F9F5;
\t\t\tpadding: 2px 6px;
\t\t\t
\t\t}
\t\t

\t</style>

\t<div class=\"example-wrapper\">
\t\t<form action=\"/\" method=\"post\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<label>Email:</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td><input name=\"email\" type=\"email\" required/></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<label>Password:</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td><input name=\"password\" type=\"password\" required/></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td><input type=\"submit\"  class=\"btn btn-success\" value=\"Submit\"/></td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t</form>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "lucky/number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Lucky Number
{% endblock %}

{% block body %}
\t<style>
\t\t.example-wrapper {
\t\t\tmargin: 1em auto;
\t\t\tmax-width: 800px;
\t\t\twidth: 255%;
\t\t\tfont: 18px / 1.5 sans-serif;
\t\t\tcolor:navy;
\t\t}
\t\t.example-wrapper h1 {
\t\t\tbackground: #F5F9F5;
\t\t\tpadding: 2px 6px;
\t\t\t
\t\t}
\t\t

\t</style>

\t<div class=\"example-wrapper\">
\t\t<form action=\"/\" method=\"post\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<label>Email:</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td><input name=\"email\" type=\"email\" required/></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<label>Password:</label>
\t\t\t\t\t</td>
\t\t\t\t\t<td><input name=\"password\" type=\"password\" required/></td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td><input type=\"submit\"  class=\"btn btn-success\" value=\"Submit\"/></td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t</form>
\t</div>
{% endblock %}
", "lucky/number.html.twig", "C:\\laragon\\www\\SymfonyTlsi\\templates\\lucky\\number.html.twig");
    }
}
