<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonsterStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monster_stats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('stat_id');
            $table->foreign('stat_id')->references('id')->on('stats_types');
            $table->unsignedBigInteger('monster_id');
            $table->foreign('monster_id')->references('id')->on('monsters');
            // -- $table->string('string_value',20)
            $table->smallInteger('value');
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
        Schema::dropIfExists('monster_stats');
    }
}
