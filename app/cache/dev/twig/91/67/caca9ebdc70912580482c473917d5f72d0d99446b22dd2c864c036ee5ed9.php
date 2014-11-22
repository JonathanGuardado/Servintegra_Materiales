<?php

/* AppBundle:Material:index.html.twig */
class __TwigTemplate_9167caca9ebdc70912580482c473917d5f72d0d99446b22dd2c864c036ee5ed9 extends Twig_Template
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
        <dl class=\"w7 R R3\">
        <input class=\"btn btn-warning w100\" type=\"button\" value=\"Eliminar\"/>    
        </dl>
        <dl class=\"w7 R R1\">
        <input class=\"btn btn-warning w100\" type=\"button\" value=\"Consulta\"/>    
        </dl>
        <dl class=\"w7 R R1\">
        <input class=\"btn btn-warning w100\" type=\"button\" value=\"Editar\"/>
        </dl>
        <dl class=\"w7 R R1\">
            <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("material_new");
        echo "\">
                <input class=\"btn btn-success w100\" type=\"button\" value=\"Nuevo\"/>
            </a>
        </dl>
        </dd>
    </article>
    <article class=\"w100 gris_claro-textura space\">&nbsp;</article>  
</section>

<div class=\"\">

";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 42
            echo "<div class=\"alert alert-info alert-dismissible\" role=\"alert\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
        <span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span>
    </button>
    <strong>Aviso, </strong> ";
            // line 46
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
<h1>Listado de Materiales</h1>

<section class=\"w100 space-L1 L white-box\">
    <fieldset class=\"L w100\">
        <div class=\"ConfigureScrollXTable  \" >
            <!--sin scroll menos de 8 columnas-->
            <table cellspacing=\"0\" id=\"\" class=\"tablepaginate dataTable tablapaginacion w100 L tableBlock\">       
                <!--con scroll mas de 8 columnas-->
                    <!--<table cellspacing=\"0\" id=\"\" class=\"tablepaginateScroll tablapaginacion w100 L tableBlock\">-->
                <thead>
                <th><h6><center>Id</center></h6></th>
                <th><h6><center>C&oacute;digo</center></h6></th>
                <th><h6><center>Nombre</center></h6></th>
                <th><h6><center>Descripción</center></h6></th>
                <th><h6><center>Costo</center></h6></th>
                <th><h6><center>Precio Venta</center></h6></th>
                <th><h6><center>Stock</center></h6></th>
                <th><h6><center>Estado</center></h6></th>
                <th><h6><center>Fecha Ingreso</center></h6></th>
                <th><h6><center>Opcion</center></h6></th>
                </thead>
                <tbody>
                    ";
        // line 72
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["materiales"]) ? $context["materiales"] : $this->getContext($context, "materiales")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["material"]) {
            // line 73
            echo "                    <tr>
                        <td><h6 class='centrar2'>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "id", array()), "html", null, true);
            echo "</h6></td>
                        <td><h6 class='centrar2'>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "codigo", array()), "html", null, true);
            echo "</h6></td>
                        <td><h6 class='centrar2'>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "nombre", array()), "html", null, true);
            echo "</h6></td>
                        <td><h6 class='centrar2'>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "descripcion", array()), "html", null, true);
            echo "</h6></td>
                        <td><h6 class='centrar2'>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "costo", array()), "html", null, true);
            echo "</h6></td>
                        <td><h6 class='centrar2'>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "precioVenta", array()), "html", null, true);
            echo "</h6></td>
                        <td><h6 class='centrar2'>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "stock", array()), "html", null, true);
            echo "</h6></td>
                        <td><h6 class='centrar2'>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "estado", array()), "html", null, true);
            echo "</h6></td>
                        <td><h6 class='centrar2'>";
            // line 82
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["material"], "createdAt", array()), "d/m/Y H:i"), "html", null, true);
            echo "</h6></td>
                        <td><h6 class='centrar2'>
                            <a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("material_show", array("id" => $this->getAttribute($context["material"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-info\">Ver Material</a>
                        </h6></td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 88
            echo "                        <td colspan=\"4\"><h6 class='centrar2'>No existe material</h6></td>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['material'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "                </tbody> 
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
        return array (  188 => 90,  181 => 88,  172 => 84,  167 => 82,  163 => 81,  159 => 80,  155 => 79,  151 => 78,  147 => 77,  143 => 76,  139 => 75,  135 => 74,  132 => 73,  127 => 72,  102 => 49,  93 => 46,  87 => 42,  83 => 41,  69 => 30,  45 => 8,  42 => 7,  36 => 5,  30 => 3,);
    }
}
