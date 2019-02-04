<?php

/* cadastro/index.html.twig */
class __TwigTemplate_04d154ca666a6160d09f41d4c4b7442b0113837153f95b6ae7f96dee131d3ad2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cadastro/index.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cadastro/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Gran Cursos - Contatos ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t<h2> Lista de Contatos </h2>
\t
\t";
        // line 9
        if ((isset($context["contatos"]) || array_key_exists("contatos", $context) ? $context["contatos"] : (function () { throw new Twig_Error_Runtime('Variable "contatos" does not exist.', 9, $this->source); })())) {
            // line 10
            echo "\t\t<table id=\"contatos\" class=\"table table-striped\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Nome</th>
\t\t\t\t\t<th>Ações</th>
\t\t\t\t</tr>\t
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["contatos"]) || array_key_exists("contatos", $context) ? $context["contatos"] : (function () { throw new Twig_Error_Runtime('Variable "contatos" does not exist.', 18, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["contato"]) {
                // line 19
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td> ";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contato"], "nome", []), "html", null, true);
                echo " </td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"/contato/";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contato"], "id", []), "html", null, true);
                echo "\" class=\"btn btn-dark\"> detalhes </a>
\t\t\t\t\t\t<a href=\"/contato/editar/";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contato"], "id", []), "html", null, true);
                echo "\" class=\"btn btn-light\"> Editar </a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-danger delete-contato\" data-id=\"";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contato"], "id", []), "html", null, true);
                echo "\"> Apagar </a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contato'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "\t\t\t</tbody>
\t\t</table>
\t";
        } else {
            // line 31
            echo "\t\t<hr>
\t\t<p> Nenhum contato cadastrado! </p>
\t\t<a href=\"/contato/novo\" class=\"btn btn-light\"> Cadastrar Contato</a>
\t";
        }
        // line 35
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "\t<script src=\"/js/main.js\" type=\"text/javascript\" ></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "cadastro/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 39,  124 => 38,  116 => 35,  110 => 31,  105 => 28,  95 => 24,  91 => 23,  87 => 22,  82 => 20,  79 => 19,  75 => 18,  65 => 10,  63 => 9,  58 => 6,  52 => 5,  40 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %} Gran Cursos - Contatos {% endblock %}

{% block body %}

\t<h2> Lista de Contatos </h2>
\t
\t{% if contatos %}
\t\t<table id=\"contatos\" class=\"table table-striped\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Nome</th>
\t\t\t\t\t<th>Ações</th>
\t\t\t\t</tr>\t
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for contato in contatos %}
\t\t\t\t<tr>
\t\t\t\t\t<td> {{ contato.nome }} </td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"/contato/{{ contato.id }}\" class=\"btn btn-dark\"> detalhes </a>
\t\t\t\t\t\t<a href=\"/contato/editar/{{ contato.id }}\" class=\"btn btn-light\"> Editar </a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-danger delete-contato\" data-id=\"{{ contato.id }}\"> Apagar </a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t{% else %}
\t\t<hr>
\t\t<p> Nenhum contato cadastrado! </p>
\t\t<a href=\"/contato/novo\" class=\"btn btn-light\"> Cadastrar Contato</a>
\t{% endif %}

{% endblock %}

{% block javascripts %}
\t<script src=\"/js/main.js\" type=\"text/javascript\" ></script>

{% endblock %}", "cadastro/index.html.twig", "/var/www/gran-cursos/templates/cadastro/index.html.twig");
    }
}
