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
            $table->increments('id');
            $table->string('first_name', 20);
            $table->string('surname', 20);
            $table->string('patronymic', 20);
            $table->string('position', 30)->nullable();
            $table->string('email', 20)->nullable();
            $table->string('work_phone')->nullable();
            $table->string('mob_phone')->nullable();
            $table->boolean('eds')->default(false);
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
