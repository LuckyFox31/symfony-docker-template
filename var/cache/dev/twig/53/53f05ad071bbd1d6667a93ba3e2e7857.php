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

/* @WebProfiler/Collector/cache.html.twig */
class __TwigTemplate_15bc755d2879ee9d7fb6b236530fd382 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/cache.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/cache.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/cache.html.twig", 1);
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 4, $this->source); })()), "totals", [], "any", false, false, false, 4), "calls", [], "any", false, false, false, 4) > 0)) {
            // line 5
            echo "        ";
            ob_start();
            // line 6
            echo "            ";
            echo twig_source($this->env, "@WebProfiler/Icon/cache.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 7, $this->source); })()), "totals", [], "any", false, false, false, 7), "calls", [], "any", false, false, false, 7), "html", null, true);
            echo "</span>
            <span class=\"sf-toolbar-info-piece-additional-detail\">
                <span class=\"sf-toolbar-label\">in</span>
                <span class=\"sf-toolbar-value\">";
            // line 10
            echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 10, $this->source); })()), "totals", [], "any", false, false, false, 10), "time", [], "any", false, false, false, 10) * 1000)), "html", null, true);
            echo "</span>
                <span class=\"sf-toolbar-label\">ms</span>
            </span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 14
            echo "        ";
            ob_start();
            // line 15
            echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Cache Calls</b>
            <span>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 17, $this->source); })()), "totals", [], "any", false, false, false, 17), "calls", [], "any", false, false, false, 17), "html", null, true);
            echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>";
            // line 21
            echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 21, $this->source); })()), "totals", [], "any", false, false, false, 21), "time", [], "any", false, false, false, 21) * 1000)), "html", null, true);
            echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Cache hits</b>
            <span>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 25, $this->source); })()), "totals", [], "any", false, false, false, 25), "hits", [], "any", false, false, false, 25), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 25, $this->source); })()), "totals", [], "any", false, false, false, 25), "reads", [], "any", false, false, false, 25), "html", null, true);
            if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 25, $this->source); })()), "totals", [], "any", false, false, false, 25), "hit_read_ratio", [], "any", false, false, false, 25))) {
                echo " (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 25, $this->source); })()), "totals", [], "any", false, false, false, 25), "hit_read_ratio", [], "any", false, false, false, 25), "html", null, true);
                echo "%)";
            }
            echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Cache writes</b>
            <span>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 29, $this->source); })()), "totals", [], "any", false, false, false, 29), "writes", [], "any", false, false, false, 29), "html", null, true);
            echo "</span>
        </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 32
            echo "
        ";
            // line 33
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 33, $this->source); })())]);
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 37
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 38
        echo "    <span class=\"label ";
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 38, $this->source); })()), "totals", [], "any", false, false, false, 38), "calls", [], "any", false, false, false, 38) == 0)) ? ("disabled") : (""));
        echo "\">
    <span class=\"icon\">
        ";
        // line 40
        echo twig_source($this->env, "@WebProfiler/Icon/cache.svg");
        echo "
    </span>
    <strong>Cache</strong>
