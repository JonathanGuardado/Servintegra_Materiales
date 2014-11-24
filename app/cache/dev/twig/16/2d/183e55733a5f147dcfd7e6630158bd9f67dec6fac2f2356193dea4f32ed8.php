<?php

/* AppBundle:Material:show.html.twig */
class __TwigTemplate_162d183e55733a5f147dcfd7e6630158bd9f67dec6fac2f2356193dea4f32ed8 extends Twig_Template
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
<div class=\"container\">

    <h1>Material ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["material"]) ? $context["material"] : $this->getContext($context, "material")), "nombreMaterial", array()), "html", null, true);
        echo "</h1>

    <dl class=\"dl-horizontal\">
        <dt>Nombre</dt>
        <dd>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["material"]) ? $context["material"] : $this->getContext($context, "material")), "nombreMaterial", array()), "html", null, true);
        echo "</dd>

        <dt>Descripcion</dt>
        <dd>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["material"]) ? $context["material"] : $this->getContext($context, "material")), "descripcionMaterial", array()), "html", null, true);
        echo "</dd>

        <hr>

        <dt>&nbsp;</dt>
        <dd>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("material_edit", array("id" => $this->getAttribute((isset($context["material"]) ? $context["material"] : $this->getContext($context, "material")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-warning\">Editar</a>           
        </dd>

    </dl>

</div> <!-- /container -->

";
    }

    public function getTemplateName()
    {
        return "AppBundle:Material:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 24,  63 => 18,  57 => 15,  50 => 11,  45 => 8,  42 => 7,  36 => 5,  30 => 3,);
    }
}
