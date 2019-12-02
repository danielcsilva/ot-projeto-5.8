<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Contato extends Model
{


    public static function listarContatos()
    {
        $query = DB::table('tb_contatos')->orderBy('con_st_nome')->get();

        if(!empty($query))
        {
            return $query;
        }
            return false;
    }


    public static function nomeContatos()
    {
        $query = DB::table('tb_contatos')->orderBy('con_st_nome')->get('con_st_nome');


        if(!empty($query))
        {
            return $query;
        }

        return false;
    }



    public static function listarTelefonesContatos()
    {
        $query = DB::table('tb_contatos')
            ->join(
                'tb_telefones',
                'tb_contatos.con_in_id',
                '=',
                'tb_telefones.con_in_id')
            ->select('tb_contatos.*','tb_telefones.*')
            ->get();

        if(!empty($query))
        {
            return $query;
        }
        return false;
    }

    public static function listarTelefonesRightContatos()
    {
        $query = DB::table('tb_contatos')
            ->rightJoin(
                'tb_telefones',
                'tb_contatos.con_in_id',
                '=',
                'tb_telefones.con_in_id')
            ->select('tb_contatos.*','tb_telefones.*')
            ->get();

        if(!empty($query))
        {
            return $query;
        }
        return false;
    }

    public static function listarTelefonesLeftContatos()
    {
        $query = DB::table('tb_contatos')
            ->leftJoin(
                'tb_telefones',
                'tb_contatos.con_in_id',
                '=',
                'tb_telefones.con_in_id')
            ->select('tb_contatos.*','tb_telefones.*')
            ->get();

        if(!empty($query))
        {
            return $query;
        }
        return false;
    }


    public static function salvarContato($dados)
    {

        if(!empty($dados) && is_array($dados))
        {

            try{
                DB::beginTransaction();

                $inset = DB::table('tb_contatos')->insert($dados);

                DB::commit();

                return  $inset;

            }catch (\Exception $exception){

                DB::rollBack();

                throw new \Exception('cadastro não concluído ## problema('.$exception->getMessage().")");

            }
        }

    }
    public static function updateContato($dados,$idContato)
    {

        if(!empty($dados) && is_array($dados))
        {

            try{
                DB::beginTransaction();

                $inset = DB::table('tb_contatos')
                    ->where('con_in_id',$idContato)
                    ->update($dados);

                DB::commit();

                return  $inset;

            }catch (\Exception $exception){

                DB::rollBack();

                throw new \Exception('cadastro não concluído ## problema('.$exception->getMessage().")");

            }
        }

    }

    public static function deleteContato($idContato)
    {

        if(!empty($idContato))
        {

            try{
                DB::beginTransaction();

                $inset = DB::table('tb_contatos')
                    ->where('con_in_id',$idContato)
                    ->delete();

                DB::commit();

                return  $inset;

            }catch (\Exception $exception){

                DB::rollBack();

                throw new \Exception('cadastro não concluído ## problema('.$exception->getMessage().")");

            }
        }

    }


}
