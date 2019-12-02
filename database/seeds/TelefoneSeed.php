<?php

use Illuminate\Database\Seeder;

class TelefoneSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_telefones')->insert(
        [
            'tel_in_id'                     =>1,
            'tel_in_ddd'                    =>'21',
            'tel_in_telefone'               =>'2222-2222',
            'con_in_id'                     =>1,
        ]);
        $this->command->info('Telefone cadastrado com sucesso');

        DB::table('tb_telefones')->insert(
        [
            'tel_in_id'                     =>2,
            'tel_in_ddd'                    =>'22',
            'tel_in_telefone'               =>'44444-4444',
            'con_in_id'                     =>1,
        ]);
        $this->command->info('Telefone cadastrado com sucesso');

        DB::table('tb_telefones')->insert(
        [
            'tel_in_id'                     =>3,
            'tel_in_ddd'                    =>'24',
            'tel_in_telefone'               =>'989811-0990',
            'con_in_id'                     =>1,
        ]);
        $this->command->info('Telefone cadastrado com sucesso');

        DB::table('tb_telefones')->insert(
        [
            'tel_in_id'                     =>4,
            'tel_in_ddd'                    =>'51',
            'tel_in_telefone'               =>'23121-2232',
            'con_in_id'                     =>1,
        ]);
        $this->command->info('Telefone cadastrado com sucesso');

        DB::table('tb_telefones')->insert(
        [
            'tel_in_id'                     =>5,
            'tel_in_ddd'                    =>'21',
            'tel_in_telefone'               =>'1111-1111',
            'con_in_id'                     =>2,
        ]);
        $this->command->info('Telefone cadastrado com sucesso');

        DB::table('tb_telefones')->insert(
        [
            'tel_in_id'                     =>6,
            'tel_in_ddd'                    =>'22',
            'tel_in_telefone'               =>'2792-2277',
            'con_in_id'                     =>2,
        ]);
        $this->command->info('Telefone cadastrado com sucesso');

        DB::table('tb_telefones')->insert(
        [
            'tel_in_id'                     =>7,
            'tel_in_ddd'                    =>'28',
            'tel_in_telefone'               =>'98991-2232',
            'con_in_id'                     =>2,
        ]);
        $this->command->info('Telefone cadastrado com sucesso');

        DB::table('tb_telefones')->insert(
        [
            'tel_in_id'                     =>8,
            'tel_in_ddd'                    =>'21',
            'tel_in_telefone'               =>'2212-2322',
            'con_in_id'                     =>3,
        ]);
        $this->command->info('Telefone cadastrado com sucesso');

        DB::table('tb_telefones')->insert(
        [
            'tel_in_id'                     =>9,
            'tel_in_ddd'                    =>'22',
            'tel_in_telefone'               =>'2989-2010',
            'con_in_id'                     =>3,
        ]);
        $this->command->info('Telefone cadastrado com sucesso');

        DB::table('tb_telefones')->insert(
        [
            'tel_in_id'                     =>10,
            'tel_in_ddd'                    =>'29',
            'tel_in_telefone'               =>'2001-2321',
            'con_in_id'                     =>3,
        ]);
        $this->command->info('Telefone cadastrado com sucesso');

        DB::table('tb_telefones')->insert(
        [
            'tel_in_id'                     =>11,
            'tel_in_ddd'                    =>'22',
            'tel_in_telefone'               =>'3211-1231',
            'con_in_id'                     =>4,
        ]);
        $this->command->info('Telefone cadastrado com sucesso');

        DB::table('tb_telefones')->insert(
        [
            'tel_in_id'                     =>12,
            'tel_in_ddd'                    =>'23',
            'tel_in_telefone'               =>'2125-1231',
            'con_in_id'                     =>4,
        ]);
        $this->command->info('Telefone cadastrado com sucesso');

        DB::table('tb_telefones')->insert(
        [
            'tel_in_id'                     =>13,
            'tel_in_ddd'                    =>'38',
            'tel_in_telefone'               =>'2132-1231',
            'con_in_id'                     =>4,
        ]);
        $this->command->info('Telefone cadastrado com sucesso');

    }
}
