<?php

/* AppBundle:PresupuestoMensual:index.html.twig */
class __TwigTemplate_9ad05d9ebccb7910e34bb6c75d326510187cf3776af709b44658ab434d8c61dd extends Twig_Template
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
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presupuestomensual_new", array("idProyecto" => (isset($context["idProyecto"]) ? $context["idProyecto"] : $this->getContext($context, "idProyecto")))), "html", null, true);
        echo "\">
                <input class=\"btn btn-success R R2\" type=\"button\" value=\"Añadir\"/>
            </a>
        </dl>
        </dd>
    </article>
    <article class=\"w100 gris_claro-textura space\">&nbsp;</article>  
</section>

<div class=\"container w100\">

";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 32
            echo "<div class=\"alert alert-info alert-dismissible\" role=\"alert\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
        <span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span>
    </button>
    <strong>Aviso, </strong> ";
            // line 36
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
<h1 class=\"L L3\">Listado de Presupuestos Mensuales</h1>
<section class=\"w100 space-L1 L white-box\">
    <fieldset class=\"L w100\">
        <div class=\"ConfigureScrollXTable w95 \" >
            <table cellspacing=\"0\" id=\"\" class=\"tablepaginate dataTable tablapaginacion w100 L tableBlock\">       

        <thead>
            <tr>                
                <th>Mes presupuesto</th>
                <th>Año presupuesto</th>
                <th>Presupuesto</th>
                <th>Usuario creacion</th>
                <th>Fecha creacion</th>
                 <th>Modificado</th>
                <th>Usuario modificacion</th>               
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 59
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 60
            echo "            <tr>
               
                <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "mesPresupuesto", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "anioPresupuesto", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "presupuesto", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "usuarioCreacion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 66
            if ($this->getAttribute($context["entity"], "fechaCreacion", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaCreacion", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                 <td>";
            // line 67
            if ($this->getAttribute($context["entity"], "fechaModificacion", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaModificacion", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "usuarioModificacion", array()), "html", null, true);
            echo "</td>               
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presupuestomensual_show", array("id" => $this->getAttribute($context["entity"], "idPresupuestoMensual", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presupuestomensual_edit", array("id" => $this->getAttribute($context["entity"], "idPresupuestoMensual", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "        </tbody>
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
        return "AppBundle:PresupuestoMensual:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 81,  163 => 75,  157 => 72,  150 => 68,  144 => 67,  138 => 66,  134 => 65,  130 => 64,  126 => 63,  122 => 62,  118 => 60,  114 => 59,  92 => 39,  83 => 36,  77 => 32,  73 => 31,  59 => 20,  45 => 8,  42 => 7,  36 => 5,  30 => 3,);
    }
}
