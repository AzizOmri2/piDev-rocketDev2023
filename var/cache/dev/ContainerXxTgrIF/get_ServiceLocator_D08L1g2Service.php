<?php

namespace ContainerXxTgrIF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_D08L1g2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.d08L1g2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.d08L1g2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'normalizer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
            'repo' => ['privates', 'App\\Repository\\CompetitionRepository', 'getCompetitionRepositoryService', true],
        ], [
            'normalizer' => '?',
            'repo' => 'App\\Repository\\CompetitionRepository',
        ]);
    }
}
