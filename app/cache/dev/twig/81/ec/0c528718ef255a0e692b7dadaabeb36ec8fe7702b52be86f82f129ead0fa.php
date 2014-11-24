<?php

/* ::frontend.html.twig */
class __TwigTemplate_81ec0c528718ef255a0e692b7dadaabeb36ec8fe7702b52be86f82f129ead0fa extends Twig_Template
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
        <nav class=\"cbp-hsmenu-wrapper  navbar navbar-default\" id=\"cbp-hsmenu-wrapper\">
            <!-- nav-collapse -->
            <div class=\"cbp-hsinner navbar-collapse collapse\">
                <ul class=\"cbp-hsmenu nav navbar-nav navbar-right\">
                    <li> <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("app_homepage");
        echo "\">Inicio</a> </li>
                    <li> <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("proximamente");
        echo "\">Maestro de Proyectos</a> </li>                    
                    <li><a href=\"materiales/new\">Maestro de Materiales</a>
                        <ul class=\"cbp-hssubmenu\">
                            <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("material_list");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/images/logo_color.png"), "html", null, true);
        echo "\" alt=\"img07\"/><span>Ver Inventario</span></a></li>
                            <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("material_new");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/images/logo_color.png"), "html", null, true);
        echo "\" alt=\"img08\"/><span>Nuevo</span></a></li>
                        </ul></li>
                    <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("proximamente");
        echo "\">Movimientos</a></li>
                    <li> <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("proximamente");
        echo "\">Autorizaci&oacute;n de Sobregiros</a></li>
                    <li> <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("proximamente");
        echo "\">Catalogos</a>
                        <ul class=\"cbp-hssubmenu\">
                            <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("categoria_list");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/images/logo_color.png"), "html", null, true);
        echo "\" alt=\"img07\"/><span>Categorias</span></a></li>
                            <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("unidadmedida");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/images/logo_color.png"), "html", null, true);
        echo "\" alt=\"img08\"/><span>Unidades de medida</span></a></li>
                            <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("unidadmedida");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/images/logo_color.png"), "html", null, true);
        echo "\" alt=\"img08\"/><span>Unidades de negocios</span></a></li>
                        </ul></li>
                    </li>
                    <li> <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("proximamente");
        echo "\">Salir</a></li>
                </ul>
            </div>
            <!-- nav-collapse --> 
        </nav>
    </article>

    <section class=\"contentsection\" >
    ";
        // line 49
        $this->displayBlock('main', $context, $blocks);
        // line 50
        echo "</section>

";
    }

    // line 49
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
        return array (  130 => 49,  124 => 50,  122 => 49,  111 => 41,  103 => 38,  97 => 37,  91 => 36,  86 => 34,  82 => 33,  78 => 32,  71 => 30,  65 => 29,  59 => 26,  55 => 25,  32 => 4,  29 => 3,);
    }
}
