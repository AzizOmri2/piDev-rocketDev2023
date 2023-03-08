<?php

namespace Container5ebxTDP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AovDCQService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.aovDCQ_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.aovDCQ_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'normalizer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
            'ticket' => ['privates', '.errored..service_locator.aovDCQ_.App\\Entity\\Ticket', NULL, 'Cannot autowire service ".service_locator.aovDCQ_": it references class "App\\Entity\\Ticket" but no such service exists.'],
            'ticketRepository' => ['privates', 'App\\Repository\\TicketRepository', 'getTicketRepositoryService', true],
        ], [
            'normalizer' => '?',
            'ticket' => 'App\\Entity\\Ticket',
            'ticketRepository' => 'App\\Repository\\TicketRepository',
        ]);
    }
}
