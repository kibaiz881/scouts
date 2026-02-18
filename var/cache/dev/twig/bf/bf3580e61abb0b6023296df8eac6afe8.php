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

/* admin/settingadmin/index.html.twig */
class __TwigTemplate_a7d925ced85aaa11499670e25ea8278f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/settingadmin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/settingadmin/index.html.twig"));

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
        yield "\tSettingadmin
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
        yield "
\t";
        // line 10
        yield from $this->load("component/sidebaradmin.html.twig", 10)->unwrap()->yield($context);
        // line 11
        yield "\t<!-- ========== MAIN CONTENT ========== -->
\t<main
\t\tclass=\"main\" id=\"main\" role=\"main\">
\t\t<!-- Page Header -->
\t\t<div class=\"page-header\">
\t\t\t<div class=\"page-title\">
\t\t\t\t<h1>User Profile</h1>
\t\t\t\t<p>View and manage user details, assignments, and performance</p>
\t\t\t</div>
\t\t\t<div class=\"page-actions\">
\t\t\t\t<a href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_setting_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21)]), "html", null, true);
        yield "\" class=\"btn-secondary\">
\t\t\t\t\t<i class=\"bi bi-pencil\"></i>Edit Profile
\t\t\t\t</a>
\t\t\t\t<a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_setting_list");
        yield "\" class=\"btn-primary\">
\t\t\t\t\t<i class=\"bi bi-arrow-left\"></i>
\t\t\t\t\tBack to user</a>
\t\t\t</div>
\t\t</div>


\t\t<!-- User Header -->
\t\t<div class=\"user-header\">
\t\t\t<div class=\"user-header-background\"></div>
\t\t\t<div class=\"user-header-content\">
\t\t\t\t<div class=\"user-avatar\" id=\"userAvatar\">
\t\t\t\t\t";
        // line 36
        if ((($tmp = (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 36, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "\t\t\t\t\t\t\t<img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/profiles/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 37, $this->source); })()), "profilePictureName", [], "any", false, false, false, 37))), "html", null, true);
            yield "\" alt=\"Photo de profil de ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "username", [], "any", false, false, false, 37), "html", null, true);
            yield "\" class=\"avatar-img\" width=\"50\" height=\"50\" loading=\"lazy\" >
\t\t\t\t\t";
        }
        // line 39
        yield "\t\t\t\t</div>
\t\t\t\t<div class=\"user-info\">
\t\t\t\t\t<div class=\"user-name\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 41, $this->source); })()), "username", [], "any", false, false, false, 41), "html", null, true);
        yield "</div>
\t\t\t\t\t<div class=\"user-title\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 42, $this->source); })()), "fonctionScout", [], "any", false, false, false, 42), "html", null, true);
        yield "</div>
\t\t\t\t\t<div class=\"user-contact\">
\t\t\t\t\t\t<div class=\"contact-item\">
\t\t\t\t\t\t\t<i class=\"bi bi-envelope\"></i>
\t\t\t\t\t\t\t<span>";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 46, $this->source); })()), "email", [], "any", false, false, false, 46), "html", null, true);
        yield "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"contact-item\">
\t\t\t\t\t\t\t<i class=\"bi bi-telephone\"></i>
\t\t\t\t\t\t\t<span>";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 50, $this->source); })()), "phone", [], "any", false, false, false, 50), "html", null, true);
        yield "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"contact-item\">
\t\t\t\t\t\t\t<i class=\"bi bi-building\"></i>
\t\t\t\t\t\t\t<span>Scout ID: HC/AMI/-00";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, false, 54), "html", null, true);
        yield "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-flex align-items-center gap-3\">
\t\t\t\t\t\t<span class=\"user-status\">
\t\t\t\t\t\t\t<i class=\"bi bi-circle-fill\"></i>
\t\t\t\t\t\t\tOnline
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"text-muted\">Joined: ";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 62, $this->source); })()), "createdAt", [], "any", false, false, false, 62), "F j, Y"), "html", null, true);
        yield "</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- User Stats -->
\t\t<div class=\"user-stats\">
\t\t\t<div class=\"stat-card\">
\t\t\t\t<div class=\"stat-header\">
\t\t\t\t\t<div class=\"stat-icon\">
\t\t\t\t\t\t<i class=\"bi bi-check-circle\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-muted\">This Week</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"stat-content\">
\t\t\t\t\t<h3>24</h3>
\t\t\t\t\t<div class=\"stat-label\">Tasks Completed</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"stat-card\">
\t\t\t\t<div class=\"stat-header\">
\t\t\t\t\t<div class=\"stat-icon\">
\t\t\t\t\t\t<i class=\"bi bi-clock\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-muted\">Total Hours</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"stat-content\">
\t\t\t\t\t<h3>142</h3>
\t\t\t\t\t<div class=\"stat-label\">Hours Worked</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"stat-card\">
\t\t\t\t<div class=\"stat-header\">
\t\t\t\t\t<div class=\"stat-icon\">
\t\t\t\t\t\t<i class=\"bi bi-star\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-muted\">Rating</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"stat-content\">
\t\t\t\t\t<h3>4.8</h3>
\t\t\t\t\t<div class=\"stat-label\">Performance Score</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"stat-card\">
\t\t\t\t<div class=\"stat-header\">
\t\t\t\t\t<div class=\"stat-icon\">
\t\t\t\t\t\t<i class=\"bi bi-people\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-muted\">Teams</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"stat-content\">
\t\t\t\t\t<h3>3</h3>
\t\t\t\t\t<div class=\"stat-label\">Active Teams</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t\t<div class=\"project-tabs user-details-tabs\">
\t\t\t<div class=\"tabs-header\">
\t\t\t\t<button class=\"tab-btn active\" data-tab=\"overview\">Overview</button>
\t\t\t\t<button class=\"tab-btn\" data-tab=\"departments\">Departments</button>
\t\t\t\t<button class=\"tab-btn\" data-tab=\"skills\">Skills & Expertise</button>
\t\t\t\t<button class=\"tab-btn\" data-tab=\"activity\">Activity</button>
\t\t\t\t<button class=\"tab-btn\" data-tab=\"tasks\">Tasks</button>
\t\t\t\t<button class=\"tab-btn\" data-tab=\"performance\">Performance</button>
\t\t\t\t<button class=\"tab-btn\" data-tab=\"reports\">Reports</button>
\t\t\t</div>

\t\t\t<!-- Overview Tab -->
\t\t\t<div class=\"tab-content active\" id=\"overviewTab\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t<div class=\"content-card\">
\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-person-badge\"></i>
\t\t\t\t\t\t\t\t\tAbout</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"bio-content\" id=\"bioContent\">
\t\t\t\t\t\t\t\tSenior UI/UX Designer with 8+ years of experience creating intuitive and beautiful
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                digital products. Currently leading the Design Team at Panelry while contributing
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                to cross-functional product initiatives. Passionate about user-centered design, design
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                systems, and mentoring junior designers.

