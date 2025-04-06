<?php

namespace App\Controller;

use App\Dto\Command\CRUDTechGuestCommand;
use App\Dto\Response\ErrorBodyResponse;
use App\Dto\TechGuestDetailResponse;
use App\Entity\Guest\TechGuest;
use App\Service\Handler\Guest\Update\UpdateTechGuestMessage;
use App\Service\Http\StreamedJsonResponseBuilder;
use Nelmio\ApiDocBundle\Attribute as Nelmio;
use OpenApi\Attributes as OA;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\MapRequestPayload;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Messenger\Stamp\HandledStamp;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/guest/{id}', name: 'updateTechGuest', methods: [Request::METHOD_PATCH])]
class UpdateTechGuestAction extends AbstractController
{
    public function __construct(
        private readonly MessageBusInterface         $messageBus,
        private readonly StreamedJsonResponseBuilder $responder
    )
    {
    }

    #[OA\Patch(
        path: '/api/guest/{id}',
        operationId: 'updateTechGuest',
        description: 'Редактирование гостя.',
        summary: 'Редактирование гостя',
        requestBody: new OA\RequestBody(
            content: new Nelmio\Model(type: CRUDTechGuestCommand::class)
        ),
        tags: ['Guest'],
        responses: [
            new OA\Response(
                response: Response::HTTP_CREATED,
                description: 'Редактированный гость.',
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
    public function __invoke(
        #[MapRequestPayload(acceptFormat: 'json', validationFailedStatusCode: 422)] CRUDTechGuestCommand $command,
        TechGuest $techGuest
    ): Response
    {
        $source = $this->messageBus->dispatch(new UpdateTechGuestMessage($command, $techGuest))
            ->last(HandledStamp::class)
            ->getResult();

       return $this->responder->ok($source);
    }

}
