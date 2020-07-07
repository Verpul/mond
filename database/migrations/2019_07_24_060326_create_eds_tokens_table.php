<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEdsTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eds_tokens', function (Blueprint $table) {
            $table->unsignedInteger('eds_id');
            $table->foreign('eds_id')->references('id')->on('eds');
            $table->unsignedInteger('token_id');
            $table->foreign('token_id')->references('id')->on('tokens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eds_tokens');
    }
}
