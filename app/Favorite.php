<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $fillable = [
        'dish_id',
        'user_id',

    ];
    public function dish()
    {
    	return $this->belongsTo('App\Dish');
    }
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
