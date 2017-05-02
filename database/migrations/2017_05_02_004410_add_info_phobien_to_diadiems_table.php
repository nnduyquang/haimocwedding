<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInfoPhobienToDiadiemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('diadiems', function (Blueprint $table) {
            $table->string('hinhdiadiem1');
            $table->string('tieude1');
            $table->string('mota1');
            $table->string('hinhdiadiem2');
            $table->string('tieude2');
            $table->string('mota2');
            $table->string('hinhdiadiem3');
            $table->string('tieude3');
            $table->string('mota3');
            $table->string('hinhnenphobien');
            $table->string('hinhnendiadiem');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('diadiems', function (Blueprint $table) {
            //
        });
    }
}
