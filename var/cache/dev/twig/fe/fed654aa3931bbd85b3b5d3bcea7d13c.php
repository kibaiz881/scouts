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

/* admin/sampana/view.html.twig */
class __TwigTemplate_97dba7c7d3809af39685b80c4461eee1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/sampana/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/sampana/view.html.twig"));

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
        yield "\tSampana - Admin - View
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
\t\t<div class=\"page-header\">
\t\t\t<div class=\"page-title\">
\t\t\t\t<h1>View Team ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sampana"]) || array_key_exists("sampana", $context) ? $context["sampana"] : (function () { throw new RuntimeError('Variable "sampana" does not exist.', 14, $this->source); })()), "nomSampana", [], "any", false, false, false, 14), "html", null, true);
        yield " (";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sampana"]) || array_key_exists("sampana", $context) ? $context["sampana"] : (function () { throw new RuntimeError('Variable "sampana" does not exist.', 14, $this->source); })()), "codeSampana", [], "any", false, false, false, 14), "html", null, true);
        yield ")</h1>
\t\t\t\t<p>View user profile sampana</p>
\t\t\t</div>
\t\t\t<div class=\"page-actions\">
\t\t\t\t<a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_sampana");
        yield "\" class=\"btn-secondary\">
\t\t\t\t\t<i class=\"bi bi-arrow-left\"></i>
\t\t\t\t\tBack to team list
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-card\">
\t\t\t<div class=\"form-header\">
\t\t\t\t<h3 class=\"form-title\">
\t\t\t\t\t<i class=\"bi bi-person\"></i>
\t\t\t\t\tBasic Information
\t\t\t\t</h3>
\t\t\t\t<p class=\"form-subtitle\">Consultation uniquement</p>
\t\t\t</div>

\t\t\t<!-- AVATAR -->
\t\t\t<div class=\"avatar-upload\">
\t\t\t\t<div class=\"avatar-preview\">
\t\t\t\t\t<img src=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/sampana/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["sampana"]) || array_key_exists("sampana", $context) ? $context["sampana"] : (function () { throw new RuntimeError('Variable "sampana" does not exist.', 36, $this->source); })()), "sampanaPictureName", [], "any", false, false, false, 36))), "html", null, true);
        yield "\" alt=\"Avatar\">
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\">Full Name</label>
\t\t\t\t\t\t<div class=\"form-control bg-light\">
\t\t\t\t\t\t\t";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sampana"]) || array_key_exists("sampana", $context) ? $context["sampana"] : (function () { throw new RuntimeError('Variable "sampana" does not exist.', 45, $this->source); })()), "nomSampana", [], "any", false, false, false, 45), "html", null, true);
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\">Adresse</label>
\t\t\t\t\t\t<div class=\"form-control bg-light\">
\t\t\t\t\t\t\t";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sampana"]) || array_key_exists("sampana", $context) ? $context["sampana"] : (function () { throw new RuntimeError('Variable "sampana" does not exist.', 54, $this->source); })()), "profileSampana", [], "any", false, false, false, 54), "html", null, true);
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\">Effectif</label>
\t\t\t\t\t\t<div class=\"form-control bg-light\">
\t\t\t\t\t\t\t";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sampana"]) || array_key_exists("sampana", $context) ? $context["sampana"] : (function () { throw new RuntimeError('Variable "sampana" does not exist.', 65, $this->source); })()), "EffectifSampana", [], "any", false, false, false, 65), "html", null, true);
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\">Date de création</label>
\t\t\t\t\t\t<div class=\"form-control bg-light\">
\t\t\t\t\t\t\t";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sampana"]) || array_key_exists("sampana", $context) ? $context["sampana"] : (function () { throw new RuntimeError('Variable "sampana" does not exist.', 74, $this->source); })()), "createdAt", [], "any", false, false, false, 74), "Y-m-d"), "html", null, true);
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\">Description</label>
\t\t\t\t\t\t<div class=\"form-control bg-light\" style=\"min-height: 80px;\">
\t\t\t\t\t\t\t";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sampana"]) || array_key_exists("sampana", $context) ? $context["sampana"] : (function () { throw new RuntimeError('Variable "sampana" does not exist.', 85, $this->source); })()), "description", [], "any", false, false, false, 85), "html", null, true);
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>

\t</main>

\t";
        // line 95
        yield from $this->load("component/footeradmin.html.twig", 95)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/sampana/view.html.twig";
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
        return array (  221 => 95,  208 => 85,  194 => 74,  182 => 65,  168 => 54,  156 => 45,  144 => 36,  123 => 18,  114 => 14,  108 => 10,  105 => 9,  102 => 8,  89 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'component/baseadmin.html.twig' %}

{% block title %}
\tSampana - Admin - View
{% endblock %}

{% block body %}
\t{% include 'component/headeradmin.html.twig' %}
\t{% include 'component/sidebaradmin.html.twig' %}

\t<main class=\"main\" id=\"main\" role=\"main\">
\t\t<div class=\"page-header\">
\t\t\t<div class=\"page-title\">
\t\t\t\t<h1>View Team {{ sampana.nomSampana }} ({{ sampana.codeSampana }})</h1>
\t\t\t\t<p>View user profile sampana</p>
\t\t\t</div>
\t\t\t<div class=\"page-actions\">
\t\t\t\t<a href=\"{{ path('app_admin_sampana') }}\" class=\"btn-secondary\">
\t\t\t\t\t<i class=\"bi bi-arrow-left\"></i>
\t\t\t\t\tBack to team list
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-card\">
\t\t\t<div class=\"form-header\">
\t\t\t\t<h3 class=\"form-title\">
\t\t\t\t\t<i class=\"bi bi-person\"></i>
\t\t\t\t\tBasic Information
\t\t\t\t</h3>
\t\t\t\t<p class=\"form-subtitle\">Consultation uniquement</p>
\t\t\t</div>

\t\t\t<!-- AVATAR -->
\t\t\t<div class=\"avatar-upload\">
\t\t\t\t<div class=\"avatar-preview\">
\t\t\t\t\t<img src=\"{{ asset('images/sampana/' ~ sampana.sampanaPictureName) }}\" alt=\"Avatar\">
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\">Full Name</label>
\t\t\t\t\t\t<div class=\"form-control bg-light\">
\t\t\t\t\t\t\t{{ sampana.nomSampana }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\">Adresse</label>
\t\t\t\t\t\t<div class=\"form-control bg-light\">
\t\t\t\t\t\t\t{{ sampana.profileSampana }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\">Effectif</label>
\t\t\t\t\t\t<div class=\"form-control bg-light\">
\t\t\t\t\t\t\t{{ sampana.EffectifSampana }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\">Date de création</label>
\t\t\t\t\t\t<div class=\"form-control bg-light\">
\t\t\t\t\t\t\t{{ sampana.createdAt|date('Y-m-d') }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\">Description</label>
\t\t\t\t\t\t<div class=\"form-control bg-light\" style=\"min-height: 80px;\">
\t\t\t\t\t\t\t{{ sampana.description }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>

\t</main>

\t{% include 'component/footeradmin.html.twig' %}
{% endblock %}
", "admin/sampana/view.html.twig", "C:\\Users\\M_INFO\\Music\\scouts\\templates\\admin\\sampana\\view.html.twig");
    }
}
