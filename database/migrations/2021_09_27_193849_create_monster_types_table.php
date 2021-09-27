<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonsterTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monster_types', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('monster_id');
            $table->foreign('monster_id')->references('id')->on("monsters");
            $table->unsignedBigInteger('tipo_id');
            $table->foreign('tipo_id')->references('id')->on("tipos");
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
        Schema::dropIfExists('monster_types');
    }
}

