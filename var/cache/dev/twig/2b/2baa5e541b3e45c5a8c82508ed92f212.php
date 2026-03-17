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

\t\t<!-- Team Members Grid -->
\t\t<div class=\"team-grid\" id=\"teamGrid\">
\t\t\t<div class=\"member-card\" data-department=\"development\" data-status=\"online\">
\t\t\t\t<div class=\"member-header\">
\t\t\t\t\t<div class=\"member-avatar\" style=\"background: #10b981;\">
\t\t\t\t\t\tMB
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"member-info\">
\t\t\t\t\t\t<div class=\"member-name\">Michael Brown</div>
\t\t\t\t\t\t<div class=\"member-role\">Frontend Developer</div>
\t\t\t\t\t\t<div class=\"member-contact\">
\t\t\t\t\t\t\t<i class=\"bi bi-envelope\"></i>
\t\t\t\t\t\t\t<span>michael.brown@template.com</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"member-contact\">
\t\t\t\t\t\t\t<i class=\"bi bi-calendar\"></i>
\t\t\t\t\t\t\t<span>Joined Nov 22, 2023</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"member-status status-online\">
\t\t\t\t\t\t<i class=\"bi bi-circle-fill\"></i>
\t\t\t\t\t\tOnline
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"skills-container\">
\t\t\t\t\t<span class=\"skill-tag\">React</span>
\t\t\t\t\t<span class=\"skill-tag\">TypeScript</span>
\t\t\t\t\t<span class=\"skill-tag\">Next.js</span>
\t\t\t\t\t<span class=\"skill-tag\">Tailwind</span>
\t\t\t\t</div>

\t\t\t\t<div class=\"metrics-grid\">
\t\t\t\t\t<div class=\"metric-item\">
\t\t\t\t\t\t<div class=\"metric-value\">56</div>
\t\t\t\t\t\t<div class=\"metric-label\">Tasks Done</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"metric-item\">
\t\t\t\t\t\t<div class=\"metric-value\">6</div>
\t\t\t\t\t\t<div class=\"metric-label\">Active Tasks</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"metric-item\">
\t\t\t\t\t\t<div class=\"metric-value\">90%</div>
\t\t\t\t\t\t<div class=\"metric-label\">Availability</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"member-actions\">
\t\t\t\t\t<button class=\"action-btn\">
\t\t\t\t\t\t<i class=\"bi bi-person\"></i>
\t\t\t\t\t\tProfile
\t\t\t\t\t</button>
\t\t\t\t\t<button class=\"action-btn\">
\t\t\t\t\t\t<i class=\"bi bi-chat\"></i>
\t\t\t\t\t\tMessage
\t\t\t\t\t</button>
\t\t\t\t\t<button class=\"action-btn\">
\t\t\t\t\t\t<i class=\"bi bi-plus-circle\"></i>
\t\t\t\t\t\tTask
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>

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
        // line 133
        yield from $this->load("component/footeradmin.html.twig", 133)->unwrap()->yield($context);
        
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
        return array (  236 => 133,  120 => 20,  108 => 10,  105 => 9,  102 => 8,  89 => 7,  77 => 4,  64 => 3,  41 => 1,);
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

\t\t<!-- Team Members Grid -->
\t\t<div class=\"team-grid\" id=\"teamGrid\">
\t\t\t<div class=\"member-card\" data-department=\"development\" data-status=\"online\">
\t\t\t\t<div class=\"member-header\">
\t\t\t\t\t<div class=\"member-avatar\" style=\"background: #10b981;\">
\t\t\t\t\t\tMB
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"member-info\">
\t\t\t\t\t\t<div class=\"member-name\">Michael Brown</div>
\t\t\t\t\t\t<div class=\"member-role\">Frontend Developer</div>
\t\t\t\t\t\t<div class=\"member-contact\">
\t\t\t\t\t\t\t<i class=\"bi bi-envelope\"></i>
\t\t\t\t\t\t\t<span>michael.brown@template.com</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"member-contact\">
\t\t\t\t\t\t\t<i class=\"bi bi-calendar\"></i>
\t\t\t\t\t\t\t<span>Joined Nov 22, 2023</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"member-status status-online\">
\t\t\t\t\t\t<i class=\"bi bi-circle-fill\"></i>
\t\t\t\t\t\tOnline
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"skills-container\">
\t\t\t\t\t<span class=\"skill-tag\">React</span>
\t\t\t\t\t<span class=\"skill-tag\">TypeScript</span>
\t\t\t\t\t<span class=\"skill-tag\">Next.js</span>
\t\t\t\t\t<span class=\"skill-tag\">Tailwind</span>
\t\t\t\t</div>

\t\t\t\t<div class=\"metrics-grid\">
\t\t\t\t\t<div class=\"metric-item\">
\t\t\t\t\t\t<div class=\"metric-value\">56</div>
\t\t\t\t\t\t<div class=\"metric-label\">Tasks Done</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"metric-item\">
\t\t\t\t\t\t<div class=\"metric-value\">6</div>
\t\t\t\t\t\t<div class=\"metric-label\">Active Tasks</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"metric-item\">
\t\t\t\t\t\t<div class=\"metric-value\">90%</div>
\t\t\t\t\t\t<div class=\"metric-label\">Availability</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"member-actions\">
\t\t\t\t\t<button class=\"action-btn\">
\t\t\t\t\t\t<i class=\"bi bi-person\"></i>
\t\t\t\t\t\tProfile
\t\t\t\t\t</button>
\t\t\t\t\t<button class=\"action-btn\">
\t\t\t\t\t\t<i class=\"bi bi-chat\"></i>
\t\t\t\t\t\tMessage
\t\t\t\t\t</button>
\t\t\t\t\t<button class=\"action-btn\">
\t\t\t\t\t\t<i class=\"bi bi-plus-circle\"></i>
\t\t\t\t\t\tTask
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>

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
