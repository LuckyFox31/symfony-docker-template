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

/* @WebProfiler/Icon/config.svg */
class __TwigTemplate_fe670677af0ea4a7878f0aa8dcd39019 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/config.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/config.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" data-icon-name=\"icon-tabler-adjustments\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
    <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
    <circle cx=\"6\" cy=\"10\" r=\"2\"></circle>
    <line x1=\"6\" y1=\"4\" x2=\"6\" y2=\"8\"></line>
    <line x1=\"6\" y1=\"12\" x2=\"6\" y2=\"20\"></line>
    <circle cx=\"12\" cy=\"16\" r=\"2\"></circle>
    <line x1=\"12\" y1=\"4\" x2=\"12\" y2=\"14\"></line>
    <line x1=\"12\" y1=\"18\" x2=\"12\" y2=\"20\"></line>
    <circle cx=\"18\" cy=\"7\" r=\"2\"></circle>
    <line x1=\"18\" y1=\"4\" x2=\"18\" y2=\"5\"></line>
    <line x1=\"18\" y1=\"9\" x2=\"18\" y2=\"20\"></line>
</svg>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Icon/config.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" data-icon-name=\"icon-tabler-adjustments\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
    <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
    <circle cx=\"6\" cy=\"10\" r=\"2\"></circle>
    <line x1=\"6\" y1=\"4\" x2=\"6\" y2=\"8\"></line>
    <line x1=\"6\" y1=\"12\" x2=\"6\" y2=\"20\"></line>
    <circle cx=\"12\" cy=\"16\" r=\"2\"></circle>
    <line x1=\"12\" y1=\"4\" x2=\"12\" y2=\"14\"></line>
    <line x1=\"12\" y1=\"18\" x2=\"12\" y2=\"20\"></line>
    <circle cx=\"18\" cy=\"7\" r=\"2\"></circle>
    <line x1=\"18\" y1=\"4\" x2=\"18\" y2=\"5\"></line>
    <line x1=\"18\" y1=\"9\" x2=\"18\" y2=\"20\"></line>
</svg>
", "@WebProfiler/Icon/config.svg", "/Users/noahgrebet/Desktop/symfony/template/vendor/symfony/web-profiler-bundle/Resources/views/Icon/config.svg");
    }
}
