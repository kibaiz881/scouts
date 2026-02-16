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

/* security/login.html.twig */
class __TwigTemplate_37c10b3fd9aaec58259ff52c16a08886 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

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
        yield "   Helder Camara Log in!
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
        yield "    <!-- ===== Header Start ===== -->
    ";
        // line 9
        yield from $this->load("layout.html.twig", 9)->unwrap()->yield($context);
        // line 10
        yield "    <!-- ===== Header End ===== -->
    <main>
        <!-- ===== SignIn Form Start ===== -->
        <section class=\"i pg fh rm ki xn vq gj qp gr hj rp hr\">
            <!-- Bg Shapes -->
            <img src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shape-06.svg"), "html", null, true);
        yield "\" alt=\"Shape\" class=\"h j k\" />
            <img src=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shape-03.svg"), "html", null, true);
        yield "\" alt=\"Shape\" class=\"h l m\" />
            <img src=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shape-17.svg"), "html", null, true);
        yield "\" alt=\"Shape\" class=\"h n o\" />
            <img src=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shape-18.svg"), "html", null, true);
        yield "\" alt=\"Shape\" class=\"h p q\" />

            <div class=\"animate_top bb af i va sg hh sm vk xm yi _n jp hi ao kp\">
                <!-- Bg Border -->
                <div class=\"rj\">
                    <h2 class=\"ek ck kk wm xb\">
                        Connexion
                    </h2>
                    <p>
                        bienvenue sur votre espace de connexion, veuillez entrer vos identifiants pour accéder à votre compte.
                    </p>
                </div>

                <form class=\"sb\" method=\"post\">
                    ";
        // line 32
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 32, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "                        <div class=\"alert alert-danger\">
                            ";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 34, $this->source); })()), "messageKey", [], "any", false, false, false, 34), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 34, $this->source); })()), "messageData", [], "any", false, false, false, 34), "security"), "html", null, true);
            yield "
                        </div>
                    ";
        }
        // line 37
        yield "
                    ";
        // line 38
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 39
            yield "                        <div class=\"mb-3\">
                            You are logged in as
                            ";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), "userIdentifier", [], "any", false, false, false, 41), "html", null, true);
            yield "
                            ,
                            <a href=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\LogoutUrlExtension']->getLogoutPath(), "html", null, true);
            yield "\">
                                Logout
                            </a>
                        </div>
                    ";
        }
        // line 48
        yield "                    <div class=\"wb\">
                        <label class=\"rc kk wm vb\" for=\"username\">
                            Email
                        </label>
                        <input type=\"email\" name=\"email\" value=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 52, $this->source); })()), "html", null, true);
        yield "\" id=\"inputEmail\" placeholder=\"example@gmail.com\" class=\"vd hh rg zk _g ch hm dm fm pl/50 xi mi sm xm pm dn/40\" />
                    </div>

                    <div class=\"wb\">
                        <label class=\"rc kk wm vb\" for=\"password\">
                            Password
                        </label>
                        <input type=\"password\" name=\"password\" id=\"inputPassword\" placeholder=\"**************\" class=\"vd hh rg zk _g ch hm dm fm pl/50 xi mi sm xm pm dn/40\" />
                    </div>
                    <input type=\"hidden\" name=\"_csrf_token\" data-controller=\"csrf-protection\" value=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
                            <div class=\"checkbox mb-3\">
                                <label>
                                    <input type=\"checkbox\" name=\"_remember_me\">
                                        Remember me
                                    </label>
                                </div>

                                <button class=\"vd rj ek rc rg gh lk ml il _l gi hi\" type=\"submit\">
                                    Sign In
                                </button>

                                <p class=\"sj hk xj rj ob\">
                                    Don't have an account?
                                    <a class=\"mk\" href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">
                                        Sign Up
                                    </a>
                                </p>
                            </form>
                        </div>
                    </section>
                <!-- ===== SignIn Form End ===== -->
                </main>
                <!-- ===== FSM Start ===== -->
                ";
        // line 86
        yield from $this->load("fsmlayout.html.twig", 86)->unwrap()->yield($context);
        // line 87
        yield "                <!-- ===== FSM End ===== -->
                ";
        // line 88
        yield from $this->load("footer.html.twig", 88)->unwrap()->yield($context);
        // line 89
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "security/login.html.twig";
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
        return array (  235 => 89,  233 => 88,  230 => 87,  228 => 86,  215 => 76,  198 => 62,  194 => 61,  182 => 52,  176 => 48,  168 => 43,  163 => 41,  159 => 39,  157 => 38,  154 => 37,  148 => 34,  145 => 33,  143 => 32,  126 => 18,  122 => 17,  118 => 16,  114 => 15,  107 => 10,  105 => 9,  102 => 8,  89 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
   Helder Camara Log in!
{% endblock %}

{% block body %}
    <!-- ===== Header Start ===== -->
    {% include \"layout.html.twig\" %}
    <!-- ===== Header End ===== -->
    <main>
        <!-- ===== SignIn Form Start ===== -->
        <section class=\"i pg fh rm ki xn vq gj qp gr hj rp hr\">
            <!-- Bg Shapes -->
            <img src=\"{{ asset('images/shape-06.svg') }}\" alt=\"Shape\" class=\"h j k\" />
            <img src=\"{{ asset('images/shape-03.svg') }}\" alt=\"Shape\" class=\"h l m\" />
            <img src=\"{{ asset('images/shape-17.svg') }}\" alt=\"Shape\" class=\"h n o\" />
            <img src=\"{{ asset('images/shape-18.svg') }}\" alt=\"Shape\" class=\"h p q\" />

            <div class=\"animate_top bb af i va sg hh sm vk xm yi _n jp hi ao kp\">
                <!-- Bg Border -->
                <div class=\"rj\">
                    <h2 class=\"ek ck kk wm xb\">
                        Connexion
                    </h2>
                    <p>
                        bienvenue sur votre espace de connexion, veuillez entrer vos identifiants pour accéder à votre compte.
                    </p>
                </div>

                <form class=\"sb\" method=\"post\">
                    {% if error %}
                        <div class=\"alert alert-danger\">
                            {{ error.messageKey|trans(error.messageData, 'security') }}
                        </div>
                    {% endif %}

                    {% if app.user %}
                        <div class=\"mb-3\">
                            You are logged in as
                            {{ app.user.userIdentifier }}
                            ,
                            <a href=\"{{ logout_path() }}\">
                                Logout
                            </a>
                        </div>
                    {% endif %}
                    <div class=\"wb\">
                        <label class=\"rc kk wm vb\" for=\"username\">
                            Email
                        </label>
                        <input type=\"email\" name=\"email\" value=\"{{ last_username }}\" id=\"inputEmail\" placeholder=\"example@gmail.com\" class=\"vd hh rg zk _g ch hm dm fm pl/50 xi mi sm xm pm dn/40\" />
                    </div>

                    <div class=\"wb\">
                        <label class=\"rc kk wm vb\" for=\"password\">
                            Password
                        </label>
                        <input type=\"password\" name=\"password\" id=\"inputPassword\" placeholder=\"**************\" class=\"vd hh rg zk _g ch hm dm fm pl/50 xi mi sm xm pm dn/40\" />
                    </div>
                    <input type=\"hidden\" name=\"_csrf_token\" data-controller=\"csrf-protection\" value=\"{{ csrf_token('authenticate') }}\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                            <div class=\"checkbox mb-3\">
                                <label>
                                    <input type=\"checkbox\" name=\"_remember_me\">
                                        Remember me
                                    </label>
                                </div>

                                <button class=\"vd rj ek rc rg gh lk ml il _l gi hi\" type=\"submit\">
                                    Sign In
                                </button>

                                <p class=\"sj hk xj rj ob\">
                                    Don't have an account?
                                    <a class=\"mk\" href=\"{{ path('app_register') }}\">
                                        Sign Up
                                    </a>
                                </p>
                            </form>
                        </div>
                    </section>
                <!-- ===== SignIn Form End ===== -->
                </main>
                <!-- ===== FSM Start ===== -->
                {% include 'fsmlayout.html.twig' %}
                <!-- ===== FSM End ===== -->
                {% include 'footer.html.twig' %}
            {% endblock %}
            ", "security/login.html.twig", "C:\\Users\\M_INFO\\Music\\scouts\\templates\\security\\login.html.twig");
    }
}
