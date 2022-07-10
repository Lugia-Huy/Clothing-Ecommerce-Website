<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user', 'name', 'id_product', 'product_title', 'quatity', 'size', 'price', 'coupon', 'image'
    ];
}
