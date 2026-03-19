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

/* admin/settingadmin/list.html.twig */
class __TwigTemplate_2dee50fcb66e847fb75591ae10908ac9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/settingadmin/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/settingadmin/list.html.twig"));

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
        yield "\tUser List
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
        yield "
\t";
        // line 9
        yield from $this->load("component/headeradmin.html.twig", 9)->unwrap()->yield($context);
        // line 10
        yield "\t";
        yield from $this->load("component/sidebaradmin.html.twig", 10)->unwrap()->yield($context);
        // line 11
        yield "
\t<main
\t\tclass=\"main\" id=\"main\" role=\"main\">

\t\t<!-- Page Header -->
\t\t<div class=\"page-header\">
\t\t\t<div class=\"page-title\">
\t\t\t\t<h1>User Management</h1>
\t\t\t\t<p>Manage your User, roles, and permissions</p>
\t\t\t</div>

\t\t\t<div class=\"page-actions\">
\t\t\t\t<a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_useradmin_newuser");
        yield "\" class=\"btn-primary\">
\t\t\t\t\t<i class=\"bi bi-plus\"></i>
\t\t\t\t\tNew User
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>

\t\t<!-- Filters and Search -->
\t\t<div class=\"tasks-header mb-4\">
\t\t\t<div class=\"filter-controls\">
\t\t\t\t<button class=\"filter-btn active\" data-filter=\"all\">All Members</button>
\t\t\t\t<button class=\"filter-btn\" data-filter=\"active\">Active</button>
\t\t\t\t<button class=\"filter-btn\" data-filter=\"offline\">Offline</button>
\t\t\t</div>

\t\t\t<div class=\"search-box\">
\t\t\t\t<i class=\"bi bi-search\"></i>
\t\t\t\t<input type=\"text\" id=\"searchInput\" placeholder=\"Search user...\">
\t\t\t</div>
\t\t</div>

\t\t<!-- Team Members Grid -->
\t\t<div class=\"team-grid\" id=\"teamGrid\">

\t\t\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["userlist"]) || array_key_exists("userlist", $context) ? $context["userlist"] : (function () { throw new RuntimeError('Variable "userlist" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 48
            yield "\t\t\t\t<div class=\"member-card\" data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 48), "html", null, true);
            yield "\" data-status=\"";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isEnable", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "active";
            } else {
                yield "offline";
            }
            yield "\">

\t\t\t\t\t<div class=\"member-header\">

\t\t\t\t\t\t<div class=\"member-avatar\">
\t\t\t\t\t\t\t";
            // line 53
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "profilePictureName", [], "any", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 54
                yield "\t\t\t\t\t\t\t\t<img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/profiles/" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "profilePictureName", [], "any", false, false, false, 54))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 54), "html", null, true);
                yield "\" class=\"avatar-img\">
\t\t\t\t\t\t\t";
            } else {
                // line 56
                yield "\t\t\t\t\t\t\t\t";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 56), 0, 1), "html", null, true);
                yield "
\t\t\t\t\t\t\t";
            }
            // line 58
            yield "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"member-info\">
\t\t\t\t\t\t\t<div class=\"member-name\">";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 61), "html", null, true);
            yield "</div>
\t\t\t\t\t\t\t<div class=\"member-role\">";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fonctionScout", [], "any", false, false, false, 62), "html", null, true);
            yield "</div>

\t\t\t\t\t\t\t<div class=\"member-contact\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-envelope\"></i>
\t\t\t\t\t\t\t\t<span>";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 66), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"member-contact\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-calendar\"></i>
\t\t\t\t\t\t\t\t<span>";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 71), "M j, Y"), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"member-status ";
            // line 75
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isEnable", [], "any", false, false, false, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "status-online";
            } else {
                yield "status-offline";
            }
            yield "\">
\t\t\t\t\t\t\t<i class=\"bi bi-circle-fill\"></i>
\t\t\t\t\t\t\t";
            // line 77
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isEnable", [], "any", false, false, false, 77)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 78
                yield "\t\t\t\t\t\t\t\tOnline
\t\t\t\t\t\t\t";
            } else {
                // line 80
                yield "\t\t\t\t\t\t\t\tOffline
\t\t\t\t\t\t\t";
            }
            // line 82
            yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"member-actions\">
\t\t\t\t\t\t<a href=\"";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_setting_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 86)]), "html", null, true);
            yield "\" class=\"action-btn mb-2\">
