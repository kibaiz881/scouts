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

/* mpdl/index.html.twig */
class __TwigTemplate_1da05b674a943fdb8d978baaf5374354 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mpdl/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mpdl/index.html.twig"));

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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["mpdlPage"]) || array_key_exists("mpdlPage", $context) ? $context["mpdlPage"] : (function () { throw new RuntimeError('Variable "mpdlPage" does not exist.', 4, $this->source); })()), "html", null, true);
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
                                Ny Sampana
                            </span>
                            , Mpiandalana\"
                        </h1>
                        <p class=\"fq\">
                            \"Scout un jour, scout toujours» ! Fondé par l'anglais Robert Stephenson Smyth Baden Powell, le scoutisme est bien plus qu'une simple organisation de jeunesse. Tout au long de sa vie, cet homme s'est pleinement dévoué à transformer celle des jeunes en leur enseignant des valeurs jugées fondamentales selon lui, telles que la fraternité, la loyauté, la foi et le respect de la nature.\"
                        </p>

                        <div class=\"tc tf yo zf mb\">
                            <a href=\"#!\" class=\"ek jk lk gh gi hi rg ml il vc _d _l\">
                                Mpiandalana
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
        
        <!-- ===== About Start ===== -->
        <section class=\"ji gp uq 2xl:ud-py-35 pg\">
            <div class=\"bb ze ki xn wq\">
                <div class=\"tc wf gg qq\">

                    <!-- About Content -->
                    <div class=\"animate_right jn/2\">
                        <h4 class=\"ek yj mk gb\">
                            Helder Camara
                        </h4>
                        <h2 class=\"fk vj zp pr kk wm qb\">
                            La paix, non-violence
                        </h2>
                        <p class=\"uo\">
                            La paix non, violence
                            La paix et la non-violence sont des concepts fondamentaux qui se répandent dans toutes les cultures et sont le fondement des textes religieux et spirituels. La non-violence est un choix de vie qui repose sur le respect profond de l'intégrité physique, psychique et morale d'autrui, et elle est considérée comme une stratégie de construction de paix fondamentale. La paix, quant à elle, est un état de calme et de tranquillité, ainsi que l'absence de perturbation, de trouble, de guerre et de conflit. Ces concepts sont liés à la quête de bien-être, de sérénité, de connexion, d'entente, d'appréciation et d'harmonie entre les individus et les groupes. La non-violence et la paix forment ensemble une éthique de vie, permettant aux individus de vivre leur vie avec les autres et de permettre aux autres de vivre avec eux
                        </p>
                        <a href=\"https://www.youtube.com/watch?v=-XBb27xf9bI&list=RD-XBb27xf9bI&start_radio=1\" data-fslightbox class=\"vc wf hg mb\">
                            <span class=\"tc wf xf be dd rg i gh ua\">
                                <span class=\"nf h vc yc vd rg gh qk -ud-z-1\"></span>
                                <img src=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon-play.svg"), "html", null, true);
        yield "\" alt=\"Play\" />
                            </span>
                            <span class=\"kk\">
                                Regarder la video
                            </span>
                        </a>
                    </div>
                    <!-- About Images -->
                    <div class=\"animate_left xc gn gg jn/2 i\">
                        <div>
                            <img src=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shape-05.svg"), "html", null, true);
        yield "\" alt=\"Shape\" class=\"h -ud-left-5 x\" />
                            <img src=\"";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/lvt3.jpg"), "html", null, true);
        yield "\" alt=\"About\" class=\"ib\" />
                            <img src=\"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/lvt2.jpg"), "html", null, true);
        yield "\" alt=\"About\" />
                        </div>
                        <div>
                            <img src=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shape-06.svg"), "html", null, true);
        yield "\" alt=\"Shape\" />
                            <img src=\"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/lvt1.jpg"), "html", null, true);
        yield "\" alt=\"About\" class=\"ob gb\" />
                            <img src=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shape-07.svg"), "html", null, true);
        yield "\" alt=\"Shape\" class=\"bb\" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===== About End ===== -->
        
        <!-- ===== FSM Start ===== -->
        ";
        // line 102
        yield from $this->load("fsmlayout.html.twig", 102)->unwrap()->yield($context);
        // line 103
        yield "        <!-- ===== FSM End ===== -->
    </main>
    ";
        // line 105
        yield from $this->load("footer.html.twig", 105)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "mpdl/index.html.twig";
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
        return array (  244 => 105,  240 => 103,  238 => 102,  226 => 93,  222 => 92,  218 => 91,  212 => 88,  208 => 87,  204 => 86,  191 => 76,  130 => 18,  126 => 17,  122 => 16,  118 => 15,  114 => 14,  107 => 9,  104 => 8,  91 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    {{ mpdlPage }}
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
                                Ny Sampana
                            </span>
                            , Mpiandalana\"
                        </h1>
                        <p class=\"fq\">
                            \"Scout un jour, scout toujours» ! Fondé par l'anglais Robert Stephenson Smyth Baden Powell, le scoutisme est bien plus qu'une simple organisation de jeunesse. Tout au long de sa vie, cet homme s'est pleinement dévoué à transformer celle des jeunes en leur enseignant des valeurs jugées fondamentales selon lui, telles que la fraternité, la loyauté, la foi et le respect de la nature.\"
                        </p>

                        <div class=\"tc tf yo zf mb\">
                            <a href=\"#!\" class=\"ek jk lk gh gi hi rg ml il vc _d _l\">
                                Mpiandalana
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
        
        <!-- ===== About Start ===== -->
        <section class=\"ji gp uq 2xl:ud-py-35 pg\">
            <div class=\"bb ze ki xn wq\">
                <div class=\"tc wf gg qq\">

                    <!-- About Content -->
                    <div class=\"animate_right jn/2\">
                        <h4 class=\"ek yj mk gb\">
                            Helder Camara
                        </h4>
                        <h2 class=\"fk vj zp pr kk wm qb\">
                            La paix, non-violence
                        </h2>
                        <p class=\"uo\">
                            La paix non, violence
                            La paix et la non-violence sont des concepts fondamentaux qui se répandent dans toutes les cultures et sont le fondement des textes religieux et spirituels. La non-violence est un choix de vie qui repose sur le respect profond de l'intégrité physique, psychique et morale d'autrui, et elle est considérée comme une stratégie de construction de paix fondamentale. La paix, quant à elle, est un état de calme et de tranquillité, ainsi que l'absence de perturbation, de trouble, de guerre et de conflit. Ces concepts sont liés à la quête de bien-être, de sérénité, de connexion, d'entente, d'appréciation et d'harmonie entre les individus et les groupes. La non-violence et la paix forment ensemble une éthique de vie, permettant aux individus de vivre leur vie avec les autres et de permettre aux autres de vivre avec eux
                        </p>
                        <a href=\"https://www.youtube.com/watch?v=-XBb27xf9bI&list=RD-XBb27xf9bI&start_radio=1\" data-fslightbox class=\"vc wf hg mb\">
                            <span class=\"tc wf xf be dd rg i gh ua\">
                                <span class=\"nf h vc yc vd rg gh qk -ud-z-1\"></span>
                                <img src=\"{{ asset('images/icon-play.svg') }}\" alt=\"Play\" />
                            </span>
                            <span class=\"kk\">
                                Regarder la video
                            </span>
                        </a>
                    </div>
                    <!-- About Images -->
                    <div class=\"animate_left xc gn gg jn/2 i\">
                        <div>
                            <img src=\"{{ asset('images/shape-05.svg') }}\" alt=\"Shape\" class=\"h -ud-left-5 x\" />
                            <img src=\"{{ asset('images/lvt3.jpg') }}\" alt=\"About\" class=\"ib\" />
                            <img src=\"{{ asset('images/lvt2.jpg') }}\" alt=\"About\" />
                        </div>
                        <div>
                            <img src=\"{{ asset('images/shape-06.svg') }}\" alt=\"Shape\" />
                            <img src=\"{{ asset('images/lvt1.jpg') }}\" alt=\"About\" class=\"ob gb\" />
                            <img src=\"{{ asset('images/shape-07.svg') }}\" alt=\"Shape\" class=\"bb\" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===== About End ===== -->
        
        <!-- ===== FSM Start ===== -->
        {% include 'fsmlayout.html.twig' %}
        <!-- ===== FSM End ===== -->
    </main>
    {% include 'footer.html.twig' %}
{% endblock %}
", "mpdl/index.html.twig", "C:\\Users\\prodigy-188\\Music\\projet1\\templates\\mpdl\\index.html.twig");
    }
}
