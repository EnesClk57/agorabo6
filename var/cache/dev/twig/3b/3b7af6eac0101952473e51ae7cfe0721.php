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

/* base.html.twig */
class __TwigTemplate_63f74dec6fd184592190b856aa18cdbb extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'menu' => [$this, 'block_menu'],
            'central' => [$this, 'block_central'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"author\" content=\"sio\">
\t\t<meta name=\"keyword\" content=\"MJC, Agora\">
\t\t<title>AgorA - Administration</title>
\t\t";
        // line 9
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 31
        yield "\t</head>
\t<body>
\t\t<section
\t\t\tid=\"container\">
\t\t\t<!--header start-->
\t\t\t<header class=\"header black-bg\">
\t\t\t\t<div class=\"sidebar-toggle-box\">
\t\t\t\t\t<div class=\"fa fa-bars tooltips\" data-placement=\"right\" data-original-title=\"Toggle
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNavigation\"></div>
\t\t\t\t</div>
\t\t\t\t<!--logo start-->
\t\t\t\t<a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\" class=\"logo\">
\t\t\t\t\t<b>Ago<span>rA</span>
\t\t\t\t\t</b>
\t\t\t\t</a>
\t\t\t\t<!--logo end-->
\t\t\t\t<div class=\"top-menu\">
\t\t\t\t\t<ul class=\"nav pull-right top-menu\">
\t\t\t\t\t\t";
        // line 49
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49)) {
            // line 50
            yield "\t\t\t\t\t\t\t<a href=\"\" class=\"userAgo\">
\t\t\t\t\t\t\t\t";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "getNomMembre", [], "method", false, false, false, 51), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "getPrenomMembre", [], "method", false, false, false, 52), "html", null, true);
            // line 53
            yield "</a>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"logout\" href=\"";
            // line 55
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deconnexion");
            yield "\">Se déconnecter</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        } else {
            // line 58
            yield "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"logout\" href=\"";
            // line 59
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
            yield "\">Se connecter</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        // line 62
        yield "
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</header>

\t\t\t";
        // line 67
        yield from $this->unwrap()->yieldBlock('menu', $context, $blocks);
        // line 72
        yield "\t\t\t<section id=\"main-content\">
\t\t\t\t<section class=\"wrapper\">
\t\t\t\t\t<div class=\"container-fluid\"> ";
        // line 74
        yield from $this->unwrap()->yieldBlock('central', $context, $blocks);
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 75
        yield "\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t</section>
\t\t\t\t<footer class=\"site-footer\">
\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<p>Crée par Logma avec le template bootstrap Dashio :&copy; Copyrights
\t\t\t\t\t\t\t<strong>Dashio</strong>. All Rights Reserved
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<div class=\"credits\">
\t\t\t\t\t\t\tCreated with Dashio template by
\t\t\t\t\t\t\t<a href=\"https://templatemag.com/\">TemplateMag</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"index.html#\" class=\"go-top\">
\t\t\t\t\t\t\t<i class=\"fa fa-angle-up\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</footer>
\t\t\t</section>
\t\t\t<!-- js placed at the end of the document so the pages load faster -->
\t\t\t<script src=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/jquery/jquery.min.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/bootstrap/js/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script class=\"include\" type=\"text/javascript\" src=\"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/jquery.dcjqaccordion.2.7.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/jquery.scrollTo.min.js"), "html", null, true);
        yield "\"></script>
\t\t\t<!--common script for all pages-->
\t\t\t<script src=\"";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/common-scripts.js"), "html", null, true);
        yield "\"></script>
\t\t\t<!--script pour le calendrier-->
\t\t\t<script src=\"";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/jquery-ui-1.9.2.custom.min.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/fullcalendar/fullcalendar.min.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/calendar-conf-events.js"), "html", null, true);
        yield "\"></script>
\t\t\t<!-- pour la connexion -->
\t\t\t<script src=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libAgora/sha512.js"), "html", null, true);
        yield "\"></script>
