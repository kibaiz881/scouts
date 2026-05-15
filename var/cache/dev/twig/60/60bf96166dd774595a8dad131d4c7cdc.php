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

/* user/index.html.twig */
class __TwigTemplate_09af3cf4e593370aed0da0170122dbfa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

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

        yield "User page
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "
\t";
        // line 8
        yield from $this->load("component/headeradmin.html.twig", 8)->unwrap()->yield($context);
        // line 9
        yield "
\t";
        // line 10
        yield from $this->load("component/sidebaruser.html.twig", 10)->unwrap()->yield($context);
        // line 11
        yield "\t<!-- ========== MAIN CONTENT ========== -->
\t<main
\t\tclass=\"main\" id=\"main\" role=\"main\">
\t\t<!-- Page Header -->
\t\t<div class=\"page-header\">
\t\t\t<div class=\"page-title\">
\t\t\t\t<h1>Dashboard</h1>
\t\t\t\t<p>
\t\t\t\t\tBienvenue dans l'espace users Scout Helder Camara,
\t\t\t\t\t";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "username", [], "any", false, false, false, 20), "html", null, true);
        yield ". Voici votre tableau de bord du
\t\t\t\t\t";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y"), "html", null, true);
        yield ".
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"page-actions\">
\t\t\t\t<button class=\"btn-secondary\">
\t\t\t\t\t<i class=\"bi bi-download\"></i>
\t\t\t\t\tExport Report
\t\t\t\t</button>
\t\t\t\t<a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_post_newpostadmin");
        yield "\" class=\"btn-primary\">
\t\t\t\t\t<i class=\"bi bi-plus\"></i>
\t\t\t\t\tNew Post
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>

\t\t<!-- Stats Cards -->
\t\t<div class=\"stats-grid\">
\t\t\t<div class=\"stat-card\">
\t\t\t\t<div class=\"stat-header\">
\t\t\t\t\t<div class=\"stat-icon users\">
\t\t\t\t\t\t<i class=\"bi bi-people\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"stat-trend up\">
\t\t\t\t\t\t<i class=\"bi bi-arrow-up\"></i>
\t\t\t\t\t\t12.5%
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"stat-value\">2,845</div>
\t\t\t\t<div class=\"stat-label\">Total Membres</div>
\t\t\t</div>

\t\t\t<div class=\"stat-card\">
\t\t\t\t<div class=\"stat-header\">
\t\t\t\t\t<div class=\"stat-icon revenue\">
\t\t\t\t\t\t<i class=\"bi bi-currency-dollar\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"stat-trend up\">
\t\t\t\t\t\t<i class=\"bi bi-arrow-up\"></i>
\t\t\t\t\t\t8.2%
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"stat-value\">\$24,580</div>
\t\t\t\t<div class=\"stat-label\">Total Vatom-panorenana</div>
\t\t\t</div>

\t\t\t<div class=\"stat-card\">
\t\t\t\t<div class=\"stat-header\">
\t\t\t\t\t<div class=\"stat-icon orders\">
\t\t\t\t\t\t<i class=\"bi bi-cart\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"stat-trend down\">
\t\t\t\t\t\t<i class=\"bi bi-arrow-down\"></i>
\t\t\t\t\t\t3.1%
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"stat-value\">1,249</div>
\t\t\t\t<div class=\"stat-label\">Total FIBO</div>
\t\t\t</div>

