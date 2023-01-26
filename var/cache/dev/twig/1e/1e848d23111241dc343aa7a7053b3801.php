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

/* @WebProfiler/Collector/request.html.twig */
class __TwigTemplate_e92677c9d5c903866951c9ffc00d4132 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/request.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/request.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/request.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_call_macro($macros["_self"], "macro_set_handler", [twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 5, $this->source); })()), "controller", [], "any", false, false, false, 5)], 5, $context, $this->getSourceContext());
        echo "
    ";
        $context["request_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 7
        echo "
    ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 8, $this->source); })()), "redirect", [], "any", false, false, false, 8)) {
            // line 9
            echo "        ";
            ob_start();
            // line 10
            echo "            ";
            echo twig_call_macro($macros["_self"], "macro_set_handler", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 10, $this->source); })()), "redirect", [], "any", false, false, false, 10), "controller", [], "any", false, false, false, 10), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 10, $this->source); })()), "redirect", [], "any", false, false, false, 10), "route", [], "any", false, false, false, 10), ((("GET" != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 10, $this->source); })()), "redirect", [], "any", false, false, false, 10), "method", [], "any", false, false, false, 10))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 10, $this->source); })()), "redirect", [], "any", false, false, false, 10), "method", [], "any", false, false, false, 10)) : (""))], 10, $context, $this->getSourceContext());
            echo "
        ";
            $context["redirect_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 12
            echo "    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 14, $this->source); })()), "forwardtoken", [], "any", false, false, false, 14)) {
            // line 15
            echo "        ";
            $context["forward_profile"] = twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 15, $this->source); })()), "childByToken", [0 => twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 15, $this->source); })()), "forwardtoken", [], "any", false, false, false, 15)], "method", false, false, false, 15);
            // line 16
            echo "        ";
            ob_start();
            // line 17
            echo "            ";
            echo twig_call_macro($macros["_self"], "macro_set_handler", [(((isset($context["forward_profile"]) || array_key_exists("forward_profile", $context) ? $context["forward_profile"] : (function () { throw new RuntimeError('Variable "forward_profile" does not exist.', 17, $this->source); })())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forward_profile"]) || array_key_exists("forward_profile", $context) ? $context["forward_profile"] : (function () { throw new RuntimeError('Variable "forward_profile" does not exist.', 17, $this->source); })()), "collector", [0 => "request"], "method", false, false, false, 17), "controller", [], "any", false, false, false, 17)) : ("n/a"))], 17, $context, $this->getSourceContext());
            echo "
        ";
            $context["forward_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 19
            echo "    ";
        }
        // line 20
        echo "
    ";
        // line 21
        $context["request_status_code_color"] = (((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 21, $this->source); })()), "statuscode", [], "any", false, false, false, 21) >= 400)) ? ("red") : ((((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 21, $this->source); })()), "statuscode", [], "any", false, false, false, 21) >= 300)) ? ("yellow") : ("green"))));
        // line 22
        echo "
    ";
        // line 23
        ob_start();
        // line 24
        echo "        <span class=\"sf-toolbar-status sf-toolbar-status-";
        echo twig_escape_filter($this->env, (isset($context["request_status_code_color"]) || array_key_exists("request_status_code_color", $context) ? $context["request_status_code_color"] : (function () { throw new RuntimeError('Variable "request_status_code_color" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 24, $this->source); })()), "statuscode", [], "any", false, false, false, 24), "html", null, true);
        echo "</span>
        ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 25, $this->source); })()), "route", [], "any", false, false, false, 25)) {
            // line 26
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 26, $this->source); })()), "redirect", [], "any", false, false, false, 26)) {
                echo "<span class=\"sf-toolbar-request-icon\">";
                echo twig_source($this->env, "@WebProfiler/Icon/redirect.svg");
                echo "</span>";
            }
            // line 27
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 27, $this->source); })()), "forwardtoken", [], "any", false, false, false, 27)) {
                echo "<span class=\"sf-toolbar-request-icon\">";
                echo twig_source($this->env, "@WebProfiler/Icon/forward.svg");
                echo "</span>";
            }
            // line 28
            echo "            <span class=\"sf-toolbar-label\">";
            ((("GET" != twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 28, $this->source); })()), "method", [], "any", false, false, false, 28))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 28, $this->source); })()), "method", [], "any", false, false, false, 28), "html", null, true))) : (print ("")));
            echo " @</span>
            <span class=\"sf-toolbar-value sf-toolbar-info-piece-additional\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 29, $this->source); })()), "route", [], "any", false, false, false, 29), "html", null, true);
            echo "</span>
        ";
        }
        // line 31
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 32
        echo "
    ";
        // line 33
        ob_start();
        // line 34
        echo "        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>HTTP status</b>
                <span>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 37, $this->source); })()), "statuscode", [], "any", false, false, false, 37), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 37, $this->source); })()), "statustext", [], "any", false, false, false, 37), "html", null, true);
        echo "</span>
            </div>

            ";
        // line 40
        if (("GET" != twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 40, $this->source); })()), "method", [], "any", false, false, false, 40))) {
            // line 41
            echo "<div class=\"sf-toolbar-info-piece\">
                    <b>Method</b>
                    <span>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 43, $this->source); })()), "method", [], "any", false, false, false, 43), "html", null, true);
            echo "</span>
                </div>";
        }
        // line 46
        echo "
            <div class=\"sf-toolbar-info-piece\">
                <b>Controller</b>
                <span>";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["request_handler"]) || array_key_exists("request_handler", $context) ? $context["request_handler"] : (function () { throw new RuntimeError('Variable "request_handler" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Route name</b>
                <span>";
        // line 54
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "route", [], "any", true, true, false, 54)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "route", [], "any", false, false, false, 54), "n/a")) : ("n/a")), "html", null, true);
        echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Has session</b>
                <span>";
        // line 59
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 59, $this->source); })()), "sessionmetadata", [], "any", false, false, false, 59))) {
            echo "yes";
        } else {
            echo "no";
        }
        echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Stateless Check</b>
                <span>";
        // line 64
        if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 64, $this->source); })()), "statelesscheck", [], "any", false, false, false, 64)) {
            echo "yes";
        } else {
            echo "no";
        }
        echo "</span>
            </div>
        </div>

        ";
        // line 68
        if (array_key_exists("redirect_handler", $context)) {
            // line 69
            echo "<div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>
                        <span class=\"sf-toolbar-redirection-status sf-toolbar-status-yellow\">";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 72, $this->source); })()), "redirect", [], "any", false, false, false, 72), "status_code", [], "any", false, false, false, 72), "html", null, true);
            echo "</span>
                        Redirect from
                    </b>
                    <span>
                        ";
            // line 76
            echo twig_escape_filter($this->env, (isset($context["redirect_handler"]) || array_key_exists("redirect_handler", $context) ? $context["redirect_handler"] : (function () { throw new RuntimeError('Variable "redirect_handler" does not exist.', 76, $this->source); })()), "html", null, true);
            echo "
                        (<a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 77, $this->source); })()), "redirect", [], "any", false, false, false, 77), "token", [], "any", false, false, false, 77)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 77, $this->source); })()), "redirect", [], "any", false, false, false, 77), "token", [], "any", false, false, false, 77), "html", null, true);
            echo "</a>)
                    </span>
                </div>
            </div>
        ";
        }
        // line 82
        echo "
        ";
        // line 83
        if (array_key_exists("forward_handler", $context)) {
            // line 84
            echo "            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>Forwarded to</b>
                    <span>
                        ";
            // line 88
            echo twig_escape_filter($this->env, (isset($context["forward_handler"]) || array_key_exists("forward_handler", $context) ? $context["forward_handler"] : (function () { throw new RuntimeError('Variable "forward_handler" does not exist.', 88, $this->source); })()), "html", null, true);
            echo "
                        (<a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 89, $this->source); })()), "forwardtoken", [], "any", false, false, false, 89)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 89, $this->source); })()), "forwardtoken", [], "any", false, false, false, 89), "html", null, true);
            echo "</a>)
                    </span>
                </div>
            </div>
        ";
        }
        // line 94
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 95
        echo "
    ";
        // line 96
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 96, $this->source); })())]);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 99
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 100
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 101
        echo twig_source($this->env, "@WebProfiler/Icon/request.svg");
        echo "</span>
        <strong>Request / Response</strong>
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 106
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 107
        echo "    ";
        $context["controller_name"] = twig_call_macro($macros["_self"], "macro_set_handler", [twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 107, $this->source); })()), "controller", [], "any", false, false, false, 107)], 107, $context, $this->getSourceContext());
        // line 108
        echo "    <h2>
        ";
        // line 109
        ((twig_in_filter("n/a", (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 109, $this->source); })()))) ? (print ("Request / Response")) : (print (twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 109, $this->source); })()), "html", null, true))));
        echo "
    </h2>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Request</h3>

            <div class=\"tab-content\">
                ";
        // line 117
        $context["has_no_query_post_or_files"] = ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 117, $this->source); })()), "requestquery", [], "any", false, false, false, 117), "all", [], "any", false, false, false, 117)) && twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 117, $this->source); })()), "requestrequest", [], "any", false, false, false, 117), "all", [], "any", false, false, false, 117))) && twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 117, $this->source); })()), "requestfiles", [], "any", false, false, false, 117)));
        // line 118
        echo "                ";
        if ((isset($context["has_no_query_post_or_files"]) || array_key_exists("has_no_query_post_or_files", $context) ? $context["has_no_query_post_or_files"] : (function () { throw new RuntimeError('Variable "has_no_query_post_or_files" does not exist.', 118, $this->source); })())) {
            // line 119
            echo "                    <div class=\"empty-query-post-files\" style=\"display: flex; align-items: stretch\">
                        <div>
                            <h3>GET Parameters</h3>
                            <div class=\"empty\"><p>None</p></div>
                        </div>
                        <div>
                            <h3>POST Parameters</h3>
                            <div class=\"empty\"><p>None</p></div>
                        </div>
                        <div>
                            <h3>Uploaded Files</h3>
                            <div class=\"empty\"><p>None</p></div>
                        </div>
                    </div>
                ";
        } else {
            // line 134
            echo "                    <h3>GET Parameters</h3>

                    ";
            // line 136
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 136, $this->source); })()), "requestquery", [], "any", false, false, false, 136), "all", [], "any", false, false, false, 136))) {
                // line 137
                echo "                        <div class=\"empty\">
                            <p>No GET parameters</p>
                        </div>
                    ";
            } else {
                // line 141
                echo "                        ";
                echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 141, $this->source); })()), "requestquery", [], "any", false, false, false, 141), "maxDepth" => 1], false);
                echo "
                    ";
            }
            // line 143
            echo "
                    <h3>POST Parameters</h3>

                    ";
            // line 146
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 146, $this->source); })()), "requestrequest", [], "any", false, false, false, 146), "all", [], "any", false, false, false, 146))) {
                // line 147
                echo "                        <div class=\"empty\">
                            <p>No POST parameters</p>
                        </div>
                    ";
            } else {
                // line 151
                echo "                        ";
                echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 151, $this->source); })()), "requestrequest", [], "any", false, false, false, 151), "maxDepth" => 1], false);
                echo "
                    ";
            }
            // line 153
            echo "
                    <h4>Uploaded Files</h4>

                    ";
            // line 156
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 156, $this->source); })()), "requestfiles", [], "any", false, false, false, 156))) {
                // line 157
                echo "                        <div class=\"empty\">
                            <p>No files were uploaded</p>
                        </div>
                    ";
            } else {
                // line 161
                echo "                        ";
                echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 161, $this->source); })()), "requestfiles", [], "any", false, false, false, 161), "maxDepth" => 1], false);
                echo "
                    ";
            }
            // line 163
            echo "                ";
        }
        // line 164
        echo "
                <h3>Request Attributes</h3>

                ";
        // line 167
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 167, $this->source); })()), "requestattributes", [], "any", false, false, false, 167), "all", [], "any", false, false, false, 167))) {
            // line 168
            echo "                    <div class=\"empty\">
                        <p>No attributes</p>
                    </div>
                ";
        } else {
            // line 172
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 172, $this->source); })()), "requestattributes", [], "any", false, false, false, 172)], false);
            echo "
                ";
        }
        // line 174
        echo "
                <h3>Request Headers</h3>
                ";
        // line 176
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 176, $this->source); })()), "requestheaders", [], "any", false, false, false, 176), "labels" => [0 => "Header", 1 => "Value"], "maxDepth" => 1], false);
        echo "

                <h3>Request Content</h3>

                ";
        // line 180
        if ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 180, $this->source); })()), "content", [], "any", false, false, false, 180) == false)) {
            // line 181
            echo "                    <div class=\"empty\">
                        <p>Request content not available (it was retrieved as a resource).</p>
                    </div>
                ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 184
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 184, $this->source); })()), "content", [], "any", false, false, false, 184)) {
            // line 185
            echo "                    <div class=\"sf-tabs\">
                        ";
            // line 186
            $context["prettyJson"] = ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 186, $this->source); })()), "isJsonRequest", [], "any", false, false, false, 186)) ? (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 186, $this->source); })()), "prettyJson", [], "any", false, false, false, 186)) : (null));
            // line 187
            echo "                        ";
            if ( !(null === (isset($context["prettyJson"]) || array_key_exists("prettyJson", $context) ? $context["prettyJson"] : (function () { throw new RuntimeError('Variable "prettyJson" does not exist.', 187, $this->source); })()))) {
                // line 188
                echo "                        <div class=\"tab\">
                            <h3 class=\"tab-title\">Pretty</h3>
                            <div class=\"tab-content\">
                                <div class=\"card\" style=\"max-height: 500px; overflow-y: auto;\">
                                    <pre class=\"break-long-words\">";
                // line 192
                echo twig_escape_filter($this->env, (isset($context["prettyJson"]) || array_key_exists("prettyJson", $context) ? $context["prettyJson"] : (function () { throw new RuntimeError('Variable "prettyJson" does not exist.', 192, $this->source); })()), "html", null, true);
                echo "</pre>
                                </div>
                            </div>
                        </div>
                        ";
            }
            // line 197
            echo "
                        <div class=\"tab\">
                            <h3 class=\"tab-title\">Raw</h3>
                            <div class=\"tab-content\">
                                <div class=\"card\">
                                    <pre class=\"break-long-words\">";
            // line 202
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 202, $this->source); })()), "content", [], "any", false, false, false, 202), "html", null, true);
            echo "</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        } else {
            // line 208
            echo "                    <div class=\"empty\">
                        <p>No content</p>
                    </div>
                ";
        }
        // line 212
        echo "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Response</h3>

            <div class=\"tab-content\">
                <h3>Response Headers</h3>

                ";
        // line 221
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 221, $this->source); })()), "responseheaders", [], "any", false, false, false, 221), "labels" => [0 => "Header", 1 => "Value"], "maxDepth" => 1], false);
        echo "
            </div>
        </div>

        <div class=\"tab ";
        // line 225
        echo (((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 225, $this->source); })()), "requestcookies", [], "any", false, false, false, 225), "all", [], "any", false, false, false, 225)) && twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 225, $this->source); })()), "responsecookies", [], "any", false, false, false, 225), "all", [], "any", false, false, false, 225)))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Cookies</h3>

            <div class=\"tab-content\">
                <h3>Request Cookies</h3>

                ";
        // line 231
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 231, $this->source); })()), "requestcookies", [], "any", false, false, false, 231), "all", [], "any", false, false, false, 231))) {
            // line 232
            echo "                    <div class=\"empty\">
                        <p>No request cookies</p>
                    </div>
                ";
        } else {
            // line 236
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 236, $this->source); })()), "requestcookies", [], "any", false, false, false, 236)], false);
            echo "
                ";
        }
        // line 238
        echo "
                <h3>Response Cookies</h3>

                ";
        // line 241
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 241, $this->source); })()), "responsecookies", [], "any", false, false, false, 241), "all", [], "any", false, false, false, 241))) {
            // line 242
            echo "                    <div class=\"empty\">
                        <p>No response cookies</p>
                    </div>
                ";
        } else {
            // line 246
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 246, $this->source); })()), "responsecookies", [], "any", false, false, false, 246)], true);
            echo "
                ";
        }
        // line 248
        echo "            </div>
        </div>

        <div class=\"tab ";
        // line 251
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 251, $this->source); })()), "sessionmetadata", [], "any", false, false, false, 251))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Session";
        // line 252
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 252, $this->source); })()), "sessionusages", [], "any", false, false, false, 252))) {
            echo " <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 252, $this->source); })()), "sessionusages", [], "any", false, false, false, 252)), "html", null, true);
            echo "</span>";
        }
        echo "</h3>

            <div class=\"tab-content\">
                <h3>Session Metadata</h3>

                ";
        // line 257
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 257, $this->source); })()), "sessionmetadata", [], "any", false, false, false, 257))) {
            // line 258
            echo "                    <div class=\"empty\">
                        <p>No session metadata</p>
                    </div>
                ";
        } else {
            // line 262
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 262, $this->source); })()), "sessionmetadata", [], "any", false, false, false, 262)], false);
            echo "
                ";
        }
        // line 264
        echo "
                <h3>Session Attributes</h3>

                ";
        // line 267
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 267, $this->source); })()), "sessionattributes", [], "any", false, false, false, 267))) {
            // line 268
            echo "                    <div class=\"empty\">
                        <p>No session attributes</p>
                    </div>
                ";
        } else {
            // line 272
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 272, $this->source); })()), "sessionattributes", [], "any", false, false, false, 272), "labels" => [0 => "Attribute", 1 => "Value"]], false);
            echo "
                ";
        }
        // line 274
        echo "
                <h3>Session Usage</h3>

                <div class=\"metrics\">
                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 279
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 279, $this->source); })()), "sessionusages", [], "any", false, false, false, 279)), "html", null, true);
        echo "</span>
                        <span class=\"label\">Usages</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 284
        echo twig_source($this->env, (("@WebProfiler/Icon/" . ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 284, $this->source); })()), "statelesscheck", [], "any", false, false, false, 284)) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
                        <span class=\"label\">Stateless check enabled</span>
                    </div>
                </div>

                ";
        // line 289
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 289, $this->source); })()), "sessionusages", [], "any", false, false, false, 289))) {
            // line 290
            echo "                    <div class=\"empty\">
                        <p>Session not used.</p>
                    </div>
                ";
        } else {
            // line 294
            echo "                    <table class=\"session_usages\">
                        <thead>
                        <tr>
                            <th class=\"full-width\">Usage</th>
                        </tr>
                        </thead>

                        <tbody>
                        ";
            // line 302
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 302, $this->source); })()), "sessionusages", [], "any", false, false, false, 302));
            foreach ($context['_seq'] as $context["key"] => $context["usage"]) {
                // line 303
                echo "                            <tr>
                                <td class=\"font-normal\">";
                // line 305
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, $context["usage"], "file", [], "any", false, false, false, 305), twig_get_attribute($this->env, $this->source, $context["usage"], "line", [], "any", false, false, false, 305));
                // line 306
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 306, $this->source); })())) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 306, $this->source); })()), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usage"], "name", [], "any", false, false, false, 306), "html", null, true);
                    echo "\">";
                } else {
                    echo "<span title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usage"], "name", [], "any", false, false, false, 306), "html", null, true);
                    echo "\">";
                }
                // line 307
                echo "                                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usage"], "name", [], "any", false, false, false, 307), "html", null, true);
                // line 308
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 308, $this->source); })())) {
                    echo "</a>";
                } else {
                    echo "</span>";
                }
                // line 309
                echo "                                    <div class=\"text-small font-normal\">
                                        ";
                // line 310
                $context["usage_id"] = ("session-usage-trace-" . $context["key"]);
                // line 311
                echo "                                        <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                echo twig_escape_filter($this->env, (isset($context["usage_id"]) || array_key_exists("usage_id", $context) ? $context["usage_id"] : (function () { throw new RuntimeError('Variable "usage_id" does not exist.', 311, $this->source); })()), "html", null, true);
                echo "\" data-toggle-alt-content=\"Hide trace\">Show trace</a>
                                    </div>
                                    <div id=\"";
                // line 313
                echo twig_escape_filter($this->env, (isset($context["usage_id"]) || array_key_exists("usage_id", $context) ? $context["usage_id"] : (function () { throw new RuntimeError('Variable "usage_id" does not exist.', 313, $this->source); })()), "html", null, true);
                echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                                        ";
                // line 314
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["usage"], "trace", [], "any", false, false, false, 314), 2);
                echo "
                                    </div>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['usage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 319
            echo "                        </tbody>
                    </table>
                ";
        }
        // line 322
        echo "            </div>
        </div>

        <div class=\"tab ";
        // line 325
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 325, $this->source); })()), "flashes", [], "any", false, false, false, 325))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Flashes</h3>

            <div class=\"tab-content\">
                <h3>Flashes</h3>

                ";
        // line 331
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 331, $this->source); })()), "flashes", [], "any", false, false, false, 331))) {
            // line 332
            echo "                    <div class=\"empty\">
                        <p>No flash messages were created.</p>
                    </div>
                ";
        } else {
            // line 336
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 336, $this->source); })()), "flashes", [], "any", false, false, false, 336)], false);
            echo "
                ";
        }
        // line 338
        echo "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Server Parameters</h3>
            <div class=\"tab-content\">
                <h3>Server Parameters</h3>
                <h4>Defined in .env</h4>
                ";
        // line 346
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 346, $this->source); })()), "dotenvvars", [], "any", false, false, false, 346)], false);
        echo "

                <h4>Defined as regular env variables</h4>
                ";
        // line 349
        $context["requestserver"] = [];
        // line 350
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 350, $this->source); })()), "requestserver", [], "any", false, false, false, 350), function ($_____, $__key__) use ($context, $macros) { $context["_"] = $_____; $context["key"] = $__key__; return !twig_in_filter($context["key"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 350, $this->source); })()), "dotenvvars", [], "any", false, false, false, 350), "keys", [], "any", false, false, false, 350)); }));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 351
            echo "                    ";
            $context["requestserver"] = twig_array_merge((isset($context["requestserver"]) || array_key_exists("requestserver", $context) ? $context["requestserver"] : (function () { throw new RuntimeError('Variable "requestserver" does not exist.', 351, $this->source); })()), [$context["key"] => $context["value"]]);
            // line 352
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 353
        echo "                ";
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => (isset($context["requestserver"]) || array_key_exists("requestserver", $context) ? $context["requestserver"] : (function () { throw new RuntimeError('Variable "requestserver" does not exist.', 353, $this->source); })())], false);
        echo "
            </div>
        </div>

        ";
        // line 357
        if (twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 357, $this->source); })()), "parent", [], "any", false, false, false, 357)) {
            // line 358
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">Parent Request</h3>

            <div class=\"tab-content\">
                <h3>
                    <a href=\"";
            // line 363
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 363, $this->source); })()), "parent", [], "any", false, false, false, 363), "token", [], "any", false, false, false, 363)]), "html", null, true);
            echo "\">Return to parent request</a>
                    <small>(token = ";
            // line 364
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 364, $this->source); })()), "parent", [], "any", false, false, false, 364), "token", [], "any", false, false, false, 364), "html", null, true);
            echo ")</small>
                </h3>

                ";
            // line 367
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 367, $this->source); })()), "parent", [], "any", false, false, false, 367), "getcollector", [0 => "request"], "method", false, false, false, 367), "requestattributes", [], "any", false, false, false, 367)], false);
            echo "
            </div>
        </div>
        ";
        }
        // line 371
        echo "
        ";
        // line 372
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 372, $this->source); })()), "children", [], "any", false, false, false, 372))) {
            // line 373
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">Sub Requests <span class=\"badge\">";
            // line 374
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 374, $this->source); })()), "children", [], "any", false, false, false, 374)), "html", null, true);
            echo "</span></h3>

            <div class=\"tab-content\">
                ";
            // line 377
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 377, $this->source); })()), "children", [], "any", false, false, false, 377));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 378
                echo "                    <h3>
                        ";
                // line 379
                echo twig_call_macro($macros["_self"], "macro_set_handler", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "getcollector", [0 => "request"], "method", false, false, false, 379), "controller", [], "any", false, false, false, 379)], 379, $context, $this->getSourceContext());
                echo "
                        <small>(token = <a href=\"";
                // line 380
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, $context["child"], "token", [], "any", false, false, false, 380)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "token", [], "any", false, false, false, 380), "html", null, true);
                echo "</a>)</small>
                    </h3>

                    ";
                // line 383
                echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "getcollector", [0 => "request"], "method", false, false, false, 383), "requestattributes", [], "any", false, false, false, 383)], false);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 385
            echo "            </div>
        </div>
        ";
        }
        // line 388
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 391
    public function macro_set_handler($__controller__ = null, $__route__ = null, $__method__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "controller" => $__controller__,
            "route" => $__route__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "set_handler"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "set_handler"));

            // line 392
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", true, true, false, 392)) {
                // line 393
                if (((array_key_exists("method", $context)) ? (_twig_default_filter((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 393, $this->source); })()), false)) : (false))) {
                    echo "<span class=\"sf-toolbar-status sf-toolbar-redirection-method\">";
                    echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 393, $this->source); })()), "html", null, true);
                    echo "</span>";
                }
                // line 394
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 394, $this->source); })()), "file", [], "any", false, false, false, 394), twig_get_attribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 394, $this->source); })()), "line", [], "any", false, false, false, 394));
                // line 395
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 395, $this->source); })())) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 395, $this->source); })()), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 395, $this->source); })()), "class", [], "any", false, false, false, 395), "html", null, true);
                    echo "\">";
                } else {
                    echo "<span title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 395, $this->source); })()), "class", [], "any", false, false, false, 395), "html", null, true);
                    echo "\">";
                }
                // line 397
                if (((array_key_exists("route", $context)) ? (_twig_default_filter((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 397, $this->source); })()), false)) : (false))) {
                    // line 398
                    echo "@";
                    echo twig_escape_filter($this->env, (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 398, $this->source); })()), "html", null, true);
                } else {
                    // line 400
                    echo twig_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass(twig_get_attribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 400, $this->source); })()), "class", [], "any", false, false, false, 400))), "html", null, true);
                    // line 401
                    ((twig_get_attribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 401, $this->source); })()), "method", [], "any", false, false, false, 401)) ? (print (twig_escape_filter($this->env, (" :: " . twig_get_attribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 401, $this->source); })()), "method", [], "any", false, false, false, 401)), "html", null, true))) : (print ("")));
                }
                // line 404
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 404, $this->source); })())) {
                    echo "</a>";
                } else {
                    echo "</span>";
                }
            } else {
                // line 406
                echo "<span>";
                echo twig_escape_filter($this->env, ((array_key_exists("route", $context)) ? (_twig_default_filter((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 406, $this->source); })()), (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 406, $this->source); })()))) : ((isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 406, $this->source); })()))), "html", null, true);
                echo "</span>";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  954 => 406,  947 => 404,  944 => 401,  942 => 400,  938 => 398,  936 => 397,  924 => 395,  922 => 394,  916 => 393,  913 => 392,  892 => 391,  881 => 388,  876 => 385,  868 => 383,  860 => 380,  856 => 379,  853 => 378,  849 => 377,  843 => 374,  840 => 373,  838 => 372,  835 => 371,  828 => 367,  822 => 364,  818 => 363,  811 => 358,  809 => 357,  801 => 353,  795 => 352,  792 => 351,  787 => 350,  785 => 349,  779 => 346,  769 => 338,  763 => 336,  757 => 332,  755 => 331,  746 => 325,  741 => 322,  736 => 319,  725 => 314,  721 => 313,  715 => 311,  713 => 310,  710 => 309,  704 => 308,  701 => 307,  689 => 306,  687 => 305,  684 => 303,  680 => 302,  670 => 294,  664 => 290,  662 => 289,  654 => 284,  646 => 279,  639 => 274,  633 => 272,  627 => 268,  625 => 267,  620 => 264,  614 => 262,  608 => 258,  606 => 257,  594 => 252,  590 => 251,  585 => 248,  579 => 246,  573 => 242,  571 => 241,  566 => 238,  560 => 236,  554 => 232,  552 => 231,  543 => 225,  536 => 221,  525 => 212,  519 => 208,  510 => 202,  503 => 197,  495 => 192,  489 => 188,  486 => 187,  484 => 186,  481 => 185,  479 => 184,  474 => 181,  472 => 180,  465 => 176,  461 => 174,  455 => 172,  449 => 168,  447 => 167,  442 => 164,  439 => 163,  433 => 161,  427 => 157,  425 => 156,  420 => 153,  414 => 151,  408 => 147,  406 => 146,  401 => 143,  395 => 141,  389 => 137,  387 => 136,  383 => 134,  366 => 119,  363 => 118,  361 => 117,  350 => 109,  347 => 108,  344 => 107,  334 => 106,  320 => 101,  317 => 100,  307 => 99,  295 => 96,  292 => 95,  289 => 94,  279 => 89,  275 => 88,  269 => 84,  267 => 83,  264 => 82,  254 => 77,  250 => 76,  243 => 72,  238 => 69,  236 => 68,  225 => 64,  213 => 59,  205 => 54,  197 => 49,  192 => 46,  187 => 43,  183 => 41,  181 => 40,  173 => 37,  168 => 34,  166 => 33,  163 => 32,  160 => 31,  155 => 29,  150 => 28,  143 => 27,  136 => 26,  134 => 25,  127 => 24,  125 => 23,  122 => 22,  120 => 21,  117 => 20,  114 => 19,  108 => 17,  105 => 16,  102 => 15,  100 => 14,  97 => 13,  94 => 12,  88 => 10,  85 => 9,  83 => 8,  80 => 7,  74 => 5,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set request_handler %}
        {{ _self.set_handler(collector.controller) }}
    {% endset %}

    {% if collector.redirect %}
        {% set redirect_handler %}
            {{ _self.set_handler(collector.redirect.controller, collector.redirect.route, 'GET' != collector.redirect.method ? collector.redirect.method) }}
        {% endset %}
    {% endif %}

    {% if collector.forwardtoken %}
        {% set forward_profile = profile.childByToken(collector.forwardtoken) %}
        {% set forward_handler %}
            {{ _self.set_handler(forward_profile ? forward_profile.collector('request').controller : 'n/a') }}
        {% endset %}
    {% endif %}

    {% set request_status_code_color = (collector.statuscode >= 400) ? 'red' : (collector.statuscode >= 300) ? 'yellow' : 'green' %}

    {% set icon %}
        <span class=\"sf-toolbar-status sf-toolbar-status-{{ request_status_code_color }}\">{{ collector.statuscode }}</span>
        {% if collector.route %}
            {% if collector.redirect %}<span class=\"sf-toolbar-request-icon\">{{ source('@WebProfiler/Icon/redirect.svg') }}</span>{% endif %}
            {% if collector.forwardtoken %}<span class=\"sf-toolbar-request-icon\">{{ source('@WebProfiler/Icon/forward.svg') }}</span>{% endif %}
            <span class=\"sf-toolbar-label\">{{ 'GET' != collector.method ? collector.method }} @</span>
            <span class=\"sf-toolbar-value sf-toolbar-info-piece-additional\">{{ collector.route }}</span>
        {% endif %}
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>HTTP status</b>
                <span>{{ collector.statuscode }} {{ collector.statustext }}</span>
            </div>

            {% if 'GET' != collector.method -%}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Method</b>
                    <span>{{ collector.method }}</span>
                </div>
            {%- endif %}

            <div class=\"sf-toolbar-info-piece\">
                <b>Controller</b>
                <span>{{ request_handler }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Route name</b>
                <span>{{ collector.route|default('n/a') }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Has session</b>
                <span>{% if collector.sessionmetadata|length %}yes{% else %}no{% endif %}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Stateless Check</b>
                <span>{% if collector.statelesscheck %}yes{% else %}no{% endif %}</span>
            </div>
        </div>

        {% if redirect_handler is defined -%}
            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>
                        <span class=\"sf-toolbar-redirection-status sf-toolbar-status-yellow\">{{ collector.redirect.status_code }}</span>
                        Redirect from
                    </b>
                    <span>
                        {{ redirect_handler }}
                        (<a href=\"{{ path('_profiler', { token: collector.redirect.token }) }}\">{{ collector.redirect.token }}</a>)
                    </span>
                </div>
            </div>
        {% endif %}

        {% if forward_handler is defined %}
            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>Forwarded to</b>
                    <span>
                        {{ forward_handler }}
                        (<a href=\"{{ path('_profiler', { token: collector.forwardtoken }) }}\">{{ collector.forwardtoken }}</a>)
                    </span>
                </div>
            </div>
        {% endif %}
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url }) }}
{% endblock %}

