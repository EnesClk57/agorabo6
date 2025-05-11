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

/* cat_tournois/index.html.twig */
class __TwigTemplate_1aa4f9ae9a351ff3465d627b800f4706 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cat_tournois/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cat_tournois/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cat_tournois/index.html.twig", 1);
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

        yield "Catégories de tournois
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "\t<div class=\"col-md-10 contenu-blanc\">
\t\t<h1>Les
\t\t\t<span>
\t\t\t\t";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["lesCatTournois"]) || array_key_exists("lesCatTournois", $context) ? $context["lesCatTournois"] : (function () { throw new RuntimeError('Variable "lesCatTournois" does not exist.', 10, $this->source); })())), "html", null, true);
        yield "
\t\t\t</span>catégories de tournois
\t\t</h1>
\t\t";
        // line 13
        yield Twig\Extension\CoreExtension::include($this->env, $context, "messages.html.twig");
        yield "
\t\t<div class=\"contenu\">
\t\t\t<table class=\"table table-striped table-advance table-hover\">
\t\t\t\t<thead>
\t\t\t\t\t<tr class=\"bg-entete\">
\t\t\t\t\t\t<th>Identifiant</th>
\t\t\t\t\t\t<th>Libellé</th>
\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t<!-- formulaire pour ajouter une nouvelle catégorie-->
\t\t\t\t\t<tr>
\t\t\t\t\t\t";
        // line 26
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCreation"]) || array_key_exists("formCreation", $context) ? $context["formCreation"] : (function () { throw new RuntimeError('Variable "formCreation" does not exist.', 26, $this->source); })()), 'form_start');
        yield "
\t\t\t\t\t\t<td class=\"col-md-1\">Nouveau</td>
\t\t\t\t\t\t<td class=\"col-md-6\">";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCreation"]) || array_key_exists("formCreation", $context) ? $context["formCreation"] : (function () { throw new RuntimeError('Variable "formCreation" does not exist.', 28, $this->source); })()), "libelle", [], "any", false, false, false, 28), 'widget');
        yield "
\t\t\t\t\t\t\t";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formCreation"]) || array_key_exists("formCreation", $context) ? $context["formCreation"] : (function () { throw new RuntimeError('Variable "formCreation" does not exist.', 29, $this->source); })()), "libelle", [], "any", false, false, false, 29), 'errors');
        yield "</td>
\t\t\t\t\t\t<td class=\"col-md-3 \">
\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-sm\" type=\"submit\" formaction=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cat_tournois_ajouter");
        yield "\" title=\"Enregistrer nouvelle catégorie\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-save\"></i>Enregistrer</button>
\t\t\t\t\t\t\t<button class=\"btn btn-info btn-sm\" type=\"reset\" title=\"Effacer la saisie\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-eraser\"></i>
\t\t\t\t\t\t\t\tAnnuler
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
        // line 39
        yield "\t\t\t\t\t\t";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formCreation"]) || array_key_exists("formCreation", $context) ? $context["formCreation"] : (function () { throw new RuntimeError('Variable "formCreation" does not exist.', 39, $this->source); })()), 'rest');
        yield "
\t\t\t\t\t\t";
        // line 40
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCreation"]) || array_key_exists("formCreation", $context) ? $context["formCreation"] : (function () { throw new RuntimeError('Variable "formCreation" does not exist.', 40, $this->source); })()), 'form_end');
        yield "
\t\t\t\t\t</tr>
\t\t\t\t\t";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["lesCatTournois"]) || array_key_exists("lesCatTournois", $context) ? $context["lesCatTournois"] : (function () { throw new RuntimeError('Variable "lesCatTournois" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["categorie"]) {
            // line 43
            yield "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t";
            // line 44
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 44) != (isset($context["idCatTournoisModif"]) || array_key_exists("idCatTournoisModif", $context) ? $context["idCatTournoisModif"] : (function () { throw new RuntimeError('Variable "idCatTournoisModif" does not exist.', 44, $this->source); })()))) {
                // line 45
                yield "\t\t\t\t\t\t\t\t<td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 45), "html", null, true);
                yield "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "libelle", [], "any", false, false, false, 46), "html", null, true);
                yield "</td>
\t\t\t\t\t\t\t\t<!-- formulaire pour demander la modification ou la suppression -->
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-sm\" formaction=\"";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cat_tournois_demandermodification", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 50)]), "html", null, true);
                yield "\" title=\"Modifier\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t\t\t\t\tModifier</button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger btn-sm\" type=\"submit\" formaction=\"";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cat_tournois_supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 53)]), "html", null, true);
                yield "\" title=\"Supprimer\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcatégorie ?');\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash-o \"></i>
