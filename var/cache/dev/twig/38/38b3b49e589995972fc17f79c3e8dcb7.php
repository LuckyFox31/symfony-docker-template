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

/* @WebProfiler/Collector/serializer.html.twig */
class __TwigTemplate_01a569a2379f5140373659924d73d40b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/serializer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/serializer.html.twig"));

        // line 3
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/serializer.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 6, $this->source); })()), "handledCount", [], "any", false, false, false, 6) > 0)) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            ";
            echo twig_source($this->env, "@WebProfiler/Icon/serializer.svg");
            echo "
            <span class=\"sf-toolbar-value\">
                ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 10, $this->source); })()), "handledCount", [], "any", false, false, false, 10), "html", null, true);
            echo "
            </span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 13
            echo "
        ";
            // line 14
            ob_start();
            // line 15
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Total calls</b>
                <span class=\"sf-toolbar-status\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 17, $this->source); })()), "handledCount", [], "any", false, false, false, 17), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Total time</b>
                <span>
                    ";
            // line 22
            echo twig_escape_filter($this->env, twig_sprintf("%.2f", (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 22, $this->source); })()), "totalTime", [], "any", false, false, false, 22) * 1000)), "html", null, true);
            echo " <span class=\"unit\">ms</span>
                </span>
            </div>

            <div class=\"detailed-metrics\">
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Serialize</b>
                        <span class=\"sf-toolbar-status\">";
            // line 30
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 30, $this->source); })()), "data", [], "any", false, false, false, 30), "serialize", [], "any", false, false, false, 30)), "html", null, true);
            echo "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Deserialize</b>
                        <span class=\"sf-toolbar-status\">";
            // line 34
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 34, $this->source); })()), "data", [], "any", false, false, false, 34), "deserialize", [], "any", false, false, false, 34)), "html", null, true);
            echo "</span>
                    </div>
                </div>
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Encode</b>
                        <span class=\"sf-toolbar-status\">";
            // line 40
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 40, $this->source); })()), "data", [], "any", false, false, false, 40), "encode", [], "any", false, false, false, 40)), "html", null, true);
            echo "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Decode</b>
                        <span class=\"sf-toolbar-status\">";
            // line 44
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 44, $this->source); })()), "data", [], "any", false, false, false, 44), "decode", [], "any", false, false, false, 44)), "html", null, true);
            echo "</span>
                    </div>
                </div>
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Normalize</b>
                        <span class=\"sf-toolbar-status\">";
            // line 50
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 50, $this->source); })()), "data", [], "any", false, false, false, 50), "normalize", [], "any", false, false, false, 50)), "html", null, true);
            echo "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Denormalize</b>
                        <span class=\"sf-toolbar-status\">";
            // line 54
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 54, $this->source); })()), "data", [], "any", false, false, false, 54), "denormalize", [], "any", false, false, false, 54)), "html", null, true);
            echo "</span>
                    </div>
                </div>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 59
            echo "
        ";
            // line 60
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 60, $this->source); })())]);
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 64
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 65
        echo "    <span class=\"label ";
        echo (( !twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 65, $this->source); })()), "handledCount", [], "any", false, false, false, 65)) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 66
        echo twig_source($this->env, "@WebProfiler/Icon/serializer.svg");
        echo "</span>
        <strong>Serializer</strong>
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 71
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 72
        echo "    <h2>Serializer</h2>
    <div class=\"sf-serializer sf-reset\">
        ";
        // line 74
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 74, $this->source); })()), "handledCount", [], "any", false, false, false, 74)) {
            // line 75
            echo "            <div class=\"empty empty-panel\">
                <p>Nothing was handled by the serializer for this request.</p>
            </div>
        ";
        } else {
            // line 79
            echo "            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 81, $this->source); })()), "handledCount", [], "any", false, false, false, 81), "html", null, true);
            echo "</span>
                    <span class=\"label\">Handled</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">";
            // line 86
            echo twig_escape_filter($this->env, twig_sprintf("%.2f", (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 86, $this->source); })()), "totalTime", [], "any", false, false, false, 86) * 1000)), "html", null, true);
            echo " <span class=\"unit\">ms</span></span>
                    <span class=\"label\">Total time</span>
                </div>
            </div>

            <div class=\"sf-tabs\">
                ";
            // line 92
            echo twig_call_macro($macros["helper"], "macro_render_serialize_tab", [twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 92, $this->source); })()), "data", [], "any", false, false, false, 92), true], 92, $context, $this->getSourceContext());
            echo "
                ";
            // line 93
            echo twig_call_macro($macros["helper"], "macro_render_serialize_tab", [twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 93, $this->source); })()), "data", [], "any", false, false, false, 93), false], 93, $context, $this->getSourceContext());
            echo "

                ";
            // line 95
            echo twig_call_macro($macros["helper"], "macro_render_normalize_tab", [twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 95, $this->source); })()), "data", [], "any", false, false, false, 95), true], 95, $context, $this->getSourceContext());
            echo "
                ";
            // line 96
            echo twig_call_macro($macros["helper"], "macro_render_normalize_tab", [twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 96, $this->source); })()), "data", [], "any", false, false, false, 96), false], 96, $context, $this->getSourceContext());
            echo "

                ";
            // line 98
            echo twig_call_macro($macros["helper"], "macro_render_encode_tab", [twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 98, $this->source); })()), "data", [], "any", false, false, false, 98), true], 98, $context, $this->getSourceContext());
            echo "
                ";
            // line 99
            echo twig_call_macro($macros["helper"], "macro_render_encode_tab", [twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 99, $this->source); })()), "data", [], "any", false, false, false, 99), false], 99, $context, $this->getSourceContext());
            echo "
            </div>
        ";
        }
        // line 102
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 105
    public function macro_render_serialize_tab($__collectorData__ = null, $__serialize__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "collectorData" => $__collectorData__,
            "serialize" => $__serialize__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_serialize_tab"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_serialize_tab"));

            // line 106
            echo "    ";
            $context["data"] = (((isset($context["serialize"]) || array_key_exists("serialize", $context) ? $context["serialize"] : (function () { throw new RuntimeError('Variable "serialize" does not exist.', 106, $this->source); })())) ? (twig_get_attribute($this->env, $this->source, (isset($context["collectorData"]) || array_key_exists("collectorData", $context) ? $context["collectorData"] : (function () { throw new RuntimeError('Variable "collectorData" does not exist.', 106, $this->source); })()), "serialize", [], "any", false, false, false, 106)) : (twig_get_attribute($this->env, $this->source, (isset($context["collectorData"]) || array_key_exists("collectorData", $context) ? $context["collectorData"] : (function () { throw new RuntimeError('Variable "collectorData" does not exist.', 106, $this->source); })()), "deserialize", [], "any", false, false, false, 106)));
            // line 107
            echo "    ";
            $context["cellPrefix"] = (((isset($context["serialize"]) || array_key_exists("serialize", $context) ? $context["serialize"] : (function () { throw new RuntimeError('Variable "serialize" does not exist.', 107, $this->source); })())) ? ("serialize") : ("deserialize"));
            // line 108
            echo "
    <div class=\"tab ";
            // line 109
            echo (( !(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 109, $this->source); })())) ? ("disabled") : (""));
            echo "\">
        <h3 class=\"tab-title\">";
            // line 110
            echo (((isset($context["serialize"]) || array_key_exists("serialize", $context) ? $context["serialize"] : (function () { throw new RuntimeError('Variable "serialize" does not exist.', 110, $this->source); })())) ? ("serialize") : ("deserialize"));
            echo " <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 110, $this->source); })())), "html", null, true);
            echo "</h3>
        <div class=\"tab-content\">
            ";
            // line 112
            if ( !twig_length_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 112, $this->source); })()))) {
                // line 113
                echo "                <div class=\"empty\">
                    <p>Nothing was ";
                // line 114
                echo (((isset($context["serialize"]) || array_key_exists("serialize", $context) ? $context["serialize"] : (function () { throw new RuntimeError('Variable "serialize" does not exist.', 114, $this->source); })())) ? ("serialized") : ("deserialized"));
                echo ".</p>
                </div>
            ";
            } else {
                // line 117
                echo "                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Normalizer</th>
                            <th>Encoder</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
                // line 129
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 129, $this->source); })()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 130
                    echo "                            <tr>
                                <td>";
                    // line 131
                    echo twig_call_macro($macros["helper"], "macro_render_data_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 131), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 131, $this->source); })())], 131, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 132
                    echo twig_call_macro($macros["helper"], "macro_render_context_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 132), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 132, $this->source); })())], 132, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 133
                    echo twig_call_macro($macros["helper"], "macro_render_normalizer_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 133), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 133, $this->source); })())], 133, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 134
                    echo twig_call_macro($macros["helper"], "macro_render_encoder_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 134), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 134, $this->source); })())], 134, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 135
                    echo twig_call_macro($macros["helper"], "macro_render_time_cell", [$context["item"]], 135, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 136
                    echo twig_call_macro($macros["helper"], "macro_render_caller_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 136), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 136, $this->source); })())], 136, $context, $this->getSourceContext());
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 139
                echo "                    </tbody>
                </table>
            ";
            }
            // line 142
            echo "        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 146
    public function macro_render_caller_cell($__item__ = null, $__index__ = null, $__method__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "index" => $__index__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_caller_cell"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_caller_cell"));

            // line 147
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "caller", [], "any", true, true, false, 147)) {
                // line 148
                echo "        <span class=\"metadata\">
            ";
                // line 149
                $context["caller"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 149, $this->source); })()), "caller", [], "any", false, false, false, 149);
                // line 150
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 150, $this->source); })()), "line", [], "any", false, false, false, 150)) {
                    // line 151
                    echo "                ";
                    $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 151, $this->source); })()), "file", [], "any", false, false, false, 151), twig_get_attribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 151, $this->source); })()), "line", [], "any", false, false, false, 151));
                    // line 152
                    echo "                ";
                    if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 152, $this->source); })())) {
                        // line 153
                        echo "                    <a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 153, $this->source); })()), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 153, $this->source); })()), "file", [], "any", false, false, false, 153), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 153, $this->source); })()), "name", [], "any", false, false, false, 153), "html", null, true);
                        echo "</a>
                ";
                    } else {
                        // line 155
                        echo "                    <abbr title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 155, $this->source); })()), "file", [], "any", false, false, false, 155), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 155, $this->source); })()), "name", [], "any", false, false, false, 155), "html", null, true);
                        echo "</abbr>
                ";
                    }
                    // line 157
                    echo "            ";
                } else {
                    // line 158
                    echo "                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 158, $this->source); })()), "name", [], "any", false, false, false, 158), "html", null, true);
                    echo "
            ";
                }
                // line 160
                echo "            line <a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-trace-";
                echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 160, $this->source); })()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 160, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 160, $this->source); })()), "line", [], "any", false, false, false, 160), "html", null, true);
                echo "</a>
        </span>

        <div class=\"sf-serializer-compact hidden\" id=\"sf-trace-";
                // line 163
                echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 163, $this->source); })()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 163, $this->source); })()), "html", null, true);
                echo "\">
            <div class=\"trace\">
                ";
                // line 165
                echo twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->fileExcerpt(twig_get_attribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 165, $this->source); })()), "file", [], "any", false, false, false, 165), twig_get_attribute($this->env, $this->source, (isset($context["caller"]) || array_key_exists("caller", $context) ? $context["caller"] : (function () { throw new RuntimeError('Variable "caller" does not exist.', 165, $this->source); })()), "line", [], "any", false, false, false, 165)), ["#DD0000" => "var(--highlight-string)", "#007700" => "var(--highlight-keyword)", "#0000BB" => "var(--highlight-default)", "#FF8000" => "var(--highlight-comment)"]);
                // line 170
                echo "
            </div>
        </div>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 176
    public function macro_render_normalize_tab($__collectorData__ = null, $__normalize__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "collectorData" => $__collectorData__,
            "normalize" => $__normalize__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_normalize_tab"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_normalize_tab"));

            // line 177
            echo "    ";
            $context["data"] = (((isset($context["normalize"]) || array_key_exists("normalize", $context) ? $context["normalize"] : (function () { throw new RuntimeError('Variable "normalize" does not exist.', 177, $this->source); })())) ? (twig_get_attribute($this->env, $this->source, (isset($context["collectorData"]) || array_key_exists("collectorData", $context) ? $context["collectorData"] : (function () { throw new RuntimeError('Variable "collectorData" does not exist.', 177, $this->source); })()), "normalize", [], "any", false, false, false, 177)) : (twig_get_attribute($this->env, $this->source, (isset($context["collectorData"]) || array_key_exists("collectorData", $context) ? $context["collectorData"] : (function () { throw new RuntimeError('Variable "collectorData" does not exist.', 177, $this->source); })()), "denormalize", [], "any", false, false, false, 177)));
            // line 178
            echo "    ";
            $context["cellPrefix"] = (((isset($context["normalize"]) || array_key_exists("normalize", $context) ? $context["normalize"] : (function () { throw new RuntimeError('Variable "normalize" does not exist.', 178, $this->source); })())) ? ("normalize") : ("denormalize"));
            // line 179
            echo "
    <div class=\"tab ";
            // line 180
            echo (( !(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 180, $this->source); })())) ? ("disabled") : (""));
            echo "\">
        <h3 class=\"tab-title\">";
            // line 181
            echo (((isset($context["normalize"]) || array_key_exists("normalize", $context) ? $context["normalize"] : (function () { throw new RuntimeError('Variable "normalize" does not exist.', 181, $this->source); })())) ? ("normalize") : ("denormalize"));
            echo " <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 181, $this->source); })())), "html", null, true);
            echo "</h3>
        <div class=\"tab-content\">
            ";
            // line 183
            if ( !twig_length_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 183, $this->source); })()))) {
                // line 184
                echo "                <div class=\"empty\">
                    <p>Nothing was ";
                // line 185
                echo (((isset($context["normalize"]) || array_key_exists("normalize", $context) ? $context["normalize"] : (function () { throw new RuntimeError('Variable "normalize" does not exist.', 185, $this->source); })())) ? ("normalized") : ("denormalized"));
                echo ".</p>
                </div>
            ";
            } else {
                // line 188
                echo "                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Normalizer</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
                // line 199
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 199, $this->source); })()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 200
                    echo "                            <tr>
                                <td>";
                    // line 201
                    echo twig_call_macro($macros["helper"], "macro_render_data_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 201), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 201, $this->source); })())], 201, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 202
                    echo twig_call_macro($macros["helper"], "macro_render_context_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 202), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 202, $this->source); })())], 202, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 203
                    echo twig_call_macro($macros["helper"], "macro_render_normalizer_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 203), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 203, $this->source); })())], 203, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 204
                    echo twig_call_macro($macros["helper"], "macro_render_time_cell", [$context["item"]], 204, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 205
                    echo twig_call_macro($macros["helper"], "macro_render_caller_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 205), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 205, $this->source); })())], 205, $context, $this->getSourceContext());
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 208
                echo "                    </tbody>
                </table>
            ";
            }
            // line 211
            echo "        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 215
    public function macro_render_encode_tab($__collectorData__ = null, $__encode__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "collectorData" => $__collectorData__,
            "encode" => $__encode__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_encode_tab"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_encode_tab"));

            // line 216
            echo "    ";
            $context["data"] = (((isset($context["encode"]) || array_key_exists("encode", $context) ? $context["encode"] : (function () { throw new RuntimeError('Variable "encode" does not exist.', 216, $this->source); })())) ? (twig_get_attribute($this->env, $this->source, (isset($context["collectorData"]) || array_key_exists("collectorData", $context) ? $context["collectorData"] : (function () { throw new RuntimeError('Variable "collectorData" does not exist.', 216, $this->source); })()), "encode", [], "any", false, false, false, 216)) : (twig_get_attribute($this->env, $this->source, (isset($context["collectorData"]) || array_key_exists("collectorData", $context) ? $context["collectorData"] : (function () { throw new RuntimeError('Variable "collectorData" does not exist.', 216, $this->source); })()), "decode", [], "any", false, false, false, 216)));
            // line 217
            echo "    ";
            $context["cellPrefix"] = (((isset($context["encode"]) || array_key_exists("encode", $context) ? $context["encode"] : (function () { throw new RuntimeError('Variable "encode" does not exist.', 217, $this->source); })())) ? ("encode") : ("decode"));
            // line 218
            echo "
    <div class=\"tab ";
            // line 219
            echo (( !(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 219, $this->source); })())) ? ("disabled") : (""));
            echo "\">
        <h3 class=\"tab-title\">";
            // line 220
            echo (((isset($context["encode"]) || array_key_exists("encode", $context) ? $context["encode"] : (function () { throw new RuntimeError('Variable "encode" does not exist.', 220, $this->source); })())) ? ("encode") : ("decode"));
            echo " <span class=\"badge\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 220, $this->source); })())), "html", null, true);
            echo "</h3>
        <div class=\"tab-content\">
            ";
            // line 222
            if ( !twig_length_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 222, $this->source); })()))) {
                // line 223
                echo "                <div class=\"empty\">
                    <p>Nothing was ";
                // line 224
                echo (((isset($context["encode"]) || array_key_exists("encode", $context) ? $context["encode"] : (function () { throw new RuntimeError('Variable "encode" does not exist.', 224, $this->source); })())) ? ("encoded") : ("decoded"));
                echo ".</p>
                </div>
            ";
            } else {
                // line 227
                echo "                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Encoder</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
                // line 238
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 238, $this->source); })()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 239
                    echo "                            <tr>
                                <td>";
                    // line 240
                    echo twig_call_macro($macros["helper"], "macro_render_data_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 240), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 240, $this->source); })())], 240, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 241
                    echo twig_call_macro($macros["helper"], "macro_render_context_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 241), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 241, $this->source); })())], 241, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 242
                    echo twig_call_macro($macros["helper"], "macro_render_encoder_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 242), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 242, $this->source); })())], 242, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 243
                    echo twig_call_macro($macros["helper"], "macro_render_time_cell", [$context["item"]], 243, $context, $this->getSourceContext());
                    echo "</td>
                                <td>";
                    // line 244
                    echo twig_call_macro($macros["helper"], "macro_render_caller_cell", [$context["item"], twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 244), (isset($context["cellPrefix"]) || array_key_exists("cellPrefix", $context) ? $context["cellPrefix"] : (function () { throw new RuntimeError('Variable "cellPrefix" does not exist.', 244, $this->source); })())], 244, $context, $this->getSourceContext());
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 247
                echo "                    </tbody>
                </table>
            ";
            }
            // line 250
            echo "        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 254
    public function macro_render_data_cell($__item__ = null, $__index__ = null, $__method__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "index" => $__index__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_data_cell"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_data_cell"));

            // line 255
            echo "    ";
            $context["data_id"] = ((("data-" . (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 255, $this->source); })())) . "-") . (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 255, $this->source); })()));
            // line 256
            echo "
    <span class=\"nowrap\">";
            // line 257
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 257, $this->source); })()), "dataType", [], "any", false, false, false, 257), "html", null, true);
            echo "</span>

    <div>
        <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
            // line 260
            echo twig_escape_filter($this->env, (isset($context["data_id"]) || array_key_exists("data_id", $context) ? $context["data_id"] : (function () { throw new RuntimeError('Variable "data_id" does not exist.', 260, $this->source); })()), "html", null, true);
            echo "\" data-toggle-alt-content=\"Hide contents\">Show contents</a>
        <div id=\"";
            // line 261
            echo twig_escape_filter($this->env, (isset($context["data_id"]) || array_key_exists("data_id", $context) ? $context["data_id"] : (function () { throw new RuntimeError('Variable "data_id" does not exist.', 261, $this->source); })()), "html", null, true);
            echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
            ";
            // line 262
            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 262, $this->source); })()), "data", [], "any", false, false, false, 262));
            echo "
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

    // line 267
    public function macro_render_context_cell($__item__ = null, $__index__ = null, $__method__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "index" => $__index__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_context_cell"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_context_cell"));

            // line 268
            echo "    ";
            $context["context_id"] = ((("context-" . (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 268, $this->source); })())) . "-") . (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 268, $this->source); })()));
            // line 269
            echo "
    ";
            // line 270
            if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 270, $this->source); })()), "type", [], "any", false, false, false, 270)) {
                // line 271
                echo "        <span class=\"nowrap\">Type: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 271, $this->source); })()), "type", [], "any", false, false, false, 271), "html", null, true);
                echo "</span>
        <div class=\"nowrap\">Format: ";
                // line 272
                ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 272, $this->source); })()), "format", [], "any", false, false, false, 272)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 272, $this->source); })()), "format", [], "any", false, false, false, 272), "html", null, true))) : (print ("none")));
                echo "</div>
    ";
            } else {
                // line 274
                echo "        <span class=\"nowrap\">Format: ";
                ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 274, $this->source); })()), "format", [], "any", false, false, false, 274)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 274, $this->source); })()), "format", [], "any", false, false, false, 274), "html", null, true))) : (print ("none")));
                echo "</span>
    ";
            }
            // line 276
            echo "
    <div>
        <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
            // line 278
            echo twig_escape_filter($this->env, (isset($context["context_id"]) || array_key_exists("context_id", $context) ? $context["context_id"] : (function () { throw new RuntimeError('Variable "context_id" does not exist.', 278, $this->source); })()), "html", null, true);
            echo "\" data-toggle-alt-content=\"Hide context\">Show context</a>
        <div id=\"";
            // line 279
            echo twig_escape_filter($this->env, (isset($context["context_id"]) || array_key_exists("context_id", $context) ? $context["context_id"] : (function () { throw new RuntimeError('Variable "context_id" does not exist.', 279, $this->source); })()), "html", null, true);
            echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
            ";
            // line 280
            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 280, $this->source); })()), "context", [], "any", false, false, false, 280));
            echo "
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

    // line 285
    public function macro_render_normalizer_cell($__item__ = null, $__index__ = null, $__method__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "index" => $__index__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_normalizer_cell"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_normalizer_cell"));

            // line 286
            echo "    ";
            $context["nested_normalizers_id"] = ((("nested-normalizers-" . (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 286, $this->source); })())) . "-") . (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 286, $this->source); })()));
            // line 287
            echo "
    ";
            // line 288
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "normalizer", [], "any", true, true, false, 288)) {
                // line 289
                echo "        <span class=\"nowrap\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 289, $this->source); })()), "normalizer", [], "any", false, false, false, 289), "file", [], "any", false, false, false, 289), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 289, $this->source); })()), "normalizer", [], "any", false, false, false, 289), "line", [], "any", false, false, false, 289)), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 289, $this->source); })()), "normalizer", [], "any", false, false, false, 289), "file", [], "any", false, false, false, 289), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 289, $this->source); })()), "normalizer", [], "any", false, false, false, 289), "class", [], "any", false, false, false, 289), "html", null, true);
                echo "</a> (";
                echo twig_escape_filter($this->env, twig_sprintf("%.2f", (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 289, $this->source); })()), "normalizer", [], "any", false, false, false, 289), "time", [], "any", false, false, false, 289) * 1000)), "html", null, true);
                echo " ms)</span>
    ";
            }
            // line 291
            echo "
    ";
            // line 292
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 292, $this->source); })()), "normalization", [], "any", false, false, false, 292)) > 1)) {
                // line 293
                echo "        <div>
            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                // line 294
                echo twig_escape_filter($this->env, (isset($context["nested_normalizers_id"]) || array_key_exists("nested_normalizers_id", $context) ? $context["nested_normalizers_id"] : (function () { throw new RuntimeError('Variable "nested_normalizers_id" does not exist.', 294, $this->source); })()), "html", null, true);
                echo "\" data-toggle-alt-content=\"Hide nested normalizers\">Show nested normalizers</a>
            <div id=\"";
                // line 295
                echo twig_escape_filter($this->env, (isset($context["nested_normalizers_id"]) || array_key_exists("nested_normalizers_id", $context) ? $context["nested_normalizers_id"] : (function () { throw new RuntimeError('Variable "nested_normalizers_id" does not exist.', 295, $this->source); })()), "html", null, true);
                echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                <ul class=\"text-small\" style=\"line-height:80%;margin-top:10px\">
                    ";
                // line 297
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 297, $this->source); })()), "normalization", [], "any", false, false, false, 297));
                foreach ($context['_seq'] as $context["_key"] => $context["normalizer"]) {
                    // line 298
                    echo "                        <li><span class=\"nowrap\">x";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["normalizer"], "calls", [], "any", false, false, false, 298), "html", null, true);
                    echo " <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, $context["normalizer"], "file", [], "any", false, false, false, 298), twig_get_attribute($this->env, $this->source, $context["normalizer"], "line", [], "any", false, false, false, 298)), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["normalizer"], "file", [], "any", false, false, false, 298), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["normalizer"], "class", [], "any", false, false, false, 298), "html", null, true);
                    echo "</a> (";
                    echo twig_escape_filter($this->env, twig_sprintf("%.2f", (twig_get_attribute($this->env, $this->source, $context["normalizer"], "time", [], "any", false, false, false, 298) * 1000)), "html", null, true);
                    echo " ms)</span></li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['normalizer'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 300
                echo "                </ul>
            </div>
        </div>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 306
    public function macro_render_encoder_cell($__item__ = null, $__index__ = null, $__method__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "index" => $__index__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_encoder_cell"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_encoder_cell"));

            // line 307
            echo "    ";
            $context["nested_encoders_id"] = ((("nested-encoders-" . (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 307, $this->source); })())) . "-") . (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 307, $this->source); })()));
            // line 308
            echo "
    ";
            // line 309
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "encoder", [], "any", true, true, false, 309)) {
                // line 310
                echo "        <span class=\"nowrap\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 310, $this->source); })()), "encoder", [], "any", false, false, false, 310), "file", [], "any", false, false, false, 310), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 310, $this->source); })()), "encoder", [], "any", false, false, false, 310), "line", [], "any", false, false, false, 310)), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 310, $this->source); })()), "encoder", [], "any", false, false, false, 310), "file", [], "any", false, false, false, 310), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 310, $this->source); })()), "encoder", [], "any", false, false, false, 310), "class", [], "any", false, false, false, 310), "html", null, true);
                echo "</a> (";
                echo twig_escape_filter($this->env, twig_sprintf("%.2f", (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 310, $this->source); })()), "encoder", [], "any", false, false, false, 310), "time", [], "any", false, false, false, 310) * 1000)), "html", null, true);
                echo " ms)</span>
    ";
            }
            // line 312
            echo "
    ";
            // line 313
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 313, $this->source); })()), "encoding", [], "any", false, false, false, 313)) > 1)) {
                // line 314
                echo "        <div>
            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                // line 315
                echo twig_escape_filter($this->env, (isset($context["nested_encoders_id"]) || array_key_exists("nested_encoders_id", $context) ? $context["nested_encoders_id"] : (function () { throw new RuntimeError('Variable "nested_encoders_id" does not exist.', 315, $this->source); })()), "html", null, true);
                echo "\" data-toggle-alt-content=\"Hide nested encoders\">Show nested encoders</a>
            <div id=\"";
                // line 316
                echo twig_escape_filter($this->env, (isset($context["nested_encoders_id"]) || array_key_exists("nested_encoders_id", $context) ? $context["nested_encoders_id"] : (function () { throw new RuntimeError('Variable "nested_encoders_id" does not exist.', 316, $this->source); })()), "html", null, true);
                echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                <ul class=\"text-small\" style=\"line-height:80%;margin-top:10px\">
                    ";
                // line 318
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 318, $this->source); })()), "encoding", [], "any", false, false, false, 318));
                foreach ($context['_seq'] as $context["_key"] => $context["encoder"]) {
                    // line 319
                    echo "                        <li><span class=\"nowrap\">x";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["encoder"], "calls", [], "any", false, false, false, 319), "html", null, true);
                    echo " <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, $context["encoder"], "file", [], "any", false, false, false, 319), twig_get_attribute($this->env, $this->source, $context["encoder"], "line", [], "any", false, false, false, 319)), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["encoder"], "file", [], "any", false, false, false, 319), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["encoder"], "class", [], "any", false, false, false, 319), "html", null, true);
                    echo "</a> (";
                    echo twig_escape_filter($this->env, twig_sprintf("%.2f", (twig_get_attribute($this->env, $this->source, $context["encoder"], "time", [], "any", false, false, false, 319) * 1000)), "html", null, true);
                    echo " ms)</span></li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['encoder'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 321
                echo "                </ul>
            </div>
        </div>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 327
    public function macro_render_time_cell($__item__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_time_cell"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_time_cell"));

            // line 328
            echo "    <span class=\"nowrap\">";
            echo twig_escape_filter($this->env, twig_sprintf("%.2f", (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 328, $this->source); })()), "time", [], "any", false, false, false, 328) * 1000)), "html", null, true);
            echo " ms</span>
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
        return "@WebProfiler/Collector/serializer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1170 => 328,  1151 => 327,  1132 => 321,  1115 => 319,  1111 => 318,  1106 => 316,  1102 => 315,  1099 => 314,  1097 => 313,  1094 => 312,  1082 => 310,  1080 => 309,  1077 => 308,  1074 => 307,  1053 => 306,  1034 => 300,  1017 => 298,  1013 => 297,  1008 => 295,  1004 => 294,  1001 => 293,  999 => 292,  996 => 291,  984 => 289,  982 => 288,  979 => 287,  976 => 286,  955 => 285,  936 => 280,  932 => 279,  928 => 278,  924 => 276,  918 => 274,  913 => 272,  908 => 271,  906 => 270,  903 => 269,  900 => 268,  879 => 267,  860 => 262,  856 => 261,  852 => 260,  846 => 257,  843 => 256,  840 => 255,  819 => 254,  802 => 250,  797 => 247,  780 => 244,  776 => 243,  772 => 242,  768 => 241,  764 => 240,  761 => 239,  744 => 238,  731 => 227,  725 => 224,  722 => 223,  720 => 222,  713 => 220,  709 => 219,  706 => 218,  703 => 217,  700 => 216,  680 => 215,  663 => 211,  658 => 208,  641 => 205,  637 => 204,  633 => 203,  629 => 202,  625 => 201,  622 => 200,  605 => 199,  592 => 188,  586 => 185,  583 => 184,  581 => 183,  574 => 181,  570 => 180,  567 => 179,  564 => 178,  561 => 177,  541 => 176,  522 => 170,  520 => 165,  513 => 163,  502 => 160,  496 => 158,  493 => 157,  485 => 155,  475 => 153,  472 => 152,  469 => 151,  466 => 150,  464 => 149,  461 => 148,  458 => 147,  437 => 146,  420 => 142,  415 => 139,  398 => 136,  394 => 135,  390 => 134,  386 => 133,  382 => 132,  378 => 131,  375 => 130,  358 => 129,  344 => 117,  338 => 114,  335 => 113,  333 => 112,  326 => 110,  322 => 109,  319 => 108,  316 => 107,  313 => 106,  293 => 105,  282 => 102,  276 => 99,  272 => 98,  267 => 96,  263 => 95,  258 => 93,  254 => 92,  245 => 86,  237 => 81,  233 => 79,  227 => 75,  225 => 74,  221 => 72,  211 => 71,  197 => 66,  192 => 65,  182 => 64,  169 => 60,  166 => 59,  158 => 54,  151 => 50,  142 => 44,  135 => 40,  126 => 34,  119 => 30,  108 => 22,  100 => 17,  96 => 15,  94 => 14,  91 => 13,  85 => 10,  79 => 8,  76 => 7,  73 => 6,  63 => 5,  52 => 1,  50 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as helper %}

