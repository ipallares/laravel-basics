<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Todo;
use Illuminate\Database\Eloquent\Collection;

class TodoCustomService implements TodoServiceInterface
{
    /**
     * @return Collection<Todo>
     */
    public function findAll(): Collection
    {
        $todo1 = new Todo();
        $todo1->name = 'Training - with custom Repo';
        $todo1->is_finished = false;

        $todo2 = new Todo();
        $todo2->name = 'Italian Course - with custom Repo';
        $todo2->is_finished = true;

        return new Collection([$todo1, $todo2]);
    }
}
