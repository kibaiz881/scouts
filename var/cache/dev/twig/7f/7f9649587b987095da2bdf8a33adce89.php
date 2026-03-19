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

/* admin/useradmin/index.html.twig */
class __TwigTemplate_3d1b89dfb1aa331a3a7183a936c9705d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/useradmin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/useradmin/index.html.twig"));

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
        yield "    User List
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
";
        // line 9
        yield from $this->load("component/headeradmin.html.twig", 9)->unwrap()->yield($context);
        // line 10
        yield from $this->load("component/sidebaradmin.html.twig", 10)->unwrap()->yield($context);
        // line 11
        yield "
<main class=\"main\" id=\"main\" role=\"main\">

    <!-- Page Header -->
    <div class=\"page-header\">
        <div class=\"page-title\">
            <h1>User Management</h1>
            <p>Manage your User, roles, and permissions</p>
        </div>

        <div class=\"page-actions\">
            <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_useradmin_newuser");
        yield "\" class=\"btn-primary\">
                <i class=\"bi bi-plus\"></i>
                New User
            </a>
        </div>
    </div>

    <!-- Filters and Search -->
    <div class=\"tasks-header mb-4\">
        <div class=\"filter-controls\">
            <button class=\"filter-btn active\" data-filter=\"all\">All Members</button>
            <button class=\"filter-btn\" data-filter=\"active\">Active</button>
            <button class=\"filter-btn\" data-filter=\"offline\">Offline</button>
        </div>

        <div class=\"search-box\">
            <i class=\"bi bi-search\"></i>
            <input type=\"text\" id=\"searchInput\" placeholder=\"Search user...\">
        </div>
    </div>

    <!-- Team Members Grid -->
    <div class=\"team-grid\" id=\"teamGrid\">

        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["userlist"]) || array_key_exists("userlist", $context) ? $context["userlist"] : (function () { throw new RuntimeError('Variable "userlist" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 47
            yield "        <div class=\"member-card\"
             data-status=\"";
            // line 48
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isEnable", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "active";
            } else {
                yield "offline";
            }
            yield "\">

            <div class=\"member-header\">

                <div class=\"member-avatar\">
                    ";
            // line 53
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "profilePictureName", [], "any", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 54
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/profiles/" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "profilePictureName", [], "any", false, false, false, 54))), "html", null, true);
                yield "\" 
                             alt=\"";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 55), "html", null, true);
                yield "\" 
                             class=\"avatar-img\">
                    ";
            } else {
                // line 58
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 58), 0, 1), "html", null, true);
                yield "
                    ";
            }
            // line 60
            yield "                </div>

                <div class=\"member-info\">
                    <div class=\"member-name\">";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 63), "html", null, true);
            yield "</div>
                    <div class=\"member-role\">";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fonctionScout", [], "any", false, false, false, 64), "html", null, true);
            yield "</div>

                    <div class=\"member-contact\">
                        <i class=\"bi bi-envelope\"></i>
                        <span>";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 68), "html", null, true);
            yield "</span>
                    </div>

                    <div class=\"member-contact\">
                        <i class=\"bi bi-calendar\"></i>
                        <span>";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 73), "M j, Y"), "html", null, true);
            yield "</span>
                    </div>
                </div>

                <div class=\"member-status ";
            // line 77
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isEnable", [], "any", false, false, false, 77)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "status-online";
            } else {
                yield "status-offline";
            }
            yield "\">
                    <i class=\"bi bi-circle-fill\"></i>
                    ";
            // line 79
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isEnable", [], "any", false, false, false, 79)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 80
                yield "                        Online
                    ";
            } else {
                // line 82
                yield "                        Offline
                    ";
            }
            // line 84
            yield "
            </div>
                </div>
\t                    <div class=\"member-actions\">
                        <a href=\"";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_setting_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 88)]), "html", null, true);
            yield "\" class=\"action-btn\">
                            <i class=\"bi bi-pencil\"></i> Edit
                        </a>
                        <a href=\"";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_setting_view", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 91)]), "html", null, true);
            yield "\" class=\"action-btn\">
                            <i class=\"bi bi-eye\"></i> View
                        </a>
                </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        yield "
    </div>

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

</main>

";
        // line 155
        yield from $this->load("component/footeradmin.html.twig", 155)->unwrap()->yield($context);
        // line 156
        yield "
";
        // line 157
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 215
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 157
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

        // line 158
        yield "<script>

document.addEventListener('DOMContentLoaded', function () {

    const filterButtons = document.querySelectorAll('.filter-btn');
    const searchInput = document.getElementById('searchInput');
    const memberCards = document.querySelectorAll('.member-card');

    // FILTER
    filterButtons.forEach(button => {

        button.addEventListener('click', function () {

            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            const filter = this.dataset.filter;

            memberCards.forEach(card => {

                const status = card.dataset.status;

                if (filter === 'all' || status === filter) {
                    card.style.display = \"block\";
                } else {
                    card.style.display = \"none\";
                }

            });

        });

    });

    // SEARCH
    searchInput.addEventListener('input', function () {

        const query = this.value.toLowerCase();

        memberCards.forEach(card => {

            const name = card.querySelector('.member-name').textContent.toLowerCase();

            if (name.includes(query)) {
                card.style.display = \"block\";
            } else {
                card.style.display = \"none\";
            }

        });

    });

});

