<?php

/* ::frontend.html.twig */
class __TwigTemplate_85862476cf39fff7e7fe5b4b5ae9e6cd1effe3f8c048af9987b037736d8b6d66 extends Twig_Template
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
        echo "\">Maestro de Proyectos</a> 
                     <ul class=\"cbp-hssubmenu\">
                            <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("proyecto_list");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/images/logo_color.png"), "html", null, true);
        echo "\" alt=\"img07\"/><span>Ver Proyectos</span></a></li>
                            <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("proyecto_new");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/images/logo_color.png"), "html", null, true);
        echo "\" alt=\"img08\"/><span>Ingresar un Nuevo Proyecto</span></a></li>
                        </ul>
                    </li>                    
                    <li><a href=\"materiales/new\">Maestro de Materiales</a>
                        <ul class=\"cbp-hssubmenu\">
                            <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("material_list");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/images/logo_color.png"), "html", null, true);
        echo "\" alt=\"img07\"/><span>Ver Inventario</span></a></li>
                            <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("material_new");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/images/logo_color.png"), "html", null, true);
        echo "\" alt=\"img08\"/><span>Ingresar un Nuevo Material</span></a></li>
                        </ul></li>
                    <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("proximamente");
        echo "\">Movimientos</a></li>
                    <li> <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("proximamente");
        echo "\">Autorizaci&oacute;n de Sobregiros</a></li>
                    <li> <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("proximamente");
        echo "\">Catalogos</a>
                        <ul class=\"cbp-hssubmenu\">
                            <li><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("categoria_list");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/images/logo_color.png"), "html", null, true);
        echo "\" alt=\"img07\"/><span>Categorias</span></a></li>
                            <li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("unidadmedida");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/images/logo_color.png"), "html", null, true);
        echo "\" alt=\"img08\"/><span>Unidades de medida</span></a></li>
                            <li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("unidadnegocio");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/images/logo_color.png"), "html", null, true);
        echo "\" alt=\"img08\"/><span>Unidades de negocios</span></a></li>
                        </ul></li>
                    </li>
                    <li> <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("proximamente");
        echo "\">Salir</a></li>
                </ul>
            </div>
            <!-- nav-collapse --> 
        </nav>
    </article>

    <section class=\"contentsection\" >
    ";
        // line 54
        $this->displayBlock('main', $context, $blocks);
        // line 55
        echo "</section>

";
    }

    // line 54
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
        return array (  145 => 54,  139 => 55,  137 => 54,  126 => 46,  118 => 43,  112 => 42,  106 => 41,  101 => 39,  97 => 38,  93 => 37,  86 => 35,  80 => 34,  70 => 29,  64 => 28,  59 => 26,  55 => 25,  32 => 4,  29 => 3,);
    }
}
