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

/* /admin/fivondronanna/view.html.twig */
class __TwigTemplate_ac5dd52a86d8c197f2be07ad78e35364 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/admin/fivondronanna/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/admin/fivondronanna/view.html.twig"));

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
        yield "\tFivondronana - Admin - View
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
\t<main class=\"main\" id=\"main\" role=\"main\">
\t\t<div class=\"page-header\">
\t\t\t<div class=\"page-title\">
\t\t\t\t<h1>View Team ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fivondronannas"]) || array_key_exists("fivondronannas", $context) ? $context["fivondronannas"] : (function () { throw new RuntimeError('Variable "fivondronannas" does not exist.', 14, $this->source); })()), "nomFiv", [], "any", false, false, false, 14), "html", null, true);
        yield " (";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fivondronannas"]) || array_key_exists("fivondronannas", $context) ? $context["fivondronannas"] : (function () { throw new RuntimeError('Variable "fivondronannas" does not exist.', 14, $this->source); })()), "codeFiv", [], "any", false, false, false, 14), "html", null, true);
        yield ")</h1>
\t\t\t\t<p>View user profile fivondronana</p>
\t\t\t</div>
\t\t\t<div class=\"page-actions\">
\t\t\t\t<a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_fivondronanna");
        yield "\" class=\"btn-secondary\">
\t\t\t\t\t<i class=\"bi bi-arrow-left\"></i>
\t\t\t\t\tBack to Fivondronana list
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-card\">
\t\t\t<div class=\"form-header\">
\t\t\t\t<h3 class=\"form-title\">
\t\t\t\t\t<i class=\"bi bi-person\"></i>
\t\t\t\t\tBasic Information
\t\t\t\t</h3>
\t\t\t\t<p class=\"form-subtitle\">Consultation uniquement</p>
\t\t\t</div>

\t\t\t<!-- AVATAR -->
\t\t\t<div class=\"avatar-upload\">
\t\t\t\t<div class=\"avatar-preview\">
\t\t\t\t\t<img src=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/fivondronana/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["fivondronannas"]) || array_key_exists("fivondronannas", $context) ? $context["fivondronannas"] : (function () { throw new RuntimeError('Variable "fivondronannas" does not exist.', 36, $this->source); })()), "fivondronanaPictureName", [], "any", false, false, false, 36))), "html", null, true);
        yield "\" alt=\"Avatar\">
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\">Nom Fivondronana</label>
\t\t\t\t\t\t<div class=\"form-control bg-light\">
\t\t\t\t\t\t\t";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fivondronannas"]) || array_key_exists("fivondronannas", $context) ? $context["fivondronannas"] : (function () { throw new RuntimeError('Variable "fivondronannas" does not exist.', 45, $this->source); })()), "nomFiv", [], "any", false, false, false, 45), "html", null, true);
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\">Adresse</label>
\t\t\t\t\t\t<div class=\"form-control bg-light\">
\t\t\t\t\t\t\t";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fivondronannas"]) || array_key_exists("fivondronannas", $context) ? $context["fivondronannas"] : (function () { throw new RuntimeError('Variable "fivondronannas" does not exist.', 54, $this->source); })()), "adresseFiv", [], "any", false, false, false, 54), "html", null, true);
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\">Contact</label>
\t\t\t\t\t\t<div class=\"form-control bg-light\">
\t\t\t\t\t\t\t";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fivondronannas"]) || array_key_exists("fivondronannas", $context) ? $context["fivondronannas"] : (function () { throw new RuntimeError('Variable "fivondronannas" does not exist.', 64, $this->source); })()), "contactFiv", [], "any", false, false, false, 64), "html", null, true);
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\">Adresse Email</label>
\t\t\t\t\t\t<div class=\"form-control bg-light\">
\t\t\t\t\t\t\t";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fivondronannas"]) || array_key_exists("fivondronannas", $context) ? $context["fivondronannas"] : (function () { throw new RuntimeError('Variable "fivondronannas" does not exist.', 73, $this->source); })()), "emailFiv", [], "any", false, false, false, 73), "html", null, true);
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\">Date création</label>
\t\t\t\t\t\t<div class=\"form-control bg-light\">
\t\t\t\t\t\t\t";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fivondronannas"]) || array_key_exists("fivondronannas", $context) ? $context["fivondronannas"] : (function () { throw new RuntimeError('Variable "fivondronannas" does not exist.', 83, $this->source); })()), "createdAt", [], "any", false, false, false, 83), "Y-m-d"), "html", null, true);
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\">Paroisse</label>
\t\t\t\t\t\t<div class=\"form-control bg-light\">
\t\t\t\t\t\t\t";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fivondronannas"]) || array_key_exists("fivondronannas", $context) ? $context["fivondronannas"] : (function () { throw new RuntimeError('Variable "fivondronannas" does not exist.', 92, $this->source); })()), "paroiseFiv", [], "any", false, false, false, 92), "html", null, true);
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\">Historique</label>
\t\t\t\t\t\t<div class=\"form-control bg-light\" style=\"min-height: 80px;\">
\t\t\t\t\t\t\t";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fivondronannas"]) || array_key_exists("fivondronannas", $context) ? $context["fivondronannas"] : (function () { throw new RuntimeError('Variable "fivondronannas" does not exist.', 103, $this->source); })()), "historiqueFiv", [], "any", false, false, false, 103), "html", null, true);
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>