\t\t\t<div class=\"stat-card\">
\t\t\t\t<div class=\"stat-header\">
\t\t\t\t\t<div class=\"stat-icon conversion\">
\t\t\t\t\t\t<i class=\"bi bi-graph-up\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"stat-trend up\">
\t\t\t\t\t\t<i class=\"bi bi-arrow-up\"></i>
\t\t\t\t\t\t5.7%
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"stat-value\">4.8%</div>
\t\t\t\t<div class=\"stat-label\">Activité</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Charts Section -->
\t\t<div class=\"charts-grid\">
\t\t\t<div class=\"chart-card\">
\t\t\t\t<div class=\"chart-header\">
\t\t\t\t\t<h3 class=\"chart-title\">Revenue Overview</h3>
\t\t\t\t\t<select class=\"form-select\" style=\"width: auto; background: var(--card); color: var(--text); border-color: var(--border);\">
\t\t\t\t\t\t<option>Last 7 days</option>
\t\t\t\t\t\t<option>Last 30 days</option>
\t\t\t\t\t\t<option>Last 90 days</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"chart-container\">
\t\t\t\t\t<div class=\"chart-placeholder py-2\">
\t\t\t\t\t\t<canvas id=\"performanceChart\"></canvas>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"chart-card\">
\t\t\t\t<div class=\"chart-header\">
\t\t\t\t\t<h3 class=\"chart-title\">User Acquisition</h3>
\t\t\t\t\t<select class=\"form-select\" style=\"width: auto; background: var(--card); color: var(--text); border-color: var(--border);\">
\t\t\t\t\t\t<option>Monthly</option>
\t\t\t\t\t\t<option>Quarterly</option>
\t\t\t\t\t\t<option>Yearly</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"chart-container\">
\t\t\t\t\t<div class=\"chart-placeholder py-2\">
\t\t\t\t\t\t<canvas id=\"categoryChart\"></canvas>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Recent Orders Table -->
\t\t<div class=\"table-card\">
\t\t\t<div class=\"table-header\">
\t\t\t\t<h3 class=\"table-title\">Recent Orders</h3>
\t\t\t\t<a href=\"#\" class=\"btn-secondary\">View All</a>
\t\t\t</div>
\t\t\t<div class=\"table-responsive\">
\t\t\t\t<table class=\"custom-table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Order ID</th>
\t\t\t\t\t\t\t<th>Customer</th>
\t\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t\t<th>Amount</th>
\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t<th>Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>#ORD-7841</td>
\t\t\t\t\t\t\t<td>John Doe</td>
\t\t\t\t\t\t\t<td>Nov 15, 2023</td>
\t\t\t\t\t\t\t<td>\$245.99</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<span class=\"status-badge status-completed\">Completed</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-muted\">View</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>#ORD-7840</td>
\t\t\t\t\t\t\t<td>Sarah Smith</td>
\t\t\t\t\t\t\t<td>Nov 14, 2023</td>
\t\t\t\t\t\t\t<td>\$1,299.00</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<span class=\"status-badge status-pending\">Pending</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-muted\">View</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>#ORD-7839</td>
\t\t\t\t\t\t\t<td>Michael Brown</td>
\t\t\t\t\t\t\t<td>Nov 13, 2023</td>
\t\t\t\t\t\t\t<td>\$89.50</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<span class=\"status-badge status-active\">Processing</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-muted\">View</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>#ORD-7838</td>
\t\t\t\t\t\t\t<td>Emily Johnson</td>
\t\t\t\t\t\t\t<td>Nov 12, 2023</td>
\t\t\t\t\t\t\t<td>\$549.99</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<span class=\"status-badge status-completed\">Completed</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-muted\">View</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>#ORD-7837</td>
\t\t\t\t\t\t\t<td>Robert Wilson</td>
\t\t\t\t\t\t\t<td>Nov 11, 2023</td>
\t\t\t\t\t\t\t<td>\$299.00</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<span class=\"status-badge status-cancelled\">Cancelled</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-muted\">View</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>

