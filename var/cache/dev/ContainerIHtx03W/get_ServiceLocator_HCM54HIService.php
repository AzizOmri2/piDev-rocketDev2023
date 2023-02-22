<?php

namespace ContainerIHtx03W;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HCM54HIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hCM54HI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hCM54HI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'competitionRepository' => ['privates', 'App\\Repository\\CompetitionRepository', 'getCompetitionRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'competitionRepository' => 'App\\Repository\\CompetitionRepository',
            'entityManager' => '?',
        ]);
    }
}
