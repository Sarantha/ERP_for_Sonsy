<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('InvoiceNo');
            $table->date('Date');
            $table->integer('CustomerID');
            $table->double('Cash');
            $table->biginteger('ChequeNo');
            $table->date('ChequeDate');
            $table->double('ChequeValue');
            $table->double('Outstanding');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