{% block toolbar %}
    {% if collector.handledCount > 0 %}
        {% set icon %}
            {{ source('@WebProfiler/Icon/serializer.svg') }}
            <span class=\"sf-toolbar-value\">
                {{ collector.handledCount }}
            </span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Total calls</b>
                <span class=\"sf-toolbar-status\">{{ collector.handledCount }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Total time</b>
                <span>
                    {{ '%.2f'|format(collector.totalTime * 1000) }} <span class=\"unit\">ms</span>
                </span>
            </div>

            <div class=\"detailed-metrics\">
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Serialize</b>
                        <span class=\"sf-toolbar-status\">{{ collector.data.serialize|length }}</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Deserialize</b>
                        <span class=\"sf-toolbar-status\">{{ collector.data.deserialize|length }}</span>
                    </div>
                </div>
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Encode</b>
                        <span class=\"sf-toolbar-status\">{{ collector.data.encode|length }}</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Decode</b>
                        <span class=\"sf-toolbar-status\">{{ collector.data.decode|length }}</span>
                    </div>
                </div>
                <div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Normalize</b>
                        <span class=\"sf-toolbar-status\">{{ collector.data.normalize|length }}</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Denormalize</b>
                        <span class=\"sf-toolbar-status\">{{ collector.data.denormalize|length }}</span>
                    </div>
                </div>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {{ not collector.handledCount ? 'disabled' }}\">
        <span class=\"icon\">{{ source('@WebProfiler/Icon/serializer.svg') }}</span>
        <strong>Serializer</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Serializer</h2>
    <div class=\"sf-serializer sf-reset\">
        {% if not collector.handledCount %}
            <div class=\"empty empty-panel\">
                <p>Nothing was handled by the serializer for this request.</p>
            </div>
        {% else %}
            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.handledCount }}</span>
                    <span class=\"label\">Handled</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">{{ '%.2f'|format(collector.totalTime * 1000) }} <span class=\"unit\">ms</span></span>
                    <span class=\"label\">Total time</span>
                </div>
            </div>

            <div class=\"sf-tabs\">
                {{ helper.render_serialize_tab(collector.data, true) }}
                {{ helper.render_serialize_tab(collector.data, false) }}

                {{ helper.render_normalize_tab(collector.data, true) }}
                {{ helper.render_normalize_tab(collector.data, false) }}

                {{ helper.render_encode_tab(collector.data, true) }}
                {{ helper.render_encode_tab(collector.data, false) }}
            </div>
        {% endif %}
    </div>
{% endblock %}

