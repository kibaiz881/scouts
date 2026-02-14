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

/* mp/index.html.twig */
class __TwigTemplate_6f524e87bf03d7a681dec39e624b3685 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mp/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mp/index.html.twig"));

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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["mpPage"]) || array_key_exists("mpPage", $context) ? $context["mpPage"] : (function () { throw new RuntimeError('Variable "mpPage" does not exist.', 4, $this->source); })()), "html", null, true);
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
        yield from $this->load("layout.html.twig", 8)->unwrap()->yield($context);
        // line 9
        yield "    <main>
        <!-- ===== Hero Start ===== -->
        <section class=\"gj do ir hj sp jr i pg\">
            <!-- Hero Images -->
            <div class=\"xc fn zd/2 2xl:ud-w-187.5 bd 2xl:ud-h-171.5 h q r\">
                <img src=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shape-01.svg"), "html", null, true);
        yield "\" alt=\"shape\" class=\"xc 2xl:ud-block h t -ud-left-[10%] ua\" />
                <img src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shape-02.svg"), "html", null, true);
        yield "\" alt=\"shape\" class=\"xc 2xl:ud-block h u p va\" />
                <img src=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shape-03.svg"), "html", null, true);
        yield "\" alt=\"shape\" class=\"xc 2xl:ud-block h v w va\" />
                <img src=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shapehc.png"), "html", null, true);
        yield "\" alt=\"shape\" class=\"h q r\" />
                <img src=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/scout11.png"), "html", null, true);
        yield "\" alt=\"Woman\" class=\"h q r ua\" />
            </div>

            <!-- Hero Content -->
            <div class=\"bb ze ki xn 2xl:ud-px-0\">
                <div class=\"tc _o\">
                    <div class=\"animate_left jn/2\">
                        <h1 class=\"fk vj zp or kk wm wb\">
                            \"
                            <span style=\"color:red\">
                                Ireo Mpiandraikitra
                            </span>
                            ,ato @ Fivondrondronana\"
                        </h1>
                        <p class=\"fq\">
                            \"Scout un jour, scout toujours» ! Fondé par l'anglais Robert Stephenson Smyth Baden Powell, le scoutisme est bien plus qu'une simple organisation de jeunesse. Tout au long de sa vie, cet homme s'est pleinement dévoué à transformer celle des jeunes en leur enseignant des valeurs jugées fondamentales selon lui, telles que la fraternité, la loyauté, la foi et le respect de la nature.\"
                        </p>

                        <div class=\"tc tf yo zf mb\">
                            <a href=\"#!\" class=\"ek jk lk gh gi hi rg ml il vc _d _l\">
                                Mpiandraikitra
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
        <!-- ===== Hero End ===== -->
        
        <!-- ===== FSM Start ===== -->
        ";
        // line 57
        yield from $this->load("fsmlayout.html.twig", 57)->unwrap()->yield($context);
        // line 58
        yield "        <!-- ===== FSM End ===== -->
    </main>
    ";
        // line 60
        yield from $this->load("footer.html.twig", 60)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "mp/index.html.twig";
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
        return array (  178 => 60,  174 => 58,  172 => 57,  130 => 18,  126 => 17,  122 => 16,  118 => 15,  114 => 14,  107 => 9,  104 => 8,  91 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    {{ mpPage }}
{% endblock %}

{% block body %}
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
                <img src=\"{{ asset('images/scout11.png') }}\" alt=\"Woman\" class=\"h q r ua\" />
            </div>

            <!-- Hero Content -->
            <div class=\"bb ze ki xn 2xl:ud-px-0\">
                <div class=\"tc _o\">
                    <div class=\"animate_left jn/2\">
                        <h1 class=\"fk vj zp or kk wm wb\">
                            \"
                            <span style=\"color:red\">
                                Ireo Mpiandraikitra
                            </span>
                            ,ato @ Fivondrondronana\"
                        </h1>
                        <p class=\"fq\">
                            \"Scout un jour, scout toujours» ! Fondé par l'anglais Robert Stephenson Smyth Baden Powell, le scoutisme est bien plus qu'une simple organisation de jeunesse. Tout au long de sa vie, cet homme s'est pleinement dévoué à transformer celle des jeunes en leur enseignant des valeurs jugées fondamentales selon lui, telles que la fraternité, la loyauté, la foi et le respect de la nature.\"
                        </p>

                        <div class=\"tc tf yo zf mb\">
                            <a href=\"#!\" class=\"ek jk lk gh gi hi rg ml il vc _d _l\">
                                Mpiandraikitra
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
        <!-- ===== Hero End ===== -->
        
        <!-- ===== FSM Start ===== -->
        {% include 'fsmlayout.html.twig' %}
        <!-- ===== FSM End ===== -->
    </main>
    {% include 'footer.html.twig' %}
{% endblock %}
", "mp/index.html.twig", "C:\\Users\\prodigy-188\\Music\\projet1\\templates\\mp\\index.html.twig");
    }
}
