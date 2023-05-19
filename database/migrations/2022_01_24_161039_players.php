<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Players extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('player_name',250)->unique();
            $table->string('player_key',250);
            $table->string('player_tag',1000);
            $table->string('player_keywords',250);
            $table->string('player_image',1000);
            $table->string('player_team',250);
            $table->string('player_speciality',250);
            $table->string('player_position',250);
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
        //
    }
}
