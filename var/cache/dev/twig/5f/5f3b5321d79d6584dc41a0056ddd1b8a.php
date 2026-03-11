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
class __TwigTemplate_3b5d3f9380d50a72d3dce385b0b56e64 extends Template
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
        yield "\t";
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
        yield "\t";
        // line 9
        yield "\t";
        yield from $this->load("layout.html.twig", 9)->unwrap()->yield($context);
        // line 10
        yield "\t<main>
\t\t<!-- ===== Hero Start ===== -->
\t\t<section
\t\t\tclass=\"gj do ir hj sp jr i pg\">
\t\t\t<!-- Hero Images -->
\t\t\t<div class=\"xc fn zd/2 2xl:ud-w-187.5 bd 2xl:ud-h-171.5 h q r\">
\t\t\t\t<img src=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shape-01.svg"), "html", null, true);
        yield "\" alt=\"shape\" class=\"xc 2xl:ud-block h t -ud-left-[10%] ua\"/>
\t\t\t\t<img src=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shape-02.svg"), "html", null, true);
        yield "\" alt=\"shape\" class=\"xc 2xl:ud-block h u p va\"/>
\t\t\t\t<img src=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shape-03.svg"), "html", null, true);
        yield "\" alt=\"shape\" class=\"xc 2xl:ud-block h v w va\"/>
\t\t\t\t<img src=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shapehc.png"), "html", null, true);
        yield "\" alt=\"shape\" class=\"h q r\"/>
\t\t\t\t<img src=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/scout16.png"), "html", null, true);
        yield "\" alt=\"Woman\" class=\"h q r ua\"/>
\t\t\t</div>

\t\t\t<!-- Hero Content -->
\t\t\t<div class=\"bb ze ki xn 2xl:ud-px-0\">
\t\t\t\t<div class=\"tc _o\">
\t\t\t\t\t<div class=\"animate_left jn/2\">
\t\t\t\t\t\t<h1 class=\"fk vj zp or kk wm wb\">
\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t<span style=\"color:red\">
\t\t\t\t\t\t\t\tScout un jour
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t, scout toujours!\"
\t\t\t\t\t\t</h1>
\t\t\t\t\t\t<p class=\"fq\">
\t\t\t\t\t\t\t\"Scout un jour, scout toujours» ! Fondé par l'anglais Robert Stephenson Smyth Baden Powell, le scoutisme est bien plus qu'une simple organisation de jeunesse. Tout au long de sa vie, cet homme s'est pleinement dévoué à transformer celle des jeunes en leur enseignant des valeurs jugées fondamentales selon lui, telles que la fraternité, la loyauté, la foi et le respect de la nature.\"
\t\t\t\t\t\t</p>

\t\t\t\t\t\t<div class=\"tc tf yo zf mb\">
\t\t\t\t\t\t\t<a href=\"#!\" class=\"ek jk lk gh gi hi rg ml il vc _d _l\">
\t\t\t\t\t\t\t\tActualité du jours
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<span class=\"tc sf\">
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"inline-block ek xj kk wm\">
\t\t\t\t\t\t\t\t\tSi vous souhaitez nous contacter : (+261) 34 03 651 11
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"inline-block\">
\t\t\t\t\t\t\t\t\tSi vous avez des questions ou des préoccupations
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t";
        // line 57
        yield from $this->load("component/rejoindre.html.twig", 57)->unwrap()->yield($context);
        // line 58
        yield "
\t\t<!-- ===== Blog Grid Start ===== -->
\t\t<section class=\"ji gp uq\">
\t\t\t<div class=\"bb ye ki xn vq jb jo\">
\t\t\t\t<div class=\"wc qf pn xo zf iq\">
\t\t\t\t\t";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 63, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 64
            yield "\t\t\t\t\t\t<!-- Blog Item -->
\t\t\t\t\t\t<div class=\"animate_top sg vk rm xm\">
\t\t\t\t\t\t\t<div class=\"c rc i z-1 pg\">
\t\t\t\t\t\t\t\t<img class=\"w-full\" src=\"";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/posts/" . CoreExtension::getAttribute($this->env, $this->source, $context["post"], "postPictureName", [], "any", false, false, false, 67))), "html", null, true);
            yield "\" alt=\"Blog\"/>

