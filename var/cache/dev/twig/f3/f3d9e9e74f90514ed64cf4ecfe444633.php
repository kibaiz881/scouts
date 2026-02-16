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

/* component/mainadmin.html.twig */
class __TwigTemplate_835e02f1b4dd95dd79465f0f341e41d5 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "component/mainadmin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "component/mainadmin.html.twig"));

        // line 1
        yield "<!-- ========== MAIN CONTENT ========== -->
<main
\tclass=\"main\" id=\"main\" role=\"main\">
\t<!-- Page Header -->
\t<div class=\"page-header\">
\t\t<div class=\"page-title\">
\t\t\t<h1>Dashboard</h1>
\t\t\t<p>
                Bienvenue dans l'espace d'administration Scout Helder Camara, ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9), "username", [], "any", false, false, false, 9), "html", null, true);
        yield ". Voici votre tableau de bord du ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y"), "html", null, true);
        yield ".
            </p>
\t\t</div>
\t\t<div class=\"page-actions\">
\t\t\t<button class=\"btn-secondary\">
\t\t\t\t<i class=\"bi bi-download\"></i>
\t\t\t\tExport Report
\t\t\t</button>
\t\t\t<a href=\"project-create.html\" class=\"btn-primary\">
\t\t\t\t<i class=\"bi bi-plus\"></i>
\t\t\t\tNew Project
\t\t\t</a>
\t\t</div>
\t</div>

\t<!-- Stats Cards -->
\t<div class=\"stats-grid\">
\t\t<div class=\"stat-card\">
\t\t\t<div class=\"stat-header\">
\t\t\t\t<div class=\"stat-icon users\">
\t\t\t\t\t<i class=\"bi bi-people\"></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"stat-trend up\">
\t\t\t\t\t<i class=\"bi bi-arrow-up\"></i>
\t\t\t\t\t12.5%
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"stat-value\">2,845</div>
\t\t\t<div class=\"stat-label\">Total Users</div>
\t\t</div>

\t\t<div class=\"stat-card\">
\t\t\t<div class=\"stat-header\">
\t\t\t\t<div class=\"stat-icon revenue\">
\t\t\t\t\t<i class=\"bi bi-currency-dollar\"></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"stat-trend up\">
\t\t\t\t\t<i class=\"bi bi-arrow-up\"></i>
\t\t\t\t\t8.2%
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"stat-value\">\$24,580</div>
\t\t\t<div class=\"stat-label\">Total Revenue</div>
\t\t</div>

\t\t<div class=\"stat-card\">
\t\t\t<div class=\"stat-header\">
\t\t\t\t<div class=\"stat-icon orders\">
\t\t\t\t\t<i class=\"bi bi-cart\"></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"stat-trend down\">
\t\t\t\t\t<i class=\"bi bi-arrow-down\"></i>
\t\t\t\t\t3.1%
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"stat-value\">1,249</div>
\t\t\t<div class=\"stat-label\">Total Orders</div>
\t\t</div>

\t\t<div class=\"stat-card\">
\t\t\t<div class=\"stat-header\">
\t\t\t\t<div class=\"stat-icon conversion\">
\t\t\t\t\t<i class=\"bi bi-graph-up\"></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"stat-trend up\">
\t\t\t\t\t<i class=\"bi bi-arrow-up\"></i>
\t\t\t\t\t5.7%
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"stat-value\">4.8%</div>
\t\t\t<div class=\"stat-label\">Conversion Rate</div>
\t\t</div>
\t</div>

