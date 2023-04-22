<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\AsCollection;

class Order extends Model
{
    use HasFactory;
    protected $casts = [
        'hotel_information' => AsCollection::class,
        'customer_requests' => AsCollection::class,
    ];
}
