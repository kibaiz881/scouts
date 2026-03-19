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

/* admin/sampana/index.html.twig */
class __TwigTemplate_e4782a59ab976d4b398f7ae140e0cb4f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/sampana/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/sampana/index.html.twig"));

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
        yield "\tSampana - Admin
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
\t\t<div class=\"page-header\">
\t\t\t<div class=\"page-title\">
\t\t\t\t<h1>Team Management</h1>
\t\t\t\t<p>Manage your team members</p>
\t\t\t</div>
\t\t\t<div class=\"page-actions\">
\t\t\t\t<a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_sampana_new");
        yield "\" class=\"btn-primary\" id=\"inviteMemberBtn\">
\t\t\t\t\t<i class=\"bi bi-plus\"></i>
\t\t\t\t\tNew Member
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>


\t\t<!-- Filters and Search -->
\t\t<div class=\"tasks-header mb-4\">
\t\t\t<div class=\"filter-controls\">
\t\t\t\t<button class=\"filter-btn active\" data-filter=\"all\">All Team</button>
\t\t\t</div>
\t\t\t<div class=\"search-box\">
\t\t\t\t<i class=\"bi bi-search\"></i>
\t\t\t\t<input type=\"text\" id=\"searchInput\" placeholder=\"Search tasks...\">
\t\t\t</div>
\t\t</div>

\t\t<!-- Team Members Grid -->

\t\t";
        // line 41
        $context["borders"] = ["SAMP0001" => "border-warning", "SAMP0002" => "border-success", "SAMP0003" => "border-primary", "SAMP0004" => "border-danger"];
        // line 47
        yield "
\t\t<div class=\"team-grid\" id=\"teamGrid\">
\t\t\t";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($context["sampanas"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sampanas"]) {
            // line 50
            yield "\t\t\t\t<div
\t\t\t\t\tclass=\"member-card border border-3 ";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["borders"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["sampanas"], "codeSampana", [], "any", false, false, false, 51), [], "array", true, true, false, 51)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["borders"]) || array_key_exists("borders", $context) ? $context["borders"] : (function () { throw new RuntimeError('Variable "borders" does not exist.', 51, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["sampanas"], "codeSampana", [], "any", false, false, false, 51), [], "array", false, false, false, 51), "border-secondary")) : ("border-secondary")), "html", null, true);
            yield "\" data-department=\"development\" data-status=\"online\">

\t\t\t\t\t<!-- HEADER NORMAL (sans background) -->
\t\t\t\t\t<div class=\"member-header\">

\t\t\t\t\t\t<div class=\"card-assignee-avatar\">
\t\t\t\t\t\t\t<img src=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/sampana/" . CoreExtension::getAttribute($this->env, $this->source, $context["sampanas"], "sampanaPictureName", [], "any", false, false, false, 57))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sampanas"], "nomSampana", [], "any", false, false, false, 57), "html", null, true);
            yield "\" class=\"member-avatar\" width=\"40\" height=\"40\" style=\"border-radius:50%; object-fit:cover;\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"member-info\">
\t\t\t\t\t\t\t<div class=\"member-name\">";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sampanas"], "nomSampana", [], "any", false, false, false, 61), "html", null, true);
            yield "</div>
\t\t\t\t\t\t\t<div class=\"member-role\">";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sampanas"], "profileSampana", [], "any", false, false, false, 62), "html", null, true);
            yield "</div>

\t\t\t\t\t\t\t<div class=\"member-contact\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-key\"></i>
\t\t\t\t\t\t\t\t<span>Code Sampana:
\t\t\t\t\t\t\t\t\t";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sampanas"], "codeSampana", [], "any", false, false, false, 67), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"member-contact\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-calendar\"></i>
\t\t\t\t\t\t\t\t<span>Date de Création:
\t\t\t\t\t\t\t\t\t";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["sampanas"], "createdAt", [], "any", false, false, false, 73), "F,Y-m-d"), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"member-status status-online\">
\t\t\t\t\t\t\t<i class=\"bi bi-circle-fill\"></i>
\t\t\t\t\t\t\tOnline
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- METRICS -->
\t\t\t\t\t<div class=\"metrics-grid\">
\t\t\t\t\t\t<div class=\"metric-item\">
\t\t\t\t\t\t\t<div class=\"metric-value\">";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sampanas"], "EffectifSampana", [], "any", false, false, false, 86), "html", null, true);
            yield "</div>
