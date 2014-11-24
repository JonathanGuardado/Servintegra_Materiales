<?php

/* AppBundle:UnidadMedida:index.html.twig */
class __TwigTemplate_86fac5cb21e03ddaf2ff4ab9425dd8531b9b550eb3697fc3a04b2e3bde9443a7 extends Twig_Template
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
        // line 22
        echo $this->env->getExtension('routing')->getPath("unidadmedida_new");
        echo "\">
                            <input class=\"btn btn-success w100\" type=\"button\" value=\"Nuevo\"/>
                        </a>
                    </dl>
                </dd>
            </article>
            <article class=\"w100 gris_claro-textura space\">&nbsp;</article>  
        </section>

        <div>
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
        echo "        </div>                  
        <h1 class=\"L L3\">Unidades de Medida</h1>
 <div class=\"container w100\">
        <section class=\"w100 white-box\">
            <fieldset class=\" w100\">
                <div class=\"ConfigureScrollXTable\" style=\"width:40%\" >
                    <!--sin scroll menos de 8 columnas-->                        
                    <table cellspacing=\"4\" id=\"\" class=\"tablepaginate dataTable tablapaginacion w100  tableBlock\">  
                        <thead>
                            <tr>                                
                                <th>Nombreunidad</th>
                                <th>Descripcionunidad</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 56
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 57
            echo "                                <tr>
                                    
                                    <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombreUnidad", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "descripcionUnidad", array()), "html", null, true);
            echo "</td>
                                    <td>
                                       
                                                <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("unidadmedida_show", array("id" => $this->getAttribute($context["entity"], "idUnidad", array()))), "html", null, true);
            echo "\" class=\"btn btn-info\">Ver Material</a>
                                        
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                        </tbody>
                    </table>
                </div>
            </fieldset>
        </section>
     </div>
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
        return "AppBundle:UnidadMedida:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 68,  129 => 63,  123 => 60,  119 => 59,  115 => 57,  111 => 56,  93 => 40,  84 => 37,  78 => 33,  74 => 32,  61 => 22,  45 => 8,  42 => 7,  36 => 5,  30 => 3,);
    }
}
