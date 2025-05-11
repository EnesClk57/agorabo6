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

/* lesJeux.html.twig */
class __TwigTemplate_9b52e94ecf016fade3580e4ebabd188c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lesJeux.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lesJeux.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "lesJeux.html.twig", 1);
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
        yield "<!-- page start-->
<div class=\"col-sm-12\">
\t<section class=\"panel\">
\t\t<div class=\"chat-room-head\">
\t\t\t<h3>
\t\t\t\t<i class=\"fa fa-angle-right\"></i>
\t\t\t\tGérer les Jeux</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<table class=\"table table-striped table-advance table-hover\">
\t\t\t\t<thead>
\t\t\t\t\t<tr class=\"tableau-entete\">
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t<i class=\"fa fa-bullhorn\"></i>
\t\t\t\t\t\t\tIdentifiant</th>
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t<i class=\"fa fa-bookmark\"></i>
\t\t\t\t\t\t\tPlateforme</th>
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t<i class=\"fa fa-bookmark\"></i>
\t\t\t\t\t\t\tPegi</th>
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t<i class=\"fa fa-bookmark\"></i>
\t\t\t\t\t\t\tGenre</th>
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t<i class=\"fa fa-bookmark\"></i>
\t\t\t\t\t\t\tMarque</th>
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t<i class=\"fa fa-bookmark\"></i>
\t\t\t\t\t\t\tNom</th>
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t<i class=\"fa fa-bookmark\"></i>
\t\t\t\t\t\t\tPrix</th>
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t<i class=\"fa fa-bookmark\"></i>
\t\t\t\t\t\t\tDate Sortie</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t";
        // line 42
        yield Twig\Extension\CoreExtension::include($this->env, $context, "messages.html.twig");
        yield "
\t\t\t\t\t<!-- formulaire pour ajouter un nouveau Plateforme-->
\t\t\t\t\t<tr>
\t\t\t\t\t\t<form action=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeux_ajouter");
        yield "\" method=\"post\">
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"txtRefJeu\" name=\"txtRefJeu\" size=\"24\" required minlength=\"1\" placeholder=\"refJeu\" title=\"2 Caractères maximum\"/>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
        // line 50
        [$context["tbObjets"], $context["name"], $context["size"], $context["idSelect"]] =         [(isset($context["tbPlateformes"]) || array_key_exists("tbPlateformes", $context) ? $context["tbPlateformes"] : (function () { throw new RuntimeError('Variable "tbPlateformes" does not exist.', 50, $this->source); })()), "txtIdPlateformeJeu", 1, ""];
        // line 51
        yield "\t\t\t\t\t\t\t\t";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "liste.html.twig");
        yield "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
        // line 54
        [$context["tbObjets"], $context["name"], $context["size"], $context["idSelect"]] =         [(isset($context["tbPegis"]) || array_key_exists("tbPegis", $context) ? $context["tbPegis"] : (function () { throw new RuntimeError('Variable "tbPegis" does not exist.', 54, $this->source); })()), "txtIdPegiJeu", 1, ""];
        // line 55
        yield "\t\t\t\t\t\t\t\t";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "liste.html.twig");
        yield "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
        // line 58
        [$context["tbObjets"], $context["name"], $context["size"], $context["idSelect"]] =         [(isset($context["tbGenres"]) || array_key_exists("tbGenres", $context) ? $context["tbGenres"] : (function () { throw new RuntimeError('Variable "tbGenres" does not exist.', 58, $this->source); })()), "txtIdGenreJeu", 1, ""];
        // line 59
        yield "\t\t\t\t\t\t\t\t";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "liste.html.twig");
        yield "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
        // line 62
        [$context["tbObjets"], $context["name"], $context["size"], $context["idSelect"]] =         [(isset($context["tbMarques"]) || array_key_exists("tbMarques", $context) ? $context["tbMarques"] : (function () { throw new RuntimeError('Variable "tbMarques" does not exist.', 62, $this->source); })()), "txtIdMarqueJeu", 1, ""];
        // line 63
        yield "\t\t\t\t\t\t\t\t";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "liste.html.twig");
        yield "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"txtNomJeu\" name=\"txtNomJeu\" size=\"20\" required minlength=\"1\" maxlength=\"100\" placeholder=\"Nom\" title=\"Saisir un identifiant valide\"/>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"number\" id=\"prixJeu\" name=\"prixJeu\" size=\"5\" step=\"any\" required maxlength=\"100\" placeholder=\"Prix \" title=\"Saisir un montant valide\"/>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"date\" id=\"txtDateParutionJeu\" name=\"txtDateParutionJeu\" size=\"5\" required minlength=\"1\" maxlength=\"10\" placeholder=\"Date\" title=\"Saisir une date valide\"/>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"ajouterNouveauJeu\" title=\"Enregistrer nouvelle Jeu\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-save\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<button class=\"btn btn-info btn-xs\" type=\"reset\" title=\"Effacer la saisie\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eraser\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</form>
