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

/* @WebProfiler/Collector/form.html.twig */
class __TwigTemplate_8d5f32099162a2653ff1f1a4c0eec756 extends Template
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
            'head' => [$this, 'block_head'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/form.html.twig"));

        // line 3
        $macros["__internal_parse_1"] = $this->macros["__internal_parse_1"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/form.html.twig", 1);
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
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 6, $this->source); })()), "data", [], "any", false, false, false, 6), "nb_errors", [], "any", false, false, false, 6) > 0) || twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 6, $this->source); })()), "data", [], "any", false, false, false, 6), "forms", [], "any", false, false, false, 6)))) {
            // line 7
            echo "        ";
            $context["status_color"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 7, $this->source); })()), "data", [], "any", false, false, false, 7), "nb_errors", [], "any", false, false, false, 7)) ? ("red") : (""));
            // line 8
            echo "        ";
            ob_start();
            // line 9
            echo "            ";
            echo twig_source($this->env, "@WebProfiler/Icon/form.svg");
            echo "
            <span class=\"sf-toolbar-value\">
                ";
            // line 11
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 11, $this->source); })()), "data", [], "any", false, false, false, 11), "nb_errors", [], "any", false, false, false, 11)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 11, $this->source); })()), "data", [], "any", false, false, false, 11), "nb_errors", [], "any", false, false, false, 11)) : (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 11, $this->source); })()), "data", [], "any", false, false, false, 11), "forms", [], "any", false, false, false, 11)))), "html", null, true);
            echo "
            </span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 14
            echo "
        ";
            // line 15
            ob_start();
            // line 16
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Number of forms</b>
                <span class=\"sf-toolbar-status\">";
            // line 18
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 18, $this->source); })()), "data", [], "any", false, false, false, 18), "forms", [], "any", false, false, false, 18)), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Number of errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 22
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 22, $this->source); })()), "data", [], "any", false, false, false, 22), "nb_errors", [], "any", false, false, false, 22) > 0)) ? ("red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 22, $this->source); })()), "data", [], "any", false, false, false, 22), "nb_errors", [], "any", false, false, false, 22), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 25
            echo "
        ";
            // line 26
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 26, $this->source); })()), "status" => (isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new RuntimeError('Variable "status_color" does not exist.', 26, $this->source); })())]);
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 30
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 31
        echo "    <span class=\"label label-status-";
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 31, $this->source); })()), "data", [], "any", false, false, false, 31), "nb_errors", [], "any", false, false, false, 31)) ? ("error") : (""));
        echo " ";
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 31, $this->source); })()), "data", [], "any", false, false, false, 31), "forms", [], "any", false, false, false, 31))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 32
        echo twig_source($this->env, "@WebProfiler/Icon/form.svg");
        echo "</span>
        <strong>Forms</strong>
        ";
        // line 34
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 34, $this->source); })()), "data", [], "any", false, false, false, 34), "nb_errors", [], "any", false, false, false, 34) > 0)) {
            // line 35
            echo "            <span class=\"count\">
                <span>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 36, $this->source); })()), "data", [], "any", false, false, false, 36), "nb_errors", [], "any", false, false, false, 36), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 39
        echo "    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 42
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 43
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "

    <style>
        #tree-menu {
            float: left;
            padding-right: 10px;
            width: 220px;
        }
        #tree-menu ul {
            list-style: none;
            margin: 0;
            padding-left: 0;
        }
        #tree-menu li {
            margin: 0;
            padding: 0;
            width: 100%;
        }
        #tree-menu .empty {
            border: 0;
            box-shadow: none !important;
            padding: 0;
        }
        #tree-details-container {
            border-left: 1px solid var(--table-border-color);
            margin-left: 230px;
            padding-left: 20px;
        }
        .tree-details {
            padding-bottom: 40px;
        }
        .tree-details h3 {
            font-size: 18px;
            position: relative;
        }

        .toggle-icon {
            display: inline-block;
            background: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' data-icon-name='icon-tabler-square-plus' width='24' height='24' viewBox='0 0 24 24' stroke-width='2px' stroke='currentColor' fill='none' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath stroke='none' d='M0 0h24v24H0z' fill='none'%3E%3C/path%3E%3Crect x='4' y='4' width='16' height='16' rx='2'%3E%3C/rect%3E%3Cline x1='9' y1='12' x2='15' y2='12'%3E%3C/line%3E%3Cline x1='12' y1='9' x2='12' y2='15'%3E%3C/line%3E%3C/svg%3E\") no-repeat;
            background-size: 18px 18px;
        }
        .closed .toggle-icon, .closed.toggle-icon {
            background-position: bottom left;
        }
        .toggle-icon.empty {
            background-image: none;
        }

        .tree .tree-inner {
            cursor: pointer;
            padding: 5px 7px 5px 22px;
            position: relative;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .tree .toggle-button {
            width: 16px;
            height: 16px;
            margin-left: -18px;
        }
        .tree .toggle-icon {
            width: 18px;
            height: 18px;
            vertical-align: bottom;
        }
        .tree .toggle-icon.empty {
            width: 5px;
            height: 5px;
            position: absolute;
            top: 50%;
            margin-top: -2px;
            margin-left: -13px;
        }
        .tree .tree-inner {
            border-radius: 4px;
        }
        .tree ul ul .tree-inner {
            padding-left: 32px;
        }
        .tree ul ul ul .tree-inner {
            padding-left: 48px;
        }
        .tree ul ul ul ul .tree-inner {
            padding-left: 64px;
        }
        .tree ul ul ul ul ul .tree-inner {
            padding-left: 72px;
        }
        .tree .tree-inner:hover {
            background: var(--gray-200);
        }
        .tree .tree-inner.active, .tree .tree-inner.active:hover {
            background: var(--tree-active-background);
            font-weight: bold;
        }
        .tree-details .toggle-icon {
            width: 16px;
            height: 16px;
            /* vertically center the button */
            position: absolute;
            top: 50%;
            margin-top: -9px;
            margin-left: 6px;
        }
        .badge-error {
            float: right;
            background: var(--background-error);
            color: #FFF;
            padding: 1px 4px;
            font-size: 10px;
            font-weight: bold;
            vertical-align: middle;
        }
        .has-error {
            color: var(--color-error);
        }
        .errors h3 {
            color: var(--color-error);
        }
        .errors th {
            background: var(--background-error);
            color: #FFF;
        }
        .errors .toggle-icon {
            background-color: var(--background-error);
        }
        h3 a, h3 a:hover, h3 a:focus {
            color: inherit;
            text-decoration: inherit;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 176
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 177
        echo "    <h2>Forms</h2>

    ";
        // line 179
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 179, $this->source); })()), "data", [], "any", false, false, false, 179), "forms", [], "any", false, false, false, 179))) {
            // line 180
            echo "        <div id=\"tree-menu\" class=\"tree\">
            <ul>
            ";
            // line 182
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 182, $this->source); })()), "data", [], "any", false, false, false, 182), "forms", [], "any", false, false, false, 182));
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 183
                echo "                ";
                echo twig_call_macro($macros["__internal_parse_1"], "macro_form_tree_entry", [$context["formName"], $context["formData"], true], 183, $context, $this->getSourceContext());
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['formName'], $context['formData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "            </ul>
        </div>

        <div id=\"tree-details-container\">
            ";
            // line 189
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 189, $this->source); })()), "data", [], "any", false, false, false, 189), "forms", [], "any", false, false, false, 189));
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
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 190
                echo "                ";
                echo twig_call_macro($macros["__internal_parse_1"], "macro_form_tree_details", [$context["formName"], $context["formData"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 190, $this->source); })()), "data", [], "any", false, false, false, 190), "forms_by_hash", [], "any", false, false, false, 190), twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 190)], 190, $context, $this->getSourceContext());
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['formName'], $context['formData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 192
            echo "        </div>
    ";
        } else {
            // line 194
            echo "        <div class=\"empty empty-panel\">
            <p>No forms were submitted for this request.</p>
        </div>
    ";
        }
        // line 198
        echo "
    <script>
    function Toggler(storage) {
        \"use strict\";

        var STORAGE_KEY = 'sf_toggle_data',

            states = {},

            isCollapsed = function (button) {
                return Sfjs.hasClass(button, 'closed');
            },

            isExpanded = function (button) {
                return !isCollapsed(button);
            },

            expand = function (button) {
                var targetId = button.dataset.toggleTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Toggle target \" + targetId + \" does not exist\";
                }

                if (isCollapsed(button)) {
                    Sfjs.removeClass(button, 'closed');
                    Sfjs.removeClass(target, 'hidden');

                    states[targetId] = 1;
                    storage.setItem(STORAGE_KEY, states);
                }
            },

            collapse = function (button) {
                var targetId = button.dataset.toggleTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Toggle target \" + targetId + \" does not exist\";
                }

                if (isExpanded(button)) {
                    Sfjs.addClass(button, 'closed');
                    Sfjs.addClass(target, 'hidden');

                    states[targetId] = 0;
                    storage.setItem(STORAGE_KEY, states);
                }
            },

            toggle = function (button) {
                if (Sfjs.hasClass(button, 'closed')) {
                    expand(button);
                } else {
                    collapse(button);
                }
            },

            initButtons = function (buttons) {
                states = storage.getItem(STORAGE_KEY, {});

                // must be an object, not an array or anything else
                // `typeof` returns \"object\" also for arrays, so the following
                // check must be done
                // see http://stackoverflow.com/questions/4775722/check-if-object-is-array
                if ('[object Object]' !== Object.prototype.toString.call(states)) {
                    states = {};
                }

                for (var i = 0, l = buttons.length; i < l; ++i) {
                    var targetId = buttons[i].dataset.toggleTargetId,
                        target = document.getElementById(targetId);

                    if (!target) {
                        throw \"Toggle target \" + targetId + \" does not exist\";
                    }

                    // correct the initial state of the button
                    if (Sfjs.hasClass(target, 'hidden')) {
                        Sfjs.addClass(buttons[i], 'closed');
                    }

                    // attach listener for expanding/collapsing the target
                    clickHandler(buttons[i], toggle);

                    if (states.hasOwnProperty(targetId)) {
                        // open or collapse based on stored data
                        if (0 === states[targetId]) {
                            collapse(buttons[i]);
                        } else {
                            expand(buttons[i]);
                        }
                    }
                }
            };

        return {
            initButtons: initButtons,

            toggle: toggle,

            isExpanded: isExpanded,

            isCollapsed: isCollapsed,

            expand: expand,

            collapse: collapse
        };
    }

    function JsonStorage(storage) {
        var setItem = function (key, data) {
                storage.setItem(key, JSON.stringify(data));
            },

            getItem = function (key, defaultValue) {
                var data = storage.getItem(key);

                if (null !== data) {
                    try {
                        return JSON.parse(data);
                    } catch(e) {
                    }
                }

                return defaultValue;
            };

        return {
            setItem: setItem,

            getItem: getItem
        };
    }

    function TabView() {
        \"use strict\";

        var activeTab = null,

            activeTarget = null,

            select = function (tab) {
                var targetId = tab.dataset.tabTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Tab target \" + targetId + \" does not exist\";
                }

                if (activeTab) {
                    Sfjs.removeClass(activeTab, 'active');
                }

                if (activeTarget) {
                    Sfjs.addClass(activeTarget, 'hidden');
                }

                Sfjs.addClass(tab, 'active');
                Sfjs.removeClass(target, 'hidden');

                activeTab = tab;
                activeTarget = target;
            },

            initTabs = function (tabs) {
                for (var i = 0, l = tabs.length; i < l; ++i) {
                    var targetId = tabs[i].dataset.tabTargetId,
                        target = document.getElementById(targetId);

                    if (!target) {
                        throw \"Tab target \" + targetId + \" does not exist\";
                    }

                    clickHandler(tabs[i], select);

                    Sfjs.addClass(target, 'hidden');
                }

                if (tabs.length > 0) {
                    select(tabs[0]);
                }
            };

        return {
            initTabs: initTabs,

            select: select
        };
    }

    var tabTarget = new TabView(),
        toggler = new Toggler(new JsonStorage(sessionStorage)),
        clickHandler = function (element, callback) {
            Sfjs.addEventListener(element, 'click', function (e) {
                if (!e) {
                    e = window.event;
                }

                callback(this);

                if (e.preventDefault) {
                    e.preventDefault();
                } else {
                    e.returnValue = false;
                }

                e.stopPropagation();

                return false;
            });
        };

    tabTarget.initTabs(document.querySelectorAll('.tree .tree-inner'));
    toggler.initButtons(document.querySelectorAll('.toggle-button'));
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 418
    public function macro_form_tree_entry($__name__ = null, $__data__ = null, $__is_root__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "data" => $__data__,
            "is_root" => $__is_root__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_tree_entry"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_tree_entry"));

            // line 419
            echo "    ";
            $macros["tree"] = $this;
            // line 420
            echo "    ";
            $context["has_error"] = (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", true, true, false, 420) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 420, $this->source); })()), "errors", [], "any", false, false, false, 420)) > 0));
            // line 421
            echo "    <li>
        <div class=\"tree-inner\" data-tab-target-id=\"";
            // line 422
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 422, $this->source); })()), "id", [], "any", false, false, false, 422), "html", null, true);
            echo "-details\" title=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("name", $context)) ? (_twig_default_filter((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 422, $this->source); })()), "(no name)")) : ("(no name)")), "html", null, true);
            echo "\">
            ";
            // line 423
            if ((isset($context["has_error"]) || array_key_exists("has_error", $context) ? $context["has_error"] : (function () { throw new RuntimeError('Variable "has_error" does not exist.', 423, $this->source); })())) {
                // line 424
                echo "                <div class=\"badge-error\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 424, $this->source); })()), "errors", [], "any", false, false, false, 424)), "html", null, true);
                echo "</div>
            ";
            }
            // line 426
            echo "
            ";
            // line 427
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 427, $this->source); })()), "children", [], "any", false, false, false, 427))) {
                // line 428
                echo "                <a class=\"toggle-button\" data-toggle-target-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 428, $this->source); })()), "id", [], "any", false, false, false, 428), "html", null, true);
                echo "-children\" href=\"#\"><span class=\"toggle-icon\"></span></a>
            ";
            } else {
                // line 430
                echo "                <div class=\"toggle-icon empty\"></div>
            ";
            }
            // line 432
            echo "
            <span ";
            // line 433
            if (((isset($context["has_error"]) || array_key_exists("has_error", $context) ? $context["has_error"] : (function () { throw new RuntimeError('Variable "has_error" does not exist.', 433, $this->source); })()) || ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "has_children_error", [], "any", true, true, false, 433)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "has_children_error", [], "any", false, false, false, 433), false)) : (false)))) {
                echo "class=\"has-error\"";
            }
            echo ">
                ";
            // line 434
            echo twig_escape_filter($this->env, ((array_key_exists("name", $context)) ? (_twig_default_filter((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 434, $this->source); })()), "(no name)")) : ("(no name)")), "html", null, true);
            echo "
            </span>
        </div>

        ";
            // line 438
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 438, $this->source); })()), "children", [], "any", false, false, false, 438))) {
                // line 439
                echo "            <ul id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 439, $this->source); })()), "id", [], "any", false, false, false, 439), "html", null, true);
                echo "-children\" ";
                if (( !(isset($context["is_root"]) || array_key_exists("is_root", $context) ? $context["is_root"] : (function () { throw new RuntimeError('Variable "is_root" does not exist.', 439, $this->source); })()) &&  !((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "has_children_error", [], "any", true, true, false, 439)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "has_children_error", [], "any", false, false, false, 439), false)) : (false)))) {
                    echo "class=\"hidden\"";
                }
                echo ">
                ";
                // line 440
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 440, $this->source); })()), "children", [], "any", false, false, false, 440));
                foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                    // line 441
                    echo "                    ";
                    echo twig_call_macro($macros["tree"], "macro_form_tree_entry", [$context["childName"], $context["childData"], false], 441, $context, $this->getSourceContext());
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 443
                echo "            </ul>
        ";
            }
            // line 445
            echo "    </li>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 448
    public function macro_form_tree_details($__name__ = null, $__data__ = null, $__forms_by_hash__ = null, $__show__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "data" => $__data__,
            "forms_by_hash" => $__forms_by_hash__,
            "show" => $__show__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_tree_details"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_tree_details"));

            // line 449
            echo "    ";
            $macros["tree"] = $this;
            // line 450
            echo "    <div class=\"tree-details";
            if ( !((array_key_exists("show", $context)) ? (_twig_default_filter((isset($context["show"]) || array_key_exists("show", $context) ? $context["show"] : (function () { throw new RuntimeError('Variable "show" does not exist.', 450, $this->source); })()), false)) : (false))) {
                echo " hidden";
            }
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "id", [], "any", true, true, false, 450)) {
                echo "id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 450, $this->source); })()), "id", [], "any", false, false, false, 450), "html", null, true);
                echo "-details\"";
            }
            echo ">
        <h2>";
            // line 451
            echo twig_escape_filter($this->env, ((array_key_exists("name", $context)) ? (_twig_default_filter((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 451, $this->source); })()), "(no name)")) : ("(no name)")), "html", null, true);
            echo "</h2>
        ";
            // line 452
            if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "type_class", [], "any", true, true, false, 452)) {
                // line 453
                echo "            <div class=\"form-type-class\">
                <span class=\"form-type-class-label\">Form type:</span>
                ";
                // line 455
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 455, $this->source); })()), "type_class", [], "any", false, false, false, 455));
                echo "
            </div>
        ";
            }
            // line 458
            echo "
        ";
            // line 459
            $context["form_has_errors"] =  !twig_test_empty((((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", true, true, false, 459) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", false, false, false, 459)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", false, false, false, 459)) : ([])));
            // line 460
            echo "        <div class=\"sf-tabs\">
            <div class=\"tab ";
            // line 461
            echo (((isset($context["form_has_errors"]) || array_key_exists("form_has_errors", $context) ? $context["form_has_errors"] : (function () { throw new RuntimeError('Variable "form_has_errors" does not exist.', 461, $this->source); })())) ? ("active") : ("disabled"));
            echo "\">
                <h3 class=\"tab-title\">Errors</h3>

                <div class=\"tab-content\">
                    ";
            // line 465
            echo twig_call_macro($macros["_self"], "macro_render_form_errors", [(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 465, $this->source); })())], 465, $context, $this->getSourceContext());
            echo "
                </div>
            </div>

            <div class=\"tab ";
            // line 469
            echo (( !(isset($context["form_has_errors"]) || array_key_exists("form_has_errors", $context) ? $context["form_has_errors"] : (function () { throw new RuntimeError('Variable "form_has_errors" does not exist.', 469, $this->source); })())) ? ("active") : (""));
            echo "\">
                <h3 class=\"tab-title\">Default Data</h3>

                <div class=\"tab-content\">
                    ";
            // line 473
            echo twig_call_macro($macros["_self"], "macro_render_form_default_data", [(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 473, $this->source); })())], 473, $context, $this->getSourceContext());
            echo "
                </div>
            </div>

            <div class=\"tab ";
            // line 477
            echo ((twig_test_empty((((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", true, true, false, 477) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, false, false, 477)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, false, false, 477)) : ([])))) ? ("disabled") : (""));
            echo "\">
                <h3 class=\"tab-title\">Submitted Data</h3>

                <div class=\"tab-content\">
                    ";
            // line 481
            echo twig_call_macro($macros["_self"], "macro_render_form_submitted_data", [(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 481, $this->source); })())], 481, $context, $this->getSourceContext());
            echo "
                </div>
            </div>

            <div class=\"tab ";
            // line 485
            echo ((twig_test_empty((((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", true, true, false, 485) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", false, false, false, 485)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", false, false, false, 485)) : ([])))) ? ("disabled") : (""));
            echo "\">
                <h3 class=\"tab-title\">Passed Options</h3>

                <div class=\"tab-content\">
                    ";
            // line 489
            echo twig_call_macro($macros["_self"], "macro_render_form_passed_options", [(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 489, $this->source); })())], 489, $context, $this->getSourceContext());
            echo "
                </div>
            </div>

            <div class=\"tab ";
            // line 493
            echo ((twig_test_empty((((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", true, true, false, 493) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, false, false, 493)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, false, false, 493)) : ([])))) ? ("disabled") : (""));
            echo "\">
                <h3 class=\"tab-title\">Resolved Options</h3>

                <div class=\"tab-content\">
                    ";
            // line 497
            echo twig_call_macro($macros["_self"], "macro_render_form_resolved_options", [(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 497, $this->source); })())], 497, $context, $this->getSourceContext());
            echo "
                </div>
            </div>

            <div class=\"tab ";
            // line 501
            echo ((twig_test_empty((((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "view_vars", [], "any", true, true, false, 501) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "view_vars", [], "any", false, false, false, 501)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "view_vars", [], "any", false, false, false, 501)) : ([])))) ? ("disabled") : (""));
            echo "\">
                <h3 class=\"tab-title\">View Vars</h3>

                <div class=\"tab-content\">
                    ";
            // line 505
            echo twig_call_macro($macros["_self"], "macro_render_form_view_variables", [(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 505, $this->source); })())], 505, $context, $this->getSourceContext());
            echo "
                </div>
            </div>
        </div>
    </div>

    ";
            // line 511
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 511, $this->source); })()), "children", [], "any", false, false, false, 511));
            foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                // line 512
                echo "        ";
                echo twig_call_macro($macros["tree"], "macro_form_tree_details", [$context["childName"], $context["childData"], (isset($context["forms_by_hash"]) || array_key_exists("forms_by_hash", $context) ? $context["forms_by_hash"] : (function () { throw new RuntimeError('Variable "forms_by_hash" does not exist.', 512, $this->source); })())], 512, $context, $this->getSourceContext());
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 516
    public function macro_render_form_errors($__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_errors"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_errors"));

            // line 517
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", true, true, false, 517) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 517, $this->source); })()), "errors", [], "any", false, false, false, 517)) > 0))) {
                // line 518
                echo "        <div class=\"errors\">
            <h3>
                <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 520
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 520, $this->source); })()), "id", [], "any", false, false, false, 520), "html", null, true);
                echo "-errors\" href=\"#\">
                    Errors <span class=\"toggle-icon\"></span>
                </a>
            </h3>

            <table id=\"";
                // line 525
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 525, $this->source); })()), "id", [], "any", false, false, false, 525), "html", null, true);
                echo "-errors\">
                <thead>
                <tr>
                    <th>Message</th>
                    <th>Origin</th>
                    <th>Cause</th>
                </tr>
                </thead>
                <tbody>
                ";
                // line 534
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 534, $this->source); })()), "errors", [], "any", false, false, false, 534));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 535
                    echo "                    <tr>
                        <td>";
                    // line 536
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 536), "html", null, true);
                    echo "</td>
                        <td>
                            ";
                    // line 538
                    if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["error"], "origin", [], "any", false, false, false, 538))) {
                        // line 539
                        echo "                                <em>This form.</em>
                            ";
                    } elseif ( !twig_get_attribute($this->env, $this->source,                     // line 540
($context["forms_by_hash"] ?? null), twig_get_attribute($this->env, $this->source, $context["error"], "origin", [], "any", false, false, false, 540), [], "array", true, true, false, 540)) {
                        // line 541
                        echo "                                <em>Unknown.</em>
                            ";
                    } else {
                        // line 543
                        echo "                                ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms_by_hash"]) || array_key_exists("forms_by_hash", $context) ? $context["forms_by_hash"] : (function () { throw new RuntimeError('Variable "forms_by_hash" does not exist.', 543, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["error"], "origin", [], "any", false, false, false, 543), [], "array", false, false, false, 543), "name", [], "any", false, false, false, 543), "html", null, true);
                        echo "
                            ";
                    }
                    // line 545
                    echo "                        </td>
                        <td>
                            ";
                    // line 547
                    if (twig_get_attribute($this->env, $this->source, $context["error"], "trace", [], "any", false, false, false, 547)) {
                        // line 548
                        echo "                                <span class=\"newline\">Caused by:</span>
                                ";
                        // line 549
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["error"], "trace", [], "any", false, false, false, 549));
                        foreach ($context['_seq'] as $context["_key"] => $context["stacked"]) {
                            // line 550
                            echo "                                    ";
                            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["stacked"]);
                            echo "
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stacked'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 552
                        echo "                            ";
                    } else {
                        // line 553
                        echo "                                <em>Unknown.</em>
                            ";
                    }
                    // line 555
                    echo "                        </td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 558
                echo "                </tbody>
            </table>
        </div>
    ";
            } else {
                // line 562
                echo "        <div class=\"empty\">
            <p>This form has no errors.</p>
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

    // line 568
    public function macro_render_form_default_data($__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_default_data"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_default_data"));

            // line 569
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "default_data", [], "any", true, true, false, 569)) {
                // line 570
                echo "        <table>
            <thead>
            <tr>
                <th width=\"180\">Property</th>
                <th>Value</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Model Format</th>
                <td>
                    ";
                // line 581
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "default_data", [], "any", false, true, false, 581), "model", [], "any", true, true, false, 581)) {
                    // line 582
                    echo "                        ";
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 582, $this->source); })()), "default_data", [], "any", false, false, false, 582), "seek", [0 => "model"], "method", false, false, false, 582));
                    echo "
                    ";
                } else {
                    // line 584
                    echo "                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    ";
                }
                // line 586
                echo "                </td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Normalized Format</th>
                <td>";
                // line 590
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 590, $this->source); })()), "default_data", [], "any", false, false, false, 590), "seek", [0 => "norm"], "method", false, false, false, 590));
                echo "</td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">View Format</th>
                <td>
                    ";
                // line 595
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "default_data", [], "any", false, true, false, 595), "view", [], "any", true, true, false, 595)) {
                    // line 596
                    echo "                        ";
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 596, $this->source); })()), "default_data", [], "any", false, false, false, 596), "seek", [0 => "view"], "method", false, false, false, 596));
                    echo "
                    ";
                } else {
                    // line 598
                    echo "                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    ";
                }
                // line 600
                echo "                </td>
            </tr>
            </tbody>
        </table>
    ";
            } else {
                // line 605
                echo "        <div class=\"empty\">
            <p>This form has default data defined.</p>
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

    // line 611
    public function macro_render_form_submitted_data($__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_submitted_data"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_submitted_data"));

            // line 612
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, true, false, 612), "norm", [], "any", true, true, false, 612)) {
                // line 613
                echo "        <table>
            <thead>
            <tr>
                <th width=\"180\">Property</th>
                <th>Value</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th class=\"font-normal\" scope=\"row\">View Format</th>
                <td>
                    ";
                // line 624
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, true, false, 624), "view", [], "any", true, true, false, 624)) {
                    // line 625
                    echo "                        ";
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 625, $this->source); })()), "submitted_data", [], "any", false, false, false, 625), "seek", [0 => "view"], "method", false, false, false, 625));
                    echo "
                    ";
                } else {
                    // line 627
                    echo "                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    ";
                }
                // line 629
                echo "                </td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Normalized Format</th>
                <td>";
                // line 633
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 633, $this->source); })()), "submitted_data", [], "any", false, false, false, 633), "seek", [0 => "norm"], "method", false, false, false, 633));
                echo "</td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Model Format</th>
                <td>
                    ";
                // line 638
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, true, false, 638), "model", [], "any", true, true, false, 638)) {
                    // line 639
                    echo "                        ";
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 639, $this->source); })()), "submitted_data", [], "any", false, false, false, 639), "seek", [0 => "model"], "method", false, false, false, 639));
                    echo "
                    ";
                } else {
                    // line 641
                    echo "                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    ";
                }
                // line 643
                echo "                </td>
            </tr>
            </tbody>
        </table>
    ";
            } else {
                // line 648
                echo "        <div class=\"empty\">
            <p>This form was not submitted.</p>
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

    // line 654
    public function macro_render_form_passed_options($__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_passed_options"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_passed_options"));

            // line 655
            echo "    ";
            if ( !twig_test_empty((((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", true, true, false, 655) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", false, false, false, 655)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", false, false, false, 655)) : ([])))) {
                // line 656
                echo "        <table>
            <thead>
            <tr>
                <th width=\"180\">Option</th>
                <th>Passed Value</th>
                <th>Resolved Value</th>
            </tr>
            </thead>
            <tbody>
            ";
                // line 665
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 665, $this->source); })()), "passed_options", [], "any", false, false, false, 665));
                foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                    // line 666
                    echo "                <tr>
                    <th>";
                    // line 667
                    echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                    echo "</th>
                    <td>";
                    // line 668
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["value"]);
                    echo "</td>
                    <td>
                        ";
                    // line 671
                    echo "                        ";
                    $context["option_value"] = ((twig_get_attribute($this->env, $this->source, $context["value"], "value", [], "any", true, true, false, 671)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["value"], "value", [], "any", false, false, false, 671), $context["value"])) : ($context["value"]));
                    // line 672
                    echo "                        ";
                    $context["resolved_option_value"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, true, false, 672), $context["option"], [], "array", false, true, false, 672), "value", [], "any", true, true, false, 672)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, true, false, 672), $context["option"], [], "array", false, true, false, 672), "value", [], "any", false, false, false, 672), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 672, $this->source); })()), "resolved_options", [], "any", false, false, false, 672), $context["option"], [], "array", false, false, false, 672))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 672, $this->source); })()), "resolved_options", [], "any", false, false, false, 672), $context["option"], [], "array", false, false, false, 672)));
                    // line 673
                    echo "                        ";
                    if (((isset($context["resolved_option_value"]) || array_key_exists("resolved_option_value", $context) ? $context["resolved_option_value"] : (function () { throw new RuntimeError('Variable "resolved_option_value" does not exist.', 673, $this->source); })()) == (isset($context["option_value"]) || array_key_exists("option_value", $context) ? $context["option_value"] : (function () { throw new RuntimeError('Variable "option_value" does not exist.', 673, $this->source); })()))) {
                        // line 674
                        echo "                            <em class=\"font-normal text-muted\">same as passed value</em>
                        ";
                    } else {
                        // line 676
                        echo "                            ";
                        echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 676, $this->source); })()), "resolved_options", [], "any", false, false, false, 676), "seek", [0 => $context["option"]], "method", false, false, false, 676));
                        echo "
                        ";
                    }
                    // line 678
                    echo "                    </td>
                </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 681
                echo "            </tbody>
        </table>
    ";
            } else {
                // line 684
                echo "        <div class=\"empty\">
            <p>No options were passed when constructing this form.</p>
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

    // line 690
    public function macro_render_form_resolved_options($__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_resolved_options"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_resolved_options"));

            // line 691
            echo "    <table>
        <thead>
        <tr>
            <th width=\"180\">Option</th>
            <th>Value</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 699
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", true, true, false, 699) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, false, false, 699)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, false, false, 699)) : ([])));
            foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                // line 700
                echo "            <tr>
                <th scope=\"row\">";
                // line 701
                echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                echo "</th>
                <td>";
                // line 702
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["value"]);
                echo "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 705
            echo "        </tbody>
    </table>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 709
    public function macro_render_form_view_variables($__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_view_variables"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_view_variables"));

            // line 710
            echo "    <table>
        <thead>
        <tr>
            <th width=\"180\">Variable</th>
            <th>Value</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 718
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "view_vars", [], "any", true, true, false, 718) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "view_vars", [], "any", false, false, false, 718)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "view_vars", [], "any", false, false, false, 718)) : ([])));
            foreach ($context['_seq'] as $context["variable"] => $context["value"]) {
                // line 719
                echo "            <tr>
                <th scope=\"row\">";
                // line 720
                echo twig_escape_filter($this->env, $context["variable"], "html", null, true);
                echo "</th>
                <td>";
                // line 721
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["value"]);
                echo "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['variable'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 724
            echo "        </tbody>
    </table>
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
        return "@WebProfiler/Collector/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1487 => 724,  1478 => 721,  1474 => 720,  1471 => 719,  1467 => 718,  1457 => 710,  1438 => 709,  1421 => 705,  1412 => 702,  1408 => 701,  1405 => 700,  1401 => 699,  1391 => 691,  1372 => 690,  1353 => 684,  1348 => 681,  1340 => 678,  1334 => 676,  1330 => 674,  1327 => 673,  1324 => 672,  1321 => 671,  1316 => 668,  1312 => 667,  1309 => 666,  1305 => 665,  1294 => 656,  1291 => 655,  1272 => 654,  1253 => 648,  1246 => 643,  1242 => 641,  1236 => 639,  1234 => 638,  1226 => 633,  1220 => 629,  1216 => 627,  1210 => 625,  1208 => 624,  1195 => 613,  1192 => 612,  1173 => 611,  1154 => 605,  1147 => 600,  1143 => 598,  1137 => 596,  1135 => 595,  1127 => 590,  1121 => 586,  1117 => 584,  1111 => 582,  1109 => 581,  1096 => 570,  1093 => 569,  1074 => 568,  1055 => 562,  1049 => 558,  1041 => 555,  1037 => 553,  1034 => 552,  1025 => 550,  1021 => 549,  1018 => 548,  1016 => 547,  1012 => 545,  1006 => 543,  1002 => 541,  1000 => 540,  997 => 539,  995 => 538,  990 => 536,  987 => 535,  983 => 534,  971 => 525,  963 => 520,  959 => 518,  956 => 517,  937 => 516,  915 => 512,  911 => 511,  902 => 505,  895 => 501,  888 => 497,  881 => 493,  874 => 489,  867 => 485,  860 => 481,  853 => 477,  846 => 473,  839 => 469,  832 => 465,  825 => 461,  822 => 460,  820 => 459,  817 => 458,  811 => 455,  807 => 453,  805 => 452,  801 => 451,  788 => 450,  785 => 449,  763 => 448,  747 => 445,  743 => 443,  734 => 441,  730 => 440,  721 => 439,  719 => 438,  712 => 434,  706 => 433,  703 => 432,  699 => 430,  693 => 428,  691 => 427,  688 => 426,  682 => 424,  680 => 423,  674 => 422,  671 => 421,  668 => 420,  665 => 419,  644 => 418,  416 => 198,  410 => 194,  406 => 192,  389 => 190,  372 => 189,  366 => 185,  357 => 183,  353 => 182,  349 => 180,  347 => 179,  343 => 177,  333 => 176,  190 => 43,  180 => 42,  169 => 39,  163 => 36,  160 => 35,  158 => 34,  153 => 32,  146 => 31,  136 => 30,  123 => 26,  120 => 25,  112 => 22,  105 => 18,  101 => 16,  99 => 15,  96 => 14,  90 => 11,  84 => 9,  81 => 8,  78 => 7,  75 => 6,  65 => 5,  54 => 1,  52 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% from _self import form_tree_entry, form_tree_details %}

