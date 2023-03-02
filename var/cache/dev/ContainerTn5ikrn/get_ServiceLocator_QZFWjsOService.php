<?php

namespace ContainerTn5ikrn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QZFWjsOService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qZFWjsO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qZFWjsO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ticketRepository' => ['privates', 'App\\Repository\\TicketRepository', 'getTicketRepositoryService', true],
        ], [
            'ticketRepository' => 'App\\Repository\\TicketRepository',
        ]);
    }
}
