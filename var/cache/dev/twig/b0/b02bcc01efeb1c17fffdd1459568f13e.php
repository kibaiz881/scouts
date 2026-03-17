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

/* admin/useradmin/new.html.twig */
class __TwigTemplate_b7ff149f7e0e91f81ee10c93a1abb863 extends Template
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
        return "component/baseadmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/useradmin/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/useradmin/new.html.twig"));

        $this->parent = $this->load("component/baseadmin.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        // line 5
        yield "\tCreate New User
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield "
\t";
        // line 10
        yield from $this->load("component/headeradmin.html.twig", 10)->unwrap()->yield($context);
        // line 11
        yield "\t";
        yield from $this->load("component/sidebaradmin.html.twig", 11)->unwrap()->yield($context);
        // line 12
        yield "\t<!-- ========== MAIN CONTENT ========== -->
\t<main
\t\tclass=\"main\" id=\"main\" role=\"main\">
\t\t<!-- Page Header -->
\t\t<div class=\"page-header\">
\t\t\t<div class=\"page-title\">
\t\t\t\t<h1>Create New User</h1>
\t\t\t\t<p>Fill in the details to create a new user account</p>
\t\t\t</div>
\t\t\t<div class=\"page-actions\">
\t\t\t\t<a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_useradmin");
        yield "\" class=\"btn-secondary\">
\t\t\t\t\t<i class=\"bi bi-arrow-left\"></i>
\t\t\t\t\tBack to User List
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>

\t\t<!-- New User Form -->
\t\t<div class=\"card mb-4\">
\t\t\t<div class=\"card-body\">
\t\t\t\t";
        // line 32
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["userform"]) || array_key_exists("userform", $context) ? $context["userform"] : (function () { throw new RuntimeError('Variable "userform" does not exist.', 32, $this->source); })()), 'form_start');
        yield "
\t\t\t\t<div class=\"form-group mb-3\">
\t\t\t\t\t";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userform"]) || array_key_exists("userform", $context) ? $context["userform"] : (function () { throw new RuntimeError('Variable "userform" does not exist.', 34, $this->source); })()), "username", [], "any", false, false, false, 34), 'label');
        yield "
\t\t\t\t\t";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userform"]) || array_key_exists("userform", $context) ? $context["userform"] : (function () { throw new RuntimeError('Variable "userform" does not exist.', 35, $this->source); })()), "username", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userform"]) || array_key_exists("userform", $context) ? $context["userform"] : (function () { throw new RuntimeError('Variable "userform" does not exist.', 36, $this->source); })()), "username", [], "any", false, false, false, 36), 'errors');
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group mb-3\">
\t\t\t\t\t";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userform"]) || array_key_exists("userform", $context) ? $context["userform"] : (function () { throw new RuntimeError('Variable "userform" does not exist.', 39, $this->source); })()), "email", [], "any", false, false, false, 39), 'label');
        yield "
\t\t\t\t\t";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userform"]) || array_key_exists("userform", $context) ? $context["userform"] : (function () { throw new RuntimeError('Variable "userform" does not exist.', 40, $this->source); })()), "email", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userform"]) || array_key_exists("userform", $context) ? $context["userform"] : (function () { throw new RuntimeError('Variable "userform" does not exist.', 41, $this->source); })()), "email", [], "any", false, false, false, 41), 'errors');
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group mb-3\">
\t\t\t\t\t";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userform"]) || array_key_exists("userform", $context) ? $context["userform"] : (function () { throw new RuntimeError('Variable "userform" does not exist.', 44, $this->source); })()), "password", [], "any", false, false, false, 44), 'label');
        yield "
\t\t\t\t\t";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userform"]) || array_key_exists("userform", $context) ? $context["userform"] : (function () { throw new RuntimeError('Variable "userform" does not exist.', 45, $this->source); })()), "password", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userform"]) || array_key_exists("userform", $context) ? $context["userform"] : (function () { throw new RuntimeError('Variable "userform" does not exist.', 46, $this->source); })()), "password", [], "any", false, false, false, 46), 'errors');
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group mb-3\">
\t\t\t\t\t";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userform"]) || array_key_exists("userform", $context) ? $context["userform"] : (function () { throw new RuntimeError('Variable "userform" does not exist.', 49, $this->source); })()), "profilePictureFile", [], "any", false, false, false, 49), 'label');
        yield "
