<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // The table associated with the model
    protected $table = 'tasks';

    // The attributes that are mass assignable
    protected $fillable = [
        'title',
        'description',
        'completed',
    ];

    // The attributes that should be hidden for arrays
    protected $hidden = [];

    // The attributes that should be cast to native types
    protected $casts = [
        'completed' => 'boolean',
    ];
}
