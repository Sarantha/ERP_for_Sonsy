<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'Fname', 'Outstanding','CustomerID','newInvoiceNo','InvoiceNo'
    ];
}
