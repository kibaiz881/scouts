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

/* component/headeradmin.html.twig */
class __TwigTemplate_77d13042424c5e358f5bedc7ea958e68 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "component/headeradmin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "component/headeradmin.html.twig"));

        // line 1
        yield "<!-- ========== NAVBAR ========== -->
<header>
\t<nav class=\"navbar navbar-expand-lg\" role=\"navigation\" aria-label=\"Main navigation\">
\t\t<div class=\"d-flex align-items-center gap-3\">
\t\t\t<button class=\"navbar-toggler icon-btn d-lg-none\" id=\"hambBtn\" aria-label=\"Open menu\" title=\"Open menu\">
\t\t\t\t<svg width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\" aria-hidden=\"true\">
\t\t\t\t\t<path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-width=\"1.6\" d=\"M4 7h16M4 12h16M4 17h16\"/>
\t\t\t\t</svg>
\t\t\t</button>
\t\t\t<a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        yield "\" class=\"navbar-brand\">
\t\t\t\t<div class=\"logo\" aria-hidden=\"true\"><img src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/75hc.png"), "html", null, true);
        yield "\" alt=\"logo\"></div>
\t\t\t\t<div class=\"brand-text\">
\t\t\t\t\t<img src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/hc.png"), "html", null, true);
        yield "\" alt=\"logo\">
\t\t\t\t</div>
\t\t\t</a>
\t\t</div>
\t\t<!-- Top nav links -->
\t\t<div class=\"collapse navbar-collapse me-3\" id=\"navbarNav\">
\t\t\t<ul class=\"navbar-nav ms-auto\" id=\"menuList\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link active\" href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        yield "\" aria-current=\"page\">
\t\t\t\t\t\t<svg viewbox=\"0 0 24 24\" fill=\"none\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<path stroke=\"currentColor\" stroke-width=\"1.6\" d=\"M3 11.5L12 4l9 7.5M9 21V12h6v9\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\tHome
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_post_admin");
        yield "\">
\t\t\t\t\t\t<svg viewbox=\"0 0 24 24\" fill=\"none\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<path stroke=\"currentColor\" stroke-width=\"1.6\" d=\"M3 7h18M7 10h10M5 14h14M9 18h6\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\tProjects
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"task.html\">
\t\t\t\t\t\t<svg viewbox=\"0 0 24 24\" fill=\"none\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<path stroke=\"currentColor\" stroke-width=\"1.6\" d=\"M20 6L9 17l-5-5\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\tTasks
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>

