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

/* lesPlateformes.html.twig */
class __TwigTemplate_de7787448424b511e695e6936a428e09 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lesPlateformes.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lesPlateformes.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "lesPlateformes.html.twig", 1);
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
\t\t\t\t\tGérer les plateformes</h3>
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
\t\t\t\t\t\t\t\tPlateforme</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 24
        yield Twig\Extension\CoreExtension::include($this->env, $context, "messages.html.twig");
        yield "
\t\t\t\t\t\t<!-- formulaire pour ajouter une nouvelle plateforme-->
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<form action=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plateformes_ajouter");
        yield "\" method=\"post\">
\t\t\t\t\t\t\t\t<td>Nouveau</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"txtLibPlateforme\" name=\"txtLibPlateforme\" size=\"24\" required minlength=\"4\" maxlength=\"24\" placeholder=\"Plateforme\" title=\"De 4 à 24 caractères\"/>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"ajouterNouvellePlateforme\" title=\"Enregistrer nouvelle plateforme\"> <i class=\"fa fa-save\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info btn-xs\" type=\"reset\" title=\"Effacer la saisie\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eraser\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tbPlateformes"]) || array_key_exists("tbPlateformes", $context) ? $context["tbPlateformes"] : (function () { throw new RuntimeError('Variable "tbPlateformes" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["plateforme"]) {
            // line 41
            yield "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<!-- formulaire pour modifier et supprimer les plateformes-->
\t\t\t\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t\t\t\t<td>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plateforme"], "identifiant", [], "any", false, false, false, 44), "html", null, true);
            yield "<input type=\"hidden\" name=\"txtIdPlateforme\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plateforme"], "identifiant", [], "any", false, false, false, 44), "html", null, true);
            yield "\"/></td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
            // line 46
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["plateforme"], "identifiant", [], "any", false, false, false, 46) != (isset($context["idPlateformeModif"]) || array_key_exists("idPlateformeModif", $context) ? $context["idPlateformeModif"] : (function () { throw new RuntimeError('Variable "idPlateformeModif" does not exist.', 46, $this->source); })()))) {
                // line 47
                yield "\t\t\t\t\t\t\t\t\t\t\t";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plateforme"], "libelle", [], "any", false, false, false, 47), "html", null, true);
                yield "</td>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
                // line 50
                if ((((isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 50, $this->source); })()) != "rien") && (CoreExtension::getAttribute($this->env, $this->source, $context["plateforme"], "identifiant", [], "any", false, false, false, 50) == (isset($context["idPlateformeNotif"]) || array_key_exists("idPlateformeNotif", $context) ? $context["idPlateformeNotif"] : (function () { throw new RuntimeError('Variable "idPlateformeNotif" does not exist.', 50, $this->source); })())))) {
                    // line 51
                    yield "\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success btn-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-check\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 53
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 53, $this->source); })()), "html", null, true);
                    yield "</button>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 55
                yield "\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"demanderModifierPlateforme\" title=\"Modifier\"formaction=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plateformes_demandermodifier");
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"supprimerPlateforme\" title=\"Supprimer\" formaction=\"";
                // line 58
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plateformes_supprimer");
                yield "\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette
\t\t\t\t\t\t\t\t\t\t\t\tplateforme ?');\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash-o \"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
            } else {
                // line 64
                yield "\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"txtLibPlateforme\" name=\"txtLibPlateforme\" size=\"24\" required minlength=\"4\" maxlength=\"24\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plateforme"], "libelle", [], "any", false, false, false, 64), "html", null, true);
                yield "\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t <td>
\t\t\t\t\t\t\t\t\t <button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\"
\t\t\t\t\t\t\t\t\tvalue=\"validerModifierPlateforme\" title=\"Enregistrer\" formaction=\"";
                // line 68
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plateformes_validermodifier");
                yield "\" ><i class=\"fa fa-save\"></i></button>
\t\t\t\t\t\t\t\t\t <button class=\"btn btn-info btn-xs\" type=\"reset\" title=\"Effacer la saisie\"><i
\t\t\t\t\t\t\t\t\tclass=\"fa fa-eraser\"></i></button>
\t\t\t\t\t\t\t\t\t <button class=\"btn btn-warning btn-xs\" type=\"submit\" name=\"cmdAction\"
\t\t\t\t\t\t\t\t\tvalue=\"annulerModifierPlateforme\" title=\"Annuler\" formaction=\"";
                // line 72
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plateformes_afficher");
                yield "\"><i class=\"fa fa-undo\"></i></button>
\t\t\t\t\t\t\t\t\t </td>
\t\t\t\t\t\t\t\t\t ";
            }
            // line 75
            yield "\t\t\t\t\t\t\t\t\t </form>
