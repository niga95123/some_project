<?php

namespace App\Controller;

use App\Dto\Response\ErrorBodyResponse;
use App\Dto\TechGuestDetailResponse;
use App\Entity\Guest\TechGuest;
use App\Service\Http\StreamedJsonResponseBuilder;
use Nelmio\ApiDocBundle\Attribute as Nelmio;
use OpenApi\Attributes as OA;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/guest/{id}', name: 'getTechGuest', methods: [Request::METHOD_GET])]
class GetTechGuestAction extends AbstractController
{
    public function __construct(
        private readonly MessageBusInterface         $messageBus,
        private readonly StreamedJsonResponseBuilder $responder
    )
    {
    }

    #[OA\Get(
        path: '/api/guest/{id}',
        operationId: 'getTechGuest',
        description: 'Получение гостя.',
        summary: 'Получение гостя',
        tags: ['Guest'],
        responses: [
            new OA\Response(
                response: Response::HTTP_CREATED,
                description: 'Запрашиваемый гость.',
                content: new Nelmio\Model(
                    type: TechGuestDetailResponse::class,
                )
            ),
            new OA\Response(
                response: Response::HTTP_BAD_REQUEST,
                description: ErrorBodyResponse::HTTP_BAD_REQUEST_MESSAGE,
                content: new Nelmio\Model(
                    type: ErrorBodyResponse::class,
                )
            ),
            new OA\Response(
                response: Response::HTTP_UNAUTHORIZED,
                description: ErrorBodyResponse::HTTP_UNAUTHORIZED_MESSAGE,
                content: new Nelmio\Model(
                    type: ErrorBodyResponse::class,
                )
            ),
            new OA\Response(
                response: Response::HTTP_UNPROCESSABLE_ENTITY,
                description: ErrorBodyResponse::HTTP_UNPROCESSABLE_ENTITY_MESSAGE,
                content: new Nelmio\Model(
                    type: ErrorBodyResponse::class,
                )
            ),
            new OA\Response(
                response: Response::HTTP_INTERNAL_SERVER_ERROR,
                description: ErrorBodyResponse::HTTP_INTERNAL_SERVER_ERROR_MESSAGE,
                content: new Nelmio\Model(
                    type: ErrorBodyResponse::class,
                )
            )
        ]
    )]
    public function __invoke(TechGuest $guest): Response
    {
       return $this->responder->ok(TechGuestDetailResponse::fromEntity($guest));
    }

}
