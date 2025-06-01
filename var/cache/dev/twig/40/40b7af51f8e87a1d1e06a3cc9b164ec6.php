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

/* product/show.html.twig */
class __TwigTemplate_148fa8819dca192c936f424f6ba5ad8e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/show.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        
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
        yield "<div class=\"w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8\">
    <div class=\"lg:grid lg:grid-cols-2 lg:gap-x-8\">
        <div class=\"lg:col-span-1\">
            <div class=\"relative h-96 w-full overflow-hidden rounded-lg bg-gray-200\">
                <img src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 10, $this->source); })()), "image", [], "any", false, false, false, 10), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), "html", null, true);
        yield "\" class=\"h-full w-full object-cover object-center\">
            </div>
        </div>

        <div class=\"mt-10 px-4 sm:mt-16 sm:px-0 lg:mt-0\">
            <h1 class=\"text-3xl font-bold tracking-tight text-primary transform transition-all duration-300 hover:scale-105\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), "html", null, true);
        yield "</h1>
            
            <div class=\"mt-3\">
                <h2 class=\"sr-only\">Product information</h2>
                <p class=\"text-3xl tracking-tight text-primary transition-colors duration-300 hover:text-bright\">\$";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 19, $this->source); })()), "price", [], "any", false, false, false, 19), 2), "html", null, true);
        yield "</p>
            </div>

            <div class=\"mt-6\">
                <h3 class=\"sr-only\">Description</h3>
                <div class=\"space-y-6 text-base text-secondary\">
                    <p class=\"transition-colors duration-300 hover:text-primary\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 25, $this->source); })()), "description", [], "any", false, false, false, 25), "html", null, true);
        yield "</p>
                </div>
            </div>

            <div class=\"mt-6 space-y-2\">
                <div class=\"flex items-center group\">
                    <h3 class=\"text-sm font-medium text-primary transition-colors duration-300 group-hover:text-bright\">Brand:</h3>
                    <p class=\"ml-2 text-sm text-secondary transition-colors duration-300 group-hover:text-primary\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 32, $this->source); })()), "brand", [], "any", false, false, false, 32), "html", null, true);
        yield "</p>
                </div>
                <div class=\"flex items-center group\">
                    <h3 class=\"text-sm font-medium text-primary transition-colors duration-300 group-hover:text-bright\">Scale:</h3>
                    <p class=\"ml-2 text-sm text-secondary transition-colors duration-300 group-hover:text-primary\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 36, $this->source); })()), "scale", [], "any", false, false, false, 36), "html", null, true);
        yield "</p>
                </div>
                <div class=\"flex items-center group\">
                    <h3 class=\"text-sm font-medium text-primary transition-colors duration-300 group-hover:text-bright\">Stock:</h3>
                    <p class=\"ml-2 text-sm text-secondary transition-colors duration-300 group-hover:text-primary\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 40, $this->source); })()), "stock", [], "any", false, false, false, 40), "html", null, true);
        yield " units available</p>
                </div>
            </div>

            <div class=\"mt-10 flex\">
                <a href=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45)]), "html", null, true);
        yield "\" 
                   class=\"flex w-full items-center justify-center rounded-md border border-transparent bg-bright px-8 py-3 text-base font-medium text-white hover:bg-accent focus:outline-none focus:ring-2 focus:ring-bright focus:ring-offset-2 transition-all duration-300 transform hover:scale-105 hover:shadow-lg\">
                    Add to Cart
                </a>
            </div>
        </div>
    </div>
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
        return "product/show.html.twig";
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
        return array (  164 => 45,  156 => 40,  149 => 36,  142 => 32,  132 => 25,  123 => 19,  116 => 15,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ product.name }}{% endblock %}

{% block body %}
<div class=\"w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8\">
    <div class=\"lg:grid lg:grid-cols-2 lg:gap-x-8\">
        <div class=\"lg:col-span-1\">
            <div class=\"relative h-96 w-full overflow-hidden rounded-lg bg-gray-200\">
                <img src=\"{{ product.image }}\" alt=\"{{ product.name }}\" class=\"h-full w-full object-cover object-center\">
            </div>
        </div>

        <div class=\"mt-10 px-4 sm:mt-16 sm:px-0 lg:mt-0\">
            <h1 class=\"text-3xl font-bold tracking-tight text-primary transform transition-all duration-300 hover:scale-105\">{{ product.name }}</h1>
            
            <div class=\"mt-3\">
                <h2 class=\"sr-only\">Product information</h2>
                <p class=\"text-3xl tracking-tight text-primary transition-colors duration-300 hover:text-bright\">\${{ product.price|number_format(2) }}</p>
            </div>

            <div class=\"mt-6\">
                <h3 class=\"sr-only\">Description</h3>
                <div class=\"space-y-6 text-base text-secondary\">
                    <p class=\"transition-colors duration-300 hover:text-primary\">{{ product.description }}</p>
                </div>
            </div>

            <div class=\"mt-6 space-y-2\">
                <div class=\"flex items-center group\">
                    <h3 class=\"text-sm font-medium text-primary transition-colors duration-300 group-hover:text-bright\">Brand:</h3>
                    <p class=\"ml-2 text-sm text-secondary transition-colors duration-300 group-hover:text-primary\">{{ product.brand }}</p>
                </div>
                <div class=\"flex items-center group\">
                    <h3 class=\"text-sm font-medium text-primary transition-colors duration-300 group-hover:text-bright\">Scale:</h3>
                    <p class=\"ml-2 text-sm text-secondary transition-colors duration-300 group-hover:text-primary\">{{ product.scale }}</p>
                </div>
                <div class=\"flex items-center group\">
                    <h3 class=\"text-sm font-medium text-primary transition-colors duration-300 group-hover:text-bright\">Stock:</h3>
                    <p class=\"ml-2 text-sm text-secondary transition-colors duration-300 group-hover:text-primary\">{{ product.stock }} units available</p>
                </div>
            </div>

            <div class=\"mt-10 flex\">
                <a href=\"{{ path('app_cart_add', {'id': product.id}) }}\" 
                   class=\"flex w-full items-center justify-center rounded-md border border-transparent bg-bright px-8 py-3 text-base font-medium text-white hover:bg-accent focus:outline-none focus:ring-2 focus:ring-bright focus:ring-offset-2 transition-all duration-300 transform hover:scale-105 hover:shadow-lg\">
                    Add to Cart
                </a>
            </div>
        </div>
    </div>
</div>
{% endblock %} ", "product/show.html.twig", "/home/muhyiddin/dev/web/templates/product/show.html.twig");
    }
}
