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

/* admin/mpiandrakitra/new.html.twig */
class __TwigTemplate_07a938a1d16c881783e0a67650ef7068 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/mpiandrakitra/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/mpiandrakitra/new.html.twig"));

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
        yield "\tMpiandrakitra - admin - new
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
        yield from $this->load("component/headeradmin.html.twig", 8)->unwrap()->yield($context);
        // line 9
        yield from $this->load("component/sidebaradmin.html.twig", 9)->unwrap()->yield($context);
        // line 10
        yield "
<!-- ========== MAIN CONTENT ========== -->
<main class=\"main\" id=\"main\" role=\"main\">
\t<div class=\"page-header\">
\t\t<div class=\"page-title\">
\t\t\t<h1>Update
\t\t\t\t";
        // line 16
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", true, true, false, 16) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "username", [], "any", false, false, false, 16)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "username", [], "any", false, false, false, 16), "html", null, true)) : ("User"));
        yield "</h1>
\t\t\t<p>Update Mpiandrakitra profile access</p>
\t\t</div>
\t\t<div class=\"page-actions\">
\t\t\t<a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_mpiandrakitra");
        yield "\" class=\"btn-secondary\">
\t\t\t\t<i class=\"bi bi-arrow-left\"></i>
\t\t\t\tBack to mpiandrakitra list
\t\t\t</a>
\t\t</div>
\t</div>

\t<!-- User Update Form -->
\t";
        // line 28
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_start', ["attr" => ["id" => "mpIdform"]]);
        // line 32
        yield "

\t<!-- Basic Information Card -->
\t<div class=\"form-card\">
\t\t<div class=\"form-header\">
\t\t\t<h3 class=\"form-title\">
\t\t\t\t<i class=\"bi bi-person\"></i>
\t\t\t\tBasic Information
\t\t\t</h3>
\t\t\t<p class=\"form-subtitle\">Provide personal details and contact information</p>
\t\t</div>

\t\t<div class=\"avatar-upload\">
\t\t\t<div class=\"avatar-preview\" id=\"avatarPreviewWrapper\">
\t\t\t\t<img id=\"avatarPreview\" src=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/75hc.jpg"), "html", null, true);
        yield "\" alt=\"Avatar\">
\t\t\t</div>

