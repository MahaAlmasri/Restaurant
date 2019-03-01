<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id'
    ];

public function order_details()
{
	return $this->hasMany('App\OrderDetails');
}
public function user()
{
	return $this->belongsTo('App\User');
}
public function getTotalPrice() {
    return $this->order_details()->sum(DB::raw('amount * price'));
  }
}
