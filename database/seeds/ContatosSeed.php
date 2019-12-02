<?php

use Illuminate\Database\Seeder;

class ContatosSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_contatos')->insert(
            [
                'con_in_id'                 =>1,
                'con_st_nome'               =>'Gabriel Barbosa',
                'con_st_email'              =>'gabriel.barbosa@ot.com.br',
            ]);
        $this->command->info('Contato cadastrado com sucesso');


        DB::table('tb_contatos')->insert(
            [
                'con_in_id'                 =>2,
                'con_st_nome'               =>'Bruno Henrique',
                'con_st_email'              =>'bruno.henrique@ot.com.br',
            ]);
        $this->command->info('Contato cadastrado com sucesso');

        DB::table('tb_contatos')->insert(
            [
                'con_in_id'                 =>3,
                'con_st_nome'               =>'Jorge Jesus',
                'con_st_email'              =>'jorge.jesus@ot.com.br',
            ]);
        $this->command->info('Contato cadastrado com sucesso');

        DB::table('tb_contatos')->insert(
            [
                'con_in_id'                 =>4,
                'con_st_nome'               =>'Rodrigo Caio',
                'con_st_email'              =>'rodrigo.caio@ot.com.br',
            ]);
        $this->command->info('Contato cadastrado com sucesso');
    }
}