\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t<strong>Key Responsibilities:</strong>
\t\t\t\t\t\t\t\t\t<ul class=\"mt-2\">
\t\t\t\t\t\t\t\t\t\t<li>Lead UI/UX design for web and mobile applications</li>
\t\t\t\t\t\t\t\t\t\t<li>Manage design team and coordinate with product/engineering</li>
\t\t\t\t\t\t\t\t\t\t<li>Develop and maintain design systems</li>
\t\t\t\t\t\t\t\t\t\t<li>Conduct user research and usability testing</li>
\t\t\t\t\t\t\t\t\t\t<li>Mentor junior designers and interns</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"content-card\">
\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-clock-history\"></i>
\t\t\t\t\t\t\t\t\tRecent Activity</h3>
\t\t\t\t\t\t\t\t<div class=\"card-actions\">
\t\t\t\t\t\t\t\t\t<button class=\"btn-primary\" onclick=\"viewAllActivity()\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"activity-list\">
\t\t\t\t\t\t\t\t<div class=\"activity-item\">
\t\t\t\t\t\t\t\t\t<div class=\"activity-icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-check-circle\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"activity-text\">
\t\t\t\t\t\t\t\t\t\t\tCompleted task
\t\t\t\t\t\t\t\t\t\t\t<strong>\"Redesign Dashboard Analytics Panel\"</strong>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"activity-meta\">
\t\t\t\t\t\t\t\t\t\t\t<span>Today, 10:30 AM</span>
\t\t\t\t\t\t\t\t\t\t\t<span>Project: Dashboard Redesign</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"activity-item\">
\t\t\t\t\t\t\t\t\t<div class=\"activity-icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-chat\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"activity-text\">
\t\t\t\t\t\t\t\t\t\t\tAdded comment on
\t\t\t\t\t\t\t\t\t\t\t<strong>\"Mobile Banking App Design\"</strong>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"activity-meta\">
\t\t\t\t\t\t\t\t\t\t\t<span>Yesterday, 3:45 PM</span>
\t\t\t\t\t\t\t\t\t\t\t<span>Project: Mobile Banking</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"activity-item\">
\t\t\t\t\t\t\t\t\t<div class=\"activity-icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-file-earmark\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"activity-text\">
\t\t\t\t\t\t\t\t\t\t\tUploaded wireframes for
\t\t\t\t\t\t\t\t\t\t\t<strong>\"E-commerce Checkout Flow\"</strong>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"activity-meta\">
\t\t\t\t\t\t\t\t\t\t\t<span>Dec 11, 2025</span>
\t\t\t\t\t\t\t\t\t\t\t<span>Project: E-commerce Design</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t<div class=\"content-card\">
\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-info-circle\"></i>
\t\t\t\t\t\t\t\t\tQuick Info</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"quick-info\">
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<div class=\"fs-12 text-muted\">Access Level</div>
\t\t\t\t\t\t\t\t\t<div class=\"fw-600\">Manager</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<div class=\"fs-12 text-muted\">Experience Level</div>
\t\t\t\t\t\t\t\t\t<div class=\"fw-600\">Senior (8+ years)</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<div class=\"fs-12 text-muted\">Reporting To</div>
\t\t\t\t\t\t\t\t\t<div class=\"fw-600\">Lisa Rodriguez (Product Director)</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<div class=\"fs-12 text-muted\">Location</div>
\t\t\t\t\t\t\t\t\t<div class=\"fw-600\">San Francisco, CA</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<div class=\"fs-12 text-muted\">Working Hours</div>
\t\t\t\t\t\t\t\t\t<div class=\"fw-600\">9:00 AM - 6:00 PM PST</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<div class=\"fs-12 text-muted\">Last Active</div>
\t\t\t\t\t\t\t\t\t<div class=\"fw-600\">2 minutes ago</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"content-card\">
\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-lightning\"></i>
\t\t\t\t\t\t\t\t\tQuick Actions</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"quick-actions\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"action-btn\" onclick=\"assignTask()\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-plus-circle\"></i>
\t\t\t\t\t\t\t\t\t<span>Assign Task</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"action-btn\" onclick=\"scheduleMeeting()\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-calendar-plus\"></i>
\t\t\t\t\t\t\t\t\t<span>Schedule Meeting</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"action-btn\" onclick=\"generateReport()\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-file-earmark-text\"></i>
\t\t\t\t\t\t\t\t\t<span>Generate Report</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"action-btn\" onclick=\"viewDocuments()\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-folder\"></i>
\t\t\t\t\t\t\t\t\t<span>View Documents</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Department Tab -->
\t\t\t<div class=\"tab-content\" id=\"departmentsTab\">
\t\t\t\t<div class=\"content-card\">
\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t\t<i class=\"bi bi-building\"></i>
\t\t\t\t\t\t\tDepartment Assignments</h3>
\t\t\t\t\t\t<div class=\"card-actions\">
\t\t\t\t\t\t\t<button class=\"btn-outline\" onclick=\"addDepartmentAssignment()\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-plus\"></i>
\t\t\t\t\t\t\t\tAdd Department
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"departments-grid\">
\t\t\t\t\t\t<div class=\"department-card\">
\t\t\t\t\t\t\t<div class=\"department-header\">
\t\t\t\t\t\t\t\t<div class=\"department-icon\" style=\"background: var(--accent);\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-palette\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"department-info\">
\t\t\t\t\t\t\t\t\t<div class=\"department-name\">Design Team</div>
\t\t\t\t\t\t\t\t\t<div class=\"department-role\">Team Lead</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"department-details\">
\t\t\t\t\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t\t\t\t\t<span class=\"detail-label\">Team Size:</span>
\t\t\t\t\t\t\t\t\t<span class=\"detail-value\">8 members</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t\t\t\t\t<span class=\"detail-label\">Joined:</span>
\t\t\t\t\t\t\t\t\t<span class=\"detail-value\">Jan 15, 2024</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t\t\t\t\t<span class=\"detail-label\">Projects:</span>
\t\t\t\t\t\t\t\t\t<span class=\"detail-value\">12 active</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t\t\t\t\t<span class=\"detail-label\">Status:</span>
\t\t\t\t\t\t\t\t\t<span class=\"detail-value\">Active</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"department-card\">
\t\t\t\t\t\t\t<div class=\"department-header\">
\t\t\t\t\t\t\t\t<div class=\"department-icon\" style=\"background: var(--info);\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-code-slash\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"department-info\">
\t\t\t\t\t\t\t\t\t<div class=\"department-name\">Development</div>
\t\t\t\t\t\t\t\t\t<div class=\"department-role\">Contributor</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"department-details\">
\t\t\t\t\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t\t\t\t\t<span class=\"detail-label\">Team Size:</span>
\t\t\t\t\t\t\t\t\t<span class=\"detail-value\">15 members</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t\t\t\t\t<span class=\"detail-label\">Joined:</span>
\t\t\t\t\t\t\t\t\t<span class=\"detail-value\">Mar 10, 2024</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t\t\t\t\t<span class=\"detail-label\">Projects:</span>
\t\t\t\t\t\t\t\t\t<span class=\"detail-value\">6 active</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t\t\t\t\t<span class=\"detail-label\">Status:</span>
\t\t\t\t\t\t\t\t\t<span class=\"detail-value\">Active</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"department-card\">
\t\t\t\t\t\t\t<div class=\"department-header\">
\t\t\t\t\t\t\t\t<div class=\"department-icon\" style=\"background: var(--warning);\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-bullseye\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"department-info\">
\t\t\t\t\t\t\t\t\t<div class=\"department-name\">Product Management</div>
\t\t\t\t\t\t\t\t\t<div class=\"department-role\">Advisor</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"department-details\">
\t\t\t\t\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t\t\t\t\t<span class=\"detail-label\">Team Size:</span>
\t\t\t\t\t\t\t\t\t<span class=\"detail-value\">5 members</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t\t\t\t\t<span class=\"detail-label\">Joined:</span>
\t\t\t\t\t\t\t\t\t<span class=\"detail-value\">Jun 5, 2024</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t\t\t\t\t<span class=\"detail-label\">Projects:</span>
\t\t\t\t\t\t\t\t\t<span class=\"detail-value\">8 active</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t\t\t\t\t<span class=\"detail-label\">Status:</span>
\t\t\t\t\t\t\t\t\t<span class=\"detail-value\">Active</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"content-card\">
\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t\t<i class=\"bi bi-shield-check\"></i>
\t\t\t\t\t\t\tDepartment Permissions</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"permissions-grid\">
\t\t\t\t\t\t<div class=\"permission-item\">
\t\t\t\t\t\t\t<div class=\"permission-info\">
\t\t\t\t\t\t\t\t<div class=\"permission-name\">Create Design Tasks</div>
\t\t\t\t\t\t\t\t<div class=\"permission-description\">Design Team</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" checked disabled>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"permission-item\">
\t\t\t\t\t\t\t<div class=\"permission-info\">
\t\t\t\t\t\t\t\t<div class=\"permission-name\">Review Code</div>
\t\t\t\t\t\t\t\t<div class=\"permission-description\">Development</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" checked disabled>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"permission-item\">
\t\t\t\t\t\t\t<div class=\"permission-info\">
\t\t\t\t\t\t\t\t<div class=\"permission-name\">Approve Product Decisions</div>
\t\t\t\t\t\t\t\t<div class=\"permission-description\">Product Management</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" disabled>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"permission-item\">
\t\t\t\t\t\t\t<div class=\"permission-info\">
\t\t\t\t\t\t\t\t<div class=\"permission-name\">Manage Team Members</div>
\t\t\t\t\t\t\t\t<div class=\"permission-description\">Design Team</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" checked disabled>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- skills Tab -->
\t\t\t<div class=\"tab-content skills-tab\" id=\"skillsTab\">
\t\t\t\t<div class=\"content-card\">
\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t\t<i class=\"bi bi-lightning\"></i>
\t\t\t\t\t\t\tSkills & Expertise</h3>
\t\t\t\t\t\t<div class=\"card-actions\">
\t\t\t\t\t\t\t<button class=\"btn-outline\" onclick=\"addSkill()\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-plus\"></i>
\t\t\t\t\t\t\t\tAdd Skill
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"skills-container\">
\t\t\t\t\t\t<span class=\"skill-tag\">UI Design
\t\t\t\t\t\t\t<span class=\"skill-level\">Expert</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"skill-tag\">User Research
\t\t\t\t\t\t\t<span class=\"skill-level\">Advanced</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"skill-tag\">Prototyping
\t\t\t\t\t\t\t<span class=\"skill-level\">Expert</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"skill-tag\">Figma
\t\t\t\t\t\t\t<span class=\"skill-level\">Expert</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"skill-tag\">Adobe Creative Suite
\t\t\t\t\t\t\t<span class=\"skill-level\">Advanced</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"skill-tag\">Design Systems
\t\t\t\t\t\t\t<span class=\"skill-level\">Expert</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"skill-tag\">HTML/CSS
\t\t\t\t\t\t\t<span class=\"skill-level\">Intermediate</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"skill-tag\">JavaScript
\t\t\t\t\t\t\t<span class=\"skill-level\">Intermediate</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"skill-tag\">React
\t\t\t\t\t\t\t<span class=\"skill-level\">Basic</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"skill-tag\">Product Strategy
\t\t\t\t\t\t\t<span class=\"skill-level\">Advanced</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"skill-tag\">Team Leadership
\t\t\t\t\t\t\t<span class=\"skill-level\">Expert</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"skill-tag\">Agile Methodology
\t\t\t\t\t\t\t<span class=\"skill-level\">Advanced</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"content-card\">
\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t\t<i class=\"bi bi-briefcase\"></i>
\t\t\t\t\t\t\tWork Experience</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"timeline\">
\t\t\t\t\t\t<div class=\"timeline-item\">
\t\t\t\t\t\t\t<div class=\"timeline-dot\"></div>
\t\t\t\t\t\t\t<div class=\"timeline-content\">
\t\t\t\t\t\t\t\t<div class=\"timeline-date\">2024 - Present</div>
\t\t\t\t\t\t\t\t<div class=\"timeline-title\">Senior UI/UX Designer & Project Lead</div>
\t\t\t\t\t\t\t\t<div class=\"timeline-description\">Panelry Inc. • Leading design team, managing
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    projects, and contributing to product strategy.</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"timeline-item\">
\t\t\t\t\t\t\t<div class=\"timeline-dot\"></div>
\t\t\t\t\t\t\t<div class=\"timeline-content\">
\t\t\t\t\t\t\t\t<div class=\"timeline-date\">2021 - 2024</div>
\t\t\t\t\t\t\t\t<div class=\"timeline-title\">Senior Product Designer</div>
\t\t\t\t\t\t\t\t<div class=\"timeline-description\">TechSolutions Corp. • Designed enterprise SaaS
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    products and established design systems.</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"timeline-item\">
\t\t\t\t\t\t\t<div class=\"timeline-dot\"></div>
\t\t\t\t\t\t\t<div class=\"timeline-content\">
\t\t\t\t\t\t\t\t<div class=\"timeline-date\">2019 - 2021</div>
\t\t\t\t\t\t\t\t<div class=\"timeline-title\">UI/UX Designer</div>
\t\t\t\t\t\t\t\t<div class=\"timeline-description\">CreativeMinds Agency • Worked with various clients on
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    web and mobile applications.</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"timeline-item\">
\t\t\t\t\t\t\t<div class=\"timeline-dot\"></div>
\t\t\t\t\t\t\t<div class=\"timeline-content\">
\t\t\t\t\t\t\t\t<div class=\"timeline-date\">2017 - 2019</div>
\t\t\t\t\t\t\t\t<div class=\"timeline-title\">Junior Designer</div>
\t\t\t\t\t\t\t\t<div class=\"timeline-description\">DigitalWorks Studio • Started career focusing on web
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    design and user interfaces.</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"content-card\">
\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t\t<i class=\"bi bi-tools\"></i>
\t\t\t\t\t\t\tTools & Technologies</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"skills-container\">
\t\t\t\t\t\t<span class=\"skill-tag\">Figma</span>
\t\t\t\t\t\t<span class=\"skill-tag\">Adobe XD</span>
\t\t\t\t\t\t<span class=\"skill-tag\">Sketch</span>
\t\t\t\t\t\t<span class=\"skill-tag\">Photoshop</span>
\t\t\t\t\t\t<span class=\"skill-tag\">Illustrator</span>
\t\t\t\t\t\t<span class=\"skill-tag\">InVision</span>
\t\t\t\t\t\t<span class=\"skill-tag\">Zeplin</span>
\t\t\t\t\t\t<span class=\"skill-tag\">Framer</span>
\t\t\t\t\t\t<span class=\"skill-tag\">VS Code</span>
\t\t\t\t\t\t<span class=\"skill-tag\">Git</span>
\t\t\t\t\t\t<span class=\"skill-tag\">Jira</span>
\t\t\t\t\t\t<span class=\"skill-tag\">Confluence</span>
\t\t\t\t\t\t<span class=\"skill-tag\">Notion</span>
\t\t\t\t\t\t<span class=\"skill-tag\">Slack</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Activity Tab -->
\t\t\t<div class=\"tab-content\" id=\"activityTab\">
\t\t\t\t<div class=\"content-card\">
\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t\t<i class=\"bi bi-activity\"></i>
\t\t\t\t\t\t\tRecent Activity</h3>
\t\t\t\t\t\t<div class=\"card-actions\">
\t\t\t\t\t\t\t<select class=\"form-select\" style=\"width: auto;\" id=\"activityFilter\">
\t\t\t\t\t\t\t\t<option value=\"all\">All Activities</option>
\t\t\t\t\t\t\t\t<option value=\"tasks\">Tasks</option>
\t\t\t\t\t\t\t\t<option value=\"comments\">Comments</option>
\t\t\t\t\t\t\t\t<option value=\"uploads\">Uploads</option>
\t\t\t\t\t\t\t\t<option value=\"meetings\">Meetings</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"activity-list\" id=\"activityList\">
\t\t\t\t\t\t<div class=\"activity-item\">
\t\t\t\t\t\t\t<div class=\"activity-icon\" style=\"background: rgba(10, NaN, NaN, 0.1); color: var(--success);\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-check-circle\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t\t<div class=\"activity-text\">Completed task 'Redesign Dashboard Analytics Panel'</div>
\t\t\t\t\t\t\t\t<div class=\"activity-meta\">
\t\t\t\t\t\t\t\t\t<span>Today, 10:30 AM</span>
\t\t\t\t\t\t\t\t\t<span>Project: Dashboard Redesign</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"activity-item\">
\t\t\t\t\t\t\t<div class=\"activity-icon\" style=\"background: rgba(10, NaN, NaN, 0.1); color: var(--info);\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-chat\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t\t<div class=\"activity-text\">Added comment on 'Mobile Banking App Design'</div>
\t\t\t\t\t\t\t\t<div class=\"activity-meta\">
\t\t\t\t\t\t\t\t\t<span>Yesterday, 3:45 PM</span>
\t\t\t\t\t\t\t\t\t<span>Project: Mobile Banking</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"activity-item\">
\t\t\t\t\t\t\t<div class=\"activity-icon\" style=\"background: rgba(10, NaN, NaN, 0.1); color: var(--warning);\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-file-earmark\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t\t<div class=\"activity-text\">Uploaded wireframes for 'E-commerce Checkout Flow'</div>
\t\t\t\t\t\t\t\t<div class=\"activity-meta\">
\t\t\t\t\t\t\t\t\t<span>Dec 11, 2025</span>
\t\t\t\t\t\t\t\t\t<span>Project: E-commerce Design</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"activity-item\">
\t\t\t\t\t\t\t<div class=\"activity-icon\" style=\"background: rgba(10, NaN, NaN, 0.1); color: var(--purple);\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-people\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t\t<div class=\"activity-text\">Attended weekly design review meeting</div>
\t\t\t\t\t\t\t\t<div class=\"activity-meta\">
\t\t\t\t\t\t\t\t\t<span>Dec 10, 2025</span>
\t\t\t\t\t\t\t\t\t<span>Project: Design Team</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"activity-item\">
\t\t\t\t\t\t\t<div class=\"activity-icon\" style=\"background: rgba(10, NaN, NaN, 0.1); color: var(--success);\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-check-circle\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t\t<div class=\"activity-text\">Started work on 'Admin Panel Redesign'</div>
\t\t\t\t\t\t\t\t<div class=\"activity-meta\">
\t\t\t\t\t\t\t\t\t<span>Dec 9, 2025</span>
\t\t\t\t\t\t\t\t\t<span>Project: Panelry Dashboard</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"activity-item\">
\t\t\t\t\t\t\t<div class=\"activity-icon\" style=\"background: rgba(10, NaN, NaN, 0.1); color: var(--info);\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-chat\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t\t<div class=\"activity-text\">Provided feedback on 'User Testing Results'</div>
\t\t\t\t\t\t\t\t<div class=\"activity-meta\">
\t\t\t\t\t\t\t\t\t<span>Dec 8, 2025</span>
\t\t\t\t\t\t\t\t\t<span>Project: User Research</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"activity-item\">
\t\t\t\t\t\t\t<div class=\"activity-icon\" style=\"background: rgba(10, NaN, NaN, 0.1); color: var(--warning);\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-file-earmark\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t\t<div class=\"activity-text\">Uploaded design system documentation</div>
\t\t\t\t\t\t\t\t<div class=\"activity-meta\">
\t\t\t\t\t\t\t\t\t<span>Dec 7, 2025</span>
\t\t\t\t\t\t\t\t\t<span>Project: Design System</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- tasks Tab -->
\t\t\t<div class=\"tab-content user-details-task\" id=\"tasksTab\">
\t\t\t\t<div class=\"content-card\">
\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t\t<i class=\"bi bi-check-circle\"></i>
\t\t\t\t\t\t\tCurrent Tasks</h3>
\t\t\t\t\t\t<div class=\"card-actions\">
\t\t\t\t\t\t\t<button class=\"btn-outline\" onclick=\"assignNewTask()\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-plus\"></i>
\t\t\t\t\t\t\t\tAssign Task
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tasks-list\" id=\"tasksList\">
\t\t\t\t\t\t<div class=\"task-item\">
\t\t\t\t\t\t\t<div class=\"task-checkbox checked\" onclick=\"toggleTask(1)\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-check\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"task-info\">
\t\t\t\t\t\t\t\t<div class=\"task-title\">Design login page for mobile app</div>
\t\t\t\t\t\t\t\t<div class=\"task-meta\">
\t\t\t\t\t\t\t\t\t<span>Mobile Banking</span>
\t\t\t\t\t\t\t\t\t<span>• Due: Today</span>
\t\t\t\t\t\t\t\t\t<span class=\"task-priority priority-high\">High</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-actions\">
\t\t\t\t\t\t\t\t<button class=\"btn-primary\" onclick=\"viewTask(1)\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-eye\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"task-item\">
\t\t\t\t\t\t\t<div class=\"task-checkbox \" onclick=\"toggleTask(2)\"></div>
\t\t\t\t\t\t\t<div class=\"task-info\">
\t\t\t\t\t\t\t\t<div class=\"task-title\">Review user feedback from testing</div>
\t\t\t\t\t\t\t\t<div class=\"task-meta\">
\t\t\t\t\t\t\t\t\t<span>User Research</span>
\t\t\t\t\t\t\t\t\t<span>• Due: Tomorrow</span>
\t\t\t\t\t\t\t\t\t<span class=\"task-priority priority-medium\">Medium</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-actions\">
\t\t\t\t\t\t\t\t<button class=\"btn-primary\" onclick=\"viewTask(2)\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-eye\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"task-item\">
\t\t\t\t\t\t\t<div class=\"task-checkbox \" onclick=\"toggleTask(3)\"></div>
\t\t\t\t\t\t\t<div class=\"task-info\">
\t\t\t\t\t\t\t\t<div class=\"task-title\">Update design system components</div>
\t\t\t\t\t\t\t\t<div class=\"task-meta\">
\t\t\t\t\t\t\t\t\t<span>Design System</span>
\t\t\t\t\t\t\t\t\t<span>• Due: Dec 20</span>
\t\t\t\t\t\t\t\t\t<span class=\"task-priority priority-medium\">Medium</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-actions\">
\t\t\t\t\t\t\t\t<button class=\"btn-primary\" onclick=\"viewTask(3)\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-eye\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"task-item\">
\t\t\t\t\t\t\t<div class=\"task-checkbox \" onclick=\"toggleTask(4)\"></div>
\t\t\t\t\t\t\t<div class=\"task-info\">
\t\t\t\t\t\t\t\t<div class=\"task-title\">Prepare presentation for stakeholders</div>
\t\t\t\t\t\t\t\t<div class=\"task-meta\">
\t\t\t\t\t\t\t\t\t<span>Dashboard Redesign</span>
\t\t\t\t\t\t\t\t\t<span>• Due: Dec 18</span>
\t\t\t\t\t\t\t\t\t<span class=\"task-priority priority-high\">High</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-actions\">
\t\t\t\t\t\t\t\t<button class=\"btn-primary\" onclick=\"viewTask(4)\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-eye\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"task-item\">
\t\t\t\t\t\t\t<div class=\"task-checkbox \" onclick=\"toggleTask(5)\"></div>
\t\t\t\t\t\t\t<div class=\"task-info\">
\t\t\t\t\t\t\t\t<div class=\"task-title\">Mentor junior designer on prototyping</div>
\t\t\t\t\t\t\t\t<div class=\"task-meta\">
\t\t\t\t\t\t\t\t\t<span>Design Team</span>
\t\t\t\t\t\t\t\t\t<span>• Due: Dec 22</span>
\t\t\t\t\t\t\t\t\t<span class=\"task-priority priority-low\">Low</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-actions\">
\t\t\t\t\t\t\t\t<button class=\"btn-primary\" onclick=\"viewTask(5)\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-eye\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Task Statistics -->
\t\t\t\t<div class=\"content-card\">
\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t\t<i class=\"bi bi-bar-chart\"></i>
\t\t\t\t\t\t\tTask Statistics</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"metrics-grid\">
\t\t\t\t\t\t<div class=\"metric-card\">
\t\t\t\t\t\t\t<div class=\"metric-value\">24</div>
\t\t\t\t\t\t\t<div class=\"metric-label\">Completed This Week</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"metric-card\">
\t\t\t\t\t\t\t<div class=\"metric-value\">8</div>
\t\t\t\t\t\t\t<div class=\"metric-label\">In Progress</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"metric-card\">
\t\t\t\t\t\t\t<div class=\"metric-value\">3</div>
\t\t\t\t\t\t\t<div class=\"metric-label\">Overdue</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"metric-card\">
\t\t\t\t\t\t\t<div class=\"metric-value\">92%</div>
\t\t\t\t\t\t\t<div class=\"metric-label\">On-time Completion</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- performance Tab -->
\t\t\t<div class=\"tab-content\" id=\"performanceTab\">
\t\t\t\t<div class=\"content-card\">
\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t\t<i class=\"bi bi-graph-up\"></i>
\t\t\t\t\t\t\tPerformance Metrics</h3>
\t\t\t\t\t\t<div class=\"card-actions\">
\t\t\t\t\t\t\t<select class=\"form-select\" style=\"width: auto;\" id=\"timeRange\">
\t\t\t\t\t\t\t\t<option value=\"week\">This Week</option>
\t\t\t\t\t\t\t\t<option value=\"month\" selected>This Month</option>
\t\t\t\t\t\t\t\t<option value=\"quarter\">This Quarter</option>
\t\t\t\t\t\t\t\t<option value=\"year\">This Year</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"metrics-grid\">
\t\t\t\t\t\t<div class=\"metric-card\">
\t\t\t\t\t\t\t<div class=\"metric-value\">4.8</div>
\t\t\t\t\t\t\t<div class=\"metric-label\">Quality Score</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"metric-card\">
\t\t\t\t\t\t\t<div class=\"metric-value\">95%</div>
\t\t\t\t\t\t\t<div class=\"metric-label\">Task Completion</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"metric-card\">
\t\t\t\t\t\t\t<div class=\"metric-value\">4.9</div>
\t\t\t\t\t\t\t<div class=\"metric-label\">Team Collaboration</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"metric-card\">
\t\t\t\t\t\t\t<div class=\"metric-value\">4.7</div>
\t\t\t\t\t\t\t<div class=\"metric-label\">Initiative</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Workload Chart -->
\t\t\t\t<div class=\"content-card\">
\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t\t<i class=\"bi bi-calendar-check\"></i>
\t\t\t\t\t\t\tCurrent Workload</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"workload-chart\">
\t\t\t\t\t\t<div class=\"workload-bars\">
\t\t\t\t\t\t\t<div class=\"workload-bar\">
\t\t\t\t\t\t\t\t<div class=\"workload-fill\" style=\"width: 60%\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"workload-bar\">
\t\t\t\t\t\t\t\t<div class=\"workload-fill\" style=\"width: 75%\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"workload-bar\">
\t\t\t\t\t\t\t\t<div class=\"workload-fill\" style=\"width: 40%\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"workload-bar\">
\t\t\t\t\t\t\t\t<div class=\"workload-fill\" style=\"width: 85%\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"workload-labels\">
\t\t\t\t\t\t\t<span>Design Team</span>
\t\t\t\t\t\t\t<span>Development</span>
\t\t\t\t\t\t\t<span>Product</span>
\t\t\t\t\t\t\t<span>Admin</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- reports Tab -->
\t\t\t<div class=\"tab-content\" id=\"reportsTab\">
\t\t\t\t<div class=\"reports-grid\">
\t\t\t\t\t<div class=\"report-card\">
\t\t\t\t\t\t<div class=\"report-icon\">
\t\t\t\t\t\t\t<i class=\"bi bi-file-text\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"report-name\">Monthly Performance Report</div>
\t\t\t\t\t\t<div class=\"report-meta\">
\t\t\t\t\t\t\t<span>December 2025</span>
\t\t\t\t\t\t\t<span>PDF • 2.4 MB</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button class=\"btn-outline w-100\" onclick=\"downloadReport('monthly')\">
\t\t\t\t\t\t\t<i class=\"bi bi-download\"></i>
\t\t\t\t\t\t\tDownload
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"report-card\">
\t\t\t\t\t\t<div class=\"report-icon\">
\t\t\t\t\t\t\t<i class=\"bi bi-bar-chart\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"report-name\">Task Completion Analysis</div>
\t\t\t\t\t\t<div class=\"report-meta\">
\t\t\t\t\t\t\t<span>Q4 2025</span>
\t\t\t\t\t\t\t<span>PDF • 1.8 MB</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button class=\"btn-outline w-100\" onclick=\"downloadReport('task-analysis')\">
\t\t\t\t\t\t\t<i class=\"bi bi-download\"></i>
\t\t\t\t\t\t\tDownload
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"report-card\">
\t\t\t\t\t\t<div class=\"report-icon\">
\t\t\t\t\t\t\t<i class=\"bi bi-people\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"report-name\">Team Contribution Report</div>
\t\t\t\t\t\t<div class=\"report-meta\">
\t\t\t\t\t\t\t<span>November 2025</span>
\t\t\t\t\t\t\t<span>PDF • 3.2 MB</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button class=\"btn-outline w-100\" onclick=\"downloadReport('team-contribution')\">
\t\t\t\t\t\t\t<i class=\"bi bi-download\"></i>
\t\t\t\t\t\t\tDownload
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"report-card\">
\t\t\t\t\t\t<div class=\"report-icon\">
\t\t\t\t\t\t\t<i class=\"bi bi-clock-history\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"report-name\">Time Tracking Summary</div>
\t\t\t\t\t\t<div class=\"report-meta\">
\t\t\t\t\t\t\t<span>December 2025</span>
\t\t\t\t\t\t\t<span>Excel • 1.5 MB</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button class=\"btn-outline w-100\" onclick=\"downloadReport('time-tracking')\">
\t\t\t\t\t\t\t<i class=\"bi bi-download\"></i>
\t\t\t\t\t\t\tDownload
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</main>

