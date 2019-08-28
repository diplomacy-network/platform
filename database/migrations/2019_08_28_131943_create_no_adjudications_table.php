<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoAdjudicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('no_adjudications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('weekday', [1, 2, 3, 4, 5, 6, 7]);
            $table->unsignedBigInteger('game_id');
            $table->timestamps();

            $table->foreign('game_id')->references('id')->on('games');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('no_adjudications');
    }
}
