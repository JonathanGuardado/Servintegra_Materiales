<?php

/* ::frontend.html.twig */
class __TwigTemplate_a5b7bf187c140d6c6cf636f6f266eaba70f79f07f9f0b657208fdf91aa71f680 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
<section class=\"w100 L content_head\">
    <article class=\"w100 L gris_claro\" style=\"background: black !important;\">
        <div class=\"w100 L naranja\">
            <div class=\"space-min\">&nbsp;</div>
        </div>
        <div class=\"w50 L\">
            <div class=\"w100 L logo_p T1 L5 B1\"></div>
        </div>
        <div class=\"w100 L azul_claro\">
            <div class=\"space-min\">&nbsp;</div>
        </div>
    </article>
</section>

<article class=\"L w100\">
    <!-- menu --> 
    <nav class=\"R R1 navbar navbar-default\">
        <!-- nav-collapse -->
        <div class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li> <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("app_homepage");
        echo "\">Inicio</a> </li>
                <li> <a href=\"proyectos.php\">Maestro de Proyectos</a> </li>
<!--                <li> <a href=\"./calculo/\">Calcular</a> </li>-->
                <li><a href=\"materiales.php\">Maestro de Materiales</a></li>
                <li><a href=\"movimientos.php\">Movimientos</a></li>
                <li> <a href=\"autorizacion.php\">Autorizaci&oacute;n de Sobregiros</a></li>
            </ul>
        </div>
        <!-- nav-collapse --> 
    </nav>
</article>

<section class=\"contentsection\" >
    ";
        // line 38
        $this->displayBlock('main', $context, $blocks);
        // line 39
        echo "</section>

";
    }

    // line 38
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::frontend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 38,  73 => 39,  71 => 38,  55 => 25,  32 => 4,  29 => 3,);
    }
}
