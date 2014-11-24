<?php

/* AppBundle:Material:create.html.twig */
class __TwigTemplate_61f02ad7ee33ed8f55cc03f4e05411c337d3440ac7dcb08f2d422b32fb2572c4 extends Twig_Template
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
    <article class=\"w100 gris_claro-textura space\"> &nbsp;</article>
    <article class=\"w100 gris_claro-textura space\"> &nbsp;</article>
    <article class=\"w100 gris_claro-textura space border-colorgray\">&nbsp;</article>  
</section>

<div class=\"container\">

    <section> 
        <div class=\"L w50\">
            <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/images/line-shadow.png"), "html", null, true);
        echo "\" class=\"line_shadowa\"> 
        </div>
            <br/>
        <h1 class=\"L L3\">Nuevo Material</h1>
        <h3 class=\"L L15 T3\">C&oacute;digo  Material: <font style=\"color:red\">";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</font></h3>
    ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'form', array("attr" => array("class" => " formulario T8")));
        echo "
        

            <div class=\"L w100\">
                <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/images/line-shadow.png"), "html", null, true);
        echo "\" class=\"line_shadowa\"> 
            </div>
        </section>

    </div> <!-- /container -->



";
    }

    public function getTemplateName()
    {
        return "AppBundle:Material:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 35,  76 => 31,  72 => 30,  65 => 26,  45 => 8,  42 => 7,  36 => 5,  30 => 3,);
    }
}
