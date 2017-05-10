<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumDiadiemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albumofdiadiem', function (Blueprint $table) {
            $table->integer('id_diadiem')->unsigned();
            $table->integer('id_album')->unsigned();
            $table->primary(['id_diadiem','id_album']);
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
        Schema::dropIfExists('album_diadiem');
    }
}
