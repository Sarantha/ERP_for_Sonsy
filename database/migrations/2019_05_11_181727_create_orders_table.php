<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('OrderId');
            $table->date('ShippingDate');
            $table->date('RequiredDate');
            $table->date('OrderDate');
            $table->biginteger('CustomerID');
            $table->enum('OrderStatuts', ['Pending', 'Accepted','Rejected','Issued']);
            $table->text('Reason');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
