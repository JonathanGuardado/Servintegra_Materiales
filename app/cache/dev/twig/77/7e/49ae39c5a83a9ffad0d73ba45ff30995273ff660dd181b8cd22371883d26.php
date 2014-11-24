<?php

/* AppBundle:Proyecto:index.html.twig */
class __TwigTemplate_777e49ae39c5a83a9ffad0d73ba45ff30995273ff660dd181b8cd22371883d26 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("proyecto_new");
        echo "\">
                <input class=\"btn btn-success R R2\" type=\"button\" value=\"Nuevo\"/>
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
<h1 class=\"L L3\">Listado de Proyectos</h1>

<section class=\"w100 space-L1 L white-box\">
    <fieldset class=\"L w100\">
        <div class=\"ConfigureScrollXTable w60 \" >
            <!--sin scroll menos de 8 columnas-->
            <table cellspacing=\"0\" id=\"\" class=\"tablepaginate dataTable tablapaginacion w100 L tableBlock\">       
                <!--con scroll mas de 8 columnas-->
                    <!--<table cellspacing=\"0\" id=\"\" class=\"tablepaginateScroll tablapaginacion w100 L tableBlock\">-->
                <thead>
                <th><h6><center>C&oacute;digo</center></h6></th>
                <th><h6><center>Nombre</center></h6></th>
                <th><h6><center>Total Personas</center></h6></th>
                <th><h6><center>Fecha Ingreso</center></h6></th>
                <th><h6><center>Opcion</center></h6></th>
                </thead>
                <tbody>
                    ";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["proyecto"]) {
            // line 58
            echo "                    <tr>
                        <td><h6 class='centrar2'>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["proyecto"], "idProyecto", array()), "html", null, true);
            echo "</h6></td>
                        <td><h6 class='centrar2'>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["proyecto"], "nombreProyecto", array()), "html", null, true);
            echo "</h6></td>
                        <td><h6 class='centrar2'>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["proyecto"], "nPersonas", array()), "html", null, true);
            echo "</h6></td>
                        <td><h6 class='centrar2'>";
            // line 62
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["proyecto"], "fechaCreacion", array()), "d/m/Y H:i"), "html", null, true);
            echo "</h6></td>
                        <td><h6 class='centrar2'>
                            <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_show", array("id" => $this->getAttribute($context["proyecto"], "idProyecto", array()))), "html", null, true);
            echo "\" class=\"btn btn-info\">Ver Proyecto</a>
                        </h6></td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 68
            echo "                        <td colspan=\"4\"><h6 class='centrar2'>No existen proyectos</h6></td>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proyecto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
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
        return "AppBundle:Proyecto:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 70,  146 => 68,  137 => 64,  132 => 62,  128 => 61,  124 => 60,  120 => 59,  117 => 58,  112 => 57,  92 => 39,  83 => 36,  77 => 32,  73 => 31,  59 => 20,  45 => 8,  42 => 7,  36 => 5,  30 => 3,);
    }
}
