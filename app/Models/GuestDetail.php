<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class GuestDetail extends Model
{
    use HasFactory;

    public function orderDetail()
    {
        return $this->belongsTo(OrderDetail::class, 'order_detail_id', 'id');
    }
}
