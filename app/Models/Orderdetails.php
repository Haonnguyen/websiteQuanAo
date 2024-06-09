<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderdetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'price',
        'quantity',
        'order_id',
    ];

    public function orders()
    {
        return $this->belongsTo(Orders::class, 'order_id');
    }

    public function products()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }
}
