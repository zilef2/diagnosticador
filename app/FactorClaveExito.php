<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FactorClaveExito extends Model{
    public $table = 'factor_clave_exito';
    protected $fillable = [
        'nombre',
        'se_id'
    ];

    public function faci(){return $this->hasMany('App\FactorInterno');}
//    public function categorias(){
//        return $this->belongsToMany('App\Categoria','table_user_categorias');
//    }
}
