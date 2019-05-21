<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier__payments', function (Blueprint $table) {
            $table->bigIncrements('PaymentNo');
            $table->string('ChequeNo');
            $table->double('Cash');
            $table->double('InvoiceBalance');
            $table->double('InvoiceValue');
            $table->double('ChequeAmount');
            $table->date('Date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supplier__payments');
    }
}