\t</main>

\t";
        // line 113
        yield from $this->load("component/footeradmin.html.twig", 113)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/admin/fivondronanna/view.html.twig";
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
        return array (  245 => 113,  232 => 103,  218 => 92,  206 => 83,  193 => 73,  181 => 64,  168 => 54,  156 => 45,  144 => 36,  123 => 18,  114 => 14,  108 => 10,  105 => 9,  102 => 8,  89 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'component/baseadmin.html.twig' %}

{% block title %}
\tFivondronana - Admin - View
{% endblock %}

{% block body %}
\t{% include 'component/headeradmin.html.twig' %}
\t{% include 'component/sidebaradmin.html.twig' %}

\t<main class=\"main\" id=\"main\" role=\"main\">
\t\t<div class=\"page-header\">
\t\t\t<div class=\"page-title\">
\t\t\t\t<h1>View Team {{ fivondronannas.nomFiv }} ({{ fivondronannas.codeFiv }})</h1>
\t\t\t\t<p>View user profile fivondronana</p>
\t\t\t</div>
\t\t\t<div class=\"page-actions\">
\t\t\t\t<a href=\"{{ path('app_admin_fivondronanna') }}\" class=\"btn-secondary\">
\t\t\t\t\t<i class=\"bi bi-arrow-left\"></i>
\t\t\t\t\tBack to Fivondronana list
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-card\">
\t\t\t<div class=\"form-header\">
\t\t\t\t<h3 class=\"form-title\">
\t\t\t\t\t<i class=\"bi bi-person\"></i>
\t\t\t\t\tBasic Information
\t\t\t\t</h3>
\t\t\t\t<p class=\"form-subtitle\">Consultation uniquement</p>
\t\t\t</div>

\t\t\t<!-- AVATAR -->
\t\t\t<div class=\"avatar-upload\">
\t\t\t\t<div class=\"avatar-preview\">
\t\t\t\t\t<img src=\"{{ asset('images/fivondronana/' ~ fivondronannas.fivondronanaPictureName) }}\" alt=\"Avatar\">
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\">Nom Fivondronana</label>
\t\t\t\t\t\t<div class=\"form-control bg-light\">
\t\t\t\t\t\t\t{{ fivondronannas.nomFiv }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\">Adresse</label>
\t\t\t\t\t\t<div class=\"form-control bg-light\">
\t\t\t\t\t\t\t{{ fivondronannas.adresseFiv }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\">Contact</label>
\t\t\t\t\t\t<div class=\"form-control bg-light\">
\t\t\t\t\t\t\t{{ fivondronannas.contactFiv }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\">Adresse Email</label>
\t\t\t\t\t\t<div class=\"form-control bg-light\">
\t\t\t\t\t\t\t{{ fivondronannas.emailFiv }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\">Date création</label>
\t\t\t\t\t\t<div class=\"form-control bg-light\">
\t\t\t\t\t\t\t{{ fivondronannas.createdAt|date('Y-m-d') }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\">Paroisse</label>
\t\t\t\t\t\t<div class=\"form-control bg-light\">
\t\t\t\t\t\t\t{{ fivondronannas.paroiseFiv }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"form-label\">Historique</label>
\t\t\t\t\t\t<div class=\"form-control bg-light\" style=\"min-height: 80px;\">
\t\t\t\t\t\t\t{{ fivondronannas.historiqueFiv }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>

\t</main>

\t{% include 'component/footeradmin.html.twig' %}
{% endblock %}
", "/admin/fivondronanna/view.html.twig", "C:\\Users\\M_INFO\\Music\\scouts\\templates\\admin\\fivondronanna\\view.html.twig");
    }
}
