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
class __TwigTemplate_f4d8827b324e6add34699a3b8d81d94c extends Template
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
\t\t\t\t<button class=\"filter-btn active\" data-filter=\"all\">All Members</button>
\t\t\t\t<button class=\"filter-btn\" data-filter=\"active\">Active</button>
\t\t\t\t<button class=\"filter-btn\" data-filter=\"design\">Design</button>
\t\t\t\t<button class=\"filter-btn\" data-filter=\"development\">Development</button>
\t\t\t\t<button class=\"filter-btn\" data-filter=\"management\">Management</button>
\t\t\t</div>
\t\t\t<div class=\"search-box\">
\t\t\t\t<i class=\"bi bi-search\"></i>
\t\t\t\t<input type=\"text\" id=\"searchInput\" placeholder=\"Search tasks...\">
\t\t\t</div>
\t\t</div>

<!-- Team Members Grid -->

";
        // line 45
        $context["borders"] = ["SAMP0001" => "border-warning", "SAMP0002" => "border-success", "SAMP0003" => "border-primary", "SAMP0004" => "border-danger"];
        // line 51
        yield "
<div class=\"team-grid\" id=\"teamGrid\">
    ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($context["sampanas"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sampanas"]) {
            // line 54
            yield "        <div class=\"member-card border border-3 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["borders"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["sampanas"], "codeSampana", [], "any", false, false, false, 54), [], "array", true, true, false, 54)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["borders"]) || array_key_exists("borders", $context) ? $context["borders"] : (function () { throw new RuntimeError('Variable "borders" does not exist.', 54, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["sampanas"], "codeSampana", [], "any", false, false, false, 54), [], "array", false, false, false, 54), "border-secondary")) : ("border-secondary")), "html", null, true);
            yield "\" 
             data-department=\"development\" 
             data-status=\"online\">

            <!-- HEADER NORMAL (sans background) -->
            <div class=\"member-header\">
                
                <div class=\"card-assignee-avatar\">
                    <img src=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/sampana/" . CoreExtension::getAttribute($this->env, $this->source, $context["sampanas"], "sampanaPictureName", [], "any", false, false, false, 62))), "html", null, true);
            yield "\" 
                         alt=\"";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sampanas"], "nomSampana", [], "any", false, false, false, 63), "html", null, true);
            yield "\" 
                         class=\"member-avatar\" 
                         width=\"40\" height=\"40\" 
                         style=\"border-radius:50%; object-fit:cover;\">
                </div>

                <div class=\"member-info\">
                    <div class=\"member-name\">";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sampanas"], "nomSampana", [], "any", false, false, false, 70), "html", null, true);
            yield "</div>
                    <div class=\"member-role\">";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sampanas"], "profileSampana", [], "any", false, false, false, 71), "html", null, true);
            yield "</div>

                    <div class=\"member-contact\">
                        <i class=\"bi bi-key\"></i>
                        <span>Code Sampana: ";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sampanas"], "codeSampana", [], "any", false, false, false, 75), "html", null, true);
            yield "</span>
                    </div>

                    <div class=\"member-contact\">
                        <i class=\"bi bi-calendar\"></i>
                        <span>Date de Création: ";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["sampanas"], "createdAt", [], "any", false, false, false, 80), "F,Y-m-d"), "html", null, true);
            yield "</span>
                    </div>
                </div>

                <div class=\"member-status status-online\">
                    <i class=\"bi bi-circle-fill\"></i>
                    Online
                </div>
            </div>\t

            <!-- METRICS -->
            <div class=\"metrics-grid\">
                <div class=\"metric-item\">
                    <div class=\"metric-value\">";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sampanas"], "EffectifSampana", [], "any", false, false, false, 93), "html", null, true);
            yield "</div>
                    <div class=\"metric-label\">Effectif</div>
                </div>
                <div class=\"metric-item\">
                    <div class=\"metric-value\">4</div>
                    <div class=\"metric-label\">Team</div>
                </div>
                <div class=\"metric-item\">
                    <div class=\"metric-value\"></div>
                    <div class=\"metric-label\">Membres</div>
                </div>
            </div>

            <!-- ACTIONS -->
            <div class=\"member-actions\">
                <a href=\"";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_sampana_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["sampanas"], "id", [], "any", false, false, false, 108)]), "html", null, true);
            yield "\" class=\"action-btn\">
                    <i class=\"bi bi-pencil\"></i>
                    edit
                </a>

                <a href=\"";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_sampana_view", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["sampanas"], "id", [], "any", false, false, false, 113)]), "html", null, true);
            yield "\" class=\"action-btn\">
                    <i class=\"bi bi-eye\"></i>
                    View
                </a>

                <a href=\"";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_sampana_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["sampanas"], "id", [], "any", false, false, false, 118)]), "html", null, true);
            yield "\" 
                   class=\"action-btn\"
                   onclick=\"return confirm('Are you sure you want to delete this sampana?')\">
                    <i class=\"bi bi-trash\"></i>
                    delete
                </a>
            </div>

        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sampanas'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        yield "</div>


