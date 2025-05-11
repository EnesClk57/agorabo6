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

/* jeux/index.html.twig */
class __TwigTemplate_f6d841407f405563a42eb02a7275a000 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jeux/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jeux/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "jeux/index.html.twig", 1);
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

        yield "Jeux";
        
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
        yield "
    <div class=\"col-lg-12 contenu-blanc shadow-lg\">

    <h1>Les ";
        // line 9
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["lesJeux"]) || array_key_exists("lesJeux", $context) ? $context["lesJeux"] : (function () { throw new RuntimeError('Variable "lesJeux" does not exist.', 9, $this->source); })())) > "1")) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["lesJeux"]) || array_key_exists("lesJeux", $context) ? $context["lesJeux"] : (function () { throw new RuntimeError('Variable "lesJeux" does not exist.', 9, $this->source); })())), "html", null, true);
            yield " ";
        }
        yield " jeux</h1>
    ";
        // line 10
        yield Twig\Extension\CoreExtension::include($this->env, $context, "messages.html.twig");
        yield "

       ";
        // line 13
        yield "
    ";
        // line 14
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formRecherche"]) || array_key_exists("formRecherche", $context) ? $context["formRecherche"] : (function () { throw new RuntimeError('Variable "formRecherche" does not exist.', 14, $this->source); })()), 'form_start');
        yield "
        <div class=\"container-fluid contenu\">
        <div class=\"row\">
        <div class=\"col-md-8 row font-weight-bold\">
        <div class=\"col-md-6\">";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formRecherche"]) || array_key_exists("formRecherche", $context) ? $context["formRecherche"] : (function () { throw new RuntimeError('Variable "formRecherche" does not exist.', 18, $this->source); })()), "libelle", [], "any", false, false, false, 18), 'label');
        yield "</div>
        <div class=\"col-md-3\">";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formRecherche"]) || array_key_exists("formRecherche", $context) ? $context["formRecherche"] : (function () { throw new RuntimeError('Variable "formRecherche" does not exist.', 19, $this->source); })()), "prixMini", [], "any", false, false, false, 19), 'label');
        yield "</div>
        <div class=\"col-md-3\">";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formRecherche"]) || array_key_exists("formRecherche", $context) ? $context["formRecherche"] : (function () { throw new RuntimeError('Variable "formRecherche" does not exist.', 20, $this->source); })()), "prixMaxi", [], "any", false, false, false, 20), 'label');
        yield "</div>
    </div>
</div>
    <div class=\"row\">

    <div class=\"col-md-8 row\">
    <div class=\"col-md-6\">";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formRecherche"]) || array_key_exists("formRecherche", $context) ? $context["formRecherche"] : (function () { throw new RuntimeError('Variable "formRecherche" does not exist.', 26, $this->source); })()), "libelle", [], "any", false, false, false, 26), 'widget');
        yield "</div>
    <div class=\"col-md-3\">";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formRecherche"]) || array_key_exists("formRecherche", $context) ? $context["formRecherche"] : (function () { throw new RuntimeError('Variable "formRecherche" does not exist.', 27, $this->source); })()), "prixMini", [], "any", false, false, false, 27), 'widget');
        yield "</div>
    <div class=\"col-md-3\">";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formRecherche"]) || array_key_exists("formRecherche", $context) ? $context["formRecherche"] : (function () { throw new RuntimeError('Variable "formRecherche" does not exist.', 28, $this->source); })()), "prixMaxi", [], "any", false, false, false, 28), 'widget');
        yield "</div>
 </div>

    <div class=\"col-md-4\">
 <button class=\"btn btn-primary btn-sm\" type=\"submit\"
