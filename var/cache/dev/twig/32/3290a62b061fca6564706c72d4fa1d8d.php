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

/* menu.html copy.twig */
class __TwigTemplate_cbc49d87eeb6e8d9fa9ff5fa6a222b3d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu.html copy.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu.html copy.twig"));

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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeux_afficher");
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
 </li>
 
</ul>

 <li class=\"sub-menu\">
 <a ";
        // line 39
        if ((array_key_exists("menuActif", $context) && ((isset($context["menuActif"]) || array_key_exists("menuActif", $context) ? $context["menuActif"] : (function () { throw new RuntimeError('Variable "menuActif" does not exist.', 39, $this->source); })()) == "Clubs"))) {
            yield " class=\"active\"
";
        }
        // line 41
        yield " href=\"javascript:;\">
 <i class=\"fa fa-group\"></i>
 <span>Clubs d'activités</span>
 </a>
 <ul class=\"sub\">
 <li><a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">sous-menu 1</a></li>
 <li><a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">sous-menu 2</a></li>
 <li><a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">sous-menu 3</a></li>
 <li><a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">sous-menu 4</a></li>
 <li><a href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">sous-menu 5</a></li>
 </ul>
 </li>

 <li class=\"sub-menu\">
 <a
 ";
        // line 56
        if ((array_key_exists("menuActif", $context) && ((isset($context["menuActif"]) || array_key_exists("menuActif", $context) ? $context["menuActif"] : (function () { throw new RuntimeError('Variable "menuActif" does not exist.', 56, $this->source); })()) == "Formations"))) {
            // line 57
            yield "class=\"active\" ";
        }
        // line 58
        yield " href=\"javascript:;\">
 <i class=\"fa fa-th\"></i>
 <span>Formations</span>
 </a>
 <ul class=\"sub\">
        <li><a href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">sous-menu 1</a></li>
        <li><a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">sous-menu 2</a></li>
        <li><a href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">sous-menu 3</a></li>
        <li><a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">sous-menu 4</a></li>
        <li><a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">sous-menu 5</a></li>
    </ul>
 </li>
 <li class=\"sub-menu\">
 <a
 ";
        // line 72
        if ((array_key_exists("menuActif", $context) && ((isset($context["menuActif"]) || array_key_exists("menuActif", $context) ? $context["menuActif"] : (function () { throw new RuntimeError('Variable "menuActif" does not exist.', 72, $this->source); })()) == "Membres"))) {
            yield " class=\"active\"
";
        }
        // line 74
        yield " href=\"javascript:;\">
 <i class=\"fa fa-user-md\"></i>
 <span>Membres</span>
 </a>
 <ul class=\"sub\">
        <li><a href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">sous-menu 1</a></li>
        <li><a href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">sous-menu 2</a></li>
        <li><a href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">sous-menu 3</a></li>
        <li><a href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">sous-menu 4</a></li>
        <li><a href=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">sous-menu 5</a></li>
    </ul>
 </li>

     <li class=\"sub-menu\">
        <a
            ";
        // line 89
        if ((array_key_exists("menuActif", $context) && ((isset($context["menuActif"]) || array_key_exists("menuActif", $context) ? $context["menuActif"] : (function () { throw new RuntimeError('Variable "menuActif" does not exist.', 89, $this->source); })()) == "Intervenants"))) {
            // line 90
            yield "class=\"active\" ";
        }
        // line 91
        yield "            href=\"javascript:;\">
            <i class=\"fa fa-smile-o\"></i>
            <span>Intervenants</span>
            </a>
         <ul class=\"sub\">
            <li><a href=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">sous-menu 1</a></li>
            <li><a href=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">sous-menu 2</a></li>
            <li><a href=\"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">sous-menu 3</a></li>
            <li><a href=\"";
        // line 99
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">sous-menu 4</a></li>
            <li><a href=\"";
        // line 100
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
        return "menu.html copy.twig";
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
        return array (  260 => 100,  256 => 99,  252 => 98,  248 => 97,  244 => 96,  237 => 91,  234 => 90,  232 => 89,  223 => 83,  219 => 82,  215 => 81,  211 => 80,  207 => 79,  200 => 74,  195 => 72,  187 => 67,  183 => 66,  179 => 65,  175 => 64,  171 => 63,  164 => 58,  161 => 57,  159 => 56,  150 => 50,  146 => 49,  142 => 48,  138 => 47,  134 => 46,  127 => 41,  122 => 39,  114 => 33,  108 => 31,  106 => 30,  102 => 29,  98 => 28,  93 => 26,  88 => 24,  84 => 23,  76 => 19,  72 => 18,  66 => 14,  62 => 13,  48 => 1,);
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
 <li><a href=\"{{path('jeux_afficher')}}\">Jeux</a></li>
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
 </li>
 
</ul>

 <li class=\"sub-menu\">
 <a {% if menuActif is defined and menuActif == 'Clubs' %} class=\"active\"
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
{# {% endblock %}#}", "menu.html copy.twig", "C:\\wamp64\\www\\agorabo7\\templates\\menu.html copy.twig");
    }
}
