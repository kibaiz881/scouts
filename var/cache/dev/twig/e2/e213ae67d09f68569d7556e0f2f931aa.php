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
<title>Badge Scout Recto Verso</title>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
}

/* FORMAT A4 */
@page {
    size: A4 portrait;
    margin: 0;
}

/* TABLE PRINCIPALE */
.main-table {
    width: 100%;
    max-width: 190mm;
    margin: auto;
    border-collapse: collapse;
    table-layout: fixed;
}

.main-table td {
    padding: 5mm;
    vertical-align: middle;
    text-align: center;
}

/* BADGE */
.badge-scout {
    width: 90mm;
    height: 60mm;
    border-radius: 4mm;
    border: 1mm double #000;
    overflow: hidden;
    position: relative;
}

/* IMAGE BACKGROUND */
.bg-img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 0;
}

/* OVERLAY LÉGER */
.badge-scout::before {
    content: \"\";
    position: absolute;
    inset: 0;   
    background: rgba(255, 255, 255, 0.18);
    z-index: 1;
}

/* CONTENU AU PREMIER PLAN */
.badge-header,
.badge-table,
.badge-info,
.back-info,
.back-footer {
    position: relative;
    z-index: 5;
}

/* HEADER */
.badge-header {
    text-align: center;
    background: #1b1b1b;
    padding: 2mm;
    color: #fff;
    font-size: 3mm;
    font-weight: bold;
}

/* TABLE INTERNE */
.badge-table {
    width: 100%;
    border-collapse: collapse;
}

.badge-table td {
    padding: 2mm;
    vertical-align: middle;
}

/* PHOTO */
.badge-photo {
    width: 25mm;
    height: 25mm;
    object-fit: cover;
    border: 0.5mm solid #000;
    border-radius: 2mm;
}

/* INFOS */
.badge-info {
    font-size: 3mm;
    text-align: left;
    background: rgba(255, 255, 255, 0.53);
    padding: 2mm;
    border-radius: 2mm;
}

.label {
    font-size: 2mm;
    color: #555;
}

/* QR */
.qr-large {
    width: 30mm;
    height: 30mm;
    border: 0.5mm solid #000;
}

.qr-large img {
    width: 100%;
    height: 100%;
}

/* TEXTE VERSO */
.back-info {
    font-size: 3mm;
    background: rgba(255, 255, 255, 0.53);
    padding: 2mm;
    border-radius: 2mm;
}

.back-footer {
    font-size: 2.5mm;
    text-align: center;
    color: #5e5e5e;
}

/* PRINT */
@media print {
    body {
        background: white;
    }
    .main-table {
        margin: auto;
    }
}
</style>
</head>

<body>

<table class=\"main-table\">
<tr>