\t<!-- Charts Section -->
\t<div class=\"charts-grid\">
\t\t<div class=\"chart-card\">
\t\t\t<div class=\"chart-header\">
\t\t\t\t<h3 class=\"chart-title\">Revenue Overview</h3>
\t\t\t\t<select class=\"form-select\" style=\"width: auto; background: var(--card); color: var(--text); border-color: var(--border);\">
\t\t\t\t\t<option>Last 7 days</option>
\t\t\t\t\t<option>Last 30 days</option>
\t\t\t\t\t<option>Last 90 days</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"chart-container\">
\t\t\t\t<div class=\"chart-placeholder py-2\">
\t\t\t\t\t<canvas id=\"performanceChart\"></canvas>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"chart-card\">
\t\t\t<div class=\"chart-header\">
\t\t\t\t<h3 class=\"chart-title\">User Acquisition</h3>
\t\t\t\t<select class=\"form-select\" style=\"width: auto; background: var(--card); color: var(--text); border-color: var(--border);\">
\t\t\t\t\t<option>Monthly</option>
\t\t\t\t\t<option>Quarterly</option>
\t\t\t\t\t<option>Yearly</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"chart-container\">
\t\t\t\t<div class=\"chart-placeholder py-2\">
\t\t\t\t\t<canvas id=\"categoryChart\"></canvas>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Recent Orders Table -->
\t<div class=\"table-card\">
\t\t<div class=\"table-header\">
\t\t\t<h3 class=\"table-title\">Recent Orders</h3>
\t\t\t<a href=\"#\" class=\"btn-secondary\">View All</a>
\t\t</div>
\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"custom-table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Order ID</th>
\t\t\t\t\t\t<th>Customer</th>
\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t<th>Amount</th>
\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t<th>Action</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>#ORD-7841</td>
\t\t\t\t\t\t<td>John Doe</td>
\t\t\t\t\t\t<td>Nov 15, 2023</td>
\t\t\t\t\t\t<td>\$245.99</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<span class=\"status-badge status-completed\">Completed</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"#\" class=\"text-muted\">View</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>#ORD-7840</td>
\t\t\t\t\t\t<td>Sarah Smith</td>
\t\t\t\t\t\t<td>Nov 14, 2023</td>
\t\t\t\t\t\t<td>\$1,299.00</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<span class=\"status-badge status-pending\">Pending</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"#\" class=\"text-muted\">View</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>#ORD-7839</td>
\t\t\t\t\t\t<td>Michael Brown</td>
\t\t\t\t\t\t<td>Nov 13, 2023</td>
\t\t\t\t\t\t<td>\$89.50</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<span class=\"status-badge status-active\">Processing</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"#\" class=\"text-muted\">View</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>#ORD-7838</td>
\t\t\t\t\t\t<td>Emily Johnson</td>
\t\t\t\t\t\t<td>Nov 12, 2023</td>
\t\t\t\t\t\t<td>\$549.99</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<span class=\"status-badge status-completed\">Completed</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"#\" class=\"text-muted\">View</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>#ORD-7837</td>
\t\t\t\t\t\t<td>Robert Wilson</td>
\t\t\t\t\t\t<td>Nov 11, 2023</td>
\t\t\t\t\t\t<td>\$299.00</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<span class=\"status-badge status-cancelled\">Cancelled</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"#\" class=\"text-muted\">View</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>

