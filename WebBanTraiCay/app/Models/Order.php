<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'total_price',
        'status',
    ];

    // Quan hệ 1 đơn hàng có nhiều order items
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
