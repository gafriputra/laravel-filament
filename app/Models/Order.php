<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\AsCollection;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'reference_number',
        'arrival_date',
        'departure_date',
        'hotel_information',
        'customer_requests',
    ];
    protected $casts = [
        'hotel_information' => AsCollection::class,
        'customer_requests' => AsCollection::class,
    ];

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class, 'order_id', 'id');
    }
}
