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

/* admin/settingadmin/pdf.html.twig */
class __TwigTemplate_fecf94e0deda9a129cf2dbe86818b399 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/settingadmin/pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/settingadmin/pdf.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
<meta charset=\"UTF-8\">
<title>Badge Scout CIN Style</title>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

<!-- Bootstrap -->
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">

<style>
body {
    background: #e5e7eb;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    font-family: 'DejaVu Sans', Arial, sans-serif;
}

/* Carte CIN style */
.badge-scout {
    width: 320px;
    height: 180px;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.25);
    position: relative;
    overflow: hidden;
    border: 2px solid #065f46;
}

/* Header avec logo et titre */
.badge-header {
    display: flex;
    align-items: center;
    background: #065f46; /* Vert du drapeau */
    padding: 6px 10px;
    color: #fff;
}

.badge-header img {
    width: 28px;
    height: 28px;
    margin-right: 8px;
}

.badge-header span {
    font-weight: 600;
    font-size: 13px;
}

/* BODY = photo + infos */
.badge-body {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    gap: 10px;
    padding: 10px;
}

/* Photo utilisateur */
.badge-photo {
    width: 70px;
    height: 90px;
    object-fit: cover;
    border: 2px solid #065f46;
    border-radius: 4px;
    flex-shrink: 0;
}

/* Infos utilisateur */
.badge-info {
    flex-grow: 1;
    font-size: 11px;
}

.label {
    color: #6b7280;
    font-size: 9px;
}
.value {
    font-weight: 600;
    font-size: 11px;
}

/* QR code */
.badge-qr {
    position: absolute;
    bottom: 10px;
    right: 10px;
    width: 50px;
    height: 50px;
    border: 2px solid #065f46;
    border-radius: 4px;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #f9fafb;
}
.badge-qr img {
    width: 100%;
    height: 100%;
}
</style>
</head>

<body>

<div class=\"badge-scout\">

    <!-- HEADER -->
    <div class=\"badge-header\">
        <!-- Logo scout -->
        ";
        // line 116
        yield "        <span>Badge Scout - Madagascar</span>
    </div>

    <!-- BODY -->
    <div class=\"badge-body\">

        <!-- PHOTO -->
        ";
        // line 123
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 123, $this->source); })()), "profilePictureName", [], "any", false, false, false, 123)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 124
            yield "            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/profiles/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 124, $this->source); })()), "profilePictureName", [], "any", false, false, false, 124)))), "html", null, true);
            yield "\" class=\"badge-photo\">
        ";
        } else {
            // line 126
            yield "            <div class=\"badge-photo d-flex align-items-center justify-content-center text-muted\">
                No Photo
            </div>
        ";
        }
        // line 130
        yield "
        <!-- INFOS -->
        <div class=\"badge-info\">
            <div class=\"mb-1\">
                <div class=\"label\">Nom</div>
                <div class=\"value\">";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 135, $this->source); })()), "username", [], "any", false, false, false, 135), "html", null, true);
        yield "</div>
            </div>

            <div class=\"mb-1\">
                <div class=\"label\">Email</div>
                <div class=\"value text-truncate\">";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 140, $this->source); })()), "email", [], "any", false, false, false, 140), "html", null, true);
        yield "</div>
            </div>

            <div class=\"d-flex justify-content-between mb-1\">
                <div>
                    <div class=\"label\">Rôle</div>
                    <div class=\"value\">
                        ";
        // line 147
        if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 147, $this->source); })()), "roles", [], "any", false, false, false, 147))) {
            yield "ADMIN";
        } else {
            yield "MEMBRE";
        }
        // line 148
        yield "                    </div>
                </div>

                <div>
                    <div class=\"label\">ID</div>
                    <div class=\"value\">";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 153, $this->source); })()), "id", [], "any", false, false, false, 153), "html", null, true);
        yield "</div>
                </div>
            </div>

            <div>
                <div class=\"label\">Émis le</div>
                <div class=\"value\">";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 159, $this->source); })()), "createdAt", [], "any", false, false, false, 159), "d/m/Y"), "html", null, true);
        yield "</div>
            </div>
        </div>

    </div>

    <!-- QR -->
    <div class=\"badge-qr\">
        ";
        // line 167
        if (array_key_exists("qrCode", $context)) {
            // line 168
            yield "            <img src=\"data:image/png;base64,";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["qrCode"]) || array_key_exists("qrCode", $context) ? $context["qrCode"] : (function () { throw new RuntimeError('Variable "qrCode" does not exist.', 168, $this->source); })()), "html", null, true);
            yield "\">
        ";
        } else {
            // line 170
            yield "            QR
        ";
        }
        // line 172
        yield "    </div>

