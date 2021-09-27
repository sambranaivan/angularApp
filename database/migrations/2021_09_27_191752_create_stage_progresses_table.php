<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStageProgressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stage_progresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            ;;$table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('stage_id');
            ;;$table->foreign('stage_id')->references('id')->on('stages');;
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
        Schema::dropIfExists('stage_progresses');
    }
}
