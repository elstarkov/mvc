<?php

namespace ContainerY7Us3iq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProjControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ProjController' shared autowired service.
     *
     * @return \App\Controller\ProjController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ProjController.php';

        $container->services['App\\Controller\\ProjController'] = $instance = new \App\Controller\ProjController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\ProjController', $container));

        return $instance;
    }
}
