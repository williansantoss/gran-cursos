<?php

/* cadastro/ver.html.twig */
class __TwigTemplate_9d9e46457a76e8b6f4e28477b0c5ab21beff4429c646971124559e2e3c1c778c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cadastro/ver.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cadastro/ver.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Contato - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contato"]) || array_key_exists("contato", $context) ? $context["contato"] : (function () { throw new Twig_Error_Runtime('Variable "contato" does not exist.', 3, $this->source); })()), "nome", []), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"row\">
\t<div class=\"col-md-6\">
\t\t<b>nome: </b><h1> ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contato"]) || array_key_exists("contato", $context) ? $context["contato"] : (function () { throw new Twig_Error_Runtime('Variable "contato" does not exist.', 8, $this->source); })()), "nome", []), "html", null, true);
        echo " </h1>
\t\t<b>email: </b><p> ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contato"]) || array_key_exists("contato", $context) ? $context["contato"] : (function () { throw new Twig_Error_Runtime('Variable "contato" does not exist.', 9, $this->source); })()), "email", []), "html", null, true);
        echo " </p>
\t\t<b>telefone: </b><p> ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contato"]) || array_key_exists("contato", $context) ? $context["contato"] : (function () { throw new Twig_Error_Runtime('Variable "contato" does not exist.', 10, $this->source); })()), "telefone", []), "html", null, true);
        echo " </p>
\t\t
\t</div>
\t<div class=\"col-md-6\">
\t\t<div>
\t\t
\t\t\t<b>Endereço: </b>
\t\t\t<hr>
\t\t";
        // line 18
        if ((isset($context["endereco"]) || array_key_exists("endereco", $context) ? $context["endereco"] : (function () { throw new Twig_Error_Runtime('Variable "endereco" does not exist.', 18, $this->source); })())) {
            // line 19
            echo "
\t\t\t
\t\t\t\t<div id=\"endereco\">
\t\t\t\t\t<p>Quadra ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["endereco"]) || array_key_exists("endereco", $context) ? $context["endereco"] : (function () { throw new Twig_Error_Runtime('Variable "endereco" does not exist.', 22, $this->source); })()), "quadra", []), "html", null, true);
            echo " 
\t\t\t\t\tNúmero ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["endereco"]) || array_key_exists("endereco", $context) ? $context["endereco"] : (function () { throw new Twig_Error_Runtime('Variable "endereco" does not exist.', 23, $this->source); })()), "numero", []), "html", null, true);
            echo " </p>
\t\t\t\t\t<p><b>Observação:</b> ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["endereco"]) || array_key_exists("endereco", $context) ? $context["endereco"] : (function () { throw new Twig_Error_Runtime('Variable "endereco" does not exist.', 24, $this->source); })()), "observacao", []), "html", null, true);
            echo " </p>
\t\t\t\t\t<a href=\"/endereco/editar/";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["endereco"]) || array_key_exists("endereco", $context) ? $context["endereco"] : (function () { throw new Twig_Error_Runtime('Variable "endereco" does not exist.', 25, $this->source); })()), "id", []), "html", null, true);
            echo "\" class=\"btn btn-light\"> Editar Endereço</a>
\t\t\t\t\t<a href=\"#\" class=\"btn btn-danger delete-endereco\" data-id=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["endereco"]) || array_key_exists("endereco", $context) ? $context["endereco"] : (function () { throw new Twig_Error_Runtime('Variable "endereco" does not exist.', 26, $this->source); })()), "id", []), "html", null, true);
            echo "\"> Apagar Endereço</a>
\t\t\t\t</div>
\t\t\t

\t\t";
        } else {
            // line 31
            echo "\t\t\t
\t\t\t<p> Nenhum endereço cadastrado! </p>
\t\t\t<a href=\"/endereco/novo/";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contato"]) || array_key_exists("contato", $context) ? $context["contato"] : (function () { throw new Twig_Error_Runtime('Variable "contato" does not exist.', 33, $this->source); })()), "id", []), "html", null, true);
            echo "\" class=\"btn btn-light\"> Cadastrar Endereço</a>
\t\t";
        }
        // line 34
        echo "\t
\t\t</div>
\t</div>
</div>
<hr>

<a href=\"/\"> Voltar </a>\t

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "\t<script src=\"/js/main.js\" type=\"text/javascript\" ></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "cadastro/ver.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 45,  138 => 44,  123 => 34,  118 => 33,  114 => 31,  106 => 26,  102 => 25,  98 => 24,  94 => 23,  90 => 22,  85 => 19,  83 => 18,  72 => 10,  68 => 9,  64 => 8,  60 => 6,  54 => 5,  40 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %} Contato - {{contato.nome}} {% endblock %}

{% block body %}
<div class=\"row\">
\t<div class=\"col-md-6\">
\t\t<b>nome: </b><h1> {{ contato.nome }} </h1>
\t\t<b>email: </b><p> {{ contato.email }} </p>
\t\t<b>telefone: </b><p> {{ contato.telefone }} </p>
\t\t
\t</div>
\t<div class=\"col-md-6\">
\t\t<div>
\t\t
\t\t\t<b>Endereço: </b>
\t\t\t<hr>
\t\t{% if endereco %}

\t\t\t
\t\t\t\t<div id=\"endereco\">
\t\t\t\t\t<p>Quadra {{ endereco.quadra }} 
\t\t\t\t\tNúmero {{ endereco.numero }} </p>
\t\t\t\t\t<p><b>Observação:</b> {{ endereco.observacao }} </p>
\t\t\t\t\t<a href=\"/endereco/editar/{{ endereco.id }}\" class=\"btn btn-light\"> Editar Endereço</a>
\t\t\t\t\t<a href=\"#\" class=\"btn btn-danger delete-endereco\" data-id=\"{{ endereco.id }}\"> Apagar Endereço</a>
\t\t\t\t</div>
\t\t\t

\t\t{% else %}
\t\t\t
\t\t\t<p> Nenhum endereço cadastrado! </p>
\t\t\t<a href=\"/endereco/novo/{{contato.id}}\" class=\"btn btn-light\"> Cadastrar Endereço</a>
\t\t{% endif %}\t
\t\t</div>
\t</div>
</div>
<hr>

<a href=\"/\"> Voltar </a>\t

{% endblock %}

{% block javascripts %}
\t<script src=\"/js/main.js\" type=\"text/javascript\" ></script>

{% endblock %}", "cadastro/ver.html.twig", "/var/www/gran-cursos/templates/cadastro/ver.html.twig");
    }
}
