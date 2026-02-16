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

/* fsmlayout.html.twig */
class __TwigTemplate_516896b4d0fbf52df142b63602aa98e6 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fsmlayout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fsmlayout.html.twig"));

        // line 1
        yield "<section class=\"pj vp mr\">
    <!-- Section Title Start -->
    <div x-data=\"{ sectionTitle: `Firaisan'ny SKOTISMA eto Madagasikara`, sectionTitleText: `Ny Firaisan'ny Skotisma eto Madagasikara, federasiona nasionalin'ny fikambanana scout eto Madagasikara.`}\">
        <div class=\"animate_top bb ze rj ki xn vq\">
            <h2 x-text=\"sectionTitle\" class=\"fk vj pr kk wm on/5 gq/2 bb _b\"></h2>
            <p class=\"bb on/5 wo/5 hq\" x-text=\"sectionTitleText\"></p>
        </div>
    </div>
    <!-- Section Title End -->
    <div class=\"bb ze ah ch pm hj xp ki xn 2xl:ud-px-49 bc\">
        <div class=\"wc rf qn zf cp kq xf wf\">
            <a href=\"#!\" class=\"rc animate_top\">
                <img class=\"th wl ml il zl om\" src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/fsm.png"), "html", null, true);
        yield "\" alt=\"Clients\" />
                <img class=\"xc sk ml il zl nm\" src=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/fsm.png"), "html", null, true);
        yield "\" alt=\"Clients\" />
            </a>
            <a href=\"#!\" class=\"rc animate_top\">
                <img class=\"th wl ml il zl om\" src=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/lys-removebg-preview.png"), "html", null, true);
        yield "\" alt=\"Clients\" />
                <img class=\"xc sk ml il zl nm\" src=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/lys-removebg-preview.png"), "html", null, true);
        yield "\" alt=\"Clients\" />
            </a>
            <a href=\"#!\" class=\"rc animate_top\">
                <img class=\"tk ml il zl om\" src=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/AIM.png"), "html", null, true);
        yield "\" alt=\"Clients\" />
                <img class=\"xc sk ml il zl nm\" src=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/AIM.png"), "html", null, true);
        yield "\" alt=\"Clients\" />
            </a>
            <a href=\"#!\" class=\"rc animate_top\">
                <img class=\"tk ml il zl om\" src=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/fanilo.png"), "html", null, true);
        yield "\" alt=\"Clients\" />
                <img class=\"xc sk ml il zl nm\" src=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/fanilo.png"), "html", null, true);
        yield "\" alt=\"Clients\" />
            </a>
            <a href=\"#!\" class=\"rc animate_top\">
                <img class=\"tk ml il zl om\" src=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/tily.png"), "html", null, true);
        yield "\" alt=\"Clients\" />
                <img class=\"xc sk ml il zl nm\" src=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/tily.png"), "html", null, true);
        yield "\" alt=\"Clients\" />
            </a>
            <a href=\"#!\" class=\"rc animate_top\">
                <img class=\"tk ml il zl om\" src=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/panazava.png"), "html", null, true);
        yield "\" alt=\"Clients\" />
                <img class=\"xc sk ml il zl nm\" src=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/panazava.png"), "html", null, true);
        yield "\" alt=\"Clients\" />
            </a>
        ";
        // line 40
        yield "        </div>
    </div>
</section>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "fsmlayout.html.twig";
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
        return array (  121 => 40,  116 => 34,  112 => 33,  106 => 30,  102 => 29,  96 => 26,  92 => 25,  86 => 22,  82 => 21,  76 => 18,  72 => 17,  66 => 14,  62 => 13,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<section class=\"pj vp mr\">
    <!-- Section Title Start -->
    <div x-data=\"{ sectionTitle: `Firaisan'ny SKOTISMA eto Madagasikara`, sectionTitleText: `Ny Firaisan'ny Skotisma eto Madagasikara, federasiona nasionalin'ny fikambanana scout eto Madagasikara.`}\">
        <div class=\"animate_top bb ze rj ki xn vq\">
            <h2 x-text=\"sectionTitle\" class=\"fk vj pr kk wm on/5 gq/2 bb _b\"></h2>
            <p class=\"bb on/5 wo/5 hq\" x-text=\"sectionTitleText\"></p>
        </div>
    </div>
    <!-- Section Title End -->
    <div class=\"bb ze ah ch pm hj xp ki xn 2xl:ud-px-49 bc\">
        <div class=\"wc rf qn zf cp kq xf wf\">
            <a href=\"#!\" class=\"rc animate_top\">
                <img class=\"th wl ml il zl om\" src=\"{{ asset('images/fsm.png') }}\" alt=\"Clients\" />
                <img class=\"xc sk ml il zl nm\" src=\"{{ asset('images/fsm.png') }}\" alt=\"Clients\" />
            </a>
            <a href=\"#!\" class=\"rc animate_top\">
                <img class=\"th wl ml il zl om\" src=\"{{ asset('images/lys-removebg-preview.png') }}\" alt=\"Clients\" />
                <img class=\"xc sk ml il zl nm\" src=\"{{ asset('images/lys-removebg-preview.png') }}\" alt=\"Clients\" />
            </a>
            <a href=\"#!\" class=\"rc animate_top\">
                <img class=\"tk ml il zl om\" src=\"{{ asset('images/AIM.png') }}\" alt=\"Clients\" />
                <img class=\"xc sk ml il zl nm\" src=\"{{ asset('images/AIM.png') }}\" alt=\"Clients\" />
            </a>
            <a href=\"#!\" class=\"rc animate_top\">
                <img class=\"tk ml il zl om\" src=\"{{ asset('images/fanilo.png') }}\" alt=\"Clients\" />
                <img class=\"xc sk ml il zl nm\" src=\"{{ asset('images/fanilo.png') }}\" alt=\"Clients\" />
            </a>
            <a href=\"#!\" class=\"rc animate_top\">
                <img class=\"tk ml il zl om\" src=\"{{ asset('images/tily.png') }}\" alt=\"Clients\" />
                <img class=\"xc sk ml il zl nm\" src=\"{{ asset('images/tily.png') }}\" alt=\"Clients\" />
            </a>
            <a href=\"#!\" class=\"rc animate_top\">
                <img class=\"tk ml il zl om\" src=\"{{ asset('images/panazava.png') }}\" alt=\"Clients\" />
                <img class=\"xc sk ml il zl nm\" src=\"{{ asset('images/panazava.png') }}\" alt=\"Clients\" />
            </a>
        {# <a href=\"#!\" class=\"rc animate_top\">
            <img class=\"tk ml il zl om\" src=\"{{ asset('images/aimo.png') }}\" alt=\"Clients\" />
            <img class=\"xc sk ml il zl nm\" src=\"{{ asset('images/aimo.png') }}\" alt=\"Clients\" />
        </a> #}
        </div>
    </div>
</section>
", "fsmlayout.html.twig", "C:\\Users\\M_INFO\\Music\\scouts\\templates\\fsmlayout.html.twig");
    }
}
