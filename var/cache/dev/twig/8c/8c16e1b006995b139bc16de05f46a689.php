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
        yield "\t";
        yield from $this->load("component/sidebaradmin.html.twig", 9)->unwrap()->yield($context);
        // line 10
        yield "
\t<!-- ========== MAIN CONTENT ========== -->
\t<main class=\"main\" id=\"main\" role=\"main\">
\t\t<div class=\"page-header\">
\t\t\t<div class=\"page-title\">
\t\t\t\t<h1>Update
\t\t\t\t\t";
        // line 16
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "fullName", [], "any", true, true, false, 16) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "fullName", [], "any", false, false, false, 16)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "fullName", [], "any", false, false, false, 16), "html", null, true)) : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", true, true, false, 16) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "username", [], "any", false, false, false, 16)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "username", [], "any", false, false, false, 16), "html", null, true)) : ("User"))));
        yield "</h1>
\t\t\t\t<p>Update user profile access</p>
\t\t\t</div>
\t\t\t<div class=\"page-actions\">
\t\t\t\t<a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_setting_list");
        yield "\" class=\"btn-secondary\">
\t\t\t\t\t<i class=\"bi bi-arrow-left\"></i>
\t\t\t\t\tBack to task
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>

\t\t<!-- User Update Form -->
\t\t";
        // line 28
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_start', ["attr" => ["id" => "userForm"]]);
        // line 32
        yield "

\t\t<!-- Basic Information Card -->
\t\t<div class=\"form-card\">
\t\t\t<div class=\"form-header\">
\t\t\t\t<h3 class=\"form-title\">
\t\t\t\t\t<i class=\"bi bi-person\"></i>
\t\t\t\t\tBasic Information
\t\t\t\t</h3>
\t\t\t\t<p class=\"form-subtitle\">Provide personal details and contact information</p>
\t\t\t</div>

\t\t\t<div class=\"avatar-upload\">
\t\t\t\t<div class=\"avatar-preview\" id=\"avatarPreviewWrapper\">
\t\t\t\t\t<img id=\"avatarPreview\" src=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/profiles/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()), "profilePictureName", [], "any", false, false, false, 46))), "html", null, true);
        yield "\" alt=\"Avatar\">
\t\t\t\t</div>

