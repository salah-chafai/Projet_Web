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
use Twig\TemplateWrapper;

/* product/index.html.twig */
class __TwigTemplate_3afcb5cfc5143b4417ec53eb5fb7df09 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Products";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
    <div class=\"text-center\">
        <h1 class=\"text-3xl font-bold tracking-tight text-primary sm:text-4xl transform transition-all duration-300 hover:scale-105\">Our Collection</h1>
        <p class=\"mt-4 text-lg text-secondary\">Discover our exclusive collection of miniature cars</p>
    </div>

    <div class=\"mt-12 mb-16 grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 13, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 14
            yield "            <div class=\"group relative bg-white rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl\">
                <div class=\"relative h-48 w-full overflow-hidden rounded-t-lg bg-gray-200\">
                    <img src=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 16), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 16), "html", null, true);
            yield "\" class=\"h-full w-full object-cover object-center transition-transform duration-300 group-hover:scale-110\">
                </div>
                <div class=\"p-4\">
                    <h3 class=\"text-lg font-medium text-primary transition-colors duration-300 group-hover:text-bright\">
                        <a href=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 20)]), "html", null, true);
            yield "\" class=\"hover:underline\">
                            ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 21), "html", null, true);
            yield "
                        </a>
                    </h3>
                    <p class=\"mt-1 text-sm text-secondary\">";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "brand", [], "any", false, false, false, 24), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "scale", [], "any", false, false, false, 24), "html", null, true);
            yield "</p>
                    <div class=\"mt-4 flex items-center justify-between\">
                        <p class=\"text-lg font-medium text-primary transition-colors duration-300 group-hover:text-bright\">
                            \$";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 27), 2), "html", null, true);
            yield "
                        </p>
                        <a href=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            yield "\" 
                           class=\"inline-flex items-center px-3 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-bright hover:bg-accent focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-bright transition-all duration-300 transform hover:scale-105 hover:shadow-md\">
                            View Details
                        </a>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 36
        if (!$context['_iterated']) {
            // line 37
            yield "            <div class=\"col-span-full text-center py-12\">
                <p class=\"text-gray-500 text-lg\">No products available yet.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "product/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  173 => 41,  164 => 37,  162 => 36,  150 => 29,  145 => 27,  137 => 24,  131 => 21,  127 => 20,  118 => 16,  114 => 14,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Products{% endblock %}

{% block body %}
<div class=\"w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8\">
    <div class=\"text-center\">
        <h1 class=\"text-3xl font-bold tracking-tight text-primary sm:text-4xl transform transition-all duration-300 hover:scale-105\">Our Collection</h1>
        <p class=\"mt-4 text-lg text-secondary\">Discover our exclusive collection of miniature cars</p>
    </div>

    <div class=\"mt-12 mb-16 grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4\">
        {% for product in products %}
            <div class=\"group relative bg-white rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl\">
                <div class=\"relative h-48 w-full overflow-hidden rounded-t-lg bg-gray-200\">
                    <img src=\"{{ product.image }}\" alt=\"{{ product.name }}\" class=\"h-full w-full object-cover object-center transition-transform duration-300 group-hover:scale-110\">
                </div>
                <div class=\"p-4\">
                    <h3 class=\"text-lg font-medium text-primary transition-colors duration-300 group-hover:text-bright\">
                        <a href=\"{{ path('app_product_show', {'id': product.id}) }}\" class=\"hover:underline\">
                            {{ product.name }}
                        </a>
                    </h3>
                    <p class=\"mt-1 text-sm text-secondary\">{{ product.brand }} - {{ product.scale }}</p>
                    <div class=\"mt-4 flex items-center justify-between\">
                        <p class=\"text-lg font-medium text-primary transition-colors duration-300 group-hover:text-bright\">
                            \${{ product.price|number_format(2) }}
                        </p>
                        <a href=\"{{ path('app_product_show', {'id': product.id}) }}\" 
                           class=\"inline-flex items-center px-3 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-bright hover:bg-accent focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-bright transition-all duration-300 transform hover:scale-105 hover:shadow-md\">
                            View Details
                        </a>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col-span-full text-center py-12\">
                <p class=\"text-gray-500 text-lg\">No products available yet.</p>
            </div>
        {% endfor %}
    </div>
</div>
{% endblock %}
", "product/index.html.twig", "/home/muhyiddin/dev/web/templates/product/index.html.twig");
    }
}
