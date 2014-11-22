<?php

/* AppBundle:Detalle:create.html.twig */
class __TwigTemplate_dc6e3d5dcfa27efc09a1609d08e76b9aca7764a64588ac74be52458746789928 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::frontend.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'id' => array($this, 'block_id'),
            'main' => array($this, 'block_main'),
            'javasingles' => array($this, 'block_javasingles'),
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
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'errors');
        echo "
    <article class=\"L w100 \">
        <dd class=\"L w50 L25\">
            <fieldset class=\"w100 T2 B2 L\">
                <dl class=\"w100 L\">
                    <h4 class=\"text-center\">Detalle Despacho para Proyecto</h4>
                    <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/images/line-shadow.png"), "html", null, true);
        echo "\" class=\"line_shadowa\">
                </dl>
                <dl class=\"w100 L T1\">
                    <div class=\"L text-naranja T2\">
                        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "proyecto", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Proyecto"));
        echo "
                    </div>
                    <div class=\"L w50 L2\">
                        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "proyecto", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </dl>
                <dl class=\"w100 L T1\">
                    <div class=\"L text-naranja T2\">
                        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "periodo", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Periodo"));
        echo "
                    </div>
                    <div class=\"L w50 L2\">
                        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "periodo", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </dl>
                <dl class=\"w100 L T1\">
                    <div class=\"L text-naranja T2\">
                        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "observacion", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Observaciones"));
        echo "
                    </div>
                    <div class=\"L w50 L2\">
                        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "observacion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                </dl>

                <h3>Ordenes</h3>

                <div class=\"ordenes\" data-prototype=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "ordenes", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
                <p id=\"addButton\"></p>

                <table cellspacing=\"0\" id=\"\" class=\"tablepaginate dataTable tablapaginacion w100 L tableBlock\">
                    <thead>
                        <th><h6><center>#</center></h6></th>
                        <th><h6><center>Material</center></h6></th>
                        <th><h6><center>Cantidad</center></h6></th>
                        <th><h6><center>Valor</center></h6></th>
                    </thead>
                    <tbody>
                        ";
        // line 75
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "ordenes", array()));
        foreach ($context['_seq'] as $context["key"] => $context["orden"]) {
            // line 76
            echo "                        <tr>
                            <td><h6 class='centrar2'>";
            // line 77
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</h6></td>
                            <td><h6 class='centrar2'>";
            // line 78
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["orden"], "material", array()), 'row');
            echo "</h6></td>
                            <td><h6 class='centrar2'>";
            // line 79
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["orden"], "cantidad", array()), 'row');
            echo "</h6></td>
                            <td><h6 class='centrar2'>";
            // line 80
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["orden"], "valor", array()), 'row');
            echo "</h6></td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['orden'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                    </tbody>

                </table>

                </div>


            </fieldset> 
        </dd> 
    </article>
    <article class=\"w100 L\">
        <dd class=\"w50 L25 L B3\">
            <dl class=\"w15 R R3\">
                <a href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("detalle_list");
        echo "\">
                    <input class=\"btn btn-danger w100\" type=\"button\" value=\"Cancelar\"/>
                </a>                
            </dl>
            <dl class=\"w15 R R1\">
                ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), "crear", array()), 'widget', array("label" => "Guardar", "attr" => array("class" => "btn btn-success")));
        echo "
            </dl>
        </dd>
    </article>
    ";
        // line 105
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulario"]) ? $context["formulario"] : $this->getContext($context, "formulario")), 'form_end');
        echo "
    <div class=\"L w100\">
        <img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/app/images/line-shadow.png"), "html", null, true);
        echo "\" class=\"line_shadowa\"> 
    </div>
</section>

</div> <!-- /container -->

";
    }

    // line 115
    public function block_javasingles($context, array $blocks = array())
    {
        // line 116
        echo "<script >
var \$collectionHolder;

// setup an \"add a order\" link
var \$addTagLink = \$('<a href=\"#\" class=\"add_tag_link btn btn-info\">Agregar</a>');
var \$newLinkLi = \$('<p></p>').append(\$addTagLink);

jQuery(document).ready(function() {
    // Get the ul that holds the collection of order's
    \$collectionHolder = \$('div.ordenes');

    // add the \"add a order\" anchor and li to the order's ul
    \$collectionHolder.append(\$newLinkLi);

    // count the current form inputs we have (e.g. 2), use that as the new
    // index when inserting a new item (e.g. 2)
    \$collectionHolder.data('index', \$collectionHolder.find(':input').length);

    \$addTagLink.on('click', function(e) {
        // prevent the link from creating a \"#\" on the URL
        e.preventDefault();

        // add a new order form (see next code block)
        addTagForm(\$collectionHolder, \$newLinkLi);
    });
});

function addTagForm(\$collectionHolder, \$newLinkLi) {

    console.log(\$collectionHolder);


    // Get the data-prototype explained earlier
    var prototype = \$collectionHolder.data('prototype');

    // get the new index
    var index = \$collectionHolder.data('index');

    // Replace '__name__' in the prototype's HTML to
    // instead be a number based on how many items we have
    var newForm = prototype.replace(/__name__/g, index);

    // increase the index with one for the next item
    \$collectionHolder.data('index', index + 1);

    // Display the form in the page in an li, before the \"Add a tag\" link li
    var \$newFormLi = \$('<li></li>').append(newForm);
    \$newLinkLi.before(\$newFormLi);

    // add a delete link to the new form
    addTagFormDeleteLink(\$newFormLi);
}

function addTagFormDeleteLink(\$tagFormLi) {
    var \$removeFormA = \$('<a href=\"#\">Delete</a>');
    \$tagFormLi.append(\$removeFormA);

    \$removeFormA.on('click', function(e) {
        // prevent the link from creating a \"#\" on the URL
        e.preventDefault();

        // remove the li for the tag form
        \$tagFormLi.remove();
    });
}

</script>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Detalle:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 116,  222 => 115,  211 => 107,  206 => 105,  199 => 101,  191 => 96,  176 => 83,  167 => 80,  163 => 79,  159 => 78,  155 => 77,  152 => 76,  148 => 75,  134 => 64,  125 => 58,  119 => 55,  111 => 50,  105 => 47,  97 => 42,  91 => 39,  84 => 35,  75 => 29,  71 => 28,  66 => 26,  46 => 8,  43 => 7,  37 => 5,  31 => 3,);
    }
}
