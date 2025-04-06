<?php

namespace App\Controller;

use App\Dto\Response\ErrorBodyResponse;
use App\Dto\TechGuestDetailResponse;
use App\Entity\Guest\TechGuest;
use App\Service\Handler\Guest\Delete\DeleteTechGuestMessage;
use App\Service\Http\StreamedJsonResponseBuilder;
use OpenApi\Attributes as OA;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Messenger\Stamp\HandledStamp;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/guest/{id}', name: 'deleteTechGuest', methods: [Request::METHOD_DELETE])]
class DeleteTechGuestAction extends AbstractController
{
    public function __construct(
        private readonly MessageBusInterface         $messageBus,
        private readonly StreamedJsonResponseBuilder $responder
    )
    {
    }

    #[OA\Delete(
        path: '/api/guest/{id}',
        operationId: 'deleteTechGuest',
        description: 'Удаление гостя.',
        summary: 'Удаление гостя',
        tags: ['Guest'],
        responses: [
            new OA\Response(
                response: Response::HTTP_NO_CONTENT,
                description: 'Гость удален.',
            ),
            new OA\Response(
                response: Response::HTTP_BAD_REQUEST,
                description: ErrorBodyResponse::HTTP_BAD_REQUEST_MESSAGE
            ),
            new OA\Response(
                response: Response::HTTP_UNAUTHORIZED,
                description: ErrorBodyResponse::HTTP_UNAUTHORIZED_MESSAGE
            ),
            new OA\Response(
                response: Response::HTTP_UNPROCESSABLE_ENTITY,
                description: ErrorBodyResponse::HTTP_UNPROCESSABLE_ENTITY_MESSAGE
            ),
            new OA\Response(
                response: Response::HTTP_INTERNAL_SERVER_ERROR,
                description: ErrorBodyResponse::HTTP_INTERNAL_SERVER_ERROR_MESSAGE
            )
        ]
    )]
    public function __invoke(TechGuest $guest): Response
    {
        $this->messageBus->dispatch(new DeleteTechGuestMessage($guest))
            ->last(HandledStamp::class)
            ->getResult();

       return $this->responder->ok(['status' => 'Гость удален']);
    }

}
