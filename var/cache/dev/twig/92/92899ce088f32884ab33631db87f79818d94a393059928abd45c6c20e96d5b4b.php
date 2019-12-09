<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/agenda/index.html.twig */
class __TwigTemplate_ff699c6e2618cb791b071ca8d1bc60af84b38c455fb660d377279315e7b4a50f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/agenda/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/agenda/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/index.html.twig", "admin/agenda/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        // line 5
        echo "\t<h1 class=\"\">Agenda</h1>
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "
\t<ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
\t\t<li class=\"nav-item\">
\t\t\t<a class=\"nav-link active\" id=\"home-tab\" data-toggle=\"tab\" href=\"#fiche\" role=\"tab\" aria-controls=\"fiche\"
\t\t\t\t\t        aria-selected=\"true\">Fiche</a>
\t    </li>
\t\t<li class=\"nav-item\">
\t\t     <a class=\"nav-link\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#dates\" role=\"tab\" aria-controls=\"dates\"
\t\t\t        aria-selected=\"false\">Dates</a>
\t\t</li>
\t\t<li class=\"nav-item\">
\t\t     <a class=\"nav-link\" id=\"contact-tab\" data-toggle=\"tab\" href=\"#filtres\" role=\"tab\" aria-controls=\"filtres\"
\t\t\t\t\t\t\t\t\t       aria-selected=\"false\">Filtres</a>
\t\t</li>
\t\t<li class=\"nav-item\">
\t\t     <a class=\"nav-link\" id=\"contact-tab\" data-toggle=\"tab\" href=\"#adherent\" role=\"tab\" aria-controls=\"adherent\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t aria-selected=\"false\">Adhérent</a>
\t\t</li>
\t\t<li class=\"nav-item\">
\t\t     <a class=\"nav-link\" id=\"contact-tab\" data-toggle=\"tab\" href=\"#informations\" role=\"tab\" aria-controls=\"informations\"
\t\t\t\t\t\t\t\t\t       aria-selected=\"false\">Informations</a>
\t\t</li>
\t\t<li class=\"nav-item\">
\t\t     <a class=\"nav-link\" id=\"contact-tab\" data-toggle=\"tab\" href=\"#maj\" role=\"tab\" aria-controls=\"maj\"
\t\t\t\t\t\t\t\t\t       aria-selected=\"false\">Mise en avant</a>
\t\t</li>
\t</ul>


\t";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'form_start');
        echo "
\t<div class=\"form-error\">
\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'errors');
        echo "
\t</div>

\t<div class=\"tab-content content\">
\t\t<div class=\"tab-pane fade show active\" id=\"fiche\" role=\"tabpanel\" aria-labelledby=\"fiche-tab\">
\t\t\t";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "titre", [], "any", false, false, false, 45), 'row');
        echo "
\t\t\t";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "resume", [], "any", false, false, false, 46), 'row');
        echo "
\t\t\t";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "description", [], "any", false, false, false, 47), 'row');
        echo "
\t\t\t";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "video", [], "any", false, false, false, 48), 'row');
        echo "
\t\t\t";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "map", [], "any", false, false, false, 49), 'row');
        echo "
\t\t\t";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "lat", [], "any", false, false, false, 50), 'row');
        echo "
\t\t\t";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "lng", [], "any", false, false, false, 51), 'row');
        echo "
\t\t\t";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "type_resa", [], "any", false, false, false, 52), 'row');
        echo "
\t\t\t";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "reservation", [], "any", false, false, false, 53), 'row');
        echo "
\t\t</div>
\t\t<div class=\"tab-pane fade \" id=\"dates\" role=\"tabpanel\" aria-labelledby=\"dates-tab\">
\t\t\t";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "dates", [], "any", false, false, false, 56), 'row');
        echo "
\t\t</div>
\t\t<div class=\"tab-pane fade \" id=\"filtres\" role=\"tabpanel\" aria-labelledby=\"filtres-tab\">
\t\t</div>
\t\t<div class=\"tab-pane fade \" id=\"adherent\" role=\"tabpanel\" aria-labelledby=\"adherent-tab\">
\t\t\t";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "lieu", [], "any", false, false, false, 61), 'row');
        echo "
\t\t\t";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "adresse", [], "any", false, false, false, 62), 'row');
        echo "
\t\t\t";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "telephone", [], "any", false, false, false, 63), 'row');
        echo "
\t\t\t";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "email", [], "any", false, false, false, 64), 'row');
        echo "
\t\t\t";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "url", [], "any", false, false, false, 65), 'row');
        echo "