\t\t</tr>
\t\t";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["tbJeux"]) || array_key_exists("tbJeux", $context) ? $context["tbJeux"] : (function () { throw new RuntimeError('Variable "tbJeux" does not exist.', 87, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["jeu"]) {
            // line 88
            yield "\t\t\t<tr>
\t\t\t\t<!-- formulaire pour modifier et supprimer les jeux-->
\t\t\t\t<form method=\"post\">
\t\t\t\t\t<td>";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jeu"], "identifiant", [], "any", false, false, false, 91), "html", null, true);
            yield "<input type=\"hidden\" name=\"txtRefJeu\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jeu"], "identifiant", [], "any", false, false, false, 91), "html", null, true);
            yield "\"/></td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 93
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["jeu"], "identifiant", [], "any", false, false, false, 93) != (isset($context["idJeuModif"]) || array_key_exists("idJeuModif", $context) ? $context["idJeuModif"] : (function () { throw new RuntimeError('Variable "idJeuModif" does not exist.', 93, $this->source); })()))) {
                // line 94
                yield "\t\t\t\t\t\t\t";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jeu"], "libPlateforme", [], "any", false, false, false, 94), "html", null, true);
                yield "</td>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jeu"], "ageLimite", [], "any", false, false, false, 97), "html", null, true);
                yield "
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jeu"], "libGenre", [], "any", false, false, false, 100), "html", null, true);
                yield "
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jeu"], "nomMarque", [], "any", false, false, false, 103), "html", null, true);
                yield "
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
                // line 106
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jeu"], "libelle", [], "any", false, false, false, 106), "html", null, true);
                yield "
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
                // line 109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jeu"], "prix", [], "any", false, false, false, 109), "html", null, true);
                yield "
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jeu"], "dateParution", [], "any", false, false, false, 112), "html", null, true);
                yield "
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
                // line 115
                if ((((isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 115, $this->source); })()) != "rien") && (CoreExtension::getAttribute($this->env, $this->source, $context["jeu"], "identifiant", [], "any", false, false, false, 115) == (isset($context["idJeuNotif"]) || array_key_exists("idJeuNotif", $context) ? $context["idJeuNotif"] : (function () { throw new RuntimeError('Variable "idJeuNotif" does not exist.', 115, $this->source); })())))) {
                    // line 116
                    yield "\t\t\t\t\t\t\t<button class=\"btn btn-success btn-xs\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-check\"></i>
\t\t\t\t\t\t\t\t";
                    // line 118
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["notification"]) || array_key_exists("notification", $context) ? $context["notification"] : (function () { throw new RuntimeError('Variable "notification" does not exist.', 118, $this->source); })()), "html", null, true);
                    yield "</button>
\t\t\t\t\t\t";
                }
                // line 120
                yield "\t\t\t\t\t\t<button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"demanderModifierJeu\" title=\"Modifier\" formaction=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeux_demandermodifier");
                yield "\">


\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<button class=\"btn btn-danger btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"supprimerJeu\" title=\"Supprimer\" formaction=\"";
                // line 125
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeux_supprimer");
                yield "\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmarque ?');\">
\t\t\t\t\t\t\t<i class=\"fa fa-trash-o \"></i>
\t\t\t\t\t\t</button>

\t\t\t\t\t</td>
\t\t\t\t";
            } else {
                // line 132
                yield "\t\t\t\t\t";
                [$context["tbObjets"], $context["name"], $context["size"], $context["idSelect"]] =                 [(isset($context["tbPlateformes"]) || array_key_exists("tbPlateformes", $context) ? $context["tbPlateformes"] : (function () { throw new RuntimeError('Variable "tbPlateformes" does not exist.', 132, $this->source); })()), "txtIdPlateformeJeu", 1, CoreExtension::getAttribute($this->env, $this->source, $context["jeu"], "idPlateforme", [], "any", false, false, false, 132)];
                // line 133
                yield "\t\t\t\t\t";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "liste.html.twig");
                yield "
