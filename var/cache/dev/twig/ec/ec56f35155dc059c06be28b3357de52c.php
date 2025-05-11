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

/* lesGenres.html.twig */
class __TwigTemplate_3554ef16a273f3f8e48c33a0313b35ab extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lesGenres.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lesGenres.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "lesGenres.html.twig", 1);
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
\t\t\t\t\tGérer les genres</h3>
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
\t\t\t\t\t\t\t\tLibellé</th>
\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t<i class=\"fa fa-bookmark\"></i>
\t\t\t\t\t\t\t\tNombre jeux</th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 28
        yield Twig\Extension\CoreExtension::include($this->env, $context, "messages.html.twig");
        yield "
\t\t\t\t\t\t<!-- formulaire pour ajouter un nouveau genre-->
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<form action=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("genres_ajouter");
        yield "\" method=\"post\">
\t\t\t\t\t\t\t\t<td>Nouveau</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"txtLibGenre\" name=\"txtLibGenre\" size=\"24\" required minlength=\"4\" maxlength=\"24\" placeholder=\"Libellé\" title=\"De 4 à 24
\t\t\t\t\t\t\t\t\tcaractères\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t0
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"ajouterNouveauGenre\" title=\"Enregistrer nouveau genre\">
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
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tbGenres"]) || array_key_exists("tbGenres", $context) ? $context["tbGenres"] : (function () { throw new RuntimeError('Variable "tbGenres" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["genre"]) {
            // line 52
            yield "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<!-- formulaire pour demander la modification et supprimer les genres-->
\t\t\t\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t\t\t\t<td>";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["genre"], "identifiant", [], "any", false, false, false, 55), "html", null, true);
            yield "<input type=\"hidden\" name=\"txtIdGenre\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["genre"], "identifiant", [], "any", false, false, false, 55), "html", null, true);
            yield "\"/></td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
            // line 57
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["genre"], "identifiant", [], "any", false, false, false, 57) != (isset($context["idGenreModif"]) || array_key_exists("idGenreModif", $context) ? $context["idGenreModif"] : (function () { throw new RuntimeError('Variable "idGenreModif" does not exist.', 57, $this->source); })()))) {
                // line 58
                yield "\t\t\t\t\t\t\t\t\t\t\t";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["genre"], "libelle", [], "any", false, false, false, 58), "html", null, true);
                yield "</td>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["genre"], "nbJeux", [], "any", false, false, false, 61), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
                // line 64
                if ((((isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 64, $this->source); })()) != "rien") && (CoreExtension::getAttribute($this->env, $this->source, $context["genre"], "identifiant", [], "any", false, false, false, 64) ==                 // line 65
(isset($context["idGenreNotif"]) || array_key_exists("idGenreNotif", $context) ? $context["idGenreNotif"] : (function () { throw new RuntimeError('Variable "idGenreNotif" does not exist.', 65, $this->source); })())))) {
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
                yield "\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"demanderModifierGenre\" title=\"Modifier\" formaction=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("genres_demandermodifier");
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"supprimerGenre\" title=\"Supprimer\" formaction=\"";
                // line 73
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("genres_supprimer");
                yield "\" onclick=\"return confirm('Voulez-vous
\t\t\t\t\t\t\t\t\t\t\t\tvraiment supprimer ce genre ?');\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash-o \"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
            } else {
                // line 79
                yield "\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"txtLibGenre\" name=\"txtLibGenre\" size=\"24\" required minlength=\"4\" maxlength=\"24\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["genre"], "libelle", [], "any", false, false, false, 79), "html", null, true);
                yield "\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["genre"], "nbJeux", [], "any", false, false, false, 82), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"validerModifierGenre\" title=\"Enregistrer\" formaction=\"";
                // line 85
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("genres_validermodifier");
                yield "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-save\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info btn-xs\" type=\"reset\" title=\"Effacer
\t\t\t\t\t\t\t\t\t\t\tla saisie\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eraser\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-warning btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"annulerModifierGenre\" title=\"Annuler\" formaction=\"";
                // line 92
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("genres_afficher");
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
        unset($context['_seq'], $context['key'], $context['genre'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        yield "\t\t</tbody>
\t</table>

</div>
<!-- fin div panel-body--></section><!-- fin section genres--></div><!--fin div col-sm-8-->";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "lesGenres.html.twig";
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
        return array (  231 => 101,  222 => 97,  214 => 92,  204 => 85,  198 => 82,  191 => 79,  182 => 73,  175 => 70,  170 => 68,  166 => 66,  164 => 65,  163 => 64,  157 => 61,  150 => 58,  148 => 57,  141 => 55,  136 => 52,  132 => 51,  109 => 31,  103 => 28,  76 => 3,  63 => 2,  40 => 1,);
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
\t\t\t\t\tGérer les genres</h3>
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
\t\t\t\t\t\t\t\tLibellé</th>
\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t<i class=\"fa fa-bookmark\"></i>
\t\t\t\t\t\t\t\tNombre jeux</th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{{ include('messages.html.twig') }}
\t\t\t\t\t\t<!-- formulaire pour ajouter un nouveau genre-->
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<form action=\"{{path('genres_ajouter')}}\" method=\"post\">
\t\t\t\t\t\t\t\t<td>Nouveau</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"txtLibGenre\" name=\"txtLibGenre\" size=\"24\" required minlength=\"4\" maxlength=\"24\" placeholder=\"Libellé\" title=\"De 4 à 24
\t\t\t\t\t\t\t\t\tcaractères\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t0
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"ajouterNouveauGenre\" title=\"Enregistrer nouveau genre\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-save\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info btn-xs\" type=\"reset\" title=\"Effacer la
\t\t\t\t\t\t\t\t\t\t\tsaisie\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eraser\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% for key, genre in tbGenres %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<!-- formulaire pour demander la modification et supprimer les genres-->
\t\t\t\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t\t\t\t<td>{{ genre.identifiant }}<input type=\"hidden\" name=\"txtIdGenre\" value=\"{{ genre.identifiant }}\"/></td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t{% if genre.identifiant != idGenreModif %}
\t\t\t\t\t\t\t\t\t\t\t{{ genre.libelle }}</td>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t{{genre.nbJeux}}
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t{% if notification != 'rien' and genre.identifiant ==
idGenreNotif %}
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success btn-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa facheck\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t{{ notification }}</button>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"demanderModifierGenre\" title=\"Modifier\" formaction=\"{{path('genres_demandermodifier')}}\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"supprimerGenre\" title=\"Supprimer\" formaction=\"{{path('genres_supprimer')}}\" onclick=\"return confirm('Voulez-vous
\t\t\t\t\t\t\t\t\t\t\t\tvraiment supprimer ce genre ?');\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash-o \"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"txtLibGenre\" name=\"txtLibGenre\" size=\"24\" required minlength=\"4\" maxlength=\"24\" value=\"{{ genre.libelle }}\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t{{ genre.nbJeux }}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"validerModifierGenre\" title=\"Enregistrer\" formaction=\"{{path('genres_validermodifier')}}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-save\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info btn-xs\" type=\"reset\" title=\"Effacer
\t\t\t\t\t\t\t\t\t\t\tla saisie\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eraser\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-warning btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"annulerModifierGenre\" title=\"Annuler\" formaction=\"{{path('genres_afficher')}}\">
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
<!-- fin div panel-body--></section><!-- fin section genres--></div><!--fin div col-sm-8-->{% endblock %}
", "lesGenres.html.twig", "C:\\wamp64\\www\\agorabo7\\templates\\lesGenres.html.twig");
    }
}
