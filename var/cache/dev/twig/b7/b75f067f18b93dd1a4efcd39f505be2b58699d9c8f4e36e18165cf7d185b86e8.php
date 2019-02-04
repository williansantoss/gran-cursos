<?php

/* endereco/form.html.twig */
class __TwigTemplate_cd93d2db9485f71c08d1134e4bdf5785d1747bffc214627bf5b9af34e031b9a1 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "endereco/form.html.twig"));

        // line 1
        echo " <form action=\"\" method=\"post\" name=\"formulario_login\">
        <label for=\"username\">User:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"\" />
        <br />
        <label for=\"password\">Password:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />
        <br />
        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\"/>
        <label for=\"remember_me\">Remember me</label>
        <br />
        <input type=\"submit\" name=\"login\" value=\"Login\" />
    </form>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "endereco/form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source(" <form action=\"\" method=\"post\" name=\"formulario_login\">
        <label for=\"username\">User:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"\" />
        <br />
        <label for=\"password\">Password:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />
        <br />
        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\"/>
        <label for=\"remember_me\">Remember me</label>
        <br />
        <input type=\"submit\" name=\"login\" value=\"Login\" />
    </form>", "endereco/form.html.twig", "/var/www/gran-cursos/templates/endereco/form.html.twig");
    }
}
