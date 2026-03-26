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

/* admin/mpiandrakitra/index.html.twig */
class __TwigTemplate_040c12f12002f493950d668650f2d8e9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/mpiandrakitra/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/mpiandrakitra/index.html.twig"));

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
\t\t\t\t<h1>MP Management</h1>
\t\t\t\t<p>Manage your mpiandrakitra members</p>
\t\t\t</div>
\t\t\t<div class=\"page-actions\">
\t\t\t\t<a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_mpiandrakitra_new");
        yield "\" class=\"btn-primary\" id=\"inviteMemberBtn\">
\t\t\t\t\t<i class=\"bi bi-plus\"></i>
\t\t\t\t\tNew Mp Member
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>


\t\t<!-- Filters and Search -->
\t\t<div class=\"tasks-header mb-4\">
\t\t\t<div class=\"filter-controls\">
\t\t\t\t<button class=\"filter-btn active\" data-filter=\"all\">All Mp Team</button>
\t\t\t</div>
\t\t\t<div class=\"search-box\">
\t\t\t\t<i class=\"bi bi-search\"></i>
\t\t\t\t<input type=\"text\" id=\"searchInput\" placeholder=\"Search tasks...\">
\t\t\t</div>
\t\t</div>

\t\t<!-- Team Members Grid -->

\t\t";
        // line 41
        $context["borders"] = ["MP0001" => "border-warning", "MP0002" => "border-success", "MP0003" => "border-primary", "MP0004" => "border-danger"];
        // line 47
        yield "
\t\t<div class=\"team-grid\" id=\"teamGrid\">
\t\t\t";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["mpiandrakitra"]) || array_key_exists("mpiandrakitra", $context) ? $context["mpiandrakitra"] : (function () { throw new RuntimeError('Variable "mpiandrakitra" does not exist.', 49, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["mp"]) {
            // line 50
            yield "\t\t\t\t<div
\t\t\t\t\tclass=\"member-card border border-3 ";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["borders"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["mp"], "codeMp", [], "any", false, false, false, 51), [], "array", true, true, false, 51)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["borders"]) || array_key_exists("borders", $context) ? $context["borders"] : (function () { throw new RuntimeError('Variable "borders" does not exist.', 51, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["mp"], "codeMp", [], "any", false, false, false, 51), [], "array", false, false, false, 51), "border-secondary")) : ("border-secondary")), "html", null, true);
            yield "\" data-department=\"development\" data-status=\"online\">

\t\t\t\t\t<!-- HEADER NORMAL (sans background) -->
\t\t\t\t\t<div class=\"member-header\">

\t\t\t\t\t\t<div class=\"card-assignee-avatar\">
\t\t\t\t\t\t\t<img src=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/mpiandrakitra/" . CoreExtension::getAttribute($this->env, $this->source, $context["mp"], "mpiandrakitraPictureName", [], "any", false, false, false, 57))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mp"], "nomMp", [], "any", false, false, false, 57), "html", null, true);
            yield "\" class=\"member-avatar\" width=\"40\" height=\"40\" style=\"border-radius:50%; object-fit:cover;\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"member-info\">
\t\t\t\t\t\t\t<div class=\"member-name\">";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mp"], "nomMp", [], "any", false, false, false, 61), "html", null, true);
            yield "</div>
\t\t\t\t\t\t\t<div class=\"member-role\">";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mp"], "adresseMp", [], "any", false, false, false, 62), "html", null, true);
            yield "</div>
                            <div class=\"member-role\">";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mp"], "contactMp", [], "any", false, false, false, 63), "html", null, true);
            yield "</div>
                            <div class=\"member-role\">";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mp"], "emailMp", [], "any", false, false, false, 64), "html", null, true);
            yield "</div>
\t\t\t\t\t\t\t<div class=\"member-contact\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-key\"></i>
\t\t\t\t\t\t\t\t<span>Code Sampana:
\t\t\t\t\t\t\t\t\t";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mp"], "codeMp", [], "any", false, false, false, 68), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t";
            // line 76
            yield "\t\t\t\t\t\t\t<div class=\"member-contact\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-house\"></i>
\t\t\t\t\t\t\t\t<span>Nom Sampana:
\t\t\t\t\t\t\t\t\t";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["mp"], "sampana", [], "any", false, false, false, 79), "nomSampana", [], "any", false, false, false, 79), "html", null, true);
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
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["mp"], "cinMp", [], "any", false, false, false, 92), "html", null, true);
            yield "</div>
