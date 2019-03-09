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
          $table->integer('user_id')->unsigned();
          $table->string('name');
          $table->string('nation');
          $table->tinyInteger('crew');
          $table->mediumInteger('hp');
          $table->integer('ammo');
          $table->text('type')->nullable();
          $table->string('mainweapon');
          $table->string('secondaryweapon');
          $table->longText('description');
          $table->timestamps();

        });

        Schema::table('tanks', function($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
