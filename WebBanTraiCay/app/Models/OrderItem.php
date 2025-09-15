<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = [
        'order_id',
        'fruit_id',
        'quantity',
        'price',
    ];

    // Quan hệ từng order item thuộc về 1 đơn hàng
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // Quan hệ từng order item liên kết đến 1 trái cây
    public function fruit()
    {
        return $this->belongsTo(Traicay::class);
    }
}
