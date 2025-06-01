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

/* cart/index.html.twig */
class __TwigTemplate_a293d468d643f79075c0d4991e78716f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

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

        yield "Shopping Cart";
        
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
        yield "<div class=\"w-full max-w-4xl mx-auto\">
    <h1 class=\"text-3xl font-bold text-primary mb-8 text-center transform transition-all duration-300 hover:scale-105\">Shopping Cart</h1>

    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", ["success"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            yield "        <div class=\"bg-accent/10 border border-accent text-secondary px-4 py-3 rounded relative mb-4 transform transition-all duration-300 hover:shadow-md\" role=\"alert\">
            <span class=\"block sm:inline\">";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</span>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "    
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", ["error"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            yield "        <div class=\"bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4 transform transition-all duration-300 hover:shadow-md\" role=\"alert\">
            <span class=\"block sm:inline\">";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</span>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "
    ";
        // line 21
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 21, $this->source); })())) > 0)) {
            // line 22
            yield "        <div class=\"bg-white rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-xl\">
            <div class=\"p-6\">
                <div class=\"flow-root\">
                    <ul role=\"list\" class=\"-my-6 divide-y divide-gray-200\">
                        ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 26, $this->source); })()));
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
                // line 27
                yield "                            ";
                yield from $this->load("cart/_cart_item.html.twig", 27)->unwrap()->yield(CoreExtension::merge($context, ["item" => $context["item"]]));
                // line 28
                yield "                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            yield "                    </ul>
                </div>
            </div>
            <div class=\"border-t border-gray-200 px-4 py-6 sm:px-6\">
                <div class=\"flex justify-between text-base font-medium text-primary\">
                    <p class=\"transition-colors duration-300 hover:text-bright\">Subtotal</p>
                    <p class=\"transition-colors duration-300 hover:text-bright\">\$";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 35, $this->source); })()), 2), "html", null, true);
            yield "</p>
                </div>
                <p class=\"mt-0.5 text-sm text-secondary\">Shipping and taxes calculated at checkout.</p>
                <div class=\"mt-6\">
                    <a href=\"";
            // line 39
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_checkout");
            yield "\"
                            class=\"w-full flex justify-center items-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-primary hover:bg-bright mb-4 transition-all duration-300 transform hover:scale-105 hover:shadow-lg\">
                        Checkout
                    </a>
                    <div class=\"flex space-x-4\">
                        <a href=\"";
            // line 44
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_index");
            yield "\"
                           class=\"flex-1 flex justify-center items-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-bright hover:bg-accent transition-all duration-300 transform hover:scale-105 hover:shadow-lg\">
                            Continue Shopping
                        </a>
                        <a href=\"";
            // line 48
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_clear");
            yield "\"
                           class=\"flex-1 flex justify-center items-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-red-500 hover:bg-red-600 transition-all duration-300 transform hover:scale-105 hover:shadow-lg\"
                           onclick=\"return confirm('Are you sure you want to clear your cart?')\">
                            Clear Cart
                        </a>
                    </div>
                </div>

                <div id=\"checkout-popup\" class=\"hidden fixed inset-0 bg-black bg-opacity-0 flex items-center justify-center z-50 transition-all duration-300\">
                    <div class=\"bg-white p-6 rounded-lg shadow-xl max-w-md w-full transform transition-all duration-500 opacity-0 translate-y-8\">
                        <p class=\"text-gray-500 italic text-center\">This functionality isn't implemented.</p>
                        <div class=\"mt-4 flex justify-center\">
                            <button id=\"close-popup\" class=\"px-4 py-2 bg-gray-200 rounded hover:bg-gray-300 transition-colors duration-300\">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
        } else {
            // line 69
            yield "        <div class=\"text-center py-12 transform transition-all duration-300 hover:scale-105\">
            <h2 class=\"text-2xl font-semibold text-primary\">Your cart is empty</h2>
            <p class=\"mt-2 text-secondary\">Add some products to your cart to see them here.</p>
            <div class=\"mt-6\">
                <a href=\"";
            // line 73
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_index");
            yield "\" 
                   class=\"inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-bright hover:bg-accent transition-all duration-300 transform hover:scale-105 hover:shadow-lg\">
                    Browse Products
                </a>
            </div>
        </div>
    ";
        }
        // line 80
        yield "</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const checkoutButton = document.getElementById('checkout-button');
        const checkoutPopup = document.getElementById('checkout-popup');
        const closePopup = document.getElementById('close-popup');

        if (checkoutButton && checkoutPopup && closePopup) {
            checkoutButton.addEventListener('click', function() {
                // First show the container but with opacity 0
                checkoutPopup.classList.remove('hidden');

                // Force a reflow to make sure the transition works
                void checkoutPopup.offsetWidth;

                // Add the background fade in
                checkoutPopup.classList.add('bg-opacity-30');

                // Get the popup content container
                const popupContent = checkoutPopup.querySelector('div');

                // Start the slide-up and fade-in animation
                setTimeout(() => {
                    popupContent.classList.remove('opacity-0', 'translate-y-8');
                }, 10);
            });

            const hidePopup = function() {
                // Animate out
                const popupContent = checkoutPopup.querySelector('div');
                popupContent.classList.add('opacity-0', 'translate-y-8');
                checkoutPopup.classList.remove('bg-opacity-30');

                // Wait for animation to finish before hiding
                setTimeout(() => {
                    checkoutPopup.classList.add('hidden');
                }, 500);
            };

            closePopup.addEventListener('click', hidePopup);

            // Close popup when clicking outside of it
            checkoutPopup.addEventListener('click', function(event) {
                if (event.target === checkoutPopup) {
                    hidePopup();
                }
            });
        }
    });
