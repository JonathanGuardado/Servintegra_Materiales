<?php

/* ::base.html.twig */
class __TwigTemplate_851bb09a92294b273c2866c13d4e65a614af1e6faeb59aeab5eff2163e04cda3 extends Twig_Template
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
        <title>Servintegra | ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    </head>
    <body id=\"";
        // line 11
        $this->displayBlock('id', $context, $blocks);
        echo "\">
        <div class=\"divcontainer\">
            ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "            <footer class=\"footer\">
                <section class=\"L w100 img_footer\">
                    <div class=\"w100 L\">
                        <img src=\"";
        // line 17
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
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/js/scripts/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/js/scripts/jquery-ui.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/js/scripts/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/js/scripts/html5shiv.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/js/scripts/respond.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/js/scripts/-funciones.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/js/scripts/holder.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/js/scripts/jquery.bpopup.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/js/scripts/popups.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/js/scripts/jquery.validate.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/js/scripts/jquery.mask.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/js/scripts/validaciones.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/js/scripts/alertas.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/js/scripts/paginacion.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/js/scripts/modernizr.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 50
        $this->displayBlock('javasingles', $context, $blocks);
        // line 51
        echo "    </body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 11
    public function block_id($context, array $blocks = array())
    {
        echo "";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
    }

    // line 50
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
        return array (  166 => 50,  161 => 13,  155 => 11,  150 => 9,  145 => 8,  140 => 51,  138 => 50,  133 => 48,  129 => 47,  125 => 46,  121 => 45,  117 => 44,  113 => 43,  109 => 42,  105 => 41,  101 => 40,  97 => 39,  93 => 38,  89 => 37,  85 => 36,  81 => 35,  77 => 34,  57 => 17,  52 => 14,  50 => 13,  45 => 11,  42 => 10,  40 => 9,  36 => 8,  32 => 7,  24 => 1,);
    }
}
