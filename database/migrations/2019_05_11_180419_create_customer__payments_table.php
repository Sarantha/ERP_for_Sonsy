<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer__payments', function (Blueprint $table) {
            $table->bigIncrements('InvoiceNo');
            $table->date('InvoiceDate');
            $table->double('InvoiceValue');
            $table->double('InvoiceBalance');
            $table->bigInteger('chequeNo');
            $table->double('ChequeBalance');
            $table->date('ChequeDate');
            $table->string('Branch');
            $table->string('Bank');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer__payments');
    }
}
