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

/* @Debug/Profiler/icon.svg */
class __TwigTemplate_695ccba56917b7238df9d5b5bdee2104 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Debug/Profiler/icon.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Debug/Profiler/icon.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" data-icon-name=\"icon-tabler-viewfinder\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
    <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
    <circle cx=\"12\" cy=\"12\" r=\"9\"></circle>
    <line x1=\"12\" y1=\"3\" x2=\"12\" y2=\"7\"></line>
    <line x1=\"12\" y1=\"21\" x2=\"12\" y2=\"18\"></line>
    <line x1=\"3\" y1=\"12\" x2=\"7\" y2=\"12\"></line>
    <line x1=\"21\" y1=\"12\" x2=\"18\" y2=\"12\"></line>
    <line x1=\"12\" y1=\"12\" x2=\"12\" y2=\"12.01\"></line>
</svg>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Debug/Profiler/icon.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" data-icon-name=\"icon-tabler-viewfinder\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
    <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
    <circle cx=\"12\" cy=\"12\" r=\"9\"></circle>
    <line x1=\"12\" y1=\"3\" x2=\"12\" y2=\"7\"></line>
    <line x1=\"12\" y1=\"21\" x2=\"12\" y2=\"18\"></line>
    <line x1=\"3\" y1=\"12\" x2=\"7\" y2=\"12\"></line>
    <line x1=\"21\" y1=\"12\" x2=\"18\" y2=\"12\"></line>
    <line x1=\"12\" y1=\"12\" x2=\"12\" y2=\"12.01\"></line>
</svg>
", "@Debug/Profiler/icon.svg", "/Users/noahgrebet/Desktop/symfony/template/vendor/symfony/debug-bundle/Resources/views/Profiler/icon.svg");
    }
}
