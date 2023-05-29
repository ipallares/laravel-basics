<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Contracts\View\View;

class TodoController extends Controller
{
    public function index(): View {

        $todos = Todo::all();

        return view(
            'todo.index',
            [
                'controller_name' => 'TodoController',
                'todoList' => $todos
            ]
        );
    }
}
