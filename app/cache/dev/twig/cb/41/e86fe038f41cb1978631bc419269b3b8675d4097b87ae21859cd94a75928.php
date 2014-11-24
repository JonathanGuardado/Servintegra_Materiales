<?php

/* AppBundle:UnidadNegocio:edit.html.twig */
class __TwigTemplate_cb41e86fe038f41cb1978631bc419269b3b8675d4097b87ae21859cd94a75928 extends Twig_Template
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
        echo "    <h1>Edici&oacute;n Unidad de Negocio</h1>

    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form', array("attr" => array("class" => " formulario")));
        echo "

        <ul class=\"record_actions not_style_list\">
        <li>
        <a  href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("unidadnegocio");
        echo "\" class=\"btn btn-primary\">
            Regresar al listado
        </a>
        </li>
   
        </ul>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:UnidadNegocio:edit.html.twig";
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
