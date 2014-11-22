<?php

/* AppBundle:Proyecto:create.html.twig */
class __TwigTemplate_d12b4f0f2c3566178d51597abad09b9a610e820ce1778011c061cc52cb817b2b extends Twig_Template
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
        echo "create";
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
    <article class=\"w100 gris_claro-textura space\"> &nbsp;</article>
    <article class=\"w100 gris_claro-textura space\"> &nbsp;</article>
    <article class=\"w100 gris_claro-textura space border-colorgray\">&nbsp;</article>  
</section>

<div class=\"container\">

<section> 
    <div class=\"L w100\">
        <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/images/line-shadow.png"), "html", null, true);
        echo "\" class=\"line_shadowa\"> 
    </div>
    ";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
    <article class=\"L w100 \">
        <dd class=\"L w50 L25\">
            <fieldset class=\"w100 T2 B2 L\">
                <dl class=\"w100 L\">
                    <h4 class=\"text-center\">Nuevo Proyecto</h4>
                    <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/images/line-shadow.png"), "html", null, true);
        echo "\" class=\"line_shadowa\">
                </dl>
                <dl class=\"w100 L T1\">
                    <div class=\"L text-naranja T2\">
                        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "nombre", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Nombre Proyecto"));
        echo "
                    </div>
                    <div class=\"L w50 L2\">
                        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </dl>
                <dl class=\"w100 L T1\">
                    <div class=\"L text-naranja T2\">
                        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "personas", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Personas en Proyecto"));
        echo "
                    </div>
                    <div class=\"L w50 L2\">
                        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "personas", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </dl>
                <dl class=\"w100 L T1\">
                    <div class=\"L text-naranja T2\">
                        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "fechaInicio", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Fecha Inicio"));
        echo "
                    </div>
                    <div class=\"L w50 L2\">
                        ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "fechaInicio", array()), 'widget', array("attr" => array("placeholder" => "dd/mm/yyyy")));
        echo "
                    </div>
                </dl>
                <dl class=\"w100 L T1\">
                    <div class=\"L text-naranja T2\">
                        ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "presupuesto", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Presupuesto Anual"));
        echo "
                    </div>
                    <div class=\"L w50 L2\">
                        ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "presupuesto", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </dl>
                <dl class=\"w100 L T1\">
                    <div class=\"L text-naranja T2\">
                        ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "unidadNegocio", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Unidad Negocio"));
        echo "
                    </div>
                    <div class=\"L w50 L2\">
                        ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "unidadNegocio", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </dl>
                <dl class=\"w100 L T1\">
                    <div class=\"L text-naranja T2\">
                        ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "fase", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Fase"));
        echo "
                    </div>
                    <div class=\"L w50 L2\">
                        ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "fase", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </dl>
            </fieldset>
        </dd> 
    </article>
    <article class=\"w100 L\">
        <dd class=\"w50 L25 L B3\">
            <dl class=\"w15 R R3\">
                <a href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("proyecto_list");
        echo "\">
                    <input class=\"btn btn-danger w100\" type=\"button\" value=\"Cancelar\"/>
                </a>                
            </dl>
            <dl class=\"w15 R R1\">
                ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "crear", array()), 'widget', array("label" => "Guardar", "attr" => array("class" => "btn btn-success")));
        echo "
            </dl>
        </dd>
    </article>
    ";
        // line 99
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'form_end');
        echo "
    <div class=\"L w100\">
        <img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/images/line-shadow.png"), "html", null, true);
        echo "\" class=\"line_shadowa\"> 
    </div>
</section>

</div> <!-- /container -->

";
    }

    public function getTemplateName()
    {
        return "AppBundle:Proyecto:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 101,  189 => 99,  182 => 95,  174 => 90,  162 => 81,  156 => 78,  148 => 73,  142 => 70,  134 => 65,  128 => 62,  120 => 57,  114 => 54,  106 => 49,  100 => 46,  92 => 41,  86 => 38,  79 => 34,  70 => 28,  65 => 26,  45 => 8,  42 => 7,  36 => 5,  30 => 3,);
    }
}
