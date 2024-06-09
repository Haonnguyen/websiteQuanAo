<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Orders extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'address',
        'payment_method',
        'buy_date',
        'status',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function orderdetails()
    {
        return $this->hasMany(Orderdetails::class, 'order_id');
    }
}
