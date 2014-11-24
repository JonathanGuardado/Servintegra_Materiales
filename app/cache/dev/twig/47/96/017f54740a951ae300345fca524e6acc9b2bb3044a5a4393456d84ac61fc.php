<?php

/* AppBundle:UnidadNegocio:show.html.twig */
class __TwigTemplate_4796017f54740a951ae300345fca524e6acc9b2bb3044a5a4393456d84ac61fc extends Twig_Template
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
        echo "    <h1 class=\"L L3\">Unidad de Negocio</h1>

    <table class=\"record_properties T6\">
        <tbody>
             <tr>
                <th>Nombre unidad de negocio: </th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombreUnidadNegocio", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descripcion unidad de negocio: </th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descripcionUnidadNegocio", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions not_style_list\">
    <li>
        <a class=\"btn btn-primary T1\" href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("unidadnegocio");
        echo "\">
            Regresar al listado
        </a>
    </li>
    <li>
        <a class=\"btn btn-primary T1\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("unidadnegocio_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idUnidadNegocio", array()))), "html", null, true);
        echo "\">
            Editar
        </a>
    </li>
    <!--<li>";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>-->
</ul>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:UnidadNegocio:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 34,  78 => 30,  70 => 25,  60 => 18,  53 => 14,  45 => 8,  42 => 7,  36 => 5,  30 => 3,);
    }
}
