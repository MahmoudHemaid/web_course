<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->unsignedBigInteger("OfficeCode");
            $table->unsignedBigInteger("ReportsTo")->nullable();
            $table->string("FirstName");
            $table->string("LastName");
            $table->string("Extension");
            $table->string("Email");
            $table->string("JobTitle", 100);
            $table->timestamps();

            $table->foreign("OfficeCode")->references('Code')->on("offices");
            $table->foreign("ReportsTo")->references('id')->on("employees");

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
