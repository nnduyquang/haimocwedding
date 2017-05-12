<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropChangeIdAlbummanagerImagemanagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('imagemanagers', function (Blueprint $table) {
            $table->renameColumn('id_albummanager', 'id_album');
//            $table->integer('id_album')->unsigned()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('imagemanagers', function (Blueprint $table) {
            //
        });
    }
}