\t\t\t\t\t\t\t\t\t\t\tSupprimer</button>
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("action-item" . CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 57))), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
            } else {
                // line 61
                yield "\t\t\t\t\t\t\t\t<!-- formulaire pour modifier une catégorie -->
\t\t\t\t\t\t\t\t";
                // line 62
                yield                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formModification"]) || array_key_exists("formModification", $context) ? $context["formModification"] : (function () { throw new RuntimeError('Variable "formModification" does not exist.', 62, $this->source); })()), 'form_start');
                yield "
\t\t\t\t\t\t\t\t<td>";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 63), "html", null, true);
                yield "</td>
\t\t\t\t\t\t\t\t<td>";
                // line 64
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formModification"]) || array_key_exists("formModification", $context) ? $context["formModification"] : (function () { throw new RuntimeError('Variable "formModification" does not exist.', 64, $this->source); })()), "libelle", [], "any", false, false, false, 64), 'widget');
                yield "
\t\t\t\t\t\t\t\t\t";
                // line 65
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formModification"]) || array_key_exists("formModification", $context) ? $context["formModification"] : (function () { throw new RuntimeError('Variable "formModification" does not exist.', 65, $this->source); })()), "libelle", [], "any", false, false, false, 65), 'errors');
                yield "</td>
\t\t\t\t\t\t\t\t<td class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-sm\" type=\"submit\" formaction=\"";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cat_tournois_modifier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 67)]), "html", null, true);
                yield "\" title=\"Enregistrer\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-save\"></i>
\t\t\t\t\t\t\t\t\t\tEnregistrer</button>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info btn-sm\" type=\"reset\" title=\"Effacer la
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsaisie\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eraser\"></i>
\t\t\t\t\t\t\t\t\t\tEffacer</button>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-warning btn-sm\" type=\"submit\" formaction=\"";
                // line 74
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cat_tournois");
                yield "\" title=\"Annuler\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-undo\"></i>
\t\t\t\t\t\t\t\t\t\tAnnuler</button>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
                // line 79
                yield "\t\t\t\t\t\t\t\t";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formModification"]) || array_key_exists("formModification", $context) ? $context["formModification"] : (function () { throw new RuntimeError('Variable "formModification" does not exist.', 79, $this->source); })()), 'rest');
                yield "
\t\t\t\t\t\t\t\t";
                // line 80
                yield                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formModification"]) || array_key_exists("formModification", $context) ? $context["formModification"] : (function () { throw new RuntimeError('Variable "formModification" does not exist.', 80, $this->source); })()), 'form_end');
                yield "
\t\t\t\t\t\t\t";
            }
            // line 82
            yield "\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['categorie'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        yield "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t\t<!--fin div contenu-->