\t\t</body>
\t</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        yield "\t\t\t<!-- Bootstrap core CSS -->
\t\t\t<!--la fonction asset permet de faire le lien avec les ressources -->
\t\t\t<link
\t\t\thref=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/bootstrap/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/> <!--external css-->
\t\t\t<link href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/font-awesome/css/font-awesome.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>
\t\t\t<link
\t\t\thref=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/fullcalendar/bootstrap-fullcalendar.css"), "html", null, true);
        yield "\" rel=\"stylesheet\"/>
\t\t\t<!--external css pour les dates dans la gestion des tournois-->
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/bootstrap- fileupload/bootstrap-fileupload.css"), "html", null, true);
        yield "\"/>
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/bootstrap- datepicker/css/datepicker.css"), "html", null, true);
        yield "\"/>
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/bootstrap- datepicker/css/datepicker.css"), "html", null, true);
        yield "\"/>
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/bootstrap- timepicker/compiled/timepicker.css"), "html", null, true);
        yield "\"/>
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/lib/bootstrap- datetimepicker/css/datetimepicker.css"), "html", null, true);
        yield "\"/>
\t\t\t<!-- Custom styles for this template -->
\t\t\t<link href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
\t\t\t<link
\t\t\thref=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style-responsive.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
\t\t\t<!-- Style pour agora -->
\t\t\t<link href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/styleAgora.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 67
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 68
        yield "\t\t\t\t";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68)) {
            // line 69
            yield "\t\t\t\t\t";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "menu.html.twig");
            yield "
\t\t\t\t";
        }
        // line 71
        yield "\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 74
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  314 => 74,  303 => 71,  297 => 69,  294 => 68,  281 => 67,  268 => 29,  263 => 27,  258 => 25,  253 => 23,  248 => 21,  244 => 20,  240 => 19,  236 => 18,  231 => 16,  226 => 14,  222 => 13,  217 => 10,  204 => 9,  189 => 105,  184 => 103,  180 => 102,  176 => 101,  171 => 99,  166 => 97,  162 => 96,  158 => 95,  154 => 94,  133 => 75,  130 => 74,  126 => 72,  124 => 67,  117 => 62,  111 => 59,  108 => 58,  102 => 55,  98 => 53,  96 => 52,  92 => 51,  89 => 50,  87 => 49,  77 => 42,  64 => 31,  62 => 9,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<html lang=\"fr\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"author\" content=\"sio\">
\t\t<meta name=\"keyword\" content=\"MJC, Agora\">
\t\t<title>AgorA - Administration</title>
\t\t{% block stylesheets %}
\t\t\t<!-- Bootstrap core CSS -->
\t\t\t<!--la fonction asset permet de faire le lien avec les ressources -->
\t\t\t<link
\t\t\thref=\"{{ asset('assets/lib/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\"/> <!--external css-->
\t\t\t<link href=\"{{ asset('assets/lib/font-awesome/css/font-awesome.css') }}\" rel=\"stylesheet\"/>
\t\t\t<link
\t\t\thref=\"{{ asset('assets/lib/fullcalendar/bootstrap-fullcalendar.css') }}\" rel=\"stylesheet\"/>
\t\t\t<!--external css pour les dates dans la gestion des tournois-->
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/lib/bootstrap- fileupload/bootstrap-fileupload.css') }}\"/>
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/lib/bootstrap- datepicker/css/datepicker.css') }}\"/>
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/lib/bootstrap- datepicker/css/datepicker.css')}}\"/>
\t\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/lib/bootstrap- timepicker/compiled/timepicker.css') }}\"/>
\t\t\t<link
\t\t\trel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/lib/bootstrap- datetimepicker/css/datetimepicker.css') }}\"/>
\t\t\t<!-- Custom styles for this template -->
\t\t\t<link href=\"{{ asset('assets/css/style.css') }}\" rel=\"stylesheet\">
\t\t\t<link
\t\t\thref=\"{{ asset('assets/css/style-responsive.css') }}\" rel=\"stylesheet\">
\t\t\t<!-- Style pour agora -->
\t\t\t<link href=\"{{ asset('assets/css/styleAgora.css') }}\" rel=\"stylesheet\">
\t\t{% endblock %}
\t</head>
\t<body>
\t\t<section
\t\t\tid=\"container\">
\t\t\t<!--header start-->
\t\t\t<header class=\"header black-bg\">
\t\t\t\t<div class=\"sidebar-toggle-box\">
\t\t\t\t\t<div class=\"fa fa-bars tooltips\" data-placement=\"right\" data-original-title=\"Toggle
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tNavigation\"></div>
\t\t\t\t</div>
\t\t\t\t<!--logo start-->
\t\t\t\t<a href=\"{{path('accueil')}}\" class=\"logo\">
\t\t\t\t\t<b>Ago<span>rA</span>
\t\t\t\t\t</b>
\t\t\t\t</a>
\t\t\t\t<!--logo end-->
\t\t\t\t<div class=\"top-menu\">
\t\t\t\t\t<ul class=\"nav pull-right top-menu\">
\t\t\t\t\t\t{% if (app.user) %}
\t\t\t\t\t\t\t<a href=\"\" class=\"userAgo\">
\t\t\t\t\t\t\t\t{{ app.user.getNomMembre() }}
\t\t\t\t\t\t\t\t{{ app.user.getPrenomMembre()
\t\t\t\t\t}}</a>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"logout\" href=\"{{path('deconnexion')}}\">Se déconnecter</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"logout\" href=\"{{path('accueil')}}\">Se connecter</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</header>