</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/useradmin/index.html.twig";
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
        return array (  393 => 158,  380 => 157,  368 => 215,  366 => 157,  363 => 156,  361 => 155,  353 => 149,  345 => 143,  338 => 138,  336 => 137,  335 => 136,  331 => 134,  328 => 133,  325 => 131,  315 => 127,  311 => 126,  307 => 125,  304 => 124,  299 => 123,  296 => 121,  288 => 115,  281 => 110,  279 => 109,  278 => 108,  274 => 106,  271 => 105,  262 => 97,  250 => 91,  244 => 88,  238 => 84,  234 => 82,  230 => 80,  228 => 79,  219 => 77,  212 => 73,  204 => 68,  197 => 64,  193 => 63,  188 => 60,  182 => 58,  176 => 55,  171 => 54,  169 => 53,  157 => 48,  154 => 47,  150 => 46,  123 => 22,  110 => 11,  108 => 10,  106 => 9,  103 => 8,  90 => 7,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'component/baseadmin.html.twig' %}

{% block title %}
    User List
{% endblock %}

{% block body %}

{% include 'component/headeradmin.html.twig' %}
{% include 'component/sidebaradmin.html.twig' %}

<main class=\"main\" id=\"main\" role=\"main\">

    <!-- Page Header -->
    <div class=\"page-header\">
        <div class=\"page-title\">
            <h1>User Management</h1>
            <p>Manage your User, roles, and permissions</p>
        </div>

        <div class=\"page-actions\">
            <a href=\"{{ path('app_admin_useradmin_newuser') }}\" class=\"btn-primary\">
                <i class=\"bi bi-plus\"></i>
                New User
            </a>
        </div>
    </div>

    <!-- Filters and Search -->
    <div class=\"tasks-header mb-4\">
        <div class=\"filter-controls\">
            <button class=\"filter-btn active\" data-filter=\"all\">All Members</button>
            <button class=\"filter-btn\" data-filter=\"active\">Active</button>
            <button class=\"filter-btn\" data-filter=\"offline\">Offline</button>
        </div>

        <div class=\"search-box\">
            <i class=\"bi bi-search\"></i>
            <input type=\"text\" id=\"searchInput\" placeholder=\"Search user...\">
        </div>
    </div>

    <!-- Team Members Grid -->
    <div class=\"team-grid\" id=\"teamGrid\">

        {% for user in userlist %}
        <div class=\"member-card\"
             data-status=\"{% if user.isEnable %}active{% else %}offline{% endif %}\">

            <div class=\"member-header\">

                <div class=\"member-avatar\">
                    {% if user.profilePictureName %}
                        <img src=\"{{ asset('images/profiles/' ~ user.profilePictureName) }}\" 
                             alt=\"{{ user.username }}\" 
                             class=\"avatar-img\">
                    {% else %}
                        {{ user.username|slice(0,1) }}
                    {% endif %}
                </div>

                <div class=\"member-info\">
                    <div class=\"member-name\">{{ user.username }}</div>
                    <div class=\"member-role\">{{ user.fonctionScout }}</div>

                    <div class=\"member-contact\">
                        <i class=\"bi bi-envelope\"></i>
                        <span>{{ user.email }}</span>
                    </div>

                    <div class=\"member-contact\">
                        <i class=\"bi bi-calendar\"></i>
                        <span>{{ user.createdAt|date('M j, Y') }}</span>
                    </div>
                </div>

                <div class=\"member-status {% if user.isEnable %}status-online{% else %}status-offline{% endif %}\">
                    <i class=\"bi bi-circle-fill\"></i>
                    {% if user.isEnable %}
                        Online
                    {% else %}
                        Offline
                    {% endif %}

            </div>
                </div>
\t                    <div class=\"member-actions\">
                        <a href=\"{{path('admin_setting_edit', {'id': user.id})}}\" class=\"action-btn\">
                            <i class=\"bi bi-pencil\"></i> Edit
                        </a>
                        <a href=\"{{path('admin_setting_view', {'id': user.id})}}\" class=\"action-btn\">
                            <i class=\"bi bi-eye\"></i> View
                        </a>
                </div>
        </div>
        {% endfor %}

    </div>

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

</main>

{% include 'component/footeradmin.html.twig' %}

{% block javascripts %}
<script>

document.addEventListener('DOMContentLoaded', function () {

    const filterButtons = document.querySelectorAll('.filter-btn');
    const searchInput = document.getElementById('searchInput');
    const memberCards = document.querySelectorAll('.member-card');

    // FILTER
    filterButtons.forEach(button => {

        button.addEventListener('click', function () {

            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            const filter = this.dataset.filter;

            memberCards.forEach(card => {

                const status = card.dataset.status;

                if (filter === 'all' || status === filter) {
                    card.style.display = \"block\";
                } else {
                    card.style.display = \"none\";
                }

            });

        });

    });

    // SEARCH
    searchInput.addEventListener('input', function () {

        const query = this.value.toLowerCase();

        memberCards.forEach(card => {

            const name = card.querySelector('.member-name').textContent.toLowerCase();

            if (name.includes(query)) {
                card.style.display = \"block\";
            } else {
                card.style.display = \"none\";
            }

        });

    });

});

</script>
{% endblock %}

{% endblock %}
", "admin/useradmin/index.html.twig", "C:\\Users\\M_INFO\\Music\\scouts\\templates\\admin\\useradmin\\index.html.twig");
    }
}
