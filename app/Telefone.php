<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{

    protected $table = 'tb_telefones';

    protected $primaryKey = 'tel_in_id';

    protected $fillable = ['tel_in_ddd', 'tel_in_telefone','con_in_id'];

    protected $guarded = ['deleted_at', 'updated_at', 'created_at'];

    public function contato(){
        return $this->hasOne(Contato::class,'con_in_id');
    }

}
