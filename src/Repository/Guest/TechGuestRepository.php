<?php

namespace App\Repository\Guest;

use App\Dto\Command\CRUDTechGuestCommand;
use App\Dto\Response\ErrorBodyResponse;
use App\Entity\Guest\TechGuest;
use App\Entity\TechCountryPhoneNumber;
use App\Repository\Base\BaseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;

class TechGuestRepository extends BaseRepository
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager,
        ManagerRegistry $registry
    ) {
        parent::__construct($registry, TechGuest::class);
    }

    public function createGuestFromTechGuestCommand($command): mixed
    {
        return $this->entityManager->wrapInTransaction(
            function (EntityManagerInterface $entityManager) use ($command) {
                $searchPhoneEntity = $entityManager->getRepository(TechGuest::class)
                    ->findOneBy((['phone_number' => $command->phone_number]));

                // Проверяем есть ли данный номер телефона в БД
                if (empty($searchPhoneEntity)) {
                    $searchEmailEntity = $entityManager->getRepository(TechGuest::class)
                        ->findOneBy((['email' => $command->email]));

                    // Проверяем есть ли данный email в БД
                    if (empty($searchEmailEntity)) {
                        $phoneCountryEntity = $entityManager->getRepository(TechCountryPhoneNumber::class)
                            ->findOneBy(['id' => $command->country_phone_number_id]);

                        if (!empty($phoneCountryEntity)) {
                            $newEntity = new TechGuest(
                                name: $command->name,
                                surname: $command->surname,
                                phoneNumber: $command->phone_number,
                                email: $command->email,
                                country_phone_number: $phoneCountryEntity
                            );

                            $entityManager->persist($newEntity);

                            $entityManager->flush();

                            return $newEntity;
                        }
                        return new ErrorBodyResponse(ErrorBodyResponse::HTTP_UNPROCESSABLE_ENTITY_MESSAGE,
                            Response::HTTP_UNPROCESSABLE_ENTITY, ['explain' => 'Не найден код страны']);
                    }
                    return new ErrorBodyResponse(ErrorBodyResponse::HTTP_UNPROCESSABLE_ENTITY_MESSAGE,
                        Response::HTTP_UNPROCESSABLE_ENTITY, ['explain' => 'Гость с данным email уже существует']);
                }
                return new ErrorBodyResponse(ErrorBodyResponse::HTTP_UNPROCESSABLE_ENTITY_MESSAGE,
                    Response::HTTP_UNPROCESSABLE_ENTITY, ['explain' => 'Гость c данным номером уже существует']);
            });
    }

    public function updateGuestFromTechGuestCommand(CRUDTechGuestCommand $command, TechGuest $techGuest): mixed
    {
        return $this->entityManager->wrapInTransaction(
            function (EntityManagerInterface $entityManager) use ($command, $techGuest) {
                $phoneCountryEntity = $entityManager->getRepository(TechCountryPhoneNumber::class)
                    ->findOneBy(['id' => $command->country_phone_number_id]);

                if (!empty($phoneCountryEntity)) {
                    $techGuest->setName($command->name);
                    $techGuest->setSurname($command->surname);
                    $techGuest->setPhoneNumber($command->phone_number);
                    $techGuest->setEmail($command->email);
                    $techGuest->setCountryPhoneNumber($phoneCountryEntity);

                    $entityManager->persist($techGuest);
                    $entityManager->flush();

                    return $techGuest;
                }
                return new ErrorBodyResponse(ErrorBodyResponse::HTTP_UNPROCESSABLE_ENTITY_MESSAGE,
                    Response::HTTP_UNPROCESSABLE_ENTITY, ['explain' => 'Не найден код страны']);
            });
    }

    public function deleteGuestFromTechGuestMessage(TechGuest $techGuest): void
    {
        $this->entityManager->wrapInTransaction(function (EntityManagerInterface $entityManager) use ($techGuest) {
            $entityManager->remove($techGuest);
        });

    }
}