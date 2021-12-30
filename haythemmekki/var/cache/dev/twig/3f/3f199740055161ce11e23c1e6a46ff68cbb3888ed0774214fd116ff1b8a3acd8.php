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

/* formulair/form.html.twig */
class __TwigTemplate_aa36ef8b58b93eef1300b6e75e80e4b6b9e3cfeebdb24cfb19a774f8caf57f2f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formulair/form.html.twig"));

        // line 1
        echo "<form action=\"/form\" method=\"post\">
  <div class=\"form-group\">
    <label for=\"exampleInputEmail1\">Email </label>
    <input type=\"email\" class=\"form-control\"   name=\"email\" id=\"email\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\">
  </div>
  <div class=\"form-group\">
    <label for=\"exampleInputPassword1\">Password</label>
    <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\">
  </div>
  
  <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
</form>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "formulair/form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form action=\"/form\" method=\"post\">
  <div class=\"form-group\">
    <label for=\"exampleInputEmail1\">Email </label>
    <input type=\"email\" class=\"form-control\"   name=\"email\" id=\"email\" aria-describedby=\"emailHelp\" placeholder=\"Enter email\">
  </div>
  <div class=\"form-group\">
    <label for=\"exampleInputPassword1\">Password</label>
    <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\">
  </div>
  
  <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
</form>", "formulair/form.html.twig", "C:\\laragon\\www\\Tp2Sym\\templates\\formulair\\form.html.twig");
    }
}
