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

/* admin/post_admin/index.html.twig */
class __TwigTemplate_8055a5701e27a010232751a0ce48bcbc extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/post_admin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/post_admin/index.html.twig"));

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

        yield "Helder Camara posts list
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
        yield "\t";
        yield from $this->load("component/sidebaradmin.html.twig", 9)->unwrap()->yield($context);
        // line 10
        yield "
\t<main
\t\tclass=\"main\" id=\"main\" role=\"main\">
\t\t<!-- Page Header -->
\t\t<div class=\"page-header\">
\t\t\t<div class=\"page-title\">
\t\t\t\t<h1>Publication</h1>
\t\t\t\t<p>Manage and track all your publication in one place</p>
\t\t\t</div>
\t\t\t<div class=\"page-actions\">
\t\t\t\t<button class=\"btn-secondary\">
\t\t\t\t\t<i class=\"bi bi-filter\"></i>
\t\t\t\t\tFilter
\t\t\t\t</button>
\t\t\t\t<a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_post_newpostadmin");
        yield "\" class=\"btn-primary\">
\t\t\t\t\t<i class=\"bi bi-plus\"></i>
\t\t\t\t\tNew Task
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>

\t\t<!-- Tasks Header -->
\t\t<div class=\"task-page tasks-header\">
\t\t\t<div class=\"filter-controls\">
\t\t\t\t<div class=\"view-toggle\">
\t\t\t\t\t<button class=\"view-btn active\" id=\"listViewBtn\">
\t\t\t\t\t\t<i class=\"bi bi-list\"></i>
\t\t\t\t\t\tList
\t\t\t\t\t</button>
\t\t\t\t\t<button class=\"view-btn\" id=\"gridViewBtn\">
\t\t\t\t\t\t<i class=\"bi bi-grid-3x3-gap\"></i>
\t\t\t\t\t\tGrid
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"search-box\">
\t\t\t\t<i class=\"bi bi-search\"></i>
\t\t\t\t<input type=\"text\" id=\"searchInput\" placeholder=\"Search tasks...\">
\t\t\t</div>
\t\t</div>

\t\t<!-- Empty State (Hidden by default) -->
\t\t<div class=\"empty-state\" id=\"emptyState\" style=\"display: none;\">
\t\t\t<i class=\"bi bi-check2-square\"></i>
\t\t\t<h3>No tasks found</h3>
\t\t\t<p>Try adjusting your search or filter to find what you're looking for.</p>
\t\t</div>

\t\t<!-- Tasks List View -->
\t\t<div class=\"tasks-list-view\" id=\"listView\">
\t\t\t<div class=\"tasks-table-container\">
\t\t\t\t<div class=\"tasks-table-header\">
\t\t\t\t\t<h3 class=\"section-title mb-0\">All Tasks</h3>
\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t<span class=\"text-muted\">Showing 12 of 45 tasks</span>
\t\t\t\t\t\t<select class=\"form-select\" style=\"width: auto; background: var(--card); color: var(--text); border-color: var(--border);\">
\t\t\t\t\t\t\t<option>Sort by: Due Date</option>
\t\t\t\t\t\t\t<option>Sort by: Priority</option>
\t\t\t\t\t\t\t<option>Sort by: Status</option>
\t\t\t\t\t\t\t<option>Sort by: Assignee</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<table class=\"tasks-table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th class=\"task-checkbox-cell\"></th>
\t\t\t\t\t\t\t<th>Task</th>
\t\t\t\t\t\t\t<th>Assignee</th>
\t\t\t\t\t\t\t<th>Priority</th>
\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t<th>Due Date</th>
\t\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody
\t\t\t\t\t\tid=\"tasksTableBody\">
\t\t\t\t\t\t<!-- Task 1 -->
\t\t\t\t\t\t";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 88, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 89
            yield "\t\t\t\t\t\t\t<tr class=\"task-row\" data-status=\"in-progress\" data-priority=\"high\">
\t\t\t\t\t\t\t\t<td class=\"task-checkbox-cell\">
\t\t\t\t\t\t\t\t\t<div class=\"task-checkbox\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-check\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"task-title-cell\">
\t\t\t\t\t\t\t\t\t<div class=\"task-title\">";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 96), "html", null, true);
            yield "</div>
