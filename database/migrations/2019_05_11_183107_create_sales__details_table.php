<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales__details', function (Blueprint $table) {
            $table->Increments('SalesNo');
            $table->date('Date');
            $table->double('Amount');
            $table->biginteger('CustomerId');
            $table->biginteger('InvoiceNo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales__details');
    }
}