\t\t<!-- Task List & Activity Feed -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<div class=\"tasks-card\">
\t\t\t\t\t<div class=\"table-header mb-4\">
\t\t\t\t\t\t<h3 class=\"table-title\">My Tasks</h3>
\t\t\t\t\t\t<a href=\"#\" class=\"btn-secondary\">Add Task</a>
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"task-list\">
\t\t\t\t\t\t<li class=\"task-item\">
\t\t\t\t\t\t\t<div class=\"task-checkbox completed\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-check\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"task-content\">
\t\t\t\t\t\t\t\t<div class=\"task-title\">Design dashboard layout</div>
\t\t\t\t\t\t\t\t<div class=\"task-meta\">
\t\t\t\t\t\t\t\t\t<span>Due: Today</span>
\t\t\t\t\t\t\t\t\t<span class=\"task-priority priority-high\">High</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"task-item\">
\t\t\t\t\t\t\t<div class=\"task-checkbox\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-check\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"task-content\">
\t\t\t\t\t\t\t\t<div class=\"task-title\">Prepare project report</div>
\t\t\t\t\t\t\t\t<div class=\"task-meta\">
\t\t\t\t\t\t\t\t\t<span>Due: Nov 20</span>
\t\t\t\t\t\t\t\t\t<span class=\"task-priority priority-medium\">Medium</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"task-item\">
\t\t\t\t\t\t\t<div class=\"task-checkbox\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-check\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"task-content\">
\t\t\t\t\t\t\t\t<div class=\"task-title\">Team meeting preparation</div>
\t\t\t\t\t\t\t\t<div class=\"task-meta\">
\t\t\t\t\t\t\t\t\t<span>Due: Nov 18</span>
\t\t\t\t\t\t\t\t\t<span class=\"task-priority priority-low\">Low</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"task-item\">
\t\t\t\t\t\t\t<div class=\"task-checkbox completed\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-check\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"task-content\">
\t\t\t\t\t\t\t\t<div class=\"task-title\">Update user documentation</div>
\t\t\t\t\t\t\t\t<div class=\"task-meta\">
\t\t\t\t\t\t\t\t\t<span>Due: Nov 15</span>
\t\t\t\t\t\t\t\t\t<span class=\"task-priority priority-medium\">Medium</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"task-item\">
\t\t\t\t\t\t\t<div class=\"task-checkbox\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-check\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"task-content\">
\t\t\t\t\t\t\t\t<div class=\"task-title\">Review client feedback</div>
\t\t\t\t\t\t\t\t<div class=\"task-meta\">
\t\t\t\t\t\t\t\t\t<span>Due: Nov 22</span>
\t\t\t\t\t\t\t\t\t<span class=\"task-priority priority-high\">High</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<div class=\"activity-card\">
\t\t\t\t\t<div class=\"table-header mb-4\">
\t\t\t\t\t\t<h3 class=\"table-title\">Recent Activity</h3>
\t\t\t\t\t\t<a href=\"#\" class=\"btn-secondary\">View All</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"activity-timeline\">
\t\t\t\t\t\t<div class=\"activity-item\">
\t\t\t\t\t\t\t<div class=\"activity-dot\"></div>
\t\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t\t<div class=\"activity-meta\">
\t\t\t\t\t\t\t\t\t<span class=\"activity-user\">John Doe</span>
\t\t\t\t\t\t\t\t\t<span>Today, 10:30 AM</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"activity-text\">Updated task status to \"In Progress\"</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"activity-item\">
\t\t\t\t\t\t\t<div class=\"activity-dot\"></div>
\t\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t\t<div class=\"activity-meta\">
\t\t\t\t\t\t\t\t\t<span class=\"activity-user\">Sarah Smith</span>
\t\t\t\t\t\t\t\t\t<span>Yesterday, 3:45 PM</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"activity-text\">Added wireframes attachment</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"activity-item\">
\t\t\t\t\t\t\t<div class=\"activity-dot\"></div>
\t\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t\t<div class=\"activity-meta\">
\t\t\t\t\t\t\t\t\t<span class=\"activity-user\">Lisa Rodriguez</span>
\t\t\t\t\t\t\t\t\t<span>Dec 11, 2025</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"activity-text\">Assigned task to John Doe and Sarah Smith</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"activity-item\">
\t\t\t\t\t\t\t<div class=\"activity-dot\"></div>
\t\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t\t<div class=\"activity-meta\">
\t\t\t\t\t\t\t\t\t<span class=\"activity-user\">Lisa Rodriguez</span>
\t\t\t\t\t\t\t\t\t<span>Dec 10, 2025</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"activity-text\">Created task</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</main>


