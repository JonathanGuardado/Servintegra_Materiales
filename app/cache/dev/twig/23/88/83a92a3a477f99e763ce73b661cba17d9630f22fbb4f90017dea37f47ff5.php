<?php

/* AppBundle:UnidadMedida:show.html.twig */
class __TwigTemplate_238883a92a3a477f99e763ce73b661cba17d9630f22fbb4f90017dea37f47ff5 extends Twig_Template
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
        echo "    <h1 class=\"L L3\">Unidad de Medida</h1>

    <table class=\"record_properties T6\">
        <tbody>
           
            <tr>
                <th>Nombreunidad: </th>
                <td> ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombreUnidad", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descripcionunidad: </th>
                <td> ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descripcionUnidad", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions TB w10  not_style_list\">
    <li>
        <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("unidadmedida");
        echo "\" class=\"btn btn-primary T3\">
           Regresar al Listado
        </a>
    </li>
    <li>
        <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("unidadmedida_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idUnidad", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary T3\">
            Editar
        </a>
    </li>
  <!--  <li><a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("unidadmedida_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idUnidad", array()))), "html", null, true);
        echo "\" >
           ";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
        </a>
    </li>-->
</ul>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:UnidadMedida:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 36,  86 => 35,  79 => 31,  71 => 26,  61 => 19,  54 => 15,  45 => 8,  42 => 7,  36 => 5,  30 => 3,);
    }
}
