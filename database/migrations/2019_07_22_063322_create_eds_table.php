<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eds', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('purpose');
            $table->unsignedInteger('employee_owner');
            $table->foreign('employee_owner')->references('id')->on('employees');
            $table->tinyInteger('company');
            $table->date('created');
            $table->date('expired');
            $table->tinyInteger('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eds');
    }
}