{% block menu %}
    <span class=\"label\">
        <span class=\"icon\">{{ source('@WebProfiler/Icon/request.svg') }}</span>
        <strong>Request / Response</strong>
    </span>
{% endblock %}

{% block panel %}
    {% set controller_name = _self.set_handler(collector.controller) %}
    <h2>
        {{ 'n/a' in controller_name ? 'Request / Response' : controller_name }}
    </h2>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Request</h3>

            <div class=\"tab-content\">
                {% set has_no_query_post_or_files = collector.requestquery.all is empty and collector.requestrequest.all is empty and collector.requestfiles is empty %}
                {% if has_no_query_post_or_files %}
                    <div class=\"empty-query-post-files\" style=\"display: flex; align-items: stretch\">
                        <div>
                            <h3>GET Parameters</h3>
                            <div class=\"empty\"><p>None</p></div>
                        </div>
                        <div>
                            <h3>POST Parameters</h3>
                            <div class=\"empty\"><p>None</p></div>
                        </div>
                        <div>
                            <h3>Uploaded Files</h3>
                            <div class=\"empty\"><p>None</p></div>
                        </div>
                    </div>
                {% else %}
                    <h3>GET Parameters</h3>

                    {% if collector.requestquery.all is empty %}
                        <div class=\"empty\">
                            <p>No GET parameters</p>
                        </div>
                    {% else %}
                        {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestquery, maxDepth: 1 }, with_context = false) }}
                    {% endif %}

                    <h3>POST Parameters</h3>

                    {% if collector.requestrequest.all is empty %}
                        <div class=\"empty\">
                            <p>No POST parameters</p>
                        </div>
                    {% else %}
                        {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestrequest, maxDepth: 1 }, with_context = false) }}
                    {% endif %}

                    <h4>Uploaded Files</h4>

                    {% if collector.requestfiles is empty %}
                        <div class=\"empty\">
                            <p>No files were uploaded</p>
                        </div>
                    {% else %}
                        {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestfiles, maxDepth: 1 }, with_context = false) }}
                    {% endif %}
                {% endif %}

                <h3>Request Attributes</h3>

                {% if collector.requestattributes.all is empty %}
                    <div class=\"empty\">
                        <p>No attributes</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestattributes }, with_context = false) }}
                {% endif %}

                <h3>Request Headers</h3>
                {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestheaders, labels: ['Header', 'Value'], maxDepth: 1 }, with_context = false) }}

                <h3>Request Content</h3>

                {% if collector.content == false %}
                    <div class=\"empty\">
                        <p>Request content not available (it was retrieved as a resource).</p>
                    </div>
                {% elseif collector.content %}
                    <div class=\"sf-tabs\">
                        {% set prettyJson = collector.isJsonRequest ? collector.prettyJson : null %}
                        {% if prettyJson is not null %}
                        <div class=\"tab\">
                            <h3 class=\"tab-title\">Pretty</h3>
                            <div class=\"tab-content\">
                                <div class=\"card\" style=\"max-height: 500px; overflow-y: auto;\">
                                    <pre class=\"break-long-words\">{{ prettyJson }}</pre>
                                </div>
                            </div>
                        </div>
                        {% endif %}

                        <div class=\"tab\">
                            <h3 class=\"tab-title\">Raw</h3>
                            <div class=\"tab-content\">
                                <div class=\"card\">
                                    <pre class=\"break-long-words\">{{ collector.content }}</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                {% else %}
                    <div class=\"empty\">
                        <p>No content</p>
                    </div>
                {% endif %}
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Response</h3>

            <div class=\"tab-content\">
                <h3>Response Headers</h3>

                {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.responseheaders, labels: ['Header', 'Value'], maxDepth: 1 }, with_context = false) }}
            </div>
        </div>

        <div class=\"tab {{ collector.requestcookies.all is empty and collector.responsecookies.all is empty ? 'disabled' }}\">
            <h3 class=\"tab-title\">Cookies</h3>

            <div class=\"tab-content\">
                <h3>Request Cookies</h3>

                {% if collector.requestcookies.all is empty %}
                    <div class=\"empty\">
                        <p>No request cookies</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestcookies }, with_context = false) }}
                {% endif %}

                <h3>Response Cookies</h3>

                {% if collector.responsecookies.all is empty %}
                    <div class=\"empty\">
                        <p>No response cookies</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.responsecookies }, with_context = true) }}
                {% endif %}
            </div>
        </div>

        <div class=\"tab {{ collector.sessionmetadata is empty ? 'disabled' }}\">
            <h3 class=\"tab-title\">Session{% if collector.sessionusages is not empty %} <span class=\"badge\">{{ collector.sessionusages|length }}</span>{% endif %}</h3>

            <div class=\"tab-content\">
                <h3>Session Metadata</h3>

                {% if collector.sessionmetadata is empty %}
                    <div class=\"empty\">
                        <p>No session metadata</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.sessionmetadata }, with_context = false) }}
                {% endif %}

                <h3>Session Attributes</h3>

                {% if collector.sessionattributes is empty %}
                    <div class=\"empty\">
                        <p>No session attributes</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.sessionattributes, labels: ['Attribute', 'Value'] }, with_context = false) }}
                {% endif %}

                <h3>Session Usage</h3>

                <div class=\"metrics\">
                    <div class=\"metric\">
                        <span class=\"value\">{{ collector.sessionusages|length }}</span>
                        <span class=\"label\">Usages</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">{{ source('@WebProfiler/Icon/' ~ (collector.statelesscheck ? 'yes' : 'no') ~ '.svg') }}</span>
                        <span class=\"label\">Stateless check enabled</span>
                    </div>
                </div>

                {% if collector.sessionusages is empty %}
                    <div class=\"empty\">
                        <p>Session not used.</p>
                    </div>
                {% else %}
                    <table class=\"session_usages\">
                        <thead>
                        <tr>
                            <th class=\"full-width\">Usage</th>
                        </tr>
                        </thead>

                        <tbody>
                        {% for key, usage in collector.sessionusages %}
                            <tr>
                                <td class=\"font-normal\">
                                    {%- set link = usage.file|file_link(usage.line) %}
                                    {%- if link %}<a href=\"{{ link }}\" title=\"{{ usage.name }}\">{% else %}<span title=\"{{ usage.name }}\">{% endif %}
                                        {{ usage.name }}
                                    {%- if link %}</a>{% else %}</span>{% endif %}
                                    <div class=\"text-small font-normal\">
                                        {% set usage_id = 'session-usage-trace-' ~ key %}
                                        <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ usage_id }}\" data-toggle-alt-content=\"Hide trace\">Show trace</a>
                                    </div>
                                    <div id=\"{{ usage_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
                                        {{ profiler_dump(usage.trace, maxDepth=2) }}
                                    </div>
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                {% endif %}
            </div>
        </div>

        <div class=\"tab {{ collector.flashes is empty ? 'disabled' }}\">
            <h3 class=\"tab-title\">Flashes</h3>

            <div class=\"tab-content\">
                <h3>Flashes</h3>

                {% if collector.flashes is empty %}
                    <div class=\"empty\">
                        <p>No flash messages were created.</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.flashes }, with_context = false) }}
                {% endif %}
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Server Parameters</h3>
            <div class=\"tab-content\">
                <h3>Server Parameters</h3>
                <h4>Defined in .env</h4>
                {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.dotenvvars }, with_context = false) }}

                <h4>Defined as regular env variables</h4>
                {% set requestserver = [] %}
                {% for key, value in collector.requestserver|filter((_, key) => key not in collector.dotenvvars.keys) %}
                    {% set requestserver = requestserver|merge({(key): value}) %}
                {% endfor %}
                {{ include('@WebProfiler/Profiler/table.html.twig', { data: requestserver }, with_context = false) }}
            </div>
        </div>

        {% if profile.parent %}
        <div class=\"tab\">
            <h3 class=\"tab-title\">Parent Request</h3>

            <div class=\"tab-content\">
                <h3>
                    <a href=\"{{ path('_profiler', { token: profile.parent.token }) }}\">Return to parent request</a>
                    <small>(token = {{ profile.parent.token }})</small>
                </h3>

                {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: profile.parent.getcollector('request').requestattributes }, with_context = false) }}
            </div>
        </div>
        {% endif %}

        {% if profile.children|length %}
        <div class=\"tab\">
            <h3 class=\"tab-title\">Sub Requests <span class=\"badge\">{{ profile.children|length }}</span></h3>

            <div class=\"tab-content\">
                {% for child in profile.children %}
                    <h3>
                        {{ _self.set_handler(child.getcollector('request').controller) }}
                        <small>(token = <a href=\"{{ path('_profiler', { token: child.token }) }}\">{{ child.token }}</a>)</small>
                    </h3>

                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: child.getcollector('request').requestattributes }, with_context = false) }}
                {% endfor %}
            </div>
        </div>
        {% endif %}
    </div>
{% endblock %}

{% macro set_handler(controller, route, method) %}
    {% if controller.class is defined -%}
        {%- if method|default(false) %}<span class=\"sf-toolbar-status sf-toolbar-redirection-method\">{{ method }}</span>{% endif -%}
        {%- set link = controller.file|file_link(controller.line) %}
        {%- if link %}<a href=\"{{ link }}\" title=\"{{ controller.class }}\">{% else %}<span title=\"{{ controller.class }}\">{% endif %}

            {%- if route|default(false) -%}
                @{{ route }}
            {%- else -%}
                {{- controller.class|abbr_class|striptags -}}
                {{- controller.method ? ' :: ' ~ controller.method -}}
            {%- endif -%}

        {%- if link %}</a>{% else %}</span>{% endif %}
    {%- else -%}
        <span>{{ route|default(controller) }}</span>
    {%- endif %}
{% endmacro %}
", "@WebProfiler/Collector/request.html.twig", "/Users/noahgrebet/Desktop/symfony/template/vendor/symfony/web-profiler-bundle/Resources/views/Collector/request.html.twig");
    }
}
