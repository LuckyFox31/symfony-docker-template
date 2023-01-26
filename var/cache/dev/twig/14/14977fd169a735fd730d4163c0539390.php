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

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_9340e2b32bfdf7191f10829248f843db extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/profiler.css.twig");
        echo "
        ";
        // line 6
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <div class=\"container\">
        ";
        // line 12
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/header.html.twig", array(), false);
        echo "

        ";
        // line 14
        $context["source"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->fileExcerpt(twig_get_attribute($this->env, $this->source, (isset($context["file_info"]) || array_key_exists("file_info", $context) ? $context["file_info"] : (function () { throw new RuntimeError('Variable "file_info" does not exist.', 14, $this->source); })()), "pathname", [], "any", false, false, false, 14), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new RuntimeError('Variable "line" does not exist.', 14, $this->source); })()),  -1);
        // line 15
        echo "        <div id=\"content\">
            <div id=\"main\">
                <div id=\"source\">
                    <h1 class=\"source-file-name\">";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 18, $this->source); })()), "html", null, true);
        if ((0 < (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new RuntimeError('Variable "line" does not exist.', 18, $this->source); })()))) {
            echo " <small>line ";
            echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new RuntimeError('Variable "line" does not exist.', 18, $this->source); })()), "html", null, true);
            echo "</small>";
        }
        echo "</h1>

                    <div class=\"source-content\">
                        ";
        // line 21
        if ((null === (isset($context["source"]) || array_key_exists("source", $context) ? $context["source"] : (function () { throw new RuntimeError('Variable "source" does not exist.', 21, $this->source); })()))) {
            // line 22
            echo "                            <p class=\"empty empty-panel\">The file is not readable.</p>
                        ";
        } else {
            // line 24
            echo "                            ";
            echo (isset($context["source"]) || array_key_exists("source", $context) ? $context["source"] : (function () { throw new RuntimeError('Variable "source" does not exist.', 24, $this->source); })());
            echo "
                        ";
        }
        // line 26
        echo "                    </div>
                </div>

                <div id=\"sidebar\">
                    <dl class=\"file-metadata\">
                        <dt>Filepath:</dt>
                        <dd>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["file_info"]) || array_key_exists("file_info", $context) ? $context["file_info"] : (function () { throw new RuntimeError('Variable "file_info" does not exist.', 32, $this->source); })()), "pathname", [], "any", false, false, false, 32), "html", null, true);
        echo "</dd>

                        <dt>Last modified:</dt>
                        <dd>";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["file_info"]) || array_key_exists("file_info", $context) ? $context["file_info"] : (function () { throw new RuntimeError('Variable "file_info" does not exist.', 35, $this->source); })()), "mTime", [], "any", false, false, false, 35)), "html", null, true);
        echo "</dd>

                        <dt>Size:</dt>
                        ";
        // line 38
        $context["file_size_in_kb"] = (twig_get_attribute($this->env, $this->source, (isset($context["file_info"]) || array_key_exists("file_info", $context) ? $context["file_info"] : (function () { throw new RuntimeError('Variable "file_info" does not exist.', 38, $this->source); })()), "size", [], "any", false, false, false, 38) / 1024);
        // line 39
        echo "                        ";
        $context["file_num_lines"] = (twig_length_filter($this->env, twig_split_filter($this->env, (isset($context["source"]) || array_key_exists("source", $context) ? $context["source"] : (function () { throw new RuntimeError('Variable "source" does not exist.', 39, $this->source); })()), "
")) - 1);
        // line 40
        echo "                        <dd>
                            ";
        // line 41
        echo twig_escape_filter($this->env, ((((isset($context["file_size_in_kb"]) || array_key_exists("file_size_in_kb", $context) ? $context["file_size_in_kb"] : (function () { throw new RuntimeError('Variable "file_size_in_kb" does not exist.', 41, $this->source); })()) < 1)) ? ((twig_get_attribute($this->env, $this->source, (isset($context["file_info"]) || array_key_exists("file_info", $context) ? $context["file_info"] : (function () { throw new RuntimeError('Variable "file_info" does not exist.', 41, $this->source); })()), "size", [], "any", false, false, false, 41) . " bytes")) : ((twig_number_format_filter($this->env, (isset($context["file_size_in_kb"]) || array_key_exists("file_size_in_kb", $context) ? $context["file_size_in_kb"] : (function () { throw new RuntimeError('Variable "file_size_in_kb" does not exist.', 41, $this->source); })()), 0) . " KB"))), "html", null, true);
        echo "
                            / ";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["file_num_lines"]) || array_key_exists("file_num_lines", $context) ? $context["file_num_lines"] : (function () { throw new RuntimeError('Variable "file_num_lines" does not exist.', 42, $this->source); })()), "html", null, true);
        echo " lines
                        </dd>
                    </dl>

                    <a class=\"doc-link\" href=\"https://symfony.com/doc/";
        // line 46
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open this file in your IDE?</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.addEventListener('load', function () {
            const selectedLineElement = document.querySelector('.source-content li.selected');
            if (null === selectedLineElement) {
                return;
            }

            const selectedLineYCoordinate = selectedLineElement.getBoundingClientRect().y;
            console.log(selectedLineYCoordinate);
            window.scrollTo({ top: selectedLineYCoordinate - 20, left: 0, behavior: 'smooth' });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 46,  170 => 42,  166 => 41,  163 => 40,  159 => 39,  157 => 38,  151 => 35,  145 => 32,  137 => 26,  131 => 24,  127 => 22,  125 => 21,  114 => 18,  109 => 15,  107 => 14,  102 => 12,  99 => 11,  89 => 10,  76 => 6,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/profiler.css.twig') }}
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
    <div class=\"container\">
        {{ include('@WebProfiler/Profiler/header.html.twig', with_context = false) }}

        {% set source = file_info.pathname|file_excerpt(line, -1) %}
        <div id=\"content\">
            <div id=\"main\">
                <div id=\"source\">
                    <h1 class=\"source-file-name\">{{ file }}{% if 0 < line %} <small>line {{ line }}</small>{% endif %}</h1>

                    <div class=\"source-content\">
                        {% if source is null %}
                            <p class=\"empty empty-panel\">The file is not readable.</p>
                        {% else %}
                            {{ source|raw }}
                        {% endif %}
                    </div>
                </div>

                <div id=\"sidebar\">
                    <dl class=\"file-metadata\">
                        <dt>Filepath:</dt>
                        <dd>{{ file_info.pathname }}</dd>

                        <dt>Last modified:</dt>
                        <dd>{{ file_info.mTime|date }}</dd>

                        <dt>Size:</dt>
                        {% set file_size_in_kb = file_info.size / 1024 %}
                        {% set file_num_lines = source|split(\"\\n\")|length - 1 %}
                        <dd>
                            {{ file_size_in_kb < 1 ? file_info.size ~ ' bytes' : file_size_in_kb|number_format(0) ~ ' KB' }}
                            / {{ file_num_lines }} lines
                        </dd>
                    </dl>

                    <a class=\"doc-link\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open this file in your IDE?</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.addEventListener('load', function () {
            const selectedLineElement = document.querySelector('.source-content li.selected');
            if (null === selectedLineElement) {
                return;
            }

            const selectedLineYCoordinate = selectedLineElement.getBoundingClientRect().y;
            console.log(selectedLineYCoordinate);
            window.scrollTo({ top: selectedLineYCoordinate - 20, left: 0, behavior: 'smooth' });
        });
    </script>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/Users/noahgrebet/Desktop/symfony/template/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/open.html.twig");
    }
}