formaction=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jeux");
        yield "\" title=\"Afficher les jeux vidéo\"><i class=\"fa fasave\"></i> Afficher</button>
 <button class=\"btn btn-info btn-sm\" type=\"reset\" title=\"Effacer la saisie\"><i class=\"fa fa-eraser\"></i> Effacer</button>
     </div>
    </div>
 </div>
    ";
        // line 38
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formRecherche"]) || array_key_exists("formRecherche", $context) ? $context["formRecherche"] : (function () { throw new RuntimeError('Variable "formRecherche" does not exist.', 38, $this->source); })()), 'form_end');
        yield "

        <div class=\"container-fluid contenu\">
            <table class=\"table table-striped table-advance table-hover\">
                <thead>
                    <tr class=\"bg-entete\">
                        ";
        // line 45
        yield "                        <th><i class=\"fa fa-bullhorn\"></i> Référence</th>
                        <th><i class=\"fa fa-bookmark\"></i> Nom</th>
                        <th><i class=\"fa fa-eur\"></i> Prix</th>
                        <th><i class=\"fa fa-gamepad\"></i> Plateforme</th>
                        <th><i class=\"fa fa-bookmark\"></i> Pegi</th>
                        <th><i class=\"fa fa-bookmark\"></i> Genre</th>
                        <th><i class=\"fa fa-trademark\"></i> Marque</th>
                        <th><i class=\"fa fa-calendar\"></i> Parution</th>
                        <th>
                            <span class=\"pull-center\">
                                <a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jeux_ajouter");
        yield "\" class=\"btn btn-primary btn-sm\">
                                    <i class=\"fa fa-save\"></i> Ajouter nouveau produit
                                </a>
                            </span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["lesJeux"]) || array_key_exists("lesJeux", $context) ? $context["lesJeux"] : (function () { throw new RuntimeError('Variable "lesJeux" does not exist.', 63, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["jeux"]) {
            // line 64
            yield "                        <tr>
                            <td>";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jeux"], "refJeu", [], "any", false, false, false, 65), "html", null, true);
            yield "</td>
                            <td>";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jeux"], "nom", [], "any", false, false, false, 66), "html", null, true);
            yield "</td>
                            <td>";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["jeux"], "getPrix", [], "method", false, false, false, 67), 2, ",", " "), "html", null, true);
            yield "</td>
                            <td>";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jeux"], "plateforme", [], "any", false, false, false, 68), "getLibelle", [], "method", false, false, false, 68), "html", null, true);
            yield "</td>
                            <td>";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jeux"], "pegi", [], "any", false, false, false, 69), "getAgeLimite", [], "method", false, false, false, 69), "html", null, true);
            yield "</td>
                            <td>";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jeux"], "genre", [], "any", false, false, false, 70), "getLibelle", [], "method", false, false, false, 70), "html", null, true);
            yield "</td>
                            <td>";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jeux"], "marque", [], "any", false, false, false, 71), "getNom", [], "method", false, false, false, 71), "html", null, true);
            yield "</td>
                            <td>";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["jeux"], "dateParution", [], "any", false, false, false, 72), "d/m/Y"), "html", null, true);
            yield "</td>
                            <td class=\"row\">
                                <form>
                                    <button type=\"submit\" class=\"btn btn-primary btn-sm\" formaction=\" ";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jeux_modifier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["jeux"], "id", [], "any", false, false, false, 75)]), "html", null, true);
            yield " \" title=\"Modifier\">
                                        <i class=\"fa fa-pencil\"></i> Modifier
                                    </button>
                                    <button type=\"submit\" class=\"btn btn-danger btn-sm\" formaction=\" ";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jeux_supprimer", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["jeux"], "id", [], "any", false, false, false, 78)]), "html", null, true);
            yield " \" title=\"Supprimer\"
                                        onclick=\"return confirm('Voulez-vous vraiment supprimer ce jeux ?');\">
                                        <i class=\"fa fa-trash-o \"></i> Supprimer
                                    </button>
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("action-item" . CoreExtension::getAttribute($this->env, $this->source, $context["jeux"], "id", [], "any", false, false, false, 82))), "html", null, true);
            yield "\">
                                    ";
            // line 84
            yield "                                </form>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['jeux'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        yield "                </tbody>
            </table>
        </div>
    </div>
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
        return "jeux/index.html.twig";
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
        return array (  268 => 88,  259 => 84,  255 => 82,  248 => 78,  242 => 75,  236 => 72,  232 => 71,  228 => 70,  224 => 69,  220 => 68,  216 => 67,  212 => 66,  208 => 65,  205 => 64,  201 => 63,  190 => 55,  178 => 45,  169 => 38,  161 => 33,  153 => 28,  149 => 27,  145 => 26,  136 => 20,  132 => 19,  128 => 18,  121 => 14,  118 => 13,  113 => 10,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Jeux{% endblock %}

{% block body %}

    <div class=\"col-lg-12 contenu-blanc shadow-lg\">

    <h1>Les {% if (lesJeux | length) > '1'%} {{ lesJeux | length }} {% endif %} jeux</h1>
    {{ include('messages.html.twig') }}

       {# formulaire de recherche des produits #}

    {{ form_start(formRecherche) }}
        <div class=\"container-fluid contenu\">
        <div class=\"row\">
        <div class=\"col-md-8 row font-weight-bold\">
        <div class=\"col-md-6\">{{ form_label(formRecherche.libelle) }}</div>
        <div class=\"col-md-3\">{{ form_label(formRecherche.prixMini) }}</div>
        <div class=\"col-md-3\">{{ form_label(formRecherche.prixMaxi) }}</div>
    </div>
</div>
    <div class=\"row\">

    <div class=\"col-md-8 row\">
    <div class=\"col-md-6\">{{ form_widget(formRecherche.libelle) }}</div>
    <div class=\"col-md-3\">{{ form_widget(formRecherche.prixMini) }}</div>
    <div class=\"col-md-3\">{{ form_widget(formRecherche.prixMaxi) }}</div>
 </div>

    <div class=\"col-md-4\">
 <button class=\"btn btn-primary btn-sm\" type=\"submit\"
formaction=\"{{ path('app_jeux') }}\" title=\"Afficher les jeux vidéo\"><i class=\"fa fasave\"></i> Afficher</button>
 <button class=\"btn btn-info btn-sm\" type=\"reset\" title=\"Effacer la saisie\"><i class=\"fa fa-eraser\"></i> Effacer</button>
     </div>
    </div>
 </div>
    {{ form_end(formRecherche) }}

        <div class=\"container-fluid contenu\">
            <table class=\"table table-striped table-advance table-hover\">
                <thead>
                    <tr class=\"bg-entete\">
                        {# <th class=\"col-md-1\">Identifiant</th> #}
                        <th><i class=\"fa fa-bullhorn\"></i> Référence</th>
                        <th><i class=\"fa fa-bookmark\"></i> Nom</th>
                        <th><i class=\"fa fa-eur\"></i> Prix</th>
                        <th><i class=\"fa fa-gamepad\"></i> Plateforme</th>
                        <th><i class=\"fa fa-bookmark\"></i> Pegi</th>
                        <th><i class=\"fa fa-bookmark\"></i> Genre</th>
                        <th><i class=\"fa fa-trademark\"></i> Marque</th>
                        <th><i class=\"fa fa-calendar\"></i> Parution</th>
                        <th>
                            <span class=\"pull-center\">
                                <a href=\"{{ path('app_jeux_ajouter')}}\" class=\"btn btn-primary btn-sm\">
                                    <i class=\"fa fa-save\"></i> Ajouter nouveau produit
                                </a>
                            </span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    {% for key, jeux in lesJeux %}
                        <tr>
                            <td>{{ jeux.refJeu }}</td>
                            <td>{{ jeux.nom }}</td>
                            <td>{{ jeux.getPrix() | number_format(2, ',', ' ') }}</td>
                            <td>{{ jeux.plateforme.getLibelle() }}</td>
                            <td>{{ jeux.pegi.getAgeLimite() }}</td>
                            <td>{{ jeux.genre.getLibelle() }}</td>
                            <td>{{ jeux.marque.getNom() }}</td>
                            <td>{{ jeux.dateParution | date('d/m/Y') }}</td>
                            <td class=\"row\">
                                <form>
                                    <button type=\"submit\" class=\"btn btn-primary btn-sm\" formaction=\" {{ path('app_jeux_modifier', {'id' : jeux.id }) }} \" title=\"Modifier\">
                                        <i class=\"fa fa-pencil\"></i> Modifier
                                    </button>
                                    <button type=\"submit\" class=\"btn btn-danger btn-sm\" formaction=\" {{path('app_jeux_supprimer', {'id' : jeux.id }) }} \" title=\"Supprimer\"
                                        onclick=\"return confirm('Voulez-vous vraiment supprimer ce jeux ?');\">
                                        <i class=\"fa fa-trash-o \"></i> Supprimer
                                    </button>
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('action-item' ~ jeux.id) }}\">
                                    {# ~ pour concaténer des chaines en twig #}
                                </form>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}
", "jeux/index.html.twig", "C:\\wamp64\\www\\agorabo7\\templates\\jeux\\index.html.twig");
    }
}