{% macro render_serialize_tab(collectorData, serialize) %}
    {% set data = serialize ? collectorData.serialize : collectorData.deserialize %}
    {% set cellPrefix = serialize ? 'serialize' : 'deserialize' %}

    <div class=\"tab {{ not data ? 'disabled' }}\">
        <h3 class=\"tab-title\">{{ serialize ? 'serialize' : 'deserialize' }} <span class=\"badge\">{{ data|length }}</h3>
        <div class=\"tab-content\">
            {% if not data|length %}
                <div class=\"empty\">
                    <p>Nothing was {{ serialize ? 'serialized' : 'deserialized' }}.</p>
                </div>
            {% else %}
                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Normalizer</th>
                            <th>Encoder</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in data %}
                            <tr>
                                <td>{{ helper.render_data_cell(item, loop.index, cellPrefix) }}</td>
                                <td>{{ helper.render_context_cell(item, loop.index, cellPrefix) }}</td>
                                <td>{{ helper.render_normalizer_cell(item, loop.index, cellPrefix) }}</td>
                                <td>{{ helper.render_encoder_cell(item, loop.index, cellPrefix) }}</td>
                                <td>{{ helper.render_time_cell(item) }}</td>
                                <td>{{ helper.render_caller_cell(item, loop.index, cellPrefix) }}</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            {% endif %}
        </div>
    </div>
{% endmacro %}

