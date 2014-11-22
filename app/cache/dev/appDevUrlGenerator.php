<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GS\\AppBundle\\Controller\\HomeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categoria_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GS\\AppBundle\\Controller\\CategoriaController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/categorias',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categoria_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GS\\AppBundle\\Controller\\CategoriaController::showAction',    'id' => 1,  ),  2 =>   array (    'id' => '\\d+',    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/categorias/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categoria_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GS\\AppBundle\\Controller\\CategoriaController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/categorias/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categoria_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GS\\AppBundle\\Controller\\CategoriaController::editAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/categorias/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'categoria_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GS\\AppBundle\\Controller\\CategoriaController::deleteAction',    'id' => NULL,  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/categorias/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'proyecto_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GS\\AppBundle\\Controller\\ProyectoController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/proyectos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'proyecto_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GS\\AppBundle\\Controller\\ProyectoController::showAction',    'id' => 1,  ),  2 =>   array (    'id' => '\\d+',    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/proyectos/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'proyecto_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GS\\AppBundle\\Controller\\ProyectoController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/proyectos/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'proyecto_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GS\\AppBundle\\Controller\\ProyectoController::editAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/proyectos/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'proyecto_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GS\\AppBundle\\Controller\\ProyectoController::deleteAction',    'id' => NULL,  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/proyectos/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'material_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GS\\AppBundle\\Controller\\MaterialController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/materiales',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'material_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GS\\AppBundle\\Controller\\MaterialController::showAction',    'id' => 1,  ),  2 =>   array (    'id' => '\\d+',    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/materiales/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'material_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GS\\AppBundle\\Controller\\MaterialController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/materiales/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'material_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GS\\AppBundle\\Controller\\MaterialController::editAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/materiales/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'material_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GS\\AppBundle\\Controller\\MaterialController::deleteAction',    'id' => NULL,  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/materiales/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'detalle_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GS\\AppBundle\\Controller\\DetalleController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/detalles',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'detalle_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GS\\AppBundle\\Controller\\DetalleController::showAction',    'id' => 1,  ),  2 =>   array (    'id' => '\\d+',    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/detalles/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'detalle_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GS\\AppBundle\\Controller\\DetalleController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/detalles/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'detalle_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GS\\AppBundle\\Controller\\DetalleController::editAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/detalles/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'detalle_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'GS\\AppBundle\\Controller\\DetalleController::deleteAction',    'id' => NULL,  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/detalles/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
