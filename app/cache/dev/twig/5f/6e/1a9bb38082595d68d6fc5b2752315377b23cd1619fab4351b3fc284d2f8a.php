<?php

/* AppBundle:Categoria:index.html.twig */
class __TwigTemplate_5f6e1a9bb38082595d68d6fc5b2752315377b23cd1619fab4351b3fc284d2f8a extends Twig_Template
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
        echo " Listado de Categorias ";
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
        echo $this->env->getExtension('routing')->getPath("categoria_new");
        echo "\">
                <input class=\"btn btn-success w100\" type=\"button\" value=\"Nuevo\"/>
            </a>
        </dl>
        </dd>
    </article>
    <article class=\"w100 gris_claro-textura space\">&nbsp;</article>  
</section>

<div class=\"container\">

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
<h1>Listado de Categorias</h1>

<section class=\"w100 space-L1 L white-box\">
    <fieldset class=\"L w100\">
        <div class=\"ConfigureScrollXTable  \" >
            <!--sin scroll menos de 8 columnas-->
            <table cellspacing=\"0\" id=\"\" class=\"tablepaginate dataTable tablapaginacion w100 L tableBlock\">       
                <!--con scroll mas de 8 columnas-->
                    <!--<table cellspacing=\"0\" id=\"\" class=\"tablepaginateScroll tablapaginacion w100 L tableBlock\">-->
                <thead>
                <th><h6><center>Id</center></h6></th>
                <th><h6><center>Nombre</center></h6></th>
                <th><h6><center>Descripción</center></h6></th>
                <th><h6><center>Fecha Ingreso</center></h6></th>
                <th><h6><center>Opcion</center></h6></th>
                </thead>
                <tbody>
                    ";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) ? $context["categorias"] : $this->getContext($context, "categorias")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 68
            echo "                    <tr>
                        <td><h6 class='centrar2'>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "id", array()), "html", null, true);
            echo "</h6></td>
                        <td><h6 class='centrar2'>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "nombre", array()), "html", null, true);
            echo "</h6></td>
                        <td><h6 class='centrar2'>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "descripcion", array()), "html", null, true);
            echo "</h6></td>
                        <td><h6 class='centrar2'>";
            // line 72
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["categoria"], "createdAt", array()), "d/m/Y H:i"), "html", null, true);
            echo "</h6></td>
                        <td><h6 class='centrar2'>
                            <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categoria_show", array("id" => $this->getAttribute($context["categoria"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-info\">Ver Categoria</a>
                        </h6></td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 78
            echo "                        <td colspan=\"4\"><h6 class='centrar2'>No existen categorias</h6></td>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
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
        return "AppBundle:Categoria:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 80,  156 => 78,  147 => 74,  142 => 72,  138 => 71,  134 => 70,  130 => 69,  127 => 68,  122 => 67,  102 => 49,  93 => 46,  87 => 42,  83 => 41,  69 => 30,  45 => 8,  42 => 7,  36 => 5,  30 => 3,);
    }
}
