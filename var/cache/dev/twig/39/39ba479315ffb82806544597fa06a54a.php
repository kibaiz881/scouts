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

/* actualite/index.html.twig */
class __TwigTemplate_6837e54d2d335d46b14b6a4ff30227ba extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actualite/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actualite/index.html.twig"));

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
        yield "    ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["actu"]) || array_key_exists("actu", $context) ? $context["actu"] : (function () { throw new RuntimeError('Variable "actu" does not exist.', 4, $this->source); })()), "html", null, true);
        yield "
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
        // line 9
        yield "    ";
        yield from $this->load("layout.html.twig", 9)->unwrap()->yield($context);
        // line 10
        yield "    <main>
        <!-- ===== Hero Start ===== -->
        <section class=\"gj do ir hj sp jr i pg\">
            <!-- Hero Images -->
            <div class=\"xc fn zd/2 2xl:ud-w-187.5 bd 2xl:ud-h-171.5 h q r\">
                <img src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shape-01.svg"), "html", null, true);
        yield "\" alt=\"shape\" class=\"xc 2xl:ud-block h t -ud-left-[10%] ua\" />
                <img src=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shape-02.svg"), "html", null, true);
        yield "\" alt=\"shape\" class=\"xc 2xl:ud-block h u p va\" />
                <img src=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shape-03.svg"), "html", null, true);
        yield "\" alt=\"shape\" class=\"xc 2xl:ud-block h v w va\" />
                <img src=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shapehc.png"), "html", null, true);
        yield "\" alt=\"shape\" class=\"h q r\" />
                <img src=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/scout16.png"), "html", null, true);
        yield "\" alt=\"Woman\" class=\"h q r ua\" />
            </div>

            <!-- Hero Content -->
            <div class=\"bb ze ki xn 2xl:ud-px-0\">
                <div class=\"tc _o\">
                    <div class=\"animate_left jn/2\">
                        <h1 class=\"fk vj zp or kk wm wb\">
                            \"
                            <span style=\"color:red\">
                                Scout un jour
                            </span>
                            , scout toujours!\"
                        </h1>
                        <p class=\"fq\">
                            \"Scout un jour, scout toujours» ! Fondé par l'anglais Robert Stephenson Smyth Baden Powell, le scoutisme est bien plus qu'une simple organisation de jeunesse. Tout au long de sa vie, cet homme s'est pleinement dévoué à transformer celle des jeunes en leur enseignant des valeurs jugées fondamentales selon lui, telles que la fraternité, la loyauté, la foi et le respect de la nature.\"
                        </p>

                        <div class=\"tc tf yo zf mb\">
                            <a href=\"#!\" class=\"ek jk lk gh gi hi rg ml il vc _d _l\">
                                Actualité du jours
                            </a>

                            <span class=\"tc sf\">
                                <a href=\"#!\" class=\"inline-block ek xj kk wm\">
                                    Si vous souhaitez nous contacter : (+261) 34 03 651 11
                                </a>
                                <span class=\"inline-block\">
                                    Si vous avez des questions ou des préoccupations
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        ";
        // line 56
        yield from $this->load("component/rejoindre.html.twig", 56)->unwrap()->yield($context);
        // line 57
        yield "
        <!-- ===== Blog Grid Start ===== -->
        <section class=\"ji gp uq\">
            <div class=\"bb ye ki xn vq jb jo\">
                <div class=\"wc qf pn xo zf iq\">
                    ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 62, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 63
            yield "                        <!-- Blog Item -->
                        <div class=\"animate_top sg vk rm xm\">
                            <div class=\"c rc i z-1 pg\">
                                <img class=\"w-full\" src=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/blog-01.png"), "html", null, true);
            yield "\" alt=\"Blog\" />

                                <div class=\"im h r s df vd yc wg tc wf xf al hh/20 nl il z-10\">
                                    <a href=\"";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_actualite_show", ["post" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            yield "\" class=\"vc ek rg lk gh sl ml il gi hi\">
                                        Read More
                                    </a>
                                </div>
                            </div>

                            <div class=\"yh\">
                                <div class=\"tc uf wf ag jq\">
                                    <div class=\"tc wf ag\">
                                        <img src=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon-man.svg"), "html", null, true);
            yield "\" alt=\"User\" />
                                        <p>
                                            ";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 80), "html", null, true);
            yield "
                                        </p>
                                    </div>
                                    <div class=\"tc wf ag\">
                                        <img src=\"";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon-calender.svg"), "html", null, true);
            yield "\" alt=\"Calender\" />
                                        <p>
                                            ";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "postedAt", [], "any", false, false, false, 86), "d/m/Y"), "html", null, true);
            yield "
                                        </p>
                                    </div>
                                </div>
                                <h4 class=\"ek tj ml il kk wm xl eq lb\">
                                    <a href=\"";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_actualite_show", ["post" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 91)]), "html", null, true);
            yield "\">
                                        ";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "category", [], "any", false, false, false, 92), "name", [], "any", false, false, false, 92), "html", null, true);
            yield "
                                    </a>
                                </h4>
                                <p>
                                    ";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 96), 0, 200), "html", null, true);
            yield "
                                </p>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['post'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        yield "                </div>

                <!-- Pagination -->
                <div class=\"mb lo bq i ua\">
                    <nav>
                        <ul class=\"tc wf xf bg\">
                            <li>
                                ";
        // line 108
        if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 108, $this->source); })()) > 1)) {
            // line 109
            yield "                                    <a class=\"c tc wf xf wd in zc hn rg uj fo wk xm ml il hh rm tl zm yl an\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_actualite", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 109, $this->source); })()) - 1)]), "html", null, true);
            yield "\">
                                        <svg class=\"th lm ml il\" width=\"8\" height=\"14\" viewBox=\"0 0 8 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path d=\"M2.93884 6.99999L7.88884 11.95L6.47484 13.364L0.11084 6.99999L6.47484 0.635986L7.88884 2.04999L2.93884 6.99999Z\" />
                                        </svg>
                                    </a>
                                ";
        }
        // line 115
        yield "                            </li>
                            ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["noOfPages"]) || array_key_exists("noOfPages", $context) ? $context["noOfPages"] : (function () { throw new RuntimeError('Variable "noOfPages" does not exist.', 116, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 117
            yield "
                                ";
            // line 118
            if (($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 118, $this->source); })()))) {
                // line 119
                yield "                                    <li>
                                        <a class=\"c tc wf xf wd in zc hn rg uj fo wk xm ml il hh rm tl zm yl an\" href=\"";
                // line 120
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_actualite", ["page" => $context["page"]]), "html", null, true);
                yield "\">
                                            ";
                // line 121
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "
                                        </a>
                                    </li>
                                ";
            } else {
                // line 125
                yield "                                    <li>
                                        <a class=\"c tc wf xf wd in zc hn rg uj fo wk xm ml il hh rm tl zm yl an\" href=\"";
                // line 126
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_actualite", ["page" => $context["page"]]), "html", null, true);
                yield "\">
                                            ";
                // line 127
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "
                                        </a>
                                    </li>
                                ";
            }
            // line 131
            yield "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        yield "                            <li>
                                ";
        // line 134
        if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 134, $this->source); })()) < (isset($context["noOfPages"]) || array_key_exists("noOfPages", $context) ? $context["noOfPages"] : (function () { throw new RuntimeError('Variable "noOfPages" does not exist.', 134, $this->source); })()))) {
            // line 135
            yield "                                    <a class=\"c tc wf xf wd in zc hn rg uj fo wk xm ml il hh rm tl zm yl an\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_actualite", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 135, $this->source); })()) + 1)]), "html", null, true);
            yield "\">
                                        <svg class=\"th lm ml il\" width=\"8\" height=\"14\" viewBox=\"0 0 8 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path d=\"M5.06067 7.00001L0.110671 2.05001L1.52467 0.636014L7.88867 7.00001L1.52467 13.364L0.110672 11.95L5.06067 7.00001Z\" fill=\"#fefdfo\" />
                                        </svg>
                                    </a>
                                ";
        }
        // line 141
        yield "                            </li>
                        </ul>
                    </nav>
                </div>
            <!-- Pagination -->
            </div>
        </section>
        <!-- ===== Blog Grid End ===== -->

        <!-- ===== FSM Start ===== -->
        ";
        // line 151
        yield from $this->load("fsmlayout.html.twig", 151)->unwrap()->yield($context);
        // line 152
        yield "    <!-- ===== FSM End ===== -->
    </main>
    ";
        // line 154
        yield from $this->load("footer.html.twig", 154)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "actualite/index.html.twig";
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
        return array (  356 => 154,  352 => 152,  350 => 151,  338 => 141,  328 => 135,  326 => 134,  323 => 133,  316 => 131,  309 => 127,  305 => 126,  302 => 125,  295 => 121,  291 => 120,  288 => 119,  286 => 118,  283 => 117,  279 => 116,  276 => 115,  266 => 109,  264 => 108,  255 => 101,  244 => 96,  237 => 92,  233 => 91,  225 => 86,  220 => 84,  213 => 80,  208 => 78,  196 => 69,  190 => 66,  185 => 63,  181 => 62,  174 => 57,  172 => 56,  132 => 19,  128 => 18,  124 => 17,  120 => 16,  116 => 15,  109 => 10,  106 => 9,  104 => 8,  91 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    {{ actu }}
{% endblock %}

{% block body %}
    {# header components #}
    {% include 'layout.html.twig' %}
    <main>
        <!-- ===== Hero Start ===== -->
        <section class=\"gj do ir hj sp jr i pg\">
            <!-- Hero Images -->
            <div class=\"xc fn zd/2 2xl:ud-w-187.5 bd 2xl:ud-h-171.5 h q r\">
                <img src=\"{{ asset('images/shape-01.svg') }}\" alt=\"shape\" class=\"xc 2xl:ud-block h t -ud-left-[10%] ua\" />
                <img src=\"{{ asset('images/shape-02.svg') }}\" alt=\"shape\" class=\"xc 2xl:ud-block h u p va\" />
                <img src=\"{{ asset('images/shape-03.svg') }}\" alt=\"shape\" class=\"xc 2xl:ud-block h v w va\" />
                <img src=\"{{ asset('images/shapehc.png') }}\" alt=\"shape\" class=\"h q r\" />
                <img src=\"{{ asset('images/scout16.png') }}\" alt=\"Woman\" class=\"h q r ua\" />
            </div>

            <!-- Hero Content -->
            <div class=\"bb ze ki xn 2xl:ud-px-0\">
                <div class=\"tc _o\">
                    <div class=\"animate_left jn/2\">
                        <h1 class=\"fk vj zp or kk wm wb\">
                            \"
                            <span style=\"color:red\">
                                Scout un jour
                            </span>
                            , scout toujours!\"
                        </h1>
                        <p class=\"fq\">
                            \"Scout un jour, scout toujours» ! Fondé par l'anglais Robert Stephenson Smyth Baden Powell, le scoutisme est bien plus qu'une simple organisation de jeunesse. Tout au long de sa vie, cet homme s'est pleinement dévoué à transformer celle des jeunes en leur enseignant des valeurs jugées fondamentales selon lui, telles que la fraternité, la loyauté, la foi et le respect de la nature.\"
                        </p>

                        <div class=\"tc tf yo zf mb\">
                            <a href=\"#!\" class=\"ek jk lk gh gi hi rg ml il vc _d _l\">
                                Actualité du jours
                            </a>

                            <span class=\"tc sf\">
                                <a href=\"#!\" class=\"inline-block ek xj kk wm\">
                                    Si vous souhaitez nous contacter : (+261) 34 03 651 11
                                </a>
                                <span class=\"inline-block\">
                                    Si vous avez des questions ou des préoccupations
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {% include 'component/rejoindre.html.twig' %}

        <!-- ===== Blog Grid Start ===== -->
        <section class=\"ji gp uq\">
            <div class=\"bb ye ki xn vq jb jo\">
                <div class=\"wc qf pn xo zf iq\">
                    {% for post in posts %}
                        <!-- Blog Item -->
                        <div class=\"animate_top sg vk rm xm\">
                            <div class=\"c rc i z-1 pg\">
                                <img class=\"w-full\" src=\"{{ asset('images/blog-01.png') }}\" alt=\"Blog\" />

                                <div class=\"im h r s df vd yc wg tc wf xf al hh/20 nl il z-10\">
                                    <a href=\"{{ path('app_actualite_show', {'post': post.id}) }}\" class=\"vc ek rg lk gh sl ml il gi hi\">
                                        Read More
                                    </a>
                                </div>
                            </div>

                            <div class=\"yh\">
                                <div class=\"tc uf wf ag jq\">
                                    <div class=\"tc wf ag\">
                                        <img src=\"{{ asset('images/icon-man.svg') }}\" alt=\"User\" />
                                        <p>
                                            {{ post.title }}
                                        </p>
                                    </div>
                                    <div class=\"tc wf ag\">
                                        <img src=\"{{ asset('images/icon-calender.svg') }}\" alt=\"Calender\" />
                                        <p>
                                            {{ post.postedAt|date('d/m/Y') }}
                                        </p>
                                    </div>
                                </div>
                                <h4 class=\"ek tj ml il kk wm xl eq lb\">
                                    <a href=\"{{ path('app_actualite_show', {'post': post.id}) }}\">
                                        {{ post.category.name }}
                                    </a>
                                </h4>
                                <p>
                                    {{ post.content | slice(0,200) }}
                                </p>
                            </div>
                        </div>
                    {% endfor %}
                </div>

                <!-- Pagination -->
                <div class=\"mb lo bq i ua\">
                    <nav>
                        <ul class=\"tc wf xf bg\">
                            <li>
                                {% if currentPage > 1 %}
                                    <a class=\"c tc wf xf wd in zc hn rg uj fo wk xm ml il hh rm tl zm yl an\" href=\"{{ path('app_actualite', {'page': currentPage - 1}) }}\">
                                        <svg class=\"th lm ml il\" width=\"8\" height=\"14\" viewBox=\"0 0 8 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path d=\"M2.93884 6.99999L7.88884 11.95L6.47484 13.364L0.11084 6.99999L6.47484 0.635986L7.88884 2.04999L2.93884 6.99999Z\" />
                                        </svg>
                                    </a>
                                {% endif %}
                            </li>
                            {% for page in 1 .. noOfPages %}

                                {% if page == currentPage %}
                                    <li>
                                        <a class=\"c tc wf xf wd in zc hn rg uj fo wk xm ml il hh rm tl zm yl an\" href=\"{{ path('app_actualite', {'page': page}) }}\">
                                            {{ page }}
                                        </a>
                                    </li>
                                {% else %}
                                    <li>
                                        <a class=\"c tc wf xf wd in zc hn rg uj fo wk xm ml il hh rm tl zm yl an\" href=\"{{ path('app_actualite', {'page': page}) }}\">
                                            {{ page }}
                                        </a>
                                    </li>
                                {% endif %}

                            {% endfor %}
                            <li>
                                {% if currentPage < noOfPages %}
                                    <a class=\"c tc wf xf wd in zc hn rg uj fo wk xm ml il hh rm tl zm yl an\" href=\"{{ path('app_actualite', {'page': currentPage + 1}) }}\">
                                        <svg class=\"th lm ml il\" width=\"8\" height=\"14\" viewBox=\"0 0 8 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path d=\"M5.06067 7.00001L0.110671 2.05001L1.52467 0.636014L7.88867 7.00001L1.52467 13.364L0.110672 11.95L5.06067 7.00001Z\" fill=\"#fefdfo\" />
                                        </svg>
                                    </a>
                                {% endif %}
                            </li>
                        </ul>
                    </nav>
                </div>
            <!-- Pagination -->
            </div>
        </section>
        <!-- ===== Blog Grid End ===== -->

        <!-- ===== FSM Start ===== -->
        {% include 'fsmlayout.html.twig' %}
    <!-- ===== FSM End ===== -->
    </main>
    {% include 'footer.html.twig' %}
{% endblock %}
", "actualite/index.html.twig", "C:\\Users\\prodigy-188\\Music\\projet1\\templates\\actualite\\index.html.twig");
    }
}
