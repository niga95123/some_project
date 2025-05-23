<?php

namespace ContainerZNNjzG8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGetTechGuestActionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\GetTechGuestAction' shared autowired service.
     *
     * @return \App\Controller\GetTechGuestAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/GetTechGuestAction.php';

        $container->services['App\\Controller\\GetTechGuestAction'] = $instance = new \App\Controller\GetTechGuestAction(($container->services['messenger.default_bus'] ?? $container->load('getMessenger_DefaultBusService')), ($container->privates['App\\Service\\Http\\StreamedJsonResponseBuilder'] ?? $container->load('getStreamedJsonResponseBuilderService')));

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\GetTechGuestAction', $container));

        return $instance;
    }
}
