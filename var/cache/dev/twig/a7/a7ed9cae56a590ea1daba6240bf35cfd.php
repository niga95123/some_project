<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @KnpPaginator/Pagination/bulma_pagination.html.twig */
class __TwigTemplate_25353522c44daaaeb7b63bb41c5236f5 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/bulma_pagination.html.twig"));

        // line 2
        yield "
";
        // line 3
        $context["position"] = ((array_key_exists("position", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new RuntimeError('Variable "position" does not exist.', 3, $this->source); })()), "left")) : ("left"));
        // line 4
        $context["rounded"] = ((array_key_exists("rounded", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["rounded"]) || array_key_exists("rounded", $context) ? $context["rounded"] : (function () { throw new RuntimeError('Variable "rounded" does not exist.', 4, $this->source); })()), false)) : (false));
        // line 5
        $context["size"] = ((array_key_exists("size", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 5, $this->source); })()), null)) : (null));
        // line 6
        yield "
";
        // line 7
        $context["classes"] = ["pagination"];
        // line 8
        yield "
";
        // line 9
        if (((isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new RuntimeError('Variable "position" does not exist.', 9, $this->source); })()) != "left")) {
            $context["classes"] = Twig\Extension\CoreExtension::merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 9, $this->source); })()), [("is-" . (isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new RuntimeError('Variable "position" does not exist.', 9, $this->source); })()))]);
        }
        // line 10
        if ((isset($context["rounded"]) || array_key_exists("rounded", $context) ? $context["rounded"] : (function () { throw new RuntimeError('Variable "rounded" does not exist.', 10, $this->source); })())) {
            $context["classes"] = Twig\Extension\CoreExtension::merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 10, $this->source); })()), ["is-rounded"]);
        }
        // line 11
        if (((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 11, $this->source); })()) != null)) {
            $context["classes"] = Twig\Extension\CoreExtension::merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 11, $this->source); })()), [("is-" . (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 11, $this->source); })()))]);
        }
        // line 12
        yield "
";
        // line 13
        if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 13, $this->source); })()) > 1)) {
            // line 14
            yield "    <nav class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 14, $this->source); })()), " "), "html", null, true);
            yield "\" role=\"navigation\" aria-label=\"pagination\">
        ";
            // line 15
            if (array_key_exists("previous", $context)) {
                // line 16
                yield "            <a rel=\"prev\" class=\"pagination-previous\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 16, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 16, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 16, $this->source); })()) => (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 16, $this->source); })())])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                yield "</a>
        ";
            } else {
                // line 18
                yield "            <a class=\"pagination-previous\" disabled>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                yield "</a>
        ";
            }
            // line 20
            yield "
        ";
            // line 21
            if (array_key_exists("next", $context)) {
                // line 22
                yield "            <a rel=\"next\" class=\"pagination-next\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 22, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 22, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 22, $this->source); })()) => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 22, $this->source); })())])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                yield "</a>
        ";
            } else {
                // line 24
                yield "            <a class=\"pagination-next\" disabled>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                yield "</a>
        ";
            }
            // line 26
            yield "
        <ul class=\"pagination-list\">
            <li>
                ";
            // line 29
            if (((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 29, $this->source); })()) == (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 29, $this->source); })()))) {
                // line 30
                yield "                    <a class=\"pagination-link is-current\" aria-label=\"Page ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 30, $this->source); })()), "html", null, true);
                yield "\" aria-current=\"page\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 30, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 30, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 30, $this->source); })()) => (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 30, $this->source); })())])), "html", null, true);
                yield "\">1</a>
                ";
            } else {
                // line 32
                yield "                    <a class=\"pagination-link\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 32, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 32, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 32, $this->source); })()) => (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 32, $this->source); })())])), "html", null, true);
                yield "\">1</a>
                ";
            }
            // line 34
            yield "            </li>

            ";
            // line 36
            if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new RuntimeError('Variable "pagesInRange" does not exist.', 36, $this->source); })()), 0, [], "array", false, false, false, 36) - (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 36, $this->source); })())) >= 2)) {
                // line 37
                yield "                <li>
                    <span class=\"pagination-ellipsis\">&hellip;</span>
                </li>
            ";
            }
            // line 41
            yield "
            ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new RuntimeError('Variable "pagesInRange" does not exist.', 42, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 43
                yield "                ";
                if ((((isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 43, $this->source); })()) != $context["page"]) && ($context["page"] != (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 43, $this->source); })())))) {
                    // line 44
                    yield "                    <li>
                        ";
                    // line 45
                    if (($context["page"] == (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 45, $this->source); })()))) {
                        // line 46
                        yield "                            <a class=\"pagination-link is-current\" aria-label=\"Page ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 46, $this->source); })()), "html", null, true);
                        yield "\" aria-current=\"page\" href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 46, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 46, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 46, $this->source); })()) => $context["page"]])), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                        yield "</a>
                        ";
                    } else {
                        // line 48
                        yield "                            <a class=\"pagination-link\" aria-label=\"Goto page ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                        yield "\" href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 48, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 48, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 48, $this->source); })()) => $context["page"]])), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                        yield "</a>
                        ";
                    }
                    // line 50
                    yield "                    </li>
                ";
                }
                // line 52
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            yield "
            ";
            // line 54
            if ((((isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 54, $this->source); })()) - CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new RuntimeError('Variable "pagesInRange" does not exist.', 54, $this->source); })()), (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new RuntimeError('Variable "pagesInRange" does not exist.', 54, $this->source); })())) - 1), [], "array", false, false, false, 54)) >= 2)) {
                // line 55
                yield "                <li>
                    <span class=\"pagination-ellipsis\">&hellip;</span>
                </li>
            ";
            }
            // line 59
            yield "
            <li>
                ";
            // line 61
            if (((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 61, $this->source); })()) == (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 61, $this->source); })()))) {
                // line 62
                yield "                    <a class=\"pagination-link is-current\" aria-label=\"Page ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 62, $this->source); })()), "html", null, true);
                yield "\" aria-current=\"page\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 62, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 62, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 62, $this->source); })()) => (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 62, $this->source); })())])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 62, $this->source); })()), "html", null, true);
                yield "</a>
                ";
            } else {
                // line 64
                yield "                    <a class=\"pagination-link\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 64, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 64, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 64, $this->source); })()) => (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 64, $this->source); })())])), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 64, $this->source); })()), "html", null, true);
                yield "</a>
                ";
            }
            // line 66
            yield "            </li>
        </ul>
    </nav>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/bulma_pagination.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  228 => 66,  220 => 64,  210 => 62,  208 => 61,  204 => 59,  198 => 55,  196 => 54,  193 => 53,  187 => 52,  183 => 50,  173 => 48,  163 => 46,  161 => 45,  158 => 44,  155 => 43,  151 => 42,  148 => 41,  142 => 37,  140 => 36,  136 => 34,  130 => 32,  122 => 30,  120 => 29,  115 => 26,  109 => 24,  101 => 22,  99 => 21,  96 => 20,  90 => 18,  82 => 16,  80 => 15,  75 => 14,  73 => 13,  70 => 12,  66 => 11,  62 => 10,  58 => 9,  55 => 8,  53 => 7,  50 => 6,  48 => 5,  46 => 4,  44 => 3,  41 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# bulma Sliding pagination control implementation #}

