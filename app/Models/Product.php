<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Product extends Model
{
    use CrudTrait;

    protected $table = 'products';
    protected $fillable = [
        'code',
        'name',
        'quantity',
        'price',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function packings()
    {
        return $this->hasMany(Packing::class);
    }
}
