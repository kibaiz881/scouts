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

/* component/sidebaradmin.html.twig */
class __TwigTemplate_83ca56e7326f7702f6b033d0aa282031 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "component/sidebaradmin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "component/sidebaradmin.html.twig"));

        // line 1
        yield "    <!-- ========== SIDEBAR ========== -->
    <aside class=\"sidebar\" id=\"sidebar\" aria-label=\"Sidebar navigation\">
        <ul class=\"menu\" role=\"menu\">
            <li class=\"menu-item\" role=\"none\">
                <a href=\"";
        // line 5
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        yield "\" class=\"active\" role=\"menuitem\" title=\"Dashboard\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\">
                    <path d=\"M3 13h8V3H3v10zM13 21h8V11h-8v10zM13 3v6h8V3h-8zM3 21h8v-6H3v6z\"
                            stroke=\"currentColor\" stroke-width=\"1.6\"/>
                    </svg>
                    <span class=\"label\">Dashboard</span>
                </a>
            </li>

            <li class=\"menu-item has-submenu\" role=\"none\">
                <a href=\"#\" role=\"menuitem\" title=\"Projects\" class=\"menu-link\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\">
                        <rect x=\"3\" y=\"4\" width=\"18\" height=\"6\" rx=\"2\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                        <rect x=\"3\" y=\"14\" width=\"18\" height=\"6\" rx=\"2\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                    </svg>
                    <span class=\"label\">Projects</span>
                    <span class=\"arrow\">›</span>
                </a>
                <ul class=\"submenu\">
                    <li>
                        <a href=\"project.html\" title=\"All Projects\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\">
                            <path d=\"M4 6h16M4 12h16M4 18h16\"  stroke=\"currentColor\" stroke-width=\"1.6\"/>
                            </svg>
                            <span class=\"label\">All Projects</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"project-create.html\" title=\"Project Created\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\">
                             <path d=\"M12 5v14M5 12h14\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                            </svg>
                            <span class=\"label\">Create Project</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class=\"menu-item\" role=\"none\">
                <a href=\"task.html\" role=\"menuitem\" title=\"Tasks\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\">
                        <path d=\"M9 11l3 3L22 4\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                        <path d=\"M2 12h6M2 6h10M2 18h10\"  stroke=\"currentColor\" stroke-width=\"1.6\"/>
                    </svg>
                    <span class=\"label\">Tasks</span>
                </a>
            </li>

            <li class=\"menu-item\" role=\"none\">
                <a href=\"reports.html\" role=\"menuitem\" title=\"Reports\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\">
                        <path d=\"M4 19V5M10 19V9M16 19V3M22 19H2\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                    </svg>
                    <span class=\"label\">Reports</span>
                </a>
            </li>

            <li class=\"menu-item\" role=\"none\">
                <a href=\"board.html\" role=\"menuitem\" title=\"Board\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\">
                        <rect x=\"3\" y=\"4\" width=\"6\" height=\"16\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                        <rect x=\"10\" y=\"4\" width=\"5\" height=\"10\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                        <rect x=\"16\" y=\"4\" width=\"5\" height=\"13\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                    </svg>
                    <span class=\"label\">Board</span>
                </a>
            </li>

            <li class=\"menu-item\" role=\"none\">
                <a href=\"user.html\" role=\"menuitem\" title=\"User\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\">
                    <circle cx=\"12\" cy=\"8\" r=\"4\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                    <path d=\"M4 20c2-4 6-6 8-6s6 2 8 6\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                    </svg>
                    <span class=\"label\">User</span>
                </a>
            </li>

            <li class=\"menu-item\" role=\"none\">
                <a href=\"team.html\" role=\"menuitem\" title=\"Team\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\">
                        <circle cx=\"9\" cy=\"8\" r=\"3\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                        <circle cx=\"17\" cy=\"8\" r=\"3\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                        <path d=\"M2 20c1.5-3 4-5 7-5M22 20c-1.5-3-4-5-7-5\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                    </svg>
                    <span class=\"label\">Team</span>
                </a>
            </li>

            <li class=\"menu-item\" role=\"none\">
                <a href=\"department.html\" role=\"menuitem\" title=\"Department\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\">
                        <rect x=\"3\" y=\"3\" width=\"6\" height=\"6\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                        <rect x=\"15\" y=\"3\" width=\"6\" height=\"6\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                        <rect x=\"9\" y=\"15\" width=\"6\" height=\"6\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                        <path d=\"M6 9v6h12V9\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                    </svg>
                    <span class=\"label\">Department</span>
                </a>
            </li>
            <li class=\"menu-item\" role=\"none\">
                <a href=\"chat.html\" role=\"menuitem\" title=\"Chat\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\">
                    <path d=\"M21 12c0 4-4 7-9 7-1.1 0-2.2-.2-3.2-.5L3 21l1.8-4.3C4.3 15.4 4 13.7 4 12c0-4 4-7 9-7s8 3 8 7z\"
                            stroke=\"currentColor\" stroke-width=\"1.6\"/>
                    </svg>
                    <span class=\"label\">Chat</span>
                </a>
            </li>

            <li class=\"menu-item\" role=\"none\">
                <a href=\"webmail.html\" role=\"menuitem\" title=\"Webmail\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\">
                        <rect x=\"3\" y=\"5\" width=\"18\" height=\"14\" rx=\"2\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                        <path d=\"M3 7l9 6 9-6\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                    </svg>
                    <span class=\"label\">Webmail</span>
                </a>
            </li>

            <li class=\"menu-item\" role=\"none\">
                <a href=\"";
        // line 126
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_settingadmin");
        yield "\" role=\"menuitem\" title=\"Settings\">
                    <svg  fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z\" />
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z\" />
                    </svg>
                    <span class=\"label\">Settings</span>
                </a>
            </li>

             <li class=\"menu-item has-submenu\" role=\"none\">
                <a href=\"#\" role=\"menuitem\" title=\"Pages\" class=\"menu-link\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\">
                        <path d=\"M6 3h9l5 5v13H6z\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                        <path d=\"M15 3v5h5\"  stroke=\"currentColor\" stroke-width=\"1.6\"/>
                    </svg>
                    <span class=\"label\">Pages</span>
                    <span class=\"arrow\">›</span>
                </a>
                <ul class=\"submenu\">
                    <li>
                        <a href=\"login.html\" title=\"Login\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\">
                                <path d=\"M10 17l5-5-5-5M15 12H3\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                                <path d=\"M17 3h4v18h-4\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                            </svg>
                            <span class=\"label\">Login</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"signup.html\" title=\"Signup\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\">
                                <circle cx=\"12\" cy=\"8\" r=\"3\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                                <path d=\"M6 20c1.5-3 4.5-5 6-5s4.5 2 6 5M12 2v3\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                            </svg>
                            <span class=\"label\">Signup</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"forgot-password.html\" title=\"Forgot Password\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\">
                                <path d=\"M6 10V8a6 6 0 0112 0v2\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                                <rect x=\"5\" y=\"10\" width=\"14\" height=\"10\" rx=\"2\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                            </svg>
                            <span class=\"label\">Forgot Password</span>
                        </a>
                    </li>
                     <li>
                        <a href=\"404.html\" title=\"404\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\">
                                <circle cx=\"12\" cy=\"12\" r=\"9\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                                <path d=\"M8 8l8 8M16 8l-8 8\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                            </svg>
                            <span class=\"label\">404</span>
                        </a>
                    </li>
                     <li>
                        <a href=\"500.html\" title=\"500\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\">
                                <circle cx=\"12\" cy=\"12\" r=\"9\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                                <path d=\"M8 8l8 8M16 8l-8 8\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                            </svg>
                            <span class=\"label\">500</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>

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
        return "component/sidebaradmin.html.twig";
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
        return array (  178 => 126,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("    <!-- ========== SIDEBAR ========== -->
    <aside class=\"sidebar\" id=\"sidebar\" aria-label=\"Sidebar navigation\">
        <ul class=\"menu\" role=\"menu\">
            <li class=\"menu-item\" role=\"none\">
                <a href=\"{{path('app_admin')}}\" class=\"active\" role=\"menuitem\" title=\"Dashboard\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\">
                    <path d=\"M3 13h8V3H3v10zM13 21h8V11h-8v10zM13 3v6h8V3h-8zM3 21h8v-6H3v6z\"
                            stroke=\"currentColor\" stroke-width=\"1.6\"/>
                    </svg>
                    <span class=\"label\">Dashboard</span>
                </a>
            </li>

            <li class=\"menu-item has-submenu\" role=\"none\">
                <a href=\"#\" role=\"menuitem\" title=\"Projects\" class=\"menu-link\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\">
                        <rect x=\"3\" y=\"4\" width=\"18\" height=\"6\" rx=\"2\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                        <rect x=\"3\" y=\"14\" width=\"18\" height=\"6\" rx=\"2\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                    </svg>
                    <span class=\"label\">Projects</span>
                    <span class=\"arrow\">›</span>
                </a>
                <ul class=\"submenu\">
                    <li>
                        <a href=\"project.html\" title=\"All Projects\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\">
                            <path d=\"M4 6h16M4 12h16M4 18h16\"  stroke=\"currentColor\" stroke-width=\"1.6\"/>
                            </svg>
                            <span class=\"label\">All Projects</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"project-create.html\" title=\"Project Created\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\">
                             <path d=\"M12 5v14M5 12h14\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                            </svg>
                            <span class=\"label\">Create Project</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class=\"menu-item\" role=\"none\">
                <a href=\"task.html\" role=\"menuitem\" title=\"Tasks\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\">
                        <path d=\"M9 11l3 3L22 4\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                        <path d=\"M2 12h6M2 6h10M2 18h10\"  stroke=\"currentColor\" stroke-width=\"1.6\"/>
                    </svg>
                    <span class=\"label\">Tasks</span>
                </a>
            </li>

            <li class=\"menu-item\" role=\"none\">
                <a href=\"reports.html\" role=\"menuitem\" title=\"Reports\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\">
                        <path d=\"M4 19V5M10 19V9M16 19V3M22 19H2\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                    </svg>
                    <span class=\"label\">Reports</span>
                </a>
            </li>

            <li class=\"menu-item\" role=\"none\">
                <a href=\"board.html\" role=\"menuitem\" title=\"Board\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\">
                        <rect x=\"3\" y=\"4\" width=\"6\" height=\"16\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                        <rect x=\"10\" y=\"4\" width=\"5\" height=\"10\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                        <rect x=\"16\" y=\"4\" width=\"5\" height=\"13\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                    </svg>
                    <span class=\"label\">Board</span>
                </a>
            </li>

            <li class=\"menu-item\" role=\"none\">
                <a href=\"user.html\" role=\"menuitem\" title=\"User\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\">
                    <circle cx=\"12\" cy=\"8\" r=\"4\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                    <path d=\"M4 20c2-4 6-6 8-6s6 2 8 6\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                    </svg>
                    <span class=\"label\">User</span>
                </a>
            </li>

            <li class=\"menu-item\" role=\"none\">
                <a href=\"team.html\" role=\"menuitem\" title=\"Team\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\">
                        <circle cx=\"9\" cy=\"8\" r=\"3\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                        <circle cx=\"17\" cy=\"8\" r=\"3\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                        <path d=\"M2 20c1.5-3 4-5 7-5M22 20c-1.5-3-4-5-7-5\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                    </svg>
                    <span class=\"label\">Team</span>
                </a>
            </li>

            <li class=\"menu-item\" role=\"none\">
                <a href=\"department.html\" role=\"menuitem\" title=\"Department\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\">
                        <rect x=\"3\" y=\"3\" width=\"6\" height=\"6\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                        <rect x=\"15\" y=\"3\" width=\"6\" height=\"6\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                        <rect x=\"9\" y=\"15\" width=\"6\" height=\"6\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                        <path d=\"M6 9v6h12V9\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                    </svg>
                    <span class=\"label\">Department</span>
                </a>
            </li>
            <li class=\"menu-item\" role=\"none\">
                <a href=\"chat.html\" role=\"menuitem\" title=\"Chat\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\">
                    <path d=\"M21 12c0 4-4 7-9 7-1.1 0-2.2-.2-3.2-.5L3 21l1.8-4.3C4.3 15.4 4 13.7 4 12c0-4 4-7 9-7s8 3 8 7z\"
                            stroke=\"currentColor\" stroke-width=\"1.6\"/>
                    </svg>
                    <span class=\"label\">Chat</span>
                </a>
            </li>

            <li class=\"menu-item\" role=\"none\">
                <a href=\"webmail.html\" role=\"menuitem\" title=\"Webmail\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\">
                        <rect x=\"3\" y=\"5\" width=\"18\" height=\"14\" rx=\"2\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                        <path d=\"M3 7l9 6 9-6\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                    </svg>
                    <span class=\"label\">Webmail</span>
                </a>
            </li>

            <li class=\"menu-item\" role=\"none\">
                <a href=\"{{path('app_admin_settingadmin')}}\" role=\"menuitem\" title=\"Settings\">
                    <svg  fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z\" />
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z\" />
                    </svg>
                    <span class=\"label\">Settings</span>
                </a>
            </li>

             <li class=\"menu-item has-submenu\" role=\"none\">
                <a href=\"#\" role=\"menuitem\" title=\"Pages\" class=\"menu-link\">
                    <svg viewBox=\"0 0 24 24\" fill=\"none\">
                        <path d=\"M6 3h9l5 5v13H6z\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                        <path d=\"M15 3v5h5\"  stroke=\"currentColor\" stroke-width=\"1.6\"/>
                    </svg>
                    <span class=\"label\">Pages</span>
                    <span class=\"arrow\">›</span>
                </a>
                <ul class=\"submenu\">
                    <li>
                        <a href=\"login.html\" title=\"Login\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\">
                                <path d=\"M10 17l5-5-5-5M15 12H3\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                                <path d=\"M17 3h4v18h-4\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                            </svg>
                            <span class=\"label\">Login</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"signup.html\" title=\"Signup\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\">
                                <circle cx=\"12\" cy=\"8\" r=\"3\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                                <path d=\"M6 20c1.5-3 4.5-5 6-5s4.5 2 6 5M12 2v3\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                            </svg>
                            <span class=\"label\">Signup</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"forgot-password.html\" title=\"Forgot Password\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\">
                                <path d=\"M6 10V8a6 6 0 0112 0v2\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                                <rect x=\"5\" y=\"10\" width=\"14\" height=\"10\" rx=\"2\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                            </svg>
                            <span class=\"label\">Forgot Password</span>
                        </a>
                    </li>
                     <li>
                        <a href=\"404.html\" title=\"404\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\">
                                <circle cx=\"12\" cy=\"12\" r=\"9\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                                <path d=\"M8 8l8 8M16 8l-8 8\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                            </svg>
                            <span class=\"label\">404</span>
                        </a>
                    </li>
                     <li>
                        <a href=\"500.html\" title=\"500\">
                            <svg viewBox=\"0 0 24 24\" fill=\"none\">
                                <circle cx=\"12\" cy=\"12\" r=\"9\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                                <path d=\"M8 8l8 8M16 8l-8 8\" stroke=\"currentColor\" stroke-width=\"1.6\"/>
                            </svg>
                            <span class=\"label\">500</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>

", "component/sidebaradmin.html.twig", "C:\\Users\\M_INFO\\Music\\scouts\\templates\\component\\sidebaradmin.html.twig");
    }
}