\t\t\t\t\t<td>
\t\t\t\t\t\t";
                // line 135
                [$context["tbObjets"], $context["name"], $context["size"], $context["idSelect"]] =                 [(isset($context["tbPegis"]) || array_key_exists("tbPegis", $context) ? $context["tbPegis"] : (function () { throw new RuntimeError('Variable "tbPegis" does not exist.', 135, $this->source); })()), "txtIdPegiJeu", 1, CoreExtension::getAttribute($this->env, $this->source, $context["jeu"], "idPegi", [], "any", false, false, false, 135)];
                // line 136
                yield "\t\t\t\t\t\t";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "liste.html.twig");
                yield "
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
                // line 139
                [$context["tbObjets"], $context["name"], $context["size"], $context["idSelect"]] =                 [(isset($context["tbGenres"]) || array_key_exists("tbGenres", $context) ? $context["tbGenres"] : (function () { throw new RuntimeError('Variable "tbGenres" does not exist.', 139, $this->source); })()), "txtIdGenreJeu", 1, CoreExtension::getAttribute($this->env, $this->source, $context["jeu"], "idGenre", [], "any", false, false, false, 139)];
                // line 140
                yield "\t\t\t\t\t\t";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "liste.html.twig");
                yield "
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
                // line 143
                [$context["tbObjets"], $context["name"], $context["size"], $context["idSelect"]] =                 [(isset($context["tbMarques"]) || array_key_exists("tbMarques", $context) ? $context["tbMarques"] : (function () { throw new RuntimeError('Variable "tbMarques" does not exist.', 143, $this->source); })()), "txtIdMarqueJeu", 1, CoreExtension::getAttribute($this->env, $this->source, $context["jeu"], "idMarque", [], "any", false, false, false, 143)];
                // line 144
                yield "\t\t\t\t\t\t";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "liste.html.twig");
                yield "
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" id=\"txtNomJeu\" name=\"txtNomJeu\" size=\"20\" required minlength=\"1\" maxlength=\"100\" placeholder=\"Nom\" title=\"Saisir un identifiant valide\" value=\"";
                // line 147
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jeu"], "libelle", [], "any", false, false, false, 147), "html", null, true);
                yield "\"/>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"number\" id=\"prixJeu\" name=\"prixJeu\" size=\"5\" step=\"any\" required maxlength=\"100\" placeholder=\"Prix \" title=\"Saisir un montant valide\" value=\"";
                // line 150
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jeu"], "prix", [], "any", false, false, false, 150), "html", null, true);
                yield "\"/>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"date\" id=\"txtDateParutionJeu\" name=\"txtDateParutionJeu\" size=\"5\" required minlength=\"1\" maxlength=\"10\" placeholder=\"Date\" title=\"Saisir une date valide\" value=\"";
                // line 153
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jeu"], "dateParution", [], "any", false, false, false, 153), "html", null, true);
                yield "\"/>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"validerModifierMarque\" title=\"Enregistrer\" formaction=\"";
                // line 156
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeux_validermodifier");
                yield "\">

\t\t\t\t\t\t\t<i class=\"fa fa-save\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<button class=\"btn btn-info btn-xs\" type=\"reset\" title=\"Effacer la saisie\">
\t\t\t\t\t\t\t<i class=\"fa fa-eraser\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<button class=\"btn btn-warning btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"annulerModifierMarque\" title=\"Annuler\" formaction=\"";
                // line 163
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeux_afficher");
                yield "\">
\t\t\t\t\t\t\t<i class=\"fa fa-undo\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</td>
\t\t\t\t";
            }
            // line 168
            yield "\t\t\t</tr>
