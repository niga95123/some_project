<?php

namespace App\Dto\Response;

use Symfony\Component\HttpFoundation\Response;

class ErrorBodyResponse
{
    const HTTP_NOT_FOUND_MESSAGE = 'Ресурс не найден';
    const HTTP_BAD_REQUEST_MESSAGE = 'Некорректный запрос';
    const HTTP_UNPROCESSABLE_ENTITY_MESSAGE = 'Ошибка валидации данных';
    const HTTP_INTERNAL_SERVER_ERROR_MESSAGE = 'Внутренняя ошибка сервера';
    const HTTP_FORBIDDEN_MESSAGE = 'Доступ запрещён';
    const HTTP_UNAUTHORIZED_MESSAGE = 'Неавторизован';
    const HTTP_CONFLICT_MESSAGE = 'Конфликт данных';
    const HTTP_FAILED_DEPENDENCY_MESSAGE = 'Ошибка внешней зависимости';

    public function __construct(
        public readonly string $message,
        public readonly int $statusCode,
        public readonly ?array $details = []
    ) {}

}