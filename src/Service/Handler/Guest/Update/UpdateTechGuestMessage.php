<?php 

namespace App\Service\Handler\Guest\Update;

use App\Dto\Command\CRUDTechGuestCommand;
use App\Entity\Guest\TechGuest;

final class UpdateTechGuestMessage
{
    public function __construct(
        private readonly CRUDTechGuestCommand $command,
        private readonly TechGuest $techGuest
    ) {
    }

    public function getCommand(): CRUDTechGuestCommand
    {
        return $this->command;
    }

    public function getTechGuest(): TechGuest
    {
        return $this->techGuest;
    }
}