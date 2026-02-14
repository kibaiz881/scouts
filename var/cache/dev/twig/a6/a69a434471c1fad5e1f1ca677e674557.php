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

/* lvt/index.html.twig */
class __TwigTemplate_036639bd65be259fd549917fe8753cd9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lvt/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lvt/index.html.twig"));

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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["lvtpage"]) || array_key_exists("lvtpage", $context) ? $context["lvtpage"] : (function () { throw new RuntimeError('Variable "lvtpage" does not exist.', 4, $this->source); })()), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/scout14.png"), "html", null, true);
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
                            , Lovitao\"
                        </h1>
                        <p class=\"fq\">
                            Sampana zandriny indrindra. Misy ireo ankizy 6 ka hatramin'ny 11 taona.
                                Ny fitaizana dia manana tanjona dia ny handray anjara amin'ny  fanambeazana amin'ny maha-olona feno: ara-batana, ara-tsaina, ara-panahy, ara-moraly, ara-piaraha-monina ary ara-pihetseham-po.
                            Amin'ny maha zaza azy dia ny fianana nofinofy no fitaovana entina manabe.
                        </P>

                        <div class=\"tc tf yo zf mb\">
                            <a href=\"#!\" class=\"ek jk lk gh gi hi rg ml il vc _d _l\">
                                Lovitao
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

        <!-- ===== Small Features Start ===== -->
        <section id=\"features\">
            <div class=\"bb ze ki yn 2xl:ud-px-12.5\">
                <div class=\"tc uf zo xf ap zf bp mq\">
                    <!-- Small Features Item -->
                    <div class=\"animate_top kn to/3 tc cg oq\">
                        <div class=\"tc wf xf cf ae cd rg mh\">
                            <img src=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon-01.svg"), "html", null, true);
        yield "\" alt=\"Icon\" />
                        </div>
                        <div>
                            <h4 class=\"ek yj go kk wm xb\">
                                Expansion du Mouvement Scout
                            </h4>
                            <p>
                                « Éclaireurs » est traduit en cinq langues. Cela lance un Mouvement qui adopte très vite le nom de « The Boy Scouts ».
                            </p>
                        </div>
                    </div>

                    <!-- Small Features Item -->
                    <div class=\"animate_top kn to/3 tc cg oq\">
                        <div class=\"tc wf xf cf ae cd rg oh\">
                            <img src=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon-03.svg"), "html", null, true);
        yield "\" alt=\"Icon\" />
                        </div>
                        <div>
                            <h4 class=\"ek yj go kk wm xb\">
                                Naissance du Mouvement Scout
                            </h4>
                            <p>
                                1907 : Le premier camp expérimental, organisé par Robert Baden-Powell avec 20 garçons sur l'île de Brownsea, au Royaume-Uni, connaît un succès retentissant.
                            </p>
                        </div>
                    </div>

                    <!-- Small Features Item -->
                    <div class=\"animate_top kn to/3 tc cg oq\">
                        <div class=\"tc wf xf cf ae cd rg nh\">
                            <img src=\"";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon-02.svg"), "html", null, true);
        yield "\" alt=\"Icon\" />
                        </div>
                        <div>
                            <h4 class=\"ek yj go kk wm xb\">
                                Évenements mondiaux et gouvernance du Scoutisme
                            </h4>
                            <p>
                                1920 : La première Conférence Mondiale du Scoutisme (appelée alors  le Congrès International du Scoutisme) a lieu   pendant le premier Jamboree Scout Mondial  à Londres, au Royaume-Uni.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- ===== Small Features End ===== -->

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
                        <a href=\"https://www.youtube.com/watch?v=X5HEkoHHGuc&list=RDX5HEkoHHGuc&start_radio=1\" data-fslightbox class=\"vc wf hg mb\">
                            <span class=\"tc wf xf be dd rg i gh ua\">
                                <span class=\"nf h vc yc vd rg gh qk -ud-z-1\"></span>
                                <img src=\"";
        // line 132
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
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shape-05.svg"), "html", null, true);
        yield "\" alt=\"Shape\" class=\"h -ud-left-5 x\" />
                            <img src=\"";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/lvt3.jpg"), "html", null, true);
        yield "\" alt=\"About\" class=\"ib\" />
                            <img src=\"";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/lvt2.jpg"), "html", null, true);
        yield "\" alt=\"About\" />
                        </div>
                        <div>
                            <img src=\"";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shape-06.svg"), "html", null, true);
        yield "\" alt=\"Shape\" />
                            <img src=\"";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/lvt1.jpg"), "html", null, true);
        yield "\" alt=\"About\" class=\"ob gb\" />
                            <img src=\"";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shape-07.svg"), "html", null, true);
        yield "\" alt=\"Shape\" class=\"bb\" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===== About End ===== -->

        <!-- ===== CTA Start ===== -->
        ";
        // line 158
        yield from $this->load("component/rejoindre.html.twig", 158)->unwrap()->yield($context);
        // line 159
        yield "        <!-- ===== CTA End ===== -->

        <!-- ===== Blog Start ===== -->
            <section class=\"ji gp uq\"> <!-- Section Title Start -->
            <div x-data=\"{ sectionTitle: `Derniers blogs et actualités`, sectionTitleText: `It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using.`}\">
                <div class=\"animate_top bb ze rj ki xn vq\">
                    <h2 x-text=\"sectionTitle\" class=\"fk vj pr kk wm on/5 gq/2 bb _b\"></h2>
                    <p class=\"bb on/5 wo/5 hq\" x-text=\"sectionTitleText\"></p>
                </div>
            </div>
            <!-- Section Title End -->

            <div class=\"bb ye ki xn vq jb jo\">
                <div class=\"wc qf pn xo zf iq\">
                    <!-- Blog Item -->
                    <div class=\"animate_top sg vk rm xm\">
                        <div class=\"c rc i z-1 pg\">
                            <img class=\"w-full\" src=\"";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/blog-01.png"), "html", null, true);
        yield "\" alt=\"Blog\" />

                            <div class=\"im h r s df vd yc wg tc wf xf al hh/20 nl il z-10\">
                                <a href=\"./blog-single.html\" class=\"vc ek rg lk gh sl ml il gi hi\">
                                    Read More
                                </a>
                            </div>
                        </div>

                        <div class=\"yh\">
                            <div class=\"tc uf wf ag jq\">
                                <div class=\"tc wf ag\">
                                    <img src=\"";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon-man.svg"), "html", null, true);
        yield "\" alt=\"User\" />
                                    <p>
                                        Musharof Chy
                                    </p>
                                </div>
                                <div class=\"tc wf ag\">
                                    <img src=\"";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon-calender.svg"), "html", null, true);
        yield "\" alt=\"Calender\" />
                                    <p>
                                        25 Dec, 2025
                                    </p>
                                </div>
                            </div>
                            <h4 class=\"ek tj ml il kk wm xl eq lb\">
                                <a href=\"blog-single.html\">
                                    Free advertising for your online business
                                </a>
                            </h4>
                        </div>
                    </div>

                    <!-- Blog Item -->
                    <div class=\"animate_top sg vk rm xm\">
                        <div class=\"c rc i z-1 pg\">
                            <img class=\"w-full\" src=\"";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/blog-02.png"), "html", null, true);
        yield "\" alt=\"Blog\" />

                            <div class=\"im h r s df vd yc wg tc wf xf al hh/20 nl il z-10\">
                                <a href=\"./blog-single.html\" class=\"vc ek rg lk gh sl ml il gi hi\">
                                    Read More
                                </a>
                            </div>
                        </div>

                        <div class=\"yh\">
                            <div class=\"tc uf wf ag jq\">
                                <div class=\"tc wf ag\">
                                    <img src=\"";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon-man.svg"), "html", null, true);
        yield "\" alt=\"User\" />
                                    <p>
                                        Musharof Chy
                                    </p>
                                </div>
                                <div class=\"tc wf ag\">
                                    <img src=\"";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon-calender.svg"), "html", null, true);
        yield "\" alt=\"Calender\" />
                                    <p>
                                        25 Dec, 2025
                                    </p>
                                </div>
                            </div>
                            <h4 class=\"ek tj ml il kk wm xl eq lb\">
                                <a href=\"blog-single.html\">
                                    9 simple ways to improve your design skills
                                </a>
                            </h4>
                        </div>
                    </div>

                    <!-- Blog Item -->
                    <div class=\"animate_top sg vk rm xm\">
                        <div class=\"c rc i z-1 pg\">
                            <img class=\"w-full\" src=\"";
        // line 246
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/blog-03.png"), "html", null, true);
        yield "\" alt=\"Blog\" />

                            <div class=\"im h r s df vd yc wg tc wf xf al hh/20 nl il z-10\">
                                <a href=\"./blog-single.html\" class=\"vc ek rg lk gh sl ml il gi hi\">
                                    Read More
                                </a>
                            </div>
                        </div>

                        <div class=\"yh\">
                            <div class=\"tc uf wf ag jq\">
                                <div class=\"tc wf ag\">
                                    <img src=\"";
        // line 258
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon-man.svg"), "html", null, true);
        yield "\" alt=\"User\" />
                                    <p>
                                        Musharof Chy
                                    </p>
                                </div>
                                <div class=\"tc wf ag\">
                                    <img src=\"";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon-calender.svg"), "html", null, true);
        yield "\" alt=\"Calender\" />
                                    <p>
                                        25 Dec, 2025
                                    </p>
                                </div>
                            </div>
                            <h4 class=\"ek tj ml il kk wm xl eq lb\">
                                <a href=\"blog-single.html\">
                                    Tips to quickly improve your coding speed.
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===== Blog End ===== -->

        <!-- ===== FSM Start ===== -->
        ";
        // line 283
        yield from $this->load("fsmlayout.html.twig", 283)->unwrap()->yield($context);
        // line 284
        yield "    <!-- ===== FSM End ===== -->

    </main>
    ";
        // line 287
        yield from $this->load("footer.html.twig", 287)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "lvt/index.html.twig";
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
        return array (  465 => 287,  460 => 284,  458 => 283,  436 => 264,  427 => 258,  412 => 246,  392 => 229,  383 => 223,  368 => 211,  348 => 194,  339 => 188,  324 => 176,  305 => 159,  303 => 158,  291 => 149,  287 => 148,  283 => 147,  277 => 144,  273 => 143,  269 => 142,  256 => 132,  216 => 95,  198 => 80,  180 => 65,  130 => 18,  126 => 17,  122 => 16,  118 => 15,  114 => 14,  107 => 9,  104 => 8,  91 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    {{ lvtpage }}
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
                <img src=\"{{ asset('images/scout14.png') }}\" alt=\"Woman\" class=\"h q r ua\" />
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
                            , Lovitao\"
                        </h1>
                        <p class=\"fq\">
                            Sampana zandriny indrindra. Misy ireo ankizy 6 ka hatramin'ny 11 taona.
                                Ny fitaizana dia manana tanjona dia ny handray anjara amin'ny  fanambeazana amin'ny maha-olona feno: ara-batana, ara-tsaina, ara-panahy, ara-moraly, ara-piaraha-monina ary ara-pihetseham-po.
                            Amin'ny maha zaza azy dia ny fianana nofinofy no fitaovana entina manabe.
                        </P>

                        <div class=\"tc tf yo zf mb\">
                            <a href=\"#!\" class=\"ek jk lk gh gi hi rg ml il vc _d _l\">
                                Lovitao
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

        <!-- ===== Small Features Start ===== -->
        <section id=\"features\">
            <div class=\"bb ze ki yn 2xl:ud-px-12.5\">
                <div class=\"tc uf zo xf ap zf bp mq\">
                    <!-- Small Features Item -->
                    <div class=\"animate_top kn to/3 tc cg oq\">
                        <div class=\"tc wf xf cf ae cd rg mh\">
                            <img src=\"{{ asset('images/icon-01.svg') }}\" alt=\"Icon\" />
                        </div>
                        <div>
                            <h4 class=\"ek yj go kk wm xb\">
                                Expansion du Mouvement Scout
                            </h4>
                            <p>
                                « Éclaireurs » est traduit en cinq langues. Cela lance un Mouvement qui adopte très vite le nom de « The Boy Scouts ».
                            </p>
                        </div>
                    </div>

                    <!-- Small Features Item -->
                    <div class=\"animate_top kn to/3 tc cg oq\">
                        <div class=\"tc wf xf cf ae cd rg oh\">
                            <img src=\"{{ asset('images/icon-03.svg') }}\" alt=\"Icon\" />
                        </div>
                        <div>
                            <h4 class=\"ek yj go kk wm xb\">
                                Naissance du Mouvement Scout
                            </h4>
                            <p>
                                1907 : Le premier camp expérimental, organisé par Robert Baden-Powell avec 20 garçons sur l'île de Brownsea, au Royaume-Uni, connaît un succès retentissant.
                            </p>
                        </div>
                    </div>

                    <!-- Small Features Item -->
                    <div class=\"animate_top kn to/3 tc cg oq\">
                        <div class=\"tc wf xf cf ae cd rg nh\">
                            <img src=\"{{ asset('images/icon-02.svg') }}\" alt=\"Icon\" />
                        </div>
                        <div>
                            <h4 class=\"ek yj go kk wm xb\">
                                Évenements mondiaux et gouvernance du Scoutisme
                            </h4>
                            <p>
                                1920 : La première Conférence Mondiale du Scoutisme (appelée alors  le Congrès International du Scoutisme) a lieu   pendant le premier Jamboree Scout Mondial  à Londres, au Royaume-Uni.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- ===== Small Features End ===== -->

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
                        <a href=\"https://www.youtube.com/watch?v=X5HEkoHHGuc&list=RDX5HEkoHHGuc&start_radio=1\" data-fslightbox class=\"vc wf hg mb\">
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

        <!-- ===== CTA Start ===== -->
        {% include 'component/rejoindre.html.twig' %}
        <!-- ===== CTA End ===== -->

        <!-- ===== Blog Start ===== -->
            <section class=\"ji gp uq\"> <!-- Section Title Start -->
            <div x-data=\"{ sectionTitle: `Derniers blogs et actualités`, sectionTitleText: `It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using.`}\">
                <div class=\"animate_top bb ze rj ki xn vq\">
                    <h2 x-text=\"sectionTitle\" class=\"fk vj pr kk wm on/5 gq/2 bb _b\"></h2>
                    <p class=\"bb on/5 wo/5 hq\" x-text=\"sectionTitleText\"></p>
                </div>
            </div>
            <!-- Section Title End -->

            <div class=\"bb ye ki xn vq jb jo\">
                <div class=\"wc qf pn xo zf iq\">
                    <!-- Blog Item -->
                    <div class=\"animate_top sg vk rm xm\">
                        <div class=\"c rc i z-1 pg\">
                            <img class=\"w-full\" src=\"{{ asset('images/blog-01.png') }}\" alt=\"Blog\" />

                            <div class=\"im h r s df vd yc wg tc wf xf al hh/20 nl il z-10\">
                                <a href=\"./blog-single.html\" class=\"vc ek rg lk gh sl ml il gi hi\">
                                    Read More
                                </a>
                            </div>
                        </div>

                        <div class=\"yh\">
                            <div class=\"tc uf wf ag jq\">
                                <div class=\"tc wf ag\">
                                    <img src=\"{{ asset('images/icon-man.svg') }}\" alt=\"User\" />
                                    <p>
                                        Musharof Chy
                                    </p>
                                </div>
                                <div class=\"tc wf ag\">
                                    <img src=\"{{ asset('images/icon-calender.svg') }}\" alt=\"Calender\" />
                                    <p>
                                        25 Dec, 2025
                                    </p>
                                </div>
                            </div>
                            <h4 class=\"ek tj ml il kk wm xl eq lb\">
                                <a href=\"blog-single.html\">
                                    Free advertising for your online business
                                </a>
                            </h4>
                        </div>
                    </div>

                    <!-- Blog Item -->
                    <div class=\"animate_top sg vk rm xm\">
                        <div class=\"c rc i z-1 pg\">
                            <img class=\"w-full\" src=\"{{ asset('images/blog-02.png') }}\" alt=\"Blog\" />

                            <div class=\"im h r s df vd yc wg tc wf xf al hh/20 nl il z-10\">
                                <a href=\"./blog-single.html\" class=\"vc ek rg lk gh sl ml il gi hi\">
                                    Read More
                                </a>
                            </div>
                        </div>

                        <div class=\"yh\">
                            <div class=\"tc uf wf ag jq\">
                                <div class=\"tc wf ag\">
                                    <img src=\"{{ asset('images/icon-man.svg') }}\" alt=\"User\" />
                                    <p>
                                        Musharof Chy
                                    </p>
                                </div>
                                <div class=\"tc wf ag\">
                                    <img src=\"{{ asset('images/icon-calender.svg') }}\" alt=\"Calender\" />
                                    <p>
                                        25 Dec, 2025
                                    </p>
                                </div>
                            </div>
                            <h4 class=\"ek tj ml il kk wm xl eq lb\">
                                <a href=\"blog-single.html\">
                                    9 simple ways to improve your design skills
                                </a>
                            </h4>
                        </div>
                    </div>

                    <!-- Blog Item -->
                    <div class=\"animate_top sg vk rm xm\">
                        <div class=\"c rc i z-1 pg\">
                            <img class=\"w-full\" src=\"{{ asset('images/blog-03.png') }}\" alt=\"Blog\" />

                            <div class=\"im h r s df vd yc wg tc wf xf al hh/20 nl il z-10\">
                                <a href=\"./blog-single.html\" class=\"vc ek rg lk gh sl ml il gi hi\">
                                    Read More
                                </a>
                            </div>
                        </div>

                        <div class=\"yh\">
                            <div class=\"tc uf wf ag jq\">
                                <div class=\"tc wf ag\">
                                    <img src=\"{{ asset('images/icon-man.svg') }}\" alt=\"User\" />
                                    <p>
                                        Musharof Chy
                                    </p>
                                </div>
                                <div class=\"tc wf ag\">
                                    <img src=\"{{ asset('images/icon-calender.svg') }}\" alt=\"Calender\" />
                                    <p>
                                        25 Dec, 2025
                                    </p>
                                </div>
                            </div>
                            <h4 class=\"ek tj ml il kk wm xl eq lb\">
                                <a href=\"blog-single.html\">
                                    Tips to quickly improve your coding speed.
                                </a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===== Blog End ===== -->

        <!-- ===== FSM Start ===== -->
        {% include 'fsmlayout.html.twig' %}
    <!-- ===== FSM End ===== -->

    </main>
    {% include 'footer.html.twig' %}
{% endblock %}
", "lvt/index.html.twig", "C:\\Users\\prodigy-188\\Music\\projet1\\templates\\lvt\\index.html.twig");
    }
}
