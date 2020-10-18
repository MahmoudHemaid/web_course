<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("SalesRepEmployeeNum")->nullable();
            $table->string("Name");
            $table->string("FirstName");
            $table->string("LastName");
            $table->string("Phone");
            $table->string("Address1");
            $table->string("Address2");
            $table->string("City");
            $table->string("State");
            $table->integer("PostalCode");
            $table->string("Country");
            $table->double('CreditLimit', 19)->default(0);
            $table->timestamps();

            $table->foreign("salesRepEmployeeNum")->references('id')->on("employees");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