{% block toolbar %}
    {% if collector.data.nb_errors > 0 or collector.data.forms|length %}
        {% set status_color = collector.data.nb_errors ? 'red' %}
        {% set icon %}
            {{ source('@WebProfiler/Icon/form.svg') }}
            <span class=\"sf-toolbar-value\">
                {{ collector.data.nb_errors ?: collector.data.forms|length }}
            </span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Number of forms</b>
                <span class=\"sf-toolbar-status\">{{ collector.data.forms|length }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Number of errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.data.nb_errors > 0 ? 'red' }}\">{{ collector.data.nb_errors }}</span>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label label-status-{{ collector.data.nb_errors ? 'error' }} {{ collector.data.forms is empty ? 'disabled' }}\">
        <span class=\"icon\">{{ source('@WebProfiler/Icon/form.svg') }}</span>
        <strong>Forms</strong>
        {% if collector.data.nb_errors > 0 %}
            <span class=\"count\">
                <span>{{ collector.data.nb_errors }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block head %}
    {{ parent() }}

    <style>
        #tree-menu {
            float: left;
            padding-right: 10px;
            width: 220px;
        }
        #tree-menu ul {
            list-style: none;
            margin: 0;
            padding-left: 0;
        }
        #tree-menu li {
            margin: 0;
            padding: 0;
            width: 100%;
        }
        #tree-menu .empty {
            border: 0;
            box-shadow: none !important;
            padding: 0;
        }
        #tree-details-container {
            border-left: 1px solid var(--table-border-color);
            margin-left: 230px;
            padding-left: 20px;
        }
        .tree-details {
            padding-bottom: 40px;
        }
        .tree-details h3 {
            font-size: 18px;
            position: relative;
        }

        .toggle-icon {
            display: inline-block;
            background: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' data-icon-name='icon-tabler-square-plus' width='24' height='24' viewBox='0 0 24 24' stroke-width='2px' stroke='currentColor' fill='none' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath stroke='none' d='M0 0h24v24H0z' fill='none'%3E%3C/path%3E%3Crect x='4' y='4' width='16' height='16' rx='2'%3E%3C/rect%3E%3Cline x1='9' y1='12' x2='15' y2='12'%3E%3C/line%3E%3Cline x1='12' y1='9' x2='12' y2='15'%3E%3C/line%3E%3C/svg%3E\") no-repeat;
            background-size: 18px 18px;
        }
        .closed .toggle-icon, .closed.toggle-icon {
            background-position: bottom left;
        }
        .toggle-icon.empty {
            background-image: none;
        }

        .tree .tree-inner {
            cursor: pointer;
            padding: 5px 7px 5px 22px;
            position: relative;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .tree .toggle-button {
            width: 16px;
            height: 16px;
            margin-left: -18px;
        }
        .tree .toggle-icon {
            width: 18px;
            height: 18px;
            vertical-align: bottom;
        }
        .tree .toggle-icon.empty {
            width: 5px;
            height: 5px;
            position: absolute;
            top: 50%;
            margin-top: -2px;
            margin-left: -13px;
        }
        .tree .tree-inner {
            border-radius: 4px;
        }
        .tree ul ul .tree-inner {
            padding-left: 32px;
        }
        .tree ul ul ul .tree-inner {
            padding-left: 48px;
        }
        .tree ul ul ul ul .tree-inner {
            padding-left: 64px;
        }
        .tree ul ul ul ul ul .tree-inner {
            padding-left: 72px;
        }
        .tree .tree-inner:hover {
            background: var(--gray-200);
        }
        .tree .tree-inner.active, .tree .tree-inner.active:hover {
            background: var(--tree-active-background);
            font-weight: bold;
        }
        .tree-details .toggle-icon {
            width: 16px;
            height: 16px;
            /* vertically center the button */
            position: absolute;
            top: 50%;
            margin-top: -9px;
            margin-left: 6px;
        }
        .badge-error {
            float: right;
            background: var(--background-error);
            color: #FFF;
            padding: 1px 4px;
            font-size: 10px;
            font-weight: bold;
            vertical-align: middle;
        }
        .has-error {
            color: var(--color-error);
        }
        .errors h3 {
            color: var(--color-error);
        }
        .errors th {
            background: var(--background-error);
            color: #FFF;
        }
        .errors .toggle-icon {
            background-color: var(--background-error);
        }
        h3 a, h3 a:hover, h3 a:focus {
            color: inherit;
            text-decoration: inherit;
        }
    </style>
{% endblock %}

{% block panel %}
    <h2>Forms</h2>

    {% if collector.data.forms|length %}
        <div id=\"tree-menu\" class=\"tree\">
            <ul>
            {% for formName, formData in collector.data.forms %}
                {{ form_tree_entry(formName, formData, true) }}
            {% endfor %}
            </ul>
        </div>

        <div id=\"tree-details-container\">
            {% for formName, formData in collector.data.forms %}
                {{ form_tree_details(formName, formData, collector.data.forms_by_hash, loop.first) }}
            {% endfor %}
        </div>
    {% else %}
        <div class=\"empty empty-panel\">
            <p>No forms were submitted for this request.</p>
        </div>
    {% endif %}

    <script>
    function Toggler(storage) {
        \"use strict\";

        var STORAGE_KEY = 'sf_toggle_data',

            states = {},

            isCollapsed = function (button) {
                return Sfjs.hasClass(button, 'closed');
            },

            isExpanded = function (button) {
                return !isCollapsed(button);
            },

            expand = function (button) {
                var targetId = button.dataset.toggleTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Toggle target \" + targetId + \" does not exist\";
                }

                if (isCollapsed(button)) {
                    Sfjs.removeClass(button, 'closed');
                    Sfjs.removeClass(target, 'hidden');

                    states[targetId] = 1;
                    storage.setItem(STORAGE_KEY, states);
                }
            },

            collapse = function (button) {
                var targetId = button.dataset.toggleTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Toggle target \" + targetId + \" does not exist\";
                }

                if (isExpanded(button)) {
                    Sfjs.addClass(button, 'closed');
                    Sfjs.addClass(target, 'hidden');

                    states[targetId] = 0;
                    storage.setItem(STORAGE_KEY, states);
                }
            },

            toggle = function (button) {
                if (Sfjs.hasClass(button, 'closed')) {
                    expand(button);
                } else {
                    collapse(button);
                }
            },

            initButtons = function (buttons) {
                states = storage.getItem(STORAGE_KEY, {});

                // must be an object, not an array or anything else
                // `typeof` returns \"object\" also for arrays, so the following
                // check must be done
                // see http://stackoverflow.com/questions/4775722/check-if-object-is-array
                if ('[object Object]' !== Object.prototype.toString.call(states)) {
                    states = {};
                }

                for (var i = 0, l = buttons.length; i < l; ++i) {
                    var targetId = buttons[i].dataset.toggleTargetId,
                        target = document.getElementById(targetId);

                    if (!target) {
                        throw \"Toggle target \" + targetId + \" does not exist\";
                    }

                    // correct the initial state of the button
                    if (Sfjs.hasClass(target, 'hidden')) {
                        Sfjs.addClass(buttons[i], 'closed');
                    }

                    // attach listener for expanding/collapsing the target
                    clickHandler(buttons[i], toggle);

                    if (states.hasOwnProperty(targetId)) {
                        // open or collapse based on stored data
                        if (0 === states[targetId]) {
                            collapse(buttons[i]);
                        } else {
                            expand(buttons[i]);
                        }
                    }
                }
            };

        return {
            initButtons: initButtons,

            toggle: toggle,

            isExpanded: isExpanded,

            isCollapsed: isCollapsed,

            expand: expand,

            collapse: collapse
        };
    }

    function JsonStorage(storage) {
        var setItem = function (key, data) {
                storage.setItem(key, JSON.stringify(data));
            },

            getItem = function (key, defaultValue) {
                var data = storage.getItem(key);

                if (null !== data) {
                    try {
                        return JSON.parse(data);
                    } catch(e) {
                    }
                }

                return defaultValue;
            };

        return {
            setItem: setItem,

            getItem: getItem
        };
    }

    function TabView() {
        \"use strict\";

        var activeTab = null,

            activeTarget = null,

            select = function (tab) {
                var targetId = tab.dataset.tabTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Tab target \" + targetId + \" does not exist\";
                }

                if (activeTab) {
                    Sfjs.removeClass(activeTab, 'active');
                }

                if (activeTarget) {
                    Sfjs.addClass(activeTarget, 'hidden');
                }

                Sfjs.addClass(tab, 'active');
                Sfjs.removeClass(target, 'hidden');

                activeTab = tab;
                activeTarget = target;
            },

            initTabs = function (tabs) {
                for (var i = 0, l = tabs.length; i < l; ++i) {
                    var targetId = tabs[i].dataset.tabTargetId,
                        target = document.getElementById(targetId);

                    if (!target) {
                        throw \"Tab target \" + targetId + \" does not exist\";
                    }

                    clickHandler(tabs[i], select);

                    Sfjs.addClass(target, 'hidden');
                }

                if (tabs.length > 0) {
                    select(tabs[0]);
                }
            };

        return {
            initTabs: initTabs,

            select: select
        };
    }

    var tabTarget = new TabView(),
        toggler = new Toggler(new JsonStorage(sessionStorage)),
        clickHandler = function (element, callback) {
            Sfjs.addEventListener(element, 'click', function (e) {
                if (!e) {
                    e = window.event;
                }

                callback(this);

                if (e.preventDefault) {
                    e.preventDefault();
                } else {
                    e.returnValue = false;
                }

                e.stopPropagation();

                return false;
            });
        };

    tabTarget.initTabs(document.querySelectorAll('.tree .tree-inner'));
    toggler.initButtons(document.querySelectorAll('.toggle-button'));
    </script>
{% endblock %}

