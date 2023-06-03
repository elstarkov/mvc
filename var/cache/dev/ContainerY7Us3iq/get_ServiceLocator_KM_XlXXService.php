<?php

namespace ContainerY7Us3iq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KM_XlXXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kM.XlXX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kM.XlXX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\BookController::PostCreateBook' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\BookController::deleteBook' => ['privates', '.service_locator.B2ZeSAD', 'get_ServiceLocator_B2ZeSADService', true],
            'App\\Controller\\BookController::postDeleteBook' => ['privates', '.service_locator.B2ZeSAD', 'get_ServiceLocator_B2ZeSADService', true],
            'App\\Controller\\BookController::postUpdateBook' => ['privates', '.service_locator.B2ZeSAD', 'get_ServiceLocator_B2ZeSADService', true],
            'App\\Controller\\BookController::showAllBooks' => ['privates', '.service_locator.B2ZeSAD', 'get_ServiceLocator_B2ZeSADService', true],
            'App\\Controller\\BookController::showBookById' => ['privates', '.service_locator.B2ZeSAD', 'get_ServiceLocator_B2ZeSADService', true],
            'App\\Controller\\BookController::updateBook' => ['privates', '.service_locator.B2ZeSAD', 'get_ServiceLocator_B2ZeSADService', true],
            'App\\Controller\\ControllerJson::apiBooks' => ['privates', '.service_locator.B2ZeSAD', 'get_ServiceLocator_B2ZeSADService', true],
            'App\\Controller\\ControllerJson::apiIsbn' => ['privates', '.service_locator.B2ZeSAD', 'get_ServiceLocator_B2ZeSADService', true],
            'App\\Controller\\MaternalMortalityController::delete' => ['privates', '.service_locator.LGqR35g', 'get_ServiceLocator_LGqR35gService', true],
            'App\\Controller\\OvercrowdedController::delete' => ['privates', '.service_locator.TYfiFgz', 'get_ServiceLocator_TYfiFgzService', true],
            'App\\Controller\\OvercrowdedController::index' => ['privates', '.service_locator.XOE48jE', 'get_ServiceLocator_XOE48jEService', true],
            'App\\Controller\\ProductController::createProduct' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\ProductController::deleteProductById' => ['privates', '.service_locator.0Fb1YCW', 'get_ServiceLocator_0Fb1YCWService', true],
            'App\\Controller\\ProductController::showAllProduct' => ['privates', '.service_locator.0Fb1YCW', 'get_ServiceLocator_0Fb1YCWService', true],
            'App\\Controller\\ProductController::showProductById' => ['privates', '.service_locator.0Fb1YCW', 'get_ServiceLocator_0Fb1YCWService', true],
            'App\\Controller\\ProductController::updateProduct' => ['privates', '.service_locator.0Fb1YCW', 'get_ServiceLocator_0Fb1YCWService', true],
            'App\\Controller\\ProjController::api_create_overcrowded' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\ProjController::api_foreign' => ['privates', '.service_locator.TYfiFgz', 'get_ServiceLocator_TYfiFgzService', true],
            'App\\Controller\\ProjController::api_mortality' => ['privates', '.service_locator.1h_CnCF', 'get_ServiceLocator_1hCnCFService', true],
            'App\\Controller\\ProjController::api_overcrowd' => ['privates', '.service_locator.TYfiFgz', 'get_ServiceLocator_TYfiFgzService', true],
            'App\\Controller\\ProjController::api_sweden' => ['privates', '.service_locator.TYfiFgz', 'get_ServiceLocator_TYfiFgzService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\BookController:PostCreateBook' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\BookController:deleteBook' => ['privates', '.service_locator.B2ZeSAD', 'get_ServiceLocator_B2ZeSADService', true],
            'App\\Controller\\BookController:postDeleteBook' => ['privates', '.service_locator.B2ZeSAD', 'get_ServiceLocator_B2ZeSADService', true],
            'App\\Controller\\BookController:postUpdateBook' => ['privates', '.service_locator.B2ZeSAD', 'get_ServiceLocator_B2ZeSADService', true],
            'App\\Controller\\BookController:showAllBooks' => ['privates', '.service_locator.B2ZeSAD', 'get_ServiceLocator_B2ZeSADService', true],
            'App\\Controller\\BookController:showBookById' => ['privates', '.service_locator.B2ZeSAD', 'get_ServiceLocator_B2ZeSADService', true],
            'App\\Controller\\BookController:updateBook' => ['privates', '.service_locator.B2ZeSAD', 'get_ServiceLocator_B2ZeSADService', true],
            'App\\Controller\\ControllerJson:apiBooks' => ['privates', '.service_locator.B2ZeSAD', 'get_ServiceLocator_B2ZeSADService', true],
            'App\\Controller\\ControllerJson:apiIsbn' => ['privates', '.service_locator.B2ZeSAD', 'get_ServiceLocator_B2ZeSADService', true],
            'App\\Controller\\MaternalMortalityController:delete' => ['privates', '.service_locator.LGqR35g', 'get_ServiceLocator_LGqR35gService', true],
            'App\\Controller\\OvercrowdedController:delete' => ['privates', '.service_locator.TYfiFgz', 'get_ServiceLocator_TYfiFgzService', true],
            'App\\Controller\\OvercrowdedController:index' => ['privates', '.service_locator.XOE48jE', 'get_ServiceLocator_XOE48jEService', true],
            'App\\Controller\\ProductController:createProduct' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\ProductController:deleteProductById' => ['privates', '.service_locator.0Fb1YCW', 'get_ServiceLocator_0Fb1YCWService', true],
            'App\\Controller\\ProductController:showAllProduct' => ['privates', '.service_locator.0Fb1YCW', 'get_ServiceLocator_0Fb1YCWService', true],
            'App\\Controller\\ProductController:showProductById' => ['privates', '.service_locator.0Fb1YCW', 'get_ServiceLocator_0Fb1YCWService', true],
            'App\\Controller\\ProductController:updateProduct' => ['privates', '.service_locator.0Fb1YCW', 'get_ServiceLocator_0Fb1YCWService', true],
            'App\\Controller\\ProjController:api_create_overcrowded' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\ProjController:api_foreign' => ['privates', '.service_locator.TYfiFgz', 'get_ServiceLocator_TYfiFgzService', true],
            'App\\Controller\\ProjController:api_mortality' => ['privates', '.service_locator.1h_CnCF', 'get_ServiceLocator_1hCnCFService', true],
            'App\\Controller\\ProjController:api_overcrowd' => ['privates', '.service_locator.TYfiFgz', 'get_ServiceLocator_TYfiFgzService', true],
            'App\\Controller\\ProjController:api_sweden' => ['privates', '.service_locator.TYfiFgz', 'get_ServiceLocator_TYfiFgzService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\BookController::PostCreateBook' => '?',
            'App\\Controller\\BookController::deleteBook' => '?',
            'App\\Controller\\BookController::postDeleteBook' => '?',
            'App\\Controller\\BookController::postUpdateBook' => '?',
            'App\\Controller\\BookController::showAllBooks' => '?',
            'App\\Controller\\BookController::showBookById' => '?',
            'App\\Controller\\BookController::updateBook' => '?',
            'App\\Controller\\ControllerJson::apiBooks' => '?',
            'App\\Controller\\ControllerJson::apiIsbn' => '?',
            'App\\Controller\\MaternalMortalityController::delete' => '?',
            'App\\Controller\\OvercrowdedController::delete' => '?',
            'App\\Controller\\OvercrowdedController::index' => '?',
            'App\\Controller\\ProductController::createProduct' => '?',
            'App\\Controller\\ProductController::deleteProductById' => '?',
            'App\\Controller\\ProductController::showAllProduct' => '?',
            'App\\Controller\\ProductController::showProductById' => '?',
            'App\\Controller\\ProductController::updateProduct' => '?',
            'App\\Controller\\ProjController::api_create_overcrowded' => '?',
            'App\\Controller\\ProjController::api_foreign' => '?',
            'App\\Controller\\ProjController::api_mortality' => '?',
            'App\\Controller\\ProjController::api_overcrowd' => '?',
            'App\\Controller\\ProjController::api_sweden' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\BookController:PostCreateBook' => '?',
            'App\\Controller\\BookController:deleteBook' => '?',
            'App\\Controller\\BookController:postDeleteBook' => '?',
            'App\\Controller\\BookController:postUpdateBook' => '?',
            'App\\Controller\\BookController:showAllBooks' => '?',
            'App\\Controller\\BookController:showBookById' => '?',
            'App\\Controller\\BookController:updateBook' => '?',
            'App\\Controller\\ControllerJson:apiBooks' => '?',
            'App\\Controller\\ControllerJson:apiIsbn' => '?',
            'App\\Controller\\MaternalMortalityController:delete' => '?',
            'App\\Controller\\OvercrowdedController:delete' => '?',
            'App\\Controller\\OvercrowdedController:index' => '?',
            'App\\Controller\\ProductController:createProduct' => '?',
            'App\\Controller\\ProductController:deleteProductById' => '?',
            'App\\Controller\\ProductController:showAllProduct' => '?',
            'App\\Controller\\ProductController:showProductById' => '?',
            'App\\Controller\\ProductController:updateProduct' => '?',
            'App\\Controller\\ProjController:api_create_overcrowded' => '?',
            'App\\Controller\\ProjController:api_foreign' => '?',
            'App\\Controller\\ProjController:api_mortality' => '?',
            'App\\Controller\\ProjController:api_overcrowd' => '?',
            'App\\Controller\\ProjController:api_sweden' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