\t";
        // line 931
        yield from $this->load("component/footeradmin.html.twig", 931)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/settingadmin/index.html.twig";
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
        return array (  1065 => 931,  193 => 62,  182 => 54,  175 => 50,  168 => 46,  161 => 42,  157 => 41,  153 => 39,  145 => 37,  143 => 36,  128 => 24,  122 => 21,  110 => 11,  108 => 10,  105 => 9,  102 => 8,  89 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'component/baseadmin.html.twig' %}

{% block title %}
\tSettingadmin
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
\t\t\t\t<h1>User Profile</h1>
\t\t\t\t<p>View and manage user details, assignments, and performance</p>
\t\t\t</div>
\t\t\t<div class=\"page-actions\">
\t\t\t\t<a href=\"{{ path('admin_setting_edit', {'id': currentUser.id}) }}\" class=\"btn-secondary\">
\t\t\t\t\t<i class=\"bi bi-pencil\"></i>Edit Profile
\t\t\t\t</a>
\t\t\t\t<a href=\"{{ path('admin_setting_list') }}\" class=\"btn-primary\">
\t\t\t\t\t<i class=\"bi bi-arrow-left\"></i>
\t\t\t\t\tBack to user</a>
\t\t\t</div>
\t\t</div>


\t\t<!-- User Header -->
\t\t<div class=\"user-header\">
\t\t\t<div class=\"user-header-background\"></div>
\t\t\t<div class=\"user-header-content\">
\t\t\t\t<div class=\"user-avatar\" id=\"userAvatar\">
\t\t\t\t\t{% if currentUser %}
\t\t\t\t\t\t\t<img src=\"{{ asset('images/profiles/' ~ currentUser.profilePictureName) }}\" alt=\"Photo de profil de {{ app.user.username }}\" class=\"avatar-img\" width=\"50\" height=\"50\" loading=\"lazy\" >
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t\t<div class=\"user-info\">
\t\t\t\t\t<div class=\"user-name\">{{ currentUser.username }}</div>
\t\t\t\t\t<div class=\"user-title\">{{ currentUser.fonctionScout }}</div>
\t\t\t\t\t<div class=\"user-contact\">
\t\t\t\t\t\t<div class=\"contact-item\">
\t\t\t\t\t\t\t<i class=\"bi bi-envelope\"></i>
\t\t\t\t\t\t\t<span>{{ currentUser.email }}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"contact-item\">
\t\t\t\t\t\t\t<i class=\"bi bi-telephone\"></i>
\t\t\t\t\t\t\t<span>{{ currentUser.phone }}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"contact-item\">
\t\t\t\t\t\t\t<i class=\"bi bi-building\"></i>
\t\t\t\t\t\t\t<span>Scout ID: HC/AMI/-00{{ currentUser.id }}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-flex align-items-center gap-3\">
\t\t\t\t\t\t<span class=\"user-status\">
\t\t\t\t\t\t\t<i class=\"bi bi-circle-fill\"></i>
\t\t\t\t\t\t\tOnline
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"text-muted\">Joined: {{ currentUser.createdAt|date('F j, Y') }}</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- User Stats -->
\t\t<div class=\"user-stats\">
\t\t\t<div class=\"stat-card\">
\t\t\t\t<div class=\"stat-header\">
\t\t\t\t\t<div class=\"stat-icon\">
\t\t\t\t\t\t<i class=\"bi bi-check-circle\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-muted\">This Week</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"stat-content\">
\t\t\t\t\t<h3>24</h3>
\t\t\t\t\t<div class=\"stat-label\">Tasks Completed</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"stat-card\">
\t\t\t\t<div class=\"stat-header\">
\t\t\t\t\t<div class=\"stat-icon\">
\t\t\t\t\t\t<i class=\"bi bi-clock\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-muted\">Total Hours</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"stat-content\">
\t\t\t\t\t<h3>142</h3>
\t\t\t\t\t<div class=\"stat-label\">Hours Worked</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"stat-card\">
\t\t\t\t<div class=\"stat-header\">
\t\t\t\t\t<div class=\"stat-icon\">
\t\t\t\t\t\t<i class=\"bi bi-star\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-muted\">Rating</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"stat-content\">
\t\t\t\t\t<h3>4.8</h3>
\t\t\t\t\t<div class=\"stat-label\">Performance Score</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"stat-card\">
\t\t\t\t<div class=\"stat-header\">
\t\t\t\t\t<div class=\"stat-icon\">
\t\t\t\t\t\t<i class=\"bi bi-people\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-muted\">Teams</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"stat-content\">
\t\t\t\t\t<h3>3</h3>
\t\t\t\t\t<div class=\"stat-label\">Active Teams</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t\t<div class=\"project-tabs user-details-tabs\">
\t\t\t<div class=\"tabs-header\">
\t\t\t\t<button class=\"tab-btn active\" data-tab=\"overview\">Overview</button>
\t\t\t\t<button class=\"tab-btn\" data-tab=\"departments\">Departments</button>
\t\t\t\t<button class=\"tab-btn\" data-tab=\"skills\">Skills & Expertise</button>
\t\t\t\t<button class=\"tab-btn\" data-tab=\"activity\">Activity</button>
\t\t\t\t<button class=\"tab-btn\" data-tab=\"tasks\">Tasks</button>
\t\t\t\t<button class=\"tab-btn\" data-tab=\"performance\">Performance</button>
\t\t\t\t<button class=\"tab-btn\" data-tab=\"reports\">Reports</button>
\t\t\t</div>

