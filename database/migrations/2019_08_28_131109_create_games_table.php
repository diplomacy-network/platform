<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('next_adjudication')->nullable();
            $table->string('title');
            $table->text('description')->nullable();
            $table->enum('start_mode', ['after_pregame', 'sufficient_players']);
            $table->dateTime('start_datetime');
            $table->unsignedInteger('eog'); //! This may be extended to an extra table for multiple eog conditions
            $table->unsignedBigInteger('variant_id');
            $table->enum('status',['pregame', 'adjudicating', 'orders']);

            // $table->foreign('variant_id')->references('id')->on('variants');

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
        Schema::dropIfExists('games');
    }
}
