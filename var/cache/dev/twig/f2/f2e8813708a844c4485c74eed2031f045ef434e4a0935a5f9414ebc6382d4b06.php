<?php

/* cadastro/index.html.twig */
class __TwigTemplate_b8795f4f557c954ff9a893243f26549f547c1167a8b881331f77f3c11f63ba4e extends Twig_Template
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

        echo " Cadastro ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t";
        // line 7
        if ((isset($context["contatos"]) || array_key_exists("contatos", $context) ? $context["contatos"] : (function () { throw new Twig_Error_Runtime('Variable "contatos" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "\t\t<table class=\"table table-striped\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Nome</th>
\t\t\t\t\t<th>Email</th>
\t\t\t\t\t<th>Telefone</th>
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
\t\t\t\t\t<td> ";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contato"], "email", []), "html", null, true);
                echo " </td>
\t\t\t\t\t<td> ";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contato"], "telefone", []), "html", null, true);
                echo " </td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"/contato/";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contato"], "id", []), "html", null, true);
                echo "\" class=\"btn btn-dark\"> ver </a>
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
            echo "\t\t<p> No articles to display </p>
\t";
        }
        // line 33
        echo "
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
        return array (  113 => 33,  109 => 31,  104 => 28,  94 => 24,  89 => 22,  85 => 21,  81 => 20,  78 => 19,  74 => 18,  62 => 8,  60 => 7,  57 => 6,  51 => 5,  39 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %} Cadastro {% endblock %}

{% block body %}

\t{% if contatos %}
\t\t<table class=\"table table-striped\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Nome</th>
\t\t\t\t\t<th>Email</th>
\t\t\t\t\t<th>Telefone</th>
\t\t\t\t\t<th>Ações</th>
\t\t\t\t</tr>\t
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for contato in contatos %}
\t\t\t\t<tr>
\t\t\t\t\t<td> {{ contato.nome }} </td>
\t\t\t\t\t<td> {{ contato.email }} </td>
\t\t\t\t\t<td> {{ contato.telefone }} </td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"/contato/{{ contato.id }}\" class=\"btn btn-dark\"> ver </a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t{% else %}
\t\t<p> No articles to display </p>
\t{% endif %}

{% endblock %}", "cadastro/index.html.twig", "/var/www/gran-cursos/templates/cadastro/index.html.twig");
    }
}
