<?php

/* AppBundle:PresupuestoMensual:new.html.twig */
class __TwigTemplate_e9856d8e586e81e1bd01c20a06a287ded24be95b270a2d5b961399bb34738762 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::frontend.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'id' => array($this, 'block_id'),
            'main' => array($this, 'block_main'),
            'javascript' => array($this, 'block_javascript'),
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
        echo "<h1 class=\"L L3\">Añadir Presupuesto Mensual</h1>

    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form', array("attr" => array("class" => "formulario form-horizontal T10")));
        echo "
<ul class=\"record_actions not_style_list\">
    <li>
        <a class=\"btn btn-primary\" href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("unidadmedida");
        echo "\">
            Regresar al listado
        </a>
    </li>
</ul>

";
    }

    // line 20
    public function block_javascript($context, array $blocks = array())
    {
        // line 21
        echo "<script type=\"text/javascript\">
    jQuery(\"#gs_appbundle_presupuestomensual_proyecto\").val('";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["idProyecto"]) ? $context["idProyecto"] : $this->getContext($context, "idProyecto")), "html", null, true);
        echo "').change().attr(\"disabled\",\"disabled\").css({\"cursor\":\"not-allowed\"});
 </script>
 ";
    }

    public function getTemplateName()
    {
        return "AppBundle:PresupuestoMensual:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 22,  70 => 21,  67 => 20,  56 => 13,  50 => 10,  46 => 8,  43 => 7,  37 => 5,  31 => 3,);
    }
}