\t\t<!-- Header actions -->
\t\t<div
\t\t\tclass=\"d-flex gap-2 ms-auto\" role=\"group\" aria-label=\"Header actions\">
\t\t\t<!-- Collapse toggle -->
\t\t\t<button class=\"icon-btn d-none d-lg-grid\" id=\"collapseBtn\" aria-pressed=\"false\" title=\"Collapse sidebar\">
\t\t\t\t<svg width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\" aria-hidden=\"true\">
\t\t\t\t\t<path stroke=\"currentColor\" stroke-width=\"1.6\" stroke-linecap=\"round\" d=\"M9 6l6 6-6 6\"/>
\t\t\t\t</svg>
\t\t\t</button>
\t\t\t<!-- Theme Toggle -->
\t\t\t<button class=\"icon-btn\" id=\"themeToggle\" aria-label=\"Toggle theme\" title=\"Toggle light/dark mode\">
\t\t\t\t<svg width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\" id=\"themeIcon\">
\t\t\t\t\t<path stroke=\"currentColor\" stroke-width=\"1.6\" d=\"M12 17a5 5 0 100-10 5 5 0 000 10zM12 3v2M12 19v2M5 12H3M21 12h-2M6.34 6.34l-1.41 1.41M19.07 19.07l-1.41 1.41\"/>
\t\t\t\t</svg>
\t\t\t</button>
\t\t\t<!-- Search Dropdown -->
\t\t\t<div class=\"dropdown\">
\t\t\t\t<button class=\"icon-btn dropdown-toggle\" id=\"searchBtn\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" aria-expanded=\"false\" aria-label=\"Search\">
\t\t\t\t\t<svg width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\">
\t\t\t\t\t\t<path stroke=\"currentColor\" stroke-width=\"1.6\" stroke-linecap=\"round\" d=\"M21 21l-4.35-4.35\"/>
\t\t\t\t\t\t<circle cx=\"11\" cy=\"11\" r=\"6\" stroke=\"currentColor\" stroke-width=\"1.6\" fill=\"none\"/>
\t\t\t\t\t</svg>
\t\t\t\t</button>
\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end search-dropdown\" id=\"searchDropdown\">
\t\t\t\t\t<input type=\"text\" class=\"search-input\" placeholder=\"Search...\" id=\"searchInput\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Notification Dropdown -->
\t\t\t<div class=\"dropdown notify-dropdown\">
\t\t\t\t<div class=\"dropdown-toggle d-flex align-items-center\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" aria-expanded=\"false\" role=\"button\">
\t\t\t\t\t<button class=\"icon-btn\" id=\"notifyBtn\" aria-label=\"Notifications\" title=\"Notifications\">
\t\t\t\t\t\t<svg width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\">
\t\t\t\t\t\t\t<path stroke=\"currentColor\" stroke-width=\"1.6\" d=\"M15 17h5l-1.4-1.7A7 7 0 0012 6a7 7 0 00-6.6 9.3L4 17h5\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>
\t\t\t\t</div>

\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end mt-2\">
\t\t\t\t\t<div id=\"Notification\" class=\"h-380 scroll-y p-3 custom-scrollbar\">
\t\t\t\t\t\t<ul class=\"timeline p-0\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t\t<div class=\"media me-2\">
\t\t\t\t\t\t\t\t\t\tDR
\t\t\t\t\t\t\t\t\t\t<!-- <img alt=\"image\" width=\"50\" src=\"./assets/images/profile.png\"> -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Dr Smith uploaded a new report</h6>
\t\t\t\t\t\t\t\t\t\t<small class=\"d-block\">10 Dec 2023 - 08:15 AM</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t\t<div class=\"media me-2 media-info\">
\t\t\t\t\t\t\t\t\t\tAP
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">New Appointment Scheduled</h6>
\t\t\t\t\t\t\t\t\t\t<small class=\"d-block\">10 Dec 2023 - 09:45 AM</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t\t<div class=\"media me-2 media-success\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-check-circle\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Patient checked in at reception</h6>
\t\t\t\t\t\t\t\t\t\t<small class=\"d-block\">10 Dec 2023 - 10:20 AM</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t\t<div class=\"media me-2\">
\t\t\t\t\t\t\t\t\t\tAS
\t\t\t\t\t\t\t\t\t\t<!-- <img alt=\"image\" width=\"50\" src=\"./assets/images/profile.png\"> -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Dr Alice shared a prescription</h6>
\t\t\t\t\t\t\t\t\t\t<small class=\"d-block\">10 Dec 2023 - 11:00 AM</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t\t<div class=\"media me-2 media-danger\">
\t\t\t\t\t\t\t\t\t\tEM
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Emergency Alert: Critical Patient</h6>
\t\t\t\t\t\t\t\t\t\t<small class=\"d-block\">10 Dec 2023 - 11:30 AM</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t\t<div class=\"media me-2 media-primary\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar-alt\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Next Appointment Reminder</h6>
\t\t\t\t\t\t\t\t\t\t<small class=\"d-block\">10 Dec 2023 - 12:00 PM</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t</div>
\t\t\t\t\t<a class=\"all-notification\" href=\"#\">See all notifications
\t\t\t\t\t\t<i class=\"fas fa-arrow-right\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Profile Dropdown -->
\t\t\t<div class=\"dropdown profile-dropdown\">
\t\t\t\t<div class=\"dropdown-toggle d-flex align-items-center\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" aria-expanded=\"false\" role=\"button\">
\t\t\t\t\t<div class=\"profile\" id=\"profileBtn\" tabindex=\"0\" title=\"Account\">
\t\t\t\t\t\t<div class=\"avatars\">
\t\t\t\t\t\t\t";
        // line 169
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 169, $this->source); })()), "user", [], "any", false, false, false, 169), "profilePictureName", [], "any", false, false, false, 169)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 170
            yield "\t\t\t\t\t\t\t\t<img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/profiles/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 170, $this->source); })()), "user", [], "any", false, false, false, 170), "profilePictureName", [], "any", false, false, false, 170))), "html", null, true);
            yield "\" alt=\"Photo de profil de ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 170, $this->source); })()), "user", [], "any", false, false, false, 170), "username", [], "any", false, false, false, 170), "html", null, true);
            yield "\" class=\"avatar-img\" width=\"40\" height=\"40\" loading=\"lazy\">