\t\t\t\t\t\t\t<div class=\"metric-label\">Effectif</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"metric-item\">
\t\t\t\t\t\t\t<div class=\"metric-value\">";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["mp"], "dateEntrescout", [], "any", false, false, false, 96), "d/m/Y"), "html", null, true);
            yield "</div>
\t\t\t\t\t\t\t<div class=\"metric-label\">Scout</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"metric-item\">
\t\t\t\t\t\t\t<div class=\"metric-value\">";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["mp"], "veliranoDateMp", [], "any", false, false, false, 100), "d-m-y"), "html", null, true);
            yield "</div>
\t\t\t\t\t\t\t<div class=\"metric-label\">Velirano</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 107
            yield "\t\t\t\t\t</div>

\t\t\t\t\t<!-- ACTIONS -->
\t\t\t\t\t<div class=\"member-actions\">
\t\t\t\t\t\t<a href=\"";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_mpiandrakitra_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["mp"], "id", [], "any", false, false, false, 111)]), "html", null, true);
            yield "\" class=\"action-btn\">
\t\t\t\t\t\t\t<i class=\"bi bi-pencil\"></i>
\t\t\t\t\t\t\tedit
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_mpiandrakitra_view", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["mp"], "id", [], "any", false, false, false, 116)]), "html", null, true);
            yield "\" class=\"action-btn\">
\t\t\t\t\t\t\t<i class=\"bi bi-eye\"></i>
\t\t\t\t\t\t\tView
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_mpiandrakitra_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["mp"], "id", [], "any", false, false, false, 121)]), "html", null, true);
            yield "\" class=\"action-btn\" onclick=\"return confirm('Are you sure you want to delete this sampana?')\">
\t\t\t\t\t\t\t<i class=\"bi bi-trash\"></i>
\t\t\t\t\t\t\tdelete
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['mp'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        yield "\t\t</div>

\t\t<!-- Pagination -->
\t\t<nav>
\t\t\t<ul
\t\t\t\tclass=\"pagination justify-content-center\">

\t\t\t\t";
        // line 137
        yield "\t\t\t\t<li class=\"page-item ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["mpiandrakitra"]) || array_key_exists("mpiandrakitra", $context) ? $context["mpiandrakitra"] : (function () { throw new RuntimeError('Variable "mpiandrakitra" does not exist.', 137, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 137) == 1)) ? ("disabled") : (""));
        yield "\">
\t\t\t\t\t<a class=\"page-link\" href=\"";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 138, $this->source); })()), "request", [], "any", false, false, false, 138), "attributes", [], "any", false, false, false, 138), "get", ["_route"], "method", false, false, false, 138), ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["mpiandrakitra"]) || array_key_exists("mpiandrakitra", $context) ? $context["mpiandrakitra"] : (function () { throw new RuntimeError('Variable "mpiandrakitra" does not exist.', 138, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 138) - 1)]), "html", null, true);
        yield "\">
\t\t\t\t\t\t<i class=\"bi bi-chevron-left\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>

\t\t\t\t";
        // line 144
        yield "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, (isset($context["mpiandrakitra"]) || array_key_exists("mpiandrakitra", $context) ? $context["mpiandrakitra"] : (function () { throw new RuntimeError('Variable "mpiandrakitra" does not exist.', 144, $this->source); })()), "pageCount", [], "any", false, false, false, 144)));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 145
            yield "\t\t\t\t\t<li class=\"page-item ";
            yield ((($context["page"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["mpiandrakitra"]) || array_key_exists("mpiandrakitra", $context) ? $context["mpiandrakitra"] : (function () { throw new RuntimeError('Variable "mpiandrakitra" does not exist.', 145, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 145))) ? ("active") : (""));
            yield "\">
\t\t\t\t\t\t<a class=\"page-link\" href=\"";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 146, $this->source); })()), "request", [], "any", false, false, false, 146), "attributes", [], "any", false, false, false, 146), "get", ["_route"], "method", false, false, false, 146), ["page" => $context["page"]]), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
            yield "
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        yield "
\t\t\t\t";
        // line 153
        yield "\t\t\t\t<li class=\"page-item ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["mpiandrakitra"]) || array_key_exists("mpiandrakitra", $context) ? $context["mpiandrakitra"] : (function () { throw new RuntimeError('Variable "mpiandrakitra" does not exist.', 153, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 153) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["mpiandrakitra"]) || array_key_exists("mpiandrakitra", $context) ? $context["mpiandrakitra"] : (function () { throw new RuntimeError('Variable "mpiandrakitra" does not exist.', 153, $this->source); })()), "pageCount", [], "any", false, false, false, 153))) ? ("disabled") : (""));
        yield "\">
