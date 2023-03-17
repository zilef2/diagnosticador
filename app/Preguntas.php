<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preguntas extends Model
{
    protected $fillable = [
        'nombre',
        'peso',
        'factor_interno_id',
        'sector_economico_id'
    ];

//    public function sectoresm(){return $this->belongsToMany('App\Sector_economico','sector_preguntas','pregunta_id','sector_economico_id');}
    public function sectoresm(){return $this->belongsTo('App\Sector_economico');}
    public function usersm(){return $this->belongsToMany('App\User','user_preguntas','pregunta_id','user_id');}
    public function factor_internom(){return $this->belongsTo('App\FactorInterno');}
}