\t\t\t<div class=\"avatar-upload-controls\">
\t\t\t\t";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "mpiandrakitraPictureFile", [], "any", false, false, false, 50), 'row', ["label" => false, "attr" => ["class" => "avatar-input form-control", "id" => "avatarInput", "accept" => "image/*", "type" => "file"]]);
        // line 58
        yield "
\t\t\t\t<div class=\"avatar-hint\">
\t\t\t\t\tRecommended: Square image, 500x500px, max 2MB
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"form-label\" for=\"fullName\">
\t\t\t\t\t\tFull Name
\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t</label>
\t\t\t\t\t";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "nomMp", [], "any", false, false, false, 72), 'row', ["label" => false, "attr" => ["class" => "form-control", "id" => "fullName", "placeholder" => "Enter full name", "required" => true]]);
        // line 80
        yield "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"form-label\" for=\"adresse\">
\t\t\t\t\t\tAdresse
\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t</label>
\t\t\t\t\t";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "adresseMp", [], "any", false, false, false, 89), 'row', ["label" => false, "attr" => ["class" => "form-control", "id" => "adresse", "placeholder" => "Enter address", "required" => true]]);
        // line 97
        yield "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"form-label\" for=\"email\">
\t\t\t\t\t\tEmail Address
\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t</label>
\t\t\t\t\t";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "emailMp", [], "any", false, false, false, 109), 'row', ["label" => false, "attr" => ["class" => "form-control", "id" => "email", "placeholder" => "user@company.com"]]);
        // line 116
        yield "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"form-label\" for=\"phone\">Phone Number</label>
\t\t\t\t\t";
        // line 122
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "contactMp", [], "any", false, false, false, 122), 'row', ["label" => false, "attr" => ["class" => "form-control", "id" => "phone", "placeholder" => "+1 (555) 000-0000"]]);
        // line 129
        yield "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"form-label\" for=\"jobTitle\">
\t\t\t\t\t\tProfession Title
\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t</label>
\t\t\t\t\t";
        // line 141
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "professionMp", [], "any", false, false, false, 141), 'row', ["label" => false, "attr" => ["class" => "form-control", "id" => "jobTitle", "placeholder" => "e.g., Senior Designer, Project Manager"]]);
        // line 148
        yield "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"form-label\" for=\"dateEntrescout\">
\t\t\t\t\t\tLieu du travail
\t\t\t\t\t</label>
\t\t\t\t\t";
        // line 156
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 156, $this->source); })()), "lieudetravail", [], "any", false, false, false, 156), 'row', ["label" => false, "attr" => ["class" => "form-control", "id" => "lieudetravail"]]);
        // line 162
        yield "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"form-label\" for=\"sexe\">
\t\t\t\t\t\tSexe
\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t</label>
\t\t\t\t\t";
        // line 171
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), "sexe", [], "any", false, false, false, 171), 'row', ["label" => false, "attr" => ["class" => "form-control", "id" => "sexe", "placeholder" => "e.g., Male, Female"]]);
        // line 178
        yield "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"form-label\" for=\"dateNaissance\">
\t\t\t\t\t\tDate de naissance
\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t</label>
\t\t\t\t\t";
        // line 190
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), "dateNaissMp", [], "any", false, false, false, 190), 'row', ["label" => false, "attr" => ["class" => "form-control", "id" => "dateNaissance"]]);
        // line 196
        yield "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"form-label\" for=\"lieuNaissance\">
\t\t\t\t\t\tLieu de naissance
\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t</label>
\t\t\t\t\t";
        // line 205
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 205, $this->source); })()), "lieuNaissMp", [], "any", false, false, false, 205), 'row', ["label" => false, "attr" => ["class" => "form-control", "id" => "lieuNaissance", "placeholder" => "e.g., Paris, London"]]);
        // line 212
        yield "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t</div>

\t<!-- National Identity Card Setup -->
\t<div class=\"form-card\">
\t\t<div class=\"form-header\">
\t\t\t<h3 class=\"form-title\">
\t\t\t\t<i class=\"bi bi-gear\"></i>
\t\t\t\tNational Identity Card Setup
\t\t\t</h3>
\t\t\t<p class=\"form-subtitle\">Configure CIN</p>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"form-label\" for=\"cin\">
\t\t\t\t\t\tCarte d'identité Nationale
\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t</label>
\t\t\t\t\t";
        // line 237
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 237, $this->source); })()), "cinMp", [], "any", false, false, false, 237), 'row', ["label" => false, "attr" => ["class" => "form-control cin-input", "id" => "cin", "placeholder" => "Enter CIN", "required" => false]]);
        // line 245
        yield "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"form-label\" for=\"nationalite\">
\t\t\t\t\t\tNationalité
\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t</label>
\t\t\t\t\t";
        // line 254
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 254, $this->source); })()), "nationalite", [], "any", false, false, false, 254), 'row', ["label" => false, "attr" => ["class" => "form-control cin-input", "id" => "nationalite", "placeholder" => "Enter nationalité", "required" => false]]);
        // line 262
        yield "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"form-label\" for=\"dateDelivrance\">
\t\t\t\t\t\tDate de delivrance
\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t</label>
\t\t\t\t\t";
        // line 272
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 272, $this->source); })()), "dateDelivraceCINMp", [], "any", false, false, false, 272), 'row', ["label" => false, "attr" => ["class" => "form-control cin-input", "id" => "dateDelivrance", "placeholder" => "Enter date of delivrance", "required" => false]]);
        // line 280
        yield "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"form-label\" for=\"lieuDelivrance\">
\t\t\t\t\t\tLieu de délivrance
\t\t\t\t\t</label>
\t\t\t\t\t";
        // line 290
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 290, $this->source); })()), "lieuCinMp", [], "any", false, false, false, 290), 'row', ["label" => false, "attr" => ["class" => "form-control cin-input", "id" => "lieuDelivrance", "placeholder" => "Enter lieu de delivrance", "required" => false]]);
        // line 298
        yield "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"form-label\" for=\"paysDelivrance\">
\t\t\t\t\t\tPays de délivrance
\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t</label>
\t\t\t\t\t";
        // line 308
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 308, $this->source); })()), "paysDelivranceMp", [], "any", false, false, false, 308), 'row', ["label" => false, "attr" => ["class" => "form-control cin-input", "id" => "paysDelivrance", "placeholder" => "Enter pays de delivrance", "required" => false]]);
        // line 316
        yield "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"form-label\" for=\"paysDelivrance\">
\t\t\t\t\t\tSituation Matrimoniale
\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t</label>
\t\t\t\t\t";
        // line 325
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 325, $this->source); })()), "situationMatriMp", [], "any", false, false, false, 325), 'row', ["label" => false, "attr" => ["class" => "form-control cin-input", "id" => "situationMatriMp", "placeholder" => "Situation Matrimoniale", "required" => false]]);
        // line 333
        yield "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"form-label\" for=\"paysDelivrance\">
\t\t\t\t\t\tNombre d'enfant prise en charge
\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t</label>
\t\t\t\t\t";
        // line 342
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 342, $this->source); })()), "nombreEnfantMp", [], "any", false, false, false, 342), 'row', ["label" => false, "attr" => ["class" => "form-control cin-input", "id" => "nombreEnfantMp", "placeholder" => "Nombre d'enfant prise en charge", "required" => false]]);
        // line 350
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
\t\t\t\t\t\t\tFonction Scout Sampana
\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t";
        // line 373
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 373, $this->source); })()), "sampana", [], "any", false, false, false, 373), 'row', ["label" => false, "attr" => ["class" => "form-control", "id" => "fonctionScout", "placeholder" => "Enter fonction dans le scout", "required" => true]]);
        // line 381
        yield "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\" for=\"dateEntrescout\">
\t\t\t\t\t\t\tFonction dans le scout
\t\t\t\t\t\t</label>
\t\t\t\t\t\t";
        // line 389
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 389, $this->source); })()), "fonctionscoutMp", [], "any", false, false, false, 389), 'row', ["label" => false, "attr" => ["class" => "form-control", "id" => "fonctionscoutMp"]]);
        // line 395
        yield "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\" for=\"dateEntrescout\">
\t\t\t\t\t\t\tStart Date for scout
\t\t\t\t\t\t</label>
\t\t\t\t\t\t";
        // line 403
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 403, $this->source); })()), "dateEntrescout", [], "any", false, false, false, 403), 'row', ["label" => false, "attr" => ["class" => "form-control", "id" => "dateEntrescout"]]);
        // line 409
        yield "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\" for=\"dateEntrescout\">
\t\t\t\t\t\t\tVelirano Date for scout
\t\t\t\t\t\t</label>
\t\t\t\t\t\t";
        // line 419
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 419, $this->source); })()), "veliranoDateMp", [], "any", false, false, false, 419), 'row', ["label" => false, "attr" => ["class" => "form-control", "id" => "dateVelirano"]]);
        // line 425
        yield "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\" for=\"dateEntrescout\">
\t\t\t\t\t\t\tLieu velirano
\t\t\t\t\t\t</label>
\t\t\t\t\t\t";
        // line 433
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 433, $this->source); })()), "lieuVeliranoMp", [], "any", false, false, false, 433), 'row', ["label" => false, "attr" => ["class" => "form-control", "id" => "lieuVeliranoMp"]]);
        // line 439
        yield "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\" for=\"dateEntrescout\">
\t\t\t\t\t\t\tTokompanompoana Date for scout
\t\t\t\t\t\t</label>
\t\t\t\t\t\t";
        // line 447
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 447, $this->source); })()), "TompokompanompoanaMp", [], "any", false, false, false, 447), 'row', ["label" => false, "attr" => ["class" => "form-control", "id" => "dateTokompanompoana"]]);
        // line 453
        yield "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\" for=\"dateEntrescout\">
\t\t\t\t\t\tRéligion
\t\t\t\t\t\t</label>
\t\t\t\t\t\t";
        // line 461
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 461, $this->source); })()), "religionMp", [], "any", false, false, false, 461), 'row', ["label" => false, "attr" => ["class" => "form-control", "id" => "religonMp"]]);
        // line 467
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
\t\t\t\t\tCreate Mpiandrakitra
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 493
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 493, $this->source); })()), 'form_end');
        yield "
\t</main>

\t";
        // line 496
        yield from $this->load("component/footeradmin.html.twig", 496)->unwrap()->yield($context);
        // line 497
        yield "
\t";
        // line 498
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

        // line 499
        yield "\t\t     <script>
\t\t\t\t\t\t\t\tdocument.addEventListener('DOMContentLoaded', function() {
\t\t\t\t\t\t\t\t    const cinInput = document.querySelector('.cin-input');
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t    if (!cinInput) {
\t\t\t\t\t\t\t\t        console.warn('Champ CIN non trouvé (classe: .cin-input)');
\t\t\t\t\t\t\t\t        return;
\t\t\t\t\t\t\t\t    }
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t    // Fonction pour nettoyer et obtenir la valeur brute
\t\t\t\t\t\t\t\t    function getCleanCinValue(value) {
\t\t\t\t\t\t\t\t        return value
\t\t\t\t\t\t\t\t            .replace(/\\s/g, '')           // Supprime tous les espaces
\t\t\t\t\t\t\t\t            .replace(/[^\\d]/g, '')        // Garde uniquement les chiffres
\t\t\t\t\t\t\t\t            .slice(0, 12);                // Limite à 12 chiffres maximum
\t\t\t\t\t\t\t\t    }
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t    // Événement input : formatage en temps réel
\t\t\t\t\t\t\t\t    cinInput.addEventListener('input', function(e) {
\t\t\t\t\t\t\t\t        let value = e.target.value;
\t\t\t\t\t\t\t\t        let cleanValue = getCleanCinValue(value);
\t\t\t\t\t\t\t\t        
\t\t\t\t\t\t\t\t        // Formatage avec espaces tous les 3 chiffres
\t\t\t\t\t\t\t\t        let formatted = '';
\t\t\t\t\t\t\t\t        for (let i = 0; i < cleanValue.length; i += 3) {
\t\t\t\t\t\t\t\t            formatted += cleanValue.substr(i, 3) + ' ';
\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t        e.target.value = formatted.trim();
\t\t\t\t\t\t\t\t    });
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t    // Événement focus : sélectionne tout le texte
\t\t\t\t\t\t\t\t    cinInput.addEventListener('focus', function() {
\t\t\t\t\t\t\t\t        this.select();
\t\t\t\t\t\t\t\t    });
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t    // Événement blur : nettoie complètement (optionnel)
\t\t\t\t\t\t\t\t    cinInput.addEventListener('blur', function() {
\t\t\t\t\t\t\t\t        let cleanValue = getCleanCinValue(this.value);
\t\t\t\t\t\t\t\t        if (cleanValue.length === 12) {
\t\t\t\t\t\t\t\t            // Reformate proprement si complet
\t\t\t\t\t\t\t\t            let formatted = '';
\t\t\t\t\t\t\t\t            for (let i = 0; i < cleanValue.length; i += 3) {
\t\t\t\t\t\t\t\t                formatted += cleanValue.substr(i, 3) + ' ';
\t\t\t\t\t\t\t\t            }
\t\t\t\t\t\t\t\t            this.value = formatted.trim();
\t\t\t\t\t\t\t\t        } else if (cleanValue.length === 0) {
\t\t\t\t\t\t\t\t            this.value = ''; // Vide si rien
\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t    });
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t    // Fonction utilitaire pour récupérer la valeur brute n'importe où
\t\t\t\t\t\t\t\t    window.getCinValue = function() {
\t\t\t\t\t\t\t\t        return getCleanCinValue(cinInput.value);
\t\t\t\t\t\t\t\t    };
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t    // Exemple d'utilisation
\t\t\t\t\t\t\t\t    console.log('CIN brute:', window.getCinValue());
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t</script>
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
        return "admin/mpiandrakitra/new.html.twig";
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
        return array (  560 => 499,  537 => 498,  534 => 497,  532 => 496,  526 => 493,  498 => 467,  496 => 461,  486 => 453,  484 => 447,  474 => 439,  472 => 433,  462 => 425,  460 => 419,  448 => 409,  446 => 403,  436 => 395,  434 => 389,  424 => 381,  422 => 373,  397 => 350,  395 => 342,  384 => 333,  382 => 325,  371 => 316,  369 => 308,  357 => 298,  355 => 290,  343 => 280,  341 => 272,  329 => 262,  327 => 254,  316 => 245,  314 => 237,  287 => 212,  285 => 205,  274 => 196,  272 => 190,  258 => 178,  256 => 171,  245 => 162,  243 => 156,  233 => 148,  231 => 141,  217 => 129,  215 => 122,  207 => 116,  205 => 109,  191 => 97,  189 => 89,  178 => 80,  176 => 72,  160 => 58,  158 => 50,  151 => 46,  135 => 32,  133 => 28,  122 => 20,  115 => 16,  107 => 10,  105 => 9,  103 => 8,  90 => 7,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'component/baseadmin.html.twig' %}

{% block title %}
\tMpiandrakitra - admin - new
{% endblock %}

{% block body %}
{% include 'component/headeradmin.html.twig' %}
{% include 'component/sidebaradmin.html.twig' %}

<!-- ========== MAIN CONTENT ========== -->
<main class=\"main\" id=\"main\" role=\"main\">
\t<div class=\"page-header\">
\t\t<div class=\"page-title\">
\t\t\t<h1>Update
\t\t\t\t{{ user.username ?? 'User' }}</h1>
\t\t\t<p>Update Mpiandrakitra profile access</p>
\t\t</div>
\t\t<div class=\"page-actions\">
\t\t\t<a href=\"{{ path('app_admin_mpiandrakitra') }}\" class=\"btn-secondary\">
\t\t\t\t<i class=\"bi bi-arrow-left\"></i>
\t\t\t\tBack to mpiandrakitra list
\t\t\t</a>
\t\t</div>
\t</div>

\t<!-- User Update Form -->
\t{{ form_start(form, {
            attr: {
                id: 'mpIdform'
            }
        }) }}

\t<!-- Basic Information Card -->
\t<div class=\"form-card\">
\t\t<div class=\"form-header\">
\t\t\t<h3 class=\"form-title\">
\t\t\t\t<i class=\"bi bi-person\"></i>
\t\t\t\tBasic Information
\t\t\t</h3>
\t\t\t<p class=\"form-subtitle\">Provide personal details and contact information</p>
\t\t</div>

\t\t<div class=\"avatar-upload\">
\t\t\t<div class=\"avatar-preview\" id=\"avatarPreviewWrapper\">
\t\t\t\t<img id=\"avatarPreview\" src=\"{{ asset('images/75hc.jpg') }}\" alt=\"Avatar\">
\t\t\t</div>

\t\t\t<div class=\"avatar-upload-controls\">
\t\t\t\t{{ form_row(form.mpiandrakitraPictureFile, {
                        label: false,
                        attr: {
                            class: 'avatar-input form-control',
                            id: 'avatarInput',
                            accept: 'image/*',
                            type: 'file'
                        }
                    }) }}
\t\t\t\t<div class=\"avatar-hint\">
\t\t\t\t\tRecommended: Square image, 500x500px, max 2MB
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"form-label\" for=\"fullName\">
\t\t\t\t\t\tFull Name
\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t</label>
\t\t\t\t\t{{ form_row(form.nomMp, {
                            label: false,
                            attr: {
                                class: 'form-control',
                                id: 'fullName',
                                placeholder: 'Enter full name',
                                required: true
                            }
                        }) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"form-label\" for=\"adresse\">
\t\t\t\t\t\tAdresse
\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t</label>
\t\t\t\t\t{{ form_row(form.adresseMp, {
                            label: false,
                            attr: {
                                class: 'form-control',
                                id: 'adresse',
                                placeholder: 'Enter address',
                                required: true
                            }
                        }) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"form-label\" for=\"email\">
\t\t\t\t\t\tEmail Address
\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t</label>
\t\t\t\t\t{{ form_row(form.emailMp, {
                            label: false,
                            attr: {
                                class: 'form-control',
                                id: 'email',
                                placeholder: 'user@company.com'
                            }
                        }) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"form-label\" for=\"phone\">Phone Number</label>
\t\t\t\t\t{{ form_row(form.contactMp, {
                            label: false,
                            attr: {
                                class: 'form-control',
                                id: 'phone',
                                placeholder: '+1 (555) 000-0000'
                            }
                        }) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"form-label\" for=\"jobTitle\">
\t\t\t\t\t\tProfession Title
\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t</label>
\t\t\t\t\t{{ form_row(form.professionMp, {
                            label: false,
                            attr: {
                                class: 'form-control',
                                id: 'jobTitle',
                                placeholder: 'e.g., Senior Designer, Project Manager'
                            }
                        }) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"form-label\" for=\"dateEntrescout\">
\t\t\t\t\t\tLieu du travail
\t\t\t\t\t</label>
\t\t\t\t\t{{ form_row(form.lieudetravail, {
                            label: false,
                            attr: {
                                class: 'form-control',
                                id: 'lieudetravail'
                            }
                        }) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"form-label\" for=\"sexe\">
\t\t\t\t\t\tSexe
\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t</label>
\t\t\t\t\t{{ form_row(form.sexe, {
                            label: false,
                            attr: {
                                class: 'form-control',
                                id: 'sexe',
                                placeholder: 'e.g., Male, Female'
                            }
                        }) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"form-label\" for=\"dateNaissance\">
\t\t\t\t\t\tDate de naissance
\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t</label>
\t\t\t\t\t{{ form_row(form.dateNaissMp, {
                            label: false,
                            attr: {
                                class: 'form-control',
                                id: 'dateNaissance'
                            }
                        }) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"form-label\" for=\"lieuNaissance\">
\t\t\t\t\t\tLieu de naissance
\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t</label>
\t\t\t\t\t{{ form_row(form.lieuNaissMp, {
                            label: false,
                            attr: {
                                class: 'form-control',
                                id: 'lieuNaissance',
                                placeholder: 'e.g., Paris, London'
                            }
                        }) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t</div>

\t<!-- National Identity Card Setup -->
\t<div class=\"form-card\">
\t\t<div class=\"form-header\">
\t\t\t<h3 class=\"form-title\">
\t\t\t\t<i class=\"bi bi-gear\"></i>
\t\t\t\tNational Identity Card Setup
\t\t\t</h3>
\t\t\t<p class=\"form-subtitle\">Configure CIN</p>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"form-label\" for=\"cin\">
\t\t\t\t\t\tCarte d'identité Nationale
\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t</label>
\t\t\t\t\t{{ form_row(form.cinMp, {
                            label: false,
                            attr: {
                                class: 'form-control cin-input',
                                id: 'cin',
                                placeholder: 'Enter CIN',
                                required: false
                            }
                        }) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"form-label\" for=\"nationalite\">
\t\t\t\t\t\tNationalité
\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t</label>
\t\t\t\t\t{{ form_row(form.nationalite, {
                            label: false,
                            attr: {
                                class: 'form-control cin-input',
                                id: 'nationalite',
                                placeholder: 'Enter nationalité',
                                required: false
                            }
                        }) }}
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"form-label\" for=\"dateDelivrance\">
\t\t\t\t\t\tDate de delivrance
\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t</label>
\t\t\t\t\t{{ form_row(form.dateDelivraceCINMp, {
                            label: false,
                            attr: {
                                class: 'form-control cin-input',
                                id: 'dateDelivrance',
                                placeholder: 'Enter date of delivrance',
                                required: false
                            }
                        }) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"form-label\" for=\"lieuDelivrance\">
\t\t\t\t\t\tLieu de délivrance
\t\t\t\t\t</label>
\t\t\t\t\t{{ form_row(form.lieuCinMp, {
                            label: false,
                            attr: {
                                class: 'form-control cin-input',
                                id: 'lieuDelivrance',
                                placeholder: 'Enter lieu de delivrance',
                                required: false
                            }
                        }) }}
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"form-label\" for=\"paysDelivrance\">
\t\t\t\t\t\tPays de délivrance
\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t</label>
\t\t\t\t\t{{ form_row(form.paysDelivranceMp, {
                            label: false,
                            attr: {
                                class: 'form-control cin-input',
                                id: 'paysDelivrance',
                                placeholder: 'Enter pays de delivrance',
                                required: false
                            }
                        }) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"form-label\" for=\"paysDelivrance\">
\t\t\t\t\t\tSituation Matrimoniale
\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t</label>
\t\t\t\t\t{{ form_row(form.situationMatriMp, {
                            label: false,
                            attr: {
                                class: 'form-control cin-input',
                                id: 'situationMatriMp',
                                placeholder: 'Situation Matrimoniale',
                                required: false
                            }
                        }) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"form-label\" for=\"paysDelivrance\">
\t\t\t\t\t\tNombre d'enfant prise en charge
\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t</label>
\t\t\t\t\t{{ form_row(form.nombreEnfantMp, {
                            label: false,
                            attr: {
                                class: 'form-control cin-input',
                                id: 'nombreEnfantMp',
                                placeholder: 'Nombre d\\'enfant prise en charge',
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
\t\t\t\t\t\t\tFonction Scout Sampana
\t\t\t\t\t\t\t<span class=\"required\">*</span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t{{ form_row(form.sampana, {
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
\t\t\t\t\t\t\tFonction dans le scout
\t\t\t\t\t\t</label>
\t\t\t\t\t\t{{ form_row(form.fonctionscoutMp, {
                            label: false,
                            attr: {
                                class: 'form-control',
                                id: 'fonctionscoutMp'
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
\t\t\t\t\t\t<label class=\"form-label\" for=\"dateEntrescout\">
\t\t\t\t\t\t\tVelirano Date for scout
\t\t\t\t\t\t</label>
\t\t\t\t\t\t{{ form_row(form.veliranoDateMp, {
                            label: false,
                            attr: {
                                class: 'form-control',
                                id: 'dateVelirano'
                            }
                        }) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\" for=\"dateEntrescout\">
\t\t\t\t\t\t\tLieu velirano
\t\t\t\t\t\t</label>
\t\t\t\t\t\t{{ form_row(form.lieuVeliranoMp, {
                            label: false,
                            attr: {
                                class: 'form-control',
                                id: 'lieuVeliranoMp'
                            }
                        }) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\" for=\"dateEntrescout\">
\t\t\t\t\t\t\tTokompanompoana Date for scout
\t\t\t\t\t\t</label>
\t\t\t\t\t\t{{ form_row(form.TompokompanompoanaMp, {
                            label: false,
                            attr: {
                                class: 'form-control',
                                id: 'dateTokompanompoana'
                            }
                        }) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\" for=\"dateEntrescout\">
\t\t\t\t\t\tRéligion
\t\t\t\t\t\t</label>
\t\t\t\t\t\t{{ form_row(form.religionMp, {
                            label: false,
                            attr: {
                                class: 'form-control',
                                id: 'religonMp'
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
\t\t\t\t\tCreate Mpiandrakitra
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>

\t\t{{ form_end(form) }}
\t</main>

\t{% include 'component/footeradmin.html.twig' %}

\t{% block javascript %}
\t\t     <script>
\t\t\t\t\t\t\t\tdocument.addEventListener('DOMContentLoaded', function() {
\t\t\t\t\t\t\t\t    const cinInput = document.querySelector('.cin-input');
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t    if (!cinInput) {
\t\t\t\t\t\t\t\t        console.warn('Champ CIN non trouvé (classe: .cin-input)');
\t\t\t\t\t\t\t\t        return;
\t\t\t\t\t\t\t\t    }
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t    // Fonction pour nettoyer et obtenir la valeur brute
\t\t\t\t\t\t\t\t    function getCleanCinValue(value) {
\t\t\t\t\t\t\t\t        return value
\t\t\t\t\t\t\t\t            .replace(/\\s/g, '')           // Supprime tous les espaces
\t\t\t\t\t\t\t\t            .replace(/[^\\d]/g, '')        // Garde uniquement les chiffres
\t\t\t\t\t\t\t\t            .slice(0, 12);                // Limite à 12 chiffres maximum
\t\t\t\t\t\t\t\t    }
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t    // Événement input : formatage en temps réel
\t\t\t\t\t\t\t\t    cinInput.addEventListener('input', function(e) {
\t\t\t\t\t\t\t\t        let value = e.target.value;
\t\t\t\t\t\t\t\t        let cleanValue = getCleanCinValue(value);
\t\t\t\t\t\t\t\t        
\t\t\t\t\t\t\t\t        // Formatage avec espaces tous les 3 chiffres
\t\t\t\t\t\t\t\t        let formatted = '';
\t\t\t\t\t\t\t\t        for (let i = 0; i < cleanValue.length; i += 3) {
\t\t\t\t\t\t\t\t            formatted += cleanValue.substr(i, 3) + ' ';
\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t        e.target.value = formatted.trim();
\t\t\t\t\t\t\t\t    });
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t    // Événement focus : sélectionne tout le texte
\t\t\t\t\t\t\t\t    cinInput.addEventListener('focus', function() {
\t\t\t\t\t\t\t\t        this.select();
\t\t\t\t\t\t\t\t    });
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t    // Événement blur : nettoie complètement (optionnel)
\t\t\t\t\t\t\t\t    cinInput.addEventListener('blur', function() {
\t\t\t\t\t\t\t\t        let cleanValue = getCleanCinValue(this.value);
\t\t\t\t\t\t\t\t        if (cleanValue.length === 12) {
\t\t\t\t\t\t\t\t            // Reformate proprement si complet
\t\t\t\t\t\t\t\t            let formatted = '';
\t\t\t\t\t\t\t\t            for (let i = 0; i < cleanValue.length; i += 3) {
\t\t\t\t\t\t\t\t                formatted += cleanValue.substr(i, 3) + ' ';
\t\t\t\t\t\t\t\t            }
\t\t\t\t\t\t\t\t            this.value = formatted.trim();
\t\t\t\t\t\t\t\t        } else if (cleanValue.length === 0) {
\t\t\t\t\t\t\t\t            this.value = ''; // Vide si rien
\t\t\t\t\t\t\t\t        }
\t\t\t\t\t\t\t\t    });
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t    // Fonction utilitaire pour récupérer la valeur brute n'importe où
\t\t\t\t\t\t\t\t    window.getCinValue = function() {
\t\t\t\t\t\t\t\t        return getCleanCinValue(cinInput.value);
\t\t\t\t\t\t\t\t    };
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t    // Exemple d'utilisation
\t\t\t\t\t\t\t\t    console.log('CIN brute:', window.getCinValue());
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t</script>
\t{% endblock %}
{% endblock %}
", "admin/mpiandrakitra/new.html.twig", "C:\\Users\\M_INFO\\Music\\scouts\\templates\\admin\\mpiandrakitra\\new.html.twig");
    }
}
