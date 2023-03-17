<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sector_economico extends Model{
    public $table = 'sector_economico';
    protected $fillable = [
        'nombre',
    ];

    public function users(){return $this->hasMany('App\User');}
    public function preguntas(){return $this->hasMany('App\Preguntas');}
//    public function categorias(){
//        return $this->belongsToMany('App\Categoria','table_user_categorias');
//    }
}
