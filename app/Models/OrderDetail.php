<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'room_type',
        'bed_type',
        'meal_type',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }

    public function guestDetails()
    {
        return $this->hasMany(GuestDetail::class, 'order_detail_id', 'id');
    }
}
