<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class TodoController extends Controller
{
    public function index(): View {
        // "view" Helper Method
        return view('todo.index', ['controller_name' => 'TodoController']);

        // "View" Factory
//        return \Illuminate\Support\Facades\View::make('todo.index', ['controller_name' => 'TodoController']);
    }
}
