<?php

/* AppBundle:Material:index.html.twig */
class __TwigTemplate_86ace56c8188e457e7b1a8232b33fa198df6a58d5a41fb4c05a7b8b51d480b9d extends Twig_Template
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
        <section>
            <div class=\"naranja space\">&nbsp;</div>
            <div class=\"space-line\">&nbsp;</div>
            <div class=\"naranja space-line\">&nbsp;</div>
        </section>

        <section>
            <article class=\"w100 gris_claro-textura space\">&nbsp;</article>
            <article class=\"w100 gris_claro-textura space\">&nbsp;</article>  
            <article class=\"w100 gris_claro-texturaspace\">
                <dd class=\"R w100\">
                    <dl class=\"w7 R R1\">
                        <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("material_new");
        echo "\">
                            <input class=\"btn btn-success w100\" type=\"button\" value=\"Nuevo\"/>
                        </a>
                    </dl>
                </dd>
            </article>
            <article class=\"w100 gris_claro-textura space\">&nbsp;</article>  
        </section>

        <div class=\"container w100\">

            ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 33
            echo "                <div class=\"alert alert-info alert-dismissible\" role=\"alert\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                        <span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span>
                    </button>
                    <strong>Aviso, </strong> ";
            // line 37
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
            <h1 class=\"L L3\"> Listado de Materiales</h1>

            <section class=\"w100  space-L1 white-box\">
                <fieldset class=\" w100\">
                    <div  class=\"ConfigureScrollXTable w95\" >
                        <!--sin scroll menos de 8 columnas-->                        
                        <table cellspacing=\"0\" id=\"\" class=\"tablepaginate dataTable tablapaginacion w100  tableBlock\">       
                            <!--con scroll mas de 8 columnas-->
                            <!--<table cellspacing=\"0\" id=\"\" class=\"tablepaginateScroll tablapaginacion w100 L tableBlock\">-->
                            <thead>                
                            <th><h6><center>C&oacute;digo</center></h6></th>
                            <th><h6><center>Nombre</center></h6></th>
                            <th><h6><center>Descripción</center></h6></th>
                            <th><h6><center>Costo</center></h6></th>
                            <th><h6><center>Precio Venta</center></h6></th>
                            <th><h6><center>Existencia Actual</center></h6></th>
                          <!--  <th><h6><center>Estado</center></h6></th>-->
                            <th><h6><center>Fecha Ingreso</center></h6></th>
                            <th><h6><center>Opcion</center></h6></th>
                            </thead>
                            <tbody>
                                ";
        // line 62
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["materiales"]) ? $context["materiales"] : $this->getContext($context, "materiales")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["material"]) {
            // line 63
            echo "                                    <tr>
                                        <td><h6 class='centrar2'>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "id", array()), "html", null, true);
            echo "</h6></td>                       
                                        <td><h6 class='centrar2'>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "nombreMaterial", array()), "html", null, true);
            echo "</h6></td>
                                        <td><h6 class='centrar2'>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "descripcionMaterial", array()), "html", null, true);
            echo "</h6></td>
                                        <td><h6 class='centrar2'>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "costoMaterial", array()), "html", null, true);
            echo "</h6></td>
                                        <td><h6 class='centrar2'>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "precioMaterial", array()), "html", null, true);
            echo "</h6></td>
                                        <td><h6 class='centrar2'>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "existenciaActual", array()), "html", null, true);
            echo "</h6></td>
                                       <!-- <td><h6 class='centrar2'>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "estado", array()), "html", null, true);
            echo "</h6></td>-->
                                        <td><h6 class='centrar2'>";
            // line 71
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["material"], "fechaCreacion", array()), "d/m/Y H:i"), "html", null, true);
            echo "</h6></td>
                                        <td><h6 class='centrar2'>
                                                <a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("material_show", array("id" => $this->getAttribute($context["material"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-info\">Ver Material</a>
                                            </h6></td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 77
            echo "                                <td colspan=\"4\"><h6 class='centrar2'>No existe material</h6></td>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['material'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                            </tbody> 
                        </table>
                    </div>
                </fieldset>
            </section>

        </div> <!-- /container -->

        <section>
            <div class=\"gris_claro space\">&nbsp;</div>
            <div class=\"gris_claro space\">&nbsp;</div>
            <div class=\"gris_claro space\">&nbsp;</div>
            <div class=\"gris_claro space\">&nbsp;</div>
        </section>

    ";
    }

    public function getTemplateName()
    {
        return "AppBundle:Material:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 79,  167 => 77,  158 => 73,  153 => 71,  149 => 70,  145 => 69,  141 => 68,  137 => 67,  133 => 66,  129 => 65,  125 => 64,  122 => 63,  117 => 62,  93 => 40,  84 => 37,  78 => 33,  74 => 32,  60 => 21,  45 => 8,  42 => 7,  36 => 5,  30 => 3,);
    }
}