\t\t\t\t\t";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userform"]) || array_key_exists("userform", $context) ? $context["userform"] : (function () { throw new RuntimeError('Variable "userform" does not exist.', 50, $this->source); })()), "profilePictureFile", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userform"]) || array_key_exists("userform", $context) ? $context["userform"] : (function () { throw new RuntimeError('Variable "userform" does not exist.', 51, $this->source); })()), "profilePictureFile", [], "any", false, false, false, 51), 'errors');
        yield "
\t\t\t\t</div>

\t\t\t\t<button type=\"submit\" class=\"btn-primary\">
\t\t\t\t\t<i class=\"bi bi-check\"></i>
\t\t\t\t\tCreate User
\t\t\t\t</button>
\t\t\t\t";
        // line 58
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["userform"]) || array_key_exists("userform", $context) ? $context["userform"] : (function () { throw new RuntimeError('Variable "userform" does not exist.', 58, $this->source); })()), 'form_end');
        yield "
\t\t\t</div>
\t\t</div>
\t</main>
\t";
        // line 62
        yield from $this->load("component/footeradmin.html.twig", 62)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/useradmin/new.html.twig";
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
        return array (  207 => 62,  200 => 58,  190 => 51,  186 => 50,  182 => 49,  176 => 46,  172 => 45,  168 => 44,  162 => 41,  158 => 40,  154 => 39,  148 => 36,  144 => 35,  140 => 34,  135 => 32,  122 => 22,  110 => 12,  107 => 11,  105 => 10,  102 => 9,  89 => 8,  77 => 5,  64 => 4,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'component/baseadmin.html.twig' %}


{% block title %}
\tCreate New User
{% endblock %}

{% block body %}

\t{% include 'component/headeradmin.html.twig' %}
\t{% include 'component/sidebaradmin.html.twig' %}
\t<!-- ========== MAIN CONTENT ========== -->
\t<main
\t\tclass=\"main\" id=\"main\" role=\"main\">
\t\t<!-- Page Header -->
\t\t<div class=\"page-header\">
\t\t\t<div class=\"page-title\">
\t\t\t\t<h1>Create New User</h1>
\t\t\t\t<p>Fill in the details to create a new user account</p>
\t\t\t</div>
\t\t\t<div class=\"page-actions\">
\t\t\t\t<a href=\"{{ path('app_admin_useradmin') }}\" class=\"btn-secondary\">
\t\t\t\t\t<i class=\"bi bi-arrow-left\"></i>
\t\t\t\t\tBack to User List
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>

\t\t<!-- New User Form -->
\t\t<div class=\"card mb-4\">
\t\t\t<div class=\"card-body\">
\t\t\t\t{{ form_start(userform) }}
\t\t\t\t<div class=\"form-group mb-3\">
\t\t\t\t\t{{ form_label(userform.username) }}
\t\t\t\t\t{{ form_widget(userform.username, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t{{ form_errors(userform.username) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group mb-3\">
\t\t\t\t\t{{ form_label(userform.email) }}
\t\t\t\t\t{{ form_widget(userform.email, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t{{ form_errors(userform.email) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group mb-3\">
\t\t\t\t\t{{ form_label(userform.password) }}
\t\t\t\t\t{{ form_widget(userform.password, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t{{ form_errors(userform.password) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group mb-3\">
\t\t\t\t\t{{ form_label(userform.profilePictureFile) }}
\t\t\t\t\t{{ form_widget(userform.profilePictureFile, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t{{ form_errors(userform.profilePictureFile) }}
\t\t\t\t</div>

\t\t\t\t<button type=\"submit\" class=\"btn-primary\">
\t\t\t\t\t<i class=\"bi bi-check\"></i>
\t\t\t\t\tCreate User
\t\t\t\t</button>
\t\t\t\t{{ form_end(userform) }}
\t\t\t</div>
\t\t</div>
\t</main>
\t{% include 'component/footeradmin.html.twig' %}
{% endblock %}
", "admin/useradmin/new.html.twig", "C:\\Users\\M_INFO\\Music\\scouts\\templates\\admin\\useradmin\\new.html.twig");
    }
}
