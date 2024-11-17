<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'note',
        'total_amount',
        'status',
        'items'
    ];

    protected $casts = [
        'items' => 'array'
    ];
}
