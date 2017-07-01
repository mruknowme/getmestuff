<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prizes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item');
            $table->string('description');
            $table->integer('price');
            $table->integer('bought');
            $table->string('user_column');
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
        Schema::dropIfExists('prizes');
    }
}