\t\t\t\t\t\t\t<i class=\"bi bi-pencil\"></i>
\t\t\t\t\t\t\tEdit
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-danger btn-xxl delete-btn\" onclick=\"deleteUser(";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 90), "html", null, true);
            yield ")\">
\t\t\t\t\t\t\t<i class=\"bi bi-trash\"></i>
\t\t\t\t\t\t\tDelete
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        yield "
\t\t</div>

\t\t<!-- Pagination -->
\t\t<nav>
\t\t\t<ul class=\"pagination justify-content-center\">

\t\t\t\t";
        // line 105
        yield "\t\t\t\t";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["userlist"]) || array_key_exists("userlist", $context) ? $context["userlist"] : (function () { throw new RuntimeError('Variable "userlist" does not exist.', 105, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 105) > 1)) {
            // line 106
            yield "\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t<a class=\"page-link\"
\t\t\t\t\t\thref=\"";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "request", [], "any", false, false, false, 108), "attributes", [], "any", false, false, false, 108), "get", ["_route"], "method", false, false, false, 108), ["page" => (CoreExtension::getAttribute($this->env, $this->source,             // line 109
(isset($context["userlist"]) || array_key_exists("userlist", $context) ? $context["userlist"] : (function () { throw new RuntimeError('Variable "userlist" does not exist.', 109, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 109) - 1)]), "html", null, true);
            // line 110
            yield "\">
\t\t\t\t\t\t\t<i class=\"bi bi-chevron-left\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
        } else {
            // line 115
            yield "\t\t\t\t\t<li class=\"page-item disabled\">
\t\t\t\t\t\t<span class=\"page-link\">
\t\t\t\t\t\t\t<i class=\"bi bi-chevron-left\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 121
        yield "
\t\t\t\t";
        // line 123
        yield "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, (isset($context["userlist"]) || array_key_exists("userlist", $context) ? $context["userlist"] : (function () { throw new RuntimeError('Variable "userlist" does not exist.', 123, $this->source); })()), "pageCount", [], "any", false, false, false, 123)));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 124
            yield "\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t<a class=\"page-link ";
            // line 125
            yield ((($context["page"] == CoreExtension::getAttribute($this->env, $this->source, (isset($context["userlist"]) || array_key_exists("userlist", $context) ? $context["userlist"] : (function () { throw new RuntimeError('Variable "userlist" does not exist.', 125, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 125))) ? ("active") : (""));
            yield "\"
\t\t\t\t\t\thref=\"";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 126, $this->source); })()), "request", [], "any", false, false, false, 126), "attributes", [], "any", false, false, false, 126), "get", ["_route"], "method", false, false, false, 126), ["page" => $context["page"]]), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
            yield "
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        yield "
\t\t\t\t";
        // line 133
        yield "\t\t\t\t";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["userlist"]) || array_key_exists("userlist", $context) ? $context["userlist"] : (function () { throw new RuntimeError('Variable "userlist" does not exist.', 133, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 133) < CoreExtension::getAttribute($this->env, $this->source, (isset($context["userlist"]) || array_key_exists("userlist", $context) ? $context["userlist"] : (function () { throw new RuntimeError('Variable "userlist" does not exist.', 133, $this->source); })()), "pageCount", [], "any", false, false, false, 133))) {
            // line 134
            yield "\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t<a class=\"page-link\"
\t\t\t\t\t\thref=\"";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 136, $this->source); })()), "request", [], "any", false, false, false, 136), "attributes", [], "any", false, false, false, 136), "get", ["_route"], "method", false, false, false, 136), ["page" => (CoreExtension::getAttribute($this->env, $this->source,             // line 137
(isset($context["userlist"]) || array_key_exists("userlist", $context) ? $context["userlist"] : (function () { throw new RuntimeError('Variable "userlist" does not exist.', 137, $this->source); })()), "currentPageNumber", [], "any", false, false, false, 137) + 1)]), "html", null, true);
            // line 138
            yield "\">