\t\t<!-- Pagination -->
\t\t<nav aria-label=\"Task pagination\">
\t\t\t<ul class=\"pagination\">
\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t<a class=\"page-link\" href=\"#\">
\t\t\t\t\t\t<i class=\"bi bi-chevron-left\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t<a class=\"page-link active\" href=\"#\">1</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t<a class=\"page-link\" href=\"#\">2</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t<a class=\"page-link\" href=\"#\">3</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t<a class=\"page-link\" href=\"#\">
\t\t\t\t\t\t<i class=\"bi bi-chevron-right\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</nav>
\t</main>
\t";
        // line 156
        yield from $this->load("component/footeradmin.html.twig", 156)->unwrap()->yield($context);
        
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
        return array (  299 => 156,  269 => 128,  253 => 118,  245 => 113,  237 => 108,  219 => 93,  203 => 80,  195 => 75,  188 => 71,  184 => 70,  174 => 63,  170 => 62,  158 => 54,  154 => 53,  150 => 51,  148 => 45,  120 => 20,  108 => 10,  105 => 9,  102 => 8,  89 => 7,  77 => 4,  64 => 3,  41 => 1,);
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
\t\t\t\t<button class=\"filter-btn active\" data-filter=\"all\">All Members</button>
\t\t\t\t<button class=\"filter-btn\" data-filter=\"active\">Active</button>
\t\t\t\t<button class=\"filter-btn\" data-filter=\"design\">Design</button>
\t\t\t\t<button class=\"filter-btn\" data-filter=\"development\">Development</button>
\t\t\t\t<button class=\"filter-btn\" data-filter=\"management\">Management</button>
\t\t\t</div>
\t\t\t<div class=\"search-box\">
\t\t\t\t<i class=\"bi bi-search\"></i>
\t\t\t\t<input type=\"text\" id=\"searchInput\" placeholder=\"Search tasks...\">
\t\t\t</div>
\t\t</div>

<!-- Team Members Grid -->

{% set borders = {
    'SAMP0001': 'border-warning',
    'SAMP0002': 'border-success',
    'SAMP0003': 'border-primary',
    'SAMP0004': 'border-danger'
} %}

<div class=\"team-grid\" id=\"teamGrid\">
    {% for sampanas in sampanas %}
        <div class=\"member-card border border-3 {{ borders[sampanas.codeSampana]|default('border-secondary') }}\" 
             data-department=\"development\" 
             data-status=\"online\">

            <!-- HEADER NORMAL (sans background) -->
            <div class=\"member-header\">
                
                <div class=\"card-assignee-avatar\">
                    <img src=\"{{ asset('images/sampana/' ~ sampanas.sampanaPictureName) }}\" 
                         alt=\"{{ sampanas.nomSampana }}\" 
                         class=\"member-avatar\" 
                         width=\"40\" height=\"40\" 
                         style=\"border-radius:50%; object-fit:cover;\">
                </div>

                <div class=\"member-info\">
                    <div class=\"member-name\">{{ sampanas.nomSampana }}</div>
                    <div class=\"member-role\">{{ sampanas.profileSampana }}</div>

                    <div class=\"member-contact\">
                        <i class=\"bi bi-key\"></i>
                        <span>Code Sampana: {{ sampanas.codeSampana }}</span>
                    </div>

                    <div class=\"member-contact\">
                        <i class=\"bi bi-calendar\"></i>
                        <span>Date de Création: {{ sampanas.createdAt|date('F,Y-m-d') }}</span>
                    </div>
                </div>

                <div class=\"member-status status-online\">
                    <i class=\"bi bi-circle-fill\"></i>
                    Online
                </div>
            </div>\t

            <!-- METRICS -->
            <div class=\"metrics-grid\">
                <div class=\"metric-item\">
                    <div class=\"metric-value\">{{ sampanas.EffectifSampana }}</div>
                    <div class=\"metric-label\">Effectif</div>
                </div>
                <div class=\"metric-item\">
                    <div class=\"metric-value\">4</div>
                    <div class=\"metric-label\">Team</div>
                </div>
                <div class=\"metric-item\">
                    <div class=\"metric-value\"></div>
                    <div class=\"metric-label\">Membres</div>
                </div>
            </div>

            <!-- ACTIONS -->
            <div class=\"member-actions\">
                <a href=\"{{ path('app_admin_sampana_edit', {'id': sampanas.id}) }}\" class=\"action-btn\">
                    <i class=\"bi bi-pencil\"></i>
                    edit
                </a>

                <a href=\"{{ path('app_admin_sampana_view', {'id': sampanas.id}) }}\" class=\"action-btn\">
                    <i class=\"bi bi-eye\"></i>
                    View
                </a>

                <a href=\"{{ path('app_admin_sampana_delete', {'id': sampanas.id}) }}\" 
                   class=\"action-btn\"
                   onclick=\"return confirm('Are you sure you want to delete this sampana?')\">
                    <i class=\"bi bi-trash\"></i>
                    delete
                </a>
            </div>

        </div>
    {% endfor %}
</div>


\t\t<!-- Pagination -->
\t\t<nav aria-label=\"Task pagination\">
\t\t\t<ul class=\"pagination\">
\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t<a class=\"page-link\" href=\"#\">
\t\t\t\t\t\t<i class=\"bi bi-chevron-left\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t<a class=\"page-link active\" href=\"#\">1</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t<a class=\"page-link\" href=\"#\">2</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t<a class=\"page-link\" href=\"#\">3</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t<a class=\"page-link\" href=\"#\">
\t\t\t\t\t\t<i class=\"bi bi-chevron-right\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</nav>
\t</main>
\t{% include 'component/footeradmin.html.twig' %}
{% endblock %}
", "admin/sampana/index.html.twig", "C:\\Users\\M_INFO\\Music\\scouts\\templates\\admin\\sampana\\index.html.twig");
    }
}
