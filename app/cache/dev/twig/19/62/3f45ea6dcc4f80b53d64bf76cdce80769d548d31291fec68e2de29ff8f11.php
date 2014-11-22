<?php

/* AppBundle:Proyecto:edit.html.twig */
class __TwigTemplate_19623f45ea6dcc4f80b53d64bf76cdce80769d548d31291fec68e2de29ff8f11 extends Twig_Template
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

    <h1>Proyecto ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "nombre", array()), "html", null, true);
        echo "</h1>

    <hr>

    ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'form');
        echo "

</div> <!-- /container -->

";
    }

    public function getTemplateName()
    {
        return "AppBundle:Proyecto:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 15,  50 => 11,  45 => 8,  42 => 7,  36 => 5,  30 => 3,);
    }
}
