<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['item_name', 'total_price', 'order_datetime'];
}
