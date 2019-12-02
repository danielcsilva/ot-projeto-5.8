<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFielPkConInIdTbTelefones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_telefones', function(Blueprint $table)
        {
            $table->integer('con_in_id')->unsigned()->nullable();
            $table->foreign('con_in_id')->references('con_in_id')->on('tb_contatos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_telefones', function (Blueprint $table) {
            $table->dropForeign(['con_in_id']);
        });
    }
}