</div>

</body>
</html>
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
        return "admin/settingadmin/pdf.html.twig";
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
        return array (  257 => 172,  253 => 170,  247 => 168,  245 => 167,  234 => 159,  225 => 153,  218 => 148,  212 => 147,  202 => 140,  194 => 135,  187 => 130,  181 => 126,  175 => 124,  173 => 123,  164 => 116,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
<meta charset=\"UTF-8\">
<title>Badge Scout CIN Style</title>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

<!-- Bootstrap -->
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">

<style>
body {
    background: #e5e7eb;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    font-family: 'DejaVu Sans', Arial, sans-serif;
}

/* Carte CIN style */
.badge-scout {
    width: 320px;
    height: 180px;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.25);
    position: relative;
    overflow: hidden;
    border: 2px solid #065f46;
}

/* Header avec logo et titre */
.badge-header {
    display: flex;
    align-items: center;
    background: #065f46; /* Vert du drapeau */
    padding: 6px 10px;
    color: #fff;
}

.badge-header img {
    width: 28px;
    height: 28px;
    margin-right: 8px;
}

.badge-header span {
    font-weight: 600;
    font-size: 13px;
}

/* BODY = photo + infos */
.badge-body {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    gap: 10px;
    padding: 10px;
}

/* Photo utilisateur */
.badge-photo {
    width: 70px;
    height: 90px;
    object-fit: cover;
    border: 2px solid #065f46;
    border-radius: 4px;
    flex-shrink: 0;
}

/* Infos utilisateur */
.badge-info {
    flex-grow: 1;
    font-size: 11px;
}

.label {
    color: #6b7280;
    font-size: 9px;
}
.value {
    font-weight: 600;
    font-size: 11px;
}

/* QR code */
.badge-qr {
    position: absolute;
    bottom: 10px;
    right: 10px;
    width: 50px;
    height: 50px;
    border: 2px solid #065f46;
    border-radius: 4px;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #f9fafb;
}
.badge-qr img {
    width: 100%;
    height: 100%;
}
</style>
</head>

<body>

<div class=\"badge-scout\">

    <!-- HEADER -->
    <div class=\"badge-header\">
        <!-- Logo scout -->
        {# <img src=\"{{ absolute_url(asset('images/hc.png')) }}\" alt=\"Logo Scout\"> #}
        <span>Badge Scout - Madagascar</span>
    </div>

    <!-- BODY -->
    <div class=\"badge-body\">

        <!-- PHOTO -->
        {% if user.profilePictureName %}
            <img src=\"{{ absolute_url(asset('images/profiles/' ~ user.profilePictureName)) }}\" class=\"badge-photo\">
        {% else %}
            <div class=\"badge-photo d-flex align-items-center justify-content-center text-muted\">
                No Photo
            </div>
        {% endif %}

        <!-- INFOS -->
        <div class=\"badge-info\">
            <div class=\"mb-1\">
                <div class=\"label\">Nom</div>
                <div class=\"value\">{{ user.username }}</div>
            </div>

            <div class=\"mb-1\">
                <div class=\"label\">Email</div>
                <div class=\"value text-truncate\">{{ user.email }}</div>
            </div>

            <div class=\"d-flex justify-content-between mb-1\">
                <div>
                    <div class=\"label\">Rôle</div>
                    <div class=\"value\">
                        {% if 'ROLE_ADMIN' in user.roles %}ADMIN{% else %}MEMBRE{% endif %}
                    </div>
                </div>

                <div>
                    <div class=\"label\">ID</div>
                    <div class=\"value\">{{ user.id }}</div>
                </div>
            </div>

            <div>
                <div class=\"label\">Émis le</div>
                <div class=\"value\">{{ user.createdAt|date('d/m/Y') }}</div>
            </div>
        </div>

    </div>

    <!-- QR -->
    <div class=\"badge-qr\">
        {% if qrCode is defined %}
            <img src=\"data:image/png;base64,{{ qrCode }}\">
        {% else %}
            QR
        {% endif %}
    </div>

</div>

</body>
</html>
", "admin/settingadmin/pdf.html.twig", "C:\\Users\\M_INFO\\Music\\scouts\\templates\\admin\\settingadmin\\pdf.html.twig");
    }
}
