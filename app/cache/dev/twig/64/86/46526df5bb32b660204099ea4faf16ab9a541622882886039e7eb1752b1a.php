<?php

/* ::base.html.twig */
class __TwigTemplate_648646526df5bb32b660204099ea4faf16ab9a541622882886039e7eb1752b1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'id' => array($this, 'block_id'),
            'body' => array($this, 'block_body'),
            'javasingles' => array($this, 'block_javasingles'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=8; IE=9; text/html\" />
        <meta charset=\"utf-8\">
        <link rel=\"icon\" type=\"image/x-icon\"  href=\"images/favicon.ico\"/>
        <link rel=\"stylesheet\" type=\"text/css\"  href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/css/estilo.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\"  href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/css/jquery-ui.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\"  href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/css/default.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\"  href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/css/component.css"), "html", null, true);
        echo "\" />
        <title>Servintegra | ";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "</head>
<body id=\"";
        // line 14
        $this->displayBlock('id', $context, $blocks);
        echo "\">
    <div class=\"divcontainer\">
     <center>
    ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "    </center>
    <footer class=\"footer\">
        <section class=\" w100 img_footer\">
            <div class=\"w100 L\">
                <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/images/logo_servin_pequeno1.png"), "html", null, true);
        echo "\" class=\"L logo_p1 T1 L5 B1\"/>
            </div>
            <article>
                <div class=\"L25 L w50\">
                    <div class=\"w100 L gris_claro\">
                        <div class=\"space-line\">&nbsp;</div>
                    </div>
                    <div class=\"text-claro text-center\">
                        Copyright 2014 &copy; | GRUPO SERVINTEGRA S.A. de C.V.
                        Todos los Derechos Reservados
                    </div>
                </div>
            </article>
        </section>
    </footer>
</div>

<script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/js/scripts/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/js/scripts/jquery-ui.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/js/scripts/bootstrap.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/js/scripts/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/js/scripts/html5shiv.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/js/scripts/respond.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/js/scripts/funciones.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/js/scripts/holder.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/js/scripts/jquery.bpopup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/js/scripts/popups.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/js/scripts/jquery.validate.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/js/scripts/jquery.mask.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/js/scripts/validaciones.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/js/scripts/alertas.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/js/scripts/paginacion.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/js/scripts/modernizr.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/js/scripts/modernizr.custom.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/js/scripts/cbpHorizontalSlideOutMenu.min.js"), "html", null, true);
        echo "\"></script>
<script>
    var menu = new cbpHorizontalSlideOutMenu(document.getElementById('cbp-hsmenu-wrapper'));
    
    jQuery(document).ready(function(){        
        jQuery(\"section\").click(function(){        
        menu.menuItems[menu.current];    
        menu.current=-1
        menu.menuBg.style.height = \"0px\";            
        jQuery(\"li.cbp-hsitem-open\").attr({\"data-open\":\"\",\"class\":\"\"})           
        })
        jQuery(\"button\").addClass(\"btn btn-primary\")
    })
</script>



";
        // line 73
        $this->displayBlock('javasingles', $context, $blocks);
        // line 74
        echo "</body>
</html>";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 14
    public function block_id($context, array $blocks = array())
    {
        echo "";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
    }

    // line 73
    public function block_javasingles($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 73,  202 => 17,  196 => 14,  191 => 12,  186 => 11,  181 => 74,  179 => 73,  159 => 56,  155 => 55,  151 => 54,  147 => 53,  143 => 52,  139 => 51,  135 => 50,  131 => 49,  127 => 48,  123 => 47,  119 => 46,  115 => 45,  111 => 44,  107 => 43,  103 => 42,  99 => 41,  95 => 40,  91 => 39,  71 => 22,  65 => 18,  63 => 17,  57 => 14,  54 => 13,  52 => 12,  48 => 11,  44 => 10,  40 => 9,  36 => 8,  32 => 7,  24 => 1,);
    }
}
