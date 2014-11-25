<?php

/* AppBundle:Proyecto:show.html.twig */
class __TwigTemplate_c86b2d678e1267e3937d7c77e91c57fe9d6303506fd687b0a25ec7643eff5dd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::frontend.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'id' => array($this, 'block_id'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::frontend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Principal Servintegra ";
    }

    // line 5
    public function block_id($context, array $blocks = array())
    {
        echo "portada";
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"container w40\">

    <h1 class=\"L L3\">Poyecto ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "nombreProyecto", array()), "html", null, true);
        echo "</h1>

    <dl class=\"dl-horizontal\">
        <dt>Nombre</dt>
        <dd>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "nombreProyecto", array()), "html", null, true);
        echo "</dd>

        <dt>Numero de personas</dt>
        <dd>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "nPersonas", array()), "html", null, true);
        echo "</dd>

        <hr>

        

    </dl>
   <div class=\"B5 \">
       <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_edit", array("id" => $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "idProyecto", array()))), "html", null, true);
        echo "\" class=\"btn btn-warning \" >Editar</a>
       <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presupuestomensual", array("idProyecto" => $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "idProyecto", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">Ver presupuesto</a>
       <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("proyecto_list");
        echo "\" class=\"btn btn-primary\">Regresar al Listado</a>
    </div>
</div> <!-- /container -->

";
    }

    public function getTemplateName()
    {
        return "AppBundle:Proyecto:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 28,  78 => 27,  74 => 26,  63 => 18,  57 => 15,  50 => 11,  45 => 8,  42 => 7,  36 => 5,  30 => 3,);
    }
}
