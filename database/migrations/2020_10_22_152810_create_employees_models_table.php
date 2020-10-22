<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesModelsTable extends Migration
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
            $table->string('code', 40);
            $table->string('name', 140);
            $table->double('salaryDollar');
            $table->double('salaryMx');
            $table->string('address', 250);
            $table->string('state', 50);
            $table->string('city', 50);
            $table->string('telephone', 10);
            $table->string('email', 100);
            $table->tinyInteger('active')->default(0);
            $table->timestamp('delete_on');
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
        Schema::dropIfExists('employees');
    }
}
