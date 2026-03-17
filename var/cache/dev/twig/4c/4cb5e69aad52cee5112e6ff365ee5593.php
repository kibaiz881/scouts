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

/* admin/sampana/new.html.twig */
class __TwigTemplate_35481a6e3b4ccbcfa7f9d06e24b6888b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/sampana/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/sampana/new.html.twig"));

        $this->parent = $this->load("component/baseadmin.html.twig", 1);
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

        // line 4
        yield "\tSampana - Admin - New
";
        
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
        yield "\t";
        yield from $this->load("component/headeradmin.html.twig", 8)->unwrap()->yield($context);
        // line 9
        yield "\t";
        yield from $this->load("component/sidebaradmin.html.twig", 9)->unwrap()->yield($context);
        // line 10
        yield "
\t<main class=\"main\" id=\"main\" role=\"main\">

\t\t<!-- Page Header -->
\t\t<div class=\"page-header d-flex justify-content-between align-items-center mb-4\">
\t\t\t<div>
\t\t\t\t<h1 class=\"h3 mb-1\">Create New Sampana</h1>
\t\t\t\t<p class=\"text-muted mb-0\">Fill in the details to create a new sampana</p>
\t\t\t</div>
\t\t\t<a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_sampana");
        yield "\" class=\"btn btn-outline-secondary\">
\t\t\t\t<i class=\"bi bi-arrow-left\"></i> Back to List
\t\t\t</a>
\t\t</div>

\t\t<!-- Form Card -->
\t\t<div class=\"card shadow-sm\">
\t\t\t<div class=\"card-body\">

\t\t\t\t";
        // line 28
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_start');
        yield "

\t\t\t\t<div class=\"row\">

\t\t\t\t\t<div class=\"col-md-6 mb-3\">
\t\t\t\t\t\t";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "nomSampana", [], "any", false, false, false, 33), 'label');
        yield "
\t\t\t\t\t\t";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "nomSampana", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t\t";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "nomSampana", [], "any", false, false, false, 35), 'errors');
        yield "
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-6 mb-3\">
\t\t\t\t\t\t";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "profileSampana", [], "any", false, false, false, 39), 'label');
        yield "
\t\t\t\t\t\t";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "profileSampana", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t\t";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "profileSampana", [], "any", false, false, false, 41), 'errors');
        yield "
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-6 mb-3\">
\t\t\t\t\t\t";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "EffectifSampana", [], "any", false, false, false, 45), 'label');
        yield "
\t\t\t\t\t\t";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "EffectifSampana", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t\t";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "EffectifSampana", [], "any", false, false, false, 47), 'errors');
        yield "
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-6 mb-3\">
\t\t\t\t\t\t";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "createdAt", [], "any", false, false, false, 51), 'label');
        yield "
\t\t\t\t\t\t";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "createdAt", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t\t";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "createdAt", [], "any", false, false, false, 53), 'errors');
        yield "
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-12 mb-3\">
\t\t\t\t\t\t";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "description", [], "any", false, false, false, 57), 'label');
        yield "
\t\t\t\t\t\t";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "description", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control", "rows" => 4]]);
        yield "
\t\t\t\t\t\t";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "description", [], "any", false, false, false, 59), 'errors');
        yield "
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-12 mb-3\">
\t\t\t\t\t\t";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "sampanaPictureFile", [], "any", false, false, false, 63), 'label');
        yield "
\t\t\t\t\t\t";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "sampanaPictureFile", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t\t";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "sampanaPictureFile", [], "any", false, false, false, 65), 'errors');
        yield "
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t<!-- Buttons aligned LEFT -->
\t\t\t\t<div class=\"d-flex gap-2 mt-3\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">
\t\t\t\t\t\t<i class=\"bi bi-check-circle\"></i> Create
\t\t\t\t\t</button>

\t\t\t\t\t<a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_sampana");
        yield "\" class=\"btn btn-danger\">
\t\t\t\t\t\t<i class=\"bi bi-x-circle\"></i> Annuler
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t";
        // line 81
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), 'form_end');
        yield "

\t\t\t</div>
\t\t</div>

