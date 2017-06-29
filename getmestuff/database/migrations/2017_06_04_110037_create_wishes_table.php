<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wishes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('item', 255);
            $table->string('url', 255);
            $table->json('address');
            $table->integer('amount_needed')->unsigned();
            $table->integer('current_amount')->unsigned()->default(0);
            $table->tinyInteger('priority')->unsigned()->default(1);
            $table->boolean('validated')->unsigned()->default(0);
            $table->boolean('completed')->unsigned()->default(0);
            $table->json('donated')->nullable();
            $table->json('reported')->nullable();
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
        Schema::dropIfExists('wishes');
    }
}
