<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = [
        'categoryName',
        'categoryDescription'
    ];
    public function dishes()
{
	return $this->hasMany('App\Dish');
}

}