\t\t\t\t\t\t\t\t\t<div class=\"task-project\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-kanban\"></i>
\t\t\t\t\t\t\t\t\t\t<a href=\"project-details.html\">";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 99), "html", null, true);
            yield "</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"task-assignee\">
\t\t\t\t\t\t\t\t\t\t<div class=\"assignee-avatar\" style=\"background: #00B7FF; color: white;\">";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 104), "username", [], "any", false, false, false, 104))), "html", null, true);
            yield "</div>
\t\t\t\t\t\t\t\t\t\t<span>";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 105), "username", [], "any", false, false, false, 105), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<span class=\"task-priority priority-high\">High</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<span class=\"task-status status-in-progress\">In Progress</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"task-due-date\">
\t\t\t\t\t\t\t\t\t<span class=\"due-date\">Dec 5, 2023</span>
\t\t\t\t\t\t\t\t\t<span class=\"days-left\">2 days left</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"task-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"task-create.html\" class=\"task-action-btn\" title=\"Edit\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-pencil\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"task-details.html\" class=\"task-action-btn\" title=\"View\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-eye\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<button class=\"task-action-btn\" title=\"Delete\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-trash\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['post'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        yield "
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>

\t\t<!-- Tasks Grid View -->
\t\t<div class=\"tasks-grid-view\" id=\"gridView\">
\t\t\t<div
\t\t\t\tclass=\"tasks-grid\" id=\"tasksGrid\">
\t\t\t\t<!-- Task Card 1 -->
\t\t\t\t";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 144, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 145
            yield "\t\t\t\t\t<div class=\"task-card\" data-status=\"in-progress\" data-priority=\"high\">
\t\t\t\t\t\t<div class=\"task-card-header\">
\t\t\t\t\t\t\t<div class=\"task-card-checkbox\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-check\"></i>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"task-card-title\">
\t\t\t\t\t\t\t\t<h4>";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 152), "html", null, true);
            yield "</h4>
\t\t\t\t\t\t\t\t<div class=\"task-card-project\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-kanban\"></i>
\t\t\t\t\t\t\t\t\t<a href=\"#\">";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 155), "fonctionScout", [], "any", false, false, false, 155), "html", null, true);
            yield "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 159
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["post"], "postPictureName", [], "any", false, false, false, 159)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 160
                yield "\t\t\t\t\t\t\t<img src=\"";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["post"], "postPictureName", [], "any", false, false, false, 160)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/posts/" . CoreExtension::getAttribute($this->env, $this->source, $context["post"], "postPictureName", [], "any", false, false, false, 160))), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/posts/75hc.jpg"), "html", null, true)));
                yield "\" class=\"img-fluid\" style=\"width:100%; height:200px; object-fit:cover; border-radius:10px 10px 0 0;\">
\t\t\t\t\t\t";
            }
            // line 162
            yield "\t\t\t\t\t\t<p class=\"task-card-description\">
\t\t\t\t\t\t\t";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 163), "html", null, true);
            yield "
\t\t\t\t\t\t</p>

\t\t\t\t\t\t<div class=\"task-card-meta\">
\t\t\t\t\t\t\t<div class=\"meta-item\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-calendar\"></i>
\t\t\t\t\t\t\t\t<span>";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "postedAt", [], "any", false, false, false, 169), "d/m/Y"), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"meta-item\">
\t\t\t\t\t\t\t\t<span class=\"task-priority priority-high\">High</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"task-card-footer\">
\t\t\t\t\t\t\t<div class=\"task-card-assignee\">

\t\t\t\t\t\t\t\t<div class=\"card-assignee-avatar\">
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 181
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/profiles/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 181), "profilePictureName", [], "any", false, false, false, 181))), "html", null, true);
            yield "\" alt=\"Photo de profil de ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 181), "username", [], "any", false, false, false, 181), "html", null, true);
            yield "\" width=\"40\" height=\"40\" style=\"border-radius:50%; object-fit:cover;\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<div class=\"assignee-name\">
