<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanks', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('nation');
          $table->tinyInteger('crew');
          $table->mediumInteger('hp');
          $table->smallInteger('ammo');
          $table->text('type')->nullable();
          $table->string('mainweapon');
          $table->string('secondaryweapon');
          $table->longText('description');
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
        Schema::dropIfExists('tanks');
    }
}
