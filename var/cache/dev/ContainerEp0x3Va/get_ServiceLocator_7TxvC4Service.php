<?php

namespace ContainerEp0x3Va;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_7TxvC4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.7Txv_C4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7Txv_C4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ticket' => ['privates', '.errored..service_locator.7Txv_C4.App\\Entity\\Ticket', NULL, 'Cannot autowire service ".service_locator.7Txv_C4": it references class "App\\Entity\\Ticket" but no such service exists.'],
        ], [
            'ticket' => 'App\\Entity\\Ticket',
        ]);
    }
}
