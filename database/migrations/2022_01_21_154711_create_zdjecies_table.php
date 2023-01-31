<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZdjeciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zdjecies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nazwa');
            $table->string('nazwaPliku');
            $table->integer('user_id');
            $table->boolean('publiczne');
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
        Schema::dropIfExists('zdjecies');
    }
}