\t</main>

\t";
        // line 88
        yield from $this->load("component/footeradmin.html.twig", 88)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/sampana/new.html.twig";
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
        return array (  254 => 88,  244 => 81,  236 => 76,  222 => 65,  218 => 64,  214 => 63,  207 => 59,  203 => 58,  199 => 57,  192 => 53,  188 => 52,  184 => 51,  177 => 47,  173 => 46,  169 => 45,  162 => 41,  158 => 40,  154 => 39,  147 => 35,  143 => 34,  139 => 33,  131 => 28,  119 => 19,  108 => 10,  105 => 9,  102 => 8,  89 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'component/baseadmin.html.twig' %}

{% block title %}
\tSampana - Admin - New
{% endblock %}

{% block body %}
\t{% include 'component/headeradmin.html.twig' %}
\t{% include 'component/sidebaradmin.html.twig' %}

\t<main class=\"main\" id=\"main\" role=\"main\">

\t\t<!-- Page Header -->
\t\t<div class=\"page-header d-flex justify-content-between align-items-center mb-4\">
\t\t\t<div>
\t\t\t\t<h1 class=\"h3 mb-1\">Create New Sampana</h1>
\t\t\t\t<p class=\"text-muted mb-0\">Fill in the details to create a new sampana</p>
\t\t\t</div>
\t\t\t<a href=\"{{ path('app_admin_sampana') }}\" class=\"btn btn-outline-secondary\">
\t\t\t\t<i class=\"bi bi-arrow-left\"></i> Back to List
\t\t\t</a>
\t\t</div>

\t\t<!-- Form Card -->
\t\t<div class=\"card shadow-sm\">
\t\t\t<div class=\"card-body\">

\t\t\t\t{{ form_start(form) }}

\t\t\t\t<div class=\"row\">

\t\t\t\t\t<div class=\"col-md-6 mb-3\">
\t\t\t\t\t\t{{ form_label(form.nomSampana) }}
\t\t\t\t\t\t{{ form_widget(form.nomSampana, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t{{ form_errors(form.nomSampana) }}
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-6 mb-3\">
\t\t\t\t\t\t{{ form_label(form.profileSampana) }}
\t\t\t\t\t\t{{ form_widget(form.profileSampana, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t{{ form_errors(form.profileSampana) }}
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-6 mb-3\">
\t\t\t\t\t\t{{ form_label(form.EffectifSampana) }}
\t\t\t\t\t\t{{ form_widget(form.EffectifSampana, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t{{ form_errors(form.EffectifSampana) }}
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-6 mb-3\">
\t\t\t\t\t\t{{ form_label(form.createdAt) }}
\t\t\t\t\t\t{{ form_widget(form.createdAt, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t{{ form_errors(form.createdAt) }}
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-12 mb-3\">
\t\t\t\t\t\t{{ form_label(form.description) }}
\t\t\t\t\t\t{{ form_widget(form.description, {'attr': {'class': 'form-control', 'rows': 4}}) }}
\t\t\t\t\t\t{{ form_errors(form.description) }}
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-12 mb-3\">
\t\t\t\t\t\t{{ form_label(form.sampanaPictureFile) }}
\t\t\t\t\t\t{{ form_widget(form.sampanaPictureFile, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t{{ form_errors(form.sampanaPictureFile) }}
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t<!-- Buttons aligned LEFT -->
\t\t\t\t<div class=\"d-flex gap-2 mt-3\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">
\t\t\t\t\t\t<i class=\"bi bi-check-circle\"></i> Create
\t\t\t\t\t</button>

\t\t\t\t\t<a href=\"{{ path('app_admin_sampana') }}\" class=\"btn btn-danger\">
\t\t\t\t\t\t<i class=\"bi bi-x-circle\"></i> Annuler
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t{{ form_end(form) }}

\t\t\t</div>
\t\t</div>

\t</main>

\t{% include 'component/footeradmin.html.twig' %}
{% endblock %}
", "admin/sampana/new.html.twig", "C:\\Users\\M_INFO\\Music\\scouts\\templates\\admin\\sampana\\new.html.twig");
    }
}
