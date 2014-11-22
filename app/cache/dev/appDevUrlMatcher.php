<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // app_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'app_homepage');
            }

            return array (  '_controller' => 'GS\\AppBundle\\Controller\\HomeController::indexAction',  '_route' => 'app_homepage',);
        }

        if (0 === strpos($pathinfo, '/categorias')) {
            // categoria_list
            if ($pathinfo === '/categorias') {
                return array (  '_controller' => 'GS\\AppBundle\\Controller\\CategoriaController::indexAction',  '_route' => 'categoria_list',);
            }

            // categoria_show
            if (0 === strpos($pathinfo, '/categorias/show') && preg_match('#^/categorias/show(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_categoria_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoria_show')), array (  '_controller' => 'GS\\AppBundle\\Controller\\CategoriaController::showAction',  'id' => 1,));
            }
            not_categoria_show:

            // categoria_new
            if ($pathinfo === '/categorias/new') {
                return array (  '_controller' => 'GS\\AppBundle\\Controller\\CategoriaController::newAction',  '_route' => 'categoria_new',);
            }

            // categoria_edit
            if (0 === strpos($pathinfo, '/categorias/edit') && preg_match('#^/categorias/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoria_edit')), array (  '_controller' => 'GS\\AppBundle\\Controller\\CategoriaController::editAction',));
            }

            // categoria_delete
            if (0 === strpos($pathinfo, '/categorias/delete') && preg_match('#^/categorias/delete(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categoria_delete')), array (  '_controller' => 'GS\\AppBundle\\Controller\\CategoriaController::deleteAction',  'id' => NULL,));
            }

        }

        if (0 === strpos($pathinfo, '/proyectos')) {
            // proyecto_list
            if ($pathinfo === '/proyectos') {
                return array (  '_controller' => 'GS\\AppBundle\\Controller\\ProyectoController::indexAction',  '_route' => 'proyecto_list',);
            }

            // proyecto_show
            if (0 === strpos($pathinfo, '/proyectos/show') && preg_match('#^/proyectos/show(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_proyecto_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'proyecto_show')), array (  '_controller' => 'GS\\AppBundle\\Controller\\ProyectoController::showAction',  'id' => 1,));
            }
            not_proyecto_show:

            // proyecto_new
            if ($pathinfo === '/proyectos/new') {
                return array (  '_controller' => 'GS\\AppBundle\\Controller\\ProyectoController::newAction',  '_route' => 'proyecto_new',);
            }

            // proyecto_edit
            if (0 === strpos($pathinfo, '/proyectos/edit') && preg_match('#^/proyectos/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'proyecto_edit')), array (  '_controller' => 'GS\\AppBundle\\Controller\\ProyectoController::editAction',));
            }

            // proyecto_delete
            if (0 === strpos($pathinfo, '/proyectos/delete') && preg_match('#^/proyectos/delete(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'proyecto_delete')), array (  '_controller' => 'GS\\AppBundle\\Controller\\ProyectoController::deleteAction',  'id' => NULL,));
            }

        }

        if (0 === strpos($pathinfo, '/materiales')) {
            // material_list
            if ($pathinfo === '/materiales') {
                return array (  '_controller' => 'GS\\AppBundle\\Controller\\MaterialController::indexAction',  '_route' => 'material_list',);
            }

            // material_show
            if (0 === strpos($pathinfo, '/materiales/show') && preg_match('#^/materiales/show(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_material_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'material_show')), array (  '_controller' => 'GS\\AppBundle\\Controller\\MaterialController::showAction',  'id' => 1,));
            }
            not_material_show:

            // material_new
            if ($pathinfo === '/materiales/new') {
                return array (  '_controller' => 'GS\\AppBundle\\Controller\\MaterialController::newAction',  '_route' => 'material_new',);
            }

            // material_edit
            if (0 === strpos($pathinfo, '/materiales/edit') && preg_match('#^/materiales/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'material_edit')), array (  '_controller' => 'GS\\AppBundle\\Controller\\MaterialController::editAction',));
            }

            // material_delete
            if (0 === strpos($pathinfo, '/materiales/delete') && preg_match('#^/materiales/delete(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'material_delete')), array (  '_controller' => 'GS\\AppBundle\\Controller\\MaterialController::deleteAction',  'id' => NULL,));
            }

        }

        if (0 === strpos($pathinfo, '/detalles')) {
            // detalle_list
            if ($pathinfo === '/detalles') {
                return array (  '_controller' => 'GS\\AppBundle\\Controller\\DetalleController::indexAction',  '_route' => 'detalle_list',);
            }

            // detalle_show
            if (0 === strpos($pathinfo, '/detalles/show') && preg_match('#^/detalles/show(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_detalle_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'detalle_show')), array (  '_controller' => 'GS\\AppBundle\\Controller\\DetalleController::showAction',  'id' => 1,));
            }
            not_detalle_show:

            // detalle_new
            if ($pathinfo === '/detalles/new') {
                return array (  '_controller' => 'GS\\AppBundle\\Controller\\DetalleController::newAction',  '_route' => 'detalle_new',);
            }

            // detalle_edit
            if (0 === strpos($pathinfo, '/detalles/edit') && preg_match('#^/detalles/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'detalle_edit')), array (  '_controller' => 'GS\\AppBundle\\Controller\\DetalleController::editAction',));
            }

            // detalle_delete
            if (0 === strpos($pathinfo, '/detalles/delete') && preg_match('#^/detalles/delete(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'detalle_delete')), array (  '_controller' => 'GS\\AppBundle\\Controller\\DetalleController::deleteAction',  'id' => NULL,));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
