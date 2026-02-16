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
        yield "    Helder Camara Register
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
        yield "    ";
        yield from $this->load("layout.html.twig", 8)->unwrap()->yield($context);
        // line 9
        yield "
    <main>
        <section class=\"i pg fh rm ki xn vq gj qp gr hj rp hr\">

            <!-- Bg Shapes -->
            <img src=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shape-06.svg"), "html", null, true);
        yield "\" alt=\"Shape\" class=\"h j k\" />
            <img src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shape-03.svg"), "html", null, true);
        yield "\" alt=\"Shape\" class=\"h l m\" />
            <img src=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shape-17.svg"), "html", null, true);
        yield "\" alt=\"Shape\" class=\"h n o\" />
            <img src=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shape-18.svg"), "html", null, true);
        yield "\" alt=\"Shape\" class=\"h p q\" />

            <div class=\"animate_top bb af i va sg hh sm vk xm yi _n jp hi ao kp\">

                ";
        // line 21
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 21, $this->source); })()), 'form_start', ["attr" => ["class" => "sb"]]);
        // line 22
        yield "
                ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 23, $this->source); })()), 'errors');
        yield "

                <div class=\"rj\">
                    <h2 class=\"ek ck kk wm xb\">
                        Inscription
                    </h2>
                    <p>
                        Bienvenue sur votre espace d'inscription, veuillez entrer vos identifiants pour créer votre compte.
                    </p>
                </div>

                <div class=\"wb\">
                    ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), "username", [], "any", false, false, false, 35), 'row');
        yield "
                </div>

                <div class=\"wb\">
                    ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), "email", [], "any", false, false, false, 39), 'row');
        yield "
                </div>

                <div class=\"wb\">
                    ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 43, $this->source); })()), "plainPassword", [], "any", false, false, false, 43), 'row', ["label" => "Password"]);
        // line 45
        yield "
                </div>
                <div class=\"wb\">
                    ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 48, $this->source); })()), "profilePictureFile", [], "any", false, false, false, 48), 'row', ["label" => "Profile Picture (optional)"]);
        // line 50
        yield "
                </div>
                <div class=\"wb\">
                    ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 53, $this->source); })()), "agreeTerms", [], "any", false, false, false, 53), 'row');
        yield "
                </div>

                <button class=\"vd rj ek rc rg gh lk ml il _l gi hi\" type=\"submit\">
                    Sign Up
                </button>

                ";
        // line 60
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 60, $this->source); })()), 'form_end');
        yield "

                <p class=\"sj hk xj rj ob\">
                    Already have an account?
                    <a class=\"mk\" href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">
                        Sign In
                    </a>
                </p>

            </div>
        </section>
    </main>

    ";
        // line 73
        yield from $this->load("footer.html.twig", 73)->unwrap()->yield($context);
        
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
        return array (  208 => 73,  196 => 64,  189 => 60,  179 => 53,  174 => 50,  172 => 48,  167 => 45,  165 => 43,  158 => 39,  151 => 35,  136 => 23,  133 => 22,  131 => 21,  124 => 17,  120 => 16,  116 => 15,  112 => 14,  105 => 9,  102 => 8,  89 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    Helder Camara Register
{% endblock %}

{% block body %}
    {% include \"layout.html.twig\" %}

    <main>
        <section class=\"i pg fh rm ki xn vq gj qp gr hj rp hr\">

            <!-- Bg Shapes -->
            <img src=\"{{ asset('images/shape-06.svg') }}\" alt=\"Shape\" class=\"h j k\" />
            <img src=\"{{ asset('images/shape-03.svg') }}\" alt=\"Shape\" class=\"h l m\" />
            <img src=\"{{ asset('images/shape-17.svg') }}\" alt=\"Shape\" class=\"h n o\" />
            <img src=\"{{ asset('images/shape-18.svg') }}\" alt=\"Shape\" class=\"h p q\" />

            <div class=\"animate_top bb af i va sg hh sm vk xm yi _n jp hi ao kp\">

                {{ form_start(registrationForm, {'attr': {'class': 'sb' }}
                ) }}
                {{ form_errors(registrationForm) }}

                <div class=\"rj\">
                    <h2 class=\"ek ck kk wm xb\">
                        Inscription
                    </h2>
                    <p>
                        Bienvenue sur votre espace d'inscription, veuillez entrer vos identifiants pour créer votre compte.
                    </p>
                </div>

                <div class=\"wb\">
                    {{ form_row(registrationForm.username) }}
                </div>

                <div class=\"wb\">
                    {{ form_row(registrationForm.email) }}
                </div>

                <div class=\"wb\">
                    {{ form_row(registrationForm.plainPassword, {
                        label: 'Password'
                    }) }}
                </div>
                <div class=\"wb\">
                    {{ form_row(registrationForm.profilePictureFile, {
                        label: 'Profile Picture (optional)'
                    }) }}
                </div>
                <div class=\"wb\">
                    {{ form_row(registrationForm.agreeTerms) }}
                </div>

                <button class=\"vd rj ek rc rg gh lk ml il _l gi hi\" type=\"submit\">
                    Sign Up
                </button>

                {{ form_end(registrationForm) }}

                <p class=\"sj hk xj rj ob\">
                    Already have an account?
                    <a class=\"mk\" href=\"{{ path('app_login') }}\">
                        Sign In
                    </a>
                </p>

            </div>
        </section>
    </main>

    {% include 'footer.html.twig' %}
{% endblock %}
", "registration/register.html.twig", "C:\\Users\\M_INFO\\Music\\scouts\\templates\\registration\\register.html.twig");
    }
}
