<?php

namespace ContainerTn5ikrn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TzCB8jService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.tz_cB8j' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.tz_cB8j'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'competition' => ['privates', '.errored..service_locator.tz_cB8j.App\\Entity\\Competition', NULL, 'Cannot autowire service ".service_locator.tz_cB8j": it references class "App\\Entity\\Competition" but no such service exists.'],
        ], [
            'competition' => 'App\\Entity\\Competition',
        ]);
    }
}