\t";
        // line 340
        yield from $this->load("component/footeradmin.html.twig", 340)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "user/index.html.twig";
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
        return array (  451 => 340,  137 => 29,  126 => 21,  122 => 20,  111 => 11,  109 => 10,  106 => 9,  104 => 8,  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'component/baseadmin.html.twig' %}

{% block title %}User page
{% endblock %}

{% block body %}

\t{% include 'component/headeradmin.html.twig' %}

\t{% include 'component/sidebaruser.html.twig' %}
\t<!-- ========== MAIN CONTENT ========== -->
\t<main
\t\tclass=\"main\" id=\"main\" role=\"main\">
\t\t<!-- Page Header -->
\t\t<div class=\"page-header\">
\t\t\t<div class=\"page-title\">
\t\t\t\t<h1>Dashboard</h1>
\t\t\t\t<p>
\t\t\t\t\tBienvenue dans l'espace users Scout Helder Camara,
\t\t\t\t\t{{ app.user.username }}. Voici votre tableau de bord du
\t\t\t\t\t{{ \"now\"|date('d/m/Y') }}.
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"page-actions\">
\t\t\t\t<button class=\"btn-secondary\">
\t\t\t\t\t<i class=\"bi bi-download\"></i>
\t\t\t\t\tExport Report
\t\t\t\t</button>
\t\t\t\t<a href=\"{{ path('app_admin_post_newpostadmin') }}\" class=\"btn-primary\">
\t\t\t\t\t<i class=\"bi bi-plus\"></i>
\t\t\t\t\tNew Post
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>

\t\t<!-- Stats Cards -->
\t\t<div class=\"stats-grid\">
\t\t\t<div class=\"stat-card\">
\t\t\t\t<div class=\"stat-header\">
\t\t\t\t\t<div class=\"stat-icon users\">
\t\t\t\t\t\t<i class=\"bi bi-people\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"stat-trend up\">
\t\t\t\t\t\t<i class=\"bi bi-arrow-up\"></i>
\t\t\t\t\t\t12.5%
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"stat-value\">2,845</div>
\t\t\t\t<div class=\"stat-label\">Total Membres</div>
\t\t\t</div>

\t\t\t<div class=\"stat-card\">
\t\t\t\t<div class=\"stat-header\">
\t\t\t\t\t<div class=\"stat-icon revenue\">
\t\t\t\t\t\t<i class=\"bi bi-currency-dollar\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"stat-trend up\">
\t\t\t\t\t\t<i class=\"bi bi-arrow-up\"></i>
\t\t\t\t\t\t8.2%
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"stat-value\">\$24,580</div>
\t\t\t\t<div class=\"stat-label\">Total Vatom-panorenana</div>
\t\t\t</div>

\t\t\t<div class=\"stat-card\">
\t\t\t\t<div class=\"stat-header\">
\t\t\t\t\t<div class=\"stat-icon orders\">
\t\t\t\t\t\t<i class=\"bi bi-cart\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"stat-trend down\">
\t\t\t\t\t\t<i class=\"bi bi-arrow-down\"></i>
\t\t\t\t\t\t3.1%
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"stat-value\">1,249</div>
\t\t\t\t<div class=\"stat-label\">Total FIBO</div>
\t\t\t</div>

\t\t\t<div class=\"stat-card\">
\t\t\t\t<div class=\"stat-header\">
\t\t\t\t\t<div class=\"stat-icon conversion\">
\t\t\t\t\t\t<i class=\"bi bi-graph-up\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"stat-trend up\">
\t\t\t\t\t\t<i class=\"bi bi-arrow-up\"></i>
\t\t\t\t\t\t5.7%
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"stat-value\">4.8%</div>
\t\t\t\t<div class=\"stat-label\">Activité</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Charts Section -->
\t\t<div class=\"charts-grid\">
\t\t\t<div class=\"chart-card\">
\t\t\t\t<div class=\"chart-header\">
\t\t\t\t\t<h3 class=\"chart-title\">Revenue Overview</h3>
\t\t\t\t\t<select class=\"form-select\" style=\"width: auto; background: var(--card); color: var(--text); border-color: var(--border);\">
\t\t\t\t\t\t<option>Last 7 days</option>
\t\t\t\t\t\t<option>Last 30 days</option>
\t\t\t\t\t\t<option>Last 90 days</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"chart-container\">
\t\t\t\t\t<div class=\"chart-placeholder py-2\">
\t\t\t\t\t\t<canvas id=\"performanceChart\"></canvas>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"chart-card\">
\t\t\t\t<div class=\"chart-header\">
\t\t\t\t\t<h3 class=\"chart-title\">User Acquisition</h3>
\t\t\t\t\t<select class=\"form-select\" style=\"width: auto; background: var(--card); color: var(--text); border-color: var(--border);\">
\t\t\t\t\t\t<option>Monthly</option>
\t\t\t\t\t\t<option>Quarterly</option>
\t\t\t\t\t\t<option>Yearly</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"chart-container\">
\t\t\t\t\t<div class=\"chart-placeholder py-2\">
\t\t\t\t\t\t<canvas id=\"categoryChart\"></canvas>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Recent Orders Table -->
\t\t<div class=\"table-card\">
\t\t\t<div class=\"table-header\">
\t\t\t\t<h3 class=\"table-title\">Recent Orders</h3>
\t\t\t\t<a href=\"#\" class=\"btn-secondary\">View All</a>
\t\t\t</div>
\t\t\t<div class=\"table-responsive\">
\t\t\t\t<table class=\"custom-table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Order ID</th>
\t\t\t\t\t\t\t<th>Customer</th>
\t\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t\t<th>Amount</th>
\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t<th>Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>#ORD-7841</td>
\t\t\t\t\t\t\t<td>John Doe</td>
\t\t\t\t\t\t\t<td>Nov 15, 2023</td>
\t\t\t\t\t\t\t<td>\$245.99</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<span class=\"status-badge status-completed\">Completed</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-muted\">View</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>#ORD-7840</td>
\t\t\t\t\t\t\t<td>Sarah Smith</td>
\t\t\t\t\t\t\t<td>Nov 14, 2023</td>
\t\t\t\t\t\t\t<td>\$1,299.00</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<span class=\"status-badge status-pending\">Pending</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-muted\">View</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>#ORD-7839</td>
\t\t\t\t\t\t\t<td>Michael Brown</td>
\t\t\t\t\t\t\t<td>Nov 13, 2023</td>
\t\t\t\t\t\t\t<td>\$89.50</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<span class=\"status-badge status-active\">Processing</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-muted\">View</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>#ORD-7838</td>
\t\t\t\t\t\t\t<td>Emily Johnson</td>
\t\t\t\t\t\t\t<td>Nov 12, 2023</td>
\t\t\t\t\t\t\t<td>\$549.99</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<span class=\"status-badge status-completed\">Completed</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-muted\">View</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>#ORD-7837</td>
\t\t\t\t\t\t\t<td>Robert Wilson</td>
\t\t\t\t\t\t\t<td>Nov 11, 2023</td>
\t\t\t\t\t\t\t<td>\$299.00</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<span class=\"status-badge status-cancelled\">Cancelled</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-muted\">View</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>

\t\t<!-- Task List & Activity Feed -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<div class=\"tasks-card\">
\t\t\t\t\t<div class=\"table-header mb-4\">
\t\t\t\t\t\t<h3 class=\"table-title\">My Tasks</h3>
\t\t\t\t\t\t<a href=\"#\" class=\"btn-secondary\">Add Task</a>
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"task-list\">
\t\t\t\t\t\t<li class=\"task-item\">
\t\t\t\t\t\t\t<div class=\"task-checkbox completed\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-check\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"task-content\">
\t\t\t\t\t\t\t\t<div class=\"task-title\">Design dashboard layout</div>
\t\t\t\t\t\t\t\t<div class=\"task-meta\">
\t\t\t\t\t\t\t\t\t<span>Due: Today</span>
\t\t\t\t\t\t\t\t\t<span class=\"task-priority priority-high\">High</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"task-item\">
\t\t\t\t\t\t\t<div class=\"task-checkbox\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-check\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"task-content\">
\t\t\t\t\t\t\t\t<div class=\"task-title\">Prepare project report</div>
\t\t\t\t\t\t\t\t<div class=\"task-meta\">
\t\t\t\t\t\t\t\t\t<span>Due: Nov 20</span>
\t\t\t\t\t\t\t\t\t<span class=\"task-priority priority-medium\">Medium</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"task-item\">
\t\t\t\t\t\t\t<div class=\"task-checkbox\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-check\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"task-content\">
\t\t\t\t\t\t\t\t<div class=\"task-title\">Team meeting preparation</div>
\t\t\t\t\t\t\t\t<div class=\"task-meta\">
\t\t\t\t\t\t\t\t\t<span>Due: Nov 18</span>
\t\t\t\t\t\t\t\t\t<span class=\"task-priority priority-low\">Low</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"task-item\">
\t\t\t\t\t\t\t<div class=\"task-checkbox completed\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-check\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"task-content\">
\t\t\t\t\t\t\t\t<div class=\"task-title\">Update user documentation</div>
\t\t\t\t\t\t\t\t<div class=\"task-meta\">
\t\t\t\t\t\t\t\t\t<span>Due: Nov 15</span>
\t\t\t\t\t\t\t\t\t<span class=\"task-priority priority-medium\">Medium</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"task-item\">
\t\t\t\t\t\t\t<div class=\"task-checkbox\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-check\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"task-content\">
\t\t\t\t\t\t\t\t<div class=\"task-title\">Review client feedback</div>
\t\t\t\t\t\t\t\t<div class=\"task-meta\">
\t\t\t\t\t\t\t\t\t<span>Due: Nov 22</span>
\t\t\t\t\t\t\t\t\t<span class=\"task-priority priority-high\">High</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<div class=\"activity-card\">
\t\t\t\t\t<div class=\"table-header mb-4\">
\t\t\t\t\t\t<h3 class=\"table-title\">Recent Activity</h3>
\t\t\t\t\t\t<a href=\"#\" class=\"btn-secondary\">View All</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"activity-timeline\">
\t\t\t\t\t\t<div class=\"activity-item\">
\t\t\t\t\t\t\t<div class=\"activity-dot\"></div>
\t\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t\t<div class=\"activity-meta\">
\t\t\t\t\t\t\t\t\t<span class=\"activity-user\">John Doe</span>
\t\t\t\t\t\t\t\t\t<span>Today, 10:30 AM</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"activity-text\">Updated task status to \"In Progress\"</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"activity-item\">
\t\t\t\t\t\t\t<div class=\"activity-dot\"></div>
\t\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t\t<div class=\"activity-meta\">
\t\t\t\t\t\t\t\t\t<span class=\"activity-user\">Sarah Smith</span>
\t\t\t\t\t\t\t\t\t<span>Yesterday, 3:45 PM</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"activity-text\">Added wireframes attachment</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"activity-item\">
\t\t\t\t\t\t\t<div class=\"activity-dot\"></div>
\t\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t\t<div class=\"activity-meta\">
\t\t\t\t\t\t\t\t\t<span class=\"activity-user\">Lisa Rodriguez</span>
\t\t\t\t\t\t\t\t\t<span>Dec 11, 2025</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"activity-text\">Assigned task to John Doe and Sarah Smith</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"activity-item\">
\t\t\t\t\t\t\t<div class=\"activity-dot\"></div>
\t\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t\t<div class=\"activity-meta\">
\t\t\t\t\t\t\t\t\t<span class=\"activity-user\">Lisa Rodriguez</span>
\t\t\t\t\t\t\t\t\t<span>Dec 10, 2025</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"activity-text\">Created task</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</main>


\t{% include 'component/footeradmin.html.twig' %}
{% endblock %}
", "user/index.html.twig", "C:\\Users\\M_INFO\\Music\\scouts\\templates\\user\\index.html.twig");
    }
}
