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

/* admin/fivondronanna/index.html.twig */
class __TwigTemplate_f238dae3efba9e91e2a1762686c7f952 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/fivondronanna/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/fivondronanna/index.html.twig"));

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
\t\t\t\t<h1>Fivondronana Management</h1>
\t\t\t\t<p>Manage your Fivondronana members</p>
\t\t\t</div>
\t\t\t<div class=\"page-actions\">
\t\t\t\t<a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_fivondronanna_new");
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
        $context["borders"] = ["FIV001" => "border-danger", "FIV002" => "border-success", "FIV003" => "border-primary", "FIV004" => "border-warning"];
        // line 47
        yield "
\t\t<div class=\"team-grid\" id=\"teamGrid\">
\t\t\t";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($context["fivondronannas"]);
        foreach ($context['_seq'] as $context["_key"] => $context["fivondronannas"]) {
            // line 50
            yield "\t\t\t\t<div
\t\t\t\t\tclass=\"member-card border border-3 ";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["borders"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["fivondronannas"], "codeFiv", [], "any", false, false, false, 51), [], "array", true, true, false, 51)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["borders"]) || array_key_exists("borders", $context) ? $context["borders"] : (function () { throw new RuntimeError('Variable "borders" does not exist.', 51, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["fivondronannas"], "codeFiv", [], "any", false, false, false, 51), [], "array", false, false, false, 51), "border-secondary")) : ("border-secondary")), "html", null, true);
            yield "\" data-department=\"development\" data-status=\"online\">

\t\t\t\t\t<!-- HEADER NORMAL (sans background) -->
\t\t\t\t\t<div class=\"member-header\">

\t\t\t\t\t\t<div class=\"card-assignee-avatar\">
\t\t\t\t\t\t\t<img src=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/fivondronana/" . CoreExtension::getAttribute($this->env, $this->source, $context["fivondronannas"], "fivondronanaPictureName", [], "any", false, false, false, 57))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fivondronannas"], "nomFiv", [], "any", false, false, false, 57), "html", null, true);
            yield "\" class=\"member-avatar\" width=\"40\" height=\"40\" style=\"border-radius:50%; object-fit:cover;\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"member-info\">
\t\t\t\t\t\t\t<div class=\"member-name\">";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fivondronannas"], "nomFiv", [], "any", false, false, false, 61), "html", null, true);
            yield "</div>
\t\t\t\t\t\t\t<div class=\"member-role\">";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fivondronannas"], "adresseFiv", [], "any", false, false, false, 62), "html", null, true);
            yield "</div>

\t\t\t\t\t\t\t<div class=\"member-contact\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-key\"></i>
\t\t\t\t\t\t\t\t<span>Code Fivondronanna:
\t\t\t\t\t\t\t\t\t";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fivondronannas"], "codeFiv", [], "any", false, false, false, 67), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"member-contact\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-calendar\"></i>
\t\t\t\t\t\t\t\t<span>Date de Création:
\t\t\t\t\t\t\t\t\t";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["fivondronannas"], "createdAt", [], "any", false, false, false, 73), "F,Y-m-d"), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"member-contact\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-house-fill\"></i>
\t\t\t\t\t\t\t\t<span>Paroisse:
\t\t\t\t\t\t\t\t\t";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["fivondronannas"], "paroiseFiv", [], "any", false, false, false, 79), "html", null, true);
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
\t\t\t\t\t\t\t<div class=\"metric-value\"></div>
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
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_fivondronanna_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["fivondronannas"], "id", [], "any", false, false, false, 107)]), "html", null, true);
            yield "\" class=\"action-btn\">
\t\t\t\t\t\t\t<i class=\"bi bi-pencil\"></i>
\t\t\t\t\t\t\tedit
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_fivondronanna_view", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["fivondronannas"], "id", [], "any", false, false, false, 112)]), "html", null, true);
            yield "\" class=\"action-btn\">
\t\t\t\t\t\t\t<i class=\"bi bi-eye\"></i>
\t\t\t\t\t\t\tView
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_fivondronanna_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["fivondronannas"], "id", [], "any", false, false, false, 117)]), "html", null, true);
            yield "\" class=\"action-btn\" onclick=\"return confirm('Are you sure you want to delete this fivondronanna?')\">