\t\t</form>
\t</tbody>
</tr>";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['jeu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        yield "</tbody></table></div><!-- fin div panel-body--></td></tr></section><!-- fin section Pegis--></tbody></div><!--fin div col-sm-8-->";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "lesJeux.html.twig";
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
        return array (  381 => 171,  364 => 168,  356 => 163,  346 => 156,  340 => 153,  334 => 150,  328 => 147,  321 => 144,  319 => 143,  312 => 140,  310 => 139,  303 => 136,  301 => 135,  295 => 133,  292 => 132,  282 => 125,  273 => 120,  268 => 118,  264 => 116,  262 => 115,  256 => 112,  250 => 109,  244 => 106,  238 => 103,  232 => 100,  226 => 97,  219 => 94,  217 => 93,  210 => 91,  205 => 88,  188 => 87,  160 => 63,  158 => 62,  151 => 59,  149 => 58,  142 => 55,  140 => 54,  133 => 51,  131 => 50,  123 => 45,  117 => 42,  76 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block central %}
<!-- page start-->
<div class=\"col-sm-12\">
\t<section class=\"panel\">
\t\t<div class=\"chat-room-head\">
\t\t\t<h3>
\t\t\t\t<i class=\"fa fa-angle-right\"></i>
\t\t\t\tGérer les Jeux</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<table class=\"table table-striped table-advance table-hover\">
\t\t\t\t<thead>
\t\t\t\t\t<tr class=\"tableau-entete\">
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t<i class=\"fa fa-bullhorn\"></i>
\t\t\t\t\t\t\tIdentifiant</th>
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t<i class=\"fa fa-bookmark\"></i>
\t\t\t\t\t\t\tPlateforme</th>
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t<i class=\"fa fa-bookmark\"></i>
\t\t\t\t\t\t\tPegi</th>
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t<i class=\"fa fa-bookmark\"></i>
\t\t\t\t\t\t\tGenre</th>
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t<i class=\"fa fa-bookmark\"></i>
\t\t\t\t\t\t\tMarque</th>
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t<i class=\"fa fa-bookmark\"></i>
\t\t\t\t\t\t\tNom</th>
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t<i class=\"fa fa-bookmark\"></i>
\t\t\t\t\t\t\tPrix</th>
\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t<i class=\"fa fa-bookmark\"></i>
\t\t\t\t\t\t\tDate Sortie</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t{{ include('messages.html.twig') }}
\t\t\t\t\t<!-- formulaire pour ajouter un nouveau Plateforme-->
\t\t\t\t\t<tr>
\t\t\t\t\t\t<form action=\"{{path('jeux_ajouter')}}\" method=\"post\">
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"txtRefJeu\" name=\"txtRefJeu\" size=\"24\" required minlength=\"1\" placeholder=\"refJeu\" title=\"2 Caractères maximum\"/>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t{% set tbObjets, name, size, idSelect = tbPlateformes, 'txtIdPlateformeJeu', 1, '' %}
\t\t\t\t\t\t\t\t{{ include('liste.html.twig') }}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t{% set tbObjets, name, size, idSelect = tbPegis, 'txtIdPegiJeu', 1, '' %}
\t\t\t\t\t\t\t\t{{ include('liste.html.twig') }}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t{% set tbObjets, name, size, idSelect = tbGenres, 'txtIdGenreJeu', 1, '' %}
\t\t\t\t\t\t\t\t{{ include('liste.html.twig') }}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t{% set tbObjets, name, size, idSelect = tbMarques, 'txtIdMarqueJeu', 1, '' %}
\t\t\t\t\t\t\t\t{{ include('liste.html.twig') }}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"txtNomJeu\" name=\"txtNomJeu\" size=\"20\" required minlength=\"1\" maxlength=\"100\" placeholder=\"Nom\" title=\"Saisir un identifiant valide\"/>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"number\" id=\"prixJeu\" name=\"prixJeu\" size=\"5\" step=\"any\" required maxlength=\"100\" placeholder=\"Prix \" title=\"Saisir un montant valide\"/>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"date\" id=\"txtDateParutionJeu\" name=\"txtDateParutionJeu\" size=\"5\" required minlength=\"1\" maxlength=\"10\" placeholder=\"Date\" title=\"Saisir une date valide\"/>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"ajouterNouveauJeu\" title=\"Enregistrer nouvelle Jeu\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-save\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<button class=\"btn btn-info btn-xs\" type=\"reset\" title=\"Effacer la saisie\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-eraser\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</form>
\t\t</tr>
\t\t{% for key, jeu in tbJeux %}
\t\t\t<tr>
\t\t\t\t<!-- formulaire pour modifier et supprimer les jeux-->
\t\t\t\t<form method=\"post\">
\t\t\t\t\t<td>{{ jeu.identifiant }}<input type=\"hidden\" name=\"txtRefJeu\" value=\"{{ jeu.identifiant }}\"/></td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{% if jeu.identifiant != idJeuModif %}
\t\t\t\t\t\t\t{{ jeu.libPlateforme }}</td>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{{jeu.ageLimite}}
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{{jeu.libGenre}}
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{{jeu.nomMarque}}
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{{jeu.libelle}}
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{{jeu.prix}}
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{{jeu.dateParution}}
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{% if notification != 'rien' and jeu.identifiant == idJeuNotif %}
\t\t\t\t\t\t\t<button class=\"btn btn-success btn-xs\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-check\"></i>
\t\t\t\t\t\t\t\t{{ notification }}</button>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"demanderModifierJeu\" title=\"Modifier\" formaction=\"{{path('jeux_demandermodifier')}}\">


