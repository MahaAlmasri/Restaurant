<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $fillable = [
        'productName',
        'productCategory',
        'productDescription',
        'productPrice',
        'productImage',
    ];

}
