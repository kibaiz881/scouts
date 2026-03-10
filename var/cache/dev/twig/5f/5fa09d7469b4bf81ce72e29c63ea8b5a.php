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

/* admin/post_admin/newpostadmin.html.twig */
class __TwigTemplate_a69cf0c76e4cbd5d943e087ca23b201c extends Template
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
        return "component/baseadmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/post_admin/newpostadmin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/post_admin/newpostadmin.html.twig"));

        $this->parent = $this->load("component/baseadmin.html.twig", 1);
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

        yield "Helder Camara new posts";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield from $this->load("component/headeradmin.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield from $this->load("component/sidebaradmin.html.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "
<!-- ========== MAIN CONTENT ========== -->
<main class=\"main\" id=\"main\" role=\"main\">

    <!-- Page Header -->
    <div class=\"page-header\">
        <div class=\"page-title\">
            <h1>Create New Publication</h1>
            <p>Fill in the details below to create a new publication</p>
        </div>
        <div class=\"page-actions\">
            <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_post_admin");
        yield "\" class=\"btn-secondary\">
                <i class=\"bi bi-arrow-left\"></i> Back to publication
            </a>
        </div>
    </div>

    ";
        // line 25
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start', ["attr" => ["class" => "publication-form"]]);
        yield "

    <!-- Basic Information Card -->
    <div class=\"form-card\">

        <div class=\"form-header\">
            <h3 class=\"form-title\">
                <i class=\"bi bi-info-circle\"></i> Basic Information
            </h3>
            <p class=\"form-subtitle\">
                Provide the basic details about your publication
            </p>
        </div>

        <div class=\"row\">

            <div class=\"col-md-8\">
                <div class=\"form-group\">
                    <label class=\"form-label\">Publication Name <span class=\"required\">*</span></label>
                    ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "title", [], "any", false, false, false, 44), 'row', ["label" => false, "attr" => ["class" => "form-control", "placeholder" => "Enter publication name"]]);
        // line 50
        yield "
                </div>
            </div>

            <div class=\"col-md-4\">
                <div class=\"form-group\">
                    <label class=\"form-label\">Category</label>
                    ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "category", [], "any", false, false, false, 57), 'row', ["label" => false, "attr" => ["class" => "form-select"]]);
        // line 60
        yield "
                </div>
            </div>

        </div>

        <div class=\"form-group\">
            <label class=\"form-label\">Description <span class=\"required\">*</span></label>
            ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "content", [], "any", false, false, false, 68), 'row', ["label" => false, "attr" => ["class" => "form-control", "rows" => 5, "placeholder" => "Enter publication description"]]);
        // line 75
        yield "
        </div>

        <div class=\"row\">

            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    <label class=\"form-label\">Users</label>
                    ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "user", [], "any", false, false, false, 83), 'row', ["label" => false, "attr" => ["class" => "form-select"]]);
        // line 86
        yield "
                </div>
            </div>

            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    <label class=\"form-label\">Priority</label>
                    <select class=\"form-select\">
                        <option value=\"low\">Low</option>
                        <option value=\"medium\" selected>Medium</option>
                        <option value=\"high\">High</option>
                        <option value=\"urgent\">Urgent</option>
                    </select>
                </div>
            </div>

        </div>

    </div>

    <!-- Files & Attachments -->
    <div class=\"form-card\">

        <div class=\"form-header\">
            <h3 class=\"form-title\">
                <i class=\"bi bi-paperclip\"></i> Files & Attachments
            </h3>
            <p class=\"form-subtitle\">
                Upload project files, documents, and resources
            </p>
        </div>

        <div class=\"form-group\">

            <div class=\"file-upload\">
                <i class=\"bi bi-cloud-arrow-up\"></i>
                <p>Drop files here or click to upload</p>
                <span>Supports: JPG, PNG (Max 10MB)</span>

                ";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "PostPictureFile", [], "any", false, false, false, 125), 'row', ["label" => false, "attr" => ["class" => "form-control"]]);
        // line 130
        yield "

            </div>

        </div>

    </div>

    <!-- Form Actions -->
    <div class=\"form-actions\">

        <div>
            <button type=\"button\" class=\"btn-outline\">
                <i class=\"bi bi-save\"></i> Save as Draft
            </button>
        </div>

        <div class=\"d-flex gap-3\">

            <button type=\"reset\" class=\"btn-secondary\">
                <i class=\"bi bi-x-circle\"></i> Cancel
            </button>

            <button type=\"submit\" class=\"btn-primary\">
                <i class=\"bi bi-plus-circle\"></i> Create Project
            </button>

        </div>

    </div>

    ";
        // line 161
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), 'form_end');
        yield "

</main>

