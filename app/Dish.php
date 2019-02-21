<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    //
    protected $fillable = [
        'name',
        'category_id',
        'description',
        'price',
        'image',
    ];

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }
}