{% macro form_tree_entry(name, data, is_root) %}
    {% import _self as tree %}
    {% set has_error = data.errors is defined and data.errors|length > 0 %}
    <li>
        <div class=\"tree-inner\" data-tab-target-id=\"{{ data.id }}-details\" title=\"{{ name|default('(no name)') }}\">
            {% if has_error %}
                <div class=\"badge-error\">{{ data.errors|length }}</div>
            {% endif %}

            {% if data.children is not empty %}
                <a class=\"toggle-button\" data-toggle-target-id=\"{{ data.id }}-children\" href=\"#\"><span class=\"toggle-icon\"></span></a>
            {% else %}
                <div class=\"toggle-icon empty\"></div>
            {% endif %}

            <span {% if has_error or data.has_children_error|default(false) %}class=\"has-error\"{% endif %}>
                {{ name|default('(no name)') }}
            </span>
        </div>

        {% if data.children is not empty %}
            <ul id=\"{{ data.id }}-children\" {% if not is_root and not data.has_children_error|default(false) %}class=\"hidden\"{% endif %}>
                {% for childName, childData in data.children %}
                    {{ tree.form_tree_entry(childName, childData, false) }}
                {% endfor %}
            </ul>
        {% endif %}
    </li>
{% endmacro %}

{% macro form_tree_details(name, data, forms_by_hash, show) %}
    {% import _self as tree %}
    <div class=\"tree-details{% if not show|default(false) %} hidden{% endif %}\" {% if data.id is defined %}id=\"{{ data.id }}-details\"{% endif %}>
        <h2>{{ name|default('(no name)') }}</h2>
        {% if data.type_class is defined %}
            <div class=\"form-type-class\">
                <span class=\"form-type-class-label\">Form type:</span>
                {{ profiler_dump(data.type_class) }}
            </div>
        {% endif %}

        {% set form_has_errors = data.errors ?? [] is not empty %}
        <div class=\"sf-tabs\">
            <div class=\"tab {{ form_has_errors ? 'active' : 'disabled' }}\">
                <h3 class=\"tab-title\">Errors</h3>

                <div class=\"tab-content\">
                    {{ _self.render_form_errors(data) }}
                </div>
            </div>

            <div class=\"tab {{ not form_has_errors ? 'active' }}\">
                <h3 class=\"tab-title\">Default Data</h3>

                <div class=\"tab-content\">
                    {{ _self.render_form_default_data(data) }}
                </div>
            </div>

            <div class=\"tab {{ data.submitted_data ?? [] is empty ? 'disabled' }}\">
                <h3 class=\"tab-title\">Submitted Data</h3>

                <div class=\"tab-content\">
                    {{ _self.render_form_submitted_data(data) }}
                </div>
            </div>

            <div class=\"tab {{ data.passed_options ?? [] is empty ? 'disabled' }}\">
                <h3 class=\"tab-title\">Passed Options</h3>

                <div class=\"tab-content\">
                    {{ _self.render_form_passed_options(data) }}
                </div>
            </div>

            <div class=\"tab {{ data.resolved_options ?? [] is empty ? 'disabled' }}\">
                <h3 class=\"tab-title\">Resolved Options</h3>

                <div class=\"tab-content\">
                    {{ _self.render_form_resolved_options(data) }}
                </div>
            </div>

            <div class=\"tab {{ data.view_vars ?? [] is empty ? 'disabled' }}\">
                <h3 class=\"tab-title\">View Vars</h3>

                <div class=\"tab-content\">
                    {{ _self.render_form_view_variables(data) }}
                </div>
            </div>
        </div>
    </div>

    {% for childName, childData in data.children %}
        {{ tree.form_tree_details(childName, childData, forms_by_hash) }}
    {% endfor %}
{% endmacro %}

