<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $fillable = [
        'productName',
        'productCategory',
        'productDescription',
        'productPrice',
        'productImage',
    ];

}