<!-- ================= RECTO ================= -->
<td>
    <div class=\"badge-scout\">
        <!-- IMAGE BACKGROUND -->
        ";
        // line 167
        if ((($tmp = (isset($context["image_base64"]) || array_key_exists("image_base64", $context) ? $context["image_base64"] : (function () { throw new RuntimeError('Variable "image_base64" does not exist.', 167, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 168
            yield "            <img src=\"data:image/png;base64,";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["image_base64"]) || array_key_exists("image_base64", $context) ? $context["image_base64"] : (function () { throw new RuntimeError('Variable "image_base64" does not exist.', 168, $this->source); })()), "html", null, true);
            yield "\" class=\"bg-img\">
        ";
        }
        // line 170
        yield "
        <div class=\"badge-header\">
            HELDER CAMARA
        </div>

        <table class=\"badge-table\">
            <tr>
                <!-- PHOTO -->
                <td>
                    ";
        // line 179
        if ((($tmp = (isset($context["profileBase64"]) || array_key_exists("profileBase64", $context) ? $context["profileBase64"] : (function () { throw new RuntimeError('Variable "profileBase64" does not exist.', 179, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 180
            yield "                        <img src=\"data:image/png;base64,";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["profileBase64"]) || array_key_exists("profileBase64", $context) ? $context["profileBase64"] : (function () { throw new RuntimeError('Variable "profileBase64" does not exist.', 180, $this->source); })()), "html", null, true);
            yield "\" class=\"badge-photo\">
                    ";
        } else {
            // line 182
            yield "                        <div style=\"width:25mm;height:25mm;border:1px solid #000;text-align:center;line-height:25mm;\">👤</div>
                    ";
        }
        // line 184
        yield "                </td>

                <!-- INFOS -->
                <td>
                    <div class=\"badge-info\">
                        <div class=\"label\">Nom et prénoms</div>
                        ";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", true, true, false, 190)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 190, $this->source); })()), "username", [], "any", false, false, false, 190), "N/A")) : ("N/A")), "html", null, true);
        yield "

                        <div class=\"label\">Naissance</div>
                        ";
        // line 193
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 193, $this->source); })()), "dateNaissance", [], "any", false, false, false, 193)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 193, $this->source); })()), "dateNaissance", [], "any", false, false, false, 193), "d/m/Y"), "html", null, true)) : ("N/A"));
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "lieuNaissance", [], "any", true, true, false, 193)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 193, $this->source); })()), "lieuNaissance", [], "any", false, false, false, 193), "N/A")) : ("N/A")), "html", null, true);
        yield "

                        <div class=\"label\">Email</div>
                        ";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", true, true, false, 196)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 196, $this->source); })()), "email", [], "any", false, false, false, 196), "N/A")) : ("N/A")), "html", null, true);
        yield "

                        <div class=\"label\">Fonction</div>
                        ";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "fonctionScout", [], "any", true, true, false, 199)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 199, $this->source); })()), "fonctionScout", [], "any", false, false, false, 199), "N/A")) : ("N/A")), "html", null, true);
        yield "

                        <div class=\"label\">Téléphone</div>
                        ";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "phone", [], "any", true, true, false, 202)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 202, $this->source); })()), "phone", [], "any", false, false, false, 202), "N/A")) : ("N/A")), "html", null, true);
        yield "

                        <div class=\"label\">CIN</div>
                        ";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "cin", [], "any", true, true, false, 205)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 205, $this->source); })()), "cin", [], "any", false, false, false, 205), "N/A")) : ("N/A")), "html", null, true);
        yield " à ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "lieuDelivrance", [], "any", true, true, false, 205)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 205, $this->source); })()), "lieuDelivrance", [], "any", false, false, false, 205), "N/A")) : ("N/A")), "html", null, true);
        yield "

                        <div class=\"label\">Adresse</div>
                        ";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "adresse", [], "any", true, true, false, 208)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 208, $this->source); })()), "adresse", [], "any", false, false, false, 208), "N/A")) : ("N/A")), "html", null, true);
        yield "
                    </div>
                </td>
            </tr>
        </table>
    </div>
</td>

