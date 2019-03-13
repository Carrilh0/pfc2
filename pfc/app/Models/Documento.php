<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $table = 'documento';

    protected $guarded = ['id'];


    public function usuario(){
        
        return $this->belongsTo('App\Models\Funcionario');

    }
}
