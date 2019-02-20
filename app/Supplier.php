<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'supplierName',
        'supplierAddress',
        'supplierHousenumber',
        'supplierPostalcode',
        'supplierCity',
        'supplierCountry',
        'supplierPhone',
        'supplierEmail',
    ];
}
