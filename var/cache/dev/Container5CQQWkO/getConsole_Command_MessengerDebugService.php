<?php

namespace Container5CQQWkO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_MessengerDebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.messenger_debug' shared service.
     *
     * @return \Symfony\Component\Messenger\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Command/DebugCommand.php';

        $container->privates['console.command.messenger_debug'] = $instance = new \Symfony\Component\Messenger\Command\DebugCommand(['messenger.bus.default' => ['App\\Service\\Handler\\Guest\\Create\\CreateTechGuestMessage' => [['App\\Service\\Handler\\Guest\\Create\\CreateTechGuestHandler', []]], 'App\\Service\\Handler\\Guest\\Delete\\DeleteTechGuestMessage' => [['App\\Service\\Handler\\Guest\\Delete\\DeleteTechGuestHandler', []]], 'App\\Service\\Handler\\Guest\\Update\\UpdateTechGuestMessage' => [['App\\Service\\Handler\\Guest\\Update\\UpdateTechGuestHandler', []]], 'Symfony\\Component\\Process\\Messenger\\RunProcessMessage' => [['process.messenger.process_message_handler', []]], 'Symfony\\Component\\Console\\Messenger\\RunCommandMessage' => [['console.messenger.execute_command_handler', []]], 'Symfony\\Component\\Messenger\\Message\\RedispatchMessage' => [['messenger.redispatch_message_handler', []]]]]);

        $instance->setName('debug:messenger');
        $instance->setDescription('List messages you can dispatch using the message buses');

        return $instance;
    }
}