{% macro render_form_errors(data) %}
    {% if data.errors is defined and data.errors|length > 0 %}
        <div class=\"errors\">
            <h3>
                <a class=\"toggle-button\" data-toggle-target-id=\"{{ data.id }}-errors\" href=\"#\">
                    Errors <span class=\"toggle-icon\"></span>
                </a>
            </h3>

            <table id=\"{{ data.id }}-errors\">
                <thead>
                <tr>
                    <th>Message</th>
                    <th>Origin</th>
                    <th>Cause</th>
                </tr>
                </thead>
                <tbody>
                {% for error in data.errors %}
                    <tr>
                        <td>{{ error.message }}</td>
                        <td>
                            {% if error.origin is empty %}
                                <em>This form.</em>
                            {% elseif forms_by_hash[error.origin] is not defined %}
                                <em>Unknown.</em>
                            {% else %}
                                {{ forms_by_hash[error.origin].name }}
                            {% endif %}
                        </td>
                        <td>
                            {% if error.trace %}
                                <span class=\"newline\">Caused by:</span>
                                {% for stacked in error.trace %}
                                    {{ profiler_dump(stacked) }}
                                {% endfor %}
                            {% else %}
                                <em>Unknown.</em>
                            {% endif %}
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    {% else %}
        <div class=\"empty\">
            <p>This form has no errors.</p>
        </div>
    {% endif %}
{% endmacro %}

