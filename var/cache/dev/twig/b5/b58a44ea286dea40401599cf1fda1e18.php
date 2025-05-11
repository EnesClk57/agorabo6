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

/* menu.html.twig */
class __TwigTemplate_01aa650a282de8d09bfe4f5078cdff53 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu.html.twig"));

        // line 1
        yield "<!--
**************************************************************************************
********************************************************************
 MAIN SIDEBAR MENU

**************************************************************************************
********************************************************************* -->
        <!--sidebar start-->
        <aside>
            <div id=\"sidebar\" class=\"nav-collapse \">
 <!-- sidebar menu start-->
                 <ul class=\"sidebar-menu\" id=\"nav-accordion\">
                    <p class=\"centered\"><a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\"><img src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/greece-1162816_640.jpg"), "html", null, true);
        // line 14
        yield "\" class=\"img-circle\" width=\"80\"></a></p>
                    <h5 class=\"centered\">MJC Agora</h5>
                    <li class=\"sub-menu\">
                     <a
                        ";
        // line 18
        if ((array_key_exists("menuActif", $context) && ((isset($context["menuActif"]) || array_key_exists("menuActif", $context) ? $context["menuActif"] : (function () { throw new RuntimeError('Variable "menuActif" does not exist.', 18, $this->source); })()) == "Jeux"))) {
            yield " class=\"active\" ";
        }
        // line 19
        yield "                        href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\" ><i class=\"fa fa-desktop\"></i>
 <span>Jeux vidéos</span>
 </a>
 <ul class=\"sub\">
 <li><a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_jeux");
        yield "\">Jeux</a></li>
 <li><a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("genres_afficher");
        yield "\">Genres</a></li>
 <li><a
href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plateformes_afficher");
        yield "\">Plateformes</a></li>
 <li><a
href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marques_afficher");
        yield "\">Marques</a></li>
 <li><a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pegis_afficher");
        yield "\">Pegi</a></li>
";
        // line 30
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30)) {
            // line 31
            yield "<li><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tournois");
            yield "\">Tournois</a></li>
";
        }
        // line 33
        yield " </ul>

";
        // line 35
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 36
            yield "<li class=\"menu\">
<a href=\"";
            // line 37
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_membres_index");
            yield "\">
<i class=\"fa fa-user\"></i>
<span>Membres</span>
</a>
</li>
<li class=\"sub-menu\">
<a";
            // line 43
            if ((array_key_exists("menuActif", $context) && ((isset($context["menuActif"]) || array_key_exists("menuActif", $context) ? $context["menuActif"] : (function () { throw new RuntimeError('Variable "menuActif" does not exist.', 43, $this->source); })()) == "Gestion"))) {
                // line 44
                yield "class=\"active\" ";
            }
            yield " href=\"javascript:;\" >
<i class=\"fa fa-user\"></i>
<span>Gestion</span>
</a>
<ul class=\"sub\">
<li><a href=\"";
            // line 49
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_membres_index");
            yield "\">Membres</a></li>
<li><a href=\"";
            // line 50
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cat_tournois");
            yield "\">Catégorie de
tournois</a></li>
</ul>
</li>
<li class=\"menu\">
<a href=\"";
            // line 55
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stages_index");
            yield "\">
<i class=\"fa fa-th\"></i>
<span>Stages</span>
</a>
</li>