\t\t\t\t\t\t\t<i class=\"bi bi-trash\"></i>
\t\t\t\t\t\t\tdelete
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['fivondronannas'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        yield "\t\t</div>

\t\t<!-- Pagination -->
\t\t<nav>
\t\t\t<ul
\t\t\t\tclass=\"pagination justify-content-center\">

\t\t\t\t";
        // line 133
        yield "\t\t\t\t<li class=\"page-item ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["fivondronannas"]) || array_key_exists("fivondronannas", $context) ? $context["fivondronannas"] : (function () { throw new RuntimeError('Variable "fivondronannas" does not exist.', 133, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 133) == 1)) ? ("disabled") : (""));
        yield "\">
\t\t\t\t\t<a class=\"page-link\" href=\"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 134, $this->source); })()), "request", [], "any", false, false, false, 134), "attributes", [], "any", false, false, false, 134), "get", ["_route"], "method", false, false, false, 134), ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["fivondronannas"]) || array_key_exists("fivondronannas", $context) ? $context["fivondronannas"] : (function () { throw new RuntimeError('Variable "fivondronannas" does not exist.', 134, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 134) - 1)]), "html", null, true);
        yield "\">
\t\t\t\t\t\t<i class=\"bi bi-chevron-left\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>

\t\t\t\t";
        // line 140
        yield "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, (isset($context["fivondronannas"]) || array_key_exists("fivondronannas", $context) ? $context["fivondronannas"] : (function () { throw new RuntimeError('Variable "fivondronannas" does not exist.', 140, $this->source); })()), "pageCount", [], "any", false, false, false, 140)));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 141
            yield "\t\t\t\t\t<li class=\"page-item ";
            yield ((($context["page"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["fivondronannas"]) || array_key_exists("fivondronannas", $context) ? $context["fivondronannas"] : (function () { throw new RuntimeError('Variable "fivondronannas" does not exist.', 141, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 141))) ? ("active") : (""));
            yield "\">
\t\t\t\t\t\t<a class=\"page-link\" href=\"";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 142, $this->source); })()), "request", [], "any", false, false, false, 142), "attributes", [], "any", false, false, false, 142), "get", ["_route"], "method", false, false, false, 142), ["page" => $context["page"]]), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
            yield "
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        yield "
\t\t\t\t";
        // line 149
        yield "\t\t\t\t<li class=\"page-item ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["fivondronannas"]) || array_key_exists("fivondronannas", $context) ? $context["fivondronannas"] : (function () { throw new RuntimeError('Variable "fivondronannas" does not exist.', 149, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 149) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["fivondronannas"]) || array_key_exists("fivondronannas", $context) ? $context["fivondronannas"] : (function () { throw new RuntimeError('Variable "fivondronannas" does not exist.', 149, $this->source); })()), "pageCount", [], "any", false, false, false, 149))) ? ("disabled") : (""));
        yield "\">
\t\t\t\t\t<a class=\"page-link\" href=\"";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 150, $this->source); })()), "request", [], "any", false, false, false, 150), "attributes", [], "any", false, false, false, 150), "get", ["_route"], "method", false, false, false, 150), ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["fivondronannas"]) || array_key_exists("fivondronannas", $context) ? $context["fivondronannas"] : (function () { throw new RuntimeError('Variable "fivondronannas" does not exist.', 150, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 150) + 1)]), "html", null, true);
        yield "\">
\t\t\t\t\t\t<i class=\"bi bi-chevron-right\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>

\t\t\t</ul>
\t\t</nav>


\t</main>
\t";
        // line 160
        yield from $this->load("component/footeradmin.html.twig", 160)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/fivondronanna/index.html.twig";
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
        return array (  333 => 160,  320 => 150,  315 => 149,  312 => 147,  302 => 143,  298 => 142,  293 => 141,  288 => 140,  280 => 134,  275 => 133,  266 => 125,  252 => 117,  244 => 112,  236 => 107,  205 => 79,  196 => 73,  187 => 67,  179 => 62,  175 => 61,  166 => 57,  157 => 51,  154 => 50,  150 => 49,  146 => 47,  144 => 41,  120 => 20,  108 => 10,  105 => 9,  102 => 8,  89 => 7,  77 => 4,  64 => 3,  41 => 1,);
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
\t\t\t\t<h1>Fivondronana Management</h1>
\t\t\t\t<p>Manage your Fivondronana members</p>
\t\t\t</div>
\t\t\t<div class=\"page-actions\">
\t\t\t\t<a href=\"{{ path('app_admin_fivondronanna_new') }}\" class=\"btn-primary\" id=\"inviteMemberBtn\">
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
\t\t\t'FIV001': 'border-danger',
\t\t\t'FIV002': 'border-success',
\t\t\t'FIV003': 'border-primary',
\t\t\t'FIV004': 'border-warning',
\t\t} %}

