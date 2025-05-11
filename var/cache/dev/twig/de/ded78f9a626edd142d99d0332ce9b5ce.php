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

/* jeux/jeux.html.twig */
class __TwigTemplate_13a4d4adec9701a0c5ee1b23998a7e5d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jeux/jeux.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jeux/jeux.html.twig"));

        // line 1
        yield "<div class=\"container-fluid contenu\">

    ";
        // line 4
        yield "    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), 'form_start');
        yield "

    <div class=\"row\">
        <div class=\"col-md-2\">";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "refJeu", [], "any", false, false, false, 7), 'row');
        yield "</div>
        <div class=\"col-md-1\"></div>
        <div class=\"col-md-2\">";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "nom", [], "any", false, false, false, 9), 'row');
        yield "</div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-1\">";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "prix", [], "any", false, false, false, 13), 'row');
        yield "</div>
        <div class=\"col-md-2\"></div>
        <div class=\"col-md-2\">";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "plateforme", [], "any", false, false, false, 15), 'row');
        yield "</div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-1 col-form-label\">";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "pegi", [], "any", false, false, false, 19), 'row');
        yield "</div>
        <div class=\"col-md-2\"></div>
        <div class=\"col-md-2\">";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "genre", [], "any", false, false, false, 21), 'row');
        yield "</div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-2\">";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "dateParution", [], "any", false, false, false, 25), 'row');
        yield "</div>
        <div class=\"col-md-1\"></div>
        <div class=\"col-md-2\">";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "marque", [], "any", false, false, false, 27), 'row');
        yield "</div>
    </div>

    <div class=\"row\">
        <div>";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'rest');
        yield "</div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-1\"><BR></div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-2\"></div>
        <div class=\"col-md-1\">
            <button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-save\"></i> ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 41, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "</button>
    </div>

    <div class=\"col-md-1\">
            <button class=\"btn btn-info btn-xs\" type=\"reset\" title=\"Effacer la saisie\"><i class=\"fa fa-eraser\"> Annuler</i></button>
    </div>

    <div class=\"col-md-1\">
        <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jeux");
        yield "\" class=\"btn btn-secondary btn-xs\"><i
    class=\"fa fa-undo\"></i> Retour liste</a></span></th>
    </div>
    </div>
    ";
        // line 53
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), 'form_end');
        yield "
    
</div>
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
        return "jeux/jeux.html.twig";
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
        return array (  138 => 53,  131 => 49,  120 => 41,  107 => 31,  100 => 27,  95 => 25,  88 => 21,  83 => 19,  76 => 15,  71 => 13,  64 => 9,  59 => 7,  52 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"container-fluid contenu\">

    {# -- formulaire jeux video -- #}
    {{ form_start(form) }}

    <div class=\"row\">
        <div class=\"col-md-2\">{{ form_row(form.refJeu) }}</div>
        <div class=\"col-md-1\"></div>
        <div class=\"col-md-2\">{{ form_row(form.nom) }}</div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-1\">{{ form_row(form.prix) }}</div>
        <div class=\"col-md-2\"></div>
        <div class=\"col-md-2\">{{ form_row(form.plateforme) }}</div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-1 col-form-label\">{{ form_row(form.pegi) }}</div>
        <div class=\"col-md-2\"></div>
        <div class=\"col-md-2\">{{ form_row(form.genre) }}</div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-2\">{{ form_row(form.dateParution) }}</div>
        <div class=\"col-md-1\"></div>
        <div class=\"col-md-2\">{{ form_row(form.marque) }}</div>
    </div>

    <div class=\"row\">
        <div>{{ form_rest(form) }}</div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-1\"><BR></div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-2\"></div>
        <div class=\"col-md-1\">
            <button class=\"btn btn-primary btn-xs\"><i class=\"fa fa-save\"></i> {{ button|default('Enregistrer') }}</button>
    </div>

    <div class=\"col-md-1\">
            <button class=\"btn btn-info btn-xs\" type=\"reset\" title=\"Effacer la saisie\"><i class=\"fa fa-eraser\"> Annuler</i></button>
    </div>

    <div class=\"col-md-1\">
        <a href=\"{{ path('app_jeux')}}\" class=\"btn btn-secondary btn-xs\"><i
    class=\"fa fa-undo\"></i> Retour liste</a></span></th>
    </div>
    </div>
    {{ form_end(form) }}
    
</div>
", "jeux/jeux.html.twig", "C:\\wamp64\\www\\agorabo7\\templates\\jeux\\jeux.html.twig");
    }
}