\t\t\t\t\t\t\t\t<div class=\"im h r s df vd yc wg tc wf xf al hh/20 nl il z-10\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_actualite_show", ["post" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 70)]), "html", null, true);
            yield "\" class=\"vc ek rg lk gh sl ml il gi hi\">
\t\t\t\t\t\t\t\t\t\tRead More
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"yh\">
\t\t\t\t\t\t\t\t<div class=\"tc uf wf ag jq\">
\t\t\t\t\t\t\t\t\t<div class=\"tc wf ag\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon-man.svg"), "html", null, true);
            yield "\" alt=\"User\"/>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 81), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tc wf ag\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon-calender.svg"), "html", null, true);
            yield "\" alt=\"Calender\"/>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "postedAt", [], "any", false, false, false, 87), "d/m/Y"), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h4 class=\"ek tj ml il kk wm xl eq lb\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_actualite_show", ["post" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 92)]), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t\t\t";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "category", [], "any", false, false, false, 93), "name", [], "any", false, false, false, 93), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 97), 0, 200), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['post'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        yield "\t\t\t\t</div>

\t\t\t\t<!-- Pagination -->
\t\t\t\t";
        // line 105
        if (((isset($context["noOfPages"]) || array_key_exists("noOfPages", $context) ? $context["noOfPages"] : (function () { throw new RuntimeError('Variable "noOfPages" does not exist.', 105, $this->source); })()) >= 1)) {
            // line 106
            yield "\t\t\t\t\t<div class=\"mb lo bq i ua\">
\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t<ul
\t\t\t\t\t\t\t\tclass=\"tc wf xf bg\">

\t\t\t\t\t\t\t\t<!-- Previous page -->
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t";
            // line 113
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 113, $this->source); })()) > 1)) {
                // line 114
                yield "\t\t\t\t\t\t\t\t\t\t<a class=\"c tc wf xf wd in zc hn rg uj fo wk xm ml il hh rm tl zm yl an\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_actualite", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 114, $this->source); })()) - 1)]), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"th lm ml il\" width=\"8\" height=\"14\" viewbox=\"0 0 8 14\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M2.93884 6.99999L7.88884 11.95L6.47484 13.364L0.11084 6.99999L6.47484 0.635986L7.88884 2.04999L2.93884 6.99999Z\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 120
            yield "\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<!-- Pages -->
\t\t\t\t\t\t\t\t";
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["noOfPages"]) || array_key_exists("noOfPages", $context) ? $context["noOfPages"] : (function () { throw new RuntimeError('Variable "noOfPages" does not exist.', 123, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 124
                yield "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"c tc wf xf wd in zc hn rg uj fo wk xm ml il hh rm tl zm yl an
\t\t\t\t\t\t\t\t\t\t\t                        ";
                // line 126
                if (($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 126, $this->source); })()))) {
                    yield " active ";
                }
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_actualite", ["page" => $context["page"]]), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 127
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            yield "
\t\t\t\t\t\t\t\t<!-- Next page -->
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t";
            // line 134
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 134, $this->source); })()) < (isset($context["noOfPages"]) || array_key_exists("noOfPages", $context) ? $context["noOfPages"] : (function () { throw new RuntimeError('Variable "noOfPages" does not exist.', 134, $this->source); })()))) {
                // line 135
                yield "\t\t\t\t\t\t\t\t\t\t<a class=\"c tc wf xf wd in zc hn rg uj fo wk xm ml il hh rm tl zm yl an\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_actualite", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 135, $this->source); })()) + 1)]), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"th lm ml il\" width=\"8\" height=\"14\" viewbox=\"0 0 8 14\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M5.06067 7.00001L0.110671 2.05001L1.52467 0.636014L7.88867 7.00001L1.52467 13.364L0.110672 11.95L5.06067 7.00001Z\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 141
            yield "\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 147
        yield "\t\t\t\t<!-- Pagination -->


\t\t\t</div>
\t\t</section>
\t\t<!-- ===== Blog Grid End ===== -->

