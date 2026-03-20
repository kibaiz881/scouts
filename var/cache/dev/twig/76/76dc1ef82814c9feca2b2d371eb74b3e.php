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

/* /admin/fivondronanna/edit.html.twig */
class __TwigTemplate_78537bf3f39331b405b8534bda98109e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/admin/fivondronanna/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/admin/fivondronanna/edit.html.twig"));

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
        yield "\tFivondronana - Admin - Update
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
\t<main
\t\tclass=\"main\" id=\"main\" role=\"main\">

\t\t<!-- Page Header -->
\t\t<div class=\"page-header d-flex justify-content-between align-items-center mb-4\">
\t\t\t<div>
\t\t\t\t<h1 class=\"h3 mb-1\">Update Fivondronana</h1>
\t\t\t\t<p class=\"text-muted mb-0\">Fill in the details to update this fivondronana</p>
\t\t\t</div>
\t\t\t<a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_fivondronanna");
        yield "\" class=\"btn btn-outline-secondary\">
\t\t\t\t<i class=\"bi bi-arrow-left\"></i>
\t\t\t\tBack to List
\t\t\t</a>
\t\t</div>

\t\t<!-- Form Card -->
\t\t<div class=\"card shadow-sm\">
\t\t\t<div class=\"card-body\">

\t\t\t\t";
        // line 30
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form_start');
        yield "

\t\t\t\t<div class=\"row\">

\t\t\t\t\t<div class=\"col-md-6 mb-3\">
\t\t\t\t\t\t";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "nomFiv", [], "any", false, false, false, 35), 'label');
        yield "
\t\t\t\t\t\t";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "nomFiv", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t\t";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "nomFiv", [], "any", false, false, false, 37), 'errors');
        yield "
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-6 mb-3\">
\t\t\t\t\t\t";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "adresseFiv", [], "any", false, false, false, 41), 'label');
        yield "
\t\t\t\t\t\t";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "adresseFiv", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t\t";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "adresseFiv", [], "any", false, false, false, 43), 'errors');
        yield "
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-6 mb-3\">
\t\t\t\t\t\t";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "paroiseFiv", [], "any", false, false, false, 47), 'label');
        yield "
\t\t\t\t\t\t";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "paroiseFiv", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t\t";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "paroiseFiv", [], "any", false, false, false, 49), 'errors');
        yield "
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-6 mb-3\">
\t\t\t\t\t\t";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "createdAt", [], "any", false, false, false, 53), 'label');
        yield "
\t\t\t\t\t\t";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "createdAt", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t\t";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "createdAt", [], "any", false, false, false, 55), 'errors');
        yield "
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-12 mb-3\">
\t\t\t\t\t\t";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "contactFiv", [], "any", false, false, false, 59), 'label');
        yield "
\t\t\t\t\t\t";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "contactFiv", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control", "rows" => 4]]);
        yield "
\t\t\t\t\t\t";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "contactFiv", [], "any", false, false, false, 61), 'errors');
        yield "
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-12 mb-3\">
\t\t\t\t\t\t";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "fivondronanaPictureFile", [], "any", false, false, false, 65), 'label');
        yield "
\t\t\t\t\t\t";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "fivondronanaPictureFile", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t\t";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "fivondronanaPictureFile", [], "any", false, false, false, 67), 'errors');
        yield "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-12 mb-3\">
\t\t\t\t\t\t";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "emailFiv", [], "any", false, false, false, 70), 'label');
        yield "
\t\t\t\t\t\t";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "emailFiv", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t\t";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "emailFiv", [], "any", false, false, false, 72), 'errors');
        yield "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-12 mb-3\">
\t\t\t\t\t\t";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "historiqueFiv", [], "any", false, false, false, 75), 'label');
        yield "
\t\t\t\t\t\t";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "historiqueFiv", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "form-control", "rows" => 4]]);
        yield "
\t\t\t\t\t\t";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "historiqueFiv", [], "any", false, false, false, 77), 'errors');
        yield "
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Buttons aligned LEFT -->
\t\t\t\t<div class=\"d-flex gap-2 mt-3\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">
\t\t\t\t\t\t<i class=\"bi bi-check-circle\"></i>
\t\t\t\t\t\tUpdate
\t\t\t\t\t</button>

\t\t\t\t\t<a href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_fivondronanna");
        yield "\" class=\"btn btn-danger\">
\t\t\t\t\t\t<i class=\"bi bi-x-circle\"></i>
\t\t\t\t\t\tAnnuler
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t";
        // line 94
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), 'form_end');
        yield "

\t\t\t</div>
\t\t</div>

\t</main>

