<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceipeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('receipe_name',200);
            $table->float('receipe_price', 6,2);
            $table->integer('receipe_cat');
            $table->integer('receipe_scat');
            $table->string('receipe_description', 500);
            $table->string('receipe_image', 255);
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
        Schema::dropIfExists('receipe');
    }
}