\t\t\t\t\t\t\t<i class=\"bi bi-chevron-right\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
        } else {
            // line 143
            yield "\t\t\t\t\t<li class=\"page-item disabled\">
\t\t\t\t\t\t<span class=\"page-link\">
\t\t\t\t\t\t\t<i class=\"bi bi-chevron-right\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 149
        yield "
\t\t\t</ul>
\t\t</nav>



\t</main>

\t";
        // line 157
        yield from $this->load("component/footeradmin.html.twig", 157)->unwrap()->yield($context);
        // line 158
        yield "
\t";
        // line 159
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 269
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 159
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

        // line 160
        yield "\t\t <script>
\t\t
\t\tdocument.addEventListener('DOMContentLoaded', function () {
\t\t
\t\t    const filterButtons = document.querySelectorAll('.filter-btn');
\t\t    const searchInput = document.getElementById('searchInput');
\t\t    const memberCards = document.querySelectorAll('.member-card');
\t\t    //delete
\t\t    const deleteButtons = document.querySelectorAll('.delete-btn');
\t\t    // FILTER
\t\t    filterButtons.forEach(button => {
\t\t
\t\t        button.addEventListener('click', function () {
\t\t
\t\t            filterButtons.forEach(btn => btn.classList.remove('active'));
\t\t            this.classList.add('active');
\t\t
\t\t            const filter = this.dataset.filter;
\t\t
\t\t            memberCards.forEach(card => {
\t\t
\t\t                const status = card.dataset.status;
\t\t
\t\t                if (filter === 'all' || status === filter) {
\t\t                    card.style.display = \"block\";
\t\t                } else {
\t\t                    card.style.display = \"none\";
\t\t                }
\t\t
\t\t            });
\t\t
\t\t        });
\t\t
\t\t    });
\t\t
\t\t    // SEARCH
\t\t    searchInput.addEventListener('input', function () {
\t\t
\t\t        const query = this.value.toLowerCase();
\t\t
\t\t        memberCards.forEach(card => {
\t\t
\t\t            const name = card.querySelector('.member-name').textContent.toLowerCase();
\t\t
\t\t            if (name.includes(query)) {
\t\t                card.style.display = \"block\";
\t\t            } else {
\t\t                card.style.display = \"none\";
\t\t            }
\t\t
\t\t        });
\t\t
\t\t    });
\t\t
\t\t    // DELETE
\t\t
\t\t});

        \t\t    function deleteUser(userId) {
\t\t
\t\t        if (!confirm(\"Are you sure you want to delete this user?\")) {
\t\t            return;
\t\t        }
\t\t
\t\t        fetch(\"/admin/useradmin/delete/\" + userId, {
\t\t            method: \"DELETE\",
\t\t            headers: {
\t\t                \"X-Requested-With\": \"XMLHttpRequest\",
\t\t                \"Content-Type\": \"application/json\"
\t\t            }
\t\t        })
\t\t        .then(response => {
\t\t            if (!response.ok) {
\t\t                throw new Error(\"Delete failed\");
\t\t            }
\t\t            return response.json();
\t\t        })
\t\t        .then(data => {
\t\t
\t\t            if (data.success) {
\t\t
\t\t                const card = document.querySelector('.member-card[data-id=\"' + userId + '\"]');
\t\t
\t\t                if (card) {
\t\t                    card.remove();
\t\t                }
\t\t
                    Toastify({
                        text: \"User deleted successfully\",
                        duration: 3000,
                        gravity: \"top\",
                        position: \"right\",
                        backgroundColor: \"#28a745\"
                        }).showToast();
\t\t
\t\t            } else {
\t\t                alert(\"Error deleting user\");
\t\t            }
\t\t
\t\t        })
\t\t        .catch(error => {
\t\t            console.error(error);
\t\t            alert(\"Server error\");
\t\t        });
\t\t
\t\t    }
\t\t
\t\t</script>
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
        return "admin/settingadmin/list.html.twig";
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
        return array (  396 => 160,  383 => 159,  371 => 269,  369 => 159,  366 => 158,  364 => 157,  354 => 149,  346 => 143,  339 => 138,  337 => 137,  336 => 136,  332 => 134,  329 => 133,  326 => 131,  316 => 127,  312 => 126,  308 => 125,  305 => 124,  300 => 123,  297 => 121,  289 => 115,  282 => 110,  280 => 109,  279 => 108,  275 => 106,  272 => 105,  263 => 97,  250 => 90,  243 => 86,  237 => 82,  233 => 80,  229 => 78,  227 => 77,  218 => 75,  211 => 71,  203 => 66,  196 => 62,  192 => 61,  187 => 58,  181 => 56,  173 => 54,  171 => 53,  156 => 48,  152 => 47,  125 => 23,  111 => 11,  108 => 10,  106 => 9,  103 => 8,  90 => 7,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'component/baseadmin.html.twig' %}

{% block title %}
\tUser List
{% endblock %}

{% block body %}

\t{% include 'component/headeradmin.html.twig' %}
\t{% include 'component/sidebaradmin.html.twig' %}

\t<main
\t\tclass=\"main\" id=\"main\" role=\"main\">

\t\t<!-- Page Header -->
\t\t<div class=\"page-header\">
\t\t\t<div class=\"page-title\">
\t\t\t\t<h1>User Management</h1>
\t\t\t\t<p>Manage your User, roles, and permissions</p>
\t\t\t</div>

\t\t\t<div class=\"page-actions\">
\t\t\t\t<a href=\"{{ path('app_admin_useradmin_newuser') }}\" class=\"btn-primary\">
\t\t\t\t\t<i class=\"bi bi-plus\"></i>
\t\t\t\t\tNew User
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>

\t\t<!-- Filters and Search -->
\t\t<div class=\"tasks-header mb-4\">
\t\t\t<div class=\"filter-controls\">
\t\t\t\t<button class=\"filter-btn active\" data-filter=\"all\">All Members</button>
\t\t\t\t<button class=\"filter-btn\" data-filter=\"active\">Active</button>
\t\t\t\t<button class=\"filter-btn\" data-filter=\"offline\">Offline</button>
\t\t\t</div>

\t\t\t<div class=\"search-box\">
\t\t\t\t<i class=\"bi bi-search\"></i>
\t\t\t\t<input type=\"text\" id=\"searchInput\" placeholder=\"Search user...\">
\t\t\t</div>
\t\t</div>

\t\t<!-- Team Members Grid -->
\t\t<div class=\"team-grid\" id=\"teamGrid\">

\t\t\t{% for user in userlist %}
\t\t\t\t<div class=\"member-card\" data-id=\"{{ user.id }}\" data-status=\"{% if user.isEnable %}active{% else %}offline{% endif %}\">

\t\t\t\t\t<div class=\"member-header\">

\t\t\t\t\t\t<div class=\"member-avatar\">
\t\t\t\t\t\t\t{% if user.profilePictureName %}
\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/profiles/' ~ user.profilePictureName) }}\" alt=\"{{ user.username }}\" class=\"avatar-img\">
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t{{ user.username|slice(0,1) }}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"member-info\">
\t\t\t\t\t\t\t<div class=\"member-name\">{{ user.username }}</div>
\t\t\t\t\t\t\t<div class=\"member-role\">{{ user.fonctionScout }}</div>

\t\t\t\t\t\t\t<div class=\"member-contact\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-envelope\"></i>
\t\t\t\t\t\t\t\t<span>{{ user.email }}</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"member-contact\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-calendar\"></i>
\t\t\t\t\t\t\t\t<span>{{ user.createdAt|date('M j, Y') }}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"member-status {% if user.isEnable %}status-online{% else %}status-offline{% endif %}\">
\t\t\t\t\t\t\t<i class=\"bi bi-circle-fill\"></i>
\t\t\t\t\t\t\t{% if user.isEnable %}
\t\t\t\t\t\t\t\tOnline
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\tOffline
\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"member-actions\">
\t\t\t\t\t\t<a href=\"{{path('admin_setting_edit', {'id': user.id})}}\" class=\"action-btn mb-2\">
\t\t\t\t\t\t\t<i class=\"bi bi-pencil\"></i>
\t\t\t\t\t\t\tEdit
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-danger btn-xxl delete-btn\" onclick=\"deleteUser({{ user.id }})\">
\t\t\t\t\t\t\t<i class=\"bi bi-trash\"></i>
\t\t\t\t\t\t\tDelete
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}

\t\t</div>

\t\t<!-- Pagination -->
\t\t<nav>
\t\t\t<ul class=\"pagination justify-content-center\">

\t\t\t\t{# PREVIOUS #}
\t\t\t\t{% if userlist.currentPageNumber > 1 %}
\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t<a class=\"page-link\"
\t\t\t\t\t\thref=\"{{ path(app.request.attributes.get('_route'), {
\t\t\t\t\t\t\t'page': userlist.currentPageNumber - 1
\t\t\t\t\t\t}) }}\">
\t\t\t\t\t\t\t<i class=\"bi bi-chevron-left\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t{% else %}
\t\t\t\t\t<li class=\"page-item disabled\">
\t\t\t\t\t\t<span class=\"page-link\">
\t\t\t\t\t\t\t<i class=\"bi bi-chevron-left\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</li>
\t\t\t\t{% endif %}

