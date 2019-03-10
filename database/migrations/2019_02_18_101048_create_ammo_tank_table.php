<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmmoTankTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ammo_tank', function (Blueprint $table) {
            $table->unsignedInteger('ammo_id');
            $table->unsignedInteger('tank_id');

            $table->primary(['ammo_id','tank_id']);

            $table->foreign('ammo_id')->references('id')->on('ammos');
            $table->foreign('tank_id')->references('id')->on('tanks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ammo_tank');
    }
}
