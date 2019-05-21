<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutstandingPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outstanding__payments', function (Blueprint $table) {
            $table->bigIncrements('PaymentNo');
            $table->integer('Invoice');
            $table->date('InvoiceDate');
            $table->double('InvoiceValue');
            $table->double('SettledAmount');
            $table->double('Balance');
            $table->integer('Age');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('outstanding__payments');
    }
}