\t\t\t\t\t\t\t";
        } else {
            // line 172
            yield "\t\t\t\t\t\t\t\t<div class=\"avatars-placeholder\">
\t\t\t\t\t\t\t\t\t";
            // line 173
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 173, $this->source); })()), "user", [], "any", false, false, false, 173), "username", [], "any", false, false, false, 173))), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 176
        yield "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"name d-none d-md-block\">";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 178, $this->source); })()), "user", [], "any", false, false, false, 178), "username", [], "any", false, false, false, 178), "html", null, true);
        yield "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end mt-2\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<h6 class=\"dropdown-header\">Settings</h6>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa-regular fa-user\"></i>
\t\t\t\t\t\t\tProfile Settings</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa-regular fa-bell\"></i>
\t\t\t\t\t\t\tNotifications</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-shield-halved\"></i>
\t\t\t\t\t\t\tPrivacy &amp; Security</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa-regular fa-credit-card\"></i>
\t\t\t\t\t\t\tBilling</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"sign-out\">
\t\t\t\t\t\t\t<a class=\"dropdown-item text-danger\" href=\"";
        // line 208
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-right-from-bracket\"></i>
\t\t\t\t\t\t\t\tSign out</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
</header>
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
        return "component/headeradmin.html.twig";
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
        return array (  289 => 208,  256 => 178,  252 => 176,  246 => 173,  243 => 172,  235 => 170,  233 => 169,  90 => 29,  79 => 21,  68 => 13,  63 => 11,  59 => 10,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- ========== NAVBAR ========== -->
<header>
\t<nav class=\"navbar navbar-expand-lg\" role=\"navigation\" aria-label=\"Main navigation\">
\t\t<div class=\"d-flex align-items-center gap-3\">
\t\t\t<button class=\"navbar-toggler icon-btn d-lg-none\" id=\"hambBtn\" aria-label=\"Open menu\" title=\"Open menu\">
\t\t\t\t<svg width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\" aria-hidden=\"true\">
\t\t\t\t\t<path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-width=\"1.6\" d=\"M4 7h16M4 12h16M4 17h16\"/>
\t\t\t\t</svg>
\t\t\t</button>
\t\t\t<a href=\"{{path('app_admin')}}\" class=\"navbar-brand\">
\t\t\t\t<div class=\"logo\" aria-hidden=\"true\"><img src=\"{{ asset('images/75hc.png') }}\" alt=\"logo\"></div>
\t\t\t\t<div class=\"brand-text\">
\t\t\t\t\t<img src=\"{{ asset('images/hc.png') }}\" alt=\"logo\">
\t\t\t\t</div>
\t\t\t</a>
\t\t</div>
\t\t<!-- Top nav links -->
\t\t<div class=\"collapse navbar-collapse me-3\" id=\"navbarNav\">
\t\t\t<ul class=\"navbar-nav ms-auto\" id=\"menuList\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link active\" href=\"{{path('app_admin')}}\" aria-current=\"page\">
\t\t\t\t\t\t<svg viewbox=\"0 0 24 24\" fill=\"none\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<path stroke=\"currentColor\" stroke-width=\"1.6\" d=\"M3 11.5L12 4l9 7.5M9 21V12h6v9\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\tHome
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{path('app_admin_post_admin')}}\">
\t\t\t\t\t\t<svg viewbox=\"0 0 24 24\" fill=\"none\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<path stroke=\"currentColor\" stroke-width=\"1.6\" d=\"M3 7h18M7 10h10M5 14h14M9 18h6\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\tProjects
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"task.html\">
\t\t\t\t\t\t<svg viewbox=\"0 0 24 24\" fill=\"none\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<path stroke=\"currentColor\" stroke-width=\"1.6\" d=\"M20 6L9 17l-5-5\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\tTasks
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>

