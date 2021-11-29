<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory;
    protected $table = 'table_tasks';
    
    protected $fillable = [
        'name',
        'description',
        'user_id'
    ];

}
