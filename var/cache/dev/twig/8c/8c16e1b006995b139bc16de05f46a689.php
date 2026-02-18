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

/* admin/settingadmin/edit.html.twig */
class __TwigTemplate_b34bb8860c16d60eaa9889dd4018314e extends Template
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
            'javascript' => [$this, 'block_javascript'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/settingadmin/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/settingadmin/edit.html.twig"));

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
\t<main class=\"main\" id=\"main\" role=\"main\">
\t\t<div class=\"page-header\">
\t\t\t<div class=\"page-title\">
\t\t\t\t<h1>Update
\t\t\t\t\t";
        // line 16
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 16), "fullName", [], "any", true, true, false, 16) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "fullName", [], "any", false, false, false, 16)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "fullName", [], "any", false, false, false, 16), "html", null, true)) : ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 16), "username", [], "any", true, true, false, 16) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "username", [], "any", false, false, false, 16)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "username", [], "any", false, false, false, 16), "html", null, true)) : ("User"))));
        yield "</h1>
\t\t\t\t<p>";
        // line 17
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Update your profiles access") : (""));
        yield "</p>
\t\t\t</div>
\t\t\t<div class=\"page-actions\">
\t\t\t\t<a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_setting_list");
        yield "\" class=\"btn-secondary\">
\t\t\t\t\t<i class=\"bi bi-arrow-left\"></i>
\t\t\t\t\tBack to task</a>
\t\t\t</div>
\t\t</div>

\t\t<!-- User Creation Form -->
\t\t<form id=\"userForm\">
\t\t\t";
        // line 28
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_start');
        yield "
\t\t\t<!-- Basic Information Card -->
\t\t\t<div class=\"form-card\">
\t\t\t\t<div class=\"form-header\">
\t\t\t\t\t<h3 class=\"form-title\">
\t\t\t\t\t\t<i class=\"bi bi-person\"></i>
\t\t\t\t\t\tBasic Information</h3>
\t\t\t\t\t<p class=\"form-subtitle\">Provide personal details and contact information</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"avatar-upload\">
\t\t\t\t\t<div class=\"avatar-preview\" id=\"avatarPreviewWrapper\">
\t\t\t\t\t\t<img id=\"avatarPreview\" src=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/profiles/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 40, $this->source); })()), "profilePictureName", [], "any", false, false, false, 40))), "html", null, true);
        yield "\" alt=\"Avatar\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"avatar-upload-controls\">
