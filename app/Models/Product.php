<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $fillable = [
        'name',
        'description',
        'category_id',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function elements()
    {
        return $this->hasMany(Element::class,'product_id');
    }
}