<!-- ================= VERSO ================= -->
<td>
    <div class=\"badge-scout\">
        <!-- IMAGE BACKGROUND -->
        ";
        // line 220
        if ((($tmp = (isset($context["image_base64"]) || array_key_exists("image_base64", $context) ? $context["image_base64"] : (function () { throw new RuntimeError('Variable "image_base64" does not exist.', 220, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 221
            yield "            <img src=\"data:image/png;base64,";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["image_base64"]) || array_key_exists("image_base64", $context) ? $context["image_base64"] : (function () { throw new RuntimeError('Variable "image_base64" does not exist.', 221, $this->source); })()), "html", null, true);
            yield "\" class=\"bg-img\">
        ";
        }
        // line 223
        yield "
        <div class=\"badge-header\">
            ANTILIN'I MADAGASIKARA
        </div>

        <table class=\"badge-table\">
            <tr>
                <!-- QR -->
                <td>
                    <div class=\"qr-large\">
                        ";
        // line 233
        if ((($tmp = (isset($context["qrCode"]) || array_key_exists("qrCode", $context) ? $context["qrCode"] : (function () { throw new RuntimeError('Variable "qrCode" does not exist.', 233, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 234
            yield "                            <img src=\"data:image/png;base64,";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["qrCode"]) || array_key_exists("qrCode", $context) ? $context["qrCode"] : (function () { throw new RuntimeError('Variable "qrCode" does not exist.', 234, $this->source); })()), "html", null, true);
            yield "\">
                        ";
        } else {
            // line 236
            yield "                            <div style=\"width:100%;height:100%;text-align:center;line-height:30mm;\">QR</div>
                        ";
        }
        // line 238
        yield "                    </div>
                </td>

                <!-- TEXTE -->
                <td>
                    <div class=\"back-info\">
                        Ity olona ity dia mpikambana ao amin'ny Antilin'i Madagasikara.
                        <p>Ary nahavita vatom-panorenana ara-dalana tato anatin'ny fikambanana</p><br>
                        <center><u>Sonia</u></center>
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan=\"2\" class=\"back-footer\">
                    Badge personnel - En cas de perte, contactez l’organisation. Taompikatrohana 2025 - 2026
                </td>
            </tr>
        </table>
    </div>
</td>

</tr>
</table>

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
        return array (  342 => 238,  338 => 236,  332 => 234,  330 => 233,  318 => 223,  312 => 221,  310 => 220,  295 => 208,  287 => 205,  281 => 202,  275 => 199,  269 => 196,  261 => 193,  255 => 190,  247 => 184,  243 => 182,  237 => 180,  235 => 179,  224 => 170,  218 => 168,  216 => 167,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
<meta charset=\"UTF-8\">
<title>Badge Scout Recto Verso</title>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
}

/* FORMAT A4 */
@page {
    size: A4 portrait;
    margin: 0;
}

/* TABLE PRINCIPALE */
.main-table {
    width: 100%;
    max-width: 190mm;
    margin: auto;
    border-collapse: collapse;
    table-layout: fixed;
}

.main-table td {
    padding: 5mm;
    vertical-align: middle;
    text-align: center;
}

/* BADGE */
.badge-scout {
    width: 90mm;
    height: 60mm;
    border-radius: 4mm;
    border: 1mm double #000;
    overflow: hidden;
    position: relative;
}

/* IMAGE BACKGROUND */
.bg-img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 0;
}

/* OVERLAY LÉGER */
.badge-scout::before {
    content: \"\";
    position: absolute;
    inset: 0;   
    background: rgba(255, 255, 255, 0.18);
    z-index: 1;
}

/* CONTENU AU PREMIER PLAN */
.badge-header,
.badge-table,
.badge-info,
.back-info,
.back-footer {
    position: relative;
    z-index: 5;
}

/* HEADER */
.badge-header {
    text-align: center;
    background: #1b1b1b;
    padding: 2mm;
    color: #fff;
    font-size: 3mm;
    font-weight: bold;
}

/* TABLE INTERNE */
.badge-table {
    width: 100%;
    border-collapse: collapse;
}

.badge-table td {
    padding: 2mm;
    vertical-align: middle;
}

/* PHOTO */
.badge-photo {
    width: 25mm;
    height: 25mm;
    object-fit: cover;
    border: 0.5mm solid #000;
    border-radius: 2mm;
}

/* INFOS */
.badge-info {
    font-size: 3mm;
    text-align: left;
    background: rgba(255, 255, 255, 0.53);
    padding: 2mm;
    border-radius: 2mm;
}

.label {
    font-size: 2mm;
    color: #555;
}

/* QR */
.qr-large {
    width: 30mm;
    height: 30mm;
    border: 0.5mm solid #000;
}

.qr-large img {
    width: 100%;
    height: 100%;
}

/* TEXTE VERSO */
.back-info {
    font-size: 3mm;
    background: rgba(255, 255, 255, 0.53);
    padding: 2mm;
    border-radius: 2mm;
}

.back-footer {
    font-size: 2.5mm;
    text-align: center;
    color: #5e5e5e;
}

/* PRINT */
@media print {
    body {
        background: white;
    }
    .main-table {
        margin: auto;
    }
}
</style>
</head>

<body>

<table class=\"main-table\">
<tr>

<!-- ================= RECTO ================= -->
<td>
    <div class=\"badge-scout\">
        <!-- IMAGE BACKGROUND -->
        {% if image_base64 %}
            <img src=\"data:image/png;base64,{{ image_base64 }}\" class=\"bg-img\">
        {% endif %}

        <div class=\"badge-header\">
            HELDER CAMARA
        </div>

        <table class=\"badge-table\">
            <tr>
                <!-- PHOTO -->
                <td>
                    {% if profileBase64 %}
                        <img src=\"data:image/png;base64,{{ profileBase64 }}\" class=\"badge-photo\">
                    {% else %}
                        <div style=\"width:25mm;height:25mm;border:1px solid #000;text-align:center;line-height:25mm;\">👤</div>
                    {% endif %}
                </td>

                <!-- INFOS -->
                <td>
                    <div class=\"badge-info\">
                        <div class=\"label\">Nom et prénoms</div>
                        {{ user.username|default('N/A') }}

                        <div class=\"label\">Naissance</div>
                        {{ user.dateNaissance ? user.dateNaissance|date('d/m/Y') : 'N/A' }} - {{ user.lieuNaissance|default('N/A') }}

                        <div class=\"label\">Email</div>
                        {{ user.email|default('N/A') }}

                        <div class=\"label\">Fonction</div>
                        {{ user.fonctionScout|default('N/A') }}

                        <div class=\"label\">Téléphone</div>
                        {{ user.phone|default('N/A') }}

                        <div class=\"label\">CIN</div>
                        {{ user.cin|default('N/A') }} à {{ user.lieuDelivrance|default('N/A') }}

                        <div class=\"label\">Adresse</div>
                        {{ user.adresse|default('N/A') }}
                    </div>
                </td>
            </tr>
        </table>
    </div>
</td>

<!-- ================= VERSO ================= -->
<td>
    <div class=\"badge-scout\">
        <!-- IMAGE BACKGROUND -->
        {% if image_base64 %}
            <img src=\"data:image/png;base64,{{ image_base64 }}\" class=\"bg-img\">
        {% endif %}

        <div class=\"badge-header\">
            ANTILIN'I MADAGASIKARA
        </div>

        <table class=\"badge-table\">
            <tr>
                <!-- QR -->
                <td>
                    <div class=\"qr-large\">
                        {% if qrCode %}
                            <img src=\"data:image/png;base64,{{ qrCode }}\">
                        {% else %}
                            <div style=\"width:100%;height:100%;text-align:center;line-height:30mm;\">QR</div>
                        {% endif %}
                    </div>
                </td>

                <!-- TEXTE -->
                <td>
                    <div class=\"back-info\">
                        Ity olona ity dia mpikambana ao amin'ny Antilin'i Madagasikara.
                        <p>Ary nahavita vatom-panorenana ara-dalana tato anatin'ny fikambanana</p><br>
                        <center><u>Sonia</u></center>
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan=\"2\" class=\"back-footer\">
                    Badge personnel - En cas de perte, contactez l’organisation. Taompikatrohana 2025 - 2026
                </td>
            </tr>
        </table>
    </div>
</td>

</tr>
</table>

</body>
</html>
", "admin/settingadmin/pdf.html.twig", "C:\\Users\\M_INFO\\Music\\scouts\\templates\\admin\\settingadmin\\pdf.html.twig");
    }
}