{% macro render_caller_cell(item, index, method) %}
    {% if item.caller is defined %}
        <span class=\"metadata\">
            {% set caller = item.caller %}
            {% if caller.line %}
                {% set link = caller.file|file_link(caller.line) %}
                {% if link %}
                    <a href=\"{{ link }}\" title=\"{{ caller.file }}\">{{ caller.name }}</a>
                {% else %}
                    <abbr title=\"{{ caller.file }}\">{{ caller.name }}</abbr>
                {% endif %}
            {% else %}
                {{ caller.name }}
            {% endif %}
            line <a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-trace-{{ method }}-{{ index }}\">{{ caller.line }}</a>
        </span>

        <div class=\"sf-serializer-compact hidden\" id=\"sf-trace-{{ method }}-{{ index }}\">
            <div class=\"trace\">
                {{ caller.file|file_excerpt(caller.line)|replace({
                    '#DD0000': 'var(--highlight-string)',
                    '#007700': 'var(--highlight-keyword)',
                    '#0000BB': 'var(--highlight-default)',
                    '#FF8000': 'var(--highlight-comment)'
                })|raw }}
            </div>
        </div>
    {% endif %}
{% endmacro %}

{% macro render_normalize_tab(collectorData, normalize) %}
    {% set data = normalize ? collectorData.normalize : collectorData.denormalize %}
    {% set cellPrefix = normalize ? 'normalize' : 'denormalize' %}

    <div class=\"tab {{ not data ? 'disabled' }}\">
        <h3 class=\"tab-title\">{{ normalize ? 'normalize' : 'denormalize' }} <span class=\"badge\">{{ data|length }}</h3>
        <div class=\"tab-content\">
            {% if not data|length %}
                <div class=\"empty\">
                    <p>Nothing was {{ normalize ? 'normalized' : 'denormalized' }}.</p>
                </div>
            {% else %}
                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Normalizer</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in data %}
                            <tr>
                                <td>{{ helper.render_data_cell(item, loop.index, cellPrefix) }}</td>
                                <td>{{ helper.render_context_cell(item, loop.index, cellPrefix) }}</td>
                                <td>{{ helper.render_normalizer_cell(item, loop.index, cellPrefix) }}</td>
                                <td>{{ helper.render_time_cell(item) }}</td>
                                <td>{{ helper.render_caller_cell(item, loop.index, cellPrefix) }}</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            {% endif %}
        </div>
    </div>
{% endmacro %}

