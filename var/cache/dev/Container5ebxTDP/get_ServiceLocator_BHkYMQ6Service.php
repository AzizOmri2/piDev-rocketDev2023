<?php

namespace Container5ebxTDP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BHkYMQ6Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BHkYMQ6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BHkYMQ6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\CompetitionController::FrontView' => ['privates', '.service_locator.hCM54HI', 'get_ServiceLocator_HCM54HIService', true],
            'App\\Controller\\CompetitionController::delete' => ['privates', '.service_locator.5KifnRw', 'get_ServiceLocator_5KifnRwService', true],
            'App\\Controller\\CompetitionController::deleteJson' => ['privates', '.service_locator.wr9s5g4', 'get_ServiceLocator_Wr9s5g4Service', true],
            'App\\Controller\\CompetitionController::edit' => ['privates', '.service_locator.5KifnRw', 'get_ServiceLocator_5KifnRwService', true],
            'App\\Controller\\CompetitionController::editJson' => ['privates', '.service_locator.wr9s5g4', 'get_ServiceLocator_Wr9s5g4Service', true],
            'App\\Controller\\CompetitionController::getCompetitions' => ['privates', '.service_locator.d08L1g2', 'get_ServiceLocator_D08L1g2Service', true],
            'App\\Controller\\CompetitionController::index' => ['privates', '.service_locator.4LxtSay', 'get_ServiceLocator_4LxtSayService', true],
            'App\\Controller\\CompetitionController::new' => ['privates', '.service_locator.4LxtSay', 'get_ServiceLocator_4LxtSayService', true],
            'App\\Controller\\CompetitionController::newJson' => ['privates', '.service_locator.wr9s5g4', 'get_ServiceLocator_Wr9s5g4Service', true],
            'App\\Controller\\CompetitionController::reserver' => ['privates', '.service_locator.D9Tu8.t', 'get_ServiceLocator_D9Tu8_TService', true],
            'App\\Controller\\CompetitionController::show' => ['privates', '.service_locator.tz_cB8j', 'get_ServiceLocator_TzCB8jService', true],
            'App\\Controller\\CompetitionController::showFront' => ['privates', '.service_locator.tz_cB8j', 'get_ServiceLocator_TzCB8jService', true],
            'App\\Controller\\CompetitionController::showJson' => ['privates', '.service_locator.8xmzJtu', 'get_ServiceLocator_8xmzJtuService', true],
            'App\\Controller\\CompetitionController::showNonDispo' => ['privates', '.service_locator.4LxtSay', 'get_ServiceLocator_4LxtSayService', true],
            'App\\Controller\\MailerController::sendEmail' => ['privates', '.service_locator.6E9xidT', 'get_ServiceLocator_6E9xidTService', true],
            'App\\Controller\\TicketController::AfficheTicketPDF' => ['privates', '.service_locator.qZFWjsO', 'get_ServiceLocator_QZFWjsOService', true],
            'App\\Controller\\TicketController::delete' => ['privates', '.service_locator.4VQ70NZ', 'get_ServiceLocator_4VQ70NZService', true],
            'App\\Controller\\TicketController::deleteJson' => ['privates', '.service_locator.aovDCQ_', 'get_ServiceLocator_AovDCQService', true],
            'App\\Controller\\TicketController::edit' => ['privates', '.service_locator.4VQ70NZ', 'get_ServiceLocator_4VQ70NZService', true],
            'App\\Controller\\TicketController::editJson' => ['privates', '.service_locator.aovDCQ_', 'get_ServiceLocator_AovDCQService', true],
            'App\\Controller\\TicketController::index' => ['privates', '.service_locator.qZFWjsO', 'get_ServiceLocator_QZFWjsOService', true],
            'App\\Controller\\TicketController::indexJson' => ['privates', '.service_locator.35TPXPG', 'get_ServiceLocator_35TPXPGService', true],
            'App\\Controller\\TicketController::new' => ['privates', '.service_locator.qZFWjsO', 'get_ServiceLocator_QZFWjsOService', true],
            'App\\Controller\\TicketController::newJson' => ['privates', '.service_locator.wr9s5g4', 'get_ServiceLocator_Wr9s5g4Service', true],
            'App\\Controller\\TicketController::show' => ['privates', '.service_locator.7Txv_C4', 'get_ServiceLocator_7TxvC4Service', true],
            'App\\Controller\\TicketController::showFront' => ['privates', '.service_locator.qZFWjsO', 'get_ServiceLocator_QZFWjsOService', true],
            'App\\Controller\\TicketController::showJson' => ['privates', '.service_locator.tn3KEc.', 'get_ServiceLocator_Tn3KEc_Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\CompetitionController:FrontView' => ['privates', '.service_locator.hCM54HI', 'get_ServiceLocator_HCM54HIService', true],
            'App\\Controller\\CompetitionController:delete' => ['privates', '.service_locator.5KifnRw', 'get_ServiceLocator_5KifnRwService', true],
            'App\\Controller\\CompetitionController:deleteJson' => ['privates', '.service_locator.wr9s5g4', 'get_ServiceLocator_Wr9s5g4Service', true],
            'App\\Controller\\CompetitionController:edit' => ['privates', '.service_locator.5KifnRw', 'get_ServiceLocator_5KifnRwService', true],
            'App\\Controller\\CompetitionController:editJson' => ['privates', '.service_locator.wr9s5g4', 'get_ServiceLocator_Wr9s5g4Service', true],
            'App\\Controller\\CompetitionController:getCompetitions' => ['privates', '.service_locator.d08L1g2', 'get_ServiceLocator_D08L1g2Service', true],
            'App\\Controller\\CompetitionController:index' => ['privates', '.service_locator.4LxtSay', 'get_ServiceLocator_4LxtSayService', true],
            'App\\Controller\\CompetitionController:new' => ['privates', '.service_locator.4LxtSay', 'get_ServiceLocator_4LxtSayService', true],
            'App\\Controller\\CompetitionController:newJson' => ['privates', '.service_locator.wr9s5g4', 'get_ServiceLocator_Wr9s5g4Service', true],
            'App\\Controller\\CompetitionController:reserver' => ['privates', '.service_locator.D9Tu8.t', 'get_ServiceLocator_D9Tu8_TService', true],
            'App\\Controller\\CompetitionController:show' => ['privates', '.service_locator.tz_cB8j', 'get_ServiceLocator_TzCB8jService', true],
            'App\\Controller\\CompetitionController:showFront' => ['privates', '.service_locator.tz_cB8j', 'get_ServiceLocator_TzCB8jService', true],
            'App\\Controller\\CompetitionController:showJson' => ['privates', '.service_locator.8xmzJtu', 'get_ServiceLocator_8xmzJtuService', true],
            'App\\Controller\\CompetitionController:showNonDispo' => ['privates', '.service_locator.4LxtSay', 'get_ServiceLocator_4LxtSayService', true],
            'App\\Controller\\MailerController:sendEmail' => ['privates', '.service_locator.6E9xidT', 'get_ServiceLocator_6E9xidTService', true],
            'App\\Controller\\TicketController:AfficheTicketPDF' => ['privates', '.service_locator.qZFWjsO', 'get_ServiceLocator_QZFWjsOService', true],
            'App\\Controller\\TicketController:delete' => ['privates', '.service_locator.4VQ70NZ', 'get_ServiceLocator_4VQ70NZService', true],
            'App\\Controller\\TicketController:deleteJson' => ['privates', '.service_locator.aovDCQ_', 'get_ServiceLocator_AovDCQService', true],
            'App\\Controller\\TicketController:edit' => ['privates', '.service_locator.4VQ70NZ', 'get_ServiceLocator_4VQ70NZService', true],
            'App\\Controller\\TicketController:editJson' => ['privates', '.service_locator.aovDCQ_', 'get_ServiceLocator_AovDCQService', true],
            'App\\Controller\\TicketController:index' => ['privates', '.service_locator.qZFWjsO', 'get_ServiceLocator_QZFWjsOService', true],
            'App\\Controller\\TicketController:indexJson' => ['privates', '.service_locator.35TPXPG', 'get_ServiceLocator_35TPXPGService', true],
            'App\\Controller\\TicketController:new' => ['privates', '.service_locator.qZFWjsO', 'get_ServiceLocator_QZFWjsOService', true],
            'App\\Controller\\TicketController:newJson' => ['privates', '.service_locator.wr9s5g4', 'get_ServiceLocator_Wr9s5g4Service', true],
            'App\\Controller\\TicketController:show' => ['privates', '.service_locator.7Txv_C4', 'get_ServiceLocator_7TxvC4Service', true],
            'App\\Controller\\TicketController:showFront' => ['privates', '.service_locator.qZFWjsO', 'get_ServiceLocator_QZFWjsOService', true],
            'App\\Controller\\TicketController:showJson' => ['privates', '.service_locator.tn3KEc.', 'get_ServiceLocator_Tn3KEc_Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\CompetitionController::FrontView' => '?',
            'App\\Controller\\CompetitionController::delete' => '?',
            'App\\Controller\\CompetitionController::deleteJson' => '?',
            'App\\Controller\\CompetitionController::edit' => '?',
            'App\\Controller\\CompetitionController::editJson' => '?',
            'App\\Controller\\CompetitionController::getCompetitions' => '?',
            'App\\Controller\\CompetitionController::index' => '?',
            'App\\Controller\\CompetitionController::new' => '?',
            'App\\Controller\\CompetitionController::newJson' => '?',
            'App\\Controller\\CompetitionController::reserver' => '?',
            'App\\Controller\\CompetitionController::show' => '?',
            'App\\Controller\\CompetitionController::showFront' => '?',
            'App\\Controller\\CompetitionController::showJson' => '?',
            'App\\Controller\\CompetitionController::showNonDispo' => '?',
            'App\\Controller\\MailerController::sendEmail' => '?',
            'App\\Controller\\TicketController::AfficheTicketPDF' => '?',
            'App\\Controller\\TicketController::delete' => '?',
            'App\\Controller\\TicketController::deleteJson' => '?',
            'App\\Controller\\TicketController::edit' => '?',
            'App\\Controller\\TicketController::editJson' => '?',
            'App\\Controller\\TicketController::index' => '?',
            'App\\Controller\\TicketController::indexJson' => '?',
            'App\\Controller\\TicketController::new' => '?',
            'App\\Controller\\TicketController::newJson' => '?',
            'App\\Controller\\TicketController::show' => '?',
            'App\\Controller\\TicketController::showFront' => '?',
            'App\\Controller\\TicketController::showJson' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\CompetitionController:FrontView' => '?',
            'App\\Controller\\CompetitionController:delete' => '?',
            'App\\Controller\\CompetitionController:deleteJson' => '?',
            'App\\Controller\\CompetitionController:edit' => '?',
            'App\\Controller\\CompetitionController:editJson' => '?',
            'App\\Controller\\CompetitionController:getCompetitions' => '?',
            'App\\Controller\\CompetitionController:index' => '?',
            'App\\Controller\\CompetitionController:new' => '?',
            'App\\Controller\\CompetitionController:newJson' => '?',
            'App\\Controller\\CompetitionController:reserver' => '?',
            'App\\Controller\\CompetitionController:show' => '?',
            'App\\Controller\\CompetitionController:showFront' => '?',
            'App\\Controller\\CompetitionController:showJson' => '?',
            'App\\Controller\\CompetitionController:showNonDispo' => '?',
            'App\\Controller\\MailerController:sendEmail' => '?',
            'App\\Controller\\TicketController:AfficheTicketPDF' => '?',
            'App\\Controller\\TicketController:delete' => '?',
            'App\\Controller\\TicketController:deleteJson' => '?',
            'App\\Controller\\TicketController:edit' => '?',
            'App\\Controller\\TicketController:editJson' => '?',
            'App\\Controller\\TicketController:index' => '?',
            'App\\Controller\\TicketController:indexJson' => '?',
            'App\\Controller\\TicketController:new' => '?',
            'App\\Controller\\TicketController:newJson' => '?',
            'App\\Controller\\TicketController:show' => '?',
            'App\\Controller\\TicketController:showFront' => '?',
            'App\\Controller\\TicketController:showJson' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