\t</div>
\t<!--fin div col-md-6-->
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
        return "cat_tournois/index.html.twig";
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
        return array (  257 => 84,  250 => 82,  245 => 80,  240 => 79,  233 => 74,  223 => 67,  218 => 65,  214 => 64,  210 => 63,  206 => 62,  203 => 61,  196 => 57,  189 => 53,  183 => 50,  176 => 46,  171 => 45,  169 => 44,  166 => 43,  162 => 42,  157 => 40,  152 => 39,  142 => 31,  137 => 29,  133 => 28,  128 => 26,  112 => 13,  106 => 10,  101 => 7,  88 => 6,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Catégories de tournois
{% endblock %}

{% block body %}
\t<div class=\"col-md-10 contenu-blanc\">
\t\t<h1>Les
\t\t\t<span>
\t\t\t\t{{ lesCatTournois | length }}
\t\t\t</span>catégories de tournois
\t\t</h1>
\t\t{{ include('messages.html.twig') }}
\t\t<div class=\"contenu\">
\t\t\t<table class=\"table table-striped table-advance table-hover\">
\t\t\t\t<thead>
\t\t\t\t\t<tr class=\"bg-entete\">
\t\t\t\t\t\t<th>Identifiant</th>
\t\t\t\t\t\t<th>Libellé</th>
\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t<!-- formulaire pour ajouter une nouvelle catégorie-->
\t\t\t\t\t<tr>
\t\t\t\t\t\t{{ form_start(formCreation) }}
\t\t\t\t\t\t<td class=\"col-md-1\">Nouveau</td>
\t\t\t\t\t\t<td class=\"col-md-6\">{{ form_widget(formCreation.libelle) }}
\t\t\t\t\t\t\t{{ form_errors(formCreation.libelle) }}</td>
\t\t\t\t\t\t<td class=\"col-md-3 \">
\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-sm\" type=\"submit\" formaction=\"{{ path('app_cat_tournois_ajouter') }}\" title=\"Enregistrer nouvelle catégorie\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-save\"></i>Enregistrer</button>
\t\t\t\t\t\t\t<button class=\"btn btn-info btn-sm\" type=\"reset\" title=\"Effacer la saisie\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-eraser\"></i>
\t\t\t\t\t\t\t\tAnnuler
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t{# Ceci va générer le champ CSRF #}
\t\t\t\t\t\t{{ form_rest(formCreation) }}
\t\t\t\t\t\t{{ form_end(formCreation) }}
\t\t\t\t\t</tr>
\t\t\t\t\t{% for key, categorie in lesCatTournois %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t{% if categorie.id != idCatTournoisModif %}
\t\t\t\t\t\t\t\t<td>{{ categorie.id }}</td>
\t\t\t\t\t\t\t\t<td>{{ categorie.libelle }}</td>
\t\t\t\t\t\t\t\t<!-- formulaire pour demander la modification ou la suppression -->
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-sm\" formaction=\"{{ path('app_cat_tournois_demandermodification', {'id' : categorie.id }) }}\" title=\"Modifier\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t\t\t\t\tModifier</button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger btn-sm\" type=\"submit\" formaction=\"{{ path('app_cat_tournois_supprimer', {'id' : categorie.id }) }}\" title=\"Supprimer\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tcatégorie ?');\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash-o \"></i>
\t\t\t\t\t\t\t\t\t\t\tSupprimer</button>
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('action-item' ~ categorie.id) }}\">
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<!-- formulaire pour modifier une catégorie -->
\t\t\t\t\t\t\t\t{{ form_start(formModification) }}
\t\t\t\t\t\t\t\t<td>{{ categorie.id }}</td>
\t\t\t\t\t\t\t\t<td>{{ form_widget(formModification.libelle) }}
\t\t\t\t\t\t\t\t\t{{form_errors(formModification.libelle) }}</td>
\t\t\t\t\t\t\t\t<td class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-sm\" type=\"submit\" formaction=\"{{ path('app_cat_tournois_modifier', {'id' : categorie.id }) }}\" title=\"Enregistrer\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-save\"></i>
\t\t\t\t\t\t\t\t\t\tEnregistrer</button>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info btn-sm\" type=\"reset\" title=\"Effacer la
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsaisie\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eraser\"></i>
\t\t\t\t\t\t\t\t\t\tEffacer</button>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-warning btn-sm\" type=\"submit\" formaction=\"{{ path('app_cat_tournois') }}\" title=\"Annuler\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-undo\"></i>
\t\t\t\t\t\t\t\t\t\tAnnuler</button>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t{# Ceci va générer le champ CSRF #}
\t\t\t\t\t\t\t\t{{ form_rest(formModification) }}
\t\t\t\t\t\t\t\t{{ form_end(formModification) }}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t\t<!--fin div contenu-->
\t</div>
\t<!--fin div col-md-6-->
{% endblock %}
", "cat_tournois/index.html.twig", "C:\\wamp64\\www\\agorabo7\\templates\\cat_tournois\\index.html.twig");
    }
}