\t\t\t\t\t\t\t<i class=\"fa fa-pencil\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<button class=\"btn btn-danger btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"supprimerJeu\" title=\"Supprimer\" formaction=\"{{path('jeux_supprimer')}}\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tmarque ?');\">
\t\t\t\t\t\t\t<i class=\"fa fa-trash-o \"></i>
\t\t\t\t\t\t</button>

\t\t\t\t\t</td>
\t\t\t\t{% else %}
\t\t\t\t\t{% set tbObjets, name, size, idSelect = tbPlateformes, 'txtIdPlateformeJeu',1 , jeu.idPlateforme %}
\t\t\t\t\t{{ include('liste.html.twig') }}
\t\t\t\t\t<td>
\t\t\t\t\t\t{% set tbObjets, name, size, idSelect = tbPegis, 'txtIdPegiJeu', 1, jeu.idPegi %}
\t\t\t\t\t\t{{ include('liste.html.twig') }}
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{% set tbObjets, name, size, idSelect = tbGenres, 'txtIdGenreJeu', 1, jeu.idGenre %}
\t\t\t\t\t\t{{ include('liste.html.twig') }}
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{% set tbObjets, name, size, idSelect = tbMarques, 'txtIdMarqueJeu', 1, jeu.idMarque %}
\t\t\t\t\t\t{{ include('liste.html.twig') }}
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"text\" id=\"txtNomJeu\" name=\"txtNomJeu\" size=\"20\" required minlength=\"1\" maxlength=\"100\" placeholder=\"Nom\" title=\"Saisir un identifiant valide\" value=\"{{ jeu.libelle }}\"/>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"number\" id=\"prixJeu\" name=\"prixJeu\" size=\"5\" step=\"any\" required maxlength=\"100\" placeholder=\"Prix \" title=\"Saisir un montant valide\" value=\"{{ jeu.prix }}\"/>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input type=\"date\" id=\"txtDateParutionJeu\" name=\"txtDateParutionJeu\" size=\"5\" required minlength=\"1\" maxlength=\"10\" placeholder=\"Date\" title=\"Saisir une date valide\" value=\"{{ jeu.dateParution }}\"/>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<button class=\"btn btn-primary btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"validerModifierMarque\" title=\"Enregistrer\" formaction=\"{{path('jeux_validermodifier')}}\">

\t\t\t\t\t\t\t<i class=\"fa fa-save\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<button class=\"btn btn-info btn-xs\" type=\"reset\" title=\"Effacer la saisie\">
\t\t\t\t\t\t\t<i class=\"fa fa-eraser\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<button class=\"btn btn-warning btn-xs\" type=\"submit\" name=\"cmdAction\" value=\"annulerModifierMarque\" title=\"Annuler\" formaction=\"{{path('jeux_afficher')}}\">
\t\t\t\t\t\t\t<i class=\"fa fa-undo\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</td>
\t\t\t\t{% endif %}
\t\t\t</tr>
\t\t</form>
\t</tbody>
</tr>{% endfor %}</tbody></table></div><!-- fin div panel-body--></td></tr></section><!-- fin section Pegis--></tbody></div><!--fin div col-sm-8-->{% endblock %}
", "lesJeux.html.twig", "C:\\wamp64\\www\\agorabo7\\templates\\lesJeux.html.twig");
    }
}