";
        // line 165
        yield from $this->load("component/footeradmin.html.twig", 165)->unwrap()->yield($context);
        // line 166
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/post_admin/newpostadmin.html.twig";
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
        return array (  270 => 166,  268 => 165,  261 => 161,  228 => 130,  226 => 125,  185 => 86,  183 => 83,  173 => 75,  171 => 68,  161 => 60,  159 => 57,  150 => 50,  148 => 44,  126 => 25,  117 => 19,  104 => 8,  102 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'component/baseadmin.html.twig' %}

{% block title %}Helder Camara new posts{% endblock %}

{% block body %}
{% include 'component/headeradmin.html.twig' %}
{% include 'component/sidebaradmin.html.twig' %}

<!-- ========== MAIN CONTENT ========== -->
<main class=\"main\" id=\"main\" role=\"main\">

    <!-- Page Header -->
    <div class=\"page-header\">
        <div class=\"page-title\">
            <h1>Create New Publication</h1>
            <p>Fill in the details below to create a new publication</p>
        </div>
        <div class=\"page-actions\">
            <a href=\"{{ path('app_admin_post_admin') }}\" class=\"btn-secondary\">
                <i class=\"bi bi-arrow-left\"></i> Back to publication
            </a>
        </div>
    </div>

    {{ form_start(form, {'attr': {'class': 'publication-form'}}) }}

    <!-- Basic Information Card -->
    <div class=\"form-card\">

        <div class=\"form-header\">
            <h3 class=\"form-title\">
                <i class=\"bi bi-info-circle\"></i> Basic Information
            </h3>
            <p class=\"form-subtitle\">
                Provide the basic details about your publication
            </p>
        </div>

        <div class=\"row\">

            <div class=\"col-md-8\">
                <div class=\"form-group\">
                    <label class=\"form-label\">Publication Name <span class=\"required\">*</span></label>
                    {{ form_row(form.title, {
                        label: false,
                        attr: {
                            class: 'form-control',
                            placeholder: 'Enter publication name'
                        }
                    }) }}
                </div>
            </div>

            <div class=\"col-md-4\">
                <div class=\"form-group\">
                    <label class=\"form-label\">Category</label>
                    {{ form_row(form.category, {
                        label: false,
                        attr: { class: 'form-select' }
                    }) }}
                </div>
            </div>

        </div>

        <div class=\"form-group\">
            <label class=\"form-label\">Description <span class=\"required\">*</span></label>
            {{ form_row(form.content, {
                label: false,
                attr: {
                    class: 'form-control',
                    rows: 5,
                    placeholder: 'Enter publication description'
                }
            }) }}
        </div>

        <div class=\"row\">

            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    <label class=\"form-label\">Users</label>
                    {{ form_row(form.user, {
                        label: false,
                        attr: { class: 'form-select' }
                    }) }}
                </div>
            </div>

            <div class=\"col-md-6\">
                <div class=\"form-group\">
                    <label class=\"form-label\">Priority</label>
                    <select class=\"form-select\">
                        <option value=\"low\">Low</option>
                        <option value=\"medium\" selected>Medium</option>
                        <option value=\"high\">High</option>
                        <option value=\"urgent\">Urgent</option>
                    </select>
                </div>
            </div>

        </div>

    </div>

    <!-- Files & Attachments -->
    <div class=\"form-card\">

        <div class=\"form-header\">
            <h3 class=\"form-title\">
                <i class=\"bi bi-paperclip\"></i> Files & Attachments
            </h3>
            <p class=\"form-subtitle\">
                Upload project files, documents, and resources
            </p>
        </div>

        <div class=\"form-group\">

            <div class=\"file-upload\">
                <i class=\"bi bi-cloud-arrow-up\"></i>
                <p>Drop files here or click to upload</p>
                <span>Supports: JPG, PNG (Max 10MB)</span>

                {{ form_row(form.PostPictureFile, {
                    label: false,
                    attr: {
                        class: 'form-control'
                    }
                }) }}

            </div>

        </div>

    </div>

    <!-- Form Actions -->
    <div class=\"form-actions\">

        <div>
            <button type=\"button\" class=\"btn-outline\">
                <i class=\"bi bi-save\"></i> Save as Draft
            </button>
        </div>

        <div class=\"d-flex gap-3\">

            <button type=\"reset\" class=\"btn-secondary\">
                <i class=\"bi bi-x-circle\"></i> Cancel
            </button>

            <button type=\"submit\" class=\"btn-primary\">
                <i class=\"bi bi-plus-circle\"></i> Create Project
            </button>

        </div>

    </div>

    {{ form_end(form) }}

</main>

{% include 'component/footeradmin.html.twig' %}

{% endblock %}
", "admin/post_admin/newpostadmin.html.twig", "C:\\Users\\M_INFO\\Music\\scouts\\templates\\admin\\post_admin\\newpostadmin.html.twig");
    }
}