{% macro render_form_default_data(data) %}
    {% if data.default_data is defined %}
        <table>
            <thead>
            <tr>
                <th width=\"180\">Property</th>
                <th>Value</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Model Format</th>
                <td>
                    {% if data.default_data.model is defined %}
                        {{ profiler_dump(data.default_data.seek('model')) }}
                    {% else %}
                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    {% endif %}
                </td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Normalized Format</th>
                <td>{{ profiler_dump(data.default_data.seek('norm')) }}</td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">View Format</th>
                <td>
                    {% if data.default_data.view is defined %}
                        {{ profiler_dump(data.default_data.seek('view')) }}
                    {% else %}
                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    {% endif %}
                </td>
            </tr>
            </tbody>
        </table>
    {% else %}
        <div class=\"empty\">
            <p>This form has default data defined.</p>
        </div>
    {% endif %}
{% endmacro %}

{% macro render_form_submitted_data(data) %}
    {% if data.submitted_data.norm is defined %}
        <table>
            <thead>
            <tr>
                <th width=\"180\">Property</th>
                <th>Value</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th class=\"font-normal\" scope=\"row\">View Format</th>
                <td>
                    {% if data.submitted_data.view is defined %}
                        {{ profiler_dump(data.submitted_data.seek('view')) }}
                    {% else %}
                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    {% endif %}
                </td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Normalized Format</th>
                <td>{{ profiler_dump(data.submitted_data.seek('norm')) }}</td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Model Format</th>
                <td>
                    {% if data.submitted_data.model is defined %}
                        {{ profiler_dump(data.submitted_data.seek('model')) }}
                    {% else %}
                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    {% endif %}
                </td>
            </tr>
            </tbody>
        </table>
    {% else %}
        <div class=\"empty\">
            <p>This form was not submitted.</p>
        </div>
    {% endif %}
{% endmacro %}