</script>
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
        return "cart/index.html.twig";
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
        return array (  255 => 80,  245 => 73,  239 => 69,  215 => 48,  208 => 44,  200 => 39,  193 => 35,  185 => 29,  171 => 28,  168 => 27,  151 => 26,  145 => 22,  143 => 21,  140 => 20,  131 => 17,  128 => 16,  124 => 15,  121 => 14,  112 => 11,  109 => 10,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Shopping Cart{% endblock %}

{% block body %}
<div class=\"w-full max-w-4xl mx-auto\">
    <h1 class=\"text-3xl font-bold text-primary mb-8 text-center transform transition-all duration-300 hover:scale-105\">Shopping Cart</h1>

    {% for message in app.flashes('success') %}
        <div class=\"bg-accent/10 border border-accent text-secondary px-4 py-3 rounded relative mb-4 transform transition-all duration-300 hover:shadow-md\" role=\"alert\">
            <span class=\"block sm:inline\">{{ message }}</span>
        </div>
    {% endfor %}
    
    {% for message in app.flashes('error') %}
        <div class=\"bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4 transform transition-all duration-300 hover:shadow-md\" role=\"alert\">
            <span class=\"block sm:inline\">{{ message }}</span>
        </div>
    {% endfor %}

    {% if products|length > 0 %}
        <div class=\"bg-white rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-xl\">
            <div class=\"p-6\">
                <div class=\"flow-root\">
                    <ul role=\"list\" class=\"-my-6 divide-y divide-gray-200\">
                        {% for item in products %}
                            {% include 'cart/_cart_item.html.twig' with {'item': item} %}
                        {% endfor %}
                    </ul>
                </div>
            </div>
            <div class=\"border-t border-gray-200 px-4 py-6 sm:px-6\">
                <div class=\"flex justify-between text-base font-medium text-primary\">
                    <p class=\"transition-colors duration-300 hover:text-bright\">Subtotal</p>
                    <p class=\"transition-colors duration-300 hover:text-bright\">\${{ total|number_format(2) }}</p>
                </div>
                <p class=\"mt-0.5 text-sm text-secondary\">Shipping and taxes calculated at checkout.</p>
                <div class=\"mt-6\">
                    <a href=\"{{ path('app_cart_checkout') }}\"
                            class=\"w-full flex justify-center items-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-primary hover:bg-bright mb-4 transition-all duration-300 transform hover:scale-105 hover:shadow-lg\">
                        Checkout
                    </a>
                    <div class=\"flex space-x-4\">
                        <a href=\"{{ path('app_product_index') }}\"
                           class=\"flex-1 flex justify-center items-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-bright hover:bg-accent transition-all duration-300 transform hover:scale-105 hover:shadow-lg\">
                            Continue Shopping
                        </a>
                        <a href=\"{{ path('app_cart_clear') }}\"
                           class=\"flex-1 flex justify-center items-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-red-500 hover:bg-red-600 transition-all duration-300 transform hover:scale-105 hover:shadow-lg\"
                           onclick=\"return confirm('Are you sure you want to clear your cart?')\">
                            Clear Cart
                        </a>
                    </div>
                </div>

                <div id=\"checkout-popup\" class=\"hidden fixed inset-0 bg-black bg-opacity-0 flex items-center justify-center z-50 transition-all duration-300\">
                    <div class=\"bg-white p-6 rounded-lg shadow-xl max-w-md w-full transform transition-all duration-500 opacity-0 translate-y-8\">
                        <p class=\"text-gray-500 italic text-center\">This functionality isn't implemented.</p>
                        <div class=\"mt-4 flex justify-center\">
                            <button id=\"close-popup\" class=\"px-4 py-2 bg-gray-200 rounded hover:bg-gray-300 transition-colors duration-300\">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {% else %}
        <div class=\"text-center py-12 transform transition-all duration-300 hover:scale-105\">
            <h2 class=\"text-2xl font-semibold text-primary\">Your cart is empty</h2>
            <p class=\"mt-2 text-secondary\">Add some products to your cart to see them here.</p>
            <div class=\"mt-6\">
                <a href=\"{{ path('app_product_index') }}\" 
                   class=\"inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-bright hover:bg-accent transition-all duration-300 transform hover:scale-105 hover:shadow-lg\">
                    Browse Products
                </a>
            </div>
        </div>
    {% endif %}
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const checkoutButton = document.getElementById('checkout-button');
        const checkoutPopup = document.getElementById('checkout-popup');
        const closePopup = document.getElementById('close-popup');

        if (checkoutButton && checkoutPopup && closePopup) {
            checkoutButton.addEventListener('click', function() {
                // First show the container but with opacity 0
                checkoutPopup.classList.remove('hidden');

                // Force a reflow to make sure the transition works
                void checkoutPopup.offsetWidth;

                // Add the background fade in
                checkoutPopup.classList.add('bg-opacity-30');

                // Get the popup content container
                const popupContent = checkoutPopup.querySelector('div');

                // Start the slide-up and fade-in animation
                setTimeout(() => {
                    popupContent.classList.remove('opacity-0', 'translate-y-8');
                }, 10);
            });

            const hidePopup = function() {
                // Animate out
                const popupContent = checkoutPopup.querySelector('div');
                popupContent.classList.add('opacity-0', 'translate-y-8');
                checkoutPopup.classList.remove('bg-opacity-30');

                // Wait for animation to finish before hiding
                setTimeout(() => {
                    checkoutPopup.classList.add('hidden');
                }, 500);
            };

            closePopup.addEventListener('click', hidePopup);

            // Close popup when clicking outside of it
            checkoutPopup.addEventListener('click', function(event) {
                if (event.target === checkoutPopup) {
                    hidePopup();
                }
            });
        }
    });
</script>
{% endblock %}
", "cart/index.html.twig", "/home/muhyiddin/dev/web/templates/cart/index.html.twig");
    }
}
