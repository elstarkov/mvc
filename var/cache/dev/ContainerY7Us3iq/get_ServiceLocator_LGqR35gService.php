<?php

namespace ContainerY7Us3iq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LGqR35gService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.LGqR35g' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.LGqR35g'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'maternalMortalityRepository' => ['privates', 'App\\Repository\\MaternalMortalityRepository', 'getMaternalMortalityRepositoryService', true],
        ], [
            'maternalMortalityRepository' => 'App\\Repository\\MaternalMortalityRepository',
        ]);
    }
}