\t\t\t{% block menu %}
\t\t\t\t{% if (app.user) %}
\t\t\t\t\t{{ include('menu.html.twig') }}
\t\t\t\t{% endif %}
\t\t\t{% endblock %}
\t\t\t<section id=\"main-content\">
\t\t\t\t<section class=\"wrapper\">
\t\t\t\t\t<div class=\"container-fluid\"> {% block central %}{% endblock %}{% block body %}{% endblock %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</section>
\t\t\t\t</section>
\t\t\t\t<footer class=\"site-footer\">
\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<p>Crée par Logma avec le template bootstrap Dashio :&copy; Copyrights
\t\t\t\t\t\t\t<strong>Dashio</strong>. All Rights Reserved
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<div class=\"credits\">
\t\t\t\t\t\t\tCreated with Dashio template by
\t\t\t\t\t\t\t<a href=\"https://templatemag.com/\">TemplateMag</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"index.html#\" class=\"go-top\">
\t\t\t\t\t\t\t<i class=\"fa fa-angle-up\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</footer>
\t\t\t</section>
\t\t\t<!-- js placed at the end of the document so the pages load faster -->
\t\t\t<script src=\"{{ asset('assets/lib/jquery/jquery.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/lib/bootstrap/js/bootstrap.min.js') }}\"></script>
\t\t\t<script class=\"include\" type=\"text/javascript\" src=\"{{ asset('assets/lib/jquery.dcjqaccordion.2.7.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/lib/jquery.scrollTo.min.js') }}\"></script>
\t\t\t<!--common script for all pages-->
\t\t\t<script src=\"{{ asset('assets/lib/common-scripts.js') }}\"></script>
\t\t\t<!--script pour le calendrier-->
\t\t\t<script src=\"{{ asset('assets/lib/jquery-ui-1.9.2.custom.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/lib/fullcalendar/fullcalendar.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/lib/calendar-conf-events.js') }}\"></script>
\t\t\t<!-- pour la connexion -->
\t\t\t<script src=\"{{ asset('assets/libAgora/sha512.js') }}\"></script>
\t\t</body>
\t</html>
", "base.html.twig", "C:\\wamp64\\www\\agorabo7\\templates\\base.html.twig");
    }
}
