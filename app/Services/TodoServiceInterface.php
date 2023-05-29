<?php

namespace App\Services;

use App\Models\Todo;
use Illuminate\Database\Eloquent\Collection;

interface TodoServiceInterface
{
    /**
     * @return Collection<Todo>
     */
    public function findAll(): Collection;
}
