<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = [
        'Discount' ,
        'ItemName' ,
        'UnitPrice',
        'SupplierId' ,
        'InvoiceNo',
        'Quantity',
        'SellingPrice',
        'TotalBalance',
        'Active'
    ];  
}
