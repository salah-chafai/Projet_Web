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

/* cart/_cart_item.html.twig */
class __TwigTemplate_ac5a6d058ef26eba3f34a1251520e756 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/_cart_item.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/_cart_item.html.twig"));

        // line 2
        yield "<li class=\"py-6 flex transform transition-all duration-300 hover:bg-gray-50\">
    <div class=\"flex-shrink-0 w-24 h-24 border border-gray-200 rounded-md overflow-hidden transform transition-all duration-300 hover:shadow-md\">
        ";
        // line 4
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 4, $this->source); })()), "product", [], "any", false, false, false, 4), "image", [], "any", false, false, false, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "product", [], "any", false, false, false, 5), "image", [], "any", false, false, false, 5), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "product", [], "any", false, false, false, 5), "name", [], "any", false, false, false, 5), "html", null, true);
            yield "\" class=\"w-full h-full object-cover transition-transform duration-500 hover:scale-110\">
        ";
        } else {
            // line 7
            yield "            <div class=\"w-full h-full bg-gray-200 flex items-center justify-center\">
                <span class=\"text-gray-400\">No image</span>
            </div>
        ";
        }
        // line 11
        yield "    </div>

    <div class=\"ml-4 flex-1 flex flex-col\">
        <div>
            <div class=\"flex justify-between text-base font-medium text-primary\">
                <h3 class=\"transition-colors duration-300 hover:text-bright\">
                    <a href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 17, $this->source); })()), "product", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 17, $this->source); })()), "product", [], "any", false, false, false, 17), "name", [], "any", false, false, false, 17), "html", null, true);
        yield "</a>
                </h3>
                <p class=\"ml-4 transition-colors duration-300 hover:text-bright\">\$";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 19, $this->source); })()), "subtotal", [], "any", false, false, false, 19), 2), "html", null, true);
        yield "</p>
            </div>
            <p class=\"mt-1 text-sm text-secondary\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 21, $this->source); })()), "product", [], "any", false, false, false, 21), "brand", [], "any", false, false, false, 21), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 21, $this->source); })()), "product", [], "any", false, false, false, 21), "scale", [], "any", false, false, false, 21), "html", null, true);
        yield "</p>
            
            ";
        // line 23
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 23, $this->source); })()), "product", [], "any", false, false, false, 23), "stock", [], "any", false, false, false, 23) < 5)) {
            // line 24
            yield "                <p class=\"mt-1 text-xs text-red-600\">Only ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 24, $this->source); })()), "product", [], "any", false, false, false, 24), "stock", [], "any", false, false, false, 24), "html", null, true);
            yield " left in stock!</p>
            ";
        }
        // line 26
        yield "        </div>
        <div class=\"flex-1 flex items-end justify-between text-sm\">
            <div class=\"flex items-center\">
                <form action=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_update", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 29, $this->source); })()), "product", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29)]), "html", null, true);
        yield "\" method=\"POST\" class=\"flex items-center\">
                    <label for=\"quantity-";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 30, $this->source); })()), "product", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30), "html", null, true);
        yield "\" class=\"mr-2 text-secondary transition-colors duration-300 hover:text-primary\">Qty</label>
                    <input type=\"number\" name=\"quantity\" id=\"quantity-";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 31, $this->source); })()), "product", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 31, $this->source); })()), "quantity", [], "any", false, false, false, 31), "html", null, true);
        yield "\" min=\"1\" max=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 31, $this->source); })()), "product", [], "any", false, false, false, 31), "stock", [], "any", false, false, false, 31), "html", null, true);
        yield "\"
                           class=\"w-16 rounded-md border-gray-300 shadow-sm focus:border-bright focus:ring-bright transition-all duration-300 hover:border-bright\">
                    <button type=\"submit\" class=\"ml-2 text-bright hover:text-accent transition-colors duration-300\">Update</button>
                </form>
            </div>

            <div class=\"flex\">
                <a href=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_remove", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 38, $this->source); })()), "product", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38)]), "html", null, true);
        yield "\" 
                   class=\"font-medium text-red-600 hover:text-red-500 transition-colors duration-300\">
                    Remove
                </a>
            </div>
        </div>
    </div>
</li>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "cart/_cart_item.html.twig";
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
        return array (  130 => 38,  116 => 31,  112 => 30,  108 => 29,  103 => 26,  97 => 24,  95 => 23,  88 => 21,  83 => 19,  76 => 17,  68 => 11,  62 => 7,  54 => 5,  52 => 4,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# filepath: /home/x-0r/Downloads/projet-web/templates/cart/_cart_item.html.twig #}
<li class=\"py-6 flex transform transition-all duration-300 hover:bg-gray-50\">
    <div class=\"flex-shrink-0 w-24 h-24 border border-gray-200 rounded-md overflow-hidden transform transition-all duration-300 hover:shadow-md\">
        {% if item.product.image %}
            <img src=\"{{ item.product.image }}\" alt=\"{{ item.product.name }}\" class=\"w-full h-full object-cover transition-transform duration-500 hover:scale-110\">
        {% else %}
            <div class=\"w-full h-full bg-gray-200 flex items-center justify-center\">
                <span class=\"text-gray-400\">No image</span>
            </div>
        {% endif %}
    </div>

    <div class=\"ml-4 flex-1 flex flex-col\">
        <div>
            <div class=\"flex justify-between text-base font-medium text-primary\">
                <h3 class=\"transition-colors duration-300 hover:text-bright\">
                    <a href=\"{{ path('app_product_show', {'id': item.product.id}) }}\">{{ item.product.name }}</a>
                </h3>
                <p class=\"ml-4 transition-colors duration-300 hover:text-bright\">\${{ item.subtotal|number_format(2) }}</p>
            </div>
            <p class=\"mt-1 text-sm text-secondary\">{{ item.product.brand }} - {{ item.product.scale }}</p>
            
            {% if item.product.stock < 5 %}
                <p class=\"mt-1 text-xs text-red-600\">Only {{ item.product.stock }} left in stock!</p>
            {% endif %}
        </div>
        <div class=\"flex-1 flex items-end justify-between text-sm\">
            <div class=\"flex items-center\">
                <form action=\"{{ path('app_cart_update', {'id': item.product.id}) }}\" method=\"POST\" class=\"flex items-center\">
                    <label for=\"quantity-{{ item.product.id }}\" class=\"mr-2 text-secondary transition-colors duration-300 hover:text-primary\">Qty</label>
                    <input type=\"number\" name=\"quantity\" id=\"quantity-{{ item.product.id }}\" value=\"{{ item.quantity }}\" min=\"1\" max=\"{{ item.product.stock }}\"
                           class=\"w-16 rounded-md border-gray-300 shadow-sm focus:border-bright focus:ring-bright transition-all duration-300 hover:border-bright\">
                    <button type=\"submit\" class=\"ml-2 text-bright hover:text-accent transition-colors duration-300\">Update</button>
                </form>
            </div>

            <div class=\"flex\">
                <a href=\"{{ path('app_cart_remove', {'id': item.product.id}) }}\" 
                   class=\"font-medium text-red-600 hover:text-red-500 transition-colors duration-300\">
                    Remove
                </a>
            </div>
        </div>
    </div>
</li>
", "cart/_cart_item.html.twig", "/home/muhyiddin/dev/web/templates/cart/_cart_item.html.twig");
    }
}
