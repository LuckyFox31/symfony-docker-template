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

/* @WebProfiler/Icon/time.svg */
class __TwigTemplate_f8ac171428b323aedca08ec00cad7b0e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/time.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/time.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" data-icon-name=\"icon-tabler-chart-infographic\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
    <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
    <circle cx=\"7\" cy=\"7\" r=\"4\"></circle>
    <path d=\"M7 3v4h4\"></path>
    <line x1=\"9\" y1=\"17\" x2=\"9\" y2=\"21\"></line>
    <line x1=\"17\" y1=\"14\" x2=\"17\" y2=\"21\"></line>
    <line x1=\"13\" y1=\"13\" x2=\"13\" y2=\"21\"></line>
    <line x1=\"21\" y1=\"12\" x2=\"21\" y2=\"21\"></line>
</svg>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Icon/time.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" data-icon-name=\"icon-tabler-chart-infographic\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
    <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
    <circle cx=\"7\" cy=\"7\" r=\"4\"></circle>
    <path d=\"M7 3v4h4\"></path>
    <line x1=\"9\" y1=\"17\" x2=\"9\" y2=\"21\"></line>
    <line x1=\"17\" y1=\"14\" x2=\"17\" y2=\"21\"></line>
    <line x1=\"13\" y1=\"13\" x2=\"13\" y2=\"21\"></line>
    <line x1=\"21\" y1=\"12\" x2=\"21\" y2=\"21\"></line>
</svg>
", "@WebProfiler/Icon/time.svg", "/Users/noahgrebet/Desktop/symfony/template/vendor/symfony/web-profiler-bundle/Resources/views/Icon/time.svg");
    }
}
