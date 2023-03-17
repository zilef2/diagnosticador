<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','is_admin','empresa','cargo', 'activo', 'sector_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function respuestas(){
        return $this->belongsToMany('App\Preguntas','user_preguntas')
            ->withPivot('respuesta_id', 'value','user_id','pregunta_id')
            ->withTimestamps();
    }

    public function respuestini($userid){
        return $this->belongsToMany('App\Preguntas','user_preguntas','user_id','pregunta_id')
            ->wherePivot('user_id', $userid);
    }

    public static function search($query){
        return empty($query) ? static::query()
            : static::where('name', 'like', '%'.$query.'%')
                ->orWhere('email', 'like', '%'.$query.'%');
    }

    public static function navigation(){
        if (isset(Auth()->user()->id)) {
                $rol=Auth()->user()->is_admin;
                if (($rol==1)||($rol==2)) {
                    return 'admin';
                }
                if ($rol==0) return 'encues';
        }else{
            return 'guest';
        }
    }
}
