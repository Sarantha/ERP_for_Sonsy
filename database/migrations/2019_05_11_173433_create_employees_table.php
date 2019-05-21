<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('EmpId');
            $table->string('Fname');
            $table->string('Lname');
            $table->string('NicNo')->unique();
            $table->string('email')->unique();
            $table->string('PhoneNo');
            $table->enum('type', ['StockKeeper', 'Cashier','Accountant']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