{% macro render_form_passed_options(data) %}
    {% if data.passed_options ?? [] is not empty %}
        <table>
            <thead>
            <tr>
                <th width=\"180\">Option</th>
                <th>Passed Value</th>
                <th>Resolved Value</th>
            </tr>
            </thead>
            <tbody>
            {% for option, value in data.passed_options %}
                <tr>
                    <th>{{ option }}</th>
                    <td>{{ profiler_dump(value) }}</td>
                    <td>
                        {# values can be stubs #}
                        {% set option_value = value.value|default(value) %}
                        {% set resolved_option_value = data.resolved_options[option].value|default(data.resolved_options[option]) %}
                        {% if resolved_option_value == option_value %}
                            <em class=\"font-normal text-muted\">same as passed value</em>
                        {% else %}
                            {{ profiler_dump(data.resolved_options.seek(option)) }}
                        {% endif %}
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% else %}
        <div class=\"empty\">
            <p>No options were passed when constructing this form.</p>
        </div>
    {% endif %}
{% endmacro %}

{% macro render_form_resolved_options(data) %}
    <table>
        <thead>
        <tr>
            <th width=\"180\">Option</th>
            <th>Value</th>
        </tr>
        </thead>
        <tbody>
        {% for option, value in data.resolved_options ?? [] %}
            <tr>
                <th scope=\"row\">{{ option }}</th>
                <td>{{ profiler_dump(value) }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endmacro %}

{% macro render_form_view_variables(data) %}
    <table>
        <thead>
        <tr>
            <th width=\"180\">Variable</th>
            <th>Value</th>
        </tr>
        </thead>
        <tbody>
        {% for variable, value in data.view_vars ?? [] %}
            <tr>
                <th scope=\"row\">{{ variable }}</th>
                <td>{{ profiler_dump(value) }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endmacro %}
", "@WebProfiler/Collector/form.html.twig", "/Users/noahgrebet/Desktop/symfony/template/vendor/symfony/web-profiler-bundle/Resources/views/Collector/form.html.twig");
    }
}
