<?php

declare(strict_types=1);

namespace App\Services;

class TodoJsonService
{
    public function __construct(
        private readonly TodoServiceInterface $todoService,
    ) {
    }

    public function findAllAsJson(): string
    {
        $todoList = $this->todoService->findAll();

        return json_encode($todoList, JSON_UNESCAPED_UNICODE);
    }
}
