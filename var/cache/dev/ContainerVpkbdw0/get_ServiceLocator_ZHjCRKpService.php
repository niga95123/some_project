<?php

namespace ContainerVpkbdw0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZHjCRKpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZHjCRKp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZHjCRKp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'command' => ['privates', 'App\\Dto\\Command\\CRUDTechGuestCommand', 'getCRUDTechGuestCommandService', true],
        ], [
            'command' => 'App\\Dto\\Command\\CRUDTechGuestCommand',
        ]);
    }
}
