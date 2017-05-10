<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhukiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phukiens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('order');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('phukiens');
    }
}
