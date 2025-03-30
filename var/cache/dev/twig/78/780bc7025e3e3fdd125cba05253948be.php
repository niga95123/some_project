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

/* @KnpPaginator/Pagination/sliding.html.twig */
class __TwigTemplate_d079a855300cd69c186161d20e71cedd extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sliding.html.twig"));

        // line 2
        if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 2, $this->source); })()) > 1)) {
            // line 3
            yield "    <div class=\"pagination\">
        ";
            // line 4
            if ((array_key_exists("first", $context) && ((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 4, $this->source); })()) != (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 4, $this->source); })())))) {
                // line 5
                yield "            <span class=\"first\">
                <a href=\"";
                // line 6
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 6, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 6, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 6, $this->source); })()) => (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 6, $this->source); })())])), "html", null, true);
                yield "\">&lt;&lt;</a>
            </span>
        ";
            }
            // line 9
            yield "
        ";
            // line 10
            if (array_key_exists("previous", $context)) {
                // line 11
                yield "            <span class=\"previous\">
                <a rel=\"prev\" href=\"";
                // line 12
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 12, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 12, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 12, $this->source); })()) => (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 12, $this->source); })())])), "html", null, true);
                yield "\">&lt;</a>
            </span>
        ";
            }
            // line 15
            yield "
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new RuntimeError('Variable "pagesInRange" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 17
                yield "            ";
                if (($context["page"] != (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 17, $this->source); })()))) {
                    // line 18
                    yield "                <span class=\"page\">
                    <a href=\"";
                    // line 19
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 19, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 19, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 19, $this->source); })()) => $context["page"]])), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</a>
                </span>
            ";
                } else {
                    // line 22
                    yield "                <span class=\"current\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "</span>
            ";
                }
                // line 24
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            yield "
        ";
            // line 26
            if (array_key_exists("next", $context)) {
                // line 27
                yield "            <span class=\"next\">
                <a rel=\"next\" href=\"";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 28, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 28, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 28, $this->source); })()) => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 28, $this->source); })())])), "html", null, true);
                yield "\">&gt;</a>
            </span>
        ";
            }
            // line 31
            yield "
        ";
            // line 32
            if ((array_key_exists("last", $context) && ((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 32, $this->source); })()) != (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 32, $this->source); })())))) {
                // line 33
                yield "            <span class=\"last\">
                <a href=\"";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 34, $this->source); })()), Twig\Extension\CoreExtension::merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 34, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 34, $this->source); })()) => (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 34, $this->source); })())])), "html", null, true);
                yield "\">&gt;&gt;</a>
            </span>
        ";
            }
            // line 37
            yield "    </div>
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
        return "@KnpPaginator/Pagination/sliding.html.twig";
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
        return array (  132 => 37,  126 => 34,  123 => 33,  121 => 32,  118 => 31,  112 => 28,  109 => 27,  107 => 26,  104 => 25,  98 => 24,  92 => 22,  84 => 19,  81 => 18,  78 => 17,  74 => 16,  71 => 15,  65 => 12,  62 => 11,  60 => 10,  57 => 9,  51 => 6,  48 => 5,  46 => 4,  43 => 3,  41 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# default Sliding pagination control implementation #}
{% if pageCount > 1 %}
    <div class=\"pagination\">
        {% if first is defined and current != first %}
            <span class=\"first\">
                <a href=\"{{ path(route, query|merge({(pageParameterName): first})) }}\">&lt;&lt;</a>
            </span>
        {% endif %}

        {% if previous is defined %}
            <span class=\"previous\">
                <a rel=\"prev\" href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\">&lt;</a>
            </span>
        {% endif %}

        {% for page in pagesInRange %}
            {% if page != current %}
                <span class=\"page\">
                    <a href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">{{ page }}</a>
                </span>
            {% else %}
                <span class=\"current\">{{ page }}</span>
            {% endif %}
        {% endfor %}

        {% if next is defined %}
            <span class=\"next\">
                <a rel=\"next\" href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\">&gt;</a>
            </span>
        {% endif %}

        {% if last is defined and current != last %}
            <span class=\"last\">
                <a href=\"{{ path(route, query|merge({(pageParameterName): last})) }}\">&gt;&gt;</a>
            </span>
        {% endif %}
    </div>
{% endif %}
", "@KnpPaginator/Pagination/sliding.html.twig", "/var/www/shop/vendor/knplabs/knp-paginator-bundle/templates/Pagination/sliding.html.twig");
    }
}
