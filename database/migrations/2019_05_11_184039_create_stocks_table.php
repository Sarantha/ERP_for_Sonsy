<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->Increments('ItemNo');
            $table->double('Discount');
            $table->string('ItemName');
            $table->double('UnitPrice');
            $table->integer('SupplierId');
            $table->biginteger('InvoiceNo');
            $table->integer('Quantity');
            $table->double('SellingPrice');
            $table->double('TotalBalance');
            $table->enum('Active', ['NotAvailable', 'Available']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stocks');
    }
}
