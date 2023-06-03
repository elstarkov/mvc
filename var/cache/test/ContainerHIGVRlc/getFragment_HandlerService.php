<?php

namespace ContainerHIGVRlc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFragment_HandlerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'fragment.handler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Fragment/FragmentHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DependencyInjection/LazyLoadingFragmentHandler.php';

        return $container->privates['fragment.handler'] = new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'inline' => ['privates', 'fragment.renderer.inline', 'getFragment_Renderer_InlineService', true],
        ], [
            'inline' => '?',
        ]), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), true);
    }
}