\t\t\t\t\t\t\t\t\t\t";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 186), "username", [], "any", false, false, false, 186), 0, 15)), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"task-status status-in-progress\">
\t\t\t\t\t\t\t\t\t\t<span id=\"status-";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 189), "html", null, true);
            yield "\" class=\"badge
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
            // line 190
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["post"], "isPublished", [], "any", false, false, false, 190)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 191
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        bg-success
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
            } else {
                // line 193
                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        bg-warning
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    ";
            }
            // line 195
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 196
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["post"], "isPublished", [], "any", false, false, false, 196)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 197
                yield "\t\t\t\t\t\t\t\t\t\t\t\tPublished
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 199
                yield "\t\t\t\t\t\t\t\t\t\t\t\tPending
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 201
            yield "\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"task-card-actions\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"card-action-btn\" title=\"Edit\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-pencil\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"card-action-btn\" title=\"View\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-eye\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"card-action-btn text-success\" onclick=\"approvePost(";
            // line 214
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 214), "html", null, true);
            yield ")\" title=\"Approve\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-check2-circle\"></i>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"card-action-btn text-danger\" onclick=\"rejectPost(";
            // line 218
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 218), "html", null, true);
            yield ")\" title=\"Reject\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-x-circle\"></i>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['post'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 228
        yield "\t\t\t</div>
\t\t</div>
\t</main>

\t";
        // line 232
        yield from $this->load("component/footeradmin.html.twig", 232)->unwrap()->yield($context);
        // line 233
        yield "
\t";
        // line 234
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 235
        yield "\t\t <script>
