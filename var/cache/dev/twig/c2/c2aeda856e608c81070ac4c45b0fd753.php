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

/* lesPegi.html.twig */
class __TwigTemplate_716fcc0c93b5b44a01cba71b57f6a8e1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lesPegi.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lesPegi.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "lesPegi.html.twig", 1);
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
        yield "\t<!-- page start-->
\t<div class=\"col-sm-8\">
\t\t<section class=\"panel\">
\t\t\t<div class=\"chat-room-head\">
\t\t\t\t<h3>
\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\tGérer les Pegis</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<table class=\"table table-striped table-advance table-hover\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr class=\"tableau-entete\">
\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t<i class=\"fa fa-bullhorn\"></i>
\t\t\t\t\t\t\t\tIdentifiant</th>
\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t<i class=\"fa fa-bookmark\"></i>
\t\t\t\t\t\t\t\tAge</th>
\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t<i class=\"fa fa-bookmark\"></i>
\t\t\t\t\t\t\t\tDescription pegi</th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 28
        yield Twig\Extension\CoreExtension::include($this->env, $context, "messages.html.twig");
        yield "
\t\t\t\t\t\t<!-- formulaire pour ajouter un nouveau Pegi-->
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<form action=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pegis_ajouter");
        yield "\" method=\"post\">
\t\t\t\t\t\t\t\t<td>Nouveau</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"number\" id=\"txtAgePegi\" name=\"txtAgePegi\" size=\"24\" required minlength=\"1\" maxlength=\"2\" placeholder=\"Age\" title=\"De 4 à 24
\t\t\t\t\t\t\t\t\tcaractères\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"txtDescPegi\" name=\"txtDescPegi\" size=\"24\" required minlength=\"4\" maxlength=\"150\" placeholder=\"Libellé\" title=\"De 4 à 24
\t\t\t\t\t\t\t\t\tcaractères\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"ajouterNouveauPegi\" title=\"Enregistrer nouveau Pegi\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-save\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info btn-xs\" type=\"reset\" title=\"Effacer la
\t\t\t\t\t\t\t\t\t\t\tsaisie\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eraser\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tbPegis"]) || array_key_exists("tbPegis", $context) ? $context["tbPegis"] : (function () { throw new RuntimeError('Variable "tbPegis" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["pegi"]) {
            // line 53
            yield "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<!-- formulaire pour demander la modification et supprimer les Pegis-->
\t\t\t\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t\t\t\t<td>";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pegi"], "identifiant", [], "any", false, false, false, 56), "html", null, true);
            yield "<input type=\"hidden\" name=\"txtIdPegi\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pegi"], "identifiant", [], "any", false, false, false, 56), "html", null, true);
            yield "\"/></td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
            // line 58
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["pegi"], "identifiant", [], "any", false, false, false, 58) != (isset($context["idPegiModif"]) || array_key_exists("idPegiModif", $context) ? $context["idPegiModif"] : (function () { throw new RuntimeError('Variable "idPegiModif" does not exist.', 58, $this->source); })()))) {
                // line 59
                yield "\t\t\t\t\t\t\t\t\t\t\t";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pegi"], "age", [], "any", false, false, false, 59), "html", null, true);
                yield "</td>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pegi"], "description", [], "any", false, false, false, 62), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
                // line 65
                if ((((isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 65, $this->source); })()) != "rien") && (CoreExtension::getAttribute($this->env, $this->source, $context["pegi"], "identifiant", [], "any", false, false, false, 65) == (isset($context["idPegiNotif"]) || array_key_exists("idPegiNotif", $context) ? $context["idPegiNotif"] : (function () { throw new RuntimeError('Variable "idPegiNotif" does not exist.', 65, $this->source); })())))) {
                    // line 66
                    yield "\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success btn-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa facheck\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 68
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 68, $this->source); })()), "html", null, true);
                    yield "</button>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 70
                yield "\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"demanderModifierPegi\" title=\"Modifier\" formaction=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pegis_demandermodifier");
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"supprimerPegi\" title=\"Supprimer\" formaction=\"";
                // line 73
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pegis_supprimer");
                yield "\" onclick=\"return confirm('Voulez-vous
\t\t\t\t\t\t\t\t\t\t\t\tvraiment supprimer ce Pegi ?');\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash-o \"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
            } else {
                // line 79
                yield "\t\t\t\t\t\t\t\t\t<input type=\"number\" id=\"txtAgePegi\" name=\"txtAgePegi\" size=\"24\" required minlength=\"1\" maxlength=\"2\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pegi"], "age", [], "any", false, false, false, 79), "html", null, true);
                yield "\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"txtDescPegi\" name=\"txtDescPegi\" size=\"24\" required minlength=\"4\" maxlength=\"150\" value=\"";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pegi"], "description", [], "any", false, false, false, 82), "html", null, true);
                yield "\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"validerModifierPegi\" title=\"Enregistrer\" formaction=\"";
                // line 85
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pegis_validermodifier");
                yield "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-save\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info btn-xs\" type=\"reset\" title=\"Effacer
