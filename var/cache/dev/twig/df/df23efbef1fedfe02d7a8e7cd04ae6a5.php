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

/* liste.html.twig */
class __TwigTemplate_16ef0d5cdd5c8b49bd32c42d41aa5224 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "liste.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "liste.html.twig"));

        // line 1
        yield "<select name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 1, $this->source); })()), "html", null, true);
        yield "\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 1, $this->source); })()), "html", null, true);
        yield "\" size=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 1, $this->source); })()), "html", null, true);
        yield "\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tbObjets"]) || array_key_exists("tbObjets", $context) ? $context["tbObjets"] : (function () { throw new RuntimeError('Variable "tbObjets" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["objet"]) {
            // line 3
            yield "\t\t";
            // line 4
            yield "
\t\t";
            // line 5
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["objet"], "identifiant", [], "any", false, false, false, 5) != (isset($context["idSelect"]) || array_key_exists("idSelect", $context) ? $context["idSelect"] : (function () { throw new RuntimeError('Variable "idSelect" does not exist.', 5, $this->source); })()))) {
                // line 6
                yield "\t\t\t";
                // line 7
                yield "\t\t\t<option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objet"], "identifiant", [], "any", false, false, false, 7), "html", null, true);
                yield "\">
\t\t\t\t";
                // line 8
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, $context["objet"], "libelle", [], "any", true, true, false, 8) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["objet"], "libelle", [], "any", false, false, false, 8)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["objet"], "libelle", [], "any", false, false, false, 8)) : (CoreExtension::getAttribute($this->env, $this->source, $context["objet"], "age", [], "any", false, false, false, 8))), "html", null, true);
                yield "</option>
\t\t";
            } else {
                // line 10
                yield "\t\t\t\t\t\t<p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objet"], "identifiant", [], "any", false, false, false, 10), "html", null, true);
                yield "<p>
\t\t\t<option selected value=\"";
                // line 11
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objet"], "identifiant", [], "any", false, false, false, 11), "html", null, true);
                yield "\">
\t\t\t\t";
                // line 12
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, $context["objet"], "libelle", [], "any", true, true, false, 12) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["objet"], "libelle", [], "any", false, false, false, 12)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["objet"], "libelle", [], "any", false, false, false, 12)) : (CoreExtension::getAttribute($this->env, $this->source, $context["objet"], "age", [], "any", false, false, false, 12))), "html", null, true);
                yield "</option>
\t\t";
            }
            // line 14
            yield "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['objet'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "</select>
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
        return "liste.html.twig";
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
        return array (  100 => 15,  94 => 14,  89 => 12,  85 => 11,  80 => 10,  75 => 8,  70 => 7,  68 => 6,  66 => 5,  63 => 4,  61 => 3,  57 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<select name=\"{{name}}\" id=\"{{ name }}\" size=\"{{ size }}\">
\t{% for key, objet in tbObjets %}
\t\t{# l'élément en paramètre est présélectionné #}

\t\t{% if objet.identifiant != idSelect %}
\t\t\t{# si l'identifiant de l'objet n'est pas l'identifiant présélectionné #}
\t\t\t<option value=\"{{ objet.identifiant }}\">
\t\t\t\t{{ objet.libelle ?? objet.age }}</option>
\t\t{% else %}
\t\t\t\t\t\t<p>{{objet.identifiant }}<p>
\t\t\t<option selected value=\"{{ objet.identifiant }}\">
\t\t\t\t{{ objet.libelle ?? objet.age }}</option>
\t\t{% endif %}
\t{% endfor %}
</select>
", "liste.html.twig", "C:\\wamp64\\www\\agorabo7\\templates\\liste.html.twig");
    }
}