";
        }
        // line 62
        yield " </li>
 <li class=\"sub-menu\">
 <a
 ";
        // line 65
        if ((array_key_exists("menuActif", $context) && ((isset($context["menuActif"]) || array_key_exists("menuActif", $context) ? $context["menuActif"] : (function () { throw new RuntimeError('Variable "menuActif" does not exist.', 65, $this->source); })()) == "Clubs"))) {
            yield " class=\"active\"
";
        }
        // line 67
        yield " href=\"javascript:;\">
 <i class=\"fa fa-group\"></i>
 <span>Clubs d'activités</span>
 </a>
 <ul class=\"sub\">
 <li><a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">sous-menu 1</a></li>
 <li><a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">sous-menu 2</a></li>
 <li><a href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">sous-menu 3</a></li>
 <li><a href=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">sous-menu 4</a></li>
 <li><a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">sous-menu 5</a></li>
 </ul>
 </li>

 <li class=\"sub-menu\">
 <a
 ";
        // line 82
        if ((array_key_exists("menuActif", $context) && ((isset($context["menuActif"]) || array_key_exists("menuActif", $context) ? $context["menuActif"] : (function () { throw new RuntimeError('Variable "menuActif" does not exist.', 82, $this->source); })()) == "Formations"))) {
            // line 83
            yield "class=\"active\" ";
        }
        // line 84
        yield " href=\"javascript:;\">
 <i class=\"fa fa-th\"></i>
 <span>Formations</span>
 </a>
 <ul class=\"sub\">
        <li><a href=\"";
        // line 89
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">sous-menu 1</a></li>
        <li><a href=\"";
        // line 90
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">sous-menu 2</a></li>
        <li><a href=\"";
        // line 91
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">sous-menu 3</a></li>
        <li><a href=\"";
        // line 92
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">sous-menu 4</a></li>
        <li><a href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">sous-menu 5</a></li>
    </ul>
 </li>
 <li class=\"sub-menu\">
 <a
 ";
        // line 98
        if ((array_key_exists("menuActif", $context) && ((isset($context["menuActif"]) || array_key_exists("menuActif", $context) ? $context["menuActif"] : (function () { throw new RuntimeError('Variable "menuActif" does not exist.', 98, $this->source); })()) == "Membres"))) {
            yield " class=\"active\"
";
        }
        // line 100
        yield " href=\"javascript:;\">
 <i class=\"fa fa-user-md\"></i>
 <span>Membres</span>
 </a>
 <ul class=\"sub\">
        <li><a href=\"";
        // line 105
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">sous-menu 1</a></li>
        <li><a href=\"";
        // line 106
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">sous-menu 2</a></li>
        <li><a href=\"";
        // line 107
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">sous-menu 3</a></li>
        <li><a href=\"";
        // line 108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">sous-menu 4</a></li>
        <li><a href=\"";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">sous-menu 5</a></li>
    </ul>
 </li>

     <li class=\"sub-menu\">
        <a
            ";
        // line 115
        if ((array_key_exists("menuActif", $context) && ((isset($context["menuActif"]) || array_key_exists("menuActif", $context) ? $context["menuActif"] : (function () { throw new RuntimeError('Variable "menuActif" does not exist.', 115, $this->source); })()) == "Intervenants"))) {
            // line 116
            yield "class=\"active\" ";
        }
        // line 117
        yield "            href=\"javascript:;\">
            <i class=\"fa fa-smile-o\"></i>
            <span>Intervenants</span>
            </a>
         <ul class=\"sub\">
            <li><a href=\"";
        // line 122
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">sous-menu 1</a></li>
            <li><a href=\"";
        // line 123
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">sous-menu 2</a></li>
            <li><a href=\"";
        // line 124
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">sous-menu 3</a></li>
            <li><a href=\"";
        // line 125
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">sous-menu 4</a></li>
            <li><a href=\"";
        // line 126
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">sous-menu 5</a></li>
 </ul>
 </li>
 </ul>
 <!-- sidebar menu end-->
 </div>
 </aside>
 <!--sidebar end-->
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
        return "menu.html.twig";
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
        return array (  308 => 126,  304 => 125,  300 => 124,  296 => 123,  292 => 122,  285 => 117,  282 => 116,  280 => 115,  271 => 109,  267 => 108,  263 => 107,  259 => 106,  255 => 105,  248 => 100,  243 => 98,  235 => 93,  231 => 92,  227 => 91,  223 => 90,  219 => 89,  212 => 84,  209 => 83,  207 => 82,  198 => 76,  194 => 75,  190 => 74,  186 => 73,  182 => 72,  175 => 67,  170 => 65,  165 => 62,  155 => 55,  147 => 50,  143 => 49,  134 => 44,  132 => 43,  123 => 37,  120 => 36,  118 => 35,  114 => 33,  108 => 31,  106 => 30,  102 => 29,  98 => 28,  93 => 26,  88 => 24,  84 => 23,  76 => 19,  72 => 18,  66 => 14,  62 => 13,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!--
**************************************************************************************
********************************************************************
 MAIN SIDEBAR MENU

**************************************************************************************
********************************************************************* -->
        <!--sidebar start-->
        <aside>
            <div id=\"sidebar\" class=\"nav-collapse \">
 <!-- sidebar menu start-->
                 <ul class=\"sidebar-menu\" id=\"nav-accordion\">
                    <p class=\"centered\"><a href=\"{{path('accueil')}}\"><img src=\"{{
asset('assets/img/greece-1162816_640.jpg') }}\" class=\"img-circle\" width=\"80\"></a></p>
                    <h5 class=\"centered\">MJC Agora</h5>
                    <li class=\"sub-menu\">
                     <a
                        {% if menuActif is defined and menuActif == 'Jeux' %} class=\"active\" {% endif %}
                        href=\"{{path('accueil')}}\" ><i class=\"fa fa-desktop\"></i>
 <span>Jeux vidéos</span>
 </a>
 <ul class=\"sub\">
 <li><a href=\"{{path('app_jeux')}}\">Jeux</a></li>
 <li><a href=\"{{path('genres_afficher')}}\">Genres</a></li>
 <li><a