\t\t<div class=\"team-grid\" id=\"teamGrid\">
\t\t\t{% for fivondronannas in fivondronannas %}
\t\t\t\t<div
\t\t\t\t\tclass=\"member-card border border-3 {{ borders[fivondronannas.codeFiv]|default('border-secondary') }}\" data-department=\"development\" data-status=\"online\">

\t\t\t\t\t<!-- HEADER NORMAL (sans background) -->
\t\t\t\t\t<div class=\"member-header\">

\t\t\t\t\t\t<div class=\"card-assignee-avatar\">
\t\t\t\t\t\t\t<img src=\"{{ asset('images/fivondronana/' ~ fivondronannas.fivondronanaPictureName) }}\" alt=\"{{ fivondronannas.nomFiv }}\" class=\"member-avatar\" width=\"40\" height=\"40\" style=\"border-radius:50%; object-fit:cover;\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"member-info\">
\t\t\t\t\t\t\t<div class=\"member-name\">{{ fivondronannas.nomFiv }}</div>
\t\t\t\t\t\t\t<div class=\"member-role\">{{ fivondronannas.adresseFiv }}</div>

\t\t\t\t\t\t\t<div class=\"member-contact\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-key\"></i>
\t\t\t\t\t\t\t\t<span>Code Fivondronanna:
\t\t\t\t\t\t\t\t\t{{ fivondronannas.codeFiv }}</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"member-contact\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-calendar\"></i>
\t\t\t\t\t\t\t\t<span>Date de Création:
\t\t\t\t\t\t\t\t\t{{ fivondronannas.createdAt|date('F,Y-m-d') }}</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"member-contact\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-house-fill\"></i>
\t\t\t\t\t\t\t\t<span>Paroisse:
\t\t\t\t\t\t\t\t\t{{ fivondronannas.paroiseFiv }}</span>
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
\t\t\t\t\t\t\t<div class=\"metric-value\"></div>
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
\t\t\t\t\t\t<a href=\"{{ path('app_admin_fivondronanna_edit', {'id': fivondronannas.id}) }}\" class=\"action-btn\">
\t\t\t\t\t\t\t<i class=\"bi bi-pencil\"></i>
\t\t\t\t\t\t\tedit
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"{{ path('app_admin_fivondronanna_view', {'id': fivondronannas.id}) }}\" class=\"action-btn\">
\t\t\t\t\t\t\t<i class=\"bi bi-eye\"></i>
\t\t\t\t\t\t\tView
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"{{ path('app_admin_fivondronanna_delete', {'id': fivondronannas.id}) }}\" class=\"action-btn\" onclick=\"return confirm('Are you sure you want to delete this fivondronanna?')\">
\t\t\t\t\t\t\t<i class=\"bi bi-trash\"></i>
\t\t\t\t\t\t\tdelete
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>

\t\t<!-- Pagination -->
\t\t<nav>
\t\t\t<ul
\t\t\t\tclass=\"pagination justify-content-center\">

\t\t\t\t{# PREVIOUS #}
\t\t\t\t<li class=\"page-item {{ fivondronannas.currentPageNumber == 1 ? 'disabled' : '' }}\">
\t\t\t\t\t<a class=\"page-link\" href=\"{{ path(app.request.attributes.get('_route'), { 'page': fivondronannas.currentPageNumber - 1 }) }}\">
\t\t\t\t\t\t<i class=\"bi bi-chevron-left\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>

\t\t\t\t{# PAGES #}
\t\t\t\t{% for page in 1..fivondronannas.pageCount %}
\t\t\t\t\t<li class=\"page-item {{ page == fivondronannas.currentPageNumber ? 'active' : '' }}\">
\t\t\t\t\t\t<a class=\"page-link\" href=\"{{ path(app.request.attributes.get('_route'), {'page': page}) }}\">
\t\t\t\t\t\t\t{{ page }}
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t{% endfor %}

\t\t\t\t{# NEXT #}
\t\t\t\t<li class=\"page-item {{ fivondronannas.currentPageNumber == fivondronannas.pageCount ? 'disabled' : '' }}\">
\t\t\t\t\t<a class=\"page-link\" href=\"{{ path(app.request.attributes.get('_route'), { 'page': fivondronannas.currentPageNumber + 1 }) }}\">
\t\t\t\t\t\t<i class=\"bi bi-chevron-right\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>

\t\t\t</ul>
\t\t</nav>


\t</main>
\t{% include 'component/footeradmin.html.twig' %}
{% endblock %}
", "admin/fivondronanna/index.html.twig", "C:\\Users\\M_INFO\\Music\\scouts\\templates\\admin\\fivondronanna\\index.html.twig");
    }
}
