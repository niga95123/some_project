<?php

namespace ContainerZNNjzG8;
include_once \dirname(__DIR__, 4).'/src/Service/Handler/GuestService.php';

class GuestServiceGhost416bc74 extends \App\Service\Handler\GuestService implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'techGuestRepository' => [parent::class, 'techGuestRepository', parent::class],
        'techGuestRepository' => [parent::class, 'techGuestRepository', parent::class],
    ];
}

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('GuestServiceGhost416bc74', false)) {
    \class_alias(__NAMESPACE__.'\\GuestServiceGhost416bc74', 'GuestServiceGhost416bc74', false);
}