\t\t\t\t\t<a class=\"page-link\" href=\"";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 154, $this->source); })()), "request", [], "any", false, false, false, 154), "attributes", [], "any", false, false, false, 154), "get", ["_route"], "method", false, false, false, 154), ["page" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["mpiandrakitra"]) || array_key_exists("mpiandrakitra", $context) ? $context["mpiandrakitra"] : (function () { throw new RuntimeError('Variable "mpiandrakitra" does not exist.', 154, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 154) + 1)]), "html", null, true);
        yield "\">
\t\t\t\t\t\t<i class=\"bi bi-chevron-right\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>

\t\t\t</ul>
\t\t</nav>


\t</main>
\t";
        // line 164
        yield from $this->load("component/footeradmin.html.twig", 164)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/mpiandrakitra/index.html.twig";
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
        return array (  344 => 164,  331 => 154,  326 => 153,  323 => 151,  313 => 147,  309 => 146,  304 => 145,  299 => 144,  291 => 138,  286 => 137,  277 => 129,  263 => 121,  255 => 116,  247 => 111,  241 => 107,  235 => 100,  228 => 96,  221 => 92,  205 => 79,  200 => 76,  194 => 68,  187 => 64,  183 => 63,  179 => 62,  175 => 61,  166 => 57,  157 => 51,  154 => 50,  150 => 49,  146 => 47,  144 => 41,  120 => 20,  108 => 10,  105 => 9,  102 => 8,  89 => 7,  77 => 4,  64 => 3,  41 => 1,);
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
\t\t\t\t<h1>MP Management</h1>
\t\t\t\t<p>Manage your mpiandrakitra members</p>
\t\t\t</div>
\t\t\t<div class=\"page-actions\">
\t\t\t\t<a href=\"{{ path('app_admin_mpiandrakitra_new') }}\" class=\"btn-primary\" id=\"inviteMemberBtn\">
\t\t\t\t\t<i class=\"bi bi-plus\"></i>
\t\t\t\t\tNew Mp Member
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>


\t\t<!-- Filters and Search -->
\t\t<div class=\"tasks-header mb-4\">
\t\t\t<div class=\"filter-controls\">
\t\t\t\t<button class=\"filter-btn active\" data-filter=\"all\">All Mp Team</button>
\t\t\t</div>
\t\t\t<div class=\"search-box\">
\t\t\t\t<i class=\"bi bi-search\"></i>
\t\t\t\t<input type=\"text\" id=\"searchInput\" placeholder=\"Search tasks...\">
\t\t\t</div>
\t\t</div>

\t\t<!-- Team Members Grid -->

\t\t{% set borders = {
\t\t\t'MP0001': 'border-warning',
\t\t\t'MP0002': 'border-success',
\t\t\t'MP0003': 'border-primary',
\t\t\t'MP0004': 'border-danger'
\t\t} %}

\t\t<div class=\"team-grid\" id=\"teamGrid\">
\t\t\t{% for mp in mpiandrakitra %}
\t\t\t\t<div
\t\t\t\t\tclass=\"member-card border border-3 {{ borders[mp.codeMp]|default('border-secondary') }}\" data-department=\"development\" data-status=\"online\">

\t\t\t\t\t<!-- HEADER NORMAL (sans background) -->
\t\t\t\t\t<div class=\"member-header\">

\t\t\t\t\t\t<div class=\"card-assignee-avatar\">
\t\t\t\t\t\t\t<img src=\"{{ asset('images/mpiandrakitra/' ~ mp.mpiandrakitraPictureName) }}\" alt=\"{{ mp.nomMp }}\" class=\"member-avatar\" width=\"40\" height=\"40\" style=\"border-radius:50%; object-fit:cover;\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"member-info\">
\t\t\t\t\t\t\t<div class=\"member-name\">{{ mp.nomMp }}</div>
\t\t\t\t\t\t\t<div class=\"member-role\">{{ mp.adresseMp }}</div>
                            <div class=\"member-role\">{{ mp.contactMp }}</div>
                            <div class=\"member-role\">{{ mp.emailMp }}</div>
