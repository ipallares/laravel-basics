<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Todo;
use Illuminate\Database\Eloquent\Collection;

class TodoService
{
    public function findAll(): Collection
    {
        return Todo::all();
    }
}
