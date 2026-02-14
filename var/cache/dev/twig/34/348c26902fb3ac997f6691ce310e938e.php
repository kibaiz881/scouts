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

/* main.html.twig */
class __TwigTemplate_3ea61613e6293a0e8c4451aaee184a07 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main.html.twig"));

        // line 1
        yield "<main>
  <!-- ===== Hero Start ===== -->
  <section class=\"gj do ir hj sp jr i pg\">
    <!-- Hero Images -->
    <div class=\"xc fn zd/2 2xl:ud-w-187.5 bd 2xl:ud-h-171.5 h q r\">
      <img src=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shape-01.svg"), "html", null, true);
        yield "\" alt=\"shape\" class=\"xc 2xl:ud-block h t -ud-left-[10%] ua\" />
      <img src=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shape-02.svg"), "html", null, true);
        yield "\" alt=\"shape\" class=\"xc 2xl:ud-block h u p va\" />
      <img src=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shape-03.svg"), "html", null, true);
        yield "\" alt=\"shape\" class=\"xc 2xl:ud-block h v w va\" />
      <img src=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shapehc.png"), "html", null, true);
        yield "\" alt=\"shape\" class=\"h q r\" />
      <img src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/scout11.png"), "html", null, true);
        yield "\" alt=\"Woman\" class=\"h q r ua\" />
    </div>

    <!-- Hero Content -->
    <div class=\"bb ze ki xn 2xl:ud-px-0\">
      <div class=\"tc _o\">
        <div class=\"animate_left jn/2\">
          <h1 class=\"fk vj zp or kk wm wb\">
            Antilin'i Madagascar, Fivondronana I.
            <br>
              <span style=\"color:red\">
                HELDER
              </span>
              CAMARA
            </h1>
            <p class=\"fq\">
              Antilin'i Madagasikara est une organisation de scoutisme catholique de premier plan à Madagascar, créée en 1950, avec une riche histoire et un engagement envers l'éducation des jeunes et le développement communautaire.
            </p>
            <div class=\"tc tf yo zf mb\">
              <a href=\"#!\" class=\"ek jk lk gh gi hi rg ml il vc _d _l\">
                Commencez
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
        // line 54
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
        // line 68
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
        // line 82
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
          <!-- About Images -->
          <div class=\"animate_left xc gn gg jn/2 i\">
            <div>
              <img src=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shape-05.svg"), "html", null, true);
        yield "\" alt=\"Shape\" class=\"h -ud-left-5 x\" />
              <img src=\"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/scout14.jpg"), "html", null, true);
        yield "\" alt=\"About\" class=\"ib\" />
              <img src=\"";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/scout20.jpg"), "html", null, true);
        yield "\" alt=\"About\" />
            </div>
            <div>
              <img src=\"";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shape-06.svg"), "html", null, true);
        yield "\" alt=\"Shape\" />
              <img src=\"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/scout16.jpg"), "html", null, true);
        yield "\" alt=\"About\" class=\"ob gb\" />
              <img src=\"";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shape-07.svg"), "html", null, true);
        yield "\" alt=\"Shape\" class=\"bb\" />
            </div>
          </div>
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
            <a href=\"https://www.youtube.com/watch?v=fTZRMvgmmzk\" data-fslightbox class=\"vc wf hg mb\">
              <span class=\"tc wf xf be dd rg i gh ua\">
                <span class=\"nf h vc yc vd rg gh qk -ud-z-1\"></span>
                <img src=\"";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon-play.svg"), "html", null, true);
        yield "\" alt=\"Play\" />
              </span>
              <span class=\"kk\">
                Regarder la video
              </span>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- ===== About End ===== -->

    <!-- ===== CTA Start ===== -->
        ";
        // line 143
        yield from $this->load("component/rejoindre.html.twig", 143)->unwrap()->yield($context);
        // line 144
        yield "    <!-- ===== CTA End ===== -->

    <!-- ===== Team Start ===== -->
    <section class=\"i pg ji gp uq\">
      <!-- Bg Shapes -->
      <span class=\"rc h s r vd fd/5 fh rm\"></span>
      <img src=\"";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shape-08.svg"), "html", null, true);
        yield "\" alt=\"Shape Bg\" class=\"h q r\" />
      <img src=\"";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shape-09.svg"), "html", null, true);
        yield "\" alt=\"Shape\" class=\"of h y z/2\" />
      <img src=\"";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shape-10.svg"), "html", null, true);
        yield "\" alt=\"Shape\" class=\"h _ aa\" />
      <img src=\"";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/shape-11.svg"), "html", null, true);
        yield "\" alt=\"Shape\" class=\"of h m ba\" />
      <!-- Section Title Start -->
      <div x-data=\"{ sectionTitle: `Responsable actuel de l'organisation scout`, sectionTitleText: `Les responsables de l'organisation ont un rôle important dans le développement de l'organisation scout au sein de l'HELDER CAMARA.`}\">
        <div class=\"animate_top bb ze rj ki xn vq\">
          <h2 x-text=\"sectionTitle\" class=\"fk vj pr kk wm on/5 gq/2 bb _b\"></h2>
          <p class=\"bb on/5 wo/5 hq\" x-text=\"sectionTitleText\"></p>
        </div>
      </div>
      <!-- Section Title End -->
      <div class=\"bb ze i va ki xn xq jb jo\">
        <div class=\"wc qf pn xo gg cp\">
          <!-- Team Item -->
          <div class=\"animate_top rj\">
            <div class=\"c i pg z-1\">
              <img class=\"vd\" src=\"";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/scout7.jpg"), "html", null, true);
        yield "\" alt=\"Team\" />
              <div class=\"ef im nl il\">
                <span class=\"h -ud-left-5 -ud-bottom-21 rc de gd gh if wa\"></span>
                <span class=\"h s p rc vd hd mh va\"></span>
                <div class=\"h s p vd ij jj xa\">
                  <ul class=\"tc xf wf gg\">
                    <li>
                      <a href=\"#!\">
                        <svg class=\"uh vl ml il\" width=\"10\" height=\"18\" viewBox=\"0 0 10 18\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M6.66634 10.25H8.74968L9.58301 6.91669H6.66634V5.25002C6.66634 4.39169 6.66634 3.58335 8.33301 3.58335H9.58301V0.783354C9.31134 0.74752 8.28551 0.666687 7.20218 0.666687C4.93968 0.666687 3.33301 2.04752 3.33301 4.58335V6.91669H0.833008V10.25H3.33301V17.3334H6.66634V10.25Z\" fill=\"\" />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href=\"#!\">
                        <svg class=\"uh vl ml il\" width=\"18\" height=\"14\" viewBox=\"0 0 18 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M17.4683 1.71333C16.8321 1.99475 16.1574 2.17956 15.4666 2.26167C16.1947 1.82619 16.7397 1.14085 16.9999 0.333333C16.3166 0.74 15.5674 1.025 14.7866 1.17917C14.2621 0.617982 13.5669 0.245803 12.809 0.120487C12.0512 -0.00482822 11.2732 0.123742 10.596 0.486211C9.91875 0.848679 9.38024 1.42474 9.06418 2.12483C8.74812 2.82492 8.67221 3.60982 8.84825 4.3575C7.46251 4.28805 6.10686 3.92794 4.86933 3.30055C3.63179 2.67317 2.54003 1.79254 1.66492 0.715833C1.35516 1.24788 1.19238 1.85269 1.19326 2.46833C1.19326 3.67667 1.80826 4.74417 2.74326 5.36917C2.18993 5.35175 1.64878 5.20232 1.16492 4.93333V4.97667C1.16509 5.78142 1.44356 6.56135 1.95313 7.18422C2.46269 7.80709 3.17199 8.23456 3.96075 8.39417C3.4471 8.53337 2.90851 8.55388 2.38576 8.45417C2.60814 9.14686 3.04159 9.75267 3.62541 10.1868C4.20924 10.6209 4.9142 10.8615 5.64159 10.875C4.91866 11.4428 4.0909 11.8625 3.20566 12.1101C2.32041 12.3578 1.39503 12.4285 0.482422 12.3183C2.0755 13.3429 3.93 13.8868 5.82409 13.885C12.2349 13.885 15.7408 8.57417 15.7408 3.96833C15.7408 3.81833 15.7366 3.66667 15.7299 3.51833C16.4123 3.02514 17.0013 2.41418 17.4691 1.71417L17.4683 1.71333Z\" fill=\"\" />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href=\"#!\">
                        <svg class=\"uh vl ml il\" width=\"17\" height=\"16\" viewBox=\"0 0 17 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M3.78353 2.16665C3.78331 2.60867 3.6075 3.03251 3.29478 3.34491C2.98207 3.65732 2.55806 3.8327 2.11603 3.83248C1.674 3.83226 1.25017 3.65645 0.937761 3.34373C0.625357 3.03102 0.449975 2.60701 0.450196 2.16498C0.450417 1.72295 0.626223 1.29912 0.93894 0.986712C1.25166 0.674307 1.67567 0.498925 2.1177 0.499146C2.55972 0.499367 2.98356 0.675173 3.29596 0.98789C3.60837 1.30061 3.78375 1.72462 3.78353 2.16665V2.16665ZM3.83353 5.06665H0.500195V15.5H3.83353V5.06665ZM9.1002 5.06665H5.78353V15.5H9.06686V10.025C9.06686 6.97498 13.0419 6.69165 13.0419 10.025V15.5H16.3335V8.89165C16.3335 3.74998 10.4502 3.94165 9.06686 6.46665L9.1002 5.06665V5.06665Z\" fill=\"\" />
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <h4 class=\"yj go kk wm ob zb\">
              Tonia Souple
            </h4>
            <p>
              Tonia mpanampy
            </p>
          </div>
          <!-- Team Item -->
          <div class=\"animate_top rj\">
            <div class=\"c i pg z-1\">
              <img class=\"vd\" src=\"";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/tolo.png"), "html", null, true);
        yield "\" alt=\"Team\" />
              <div class=\"ef im nl il\">
                <span class=\"h -ud-left-5 -ud-bottom-21 rc de gd gh if wa\"></span>
                <span class=\"h s p rc vd hd mh va\"></span>
                <div class=\"h s p vd ij jj xa\">
                  <ul class=\"tc xf wf gg\">
                    <li>
                      <a href=\"#!\">
                        <svg class=\"uh vl ml il\" width=\"10\" height=\"18\" viewBox=\"0 0 10 18\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M6.66634 10.25H8.74968L9.58301 6.91669H6.66634V5.25002C6.66634 4.39169 6.66634 3.58335 8.33301 3.58335H9.58301V0.783354C9.31134 0.74752 8.28551 0.666687 7.20218 0.666687C4.93968 0.666687 3.33301 2.04752 3.33301 4.58335V6.91669H0.833008V10.25H3.33301V17.3334H6.66634V10.25Z\" fill=\"\" />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href=\"#!\">
                        <svg class=\"uh vl ml il\" width=\"18\" height=\"14\" viewBox=\"0 0 18 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M17.4683 1.71333C16.8321 1.99475 16.1574 2.17956 15.4666 2.26167C16.1947 1.82619 16.7397 1.14085 16.9999 0.333333C16.3166 0.74 15.5674 1.025 14.7866 1.17917C14.2621 0.617982 13.5669 0.245803 12.809 0.120487C12.0512 -0.00482822 11.2732 0.123742 10.596 0.486211C9.91875 0.848679 9.38024 1.42474 9.06418 2.12483C8.74812 2.82492 8.67221 3.60982 8.84825 4.3575C7.46251 4.28805 6.10686 3.92794 4.86933 3.30055C3.63179 2.67317 2.54003 1.79254 1.66492 0.715833C1.35516 1.24788 1.19238 1.85269 1.19326 2.46833C1.19326 3.67667 1.80826 4.74417 2.74326 5.36917C2.18993 5.35175 1.64878 5.20232 1.16492 4.93333V4.97667C1.16509 5.78142 1.44356 6.56135 1.95313 7.18422C2.46269 7.80709 3.17199 8.23456 3.96075 8.39417C3.4471 8.53337 2.90851 8.55388 2.38576 8.45417C2.60814 9.14686 3.04159 9.75267 3.62541 10.1868C4.20924 10.6209 4.9142 10.8615 5.64159 10.875C4.91866 11.4428 4.0909 11.8625 3.20566 12.1101C2.32041 12.3578 1.39503 12.4285 0.482422 12.3183C2.0755 13.3429 3.93 13.8868 5.82409 13.885C12.2349 13.885 15.7408 8.57417 15.7408 3.96833C15.7408 3.81833 15.7366 3.66667 15.7299 3.51833C16.4123 3.02514 17.0013 2.41418 17.4691 1.71417L17.4683 1.71333Z\" fill=\"\" />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href=\"#!\">
                        <svg class=\"uh vl ml il\" width=\"17\" height=\"16\" viewBox=\"0 0 17 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M3.78353 2.16665C3.78331 2.60867 3.6075 3.03251 3.29478 3.34491C2.98207 3.65732 2.55806 3.8327 2.11603 3.83248C1.674 3.83226 1.25017 3.65645 0.937761 3.34373C0.625357 3.03102 0.449975 2.60701 0.450196 2.16498C0.450417 1.72295 0.626223 1.29912 0.93894 0.986712C1.25166 0.674307 1.67567 0.498925 2.1177 0.499146C2.55972 0.499367 2.98356 0.675173 3.29596 0.98789C3.60837 1.30061 3.78375 1.72462 3.78353 2.16665V2.16665ZM3.83353 5.06665H0.500195V15.5H3.83353V5.06665ZM9.1002 5.06665H5.78353V15.5H9.06686V10.025C9.06686 6.97498 13.0419 6.69165 13.0419 10.025V15.5H16.3335V8.89165C16.3335 3.74998 10.4502 3.94165 9.06686 6.46665L9.1002 5.06665V5.06665Z\" fill=\"\" />
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <h4 class=\"yj go kk wm ob zb\">
              Tonia Tolotra
            </h4>
            <p>
              Tonia mpanampy
            </p>
          </div>
          <!-- Team Item -->
          <div class=\"animate_top rj\">
            <div class=\"c i pg z-1\">
              <img class=\"vd\" src=\"";
        // line 249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/gege.png"), "html", null, true);
        yield "\" alt=\"Team\" />
              <div class=\"ef im nl il\">
                <span class=\"h -ud-left-5 -ud-bottom-21 rc de gd gh if wa\"></span>
                <span class=\"h s p rc vd hd mh va\"></span>
                <div class=\"h s p vd ij jj xa\">
                  <ul class=\"tc xf wf gg\">
                    <li>
                      <a href=\"#!\">
                        <svg class=\"uh vl ml il\" width=\"10\" height=\"18\" viewBox=\"0 0 10 18\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M6.66634 10.25H8.74968L9.58301 6.91669H6.66634V5.25002C6.66634 4.39169 6.66634 3.58335 8.33301 3.58335H9.58301V0.783354C9.31134 0.74752 8.28551 0.666687 7.20218 0.666687C4.93968 0.666687 3.33301 2.04752 3.33301 4.58335V6.91669H0.833008V10.25H3.33301V17.3334H6.66634V10.25Z\" fill=\"\" />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href=\"#!\">
                        <svg class=\"uh vl ml il\" width=\"18\" height=\"14\" viewBox=\"0 0 18 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M17.4683 1.71333C16.8321 1.99475 16.1574 2.17956 15.4666 2.26167C16.1947 1.82619 16.7397 1.14085 16.9999 0.333333C16.3166 0.74 15.5674 1.025 14.7866 1.17917C14.2621 0.617982 13.5669 0.245803 12.809 0.120487C12.0512 -0.00482822 11.2732 0.123742 10.596 0.486211C9.91875 0.848679 9.38024 1.42474 9.06418 2.12483C8.74812 2.82492 8.67221 3.60982 8.84825 4.3575C7.46251 4.28805 6.10686 3.92794 4.86933 3.30055C3.63179 2.67317 2.54003 1.79254 1.66492 0.715833C1.35516 1.24788 1.19238 1.85269 1.19326 2.46833C1.19326 3.67667 1.80826 4.74417 2.74326 5.36917C2.18993 5.35175 1.64878 5.20232 1.16492 4.93333V4.97667C1.16509 5.78142 1.44356 6.56135 1.95313 7.18422C2.46269 7.80709 3.17199 8.23456 3.96075 8.39417C3.4471 8.53337 2.90851 8.55388 2.38576 8.45417C2.60814 9.14686 3.04159 9.75267 3.62541 10.1868C4.20924 10.6209 4.9142 10.8615 5.64159 10.875C4.91866 11.4428 4.0909 11.8625 3.20566 12.1101C2.32041 12.3578 1.39503 12.4285 0.482422 12.3183C2.0755 13.3429 3.93 13.8868 5.82409 13.885C12.2349 13.885 15.7408 8.57417 15.7408 3.96833C15.7408 3.81833 15.7366 3.66667 15.7299 3.51833C16.4123 3.02514 17.0013 2.41418 17.4691 1.71417L17.4683 1.71333Z\" fill=\"\" />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href=\"#!\">
                        <svg class=\"uh vl ml il\" width=\"17\" height=\"16\" viewBox=\"0 0 17 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M3.78353 2.16665C3.78331 2.60867 3.6075 3.03251 3.29478 3.34491C2.98207 3.65732 2.55806 3.8327 2.11603 3.83248C1.674 3.83226 1.25017 3.65645 0.937761 3.34373C0.625357 3.03102 0.449975 2.60701 0.450196 2.16498C0.450417 1.72295 0.626223 1.29912 0.93894 0.986712C1.25166 0.674307 1.67567 0.498925 2.1177 0.499146C2.55972 0.499367 2.98356 0.675173 3.29596 0.98789C3.60837 1.30061 3.78375 1.72462 3.78353 2.16665V2.16665ZM3.83353 5.06665H0.500195V15.5H3.83353V5.06665ZM9.1002 5.06665H5.78353V15.5H9.06686V10.025C9.06686 6.97498 13.0419 6.69165 13.0419 10.025V15.5H16.3335V8.89165C16.3335 3.74998 10.4502 3.94165 9.06686 6.46665L9.1002 5.06665V5.06665Z\" fill=\"\" />
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <h4 class=\"yj go kk wm ob zb\">
              Tonia Ludger
            </h4>
            <p>
              Tonia voalohany
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- ===== Team End ===== -->

    <!-- ===== Services Start ===== -->
    <section class=\"lj tp kr\">
      <!-- Section Title Start -->
      <div x-data=\"{ sectionTitle: `Les éléments qui constituent les pierres angulaires du développement.`, sectionTitleText: `Le scoutisme transmet des lois et des valeurs à travers la vie de groupe, où enfants et jeunes apprennent la responsabilité, l’entraide et la bienveillance, accompagnés par des adultes formés jouant un rôle éducatif et protecteur.
        L’apprentissage se fait par des activités stimulantes, vécues surtout en plein air, favorisant le développement personnel, les compétences, le caractère et l’amour de la nature.`}\">
        <div class=\"animate_top bb ze rj ki xn vq\">
          <h2 x-text=\"sectionTitle\" class=\"fk vj pr kk wm on/5 gq/2 bb _b\"></h2>
          <p class=\"bb on/5 wo/5 hq\" x-text=\"sectionTitleText\"></p>
        </div>
      </div>
      <!-- Section Title End -->
      <div class=\"bb ze ki xn yq mb en\">
        <div class=\"wc qf pn xo ng\">
          <!-- Service Item -->
          <div class=\"animate_top sg oi pi zq ml il am cn _m\">
            <img src=\"";
        // line 307
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon-04.svg"), "html", null, true);
        yield "\" alt=\"Icon\" />
            <h4 class=\"ek zj kk wm nb _b\">
              La loi et l'univers
            </h4>
            <p>
              Les enfants et les jeunes acceptent de vivre des bienfaits du scoutisme, qu'ils expriment dans un langage adapté à leur âge et à la société malgache.
            </p>
          </div>
          <!-- Service Item -->
          <div class=\"animate_top sg oi pi zq ml il am cn _m\">
            <img src=\"";
        // line 317
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon-05.svg"), "html", null, true);
        yield "\" alt=\"Icon\" />
            <h4 class=\"ek zj kk wm nb _b\">
              Vie de groupe
            </h4>
            <p>
              Elle réunit des enfants ou des jeunes de 6 à 8 ans au sein d'un groupe. Ils y vivent ensemble, partagent les responsabilités, se soutiennent et veillent les uns sur les autres dans un esprit de bienveillance.
            </p>
          </div>
          <!-- Service Item -->
          <div class=\"animate_top sg oi pi zq ml il am cn _m\">
            <img src=\"";
        // line 327
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon-06.svg"), "html", null, true);
        yield "\" alt=\"Icon\" />
            <h4 class=\"ek zj kk wm nb _b\">
              Relation entre l'éducateur et l'élève
            </h4>
            <p>
              Des adultes responsables et formés accompagnent les enfants : leur rôle est de prendre soin d'eux et de les aider comme s'il s'agissait de grands frères et sœurs.
            </p>
          </div>
          <!-- Service Item -->
          <div class=\"animate_top sg oi pi zq ml il am cn _m\">
            <img src=\"";
        // line 337
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon-07.svg"), "html", null, true);
        yield "\" alt=\"Icon\" />
            <h4 class=\"ek zj kk wm nb _b\">
              Parti immédiatement
            </h4>
            <p>
              Chez AIM, l'éducation se fait par l'action immédiate, et non par l'instruction ou la parole.
            </p>
          </div>
          <!-- Service Item -->
          <div class=\"animate_top sg oi pi zq ml il am cn _m\">
            <img src=\"";
        // line 347
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon-05.svg"), "html", null, true);
        yield "\" alt=\"Icon\" />
            <h4 class=\"ek zj kk wm nb _b\">
              Activités intéressantes et stimulantes
            </h4>
            <p>
              Activités de développement personnel : activités permettant d’explorer de nouvelles choses, d’utiliser des compétences et de développer le caractère et le comportement.
            </p>
          </div>
          <!-- Service Item -->
          <div class=\"animate_top sg oi pi zq ml il am cn _m\">
            <img src=\"";
        // line 357
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icon-06.svg"), "html", null, true);
        yield "\" alt=\"Icon\" />
            <h4 class=\"ek zj kk wm nb _b\">
              En plein air
            </h4>
            <p>
              Les enfants sont élevés en plein air pour découvrir la nature, apprendre à l'aimer et, surtout, l'aimer.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- ===== Services End ===== -->

    <!-- ===== Projects Start ===== -->
    <section class=\"pg pj vp mr oj wp nr\">
      <!-- Section Title Start -->
      <div x-data=\"{ sectionTitle: `Les principes fondamentaux de l'éducation.`, sectionTitleText: `En matière de paix, il faut toujours privilégier le soutien, le respect, la confiance et l'amour.`}\">
        <div class=\"animate_top bb ze rj ki xn vq\">
          <h2 x-text=\"sectionTitle\" class=\"fk vj pr kk wm on/5 gq/2 bb _b\"></h2>
          <p class=\"bb on/5 wo/5 hq\" x-text=\"sectionTitleText\"></p>
        </div>
      </div>
      <!-- Section Title End -->
      <div class=\"bb ze ki xn 2xl:ud-px-0 jb\" x-data=\"{filterTab: 1}\">
        <!-- Porject Tab -->
        <div class=\"projects-tab _e bb tc uf wf xf cg rg hh rm vk xm si ti fc\">
          <button data-filter=\"*\" @click=\"filterTab = 1\" :class=\"{ 'gh lk' : filterTab === 1 }\" class=\"project-tab-btn ek rg ml il vi mi\">
            Tous
          </button>
          <button data-filter=\".branding\" @click=\"filterTab = 2\" :class=\"{ 'gh lk' : filterTab === 2 }\" class=\"project-tab-btn ek rg ml il vi mi\">
            Fais la paix avec toi-même
          </button>
          <button data-filter=\".digital\" @click=\"filterTab = 3\" :class=\"{ 'gh lk' : filterTab === 3 }\" class=\"project-tab-btn ek rg ml il vi mi\">
            En paix avec leur environnement,
          </button>
          <button data-filter=\".ecommerce\" @click=\"filterTab = 4\" :class=\"{ 'gh lk' : filterTab === 4 }\" class=\"project-tab-btn ek rg ml il vi mi\">
            Soyez en paix avec Dieu
          </button>
        </div>
        <!-- Projects item wrapper -->
        <div class=\"projects-wrapper tc -ud-mx-5\">
          <div class=\"project-sizer\"></div>
          <!-- Project Item -->
          <div class=\"project-item wi fb vd jn/2 to/3 branding ecommerce\">
            <div class=\"c i pg sg z-1\">
              <img src=\"";
        // line 402
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/scout13.jpg"), "html", null, true);
        yield "\" alt=\"Project\" />
              <div class=\"h s r df nl kl im tc sf wf xf vd yc sg al hh/20 z-10\">
                <h4 class=\"ek tj kk hc\">
                  Photo Retouching
                </h4>
                <p>
                  Branded Ecommerce
                </p>
                <a class=\"c tc wf xf ie ld rg _g dh ml il ph jm km jc\" href=\"#!\">
                  <svg class=\"th lm ml il\" width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M10.4763 6.16664L6.00634 1.69664L7.18467 0.518311L13.6663 6.99998L7.18467 13.4816L6.00634 12.3033L10.4763 7.83331H0.333008V6.16664H10.4763Z\" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <!-- Project Item -->
          <div class=\"project-item wi fb vd jn/2 to/3 digital\">
            <div class=\"c i pg sg z-1\">
              <img src=\"";
        // line 421
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/scout12.jpg"), "html", null, true);
        yield "\" alt=\"Project\" />
              <div class=\"h s r df nl kl im tc sf wf xf vd yc sg al hh/20 z-10\">
                <h4 class=\"ek tj kk hc\">
                  Photo Retouching
                </h4>
                <p>
                  Branded Ecommerce
                </p>
                <a class=\"c tc wf xf ie ld rg _g dh ml il ph jm km jc\" href=\"#!\">
                  <svg class=\"th lm ml il\" width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M10.4763 6.16664L6.00634 1.69664L7.18467 0.518311L13.6663 6.99998L7.18467 13.4816L6.00634 12.3033L10.4763 7.83331H0.333008V6.16664H10.4763Z\" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <!-- Project Item -->
          <div class=\"project-item wi fb vd jn/2 to/3 branding ecommerce\">
            <div class=\"c i pg sg z-1\">
              <img src=\"";
        // line 440
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/scout11.jpg"), "html", null, true);
        yield "\" alt=\"Project\" />
              <div class=\"h s r df nl kl im tc sf wf xf vd yc sg al hh/20 z-10\">
                <h4 class=\"ek tj kk hc\">
                  Photo Retouching
                </h4>
                <p>
                  Branded Ecommerce
                </p>
                <a class=\"c tc wf xf ie ld rg _g dh ml il ph jm km jc\" href=\"#!\">
                  <svg class=\"th lm ml il\" width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M10.4763 6.16664L6.00634 1.69664L7.18467 0.518311L13.6663 6.99998L7.18467 13.4816L6.00634 12.3033L10.4763 7.83331H0.333008V6.16664H10.4763Z\" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <!-- Project Item -->
          <div class=\"project-item wi fb vd vo/3 digital ecommerce\">
            <div class=\"c i pg sg z-1\">
              <img src=\"";
        // line 459
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/scout14.jpg"), "html", null, true);
        yield "\" alt=\"Project\" />
              <div class=\"h s r df nl kl im tc sf wf xf vd yc sg al hh/20 z-10\">
                <h4 class=\"ek tj kk hc\">
                  Photo Retouching
                </h4>
                <p>
                  Branded Ecommerce
                </p>
                <a class=\"c tc wf xf ie ld rg _g dh ml il ph jm km jc\" href=\"#!\">
                  <svg class=\"th lm ml il\" width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M10.4763 6.16664L6.00634 1.69664L7.18467 0.518311L13.6663 6.99998L7.18467 13.4816L6.00634 12.3033L10.4763 7.83331H0.333008V6.16664H10.4763Z\" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ===== Projects End ===== -->

    <!-- ===== FSM Start ===== -->
    ";
        // line 481
        yield from $this->load("fsmlayout.html.twig", 481)->unwrap()->yield($context);
        // line 482
        yield "  <!-- ===== FSM End ===== -->
  </main>
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
        return "main.html.twig";
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
        return array (  631 => 482,  629 => 481,  604 => 459,  582 => 440,  560 => 421,  538 => 402,  490 => 357,  477 => 347,  464 => 337,  451 => 327,  438 => 317,  425 => 307,  364 => 249,  320 => 208,  276 => 167,  259 => 153,  255 => 152,  251 => 151,  247 => 150,  239 => 144,  237 => 143,  221 => 130,  200 => 112,  196 => 111,  192 => 110,  186 => 107,  182 => 106,  178 => 105,  152 => 82,  135 => 68,  118 => 54,  71 => 10,  67 => 9,  63 => 8,  59 => 7,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<main>
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
            Antilin'i Madagascar, Fivondronana I.
            <br>
              <span style=\"color:red\">
                HELDER
              </span>
              CAMARA
            </h1>
            <p class=\"fq\">
              Antilin'i Madagasikara est une organisation de scoutisme catholique de premier plan à Madagascar, créée en 1950, avec une riche histoire et un engagement envers l'éducation des jeunes et le développement communautaire.
            </p>
            <div class=\"tc tf yo zf mb\">
              <a href=\"#!\" class=\"ek jk lk gh gi hi rg ml il vc _d _l\">
                Commencez
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
          <!-- About Images -->
          <div class=\"animate_left xc gn gg jn/2 i\">
            <div>
              <img src=\"{{ asset('images/shape-05.svg') }}\" alt=\"Shape\" class=\"h -ud-left-5 x\" />
              <img src=\"{{ asset('images/scout14.jpg') }}\" alt=\"About\" class=\"ib\" />
              <img src=\"{{ asset('images/scout20.jpg') }}\" alt=\"About\" />
            </div>
            <div>
              <img src=\"{{ asset('images/shape-06.svg') }}\" alt=\"Shape\" />
              <img src=\"{{ asset('images/scout16.jpg') }}\" alt=\"About\" class=\"ob gb\" />
              <img src=\"{{ asset('images/shape-07.svg') }}\" alt=\"Shape\" class=\"bb\" />
            </div>
          </div>
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
            <a href=\"https://www.youtube.com/watch?v=fTZRMvgmmzk\" data-fslightbox class=\"vc wf hg mb\">
              <span class=\"tc wf xf be dd rg i gh ua\">
                <span class=\"nf h vc yc vd rg gh qk -ud-z-1\"></span>
                <img src=\"{{ asset('images/icon-play.svg') }}\" alt=\"Play\" />
              </span>
              <span class=\"kk\">
                Regarder la video
              </span>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- ===== About End ===== -->

    <!-- ===== CTA Start ===== -->
        {% include 'component/rejoindre.html.twig' %}
    <!-- ===== CTA End ===== -->

    <!-- ===== Team Start ===== -->
    <section class=\"i pg ji gp uq\">
      <!-- Bg Shapes -->
      <span class=\"rc h s r vd fd/5 fh rm\"></span>
      <img src=\"{{ asset('images/shape-08.svg') }}\" alt=\"Shape Bg\" class=\"h q r\" />
      <img src=\"{{ asset('images/shape-09.svg') }}\" alt=\"Shape\" class=\"of h y z/2\" />
      <img src=\"{{ asset(\"images/shape-10.svg\") }}\" alt=\"Shape\" class=\"h _ aa\" />
      <img src=\"{{ asset('images/shape-11.svg') }}\" alt=\"Shape\" class=\"of h m ba\" />
      <!-- Section Title Start -->
      <div x-data=\"{ sectionTitle: `Responsable actuel de l'organisation scout`, sectionTitleText: `Les responsables de l'organisation ont un rôle important dans le développement de l'organisation scout au sein de l'HELDER CAMARA.`}\">
        <div class=\"animate_top bb ze rj ki xn vq\">
          <h2 x-text=\"sectionTitle\" class=\"fk vj pr kk wm on/5 gq/2 bb _b\"></h2>
          <p class=\"bb on/5 wo/5 hq\" x-text=\"sectionTitleText\"></p>
        </div>
      </div>
      <!-- Section Title End -->
      <div class=\"bb ze i va ki xn xq jb jo\">
        <div class=\"wc qf pn xo gg cp\">
          <!-- Team Item -->
          <div class=\"animate_top rj\">
            <div class=\"c i pg z-1\">
              <img class=\"vd\" src=\"{{ asset('images/scout7.jpg') }}\" alt=\"Team\" />
              <div class=\"ef im nl il\">
                <span class=\"h -ud-left-5 -ud-bottom-21 rc de gd gh if wa\"></span>
                <span class=\"h s p rc vd hd mh va\"></span>
                <div class=\"h s p vd ij jj xa\">
                  <ul class=\"tc xf wf gg\">
                    <li>
                      <a href=\"#!\">
                        <svg class=\"uh vl ml il\" width=\"10\" height=\"18\" viewBox=\"0 0 10 18\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M6.66634 10.25H8.74968L9.58301 6.91669H6.66634V5.25002C6.66634 4.39169 6.66634 3.58335 8.33301 3.58335H9.58301V0.783354C9.31134 0.74752 8.28551 0.666687 7.20218 0.666687C4.93968 0.666687 3.33301 2.04752 3.33301 4.58335V6.91669H0.833008V10.25H3.33301V17.3334H6.66634V10.25Z\" fill=\"\" />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href=\"#!\">
                        <svg class=\"uh vl ml il\" width=\"18\" height=\"14\" viewBox=\"0 0 18 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M17.4683 1.71333C16.8321 1.99475 16.1574 2.17956 15.4666 2.26167C16.1947 1.82619 16.7397 1.14085 16.9999 0.333333C16.3166 0.74 15.5674 1.025 14.7866 1.17917C14.2621 0.617982 13.5669 0.245803 12.809 0.120487C12.0512 -0.00482822 11.2732 0.123742 10.596 0.486211C9.91875 0.848679 9.38024 1.42474 9.06418 2.12483C8.74812 2.82492 8.67221 3.60982 8.84825 4.3575C7.46251 4.28805 6.10686 3.92794 4.86933 3.30055C3.63179 2.67317 2.54003 1.79254 1.66492 0.715833C1.35516 1.24788 1.19238 1.85269 1.19326 2.46833C1.19326 3.67667 1.80826 4.74417 2.74326 5.36917C2.18993 5.35175 1.64878 5.20232 1.16492 4.93333V4.97667C1.16509 5.78142 1.44356 6.56135 1.95313 7.18422C2.46269 7.80709 3.17199 8.23456 3.96075 8.39417C3.4471 8.53337 2.90851 8.55388 2.38576 8.45417C2.60814 9.14686 3.04159 9.75267 3.62541 10.1868C4.20924 10.6209 4.9142 10.8615 5.64159 10.875C4.91866 11.4428 4.0909 11.8625 3.20566 12.1101C2.32041 12.3578 1.39503 12.4285 0.482422 12.3183C2.0755 13.3429 3.93 13.8868 5.82409 13.885C12.2349 13.885 15.7408 8.57417 15.7408 3.96833C15.7408 3.81833 15.7366 3.66667 15.7299 3.51833C16.4123 3.02514 17.0013 2.41418 17.4691 1.71417L17.4683 1.71333Z\" fill=\"\" />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href=\"#!\">
                        <svg class=\"uh vl ml il\" width=\"17\" height=\"16\" viewBox=\"0 0 17 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M3.78353 2.16665C3.78331 2.60867 3.6075 3.03251 3.29478 3.34491C2.98207 3.65732 2.55806 3.8327 2.11603 3.83248C1.674 3.83226 1.25017 3.65645 0.937761 3.34373C0.625357 3.03102 0.449975 2.60701 0.450196 2.16498C0.450417 1.72295 0.626223 1.29912 0.93894 0.986712C1.25166 0.674307 1.67567 0.498925 2.1177 0.499146C2.55972 0.499367 2.98356 0.675173 3.29596 0.98789C3.60837 1.30061 3.78375 1.72462 3.78353 2.16665V2.16665ZM3.83353 5.06665H0.500195V15.5H3.83353V5.06665ZM9.1002 5.06665H5.78353V15.5H9.06686V10.025C9.06686 6.97498 13.0419 6.69165 13.0419 10.025V15.5H16.3335V8.89165C16.3335 3.74998 10.4502 3.94165 9.06686 6.46665L9.1002 5.06665V5.06665Z\" fill=\"\" />
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <h4 class=\"yj go kk wm ob zb\">
              Tonia Souple
            </h4>
            <p>
              Tonia mpanampy
            </p>
          </div>
          <!-- Team Item -->
          <div class=\"animate_top rj\">
            <div class=\"c i pg z-1\">
              <img class=\"vd\" src=\"{{ asset('images/tolo.png') }}\" alt=\"Team\" />
              <div class=\"ef im nl il\">
                <span class=\"h -ud-left-5 -ud-bottom-21 rc de gd gh if wa\"></span>
                <span class=\"h s p rc vd hd mh va\"></span>
                <div class=\"h s p vd ij jj xa\">
                  <ul class=\"tc xf wf gg\">
                    <li>
                      <a href=\"#!\">
                        <svg class=\"uh vl ml il\" width=\"10\" height=\"18\" viewBox=\"0 0 10 18\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M6.66634 10.25H8.74968L9.58301 6.91669H6.66634V5.25002C6.66634 4.39169 6.66634 3.58335 8.33301 3.58335H9.58301V0.783354C9.31134 0.74752 8.28551 0.666687 7.20218 0.666687C4.93968 0.666687 3.33301 2.04752 3.33301 4.58335V6.91669H0.833008V10.25H3.33301V17.3334H6.66634V10.25Z\" fill=\"\" />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href=\"#!\">
                        <svg class=\"uh vl ml il\" width=\"18\" height=\"14\" viewBox=\"0 0 18 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M17.4683 1.71333C16.8321 1.99475 16.1574 2.17956 15.4666 2.26167C16.1947 1.82619 16.7397 1.14085 16.9999 0.333333C16.3166 0.74 15.5674 1.025 14.7866 1.17917C14.2621 0.617982 13.5669 0.245803 12.809 0.120487C12.0512 -0.00482822 11.2732 0.123742 10.596 0.486211C9.91875 0.848679 9.38024 1.42474 9.06418 2.12483C8.74812 2.82492 8.67221 3.60982 8.84825 4.3575C7.46251 4.28805 6.10686 3.92794 4.86933 3.30055C3.63179 2.67317 2.54003 1.79254 1.66492 0.715833C1.35516 1.24788 1.19238 1.85269 1.19326 2.46833C1.19326 3.67667 1.80826 4.74417 2.74326 5.36917C2.18993 5.35175 1.64878 5.20232 1.16492 4.93333V4.97667C1.16509 5.78142 1.44356 6.56135 1.95313 7.18422C2.46269 7.80709 3.17199 8.23456 3.96075 8.39417C3.4471 8.53337 2.90851 8.55388 2.38576 8.45417C2.60814 9.14686 3.04159 9.75267 3.62541 10.1868C4.20924 10.6209 4.9142 10.8615 5.64159 10.875C4.91866 11.4428 4.0909 11.8625 3.20566 12.1101C2.32041 12.3578 1.39503 12.4285 0.482422 12.3183C2.0755 13.3429 3.93 13.8868 5.82409 13.885C12.2349 13.885 15.7408 8.57417 15.7408 3.96833C15.7408 3.81833 15.7366 3.66667 15.7299 3.51833C16.4123 3.02514 17.0013 2.41418 17.4691 1.71417L17.4683 1.71333Z\" fill=\"\" />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href=\"#!\">
                        <svg class=\"uh vl ml il\" width=\"17\" height=\"16\" viewBox=\"0 0 17 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M3.78353 2.16665C3.78331 2.60867 3.6075 3.03251 3.29478 3.34491C2.98207 3.65732 2.55806 3.8327 2.11603 3.83248C1.674 3.83226 1.25017 3.65645 0.937761 3.34373C0.625357 3.03102 0.449975 2.60701 0.450196 2.16498C0.450417 1.72295 0.626223 1.29912 0.93894 0.986712C1.25166 0.674307 1.67567 0.498925 2.1177 0.499146C2.55972 0.499367 2.98356 0.675173 3.29596 0.98789C3.60837 1.30061 3.78375 1.72462 3.78353 2.16665V2.16665ZM3.83353 5.06665H0.500195V15.5H3.83353V5.06665ZM9.1002 5.06665H5.78353V15.5H9.06686V10.025C9.06686 6.97498 13.0419 6.69165 13.0419 10.025V15.5H16.3335V8.89165C16.3335 3.74998 10.4502 3.94165 9.06686 6.46665L9.1002 5.06665V5.06665Z\" fill=\"\" />
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <h4 class=\"yj go kk wm ob zb\">
              Tonia Tolotra
            </h4>
            <p>
              Tonia mpanampy
            </p>
          </div>
          <!-- Team Item -->
          <div class=\"animate_top rj\">
            <div class=\"c i pg z-1\">
              <img class=\"vd\" src=\"{{ asset('images/gege.png') }}\" alt=\"Team\" />
              <div class=\"ef im nl il\">
                <span class=\"h -ud-left-5 -ud-bottom-21 rc de gd gh if wa\"></span>
                <span class=\"h s p rc vd hd mh va\"></span>
                <div class=\"h s p vd ij jj xa\">
                  <ul class=\"tc xf wf gg\">
                    <li>
                      <a href=\"#!\">
                        <svg class=\"uh vl ml il\" width=\"10\" height=\"18\" viewBox=\"0 0 10 18\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M6.66634 10.25H8.74968L9.58301 6.91669H6.66634V5.25002C6.66634 4.39169 6.66634 3.58335 8.33301 3.58335H9.58301V0.783354C9.31134 0.74752 8.28551 0.666687 7.20218 0.666687C4.93968 0.666687 3.33301 2.04752 3.33301 4.58335V6.91669H0.833008V10.25H3.33301V17.3334H6.66634V10.25Z\" fill=\"\" />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href=\"#!\">
                        <svg class=\"uh vl ml il\" width=\"18\" height=\"14\" viewBox=\"0 0 18 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M17.4683 1.71333C16.8321 1.99475 16.1574 2.17956 15.4666 2.26167C16.1947 1.82619 16.7397 1.14085 16.9999 0.333333C16.3166 0.74 15.5674 1.025 14.7866 1.17917C14.2621 0.617982 13.5669 0.245803 12.809 0.120487C12.0512 -0.00482822 11.2732 0.123742 10.596 0.486211C9.91875 0.848679 9.38024 1.42474 9.06418 2.12483C8.74812 2.82492 8.67221 3.60982 8.84825 4.3575C7.46251 4.28805 6.10686 3.92794 4.86933 3.30055C3.63179 2.67317 2.54003 1.79254 1.66492 0.715833C1.35516 1.24788 1.19238 1.85269 1.19326 2.46833C1.19326 3.67667 1.80826 4.74417 2.74326 5.36917C2.18993 5.35175 1.64878 5.20232 1.16492 4.93333V4.97667C1.16509 5.78142 1.44356 6.56135 1.95313 7.18422C2.46269 7.80709 3.17199 8.23456 3.96075 8.39417C3.4471 8.53337 2.90851 8.55388 2.38576 8.45417C2.60814 9.14686 3.04159 9.75267 3.62541 10.1868C4.20924 10.6209 4.9142 10.8615 5.64159 10.875C4.91866 11.4428 4.0909 11.8625 3.20566 12.1101C2.32041 12.3578 1.39503 12.4285 0.482422 12.3183C2.0755 13.3429 3.93 13.8868 5.82409 13.885C12.2349 13.885 15.7408 8.57417 15.7408 3.96833C15.7408 3.81833 15.7366 3.66667 15.7299 3.51833C16.4123 3.02514 17.0013 2.41418 17.4691 1.71417L17.4683 1.71333Z\" fill=\"\" />
                        </svg>
                      </a>
                    </li>
                    <li>
                      <a href=\"#!\">
                        <svg class=\"uh vl ml il\" width=\"17\" height=\"16\" viewBox=\"0 0 17 16\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                          <path d=\"M3.78353 2.16665C3.78331 2.60867 3.6075 3.03251 3.29478 3.34491C2.98207 3.65732 2.55806 3.8327 2.11603 3.83248C1.674 3.83226 1.25017 3.65645 0.937761 3.34373C0.625357 3.03102 0.449975 2.60701 0.450196 2.16498C0.450417 1.72295 0.626223 1.29912 0.93894 0.986712C1.25166 0.674307 1.67567 0.498925 2.1177 0.499146C2.55972 0.499367 2.98356 0.675173 3.29596 0.98789C3.60837 1.30061 3.78375 1.72462 3.78353 2.16665V2.16665ZM3.83353 5.06665H0.500195V15.5H3.83353V5.06665ZM9.1002 5.06665H5.78353V15.5H9.06686V10.025C9.06686 6.97498 13.0419 6.69165 13.0419 10.025V15.5H16.3335V8.89165C16.3335 3.74998 10.4502 3.94165 9.06686 6.46665L9.1002 5.06665V5.06665Z\" fill=\"\" />
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <h4 class=\"yj go kk wm ob zb\">
              Tonia Ludger
            </h4>
            <p>
              Tonia voalohany
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- ===== Team End ===== -->

    <!-- ===== Services Start ===== -->
    <section class=\"lj tp kr\">
      <!-- Section Title Start -->
      <div x-data=\"{ sectionTitle: `Les éléments qui constituent les pierres angulaires du développement.`, sectionTitleText: `Le scoutisme transmet des lois et des valeurs à travers la vie de groupe, où enfants et jeunes apprennent la responsabilité, l’entraide et la bienveillance, accompagnés par des adultes formés jouant un rôle éducatif et protecteur.
        L’apprentissage se fait par des activités stimulantes, vécues surtout en plein air, favorisant le développement personnel, les compétences, le caractère et l’amour de la nature.`}\">
        <div class=\"animate_top bb ze rj ki xn vq\">
          <h2 x-text=\"sectionTitle\" class=\"fk vj pr kk wm on/5 gq/2 bb _b\"></h2>
          <p class=\"bb on/5 wo/5 hq\" x-text=\"sectionTitleText\"></p>
        </div>
      </div>
      <!-- Section Title End -->
      <div class=\"bb ze ki xn yq mb en\">
        <div class=\"wc qf pn xo ng\">
          <!-- Service Item -->
          <div class=\"animate_top sg oi pi zq ml il am cn _m\">
            <img src=\"{{ asset('images/icon-04.svg') }}\" alt=\"Icon\" />
            <h4 class=\"ek zj kk wm nb _b\">
              La loi et l'univers
            </h4>
            <p>
              Les enfants et les jeunes acceptent de vivre des bienfaits du scoutisme, qu'ils expriment dans un langage adapté à leur âge et à la société malgache.
            </p>
          </div>
          <!-- Service Item -->
          <div class=\"animate_top sg oi pi zq ml il am cn _m\">
            <img src=\"{{ asset('images/icon-05.svg') }}\" alt=\"Icon\" />
            <h4 class=\"ek zj kk wm nb _b\">
              Vie de groupe
            </h4>
            <p>
              Elle réunit des enfants ou des jeunes de 6 à 8 ans au sein d'un groupe. Ils y vivent ensemble, partagent les responsabilités, se soutiennent et veillent les uns sur les autres dans un esprit de bienveillance.
            </p>
          </div>
          <!-- Service Item -->
          <div class=\"animate_top sg oi pi zq ml il am cn _m\">
            <img src=\"{{ asset('images/icon-06.svg') }}\" alt=\"Icon\" />
            <h4 class=\"ek zj kk wm nb _b\">
              Relation entre l'éducateur et l'élève
            </h4>
            <p>
              Des adultes responsables et formés accompagnent les enfants : leur rôle est de prendre soin d'eux et de les aider comme s'il s'agissait de grands frères et sœurs.
            </p>
          </div>
          <!-- Service Item -->
          <div class=\"animate_top sg oi pi zq ml il am cn _m\">
            <img src=\"{{ asset('images/icon-07.svg') }}\" alt=\"Icon\" />
            <h4 class=\"ek zj kk wm nb _b\">
              Parti immédiatement
            </h4>
            <p>
              Chez AIM, l'éducation se fait par l'action immédiate, et non par l'instruction ou la parole.
            </p>
          </div>
          <!-- Service Item -->
          <div class=\"animate_top sg oi pi zq ml il am cn _m\">
            <img src=\"{{ asset('images/icon-05.svg') }}\" alt=\"Icon\" />
            <h4 class=\"ek zj kk wm nb _b\">
              Activités intéressantes et stimulantes
            </h4>
            <p>
              Activités de développement personnel : activités permettant d’explorer de nouvelles choses, d’utiliser des compétences et de développer le caractère et le comportement.
            </p>
          </div>
          <!-- Service Item -->
          <div class=\"animate_top sg oi pi zq ml il am cn _m\">
            <img src=\"{{ asset('images/icon-06.svg') }}\" alt=\"Icon\" />
            <h4 class=\"ek zj kk wm nb _b\">
              En plein air
            </h4>
            <p>
              Les enfants sont élevés en plein air pour découvrir la nature, apprendre à l'aimer et, surtout, l'aimer.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- ===== Services End ===== -->

    <!-- ===== Projects Start ===== -->
    <section class=\"pg pj vp mr oj wp nr\">
      <!-- Section Title Start -->
      <div x-data=\"{ sectionTitle: `Les principes fondamentaux de l'éducation.`, sectionTitleText: `En matière de paix, il faut toujours privilégier le soutien, le respect, la confiance et l'amour.`}\">
        <div class=\"animate_top bb ze rj ki xn vq\">
          <h2 x-text=\"sectionTitle\" class=\"fk vj pr kk wm on/5 gq/2 bb _b\"></h2>
          <p class=\"bb on/5 wo/5 hq\" x-text=\"sectionTitleText\"></p>
        </div>
      </div>
      <!-- Section Title End -->
      <div class=\"bb ze ki xn 2xl:ud-px-0 jb\" x-data=\"{filterTab: 1}\">
        <!-- Porject Tab -->
        <div class=\"projects-tab _e bb tc uf wf xf cg rg hh rm vk xm si ti fc\">
          <button data-filter=\"*\" @click=\"filterTab = 1\" :class=\"{ 'gh lk' : filterTab === 1 }\" class=\"project-tab-btn ek rg ml il vi mi\">
            Tous
          </button>
          <button data-filter=\".branding\" @click=\"filterTab = 2\" :class=\"{ 'gh lk' : filterTab === 2 }\" class=\"project-tab-btn ek rg ml il vi mi\">
            Fais la paix avec toi-même
          </button>
          <button data-filter=\".digital\" @click=\"filterTab = 3\" :class=\"{ 'gh lk' : filterTab === 3 }\" class=\"project-tab-btn ek rg ml il vi mi\">
            En paix avec leur environnement,
          </button>
          <button data-filter=\".ecommerce\" @click=\"filterTab = 4\" :class=\"{ 'gh lk' : filterTab === 4 }\" class=\"project-tab-btn ek rg ml il vi mi\">
            Soyez en paix avec Dieu
          </button>
        </div>
        <!-- Projects item wrapper -->
        <div class=\"projects-wrapper tc -ud-mx-5\">
          <div class=\"project-sizer\"></div>
          <!-- Project Item -->
          <div class=\"project-item wi fb vd jn/2 to/3 branding ecommerce\">
            <div class=\"c i pg sg z-1\">
              <img src=\"{{ asset('images/scout13.jpg') }}\" alt=\"Project\" />
              <div class=\"h s r df nl kl im tc sf wf xf vd yc sg al hh/20 z-10\">
                <h4 class=\"ek tj kk hc\">
                  Photo Retouching
                </h4>
                <p>
                  Branded Ecommerce
                </p>
                <a class=\"c tc wf xf ie ld rg _g dh ml il ph jm km jc\" href=\"#!\">
                  <svg class=\"th lm ml il\" width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M10.4763 6.16664L6.00634 1.69664L7.18467 0.518311L13.6663 6.99998L7.18467 13.4816L6.00634 12.3033L10.4763 7.83331H0.333008V6.16664H10.4763Z\" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <!-- Project Item -->
          <div class=\"project-item wi fb vd jn/2 to/3 digital\">
            <div class=\"c i pg sg z-1\">
              <img src=\"{{ asset('images/scout12.jpg') }}\" alt=\"Project\" />
              <div class=\"h s r df nl kl im tc sf wf xf vd yc sg al hh/20 z-10\">
                <h4 class=\"ek tj kk hc\">
                  Photo Retouching
                </h4>
                <p>
                  Branded Ecommerce
                </p>
                <a class=\"c tc wf xf ie ld rg _g dh ml il ph jm km jc\" href=\"#!\">
                  <svg class=\"th lm ml il\" width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M10.4763 6.16664L6.00634 1.69664L7.18467 0.518311L13.6663 6.99998L7.18467 13.4816L6.00634 12.3033L10.4763 7.83331H0.333008V6.16664H10.4763Z\" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <!-- Project Item -->
          <div class=\"project-item wi fb vd jn/2 to/3 branding ecommerce\">
            <div class=\"c i pg sg z-1\">
              <img src=\"{{ asset('images/scout11.jpg') }}\" alt=\"Project\" />
              <div class=\"h s r df nl kl im tc sf wf xf vd yc sg al hh/20 z-10\">
                <h4 class=\"ek tj kk hc\">
                  Photo Retouching
                </h4>
                <p>
                  Branded Ecommerce
                </p>
                <a class=\"c tc wf xf ie ld rg _g dh ml il ph jm km jc\" href=\"#!\">
                  <svg class=\"th lm ml il\" width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M10.4763 6.16664L6.00634 1.69664L7.18467 0.518311L13.6663 6.99998L7.18467 13.4816L6.00634 12.3033L10.4763 7.83331H0.333008V6.16664H10.4763Z\" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <!-- Project Item -->
          <div class=\"project-item wi fb vd vo/3 digital ecommerce\">
            <div class=\"c i pg sg z-1\">
              <img src=\"{{ asset('images/scout14.jpg') }}\" alt=\"Project\" />
              <div class=\"h s r df nl kl im tc sf wf xf vd yc sg al hh/20 z-10\">
                <h4 class=\"ek tj kk hc\">
                  Photo Retouching
                </h4>
                <p>
                  Branded Ecommerce
                </p>
                <a class=\"c tc wf xf ie ld rg _g dh ml il ph jm km jc\" href=\"#!\">
                  <svg class=\"th lm ml il\" width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M10.4763 6.16664L6.00634 1.69664L7.18467 0.518311L13.6663 6.99998L7.18467 13.4816L6.00634 12.3033L10.4763 7.83331H0.333008V6.16664H10.4763Z\" />
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ===== Projects End ===== -->

    <!-- ===== FSM Start ===== -->
    {% include 'fsmlayout.html.twig' %}
  <!-- ===== FSM End ===== -->
  </main>
  ", "main.html.twig", "C:\\Users\\prodigy-188\\Music\\projet1\\templates\\main.html.twig");
    }
}