\t\t\t\t\t\t\t<div class=\"member-contact\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-key\"></i>
\t\t\t\t\t\t\t\t<span>Code Sampana:
\t\t\t\t\t\t\t\t\t{{ mp.codeMp }}</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t{# <div class=\"member-contact\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-calendar\"></i>
\t\t\t\t\t\t\t\t<span>Date de Création:
\t\t\t\t\t\t\t\t\t{{ mp.createdAt|date('F,Y-m-d') }}</span>
\t\t\t\t\t\t\t</div> #}
\t\t\t\t\t\t\t<div class=\"member-contact\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-house\"></i>
\t\t\t\t\t\t\t\t<span>Nom Sampana:
\t\t\t\t\t\t\t\t\t{{ mp.sampana.nomSampana }}</span>
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
\t\t\t\t\t\t\t<div class=\"metric-value\">{{ mp.cinMp }}</div>
\t\t\t\t\t\t\t<div class=\"metric-label\">Effectif</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"metric-item\">
\t\t\t\t\t\t\t<div class=\"metric-value\">{{mp.dateEntrescout | date('d/m/Y')}}</div>
\t\t\t\t\t\t\t<div class=\"metric-label\">Scout</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"metric-item\">
\t\t\t\t\t\t\t<div class=\"metric-value\">{{mp.veliranoDateMp | date('d-m-y')}}</div>
\t\t\t\t\t\t\t<div class=\"metric-label\">Velirano</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{# <div class=\"metric-item\">
\t\t\t\t\t\t\t<div class=\"metric-value\">{{mp.professionMp}}</div>
\t\t\t\t\t\t\t<div class=\"metric-label\">Profession</div>
\t\t\t\t\t\t</div> #}
\t\t\t\t\t</div>

\t\t\t\t\t<!-- ACTIONS -->
\t\t\t\t\t<div class=\"member-actions\">
\t\t\t\t\t\t<a href=\"{{ path('app_admin_mpiandrakitra_edit', {'id': mp.id}) }}\" class=\"action-btn\">
\t\t\t\t\t\t\t<i class=\"bi bi-pencil\"></i>
\t\t\t\t\t\t\tedit
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"{{ path('app_admin_mpiandrakitra_view', {'id': mp.id}) }}\" class=\"action-btn\">
\t\t\t\t\t\t\t<i class=\"bi bi-eye\"></i>
\t\t\t\t\t\t\tView
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a href=\"{{ path('app_admin_mpiandrakitra_delete', {'id': mp.id}) }}\" class=\"action-btn\" onclick=\"return confirm('Are you sure you want to delete this sampana?')\">
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
\t\t\t\t<li class=\"page-item {{ mpiandrakitra.currentPageNumber == 1 ? 'disabled' : '' }}\">
\t\t\t\t\t<a class=\"page-link\" href=\"{{ path(app.request.attributes.get('_route'), { 'page': mpiandrakitra.currentPageNumber - 1 }) }}\">
\t\t\t\t\t\t<i class=\"bi bi-chevron-left\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>

\t\t\t\t{# PAGES #}
\t\t\t\t{% for page in 1..mpiandrakitra.pageCount %}
\t\t\t\t\t<li class=\"page-item {{ page == mpiandrakitra.currentPageNumber ? 'active' : '' }}\">
\t\t\t\t\t\t<a class=\"page-link\" href=\"{{ path(app.request.attributes.get('_route'), {'page': page}) }}\">
\t\t\t\t\t\t\t{{ page }}
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t{% endfor %}

\t\t\t\t{# NEXT #}
\t\t\t\t<li class=\"page-item {{ mpiandrakitra.currentPageNumber == mpiandrakitra.pageCount ? 'disabled' : '' }}\">
\t\t\t\t\t<a class=\"page-link\" href=\"{{ path(app.request.attributes.get('_route'), { 'page': mpiandrakitra.currentPageNumber + 1 }) }}\">
\t\t\t\t\t\t<i class=\"bi bi-chevron-right\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>

\t\t\t</ul>
\t\t</nav>


\t</main>
\t{% include 'component/footeradmin.html.twig' %}
{% endblock %}
", "admin/mpiandrakitra/index.html.twig", "C:\\Users\\M_INFO\\Music\\scouts\\templates\\admin\\mpiandrakitra\\index.html.twig");
    }
}
