<?php

namespace ContainerVpkbdw0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGuestServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\Handler\GuestService' shared autowired service.
     *
     * @return \App\Service\Handler\GuestService
     */
    public static function do($container, $lazyLoad = true)
    {
        if (true === $lazyLoad) {
            return $container->privates['App\\Service\\Handler\\GuestService'] = $container->createProxy('GuestServiceGhost416bc74', static fn () => \GuestServiceGhost416bc74::createLazyGhost(static fn ($proxy) => self::do($container, $proxy)));
        }

        include_once \dirname(__DIR__, 4).'/src/Service/Handler/GuestService.php';

        return ($lazyLoad->__construct(($container->privates['App\\Repository\\Guest\\TechGuestRepository'] ?? $container->load('getTechGuestRepositoryService'))) && false ?: $lazyLoad);
    }
}
