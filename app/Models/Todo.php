<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'due_date',
        'is_finished',
    ];

    protected $casts = [
        'due_date' => 'datetime',
        'is_finished' => 'boolean',
    ];
}