\t\t\t\t\t\t\t<div class=\"metric-label\">Effectif</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"metric-item\">
\t\t\t\t\t\t\t<div class=\"metric-value\">4</div>
\t\t\t\t\t\t\t<div class=\"metric-label\">Team</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"metric-item\">
\t\t\t\t\t\t\t<div class=\"metric-value\"></div>
\t\t\t\t\t\t\t<div class=\"metric-label\">Membres</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- ACTIONS -->
\t\t\t\t\t<div class=\"member-actions\">
\t\t\t\t\t\t<a href=\"";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_sampana_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["sampanas"], "id", [], "any", false, false, false, 101)]), "html", null, true);
            yield "\" class=\"action-btn\">
\t\t\t\t\t\t\t<i class=\"bi bi-pencil\"></i>
\t\t\t\t\t\t\tedit
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_sampana_view", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["sampanas"], "id", [], "any", false, false, false, 106)]), "html", null, true);
            yield "\" class=\"action-btn\">
\t\t\t\t\t\t\t<i class=\"bi bi-eye\"></i>
\t\t\t\t\t\t\tView
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_sampana_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["sampanas"], "id", [], "any", false, false, false, 111)]), "html", null, true);
            yield "\" class=\"action-btn\" onclick=\"return confirm('Are you sure you want to delete this sampana?')\">
\t\t\t\t\t\t\t<i class=\"bi bi-trash\"></i>
\t\t\t\t\t\t\tdelete
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sampanas'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        yield "\t\t</div>
<nav>
    <ul class=\"pagination justify-content-center\">

        ";
        // line 124
        yield "        <li class=\"page-item ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["sampanas"]) || array_key_exists("sampanas", $context) ? $context["sampanas"] : (function () { throw new RuntimeError('Variable "sampanas" does not exist.', 124, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 124) == 1)) ? ("disabled") : (""));
        yield "\">
            <a class=\"page-link\"
               href=\"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 126, $this->source); })()), "request", [], "any", false, false, false, 126), "attributes", [], "any", false, false, false, 126), "get", ["_route"], "method", false, false, false, 126), ["page" => (CoreExtension::getAttribute($this->env, $this->source,         // line 127
