<?php

namespace ContainerTn5ikrn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8xmzJtuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8xmzJtu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8xmzJtu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'competitionRepository' => ['privates', 'App\\Repository\\CompetitionRepository', 'getCompetitionRepositoryService', true],
            'normalizer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
        ], [
            'competitionRepository' => 'App\\Repository\\CompetitionRepository',
            'normalizer' => '?',
        ]);
    }
}
