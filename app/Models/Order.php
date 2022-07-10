<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user', 'firstname', 'lastname', 'email', 'phone', 'address', 'country', 'state', 'zip', 'method', 'cc_name', 'cc_number', 'cc_expiration', 'cc_cvv', 'items', 'price','status'
    ];
}