\t\t\t\t\t\t\t\t\tfunction approvePost(postId){
\t\t\t\t\t\t
\t\t\t\t\t\t    fetch(\"/admin/post/approve/\" + postId,{
\t\t\t\t\t\t        method:\"POST\",
\t\t\t\t\t\t        headers:{
\t\t\t\t\t\t            \"X-Requested-With\":\"XMLHttpRequest\"
\t\t\t\t\t\t        }
\t\t\t\t\t\t    })
\t\t\t\t\t\t    .then(res => res.json())
\t\t\t\t\t\t    .then(data =>{
\t\t\t\t\t\t
\t\t\t\t\t\t        if(data.success){
\t\t\t\t\t\t
\t\t\t\t\t\t            let badge = document.getElementById(\"status-\"+postId);
\t\t\t\t\t\t            badge.classList.remove(\"bg-warning\");
\t\t\t\t\t\t            badge.classList.add(\"bg-success\");
\t\t\t\t\t\t            badge.innerText = \"Published\";
\t\t\t\t\t\t\t\t\t        Toastify({
\t\t\t\t\t\t\t\t\t\t\t\ttext: \"Post approuvé avec succès\",
\t\t\t\t\t\t\t\t\t\t\t\tduration: 3000,
\t\t\t\t\t\t\t\t\t\t\t\tgravity: \"top\",
\t\t\t\t\t\t\t\t\t\t\t\tposition: \"right\",
\t\t\t\t\t\t\t\t\t\t\t\tbackgroundColor: \"#28a745\"
\t\t\t\t\t\t\t\t\t\t\t}).showToast();
\t\t\t\t\t\t        }
\t\t\t\t\t\t
\t\t\t\t\t\t    });
\t\t\t\t\t\t
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t\tfunction rejectPost(postId){
\t\t\t\t\t\t
\t\t\t\t\t\t    fetch(\"/admin/post/reject/\" + postId,{
\t\t\t\t\t\t        method:\"POST\",
\t\t\t\t\t\t        headers:{
\t\t\t\t\t\t            \"X-Requested-With\":\"XMLHttpRequest\"
\t\t\t\t\t\t        }
\t\t\t\t\t\t    })
\t\t\t\t\t\t    .then(res => res.json())
\t\t\t\t\t\t    .then(data =>{
\t\t\t\t\t\t
\t\t\t\t\t\t        if(data.success){
\t\t\t\t\t\t
\t\t\t\t\t\t            let badge = document.getElementById(\"status-\"+postId);
\t\t\t\t\t\t            badge.classList.remove(\"bg-success\");
\t\t\t\t\t\t            badge.classList.add(\"bg-danger\");
\t\t\t\t\t\t            badge.innerText = \"Rejected\";
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        Toastify({
\t\t\t\t\t\t\t\t\t\t\t\ttext: \"Post rejeté avec succès\",
\t\t\t\t\t\t\t\t\t\t\t\tduration: 3000,
\t\t\t\t\t\t\t\t\t\t\t\tgravity: \"top\",
\t\t\t\t\t\t\t\t\t\t\t\tposition: \"right\",
\t\t\t\t\t\t\t\t\t\t\t\tbackgroundColor: \"#ff4a1d\"
\t\t\t\t\t\t\t\t\t\t\t}).showToast();
\t\t\t\t\t\t        }
\t\t\t\t\t\t
\t\t\t\t\t\t    });
\t\t\t\t\t\t
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t</script>
\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/post_admin/index.html.twig";
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
        return array (  447 => 235,  424 => 234,  421 => 233,  419 => 232,  413 => 228,  397 => 218,  390 => 214,  375 => 201,  371 => 199,  367 => 197,  365 => 196,  362 => 195,  358 => 193,  354 => 191,  352 => 190,  348 => 189,  342 => 186,  332 => 181,  317 => 169,  308 => 163,  305 => 162,  299 => 160,  297 => 159,  290 => 155,  284 => 152,  275 => 145,  271 => 144,  258 => 133,  224 => 105,  220 => 104,  212 => 99,  206 => 96,  197 => 89,  193 => 88,  126 => 24,  110 => 10,  107 => 9,  105 => 8,  102 => 7,  89 => 6,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'component/baseadmin.html.twig' %}

{% block title %}Helder Camara posts list
{% endblock %}

{% block body %}

\t{% include 'component/headeradmin.html.twig' %}
\t{% include 'component/sidebaradmin.html.twig' %}

\t<main
\t\tclass=\"main\" id=\"main\" role=\"main\">
\t\t<!-- Page Header -->
\t\t<div class=\"page-header\">
\t\t\t<div class=\"page-title\">
\t\t\t\t<h1>Publication</h1>
\t\t\t\t<p>Manage and track all your publication in one place</p>
\t\t\t</div>
\t\t\t<div class=\"page-actions\">
\t\t\t\t<button class=\"btn-secondary\">
\t\t\t\t\t<i class=\"bi bi-filter\"></i>
\t\t\t\t\tFilter
\t\t\t\t</button>
\t\t\t\t<a href=\"{{path('app_admin_post_newpostadmin')}}\" class=\"btn-primary\">
\t\t\t\t\t<i class=\"bi bi-plus\"></i>
\t\t\t\t\tNew Task
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>

\t\t<!-- Tasks Header -->
\t\t<div class=\"task-page tasks-header\">
\t\t\t<div class=\"filter-controls\">
\t\t\t\t<div class=\"view-toggle\">
\t\t\t\t\t<button class=\"view-btn active\" id=\"listViewBtn\">
\t\t\t\t\t\t<i class=\"bi bi-list\"></i>
\t\t\t\t\t\tList
\t\t\t\t\t</button>
\t\t\t\t\t<button class=\"view-btn\" id=\"gridViewBtn\">
\t\t\t\t\t\t<i class=\"bi bi-grid-3x3-gap\"></i>
\t\t\t\t\t\tGrid
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"search-box\">
\t\t\t\t<i class=\"bi bi-search\"></i>
\t\t\t\t<input type=\"text\" id=\"searchInput\" placeholder=\"Search tasks...\">
\t\t\t</div>
\t\t</div>

\t\t<!-- Empty State (Hidden by default) -->
\t\t<div class=\"empty-state\" id=\"emptyState\" style=\"display: none;\">
\t\t\t<i class=\"bi bi-check2-square\"></i>
\t\t\t<h3>No tasks found</h3>
\t\t\t<p>Try adjusting your search or filter to find what you're looking for.</p>
\t\t</div>

\t\t<!-- Tasks List View -->
\t\t<div class=\"tasks-list-view\" id=\"listView\">
\t\t\t<div class=\"tasks-table-container\">
\t\t\t\t<div class=\"tasks-table-header\">
\t\t\t\t\t<h3 class=\"section-title mb-0\">All Tasks</h3>
\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t<span class=\"text-muted\">Showing 12 of 45 tasks</span>
\t\t\t\t\t\t<select class=\"form-select\" style=\"width: auto; background: var(--card); color: var(--text); border-color: var(--border);\">
\t\t\t\t\t\t\t<option>Sort by: Due Date</option>
\t\t\t\t\t\t\t<option>Sort by: Priority</option>
\t\t\t\t\t\t\t<option>Sort by: Status</option>
\t\t\t\t\t\t\t<option>Sort by: Assignee</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<table class=\"tasks-table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th class=\"task-checkbox-cell\"></th>
\t\t\t\t\t\t\t<th>Task</th>
\t\t\t\t\t\t\t<th>Assignee</th>
\t\t\t\t\t\t\t<th>Priority</th>
\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t<th>Due Date</th>
\t\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody
\t\t\t\t\t\tid=\"tasksTableBody\">
\t\t\t\t\t\t<!-- Task 1 -->
\t\t\t\t\t\t{% for post in posts %}
\t\t\t\t\t\t\t<tr class=\"task-row\" data-status=\"in-progress\" data-priority=\"high\">
\t\t\t\t\t\t\t\t<td class=\"task-checkbox-cell\">
\t\t\t\t\t\t\t\t\t<div class=\"task-checkbox\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-check\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"task-title-cell\">
\t\t\t\t\t\t\t\t\t<div class=\"task-title\">{{post.title}}</div>
\t\t\t\t\t\t\t\t\t<div class=\"task-project\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-kanban\"></i>
\t\t\t\t\t\t\t\t\t\t<a href=\"project-details.html\">{{post.content}}</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"task-assignee\">
\t\t\t\t\t\t\t\t\t\t<div class=\"assignee-avatar\" style=\"background: #00B7FF; color: white;\">{{post.user.username|first|upper}}</div>
\t\t\t\t\t\t\t\t\t\t<span>{{post.user.username}}</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<span class=\"task-priority priority-high\">High</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<span class=\"task-status status-in-progress\">In Progress</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"task-due-date\">
\t\t\t\t\t\t\t\t\t<span class=\"due-date\">Dec 5, 2023</span>
\t\t\t\t\t\t\t\t\t<span class=\"days-left\">2 days left</span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"task-actions\">
\t\t\t\t\t\t\t\t\t\t<a href=\"task-create.html\" class=\"task-action-btn\" title=\"Edit\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-pencil\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"task-details.html\" class=\"task-action-btn\" title=\"View\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-eye\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<button class=\"task-action-btn\" title=\"Delete\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-trash\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>

\t\t<!-- Tasks Grid View -->
\t\t<div class=\"tasks-grid-view\" id=\"gridView\">
\t\t\t<div
\t\t\t\tclass=\"tasks-grid\" id=\"tasksGrid\">
\t\t\t\t<!-- Task Card 1 -->
\t\t\t\t{% for post in posts %}
\t\t\t\t\t<div class=\"task-card\" data-status=\"in-progress\" data-priority=\"high\">
\t\t\t\t\t\t<div class=\"task-card-header\">
\t\t\t\t\t\t\t<div class=\"task-card-checkbox\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-check\"></i>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"task-card-title\">
\t\t\t\t\t\t\t\t<h4>{{ post.title }}</h4>
\t\t\t\t\t\t\t\t<div class=\"task-card-project\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-kanban\"></i>
\t\t\t\t\t\t\t\t\t<a href=\"#\">{{ post.user.fonctionScout }}</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% if post.postPictureName %}
\t\t\t\t\t\t\t<img src=\"{{ post.postPictureName ? asset('images/posts/' ~ post.postPictureName) : asset('images/posts/75hc.jpg') }}\" class=\"img-fluid\" style=\"width:100%; height:200px; object-fit:cover; border-radius:10px 10px 0 0;\">
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<p class=\"task-card-description\">
\t\t\t\t\t\t\t{{ post.content }}
\t\t\t\t\t\t</p>

\t\t\t\t\t\t<div class=\"task-card-meta\">
\t\t\t\t\t\t\t<div class=\"meta-item\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-calendar\"></i>
\t\t\t\t\t\t\t\t<span>{{ post.postedAt | date('d/m/Y') }}</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"meta-item\">
\t\t\t\t\t\t\t\t<span class=\"task-priority priority-high\">High</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"task-card-footer\">
\t\t\t\t\t\t\t<div class=\"task-card-assignee\">

\t\t\t\t\t\t\t\t<div class=\"card-assignee-avatar\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/profiles/' ~ post.user.profilePictureName) }}\" alt=\"Photo de profil de {{ post.user.username }}\" width=\"40\" height=\"40\" style=\"border-radius:50%; object-fit:cover;\">
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<div class=\"assignee-name\">
\t\t\t\t\t\t\t\t\t\t{{ post.user.username | slice(0, 15) | upper }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"task-status status-in-progress\">
\t\t\t\t\t\t\t\t\t\t<span id=\"status-{{ post.id }}\" class=\"badge
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    {% if post.isPublished %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        bg-success
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    {% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        bg-warning
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    {% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\">
\t\t\t\t\t\t\t\t\t\t\t{% if post.isPublished %}
\t\t\t\t\t\t\t\t\t\t\t\tPublished
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\tPending
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"task-card-actions\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"card-action-btn\" title=\"Edit\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-pencil\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"card-action-btn\" title=\"View\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-eye\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"card-action-btn text-success\" onclick=\"approvePost({{ post.id }})\" title=\"Approve\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-check2-circle\"></i>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"card-action-btn text-danger\" onclick=\"rejectPost({{ post.id }})\" title=\"Reject\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-x-circle\"></i>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t</main>

\t{% include 'component/footeradmin.html.twig' %}

\t{% block javascripts %}
\t\t <script>
\t\t\t\t\t\t\t\t\tfunction approvePost(postId){
\t\t\t\t\t\t
\t\t\t\t\t\t    fetch(\"/admin/post/approve/\" + postId,{
\t\t\t\t\t\t        method:\"POST\",
\t\t\t\t\t\t        headers:{
\t\t\t\t\t\t            \"X-Requested-With\":\"XMLHttpRequest\"
\t\t\t\t\t\t        }
\t\t\t\t\t\t    })
\t\t\t\t\t\t    .then(res => res.json())
\t\t\t\t\t\t    .then(data =>{
\t\t\t\t\t\t
\t\t\t\t\t\t        if(data.success){
\t\t\t\t\t\t
\t\t\t\t\t\t            let badge = document.getElementById(\"status-\"+postId);
\t\t\t\t\t\t            badge.classList.remove(\"bg-warning\");
\t\t\t\t\t\t            badge.classList.add(\"bg-success\");
\t\t\t\t\t\t            badge.innerText = \"Published\";
\t\t\t\t\t\t\t\t\t        Toastify({
\t\t\t\t\t\t\t\t\t\t\t\ttext: \"Post approuvé avec succès\",
\t\t\t\t\t\t\t\t\t\t\t\tduration: 3000,
\t\t\t\t\t\t\t\t\t\t\t\tgravity: \"top\",
\t\t\t\t\t\t\t\t\t\t\t\tposition: \"right\",
\t\t\t\t\t\t\t\t\t\t\t\tbackgroundColor: \"#28a745\"
\t\t\t\t\t\t\t\t\t\t\t}).showToast();
\t\t\t\t\t\t        }
\t\t\t\t\t\t
\t\t\t\t\t\t    });
\t\t\t\t\t\t
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t\tfunction rejectPost(postId){
\t\t\t\t\t\t
\t\t\t\t\t\t    fetch(\"/admin/post/reject/\" + postId,{
\t\t\t\t\t\t        method:\"POST\",
\t\t\t\t\t\t        headers:{
\t\t\t\t\t\t            \"X-Requested-With\":\"XMLHttpRequest\"
\t\t\t\t\t\t        }
\t\t\t\t\t\t    })
\t\t\t\t\t\t    .then(res => res.json())
\t\t\t\t\t\t    .then(data =>{
\t\t\t\t\t\t
\t\t\t\t\t\t        if(data.success){
\t\t\t\t\t\t
\t\t\t\t\t\t            let badge = document.getElementById(\"status-\"+postId);
\t\t\t\t\t\t            badge.classList.remove(\"bg-success\");
\t\t\t\t\t\t            badge.classList.add(\"bg-danger\");
\t\t\t\t\t\t            badge.innerText = \"Rejected\";
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        Toastify({
\t\t\t\t\t\t\t\t\t\t\t\ttext: \"Post rejeté avec succès\",
\t\t\t\t\t\t\t\t\t\t\t\tduration: 3000,
\t\t\t\t\t\t\t\t\t\t\t\tgravity: \"top\",
\t\t\t\t\t\t\t\t\t\t\t\tposition: \"right\",
\t\t\t\t\t\t\t\t\t\t\t\tbackgroundColor: \"#ff4a1d\"
\t\t\t\t\t\t\t\t\t\t\t}).showToast();
\t\t\t\t\t\t        }
\t\t\t\t\t\t
\t\t\t\t\t\t    });
\t\t\t\t\t\t
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t</script>
\t{% endblock %}
{% endblock %}
", "admin/post_admin/index.html.twig", "C:\\Users\\M_INFO\\Music\\scouts\\templates\\admin\\post_admin\\index.html.twig");
    }
}