\t\t\t\t\t\t";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "profilePictureFile", [], "any", false, false, false, 44), 'row', ["label" => false, "attr" => ["class" => "avatar-input form-control", "id" => "avatarInput", "accept" => "image/*", "type" => "file"]]);
        // line 53
        yield "
\t\t\t\t\t\t<div class=\"avatar-hint\">
\t\t\t\t\t\t\tRecommended: Square image, 500x500px, max 2MB
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"form-label\" for=\"firstName\">Full Name
\t\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "username", [], "any", false, false, false, 67), 'row', ["label" => false, "attr" => ["class" => "form-control", "id" => "fullName", "placeholder" => "Enter full name", "required" => true, "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 74
(isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 74, $this->source); })()), "username", [], "any", false, false, false, 74)]]);
        // line 76
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"form-label\" for=\"lastName\">Adresse
\t\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "adresse", [], "any", false, false, false, 84), 'row', ["label" => false, "attr" => ["class" => "form-control", "id" => "lastName", "placeholder" => "Enter address", "required" => true, "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 91
(isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 91, $this->source); })()), "adresse", [], "any", false, false, false, 91)]]);
        // line 93
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"form-label\" for=\"email\">Email Address
\t\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t";
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "email", [], "any", false, false, false, 104), 'row', ["label" => false, "attr" => ["class" => "form-control", "id" => "email", "placeholder" => "user@company.com", "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 110
(isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 110, $this->source); })()), "email", [], "any", false, false, false, 110)]]);
        // line 112
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"form-label\" for=\"phone\">Phone Number</label>
\t\t\t\t\t\t\t";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "phone", [], "any", false, false, false, 118), 'row', ["label" => false, "attr" => ["class" => "form-control", "id" => "phone", "placeholder" => "+1 (555) 000-0000", "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 124
(isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 124, $this->source); })()), "phone", [], "any", false, false, false, 124)]]);
        // line 126
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"form-label\" for=\"jobTitle\">Profession Title
\t\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t";
        // line 137
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "profession", [], "any", false, false, false, 137), 'row', ["label" => false, "attr" => ["class" => "form-control", "id" => "jobTitle", "placeholder" => "e.g., Senior Designer, Project Manager", "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 143
(isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 143, $this->source); })()), "profession", [], "any", false, false, false, 143)]]);
        // line 145
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"form-label\" for=\"bio\">Bio/Introduction</label>
\t\t\t\t\t";
        // line 152
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "biography", [], "any", false, false, false, 152), 'row', ["label" => false, "attr" => ["class" => "form-control", "id" => "bio", "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 157
(isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 157, $this->source); })()), "biography", [], "any", false, false, false, 157), "placeholder" => "Write a brief bio or introduction for the user..."]]);
        // line 160
        yield "
\t\t\t\t</div>

\t\t\t\t";
        // line 210
        yield "

\t\t\t\t";
        // line 268
        yield "
\t\t\t\t<!-- Account Setup Card -->
\t\t\t\t\t<div class=\"form-card\"> <div class=\"form-header\">
\t\t\t\t\t\t<h3 class=\"form-title\">
\t\t\t\t\t\t\t<i class=\"bi bi-gear\"></i>
\t\t\t\t\t\t\tAccount Setup</h3>
\t\t\t\t\t\t<p class=\"form-subtitle\">Configure user account and login credentials</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"username\">Catrte d'identité National
\t\t\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t";
        // line 283
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 283, $this->source); })()), "cin", [], "any", false, false, false, 283), 'row', ["label" => false, "attr" => ["class" => "form-control cin-input", "id" => "cin", "placeholder" => "Enter CIN", "required" => false, "value" => CoreExtension::getAttribute($this->env, $this->source,         // line 290
(isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 290, $this->source); })()), "cin", [], "any", false, false, false, 290)]]);
        // line 292
        yield "
\t\t\t\t\t\t\t\t";
        // line 294
        yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"password\">Password
\t\t\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"Create a password\" required>
\t\t\t\t\t\t\t\t\t<button class=\"btn-outline\" type=\"button\" id=\"showPasswordBtn\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-eye\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"startDate\">Start Date</label>
\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" id=\"startDate\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"reportingTo\">Reporting To</label>
\t\t\t\t\t\t\t\t<select class=\"form-select\" id=\"reportingTo\">
\t\t\t\t\t\t\t\t\t<option value=\"\">Select manager</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\">John Doe (Project Lead)</option>
\t\t\t\t\t\t\t\t\t<option value=\"2\">Lisa Rodriguez (Product Manager)</option>
\t\t\t\t\t\t\t\t\t<option value=\"3\">Michael Brown (Tech Lead)</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\">Send Welcome Email</label>
\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t<label class=\"toggle-switch\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\">
\t\t\t\t\t\t\t\t<span class=\"toggle-slider\"></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<span class=\"form-check-label\">Send welcome email with login instructions</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Form Actions -->
\t\t\t\t<div class=\"form-actions\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<button type=\"button\" class=\"btn-outline\" id=\"saveDraftBtn\">
\t\t\t\t\t\t\t<i class=\"bi bi-save\"></i>
\t\t\t\t\t\t\tSave as Draft
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-flex gap-3\">
\t\t\t\t\t\t<button type=\"reset\" class=\"btn-secondary\">
\t\t\t\t\t\t\t<i class=\"bi bi-x-circle\"></i>
\t\t\t\t\t\t\tCancel
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<button type=\"submit\" class=\"btn-primary\">
\t\t\t\t\t\t\t<i class=\"bi bi-plus-circle\"></i>
\t\t\t\t\t\t\tCreate User
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 362
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 362, $this->source); })()), 'form_end');
        yield "
\t\t\t</form>
\t\t</main>

\t\t";
        // line 366
        yield from $this->load("component/footeradmin.html.twig", 366)->unwrap()->yield($context);
        // line 367
        yield "\t\t";
        yield from $this->unwrap()->yieldBlock('javascript', $context, $blocks);
        // line 397
        yield "\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 367
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 368
        yield "\t\t\t <script>
\t\t\t\tdocument.addEventListener('DOMContentLoaded', function() {
\t\t\t    const cinInput = document.querySelector('.cin-input'); // ⚠️ ID Symfony = nom_du_form + _ + nom_du_champ
\t\t\t    
\t\t\t    // Vérifie si l'élément existe avant d'ajouter l'event listener
\t\t\t    if (!cinInput) {
\t\t\t        console.warn('Champ CIN non trouvé (ID: cin-input)'). //Vérifiez le nom du champ dans le formulaire Symfony.');
\t\t\t        return;
\t\t\t    }
\t\t\t
\t\t\t    cinInput.addEventListener('input', function(e) {  // ⚠️ 'input' pas 'cin-input'
\t\t\t        let value = e.target.value.replace(/\\s/g, '').replace(/[^\\d]/g, '');  // ⚠️ \\s pas \\\\s
\t\t\t
\t\t\t        // Formatage par groupes de 3
\t\t\t        let formatted = '';
\t\t\t        for (let i = 0; i < value.length; i += 3) {
\t\t\t            formatted += value.substr(i, 3) + ' ';
\t\t\t        }
\t\t\t        e.target.value = formatted.trim().substring(0, 21);
\t\t\t    });
\t\t\t    
\t\t\t    // Bonus : sélectionne tout au focus
\t\t\t    cinInput.addEventListener('focus', function() {
\t\t\t        this.select();
\t\t\t    });
\t\t\t});
\t\t\t
\t\t\t\t\t\t</script>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/settingadmin/edit.html.twig";
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
        return array (  388 => 368,  375 => 367,  364 => 397,  361 => 367,  359 => 366,  352 => 362,  282 => 294,  279 => 292,  277 => 290,  276 => 283,  259 => 268,  255 => 210,  250 => 160,  248 => 157,  247 => 152,  238 => 145,  236 => 143,  235 => 137,  222 => 126,  220 => 124,  219 => 118,  211 => 112,  209 => 110,  208 => 104,  195 => 93,  193 => 91,  192 => 84,  182 => 76,  180 => 74,  179 => 67,  163 => 53,  161 => 44,  154 => 40,  139 => 28,  128 => 20,  122 => 17,  118 => 16,  111 => 11,  109 => 10,  106 => 9,  103 => 8,  90 => 7,  78 => 4,  65 => 3,  42 => 1,);
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
\t<main class=\"main\" id=\"main\" role=\"main\">
\t\t<div class=\"page-header\">
\t\t\t<div class=\"page-title\">
\t\t\t\t<h1>Update
\t\t\t\t\t{{ app.user.fullName ?? app.user.username ?? 'User' }}</h1>
\t\t\t\t<p>{{ app.user ? 'Update your profiles access' }}</p>
\t\t\t</div>
\t\t\t<div class=\"page-actions\">
\t\t\t\t<a href=\"{{ path('admin_setting_list') }}\" class=\"btn-secondary\">
\t\t\t\t\t<i class=\"bi bi-arrow-left\"></i>
\t\t\t\t\tBack to task</a>
\t\t\t</div>
\t\t</div>

\t\t<!-- User Creation Form -->
\t\t<form id=\"userForm\">
\t\t\t{{ form_start(form) }}
\t\t\t<!-- Basic Information Card -->
\t\t\t<div class=\"form-card\">
\t\t\t\t<div class=\"form-header\">
\t\t\t\t\t<h3 class=\"form-title\">
\t\t\t\t\t\t<i class=\"bi bi-person\"></i>
\t\t\t\t\t\tBasic Information</h3>
\t\t\t\t\t<p class=\"form-subtitle\">Provide personal details and contact information</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"avatar-upload\">
\t\t\t\t\t<div class=\"avatar-preview\" id=\"avatarPreviewWrapper\">
\t\t\t\t\t\t<img id=\"avatarPreview\" src=\"{{ asset('images/profiles/' ~ currentUser.profilePictureName) }}\" alt=\"Avatar\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"avatar-upload-controls\">
\t\t\t\t\t\t{{ form_row(form.profilePictureFile, {
\t\t\t\t\t\t\tlabel: false,
\t\t\t\t\t\t\tattr: {
\t\t\t\t\t\t\t\tclass: 'avatar-input form-control',
\t\t\t\t\t\t\t\tid: 'avatarInput',
\t\t\t\t\t\t\t\taccept: 'image/*',
\t\t\t\t\t\t\t\ttype: 'file',

\t\t\t\t\t\t\t}
\t\t\t\t\t\t}) }}
\t\t\t\t\t\t<div class=\"avatar-hint\">
\t\t\t\t\t\t\tRecommended: Square image, 500x500px, max 2MB
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"form-label\" for=\"firstName\">Full Name
\t\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t{{form_row(form.username, {
                                label: false,
                                attr: {
                                    class: 'form-control',
                                    id: 'fullName',
                                    placeholder: 'Enter full name',
                                    required: true,
                                    value: currentUser.username
                                }
                            })}}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"form-label\" for=\"lastName\">Adresse
\t\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t{{form_row(form.adresse, {
                                label: false,
                                attr: {
                                    class: 'form-control',
                                    id: 'lastName',
                                    placeholder: 'Enter address',
                                    required: true,
                                    value: currentUser.adresse
                                }
                            })}}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"form-label\" for=\"email\">Email Address
\t\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t{{form_row(form.email, {
                                label: false,
                                attr: {
                                    class: 'form-control',
                                    id: 'email',
                                    placeholder: 'user@company.com',
                                    value: currentUser.email
                                }
                            })}}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"form-label\" for=\"phone\">Phone Number</label>
\t\t\t\t\t\t\t{{form_row(form.phone, {
                                label: false,
                                attr: {
                                    class: 'form-control',
                                    id: 'phone',
                                    placeholder: '+1 (555) 000-0000',
                                    value: currentUser.phone
                                }
                            })}}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"form-label\" for=\"jobTitle\">Profession Title
\t\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t{{form_row(form.profession, {
                                label: false,
                                attr: {
                                    class: 'form-control',
                                    id: 'jobTitle',
                                    placeholder: 'e.g., Senior Designer, Project Manager',
                                    value: currentUser.profession
                                }
                            })}}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"form-label\" for=\"bio\">Bio/Introduction</label>
\t\t\t\t\t{{form_row(form.biography, {
                        label: false,
                        attr: {
                            class: 'form-control',
                            id: 'bio',
                            value: currentUser.biography,
                            placeholder: 'Write a brief bio or introduction for the user...'
                        }
                    })}}
\t\t\t\t</div>

\t\t\t\t{# <!-- Department & Role Assignments Card -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-card\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"form-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-building\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tDepartment Assignments</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"form-subtitle\">Assign user to departments with specific roles</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"department-assignments\" id=\"assignmentsContainer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"assignment-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"assignment-details\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"department-select\" name=\"department[]\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Select Department</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"design\" selected>Design Team</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"development\">Development</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"product\">Product Management</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"marketing\">Marketing</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"sales\">Sales</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"support\">Customer Support</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"operations\">Operations</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"hr\">Human Resources</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"finance\">Finance</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"role-select\" name=\"role[]\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Select Role</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"member\" selected>Team Member</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"lead\">Team Lead</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"manager\">Manager</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"director\">Director</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"contributor\">Contributor</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"reviewer\">Reviewer</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"approver\">Approver</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"observer\">Observer</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"remove-assignment\" onclick=\"removeAssignment(this)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-trash\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-outline w-100\" id=\"addAssignmentBtn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-plus-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tAdd Another Department Assignment
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div> #}


\t\t\t\t{# <!-- Skills & Expertise Card -->
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-card\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"form-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-lightning\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSkills & Expertise</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"form-subtitle\">Add user skills and areas of expertise</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Primary Skills</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"skills-container\" id=\"skillsContainer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"skill-tag\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tUI Design
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"remove\" data-skill=\"UI Design\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"skill-tag\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tUser Research
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"remove\" data-skill=\"User Research\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"skill-tag\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPrototyping
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"remove\" data-skill=\"Prototyping\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-x\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"skill-input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"skill-input\" id=\"newSkillInput\" placeholder=\"Add a skill...\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-outline\" id=\"addSkillBtn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tAdd
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"experienceLevel\">Experience Level</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-select\" id=\"experienceLevel\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Select level</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"entry\">Entry Level (0-2 years)</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"mid\" selected>Mid Level (3-5 years)</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"senior\">Senior Level (6-10 years)</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"lead\">Lead (10+ years)</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"tools\">Tools & Technologies</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" id=\"tools\" placeholder=\"List tools and technologies the user is proficient with...\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div> #}

\t\t\t\t<!-- Account Setup Card -->
\t\t\t\t\t<div class=\"form-card\"> <div class=\"form-header\">
\t\t\t\t\t\t<h3 class=\"form-title\">
\t\t\t\t\t\t\t<i class=\"bi bi-gear\"></i>
\t\t\t\t\t\t\tAccount Setup</h3>
\t\t\t\t\t\t<p class=\"form-subtitle\">Configure user account and login credentials</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"username\">Catrte d'identité National
\t\t\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t{{form_row(form.cin, {
\t\t\t\t\t\t\t\t\tlabel: false,
\t\t\t\t\t\t\t\t\tattr: {
\t\t\t\t\t\t\t\t\t\tclass: 'form-control cin-input',
\t\t\t\t\t\t\t\t\t\tid: 'cin',
\t\t\t\t\t\t\t\t\t\tplaceholder: 'Enter CIN',
\t\t\t\t\t\t\t\t\t\trequired: false,
\t\t\t\t\t\t\t\t\t\tvalue: currentUser.cin
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t})}}
\t\t\t\t\t\t\t\t{# <input type=\"text\" class=\"form-control\" id=\"username\" placeholder=\"Choose a username\" required> #}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"password\">Password
\t\t\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"Create a password\" required>
\t\t\t\t\t\t\t\t\t<button class=\"btn-outline\" type=\"button\" id=\"showPasswordBtn\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-eye\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"startDate\">Start Date</label>
\t\t\t\t\t\t\t\t<input type=\"date\" class=\"form-control\" id=\"startDate\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"form-label\" for=\"reportingTo\">Reporting To</label>
\t\t\t\t\t\t\t\t<select class=\"form-select\" id=\"reportingTo\">
\t\t\t\t\t\t\t\t\t<option value=\"\">Select manager</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\">John Doe (Project Lead)</option>
\t\t\t\t\t\t\t\t\t<option value=\"2\">Lisa Rodriguez (Product Manager)</option>
\t\t\t\t\t\t\t\t\t<option value=\"3\">Michael Brown (Tech Lead)</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\">Send Welcome Email</label>
\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t<label class=\"toggle-switch\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\">
\t\t\t\t\t\t\t\t<span class=\"toggle-slider\"></span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<span class=\"form-check-label\">Send welcome email with login instructions</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Form Actions -->
\t\t\t\t<div class=\"form-actions\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<button type=\"button\" class=\"btn-outline\" id=\"saveDraftBtn\">
\t\t\t\t\t\t\t<i class=\"bi bi-save\"></i>
\t\t\t\t\t\t\tSave as Draft
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-flex gap-3\">
\t\t\t\t\t\t<button type=\"reset\" class=\"btn-secondary\">
\t\t\t\t\t\t\t<i class=\"bi bi-x-circle\"></i>
\t\t\t\t\t\t\tCancel
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<button type=\"submit\" class=\"btn-primary\">
\t\t\t\t\t\t\t<i class=\"bi bi-plus-circle\"></i>
\t\t\t\t\t\t\tCreate User
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{{ form_end(form) }}
\t\t\t</form>
\t\t</main>

\t\t{% include 'component/footeradmin.html.twig' %}
\t\t{% block javascript %}
\t\t\t <script>
\t\t\t\tdocument.addEventListener('DOMContentLoaded', function() {
\t\t\t    const cinInput = document.querySelector('.cin-input'); // ⚠️ ID Symfony = nom_du_form + _ + nom_du_champ
\t\t\t    
\t\t\t    // Vérifie si l'élément existe avant d'ajouter l'event listener
\t\t\t    if (!cinInput) {
\t\t\t        console.warn('Champ CIN non trouvé (ID: cin-input)'). //Vérifiez le nom du champ dans le formulaire Symfony.');
\t\t\t        return;
\t\t\t    }
\t\t\t
\t\t\t    cinInput.addEventListener('input', function(e) {  // ⚠️ 'input' pas 'cin-input'
\t\t\t        let value = e.target.value.replace(/\\s/g, '').replace(/[^\\d]/g, '');  // ⚠️ \\s pas \\\\s
\t\t\t
\t\t\t        // Formatage par groupes de 3
\t\t\t        let formatted = '';
\t\t\t        for (let i = 0; i < value.length; i += 3) {
\t\t\t            formatted += value.substr(i, 3) + ' ';
\t\t\t        }
\t\t\t        e.target.value = formatted.trim().substring(0, 21);
\t\t\t    });
\t\t\t    
\t\t\t    // Bonus : sélectionne tout au focus
\t\t\t    cinInput.addEventListener('focus', function() {
\t\t\t        this.select();
\t\t\t    });
\t\t\t});
\t\t\t
\t\t\t\t\t\t</script>
\t\t{% endblock %}
\t{% endblock %}
", "admin/settingadmin/edit.html.twig", "C:\\Users\\M_INFO\\Music\\scouts\\templates\\admin\\settingadmin\\edit.html.twig");
    }
}
