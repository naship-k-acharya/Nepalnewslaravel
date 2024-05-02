<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'buyer_name',
        'seller_name',
        'product_name',
        'quantity',
        'amount',
        'address',
        'phone',
        'status'
    ];




}
