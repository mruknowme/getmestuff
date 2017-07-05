<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('unique_id')->unsigned();
            $table->string('email');
            $table->string('subject');
            $table->text('body');
            $table->tinyInteger('priority')->unsigned()->default(0);
            $table->tinyInteger('type')->unsigned()->default(0);
            $table->integer('user_id')->unsigned()->nullable();
            $table->boolean('is_admin')->unsigned()->default(0);
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
        Schema::dropIfExists('tickets');
    }
}
