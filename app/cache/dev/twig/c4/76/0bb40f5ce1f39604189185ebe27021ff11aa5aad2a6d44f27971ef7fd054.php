<?php

/* AppBundle:UnidadNegocio:new.html.twig */
class __TwigTemplate_c4760bb40f5ce1f39604189185ebe27021ff11aa5aad2a6d44f27971ef7fd054 extends Twig_Template
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
    <h1 class=\"L L3\">Creaci&oacute;n Unidad de Negocio</h1>
    
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form', array("attr" => array("class" => "formulario form-horizontal T6")));
        echo "

        <ul class=\"record_actions not_style_list\">
     <li>
        <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("unidadnegocio");
        echo "\" class=\"btn btn-primary\">
           Regresar al Listados
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:UnidadNegocio:new.html.twig";
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