</span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 46
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 47
        echo "    <h2>Cache</h2>

    ";
        // line 49
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 49, $this->source); })()), "totals", [], "any", false, false, false, 49), "calls", [], "any", false, false, false, 49) == 0)) {
            // line 50
            echo "        <div class=\"empty empty-panel\">
            <p>No cache calls were made.</p>
        </div>
    ";
        } else {
            // line 54
            echo "        ";
            echo twig_call_macro($macros["_self"], "macro_render_metrics", [twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 54, $this->source); })()), "totals", [], "any", false, false, false, 54), true], 54, $context, $this->getSourceContext());
            echo "

        <h2>Pools</h2>
        <div class=\"sf-tabs\">
            ";
            // line 59
            echo "            ";
            $context["cache_pools_with_calls"] = twig_array_merge(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 59, $this->source); })()), "calls", [], "any", false, false, false, 59), function ($__calls__) use ($context, $macros) { $context["calls"] = $__calls__; return (twig_length_filter($this->env, (isset($context["calls"]) || array_key_exists("calls", $context) ? $context["calls"] : (function () { throw new RuntimeError('Variable "calls" does not exist.', 59, $this->source); })())) > 0); }), []);
            // line 60
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cache_pools_with_calls"]) || array_key_exists("cache_pools_with_calls", $context) ? $context["cache_pools_with_calls"] : (function () { throw new RuntimeError('Variable "cache_pools_with_calls" does not exist.', 60, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["name"] => $context["calls"]) {
                // line 61
                echo "                <div class=\"tab ";
                echo (((twig_length_filter($this->env, $context["calls"]) == 0)) ? ("disabled") : (""));
                echo "\">
                    <h3 class=\"tab-title\">";
                // line 62
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo " <span class=\"badge\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 62, $this->source); })()), "statistics", [], "any", false, false, false, 62), $context["name"], [], "array", false, false, false, 62), "calls", [], "any", false, false, false, 62), "html", null, true);
                echo "</span></h3>

                    <div class=\"tab-content\">
                        <h4>Adapter</h4>
                        <div class=\"card\">
                            ";
                // line 67
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "adapters", [], "any", false, true, false, 67), $context["name"], [], "array", true, true, false, 67)) {
                    // line 68
                    echo "                                <code>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 68, $this->source); })()), "adapters", [], "any", false, false, false, 68), $context["name"], [], "array", false, false, false, 68), "html", null, true);
                    echo "</code>
                            ";
                } else {
                    // line 70
                    echo "                                <span class=\"text-muted\">Unable to get the adapter class.</span>
                            ";
                }
                // line 72
                echo "                        </div>
                        ";
                // line 73
                if ((twig_length_filter($this->env, $context["calls"]) == 0)) {
                    // line 74
                    echo "                            <div class=\"empty\">
                                <p>No calls were made for ";
                    // line 75
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo " pool.</p>
                            </div>
                        ";
                } else {
                    // line 78
                    echo "                            <h4>Metrics</h4>
                            ";
                    // line 79
                    echo twig_call_macro($macros["_self"], "macro_render_metrics", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 79, $this->source); })()), "statistics", [], "any", false, false, false, 79), $context["name"], [], "array", false, false, false, 79)], 79, $context, $this->getSourceContext());
                    echo "

                            <h4>Calls</h4>
                            <table>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Time</th>
                                        <th>Call</th>
                                        <th>Hit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
                    // line 92
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["calls"]);
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["call"]) {
                        // line 93
                        echo "                                    <tr>
                                        <td class=\"font-normal text-small text-muted nowrap\">";
                        // line 94
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 94), "html", null, true);
                        echo "</td>
                                        <td class=\"nowrap\">";
                        // line 95
                        echo twig_escape_filter($this->env, twig_sprintf("%0.2f", ((twig_get_attribute($this->env, $this->source, $context["call"], "end", [], "any", false, false, false, 95) - twig_get_attribute($this->env, $this->source, $context["call"], "start", [], "any", false, false, false, 95)) * 1000)), "html", null, true);
                        echo " ms</td>
                                        <td class=\"nowrap\">";
                        // line 96
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["call"], "name", [], "any", false, false, false, 96), "html", null, true);
                        echo "()</td>
                                        <td>";
                        // line 97
                        echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["call"], "value", [], "any", false, false, false, 97), "result", [], "any", false, false, false, 97), 2);
                        echo "</td>
                                    </tr>
                                ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['call'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 100
                    echo "                                </tbody>
                            </table>
                        ";
                }
                // line 103
                echo "                    </div>
                </div>

                ";
                // line 106
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 106)) {
                    // line 107
                    echo "                    <div class=\"tab\">
                        <h3 class=\"tab-title\">Pools without calls <span class=\"badge\">";
                    // line 108
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 108, $this->source); })()), "calls", [], "any", false, false, false, 108), function ($__calls__) use ($context, $macros) { $context["calls"] = $__calls__; return (0 == twig_length_filter($this->env, $context["calls"])); })), "html", null, true);
                    echo "</span></h3>

                        <div class=\"tab-content\">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Cache pools that received no calls</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
                    // line 118
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_array_keys_filter(twig_array_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 118, $this->source); })()), "calls", [], "any", false, false, false, 118), function ($__calls__) use ($context, $macros) { $context["calls"] = $__calls__; return (0 == twig_length_filter($this->env, $context["calls"])); }))));
                    foreach ($context['_seq'] as $context["_key"] => $context["cache_pool"]) {
                        // line 119
                        echo "                                        <tr><td>";
                        echo twig_escape_filter($this->env, $context["cache_pool"], "html", null, true);
                        echo "</td></tr>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cache_pool'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 121
                    echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                ";
                }
                // line 126
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['calls'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 131
    public function macro_render_metrics($__pool__ = null, $__is_total__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "pool" => $__pool__,
            "is_total" => $__is_total__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_metrics"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_metrics"));

            // line 132
            echo "    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pool"]) || array_key_exists("pool", $context) ? $context["pool"] : (function () { throw new RuntimeError('Variable "pool" does not exist.', 134, $this->source); })()), "calls", [], "any", false, false, false, 134), "html", null, true);
            echo "</span>
            <span class=\"label\">";
            // line 135
            echo (((isset($context["is_total"]) || array_key_exists("is_total", $context) ? $context["is_total"] : (function () { throw new RuntimeError('Variable "is_total" does not exist.', 135, $this->source); })())) ? ("Total calls") : ("Calls"));
            echo "</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
            // line 138
            echo twig_escape_filter($this->env, twig_sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, (isset($context["pool"]) || array_key_exists("pool", $context) ? $context["pool"] : (function () { throw new RuntimeError('Variable "pool" does not exist.', 138, $this->source); })()), "time", [], "any", false, false, false, 138) * 1000)), "html", null, true);
            echo " <span class=\"unit\">ms</span></span>
            <span class=\"label\">";
            // line 139
            echo (((isset($context["is_total"]) || array_key_exists("is_total", $context) ? $context["is_total"] : (function () { throw new RuntimeError('Variable "is_total" does not exist.', 139, $this->source); })())) ? ("Total time") : ("Time"));
            echo "</span>
        </div>

        <div class=\"metric-divider\"></div>

        <div class=\"metric-group\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pool"]) || array_key_exists("pool", $context) ? $context["pool"] : (function () { throw new RuntimeError('Variable "pool" does not exist.', 146, $this->source); })()), "reads", [], "any", false, false, false, 146), "html", null, true);
            echo "</span>
                <span class=\"label\">";
            // line 147
            echo (((isset($context["is_total"]) || array_key_exists("is_total", $context) ? $context["is_total"] : (function () { throw new RuntimeError('Variable "is_total" does not exist.', 147, $this->source); })())) ? ("Total reads") : ("Reads"));
            echo "</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pool"]) || array_key_exists("pool", $context) ? $context["pool"] : (function () { throw new RuntimeError('Variable "pool" does not exist.', 150, $this->source); })()), "writes", [], "any", false, false, false, 150), "html", null, true);
            echo "</span>
                <span class=\"label\">";
            // line 151
            echo (((isset($context["is_total"]) || array_key_exists("is_total", $context) ? $context["is_total"] : (function () { throw new RuntimeError('Variable "is_total" does not exist.', 151, $this->source); })())) ? ("Total writes") : ("Writes"));
            echo "</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pool"]) || array_key_exists("pool", $context) ? $context["pool"] : (function () { throw new RuntimeError('Variable "pool" does not exist.', 154, $this->source); })()), "deletes", [], "any", false, false, false, 154), "html", null, true);
            echo "</span>
                <span class=\"label\">";
            // line 155
            echo (((isset($context["is_total"]) || array_key_exists("is_total", $context) ? $context["is_total"] : (function () { throw new RuntimeError('Variable "is_total" does not exist.', 155, $this->source); })())) ? ("Total deletes") : ("Deletes"));
            echo "</span>
            </div>
        </div>

        <div class=\"metric-divider\"></div>

        <div class=\"metric-group\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 163
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pool"]) || array_key_exists("pool", $context) ? $context["pool"] : (function () { throw new RuntimeError('Variable "pool" does not exist.', 163, $this->source); })()), "hits", [], "any", false, false, false, 163), "html", null, true);
            echo "</span>
                <span class=\"label\">";
            // line 164
            echo (((isset($context["is_total"]) || array_key_exists("is_total", $context) ? $context["is_total"] : (function () { throw new RuntimeError('Variable "is_total" does not exist.', 164, $this->source); })())) ? ("Total hits") : ("Hits"));
            echo "</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pool"]) || array_key_exists("pool", $context) ? $context["pool"] : (function () { throw new RuntimeError('Variable "pool" does not exist.', 167, $this->source); })()), "misses", [], "any", false, false, false, 167), "html", null, true);
            echo "</span>
                <span class=\"label\">";
            // line 168
            echo (((isset($context["is_total"]) || array_key_exists("is_total", $context) ? $context["is_total"] : (function () { throw new RuntimeError('Variable "is_total" does not exist.', 168, $this->source); })())) ? ("Total misses") : ("Misses"));
            echo "</span>
            </div>
            <div class=\"metric\">
                    <span class=\"value\">
                        ";
            // line 172
            (((twig_get_attribute($this->env, $this->source, ($context["pool"] ?? null), "hit_read_ratio", [], "any", true, true, false, 172) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["pool"] ?? null), "hit_read_ratio", [], "any", false, false, false, 172)))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pool"] ?? null), "hit_read_ratio", [], "any", false, false, false, 172), "html", null, true))) : (print (0)));
            echo " <span class=\"unit\">%</span>
                    </span>
                <span class=\"label\">Hits/reads</span>
            </div>
        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/cache.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  521 => 172,  514 => 168,  510 => 167,  504 => 164,  500 => 163,  489 => 155,  485 => 154,  479 => 151,  475 => 150,  469 => 147,  465 => 146,  455 => 139,  451 => 138,  445 => 135,  441 => 134,  437 => 132,  417 => 131,  405 => 127,  391 => 126,  384 => 121,  375 => 119,  371 => 118,  358 => 108,  355 => 107,  353 => 106,  348 => 103,  343 => 100,  326 => 97,  322 => 96,  318 => 95,  314 => 94,  311 => 93,  294 => 92,  278 => 79,  275 => 78,  269 => 75,  266 => 74,  264 => 73,  261 => 72,  257 => 70,  251 => 68,  249 => 67,  239 => 62,  234 => 61,  216 => 60,  213 => 59,  205 => 54,  199 => 50,  197 => 49,  193 => 47,  183 => 46,  168 => 40,  162 => 38,  152 => 37,  139 => 33,  136 => 32,  130 => 29,  116 => 25,  109 => 21,  102 => 17,  98 => 15,  95 => 14,  88 => 10,  82 => 7,  77 => 6,  74 => 5,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% if collector.totals.calls > 0 %}
        {% set icon %}
            {{ source('@WebProfiler/Icon/cache.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.totals.calls }}</span>
            <span class=\"sf-toolbar-info-piece-additional-detail\">
                <span class=\"sf-toolbar-label\">in</span>
                <span class=\"sf-toolbar-value\">{{ '%0.2f'|format(collector.totals.time * 1000) }}</span>
                <span class=\"sf-toolbar-label\">ms</span>
            </span>
        {% endset %}
        {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Cache Calls</b>
            <span>{{ collector.totals.calls }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>{{ '%0.2f'|format(collector.totals.time * 1000) }} ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Cache hits</b>
            <span>{{ collector.totals.hits }} / {{ collector.totals.reads }}{% if collector.totals.hit_read_ratio is not null %} ({{ collector.totals.hit_read_ratio }}%){% endif %}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Cache writes</b>
            <span>{{ collector.totals.writes }}</span>
        </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.totals.calls == 0 ? 'disabled' }}\">
    <span class=\"icon\">
        {{ source('@WebProfiler/Icon/cache.svg') }}
    </span>
    <strong>Cache</strong>
</span>
{% endblock %}

{% block panel %}
    <h2>Cache</h2>

    {% if collector.totals.calls == 0 %}
        <div class=\"empty empty-panel\">
            <p>No cache calls were made.</p>
        </div>
    {% else %}
        {{ _self.render_metrics(collector.totals, true) }}

        <h2>Pools</h2>
        <div class=\"sf-tabs\">
            {# the empty merge is needed to turn the iterator into an array #}
            {% set cache_pools_with_calls = collector.calls|filter(calls => calls|length > 0)|merge([]) %}
            {% for name, calls in cache_pools_with_calls %}
                <div class=\"tab {{ calls|length == 0 ? 'disabled' }}\">
                    <h3 class=\"tab-title\">{{ name }} <span class=\"badge\">{{ collector.statistics[name].calls }}</span></h3>

                    <div class=\"tab-content\">
                        <h4>Adapter</h4>
                        <div class=\"card\">
                            {% if collector.adapters[name] is defined %}
                                <code>{{ collector.adapters[name] }}</code>
                            {% else %}
                                <span class=\"text-muted\">Unable to get the adapter class.</span>
                            {% endif %}
                        </div>
                        {% if calls|length == 0 %}
                            <div class=\"empty\">
                                <p>No calls were made for {{ name }} pool.</p>
                            </div>
                        {% else %}
                            <h4>Metrics</h4>
                            {{ _self.render_metrics(collector.statistics[name]) }}

                            <h4>Calls</h4>
                            <table>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Time</th>
                                        <th>Call</th>
                                        <th>Hit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                {% for call in calls %}
                                    <tr>
                                        <td class=\"font-normal text-small text-muted nowrap\">{{ loop.index }}</td>
                                        <td class=\"nowrap\">{{ '%0.2f'|format((call.end - call.start) * 1000) }} ms</td>
                                        <td class=\"nowrap\">{{ call.name }}()</td>
                                        <td>{{ profiler_dump(call.value.result, maxDepth=2) }}</td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                        {% endif %}
                    </div>
                </div>

                {% if loop.last %}
                    <div class=\"tab\">
                        <h3 class=\"tab-title\">Pools without calls <span class=\"badge\">{{ collector.calls|filter(calls => 0 == calls|length)|length }}</span></h3>

                        <div class=\"tab-content\">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Cache pools that received no calls</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for cache_pool in collector.calls|filter(calls => 0 == calls|length)|keys|sort %}
                                        <tr><td>{{ cache_pool }}</td></tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                {% endif %}
            {% endfor %}
        </div>
    {% endif %}
{% endblock %}

{% macro render_metrics(pool, is_total = false) %}
    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ pool.calls }}</span>
            <span class=\"label\">{{ is_total ? 'Total calls' : 'Calls' }}</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">{{ '%0.2f'|format(pool.time * 1000) }} <span class=\"unit\">ms</span></span>
            <span class=\"label\">{{ is_total ? 'Total time' : 'Time' }}</span>
        </div>

        <div class=\"metric-divider\"></div>

        <div class=\"metric-group\">
            <div class=\"metric\">
                <span class=\"value\">{{ pool.reads }}</span>
                <span class=\"label\">{{ is_total ? 'Total reads' : 'Reads' }}</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">{{ pool.writes }}</span>
                <span class=\"label\">{{ is_total ? 'Total writes' : 'Writes' }}</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">{{ pool.deletes }}</span>
                <span class=\"label\">{{ is_total ? 'Total deletes' : 'Deletes' }}</span>
            </div>
        </div>

        <div class=\"metric-divider\"></div>

        <div class=\"metric-group\">
            <div class=\"metric\">
                <span class=\"value\">{{ pool.hits }}</span>
                <span class=\"label\">{{ is_total ? 'Total hits' : 'Hits' }}</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">{{ pool.misses }}</span>
                <span class=\"label\">{{ is_total ? 'Total misses' : 'Misses' }}</span>
            </div>
            <div class=\"metric\">
                    <span class=\"value\">
                        {{ pool.hit_read_ratio ?? 0 }} <span class=\"unit\">%</span>
                    </span>
                <span class=\"label\">Hits/reads</span>
            </div>
        </div>
    </div>
{% endmacro %}
", "@WebProfiler/Collector/cache.html.twig", "/Users/noahgrebet/Desktop/symfony/template/vendor/symfony/web-profiler-bundle/Resources/views/Collector/cache.html.twig");
    }
}
