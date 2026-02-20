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

/* registration/register.html.twig */
class __TwigTemplate_6f00cae35ce05fd43c22ad997f519e59 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
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
        yield "\tHelder Camara Register
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
        yield from $this->load("layout.html.twig", 8)->unwrap()->yield($context);
        // line 9
        yield "
\t<main>
\t\t<section
\t\t\tclass=\"i pg fh rm ki xn vq gj qp gr hj rp hr\">

\t\t\t<!-- Bg Shapes -->
\t\t\t<img src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shape-06.svg"), "html", null, true);
        yield "\" alt=\"Shape\" class=\"h j k\"/>
\t\t\t<img src=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shape-03.svg"), "html", null, true);
        yield "\" alt=\"Shape\" class=\"h l m\"/>
\t\t\t<img src=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shape-17.svg"), "html", null, true);
        yield "\" alt=\"Shape\" class=\"h n o\"/>
\t\t\t<img src=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shape-18.svg"), "html", null, true);
        yield "\" alt=\"Shape\" class=\"h p q\"/>

\t\t\t<div class=\"animate_top bb af i va sg hh sm vk xm yi _n jp hi ao kp\">

\t\t\t\t";
        // line 22
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 22, $this->source); })()), 'form_start', ["attr" => ["class" => "sb"]]);
        // line 23
        yield "
\t\t\t\t";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 24, $this->source); })()), 'errors');
        yield "

\t\t\t\t<div class=\"rj\">
\t\t\t\t\t<h2 class=\"ek ck kk wm xb\">
\t\t\t\t\t\tInscription
\t\t\t\t\t</h2>
\t\t\t\t\t<p>
\t\t\t\t\t\tBienvenue sur votre espace d'inscription, veuillez entrer vos identifiants pour créer votre compte.
\t\t\t\t\t</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"wb\">
\t\t\t\t\t";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), "username", [], "any", false, false, false, 36), 'row');
        yield "
\t\t\t\t</div>

\t\t\t\t<div class=\"wb\">
\t\t\t\t\t";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), "email", [], "any", false, false, false, 40), 'row');
        yield "
\t\t\t\t</div>

\t\t\t\t<div class=\"wb\">
\t\t\t\t\t";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), "plainPassword", [], "any", false, false, false, 44), 'row', ["label" => "Password"]);
        // line 46
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"wb fileinput\">
\t\t\t\t\t";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 49, $this->source); })()), "profilePictureFile", [], "any", false, false, false, 49), 'row');
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"wb\">
\t\t\t\t\t";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 52, $this->source); })()), "agreeTerms", [], "any", false, false, false, 52), 'row');
        yield "
\t\t\t\t</div>

\t\t\t\t<button class=\"vd rj ek rc rg gh lk ml il _l gi hi\" type=\"submit\">
\t\t\t\t\tSign Up
\t\t\t\t</button>

\t\t\t\t";
        // line 59
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 59, $this->source); })()), 'form_end');
        yield "

\t\t\t\t<p class=\"sj hk xj rj ob\">
\t\t\t\t\tAlready have an account?
\t\t\t\t\t<a class=\"mk\" href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">
\t\t\t\t\t\tSign In
\t\t\t\t\t</a>
\t\t\t\t</p>

\t\t\t</div>
\t\t</section>
\t</main>

\t";
        // line 72
        yield from $this->load("footer.html.twig", 72)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "registration/register.html.twig";
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
        return array (  208 => 72,  196 => 63,  189 => 59,  179 => 52,  173 => 49,  168 => 46,  166 => 44,  159 => 40,  152 => 36,  137 => 24,  134 => 23,  132 => 22,  125 => 18,  121 => 17,  117 => 16,  113 => 15,  105 => 9,  102 => 8,  89 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\tHelder Camara Register
{% endblock %}

{% block body %}
\t{% include \"layout.html.twig\" %}

\t<main>
\t\t<section
\t\t\tclass=\"i pg fh rm ki xn vq gj qp gr hj rp hr\">

\t\t\t<!-- Bg Shapes -->
\t\t\t<img src=\"{{ asset('images/shape-06.svg') }}\" alt=\"Shape\" class=\"h j k\"/>
\t\t\t<img src=\"{{ asset('images/shape-03.svg') }}\" alt=\"Shape\" class=\"h l m\"/>
\t\t\t<img src=\"{{ asset('images/shape-17.svg') }}\" alt=\"Shape\" class=\"h n o\"/>
\t\t\t<img src=\"{{ asset('images/shape-18.svg') }}\" alt=\"Shape\" class=\"h p q\"/>

\t\t\t<div class=\"animate_top bb af i va sg hh sm vk xm yi _n jp hi ao kp\">

\t\t\t\t{{ form_start(registrationForm, {'attr': {'class': 'sb' }}
\t\t\t\t) }}
\t\t\t\t{{ form_errors(registrationForm) }}

\t\t\t\t<div class=\"rj\">
\t\t\t\t\t<h2 class=\"ek ck kk wm xb\">
\t\t\t\t\t\tInscription
\t\t\t\t\t</h2>
\t\t\t\t\t<p>
\t\t\t\t\t\tBienvenue sur votre espace d'inscription, veuillez entrer vos identifiants pour créer votre compte.
\t\t\t\t\t</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"wb\">
\t\t\t\t\t{{ form_row(registrationForm.username) }}
\t\t\t\t</div>

\t\t\t\t<div class=\"wb\">
\t\t\t\t\t{{ form_row(registrationForm.email) }}
\t\t\t\t</div>

\t\t\t\t<div class=\"wb\">
\t\t\t\t\t{{ form_row(registrationForm.plainPassword, {
                        label: 'Password'
                    }) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"wb fileinput\">
\t\t\t\t\t{{ form_row(registrationForm.profilePictureFile) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"wb\">
\t\t\t\t\t{{ form_row(registrationForm.agreeTerms) }}
\t\t\t\t</div>

\t\t\t\t<button class=\"vd rj ek rc rg gh lk ml il _l gi hi\" type=\"submit\">
\t\t\t\t\tSign Up
\t\t\t\t</button>

\t\t\t\t{{ form_end(registrationForm) }}

\t\t\t\t<p class=\"sj hk xj rj ob\">
\t\t\t\t\tAlready have an account?
\t\t\t\t\t<a class=\"mk\" href=\"{{ path('app_login') }}\">
\t\t\t\t\t\tSign In
\t\t\t\t\t</a>
\t\t\t\t</p>

\t\t\t</div>
\t\t</section>
\t</main>

\t{% include 'footer.html.twig' %}
{% endblock %}
", "registration/register.html.twig", "C:\\Users\\M_INFO\\Music\\scouts\\templates\\registration\\register.html.twig");
    }
}
