<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TodoList extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
    ];

    protected $table = 'todo_lists';
}
