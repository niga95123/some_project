<?php

namespace ContainerVpkbdw0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_J6bZeASService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.J6bZeAS' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';
        include_once \dirname(__DIR__, 4).'/src/Service/Handler/Guest/Create/CreateTechGuestHandler.php';

        return $container->privates['.messenger.handler_descriptor.J6bZeAS'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \App\Service\Handler\Guest\Create\CreateTechGuestHandler(($container->privates['App\\Service\\Handler\\GuestService'] ?? $container->load('getGuestServiceService'))), []);
    }
}