\t\t</div>
\t\t<div class=\"tab-pane fade \" id=\"informations\" role=\"tabpanel\" aria-labelledby=\"filtres-tab\">
\t\t\t";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "horaires", [], "any", false, false, false, 69), 'row');
        echo "
\t\t\t";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "age_min", [], "any", false, false, false, 70), 'row');
        echo "
\t\t\t";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "age_max", [], "any", false, false, false, 71), 'row');
        echo "
\t\t</div>
\t\t<div class=\"tab-pane fade \" id=\"maj\" role=\"tabpanel\" aria-labelledby=\"maj-tab\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"agenda_maj_titre\">Titre</label>
\t\t\t\t<input type=\"text\" id=\"agenda_maj_titre\" name=\"agenda_maj_titre\" value=\"\" class=\"form-control\" />
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"agenda_maj_description\">Description</label>
\t\t\t\t<textarea id=\"agenda_maj_description\" name=\"agenda_maj_description\" class=\"form-control\" /></textarea>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"agenda_maj_type\">Type</label>
\t\t\t\t<div class=\"form-check form-check\">
\t\t\t\t\t<input type=\"checkbox\" id=\"maj1\" name=\"agenda_maj_type[]\" value=\"0\" class=\"form-check-input\" />
\t\t\t\t\t<label class=\"form-chack-label\" for=\"maj1\">Diaporama</label>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-check form-check\">
\t\t\t\t\t<input type=\"checkbox\" id=\"maj2\" name=\"agenda_maj_type[]\" value=\"1\" class=\"form-check-input\" />
\t\t\t\t\t<label class=\"form-chack-label\" for=\"maj2\">Bloc d'accueil</label>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-check form-check\">
\t\t\t\t\t<input type=\"checkbox\" id=\"maj3\" name=\"agenda_maj_type[]\" value=\"2\" class=\"form-check-input\" />
\t\t\t\t\t<label class=\"form-chack-label\" for=\"maj3\">Newsletter</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-check form-check\">
\t\t\t\t\t<input type=\"checkbox\" id=\"maj4\" name=\"agenda_maj_type[]\" value=\"3\" class=\"form-check-input\" />
\t\t\t\t\t<label class=\"form-chack-label\" for=\"maj4\">Réseaux sociaux</label>
\t\t\t\t</div>

\t\t\t</div>

\t\t</div>
\t\t";
        // line 106
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), 'form_end');
        echo "

\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/agenda/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 106,  211 => 71,  207 => 70,  203 => 69,  196 => 65,  192 => 64,  188 => 63,  184 => 62,  180 => 61,  172 => 56,  166 => 53,  162 => 52,  158 => 51,  154 => 50,  150 => 49,  146 => 48,  142 => 47,  138 => 46,  134 => 45,  126 => 40,  121 => 38,  90 => 9,  80 => 8,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/index.html.twig' %}


\t{% block content_header %}
\t<h1 class=\"\">Agenda</h1>
\t{% endblock %}

\t{% block content %}

\t<ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
\t\t<li class=\"nav-item\">
\t\t\t<a class=\"nav-link active\" id=\"home-tab\" data-toggle=\"tab\" href=\"#fiche\" role=\"tab\" aria-controls=\"fiche\"
\t\t\t\t\t        aria-selected=\"true\">Fiche</a>
\t    </li>
\t\t<li class=\"nav-item\">
\t\t     <a class=\"nav-link\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#dates\" role=\"tab\" aria-controls=\"dates\"
\t\t\t        aria-selected=\"false\">Dates</a>
\t\t</li>
\t\t<li class=\"nav-item\">
\t\t     <a class=\"nav-link\" id=\"contact-tab\" data-toggle=\"tab\" href=\"#filtres\" role=\"tab\" aria-controls=\"filtres\"
\t\t\t\t\t\t\t\t\t       aria-selected=\"false\">Filtres</a>
\t\t</li>
\t\t<li class=\"nav-item\">
\t\t     <a class=\"nav-link\" id=\"contact-tab\" data-toggle=\"tab\" href=\"#adherent\" role=\"tab\" aria-controls=\"adherent\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t aria-selected=\"false\">Adhérent</a>
\t\t</li>
\t\t<li class=\"nav-item\">
\t\t     <a class=\"nav-link\" id=\"contact-tab\" data-toggle=\"tab\" href=\"#informations\" role=\"tab\" aria-controls=\"informations\"
\t\t\t\t\t\t\t\t\t       aria-selected=\"false\">Informations</a>
\t\t</li>
\t\t<li class=\"nav-item\">
\t\t     <a class=\"nav-link\" id=\"contact-tab\" data-toggle=\"tab\" href=\"#maj\" role=\"tab\" aria-controls=\"maj\"
\t\t\t\t\t\t\t\t\t       aria-selected=\"false\">Mise en avant</a>
\t\t</li>
\t</ul>


