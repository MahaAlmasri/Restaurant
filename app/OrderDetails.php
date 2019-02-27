<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    protected $fillable = [
        'order_id',
        'dish_id',
        'amount',
        'price'
    ];

    public function order()
    {
    	return $this->belongsTo('App\Order');
    }
    public function dish()
    {
    	return $this->belongsTo('App\Dish');
    }
}
