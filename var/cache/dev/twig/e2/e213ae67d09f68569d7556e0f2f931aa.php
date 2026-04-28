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
    display: flex;
    flex-direction: column;
    justify-content: space-between;
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
    background: #ff000000;
    padding: 2mm;
    color: #f02020;
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
    background: rgba(250, 223, 173, 0.49);
    padding: 2mm;
    border-radius: 2mm;
}

.label {
    font-size: 2mm;
    color: #fff7f7;
}

/* QR */
.qr-large {
    width: 30mm;
    height: 30mm;
    border: 0.5mm solid #e02151;
    border-radius: 5mm;
}

.qr-large img {
    width: 100%;
    height: 100%;
    border: 0.5mm solid #ff1c1c;
    border-radius: 5mm;
}

/* TEXTE VERSO */
.back-info {
    font-size: 3mm;
    background: rgba(190, 186, 186, 0);
    padding: 2mm;
    border-radius: 2mm;
    color: #000000;
    text-align: justify;
}

.back-footer {
    font-size: 2.5mm;
    text-align: center;
    color: #696565;
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
        ";
        // line 154
        if ((($tmp = (isset($context["image_base64"]) || array_key_exists("image_base64", $context) ? $context["image_base64"] : (function () { throw new RuntimeError('Variable "image_base64" does not exist.', 154, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 155
            yield "            <img src=\"data:image/png;base64,";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["image_base64"]) || array_key_exists("image_base64", $context) ? $context["image_base64"] : (function () { throw new RuntimeError('Variable "image_base64" does not exist.', 155, $this->source); })()), "html", null, true);
            yield "\" 
                 style=\"position:absolute;top:0;left:0;width:100%;height:100%;z-index:0;border-radius:4mm; margin-top: 3mm; margin-left: 18mm; \">
        ";
        }
        // line 158
        yield "        ";
        if ((($tmp = (isset($context["image_base642"]) || array_key_exists("image_base642", $context) ? $context["image_base642"] : (function () { throw new RuntimeError('Variable "image_base642" does not exist.', 158, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 159
            yield "            <img src=\"data:image/png;base64,";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["image_base642"]) || array_key_exists("image_base642", $context) ? $context["image_base642"] : (function () { throw new RuntimeError('Variable "image_base642" does not exist.', 159, $this->source); })()), "html", null, true);
            yield "\" 
                 style=\"position:absolute;top:0;left:0;width:100%;height:100%;z-index:0;border-radius:4mm;\">
        ";
        }
        // line 162
        yield "        <div class=\"badge-header\">Fivondronana Helder Camara</div>

        <table class=\"badge-table\">
            <tr>
                <!-- PHOTO -->
                <td>
                    ";
        // line 168
        if ((($tmp = (isset($context["profileBase64"]) || array_key_exists("profileBase64", $context) ? $context["profileBase64"] : (function () { throw new RuntimeError('Variable "profileBase64" does not exist.', 168, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 169
            yield "                        <img src=\"data:image/png;base64,";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["profileBase64"]) || array_key_exists("profileBase64", $context) ? $context["profileBase64"] : (function () { throw new RuntimeError('Variable "profileBase64" does not exist.', 169, $this->source); })()), "html", null, true);
            yield "\" class=\"badge-photo\">
                    ";
        } else {
            // line 171
            yield "                        <div style=\"width:25mm;height:25mm;border:1px solid #000;text-align:center;line-height:25mm; padding-top: 2mm; background-repeat: no-repeat; background-position: center; background-size: cover;\">👤</div>
                    ";
        }
        // line 173
        yield "                </td>

                <!-- INFOS -->
                <td>
                    <div class=\"badge-info\">
                        <div class=\"label\">Nom et prénoms</div>
                        ";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", true, true, false, 179)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 179, $this->source); })()), "username", [], "any", false, false, false, 179), "N/A")) : ("N/A")), "html", null, true);
        yield "

                        <div class=\"label\">Naissance</div>
                        ";
        // line 182
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 182, $this->source); })()), "dateNaissance", [], "any", false, false, false, 182)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 182, $this->source); })()), "dateNaissance", [], "any", false, false, false, 182), "d/m/Y"), "html", null, true)) : ("N/A"));
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "lieuNaissance", [], "any", true, true, false, 182)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 182, $this->source); })()), "lieuNaissance", [], "any", false, false, false, 182), "N/A")) : ("N/A")), "html", null, true);
        yield "

                        <div class=\"label\">Email</div>
                        ";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", true, true, false, 185)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 185, $this->source); })()), "email", [], "any", false, false, false, 185), "N/A")) : ("N/A")), "html", null, true);
        yield "

                        <div class=\"label\">Fonction</div>
                        ";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "fonctionScout", [], "any", true, true, false, 188)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 188, $this->source); })()), "fonctionScout", [], "any", false, false, false, 188), "N/A")) : ("N/A")), "html", null, true);
        yield "

                        <div class=\"label\">Téléphone</div>
                        ";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "phone", [], "any", true, true, false, 191)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 191, $this->source); })()), "phone", [], "any", false, false, false, 191), "N/A")) : ("N/A")), "html", null, true);
        yield "

                        <div class=\"label\">CIN</div>
                        ";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "cin", [], "any", true, true, false, 194)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 194, $this->source); })()), "cin", [], "any", false, false, false, 194), "N/A")) : ("N/A")), "html", null, true);
        yield " à ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "lieuDelivrance", [], "any", true, true, false, 194)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 194, $this->source); })()), "lieuDelivrance", [], "any", false, false, false, 194), "N/A")) : ("N/A")), "html", null, true);
        yield "

                        <div class=\"label\">Adresse</div>
                        ";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "adresse", [], "any", true, true, false, 197)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 197, $this->source); })()), "adresse", [], "any", false, false, false, 197), "N/A")) : ("N/A")), "html", null, true);
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
        ";
        // line 208
        if ((($tmp = (isset($context["image_base641"]) || array_key_exists("image_base641", $context) ? $context["image_base641"] : (function () { throw new RuntimeError('Variable "image_base641" does not exist.', 208, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 209
            yield "            <img src=\"data:image/png;base64,";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["image_base641"]) || array_key_exists("image_base641", $context) ? $context["image_base641"] : (function () { throw new RuntimeError('Variable "image_base641" does not exist.', 209, $this->source); })()), "html", null, true);
            yield "\" 
                 style=\"position:absolute;top:0;left:0;width:100%;height:100%;z-index:0;border-radius:4mm;\">
        ";
        }
        // line 212
        yield "
        <div class=\"badge-header\">ANTILIN'I MADAGASIKARA</div>

        <table class=\"badge-table\">
            <tr>
                <!-- QR -->
                <td>
                    <div class=\"qr-large\">
                        ";
        // line 220
        if ((($tmp = (isset($context["qrCode"]) || array_key_exists("qrCode", $context) ? $context["qrCode"] : (function () { throw new RuntimeError('Variable "qrCode" does not exist.', 220, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 221
            yield "                            <img src=\"data:image/png;base64,";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["qrCode"]) || array_key_exists("qrCode", $context) ? $context["qrCode"] : (function () { throw new RuntimeError('Variable "qrCode" does not exist.', 221, $this->source); })()), "html", null, true);
            yield "\">
                        ";
        } else {
            // line 223
            yield "                            <div style=\"width:100%;height:100%;text-align:center;line-height:30mm;\">QR</div>
                        ";
        }
        // line 225
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
        return array (  335 => 225,  331 => 223,  325 => 221,  323 => 220,  313 => 212,  306 => 209,  304 => 208,  290 => 197,  282 => 194,  276 => 191,  270 => 188,  264 => 185,  256 => 182,  250 => 179,  242 => 173,  238 => 171,  232 => 169,  230 => 168,  222 => 162,  215 => 159,  212 => 158,  205 => 155,  203 => 154,  48 => 1,);
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
    display: flex;
    flex-direction: column;
    justify-content: space-between;
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
    background: #ff000000;
    padding: 2mm;
    color: #f02020;
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
    background: rgba(250, 223, 173, 0.49);
    padding: 2mm;
    border-radius: 2mm;
}

.label {
    font-size: 2mm;
    color: #fff7f7;
}

/* QR */
.qr-large {
    width: 30mm;
    height: 30mm;
    border: 0.5mm solid #e02151;
    border-radius: 5mm;
}

.qr-large img {
    width: 100%;
    height: 100%;
    border: 0.5mm solid #ff1c1c;
    border-radius: 5mm;
}

/* TEXTE VERSO */
.back-info {
    font-size: 3mm;
    background: rgba(190, 186, 186, 0);
    padding: 2mm;
    border-radius: 2mm;
    color: #000000;
    text-align: justify;
}

.back-footer {
    font-size: 2.5mm;
    text-align: center;
    color: #696565;
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
        {% if image_base64 %}
            <img src=\"data:image/png;base64,{{ image_base64 }}\" 
                 style=\"position:absolute;top:0;left:0;width:100%;height:100%;z-index:0;border-radius:4mm; margin-top: 3mm; margin-left: 18mm; \">
        {% endif %}
        {% if image_base642 %}
            <img src=\"data:image/png;base64,{{ image_base642 }}\" 
                 style=\"position:absolute;top:0;left:0;width:100%;height:100%;z-index:0;border-radius:4mm;\">
        {% endif %}
        <div class=\"badge-header\">Fivondronana Helder Camara</div>

        <table class=\"badge-table\">
            <tr>
                <!-- PHOTO -->
                <td>
                    {% if profileBase64 %}
                        <img src=\"data:image/png;base64,{{ profileBase64 }}\" class=\"badge-photo\">
                    {% else %}
                        <div style=\"width:25mm;height:25mm;border:1px solid #000;text-align:center;line-height:25mm; padding-top: 2mm; background-repeat: no-repeat; background-position: center; background-size: cover;\">👤</div>
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
        {% if image_base641 %}
            <img src=\"data:image/png;base64,{{ image_base641 }}\" 
                 style=\"position:absolute;top:0;left:0;width:100%;height:100%;z-index:0;border-radius:4mm;\">
        {% endif %}

        <div class=\"badge-header\">ANTILIN'I MADAGASIKARA</div>

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
