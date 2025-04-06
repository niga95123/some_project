<?php 

namespace App\Service\Handler\Guest\Create;

use App\Dto\Command\CRUDTechGuestCommand;

final class CreateTechGuestMessage
{
    public function __construct(private readonly CRUDTechGuestCommand $command) {
    }

    public function getCommand(): CRUDTechGuestCommand
    {
        return $this->command;
    }
}