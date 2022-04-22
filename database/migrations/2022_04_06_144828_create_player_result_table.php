<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_result', function (Blueprint $table) {
            $table->integer('player_id') ->unsigned();
            $table->integer('result_id') ->unsigned();
            $table->primary(['player_id', 'result_id']);
            $table->string('role')->default('clue');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_result');
    }
}