\t<!-- Task List & Activity Feed -->
\t<div class=\"row\">
\t\t<div class=\"col-lg-6\">
\t\t\t<div class=\"tasks-card\">
\t\t\t\t<div class=\"table-header mb-4\">
\t\t\t\t\t<h3 class=\"table-title\">My Tasks</h3>
\t\t\t\t\t<a href=\"#\" class=\"btn-secondary\">Add Task</a>
\t\t\t\t</div>
\t\t\t\t<ul class=\"task-list\">
\t\t\t\t\t<li class=\"task-item\">
\t\t\t\t\t\t<div class=\"task-checkbox completed\">
\t\t\t\t\t\t\t<i class=\"bi bi-check\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"task-content\">
\t\t\t\t\t\t\t<div class=\"task-title\">Design dashboard layout</div>
\t\t\t\t\t\t\t<div class=\"task-meta\">
\t\t\t\t\t\t\t\t<span>Due: Today</span>
\t\t\t\t\t\t\t\t<span class=\"task-priority priority-high\">High</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"task-item\">
\t\t\t\t\t\t<div class=\"task-checkbox\">
\t\t\t\t\t\t\t<i class=\"bi bi-check\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"task-content\">
\t\t\t\t\t\t\t<div class=\"task-title\">Prepare project report</div>
\t\t\t\t\t\t\t<div class=\"task-meta\">
\t\t\t\t\t\t\t\t<span>Due: Nov 20</span>
\t\t\t\t\t\t\t\t<span class=\"task-priority priority-medium\">Medium</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"task-item\">
\t\t\t\t\t\t<div class=\"task-checkbox\">
\t\t\t\t\t\t\t<i class=\"bi bi-check\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"task-content\">
\t\t\t\t\t\t\t<div class=\"task-title\">Team meeting preparation</div>
\t\t\t\t\t\t\t<div class=\"task-meta\">
\t\t\t\t\t\t\t\t<span>Due: Nov 18</span>
\t\t\t\t\t\t\t\t<span class=\"task-priority priority-low\">Low</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"task-item\">
\t\t\t\t\t\t<div class=\"task-checkbox completed\">
\t\t\t\t\t\t\t<i class=\"bi bi-check\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"task-content\">
\t\t\t\t\t\t\t<div class=\"task-title\">Update user documentation</div>
\t\t\t\t\t\t\t<div class=\"task-meta\">
\t\t\t\t\t\t\t\t<span>Due: Nov 15</span>
\t\t\t\t\t\t\t\t<span class=\"task-priority priority-medium\">Medium</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"task-item\">
\t\t\t\t\t\t<div class=\"task-checkbox\">
\t\t\t\t\t\t\t<i class=\"bi bi-check\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"task-content\">
\t\t\t\t\t\t\t<div class=\"task-title\">Review client feedback</div>
\t\t\t\t\t\t\t<div class=\"task-meta\">
\t\t\t\t\t\t\t\t<span>Due: Nov 22</span>
\t\t\t\t\t\t\t\t<span class=\"task-priority priority-high\">High</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-lg-6\">
\t\t\t<div class=\"activity-card\">
\t\t\t\t<div class=\"table-header mb-4\">
\t\t\t\t\t<h3 class=\"table-title\">Recent Activity</h3>
\t\t\t\t\t<a href=\"#\" class=\"btn-secondary\">View All</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"activity-timeline\">
\t\t\t\t\t<div class=\"activity-item\">
\t\t\t\t\t\t<div class=\"activity-dot\"></div>
\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t<div class=\"activity-meta\">
\t\t\t\t\t\t\t\t<span class=\"activity-user\">John Doe</span>
\t\t\t\t\t\t\t\t<span>Today, 10:30 AM</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"activity-text\">Updated task status to \"In Progress\"</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"activity-item\">
\t\t\t\t\t\t<div class=\"activity-dot\"></div>
\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t<div class=\"activity-meta\">
\t\t\t\t\t\t\t\t<span class=\"activity-user\">Sarah Smith</span>
\t\t\t\t\t\t\t\t<span>Yesterday, 3:45 PM</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"activity-text\">Added wireframes attachment</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"activity-item\">
\t\t\t\t\t\t<div class=\"activity-dot\"></div>
\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t<div class=\"activity-meta\">
\t\t\t\t\t\t\t\t<span class=\"activity-user\">Lisa Rodriguez</span>
\t\t\t\t\t\t\t\t<span>Dec 11, 2025</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"activity-text\">Assigned task to John Doe and Sarah Smith</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"activity-item\">
\t\t\t\t\t\t<div class=\"activity-dot\"></div>
\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t<div class=\"activity-meta\">
\t\t\t\t\t\t\t\t<span class=\"activity-user\">Lisa Rodriguez</span>
\t\t\t\t\t\t\t\t<span>Dec 10, 2025</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"activity-text\">Created task</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</main>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "component/mainadmin.html.twig";
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
        return array (  58 => 9,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- ========== MAIN CONTENT ========== -->
<main
\tclass=\"main\" id=\"main\" role=\"main\">
\t<!-- Page Header -->
\t<div class=\"page-header\">
\t\t<div class=\"page-title\">
\t\t\t<h1>Dashboard</h1>
\t\t\t<p>
                Bienvenue dans l'espace d'administration Scout Helder Camara, {{ app.user.username }}. Voici votre tableau de bord du {{ \"now\"|date('d/m/Y') }}.
            </p>
\t\t</div>
\t\t<div class=\"page-actions\">
\t\t\t<button class=\"btn-secondary\">
\t\t\t\t<i class=\"bi bi-download\"></i>
\t\t\t\tExport Report
\t\t\t</button>
\t\t\t<a href=\"project-create.html\" class=\"btn-primary\">
\t\t\t\t<i class=\"bi bi-plus\"></i>
\t\t\t\tNew Project
\t\t\t</a>
\t\t</div>
\t</div>

\t<!-- Stats Cards -->
\t<div class=\"stats-grid\">
\t\t<div class=\"stat-card\">
\t\t\t<div class=\"stat-header\">
\t\t\t\t<div class=\"stat-icon users\">
\t\t\t\t\t<i class=\"bi bi-people\"></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"stat-trend up\">
\t\t\t\t\t<i class=\"bi bi-arrow-up\"></i>
\t\t\t\t\t12.5%
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"stat-value\">2,845</div>
\t\t\t<div class=\"stat-label\">Total Users</div>
\t\t</div>

\t\t<div class=\"stat-card\">
\t\t\t<div class=\"stat-header\">
\t\t\t\t<div class=\"stat-icon revenue\">
\t\t\t\t\t<i class=\"bi bi-currency-dollar\"></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"stat-trend up\">
\t\t\t\t\t<i class=\"bi bi-arrow-up\"></i>
\t\t\t\t\t8.2%
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"stat-value\">\$24,580</div>
\t\t\t<div class=\"stat-label\">Total Revenue</div>
\t\t</div>

\t\t<div class=\"stat-card\">
\t\t\t<div class=\"stat-header\">
\t\t\t\t<div class=\"stat-icon orders\">
\t\t\t\t\t<i class=\"bi bi-cart\"></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"stat-trend down\">
\t\t\t\t\t<i class=\"bi bi-arrow-down\"></i>
\t\t\t\t\t3.1%
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"stat-value\">1,249</div>
\t\t\t<div class=\"stat-label\">Total Orders</div>
\t\t</div>

\t\t<div class=\"stat-card\">
\t\t\t<div class=\"stat-header\">
\t\t\t\t<div class=\"stat-icon conversion\">
\t\t\t\t\t<i class=\"bi bi-graph-up\"></i>
\t\t\t\t</div>
\t\t\t\t<div class=\"stat-trend up\">
\t\t\t\t\t<i class=\"bi bi-arrow-up\"></i>
\t\t\t\t\t5.7%
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"stat-value\">4.8%</div>
\t\t\t<div class=\"stat-label\">Conversion Rate</div>
\t\t</div>
\t</div>

\t<!-- Charts Section -->
\t<div class=\"charts-grid\">
\t\t<div class=\"chart-card\">
\t\t\t<div class=\"chart-header\">
\t\t\t\t<h3 class=\"chart-title\">Revenue Overview</h3>
\t\t\t\t<select class=\"form-select\" style=\"width: auto; background: var(--card); color: var(--text); border-color: var(--border);\">
\t\t\t\t\t<option>Last 7 days</option>
\t\t\t\t\t<option>Last 30 days</option>
\t\t\t\t\t<option>Last 90 days</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"chart-container\">
\t\t\t\t<div class=\"chart-placeholder py-2\">
\t\t\t\t\t<canvas id=\"performanceChart\"></canvas>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"chart-card\">
\t\t\t<div class=\"chart-header\">
\t\t\t\t<h3 class=\"chart-title\">User Acquisition</h3>
\t\t\t\t<select class=\"form-select\" style=\"width: auto; background: var(--card); color: var(--text); border-color: var(--border);\">
\t\t\t\t\t<option>Monthly</option>
\t\t\t\t\t<option>Quarterly</option>
\t\t\t\t\t<option>Yearly</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"chart-container\">
\t\t\t\t<div class=\"chart-placeholder py-2\">
\t\t\t\t\t<canvas id=\"categoryChart\"></canvas>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Recent Orders Table -->
\t<div class=\"table-card\">
\t\t<div class=\"table-header\">
\t\t\t<h3 class=\"table-title\">Recent Orders</h3>
\t\t\t<a href=\"#\" class=\"btn-secondary\">View All</a>
\t\t</div>
\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"custom-table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Order ID</th>
\t\t\t\t\t\t<th>Customer</th>
\t\t\t\t\t\t<th>Date</th>
\t\t\t\t\t\t<th>Amount</th>
\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t<th>Action</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>#ORD-7841</td>
\t\t\t\t\t\t<td>John Doe</td>
\t\t\t\t\t\t<td>Nov 15, 2023</td>
\t\t\t\t\t\t<td>\$245.99</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<span class=\"status-badge status-completed\">Completed</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"#\" class=\"text-muted\">View</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>#ORD-7840</td>
\t\t\t\t\t\t<td>Sarah Smith</td>
\t\t\t\t\t\t<td>Nov 14, 2023</td>
\t\t\t\t\t\t<td>\$1,299.00</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<span class=\"status-badge status-pending\">Pending</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"#\" class=\"text-muted\">View</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>#ORD-7839</td>
\t\t\t\t\t\t<td>Michael Brown</td>
\t\t\t\t\t\t<td>Nov 13, 2023</td>
\t\t\t\t\t\t<td>\$89.50</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<span class=\"status-badge status-active\">Processing</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"#\" class=\"text-muted\">View</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>#ORD-7838</td>
\t\t\t\t\t\t<td>Emily Johnson</td>
\t\t\t\t\t\t<td>Nov 12, 2023</td>
\t\t\t\t\t\t<td>\$549.99</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<span class=\"status-badge status-completed\">Completed</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"#\" class=\"text-muted\">View</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>#ORD-7837</td>
\t\t\t\t\t\t<td>Robert Wilson</td>
\t\t\t\t\t\t<td>Nov 11, 2023</td>
\t\t\t\t\t\t<td>\$299.00</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<span class=\"status-badge status-cancelled\">Cancelled</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"#\" class=\"text-muted\">View</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>

\t<!-- Task List & Activity Feed -->
\t<div class=\"row\">
\t\t<div class=\"col-lg-6\">
\t\t\t<div class=\"tasks-card\">
\t\t\t\t<div class=\"table-header mb-4\">
\t\t\t\t\t<h3 class=\"table-title\">My Tasks</h3>
\t\t\t\t\t<a href=\"#\" class=\"btn-secondary\">Add Task</a>
\t\t\t\t</div>
\t\t\t\t<ul class=\"task-list\">
\t\t\t\t\t<li class=\"task-item\">
\t\t\t\t\t\t<div class=\"task-checkbox completed\">
\t\t\t\t\t\t\t<i class=\"bi bi-check\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"task-content\">
\t\t\t\t\t\t\t<div class=\"task-title\">Design dashboard layout</div>
\t\t\t\t\t\t\t<div class=\"task-meta\">
\t\t\t\t\t\t\t\t<span>Due: Today</span>
\t\t\t\t\t\t\t\t<span class=\"task-priority priority-high\">High</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"task-item\">
\t\t\t\t\t\t<div class=\"task-checkbox\">
\t\t\t\t\t\t\t<i class=\"bi bi-check\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"task-content\">
\t\t\t\t\t\t\t<div class=\"task-title\">Prepare project report</div>
\t\t\t\t\t\t\t<div class=\"task-meta\">
\t\t\t\t\t\t\t\t<span>Due: Nov 20</span>
\t\t\t\t\t\t\t\t<span class=\"task-priority priority-medium\">Medium</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"task-item\">
\t\t\t\t\t\t<div class=\"task-checkbox\">
\t\t\t\t\t\t\t<i class=\"bi bi-check\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"task-content\">
\t\t\t\t\t\t\t<div class=\"task-title\">Team meeting preparation</div>
\t\t\t\t\t\t\t<div class=\"task-meta\">
\t\t\t\t\t\t\t\t<span>Due: Nov 18</span>
\t\t\t\t\t\t\t\t<span class=\"task-priority priority-low\">Low</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"task-item\">
\t\t\t\t\t\t<div class=\"task-checkbox completed\">
\t\t\t\t\t\t\t<i class=\"bi bi-check\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"task-content\">
\t\t\t\t\t\t\t<div class=\"task-title\">Update user documentation</div>
\t\t\t\t\t\t\t<div class=\"task-meta\">
\t\t\t\t\t\t\t\t<span>Due: Nov 15</span>
\t\t\t\t\t\t\t\t<span class=\"task-priority priority-medium\">Medium</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"task-item\">
\t\t\t\t\t\t<div class=\"task-checkbox\">
\t\t\t\t\t\t\t<i class=\"bi bi-check\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"task-content\">
\t\t\t\t\t\t\t<div class=\"task-title\">Review client feedback</div>
\t\t\t\t\t\t\t<div class=\"task-meta\">
\t\t\t\t\t\t\t\t<span>Due: Nov 22</span>
\t\t\t\t\t\t\t\t<span class=\"task-priority priority-high\">High</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-lg-6\">
\t\t\t<div class=\"activity-card\">
\t\t\t\t<div class=\"table-header mb-4\">
\t\t\t\t\t<h3 class=\"table-title\">Recent Activity</h3>
\t\t\t\t\t<a href=\"#\" class=\"btn-secondary\">View All</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"activity-timeline\">
\t\t\t\t\t<div class=\"activity-item\">
\t\t\t\t\t\t<div class=\"activity-dot\"></div>
\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t<div class=\"activity-meta\">
\t\t\t\t\t\t\t\t<span class=\"activity-user\">John Doe</span>
\t\t\t\t\t\t\t\t<span>Today, 10:30 AM</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"activity-text\">Updated task status to \"In Progress\"</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"activity-item\">
\t\t\t\t\t\t<div class=\"activity-dot\"></div>
\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t<div class=\"activity-meta\">
\t\t\t\t\t\t\t\t<span class=\"activity-user\">Sarah Smith</span>
\t\t\t\t\t\t\t\t<span>Yesterday, 3:45 PM</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"activity-text\">Added wireframes attachment</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"activity-item\">
\t\t\t\t\t\t<div class=\"activity-dot\"></div>
\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t<div class=\"activity-meta\">
\t\t\t\t\t\t\t\t<span class=\"activity-user\">Lisa Rodriguez</span>
\t\t\t\t\t\t\t\t<span>Dec 11, 2025</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"activity-text\">Assigned task to John Doe and Sarah Smith</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"activity-item\">
\t\t\t\t\t\t<div class=\"activity-dot\"></div>
\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t<div class=\"activity-meta\">
\t\t\t\t\t\t\t\t<span class=\"activity-user\">Lisa Rodriguez</span>
\t\t\t\t\t\t\t\t<span>Dec 10, 2025</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"activity-text\">Created task</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</main>
", "component/mainadmin.html.twig", "C:\\Users\\M_INFO\\Music\\scouts\\templates\\component\\mainadmin.html.twig");
    }
}
