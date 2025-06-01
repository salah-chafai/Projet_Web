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

/* security/login.html.twig */
class __TwigTemplate_db2a977f5d1b4ef5e88bfbf57f1a6465 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

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

        yield "Log in to your account";
        
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
        yield "<div class=\"min-h-full flex flex-col justify-center py-12 sm:px-6 lg:px-8\">
    <div class=\"sm:mx-auto sm:w-full sm:max-w-md\">
        <h2 class=\"mt-6 text-center text-3xl font-bold tracking-tight text-primary transform transition-all duration-300 hover:scale-105\">
            Sign in to your account
        </h2>
        <p class=\"mt-2 text-center text-sm text-secondary\">
            Or
            <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"font-medium text-bright hover:text-accent transition-colors duration-300\">
                create a new account
            </a>
        </p>
    </div>

    <div class=\"mt-8 sm:mx-auto sm:w-full sm:max-w-md\">
        <div class=\"bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10 transform transition-all duration-300 hover:shadow-xl\">
            <form class=\"space-y-6\" action=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" method=\"post\">
                ";
        // line 22
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 22, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 23
            yield "                    <div class=\"bg-red-50 border border-red-400 text-red-700 px-4 py-3 rounded relative transform transition-all duration-300 hover:shadow-md\" role=\"alert\">
                        <span class=\"block sm:inline\">";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 24, $this->source); })()), "messageKey", [], "any", false, false, false, 24), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 24, $this->source); })()), "messageData", [], "any", false, false, false, 24), "security"), "html", null, true);
            yield "</span>
                    </div>
                ";
        }
        // line 27
        yield "
                <div>
                    <label for=\"inputEmail\" class=\"block text-sm font-medium text-primary transition-colors duration-300 hover:text-bright\">Email address</label>
                    <div class=\"mt-1\">
                        <input id=\"inputEmail\" name=\"_username\" type=\"email\" autocomplete=\"email\" required value=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 31, $this->source); })()), "html", null, true);
        yield "\"
                               class=\"block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-bright focus:outline-none focus:ring-bright sm:text-sm transition-all duration-300 hover:border-bright\" placeholder=\"you@example.com\">
                    </div>
                </div>

                <div>
                    <label for=\"inputPassword\" class=\"block text-sm font-medium text-primary transition-colors duration-300 hover:text-bright\">Password</label>
                    <div class=\"mt-1\">
                        <input id=\"inputPassword\" name=\"_password\" type=\"password\" autocomplete=\"current-password\" required
                               class=\"block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-bright focus:outline-none focus:ring-bright sm:text-sm transition-all duration-300 hover:border-bright\">
                    </div>
                </div>

                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

                <div>
                    <button type=\"submit\" class=\"flex w-full justify-center rounded-md border border-transparent bg-bright py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-accent focus:outline-none focus:ring-2 focus:ring-bright focus:ring-offset-2 transition-all duration-300 transform hover:scale-105 hover:shadow-lg\">
                        Sign in
                    </button>
                </div>
            </form>
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
        return "security/login.html.twig";
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
        return array (  157 => 44,  141 => 31,  135 => 27,  129 => 24,  126 => 23,  124 => 22,  120 => 21,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in to your account{% endblock %}

{% block body %}
<div class=\"min-h-full flex flex-col justify-center py-12 sm:px-6 lg:px-8\">
    <div class=\"sm:mx-auto sm:w-full sm:max-w-md\">
        <h2 class=\"mt-6 text-center text-3xl font-bold tracking-tight text-primary transform transition-all duration-300 hover:scale-105\">
            Sign in to your account
        </h2>
        <p class=\"mt-2 text-center text-sm text-secondary\">
            Or
            <a href=\"{{ path('app_register') }}\" class=\"font-medium text-bright hover:text-accent transition-colors duration-300\">
                create a new account
            </a>
        </p>
    </div>

    <div class=\"mt-8 sm:mx-auto sm:w-full sm:max-w-md\">
        <div class=\"bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10 transform transition-all duration-300 hover:shadow-xl\">
            <form class=\"space-y-6\" action=\"{{ path('app_login') }}\" method=\"post\">
                {% if error %}
                    <div class=\"bg-red-50 border border-red-400 text-red-700 px-4 py-3 rounded relative transform transition-all duration-300 hover:shadow-md\" role=\"alert\">
                        <span class=\"block sm:inline\">{{ error.messageKey|trans(error.messageData, 'security') }}</span>
                    </div>
                {% endif %}

                <div>
                    <label for=\"inputEmail\" class=\"block text-sm font-medium text-primary transition-colors duration-300 hover:text-bright\">Email address</label>
                    <div class=\"mt-1\">
                        <input id=\"inputEmail\" name=\"_username\" type=\"email\" autocomplete=\"email\" required value=\"{{ last_username }}\"
                               class=\"block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-bright focus:outline-none focus:ring-bright sm:text-sm transition-all duration-300 hover:border-bright\" placeholder=\"you@example.com\">
                    </div>
                </div>

                <div>
                    <label for=\"inputPassword\" class=\"block text-sm font-medium text-primary transition-colors duration-300 hover:text-bright\">Password</label>
                    <div class=\"mt-1\">
                        <input id=\"inputPassword\" name=\"_password\" type=\"password\" autocomplete=\"current-password\" required
                               class=\"block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-bright focus:outline-none focus:ring-bright sm:text-sm transition-all duration-300 hover:border-bright\">
                    </div>
                </div>

                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                <div>
                    <button type=\"submit\" class=\"flex w-full justify-center rounded-md border border-transparent bg-bright py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-accent focus:outline-none focus:ring-2 focus:ring-bright focus:ring-offset-2 transition-all duration-300 transform hover:scale-105 hover:shadow-lg\">
                        Sign in
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
{% endblock %}
", "security/login.html.twig", "/home/muhyiddin/dev/web/templates/security/login.html.twig");
    }
}
