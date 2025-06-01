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

/* home/index.html.twig */
class __TwigTemplate_245ee85c737b2478eb8b715b36b72960 extends Template
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
            'main_class' => [$this, 'block_main_class'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

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

        yield "Welcome to Miniature Cars";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_class"));

        yield "!mt-0";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "    ";
        // line 9
        yield "    <div class=\"relative bg-primary\">
        <div class=\"absolute inset-0\">
            <img class=\"w-full h-full object-cover transition-transform duration-700 hover:scale-105\" 
                 src=\"https://images.unsplash.com/photo-1583121274602-3e2820c69888?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80\" 
                 alt=\"Hero background\">
            <div class=\"absolute inset-0 bg-primary mix-blend-multiply\"></div>
        </div>
        <div class=\"relative max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8\">
            <h1 class=\"text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl transform transition-all duration-300 hover:scale-105\">
                Miniature Cars Collection
            </h1>
            <p class=\"mt-6 text-xl text-accent max-w-3xl transition-colors duration-300 hover:text-bright\">
                Discover our exclusive collection of high-quality miniature cars. From classic models to modern supercars, 
                each piece is crafted with attention to detail and precision.
            </p>
            <div class=\"mt-10\">
                <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_index");
        yield "\" 
                   class=\"inline-block bg-bright py-3 px-8 border border-transparent rounded-md text-base font-medium text-white hover:bg-accent transition-all duration-300 transform hover:scale-105 hover:shadow-lg\">
                    Browse Collection
                </a>
            </div>
        </div>
    </div>

    ";
        // line 34
        yield "    <div class=\"bg-white\">
        <div class=\"max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8\">
            <div class=\"text-center\">
                <h2 class=\"text-3xl font-extrabold tracking-tight text-primary sm:text-4xl transform transition-all duration-300 hover:scale-105\">
                    Featured Models
                </h2>
                <p class=\"mt-4 max-w-2xl mx-auto text-xl text-secondary transition-colors duration-300 hover:text-primary\">
                    Explore our handpicked selection of premium miniature cars
                </p>
            </div>

            <div class=\"mt-12 grid gap-8 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3\">
                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["featuredProducts"]) || array_key_exists("featuredProducts", $context) ? $context["featuredProducts"] : (function () { throw new RuntimeError('Variable "featuredProducts" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 47
            yield "                    <div class=\"bg-white rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl\">
                        ";
            // line 48
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 49
                yield "                            <img class=\"h-48 w-full object-cover transition-transform duration-500 hover:scale-110\" 
                                 src=\"";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 50), "html", null, true);
                yield "\" 
                                 alt=\"";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 51), "html", null, true);
                yield "\">
                        ";
            } else {
                // line 53
                yield "                            <div class=\"h-48 w-full bg-gray-200 flex items-center justify-center\">
                                <span class=\"text-gray-400\">No image</span>
                            </div>
                        ";
            }
            // line 57
            yield "                        <div class=\"p-6\">
                            <div class=\"uppercase tracking-wide text-sm text-bright font-semibold transition-colors duration-300 hover:text-accent\">
                                ";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "brand", [], "any", false, false, false, 59), "html", null, true);
            yield "
                            </div>
                            <h3 class=\"mt-2 text-xl font-bold text-primary transition-colors duration-300 hover:text-bright\">
                                ";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 62), "html", null, true);
            yield "
                            </h3>
                            <p class=\"mt-2 text-secondary line-clamp-2 transition-colors duration-300 hover:text-primary\">
                                ";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 65), "html", null, true);
            yield "
                            </p>
                            <div class=\"mt-4 flex items-center justify-between\">
                                <span class=\"text-2xl font-bold text-primary transition-colors duration-300 hover:text-bright\">
                                    \$";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 69), 2), "html", null, true);
            yield "
                                </span>
                                <a href=\"";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 71)]), "html", null, true);
            yield "\" 
                                   class=\"bg-bright text-white px-4 py-2 rounded-md hover:bg-accent focus:outline-none focus:ring-2 focus:ring-bright focus:ring-offset-2 transition-all duration-300 transform hover:scale-105 hover:shadow-md\">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "            </div>

            <div class=\"mt-12 text-center\">
                <a href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_index");
        yield "\" 
                   class=\"inline-block bg-bright text-white px-8 py-3 rounded-md text-base font-medium hover:bg-accent focus:outline-none focus:ring-2 focus:ring-bright focus:ring-offset-2 transition-all duration-300 transform hover:scale-105 hover:shadow-lg\">
                    View All Models
                </a>
            </div>
        </div>
    </div>

    ";
        // line 91
        yield "    <div class=\"bg-gray-50\">
        <div class=\"max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8\">
            <div class=\"max-w-3xl mx-auto text-center\">
                <h2 class=\"text-3xl font-extrabold text-primary sm:text-4xl transform transition-all duration-300 hover:scale-105\">
                    Why Choose Our Miniature Cars?
                </h2>
            </div>
            <div class=\"mt-12 grid gap-8 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3\">
                <div class=\"bg-white rounded-lg shadow-lg p-6 transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl\">
                    <div class=\"text-bright text-4xl mb-4 transition-transform duration-300 hover:scale-110\">🎯</div>
                    <h3 class=\"text-lg font-medium text-primary transition-colors duration-300 hover:text-bright\">Premium Quality</h3>
                    <p class=\"mt-2 text-secondary transition-colors duration-300 hover:text-primary\">Each model is crafted with precision and attention to detail.</p>
                </div>
                <div class=\"bg-white rounded-lg shadow-lg p-6 transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl\">
                    <div class=\"text-bright text-4xl mb-4 transition-transform duration-300 hover:scale-110\">🚚</div>
                    <h3 class=\"text-lg font-medium text-primary transition-colors duration-300 hover:text-bright\">Fast Shipping</h3>
                    <p class=\"mt-2 text-secondary transition-colors duration-300 hover:text-primary\">Quick and secure delivery to your doorstep.</p>
                </div>
                <div class=\"bg-white rounded-lg shadow-lg p-6 transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl\">
                    <div class=\"text-bright text-4xl mb-4 transition-transform duration-300 hover:scale-110\">💎</div>
                    <h3 class=\"text-lg font-medium text-primary transition-colors duration-300 hover:text-bright\">Authentic Models</h3>
                    <p class=\"mt-2 text-secondary transition-colors duration-300 hover:text-primary\">Officially licensed replicas from top manufacturers.</p>
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
        return "home/index.html.twig";
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
        return array (  254 => 91,  243 => 82,  238 => 79,  224 => 71,  219 => 69,  212 => 65,  206 => 62,  200 => 59,  196 => 57,  190 => 53,  185 => 51,  181 => 50,  178 => 49,  176 => 48,  173 => 47,  169 => 46,  155 => 34,  144 => 25,  126 => 9,  124 => 8,  111 => 7,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Welcome to Miniature Cars{% endblock %}

{% block main_class %}!mt-0{% endblock %}

{% block body %}
    {# Hero Section #}
    <div class=\"relative bg-primary\">
        <div class=\"absolute inset-0\">
            <img class=\"w-full h-full object-cover transition-transform duration-700 hover:scale-105\" 
                 src=\"https://images.unsplash.com/photo-1583121274602-3e2820c69888?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80\" 
                 alt=\"Hero background\">
            <div class=\"absolute inset-0 bg-primary mix-blend-multiply\"></div>
        </div>
        <div class=\"relative max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8\">
            <h1 class=\"text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl transform transition-all duration-300 hover:scale-105\">
                Miniature Cars Collection
            </h1>
            <p class=\"mt-6 text-xl text-accent max-w-3xl transition-colors duration-300 hover:text-bright\">
                Discover our exclusive collection of high-quality miniature cars. From classic models to modern supercars, 
                each piece is crafted with attention to detail and precision.
            </p>
            <div class=\"mt-10\">
                <a href=\"{{ path('app_product_index') }}\" 
                   class=\"inline-block bg-bright py-3 px-8 border border-transparent rounded-md text-base font-medium text-white hover:bg-accent transition-all duration-300 transform hover:scale-105 hover:shadow-lg\">
                    Browse Collection
                </a>
            </div>
        </div>
    </div>

    {# Featured Products Section #}
    <div class=\"bg-white\">
        <div class=\"max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8\">
            <div class=\"text-center\">
                <h2 class=\"text-3xl font-extrabold tracking-tight text-primary sm:text-4xl transform transition-all duration-300 hover:scale-105\">
                    Featured Models
                </h2>
                <p class=\"mt-4 max-w-2xl mx-auto text-xl text-secondary transition-colors duration-300 hover:text-primary\">
                    Explore our handpicked selection of premium miniature cars
                </p>
            </div>

            <div class=\"mt-12 grid gap-8 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3\">
                {% for product in featuredProducts %}
                    <div class=\"bg-white rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl\">
                        {% if product.image %}
                            <img class=\"h-48 w-full object-cover transition-transform duration-500 hover:scale-110\" 
                                 src=\"{{ product.image }}\" 
                                 alt=\"{{ product.name }}\">
                        {% else %}
                            <div class=\"h-48 w-full bg-gray-200 flex items-center justify-center\">
                                <span class=\"text-gray-400\">No image</span>
                            </div>
                        {% endif %}
                        <div class=\"p-6\">
                            <div class=\"uppercase tracking-wide text-sm text-bright font-semibold transition-colors duration-300 hover:text-accent\">
                                {{ product.brand }}
                            </div>
                            <h3 class=\"mt-2 text-xl font-bold text-primary transition-colors duration-300 hover:text-bright\">
                                {{ product.name }}
                            </h3>
                            <p class=\"mt-2 text-secondary line-clamp-2 transition-colors duration-300 hover:text-primary\">
                                {{ product.description }}
                            </p>
                            <div class=\"mt-4 flex items-center justify-between\">
                                <span class=\"text-2xl font-bold text-primary transition-colors duration-300 hover:text-bright\">
                                    \${{ product.price|number_format(2) }}
                                </span>
                                <a href=\"{{ path('app_product_show', {'id': product.id}) }}\" 
                                   class=\"bg-bright text-white px-4 py-2 rounded-md hover:bg-accent focus:outline-none focus:ring-2 focus:ring-bright focus:ring-offset-2 transition-all duration-300 transform hover:scale-105 hover:shadow-md\">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>

            <div class=\"mt-12 text-center\">
                <a href=\"{{ path('app_product_index') }}\" 
                   class=\"inline-block bg-bright text-white px-8 py-3 rounded-md text-base font-medium hover:bg-accent focus:outline-none focus:ring-2 focus:ring-bright focus:ring-offset-2 transition-all duration-300 transform hover:scale-105 hover:shadow-lg\">
                    View All Models
                </a>
            </div>
        </div>
    </div>

    {# Features Section #}
    <div class=\"bg-gray-50\">
        <div class=\"max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8\">
            <div class=\"max-w-3xl mx-auto text-center\">
                <h2 class=\"text-3xl font-extrabold text-primary sm:text-4xl transform transition-all duration-300 hover:scale-105\">
                    Why Choose Our Miniature Cars?
                </h2>
            </div>
            <div class=\"mt-12 grid gap-8 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3\">
                <div class=\"bg-white rounded-lg shadow-lg p-6 transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl\">
                    <div class=\"text-bright text-4xl mb-4 transition-transform duration-300 hover:scale-110\">🎯</div>
                    <h3 class=\"text-lg font-medium text-primary transition-colors duration-300 hover:text-bright\">Premium Quality</h3>
                    <p class=\"mt-2 text-secondary transition-colors duration-300 hover:text-primary\">Each model is crafted with precision and attention to detail.</p>
                </div>
                <div class=\"bg-white rounded-lg shadow-lg p-6 transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl\">
                    <div class=\"text-bright text-4xl mb-4 transition-transform duration-300 hover:scale-110\">🚚</div>
                    <h3 class=\"text-lg font-medium text-primary transition-colors duration-300 hover:text-bright\">Fast Shipping</h3>
                    <p class=\"mt-2 text-secondary transition-colors duration-300 hover:text-primary\">Quick and secure delivery to your doorstep.</p>
                </div>
                <div class=\"bg-white rounded-lg shadow-lg p-6 transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl\">
                    <div class=\"text-bright text-4xl mb-4 transition-transform duration-300 hover:scale-110\">💎</div>
                    <h3 class=\"text-lg font-medium text-primary transition-colors duration-300 hover:text-bright\">Authentic Models</h3>
                    <p class=\"mt-2 text-secondary transition-colors duration-300 hover:text-primary\">Officially licensed replicas from top manufacturers.</p>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "home/index.html.twig", "/home/muhyiddin/dev/web/templates/home/index.html.twig");
    }
}
