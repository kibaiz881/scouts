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
class __TwigTemplate_0bf32ee93ac783ddebf188b6e04f8132 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/useradmin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/useradmin/index.html.twig"));

        $this->parent = $this->load("component/baseadmin.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        // line 5
        yield "\tUser List
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield "
\t";
        // line 10
        yield from $this->load("component/headeradmin.html.twig", 10)->unwrap()->yield($context);
        // line 11
        yield "\t";
        yield from $this->load("component/sidebaradmin.html.twig", 11)->unwrap()->yield($context);
        // line 12
        yield "\t<!-- ========== MAIN CONTENT ========== -->
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
        // line 22
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
\t\t\t</div>
\t\t\t<div class=\"search-box\">
\t\t\t\t<i class=\"bi bi-search\"></i>
\t\t\t\t<input type=\"text\" id=\"searchInput\" placeholder=\"Search user...\">
\t\t\t</div>
\t\t</div>

\t\t<!-- Team Members Grid -->
\t\t<div class=\"team-grid\" id=\"teamGrid\">
            ";
        // line 45
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["userlist"]) || array_key_exists("userlist", $context) ? $context["userlist"] : (function () { throw new RuntimeError('Variable "userlist" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 46
            yield "            <div class=\"member-card\" data-department=\"management\" data-status=\"online\">

                <div class=\"member-header\">

                    <div class=\"member-avatar\">
                        ";
            // line 51
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "profilePictureName", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 52
                yield "                            <img 
                                src=\"";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/profiles/" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "profilePictureName", [], "any", false, false, false, 53))), "html", null, true);
                yield "\" 
                                alt=\"";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 54), "html", null, true);
                yield "\"
                                class=\"avatar-img\"
                            >
                        ";
            } else {
                // line 58
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "fonctionScout", [], "any", false, false, false, 58), 0, 1), "html", null, true);
                yield "
                        ";
            }
            // line 60
            yield "                    </div>

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

\t\t\t\t\t<div class=\"member-status ";
            // line 77
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isEnable", [], "any", false, false, false, 77)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "status-online";
            } else {
                yield "status-offline";
            }
            yield "\">
\t\t\t\t\t\t<i class=\"bi bi-circle-fill\"></i>
\t\t\t\t\t\t";
            // line 79
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isEnable", [], "any", false, false, false, 79)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 80
                yield "\t\t\t\t\t\t\tOnline
\t\t\t\t\t\t";
            } else {
                // line 82
                yield "\t\t\t\t\t\t\tOffline
\t\t\t\t\t\t";
            }
            // line 84
            yield "\t\t\t\t\t</div>

                </div>

                <div class=\"member-actions\">
                    <a href=\"user-create.html\" class=\"action-btn\">
                        <i class=\"bi bi-pencil\"></i>
                        Edit
                    </a>

                    <a href=\"user-details.html\" class=\"action-btn\">
                        <i class=\"bi bi-eye\"></i>
                        View
                    </a>
                </div>

            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        yield "
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
        // line 131
        yield from $this->load("component/footeradmin.html.twig", 131)->unwrap()->yield($context);
        // line 132
        yield "
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
        return array (  287 => 132,  285 => 131,  254 => 102,  231 => 84,  227 => 82,  223 => 80,  221 => 79,  212 => 77,  205 => 73,  197 => 68,  190 => 64,  186 => 63,  181 => 60,  175 => 58,  168 => 54,  164 => 53,  161 => 52,  159 => 51,  152 => 46,  147 => 45,  122 => 22,  110 => 12,  107 => 11,  105 => 10,  102 => 9,  89 => 8,  77 => 5,  64 => 4,  41 => 1,);
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
\t<!-- ========== MAIN CONTENT ========== -->
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
\t\t\t</div>
\t\t\t<div class=\"search-box\">
\t\t\t\t<i class=\"bi bi-search\"></i>
\t\t\t\t<input type=\"text\" id=\"searchInput\" placeholder=\"Search user...\">
\t\t\t</div>
\t\t</div>

\t\t<!-- Team Members Grid -->
\t\t<div class=\"team-grid\" id=\"teamGrid\">
            {# Example member card - repeat for each user #}
            {% for user in userlist %}
            <div class=\"member-card\" data-department=\"management\" data-status=\"online\">

                <div class=\"member-header\">

                    <div class=\"member-avatar\">
                        {% if user.profilePictureName %}
                            <img 
                                src=\"{{ asset('images/profiles/' ~ user.profilePictureName) }}\" 
                                alt=\"{{ user.username }}\"
                                class=\"avatar-img\"
                            >
                        {% else %}
                            {{ user.fonctionScout|slice(0, 1) }}
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

\t\t\t\t\t<div class=\"member-status {% if user.isEnable %}status-online{% else %}status-offline{% endif %}\">
\t\t\t\t\t\t<i class=\"bi bi-circle-fill\"></i>
\t\t\t\t\t\t{% if user.isEnable %}
\t\t\t\t\t\t\tOnline
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\tOffline
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>

                </div>

                <div class=\"member-actions\">
                    <a href=\"user-create.html\" class=\"action-btn\">
                        <i class=\"bi bi-pencil\"></i>
                        Edit
                    </a>

                    <a href=\"user-details.html\" class=\"action-btn\">
                        <i class=\"bi bi-eye\"></i>
                        View
                    </a>
                </div>

            </div>
            {% endfor %}

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
", "admin/useradmin/index.html.twig", "C:\\Users\\M_INFO\\Music\\scouts\\templates\\admin\\useradmin\\index.html.twig");
    }
}
