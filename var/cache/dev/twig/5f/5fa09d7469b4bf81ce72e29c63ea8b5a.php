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
        yield "    ";
        yield from $this->load("component/headeradmin.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "
    ";
        // line 8
        yield from $this->load("component/sidebaradmin.html.twig", 8)->unwrap()->yield($context);
        // line 9
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
                <a href=\"publication.html\" class=\"btn-secondary\"><i class=\"bi bi-arrow-left\"></i> Back to publication</a>
            </div>
        </div>

        <!-- Publication Creation Form -->
        <form id=\"publicationForm\" class=\"publication-form\">
            <!-- Basic Information Card -->
            <div class=\"form-card\">
                <div class=\"form-header\">
                    <h3 class=\"form-title\"><i class=\"bi bi-info-circle\"></i> Basic Information</h3>
                    <p class=\"form-subtitle\">Provide the basic details about your publication</p>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-8\">
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"publicationName\">Publication Name <span
                                    class=\"required\">*</span></label>
                            <input type=\"text\" class=\"form-control\" id=\"publicationName\" placeholder=\"Enter publication name\"
                                required>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"publicationCategory\">Category</label>
                            <select class=\"form-select\" id=\"publicationCategory\">
                                <option value=\"\">Select category</option>
                                <option value=\"web\">Web Development</option>
                                <option value=\"mobile\">Mobile App</option>
                                <option value=\"design\">UI/UX Design</option>
                                <option value=\"marketing\">Marketing</option>
                                <option value=\"research\">Research</option>
                                <option value=\"other\">Other</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"form-label\" for=\"projectDescription\">Description <span
                            class=\"required\">*</span></label>
                    <textarea class=\"form-control\" id=\"projectDescription\"
                        placeholder=\"Describe the project goals, objectives, and scope...\" rows=\"4\" required></textarea>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"projectClient\">Client / Company</label>
                            <input type=\"text\" class=\"form-control\" id=\"projectClient\"
                                placeholder=\"Client or company name\">
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"projectPriority\">Priority</label>
                            <select class=\"form-select\" id=\"projectPriority\">
                                <option value=\"low\">Low</option>
                                <option value=\"medium\" selected>Medium</option>
                                <option value=\"high\">High</option>
                                <option value=\"urgent\">Urgent</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team & Timeline Card -->
            <div class=\"form-card\">
                <div class=\"form-header\">
                    <h3 class=\"form-title\"><i class=\"bi bi-people\"></i> Team & Timeline</h3>
                    <p class=\"form-subtitle\">Assign team members and set project timeline</p>
                </div>

                <div class=\"form-group\">
                    <label class=\"form-label\">Assign To <span class=\"required\">*</span></label>
                    <select class=\"form-control select2-assignee\" id=\"assigneeSelect\" multiple=\"multiple\" required>
                        <option value=\"1\" data-avatar-bg=\"#4A67FF\" data-avatar-text=\"JD\">John Doe (Project Lead)</option>
                        <option value=\"2\" data-avatar-bg=\"#00B7FF\" data-avatar-text=\"SS\">Sarah Smith (UI Designer)</option>
                        <option value=\"3\" data-avatar-bg=\"#10b981\" data-avatar-text=\"MB\">Michael Brown (Frontend Dev)</option>
                        <option value=\"4\" data-avatar-bg=\"#f59e0b\" data-avatar-text=\"EJ\">Emily Johnson (Backend Dev)</option>
                        <option value=\"5\" data-avatar-bg=\"#8b5cf6\" data-avatar-text=\"DC\">David Chen (QA Engineer)</option>
                        <option value=\"6\" data-avatar-bg=\"#ec4899\" data-avatar-text=\"LR\">Lisa Rodriguez (Product Manager)</option>
                        <option value=\"7\" data-avatar-bg=\"#14b8a6\" data-avatar-text=\"TK\">Tom Kim (DevOps)</option>
                        <option value=\"8\" data-avatar-bg=\"#f97316\" data-avatar-text=\"AP\">Alex Parker (UX Researcher)</option>
                    </select>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"startDate\">Start Date <span class=\"required\">*</span></label>
                            <input type=\"date\" class=\"form-control\" id=\"startDate\" required>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"endDate\">End Date</label>
                            <input type=\"date\" class=\"form-control\" id=\"endDate\">
                        </div>
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"form-label\" for=\"projectBudget\">Budget (\$)</label>
                    <input type=\"number\" class=\"form-control\" id=\"projectBudget\" placeholder=\"Enter project budget\">
                </div>
            </div>

            <!-- Files & Attachments Card -->
            <div class=\"form-card\">
                <div class=\"form-header\">
                    <h3 class=\"form-title\"><i class=\"bi bi-paperclip\"></i> Files & Attachments</h3>
                    <p class=\"form-subtitle\">Upload project files, documents, and resources</p>
                </div>

                <div class=\"form-group\">
                    <div class=\"file-upload\" id=\"fileUpload\">
                        <i class=\"bi bi-cloud-arrow-up\"></i>
                        <p>Drop files here or click to upload</p>
                        <span>Supports: PDF, DOC, XLS, JPG, PNG (Max 10MB)</span>
                        <input type=\"file\" id=\"fileInput\" multiple style=\"display: none;\">
                    </div>
                    <div id=\"fileList\" class=\"mt-3\"></div>
                </div>
            </div>

            <!-- Form Actions -->
            <div class=\"form-actions\">
                <div>
                    <button type=\"button\" class=\"btn-outline\" id=\"saveDraftBtn\">
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
        </form>
    </main>
    ";
        // line 164
        yield from $this->load("component/footeradmin.html.twig", 164)->unwrap()->yield($context);
        // line 165
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
        return array (  267 => 165,  265 => 164,  108 => 9,  106 => 8,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
                <a href=\"publication.html\" class=\"btn-secondary\"><i class=\"bi bi-arrow-left\"></i> Back to publication</a>
            </div>
        </div>

        <!-- Publication Creation Form -->
        <form id=\"publicationForm\" class=\"publication-form\">
            <!-- Basic Information Card -->
            <div class=\"form-card\">
                <div class=\"form-header\">
                    <h3 class=\"form-title\"><i class=\"bi bi-info-circle\"></i> Basic Information</h3>
                    <p class=\"form-subtitle\">Provide the basic details about your publication</p>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-8\">
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"publicationName\">Publication Name <span
                                    class=\"required\">*</span></label>
                            <input type=\"text\" class=\"form-control\" id=\"publicationName\" placeholder=\"Enter publication name\"
                                required>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"publicationCategory\">Category</label>
                            <select class=\"form-select\" id=\"publicationCategory\">
                                <option value=\"\">Select category</option>
                                <option value=\"web\">Web Development</option>
                                <option value=\"mobile\">Mobile App</option>
                                <option value=\"design\">UI/UX Design</option>
                                <option value=\"marketing\">Marketing</option>
                                <option value=\"research\">Research</option>
                                <option value=\"other\">Other</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"form-label\" for=\"projectDescription\">Description <span
                            class=\"required\">*</span></label>
                    <textarea class=\"form-control\" id=\"projectDescription\"
                        placeholder=\"Describe the project goals, objectives, and scope...\" rows=\"4\" required></textarea>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"projectClient\">Client / Company</label>
                            <input type=\"text\" class=\"form-control\" id=\"projectClient\"
                                placeholder=\"Client or company name\">
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"projectPriority\">Priority</label>
                            <select class=\"form-select\" id=\"projectPriority\">
                                <option value=\"low\">Low</option>
                                <option value=\"medium\" selected>Medium</option>
                                <option value=\"high\">High</option>
                                <option value=\"urgent\">Urgent</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team & Timeline Card -->
            <div class=\"form-card\">
                <div class=\"form-header\">
                    <h3 class=\"form-title\"><i class=\"bi bi-people\"></i> Team & Timeline</h3>
                    <p class=\"form-subtitle\">Assign team members and set project timeline</p>
                </div>

                <div class=\"form-group\">
                    <label class=\"form-label\">Assign To <span class=\"required\">*</span></label>
                    <select class=\"form-control select2-assignee\" id=\"assigneeSelect\" multiple=\"multiple\" required>
                        <option value=\"1\" data-avatar-bg=\"#4A67FF\" data-avatar-text=\"JD\">John Doe (Project Lead)</option>
                        <option value=\"2\" data-avatar-bg=\"#00B7FF\" data-avatar-text=\"SS\">Sarah Smith (UI Designer)</option>
                        <option value=\"3\" data-avatar-bg=\"#10b981\" data-avatar-text=\"MB\">Michael Brown (Frontend Dev)</option>
                        <option value=\"4\" data-avatar-bg=\"#f59e0b\" data-avatar-text=\"EJ\">Emily Johnson (Backend Dev)</option>
                        <option value=\"5\" data-avatar-bg=\"#8b5cf6\" data-avatar-text=\"DC\">David Chen (QA Engineer)</option>
                        <option value=\"6\" data-avatar-bg=\"#ec4899\" data-avatar-text=\"LR\">Lisa Rodriguez (Product Manager)</option>
                        <option value=\"7\" data-avatar-bg=\"#14b8a6\" data-avatar-text=\"TK\">Tom Kim (DevOps)</option>
                        <option value=\"8\" data-avatar-bg=\"#f97316\" data-avatar-text=\"AP\">Alex Parker (UX Researcher)</option>
                    </select>
                </div>

                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"startDate\">Start Date <span class=\"required\">*</span></label>
                            <input type=\"date\" class=\"form-control\" id=\"startDate\" required>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            <label class=\"form-label\" for=\"endDate\">End Date</label>
                            <input type=\"date\" class=\"form-control\" id=\"endDate\">
                        </div>
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"form-label\" for=\"projectBudget\">Budget (\$)</label>
                    <input type=\"number\" class=\"form-control\" id=\"projectBudget\" placeholder=\"Enter project budget\">
                </div>
            </div>

            <!-- Files & Attachments Card -->
            <div class=\"form-card\">
                <div class=\"form-header\">
                    <h3 class=\"form-title\"><i class=\"bi bi-paperclip\"></i> Files & Attachments</h3>
                    <p class=\"form-subtitle\">Upload project files, documents, and resources</p>
                </div>

                <div class=\"form-group\">
                    <div class=\"file-upload\" id=\"fileUpload\">
                        <i class=\"bi bi-cloud-arrow-up\"></i>
                        <p>Drop files here or click to upload</p>
                        <span>Supports: PDF, DOC, XLS, JPG, PNG (Max 10MB)</span>
                        <input type=\"file\" id=\"fileInput\" multiple style=\"display: none;\">
                    </div>
                    <div id=\"fileList\" class=\"mt-3\"></div>
                </div>
            </div>

            <!-- Form Actions -->
            <div class=\"form-actions\">
                <div>
                    <button type=\"button\" class=\"btn-outline\" id=\"saveDraftBtn\">
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
        </form>
    </main>
    {% include 'component/footeradmin.html.twig' %}

{% endblock %}
", "admin/post_admin/newpostadmin.html.twig", "C:\\Users\\M_INFO\\Music\\scouts\\templates\\admin\\post_admin\\newpostadmin.html.twig");
    }
}
