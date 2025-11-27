<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'description',
        'status',
        'image',
    ];

    protected $casts = [
        'category_id' => 'integer',
        'name'        => 'string',
        'slug'        => 'string',
        'description' => 'string',
        'status'      => 'boolean',  // active/inactive
        'image'       => 'string',
    ];
    
    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function products() {
        return $this->hasMany(Product::class);
    }
}


