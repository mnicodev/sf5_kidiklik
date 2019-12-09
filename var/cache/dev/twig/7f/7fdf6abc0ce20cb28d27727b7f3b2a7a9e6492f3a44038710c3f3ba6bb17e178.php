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

/* admin_agenda/index.html.twig */
class __TwigTemplate_539f4d7b2e575f07594ab52dec80976bc307703780ee877fef60c7f1f52c63f3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "admin_agenda/index.html.twig", 2);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.', 2, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'title' => [$this, 'block_title'],
                'body' => [$this, 'block_body'],
            ]
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_agenda/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_agenda/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin_agenda/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello AdminAgendaController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"wrapper\">
\t<div class=\"sidebar\">
\t\t<div id=\"sidebar-wrapper\" class=\"sidebar-wrapper\">
\t\t\t<ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\">
\t\t\t\t<li class=\"nav-item\"><a href=\"/admin/agenda\">Agendas</a></li>
\t\t\t\t<li class=\"nav-item\"><a href=\"/admin/agenda\">Agendas</a></li>
\t\t\t</ul>

\t\t</div>

\t\t
\t</div>

<div class=\"container\">
    <h1 class=\"jumbotron\">Hello ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "! ✅</h1>

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
\t\t     <a class=\"nav-link\" id=\"contact-tab\" data-toggle=\"tab\" href=\"#contact\" role=\"tab\" aria-controls=\"contact\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t aria-selected=\"false\">Adhérent</a>
\t\t</li>
\t\t<li class=\"nav-item\">
\t\t     <a class=\"nav-link\" id=\"contact-tab\" data-toggle=\"tab\" href=\"#contact\" role=\"tab\" aria-controls=\"contact\"
\t\t\t\t\t\t\t\t\t       aria-selected=\"false\">Informations</a>
\t\t</li>
\t\t<li class=\"nav-item\">
\t\t     <a class=\"nav-link\" id=\"contact-tab\" data-toggle=\"tab\" href=\"#contact\" role=\"tab\" aria-controls=\"contact\"
\t\t\t\t\t\t\t\t\t       aria-selected=\"false\">Mise en avant</a>
\t\t</li>
\t</ul>


\t";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), 'form_start');
        echo "
\t<div class=\"form-error\">
\t\t";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'errors');
        echo "
\t</div>

\t<div class=\"tab-content\">
\t\t<div class=\"tab-pane fade show active\" id=\"fiche\" role=\"tabpanel\" aria-labelledby=\"fiche-tab\">
\t\t\t";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "titre", [], "any", false, false, false, 57), 'row');
        echo "
\t\t\t";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "resume", [], "any", false, false, false, 58), 'row');
        echo "
\t\t\t";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "description", [], "any", false, false, false, 59), 'row');
        echo "
\t\t\t";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "video", [], "any", false, false, false, 60), 'row');
        echo "
\t\t\t";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "map", [], "any", false, false, false, 61), 'row');
        echo "
\t\t\t";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "lat", [], "any", false, false, false, 62), 'row');
        echo "
\t\t\t";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "lng", [], "any", false, false, false, 63), 'row');
        echo "
\t\t\t";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "type_resa", [], "any", false, false, false, 64), 'row');
        echo "
\t\t</div>
\t\t<div class=\"tab-pane fade active\" id=\"dates\" role=\"tabpanel\" aria-labelledby=\"dates-tab\">
\t\t</div>
\t\t<div class=\"tab-pane fade active\" id=\"filtres\" role=\"tabpanel\" aria-labelledby=\"filtres-tab\">
\t\t</div>

\t</div>
</div>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin_agenda/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 64,  186 => 63,  182 => 62,  178 => 61,  174 => 60,  170 => 59,  166 => 58,  162 => 57,  154 => 52,  149 => 50,  116 => 20,  100 => 6,  90 => 5,  71 => 3,  48 => 1,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% use \"bootstrap_4_layout.html.twig\" %}
{% block title %}Hello AdminAgendaController!{% endblock %}

{% block body %}
<div class=\"wrapper\">
\t<div class=\"sidebar\">
\t\t<div id=\"sidebar-wrapper\" class=\"sidebar-wrapper\">
\t\t\t<ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\">
\t\t\t\t<li class=\"nav-item\"><a href=\"/admin/agenda\">Agendas</a></li>
\t\t\t\t<li class=\"nav-item\"><a href=\"/admin/agenda\">Agendas</a></li>
\t\t\t</ul>

\t\t</div>

\t\t
\t</div>

<div class=\"container\">
    <h1 class=\"jumbotron\">Hello {{ controller_name }}! ✅</h1>

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
\t\t     <a class=\"nav-link\" id=\"contact-tab\" data-toggle=\"tab\" href=\"#contact\" role=\"tab\" aria-controls=\"contact\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t aria-selected=\"false\">Adhérent</a>
\t\t</li>
\t\t<li class=\"nav-item\">
\t\t     <a class=\"nav-link\" id=\"contact-tab\" data-toggle=\"tab\" href=\"#contact\" role=\"tab\" aria-controls=\"contact\"
\t\t\t\t\t\t\t\t\t       aria-selected=\"false\">Informations</a>
\t\t</li>
\t\t<li class=\"nav-item\">
\t\t     <a class=\"nav-link\" id=\"contact-tab\" data-toggle=\"tab\" href=\"#contact\" role=\"tab\" aria-controls=\"contact\"
\t\t\t\t\t\t\t\t\t       aria-selected=\"false\">Mise en avant</a>
\t\t</li>
\t</ul>


\t{{ form_start(form) }}
\t<div class=\"form-error\">
\t\t{{ form_errors(form) }}
\t</div>

\t<div class=\"tab-content\">
\t\t<div class=\"tab-pane fade show active\" id=\"fiche\" role=\"tabpanel\" aria-labelledby=\"fiche-tab\">
\t\t\t{{ form_row(form.titre) }}
\t\t\t{{ form_row(form.resume) }}
\t\t\t{{ form_row(form.description) }}
\t\t\t{{ form_row(form.video) }}
\t\t\t{{ form_row(form.map) }}
\t\t\t{{ form_row(form.lat) }}
\t\t\t{{ form_row(form.lng) }}
\t\t\t{{ form_row(form.type_resa) }}
\t\t</div>
\t\t<div class=\"tab-pane fade active\" id=\"dates\" role=\"tabpanel\" aria-labelledby=\"dates-tab\">
\t\t</div>
\t\t<div class=\"tab-pane fade active\" id=\"filtres\" role=\"tabpanel\" aria-labelledby=\"filtres-tab\">
\t\t</div>

\t</div>
</div>

</div>
{% endblock %}
", "admin_agenda/index.html.twig", "/home/nico/SYMFONY5/kidiklik/templates/admin_agenda/index.html.twig");
    }
}
