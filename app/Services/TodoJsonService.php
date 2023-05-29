<?php

declare(strict_types=1);

namespace App\Services;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;

class TodoJsonService
{
    private string $apiUrl;
    private string $apiSecret;
    private string $apiUser;

    public function __construct(
        private readonly TodoServiceInterface $todoService,
    ) {
         $this->apiUrl = Config::get('api.api_url');
         $this->apiUser = Config::get('api.api_user');
         $this->apiSecret = Config::get('api.api_secret');
    }

    public function findAllAsJson(): string
    {
        $todoList = $this->todoService->findAll();

        Log::info('ApiUrl: '.$this->apiUrl);
        Log::info('ApiUser: '.$this->apiUser);
        Log::info('ApiSecret: '.$this->apiSecret);

        return json_encode($todoList, JSON_UNESCAPED_UNICODE);
    }
}