\t\t<!-- ===== FSM Start ===== -->
\t\t";
        // line 155
        yield from $this->load("fsmlayout.html.twig", 155)->unwrap()->yield($context);
        // line 156
        yield "\t\t<!-- ===== FSM End ===== -->
\t</main>
\t";
        // line 158
        yield from $this->load("footer.html.twig", 158)->unwrap()->yield($context);
        
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
        return array (  356 => 158,  352 => 156,  350 => 155,  340 => 147,  332 => 141,  322 => 135,  320 => 134,  315 => 131,  305 => 127,  297 => 126,  293 => 124,  289 => 123,  284 => 120,  274 => 114,  272 => 113,  263 => 106,  261 => 105,  256 => 102,  245 => 97,  238 => 93,  234 => 92,  226 => 87,  221 => 85,  214 => 81,  209 => 79,  197 => 70,  191 => 67,  186 => 64,  182 => 63,  175 => 58,  173 => 57,  133 => 20,  129 => 19,  125 => 18,  121 => 17,  117 => 16,  109 => 10,  106 => 9,  104 => 8,  91 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{ actu }}
{% endblock %}

{% block body %}
\t{# header components #}
\t{% include 'layout.html.twig' %}
\t<main>
\t\t<!-- ===== Hero Start ===== -->
\t\t<section
\t\t\tclass=\"gj do ir hj sp jr i pg\">
\t\t\t<!-- Hero Images -->
\t\t\t<div class=\"xc fn zd/2 2xl:ud-w-187.5 bd 2xl:ud-h-171.5 h q r\">
\t\t\t\t<img src=\"{{ asset('images/shape-01.svg') }}\" alt=\"shape\" class=\"xc 2xl:ud-block h t -ud-left-[10%] ua\"/>
\t\t\t\t<img src=\"{{ asset('images/shape-02.svg') }}\" alt=\"shape\" class=\"xc 2xl:ud-block h u p va\"/>
\t\t\t\t<img src=\"{{ asset('images/shape-03.svg') }}\" alt=\"shape\" class=\"xc 2xl:ud-block h v w va\"/>
\t\t\t\t<img src=\"{{ asset('images/shapehc.png') }}\" alt=\"shape\" class=\"h q r\"/>
\t\t\t\t<img src=\"{{ asset('images/scout16.png') }}\" alt=\"Woman\" class=\"h q r ua\"/>
\t\t\t</div>

\t\t\t<!-- Hero Content -->
\t\t\t<div class=\"bb ze ki xn 2xl:ud-px-0\">
\t\t\t\t<div class=\"tc _o\">
\t\t\t\t\t<div class=\"animate_left jn/2\">
\t\t\t\t\t\t<h1 class=\"fk vj zp or kk wm wb\">
\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t<span style=\"color:red\">
\t\t\t\t\t\t\t\tScout un jour
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t, scout toujours!\"
\t\t\t\t\t\t</h1>
\t\t\t\t\t\t<p class=\"fq\">
\t\t\t\t\t\t\t\"Scout un jour, scout toujours» ! Fondé par l'anglais Robert Stephenson Smyth Baden Powell, le scoutisme est bien plus qu'une simple organisation de jeunesse. Tout au long de sa vie, cet homme s'est pleinement dévoué à transformer celle des jeunes en leur enseignant des valeurs jugées fondamentales selon lui, telles que la fraternité, la loyauté, la foi et le respect de la nature.\"
\t\t\t\t\t\t</p>

\t\t\t\t\t\t<div class=\"tc tf yo zf mb\">
\t\t\t\t\t\t\t<a href=\"#!\" class=\"ek jk lk gh gi hi rg ml il vc _d _l\">
\t\t\t\t\t\t\t\tActualité du jours
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<span class=\"tc sf\">
\t\t\t\t\t\t\t\t<a href=\"#!\" class=\"inline-block ek xj kk wm\">
\t\t\t\t\t\t\t\t\tSi vous souhaitez nous contacter : (+261) 34 03 651 11
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"inline-block\">
\t\t\t\t\t\t\t\t\tSi vous avez des questions ou des préoccupations
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t{% include 'component/rejoindre.html.twig' %}

\t\t<!-- ===== Blog Grid Start ===== -->
\t\t<section class=\"ji gp uq\">
\t\t\t<div class=\"bb ye ki xn vq jb jo\">
\t\t\t\t<div class=\"wc qf pn xo zf iq\">
\t\t\t\t\t{% for post in posts %}
\t\t\t\t\t\t<!-- Blog Item -->
\t\t\t\t\t\t<div class=\"animate_top sg vk rm xm\">
\t\t\t\t\t\t\t<div class=\"c rc i z-1 pg\">
\t\t\t\t\t\t\t\t<img class=\"w-full\" src=\"{{ asset('images/posts/' ~ post.postPictureName) }}\" alt=\"Blog\"/>

\t\t\t\t\t\t\t\t<div class=\"im h r s df vd yc wg tc wf xf al hh/20 nl il z-10\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_actualite_show', {'post': post.id}) }}\" class=\"vc ek rg lk gh sl ml il gi hi\">
\t\t\t\t\t\t\t\t\t\tRead More
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"yh\">
\t\t\t\t\t\t\t\t<div class=\"tc uf wf ag jq\">
\t\t\t\t\t\t\t\t\t<div class=\"tc wf ag\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/icon-man.svg') }}\" alt=\"User\"/>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t{{ post.title }}
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"tc wf ag\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/icon-calender.svg') }}\" alt=\"Calender\"/>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t{{ post.postedAt|date('d/m/Y') }}
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h4 class=\"ek tj ml il kk wm xl eq lb\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_actualite_show', {'post': post.id}) }}\">
\t\t\t\t\t\t\t\t\t\t{{ post.category.name }}
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t{{ post.content | slice(0,200) }}
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>

\t\t\t\t<!-- Pagination -->
\t\t\t\t{% if noOfPages >= 1 %}
\t\t\t\t\t<div class=\"mb lo bq i ua\">
\t\t\t\t\t\t<nav>
\t\t\t\t\t\t\t<ul
\t\t\t\t\t\t\t\tclass=\"tc wf xf bg\">

\t\t\t\t\t\t\t\t<!-- Previous page -->
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t{% if currentPage > 1 %}
\t\t\t\t\t\t\t\t\t\t<a class=\"c tc wf xf wd in zc hn rg uj fo wk xm ml il hh rm tl zm yl an\" href=\"{{ path('app_actualite', {'page': currentPage - 1}) }}\">
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"th lm ml il\" width=\"8\" height=\"14\" viewbox=\"0 0 8 14\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M2.93884 6.99999L7.88884 11.95L6.47484 13.364L0.11084 6.99999L6.47484 0.635986L7.88884 2.04999L2.93884 6.99999Z\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<!-- Pages -->
\t\t\t\t\t\t\t\t{% for page in 1..noOfPages %}
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a class=\"c tc wf xf wd in zc hn rg uj fo wk xm ml il hh rm tl zm yl an
\t\t\t\t\t\t\t\t\t\t\t                        {% if page == currentPage %} active {% endif %}\" href=\"{{ path('app_actualite', {'page': page}) }}\">
\t\t\t\t\t\t\t\t\t\t\t{{ page }}
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t\t\t<!-- Next page -->
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t{% if currentPage < noOfPages %}
\t\t\t\t\t\t\t\t\t\t<a class=\"c tc wf xf wd in zc hn rg uj fo wk xm ml il hh rm tl zm yl an\" href=\"{{ path('app_actualite', {'page': currentPage + 1}) }}\">
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"th lm ml il\" width=\"8\" height=\"14\" viewbox=\"0 0 8 14\" fill=\"none\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M5.06067 7.00001L0.110671 2.05001L1.52467 0.636014L7.88867 7.00001L1.52467 13.364L0.110672 11.95L5.06067 7.00001Z\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t<!-- Pagination -->


\t\t\t</div>
\t\t</section>
\t\t<!-- ===== Blog Grid End ===== -->

\t\t<!-- ===== FSM Start ===== -->
\t\t{% include 'fsmlayout.html.twig' %}
\t\t<!-- ===== FSM End ===== -->
\t</main>
\t{% include 'footer.html.twig' %}
{% endblock %}
", "actualite/index.html.twig", "C:\\Users\\M_INFO\\Music\\scouts\\templates\\actualite\\index.html.twig");
    }
}
