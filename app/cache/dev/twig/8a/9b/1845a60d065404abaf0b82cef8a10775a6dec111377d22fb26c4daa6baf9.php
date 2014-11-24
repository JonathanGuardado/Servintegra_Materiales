<?php

/* AppBundle:Material:create.html.twig */
class __TwigTemplate_8a9b1845a60d065404abaf0b82cef8a10775a6dec111377d22fb26c4daa6baf9 extends Twig_Template
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
        <center>
    ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'form', array("attr" => array("class" => " formulario")));
        echo "
            </center>

            <div class=\"L w100\">
                <img src=\"";
        // line 34
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
        return array (  79 => 34,  72 => 30,  65 => 26,  45 => 8,  42 => 7,  36 => 5,  30 => 3,);
    }
}
