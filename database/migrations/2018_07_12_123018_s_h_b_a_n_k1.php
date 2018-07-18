<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SHBANK1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_h_banks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name'); //varchar(255)
            $table->string('last_name'); //varchar(255)
            $table->string('image');//varchar(255)
            $table->integer('date');
            $table->string('email')->unique();
            $table->integer('number');
            $table->string('office');
            $table->string('filename');
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
        Schema::dropIfExists('s_h_banks');     
    }
}
