<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Contato extends Model
{
    protected $table = 'tb_contatos';

    protected $primaryKey = 'con_in_id';

    protected $fillable = ['con_st_nome', 'con_st_email'];

    protected $guarded = ['deleted_at', 'updated_at', 'created_at'];

    public function telefones(){
        return $this->hasMany(Telefone::class,'con_in_id');
    }


    public static function listarContatos()
    {
        $query = DB::table('tb_contatos')->get();

        if(!empty($query))
        {
            return $query;
        }
            return false;
    }


    public static function nomeContatos()
    {
        $query = DB::table('tb_contatos')->get('con_st_nome');


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


}
