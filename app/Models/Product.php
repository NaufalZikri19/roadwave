<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'category',
        'size',
        'color',
        'image',
    ];

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
