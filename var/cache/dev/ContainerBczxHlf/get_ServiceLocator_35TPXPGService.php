<?php

namespace ContainerBczxHlf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_35TPXPGService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.35TPXPG' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.35TPXPG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'normalizer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
            'ticketRepository' => ['privates', 'App\\Repository\\TicketRepository', 'getTicketRepositoryService', true],
        ], [
            'normalizer' => '?',
            'ticketRepository' => 'App\\Repository\\TicketRepository',
        ]);
    }
}