{% macro render_encode_tab(collectorData, encode) %}
    {% set data = encode ? collectorData.encode : collectorData.decode %}
    {% set cellPrefix = encode ? 'encode' : 'decode' %}

    <div class=\"tab {{ not data ? 'disabled' }}\">
        <h3 class=\"tab-title\">{{ encode ? 'encode' : 'decode' }} <span class=\"badge\">{{ data|length }}</h3>
        <div class=\"tab-content\">
            {% if not data|length %}
                <div class=\"empty\">
                    <p>Nothing was {{ encode ? 'encoded' : 'decoded' }}.</p>
                </div>
            {% else %}
                <table>
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Context</th>
                            <th>Encoder</th>
                            <th>Time</th>
                            <th>Caller</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in data %}
                            <tr>
                                <td>{{ helper.render_data_cell(item, loop.index, cellPrefix) }}</td>
                                <td>{{ helper.render_context_cell(item, loop.index, cellPrefix) }}</td>
                                <td>{{ helper.render_encoder_cell(item, loop.index, cellPrefix) }}</td>
                                <td>{{ helper.render_time_cell(item) }}</td>
                                <td>{{ helper.render_caller_cell(item, loop.index, cellPrefix) }}</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            {% endif %}
        </div>
    </div>
{% endmacro %}

