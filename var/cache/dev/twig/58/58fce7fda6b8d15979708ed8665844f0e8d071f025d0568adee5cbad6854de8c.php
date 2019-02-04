<?php

/* inc/navbar.html.twig */
class __TwigTemplate_b59a74508ba713b116e2a4b8f0fb58a385094820489bcf25040895394e13baf6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inc/navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-sm navbar-dark bg-primary mb-3\">
\t<div class=\"container\">
\t<a href=\"/\" class=\"navbar-brand\"> Gran Cursos </a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#mobile-nav\">
\t\t\t<span class=\"navbar-toggle-icon\"></span>
\t\t</button>

\t\t<div class=\"collapse navbar-collapse\" id=\"mobile-nav\">
\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"/\" class=\"nav-link\"> Home </a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"/cadastro/novo\" class=\"nav-link\"> Novo Cadastro</a>
\t\t\t\t</li>
\t\t\t</ul>

\t\t</div>
\t</div>
</nav>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "inc/navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-expand-sm navbar-dark bg-primary mb-3\">
\t<div class=\"container\">
\t<a href=\"/\" class=\"navbar-brand\"> Gran Cursos </a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#mobile-nav\">
\t\t\t<span class=\"navbar-toggle-icon\"></span>
\t\t</button>

\t\t<div class=\"collapse navbar-collapse\" id=\"mobile-nav\">
\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"/\" class=\"nav-link\"> Home </a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"/cadastro/novo\" class=\"nav-link\"> Novo Cadastro</a>
\t\t\t\t</li>
\t\t\t</ul>

\t\t</div>
\t</div>
</nav>", "inc/navbar.html.twig", "/var/www/gran-cursos/templates/inc/navbar.html.twig");
    }
}
