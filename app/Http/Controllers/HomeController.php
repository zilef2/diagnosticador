<?php

namespace App\Http\Controllers;

use App\FactorClaveExito;
use App\FactorInterno;
use App\Preguntas;
use Illuminate\Http\Request;
//use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;
use App\User;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $users=User::all();
        $preguntas=Preguntas::all()->where('sector_economico_id',Auth::user()->sector_id)
            ->sortBy('updated_at');
        foreach ($preguntas->toArray() as $pre){
            $vec[]=$pre['factor_interno_id'];
        }
  
        //en $vec se almacena el rango de factores internos a los que pertenece el usuario
        $FI_max=max($vec);
        $FI_min=min($vec);
        $FI=FactorInterno::all()->whereBetween('id',[$FI_min,$FI_max]);
        foreach ($FI->toArray() as $pre){
            $vec_FCE[]=$pre['factor_clave_exito_id'];
        }


        $FCE_max=max($vec_FCE);
        $FCE_min=min($vec_FCE);
        $FCE=FactorClaveExito::all()->whereBetween('id',[$FCE_min,$FCE_max]);


        $date=Carbon::now()->setTimezone('-5')->format('h');
        $datePM=Carbon::now()->setTimezone('-5')->format('A');
//        dd($date);
        if ($datePM=="AM"){
            $saludo="Buenos dias";
        }else{
            if ($date>18){
                $saludo="Buenas Noches";
            }else{
                $saludo="Buenas tardes";
            }
        }

        return view('home')->with('users', $users)
            ->with('preguntas', $preguntas)
            ->with('FCE', $FCE)
            ->with('FI', $FI)
            ->with('saludo', $saludo);

    }

    public function respuesta(Request $request){
        $user = User::find($request->userid);
//        dd($request->pregunta);
        foreach ($request->pregunta as $i => $preguntin) {
            $user->respuestini($request->userid)->attach($request->pregunta_id[$i], ['value' => intval($preguntin)]);
        }
        $user->activo=1;
        $user->save();

//        return view('adminViews.ascender_deportistas');
        return back()->with('mensaje', 'Formulario Registrado Correctamente!');
        //TODO: register completo
    }
}
