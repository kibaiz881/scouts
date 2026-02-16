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

/* component/rejoindre.html.twig */
class __TwigTemplate_c560991edfb9850e90555a08338b5d53 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "component/rejoindre.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "component/rejoindre.html.twig"));

        // line 1
        yield "        <!-- ===== CTA Start ===== -->
        <section class=\"i pg gh ji\">
            <!-- Bg Shape -->
            <img class=\"h p q\" src=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shape-16.svg"), "html", null, true);
        yield "\" alt=\"Bg Shape\" />

            <div class=\"bb ye i z-10 ki xn dr\">
                <div class=\"tc uf sn tn un gg\">
                    <div class=\"animate_left to/2\">
                        <h2 class=\"fk vj zp pr lk ac\">
                            Nous vous invitons à devenir membre si vous le souhaitez!
                        </h2>
                        <p class=\"lk\">
                            Nous, les Scouts du groupe Helder Camara, avons le plaisir de vous inviter à rejoindre notre groupe.
                        </p>
                    </div>
                    <div class=\"animate_right bf\">
                        <a href=\"#!\" class=\"vc ek kk hh rg ol il cm gi hi\">
                            Rejoindrez vous
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===== CTA End ===== -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "component/rejoindre.html.twig";
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
        return array (  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("        <!-- ===== CTA Start ===== -->
        <section class=\"i pg gh ji\">
            <!-- Bg Shape -->
            <img class=\"h p q\" src=\"{{ asset('images/shape-16.svg') }}\" alt=\"Bg Shape\" />

            <div class=\"bb ye i z-10 ki xn dr\">
                <div class=\"tc uf sn tn un gg\">
                    <div class=\"animate_left to/2\">
                        <h2 class=\"fk vj zp pr lk ac\">
                            Nous vous invitons à devenir membre si vous le souhaitez!
                        </h2>
                        <p class=\"lk\">
                            Nous, les Scouts du groupe Helder Camara, avons le plaisir de vous inviter à rejoindre notre groupe.
                        </p>
                    </div>
                    <div class=\"animate_right bf\">
                        <a href=\"#!\" class=\"vc ek kk hh rg ol il cm gi hi\">
                            Rejoindrez vous
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===== CTA End ===== -->", "component/rejoindre.html.twig", "C:\\Users\\M_INFO\\Music\\scouts\\templates\\component\\rejoindre.html.twig");
    }
}
