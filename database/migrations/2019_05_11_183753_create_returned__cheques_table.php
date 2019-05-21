<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReturnedChequesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('returned__cheques', function (Blueprint $table) {
            $table->biginteger('ChequeNo');
            $table->biginteger('CsutomerId');
            $table->string('CustomerName');
            $table->double('Amount');
            $table->date('DateReturned');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('returned__cheques');
    }
}