\t\t\t\t\t\t\t\t\t\t\tla saisie\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eraser\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-warning btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"annulerModifierPegi\" title=\"Annuler\" formaction=\"";
                // line 92
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pegis_afficher");
                yield "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-undo\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
            }
            // line 97
            yield "\t\t\t\t\t\t</form>
\t\t\t\t\t</tbody>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['pegi'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        yield "\t\t</tbody>
\t</table>

</div>
<!-- fin div panel-body--></section><!-- fin section Pegis--></div><!--fin div col-sm-8-->";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "lesPegi.html.twig";
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
        return array (  231 => 101,  222 => 97,  214 => 92,  204 => 85,  198 => 82,  191 => 79,  182 => 73,  175 => 70,  170 => 68,  166 => 66,  164 => 65,  158 => 62,  151 => 59,  149 => 58,  142 => 56,  137 => 53,  133 => 52,  109 => 31,  103 => 28,  76 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block central %}
\t<!-- page start-->
\t<div class=\"col-sm-8\">
\t\t<section class=\"panel\">
\t\t\t<div class=\"chat-room-head\">
\t\t\t\t<h3>
\t\t\t\t\t<i class=\"fa fa-angle-right\"></i>
\t\t\t\t\tGérer les Pegis</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<table class=\"table table-striped table-advance table-hover\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr class=\"tableau-entete\">
\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t<i class=\"fa fa-bullhorn\"></i>
\t\t\t\t\t\t\t\tIdentifiant</th>
\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t<i class=\"fa fa-bookmark\"></i>
\t\t\t\t\t\t\t\tAge</th>
\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t<i class=\"fa fa-bookmark\"></i>
\t\t\t\t\t\t\t\tDescription pegi</th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{{ include('messages.html.twig') }}
\t\t\t\t\t\t<!-- formulaire pour ajouter un nouveau Pegi-->
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<form action=\"{{path('pegis_ajouter')}}\" method=\"post\">
\t\t\t\t\t\t\t\t<td>Nouveau</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"number\" id=\"txtAgePegi\" name=\"txtAgePegi\" size=\"24\" required minlength=\"1\" maxlength=\"2\" placeholder=\"Age\" title=\"De 4 à 24
\t\t\t\t\t\t\t\t\tcaractères\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"txtDescPegi\" name=\"txtDescPegi\" size=\"24\" required minlength=\"4\" maxlength=\"150\" placeholder=\"Libellé\" title=\"De 4 à 24
\t\t\t\t\t\t\t\t\tcaractères\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"ajouterNouveauPegi\" title=\"Enregistrer nouveau Pegi\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-save\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info btn-xs\" type=\"reset\" title=\"Effacer la
\t\t\t\t\t\t\t\t\t\t\tsaisie\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eraser\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% for key, pegi in tbPegis %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<!-- formulaire pour demander la modification et supprimer les Pegis-->
\t\t\t\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t\t\t\t<td>{{ pegi.identifiant }}<input type=\"hidden\" name=\"txtIdPegi\" value=\"{{ pegi.identifiant }}\"/></td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t{% if pegi.identifiant != idPegiModif %}
\t\t\t\t\t\t\t\t\t\t\t{{ pegi.age }}</td>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t{{pegi.description}}
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t{% if notification != 'rien' and pegi.identifiant == idPegiNotif %}
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success btn-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa facheck\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t{{ notification }}</button>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"demanderModifierPegi\" title=\"Modifier\" formaction=\"{{path('pegis_demandermodifier')}}\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"supprimerPegi\" title=\"Supprimer\" formaction=\"{{path('pegis_supprimer')}}\" onclick=\"return confirm('Voulez-vous
\t\t\t\t\t\t\t\t\t\t\t\tvraiment supprimer ce Pegi ?');\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash-o \"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<input type=\"number\" id=\"txtAgePegi\" name=\"txtAgePegi\" size=\"24\" required minlength=\"1\" maxlength=\"2\" value=\"{{ pegi.age }}\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"txtDescPegi\" name=\"txtDescPegi\" size=\"24\" required minlength=\"4\" maxlength=\"150\" value=\"{{ pegi.description }}\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"validerModifierPegi\" title=\"Enregistrer\" formaction=\"{{path('pegis_validermodifier')}}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-save\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info btn-xs\" type=\"reset\" title=\"Effacer
\t\t\t\t\t\t\t\t\t\t\tla saisie\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eraser\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-warning btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"annulerModifierPegi\" title=\"Annuler\" formaction=\"{{path('pegis_afficher')}}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-undo\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</form>
\t\t\t\t\t</tbody>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>

</div>
<!-- fin div panel-body--></section><!-- fin section Pegis--></div><!--fin div col-sm-8-->{% endblock %}
", "lesPegi.html.twig", "C:\\wamp64\\www\\agorabo7\\templates\\lesPegi.html.twig");
    }
}