\t\t<!-- Header actions -->
\t\t<div
\t\t\tclass=\"d-flex gap-2 ms-auto\" role=\"group\" aria-label=\"Header actions\">
\t\t\t<!-- Collapse toggle -->
\t\t\t<button class=\"icon-btn d-none d-lg-grid\" id=\"collapseBtn\" aria-pressed=\"false\" title=\"Collapse sidebar\">
\t\t\t\t<svg width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\" aria-hidden=\"true\">
\t\t\t\t\t<path stroke=\"currentColor\" stroke-width=\"1.6\" stroke-linecap=\"round\" d=\"M9 6l6 6-6 6\"/>
\t\t\t\t</svg>
\t\t\t</button>
\t\t\t<!-- Theme Toggle -->
\t\t\t<button class=\"icon-btn\" id=\"themeToggle\" aria-label=\"Toggle theme\" title=\"Toggle light/dark mode\">
\t\t\t\t<svg width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\" id=\"themeIcon\">
\t\t\t\t\t<path stroke=\"currentColor\" stroke-width=\"1.6\" d=\"M12 17a5 5 0 100-10 5 5 0 000 10zM12 3v2M12 19v2M5 12H3M21 12h-2M6.34 6.34l-1.41 1.41M19.07 19.07l-1.41 1.41\"/>
\t\t\t\t</svg>
\t\t\t</button>
\t\t\t<!-- Search Dropdown -->
\t\t\t<div class=\"dropdown\">
\t\t\t\t<button class=\"icon-btn dropdown-toggle\" id=\"searchBtn\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" aria-expanded=\"false\" aria-label=\"Search\">
\t\t\t\t\t<svg width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\">
\t\t\t\t\t\t<path stroke=\"currentColor\" stroke-width=\"1.6\" stroke-linecap=\"round\" d=\"M21 21l-4.35-4.35\"/>
\t\t\t\t\t\t<circle cx=\"11\" cy=\"11\" r=\"6\" stroke=\"currentColor\" stroke-width=\"1.6\" fill=\"none\"/>
\t\t\t\t\t</svg>
\t\t\t\t</button>
\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end search-dropdown\" id=\"searchDropdown\">
\t\t\t\t\t<input type=\"text\" class=\"search-input\" placeholder=\"Search...\" id=\"searchInput\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Notification Dropdown -->
\t\t\t<div class=\"dropdown notify-dropdown\">
\t\t\t\t<div class=\"dropdown-toggle d-flex align-items-center\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" aria-expanded=\"false\" role=\"button\">
\t\t\t\t\t<button class=\"icon-btn\" id=\"notifyBtn\" aria-label=\"Notifications\" title=\"Notifications\">
\t\t\t\t\t\t<svg width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\">
\t\t\t\t\t\t\t<path stroke=\"currentColor\" stroke-width=\"1.6\" d=\"M15 17h5l-1.4-1.7A7 7 0 0012 6a7 7 0 00-6.6 9.3L4 17h5\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>
\t\t\t\t</div>