\t\t\t\t{# PAGES #}
\t\t\t\t{% for page in 1..userlist.pageCount %}
\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t<a class=\"page-link {{ page == userlist.currentPageNumber ? 'active' : '' }}\"
\t\t\t\t\t\thref=\"{{ path(app.request.attributes.get('_route'), {'page': page}) }}\">
\t\t\t\t\t\t\t{{ page }}
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t{% endfor %}

\t\t\t\t{# NEXT #}
\t\t\t\t{% if userlist.currentPageNumber < userlist.pageCount %}
\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t<a class=\"page-link\"
\t\t\t\t\t\thref=\"{{ path(app.request.attributes.get('_route'), {
\t\t\t\t\t\t\t'page': userlist.currentPageNumber + 1
\t\t\t\t\t\t}) }}\">
\t\t\t\t\t\t\t<i class=\"bi bi-chevron-right\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t{% else %}
\t\t\t\t\t<li class=\"page-item disabled\">
\t\t\t\t\t\t<span class=\"page-link\">
\t\t\t\t\t\t\t<i class=\"bi bi-chevron-right\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</li>
\t\t\t\t{% endif %}

\t\t\t</ul>
\t\t</nav>



\t</main>

\t{% include 'component/footeradmin.html.twig' %}

\t{% block javascripts %}
\t\t <script>
\t\t
\t\tdocument.addEventListener('DOMContentLoaded', function () {
\t\t
\t\t    const filterButtons = document.querySelectorAll('.filter-btn');
\t\t    const searchInput = document.getElementById('searchInput');
\t\t    const memberCards = document.querySelectorAll('.member-card');
\t\t    //delete
\t\t    const deleteButtons = document.querySelectorAll('.delete-btn');
\t\t    // FILTER
\t\t    filterButtons.forEach(button => {
\t\t
\t\t        button.addEventListener('click', function () {
\t\t
\t\t            filterButtons.forEach(btn => btn.classList.remove('active'));
\t\t            this.classList.add('active');
\t\t
\t\t            const filter = this.dataset.filter;
\t\t
\t\t            memberCards.forEach(card => {
\t\t
\t\t                const status = card.dataset.status;
\t\t
\t\t                if (filter === 'all' || status === filter) {
\t\t                    card.style.display = \"block\";
\t\t                } else {
\t\t                    card.style.display = \"none\";
\t\t                }
\t\t
\t\t            });
\t\t
\t\t        });
\t\t
\t\t    });
\t\t
\t\t    // SEARCH
\t\t    searchInput.addEventListener('input', function () {
\t\t
\t\t        const query = this.value.toLowerCase();
\t\t
\t\t        memberCards.forEach(card => {
\t\t
\t\t            const name = card.querySelector('.member-name').textContent.toLowerCase();
\t\t
\t\t            if (name.includes(query)) {
\t\t                card.style.display = \"block\";
\t\t            } else {
\t\t                card.style.display = \"none\";
\t\t            }
\t\t
\t\t        });
\t\t
\t\t    });
\t\t
\t\t    // DELETE
\t\t
\t\t});

        \t\t    function deleteUser(userId) {
\t\t
\t\t        if (!confirm(\"Are you sure you want to delete this user?\")) {
\t\t            return;
\t\t        }
\t\t
\t\t        fetch(\"/admin/useradmin/delete/\" + userId, {
\t\t            method: \"DELETE\",
\t\t            headers: {
\t\t                \"X-Requested-With\": \"XMLHttpRequest\",
\t\t                \"Content-Type\": \"application/json\"
\t\t            }
\t\t        })
\t\t        .then(response => {
\t\t            if (!response.ok) {
\t\t                throw new Error(\"Delete failed\");
\t\t            }
\t\t            return response.json();
\t\t        })
\t\t        .then(data => {
\t\t
\t\t            if (data.success) {
\t\t
\t\t                const card = document.querySelector('.member-card[data-id=\"' + userId + '\"]');
\t\t
\t\t                if (card) {
\t\t                    card.remove();
\t\t                }
\t\t
                    Toastify({
                        text: \"User deleted successfully\",
                        duration: 3000,
                        gravity: \"top\",
                        position: \"right\",
                        backgroundColor: \"#28a745\"
                        }).showToast();
\t\t
\t\t            } else {
\t\t                alert(\"Error deleting user\");
\t\t            }
\t\t
\t\t        })
\t\t        .catch(error => {
\t\t            console.error(error);
\t\t            alert(\"Server error\");
\t\t        });
\t\t
\t\t    }
\t\t
\t\t</script>
\t{% endblock %}

{% endblock %}
", "admin/settingadmin/list.html.twig", "C:\\Users\\M_INFO\\Music\\scouts\\templates\\admin\\settingadmin\\list.html.twig");
    }
}