{% set position = position|default('left') %}
{% set rounded = rounded|default(false) %}
{% set size = size|default(null) %}

{% set classes = ['pagination'] %}

{% if position != 'left' %}{% set classes = classes|merge(['is-' ~ position]) %}{% endif %}
{% if rounded %}{% set classes = classes|merge(['is-rounded']) %}{% endif %}
{% if size != null %}{% set classes = classes|merge(['is-' ~ size]) %}{% endif %}

{% if pageCount > 1 %}
    <nav class=\"{{ classes|join(' ') }}\" role=\"navigation\" aria-label=\"pagination\">
        {% if previous is defined %}
            <a rel=\"prev\" class=\"pagination-previous\" href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\">{{ 'label_previous'|trans({}, 'KnpPaginatorBundle') }}</a>
        {% else %}
            <a class=\"pagination-previous\" disabled>{{ 'label_previous'|trans({}, 'KnpPaginatorBundle') }}</a>
        {% endif %}

        {% if next is defined %}
            <a rel=\"next\" class=\"pagination-next\" href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\">{{ 'label_next'|trans({}, 'KnpPaginatorBundle') }}</a>
        {% else %}
            <a class=\"pagination-next\" disabled>{{ 'label_next'|trans({}, 'KnpPaginatorBundle') }}</a>
        {% endif %}

        <ul class=\"pagination-list\">
            <li>
                {% if current == first %}
                    <a class=\"pagination-link is-current\" aria-label=\"Page {{ current }}\" aria-current=\"page\" href=\"{{ path(route, query|merge({(pageParameterName): first})) }}\">1</a>
                {% else %}
                    <a class=\"pagination-link\" href=\"{{ path(route, query|merge({(pageParameterName): first})) }}\">1</a>
                {% endif %}
            </li>

            {% if pagesInRange[0] - first >= 2 %}
                <li>
                    <span class=\"pagination-ellipsis\">&hellip;</span>
                </li>
            {% endif %}

            {% for page in pagesInRange %}
                {% if first != page and page != last %}
                    <li>
                        {% if page == current %}
                            <a class=\"pagination-link is-current\" aria-label=\"Page {{ current }}\" aria-current=\"page\" href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">{{ page }}</a>
                        {% else %}
                            <a class=\"pagination-link\" aria-label=\"Goto page {{ page }}\" href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">{{ page }}</a>
                        {% endif %}
                    </li>
                {% endif %}
            {% endfor %}

            {% if last - pagesInRange[pagesInRange|length - 1] >= 2 %}
                <li>
                    <span class=\"pagination-ellipsis\">&hellip;</span>
                </li>
            {% endif %}

            <li>
                {% if current == last %}
                    <a class=\"pagination-link is-current\" aria-label=\"Page {{ current }}\" aria-current=\"page\" href=\"{{ path(route, query|merge({(pageParameterName): last})) }}\">{{ last }}</a>
                {% else %}
                    <a class=\"pagination-link\" href=\"{{ path(route, query|merge({(pageParameterName): last})) }}\">{{ last }}</a>
                {% endif %}
            </li>
        </ul>
    </nav>
{% endif %}
", "@KnpPaginator/Pagination/bulma_pagination.html.twig", "/var/www/shop/vendor/knplabs/knp-paginator-bundle/templates/Pagination/bulma_pagination.html.twig");
    }
}
