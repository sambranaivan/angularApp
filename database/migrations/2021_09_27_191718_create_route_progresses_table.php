<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRouteProgressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('route_progresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            ;;$table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('route_id');
            ;;$table->foreign('route_id')->references('id')->on('routes');
            $table->tinyInteger('rank')->default(1);
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
        Schema::dropIfExists('route_progresses');
    }
}