\t\t\t\t\t\t\t\t\t </tr>
\t\t\t\t\t\t\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['plateforme'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        yield "\t\t\t\t\t\t\t\t\t </tbody>
\t\t\t\t\t\t\t\t\t </table>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t </div><!-- fin div panel-body-->
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</section><!-- fin section genres--></tbody>
\t\t\t\t</div>
\t\t\t\t<!--fin div col-sm-8-->
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "lesPlateformes.html.twig";
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
        return array (  202 => 78,  194 => 75,  188 => 72,  181 => 68,  173 => 64,  164 => 58,  157 => 55,  152 => 53,  148 => 51,  146 => 50,  139 => 47,  137 => 46,  130 => 44,  125 => 41,  121 => 40,  105 => 27,  99 => 24,  76 => 3,  63 => 2,  40 => 1,);
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
\t\t\t\t\tGérer les plateformes</h3>
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
\t\t\t\t\t\t\t\tPlateforme</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t{{ include('messages.html.twig') }}
\t\t\t\t\t\t<!-- formulaire pour ajouter une nouvelle plateforme-->
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<form action=\"{{path('plateformes_ajouter')}}\" method=\"post\">
\t\t\t\t\t\t\t\t<td>Nouveau</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"txtLibPlateforme\" name=\"txtLibPlateforme\" size=\"24\" required minlength=\"4\" maxlength=\"24\" placeholder=\"Plateforme\" title=\"De 4 à 24 caractères\"/>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"ajouterNouvellePlateforme\" title=\"Enregistrer nouvelle plateforme\"> <i class=\"fa fa-save\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-info btn-xs\" type=\"reset\" title=\"Effacer la saisie\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eraser\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% for key, plateforme in tbPlateformes %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<!-- formulaire pour modifier et supprimer les plateformes-->
\t\t\t\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t\t\t\t<td>{{ plateforme.identifiant }}<input type=\"hidden\" name=\"txtIdPlateforme\" value=\"{{ plateforme.identifiant }}\"/></td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t{% if plateforme.identifiant != idPlateformeModif %}
\t\t\t\t\t\t\t\t\t\t\t{{ plateforme.libelle }}</td>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t{% if notification != 'rien' and plateforme.identifiant == idPlateformeNotif %}
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success btn-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-check\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t{{notification }}</button>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"demanderModifierPlateforme\" title=\"Modifier\"formaction=\"{{path('plateformes_demandermodifier')}}\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-danger btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"supprimerPlateforme\" title=\"Supprimer\" formaction=\"{{path('plateformes_supprimer')}}\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette
\t\t\t\t\t\t\t\t\t\t\t\tplateforme ?');\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-trash-o \"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"txtLibPlateforme\" name=\"txtLibPlateforme\" size=\"24\" required minlength=\"4\" maxlength=\"24\" value=\"{{ plateforme.libelle }}\"/>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t <td>
\t\t\t\t\t\t\t\t\t <button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\"
\t\t\t\t\t\t\t\t\tvalue=\"validerModifierPlateforme\" title=\"Enregistrer\" formaction=\"{{path('plateformes_validermodifier')}}\" ><i class=\"fa fa-save\"></i></button>
\t\t\t\t\t\t\t\t\t <button class=\"btn btn-info btn-xs\" type=\"reset\" title=\"Effacer la saisie\"><i
\t\t\t\t\t\t\t\t\tclass=\"fa fa-eraser\"></i></button>
\t\t\t\t\t\t\t\t\t <button class=\"btn btn-warning btn-xs\" type=\"submit\" name=\"cmdAction\"
\t\t\t\t\t\t\t\t\tvalue=\"annulerModifierPlateforme\" title=\"Annuler\" formaction=\"{{path('plateformes_afficher')}}\"><i class=\"fa fa-undo\"></i></button>
\t\t\t\t\t\t\t\t\t </td>
\t\t\t\t\t\t\t\t\t {% endif %}
\t\t\t\t\t\t\t\t\t </form>
\t\t\t\t\t\t\t\t\t </tr>
\t\t\t\t\t\t\t\t\t {% endfor %}
\t\t\t\t\t\t\t\t\t </tbody>
\t\t\t\t\t\t\t\t\t </table>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t </div><!-- fin div panel-body-->
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</section><!-- fin section genres--></tbody>
\t\t\t\t</div>
\t\t\t\t<!--fin div col-sm-8-->
\t\t\t{% endblock %}

", "lesPlateformes.html.twig", "C:\\wamp64\\www\\agorabo7\\templates\\lesPlateformes.html.twig");
    }
}