{% macro render_data_cell(item, index, method) %}
    {% set data_id = 'data-' ~ method ~ '-' ~ index %}

    <span class=\"nowrap\">{{ item.dataType }}</span>

    <div>
        <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ data_id }}\" data-toggle-alt-content=\"Hide contents\">Show contents</a>
        <div id=\"{{ data_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
            {{ profiler_dump(item.data) }}
        </div>
    </div>
{% endmacro %}

{% macro render_context_cell(item, index, method) %}
    {% set context_id = 'context-' ~ method ~ '-' ~ index %}

    {% if item.type %}
        <span class=\"nowrap\">Type: {{ item.type }}</span>
        <div class=\"nowrap\">Format: {{ item.format ? item.format : 'none' }}</div>
    {% else %}
        <span class=\"nowrap\">Format: {{ item.format ? item.format : 'none' }}</span>
    {% endif %}

    <div>
        <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ context_id }}\" data-toggle-alt-content=\"Hide context\">Show context</a>
        <div id=\"{{ context_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
            {{ profiler_dump(item.context) }}
        </div>
    </div>
{% endmacro %}

{% macro render_normalizer_cell(item, index, method) %}
    {% set nested_normalizers_id = 'nested-normalizers-' ~ method ~ '-' ~ index %}

    {% if item.normalizer is defined %}
        <span class=\"nowrap\"><a href=\"{{ item.normalizer.file|file_link(item.normalizer.line) }}\" title=\"{{ item.normalizer.file }}\">{{ item.normalizer.class }}</a> ({{ '%.2f'|format(item.normalizer.time * 1000) }} ms)</span>
    {% endif %}

    {% if item.normalization|length > 1 %}
        <div>
            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ nested_normalizers_id }}\" data-toggle-alt-content=\"Hide nested normalizers\">Show nested normalizers</a>
            <div id=\"{{ nested_normalizers_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
                <ul class=\"text-small\" style=\"line-height:80%;margin-top:10px\">
                    {% for normalizer in item.normalization %}
                        <li><span class=\"nowrap\">x{{ normalizer.calls }} <a href=\"{{ normalizer.file|file_link(normalizer.line) }}\" title=\"{{ normalizer.file }}\">{{ normalizer.class }}</a> ({{ '%.2f'|format(normalizer.time * 1000) }} ms)</span></li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    {% endif %}
{% endmacro %}

