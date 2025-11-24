<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'status',
        'image'
    ];

    protected $casts = [
        'name'        => 'string',
        'slug'        => 'string',
        'description' => 'string',
        'status'      => 'boolean',  // usually active/inactive (1 or 0)
        'image'       => 'string',
    ];
}
