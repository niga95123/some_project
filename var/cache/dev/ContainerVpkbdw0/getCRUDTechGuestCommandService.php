<?php

namespace ContainerVpkbdw0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCRUDTechGuestCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Dto\Command\CRUDTechGuestCommand' shared autowired service.
     *
     * @return \App\Dto\Command\CRUDTechGuestCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Dto/Command/CRUDTechGuestCommand.php';

        return $container->privates['App\\Dto\\Command\\CRUDTechGuestCommand'] = new \App\Dto\Command\CRUDTechGuestCommand();
    }
}