{% macro render_encoder_cell(item, index, method) %}
    {% set nested_encoders_id = 'nested-encoders-' ~ method ~ '-' ~ index %}

    {% if item.encoder is defined %}
        <span class=\"nowrap\"><a href=\"{{ item.encoder.file|file_link(item.encoder.line) }}\" title=\"{{ item.encoder.file }}\">{{ item.encoder.class }}</a> ({{ '%.2f'|format(item.encoder.time * 1000) }} ms)</span>
    {% endif %}

    {% if item.encoding|length > 1 %}
        <div>
            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ nested_encoders_id }}\" data-toggle-alt-content=\"Hide nested encoders\">Show nested encoders</a>
            <div id=\"{{ nested_encoders_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
                <ul class=\"text-small\" style=\"line-height:80%;margin-top:10px\">
                    {% for encoder in item.encoding %}
                        <li><span class=\"nowrap\">x{{ encoder.calls }} <a href=\"{{ encoder.file|file_link(encoder.line) }}\" title=\"{{ encoder.file }}\">{{ encoder.class }}</a> ({{ '%.2f'|format(encoder.time * 1000) }} ms)</span></li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    {% endif %}
{% endmacro %}

{% macro render_time_cell(item) %}
    <span class=\"nowrap\">{{ '%.2f'|format(item.time * 1000) }} ms</span>
{% endmacro %}
", "@WebProfiler/Collector/serializer.html.twig", "/Users/noahgrebet/Desktop/symfony/template/vendor/symfony/web-profiler-bundle/Resources/views/Collector/serializer.html.twig");
    }
}
