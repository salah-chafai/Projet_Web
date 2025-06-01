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

/* registration/register.html.twig */
class __TwigTemplate_913baceba5760d2b955f59d547ed64b8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

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

        yield "Register";
        
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
        yield "
    <div class=\"min-h-full flex flex-col justify-center py-12 sm:px-6 lg:px-8\">
        <div class=\"sm:mx-auto sm:w-full sm:max-w-md\">
            <h2 class=\"mt-6 text-center text-3xl font-bold tracking-tight text-primary transform transition-all duration-300 hover:scale-105\">
                Create your account
            </h2>
            <p class=\"mt-2 text-center text-sm text-secondary\">
                Already have an account?
                <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"font-medium text-bright hover:text-accent transition-colors duration-300\">
                    Sign in
                </a>
            </p>
        </div>

        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "flashes", ["success"], "method", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 21
            yield "            <div class=\"mt-4 sm:mx-auto sm:w-full sm:max-w-md\">
                <div class=\"bg-accent/10 border border-accent text-secondary px-4 py-3 rounded relative transform transition-all duration-300 hover:shadow-md\" role=\"alert\">
                    <span class=\"block sm:inline\">";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</span>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "flashes", ["error"], "method", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 29
            yield "            <div class=\"mt-4 sm:mx-auto sm:w-full sm:max-w-md\">
                <div class=\"bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative transform transition-all duration-300 hover:shadow-md\" role=\"alert\">
                    <span class=\"block sm:inline\">";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</span>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "
    ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), 'errors');
        yield "

        <div class=\"mt-4 sm:mx-auto sm:w-full sm:max-w-md\">
            <div class=\"bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10 transform transition-all duration-300 hover:shadow-xl\">
                ";
        // line 40
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-6"]]);
        yield "
                <div>
                    ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), "email", [], "any", false, false, false, 42), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700"]]);
        yield "
                    <div class=\"mt-1\">
                        ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), "email", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-bright focus:border-bright sm:text-sm", "placeholder" => "you@example.com"]]);
        // line 47
        yield "
                    </div>
                    <div class=\"text-red-600 text-sm mt-1\">
                        ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 50, $this->source); })()), "email", [], "any", false, false, false, 50), 'errors');
        yield "
                    </div>
                </div>
                <div>
                    ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 54, $this->source); })()), "plainPassword", [], "any", false, false, false, 54), "first", [], "any", false, false, false, 54), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700"]]);
        yield "
                    <div class=\"mt-1\">
                        ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 56, $this->source); })()), "plainPassword", [], "any", false, false, false, 56), "first", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-bright focus:border-bright sm:text-sm"]]);
        // line 58
        yield "
                    </div>
                    <div class=\"text-red-600 text-sm mt-1\">
                        ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 61, $this->source); })()), "plainPassword", [], "any", false, false, false, 61)), 'errors');
        yield "
                    </div>
                </div>

                <div>
                    ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 66, $this->source); })()), "plainPassword", [], "any", false, false, false, 66), "second", [], "any", false, false, false, 66), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700"]]);
        yield "
                    <div class=\"mt-1\">
                        ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 68, $this->source); })()), "plainPassword", [], "any", false, false, false, 68), "second", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-bright focus:border-bright sm:text-sm"]]);
        // line 70
        yield "
                    </div>
                </div>

                <div class=\"flex items-center my-4\">
                    ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 75, $this->source); })()), "rememberMe", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => "h-4 w-4 text-bright focus:ring-bright border-gray-300 rounded transition-colors duration-300"]]);
        // line 77
        yield "
                    ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 78, $this->source); })()), "rememberMe", [], "any", false, false, false, 78), 'label', ["label_attr" => ["class" => "ml-2 block text-sm text-gray-700"]]);
        yield "
                </div>

                <div>
                    <button type=\"submit\" class=\"flex w-full justify-center rounded-md border border-transparent bg-bright py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-accent focus:outline-none focus:ring-2 focus:ring-bright focus:ring-offset-2 transition-all duration-300 transform hover:scale-105 hover:shadow-lg\">
                        Register
                    </button>
                </div>
                ";
        // line 86
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 86, $this->source); })()), 'form_end');
        yield "
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
        return "registration/register.html.twig";
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
        return array (  242 => 86,  231 => 78,  228 => 77,  226 => 75,  219 => 70,  217 => 68,  212 => 66,  204 => 61,  199 => 58,  197 => 56,  192 => 54,  185 => 50,  180 => 47,  178 => 44,  173 => 42,  168 => 40,  161 => 36,  158 => 35,  148 => 31,  144 => 29,  140 => 28,  137 => 27,  127 => 23,  123 => 21,  119 => 20,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}

    <div class=\"min-h-full flex flex-col justify-center py-12 sm:px-6 lg:px-8\">
        <div class=\"sm:mx-auto sm:w-full sm:max-w-md\">
            <h2 class=\"mt-6 text-center text-3xl font-bold tracking-tight text-primary transform transition-all duration-300 hover:scale-105\">
                Create your account
            </h2>
            <p class=\"mt-2 text-center text-sm text-secondary\">
                Already have an account?
                <a href=\"{{ path('app_login') }}\" class=\"font-medium text-bright hover:text-accent transition-colors duration-300\">
                    Sign in
                </a>
            </p>
        </div>

        {% for message in app.flashes('success') %}
            <div class=\"mt-4 sm:mx-auto sm:w-full sm:max-w-md\">
                <div class=\"bg-accent/10 border border-accent text-secondary px-4 py-3 rounded relative transform transition-all duration-300 hover:shadow-md\" role=\"alert\">
                    <span class=\"block sm:inline\">{{ message }}</span>
                </div>
            </div>
        {% endfor %}

        {% for message in app.flashes('error') %}
            <div class=\"mt-4 sm:mx-auto sm:w-full sm:max-w-md\">
                <div class=\"bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative transform transition-all duration-300 hover:shadow-md\" role=\"alert\">
                    <span class=\"block sm:inline\">{{ message }}</span>
                </div>
            </div>
        {% endfor %}

    {{ form_errors(registrationForm) }}

        <div class=\"mt-4 sm:mx-auto sm:w-full sm:max-w-md\">
            <div class=\"bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10 transform transition-all duration-300 hover:shadow-xl\">
                {{ form_start(registrationForm, {'attr': {'class': 'space-y-6'}}) }}
                <div>
                    {{ form_label(registrationForm.email, null, {'label_attr': {'class': 'block text-sm font-medium text-gray-700'}}) }}
                    <div class=\"mt-1\">
                        {{ form_widget(registrationForm.email, {'attr': {
                            'class': 'appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-bright focus:border-bright sm:text-sm',
                            'placeholder': 'you@example.com'
                        }}) }}
                    </div>
                    <div class=\"text-red-600 text-sm mt-1\">
                        {{ form_errors(registrationForm.email) }}
                    </div>
                </div>
                <div>
                    {{ form_label(registrationForm.plainPassword.first, null, {'label_attr': {'class': 'block text-sm font-medium text-gray-700'}}) }}
                    <div class=\"mt-1\">
                        {{ form_widget(registrationForm.plainPassword.first, {'attr': {
                            'class': 'appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-bright focus:border-bright sm:text-sm'
                        }}) }}
                    </div>
                    <div class=\"text-red-600 text-sm mt-1\">
                        {{ form_errors(registrationForm.plainPassword|first) }}
                    </div>
                </div>

                <div>
                    {{ form_label(registrationForm.plainPassword.second, null, {'label_attr': {'class': 'block text-sm font-medium text-gray-700'}}) }}
                    <div class=\"mt-1\">
                        {{ form_widget(registrationForm.plainPassword.second, {'attr': {
                            'class': 'appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-bright focus:border-bright sm:text-sm'
                        }}) }}
                    </div>
                </div>

                <div class=\"flex items-center my-4\">
                    {{ form_widget(registrationForm.rememberMe, {'attr': {
                        'class': 'h-4 w-4 text-bright focus:ring-bright border-gray-300 rounded transition-colors duration-300'
                    }}) }}
                    {{ form_label(registrationForm.rememberMe, null, {'label_attr': {'class': 'ml-2 block text-sm text-gray-700'}}) }}
                </div>

                <div>
                    <button type=\"submit\" class=\"flex w-full justify-center rounded-md border border-transparent bg-bright py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-accent focus:outline-none focus:ring-2 focus:ring-bright focus:ring-offset-2 transition-all duration-300 transform hover:scale-105 hover:shadow-lg\">
                        Register
                    </button>
                </div>
                {{ form_end(registrationForm) }}
            </div>
        </div>
    </div>
{% endblock %}
", "registration/register.html.twig", "/home/muhyiddin/dev/web/templates/registration/register.html.twig");
    }
}