href=\"{{path('plateformes_afficher')}}\">Plateformes</a></li>
 <li><a
href=\"{{path('marques_afficher')}}\">Marques</a></li>
 <li><a href=\"{{path('pegis_afficher')}}\">Pegi</a></li>
{% if app.user %}
<li><a href=\"{{path('app_tournois')}}\">Tournois</a></li>
{% endif %}
 </ul>

{% if is_granted('ROLE_ADMIN') %}
<li class=\"menu\">
<a href=\"{{path('app_membres_index')}}\">
<i class=\"fa fa-user\"></i>
<span>Membres</span>
</a>
</li>
<li class=\"sub-menu\">
<a{% if menuActif is defined and menuActif == 'Gestion' %}
class=\"active\" {% endif %} href=\"javascript:;\" >
<i class=\"fa fa-user\"></i>
<span>Gestion</span>
</a>
<ul class=\"sub\">
<li><a href=\"{{path('app_membres_index')}}\">Membres</a></li>
<li><a href=\"{{path('app_cat_tournois')}}\">Catégorie de
tournois</a></li>
</ul>
</li>
<li class=\"menu\">
<a href=\"{{path('app_stages_index')}}\">
<i class=\"fa fa-th\"></i>
<span>Stages</span>
</a>
</li>

{% endif %}
 </li>
 <li class=\"sub-menu\">
 <a
 {% if menuActif is defined and menuActif == 'Clubs' %} class=\"active\"
{% endif %}
 href=\"javascript:;\">
 <i class=\"fa fa-group\"></i>
 <span>Clubs d'activités</span>
 </a>
 <ul class=\"sub\">
 <li><a href=\"{{path('accueil')}}\">sous-menu 1</a></li>
 <li><a href=\"{{path('accueil')}}\">sous-menu 2</a></li>
 <li><a href=\"{{path('accueil')}}\">sous-menu 3</a></li>
 <li><a href=\"{{path('accueil')}}\">sous-menu 4</a></li>
 <li><a href=\"{{path('accueil')}}\">sous-menu 5</a></li>
 </ul>
 </li>

 <li class=\"sub-menu\">
 <a
 {% if menuActif is defined and menuActif == 'Formations' %}
class=\"active\" {% endif %}
 href=\"javascript:;\">
 <i class=\"fa fa-th\"></i>
 <span>Formations</span>
 </a>
 <ul class=\"sub\">
        <li><a href=\"{{path('accueil')}}\">sous-menu 1</a></li>
        <li><a href=\"{{path('accueil')}}\">sous-menu 2</a></li>
        <li><a href=\"{{path('accueil')}}\">sous-menu 3</a></li>
        <li><a href=\"{{path('accueil')}}\">sous-menu 4</a></li>
        <li><a href=\"{{path('accueil')}}\">sous-menu 5</a></li>
    </ul>
 </li>
 <li class=\"sub-menu\">
 <a
 {% if menuActif is defined and menuActif == 'Membres' %} class=\"active\"
{% endif %}
 href=\"javascript:;\">
 <i class=\"fa fa-user-md\"></i>
 <span>Membres</span>
 </a>
 <ul class=\"sub\">
        <li><a href=\"{{path('accueil')}}\">sous-menu 1</a></li>
        <li><a href=\"{{path('accueil')}}\">sous-menu 2</a></li>
        <li><a href=\"{{path('accueil')}}\">sous-menu 3</a></li>
        <li><a href=\"{{path('accueil')}}\">sous-menu 4</a></li>
        <li><a href=\"{{path('accueil')}}\">sous-menu 5</a></li>
    </ul>
 </li>

     <li class=\"sub-menu\">
        <a
            {% if menuActif is defined and menuActif == 'Intervenants' %}
class=\"active\" {% endif %}
            href=\"javascript:;\">
            <i class=\"fa fa-smile-o\"></i>
            <span>Intervenants</span>
            </a>
         <ul class=\"sub\">
            <li><a href=\"{{path('accueil')}}\">sous-menu 1</a></li>
            <li><a href=\"{{path('accueil')}}\">sous-menu 2</a></li>
            <li><a href=\"{{path('accueil')}}\">sous-menu 3</a></li>
            <li><a href=\"{{path('accueil')}}\">sous-menu 4</a></li>
            <li><a href=\"{{path('accueil')}}\">sous-menu 5</a></li>
 </ul>
 </li>
 </ul>
 <!-- sidebar menu end-->
 </div>
 </aside>
 <!--sidebar end-->
{# {% endblock %}#}", "menu.html.twig", "C:\\wamp64\\www\\agorabo7\\templates\\menu.html.twig");
    }
}