\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end mt-2\">
\t\t\t\t\t<div id=\"Notification\" class=\"h-380 scroll-y p-3 custom-scrollbar\">
\t\t\t\t\t\t<ul class=\"timeline p-0\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t\t<div class=\"media me-2\">
\t\t\t\t\t\t\t\t\t\tDR
\t\t\t\t\t\t\t\t\t\t<!-- <img alt=\"image\" width=\"50\" src=\"./assets/images/profile.png\"> -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Dr Smith uploaded a new report</h6>
\t\t\t\t\t\t\t\t\t\t<small class=\"d-block\">10 Dec 2023 - 08:15 AM</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t\t<div class=\"media me-2 media-info\">
\t\t\t\t\t\t\t\t\t\tAP
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">New Appointment Scheduled</h6>
\t\t\t\t\t\t\t\t\t\t<small class=\"d-block\">10 Dec 2023 - 09:45 AM</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t\t<div class=\"media me-2 media-success\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-check-circle\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Patient checked in at reception</h6>
\t\t\t\t\t\t\t\t\t\t<small class=\"d-block\">10 Dec 2023 - 10:20 AM</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t\t<div class=\"media me-2\">
\t\t\t\t\t\t\t\t\t\tAS
\t\t\t\t\t\t\t\t\t\t<!-- <img alt=\"image\" width=\"50\" src=\"./assets/images/profile.png\"> -->
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Dr Alice shared a prescription</h6>
\t\t\t\t\t\t\t\t\t\t<small class=\"d-block\">10 Dec 2023 - 11:00 AM</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t\t<div class=\"media me-2 media-danger\">
\t\t\t\t\t\t\t\t\t\tEM
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Emergency Alert: Critical Patient</h6>
\t\t\t\t\t\t\t\t\t\t<small class=\"d-block\">10 Dec 2023 - 11:30 AM</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t\t<div class=\"media me-2 media-primary\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-calendar-alt\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\">Next Appointment Reminder</h6>
\t\t\t\t\t\t\t\t\t\t<small class=\"d-block\">10 Dec 2023 - 12:00 PM</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t</div>
\t\t\t\t\t<a class=\"all-notification\" href=\"#\">See all notifications
\t\t\t\t\t\t<i class=\"fas fa-arrow-right\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Profile Dropdown -->
\t\t\t<div class=\"dropdown profile-dropdown\">
\t\t\t\t<div class=\"dropdown-toggle d-flex align-items-center\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" aria-expanded=\"false\" role=\"button\">
\t\t\t\t\t<div class=\"profile\" id=\"profileBtn\" tabindex=\"0\" title=\"Account\">
\t\t\t\t\t\t<div class=\"avatars\">
\t\t\t\t\t\t\t{% if app.user.profilePictureName %}
\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/profiles/' ~ app.user.profilePictureName) }}\" alt=\"Photo de profil de {{ app.user.username }}\" class=\"avatar-img\" width=\"40\" height=\"40\" loading=\"lazy\">
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<div class=\"avatars-placeholder\">
\t\t\t\t\t\t\t\t\t{{ app.user.username|first|upper }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"name d-none d-md-block\">{{app.user.username}}</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end mt-2\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<h6 class=\"dropdown-header\">Settings</h6>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa-regular fa-user\"></i>
\t\t\t\t\t\t\tProfile Settings</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa-regular fa-bell\"></i>
\t\t\t\t\t\t\tNotifications</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-shield-halved\"></i>
\t\t\t\t\t\t\tPrivacy &amp; Security</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t<i class=\"fa-regular fa-credit-card\"></i>
\t\t\t\t\t\t\tBilling</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"sign-out\">
\t\t\t\t\t\t\t<a class=\"dropdown-item text-danger\" href=\"{{ path('app_logout') }}\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-right-from-bracket\"></i>
\t\t\t\t\t\t\t\tSign out</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</nav>
</header>
", "component/headeradmin.html.twig", "C:\\Users\\M_INFO\\Music\\scouts\\templates\\component\\headeradmin.html.twig");
    }
}
