<?php

namespace ContainerQi8Cwx1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YEDdhG_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.YEDdhG.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.YEDdhG.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\CompetitionController::FrontView' => ['privates', '.service_locator.4LxtSay', 'get_ServiceLocator_4LxtSayService', true],
            'App\\Controller\\CompetitionController::delete' => ['privates', '.service_locator.5KifnRw', 'get_ServiceLocator_5KifnRwService', true],
            'App\\Controller\\CompetitionController::edit' => ['privates', '.service_locator.5KifnRw', 'get_ServiceLocator_5KifnRwService', true],
            'App\\Controller\\CompetitionController::index' => ['privates', '.service_locator.4LxtSay', 'get_ServiceLocator_4LxtSayService', true],
            'App\\Controller\\CompetitionController::new' => ['privates', '.service_locator.4LxtSay', 'get_ServiceLocator_4LxtSayService', true],
            'App\\Controller\\CompetitionController::reserver' => ['privates', '.service_locator..KsIxgu', 'get_ServiceLocator__KsIxguService', true],
            'App\\Controller\\CompetitionController::show' => ['privates', '.service_locator.tz_cB8j', 'get_ServiceLocator_TzCB8jService', true],
            'App\\Controller\\CompetitionController::showFront' => ['privates', '.service_locator.tz_cB8j', 'get_ServiceLocator_TzCB8jService', true],
            'App\\Controller\\TicketController::delete' => ['privates', '.service_locator.4VQ70NZ', 'get_ServiceLocator_4VQ70NZService', true],
            'App\\Controller\\TicketController::edit' => ['privates', '.service_locator.4VQ70NZ', 'get_ServiceLocator_4VQ70NZService', true],
            'App\\Controller\\TicketController::index' => ['privates', '.service_locator.qZFWjsO', 'get_ServiceLocator_QZFWjsOService', true],
            'App\\Controller\\TicketController::new' => ['privates', '.service_locator.qZFWjsO', 'get_ServiceLocator_QZFWjsOService', true],
            'App\\Controller\\TicketController::show' => ['privates', '.service_locator.7Txv_C4', 'get_ServiceLocator_7TxvC4Service', true],
            'App\\Controller\\TicketController::showFront' => ['privates', '.service_locator.7Txv_C4', 'get_ServiceLocator_7TxvC4Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\CompetitionController:FrontView' => ['privates', '.service_locator.4LxtSay', 'get_ServiceLocator_4LxtSayService', true],
            'App\\Controller\\CompetitionController:delete' => ['privates', '.service_locator.5KifnRw', 'get_ServiceLocator_5KifnRwService', true],
            'App\\Controller\\CompetitionController:edit' => ['privates', '.service_locator.5KifnRw', 'get_ServiceLocator_5KifnRwService', true],
            'App\\Controller\\CompetitionController:index' => ['privates', '.service_locator.4LxtSay', 'get_ServiceLocator_4LxtSayService', true],
            'App\\Controller\\CompetitionController:new' => ['privates', '.service_locator.4LxtSay', 'get_ServiceLocator_4LxtSayService', true],
            'App\\Controller\\CompetitionController:reserver' => ['privates', '.service_locator..KsIxgu', 'get_ServiceLocator__KsIxguService', true],
            'App\\Controller\\CompetitionController:show' => ['privates', '.service_locator.tz_cB8j', 'get_ServiceLocator_TzCB8jService', true],
            'App\\Controller\\CompetitionController:showFront' => ['privates', '.service_locator.tz_cB8j', 'get_ServiceLocator_TzCB8jService', true],
            'App\\Controller\\TicketController:delete' => ['privates', '.service_locator.4VQ70NZ', 'get_ServiceLocator_4VQ70NZService', true],
            'App\\Controller\\TicketController:edit' => ['privates', '.service_locator.4VQ70NZ', 'get_ServiceLocator_4VQ70NZService', true],
            'App\\Controller\\TicketController:index' => ['privates', '.service_locator.qZFWjsO', 'get_ServiceLocator_QZFWjsOService', true],
            'App\\Controller\\TicketController:new' => ['privates', '.service_locator.qZFWjsO', 'get_ServiceLocator_QZFWjsOService', true],
            'App\\Controller\\TicketController:show' => ['privates', '.service_locator.7Txv_C4', 'get_ServiceLocator_7TxvC4Service', true],
            'App\\Controller\\TicketController:showFront' => ['privates', '.service_locator.7Txv_C4', 'get_ServiceLocator_7TxvC4Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\CompetitionController::FrontView' => '?',
            'App\\Controller\\CompetitionController::delete' => '?',
            'App\\Controller\\CompetitionController::edit' => '?',
            'App\\Controller\\CompetitionController::index' => '?',
            'App\\Controller\\CompetitionController::new' => '?',
            'App\\Controller\\CompetitionController::reserver' => '?',
            'App\\Controller\\CompetitionController::show' => '?',
            'App\\Controller\\CompetitionController::showFront' => '?',
            'App\\Controller\\TicketController::delete' => '?',
            'App\\Controller\\TicketController::edit' => '?',
            'App\\Controller\\TicketController::index' => '?',
            'App\\Controller\\TicketController::new' => '?',
            'App\\Controller\\TicketController::show' => '?',
            'App\\Controller\\TicketController::showFront' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\CompetitionController:FrontView' => '?',
            'App\\Controller\\CompetitionController:delete' => '?',
            'App\\Controller\\CompetitionController:edit' => '?',
            'App\\Controller\\CompetitionController:index' => '?',
            'App\\Controller\\CompetitionController:new' => '?',
            'App\\Controller\\CompetitionController:reserver' => '?',
            'App\\Controller\\CompetitionController:show' => '?',
            'App\\Controller\\CompetitionController:showFront' => '?',
            'App\\Controller\\TicketController:delete' => '?',
            'App\\Controller\\TicketController:edit' => '?',
            'App\\Controller\\TicketController:index' => '?',
            'App\\Controller\\TicketController:new' => '?',
            'App\\Controller\\TicketController:show' => '?',
            'App\\Controller\\TicketController:showFront' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}