(isset($context["sampanas"]) || array_key_exists("sampanas", $context) ? $context["sampanas"] : (function () { throw new RuntimeError('Variable "sampanas" does not exist.', 127, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 127) - 1)]), "html", null, true);
        // line 128
        yield "\">
                <i class=\"bi bi-chevron-left\"></i>
            </a>
        </li>

        ";
        // line 134
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, (isset($context["sampanas"]) || array_key_exists("sampanas", $context) ? $context["sampanas"] : (function () { throw new RuntimeError('Variable "sampanas" does not exist.', 134, $this->source); })()), "pageCount", [], "any", false, false, false, 134)));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 135
            yield "            <li class=\"page-item ";
            yield ((($context["page"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["sampanas"]) || array_key_exists("sampanas", $context) ? $context["sampanas"] : (function () { throw new RuntimeError('Variable "sampanas" does not exist.', 135, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 135))) ? ("active") : (""));
            yield "\">
                <a class=\"page-link\"
                   href=\"";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 137, $this->source); })()), "request", [], "any", false, false, false, 137), "attributes", [], "any", false, false, false, 137), "get", ["_route"], "method", false, false, false, 137), ["page" => $context["page"]]), "html", null, true);
            yield "\">
                    ";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
            yield "
                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        yield "
        ";
        // line 144
        yield "        <li class=\"page-item ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["sampanas"]) || array_key_exists("sampanas", $context) ? $context["sampanas"] : (function () { throw new RuntimeError('Variable "sampanas" does not exist.', 144, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 144) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["sampanas"]) || array_key_exists("sampanas", $context) ? $context["sampanas"] : (function () { throw new RuntimeError('Variable "sampanas" does not exist.', 144, $this->source); })()), "pageCount", [], "any", false, false, false, 144))) ? ("disabled") : (""));
        yield "\">
            <a class=\"page-link\"
               href=\"";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 146, $this->source); })()), "request", [], "any", false, false, false, 146), "attributes", [], "any", false, false, false, 146), "get", ["_route"], "method", false, false, false, 146), ["page" => (CoreExtension::getAttribute($this->env, $this->source,         // line 147
(isset($context["sampanas"]) || array_key_exists("sampanas", $context) ? $context["sampanas"] : (function () { throw new RuntimeError('Variable "sampanas" does not exist.', 147, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 147) + 1)]), "html", null, true);
        // line 148
        yield "\">
                <i class=\"bi bi-chevron-right\"></i>
            </a>
        </li>

    </ul>
</nav>


\t</main>
\t";
        // line 158
        yield from $this->load("component/footeradmin.html.twig", 158)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/sampana/index.html.twig";
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
        return array (  331 => 158,  319 => 148,  317 => 147,  316 => 146,  310 => 144,  307 => 142,  297 => 138,  293 => 137,  287 => 135,  282 => 134,  275 => 128,  273 => 127,  272 => 126,  266 => 124,  260 => 119,  246 => 111,  238 => 106,  230 => 101,  212 => 86,  196 => 73,  187 => 67,  179 => 62,  175 => 61,  166 => 57,  157 => 51,  154 => 50,  150 => 49,  146 => 47,  144 => 41,  120 => 20,  108 => 10,  105 => 9,  102 => 8,  89 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'component/baseadmin.html.twig' %}

{% block title %}
\tSampana - Admin
{% endblock %}

{% block body %}
\t{% include 'component/headeradmin.html.twig' %}
\t{% include 'component/sidebaradmin.html.twig' %}

\t<main
\t\tclass=\"main\" id=\"main\" role=\"main\">
\t\t<!-- Page Header -->
\t\t<div class=\"page-header\">
\t\t\t<div class=\"page-title\">
\t\t\t\t<h1>Team Management</h1>
\t\t\t\t<p>Manage your team members</p>
\t\t\t</div>
\t\t\t<div class=\"page-actions\">
\t\t\t\t<a href=\"{{ path('app_admin_sampana_new') }}\" class=\"btn-primary\" id=\"inviteMemberBtn\">
\t\t\t\t\t<i class=\"bi bi-plus\"></i>
\t\t\t\t\tNew Member
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>


\t\t<!-- Filters and Search -->
\t\t<div class=\"tasks-header mb-4\">
\t\t\t<div class=\"filter-controls\">
\t\t\t\t<button class=\"filter-btn active\" data-filter=\"all\">All Team</button>
\t\t\t</div>
\t\t\t<div class=\"search-box\">
\t\t\t\t<i class=\"bi bi-search\"></i>
\t\t\t\t<input type=\"text\" id=\"searchInput\" placeholder=\"Search tasks...\">
\t\t\t</div>
\t\t</div>

\t\t<!-- Team Members Grid -->

\t\t{% set borders = {
\t\t\t'SAMP0001': 'border-warning',
\t\t\t'SAMP0002': 'border-success',
\t\t\t'SAMP0003': 'border-primary',
\t\t\t'SAMP0004': 'border-danger'
\t\t} %}

\t\t<div class=\"team-grid\" id=\"teamGrid\">
\t\t\t{% for sampanas in sampanas %}
\t\t\t\t<div
\t\t\t\t\tclass=\"member-card border border-3 {{ borders[sampanas.codeSampana]|default('border-secondary') }}\" data-department=\"development\" data-status=\"online\">

\t\t\t\t\t<!-- HEADER NORMAL (sans background) -->
\t\t\t\t\t<div class=\"member-header\">

\t\t\t\t\t\t<div class=\"card-assignee-avatar\">
\t\t\t\t\t\t\t<img src=\"{{ asset('images/sampana/' ~ sampanas.sampanaPictureName) }}\" alt=\"{{ sampanas.nomSampana }}\" class=\"member-avatar\" width=\"40\" height=\"40\" style=\"border-radius:50%; object-fit:cover;\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"member-info\">
\t\t\t\t\t\t\t<div class=\"member-name\">{{ sampanas.nomSampana }}</div>
\t\t\t\t\t\t\t<div class=\"member-role\">{{ sampanas.profileSampana }}</div>

\t\t\t\t\t\t\t<div class=\"member-contact\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-key\"></i>
\t\t\t\t\t\t\t\t<span>Code Sampana:
\t\t\t\t\t\t\t\t\t{{ sampanas.codeSampana }}</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"member-contact\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-calendar\"></i>
\t\t\t\t\t\t\t\t<span>Date de Création:
\t\t\t\t\t\t\t\t\t{{ sampanas.createdAt|date('F,Y-m-d') }}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"member-status status-online\">
\t\t\t\t\t\t\t<i class=\"bi bi-circle-fill\"></i>
\t\t\t\t\t\t\tOnline
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- METRICS -->
\t\t\t\t\t<div class=\"metrics-grid\">
\t\t\t\t\t\t<div class=\"metric-item\">
\t\t\t\t\t\t\t<div class=\"metric-value\">{{ sampanas.EffectifSampana }}</div>
\t\t\t\t\t\t\t<div class=\"metric-label\">Effectif</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"metric-item\">
\t\t\t\t\t\t\t<div class=\"metric-value\">4</div>
\t\t\t\t\t\t\t<div class=\"metric-label\">Team</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"metric-item\">
\t\t\t\t\t\t\t<div class=\"metric-value\"></div>
\t\t\t\t\t\t\t<div class=\"metric-label\">Membres</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- ACTIONS -->
\t\t\t\t\t<div class=\"member-actions\">
\t\t\t\t\t\t<a href=\"{{ path('app_admin_sampana_edit', {'id': sampanas.id}) }}\" class=\"action-btn\">
\t\t\t\t\t\t\t<i class=\"bi bi-pencil\"></i>
\t\t\t\t\t\t\tedit
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"{{ path('app_admin_sampana_view', {'id': sampanas.id}) }}\" class=\"action-btn\">
\t\t\t\t\t\t\t<i class=\"bi bi-eye\"></i>
\t\t\t\t\t\t\tView
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"{{ path('app_admin_sampana_delete', {'id': sampanas.id}) }}\" class=\"action-btn\" onclick=\"return confirm('Are you sure you want to delete this sampana?')\">
\t\t\t\t\t\t\t<i class=\"bi bi-trash\"></i>
\t\t\t\t\t\t\tdelete
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
<nav>
    <ul class=\"pagination justify-content-center\">

        {# PREVIOUS #}
        <li class=\"page-item {{ sampanas.currentPageNumber == 1 ? 'disabled' : '' }}\">
            <a class=\"page-link\"
               href=\"{{ path(app.request.attributes.get('_route'), {
                   'page': sampanas.currentPageNumber - 1
               }) }}\">
                <i class=\"bi bi-chevron-left\"></i>
            </a>
        </li>

        {# PAGES #}
        {% for page in 1..sampanas.pageCount %}
            <li class=\"page-item {{ page == sampanas.currentPageNumber ? 'active' : '' }}\">
                <a class=\"page-link\"
                   href=\"{{ path(app.request.attributes.get('_route'), {'page': page}) }}\">
                    {{ page }}
                </a>
            </li>
        {% endfor %}

        {# NEXT #}
        <li class=\"page-item {{ sampanas.currentPageNumber == sampanas.pageCount ? 'disabled' : '' }}\">
            <a class=\"page-link\"
               href=\"{{ path(app.request.attributes.get('_route'), {
                   'page': sampanas.currentPageNumber + 1
               }) }}\">
                <i class=\"bi bi-chevron-right\"></i>
            </a>
        </li>

    </ul>
</nav>


\t</main>
\t{% include 'component/footeradmin.html.twig' %}
{% endblock %}
", "admin/sampana/index.html.twig", "C:\\Users\\M_INFO\\Music\\scouts\\templates\\admin\\sampana\\index.html.twig");
    }
}
