<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerLedgersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer__ledgers', function (Blueprint $table) {
            $table->bigIncrements('LedgerNo');
            $table->biginteger('InvoiceNo');
            $table->date('InvoiceDate');
            $table->double('InvoiceValue');
            $table->double('Balance');
            $table->bigInteger('chequeNo');
            $table->date('ChequeDate');
            $table->double('ChequeAmount');
            $table->double('CashAmount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer__ledgers');
    }
}