\t\t\t<!-- Overview Tab -->
\t\t\t<div class=\"tab-content active\" id=\"overviewTab\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t<div class=\"content-card\">
\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-person-badge\"></i>
\t\t\t\t\t\t\t\t\tAbout</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"bio-content\" id=\"bioContent\">
\t\t\t\t\t\t\t\tSenior UI/UX Designer with 8+ years of experience creating intuitive and beautiful
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                digital products. Currently leading the Design Team at Panelry while contributing
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                to cross-functional product initiatives. Passionate about user-centered design, design
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                systems, and mentoring junior designers.

\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t<strong>Key Responsibilities:</strong>
\t\t\t\t\t\t\t\t\t<ul class=\"mt-2\">
\t\t\t\t\t\t\t\t\t\t<li>Lead UI/UX design for web and mobile applications</li>
\t\t\t\t\t\t\t\t\t\t<li>Manage design team and coordinate with product/engineering</li>
\t\t\t\t\t\t\t\t\t\t<li>Develop and maintain design systems</li>
\t\t\t\t\t\t\t\t\t\t<li>Conduct user research and usability testing</li>
\t\t\t\t\t\t\t\t\t\t<li>Mentor junior designers and interns</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"content-card\">
\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-clock-history\"></i>
\t\t\t\t\t\t\t\t\tRecent Activity</h3>
\t\t\t\t\t\t\t\t<div class=\"card-actions\">
\t\t\t\t\t\t\t\t\t<button class=\"btn-primary\" onclick=\"viewAllActivity()\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"activity-list\">
\t\t\t\t\t\t\t\t<div class=\"activity-item\">
\t\t\t\t\t\t\t\t\t<div class=\"activity-icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-check-circle\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"activity-text\">
\t\t\t\t\t\t\t\t\t\t\tCompleted task
\t\t\t\t\t\t\t\t\t\t\t<strong>\"Redesign Dashboard Analytics Panel\"</strong>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"activity-meta\">
\t\t\t\t\t\t\t\t\t\t\t<span>Today, 10:30 AM</span>
\t\t\t\t\t\t\t\t\t\t\t<span>Project: Dashboard Redesign</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"activity-item\">
\t\t\t\t\t\t\t\t\t<div class=\"activity-icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-chat\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"activity-text\">
\t\t\t\t\t\t\t\t\t\t\tAdded comment on
\t\t\t\t\t\t\t\t\t\t\t<strong>\"Mobile Banking App Design\"</strong>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"activity-meta\">
\t\t\t\t\t\t\t\t\t\t\t<span>Yesterday, 3:45 PM</span>
\t\t\t\t\t\t\t\t\t\t\t<span>Project: Mobile Banking</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"activity-item\">
\t\t\t\t\t\t\t\t\t<div class=\"activity-icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-file-earmark\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"activity-text\">
\t\t\t\t\t\t\t\t\t\t\tUploaded wireframes for
\t\t\t\t\t\t\t\t\t\t\t<strong>\"E-commerce Checkout Flow\"</strong>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"activity-meta\">
\t\t\t\t\t\t\t\t\t\t\t<span>Dec 11, 2025</span>
\t\t\t\t\t\t\t\t\t\t\t<span>Project: E-commerce Design</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t<div class=\"content-card\">
\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-info-circle\"></i>
\t\t\t\t\t\t\t\t\tQuick Info</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"quick-info\">
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<div class=\"fs-12 text-muted\">Access Level</div>
\t\t\t\t\t\t\t\t\t<div class=\"fw-600\">Manager</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<div class=\"fs-12 text-muted\">Experience Level</div>
\t\t\t\t\t\t\t\t\t<div class=\"fw-600\">Senior (8+ years)</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<div class=\"fs-12 text-muted\">Reporting To</div>
\t\t\t\t\t\t\t\t\t<div class=\"fw-600\">Lisa Rodriguez (Product Director)</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<div class=\"fs-12 text-muted\">Location</div>
\t\t\t\t\t\t\t\t\t<div class=\"fw-600\">San Francisco, CA</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<div class=\"fs-12 text-muted\">Working Hours</div>
\t\t\t\t\t\t\t\t\t<div class=\"fw-600\">9:00 AM - 6:00 PM PST</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<div class=\"fs-12 text-muted\">Last Active</div>
\t\t\t\t\t\t\t\t\t<div class=\"fw-600\">2 minutes ago</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"content-card\">
\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-lightning\"></i>
\t\t\t\t\t\t\t\t\tQuick Actions</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"quick-actions\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"action-btn\" onclick=\"assignTask()\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-plus-circle\"></i>
\t\t\t\t\t\t\t\t\t<span>Assign Task</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"action-btn\" onclick=\"scheduleMeeting()\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-calendar-plus\"></i>
\t\t\t\t\t\t\t\t\t<span>Schedule Meeting</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"action-btn\" onclick=\"generateReport()\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-file-earmark-text\"></i>
\t\t\t\t\t\t\t\t\t<span>Generate Report</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"action-btn\" onclick=\"viewDocuments()\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-folder\"></i>
\t\t\t\t\t\t\t\t\t<span>View Documents</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Department Tab -->
\t\t\t<div class=\"tab-content\" id=\"departmentsTab\">
\t\t\t\t<div class=\"content-card\">
\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t\t<i class=\"bi bi-building\"></i>
\t\t\t\t\t\t\tDepartment Assignments</h3>
\t\t\t\t\t\t<div class=\"card-actions\">
\t\t\t\t\t\t\t<button class=\"btn-outline\" onclick=\"addDepartmentAssignment()\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-plus\"></i>
\t\t\t\t\t\t\t\tAdd Department
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"departments-grid\">
\t\t\t\t\t\t<div class=\"department-card\">
\t\t\t\t\t\t\t<div class=\"department-header\">
\t\t\t\t\t\t\t\t<div class=\"department-icon\" style=\"background: var(--accent);\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-palette\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"department-info\">
\t\t\t\t\t\t\t\t\t<div class=\"department-name\">Design Team</div>
\t\t\t\t\t\t\t\t\t<div class=\"department-role\">Team Lead</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"department-details\">
\t\t\t\t\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t\t\t\t\t<span class=\"detail-label\">Team Size:</span>
\t\t\t\t\t\t\t\t\t<span class=\"detail-value\">8 members</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t\t\t\t\t<span class=\"detail-label\">Joined:</span>
\t\t\t\t\t\t\t\t\t<span class=\"detail-value\">Jan 15, 2024</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t\t\t\t\t<span class=\"detail-label\">Projects:</span>
\t\t\t\t\t\t\t\t\t<span class=\"detail-value\">12 active</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t\t\t\t\t<span class=\"detail-label\">Status:</span>
\t\t\t\t\t\t\t\t\t<span class=\"detail-value\">Active</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"department-card\">
\t\t\t\t\t\t\t<div class=\"department-header\">
\t\t\t\t\t\t\t\t<div class=\"department-icon\" style=\"background: var(--info);\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-code-slash\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"department-info\">
\t\t\t\t\t\t\t\t\t<div class=\"department-name\">Development</div>
\t\t\t\t\t\t\t\t\t<div class=\"department-role\">Contributor</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"department-details\">
\t\t\t\t\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t\t\t\t\t<span class=\"detail-label\">Team Size:</span>
\t\t\t\t\t\t\t\t\t<span class=\"detail-value\">15 members</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t\t\t\t\t<span class=\"detail-label\">Joined:</span>
\t\t\t\t\t\t\t\t\t<span class=\"detail-value\">Mar 10, 2024</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t\t\t\t\t<span class=\"detail-label\">Projects:</span>
\t\t\t\t\t\t\t\t\t<span class=\"detail-value\">6 active</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t\t\t\t\t<span class=\"detail-label\">Status:</span>
\t\t\t\t\t\t\t\t\t<span class=\"detail-value\">Active</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"department-card\">
\t\t\t\t\t\t\t<div class=\"department-header\">
\t\t\t\t\t\t\t\t<div class=\"department-icon\" style=\"background: var(--warning);\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-bullseye\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"department-info\">
\t\t\t\t\t\t\t\t\t<div class=\"department-name\">Product Management</div>
\t\t\t\t\t\t\t\t\t<div class=\"department-role\">Advisor</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"department-details\">
\t\t\t\t\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t\t\t\t\t<span class=\"detail-label\">Team Size:</span>
\t\t\t\t\t\t\t\t\t<span class=\"detail-value\">5 members</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t\t\t\t\t<span class=\"detail-label\">Joined:</span>
\t\t\t\t\t\t\t\t\t<span class=\"detail-value\">Jun 5, 2024</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t\t\t\t\t<span class=\"detail-label\">Projects:</span>
\t\t\t\t\t\t\t\t\t<span class=\"detail-value\">8 active</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"detail-item\">
\t\t\t\t\t\t\t\t\t<span class=\"detail-label\">Status:</span>
\t\t\t\t\t\t\t\t\t<span class=\"detail-value\">Active</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"content-card\">
\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t\t<i class=\"bi bi-shield-check\"></i>
\t\t\t\t\t\t\tDepartment Permissions</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"permissions-grid\">
\t\t\t\t\t\t<div class=\"permission-item\">
\t\t\t\t\t\t\t<div class=\"permission-info\">
\t\t\t\t\t\t\t\t<div class=\"permission-name\">Create Design Tasks</div>
\t\t\t\t\t\t\t\t<div class=\"permission-description\">Design Team</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" checked disabled>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"permission-item\">
\t\t\t\t\t\t\t<div class=\"permission-info\">
\t\t\t\t\t\t\t\t<div class=\"permission-name\">Review Code</div>
\t\t\t\t\t\t\t\t<div class=\"permission-description\">Development</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" checked disabled>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"permission-item\">
\t\t\t\t\t\t\t<div class=\"permission-info\">
\t\t\t\t\t\t\t\t<div class=\"permission-name\">Approve Product Decisions</div>
\t\t\t\t\t\t\t\t<div class=\"permission-description\">Product Management</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" disabled>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"permission-item\">
\t\t\t\t\t\t\t<div class=\"permission-info\">
\t\t\t\t\t\t\t\t<div class=\"permission-name\">Manage Team Members</div>
\t\t\t\t\t\t\t\t<div class=\"permission-description\">Design Team</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-check form-switch\">
\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" checked disabled>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- skills Tab -->
\t\t\t<div class=\"tab-content skills-tab\" id=\"skillsTab\">
\t\t\t\t<div class=\"content-card\">
\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t\t<i class=\"bi bi-lightning\"></i>
\t\t\t\t\t\t\tSkills & Expertise</h3>
\t\t\t\t\t\t<div class=\"card-actions\">
\t\t\t\t\t\t\t<button class=\"btn-outline\" onclick=\"addSkill()\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-plus\"></i>
\t\t\t\t\t\t\t\tAdd Skill
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"skills-container\">
\t\t\t\t\t\t<span class=\"skill-tag\">UI Design
\t\t\t\t\t\t\t<span class=\"skill-level\">Expert</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"skill-tag\">User Research
\t\t\t\t\t\t\t<span class=\"skill-level\">Advanced</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"skill-tag\">Prototyping
\t\t\t\t\t\t\t<span class=\"skill-level\">Expert</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"skill-tag\">Figma
\t\t\t\t\t\t\t<span class=\"skill-level\">Expert</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"skill-tag\">Adobe Creative Suite
\t\t\t\t\t\t\t<span class=\"skill-level\">Advanced</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"skill-tag\">Design Systems
\t\t\t\t\t\t\t<span class=\"skill-level\">Expert</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"skill-tag\">HTML/CSS
\t\t\t\t\t\t\t<span class=\"skill-level\">Intermediate</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"skill-tag\">JavaScript
\t\t\t\t\t\t\t<span class=\"skill-level\">Intermediate</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"skill-tag\">React
\t\t\t\t\t\t\t<span class=\"skill-level\">Basic</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"skill-tag\">Product Strategy
\t\t\t\t\t\t\t<span class=\"skill-level\">Advanced</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"skill-tag\">Team Leadership
\t\t\t\t\t\t\t<span class=\"skill-level\">Expert</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"skill-tag\">Agile Methodology
\t\t\t\t\t\t\t<span class=\"skill-level\">Advanced</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"content-card\">
\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t\t<i class=\"bi bi-briefcase\"></i>
\t\t\t\t\t\t\tWork Experience</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"timeline\">
\t\t\t\t\t\t<div class=\"timeline-item\">
\t\t\t\t\t\t\t<div class=\"timeline-dot\"></div>
\t\t\t\t\t\t\t<div class=\"timeline-content\">
\t\t\t\t\t\t\t\t<div class=\"timeline-date\">2024 - Present</div>
\t\t\t\t\t\t\t\t<div class=\"timeline-title\">Senior UI/UX Designer & Project Lead</div>
\t\t\t\t\t\t\t\t<div class=\"timeline-description\">Panelry Inc. • Leading design team, managing
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    projects, and contributing to product strategy.</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"timeline-item\">
\t\t\t\t\t\t\t<div class=\"timeline-dot\"></div>
\t\t\t\t\t\t\t<div class=\"timeline-content\">
\t\t\t\t\t\t\t\t<div class=\"timeline-date\">2021 - 2024</div>
\t\t\t\t\t\t\t\t<div class=\"timeline-title\">Senior Product Designer</div>
\t\t\t\t\t\t\t\t<div class=\"timeline-description\">TechSolutions Corp. • Designed enterprise SaaS
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    products and established design systems.</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"timeline-item\">
\t\t\t\t\t\t\t<div class=\"timeline-dot\"></div>
\t\t\t\t\t\t\t<div class=\"timeline-content\">
\t\t\t\t\t\t\t\t<div class=\"timeline-date\">2019 - 2021</div>
\t\t\t\t\t\t\t\t<div class=\"timeline-title\">UI/UX Designer</div>
\t\t\t\t\t\t\t\t<div class=\"timeline-description\">CreativeMinds Agency • Worked with various clients on
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    web and mobile applications.</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"timeline-item\">
\t\t\t\t\t\t\t<div class=\"timeline-dot\"></div>
\t\t\t\t\t\t\t<div class=\"timeline-content\">
\t\t\t\t\t\t\t\t<div class=\"timeline-date\">2017 - 2019</div>
\t\t\t\t\t\t\t\t<div class=\"timeline-title\">Junior Designer</div>
\t\t\t\t\t\t\t\t<div class=\"timeline-description\">DigitalWorks Studio • Started career focusing on web
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                    design and user interfaces.</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"content-card\">
\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t\t<i class=\"bi bi-tools\"></i>
\t\t\t\t\t\t\tTools & Technologies</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"skills-container\">
\t\t\t\t\t\t<span class=\"skill-tag\">Figma</span>
\t\t\t\t\t\t<span class=\"skill-tag\">Adobe XD</span>
\t\t\t\t\t\t<span class=\"skill-tag\">Sketch</span>
\t\t\t\t\t\t<span class=\"skill-tag\">Photoshop</span>
\t\t\t\t\t\t<span class=\"skill-tag\">Illustrator</span>
\t\t\t\t\t\t<span class=\"skill-tag\">InVision</span>
\t\t\t\t\t\t<span class=\"skill-tag\">Zeplin</span>
\t\t\t\t\t\t<span class=\"skill-tag\">Framer</span>
\t\t\t\t\t\t<span class=\"skill-tag\">VS Code</span>
\t\t\t\t\t\t<span class=\"skill-tag\">Git</span>
\t\t\t\t\t\t<span class=\"skill-tag\">Jira</span>
\t\t\t\t\t\t<span class=\"skill-tag\">Confluence</span>
\t\t\t\t\t\t<span class=\"skill-tag\">Notion</span>
\t\t\t\t\t\t<span class=\"skill-tag\">Slack</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Activity Tab -->
\t\t\t<div class=\"tab-content\" id=\"activityTab\">
\t\t\t\t<div class=\"content-card\">
\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t\t<i class=\"bi bi-activity\"></i>
\t\t\t\t\t\t\tRecent Activity</h3>
\t\t\t\t\t\t<div class=\"card-actions\">
\t\t\t\t\t\t\t<select class=\"form-select\" style=\"width: auto;\" id=\"activityFilter\">
\t\t\t\t\t\t\t\t<option value=\"all\">All Activities</option>
\t\t\t\t\t\t\t\t<option value=\"tasks\">Tasks</option>
\t\t\t\t\t\t\t\t<option value=\"comments\">Comments</option>
\t\t\t\t\t\t\t\t<option value=\"uploads\">Uploads</option>
\t\t\t\t\t\t\t\t<option value=\"meetings\">Meetings</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"activity-list\" id=\"activityList\">
\t\t\t\t\t\t<div class=\"activity-item\">
\t\t\t\t\t\t\t<div class=\"activity-icon\" style=\"background: rgba(10, NaN, NaN, 0.1); color: var(--success);\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-check-circle\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t\t<div class=\"activity-text\">Completed task 'Redesign Dashboard Analytics Panel'</div>
\t\t\t\t\t\t\t\t<div class=\"activity-meta\">
\t\t\t\t\t\t\t\t\t<span>Today, 10:30 AM</span>
\t\t\t\t\t\t\t\t\t<span>Project: Dashboard Redesign</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"activity-item\">
\t\t\t\t\t\t\t<div class=\"activity-icon\" style=\"background: rgba(10, NaN, NaN, 0.1); color: var(--info);\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-chat\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t\t<div class=\"activity-text\">Added comment on 'Mobile Banking App Design'</div>
\t\t\t\t\t\t\t\t<div class=\"activity-meta\">
\t\t\t\t\t\t\t\t\t<span>Yesterday, 3:45 PM</span>
\t\t\t\t\t\t\t\t\t<span>Project: Mobile Banking</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"activity-item\">
\t\t\t\t\t\t\t<div class=\"activity-icon\" style=\"background: rgba(10, NaN, NaN, 0.1); color: var(--warning);\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-file-earmark\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t\t<div class=\"activity-text\">Uploaded wireframes for 'E-commerce Checkout Flow'</div>
\t\t\t\t\t\t\t\t<div class=\"activity-meta\">
\t\t\t\t\t\t\t\t\t<span>Dec 11, 2025</span>
\t\t\t\t\t\t\t\t\t<span>Project: E-commerce Design</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"activity-item\">
\t\t\t\t\t\t\t<div class=\"activity-icon\" style=\"background: rgba(10, NaN, NaN, 0.1); color: var(--purple);\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-people\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t\t<div class=\"activity-text\">Attended weekly design review meeting</div>
\t\t\t\t\t\t\t\t<div class=\"activity-meta\">
\t\t\t\t\t\t\t\t\t<span>Dec 10, 2025</span>
\t\t\t\t\t\t\t\t\t<span>Project: Design Team</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"activity-item\">
\t\t\t\t\t\t\t<div class=\"activity-icon\" style=\"background: rgba(10, NaN, NaN, 0.1); color: var(--success);\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-check-circle\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t\t<div class=\"activity-text\">Started work on 'Admin Panel Redesign'</div>
\t\t\t\t\t\t\t\t<div class=\"activity-meta\">
\t\t\t\t\t\t\t\t\t<span>Dec 9, 2025</span>
\t\t\t\t\t\t\t\t\t<span>Project: Panelry Dashboard</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"activity-item\">
\t\t\t\t\t\t\t<div class=\"activity-icon\" style=\"background: rgba(10, NaN, NaN, 0.1); color: var(--info);\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-chat\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t\t<div class=\"activity-text\">Provided feedback on 'User Testing Results'</div>
\t\t\t\t\t\t\t\t<div class=\"activity-meta\">
\t\t\t\t\t\t\t\t\t<span>Dec 8, 2025</span>
\t\t\t\t\t\t\t\t\t<span>Project: User Research</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"activity-item\">
\t\t\t\t\t\t\t<div class=\"activity-icon\" style=\"background: rgba(10, NaN, NaN, 0.1); color: var(--warning);\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-file-earmark\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"activity-content\">
\t\t\t\t\t\t\t\t<div class=\"activity-text\">Uploaded design system documentation</div>
\t\t\t\t\t\t\t\t<div class=\"activity-meta\">
\t\t\t\t\t\t\t\t\t<span>Dec 7, 2025</span>
\t\t\t\t\t\t\t\t\t<span>Project: Design System</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- tasks Tab -->
\t\t\t<div class=\"tab-content user-details-task\" id=\"tasksTab\">
\t\t\t\t<div class=\"content-card\">
\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t\t<i class=\"bi bi-check-circle\"></i>
\t\t\t\t\t\t\tCurrent Tasks</h3>
\t\t\t\t\t\t<div class=\"card-actions\">
\t\t\t\t\t\t\t<button class=\"btn-outline\" onclick=\"assignNewTask()\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-plus\"></i>
\t\t\t\t\t\t\t\tAssign Task
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"tasks-list\" id=\"tasksList\">
\t\t\t\t\t\t<div class=\"task-item\">
\t\t\t\t\t\t\t<div class=\"task-checkbox checked\" onclick=\"toggleTask(1)\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-check\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"task-info\">
\t\t\t\t\t\t\t\t<div class=\"task-title\">Design login page for mobile app</div>
\t\t\t\t\t\t\t\t<div class=\"task-meta\">
\t\t\t\t\t\t\t\t\t<span>Mobile Banking</span>
\t\t\t\t\t\t\t\t\t<span>• Due: Today</span>
\t\t\t\t\t\t\t\t\t<span class=\"task-priority priority-high\">High</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-actions\">
\t\t\t\t\t\t\t\t<button class=\"btn-primary\" onclick=\"viewTask(1)\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-eye\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"task-item\">
\t\t\t\t\t\t\t<div class=\"task-checkbox \" onclick=\"toggleTask(2)\"></div>
\t\t\t\t\t\t\t<div class=\"task-info\">
\t\t\t\t\t\t\t\t<div class=\"task-title\">Review user feedback from testing</div>
\t\t\t\t\t\t\t\t<div class=\"task-meta\">
\t\t\t\t\t\t\t\t\t<span>User Research</span>
\t\t\t\t\t\t\t\t\t<span>• Due: Tomorrow</span>
\t\t\t\t\t\t\t\t\t<span class=\"task-priority priority-medium\">Medium</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-actions\">
\t\t\t\t\t\t\t\t<button class=\"btn-primary\" onclick=\"viewTask(2)\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-eye\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"task-item\">
\t\t\t\t\t\t\t<div class=\"task-checkbox \" onclick=\"toggleTask(3)\"></div>
\t\t\t\t\t\t\t<div class=\"task-info\">
\t\t\t\t\t\t\t\t<div class=\"task-title\">Update design system components</div>
\t\t\t\t\t\t\t\t<div class=\"task-meta\">
\t\t\t\t\t\t\t\t\t<span>Design System</span>
\t\t\t\t\t\t\t\t\t<span>• Due: Dec 20</span>
\t\t\t\t\t\t\t\t\t<span class=\"task-priority priority-medium\">Medium</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-actions\">
\t\t\t\t\t\t\t\t<button class=\"btn-primary\" onclick=\"viewTask(3)\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-eye\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"task-item\">
\t\t\t\t\t\t\t<div class=\"task-checkbox \" onclick=\"toggleTask(4)\"></div>
\t\t\t\t\t\t\t<div class=\"task-info\">
\t\t\t\t\t\t\t\t<div class=\"task-title\">Prepare presentation for stakeholders</div>
\t\t\t\t\t\t\t\t<div class=\"task-meta\">
\t\t\t\t\t\t\t\t\t<span>Dashboard Redesign</span>
\t\t\t\t\t\t\t\t\t<span>• Due: Dec 18</span>
\t\t\t\t\t\t\t\t\t<span class=\"task-priority priority-high\">High</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-actions\">
\t\t\t\t\t\t\t\t<button class=\"btn-primary\" onclick=\"viewTask(4)\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-eye\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"task-item\">
\t\t\t\t\t\t\t<div class=\"task-checkbox \" onclick=\"toggleTask(5)\"></div>
\t\t\t\t\t\t\t<div class=\"task-info\">
\t\t\t\t\t\t\t\t<div class=\"task-title\">Mentor junior designer on prototyping</div>
\t\t\t\t\t\t\t\t<div class=\"task-meta\">
\t\t\t\t\t\t\t\t\t<span>Design Team</span>
\t\t\t\t\t\t\t\t\t<span>• Due: Dec 22</span>
\t\t\t\t\t\t\t\t\t<span class=\"task-priority priority-low\">Low</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-actions\">
\t\t\t\t\t\t\t\t<button class=\"btn-primary\" onclick=\"viewTask(5)\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-eye\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Task Statistics -->
\t\t\t\t<div class=\"content-card\">
\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t\t<i class=\"bi bi-bar-chart\"></i>
\t\t\t\t\t\t\tTask Statistics</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"metrics-grid\">
\t\t\t\t\t\t<div class=\"metric-card\">
\t\t\t\t\t\t\t<div class=\"metric-value\">24</div>
\t\t\t\t\t\t\t<div class=\"metric-label\">Completed This Week</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"metric-card\">
\t\t\t\t\t\t\t<div class=\"metric-value\">8</div>
\t\t\t\t\t\t\t<div class=\"metric-label\">In Progress</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"metric-card\">
\t\t\t\t\t\t\t<div class=\"metric-value\">3</div>
\t\t\t\t\t\t\t<div class=\"metric-label\">Overdue</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"metric-card\">
\t\t\t\t\t\t\t<div class=\"metric-value\">92%</div>
\t\t\t\t\t\t\t<div class=\"metric-label\">On-time Completion</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- performance Tab -->
\t\t\t<div class=\"tab-content\" id=\"performanceTab\">
\t\t\t\t<div class=\"content-card\">
\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t\t<i class=\"bi bi-graph-up\"></i>
\t\t\t\t\t\t\tPerformance Metrics</h3>
\t\t\t\t\t\t<div class=\"card-actions\">
\t\t\t\t\t\t\t<select class=\"form-select\" style=\"width: auto;\" id=\"timeRange\">
\t\t\t\t\t\t\t\t<option value=\"week\">This Week</option>
\t\t\t\t\t\t\t\t<option value=\"month\" selected>This Month</option>
\t\t\t\t\t\t\t\t<option value=\"quarter\">This Quarter</option>
\t\t\t\t\t\t\t\t<option value=\"year\">This Year</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"metrics-grid\">
\t\t\t\t\t\t<div class=\"metric-card\">
\t\t\t\t\t\t\t<div class=\"metric-value\">4.8</div>
\t\t\t\t\t\t\t<div class=\"metric-label\">Quality Score</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"metric-card\">
\t\t\t\t\t\t\t<div class=\"metric-value\">95%</div>
\t\t\t\t\t\t\t<div class=\"metric-label\">Task Completion</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"metric-card\">
\t\t\t\t\t\t\t<div class=\"metric-value\">4.9</div>
\t\t\t\t\t\t\t<div class=\"metric-label\">Team Collaboration</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"metric-card\">
\t\t\t\t\t\t\t<div class=\"metric-value\">4.7</div>
\t\t\t\t\t\t\t<div class=\"metric-label\">Initiative</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Workload Chart -->
\t\t\t\t<div class=\"content-card\">
\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t<h3 class=\"card-title\">
\t\t\t\t\t\t\t<i class=\"bi bi-calendar-check\"></i>
\t\t\t\t\t\t\tCurrent Workload</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"workload-chart\">
\t\t\t\t\t\t<div class=\"workload-bars\">
\t\t\t\t\t\t\t<div class=\"workload-bar\">
\t\t\t\t\t\t\t\t<div class=\"workload-fill\" style=\"width: 60%\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"workload-bar\">
\t\t\t\t\t\t\t\t<div class=\"workload-fill\" style=\"width: 75%\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"workload-bar\">
\t\t\t\t\t\t\t\t<div class=\"workload-fill\" style=\"width: 40%\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"workload-bar\">
\t\t\t\t\t\t\t\t<div class=\"workload-fill\" style=\"width: 85%\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"workload-labels\">
\t\t\t\t\t\t\t<span>Design Team</span>
\t\t\t\t\t\t\t<span>Development</span>
\t\t\t\t\t\t\t<span>Product</span>
\t\t\t\t\t\t\t<span>Admin</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- reports Tab -->
\t\t\t<div class=\"tab-content\" id=\"reportsTab\">
\t\t\t\t<div class=\"reports-grid\">
\t\t\t\t\t<div class=\"report-card\">
\t\t\t\t\t\t<div class=\"report-icon\">
\t\t\t\t\t\t\t<i class=\"bi bi-file-text\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"report-name\">Monthly Performance Report</div>
\t\t\t\t\t\t<div class=\"report-meta\">
\t\t\t\t\t\t\t<span>December 2025</span>
\t\t\t\t\t\t\t<span>PDF • 2.4 MB</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button class=\"btn-outline w-100\" onclick=\"downloadReport('monthly')\">
\t\t\t\t\t\t\t<i class=\"bi bi-download\"></i>
\t\t\t\t\t\t\tDownload
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"report-card\">
\t\t\t\t\t\t<div class=\"report-icon\">
\t\t\t\t\t\t\t<i class=\"bi bi-bar-chart\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"report-name\">Task Completion Analysis</div>
\t\t\t\t\t\t<div class=\"report-meta\">
\t\t\t\t\t\t\t<span>Q4 2025</span>
\t\t\t\t\t\t\t<span>PDF • 1.8 MB</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button class=\"btn-outline w-100\" onclick=\"downloadReport('task-analysis')\">
\t\t\t\t\t\t\t<i class=\"bi bi-download\"></i>
\t\t\t\t\t\t\tDownload
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"report-card\">
\t\t\t\t\t\t<div class=\"report-icon\">
\t\t\t\t\t\t\t<i class=\"bi bi-people\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"report-name\">Team Contribution Report</div>
\t\t\t\t\t\t<div class=\"report-meta\">
\t\t\t\t\t\t\t<span>November 2025</span>
\t\t\t\t\t\t\t<span>PDF • 3.2 MB</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button class=\"btn-outline w-100\" onclick=\"downloadReport('team-contribution')\">
\t\t\t\t\t\t\t<i class=\"bi bi-download\"></i>
\t\t\t\t\t\t\tDownload
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"report-card\">
\t\t\t\t\t\t<div class=\"report-icon\">
\t\t\t\t\t\t\t<i class=\"bi bi-clock-history\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"report-name\">Time Tracking Summary</div>
\t\t\t\t\t\t<div class=\"report-meta\">
\t\t\t\t\t\t\t<span>December 2025</span>
\t\t\t\t\t\t\t<span>Excel • 1.5 MB</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button class=\"btn-outline w-100\" onclick=\"downloadReport('time-tracking')\">
\t\t\t\t\t\t\t<i class=\"bi bi-download\"></i>
\t\t\t\t\t\t\tDownload
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</main>

\t{% include 'component/footeradmin.html.twig' %}
{% endblock %}
", "admin/settingadmin/index.html.twig", "C:\\Users\\M_INFO\\Music\\scouts\\templates\\admin\\settingadmin\\index.html.twig");
    }
}