\t{{ form_start(form) }}
\t<div class=\"form-error\">
\t\t{{ form_errors(form) }}
\t</div>

\t<div class=\"tab-content content\">
\t\t<div class=\"tab-pane fade show active\" id=\"fiche\" role=\"tabpanel\" aria-labelledby=\"fiche-tab\">
\t\t\t{{ form_row(form.titre) }}
\t\t\t{{ form_row(form.resume) }}
\t\t\t{{ form_row(form.description) }}
\t\t\t{{ form_row(form.video) }}
\t\t\t{{ form_row(form.map) }}
\t\t\t{{ form_row(form.lat) }}
\t\t\t{{ form_row(form.lng) }}
\t\t\t{{ form_row(form.type_resa) }}
\t\t\t{{ form_row(form.reservation) }}
\t\t</div>
\t\t<div class=\"tab-pane fade \" id=\"dates\" role=\"tabpanel\" aria-labelledby=\"dates-tab\">
\t\t\t{{ form_row(form.dates) }}
\t\t</div>
\t\t<div class=\"tab-pane fade \" id=\"filtres\" role=\"tabpanel\" aria-labelledby=\"filtres-tab\">
\t\t</div>
\t\t<div class=\"tab-pane fade \" id=\"adherent\" role=\"tabpanel\" aria-labelledby=\"adherent-tab\">
\t\t\t{{ form_row(form.lieu) }}
\t\t\t{{ form_row(form.adresse) }}
\t\t\t{{ form_row(form.telephone) }}
\t\t\t{{ form_row(form.email) }}
\t\t\t{{ form_row(form.url) }}

\t\t</div>
\t\t<div class=\"tab-pane fade \" id=\"informations\" role=\"tabpanel\" aria-labelledby=\"filtres-tab\">
\t\t\t{{ form_row(form.horaires) }}
\t\t\t{{ form_row(form.age_min) }}
\t\t\t{{ form_row(form.age_max) }}
\t\t</div>
\t\t<div class=\"tab-pane fade \" id=\"maj\" role=\"tabpanel\" aria-labelledby=\"maj-tab\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"agenda_maj_titre\">Titre</label>
\t\t\t\t<input type=\"text\" id=\"agenda_maj_titre\" name=\"agenda_maj_titre\" value=\"\" class=\"form-control\" />
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"agenda_maj_description\">Description</label>
\t\t\t\t<textarea id=\"agenda_maj_description\" name=\"agenda_maj_description\" class=\"form-control\" /></textarea>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"agenda_maj_type\">Type</label>
\t\t\t\t<div class=\"form-check form-check\">
\t\t\t\t\t<input type=\"checkbox\" id=\"maj1\" name=\"agenda_maj_type[]\" value=\"0\" class=\"form-check-input\" />
\t\t\t\t\t<label class=\"form-chack-label\" for=\"maj1\">Diaporama</label>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-check form-check\">
\t\t\t\t\t<input type=\"checkbox\" id=\"maj2\" name=\"agenda_maj_type[]\" value=\"1\" class=\"form-check-input\" />
\t\t\t\t\t<label class=\"form-chack-label\" for=\"maj2\">Bloc d'accueil</label>
\t\t\t\t</div>

\t\t\t\t<div class=\"form-check form-check\">
\t\t\t\t\t<input type=\"checkbox\" id=\"maj3\" name=\"agenda_maj_type[]\" value=\"2\" class=\"form-check-input\" />
\t\t\t\t\t<label class=\"form-chack-label\" for=\"maj3\">Newsletter</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-check form-check\">
\t\t\t\t\t<input type=\"checkbox\" id=\"maj4\" name=\"agenda_maj_type[]\" value=\"3\" class=\"form-check-input\" />
\t\t\t\t\t<label class=\"form-chack-label\" for=\"maj4\">Réseaux sociaux</label>
\t\t\t\t</div>

\t\t\t</div>

\t\t</div>
\t\t{{ form_end(form) }}

\t</div>

{% endblock %}
", "admin/agenda/index.html.twig", "/home/nico/SYMFONY5/kidiklik/templates/admin/agenda/index.html.twig");
    }
}
