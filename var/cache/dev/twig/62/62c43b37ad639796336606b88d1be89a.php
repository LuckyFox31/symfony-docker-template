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

/* @WebProfiler/Icon/form.svg */
class __TwigTemplate_77bbfe5335c3b92415410eaf60a58f1b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/form.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/form.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" data-icon-name=\"icon-tabler-forms\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
    <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
    <path d=\"M12 3a3 3 0 0 0 -3 3v12a3 3 0 0 0 3 3\"></path>
    <path d=\"M6 3a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3\"></path>
    <path d=\"M13 7h7a1 1 0 0 1 1 1v8a1 1 0 0 1 -1 1h-7\"></path>
    <path d=\"M5 7h-1a1 1 0 0 0 -1 1v8a1 1 0 0 0 1 1h1\"></path>
    <path d=\"M17 12h.01\"></path>
    <path d=\"M13 12h.01\"></path>
</svg>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Icon/form.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" data-icon-name=\"icon-tabler-forms\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
    <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
    <path d=\"M12 3a3 3 0 0 0 -3 3v12a3 3 0 0 0 3 3\"></path>
    <path d=\"M6 3a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3\"></path>
    <path d=\"M13 7h7a1 1 0 0 1 1 1v8a1 1 0 0 1 -1 1h-7\"></path>
    <path d=\"M5 7h-1a1 1 0 0 0 -1 1v8a1 1 0 0 0 1 1h1\"></path>
    <path d=\"M17 12h.01\"></path>
    <path d=\"M13 12h.01\"></path>
</svg>
", "@WebProfiler/Icon/form.svg", "/Users/noahgrebet/Desktop/symfony/template/vendor/symfony/web-profiler-bundle/Resources/views/Icon/form.svg");
    }
}