\t\t\t\t<div class=\"avatar-upload-controls\">
\t\t\t\t\t";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "profilePictureFile", [], "any", false, false, false, 50), 'row', ["label" => false, "attr" => ["class" => "avatar-input form-control", "id" => "avatarInput", "accept" => "image/*", "type" => "file"]]);
        // line 58
        yield "
\t\t\t\t\t<div class=\"avatar-hint\">
\t\t\t\t\t\tRecommended: Square image, 500x500px, max 2MB
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\" for=\"fullName\">
\t\t\t\t\t\t\tFull Name
\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "username", [], "any", false, false, false, 72), 'row', ["label" => false, "attr" => ["class" => "form-control", "id" => "fullName", "placeholder" => "Enter full name", "required" => true]]);
        // line 80
        yield "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\" for=\"adresse\">
\t\t\t\t\t\t\tAdresse
\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "adresse", [], "any", false, false, false, 89), 'row', ["label" => false, "attr" => ["class" => "form-control", "id" => "adresse", "placeholder" => "Enter address", "required" => true]]);
        // line 97
        yield "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\" for=\"email\">
\t\t\t\t\t\t\tEmail Address
\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "email", [], "any", false, false, false, 109), 'row', ["label" => false, "attr" => ["class" => "form-control", "id" => "email", "placeholder" => "user@company.com"]]);
        // line 116
        yield "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\" for=\"phone\">Phone Number</label>
\t\t\t\t\t\t";
        // line 122
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "phone", [], "any", false, false, false, 122), 'row', ["label" => false, "attr" => ["class" => "form-control", "id" => "phone", "placeholder" => "+1 (555) 000-0000"]]);
        // line 129
        yield "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\" for=\"jobTitle\">
\t\t\t\t\t\t\tProfession Title
\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t";
        // line 141
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "profession", [], "any", false, false, false, 141), 'row', ["label" => false, "attr" => ["class" => "form-control", "id" => "jobTitle", "placeholder" => "e.g., Senior Designer, Project Manager"]]);
        // line 148
        yield "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\" for=\"sexe\">
\t\t\t\t\t\t\tSexe
\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t";
        // line 157
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), "sexe", [], "any", false, false, false, 157), 'row', ["label" => false, "attr" => ["class" => "form-control", "id" => "sexe", "placeholder" => "e.g., Male, Female"]]);
        // line 164
        yield "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\" for=\"dateNaissance\">
\t\t\t\t\t\t\tDate de naissance
\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t";
        // line 176
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "dateNaissance", [], "any", false, false, false, 176), 'row', ["label" => false, "attr" => ["class" => "form-control", "id" => "dateNaissance"]]);
        // line 182
        yield "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\" for=\"lieuNaissance\">
\t\t\t\t\t\t\tLieu de naissance
\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t";
        // line 191
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "lieuNaissance", [], "any", false, false, false, 191), 'row', ["label" => false, "attr" => ["class" => "form-control", "id" => "lieuNaissance", "placeholder" => "e.g., Paris, London"]]);
        // line 198
        yield "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"form-label\" for=\"bio\">Bio/Introduction</label>
\t\t\t\t";
        // line 205
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 205, $this->source); })()), "biography", [], "any", false, false, false, 205), 'row', ["label" => false, "attr" => ["class" => "form-control", "id" => "bio", "placeholder" => "Write a brief bio or introduction for the user..."]]);
        // line 212
        yield "
\t\t\t</div>
\t\t</div>

\t\t<!-- National Identity Card Setup -->
\t\t<div class=\"form-card\">
\t\t\t<div class=\"form-header\">
\t\t\t\t<h3 class=\"form-title\">
\t\t\t\t\t<i class=\"bi bi-gear\"></i>
\t\t\t\t\tNational Identity Card Setup
\t\t\t\t</h3>
\t\t\t\t<p class=\"form-subtitle\">Configure CIN</p>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\" for=\"cin\">
\t\t\t\t\t\t\tCarte d'identité Nationale
\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t";
        // line 233
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 233, $this->source); })()), "cin", [], "any", false, false, false, 233), 'row', ["label" => false, "attr" => ["class" => "form-control cin-input", "id" => "cin", "placeholder" => "Enter CIN", "required" => false]]);
        // line 241
        yield "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\" for=\"nationalite\">
\t\t\t\t\t\t\tNationalité
\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t";
        // line 250
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 250, $this->source); })()), "nationalite", [], "any", false, false, false, 250), 'row', ["label" => false, "attr" => ["class" => "form-control cin-input", "id" => "nationalite", "placeholder" => "Enter nationalité", "required" => false]]);
        // line 258
        yield "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\" for=\"lieuDelivrance\">
\t\t\t\t\t\t\tLieu de délivrance
\t\t\t\t\t\t</label>
\t\t\t\t\t\t";
        // line 269
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 269, $this->source); })()), "lieuDelivrance", [], "any", false, false, false, 269), 'row', ["label" => false, "attr" => ["class" => "form-control cin-input", "id" => "lieuDelivrance", "placeholder" => "Enter lieu de delivrance", "required" => false]]);
        // line 277
        yield "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\" for=\"dateDelivrance\">
\t\t\t\t\t\t\tDate de delivrance
\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t";
        // line 286
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 286, $this->source); })()), "dateDelivrance", [], "any", false, false, false, 286), 'row', ["label" => false, "attr" => ["class" => "form-control cin-input", "id" => "dateDelivrance", "placeholder" => "Enter date of delivrance", "required" => false]]);
        // line 294
        yield "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\" for=\"paysDelivrance\">
\t\t\t\t\t\t\tPays de délivrance
\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t";
        // line 303
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 303, $this->source); })()), "paysDelivrance", [], "any", false, false, false, 303), 'row', ["label" => false, "attr" => ["class" => "form-control cin-input", "id" => "paysDelivrance", "placeholder" => "Enter pays de delivrance", "required" => false]]);
        // line 311
        yield "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Scouts Assignments -->
\t\t<div class=\"form-card\">
\t\t\t<div class=\"form-header\">
\t\t\t\t<h3 class=\"form-title\">
\t\t\t\t\t<i class=\"bi bi-building\"></i>
\t\t\t\t\tScouts Assignments
\t\t\t\t</h3>
\t\t\t\t<p class=\"form-subtitle\">Assign user to scouts with specific roles</p>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\" for=\"fonctionScout\">
\t\t\t\t\t\t\tFonction Scout
\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t";
        // line 334
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 334, $this->source); })()), "fonctionScout", [], "any", false, false, false, 334), 'row', ["label" => false, "attr" => ["class" => "form-control", "id" => "fonctionScout", "placeholder" => "Enter fonction dans le scout", "required" => true]]);
        // line 342
        yield "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\" for=\"dateEntrescout\">
\t\t\t\t\t\t\tStart Date for scout
\t\t\t\t\t\t</label>
\t\t\t\t\t\t";
        // line 350
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 350, $this->source); })()), "dateEntrescout", [], "any", false, false, false, 350), 'row', ["label" => false, "attr" => ["class" => "form-control", "id" => "dateEntrescout"]]);
        // line 356
        yield "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\" for=\"password\">
\t\t\t\t\t\t\tPassword
\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t";
        // line 368
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 368, $this->source); })()), "plainPassword", [], "any", false, false, false, 368), 'row', ["label" => false, "attr" => ["class" => "form-control", "id" => "password", "placeholder" => "Create a password", "required" => true]]);
        // line 376
        yield "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Form Actions -->
\t\t<div class=\"form-actions\">
\t\t\t<div>
\t\t\t\t<button type=\"button\" class=\"btn-outline\" id=\"saveDraftBtn\">
\t\t\t\t\t<i class=\"bi bi-save\"></i>
\t\t\t\t\tSave as Draft
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"d-flex gap-3\">
\t\t\t\t<button type=\"reset\" class=\"btn-secondary\">
\t\t\t\t\t<i class=\"bi bi-x-circle\"></i>
\t\t\t\t\tCancel
\t\t\t\t</button>
\t\t\t\t<button type=\"submit\" class=\"btn-primary\">
\t\t\t\t\t<i class=\"bi bi-plus-circle\"></i>
\t\t\t\t\tUpdate User
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 402
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 402, $this->source); })()), 'form_end');
        yield "
\t</main>

\t";
        // line 405
        yield from $this->load("component/footeradmin.html.twig", 405)->unwrap()->yield($context);
        // line 406
        yield "
\t";
        // line 407
        yield from $this->unwrap()->yieldBlock('javascript', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

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

        // line 408
        yield "\t\t <script>
\t\tdocument.addEventListener('DOMContentLoaded', function() {
\t\t    const cinInput = document.querySelector('.cin-input');
\t\t
\t\t    if (!cinInput) {
\t\t        console.warn('Champ CIN non trouvé (classe: .cin-input)');
\t\t        return;
\t\t    }
\t\t
\t\t    // Fonction pour nettoyer et obtenir la valeur brute
\t\t    function getCleanCinValue(value) {
\t\t        return value
\t\t            .replace(/\\s/g, '')           // Supprime tous les espaces
\t\t            .replace(/[^\\d]/g, '')        // Garde uniquement les chiffres
\t\t            .slice(0, 12);                // Limite à 12 chiffres maximum
\t\t    }
\t\t
\t\t    // Événement input : formatage en temps réel
\t\t    cinInput.addEventListener('input', function(e) {
\t\t        let value = e.target.value;
\t\t        let cleanValue = getCleanCinValue(value);
\t\t        
\t\t        // Formatage avec espaces tous les 3 chiffres
\t\t        let formatted = '';
\t\t        for (let i = 0; i < cleanValue.length; i += 3) {
\t\t            formatted += cleanValue.substr(i, 3) + ' ';
\t\t        }
\t\t        e.target.value = formatted.trim();
\t\t    });
\t\t
\t\t    // Événement focus : sélectionne tout le texte
\t\t    cinInput.addEventListener('focus', function() {
\t\t        this.select();
\t\t    });
\t\t
\t\t    // Événement blur : nettoie complètement (optionnel)
\t\t    cinInput.addEventListener('blur', function() {
\t\t        let cleanValue = getCleanCinValue(this.value);
\t\t        if (cleanValue.length === 12) {
\t\t            // Reformate proprement si complet
\t\t            let formatted = '';
\t\t            for (let i = 0; i < cleanValue.length; i += 3) {
\t\t                formatted += cleanValue.substr(i, 3) + ' ';
\t\t            }
\t\t            this.value = formatted.trim();
\t\t        } else if (cleanValue.length === 0) {
\t\t            this.value = ''; // Vide si rien
\t\t        }
\t\t    });
\t\t
\t\t    // Fonction utilitaire pour récupérer la valeur brute n'importe où
\t\t    window.getCinValue = function() {
\t\t        return getCleanCinValue(cinInput.value);
\t\t    };
\t\t
\t\t    // Exemple d'utilisation
\t\t    console.log('CIN brute:', window.getCinValue());
\t\t});
\t\t
\t</script>
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
        return array (  484 => 408,  461 => 407,  458 => 406,  456 => 405,  450 => 402,  422 => 376,  420 => 368,  406 => 356,  404 => 350,  394 => 342,  392 => 334,  367 => 311,  365 => 303,  354 => 294,  352 => 286,  341 => 277,  339 => 269,  326 => 258,  324 => 250,  313 => 241,  311 => 233,  288 => 212,  286 => 205,  277 => 198,  275 => 191,  264 => 182,  262 => 176,  248 => 164,  246 => 157,  235 => 148,  233 => 141,  219 => 129,  217 => 122,  209 => 116,  207 => 109,  193 => 97,  191 => 89,  180 => 80,  178 => 72,  162 => 58,  160 => 50,  153 => 46,  137 => 32,  135 => 28,  124 => 20,  117 => 16,  109 => 10,  106 => 9,  103 => 8,  90 => 7,  78 => 4,  65 => 3,  42 => 1,);
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
\t\t\t\t\t{{ user.fullName ?? user.username ?? 'User' }}</h1>
\t\t\t\t<p>Update user profile access</p>
\t\t\t</div>
\t\t\t<div class=\"page-actions\">
\t\t\t\t<a href=\"{{ path('admin_setting_list') }}\" class=\"btn-secondary\">
\t\t\t\t\t<i class=\"bi bi-arrow-left\"></i>
\t\t\t\t\tBack to task
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>

\t\t<!-- User Update Form -->
\t\t{{ form_start(form, {
            attr: {
                id: 'userForm'
            }
        }) }}

\t\t<!-- Basic Information Card -->
\t\t<div class=\"form-card\">
\t\t\t<div class=\"form-header\">
\t\t\t\t<h3 class=\"form-title\">
\t\t\t\t\t<i class=\"bi bi-person\"></i>
\t\t\t\t\tBasic Information
\t\t\t\t</h3>
\t\t\t\t<p class=\"form-subtitle\">Provide personal details and contact information</p>
\t\t\t</div>

\t\t\t<div class=\"avatar-upload\">
\t\t\t\t<div class=\"avatar-preview\" id=\"avatarPreviewWrapper\">
\t\t\t\t\t<img id=\"avatarPreview\" src=\"{{ asset('images/profiles/' ~ user.profilePictureName) }}\" alt=\"Avatar\">
\t\t\t\t</div>

\t\t\t\t<div class=\"avatar-upload-controls\">
\t\t\t\t\t{{ form_row(form.profilePictureFile, {
                        label: false,
                        attr: {
                            class: 'avatar-input form-control',
                            id: 'avatarInput',
                            accept: 'image/*',
                            type: 'file'
                        }
                    }) }}
\t\t\t\t\t<div class=\"avatar-hint\">
\t\t\t\t\t\tRecommended: Square image, 500x500px, max 2MB
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\" for=\"fullName\">
\t\t\t\t\t\t\tFull Name
\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t{{ form_row(form.username, {
                            label: false,
                            attr: {
                                class: 'form-control',
                                id: 'fullName',
                                placeholder: 'Enter full name',
                                required: true
                            }
                        }) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\" for=\"adresse\">
\t\t\t\t\t\t\tAdresse
\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t{{ form_row(form.adresse, {
                            label: false,
                            attr: {
                                class: 'form-control',
                                id: 'adresse',
                                placeholder: 'Enter address',
                                required: true
                            }
                        }) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\" for=\"email\">
\t\t\t\t\t\t\tEmail Address
\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t{{ form_row(form.email, {
                            label: false,
                            attr: {
                                class: 'form-control',
                                id: 'email',
                                placeholder: 'user@company.com'
                            }
                        }) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\" for=\"phone\">Phone Number</label>
\t\t\t\t\t\t{{ form_row(form.phone, {
                            label: false,
                            attr: {
                                class: 'form-control',
                                id: 'phone',
                                placeholder: '+1 (555) 000-0000'
                            }
                        }) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\" for=\"jobTitle\">
\t\t\t\t\t\t\tProfession Title
\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t{{ form_row(form.profession, {
                            label: false,
                            attr: {
                                class: 'form-control',
                                id: 'jobTitle',
                                placeholder: 'e.g., Senior Designer, Project Manager'
                            }
                        }) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\" for=\"sexe\">
\t\t\t\t\t\t\tSexe
\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t{{ form_row(form.sexe, {
                            label: false,
                            attr: {
                                class: 'form-control',
                                id: 'sexe',
                                placeholder: 'e.g., Male, Female'
                            }
                        }) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\" for=\"dateNaissance\">
\t\t\t\t\t\t\tDate de naissance
\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t{{ form_row(form.dateNaissance, {
                            label: false,
                            attr: {
                                class: 'form-control',
                                id: 'dateNaissance'
                            }
                        }) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\" for=\"lieuNaissance\">
\t\t\t\t\t\t\tLieu de naissance
\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t{{ form_row(form.lieuNaissance, {
                            label: false,
                            attr: {
                                class: 'form-control',
                                id: 'lieuNaissance',
                                placeholder: 'e.g., Paris, London'
                            }
                        }) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"form-label\" for=\"bio\">Bio/Introduction</label>
\t\t\t\t{{ form_row(form.biography, {
                    label: false,
                    attr: {
                        class: 'form-control',
                        id: 'bio',
                        placeholder: 'Write a brief bio or introduction for the user...'
                    }
                }) }}
\t\t\t</div>
\t\t</div>

\t\t<!-- National Identity Card Setup -->
\t\t<div class=\"form-card\">
\t\t\t<div class=\"form-header\">
\t\t\t\t<h3 class=\"form-title\">
\t\t\t\t\t<i class=\"bi bi-gear\"></i>
\t\t\t\t\tNational Identity Card Setup
\t\t\t\t</h3>
\t\t\t\t<p class=\"form-subtitle\">Configure CIN</p>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\" for=\"cin\">
\t\t\t\t\t\t\tCarte d'identité Nationale
\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t{{ form_row(form.cin, {
                            label: false,
                            attr: {
                                class: 'form-control cin-input',
                                id: 'cin',
                                placeholder: 'Enter CIN',
                                required: false
                            }
                        }) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\" for=\"nationalite\">
\t\t\t\t\t\t\tNationalité
\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t{{ form_row(form.nationalite, {
                            label: false,
                            attr: {
                                class: 'form-control cin-input',
                                id: 'nationalite',
                                placeholder: 'Enter nationalité',
                                required: false
                            }
                        }) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\" for=\"lieuDelivrance\">
\t\t\t\t\t\t\tLieu de délivrance
\t\t\t\t\t\t</label>
\t\t\t\t\t\t{{ form_row(form.lieuDelivrance, {
                            label: false,
                            attr: {
                                class: 'form-control cin-input',
                                id: 'lieuDelivrance',
                                placeholder: 'Enter lieu de delivrance',
                                required: false
                            }
                        }) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\" for=\"dateDelivrance\">
\t\t\t\t\t\t\tDate de delivrance
\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t{{ form_row(form.dateDelivrance, {
                            label: false,
                            attr: {
                                class: 'form-control cin-input',
                                id: 'dateDelivrance',
                                placeholder: 'Enter date of delivrance',
                                required: false
                            }
                        }) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\" for=\"paysDelivrance\">
\t\t\t\t\t\t\tPays de délivrance
\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t{{ form_row(form.paysDelivrance, {
                            label: false,
                            attr: {
                                class: 'form-control cin-input',
                                id: 'paysDelivrance',
                                placeholder: 'Enter pays de delivrance',
                                required: false
                            }
                        }) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Scouts Assignments -->
\t\t<div class=\"form-card\">
\t\t\t<div class=\"form-header\">
\t\t\t\t<h3 class=\"form-title\">
\t\t\t\t\t<i class=\"bi bi-building\"></i>
\t\t\t\t\tScouts Assignments
\t\t\t\t</h3>
\t\t\t\t<p class=\"form-subtitle\">Assign user to scouts with specific roles</p>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\" for=\"fonctionScout\">
\t\t\t\t\t\t\tFonction Scout
\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t{{ form_row(form.fonctionScout, {
                            label: false,
                            attr: {
                                class: 'form-control',
                                id: 'fonctionScout',
                                placeholder: 'Enter fonction dans le scout',
                                required: true
                            }
                        }) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\" for=\"dateEntrescout\">
\t\t\t\t\t\t\tStart Date for scout
\t\t\t\t\t\t</label>
\t\t\t\t\t\t{{ form_row(form.dateEntrescout, {
                            label: false,
                            attr: {
                                class: 'form-control',
                                id: 'dateEntrescout'
                            }
                        }) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\" for=\"password\">
\t\t\t\t\t\t\tPassword
\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t{{ form_row(form.plainPassword, {
                            label: false,
                            attr: {
                                class: 'form-control',
                                id: 'password',
                                placeholder: 'Create a password',
                                required: true
                            }
                        }) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Form Actions -->
\t\t<div class=\"form-actions\">
\t\t\t<div>
\t\t\t\t<button type=\"button\" class=\"btn-outline\" id=\"saveDraftBtn\">
\t\t\t\t\t<i class=\"bi bi-save\"></i>
\t\t\t\t\tSave as Draft
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class=\"d-flex gap-3\">
\t\t\t\t<button type=\"reset\" class=\"btn-secondary\">
\t\t\t\t\t<i class=\"bi bi-x-circle\"></i>
\t\t\t\t\tCancel
\t\t\t\t</button>
\t\t\t\t<button type=\"submit\" class=\"btn-primary\">
\t\t\t\t\t<i class=\"bi bi-plus-circle\"></i>
\t\t\t\t\tUpdate User
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>

\t\t{{ form_end(form) }}
\t</main>

\t{% include 'component/footeradmin.html.twig' %}

\t{% block javascript %}
\t\t <script>
\t\tdocument.addEventListener('DOMContentLoaded', function() {
\t\t    const cinInput = document.querySelector('.cin-input');
\t\t
\t\t    if (!cinInput) {
\t\t        console.warn('Champ CIN non trouvé (classe: .cin-input)');
\t\t        return;
\t\t    }
\t\t
\t\t    // Fonction pour nettoyer et obtenir la valeur brute
\t\t    function getCleanCinValue(value) {
\t\t        return value
\t\t            .replace(/\\s/g, '')           // Supprime tous les espaces
\t\t            .replace(/[^\\d]/g, '')        // Garde uniquement les chiffres
\t\t            .slice(0, 12);                // Limite à 12 chiffres maximum
\t\t    }
\t\t
\t\t    // Événement input : formatage en temps réel
\t\t    cinInput.addEventListener('input', function(e) {
\t\t        let value = e.target.value;
\t\t        let cleanValue = getCleanCinValue(value);
\t\t        
\t\t        // Formatage avec espaces tous les 3 chiffres
\t\t        let formatted = '';
\t\t        for (let i = 0; i < cleanValue.length; i += 3) {
\t\t            formatted += cleanValue.substr(i, 3) + ' ';
\t\t        }
\t\t        e.target.value = formatted.trim();
\t\t    });
\t\t
\t\t    // Événement focus : sélectionne tout le texte
\t\t    cinInput.addEventListener('focus', function() {
\t\t        this.select();
\t\t    });
\t\t
\t\t    // Événement blur : nettoie complètement (optionnel)
\t\t    cinInput.addEventListener('blur', function() {
\t\t        let cleanValue = getCleanCinValue(this.value);
\t\t        if (cleanValue.length === 12) {
\t\t            // Reformate proprement si complet
\t\t            let formatted = '';
\t\t            for (let i = 0; i < cleanValue.length; i += 3) {
\t\t                formatted += cleanValue.substr(i, 3) + ' ';
\t\t            }
\t\t            this.value = formatted.trim();
\t\t        } else if (cleanValue.length === 0) {
\t\t            this.value = ''; // Vide si rien
\t\t        }
\t\t    });
\t\t
\t\t    // Fonction utilitaire pour récupérer la valeur brute n'importe où
\t\t    window.getCinValue = function() {
\t\t        return getCleanCinValue(cinInput.value);
\t\t    };
\t\t
\t\t    // Exemple d'utilisation
\t\t    console.log('CIN brute:', window.getCinValue());
\t\t});
\t\t
\t</script>
\t{% endblock %}
{% endblock %}
", "admin/settingadmin/edit.html.twig", "C:\\Users\\M_INFO\\Music\\scouts\\templates\\admin\\settingadmin\\edit.html.twig");
    }
}
