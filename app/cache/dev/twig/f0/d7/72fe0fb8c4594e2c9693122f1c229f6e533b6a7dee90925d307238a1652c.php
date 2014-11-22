<?php

/* AppBundle:Home:index.html.twig */
class __TwigTemplate_f0d772fe0fb8c4594e2c9693122f1c229f6e533b6a7dee90925d307238a1652c extends Twig_Template
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
    <div class=\"w100 L\">
        <img class=\"erp\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/images/crecimiento2.jpg"), "html", null, true);
        echo "\"/>
    </div>
</section>
<section class=\"L w100\">
<!--inicio-->
    <article>
        <div class=\"w60 L\">          
<!--            <img class=\"erp\" src=\"images/crecimiento.jpg\"/>-->
        </div> 
    </article>
</section>

";
    }

    public function getTemplateName()
    {
        return "AppBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 11,  45 => 8,  42 => 7,  36 => 5,  30 => 3,);
    }
}
