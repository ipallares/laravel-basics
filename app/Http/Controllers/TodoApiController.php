<?php

namespace App\Http\Controllers;

use App\Services\TodoJsonService;

class TodoApiController extends Controller
{
    public function index(TodoJsonService $todoJsonService)
    {
        $todoList = $todoJsonService->findAllAsJson();

        return response($todoList)->header('Content-Type', 'application/json');
    }
}
