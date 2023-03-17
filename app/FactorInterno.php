<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FactorInterno extends Model{
    public $table = 'factor_interno';
    protected $fillable = [
        'nombre',
        'calificacion',
        'peso',
        'final',
        'factor_clave_exito_id',
    ];

    public function factorclaveexito(){return $this->belongsTo('App\FactorClaveExito');}
    public function preguntas(){return $this->hasMany('App\Preguntas');}

}
