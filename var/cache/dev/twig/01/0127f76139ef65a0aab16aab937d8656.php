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

/* accueil.html.twig */
class __TwigTemplate_fea2d3e5dbd353ea425dedcb09064ce8 extends Template
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
            'central' => [$this, 'block_central'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_central(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "central"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "central"));

        // line 3
        yield "\t<!--
\t\t\t****************************************************************************************************
\t\t\t******************************************************
\t\t\tMAIN CONTENT
\t\t\t****************************************************************************************************
\t\t\t******************************************************* -->
\t<div class=\"container\">
\t\t<div
\t\t\tid=\"blocImage\">
\t\t\t<!--<img src=\"vue/img/greece-1162816_640.jpg\" alt=\"Agora en Grèce\" class=\"responsive\">-->
\t\t\t<img src=\"assets/img/greece-3348294_1280.jpg\" alt=\"\" class=\"responsive\">
\t\t\t<div
\t\t\t\tid=\"blocImageTexte\">
\t\t\t\t";
        // line 17
        yield "\t\t\t\t";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17)) {
            // line 18
            yield "\t\t\t\t\tBonjour
\t\t\t\t\t";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "prenomMembre", [], "any", false, false, false, 19), "html", null, true);
            yield "
\t\t\t\t\t";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "nomMembre", [], "any", false, false, false, 20), "html", null, true);
            yield "
\t\t\t\t";
        } else {
            // line 22
            yield "\t\t\t\t\tIdentifiez vous !
\t\t\t\t";
        }
        // line 24
        yield "\t\t\t</div>
\t\t</div>
\t</div>
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
        return "accueil.html.twig";
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
        return array (  110 => 24,  106 => 22,  101 => 20,  97 => 19,  94 => 18,  91 => 17,  76 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block central %}
\t<!--
\t\t\t****************************************************************************************************
\t\t\t******************************************************
\t\t\tMAIN CONTENT
\t\t\t****************************************************************************************************
\t\t\t******************************************************* -->
\t<div class=\"container\">
\t\t<div
\t\t\tid=\"blocImage\">
\t\t\t<!--<img src=\"vue/img/greece-1162816_640.jpg\" alt=\"Agora en Grèce\" class=\"responsive\">-->
\t\t\t<img src=\"assets/img/greece-3348294_1280.jpg\" alt=\"\" class=\"responsive\">
\t\t\t<div
\t\t\t\tid=\"blocImageTexte\">
\t\t\t\t{# Bonjour <?php echo \$_SESSION[\"prenomUtilisateur\"].' '.\$_SESSION[\"nomUtilisateur\"] ; ?>#}
\t\t\t\t{% if app.user %}
\t\t\t\t\tBonjour
\t\t\t\t\t{{ app.user.prenomMembre }}
\t\t\t\t\t{{ app.user.nomMembre }}
\t\t\t\t{% else %}
\t\t\t\t\tIdentifiez vous !
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "accueil.html.twig", "C:\\wamp64\\www\\agorabo7\\templates\\accueil.html.twig");
    }
}
