<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Services\TodoService;
use Illuminate\Contracts\View\View;

class TodoController extends Controller
{
    public function index(TodoService $todoService): View {

        $todos = $todoService->findAll();

        return view(
            'todo.index',
            [
                'controller_name' => 'TodoController',
                'todoList' => $todos
            ]
        );
    }
}
