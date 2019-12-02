<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbContato extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_contatos', function (Blueprint $table){

            $table->increments('con_in_id')->unsigned();
            $table->string('con_st_nome',200)->nullable();
            $table->string('con_st_email',200)->nullable()->unique();

            $table->softDeletesTz();
            $table->timestampsTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_contatos');
    }
}
