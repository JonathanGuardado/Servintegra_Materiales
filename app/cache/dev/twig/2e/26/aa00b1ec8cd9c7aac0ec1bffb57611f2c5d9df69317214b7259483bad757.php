<?php

/* AppBundle:UnidadMedida:edit.html.twig */
class __TwigTemplate_2e26aa00b1ec8cd9c7aac0ec1bffb57611f2c5d9df69317214b7259483bad757 extends Twig_Template
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
        echo "    <h1>Edici&oacute;n Unidad de medida</h1>

    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form', array("attr" => array("class" => " formulario")));
        echo "

        <ul class=\"record_actions\">
    <li>
        <a style=\"color:black\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("unidadmedida");
        echo "\">
            Regresar al listado
        </a>
    </li>
   
</ul>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:UnidadMedida:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 14,  49 => 10,  45 => 8,  42 => 7,  36 => 5,  30 => 3,);
    }
}