\t";
        // line 101
        yield from $this->load("component/footeradmin.html.twig", 101)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/admin/fivondronanna/edit.html.twig";
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
        return array (  285 => 101,  275 => 94,  266 => 88,  252 => 77,  248 => 76,  244 => 75,  238 => 72,  234 => 71,  230 => 70,  224 => 67,  220 => 66,  216 => 65,  209 => 61,  205 => 60,  201 => 59,  194 => 55,  190 => 54,  186 => 53,  179 => 49,  175 => 48,  171 => 47,  164 => 43,  160 => 42,  156 => 41,  149 => 37,  145 => 36,  141 => 35,  133 => 30,  120 => 20,  108 => 10,  105 => 9,  102 => 8,  89 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'component/baseadmin.html.twig' %}

{% block title %}
\tFivondronana - Admin - Update
{% endblock %}

{% block body %}
\t{% include 'component/headeradmin.html.twig' %}
\t{% include 'component/sidebaradmin.html.twig' %}

\t<main
\t\tclass=\"main\" id=\"main\" role=\"main\">

\t\t<!-- Page Header -->
\t\t<div class=\"page-header d-flex justify-content-between align-items-center mb-4\">
\t\t\t<div>
\t\t\t\t<h1 class=\"h3 mb-1\">Update Fivondronana</h1>
\t\t\t\t<p class=\"text-muted mb-0\">Fill in the details to update this fivondronana</p>
\t\t\t</div>
\t\t\t<a href=\"{{ path('app_admin_fivondronanna') }}\" class=\"btn btn-outline-secondary\">
\t\t\t\t<i class=\"bi bi-arrow-left\"></i>
\t\t\t\tBack to List
\t\t\t</a>
\t\t</div>

\t\t<!-- Form Card -->
\t\t<div class=\"card shadow-sm\">
\t\t\t<div class=\"card-body\">

\t\t\t\t{{ form_start(form) }}

\t\t\t\t<div class=\"row\">

\t\t\t\t\t<div class=\"col-md-6 mb-3\">
\t\t\t\t\t\t{{ form_label(form.nomFiv) }}
\t\t\t\t\t\t{{ form_widget(form.nomFiv, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t{{ form_errors(form.nomFiv) }}
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-6 mb-3\">
\t\t\t\t\t\t{{ form_label(form.adresseFiv) }}
\t\t\t\t\t\t{{ form_widget(form.adresseFiv, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t{{ form_errors(form.adresseFiv) }}
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-6 mb-3\">
\t\t\t\t\t\t{{ form_label(form.paroiseFiv) }}
\t\t\t\t\t\t{{ form_widget(form.paroiseFiv, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t{{ form_errors(form.paroiseFiv) }}
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-6 mb-3\">
\t\t\t\t\t\t{{ form_label(form.createdAt) }}
\t\t\t\t\t\t{{ form_widget(form.createdAt, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t{{ form_errors(form.createdAt) }}
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-12 mb-3\">
\t\t\t\t\t\t{{ form_label(form.contactFiv) }}
\t\t\t\t\t\t{{ form_widget(form.contactFiv, {'attr': {'class': 'form-control', 'rows': 4}}) }}
\t\t\t\t\t\t{{ form_errors(form.contactFiv) }}
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-12 mb-3\">
\t\t\t\t\t\t{{ form_label(form.fivondronanaPictureFile) }}
\t\t\t\t\t\t{{ form_widget(form.fivondronanaPictureFile, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t{{ form_errors(form.fivondronanaPictureFile) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-12 mb-3\">
\t\t\t\t\t\t{{ form_label(form.emailFiv) }}
\t\t\t\t\t\t{{ form_widget(form.emailFiv, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t\t{{ form_errors(form.emailFiv) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-12 mb-3\">
\t\t\t\t\t\t{{ form_label(form.historiqueFiv) }}
\t\t\t\t\t\t{{ form_widget(form.historiqueFiv, {'attr': {'class': 'form-control', 'rows': 4}}) }}
\t\t\t\t\t\t{{ form_errors(form.historiqueFiv) }}
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Buttons aligned LEFT -->
\t\t\t\t<div class=\"d-flex gap-2 mt-3\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">
\t\t\t\t\t\t<i class=\"bi bi-check-circle\"></i>
\t\t\t\t\t\tUpdate
\t\t\t\t\t</button>

\t\t\t\t\t<a href=\"{{ path('app_admin_fivondronanna') }}\" class=\"btn btn-danger\">
\t\t\t\t\t\t<i class=\"bi bi-x-circle\"></i>
\t\t\t\t\t\tAnnuler
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t{{ form_end(form) }}

\t\t\t</div>
\t\t</div>

\t</main>

\t{% include 'component/footeradmin.html.twig' %}
{% endblock %}
", "/admin/fivondronanna/edit.html.twig", "C:\\Users\\M_INFO\\Music\\scouts\\templates\\admin\\fivondronanna\\edit.html.twig");
    }
}
