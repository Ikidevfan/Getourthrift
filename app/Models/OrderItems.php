<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderItems extends Model
{
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price',
    ];

    /**
     * Get the order that owns the item.
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * Get the product that's in this order item.
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}