<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $table = 'funcionario';

    protected $guarded = ['id'];

    public function documento(){
        
        return $this->hasMany('App\Models\Documento');

    }
}
